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

// Same palette as assets/css/backgrounds.css's bg-level-* gradients.
const LEVEL_GRADIENTS = [
    'beginner' => [[255, 154, 118], [255, 232, 176]],
    'elementary' => [[46, 134, 171], [168, 218, 220]],
    'pre-intermediate' => [[43, 16, 85], [123, 67, 151]],
    'intermediate' => [[11, 19, 43], [58, 80, 107]],
];

class LessonPDF extends TCPDF {
    public string $topicLine = '';
    public string $levelLabel = '';
    public string $matchUrl = '';
    public string $hangmanUrl = '';
    /** @var array{0: array{0:int,1:int,2:int}, 1: array{0:int,1:int,2:int}} */
    public array $bgColors = [[91, 95, 239], [118, 75, 162]];

    public function newSlidePage(): void {
        $this->AddPage();
        $pw = $this->getPageWidth();
        $ph = $this->getPageHeight();
        $this->LinearGradient(0, 0, $pw, $ph, $this->bgColors[0], $this->bgColors[1], [0, 0, 1, 1]);

        $this->SetTextColor(255, 255, 255);
        $this->SetFont('dejavusans', 'B', 14);
        $this->SetXY(15, 9);
        $this->Cell($pw - 30, 7, $this->topicLine, 0, 1, 'C');
        $this->SetFont('dejavusans', '', 8);
        $this->SetX(15);
        $this->Cell($pw - 30, 5, $this->levelLabel, 0, 1, 'C');

        if ($this->matchUrl && $this->hangmanUrl) {
            $this->SetFont('dejavusans', 'B', 9);
            $this->SetTextColorArray([255, 255, 255]);
            $this->SetXY(15, 21.5);
            $this->Cell(($pw - 30) / 2, 5, 'Play Match Online >', 0, 0, 'C', false, $this->matchUrl);
            $this->Cell(($pw - 30) / 2, 5, 'Play Hangman Online >', 0, 1, 'C', false, $this->hangmanUrl);
        }

        $this->SetDrawColorArray([255, 255, 255]);
        $this->SetLineWidth(0.2);
        $this->Line(15, 29, $pw - 15, 29);
        $this->SetY(34);
    }

    public function Footer(): void {
        $this->SetY(-15);
        $this->SetTextColor(255, 255, 255);
        $this->SetFont('dejavusans', '', 8);
        $this->Cell(0, 10, 'Page ' . $this->getAliasNumPage() . ' / ' . $this->getAliasNbPages(), 0, 0, 'C');
    }
}

$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'omarshoaibyawar.com';
$baseUrl = $scheme . '://' . $host;

