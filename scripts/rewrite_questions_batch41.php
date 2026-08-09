<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[249] = [ // The Paradox of Choice
    V('Have you ever spent too long choosing something small, like a meal?', 'Вы когда-нибудь тратили слишком много времени на выбор чего-то мелкого, например еды?', 'Тамақ сияқты кішкентай нәрсені таңдауға тым көп уақыт жұмсадыңыз ба?'),
    V('Do you think online shopping has made choice overload worse?', 'Как вы думаете, онлайн-шопинг усугубил перегрузку выбором?', 'Сіздің ойыңызша, онлайн сауда таңдау артық жүктемесін күшейтті ме?'),
    V('Have you ever asked someone else to choose for you because you couldn\'t decide?', 'Вы когда-нибудь просили кого-то выбрать за вас, потому что не могли решить сами?', 'Шеше алмағандықтан біреуден өзіңіз үшін таңдауын сұрадыңыз ба?'),
    V('Do you think having fewer brands to choose from would reduce stress?', 'Как вы думаете, меньшее количество брендов для выбора снизило бы стресс?', 'Сіздің ойыңызша, таңдау үшін бренд азырақ болса, стресс азая ма?'),
    V('Have you ever avoided making a decision entirely because there were too many options?', 'Вы когда-нибудь полностью избегали принятия решения, потому что вариантов было слишком много?', 'Тым көп нұсқа болғандықтан шешім қабылдаудан мүлдем аулақ болдыңыз ба?'),
    V('Do you think some cultures handle choice overload better than others?', 'Как вы думаете, некоторые культуры лучше справляются с перегрузкой выбором, чем другие?', 'Сіздің ойыңызша, кейбір мәдениеттер таңдау артық жүктемесін жақсырақ көтере ме?'),
    V('Would you prefer a store with 3 good options or 30 mediocre ones?', 'Вы бы предпочли магазин с 3 хорошими вариантами или 30 посредственными?', '3 жақсы нұсқасы бар дүкенді таңдар ма едіңіз, әлде 30 орташасы бар дүкенді ме?'),
    V('Have you ever felt more satisfied with a decision when you had no choice at all?', 'Вы когда-нибудь чувствовали себя более удовлетворённым решением, когда у вас вообще не было выбора?', 'Мүлдем таңдауыңыз болмағанда шешімге қанағаттанғаныңызды сезіндіңіз бе?'),
    V('What is one area of your life where you\'ve deliberately limited your choices?', 'В какой одной области своей жизни вы намеренно ограничили свой выбор?', 'Өміріңіздің қай саласында таңдауыңызды әдейі шектедіңіз?'),
];

$NEW9[250] = [ // Digital Colonialism
    V('Have you ever felt dependent on a foreign tech company for basic services?', 'Вы когда-нибудь чувствовали зависимость от иностранной технологической компании в базовых услугах?', 'Негізгі қызметтер үшін шетелдік технология компаниясына тәуелді сезіндіңіз бе?'),
    V('Do you think local startups can realistically compete with global tech giants?', 'Как вы думаете, местные стартапы могут реально конкурировать с глобальными технологическими гигантами?', 'Сіздің ойыңызша, жергілікті стартаптар жаһандық технология алпауыттарымен шынымен бәсекелесе ала ма?'),
    V('Have you ever thought about who owns the data your country generates online?', 'Вы когда-нибудь думали о том, кому принадлежат данные, которые ваша страна генерирует онлайн?', 'Еліңіз желіде жасайтын деректердің кімге тиесілі екені туралы ойладыңыз ба?'),
    V('Do you think app stores give too much power to a few companies?', 'Как вы думаете, магазины приложений дают слишком много власти нескольким компаниям?', 'Сіздің ойыңызша, қосымша дүкендері бірнеше компанияға тым көп билік бере ме?'),
    V('Should local governments require tech companies to store data domestically?', 'Должны ли местные правительства требовать от технологических компаний хранить данные внутри страны?', 'Жергілікті үкіметтер технология компанияларынан деректерді ел ішінде сақтауды талап етуі керек пе?'),
    V('Have you ever used a local alternative instead of a major global platform?', 'Вы когда-нибудь использовали местную альтернативу вместо крупной глобальной платформы?', 'Үлкен жаһандық платформаның орнына жергілікті балама пайдаландыңыз ба?'),
    V('Do you think language barriers make digital colonialism worse for some countries?', 'Как вы думаете, языковые барьеры усугубляют цифровой колониализм для некоторых стран?', 'Сіздің ойыңызша, тіл кедергілері кейбір елдер үшін цифрлық отаршылдықты күшейте ме?'),
    V('Do you think smaller nations have any real leverage against big tech companies?', 'Как вы думаете, у меньших наций есть реальные рычаги влияния на крупные технологические компании?', 'Сіздің ойыңызша, кіші елдердің үлкен технология компанияларына қарсы нақты ықпалы бар ма?'),
    V('What would truly independent digital infrastructure look like for a country?', 'Как бы выглядела действительно независимая цифровая инфраструктура для страны?', 'Ел үшін шынымен тәуелсіз цифрлық инфрақұрылым қандай болар еді?'),
];

