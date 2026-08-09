<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[94] = [ // Weekend Plans
    V('What did you do last weekend?', 'Что вы делали в прошлые выходные?', 'Өткен демалыс күндері не істедіңіз?'),
    V('Do you usually spend money on weekends?', 'Вы обычно тратите деньги по выходным?', 'Демалыс күндері әдетте ақша жұмсайсыз ба?'),
    V('Do you prefer relaxing at home or being active outside?', 'Вы предпочитаете отдыхать дома или быть активным на улице?', 'Үйде демалғанды ұнатасыз ба, әлде сыртта белсенді болғанды ма?'),
    V('What is something you always do on Saturday morning?', 'Что вы всегда делаете утром в субботу?', 'Сенбі күні таңертең әрдайым не істейсіз?'),
    V('Do you make plans with friends or family for the weekend?', 'Вы строите планы с друзьями или семьёй на выходные?', 'Демалыс күндеріне достарыңызбен немесе отбасыңызбен жоспар құрасыз ба?'),
    V('Have you ever wasted a whole weekend doing nothing?', 'Вы когда-нибудь тратили все выходные впустую, ничего не делая?', 'Бүкіл демалысты еш нәрсе істемей өткізіп алдыңыз ба?'),
    V('What is a weekend activity you have never tried?', 'Какое занятие на выходных вы никогда не пробовали?', 'Демалыс күндері ешқашан сынап көрмеген әрекетіңіз қандай?'),
    V('Do you feel tired or refreshed after the weekend?', 'Вы чувствуете усталость или бодрость после выходных?', 'Демалыстан кейін өзіңізді шаршаған сезінесіз бе, әлде сергіген бе?'),
    V('Is Friday night part of your weekend?', 'Вечер пятницы для вас часть выходных?', 'Жұма кешi сіз үшін демалыстың бір бөлігі ме?'),
];

$NEW9[95] = [ // Simple Chores at Home
    V('What chore do you dislike the most?', 'Какую домашнюю работу вы больше всего не любите?', 'Үй жұмысының қайсысын ең аз ұнатасыз?'),
    V('Do you make your bed every morning?', 'Вы заправляете кровать каждое утро?', 'Күн сайын таңертең төсегіңізді жинайсыз ба?'),
    V('Who does the shopping in your home?', 'Кто в вашей семье ходит за покупками?', 'Үйіңізде сауда жасауды кім істейді?'),
    V('Do you clean before guests arrive?', 'Вы убираетесь перед приходом гостей?', 'Қонақтар келер алдында тазалайсыз ба?'),
    V('What chore takes you the longest to finish?', 'Какая домашняя работа занимает у вас больше всего времени?', 'Аяқтауға ең көп уақыт кететін үй жұмысы қандай?'),
    V('Do you and your family share the chores fairly?', 'Вы и ваша семья справедливо делите домашние дела?', 'Сіз бен отбасыңыз үй жұмыстарын әділ бөлісесіз бе?'),
    V('Have you ever forgotten to do an important chore?', 'Вы когда-нибудь забывали сделать важное домашнее дело?', 'Маңызды үй жұмысын істеуді ұмытып кеттіңіз бе?'),
    V('Do you listen to music while doing chores?', 'Вы слушаете музыку во время домашних дел?', 'Үй жұмысын істеп жатқанда музыка тыңдайсыз ба?'),
    V('What chore would you like to do less often?', 'Какую домашнюю работу вы хотели бы делать реже?', 'Қандай үй жұмысын сирек істегіңіз келеді?'),
];

