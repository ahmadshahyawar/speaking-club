<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[127] = [ // Economic Inequality
    V('Have you ever felt that your hard work wasn\'t fairly rewarded?', 'Вы когда-нибудь чувствовали, что ваш упорный труд не был справедливо вознаграждён?', 'Қажырлы еңбегіңіз әділ бағаланбады деп сезіндіңіз бе?'),
    V('Do you think inherited wealth should be taxed more heavily?', 'Как вы думаете, унаследованное богатство должно облагаться более высоким налогом?', 'Сіздің ойыңызша, мұраға қалған байлыққа салынатын салық жоғарырақ болуы керек пе?'),
    V('Have you ever compared your financial situation to your parents\' at the same age?', 'Вы когда-нибудь сравнивали своё финансовое положение с положением родителей в том же возрасте?', 'Қаржылық жағдайыңызды ата-анаңыздың сол жастағы жағдайымен салыстырдыңыз ба?'),
    V('Do you think education can truly level the playing field?', 'Как вы думаете, образование действительно может уравнять возможности?', 'Сіздің ойыңызша, білім мүмкіндіктерді шынымен теңестіре ала ма?'),
    V('Would you support a universal basic income in your country?', 'Вы бы поддержали безусловный базовый доход в своей стране?', 'Еліңізде әмбебап негізгі табысты қолдар ма едіңіз?'),
    V('Do you think inequality is worse in cities or rural areas?', 'Как вы думаете, неравенство хуже в городах или в сельской местности?', 'Сіздің ойыңызша, теңсіздік қалаларда нашар ма, әлде ауылдық жерлерде ме?'),
    V('Have you ever witnessed extreme wealth and extreme poverty side by side?', 'Вы когда-нибудь видели крайнее богатство и крайнюю бедность рядом друг с другом?', 'Аса зор байлық пен аса ауыр кедейлікті қатар көрдіңіз бе?'),
    V('Do you think CEOs are paid too much compared to average workers?', 'Как вы думаете, руководители компаний получают слишком много по сравнению со средними работниками?', 'Сіздің ойыңызша, компания басшылары қарапайым қызметкерлермен салыстырғанда тым көп ақы ала ма?'),
    V('What is one policy you believe would meaningfully reduce inequality?', 'Какая одна политика, по-вашему, действительно уменьшила бы неравенство?', 'Теңсіздікті шынымен азайтады деп есептейтін бір саясатыңыз қандай?'),
];

$NEW9[128] = [ // The Philosophy of Happiness
    V('Have you ever been happy despite difficult circumstances?', 'Вы когда-нибудь были счастливы, несмотря на трудные обстоятельства?', 'Қиын жағдайларға қарамастан бақытты болдыңыз ба?'),
    V('Do you think comparing yourself to others affects your happiness?', 'Как вы думаете, сравнение себя с другими влияет на ваше счастье?', 'Сіздің ойыңызша, өзіңізді басқалармен салыстыру бақытыңызға әсер ете ме?'),
    V('Have you ever sacrificed happiness for success, or the opposite?', 'Вы когда-нибудь жертвовали счастьем ради успеха, или наоборот?', 'Табыс үшін бақытты құрбан еттіңіз бе, әлде керісінше ме?'),
    V('Do you think happiness is a choice or something that happens to you?', 'Как вы думаете, счастье — это выбор или то, что с вами случается?', 'Сіздің ойыңызша, бақыт таңдау ма, әлде өзінен-өзі болатын нәрсе ме?'),
    V('What memory always makes you feel happy when you think of it?', 'Какое воспоминание всегда делает вас счастливым, когда вы о нём думаете?', 'Ойлаған сайын бақытты сезінетін естелігіңіз қандай?'),
    V('Do you think some cultures value happiness differently than others?', 'Как вы думаете, некоторые культуры по-разному ценят счастье?', 'Сіздің ойыңызша, кейбір мәдениеттер бақытты басқаша бағалай ма?'),
    V('Have you ever pursued a goal that didn\'t make you as happy as expected?', 'Вы когда-нибудь стремились к цели, которая не сделала вас настолько счастливым, насколько вы ожидали?', 'Күткендей бақыт әкелмеген мақсатқа ұмтылдыңыз ба?'),
    V('Do you think spending money on experiences makes people happier than buying things?', 'Как вы думаете, траты на впечатления делают людей счастливее, чем покупка вещей?', 'Сіздің ойыңызша, әсерлерге ақша жұмсау заттарды сатып алудан гөрі адамдарды бақыттырақ ете ме?'),
    V('What would you change in your life to become happier?', 'Что бы вы изменили в своей жизни, чтобы стать счастливее?', 'Бақыттырақ болу үшін өміріңізде нені өзгертер едіңіз?'),
];

