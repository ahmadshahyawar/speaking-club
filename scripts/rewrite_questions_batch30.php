<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[246] = [ // The Rise of Co-Living Spaces
    V('Have you ever shared a kitchen with people you didn\'t know well?', 'Вы когда-нибудь делили кухню с людьми, которых плохо знали?', 'Жақсы танымайтын адамдармен ас үйді бөлісіп көрдіңіз бе?'),
    V('What is the biggest downside of co-living for you?', 'Какой самый большой минус совместного проживания для вас?', 'Сіз үшін бірге тұрудың ең үлкен кемшілігі қандай?'),
    V('Do you think co-living works better for short stays or long-term living?', 'Как вы думаете, совместное проживание лучше подходит для короткого пребывания или для долгосрочного?', 'Сіздің ойыңызша, бірге тұру қысқа мерзімге жақсы ма, әлде ұзақ мерзімге ме?'),
    V('Have you ever had a conflict over shared chores or cleaning?', 'У вас когда-нибудь был конфликт из-за общих обязанностей по дому или уборки?', 'Ортақ үй жұмысына немесе тазалыққа байланысты жанжал болды ма?'),
    V('What amenity would convince you to choose co-living over a private apartment?', 'Какое удобство убедило бы вас выбрать совместное проживание вместо отдельной квартиры?', 'Жеке пәтердің орнына бірге тұруды таңдауға қандай қолайлылық көндіре алар еді?'),
    V('Do you think co-living is more common in expensive cities?', 'Как вы думаете, совместное проживание чаще встречается в дорогих городах?', 'Сіздің ойыңызша, бірге тұру қымбат қалаларда жиірек кездесе ме?'),
    V('Would you co-live with strangers matched by an app or algorithm?', 'Вы бы стали жить с незнакомцами, подобранными приложением или алгоритмом?', 'Қосымша немесе алгоритм таңдаған бейтаныс адамдармен бірге тұрар ма едіңіз?'),
    V('Have you ever felt lonely despite living around many people?', 'Вы когда-нибудь чувствовали себя одиноко, несмотря на то, что жили среди множества людей?', 'Көп адамның арасында тұрсаңыз да жалғыз сезінгеніңіз болды ма?'),
    V('What rule would you set if you ran a co-living space?', 'Какое правило вы бы установили, если бы управляли пространством для совместного проживания?', 'Бірге тұру кеңістігін басқарсаңыз, қандай ереже орнатар едіңіз?'),
];

$NEW9[247] = [ // Sports Fandom and Identity
    V('Have you ever argued with a friend over a sports rivalry?', 'Вы когда-нибудь спорили с другом из-за спортивного соперничества?', 'Спорттық қарсыластыққа байланысты досыңызбен дауласып қалдыңыз ба?'),
    V('Do you think losing fans take defeats too personally?', 'Как вы думаете, болельщики проигравшей команды слишком лично воспринимают поражения?', 'Сіздің ойыңызша, ұтылған команданың жанкүйерлері жеңілісті тым жеке қабылдай ма?'),
    V('What is your matchday ritual, if you have one?', 'Какой у вас ритуал в день матча, если он есть?', 'Матч күні әдеттегі рәсіміңіз бар ма, қандай?'),
    V('Have you ever cried or celebrated intensely over a sports result?', 'Вы когда-нибудь плакали или бурно радовались из-за результата матча?', 'Спорттық нәтижеге байланысты жылап немесе қатты қуанып қалдыңыз ба?'),
    V('Do you think being a fan of a struggling team says something about loyalty?', 'Как вы думаете, быть болельщиком слабой команды говорит о преданности?', 'Сіздің ойыңызша, әлсіз команданың жанкүйері болу адалдық туралы бірдеңе білдіре ме?'),
    V('Would you ever switch your support to a rival team?', 'Вы бы когда-нибудь переключили свою поддержку на команду-соперника?', 'Қолдауыңызды қарсылас командаға ауыстырар ма едіңіз?'),
    V('Have you ever met a stranger and instantly bonded over supporting the same team?', 'Вы когда-нибудь встречали незнакомца и мгновенно сближались из-за поддержки одной команды?', 'Бір команданы қолдағаны үшін бейтаныс адаммен лезде тіл табысып қалдыңыз ба?'),
    V('Do you think sports fandom can go too far?', 'Как вы думаете, спортивный фанатизм может зайти слишком далеко?', 'Сіздің ойыңызша, спорттық жанкүйерлік шектен шыға ма?'),
    V('What is the most memorable match you have ever watched?', 'Какой самый запоминающийся матч вы когда-либо смотрели?', 'Көрген ең есте қалатын матчыңыз қандай болды?'),
];

$NEW9[248] = [ // The Ethics of Reality TV
    V('Have you ever wanted to appear on a reality TV show?', 'Вы когда-нибудь хотели появиться в реалити-шоу?', 'Реалити-шоуда көрінгіңіз келді ме?'),
    V('What reality show do you think crosses an ethical line?', 'Какое реалити-шоу, по-вашему, переходит этическую грань?', 'Сіздің ойыңызша, қандай реалити-шоу этикалық шекарадан асып кетеді?'),
    V('Do you think contestants fully understand what they\'re agreeing to before signing up?', 'Как вы думаете, участники полностью понимают, на что соглашаются, перед участием?', 'Сіздің ойыңызша, қатысушылар қатысуға келіскенде не нәрсеге келісетінін толық түсіне ме?'),
    V('Have you ever felt sympathy for a reality TV "villain"?', 'Вы когда-нибудь сочувствовали «злодею» реалити-шоу?', 'Реалити-шоудың "жаман кейіпкеріне" аяушылық танытқаныңыз болды ма?'),
    V('Do you think editing can completely change how a person appears on screen?', 'Как вы думаете, монтаж может полностью изменить то, как человек выглядит на экране?', 'Сіздің ойыңызша, монтаж адамның экрандағы бейнесін толығымен өзгерте ала ма?'),
    V('Would you trust a reality show contestant to represent themselves honestly?', 'Вы бы доверяли участнику реалити-шоу в том, что он честно себя представляет?', 'Реалити-шоу қатысушысының өзін адал көрсетуіне сенер ме едіңіз?'),
    V('Do you think reality TV fame changes people afterward?', 'Как вы думаете, слава от реалити-шоу меняет людей впоследствии?', 'Сіздің ойыңызша, реалити-шоу атақтылығы адамдарды кейін өзгерте ме?'),
    V('What would make you stop watching a reality show?', 'Что заставило бы вас перестать смотреть реалити-шоу?', 'Реалити-шоу көруді тоқтатуыңызға не себеп болар еді?'),
    V('Do you think audiences share responsibility for what reality TV becomes?', 'Как вы думаете, зрители несут долю ответственности за то, каким становится реалити-ТВ?', 'Сіздің ойыңызша, көрермендер реалити-ТВ-ның қандай болатынына жауапкершілік бөліседі ме?'),
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