$NEW9[251] = [ // The Ethics of Longevity Science
    V('Have you ever taken a supplement or followed a routine aimed at slowing ageing?', 'Вы когда-нибудь принимали добавку или следовали режиму, направленному на замедление старения?', 'Қартаюды баяулатуға бағытталған қоспа қабылдадыңыз ба немесе режимді ұстандыңыз ба?'),
    V('Do you think curing ageing would change how people plan their careers?', 'Как вы думаете, победа над старением изменила бы то, как люди планируют карьеру?', 'Сіздің ойыңызша, қартаюды емдеу адамдардың мансабын жоспарлау тәсілін өзгертер ме еді?'),
    V('Have you ever thought about what you would do with an extra 20 healthy years?', 'Вы когда-нибудь думали о том, что бы вы сделали с дополнительными 20 здоровыми годами?', 'Қосымша 20 сау жылмен не істейтініңіз туралы ойладыңыз ба?'),
    V('Do you think religious or cultural beliefs affect how people view life extension?', 'Как вы думаете, религиозные или культурные убеждения влияют на то, как люди относятся к продлению жизни?', 'Сіздің ойыңызша, діни немесе мәдени наным-сенімдер адамдардың өмірді ұзартуға көзқарасына әсер ете ме?'),
    V('Would you want your parents to have access to life-extending treatment?', 'Вы бы хотели, чтобы у ваших родителей был доступ к лечению, продлевающему жизнь?', 'Ата-анаңыздың өмірді ұзартатын емге қолжетімділігі болғанын қалар ма едіңіз?'),
    V('Do you think society is ready for the social changes longer lives would bring?', 'Как вы думаете, общество готово к социальным изменениям, которые принесёт более долгая жизнь?', 'Сіздің ойыңызша, қоғам ұзақ өмірдің әкелетін әлеуметтік өзгерістеріне дайын ба?'),
    V('Have you ever worried about running out of savings if people lived much longer?', 'Вы когда-нибудь беспокоились о том, что закончатся сбережения, если люди будут жить намного дольше?', 'Адамдар әлдеқайда ұзақ өмір сүрсе, жинақтарыңыздың таусылуынан алаңдадыңыз ба?'),
    V('Do you think death gives life meaning, or is that just an old belief?', 'Как вы думаете, смерть придаёт жизни смысл, или это просто старое поверье?', 'Сіздің ойыңызша, өлім өмірге мән бере ме, әлде бұл тек ескі наным ба?'),
    V('What would concern you most about a world where people commonly lived to 150?', 'Что бы вас больше всего беспокоило в мире, где люди обычно доживали бы до 150 лет?', 'Адамдар әдетте 150 жасқа дейін өмір сүретін әлемде сізді ең көп не алаңдатар еді?'),
];

