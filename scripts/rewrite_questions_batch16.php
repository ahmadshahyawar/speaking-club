<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[219] = [ // Coffee vs Tea Culture
    V('Do you take your coffee or tea with milk and sugar?', 'Вы пьёте кофе или чай с молоком и сахаром?', 'Кофені немесе шайды сүтпен және қантпен ішесіз бе?'),
    V('Have you ever visited a country known for its coffee or tea culture?', 'Вы когда-нибудь посещали страну, известную своей культурой кофе или чая?', 'Кофе немесе шай мәдениетімен танымал елге бардыңыз ба?'),
    V('Do you feel tired without your daily coffee or tea?', 'Вы чувствуете усталость без ежедневного кофе или чая?', 'Күнделікті кофесіз немесе шайсыз шаршаған сезінесіз бе?'),
    V('What is your favorite time of day to drink tea or coffee?', 'В какое время дня вам больше всего нравится пить чай или кофе?', 'Күннің қай уақытында шай немесе кофе ішкенді ұнатасыз?'),
    V('Do you prefer instant coffee or freshly ground?', 'Вы предпочитаете растворимый кофе или свежемолотый?', 'Тез еритін кофені ұнатасыз ба, әлде жаңа тартылғанды ма?'),
    V('Have you ever grown or roasted your own coffee or tea?', 'Вы когда-нибудь выращивали или обжаривали свой кофе или чай?', 'Өз кофеңізді немесе шайыңызды өсіріп немесе қуырып көрдіңіз бе?'),
    V('Do you drink caffeine-free drinks in the evening?', 'Вы пьёте безкофеиновые напитки вечером?', 'Кешке кофеинсіз сусын ішесіз бе?'),
    V('What do you think of coffee shop culture today?', 'Что вы думаете о культуре кофеен сегодня?', 'Бүгінгі кофехана мәдениеті туралы не ойлайсыз?'),
    V('Have you ever tried making latte art or a special tea ceremony?', 'Вы когда-нибудь пробовали делать латте-арт или особую чайную церемонию?', 'Латте-арт жасауды немесе арнайы шай рәсімін сынап көрдіңіз бе?'),
];

$NEW9[220] = [ // Public Speaking Basics
    V('Do you write notes or memorize your speech?', 'Вы пишете заметки или запоминаете речь?', 'Жазба жазасыз ба, әлде сөзіңізді жаттайсыз ба?'),
    V('Have you ever forgotten what to say during a speech?', 'Вы когда-нибудь забывали, что сказать во время выступления?', 'Сөз сөйлеп жатқанда не айтарыңызды ұмытып қалдыңыз ба?'),
    V('What is your biggest fear about public speaking?', 'Чего вы больше всего боитесь в публичных выступлениях?', 'Көпшілік алдында сөйлеуде ең көп неден қорқасыз?'),
    V('Do you think body language matters more than words?', 'Как вы думаете, язык тела важнее слов?', 'Сіздің ойыңызша, дене тілі сөзден маңызды ма?'),
    V('Have you ever watched a speech that inspired you?', 'Вы когда-нибудь смотрели речь, которая вас вдохновила?', 'Сізді шабыттандырған сөзді көрдіңіз бе?'),
    V('Do you prefer speaking to a small group or a large audience?', 'Вы предпочитаете говорить перед маленькой группой или большой аудиторией?', 'Кішкентай топ алдында сөйлегенді ұнатасыз ба, әлде үлкен аудитория алдында ма?'),
    V('What topic would you enjoy giving a speech about?', 'На какую тему вам было бы приятно выступить?', 'Қандай тақырыпта сөз сөйлегенді ұнатар едіңіз?'),
    V('Have you ever taken a public speaking class?', 'Вы когда-нибудь посещали курсы публичных выступлений?', 'Көпшілік алдында сөйлеу курсына қатыстыңыз ба?'),
    V('Do you think practice really makes public speaking easier?', 'Как вы думаете, практика действительно облегчает публичные выступления?', 'Сіздің ойыңызша, жаттығу көпшілік алдында сөйлеуді шынымен жеңілдете ме?'),
];

