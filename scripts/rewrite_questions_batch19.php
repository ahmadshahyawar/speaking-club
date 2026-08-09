<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[32] = [ // Crime and Safety
    V('Do you think crime rates are increasing or decreasing in your country?', 'Как вы думаете, уровень преступности в вашей стране растёт или снижается?', 'Сіздің ойыңызша, еліңізде қылмыс деңгейі өсіп жатыр ма, әлде азайып жатыр ма?'),
    V('Have you ever been a victim of crime?', 'Вы когда-нибудь были жертвой преступления?', 'Қылмыс құрбаны болдыңыз ба?'),
    V('Do you think police forces have enough resources to keep people safe?', 'Как вы думаете, у полиции достаточно ресурсов, чтобы обеспечивать безопасность людей?', 'Сіздің ойыңызша, полицияда адамдардың қауіпсіздігін сақтауға жеткілікті ресурс бар ма?'),
    V('What is your opinion on the death penalty?', 'Каково ваше мнение о смертной казни?', 'Өлім жазасы туралы пікіріңіз қандай?'),
    V('Should citizens be allowed to carry weapons for self-defense?', 'Должны ли гражданам разрешать носить оружие для самозащиты?', 'Азаматтарға өзін-өзі қорғау үшін қару алып жүруге рұқсат берілуі керек пе?'),
    V('Do you think surveillance cameras make people feel safer or more watched?', 'Как вы думаете, камеры наблюдения заставляют людей чувствовать себя безопаснее или под наблюдением?', 'Сіздің ойыңызша, бақылау камералары адамдарды қауіпсіз сезіндіре ме, әлде бақыланып отырғандай ма?'),
    V('Have you ever changed your behavior because you felt unsafe?', 'Вы когда-нибудь меняли своё поведение, потому что чувствовали себя небезопасно?', 'Қауіпсіз сезінбегендіктен мінез-құлқыңызды өзгерттіңіз бе?'),
    V('What crime do you think is the most serious problem today?', 'Какое преступление, по-вашему, самая серьёзная проблема сегодня?', 'Сіздің ойыңызша, бүгінгі ең маңызды қылмыс мәселесі қандай?'),
    V('Do you trust the justice system in your country?', 'Вы доверяете судебной системе в вашей стране?', 'Еліңіздегі әділет жүйесіне сенесіз бе?'),
];

$NEW9[33] = [ // Travel Experiences Abroad
    V('Have you ever felt homesick while traveling?', 'Вы когда-нибудь скучали по дому во время путешествия?', 'Саяхаттап жүргенде үйіңізді сағындыңыз ба?'),
    V('What is the most valuable lesson a trip has taught you?', 'Какой самый ценный урок вам преподала поездка?', 'Сапар үйреткен ең құнды сабақ қандай болды?'),
    V('Do you prefer traveling to well-known destinations or hidden gems?', 'Вы предпочитаете путешествовать в известные места или малоизвестные жемчужины?', 'Танымал орындарға саяхаттауды ұнатасыз ба, әлде жасырын әдемі жерлерге ме?'),
    V('Have you ever had a travel plan completely fall apart?', 'У вас когда-нибудь полностью срывался план поездки?', 'Сапар жоспарыңыз мүлдем бұзылды ма?'),
    V('What country left the biggest impression on you, and why?', 'Какая страна произвела на вас самое большое впечатление и почему?', 'Сізге ең үлкен әсер қалдырған ел қайсы және неге?'),
    V('Do you think travel changes a person\'s perspective permanently?', 'Как вы думаете, путешествия навсегда меняют мировоззрение человека?', 'Сіздің ойыңызша, саяхат адамның көзқарасын мәңгі өзгерте ме?'),
    V('Have you ever made a lasting friendship while traveling?', 'Вы когда-нибудь заводили долгую дружбу во время путешествия?', 'Саяхаттап жүргенде ұзақ мерзімді достық орнаттыңыз ба?'),
    V('What is one travel experience you would like to repeat?', 'Какой опыт путешествия вы хотели бы повторить?', 'Қайталағыңыз келетін сапар тәжірибеңіз қандай?'),
    V('Do you think travel is more about relaxation or personal growth?', 'Как вы думаете, путешествия больше про отдых или личностный рост?', 'Сіздің ойыңызша, саяхат демалу туралы ма, әлде жеке даму туралы ма?'),
];

$update = $pdo->prepare("UPDATE lessons SET questions = ? WHERE id = ?");
$fixed = 0;
foreach ($NEW9 as $id => $newNine) {
    $stmt = $pdo->prepare("SELECT questions FROM lessons WHERE id = ?");
    $stmt->execute([$id]);
    $row = $stmt->fetch();
    if (!$row) { echo "MISSING id $id\n"; continue; }
    $questions = json_decode($row['questions'], true);
    $original6 = array_slice($questions, 0, 6);
    $merged = array_merge($original6, $newNine);
    if (count($merged) !== 15) { echo "COUNT MISMATCH id $id: " . count($merged) . "\n"; continue; }
    $update->execute([json_encode($merged, JSON_UNESCAPED_UNICODE), $id]);
    $fixed++;
}
echo "Fixed: $fixed\n";