$NEW9[129] = [ // Technology Addiction
    V('Have you ever set a screen time limit on your phone?', 'Вы когда-нибудь устанавливали ограничение экранного времени на телефоне?', 'Телефоныңызда экран уақыты шектеуін орнаттыңыз ба?'),
    V('Do you think children today are more addicted to technology than previous generations were to TV?', 'Как вы думаете, сегодняшние дети более зависимы от технологий, чем предыдущие поколения были от телевизора?', 'Сіздің ойыңызша, бүгінгі балалар технологияға бұрынғы ұрпақтардың теледидарға тәуелді болғанынан гөрі көбірек тәуелді ме?'),
    V('Have you ever missed something important because you were distracted by your phone?', 'Вы когда-нибудь пропускали что-то важное, потому что отвлеклись на телефон?', 'Телефоныңызға алаңдап, маңызды бір нәрсені өткізіп алдыңыз ба?'),
    V('Do you think notifications are designed to manipulate your attention?', 'Как вы думаете, уведомления созданы, чтобы манипулировать вашим вниманием?', 'Сіздің ойыңызша, хабарландырулар назарыңызды манипуляциялау үшін жасалған ба?'),
    V('Would you consider a full digital detox weekend?', 'Вы бы рассмотрели полные выходные без цифровых устройств?', 'Толық цифрлық демалыс демалыс күндерін қарастырар ма едіңіз?'),
    V('Have you ever felt jealous or anxious after scrolling social media?', 'Вы когда-нибудь чувствовали зависть или тревогу после прокрутки социальных сетей?', 'Әлеуметтік желіні шолғаннан кейін қызғаныш немесе мазасыздық сезіндіңіз бе?'),
    V('Do you think schools should ban phones completely?', 'Как вы думаете, школы должны полностью запретить телефоны?', 'Сіздің ойыңызша, мектептер телефондарды толығымен тыюы керек пе?'),
    V('What app do you find hardest to put down?', 'Какое приложение вам труднее всего отложить?', 'Тоқтатуы ең қиын қосымшаңыз қандай?'),
    V('Do you think technology addiction will get worse or better in the future?', 'Как вы думаете, зависимость от технологий в будущем усилится или ослабнет?', 'Сіздің ойыңызша, технологияға тәуелділік болашақта нашарлай ма, әлде жақсара ма?'),
];

