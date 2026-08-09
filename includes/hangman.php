<?php
declare(strict_types=1);

const HANGMAN_STOPWORDS = ['the','and','that','with','your','have','has','had','having','this','what','does','do','did','you','are','is','was','were','will','would','could','should','can','cant','they','them','their','there','here','when','where','why','how','who','which','more','most','some','any','all','each','other','than','then','also','just','only','very','much','many','been','being','into','from','out','upon','over','under','between','about','after','before','during','without','within','again','ever','never','always','sometimes','often','usually','really','actually','maybe','perhaps','personal','favorite','favourite','opinion','experience','think','feel','believe','remember','know','want','like','love','enjoy','prefer','share','talk','talking','discuss','describe','explain','mention','consider','imagine','suppose','something','someone','anything','anyone','everything','everyone','nothing','things','thing','people','person','life','time','times','make','made','making','doing','done','going','goes','went','gone','because','since','while','though','although','still','even','such','same','different','important','interesting','difficult','easy','good','bad','best','worst','first','last','next','new','old','let','lets',"let's",'yourself','yours','myself','ourselves','themselves'];

function extract_hangman_words(string $warmupEn, array $questionsEn, array $vocabWords, int $seed): array {
    $stop = array_flip(HANGMAN_STOPWORDS);
    $vocabLower = array_map('mb_strtolower', $vocabWords);

    $sentences = [];
    foreach (array_merge([$warmupEn], $questionsEn) as $text) {
        foreach (preg_split('/(?<=[.?!])\s+/', trim((string)$text)) as $s) {
            $s = trim($s);
            if ($s !== '') $sentences[] = $s;
        }
    }

    $candidates = [];
    foreach ($sentences as $sentence) {
        preg_match_all("/[A-Za-z']+/", $sentence, $m);
        foreach ($m[0] as $word) {
            $lw = mb_strtolower($word);
            if (mb_strlen($lw) < 4) continue;
            if (isset($stop[$lw])) continue;
            if (in_array($lw, $vocabLower, true)) continue;
            if (!isset($candidates[$lw])) {
                $candidates[$lw] = $sentence;
            }
        }
    }

    $keys = array_keys($candidates);
    mt_srand($seed);
    shuffle($keys);
    $chosen = array_slice($keys, 0, 5);

    $result = [];
    foreach ($chosen as $w) {
        $sentence = $candidates[$w];
        $clue = preg_replace('/\b' . preg_quote($w, '/') . '\b/i', str_repeat('▢', mb_strlen($w)), $sentence);
        $result[] = ['word' => $w, 'clue' => $clue];
    }
    return $result;
}
