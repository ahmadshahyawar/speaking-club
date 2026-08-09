<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[124] = [ // The History of the Internet
    V('Have you ever used a website or app that no longer exists?', 'Вы когда-нибудь пользовались сайтом или приложением, которого больше не существует?', 'Енді жоқ сайтты немесе қосымшаны пайдаланғаныңыз болды ма?'),
    V('Do you think the early internet was more creative than today\'s internet?', 'Как вы думаете, ранний интернет был более креативным, чем сегодняшний?', 'Сіздің ойыңызша, алғашқы интернет қазіргіден шығармашылырақ болды ма?'),
    V('What was your first experience going online?', 'Каким был ваш первый опыт выхода в интернет?', 'Интернетке алғаш кірген тәжірибеңіз қандай болды?'),
    V('Do you think privacy was better protected before social media existed?', 'Как вы думаете, конфиденциальность лучше защищалась до появления соцсетей?', 'Сіздің ойыңызша, әлеуметтік желі пайда болғанға дейін жекеменшік жақсырақ қорғалды ма?'),
    V('Have you ever explained how the internet works to an older relative?', 'Вы когда-нибудь объясняли, как работает интернет, старшему родственнику?', 'Үлкен туысыңызға интернеттің қалай жұмыс істейтінін түсіндірдіңіз бе?'),
    V('What internet invention are you most grateful for?', 'За какое интернет-изобретение вы больше всего благодарны?', 'Қай интернет өнертабысына ең алғысты сезінесіз?'),
    V('Do you think the internet has made people more or less connected emotionally?', 'Как вы думаете, интернет сделал людей более или менее эмоционально связанными?', 'Сіздің ойыңызша, интернет адамдарды эмоционалды тұрғыда көбірек байланыстырды ма, әлде азырақ па?'),
    V('Have you ever felt nostalgic about old websites or internet trends?', 'Вы когда-нибудь испытывали ностальгию по старым сайтам или интернет-трендам?', 'Ескі сайттар немесе интернет трендтеріне сағыныш сезіндіңіз бе?'),
    V('What internet rule or law do you think should exist but doesn\'t?', 'Какое правило или закон об интернете, по-вашему, должно существовать, но его нет?', 'Сіздің ойыңызша, қандай интернет ережесі немесе заңы болуы керек, бірақ жоқ?'),
];

$NEW9[125] = [ // Extreme Sports and Risk-Taking
    V('Have you ever talked someone out of doing something risky?', 'Вы когда-нибудь отговаривали кого-то от рискованного поступка?', 'Біреуді тәуекелді әрекеттен қайтардыңыз ба?'),
    V('Do you think extreme sports athletes are brave or reckless?', 'Как вы думаете, спортсмены экстремальных видов спорта смелые или безрассудные?', 'Сіздің ойыңызша, экстремалды спортшылар батыл ма, әлде байыпсыз ба?'),
    V('What extreme sport looks the most terrifying to you?', 'Какой экстремальный вид спорта кажется вам самым пугающим?', 'Сізге ең қорқынышты көрінетін экстремалды спорт қайсы?'),
    V('Have you ever regretted taking a risk?', 'Вы когда-нибудь жалели о том, что рискнули?', 'Тәуекел еткеніңізге өкіндіңіз бе?'),
    V('Do you think insurance companies should cover injuries from extreme sports?', 'Как вы думаете, страховые компании должны покрывать травмы от экстремальных видов спорта?', 'Сіздің ойыңызша, сақтандыру компаниялары экстремалды спорттан алған жарақаттарды жабуы керек пе?'),
    V('What is the safest way to try something risky for the first time?', 'Какой самый безопасный способ впервые попробовать что-то рискованное?', 'Тәуекелді нәрсені алғаш рет сынаудың ең қауіпсіз жолы қандай?'),
    V('Have you ever watched someone get injured doing an extreme sport?', 'Вы когда-нибудь видели, как кто-то получил травму, занимаясь экстремальным спортом?', 'Біреудің экстремалды спортпен айналысып жарақат алғанын көрдіңіз бе?'),
    V('Do you think age should limit who can try extreme sports?', 'Как вы думаете, возраст должен ограничивать, кто может заниматься экстремальным спортом?', 'Сіздің ойыңызша, жас экстремалды спортпен айналысуға шек қоюы керек пе?'),
    V('What is a risk you took that turned out to be worth it?', 'Какой риск, на который вы пошли, оказался оправданным?', 'Барғаныңызға тұрарлық болып шыққан тәуекеліңіз бар ма?'),
];

$NEW9[126] = [ // The Future of Transportation
    V('Do you think public transportation will become free in the future?', 'Как вы думаете, общественный транспорт станет бесплатным в будущем?', 'Сіздің ойыңызша, болашақта қоғамдық көлік тегін бола ма?'),
    V('Have you ever ridden in an electric vehicle?', 'Вы когда-нибудь ездили на электромобиле?', 'Электр көлігінде жүрдіңіз бе?'),
    V('What transportation technology excites you the most?', 'Какая транспортная технология вас больше всего впечатляет?', 'Сізді ең көп қуантатын көлік технологиясы қандай?'),
    V('Do you think fewer people will own personal cars in the future?', 'Как вы думаете, в будущем меньше людей будет владеть личными машинами?', 'Сіздің ойыңызша, болашақта аз адам жеке көлікке ие бола ма?'),
    V('Would you take a driverless taxi if it was cheaper than a normal one?', 'Вы бы взяли беспилотное такси, если бы оно было дешевле обычного?', 'Жүргізушісіз такси әдеттегіден арзан болса, оны пайдаланар ма едіңіз?'),
    V('What is your biggest concern about self-driving vehicles?', 'Что вас больше всего беспокоит в беспилотных автомобилях?', 'Өзін-өзі басқаратын көліктер туралы сізді ең көп не алаңдатады?'),
    V('Do you think air travel will become more affordable or more expensive?', 'Как вы думаете, авиаперелёты станут доступнее или дороже?', 'Сіздің ойыңызша, әуе саяхаты қолжетімдірек бола ма, әлде қымбаттай ма?'),
    V('Have you ever used an app to rent a bike or scooter?', 'Вы когда-нибудь пользовались приложением, чтобы арендовать велосипед или самокат?', 'Велосипед немесе самокат жалдау үшін қосымша пайдаландыңыз ба?'),
    V('What would convince you to stop using a car altogether?', 'Что убедило бы вас полностью отказаться от машины?', 'Көлікті мүлдем пайдаланбауға сізді не иландырар еді?'),
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