$NEW9[252] = [ // Neurodiversity in the Workplace
    V('Have you ever misunderstood someone\'s behavior before learning they were neurodivergent?', 'Вы когда-нибудь неправильно понимали чьё-то поведение, прежде чем узнать, что человек нейроотличный?', 'Біреудің нейроерекше екенін білмей тұрып мінез-құлқын дұрыс түсінбей қалдыңыз ба?'),
    V('Do you think open office spaces are difficult for many neurodivergent employees?', 'Как вы думаете, открытые офисные пространства трудны для многих нейроотличных сотрудников?', 'Сіздің ойыңызша, ашық кеңсе кеңістіктері көптеген нейроерекше қызметкерлер үшін қиын ба?'),
    V('Have you ever advocated for a colleague who needed workplace accommodations?', 'Вы когда-нибудь заступались за коллегу, которому нужны были условия на рабочем месте?', 'Жұмыс орнында жағдай қажет болған әріптесіңізді қорғадыңыз ба?'),
    V('Do you think job interviews are fair to neurodivergent candidates?', 'Как вы думаете, собеседования справедливы к нейроотличным кандидатам?', 'Сіздің ойыңызша, жұмысқа сұхбаттар нейроерекше үміткерлерге әділ ме?'),
    V('Have you ever learned something valuable from how a neurodivergent person approaches problems?', 'Вы когда-нибудь узнавали что-то ценное из того, как нейроотличный человек подходит к решению проблем?', 'Нейроерекше адамның мәселелерге қалай қарайтынынан құнды бір нәрсе үйрендіңіз бе?'),
    V('Do you think companies should specifically recruit neurodivergent talent?', 'Как вы думаете, компании должны специально нанимать нейроотличные таланты?', 'Сіздің ойыңызша, компаниялар нейроерекше дарындарды арнайы жалдауы керек пе?'),
    V('Have you ever had to explain neurodiversity to someone unfamiliar with it?', 'Вам когда-нибудь приходилось объяснять нейроразнообразие тому, кто с ним не знаком?', 'Нейроалуантүрлілікті онымен таныс емес адамға түсіндіруге тура келді ме?'),
    V('Do you think remote work has helped or hurt neurodivergent employees?', 'Как вы думаете, удалённая работа помогла или навредила нейроотличным сотрудникам?', 'Сіздің ойыңызша, қашықтан жұмыс нейроерекше қызметкерлерге көмектесті ме, әлде зиян тигізді ме?'),
    V('What change would you make to your own workplace to support neurodiversity better?', 'Какое изменение вы бы внесли в своё рабочее место, чтобы лучше поддерживать нейроразнообразие?', 'Нейроалуантүрлілікті жақсырақ қолдау үшін өз жұмыс орныңызда қандай өзгеріс жасар едіңіз?'),
];

$NEW9[253] = [ // The Politics of Language
    V('Have you ever been judged for your accent or dialect?', 'Вас когда-нибудь осуждали за акцент или диалект?', 'Акцентіңіз немесе диалектіңіз үшін сотталдыңыз ба?'),
    V('Do you think losing a minority language is a loss for everyone, not just its speakers?', 'Как вы думаете, потеря языка меньшинства — это потеря для всех, а не только для его носителей?', 'Сіздің ойыңызша, азшылық тілінің жоғалуы тек оны сөйлеушілер үшін ғана емес, бәрі үшін жоғалту ма?'),
    V('Have you ever felt more confident expressing yourself in one language over another?', 'Вы когда-нибудь чувствовали себя увереннее, выражая себя на одном языке, чем на другом?', 'Бір тілде өзіңізді басқасынан гөрі сенімдірек сезіндіңіз бе?'),
    V('Do you think language policy is really about identity more than communication?', 'Как вы думаете, языковая политика на самом деле больше об идентичности, чем о коммуникации?', 'Сіздің ойыңызша, тіл саясаты қарым-қатынастан гөрі бірегейлік туралы ма?'),
    V('Have you ever changed your speech style depending on who you\'re talking to?', 'Вы когда-нибудь меняли стиль своей речи в зависимости от того, с кем разговариваете?', 'Кіммен сөйлесіп жатқаныңызға қарай сөйлеу мәнеріңізді өзгерттіңіз бе?'),
    V('Do you think forcing a single national language can divide a country instead of uniting it?', 'Как вы думаете, навязывание единого национального языка может разделить страну вместо объединения?', 'Сіздің ойыңызша, бір ұлттық тілді таңу елді біріктірудің орнына бөле ме?'),
    V('Have you ever tried to learn a language connected to your own heritage?', 'Вы когда-нибудь пытались выучить язык, связанный с вашим наследием?', 'Өз тегіңізбен байланысты тілді үйренуге тырыстыңыз ба?'),
    V('Do you think media should be required to include minority languages?', 'Как вы думаете, СМИ должны быть обязаны включать языки меньшинств?', 'Сіздің ойыңызша, БАҚ азшылық тілдерін қосуға міндетті болуы керек пе?'),
    V('What would be lost if your native language disappeared in a hundred years?', 'Что было бы потеряно, если бы ваш родной язык исчез через сто лет?', 'Ана тіліңіз жүз жылдан кейін жоғалса, не жоғалар еді?'),
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