$NEW9[221] = [ // Weekend Chores
    V('Do you finish all your chores before doing anything fun?', 'Вы заканчиваете все дела перед тем, как заняться чем-то интересным?', 'Қызықты нәрсе істемес бұрын барлық үй жұмысын бітіресіз бе?'),
    V('Does your family split weekend chores fairly?', 'Ваша семья справедливо делит домашние дела на выходных?', 'Отбасыңыз демалыс күндеріндегі үй жұмысын әділ бөліседі ме?'),
    V('Do you ever pay someone to do chores for you?', 'Вы когда-нибудь платите кому-то за выполнение домашних дел?', 'Үй жұмысын істеу үшін біреуге ақы төлейсіз бе?'),
    V('What chore takes the most time on weekends?', 'Какое дело занимает больше всего времени по выходным?', 'Демалыс күндері ең көп уақыт алатын үй жұмысы қандай?'),
    V('Have you ever skipped chores to do something more exciting?', 'Вы когда-нибудь пропускали дела ради чего-то более интересного?', 'Қызықтырақ нәрсе үшін үй жұмысын жіберіп алдыңыз ба?'),
    V('Do you enjoy any weekend chores?', 'Вам нравятся какие-нибудь дела по выходным?', 'Демалыс күндеріндегі кейбір үй жұмыстарын ұнатасыз ба?'),
    V('What is the first chore you do on Saturday?', 'Какое первое дело вы делаете в субботу?', 'Сенбіде істейтін алғашқы үй жұмысыңыз қандай?'),
    V('Do you listen to music or podcasts while doing chores?', 'Вы слушаете музыку или подкасты во время домашних дел?', 'Үй жұмысын істеп жатқанда музыка немесе подкаст тыңдайсыз ба?'),
    V('Would you rather do all chores at once or spread them out?', 'Вы бы предпочли делать все дела сразу или растянуть их?', 'Барлық үй жұмысын бірден істегенді қалайсыз ба, әлде бөліп ме?'),
];

$NEW9[222] = [ // Local Wildlife
    V('Have you ever been surprised by an animal in your own home?', 'Вас когда-нибудь удивляло животное в собственном доме?', 'Өз үйіңізде жануардан таңғалдыңыз ба?'),
    V('Do you feed birds or squirrels near your house?', 'Вы кормите птиц или белок рядом с домом?', 'Үйіңіздің жанында құстарды немесе тиіндерді тамақтандырасыз ба?'),
    V('What is the most dangerous animal near where you live?', 'Какое самое опасное животное рядом с местом, где вы живёте?', 'Тұратын жеріңіздің маңындағы ең қауіпті жануар қандай?'),
    V('Have you ever rescued a wild animal?', 'Вы когда-нибудь спасали дикое животное?', 'Жабайы жануарды құтқардыңыз ба?'),
    V('Do you enjoy documentaries about local wildlife?', 'Вам нравятся документальные фильмы о местной дикой природе?', 'Жергілікті жабайы табиғат туралы деректі фильмдерді ұнатасыз ба?'),
    V('What wild animal would you like to see up close?', 'Какое дикое животное вы хотели бы увидеть вблизи?', 'Қандай жабайы жануарды жақыннан көргіңіз келеді?'),
    V('Do you think humans are taking over too much wildlife habitat?', 'Как вы думаете, люди занимают слишком много мест обитания диких животных?', 'Сіздің ойыңызша, адамдар жабайы табиғат мекенін тым көп иеленіп жатыр ма?'),
    V('Have you ever heard unusual animal sounds at night?', 'Вы когда-нибудь слышали необычные звуки животных ночью?', 'Түнде жануардың ерекше дыбысын естідіңіз бе?'),
    V('What is your favorite bird or insect?', 'Какая ваша любимая птица или насекомое?', 'Сүйікті құсыңыз немесе жәндігіңіз қандай?'),
];

$NEW9[223] = [ // Learning to Swim
    V('Did you take formal swimming lessons?', 'Вы посещали официальные уроки плавания?', 'Ресми жүзу сабақтарына қатыстыңыз ба?'),
    V('Do you prefer swimming in a pool or in the sea?', 'Вы предпочитаете плавать в бассейне или в море?', 'Бассейнде жүзгенді ұнатасыз ба, әлде теңізде ме?'),
    V('Have you ever helped teach a child to swim?', 'Вы когда-нибудь помогали учить ребёнка плавать?', 'Балаға жүзуді үйретуге көмектестіңіз бе?'),
    V('What swimming stroke do you find hardest?', 'Какой стиль плавания вам даётся труднее всего?', 'Ең қиын жүзу стилі қайсы?'),
    V('Do you swim for exercise or just for fun?', 'Вы плаваете для тренировки или просто для удовольствия?', 'Жаттығу үшін жүзесіз бе, әлде жай көңіл көтеру үшін бе?'),
    V('Have you ever had a scary experience in water?', 'У вас когда-нибудь был страшный опыт в воде?', 'Суда қорқынышты жағдайға тап болдыңыз ба?'),
    V('What is the longest you have ever swum without stopping?', 'Сколько дольше всего вы плавали без остановки?', 'Тоқтамай жүзген ең ұзақ уақытыңыз қанша болды?'),
    V('Do you feel more relaxed or more energized after swimming?', 'После плавания вы чувствуете себя более расслабленным или бодрым?', 'Жүзгеннен кейін өзіңізді демалған сезінесіз бе, әлде сергек пе?'),
    V('Would you like to try open water swimming?', 'Вы хотели бы попробовать плавание в открытой воде?', 'Ашық суда жүзуді сынап көргіңіз келе ме?'),
];