$NEW9[130] = [ // Freedom of Speech
    V('Have you ever regretted something you posted online?', 'Вы когда-нибудь жалели о чём-то, что опубликовали онлайн?', 'Желіде жариялаған бір нәрсеңізге өкіндіңіз бе?'),
    V('Do you think comedians should be free to joke about any topic?', 'Как вы думаете, комики должны быть свободны шутить на любую тему?', 'Сіздің ойыңызша, комедиантар кез келген тақырыпта еркін әзілдесе алуы керек пе?'),
    V('Have you ever reported or blocked someone for offensive content?', 'Вы когда-нибудь жаловались или блокировали кого-то за оскорбительный контент?', 'Қорлайтын мазмұны үшін біреу туралы шағым жасадыңыз ба немесе бұғаттадыңыз ба?'),
    V('Do you think anonymous speech online deserves the same protection as speech in public?', 'Как вы думаете, анонимная речь онлайн заслуживает такой же защиты, как публичная речь?', 'Сіздің ойыңызша, желідегі анонимді пікір көпшілік алдындағы сөзбен бірдей қорғауға лайық па?'),
    V('Should universities allow controversial speakers to give lectures?', 'Должны ли университеты разрешать спорным ораторам читать лекции?', 'Университеттер қайшылықты шешендерге дәріс оқуға рұқсат беруі керек пе?'),
    V('Have you ever stayed quiet about your opinion out of fear of judgment?', 'Вы когда-нибудь молчали о своём мнении из-за страха осуждения?', 'Айыпталудан қорқып пікіріңізді айтпай қалдыңыз ба?'),
    V('Do you think private companies should be allowed to ban users from their platforms?', 'Как вы думаете, частным компаниям следует разрешить banить пользователей со своих платформ?', 'Жеке компанияларға өз платформаларынан пайдаланушыларды тыюға рұқсат берілуі керек пе?'),
    V('What topic do you find hardest to discuss openly?', 'Какую тему вам труднее всего обсуждать открыто?', 'Ашық талқылауы ең қиын тақырыбыңыз қандай?'),
    V('Do you think free speech comes with more responsibility today than in the past?', 'Как вы думаете, свобода слова сегодня несёт больше ответственности, чем в прошлом?', 'Сіздің ойыңызша, бүгінде сөз бостандығы бұрынғыдан гөрі көбірек жауапкершілікпен келе ме?'),
];

$NEW9[131] = [ // The Nature vs Nurture Debate
    V('Have you ever behaved exactly like one of your parents, even unintentionally?', 'Вы когда-нибудь вели себя точно так же, как один из ваших родителей, даже непреднамеренно?', 'Байқаусызда ата-анаңыздың біріне дәл ұқсап әрекет еттіңіз бе?'),
    V('Do you think talent is inherited or built through practice?', 'Как вы думаете, талант передаётся по наследству или строится через практику?', 'Сіздің ойыңызша, талант тұқым қуалай ма, әлде жаттығу арқылы қалыптаса ма?'),
    V('Have you ever changed a personality trait you thought was fixed?', 'Вы когда-нибудь меняли черту характера, которую считали неизменной?', 'Тұрақты деп ойлаған мінез қасиетіңізді өзгерттіңіз бе?'),
    V('Do you think birth order affects personality?', 'Как вы думаете, порядок рождения влияет на личность?', 'Сіздің ойыңызша, туылу реті мінезге әсер ете ме?'),
    V('Would knowing your genetic risks for certain traits change how you live?', 'Знание ваших генетических рисков для определённых черт изменило бы то, как вы живёте?', 'Белгілі бір қасиеттерге генетикалық қауіп-қатеріңізді білу өмір сүру тәсіліңізді өзгертер ме еді?'),
    V('Do you think trauma can alter someone\'s personality permanently?', 'Как вы думаете, травма может навсегда изменить чью-то личность?', 'Сіздің ойыңызша, жарақат біреудің мінезін мәңгілікке өзгерте ала ма?'),
    V('Have you ever met siblings who were raised the same but turned out very different?', 'Вы когда-нибудь встречали братьев и сестёр, которых воспитывали одинаково, но которые выросли очень разными?', 'Бірдей тәрбиеленген, бірақ мүлдем басқаша болып шыққан аға-інілерді кездестірдіңіз бе?'),
    V('Do you think environment matters more in early childhood than later in life?', 'Как вы думаете, среда важнее в раннем детстве, чем позже в жизни?', 'Сіздің ойыңызша, орта ерте балалық шақта кейінгі өмірден гөрі маңыздырақ па?'),
    V('What personality trait of yours do you think came from nurture, not nature?', 'Какая ваша черта характера, по-вашему, сформировалась воспитанием, а не природой?', 'Сіздің ойыңызша, мінез қасиетіңіздің қайсысы табиғаттан емес, тәрбиеден келді?'),
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
