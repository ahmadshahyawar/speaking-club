<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[186] = [ // The Science of Sleep
    V('Do you think everyone needs exactly eight hours of sleep?', 'Как вы думаете, всем нужно ровно восемь часов сна?', 'Сіздің ойыңызша, барлығына дәл сегіз сағат ұйқы керек пе?'),
    V('Have you ever fallen asleep somewhere unusual?', 'Вы когда-нибудь засыпали в необычном месте?', 'Ерекше жерде ұйықтап кеткеніңіз болды ма?'),
    V('What helps you fall asleep faster?', 'Что помогает вам быстрее засыпать?', 'Тезірек ұйықтап кетуге не көмектеседі?'),
    V('Do you dream often, and do you remember your dreams?', 'Вы часто видите сны, и вы их помните?', 'Жиі түс көресіз бе, және түстеріңізді есіңізде сақтайсыз ба?'),
    V('Have you ever pulled an all-nighter? Why?', 'Вы когда-нибудь не спали всю ночь? Почему?', 'Түні бойы ұйықтамай шыққаныңыз болды ма? Неге?'),
    V('Do you think sleep quality matters more than sleep quantity?', 'Как вы думаете, качество сна важнее количества?', 'Сіздің ойыңызша, ұйқы сапасы санынан маңыздырақ па?'),
    V('What is your bedtime routine?', 'Какой у вас ритуал перед сном?', 'Ұйықтар алдындағы әдеттегі тәртібіңіз қандай?'),
    V('Have you ever used sleep tracking technology?', 'Вы когда-нибудь использовали технологию отслеживания сна?', 'Ұйқыны бақылау технологиясын пайдаландыңыз ба?'),
    V('Do you think society undervalues the importance of sleep?', 'Как вы думаете, общество недооценивает важность сна?', 'Сіздің ойыңызша, қоғам ұйқының маңыздылығын жете бағаламай ма?'),
];

$NEW9[187] = [ // Body Language and First Impressions
    V('Do you think a firm handshake creates a better impression?', 'Как вы думаете, крепкое рукопожатие создаёт лучшее впечатление?', 'Сіздің ойыңызша, мықты қол алысу жақсырақ әсер қалдыра ма?'),
    V('Have you ever misread someone\'s body language?', 'Вы когда-нибудь неправильно понимали чей-то язык тела?', 'Біреудің дене тілін дұрыс түсінбей қалдыңыз ба?'),
    V('What body language do you think signals confidence?', 'Какой язык тела, по-вашему, показывает уверенность?', 'Сіздің ойыңызша, қандай дене тілі сенімділікті білдіреді?'),
    V('Do you cross your arms when you feel defensive?', 'Вы скрещиваете руки, когда чувствуете себя защищающимся?', 'Қорғанысқа берілгенде қолыңызды айқастырасыз ба?'),
    V('Have you ever been told your body language sends the wrong message?', 'Вам когда-нибудь говорили, что ваш язык тела передаёт неправильное сообщение?', 'Дене тіліңіз қате хабар беретіні туралы сізге айтылды ма?'),
    V('Do you think smiling always creates a positive first impression?', 'Как вы думаете, улыбка всегда создаёт положительное первое впечатление?', 'Сіздің ойыңызша, күлімсіреу әрдайым оң алғашқы әсер қалдыра ма?'),
    V('What first impression do you think you usually give strangers?', 'Какое первое впечатление вы обычно производите на незнакомцев?', 'Бейтаныс адамдарға әдетте қандай алғашқы әсер қалдырасыз?'),
    V('Have you ever changed how you present yourself for an important meeting?', 'Вы когда-нибудь меняли, как вы себя преподносите, для важной встречи?', 'Маңызды кездесу үшін өзіңізді көрсету тәсіліңізді өзгерттіңіз бе?'),
    V('Do you think first impressions matter more in person or online?', 'Как вы думаете, первое впечатление важнее лично или онлайн?', 'Сіздің ойыңызша, алғашқы әсер жеке кездескенде маңыздырақ па, әлде онлайнда ма?'),
];

$NEW9[188] = [ // The Rise of Remote Teams
    V('Have you ever felt disconnected from remote coworkers?', 'Вы когда-нибудь чувствовали себя оторванным от удалённых коллег?', 'Қашықтағы әріптестерден алшақтап қалғандай сезіндіңіз бе?'),
    V('Do you think remote teams need more effort to build company culture?', 'Как вы думаете, удалённым командам нужно больше усилий для построения корпоративной культуры?', 'Сіздің ойыңызша, қашықтағы командаларға компания мәдениетін құру үшін көбірек күш керек пе?'),
    V('What is the hardest part of managing a remote team?', 'Что самое трудное в управлении удалённой командой?', 'Қашықтағы команданы басқарудың ең қиын бөлігі қандай?'),
    V('Have you ever had a miscommunication because of remote work?', 'У вас когда-нибудь было недопонимание из-за удалённой работы?', 'Қашықтан жұмыс істеуге байланысты түсінбестік болды ма?'),
    V('Do you think remote work increases or decreases productivity?', 'Как вы думаете, удалённая работа увеличивает или снижает продуктивность?', 'Сіздің ойыңызша, қашықтан жұмыс өнімділікті арттыра ма, әлде азайта ма?'),
    V('What would make you trust a remote coworker you have never met in person?', 'Что заставило бы вас доверять удалённому коллеге, которого вы никогда не встречали лично?', 'Жеке кездеспеген қашықтағы әріптеске сенуіңізге не себеп болар еді?'),
    V('Have you ever attended a virtual team-building event?', 'Вы когда-нибудь участвовали в виртуальном тимбилдинге?', 'Виртуалды команда құру іс-шарасына қатыстыңыз ба?'),
    V('Do you think remote teams should meet in person occasionally?', 'Как вы думаете, удалённые команды должны иногда встречаться лично?', 'Сіздің ойыңызша, қашықтағы командалар кейде жеке кездесуі керек пе?'),
    V('What is one advantage of remote teams over office teams?', 'Какое одно преимущество удалённых команд перед офисными?', 'Қашықтағы командалардың офис командаларынан бір артықшылығы қандай?'),
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
