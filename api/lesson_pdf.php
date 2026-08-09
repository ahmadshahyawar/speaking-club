<?php
declare(strict_types=1);
// PDF download is available to any logged-in teacher (present + PDF are the
// two things non-admin teachers are allowed to do), so this only requires
// login, not admin.
require_once __DIR__ . '/../includes/auth.php';

require_login();

$id = (int)($_GET['id'] ?? 0);
$stmt = db()->prepare('SELECT * FROM lessons WHERE id = ?');
$stmt->execute([$id]);
$lesson = $stmt->fetch();

if (!$lesson) {
    http_response_code(404);
    die('Lesson not found.');
}

$vocab = json_decode($lesson['vocab'], true) ?: [];
$warmup = json_decode($lesson['warmup'], true) ?: ['en' => '', 'ru' => '', 'kz' => ''];
$questions = json_decode($lesson['questions'], true) ?: [];

// Vocab pictures: mirror present.php's logic so the PDF matches the on-screen design.
$hasVocabImages = false;
if (in_array($lesson['level'], ['beginner', 'elementary'], true) && $vocab) {
    $words = array_map(static fn($w) => mb_strtolower(trim($w['en'])), $vocab);
    $placeholders = implode(',', array_fill(0, count($words), '?'));
    $imgStmt = db()->prepare("SELECT word, image_path FROM vocab_images WHERE word IN ($placeholders)");
    $imgStmt->execute($words);
    $imageMap = [];
    foreach ($imgStmt->fetchAll() as $row) {
        $imageMap[$row['word']] = $row['image_path'];
    }
    foreach ($vocab as &$w) {
        $key = mb_strtolower(trim($w['en']));
        if (isset($imageMap[$key])) {
            $w['img'] = $imageMap[$key];
            $hasVocabImages = true;
        }
    }
    unset($w);
}

require_once __DIR__ . '/../vendor/tcpdf/config/tcpdf_config.php';
require_once __DIR__ . '/../vendor/tcpdf/tcpdf.php';

class LessonPDF extends TCPDF {
    public string $topicLine = '';

    public function Header(): void {
        $this->SetFont('dejavusans', 'B', 14);
        $this->Cell(0, 10, $this->topicLine, 0, 1, 'C');
        $this->SetLineWidth(0.3);
        $this->Line(15, 22, 195, 22);
        $this->Ln(4);
    }

    public function Footer(): void {
        $this->SetY(-15);
        $this->SetFont('dejavusans', '', 8);
        $this->Cell(0, 10, 'Page ' . $this->getAliasNumPage() . ' / ' . $this->getAliasNbPages(), 0, 0, 'C');
    }
}

