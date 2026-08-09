<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[142] = [ // My Body and Health Habits
    V('Do you exercise every day, or only sometimes?', 'Вы занимаетесь спортом каждый день или только иногда?', 'Күн сайын жаттығасыз ба, әлде кейде ғана ма?'),
    V('What do you do to reduce stress?', 'Что вы делаете, чтобы снизить стресс?', 'Стрессті азайту үшін не істейсіз?'),
    V('Do you eat breakfast before starting your day?', 'Вы завтракаете перед началом дня?', 'Күніңізді бастамас бұрын таңғы ас ішесіз бе?'),
    V('How many glasses of water do you drink daily?', 'Сколько стаканов воды вы выпиваете в день?', 'Күніне қанша стакан су ішесіз?'),
    V('Do you take vitamins or supplements?', 'Вы принимаете витамины или добавки?', 'Витамин немесе қоспалар ішесіз бе?'),
    V('What time do you usually go to bed?', 'Во сколько вы обычно ложитесь спать?', 'Әдетте неше сағатта ұйықтауға жатасыз?'),
    V('Have you ever tried a diet to be healthier?', 'Вы когда-нибудь пробовали диету, чтобы быть здоровее?', 'Денсаулығыңызды жақсарту үшін диета ұстап көрдіңіз бе?'),
    V('Do you stretch your body during the day?', 'Вы делаете растяжку в течение дня?', 'Күн ішінде денеңізді созасыз ба?'),
    V('What health habit did your parents teach you?', 'Какой привычке для здоровья научили вас родители?', 'Ата-анаңыз сізге қандай денсаулық әдетін үйретті?'),
];

$NEW9[143] = [ // In the Classroom
    V('Do you prefer sitting near the front or the back of the class?', 'Вы предпочитаете сидеть впереди или сзади класса?', 'Сыныптың алдында отырғанды ұнатасыз ба, әлде артында ма?'),
    V('Did you ever fall asleep in class?', 'Вы когда-нибудь засыпали на уроке?', 'Сабақта ұйықтап кеткеніңіз болды ма?'),
    V('What subject did you find the most boring?', 'Какой предмет казался вам самым скучным?', 'Ең жалықтырушы пән қайсы болды?'),
    V('Do you like working in groups or alone?', 'Вам нравится работать в группе или в одиночку?', 'Топпен жұмыс істегенді ұнатасыз ба, әлде жалғыз ба?'),
    V('Did you raise your hand often to ask questions?', 'Вы часто поднимали руку, чтобы задать вопрос?', 'Сұрақ қою үшін қолыңызды жиі көтеретінсіз бе?'),
    V('What classroom rule did you dislike the most?', 'Какое школьное правило вам нравилось меньше всего?', 'Сынып ережелерінің қайсысын ең аз ұнататынсыз?'),
    V('Do you remember your favorite classmate?', 'Вы помните своего любимого одноклассника?', 'Сүйікті сыныптасыңызды есіңізде ме?'),
    V('Have you ever helped a classmate with schoolwork?', 'Вы когда-нибудь помогали однокласснику с учёбой?', 'Сыныптасыңызға сабақ тапсырмасында көмектестіңіз бе?'),
    V('What made a lesson interesting for you?', 'Что делало урок интересным для вас?', 'Сізге сабақты қызықты еткен не болды?'),
];

$NEW9[144] = [ // Simple Recipes
    V('Do you write down recipes, or remember them?', 'Вы записываете рецепты или запоминаете их?', 'Рецепттерді жазып аласыз ба, әлде жаттап аласыз ба?'),
    V('What recipe would you like to learn?', 'Какой рецепт вы хотели бы освоить?', 'Қандай рецептті үйренгіңіз келеді?'),
    V('Do you cook the same meals every week?', 'Вы готовите одни и те же блюда каждую неделю?', 'Апта сайын бірдей тағамдар пісіресіз бе?'),
    V('Have you ever changed a recipe to make it better?', 'Вы когда-нибудь меняли рецепт, чтобы улучшить его?', 'Рецептті жақсарту үшін өзгертіп көрдіңіз бе?'),
    V('What recipe did your grandmother or mother teach you?', 'Какому рецепту вас научила бабушка или мама?', 'Әжеңіз немесе анаңыз сізге қандай рецепт үйретті?'),
    V('Do you prefer recipes with few ingredients or many?', 'Вы предпочитаете рецепты с малым количеством ингредиентов или с большим?', 'Аз құрамдас бөлікті рецептерді ұнатасыз ба, әлде көпті ме?'),
    V('What is a recipe from another country you enjoy?', 'Какой рецепт из другой страны вам нравится?', 'Ұнататын басқа елдің рецепті бар ма?'),
    V('Do you taste food while cooking it?', 'Вы пробуете еду во время готовки?', 'Тамақ пісіріп жатқанда дәмін татып көресіз бе?'),
    V('What meal do you cook when you have guests?', 'Какое блюдо вы готовите, когда у вас гости?', 'Қонақтарыңыз болғанда қандай тағам пісіресіз?'),
];