$NEW9[224] = [ // City Nightlife
    V('Have you ever stayed out until sunrise?', 'Вы когда-нибудь гуляли до рассвета?', 'Таң атқанша сыртта болдыңыз ба?'),
    V('Do you feel safe walking around your city at night?', 'Вы чувствуете себя в безопасности, гуляя по городу ночью?', 'Түнде қалаңызда жүру қауіпсіз бе?'),
    V('What is your favorite type of place to go at night?', 'Куда вам больше всего нравится ходить ночью?', 'Түнде баруды ұнататын орын түріңіз қандай?'),
    V('Have you ever tried a new restaurant or bar at night?', 'Вы когда-нибудь пробовали новый ресторан или бар ночью?', 'Түнде жаңа мейрамхана немесе барды сынап көрдіңіз бе?'),
    V('Do you prefer going out with a big group or a few close friends?', 'Вы предпочитаете выходить с большой компанией или с несколькими близкими друзьями?', 'Үлкен топпен шыққанды ұнатасыз ба, әлде бірнеше жақын досыңызбен ба?'),
    V('What is the most memorable night out you have had?', 'Какой самый запоминающийся вечер у вас был?', 'Ең есте қалған түнгі шығуыңыз қандай болды?'),
    V('Do you think nightlife culture is different in big cities and small towns?', 'Как вы думаете, ночная жизнь отличается в больших городах и маленьких?', 'Сіздің ойыңызша, түнгі өмір мәдениеті үлкен қалалар мен кішкентай қалашықтарда әртүрлі ме?'),
    V('Have you ever had a bad experience going out at night?', 'У вас когда-нибудь был плохой опыт ночного выхода?', 'Түнде шыққанда жаман тәжірибе бастан кештіңіз бе?'),
    V('What time do you usually head home after a night out?', 'Во сколько вы обычно возвращаетесь домой после ночного выхода?', 'Түнде шыққаннан кейін әдетте неше сағатта үйге қайтасыз?'),
];

$NEW9[225] = [ // Home Gardening
    V('Have you ever killed a plant by accident?', 'Вы когда-нибудь случайно погубили растение?', 'Кездейсоқ өсімдікті құртып алдыңыз ба?'),
    V('Do you grow vegetables or only flowers?', 'Вы выращиваете овощи или только цветы?', 'Көкөніс өсіресіз бе, әлде тек гүл ме?'),
    V('What is the easiest plant to take care of, in your opinion?', 'Какое растение легче всего выращивать, по-вашему?', 'Сіздің ойыңызша, күтімі ең оңай өсімдік қайсы?'),
    V('Have you ever given a plant as a gift?', 'Вы когда-нибудь дарили растение в подарок?', 'Сыйға өсімдік бердіңіз бе?'),
    V('Do you talk to your plants?', 'Вы разговариваете со своими растениями?', 'Өсімдіктеріңізбен сөйлесесіз бе?'),
    V('What season is best for planting in your area?', 'Какой сезон лучше всего подходит для посадки в вашем районе?', 'Ауданыңызда егу үшін ең жақсы мезгіл қайсы?'),
    V('Have you ever had a problem with pests in your garden?', 'У вас когда-нибудь были проблемы с вредителями в саду?', 'Бағыңызда зиянкестермен мәселе болды ма?'),
    V('Do you think gardening is relaxing or stressful?', 'Как вы думаете, садоводство расслабляет или вызывает стресс?', 'Сіздің ойыңызша, бақшашылық демалдырады ма, әлде күйзелте ме?'),
    V('What would your dream garden look like?', 'Как бы выглядел ваш сад мечты?', 'Сіздің арман бағыңыз қандай болар еді?'),
];

$NEW9[226] = [ // Public Libraries
    V('Have you ever gotten lost looking for a book in a library?', 'Вы когда-нибудь терялись, ища книгу в библиотеке?', 'Кітапханада кітап іздеп адасып қалдыңыз ба?'),
    V('Do you use the library\'s computers or wifi?', 'Вы пользуетесь компьютерами или вайфаем библиотеки?', 'Кітапхананың компьютерін немесе вайфайын пайдаланасыз ба?'),
    V('Have you ever attended an event at a library?', 'Вы когда-нибудь посещали мероприятие в библиотеке?', 'Кітапханада іс-шараға қатыстыңыз ба?'),
    V('Do you prefer physical books or e-books from the library?', 'Вы предпочитаете бумажные книги или электронные из библиотеки?', 'Кітапханадан қағаз кітапты ұнатасыз ба, әлде электронды кітапты ма?'),
    V('What was the last book you borrowed?', 'Какую книгу вы брали последней?', 'Соңғы алған кітабыңыз қандай болды?'),
    V('Have you ever recommended a library book to a friend?', 'Вы когда-нибудь рекомендовали другу книгу из библиотеки?', 'Досыңызға кітапхана кітабын ұсындыңыз ба?'),
    V('Do you think libraries should offer more than just books?', 'Как вы думаете, библиотеки должны предлагать больше, чем просто книги?', 'Сіздің ойыңызша, кітапханалар тек кітаптан артық нәрсе ұсынуы керек пе?'),
    V('What is your favorite section of the library?', 'Какой ваш любимый раздел библиотеки?', 'Кітапхананың сүйікті бөлімі қайсы?'),
    V('Have you ever volunteered at a library?', 'Вы когда-нибудь занимались волонтёрством в библиотеке?', 'Кітапханада еріктілік жасадыңыз ба?'),
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
