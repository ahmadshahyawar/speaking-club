<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[181] = [ // Public Art and Graffiti
    V('Have you ever created any kind of art yourself?', 'Вы когда-нибудь сами создавали какое-либо искусство?', 'Өзіңіз бір өнер туындысын жасадыңыз ба?'),
    V('Do you think graffiti can send powerful political messages?', 'Как вы думаете, граффити может передавать сильные политические послания?', 'Сіздің ойыңызша, граффити күшті саяси хабар бере ала ма?'),
    V('What is the most impressive public art you have ever seen?', 'Какое самое впечатляющее общественное искусство вы когда-либо видели?', 'Көрген ең әсерлі көпшілік өнері қандай болды?'),
    V('Should property owners have the right to remove graffiti immediately?', 'Должны ли владельцы недвижимости иметь право немедленно удалять граффити?', 'Меншік иелерінің граффитиді дереу алып тастауға құқығы болуы керек пе?'),
    V('Do you think graffiti artists deserve recognition as real artists?', 'Как вы думаете, художники граффити заслуживают признания как настоящие художники?', 'Сіздің ойыңызша, граффити суретшілері нағыз суретші ретінде танылуға лайық па?'),
    V('Have you ever visited a city known for its street art?', 'Вы когда-нибудь посещали город, известный своим уличным искусством?', 'Көше өнерімен танымал қалаға бардыңыз ба?'),
    V('What message would you paint if you had a blank wall?', 'Какое послание вы бы нарисовали, если бы у вас была пустая стена?', 'Бос қабырғаңыз болса, қандай хабарды салар едіңіз?'),
    V('Do you think public art increases the value of a neighborhood?', 'Как вы думаете, общественное искусство повышает ценность района?', 'Сіздің ойыңызша, көпшілік өнері ауданның құнын арттыра ма?'),
    V('Would you support using public funds to remove all graffiti?', 'Вы бы поддержали использование государственных средств для удаления всех граффити?', 'Барлық граффитиді жою үшін мемлекеттік қаражатты пайдалануды қолдар ма едіңіз?'),
];

$NEW9[182] = [ // The Etiquette of Tipping
    V('Have you ever tipped even when the service was bad?', 'Вы когда-нибудь давали чаевые, даже если сервис был плохим?', 'Қызмет нашар болса да сый ақы бердіңіз бе?'),
    V('Do you think tipping culture varies too much between countries?', 'Как вы думаете, культура чаевых слишком различается между странами?', 'Сіздің ойыңызша, елдер арасында сый ақы мәдениеті тым көп ерекшелене ме?'),
    V('Have you ever worked a job where you relied on tips?', 'Вы когда-нибудь работали на работе, где зависели от чаевых?', 'Сый ақыға тәуелді жұмыста істедіңіз бе?'),
    V('Do you tip delivery drivers the same as restaurant servers?', 'Вы даёте чаевые доставщикам так же, как официантам?', 'Жеткізушілерге мейрамхана даяшыларына бергендей сый ақы бересіз бе?'),
    V('What would you do if you couldn\'t afford to tip at a restaurant?', 'Что бы вы сделали, если бы не могли позволить себе чаевые в ресторане?', 'Мейрамханада сый ақы беруге қаржыңыз жетпесе, не істер едіңіз?'),
    V('Do you think digital tipping options have changed tipping habits?', 'Как вы думаете, цифровые варианты чаевых изменили привычки чаевых?', 'Сіздің ойыңызша, цифрлық сый ақы опциялары сый ақы беру әдеттерін өзгертті ме?'),
    V('Have you ever been confused about tipping in another country?', 'Вы когда-нибудь путались с чаевыми в другой стране?', 'Басқа елде сый ақыға байланысты шатасып қалдыңыз ба?'),
    V('Do you think tipping should be optional or included automatically?', 'Как вы думаете, чаевые должны быть добровольными или включаться автоматически?', 'Сіздің ойыңызша, сый ақы ерікті болуы керек пе, әлде автоматты қосылуы керек пе?'),
    V('What is a fair percentage to tip, in your opinion?', 'Какой справедливый процент чаевых, по-вашему?', 'Сіздің ойыңызша, әділ сый ақы пайызы қандай?'),
];

$NEW9[183] = [ // Living with Roommates
    V('Have you ever had to find a new roommate quickly?', 'Вам когда-нибудь приходилось быстро искать нового соседа по квартире?', 'Жаңа пәтерлесті тез табуға тура келді ме?'),
    V('What is your biggest pet peeve about sharing a living space?', 'Что вас больше всего раздражает в совместном проживании?', 'Тұрғын үйді бөлісуде сізді ең көп тітіркендіретін не нәрсе?'),
    V('Do you think roommates should be friends first, or is that not necessary?', 'Как вы думаете, соседи по квартире сначала должны быть друзьями, или это не обязательно?', 'Сіздің ойыңызша, пәтерлестер алдымен дос болуы керек пе, әлде бұл міндетті емес пе?'),
    V('Have you ever had a roommate who became a lifelong friend?', 'У вас когда-нибудь был сосед по квартире, ставший другом на всю жизнь?', 'Өмірлік досқа айналған пәтерлесіңіз болды ма?'),
    V('What household chore do you think causes the most roommate arguments?', 'Какая домашняя работа, по-вашему, вызывает больше всего споров между соседями?', 'Сіздің ойыңызша, пәтерлестер арасында ең көп дау тудыратын үй жұмысы қандай?'),
    V('Would you live with a stranger to save money?', 'Вы бы жили с незнакомцем, чтобы сэкономить деньги?', 'Ақша үнемдеу үшін бейтаныс адаммен тұрар ма едіңіз?'),
    V('Do you think it\'s better to set rules early, or let them develop naturally?', 'Как вы думаете, лучше установить правила заранее или дать им сложиться естественно?', 'Сіздің ойыңызша, ережелерді ерте орнатқан жақсы ма, әлде табиғи қалыптасуына жол берген жақсы ма?'),
    V('Have you ever had to confront a roommate about something uncomfortable?', 'Вам когда-нибудь приходилось поговорить с соседом о чём-то неудобном?', 'Пәтерлесіңізбен ыңғайсыз мәселе туралы сөйлесуге тура келді ме?'),
    V('What would your ideal roommate be like?', 'Каким был бы ваш идеальный сосед по квартире?', 'Сіздің тамаша пәтерлесіңіз қандай болар еді?'),
];