$pdf = new LessonPDF('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->topicLine = $lesson['topic'];
$pdf->levelLabel = strtoupper(str_replace('-', ' ', $lesson['level']));
$pdf->bgColors = LEVEL_GRADIENTS[$lesson['level']] ?? $pdf->bgColors;
$pdf->matchUrl = $baseUrl . '/game.php?id=' . $lesson['id'] . '&type=match';
$pdf->hangmanUrl = $baseUrl . '/game.php?id=' . $lesson['id'] . '&type=hangman';
$pdf->SetCreator('Speaking Club');
$pdf->SetAuthor('Speaking Club');
$pdf->SetTitle($lesson['topic']);
$pdf->SetMargins(15, 34, 15);
$pdf->SetAutoPageBreak(false);
$pdf->SetPrintHeader(false);
$pdf->SetPrintFooter(true);

/** Draws a translucent "glass card" rectangle, TCPDF's alpha channel mimicking the site's frosted-glass boxes. */
function pdf_glass_card(TCPDF $pdf, float $x, float $y, float $w, float $h): void {
    $pdf->SetAlpha(0.32);
    $pdf->SetFillColor(0, 0, 0);
    $pdf->RoundedRect($x, $y, $w, $h, 3, '1111', 'F');
    $pdf->SetAlpha(1);
}

function pdf_measure_triple(TCPDF $pdf, float $w, ?string $en, ?string $ru, ?string $kz): float {
    $h = 4;
    if ($en) { $pdf->SetFont('dejavusans', 'B', 12); $h += $pdf->getStringHeight($w, $en) + 2; }
    $pdf->SetFont('dejavusans', '', 10);
    if ($ru) $h += $pdf->getStringHeight($w, 'RU: ' . $ru) + 1;
    if ($kz) $h += $pdf->getStringHeight($w, 'KZ: ' . $kz) + 1;
    return $h + 3;
}

function pdf_write_triple(TCPDF $pdf, float $x, float $y, float $w, ?string $en, ?string $ru, ?string $kz): void {
    $pdf->SetTextColor(255, 255, 255);
    $pdf->SetXY($x, $y);
    if ($en) {
        $pdf->SetFont('dejavusans', 'B', 12);
        $pdf->MultiCell($w, 0, $en, 0, 'L');
        $pdf->Ln(1);
    }
    $pdf->SetFont('dejavusans', '', 10);
    $pdf->SetX($x);
    if ($ru) {
        $pdf->MultiCell($w, 0, 'RU: ' . $ru, 0, 'L');
    }
    $pdf->SetX($x);
    if ($kz) {
        $pdf->MultiCell($w, 0, 'KZ: ' . $kz, 0, 'L');
    }
}

// ---- Vocabulary page ----
$pdf->newSlidePage();
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont('dejavusans', 'B', 15);
$pdf->Cell(0, 9, 'Vocabulary', 0, 1, 'C');
$pdf->Ln(2);

if ($hasVocabImages) {
    $cols = 3;
    $gap = 4;
    $usableWidth = 180;
    $cardW = ($usableWidth - $gap * ($cols - 1)) / $cols;
    $imgSize = 32;
    $imgOffsetX = ($cardW - $imgSize) / 2;
    $cardH = 3 + $imgSize + 2 + 13 + 3;
    $startX = 15;
    $y = $pdf->GetY();
    foreach ($vocab as $i => $w) {
        $col = $i % $cols;
        if ($col === 0 && $i > 0) {
            $y += $cardH + $gap;
        }
        $x = $startX + $col * ($cardW + $gap);
        pdf_glass_card($pdf, $x, $y, $cardW, $cardH);
        if (!empty($w['img'])) {
            $imgPath = __DIR__ . '/../' . $w['img'];
            if (file_exists($imgPath)) {
                $pdf->Image($imgPath, $x + $imgOffsetX, $y + 3, $imgSize, $imgSize, '', '', '', false, 300, '', false, false, 0, 'CM');
            }
        }
        $pdf->SetTextColor(255, 255, 255);
        $pdf->SetXY($x + 2, $y + 3 + $imgSize + 2);
        $pdf->SetFont('dejavusans', 'B', 9.5);
        $pdf->MultiCell($cardW - 4, 4, (string)($w['en'] ?? ''), 0, 'C', false, 1, '', '', true, 0, false, true, 0, 'M');
        $pdf->SetX($x + 2);
        $pdf->SetFont('dejavusans', '', 8);
        $pdf->MultiCell($cardW - 4, 3.5, trim(($w['ru'] ?? '') . ' / ' . ($w['kz'] ?? ''), ' /'), 0, 'C');
    }
} else {
    $rowH = 8;
    $colW = [55, 62.5, 62.5];
    $startX = 15;
    $y = $pdf->GetY();
    pdf_glass_card($pdf, $startX, $y, array_sum($colW), $rowH * (count($vocab) + 1));
    $pdf->SetTextColor(255, 255, 255);
    $pdf->SetFont('dejavusans', 'B', 10);
    $pdf->SetXY($startX, $y + 1);
    $pdf->Cell($colW[0], $rowH, 'English', 0, 0, 'L');
    $pdf->Cell($colW[1], $rowH, 'Russian', 0, 0, 'L');
    $pdf->Cell($colW[2], $rowH, 'Kazakh', 0, 1, 'L');
    $pdf->SetFont('dejavusans', '', 10);
    foreach ($vocab as $w) {
        $pdf->SetX($startX);
        $pdf->Cell($colW[0], $rowH, (string)($w['en'] ?? ''), 0, 0, 'L');
        $pdf->Cell($colW[1], $rowH, (string)($w['ru'] ?? ''), 0, 0, 'L');
        $pdf->Cell($colW[2], $rowH, (string)($w['kz'] ?? ''), 0, 1, 'L');
    }
}

// ---- Warm-up page ----
if (trim((string)($warmup['en'] ?? '')) !== '') {
    $pdf->newSlidePage();
    $pdf->SetTextColor(255, 255, 255);
    $pdf->SetFont('dejavusans', 'B', 15);
    $pdf->Cell(0, 9, "Let's talk about it", 0, 1, 'C');
    $pdf->Ln(4);

    $cardW = 180;
    $textW = $cardW - 12;
    $h = pdf_measure_triple($pdf, $textW, $warmup['en'] ?? '', $warmup['ru'] ?? '', $warmup['kz'] ?? '');
    $x = 15;
    $y = $pdf->GetY();
    pdf_glass_card($pdf, $x, $y, $cardW, $h);
    pdf_write_triple($pdf, $x + 6, $y + 3, $textW, $warmup['en'] ?? '', $warmup['ru'] ?? '', $warmup['kz'] ?? '');
}

// ---- Question pages: exactly two per page, mirroring the on-screen slides ----
$total = count($questions);
for ($i = 0; $i < $total; $i += 2) {
    $pdf->newSlidePage();
    $pdf->SetTextColor(255, 255, 255);
    $pdf->SetFont('dejavusans', '', 9);
    $label = 'Questions ' . ($i + 1) . (isset($questions[$i + 1]) ? '–' . ($i + 2) : '') . ' of ' . $total;
    $pdf->Cell(0, 6, $label, 0, 1, 'C');
    $pdf->Ln(4);

    $cardW = 180;
    $textW = $cardW - 12;
    $x = 15;

    foreach ([$i, $i + 1] as $qi) {
        if (!isset($questions[$qi])) continue;
        $q = $questions[$qi];
        $y = $pdf->GetY();
        $bodyH = pdf_measure_triple($pdf, $textW, $q['en'] ?? '', $q['ru'] ?? '', $q['kz'] ?? '');
        $cardH = $bodyH + 8;
        pdf_glass_card($pdf, $x, $y, $cardW, $cardH);

        $pdf->SetTextColor(255, 255, 255);
        $pdf->SetFont('dejavusans', 'B', 9);
        $pdf->SetXY($x + 4, $y + 3);
        $pdf->Cell(8, 6, ($qi + 1) . '.', 0, 0, 'L');
        pdf_write_triple($pdf, $x + 12, $y + 3, $textW - 6, $q['en'] ?? '', $q['ru'] ?? '', $q['kz'] ?? '');

        $pdf->SetY($y + $cardH + 6);
    }
}

$safeName = preg_replace('/[^A-Za-z0-9\-]+/', '-', $lesson['topic']);
$pdf->Output($safeName . '.pdf', 'D');