$NEW9[145] = [ // My Daily Schedule
    V('Do you check your schedule every morning?', 'Вы проверяете своё расписание каждое утро?', 'Күн сайын таңертең кестеңізді тексересіз бе?'),
    V('What part of your schedule can you never skip?', 'Какую часть расписания вы никогда не пропускаете?', 'Кестеңіздің қай бөлігін ешқашан жібермейсіз?'),
    V('Do you feel like you have too much to do each day?', 'Вам кажется, что у вас слишком много дел каждый день?', 'Күн сайын істер тым көп сияқты ма?'),
    V('How do you organize your tasks?', 'Как вы организуете свои задачи?', 'Тапсырмаларыңызды қалай ретке келтіресіз?'),
    V('Does your schedule change often, or stay the same?', 'Ваше расписание часто меняется или остаётся одинаковым?', 'Кестеңіз жиі өзгере ме, әлде бірдей қала ма?'),
    V('What time do you usually finish work or study?', 'Во сколько вы обычно заканчиваете работу или учёбу?', 'Жұмысты немесе оқуды әдетте неше сағатта аяқтайсыз?'),
    V('Do you use a calendar or planner?', 'Вы используете календарь или планировщик?', 'Күнтізбе немесе жоспарлаушыны пайдаланасыз ба?'),
    V('What would your perfect daily schedule look like?', 'Как бы выглядел ваш идеальный распорядок дня?', 'Сіздің тамаша күнделікті кестеңіз қандай болар еді?'),
    V('Do you ever feel like the day passes too quickly?', 'Вам когда-нибудь кажется, что день проходит слишком быстро?', 'Күн тым тез өтіп кеткендей сезінесіз бе?'),
];

$NEW9[146] = [ // Talking About the Past
    V('What is your earliest childhood memory?', 'Какое ваше самое раннее воспоминание из детства?', 'Балалық шақтағы ең алғашқы естелігіңіз қандай?'),
    V('Did you have a favorite toy or game when you were young?', 'У вас была любимая игрушка или игра в детстве?', 'Жас кезіңізде сүйікті ойыншығыңыз немесе ойыныңыз болды ма?'),
    V('What was your first job?', 'Какая у вас была первая работа?', 'Алғашқы жұмысыңыз қандай болды?'),
    V('How did you meet your best friend?', 'Как вы познакомились со своим лучшим другом?', 'Ең жақын досыңызбен қалай таныстыңыз?'),
    V('What is something you regret from the past?', 'О чём из прошлого вы жалеете?', 'Өткеннен өкінетін нәрсеңіз бар ма?'),
    V('Did you move to a new city or country in the past?', 'Вы когда-то переезжали в новый город или страну?', 'Бұрын жаңа қалаға немесе елге көштіңіз бе?'),
    V('What did people use before smartphones existed?', 'Чем пользовались люди до появления смартфонов?', 'Смартфондар пайда болғанға дейін адамдар нені пайдаланды?'),
    V('What is a mistake you learned a lot from?', 'Какая ошибка научила вас многому?', 'Көп нәрсе үйреткен қатеңіз қандай болды?'),
    V('What was different about school when you were young?', 'Что было по-другому в школе, когда вы были маленьким?', 'Жас кезіңізде мектеп қазіргіден қалай өзгеше болды?'),
];

$NEW9[147] = [ // Talking About the Future
    V('Do you think about the future often?', 'Вы часто думаете о будущем?', 'Болашақ туралы жиі ойлайсыз ба?'),
    V('What job would you like to have in ten years?', 'Какую работу вы хотели бы иметь через десять лет?', 'Он жылдан кейін қандай жұмысыңыз болғанын қалайсыз?'),
    V('Do you want to live in the same city in the future?', 'Вы хотите жить в том же городе в будущем?', 'Болашақта сол қалада тұрғыңыз келе ме?'),
    V('What is something new you want to learn?', 'Что нового вы хотите изучить?', 'Үйренгіңіз келетін жаңа нәрсе қандай?'),
    V('Are you excited or nervous about the future?', 'Вы взволнованы или переживаете за будущее?', 'Болашаққа қуанышты мысыз ба, әлде толқисыз ба?'),
    V('Do you think technology will change your job?', 'Как вы думаете, технологии изменят вашу работу?', 'Сіздің ойыңызша, технология жұмысыңызды өзгертеді ме?'),
    V('What do you hope your life looks like at sixty?', 'Каким вы хотите видеть свою жизнь в шестьдесят лет?', 'Алпыс жаста өміріңіз қандай болғанын қалайсыз?'),
    V('Is there a place you plan to visit in the future?', 'Есть ли место, которое вы планируете посетить в будущем?', 'Болашақта баруды жоспарлап отырған жеріңіз бар ма?'),
    V('What advice would future you give to present you?', 'Какой совет будущий вы дал бы нынешнему себе?', 'Болашақтағы сіз қазіргі өзіңізге қандай кеңес берер еді?'),
];