$pdf = new LessonPDF('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->topicLine = $lesson['topic'] . ' — ' . ucfirst(str_replace('-', ' ', $lesson['level']));
$pdf->SetCreator('Speaking Club');
$pdf->SetAuthor('Speaking Club');
$pdf->SetTitle($lesson['topic']);
$pdf->SetMargins(15, 26, 15);
$pdf->SetAutoPageBreak(true, 18);
$pdf->AddPage();

function pdf_section_title(TCPDF $pdf, string $title): void {
    $pdf->SetFont('dejavusans', 'B', 13);
    $pdf->SetFillColor(91, 95, 239);
    $pdf->SetTextColor(255, 255, 255);
    $pdf->Cell(0, 9, $title, 0, 1, 'L', true);
    $pdf->SetTextColor(30, 30, 30);
    $pdf->Ln(2);
}

function pdf_triple_block(TCPDF $pdf, ?string $en, ?string $ru, ?string $kz): void {
    if ($en) {
        $pdf->SetFont('dejavusans', 'B', 11);
        $pdf->MultiCell(0, 6, $en, 0, 'L');
    }
    $pdf->SetFont('dejavusans', '', 10);
    if ($ru) {
        $pdf->MultiCell(0, 5.5, 'RU: ' . $ru, 0, 'L');
    }
    if ($kz) {
        $pdf->MultiCell(0, 5.5, 'KZ: ' . $kz, 0, 'L');
    }
    $pdf->Ln(3);
}

// Vocabulary
pdf_section_title($pdf, 'Vocabulary');
if ($hasVocabImages) {
    $cols = 3;
    $gap = 4;
    $usableWidth = 180;
    $cardW = ($usableWidth - $gap * ($cols - 1)) / $cols;
    $imgSize = 35;
    $imgOffsetX = ($cardW - $imgSize) / 2;
    $cardH = 3 + $imgSize + 3 + 13 + 3;
    $startX = 15;
    $y = $pdf->GetY();
    foreach ($vocab as $i => $w) {
        $col = $i % $cols;
        if ($col === 0 && $i > 0) {
            $y += $cardH + $gap;
        }
        if ($y + $cardH > $pdf->getPageHeight() - 20) {
            $pdf->AddPage();
            $y = $pdf->GetY();
        }
        $x = $startX + $col * ($cardW + $gap);
        $pdf->SetFillColor(245, 245, 250);
        $pdf->Rect($x, $y, $cardW, $cardH, 'F');
        if (!empty($w['img'])) {
            $imgPath = __DIR__ . '/../' . $w['img'];
            if (file_exists($imgPath)) {
                $pdf->Image($imgPath, $x + $imgOffsetX, $y + 3, $imgSize, $imgSize, '', '', '', false, 300, '', false, false, 0, 'CM');
            }
        }
        $pdf->SetXY($x + 2, $y + 3 + $imgSize + 2);
        $pdf->SetFont('dejavusans', 'B', 9.5);
        $pdf->MultiCell($cardW - 4, 4, (string)($w['en'] ?? ''), 0, 'C', false, 1, '', '', true, 0, false, true, 0, 'M');
        $pdf->SetX($x + 2);
        $pdf->SetFont('dejavusans', '', 8);
        $pdf->MultiCell($cardW - 4, 3.5, trim(($w['ru'] ?? '') . ' / ' . ($w['kz'] ?? ''), ' /'), 0, 'C');
    }
    $pdf->SetY($y + $cardH + 8);
} else {
    $pdf->SetFont('dejavusans', 'B', 10);
    $pdf->SetFillColor(230, 230, 245);
    $colW = [55, 65, 65];
    $pdf->Cell($colW[0], 7, 'English', 1, 0, 'L', true);
    $pdf->Cell($colW[1], 7, 'Russian', 1, 0, 'L', true);
    $pdf->Cell($colW[2], 7, 'Kazakh', 1, 1, 'L', true);
    $pdf->SetFont('dejavusans', '', 10);
    $fill = false;
    foreach ($vocab as $w) {
        $pdf->SetFillColor(245, 245, 250);
        $pdf->Cell($colW[0], 7, (string)($w['en'] ?? ''), 1, 0, 'L', $fill);
        $pdf->Cell($colW[1], 7, (string)($w['ru'] ?? ''), 1, 0, 'L', $fill);
        $pdf->Cell($colW[2], 7, (string)($w['kz'] ?? ''), 1, 1, 'L', $fill);
        $fill = !$fill;
    }
    $pdf->Ln(6);
}

// Warm-up
if (trim((string)($warmup['en'] ?? '')) !== '') {
    pdf_section_title($pdf, "Let's talk about it");
    pdf_triple_block($pdf, $warmup['en'] ?? '', $warmup['ru'] ?? '', $warmup['kz'] ?? '');
}

// Questions
pdf_section_title($pdf, 'Discussion Questions');
foreach ($questions as $i => $q) {
    $pdf->SetFont('dejavusans', 'B', 10.5);
    $pdf->Write(6, ($i + 1) . '. ');
    pdf_triple_block($pdf, $q['en'] ?? '', $q['ru'] ?? '', $q['kz'] ?? '');
}

$safeName = preg_replace('/[^A-Za-z0-9\-]+/', '-', $lesson['topic']);
$pdf->Output($safeName . '.pdf', 'D');
