<?php
declare(strict_types=1);
$configPath = '/home/u856637812/config/speaking_club_config.php';
$cfg = require $configPath;
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$username = $argv[1] ?? null;
if (!$username) { fwrite(STDERR, "Usage: php seed_lessons_batch12.php <teacher_username>\n"); exit(1); }
$stmt = $pdo->prepare('SELECT id FROM teachers WHERE username = ?');
$stmt->execute([$username]);
$teacher = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$teacher) { fwrite(STDERR, "Teacher not found: $username\n"); exit(1); }
$teacherId = (int)$teacher['id'];
function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }
$lessons = [];

// ========================= BEGINNER (batch 12) — 15 questions per topic =========================

$lessons[] = ['level' => 'beginner', 'topic' => 'Talking About Sizes of Cities', 'background_key' => 'night-city',
    'warmup' => V("Let's talk about city sizes. Do you prefer living in a big city or a small town?", 'Давайте поговорим о размерах городов. Вы предпочитаете жить в большом городе или маленьком городке?', 'Қала өлшемдері туралы сөйлесейік. Үлкен қалада тұрғанды ұнатасыз ба, әлде кішкентай қалашықта ма?'),
    'vocab' => [V('big city', 'большой город', 'үлкен қала'), V('small town', 'маленький городок', 'кішкентай қалашық'), V('population', 'население', 'халық саны'), V('crowded', 'многолюдный', 'адам көп'), V('skyscraper', 'небоскрёб', 'аспан тіреуіш'), V('countryside', 'сельская местность', 'ауыл жері'), V('capital city', 'столица', 'астана'), V('village', 'деревня', 'ауыл'), V('suburb', 'пригород', 'қала маңы'), V('downtown', 'центр города', 'қала орталығы')],
    'questions' => [
        V('Do you prefer living in a big city or a small town?', 'Вы предпочитаете жить в большом городе или маленьком городке?', 'Үлкен қалада тұрғанды ұнатасыз ба, әлде кішкентай қалашықта ма?'),
        V('Is your city crowded most of the time?', 'Ваш город многолюден большую часть времени?', 'Қалаңыз көп уақыт адам көп бола ма?'),
        V('Have you ever visited a capital city?', 'Вы когда-нибудь посещали столицу?', 'Астанаға бардыңыз ба?'),
        V('Do you like tall skyscrapers?', 'Вам нравятся высокие небоскрёбы?', 'Биік аспан тіреуіштерді ұнатасыз ба?'),
        V('Would you rather live in the countryside or downtown?', 'Вы бы предпочли жить в сельской местности или в центре города?', 'Ауыл жерінде тұрғанды қалайсыз ба, әлде қала орталығында ма?'),
        V('Have you ever visited a small village?', 'Вы когда-нибудь посещали маленькую деревню?', 'Кішкентай ауылға бардыңыз ба?'),
        V('Do you know the population of your city?', 'Вы знаете население своего города?', 'Қалаңыздың халық санын білесіз бе?'),
        V('Do you live in the suburbs or downtown?', 'Вы живёте в пригороде или в центре города?', 'Қала маңында тұрасыз ба, әлде орталықта ма?'),
        V('Is life slower in small towns, in your opinion?', 'Жизнь медленнее в маленьких городках, по-вашему?', 'Сіздің ойыңызша, кішкентай қалашықтарда өмір баяу ма?'),
        V('Would you feel lost in a very big city?', 'Вы бы почувствовали себя потерянным в очень большом городе?', 'Өте үлкен қалада адасқандай сезінер ме едіңіз?'),
        V('Do you think small towns have a stronger community feeling?', 'Как вы думаете, в маленьких городках сильнее чувство общности?', 'Кішкентай қалашықтарда қауымдастық сезімі күштірек пе деп ойлайсыз ба?'),
        V('Have you ever moved from a small town to a big city, or the opposite?', 'Вы когда-нибудь переезжали из маленького городка в большой город, или наоборот?', 'Кішкентай қалашықтан үлкен қалаға көштіңіз бе, әлде керісінше ме?'),
        V('Do you think big cities offer more opportunities?', 'Как вы думаете, большие города предлагают больше возможностей?', 'Үлкен қалалар көбірек мүмкіндік ұсынады деп ойлайсыз ба?'),
        V('Would you like to visit the biggest city in the world?', 'Хотели бы вы посетить самый большой город в мире?', 'Әлемдегі ең үлкен қалаға баруды қалайсыз ба?'),
        V('What size of city feels most comfortable to you?', 'Какой размер города вам кажется наиболее комфортным?', 'Сізге қандай өлшемдегі қала ең ыңғайлы көрінеді?'),
    ],
];

require __DIR__ . '/seed_lessons_batch12_part2.php';