$NEW9[148] = [ // Common Sounds and Noises
    V('What sound do you find relaxing?', 'Какой звук кажется вам успокаивающим?', 'Сізге қандай дыбыс тыныштандырғыш көрінеді?'),
    V('Do loud parties in your neighborhood ever bother you?', 'Вас когда-нибудь беспокоят громкие вечеринки в вашем районе?', 'Ауданыңыздағы қатты кештер сізді мазалай ма?'),
    V('What sound reminds you of your childhood?', 'Какой звук напоминает вам о детстве?', 'Қандай дыбыс сізге балалық шағыңызды еске түсіреді?'),
    V('Do you sleep with any background noise?', 'Вы спите с каким-нибудь фоновым шумом?', 'Қандай да бір фондық шумен ұйықтайсыз ба?'),
    V('What sound can you never get used to?', 'К какому звуку вы никак не можете привыкнуть?', 'Қандай дыбысқа ешқашан үйрене алмайсыз?'),
    V('Do you notice the sound of nature around you?', 'Вы замечаете звуки природы вокруг себя?', 'Айналаңыздағы табиғат дыбыстарын байқайсыз ба?'),
    V('What is the loudest place you have ever been?', 'Какое самое шумное место, где вы когда-либо были?', 'Болған ең шулы орныңыз қайсы?'),
    V('Do you like the sound of rain?', 'Вам нравится звук дождя?', 'Жаңбыр дыбысын ұнатасыз ба?'),
    V('What noise wakes you up most easily?', 'Какой шум легче всего вас будит?', 'Қандай шу сізді ең оңай оятады?'),
];

$NEW9[149] = [ // Simple Wishes and Dreams
    V('What is something you wish you were better at?', 'В чём вы хотели бы быть лучше?', 'Неде жақсырақ болғыңыз келеді?'),
    V('Do you tell people about your dreams and goals?', 'Вы рассказываете людям о своих мечтах и целях?', 'Армандарыңыз бен мақсаттарыңыз туралы адамдарға айтасыз ба?'),
    V('What is a dream job you would love to have?', 'Какая работа мечты вам бы понравилась?', 'Қандай арман жұмысыңыз болғанын қалайсыз?'),
    V('Have any of your childhood dreams come true?', 'Сбылись ли какие-то из ваших детских мечт?', 'Балалық шақтағы армандарыңыздың бірі орындалды ма?'),
    V('What is one small wish you have for tomorrow?', 'Какое одно маленькое желание у вас есть на завтра?', 'Ертеңге қандай бір кішкентай тілегіңіз бар?'),
    V('Do you write your goals down anywhere?', 'Вы записываете свои цели где-нибудь?', 'Мақсаттарыңызды бір жерге жазып аласыз ба?'),
    V('What would you do if money were not a problem?', 'Что бы вы делали, если бы деньги не были проблемой?', 'Ақша мәселе болмаса, не істер едіңіз?'),
    V('Do you believe hard work makes dreams come true?', 'Вы верите, что упорный труд помогает мечтам сбываться?', 'Қажырлы еңбек армандарды орындайды деп сенесіз бе?'),
    V('What is a place you dream of visiting?', 'Какое место вы мечтаете посетить?', 'Баруды армандайтын жеріңіз қандай?'),
];

$NEW9[150] = [ // At the Post Office
    V('Have you ever waited a long time at the post office?', 'Вы когда-нибудь долго ждали на почте?', 'Поштада ұзақ уақыт күттіңіз бе?'),
    V('Do you prefer paying bills online or in person?', 'Вы предпочитаете оплачивать счета онлайн или лично?', 'Шоттарды онлайн төлегенді ұнатасыз ба, әлде өзіңіз барып па?'),
    V('What is the strangest thing you have ever mailed?', 'Какая самая странная вещь, которую вы когда-либо отправляли по почте?', 'Поштамен жіберген ең таңғаларлық затыңыз қандай болды?'),
    V('Do you trust delivery services in your country?', 'Вы доверяете службам доставки в вашей стране?', 'Еліңіздегі жеткізу қызметтеріне сенесіз бе?'),
    V('Have you ever lost a package in the mail?', 'Вы когда-нибудь теряли посылку по почте?', 'Поштада сәлемдемеңізді жоғалтып алдыңыз ба?'),
    V('What do you usually do while waiting in line?', 'Что вы обычно делаете, ожидая в очереди?', 'Кезекте тұрғанда әдетте не істейсіз?'),
    V('Do you write postcards when you travel?', 'Вы пишете открытки, когда путешествуете?', 'Саяхаттағанда ашық хат жазасыз ба?'),
    V('Have you ever helped someone find the right counter or window?', 'Вы когда-нибудь помогали кому-то найти нужное окошко?', 'Біреуге керекті терезені табуға көмектестіңіз бе?'),
    V('What was the last thing you received in the mail?', 'Что последнее вы получили по почте?', 'Поштамен алған соңғы затыңыз не болды?'),
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
