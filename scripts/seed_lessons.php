<?php
declare(strict_types=1);
// One-off seeding script: inserts 10 curated lessons per level for one teacher.
// Run manually on the server: php seed_lessons.php <teacher_username>

$configPath = '/home/u856637812/config/speaking_club_config.php';
$cfg = require $configPath;
$pdo = new PDO(
    "mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4",
    $cfg['db_user'],
    $cfg['db_pass'],
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$username = $argv[1] ?? null;
if (!$username) {
    fwrite(STDERR, "Usage: php seed_lessons.php <teacher_username>\n");
    exit(1);
}

$stmt = $pdo->prepare('SELECT id FROM teachers WHERE username = ?');
$stmt->execute([$username]);
$teacher = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$teacher) {
    fwrite(STDERR, "Teacher not found: $username\n");
    exit(1);
}
$teacherId = (int)$teacher['id'];

function V(string $en, string $ru, string $kz): array {
    return ['en' => $en, 'ru' => $ru, 'kz' => $kz];
}

$lessons = [];

// ========================= BEGINNER =========================

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Family', 'background_key' => 'warm',
    'warmup' => V(
        "Let's talk about your family. Who do you live with, and who is in your family?",
        'Давайте поговорим о вашей семье. С кем вы живёте и кто входит в вашу семью?',
        'Отбасыңыз туралы сөйлесейік. Сіз кіммен тұрасыз және отбасыңызда кімдер бар?'
    ),
    'vocab' => [
        V('mother', 'мама', 'ана'), V('father', 'папа', 'әке'), V('sister', 'сестра', 'апа/қарындас'),
        V('brother', 'брат', 'аға/іні'), V('grandmother', 'бабушка', 'әже'), V('grandfather', 'дедушка', 'ата'),
        V('son', 'сын', 'ұл'), V('daughter', 'дочь', 'қыз'), V('husband', 'муж', 'күйеу'), V('wife', 'жена', 'әйел'),
    ],
    'questions' => [
        V('How many people are in your family?', 'Сколько человек в вашей семье?', 'Отбасыңызда неше адам бар?'),
        V('Who do you spend the most time with at home?', 'С кем вы проводите больше всего времени дома?', 'Үйде сіз ең көп кіммен уақыт өткізесіз?'),
        V('What do you like to do together as a family?', 'Что вы любите делать вместе всей семьёй?', 'Отбасыңызбен бірге не істегенді ұнатасыз?'),
        V('Who is the oldest person in your family?', 'Кто самый старший в вашей семье?', 'Отбасыңыздағы ең үлкен адам кім?'),
        V('Do you help your family at home? How?', 'Вы помогаете своей семье дома? Как?', 'Үйде отбасыңызға көмектесесіз бе? Қалай?'),
        V('What does your family usually do on weekends?', 'Что ваша семья обычно делает по выходным?', 'Отбасыңыз демалыс күндері әдетте не істейді?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Daily Routine', 'background_key' => 'calm',
    'warmup' => V(
        "Let's talk about a normal day. What do you do from morning until night?",
        'Давайте поговорим об обычном дне. Что вы делаете с утра до вечера?',
        'Кәдімгі күн туралы сөйлесейік. Сіз таңнан кешке дейін не істейсіз?'
    ),
    'vocab' => [
        V('wake up', 'просыпаться', 'ояну'), V('breakfast', 'завтрак', 'таңғы ас'), V('brush teeth', 'чистить зубы', 'тіс тазалау'),
        V('go to work', 'идти на работу', 'жұмысқа бару'), V('lunch', 'обед', 'түскі ас'), V('dinner', 'ужин', 'кешкі ас'),
        V('sleep', 'спать', 'ұйықтау'), V('shower', 'принимать душ', 'душ қабылдау'), V('alarm clock', 'будильник', 'оятқыш'),
        V('evening', 'вечер', 'кеш'),
    ],
    'questions' => [
        V('What time do you usually wake up?', 'Во сколько вы обычно просыпаетесь?', 'Сіз әдетте сағат нешеде оянасыз?'),
        V('What is the first thing you do in the morning?', 'Что вы делаете первым делом утром?', 'Таңертең ең алдымен не істейсіз?'),
        V('Do you eat breakfast every day? What do you eat?', 'Вы завтракаете каждый день? Что вы едите?', 'Сіз күн сайын таңғы ас ішесіз бе? Не жейсіз?'),
        V('What do you usually do in the evening?', 'Что вы обычно делаете вечером?', 'Кеште әдетте не істейсіз?'),
        V('What time do you go to sleep?', 'Во сколько вы ложитесь спать?', 'Сіз сағат нешеде ұйықтайсыз?'),
        V('Is your daily routine the same every day, or does it change?', 'Ваш распорядок дня одинаковый каждый день или меняется?', 'Күн тәртібіңіз күн сайын бірдей ме, әлде өзгереді ме?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Food and Drinks', 'background_key' => 'playful',
    'warmup' => V(
        "Let's talk about food. What do you like to eat and drink?",
        'Давайте поговорим о еде. Что вы любите есть и пить?',
        'Тамақ туралы сөйлесейік. Сіз не жеп, не ішкенді ұнатасыз?'
    ),
    'vocab' => [
        V('bread', 'хлеб', 'нан'), V('rice', 'рис', 'күріш'), V('meat', 'мясо', 'ет'), V('vegetable', 'овощ', 'көкөніс'),
        V('fruit', 'фрукт', 'жеміс'), V('water', 'вода', 'су'), V('tea', 'чай', 'шай'), V('coffee', 'кофе', 'кофе'),
        V('soup', 'суп', 'сорпа'), V('egg', 'яйцо', 'жұмыртқа'),
    ],
    'questions' => [
        V('What is your favorite food?', 'Какая ваша любимая еда?', 'Сіздің сүйікті тағамыңыз қандай?'),
        V('Do you prefer tea or coffee?', 'Вы предпочитаете чай или кофе?', 'Сіз шайды жақсы көресіз бе, әлде кофені ме?'),
        V('What do you usually eat for breakfast?', 'Что вы обычно едите на завтрак?', 'Таңғы асқа әдетте не жейсіз?'),
        V('Is there a food you dislike? Why?', 'Есть ли еда, которая вам не нравится? Почему?', 'Ұнатпайтын тағамыңыз бар ма? Неге?'),
        V('Do you like cooking? What can you cook?', 'Вы любите готовить? Что вы умеете готовить?', 'Тамақ жасағанды ұнатасыз ба? Не піcіре аласыз?'),
        V('What food from another country would you like to try?', 'Какую еду из другой страны вы хотели бы попробовать?', 'Басқа елдің қай тағамын татып көргіңіз келеді?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'My House', 'background_key' => 'calm',
    'warmup' => V(
        "Let's talk about your home. What rooms does it have, and what do you like about it?",
        'Давайте поговорим о вашем доме. Какие в нём комнаты и что вам в нём нравится?',
        'Үйіңіз туралы сөйлесейік. Онда қандай бөлмелер бар және сізге не ұнайды?'
    ),
    'vocab' => [
        V('kitchen', 'кухня', 'ас үй'), V('bedroom', 'спальня', 'жатын бөлме'), V('bathroom', 'ванная', 'жуынатын бөлме'),
        V('living room', 'гостиная', 'қонақ бөлме'), V('door', 'дверь', 'есік'), V('window', 'окно', 'терезе'),
        V('table', 'стол', 'үстел'), V('chair', 'стул', 'орындық'), V('garden', 'сад', 'бақша'), V('roof', 'крыша', 'шатыр'),
    ],
    'questions' => [
        V('How many rooms are there in your house?', 'Сколько комнат в вашем доме?', 'Үйіңізде неше бөлме бар?'),
        V('What is your favorite room? Why?', 'Какая ваша любимая комната? Почему?', 'Сіздің сүйікті бөлмеңіз қайсы? Неге?'),
        V('Do you have a garden? What is in it?', 'У вас есть сад? Что в нём есть?', 'Сізде бақша бар ма? Онда не бар?'),
        V('Is your house big or small?', 'Ваш дом большой или маленький?', 'Үйіңіз үлкен бе, әлде кіші ме?'),
        V('What furniture do you have in your bedroom?', 'Какая мебель есть у вас в спальне?', 'Жатын бөлмеңізде қандай жиһаз бар?'),
        V('Would you like to move to a new house one day? Why?', 'Хотели бы вы когда-нибудь переехать в новый дом? Почему?', 'Бір күні жаңа үйге көшкіңіз келе ме? Неге?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Weather', 'background_key' => 'nature',
    'warmup' => V(
        "Let's talk about the weather. What is the weather like today, and what weather do you like?",
        'Давайте поговорим о погоде. Какая сегодня погода и какую погоду вы любите?',
        'Ауа райы туралы сөйлесейік. Бүгін ауа райы қандай және сізге қандай ауа райы ұнайды?'
    ),
    'vocab' => [
        V('rain', 'дождь', 'жаңбыр'), V('sun', 'солнце', 'күн'), V('snow', 'снег', 'қар'), V('wind', 'ветер', 'жел'),
        V('cloud', 'облако', 'бұлт'), V('hot', 'жарко', 'ыстық'), V('cold', 'холодно', 'суық'), V('storm', 'буря', 'дауыл'),
        V('rainbow', 'радуга', 'кемпірқосақ'), V('umbrella', 'зонт', 'қолшатыр'),
    ],
    'questions' => [
        V('What is the weather like today?', 'Какая сегодня погода?', 'Бүгін ауа райы қандай?'),
        V('What is your favorite season? Why?', 'Какое ваше любимое время года? Почему?', 'Сіздің сүйікті мезгіліңіз қайсы? Неге?'),
        V('Do you like rainy days or sunny days more?', 'Вам больше нравятся дождливые дни или солнечные?', 'Сізге жаңбырлы күндер ұнай ма, әлде күнді ме?'),
        V('What do you wear when it is cold?', 'Что вы надеваете, когда холодно?', 'Суық болғанда не киесіз?'),
        V('Have you ever seen snow? What was it like?', 'Вы когда-нибудь видели снег? Каким он был?', 'Сіз ешқашан қар көрдіңіз бе? Ол қандай болды?'),
        V('What do you do on a rainy day?', 'Что вы делаете в дождливый день?', 'Жаңбырлы күні не істейсіз?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Colors and Clothes', 'background_key' => 'playful',
    'warmup' => V(
        "Let's talk about clothes and colors. What are you wearing today, and what colors do you like?",
        'Давайте поговорим об одежде и цветах. Что на вас надето сегодня и какие цвета вам нравятся?',
        'Киім мен түстер туралы сөйлесейік. Бүгін сізде қандай киім бар және қандай түстерді ұнатасыз?'
    ),
    'vocab' => [
        V('red', 'красный', 'қызыл'), V('blue', 'синий', 'көк'), V('green', 'зелёный', 'жасыл'), V('shirt', 'рубашка', 'көйлек'),
        V('trousers', 'брюки', 'шалбар'), V('shoes', 'обувь', 'аяқкиім'), V('hat', 'шапка', 'бас киім'),
        V('dress', 'платье', 'көйлек (әйел)'), V('jacket', 'куртка', 'күртеше'), V('socks', 'носки', 'шұлық'),
    ],
    'questions' => [
        V('What is your favorite color? Why?', 'Какой ваш любимый цвет? Почему?', 'Сіздің сүйікті түсіңіз қайсы? Неге?'),
        V('What are you wearing right now?', 'Что на вас надето сейчас?', 'Сізде қазір қандай киім бар?'),
        V('Do you prefer bright colors or dark colors?', 'Вы предпочитаете яркие цвета или тёмные?', 'Сізге ашық түстер ұнай ма, әлде қараңғы түстер ме?'),
        V('What clothes do you wear in winter?', 'Какую одежду вы носите зимой?', 'Қыста қандай киім киесіз?'),
        V('Do you like shopping for clothes?', 'Вам нравится покупать одежду?', 'Киім сатып алғанды ұнатасыз ба?'),
        V('What color makes you feel happy?', 'Какой цвет вызывает у вас радость?', 'Қандай түс сізді қуантады?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Animals', 'background_key' => 'nature',
    'warmup' => V(
        "Let's talk about animals. What animals do you like, and have you ever had a pet?",
        'Давайте поговорим о животных. Какие животные вам нравятся, и был ли у вас питомец?',
        'Жануарлар туралы сөйлесейік. Сізге қандай жануарлар ұнайды және сізде үй жануары болды ма?'
    ),
    'vocab' => [
        V('dog', 'собака', 'ит'), V('cat', 'кошка', 'мысық'), V('horse', 'лошадь', 'жылқы'), V('cow', 'корова', 'сиыр'),
        V('bird', 'птица', 'құс'), V('fish', 'рыба', 'балық'), V('lion', 'лев', 'арыстан'), V('elephant', 'слон', 'піл'),
        V('rabbit', 'кролик', 'қоян'), V('sheep', 'овца', 'қой'),
    ],
    'questions' => [
        V('What is your favorite animal? Why?', 'Какое ваше любимое животное? Почему?', 'Сіздің сүйікті жануарыңыз қайсы? Неге?'),
        V('Do you have a pet? Tell me about it.', 'У вас есть питомец? Расскажите о нём.', 'Сізде үй жануары бар ма? Ол туралы айтыңыз.'),
        V('Are you afraid of any animals?', 'Вы боитесь каких-нибудь животных?', 'Сіз қандай да бір жануардан қорқасыз ба?'),
        V('What animal would you like to have as a pet?', 'Какое животное вы хотели бы иметь дома?', 'Үйде қандай жануар ұстағыңыз келеді?'),
        V('Have you ever been to a zoo? What did you see?', 'Вы когда-нибудь были в зоопарке? Что вы видели?', 'Сіз зообақта болдыңыз ба? Не көрдіңіз?'),
        V('Which animal do you think is the smartest?', 'Какое животное, по-вашему, самое умное?', 'Сіздің ойыңызша, қай жануар ең ақылды?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Numbers and Time', 'background_key' => 'calm',
    'warmup' => V(
        "Let's talk about time and numbers. What time is it now, and what is your favorite number?",
        'Давайте поговорим о времени и числах. Который сейчас час и какое ваше любимое число?',
        'Уақыт пен сандар туралы сөйлесейік. Қазір сағат неше және сүйікті санңыз қандай?'
    ),
    'vocab' => [
        V('one', 'один', 'бір'), V('two', 'два', 'екі'), V('three', 'три', 'үш'), V('hour', 'час', 'сағат'),
        V('minute', 'минута', 'минут'), V('morning', 'утро', 'таң'), V('afternoon', 'день', 'түс'), V('night', 'ночь', 'түн'),
        V('clock', 'часы', 'сағат (құрал)'), V('week', 'неделя', 'апта'),
    ],
    'questions' => [
        V('What time do you usually wake up and go to bed?', 'Во сколько вы обычно просыпаетесь и ложитесь спать?', 'Әдетте сағат нешеде оянасыз және ұйықтайсыз?'),
        V('How many hours do you study or work each day?', 'Сколько часов в день вы учитесь или работаете?', 'Күніне неше сағат оқисыз немесе жұмыс істейсіз?'),
        V('What is your favorite day of the week? Why?', 'Какой ваш любимый день недели? Почему?', 'Аптаның сүйікті күні қайсы? Неге?'),
        V('Do you usually arrive on time?', 'Вы обычно приходите вовремя?', 'Сіз әдетте уақытында келесіз бе?'),
        V('What do you do in the morning before school or work?', 'Что вы делаете утром перед школой или работой?', 'Мектепке немесе жұмысқа дейін таңертең не істейсіз?'),
        V('If you had one extra hour every day, what would you do with it?', 'Если бы у вас был лишний час каждый день, что бы вы с ним сделали?', 'Егер күн сайын бір қосымша сағатыңыз болса, онымен не істер едіңіз?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Hobbies', 'background_key' => 'playful',
    'warmup' => V(
        "Let's talk about hobbies. What do you like to do in your free time?",
        'Давайте поговорим об увлечениях. Что вы любите делать в свободное время?',
        'Хобби туралы сөйлесейік. Бос уақытта не істегенді ұнатасыз?'
    ),
    'vocab' => [
        V('reading', 'чтение', 'оқу'), V('drawing', 'рисование', 'сурет салу'), V('singing', 'пение', 'ән айту'),
        V('dancing', 'танцы', 'би билеу'), V('swimming', 'плавание', 'жүзу'), V('cooking', 'готовка', 'тамақ пісіру'),
        V('fishing', 'рыбалка', 'балық аулау'), V('painting', 'живопись', 'сурет'), V('cycling', 'велоспорт', 'велосипед тебу'),
        V('gardening', 'садоводство', 'бақша баптау'),
    ],
    'questions' => [
        V('What is your favorite hobby?', 'Какое ваше любимое хобби?', 'Сіздің сүйікті хоббиіңіз қайсы?'),
        V('When did you start doing this hobby?', 'Когда вы начали заниматься этим хобби?', 'Бұл хоббимен қашан айналыса бастадыңыз?'),
        V('Do you have a hobby you want to try?', 'Есть ли хобби, которое вы хотите попробовать?', 'Байқап көргіңіз келетін хоббиіңіз бар ма?'),
        V('Do you prefer hobbies alone or with friends?', 'Вы предпочитаете хобби в одиночку или с друзьями?', 'Хоббиді жалғыз істегенді ұнатасыз ба, әлде достарыңызбен бе?'),
        V('How much time do you spend on your hobby each week?', 'Сколько времени в неделю вы уделяете хобби?', 'Аптасына хоббиге қанша уақыт бөлесіз?'),
        V('Can a hobby become a job? Give an example.', 'Может ли хобби стать работой? Приведите пример.', 'Хобби жұмысқа айнала ала ма? Мысал келтіріңіз.'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Body Parts', 'background_key' => 'calm',
    'warmup' => V(
        "Let's talk about the human body. Can you name the parts of your body?",
        'Давайте поговорим о теле человека. Можете назвать части своего тела?',
        'Адам денесі туралы сөйлесейік. Дене мүшелеріңізді атай аласыз ба?'
    ),
    'vocab' => [
        V('head', 'голова', 'бас'), V('hand', 'рука', 'қол'), V('leg', 'нога', 'аяқ'), V('eye', 'глаз', 'көз'),
        V('ear', 'ухо', 'құлақ'), V('nose', 'нос', 'мұрын'), V('mouth', 'рот', 'ауыз'), V('hair', 'волосы', 'шаш'),
        V('finger', 'палец', 'саусақ'), V('foot', 'ступня', 'табан'),
    ],
    'questions' => [
        V('Do you exercise to keep your body healthy?', 'Вы занимаетесь спортом, чтобы быть здоровым?', 'Денсаулығыңызды сақтау үшін жаттығасыз ба?'),
        V('What do you do when you have a headache?', 'Что вы делаете, когда у вас болит голова?', 'Басыңыз ауырғанда не істейсіз?'),
        V('How many hours do you sleep to feel rested?', 'Сколько часов вы спите, чтобы чувствовать себя отдохнувшим?', 'Тынықты сезіну үшін неше сағат ұйықтайсыз?'),
        V('What is your favorite way to relax your body?', 'Как вы любите расслаблять своё тело?', 'Денеңізді босаңсытудың сүйікті тәсілі қандай?'),
        V('Do you wash your hands often? Why is it important?', 'Вы часто моете руки? Почему это важно?', 'Қолыңызды жиі жуасыз ба? Бұл неге маңызды?'),
        V('What sport is good for the whole body?', 'Какой спорт полезен для всего тела?', 'Бүкіл денеге пайдалы спорт түрі қандай?'),
    ],
];

// ========================= ELEMENTARY =========================

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Travel and Transportation', 'background_key' => 'energetic',
    'warmup' => V(
        "Let's talk about travel. How do you usually travel, and where would you like to go?",
        'Давайте поговорим о путешествиях. Как вы обычно путешествуете и куда хотели бы поехать?',
        'Саяхат туралы сөйлесейік. Әдетте қалай саяхаттайсыз және қайда барғыңыз келеді?'
    ),
    'vocab' => [
        V('airport', 'аэропорт', 'әуежай'), V('ticket', 'билет', 'билет'), V('passport', 'паспорт', 'паспорт'),
        V('suitcase', 'чемодан', 'чемодан'), V('train', 'поезд', 'пойыз'), V('flight', 'рейс', 'рейс'),
        V('taxi', 'такси', 'такси'), V('journey', 'путешествие', 'сапар'), V('delay', 'задержка', 'кідіріс'),
        V('luggage', 'багаж', 'жүк'),
    ],
    'questions' => [
        V('What is your favorite way to travel? Why?', 'Какой ваш любимый способ путешествовать? Почему?', 'Саяхаттаудың сүйікті тәсілі қандай? Неге?'),
        V('Have you ever missed a flight or train? What happened?', 'Вы когда-нибудь опаздывали на самолёт или поезд? Что случилось?', 'Ұшаққа немесе пойызға кешіктіңіз бе? Не болды?'),
        V('What do you always pack when you travel?', 'Что вы всегда берёте с собой в поездку?', 'Саяхатқа шыққанда әрдайым не аласыз?'),
        V('Which country would you most like to visit? Why?', 'Какую страну вы больше всего хотели бы посетить? Почему?', 'Қай елге баруды ең көп қалайсыз? Неге?'),
        V('Do you prefer traveling alone or with others?', 'Вы предпочитаете путешествовать одни или с кем-то?', 'Жалғыз саяхаттағанды ұнатасыз ба, әлде біреумен бе?'),
        V('What was the best trip you have ever had?', 'Какая была ваша лучшая поездка?', 'Сіздің ең тамаша сапарыңыз қандай болды?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Shopping', 'background_key' => 'playful',
    'warmup' => V(
        "Let's talk about shopping. Where do you usually shop, and what do you like to buy?",
        'Давайте поговорим о шопинге. Где вы обычно делаете покупки и что любите покупать?',
        'Сауда туралы сөйлесейік. Әдетте қайдан сатып аласыз және не сатып алғанды ұнатасыз?'
    ),
    'vocab' => [
        V('market', 'рынок', 'базар'), V('price', 'цена', 'баға'), V('discount', 'скидка', 'жеңілдік'),
        V('receipt', 'чек', 'чек'), V('cashier', 'кассир', 'кассир'), V('bargain', 'выгодная покупка', 'тиімді сатып алу'),
        V('mall', 'торговый центр', 'сауда орталығы'), V('refund', 'возврат денег', 'ақшаны қайтару'),
        V('customer', 'покупатель', 'сатып алушы'), V('sale', 'распродажа', 'жеңілдік науқаны'),
    ],
    'questions' => [
        V('Do you prefer shopping in a mall or a market? Why?', 'Вы предпочитаете делать покупки в торговом центре или на рынке? Почему?', 'Сауда орталығынан сатып алғанды ұнатасыз ба, әлде базардан ба? Неге?'),
        V('Do you like to bargain for a better price?', 'Вы любите торговаться за более низкую цену?', 'Арзанырақ баға үшін керісуді ұнатасыз ба?'),
        V('What was the last thing you bought?', 'Что вы купили в последний раз?', 'Соңғы рет не сатып алдыңыз?'),
        V('Have you ever returned something you bought? Why?', 'Вы когда-нибудь возвращали купленную вещь? Почему?', 'Сатып алған затыңызды қайтарғаныңыз бар ма? Неге?'),
        V('Do you plan your shopping or buy things spontaneously?', 'Вы планируете покупки или покупаете спонтанно?', 'Сатып алуды жоспарлайсыз ба, әлде кенеттен сатып аласыз ба?'),
        V('What do you think about online shopping compared to shops?', 'Что вы думаете об онлайн-шопинге по сравнению с магазинами?', 'Онлайн сауда мен дүкендерді салыстырғанда не ойлайсыз?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Health and Body', 'background_key' => 'calm',
    'warmup' => V(
        "Let's talk about health. What do you do to stay healthy?",
        'Давайте поговорим о здоровье. Что вы делаете, чтобы оставаться здоровым?',
        'Денсаулық туралы сөйлесейік. Сау болу үшін не істейсіз?'
    ),
    'vocab' => [
        V('doctor', 'врач', 'дәрігер'), V('hospital', 'больница', 'аурухана'), V('medicine', 'лекарство', 'дәрі'),
        V('headache', 'головная боль', 'бас ауруы'), V('fever', 'температура', 'қызу'), V('injury', 'травма', 'жарақат'),
        V('pharmacy', 'аптека', 'дәріхана'), V('nurse', 'медсестра', 'мейіргер'), V('appointment', 'запись на приём', 'қабылдауға жазылу'),
        V('exercise', 'физическая нагрузка', 'дене жаттығуы'),
    ],
    'questions' => [
        V('What do you usually do when you feel sick?', 'Что вы обычно делаете, когда чувствуете себя плохо?', 'Өзіңізді жаман сезінгенде әдетте не істейсіз?'),
        V('How often do you visit a doctor?', 'Как часто вы посещаете врача?', 'Дәрігерге қаншалықты жиі барасыз?'),
        V('What do you do to keep your body fit?', 'Что вы делаете, чтобы поддерживать форму?', 'Денеңізді сергек ұстау үшін не істейсіз?'),
        V('Have you ever had an injury? What happened?', 'У вас когда-нибудь была травма? Что произошло?', 'Сізде жарақат болды ма? Не болды?'),
        V('What healthy habits would you like to start?', 'Какие полезные привычки вы хотели бы завести?', 'Қандай пайдалы әдеттерді бастағыңыз келеді?'),
        V('Do you think sleep affects your health? How?', 'Как, по-вашему, сон влияет на здоровье?', 'Ұйқы денсаулыққа қалай әсер етеді деп ойлайсыз?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Sports', 'background_key' => 'energetic',
    'warmup' => V(
        "Let's talk about sports. What sports do you play or enjoy watching?",
        'Давайте поговорим о спорте. В какие виды спорта вы играете или любите смотреть?',
        'Спорт туралы сөйлесейік. Қандай спорт түрлерін ойнайсыз немесе көргенді ұнатасыз?'
    ),
    'vocab' => [
        V('football', 'футбол', 'футбол'), V('basketball', 'баскетбол', 'баскетбол'), V('tennis', 'теннис', 'теннис'),
        V('swimming pool', 'бассейн', 'бассейн'), V('coach', 'тренер', 'жаттықтырушы'), V('team', 'команда', 'команда'),
        V('referee', 'судья', 'төреші'), V('score', 'счёт', 'есеп'), V('championship', 'чемпионат', 'чемпионат'),
        V('stadium', 'стадион', 'стадион'),
    ],
    'questions' => [
        V('What is your favorite sport to watch or play?', 'Какой ваш любимый вид спорта — смотреть или играть?', 'Сүйікті спорт түріңіз қайсы — көру ме, ойнау ма?'),
        V('Have you ever been to a stadium for a game?', 'Вы когда-нибудь были на стадионе на игре?', 'Ойынға стадионға барғаныңыз бар ма?'),
        V('Do you play any sport regularly? How often?', 'Вы регулярно занимаетесь каким-либо спортом? Как часто?', 'Тұрақты түрде қандай да бір спортпен айналысасыз ба? Қаншалықты жиі?'),
        V('Do you prefer team sports or individual sports?', 'Вы предпочитаете командные виды спорта или индивидуальные?', 'Командалық спортты ұнатасыз ба, әлде жеке спортты ма?'),
        V('Who is your favorite athlete or team?', 'Кто ваш любимый спортсмен или команда?', 'Сүйікті спортшыңыз немесе командаңыз кім?'),
        V('Do you think sports are important for children? Why?', 'Как вы думаете, важен ли спорт для детей? Почему?', 'Балалар үшін спорт маңызды деп ойлайсыз ба? Неге?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Seasons and Holidays', 'background_key' => 'warm',
    'warmup' => V(
        "Let's talk about seasons and holidays. Which season and holiday do you like best?",
        'Давайте поговорим о временах года и праздниках. Какое время года и какой праздник вам нравятся больше всего?',
        'Мезгілдер мен мерекелер туралы сөйлесейік. Қай мезгіл мен мереке сізге көбірек ұнайды?'
    ),
    'vocab' => [
        V('spring', 'весна', 'көктем'), V('summer', 'лето', 'жаз'), V('autumn', 'осень', 'күз'), V('winter', 'зима', 'қыс'),
        V('festival', 'фестиваль', 'фестиваль'), V('vacation', 'отпуск', 'демалыс'), V('celebration', 'празднование', 'мереке тойлау'),
        V('calendar', 'календарь', 'күнтізбе'), V('tradition', 'традиция', 'дәстүр'), V('gift', 'подарок', 'сыйлық'),
    ],
    'questions' => [
        V('What is your favorite season? Why?', 'Какое ваше любимое время года? Почему?', 'Сүйікті мезгіліңіз қайсы? Неге?'),
        V('What holiday do you enjoy celebrating the most?', 'Какой праздник вам больше всего нравится отмечать?', 'Қай мерекені тойлауды ең көп ұнатасыз?'),
        V('How does your family celebrate holidays?', 'Как ваша семья отмечает праздники?', 'Отбасыңыз мерекелерді қалай тойлайды?'),
        V('Do you prefer giving gifts or receiving them?', 'Вы предпочитаете дарить подарки или получать их?', 'Сыйлық сыйлағанды ұнатасыз ба, әлде алғанды ма?'),
        V('What do you usually do during your vacation?', 'Что вы обычно делаете во время отпуска?', 'Демалыс кезінде әдетте не істейсіз?'),
        V('Is there a tradition from your culture you especially like?', 'Есть ли традиция вашей культуры, которая вам особенно нравится?', 'Мәдениетіңіздегі әсіресе ұнайтын дәстүр бар ма?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Technology', 'background_key' => 'night-city',
    'warmup' => V(
        "Let's talk about technology. What devices do you use every day?",
        'Давайте поговорим о технологиях. Какими устройствами вы пользуетесь каждый день?',
        'Технология туралы сөйлесейік. Күн сайын қандай құрылғыларды пайдаланасыз?'
    ),
    'vocab' => [
        V('computer', 'компьютер', 'компьютер'), V('internet', 'интернет', 'интернет'), V('smartphone', 'смартфон', 'смартфон'),
        V('password', 'пароль', 'құпия сөз'), V('application', 'приложение', 'қолданба'), V('wifi', 'вай-фай', 'wifi'),
        V('keyboard', 'клавиатура', 'пернетақта'), V('screen', 'экран', 'экран'), V('download', 'скачать', 'жүктеп алу'),
        V('battery', 'батарея', 'батарея'),
    ],
    'questions' => [
        V('How many hours a day do you spend on your phone?', 'Сколько часов в день вы проводите за телефоном?', 'Күніне телефонда неше сағат өткізесіз?'),
        V('What app do you use the most? Why?', 'Каким приложением вы пользуетесь чаще всего? Почему?', 'Ең жиі қай қолданбаны пайдаланасыз? Неге?'),
        V('Could you live without the internet for a week?', 'Смогли бы вы прожить неделю без интернета?', 'Аптасына интернетсіз өмір сүре алар ма едіңіз?'),
        V('What new technology has changed your life the most?', 'Какая новая технология больше всего изменила вашу жизнь?', 'Қай жаңа технология өміріңізді ең көп өзгертті?'),
        V('Do you think children spend too much time on screens?', 'Как вы думаете, дети проводят слишком много времени за экранами?', 'Балалар экранда тым көп уақыт өткізеді деп ойлайсыз ба?'),
        V('What technology do you think will be common in 10 years?', 'Какая технология, по-вашему, станет обычной через 10 лет?', '10 жылдан кейін қандай технология кең таралады деп ойлайсыз?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'City and Directions', 'background_key' => 'night-city',
    'warmup' => V(
        "Let's talk about your city. How do you find your way around, and what places do you like?",
        'Давайте поговорим о вашем городе. Как вы находите дорогу и какие места вам нравятся?',
        'Қалаңыз туралы сөйлесейік. Жолды қалай табасыз және қандай жерлер ұнайды?'
    ),
    'vocab' => [
        V('street', 'улица', 'көше'), V('corner', 'угол', 'бұрыш'), V('crossroad', 'перекрёсток', 'айырық'),
        V('map', 'карта', 'карта'), V('traffic light', 'светофор', 'бағдаршам'), V('bridge', 'мост', 'көпір'),
        V('avenue', 'проспект', 'даңғыл'), V('roundabout', 'кольцевая развязка', 'айналма қозғалыс'),
        V('pedestrian', 'пешеход', 'жаяу жүргінші'), V('signpost', 'указатель', 'нұсқаулық белгі'),
    ],
    'questions' => [
        V('Do you know your city well, or do you often get lost?', 'Вы хорошо знаете свой город или часто теряетесь?', 'Қалаңызды жақсы білесіз бе, әлде жиі адасасыз ба?'),
        V('How do you usually get around your city?', 'Как вы обычно передвигаетесь по городу?', 'Қала бойынша әдетте қалай жүресіз?'),
        V('What is your favorite place in your city?', 'Какое ваше любимое место в городе?', 'Қаладағы сүйікті орныңыз қайсы?'),
        V('Do you prefer using a map app or asking people for directions?', 'Вы предпочитаете пользоваться картой в телефоне или спрашивать дорогу у людей?', 'Телефондағы картаны пайдаланғанды ұнатасыз ба, әлде адамдардан сұрағанды ма?'),
        V('Is traffic a big problem in your city?', 'Пробки — большая проблема в вашем городе?', 'Қалаңызда көлік кептелісі үлкен мәселе ме?'),
        V('If a tourist visited your city, where would you take them?', 'Если бы к вам приехал турист, куда бы вы его повели?', 'Егер қалаңызға турист келсе, оны қайда апарар едіңіз?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Jobs and Careers', 'background_key' => 'professional',
    'warmup' => V(
        "Let's talk about jobs. What job do you have or want to have in the future?",
        'Давайте поговорим о работе. Кем вы работаете или кем хотите работать в будущем?',
        'Жұмыс туралы сөйлесейік. Сіз кіммен жұмыс істейсіз немесе болашақта кім болғыңыз келеді?'
    ),
    'vocab' => [
        V('engineer', 'инженер', 'инженер'), V('teacher', 'учитель', 'мұғалім'), V('lawyer', 'юрист', 'заңгер'),
        V('salary', 'зарплата', 'жалақы'), V('interview', 'собеседование', 'сұхбат'), V('office', 'офис', 'кеңсе'),
        V('employee', 'сотрудник', 'қызметкер'), V('promotion', 'повышение', 'жоғарылату'), V('resume', 'резюме', 'түйіндеме'),
        V('workplace', 'рабочее место', 'жұмыс орны'),
    ],
    'questions' => [
        V('What job would you like to have in the future? Why?', 'Кем вы хотели бы работать в будущем? Почему?', 'Болашақта кім болып жұмыс істегіңіз келеді? Неге?'),
        V('What is the most important thing for you in a job?', 'Что для вас самое важное в работе?', 'Жұмыста сіз үшін ең маңыздысы не?'),
        V('Have you ever had a job interview? How did it go?', 'У вас когда-нибудь было собеседование? Как оно прошло?', 'Сізде сұхбат болды ма? Қалай өтті?'),
        V('Would you rather work in an office or from home?', 'Вы бы предпочли работать в офисе или из дома?', 'Кеңседе жұмыс істегенді қалайсыз ба, әлде үйден бе?'),
        V('What skills are important for getting a good job?', 'Какие навыки важны для получения хорошей работы?', 'Жақсы жұмыс табу үшін қандай дағдылар маңызды?'),
        V('Do you think salary is more important than job satisfaction?', 'Как вы думаете, зарплата важнее удовлетворения от работы?', 'Жалақы жұмыстан алатын қанағаттан маңыздырақ деп ойлайсыз ба?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Free Time Activities', 'background_key' => 'playful',
    'warmup' => V(
        "Let's talk about free time. What do you like to do when you are not working or studying?",
        'Давайте поговорим о свободном времени. Что вы любите делать, когда не работаете и не учитесь?',
        'Бос уақыт туралы сөйлесейік. Жұмыс істемегенде немесе оқымағанда не істегенді ұнатасыз?'
    ),
    'vocab' => [
        V('museum', 'музей', 'мұражай'), V('concert', 'концерт', 'концерт'), V('cinema', 'кинотеатр', 'кинотеатр'),
        V('exhibition', 'выставка', 'көрме'), V('weekend', 'выходные', 'демалыс күндері'), V('relax', 'расслабляться', 'демалу'),
        V('board game', 'настольная игра', 'үстел ойыны'), V('picnic', 'пикник', 'пикник'), V('karaoke', 'караоке', 'караоке'),
        V('hobby', 'хобби', 'хобби'),
    ],
    'questions' => [
        V('What do you usually do on weekends?', 'Что вы обычно делаете по выходным?', 'Демалыс күндері әдетте не істейсіз?'),
        V('Do you prefer active activities or relaxing at home?', 'Вы предпочитаете активный отдых или отдых дома?', 'Белсенді демалуды ұнатасыз ба, әлде үйде демалғанды ма?'),
        V('When was the last time you went to the cinema or a concert?', 'Когда вы в последний раз ходили в кино или на концерт?', 'Соңғы рет кинотеатрға немесе концертке қашан бардыңыз?'),
        V('What free time activity would you like to try?', 'Какое занятие в свободное время вы хотели бы попробовать?', 'Бос уақытта қандай әрекетті сынап көргіңіз келеді?'),
        V('Do you enjoy spending free time alone or with friends?', 'Вам нравится проводить свободное время в одиночку или с друзьями?', 'Бос уақытты жалғыз өткізгенді ұнатасыз ба, әлде достарыңызбен бе?'),
        V('How important is free time for a healthy life?', 'Насколько важно свободное время для здоровой жизни?', 'Бос уақыт салауатты өмір үшін қаншалықты маңызды?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Restaurants and Eating Out', 'background_key' => 'warm',
    'warmup' => V(
        "Let's talk about eating out. Do you like going to restaurants? What kind of food do you order?",
        'Давайте поговорим о походах в кафе и рестораны. Вы любите ходить в рестораны? Какую еду вы заказываете?',
        'Мейрамханаға баруды сөйлесейік. Мейрамханаға баруды ұнатасыз ба? Қандай тағам тапсырыс бересіз?'
    ),
    'vocab' => [
        V('menu', 'меню', 'мәзір'), V('waiter', 'официант', 'даяршы'), V('reservation', 'бронирование', 'орын брондау'),
        V('bill', 'счёт', 'чек'), V('appetizer', 'закуска', 'алдын ала тағам'), V('dessert', 'десерт', 'десерт'),
        V('tip', 'чаевые', 'шайпұл'), V('table', 'столик', 'үстел'), V('order', 'заказ', 'тапсырыс'), V('chef', 'шеф-повар', 'аспаз'),
    ],
    'questions' => [
        V('How often do you eat at restaurants?', 'Как часто вы едите в ресторанах?', 'Мейрамханада қаншалықты жиі тамақтанасыз?'),
        V('What is your favorite type of restaurant food?', 'Какая ваша любимая ресторанная еда?', 'Мейрамханадағы сүйікті тағамыңыз қандай?'),
        V('Do you usually leave a tip? Why or why not?', 'Вы обычно оставляете чаевые? Почему да или нет?', 'Әдетте шайпұл қалдырасыз ба? Неге ия немесе жоқ?'),
        V('Have you ever had a bad experience at a restaurant?', 'У вас когда-нибудь был плохой опыт в ресторане?', 'Мейрамханада жаман тәжірибеңіз болды ма?'),
        V('Do you prefer cooking at home or eating out?', 'Вы предпочитаете готовить дома или есть вне дома?', 'Үйде тамақ жасағанды ұнатасыз ба, әлде сыртта тамақтанғанды ма?'),
        V('What makes a restaurant a great place to eat?', 'Что делает ресторан отличным местом для еды?', 'Мейрамхананы тамақтанатын тамаша орынға не айналдырады?'),
    ],
];

require __DIR__ . '/seed_lessons_part2.php';

$insert = $pdo->prepare(
    'INSERT INTO lessons (teacher_id, level, topic, vocab, warmup, questions, background_key)
     VALUES (:teacher_id, :level, :topic, :vocab, :warmup, :questions, :background_key)'
);

$count = 0;
foreach ($lessons as $lesson) {
    $insert->execute([
        ':teacher_id' => $teacherId,
        ':level' => $lesson['level'],
        ':topic' => $lesson['topic'],
        ':vocab' => json_encode($lesson['vocab'], JSON_UNESCAPED_UNICODE),
        ':warmup' => json_encode($lesson['warmup'], JSON_UNESCAPED_UNICODE),
        ':questions' => json_encode($lesson['questions'], JSON_UNESCAPED_UNICODE),
        ':background_key' => $lesson['background_key'],
    ]);
    $count++;
}

echo "Inserted $count lessons for teacher '$username' (id $teacherId).\n";