$NEW9[96] = [ // Basic Shapes and Sizes
    V('What shape is your dinner table?', 'Какой формы у вас обеденный стол?', 'Ас үстеліңіздің пішіні қандай?'),
    V('Do you prefer big cars or small cars?', 'Вы предпочитаете большие машины или маленькие?', 'Үлкен көлікті ұнатасыз ба, әлде кішкентайды ма?'),
    V('Is your phone screen big or small?', 'Экран вашего телефона большой или маленький?', 'Телефоныңыздың экраны үлкен бе, әлде кіші ме?'),
    V('What is a round object you use every day?', 'Какой круглый предмет вы используете каждый день?', 'Күн сайын пайдаланатын дөңгелек затыңыз қандай?'),
    V('Do you like wearing loose clothes or tight clothes?', 'Вам нравится носить свободную одежду или облегающую?', 'Бос киім киюді ұнатасыз ба, әлде тар киімді ме?'),
    V('What is the smallest room in your house?', 'Какая самая маленькая комната в вашем доме?', 'Үйіңіздегі ең кішкентай бөлме қайсы?'),
    V('Are your city\'s streets wide enough for traffic?', 'Улицы вашего города достаточно широкие для движения?', 'Қалаңыздың көшелері көлік қозғалысына жеткілікті кең бе?'),
    V('Do you notice the shapes of buildings around you?', 'Вы замечаете формы зданий вокруг себя?', 'Айналаңыздағы ғимараттардың пішінін байқайсыз ба?'),
    V('Would you rather live in a tall building or a small house?', 'Вы бы предпочли жить в высоком здании или маленьком доме?', 'Биік ғимаратта тұрғанды қалайсыз ба, әлде кішкентай үйде ме?'),
];

$NEW9[97] = [ // Talking About Jobs
    V('How many hours a day do you work?', 'Сколько часов в день вы работаете?', 'Күніне қанша сағат жұмыс істейсіз?'),
    V('Do you like your coworkers?', 'Вам нравятся ваши коллеги?', 'Әріптестеріңізді ұнатасыз ба?'),
    V('What skills are important for your job?', 'Какие навыки важны для вашей работы?', 'Жұмысыңыз үшін қандай дағдылар маңызды?'),
    V('Do you wear special clothes for your job?', 'Вы носите специальную одежду для работы?', 'Жұмысыңыз үшін арнайы киім киесіз бе?'),
    V('Have you ever worked a part-time job?', 'Вы когда-нибудь работали на неполной ставке?', 'Толық емес жұмыс күнінде істеп көрдіңіз бе?'),
    V('What is the hardest part of your job?', 'Какая часть вашей работы самая трудная?', 'Жұмысыңыздың ең қиын бөлігі қандай?'),
    V('Do you get paid vacation from your job?', 'У вас на работе есть оплачиваемый отпуск?', 'Жұмысыңызда ақылы демалыс бар ма?'),
    V('Would you recommend your job to a friend?', 'Вы бы порекомендовали свою работу другу?', 'Жұмысыңызды досыңызға ұсынар ма едіңіз?'),
    V('What job would you never want to do?', 'Какую работу вы бы никогда не хотели делать?', 'Ешқашан істегіңіз келмейтін жұмыс қандай?'),
];

$NEW9[98] = [ // Common Adjectives
    V('Is your neighborhood quiet or noisy?', 'Ваш район тихий или шумный?', 'Ауданыңыз тыныш па, әлде шулы ма?'),
    V('Do you consider yourself patient or impatient?', 'Вы считаете себя терпеливым или нетерпеливым?', 'Өзіңізді шыдамды деп санайсыз ба, әлде шыдамсыз ба?'),
    V('Is your favorite food sweet, spicy, or salty?', 'Ваша любимая еда сладкая, острая или солёная?', 'Сүйікті тағамыңыз тәтті ме, ащы ма, әлде тұзды ма?'),
    V('Are you usually early or late?', 'Вы обычно приходите рано или опаздываете?', 'Әдетте ерте келесіз бе, әлде кешігесіз бе?'),
    V('Do you prefer expensive quality or cheap prices?', 'Вы предпочитаете дорогое качество или низкие цены?', 'Қымбат сапаны ұнатасыз ба, әлде арзан бағаны ма?'),
    V('Is your job interesting or boring?', 'Ваша работа интересная или скучная?', 'Жұмысыңыз қызықты ма, әлде жалықтырушы ма?'),
    V('Are your friends funny or serious?', 'Ваши друзья весёлые или серьёзные?', 'Достарыңыз күлкілі ме, әлде байсалды ма?'),
    V('Do you feel strong or tired after exercise?', 'Вы чувствуете себя сильным или уставшим после тренировки?', 'Жаттығудан кейін өзіңізді күшті сезінесіз бе, әлде шаршаған ба?'),
    V('Is your hometown modern or old-fashioned?', 'Ваш родной город современный или старомодный?', 'Туған қалаңыз заманауи ма, әлде ескіше ме?'),
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
