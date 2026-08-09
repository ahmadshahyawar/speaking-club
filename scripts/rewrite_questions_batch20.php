<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[64] = [ // Health and Fitness Trends
    V('Do you think social media promotes unhealthy body standards?', 'Как вы думаете, соцсети продвигают нездоровые стандарты тела?', 'Сіздің ойыңызша, әлеуметтік желі денсаулыққа зиянды дене стандарттарын насихаттай ма?'),
    V('Have you ever tried a fitness trend that didn\'t work for you?', 'Вы когда-нибудь пробовали фитнес-тренд, который вам не подошёл?', 'Сізге сай келмеген фитнес трендін сынап көрдіңіз бе?'),
    V('Do you think intermittent fasting or other diet trends are effective?', 'Как вы думаете, интервальное голодание или другие диетические тренды эффективны?', 'Сіздің ойыңызша, кезектесіп аштық ұстау немесе басқа диета трендтері тиімді ме?'),
    V('What role does mental health play in overall fitness?', 'Какую роль играет психическое здоровье в общей физической форме?', 'Психикалық денсаулық жалпы фитнесте қандай рөл атқарады?'),
    V('Do you follow fitness influencers online?', 'Вы следите за фитнес-блогерами онлайн?', 'Онлайн фитнес-инфлюенсерлерін бақылайсыз ба?'),
    V('Is it healthy to exercise every single day?', 'Полезно ли заниматься спортом каждый день?', 'Күн сайын жаттығу денсаулыққа пайдалы ма?'),
    V('What fitness goal have you never managed to achieve?', 'Какую фитнес-цель вам так и не удалось достичь?', 'Ешқашан жете алмаған фитнес мақсатыңыз бар ма?'),
    V('Do you think gyms are becoming too expensive for average people?', 'Как вы думаете, спортзалы становятся слишком дорогими для обычных людей?', 'Сіздің ойыңызша, спортзалдар қарапайым адамдар үшін тым қымбаттап жатыр ма?'),
    V('Would you try a completely new sport to get fit?', 'Вы бы попробовали совершенно новый вид спорта, чтобы быть в форме?', 'Пішінде болу үшін мүлдем жаңа спорт түрін сынап көрер ме едіңіз?'),
];

$NEW9[65] = [ // The World of Work
    V('Do you think remote work is better than working in an office?', 'Как вы думаете, удалённая работа лучше работы в офисе?', 'Сіздің ойыңызша, қашықтан жұмыс офисте жұмыс істеуден жақсы ма?'),
    V('Have you ever disagreed with a decision made by your boss?', 'Вы когда-нибудь не соглашались с решением своего начальника?', 'Бастығыңыздың шешімімен келіспей қалдыңыз ба?'),
    V('What is the most important lesson you learned from a difficult job?', 'Какой самый важный урок вы извлекли из трудной работы?', 'Қиын жұмыстан алған ең маңызды сабағыңыз қандай?'),
    V('Do you think work-life balance is achievable in most careers?', 'Как вы думаете, баланс между работой и жизнью достижим в большинстве профессий?', 'Сіздің ойыңызша, көптеген мамандықтарда жұмыс пен өмір теңгерімі мүмкін бе?'),
    V('Have you ever mentored someone younger in their career?', 'Вы когда-нибудь были наставником для кого-то моложе в карьере?', 'Мансабында өзіңізден кіші адамға тәлімгер болдыңыз ба?'),
    V('What workplace habit annoys you the most?', 'Какая привычка на работе раздражает вас больше всего?', 'Жұмыс орнындағы ең тітіркендіретін әдет қандай?'),
    V('Do you think promotions are usually based on merit?', 'Как вы думаете, повышения обычно основаны на заслугах?', 'Сіздің ойыңызша, лауазым көтерілуі әдетте еңбекке негізделе ме?'),
    V('Would you rather have a high salary or meaningful work?', 'Вы бы предпочли высокую зарплату или значимую работу?', 'Жоғары жалақыны қалайсыз ба, әлде мәнді жұмысты ма?'),
    V('What does professional success look like to you?', 'Как для вас выглядит профессиональный успех?', 'Сіз үшін кәсіби табыс дегеніміз қандай?'),
];

$NEW9[66] = [ // Consumerism and Advertising
    V('Have you ever bought something purely because of an advertisement?', 'Вы когда-нибудь покупали что-то исключительно из-за рекламы?', 'Тек жарнамаға байланысты бір затты сатып алдыңыз ба?'),
    V('Do you think social media ads are more effective than TV ads?', 'Как вы думаете, реклама в соцсетях эффективнее телевизионной?', 'Сіздің ойыңызша, әлеуметтік желідегі жарнама теледидар жарнамасынан тиімдірек пе?'),
    V('What product do you think is overpriced due to marketing alone?', 'Какой продукт, по-вашему, переоценён только из-за маркетинга?', 'Сіздің ойыңызша, тек маркетингке байланысты бағасы асырылған өнім қандай?'),
    V('Do you skip ads whenever possible?', 'Вы пропускаете рекламу, когда это возможно?', 'Мүмкіндік болса, жарнаманы өткізіп жібересіз бе?'),
    V('Have you ever felt tricked by misleading advertising?', 'Вы когда-нибудь чувствовали себя обманутым вводящей в заблуждение рекламой?', 'Жаңылыстыратын жарнамамен алданған сияқты сезіндіңіз бе?'),
    V('Do you think influencer marketing is honest advertising?', 'Как вы думаете, маркетинг через блогеров — честная реклама?', 'Сіздің ойыңызша, инфлюенсерлер арқылы маркетинг адал жарнама ма?'),
    V('What makes an advertisement annoying to you?', 'Что делает рекламу раздражающей для вас?', 'Жарнаманы сіз үшін тітіркендіретін не нәрсе?'),
    V('Do you think companies should be more transparent about their products?', 'Как вы думаете, компании должны быть более прозрачными в отношении своих продуктов?', 'Сіздің ойыңызша, компаниялар өнімдері туралы ашықырақ болуы керек пе?'),
    V('Would you boycott a brand because of unethical advertising?', 'Вы бы бойкотировали бренд из-за неэтичной рекламы?', 'Әдепсіз жарнамаға байланысты бренге бойкот жариялар ма едіңіз?'),
];

