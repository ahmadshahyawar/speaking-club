<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[34] = [ // Globalization
    V('Have you ever bought something specifically because it was made locally?', 'Вы когда-нибудь покупали что-то именно потому, что это было сделано местно?', 'Жергілікті жерде жасалғаны үшін арнайы бір нәрсе сатып алдыңыз ба?'),
    V('Do you think your country\'s culture is losing anything to globalization?', 'Как вы думаете, культура вашей страны что-то теряет из-за глобализации?', 'Сіздің ойыңызша, еліңіздің мәдениеті жаһандануға байланысты бірдеңеден айырыла ма?'),
    V('Would you support tariffs to protect a struggling local industry?', 'Вы бы поддержали пошлины для защиты страдающей местной отрасли?', 'Қиындықта тұрған жергілікті саланы қорғау үшін кедендік баждарды қолдар ма едіңіз?'),
    V('Have you ever worked with colleagues from many different countries?', 'Вы когда-нибудь работали с коллегами из многих разных стран?', 'Көптеген түрлі елдерден келген әріптестермен жұмыс істедіңіз бе?'),
    V('Do you think globalization has made the world more equal or less equal?', 'Как вы думаете, глобализация сделала мир более равным или менее равным?', 'Сіздің ойыңызша, жаһандану әлемді теңірек етті ме, әлде теңсіздеу ме?'),
    V('What global brand do you think has changed your country the most?', 'Какой глобальный бренд, по-вашему, больше всего изменил вашу страну?', 'Сіздің ойыңызша, еліңізді ең көп өзгерткен жаһандық бренд қандай?'),
    V('Have you ever felt that a foreign company understood your culture poorly?', 'Вы когда-нибудь чувствовали, что иностранная компания плохо понимает вашу культуру?', 'Шетелдік компанияның мәдениетіңізді нашар түсінгенін сезіндіңіз бе?'),
    V('Do you think a single global language would be a good thing?', 'Как вы думаете, единый мировой язык был бы хорошей вещью?', 'Сіздің ойыңызша, бір ғаламдық тіл болу жақсы нәрсе бола ма?'),
    V('What is one local tradition you would hate to see disappear?', 'Какая одна местная традиция, вы бы не хотели, чтобы исчезла?', 'Жоғалып кетуін қаламайтын бір жергілікті дәстүріңіз қандай?'),
];

$NEW9[35] = [ // Artificial Intelligence and the Future
    V('Have you ever used an AI tool that impressed you?', 'Вы когда-нибудь использовали инструмент ИИ, который вас впечатлил?', 'Сізді таңғалдырған ЖИ құралын пайдаландыңыз ба?'),
    V('Do you think artists should be paid when AI is trained on their work?', 'Как вы думаете, художникам должны платить, когда ИИ обучается на их работах?', 'Сіздің ойыңызша, ЖИ олардың жұмысымен оқытылғанда суретшілерге ақы төленуі керек пе?'),
    V('Would you let an AI choose your career path for you?', 'Вы бы позволили ИИ выбрать за вас карьерный путь?', 'ЖИ-ге мансап жолыңызды өзіңіз үшін таңдауға рұқсат берер ме едіңіз?'),
    V('Have you ever caught an AI system making a clear mistake?', 'Вы когда-нибудь замечали, что система ИИ делает явную ошибку?', 'ЖИ жүйесінің анық қате жіберіп жатқанын байқадыңыз ба?'),
    V('Do you think children should learn to work alongside AI in school?', 'Как вы думаете, дети должны учиться работать вместе с ИИ в школе?', 'Сіздің ойыңызша, балалар мектепте ЖИ-мен бірге жұмыс істеуді үйренуі керек пе?'),
    V('What task do you hope AI never takes over?', 'Какую задачу вы надеетесь ИИ никогда не заберёт?', 'ЖИ ешқашан алмастырмасын деп үміттенетін тапсырмаңыз қандай?'),
    V('Have you ever felt uneasy talking to a chatbot instead of a human?', 'Вы когда-нибудь чувствовали себя неловко, разговаривая с чат-ботом вместо человека?', 'Адамның орнына чат-ботпен сөйлескенде ыңғайсыз сезіндіңіз бе?'),
    V('Do you think AI companies are being honest about the risks?', 'Как вы думаете, компании ИИ честны насчёт рисков?', 'Сіздің ойыңызша, ЖИ компаниялары тәуекелдер туралы адал ме?'),
    V('What would convince you to fully trust an AI-made decision?', 'Что убедило бы вас полностью доверять решению, принятому ИИ?', 'ЖИ қабылдаған шешімге толық сенуге не көндіре алар еді?'),
];