$NEW9[184] = [ // The World of Podcasts
    V('Have you ever discovered a podcast through a friend\'s recommendation?', 'Вы когда-нибудь находили подкаст по рекомендации друга?', 'Досыңыздың ұсынысы арқылы подкаст таптыңыз ба?'),
    V('Do you listen to podcasts while doing other activities?', 'Вы слушаете подкасты, занимаясь другими делами?', 'Басқа әрекет жасап жатып подкаст тыңдайсыз ба?'),
    V('What topic do you wish more podcasts covered?', 'Какую тему вы хотели бы, чтобы больше подкастов освещали?', 'Көбірек подкаст қамтығанын қалайтын тақырып қандай?'),
    V('Have you ever disagreed with something said on a podcast?', 'Вы когда-нибудь не соглашались с тем, что говорилось в подкасте?', 'Подкастта айтылған нәрсемен келіспей қалдыңыз ба?'),
    V('Do you think podcasts are replacing traditional radio?', 'Как вы думаете, подкасты заменяют традиционное радио?', 'Сіздің ойыңызша, подкасттар дәстүрлі радионы алмастырып жатыр ма?'),
    V('What is the longest podcast episode you have ever listened to?', 'Какой самый длинный эпизод подкаста вы когда-либо слушали?', 'Тыңдаған ең ұзақ подкаст эпизоды қандай болды?'),
    V('Do you prefer podcasts with one host or multiple hosts?', 'Вы предпочитаете подкасты с одним ведущим или с несколькими?', 'Бір жүргізушісі бар подкастты ұнатасыз ба, әлде бірнешеуін ба?'),
    V('Have you ever stopped listening to a podcast because of the host\'s opinions?', 'Вы когда-нибудь переставали слушать подкаст из-за мнений ведущего?', 'Жүргізушінің пікіріне байланысты подкастты тыңдауды тоқтаттыңыз ба?'),
    V('What makes a podcast worth subscribing to for you?', 'Что делает подкаст достойным подписки для вас?', 'Сіз үшін подкастқа жазылуға тұрарлық ететін не нәрсе?'),
];

$NEW9[185] = [ // Second-Hand and Vintage Shopping
    V('Do you feel comfortable telling people your clothes are second-hand?', 'Вам комфортно говорить людям, что ваша одежда с рук?', 'Киіміңіздің қолданылған екенін адамдарға айту сізге ыңғайлы ма?'),
    V('Have you ever sold your own clothes or items second-hand?', 'Вы когда-нибудь продавали свою одежду или вещи с рук?', 'Өз киіміңізді немесе заттарыңызды қолданылған ретінде сатып көрдіңіз бе?'),
    V('What item do you think is best to buy new rather than used?', 'Какую вещь, по-вашему, лучше покупать новой, а не подержанной?', 'Сіздің ойыңызша, қолданылғанның орнына жаңасын сатып алған жақсы зат қандай?'),
    V('Do you enjoy the hunt for finding good deals second-hand?', 'Вам нравится искать выгодные предложения на вещи с рук?', 'Қолданылған заттардан тиімді баға іздеуді ұнатасыз ба?'),
    V('Have you ever been disappointed by something bought second-hand?', 'Вы когда-нибудь разочаровывались в вещи, купленной с рук?', 'Қолданылған сатып алған затыңызға көңіліңіз қалды ма?'),
    V('Do you think vintage fashion will always stay popular?', 'Как вы думаете, винтажная мода всегда будет популярна?', 'Сіздің ойыңызша, винтаж сән әрдайым танымал бола ма?'),
    V('What is the oldest item you own that still works well?', 'Какая самая старая вещь, которой вы владеете, всё ещё хорошо работает?', 'Иеленген, әлі жақсы жұмыс істейтін ең ескі затыңыз қандай?'),
    V('Do you shop second-hand online or only in physical stores?', 'Вы покупаете вещи с рук онлайн или только в обычных магазинах?', 'Қолданылған затты онлайн сатып аласыз ба, әлде тек әдеттегі дүкендерден бе?'),
    V('Would you buy a second-hand gift for someone else?', 'Вы бы купили подержанный подарок для кого-то другого?', 'Біреуге қолданылған сыйлық сатып алар ма едіңіз?'),
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