$NEW9[67] = [ // Urban vs Rural Life
    V('Have you ever lived in both a city and a rural area?', 'Вы когда-нибудь жили и в городе, и в сельской местности?', 'Сіз қалада да, ауыл жерінде де тұрып көрдіңіз бе?'),
    V('Do you think job opportunities are better in cities?', 'Как вы думаете, возможности трудоустройства лучше в городах?', 'Сіздің ойыңызша, жұмыс мүмкіндіктері қалаларда жақсырақ па?'),
    V('What do you miss most about rural life if you live in a city, or vice versa?', 'Чего вам больше всего не хватает в сельской жизни, если вы живёте в городе, или наоборот?', 'Қалада тұрсаңыз, ауыл өмірінен ең көп нені сағынасыз, немесе керісінше?'),
    V('Do you think rural areas are being left behind economically?', 'Как вы думаете, сельские районы экономически отстают?', 'Сіздің ойыңызша, ауыл аудандары экономикалық жағынан артта қалып жатыр ма?'),
    V('Would you raise children in a city or in the countryside?', 'Вы бы растили детей в городе или в сельской местности?', 'Балаларды қалада тәрбиелер ме едіңіз, әлде ауыл жерінде ме?'),
    V('Is access to healthcare a bigger challenge in rural areas?', 'Доступ к здравоохранению — большая проблема в сельских районах?', 'Ауыл аудандарында денсаулық сақтауға қол жеткізу үлкен қиындық па?'),
    V('Do you think city dwellers are less connected to nature?', 'Как вы думаете, городские жители менее связаны с природой?', 'Сіздің ойыңызша, қала тұрғындарының табиғатпен байланысы аз ба?'),
    V('What would convince you to move from a city to the countryside?', 'Что убедило бы вас переехать из города в сельскую местность?', 'Қаладан ауыл жеріне көшуге сізді не иландырар еді?'),
    V('Do you think technology is closing the gap between urban and rural life?', 'Как вы думаете, технологии сокращают разрыв между городской и сельской жизнью?', 'Сіздің ойыңызша, технология қалалық және ауылдық өмір арасындағы алшақтықты қысқарта ма?'),
];

$NEW9[68] = [ // Generation Gap
    V('Do you think each generation repeats the mistakes of the last?', 'Как вы думаете, каждое поколение повторяет ошибки предыдущего?', 'Сіздің ойыңызша, әрбір буын алдыңғының қатесін қайталай ма?'),
    V('Have you ever had a disagreement with an older relative about values?', 'У вас когда-нибудь были разногласия со старшим родственником по поводу ценностей?', 'Құндылықтар туралы үлкен туысыңызбен келіспей қалдыңыз ба?'),
    V('What advice from an older generation turned out to be true?', 'Какой совет от старшего поколения оказался верным?', 'Егде буынның қандай кеңесі дұрыс болып шықты?'),
    V('Do you think younger generations are more open-minded?', 'Как вы думаете, молодое поколение более открытое?', 'Сіздің ойыңызша, жас буын көзқарасы кеңірек пе?'),
    V('Have you ever felt misunderstood by an older or younger person?', 'Вы когда-нибудь чувствовали себя непонятым старшим или младшим человеком?', 'Үлкен немесе кіші адаммен түсінісе алмағаныңызды сезіндіңіз бе?'),
    V('What tradition do you think should continue for future generations?', 'Какую традицию, по-вашему, следует сохранить для будущих поколений?', 'Сіздің ойыңызша, болашақ ұрпақ үшін қандай дәстүр жалғасуы керек?'),
    V('Do older and younger people communicate differently today?', 'Сегодня старшие и младшие люди общаются по-разному?', 'Бүгінде егде және жас адамдар басқаша қарым-қатынас жасай ма?'),
    V('What do you think your generation will be remembered for?', 'За что, по-вашему, будут помнить ваше поколение?', 'Сіздің ойыңызша, буыныңыз немен есте қалады?'),
    V('Do you think generational conflict is natural, or avoidable?', 'Как вы думаете, конфликт поколений естественен или его можно избежать?', 'Сіздің ойыңызша, буындар арасындағы қақтығыс табиғи ма, әлде болдырмауға бола ма?'),
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