$NEW9[36] = [ // Mental Health and Wellbeing
    V('Have you ever taken a mental health day off work or school?', 'Вы когда-нибудь брали выходной день для психического здоровья на работе или в школе?', 'Жұмыстан немесе оқудан психикалық денсаулық үшін демалыс алдыңыз ба?'),
    V('Do you think social media affects mental health more positively or negatively?', 'Как вы думаете, социальные сети влияют на психическое здоровье больше положительно или отрицательно?', 'Сіздің ойыңызша, әлеуметтік желілер психикалық денсаулыққа оң әсер ете ме, әлде теріс пе?'),
    V('Have you ever supported a friend going through a difficult time?', 'Вы когда-нибудь поддерживали друга, переживающего трудное время?', 'Қиын кезеңнен өтіп жатқан досты қолдадыңыз ба?'),
    V('What activity genuinely relaxes you after a stressful day?', 'Какое занятие по-настоящему расслабляет вас после напряжённого дня?', 'Күйзелісті күннен кейін сізді шынымен тыныштандыратын әрекет қандай?'),
    V('Do you think men and women experience stigma around mental health differently?', 'Как вы думаете, мужчины и женщины по-разному сталкиваются со стигмой вокруг психического здоровья?', 'Сіздің ойыңызша, ерлер мен әйелдер психикалық денсаулыққа қатысты стигманы әртүрлі бастан кеше ме?'),
    V('Have you ever tried therapy or counseling?', 'Вы когда-нибудь пробовали терапию или консультирование?', 'Терапия немесе кеңес алуды көрдіңіз бе?'),
    V('Do you think workplaces do enough to prevent burnout?', 'Как вы думаете, рабочие места делают достаточно для предотвращения выгорания?', 'Сіздің ойыңызша, жұмыс орындары шаршаудың алдын алу үшін жеткілікті іс істей ме?'),
    V('What would you tell someone who is afraid to seek help?', 'Что бы вы сказали тому, кто боится обратиться за помощью?', 'Көмек сұрауға қорқатын адамға не айтар едіңіз?'),
    V('Do you think mental health awareness has actually improved in recent years?', 'Как вы думаете, осведомлённость о психическом здоровье действительно улучшилась за последние годы?', 'Сіздің ойыңызша, соңғы жылдары психикалық денсаулық туралы хабардарлық шынымен жақсарды ма?'),
];

$NEW9[37] = [ // Work-Life Balance
    V('Have you ever missed an important personal event because of work?', 'Вы когда-нибудь пропускали важное личное событие из-за работы?', 'Жұмысқа байланысты маңызды жеке іс-шараны өткізіп алдыңыз ба?'),
    V('Do you think unlimited vacation policies actually help employees?', 'Как вы думаете, политика неограниченного отпуска действительно помогает сотрудникам?', 'Сіздің ойыңызша, шексіз демалыс саясаты қызметкерлерге шынымен көмектесе ме?'),
    V('Have you ever turned down a promotion to protect your personal time?', 'Вы когда-нибудь отказывались от повышения, чтобы защитить своё личное время?', 'Жеке уақытыңызды сақтау үшін мансаптық өсуден бас тарттыңыз ба?'),
    V('What does your ideal working week look like?', 'Как выглядит ваша идеальная рабочая неделя?', 'Сіздің тамаша жұмыс аптаңыз қандай болар еді?'),
    V('Do you think a four-day work week would improve people\'s lives?', 'Как вы думаете, четырёхдневная рабочая неделя улучшила бы жизнь людей?', 'Сіздің ойыңызша, төрт күндік жұмыс аптасы адамдардың өмірін жақсартар ма еді?'),
    V('Have you ever worked while on holiday?', 'Вы когда-нибудь работали во время отпуска?', 'Демалыста жүріп жұмыс істедіңіз бе?'),
    V('Do you think work-life balance gets harder as people get older?', 'Как вы думаете, баланс между работой и личной жизнью становится труднее с возрастом?', 'Сіздің ойыңызша, адамдар егде тартқан сайын жұмыс пен өмір теңгерімі қиындай ма?'),
    V('What is one boundary you wish you could set at work?', 'Какую одну границу вы бы хотели установить на работе?', 'Жұмыста орнатқыңыз келетін бір шекара қандай?'),
    V('Do you think companies genuinely care about employee wellbeing?', 'Как вы думаете, компании действительно заботятся о благополучии сотрудников?', 'Сіздің ойыңызша, компаниялар қызметкерлердің әл-ауқатына шынымен қамқорлық жасай ма?'),
];

$NEW9[38] = [ // Climate Change
    V('Have you ever changed a habit specifically because of climate concerns?', 'Вы когда-нибудь меняли привычку именно из-за проблем климата?', 'Климатқа қатысты алаңдаушылыққа байланысты арнайы әдетіңізді өзгерттіңіз бе?'),
    V('Do you think your generation will experience the effects of climate change directly?', 'Как вы думаете, ваше поколение непосредственно ощутит последствия изменения климата?', 'Сіздің ойыңызша, сіздің ұрпағыңыз климат өзгерісінің салдарын тікелей сезіне ме?'),
    V('Would you pay more for products that are environmentally friendly?', 'Вы бы платили больше за экологически чистые продукты?', 'Экологиялық таза өнімдер үшін көбірек төлер ме едіңіз?'),
    V('Have you ever taken part in an environmental protest or cleanup?', 'Вы когда-нибудь участвовали в экологическом протесте или уборке?', 'Экологиялық наразылыққа немесе тазалау шарасына қатыстыңыз ба?'),
    V('Do you think nuclear energy is a good solution to climate change?', 'Как вы думаете, ядерная энергия — хорошее решение проблемы изменения климата?', 'Сіздің ойыңызша, ядролық энергия климат өзгерісіне жақсы шешім бе?'),
    V('What everyday convenience would you give up to help the environment?', 'От какого повседневного удобства вы бы отказались ради окружающей среды?', 'Қоршаған ортаға көмектесу үшін қандай күнделікті қолайлылықтан бас тартар едіңіз?'),
    V('Do you trust companies that advertise themselves as "eco-friendly"?', 'Вы доверяете компаниям, которые рекламируют себя как «экологически чистые»?', 'Өздерін "экологиялық таза" деп жарнамалайтын компанияларға сенесіз бе?'),
    V('Have you ever felt overwhelmed by news about climate change?', 'Вы когда-нибудь чувствовали себя подавленным новостями об изменении климата?', 'Климат өзгерісі туралы жаңалықтардан қысыла бастадыңыз ба?'),
    V('Do you think future generations will judge us harshly for how we handled this?', 'Как вы думаете, будущие поколения будут судить нас строго за то, как мы с этим справились?', 'Сіздің ойыңызша, болашақ ұрпақ мұны қалай шешкенімізді қатаң бағалай ма?'),
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
