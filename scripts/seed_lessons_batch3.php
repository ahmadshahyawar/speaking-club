<?php
declare(strict_types=1);
// Batch 3: 15 more lessons per level (beginner + elementary here, pre-intermediate
// + intermediate in seed_lessons_batch3_part2.php). Run once: php seed_lessons_batch3.php <username>

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
    fwrite(STDERR, "Usage: php seed_lessons_batch3.php <teacher_username>\n");
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

// ========================= BEGINNER (batch 3) =========================

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Clothes Shopping', 'background_key' => 'playful',
    'warmup' => V("Let's talk about buying clothes. What do you look for when you try on new clothes?", 'Давайте поговорим о покупке одежды. Что вы ищете, когда примеряете новую одежду?', 'Киім сатып алу туралы сөйлесейік. Жаңа киімді өлшеп көргенде нені іздейсіз?'),
    'vocab' => [V('try on', 'примерять', 'өлшеп көру'), V('fit', 'подходить по размеру', 'сәйкес келу'), V('size', 'размер', 'өлшем'), V('changing room', 'примерочная', 'киім ауыстыратын бөлме'), V('mirror', 'зеркало', 'айна'), V('wear', 'носить', 'кию'), V('fashionable', 'модный', 'сәнді'), V('comfortable', 'удобный', 'ыңғайлы'), V('tight', 'узкий/тесный', 'тар'), V('loose', 'свободный', 'бос')],
    'questions' => [
        V('Do you like trying on clothes before buying them?', 'Вам нравится примерять одежду перед покупкой?', 'Сатып алмас бұрын киімді өлшеп көргенді ұнатасыз ба?'),
        V('Do you prefer tight or loose clothes?', 'Вы предпочитаете узкую или свободную одежду?', 'Тар киімді ұнатасыз ба, әлде бос киімді ме?'),
        V('What is more important to you: fashion or comfort?', 'Что для вас важнее: мода или комфорт?', 'Сіз үшін не маңыздырақ: сән бе, ыңғайлылық па?'),
        V('Have you ever bought clothes that didn\'t fit?', 'Вы когда-нибудь покупали одежду, которая не подошла?', 'Сәйкес келмеген киім сатып алдыңыз ба?'),
        V('Do you know your clothing size?', 'Вы знаете свой размер одежды?', 'Киім өлшеміңізді білесіз бе?'),
        V('Who do you usually go shopping for clothes with?', 'С кем вы обычно ходите за одеждой?', 'Киімге әдетте кіммен барасыз?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Cooking Basics', 'background_key' => 'playful',
    'warmup' => V("Let's talk about kitchen tools. What tools do you use most when you cook?", 'Давайте поговорим о кухонных инструментах. Какие инструменты вы используете чаще всего, когда готовите?', 'Ас үй құралдары туралы сөйлесейік. Тамақ жасағанда қандай құралдарды жиі пайдаланасыз?'),
    'vocab' => [V('pot', 'кастрюля', 'қазан'), V('pan', 'сковорода', 'таба'), V('knife', 'нож', 'пышақ'), V('spoon', 'ложка', 'қасық'), V('fork', 'вилка', 'шанышқы'), V('plate', 'тарелка', 'тәрелке'), V('bowl', 'миска', 'тостаған'), V('stove', 'плита', 'плита'), V('fridge', 'холодильник', 'тоңазытқыш'), V('microwave', 'микроволновка', 'микротолқынды пеш')],
    'questions' => [
        V('What kitchen tool do you use the most?', 'Каким кухонным инструментом вы пользуетесь чаще всего?', 'Ас үй құралдарының қайсысын жиі пайдаланасыз?'),
        V('Do you use a microwave often?', 'Вы часто пользуетесь микроволновкой?', 'Микротолқынды пешті жиі пайдаланасыз ба?'),
        V('What is always in your fridge?', 'Что всегда есть в вашем холодильнике?', 'Тоңазытқышыңызда әрдайым не бар?'),
        V('Do you enjoy washing dishes after cooking?', 'Вам нравится мыть посуду после готовки?', 'Тамақ жасағаннан кейін ыдыс жууды ұнатасыз ба?'),
        V('Is your kitchen big or small?', 'Ваша кухня большая или маленькая?', 'Ас үйіңіз үлкен бе, әлде кіші ме?'),
        V('What is the most important tool in a kitchen for you?', 'Какой инструмент на кухне самый важный для вас?', 'Сіз үшін ас үйдегі ең маңызды құрал қандай?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'My Neighborhood', 'background_key' => 'calm',
    'warmup' => V("Let's talk about your neighborhood. Is it quiet or noisy, and do you like living there?", 'Давайте поговорим о вашем районе. Он тихий или шумный, и нравится ли вам там жить?', 'Ауданыңыз туралы сөйлесейік. Ол тыныш па, әлде шулы ма, және сол жерде тұрғанды ұнатасыз ба?'),
    'vocab' => [V('street', 'улица', 'көше'), V('neighbor', 'сосед', 'көрші'), V('quiet', 'тихий', 'тыныш'), V('noisy', 'шумный', 'шулы'), V('safe', 'безопасный', 'қауіпсіз'), V('friendly', 'дружелюбный', 'достық'), V('house', 'дом', 'үй'), V('apartment', 'квартира', 'пәтер'), V('garden', 'сад', 'бақша'), V('fence', 'забор', 'қоршау')],
    'questions' => [
        V('Is your neighborhood quiet or noisy?', 'Ваш район тихий или шумный?', 'Ауданыңыз тыныш па, әлде шулы ма?'),
        V('Do you feel safe walking in your neighborhood at night?', 'Вы чувствуете себя в безопасности, гуляя по своему району ночью?', 'Түнде ауданыңызда жүргенде өзіңізді қауіпсіз сезінесіз бе?'),
        V('Are your neighbors friendly?', 'Ваши соседи дружелюбные?', 'Көршілеріңіз достық па?'),
        V('Do you have a garden or a balcony?', 'У вас есть сад или балкон?', 'Сізде бақша немесе балкон бар ма?'),
        V('What do you like most about where you live?', 'Что вам больше всего нравится в том, где вы живёте?', 'Тұрған жеріңізде сізге ең көп не ұнайды?'),
        V('Would you like to move to a different neighborhood?', 'Хотели бы вы переехать в другой район?', 'Басқа ауданға көшкіңіз келе ме?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Talking About Age', 'background_key' => 'calm',
    'warmup' => V("Let's talk about age. How old are you, and how do you feel about getting older?", 'Давайте поговорим о возрасте. Сколько вам лет и как вы относитесь к тому, что становитесь старше?', 'Жас туралы сөйлесейік. Сіз нешедесіз және жасыңыз үлкейгеніне қалай қарайсыз?'),
    'vocab' => [V('young', 'молодой', 'жас'), V('old', 'старый', 'кәрі'), V('birthday', 'день рождения', 'туған күн'), V('age', 'возраст', 'жас (шама)'), V('born', 'родился', 'туылған'), V('grow up', 'взрослеть', 'есею'), V('adult', 'взрослый', 'ересек'), V('teenager', 'подросток', 'жасөспірім'), V('child', 'ребёнок', 'бала'), V('elderly', 'пожилой', 'қарт')],
    'questions' => [
        V('When is your birthday?', 'Когда у вас день рождения?', 'Туған күніңіз қашан?'),
        V('Where were you born?', 'Где вы родились?', 'Сіз қайда туылдыңыз?'),
        V('Do you feel different now than when you were a teenager?', 'Вы чувствуете себя иначе, чем в подростковом возрасте?', 'Қазір жасөспірім кезіңізден басқаша сезінесіз бе?'),
        V('What do you think is the best age to be?', 'Как вы думаете, какой возраст самый лучший?', 'Сіздің ойыңызша, ең жақсы жас қанша?'),
        V('How do you usually celebrate your birthday?', 'Как вы обычно отмечаете день рождения?', 'Туған күніңізді әдетте қалай тойлайсыз?'),
        V('Do you think age is just a number?', 'Как вы думаете, возраст — это просто число?', 'Жас — жай ғана сан деп ойлайсыз ба?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Simple Directions', 'background_key' => 'night-city',
    'warmup' => V("Let's talk about directions. How do you explain the way to your home?", 'Давайте поговорим о направлениях. Как вы объясняете дорогу к своему дому?', 'Бағыттар туралы сөйлесейік. Үйіңізге баратын жолды қалай түсіндіресіз?'),
    'vocab' => [V('left', 'налево', 'солға'), V('right', 'направо', 'оңға'), V('straight', 'прямо', 'тіке'), V('turn', 'поворачивать', 'бұрылу'), V('near', 'близко', 'жақын'), V('far', 'далеко', 'алыс'), V('here', 'здесь', 'мұнда'), V('there', 'там', 'сонда'), V('next to', 'рядом с', 'қасында'), V('opposite', 'напротив', 'қарама-қарсы')],
    'questions' => [
        V('How do you get from your home to the nearest shop?', 'Как вы добираетесь от дома до ближайшего магазина?', 'Үйіңізден ең жақын дүкенге қалай барасыз?'),
        V('Is your workplace or school near or far from home?', 'Ваша работа или школа близко или далеко от дома?', 'Жұмысыңыз немесе мектебіңіз үйден жақын ба, әлде алыс па?'),
        V('Do you easily get lost in new places?', 'Вы легко теряетесь в новых местах?', 'Жаңа жерлерде оңай адасасыз ба?'),
        V('Do you prefer using a map or asking someone for directions?', 'Вы предпочитаете пользоваться картой или спрашивать дорогу у кого-то?', 'Картаны пайдаланғанды ұнатасыз ба, әлде біреуден сұрағанды ма?'),
        V('What is next to your house?', 'Что находится рядом с вашим домом?', 'Үйіңіздің қасында не бар?'),
        V('Can you give directions to your favorite place from here?', 'Можете дать указания до вашего любимого места отсюда?', 'Осы жерден сүйікті орныңызға дейінгі жолды түсіндіре аласыз ба?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'The Human Senses', 'background_key' => 'calm',
    'warmup' => V("Let's talk about the five senses. Which sense do you think is the most important?", 'Давайте поговорим о пяти чувствах. Какое чувство, по-вашему, самое важное?', 'Бес сезім мүшесі туралы сөйлесейік. Сіздің ойыңызша, қай сезім ең маңызды?'),
    'vocab' => [V('see', 'видеть', 'көру'), V('hear', 'слышать', 'есту'), V('smell', 'нюхать/запах', 'иіскеу'), V('taste', 'пробовать на вкус', 'дәмін тату'), V('touch', 'трогать', 'ұстау'), V('bright', 'яркий', 'жарқын'), V('loud', 'громкий', 'қатты (дауыс)'), V('quiet', 'тихий', 'тыныш'), V('soft', 'мягкий', 'жұмсақ'), V('sweet', 'сладкий', 'тәтті')],
    'questions' => [
        V('Which sense would be hardest for you to lose?', 'Без какого чувства вам было бы труднее всего жить?', 'Қай сезімнен айырылу сізге ең қиын болар еді?'),
        V('What is your favorite smell?', 'Какой ваш любимый запах?', 'Сүйікті иісіңіз қандай?'),
        V('Do you prefer sweet or salty food?', 'Вы предпочитаете сладкую или солёную еду?', 'Тәтті тағамды ұнатасыз ба, әлде тұзды ма?'),
        V('Do loud noises bother you?', 'Вас беспокоят громкие звуки?', 'Қатты дыбыстар сізді мазалай ма?'),
        V('What is something soft that you like to touch?', 'Что мягкое вам нравится трогать?', 'Ұстауды ұнататын жұмсақ зат қандай?'),
        V('Do bright colors make you feel more energetic?', 'Яркие цвета делают вас более энергичным?', 'Жарқын түстер сізді энергиялырақ сезіндіре ме?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Money and Prices', 'background_key' => 'professional',
    'warmup' => V("Let's talk about money. Do you think about prices carefully before you buy something?", 'Давайте поговорим о деньгах. Вы внимательно думаете о ценах перед покупкой?', 'Ақша туралы сөйлесейік. Бір нәрсе сатып алмас бұрын бағаны мұқият ойлайсыз ба?'),
    'vocab' => [V('expensive', 'дорогой', 'қымбат'), V('cheap', 'дешёвый', 'арзан'), V('pay', 'платить', 'төлеу'), V('change', 'сдача', 'қайтарым ақша'), V('wallet', 'кошелёк', 'әмиян'), V('coin', 'монета', 'тиын'), V('note', 'купюра', 'банкнот'), V('free', 'бесплатный', 'тегін'), V('cost', 'стоить', 'құны'), V('save', 'экономить', 'үнемдеу')],
    'questions' => [
        V('Do you always carry a wallet with you?', 'Вы всегда носите с собой кошелёк?', 'Әрдайым өзіңізбен әмиян аласыз ба?'),
        V('What is the most expensive thing you have ever bought?', 'Какая самая дорогая вещь, которую вы когда-либо покупали?', 'Сатып алған ең қымбат затыңыз қандай?'),
        V('Do you try to save money every month?', 'Вы стараетесь экономить деньги каждый месяц?', 'Әр ай сайын ақша үнемдеуге тырысасыз ба?'),
        V('Do you prefer to pay with cash or card?', 'Вы предпочитаете платить наличными или картой?', 'Қолма-қол ақшамен төлегенді ұнатасыз ба, әлде картамен ме?'),
        V('Have you ever gotten something for free? What was it?', 'Вы когда-нибудь получали что-то бесплатно? Что это было?', 'Тегін бір нәрсе алдыңыз ба? Ол не болды?'),
        V('Do you check prices in different shops before buying?', 'Вы проверяете цены в разных магазинах перед покупкой?', 'Сатып алмас бұрын әртүрлі дүкендерден бағаны тексересіз бе?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Common Illnesses', 'background_key' => 'calm',
    'warmup' => V("Let's talk about being sick. What do you do when you don't feel well?", 'Давайте поговорим о болезни. Что вы делаете, когда плохо себя чувствуете?', 'Ауру туралы сөйлесейік. Өзіңізді жаман сезінгенде не істейсіз?'),
    'vocab' => [V('cough', 'кашель', 'жөтел'), V('cold', 'простуда', 'суық тию'), V('sick', 'больной', 'ауру'), V('pain', 'боль', 'ауырсыну'), V('rest', 'отдых', 'демалу'), V('tired', 'уставший', 'шаршаған'), V('better', 'лучше', 'жақсырақ'), V('worse', 'хуже', 'нашарлау'), V('sneeze', 'чихать', 'түшкіру'), V('fever', 'температура', 'қызу')],
    'questions' => [
        V('What do you do when you have a cold?', 'Что вы делаете, когда у вас простуда?', 'Суық тигенде не істейсіз?'),
        V('Do you rest when you feel sick, or keep working?', 'Вы отдыхаете, когда болеете, или продолжаете работать?', 'Ауырғанда демаласыз ба, әлде жұмыс істей бересіз бе?'),
        V('How often do you catch a cold in winter?', 'Как часто вы простужаетесь зимой?', 'Қыста қаншалықты жиі суық тиесіз?'),
        V('What helps you feel better when you are sick?', 'Что помогает вам чувствовать себя лучше, когда вы больны?', 'Ауырғанда өзіңізді жақсырақ сезінуге не көмектеседі?'),
        V('Do you go to the doctor when you have a small pain?', 'Вы идёте к врачу, когда у вас небольшая боль?', 'Кішкене ауырсыну болғанда дәрігерге барасыз ба?'),
        V('Do you get enough rest every night?', 'Вы достаточно отдыхаете каждую ночь?', 'Түнде жеткілікті демаласыз ба?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Simple Travel Phrases', 'background_key' => 'energetic',
    'warmup' => V("Let's talk about polite phrases. What words do you use most when meeting new people?", 'Давайте поговорим о вежливых фразах. Какие слова вы используете чаще всего при встрече с новыми людьми?', 'Сыпайы сөздер туралы сөйлесейік. Жаңа адамдармен танысқанда қандай сөздерді жиі қолданасыз?'),
    'vocab' => [V('hello', 'привет', 'сәлем'), V('goodbye', 'до свидания', 'сау болыңыз'), V('please', 'пожалуйста', 'өтінемін'), V('thank you', 'спасибо', 'рахмет'), V('sorry', 'извините', 'кешіріңіз'), V('excuse me', 'простите', 'кешіріңіз (назар аудару)'), V('yes', 'да', 'иә'), V('no', 'нет', 'жоқ'), V('help', 'помощь', 'көмек'), V('welcome', 'добро пожаловать', 'қош келдіңіз')],
    'questions' => [
        V('What is the first thing you say when you meet someone new?', 'Что вы говорите в первую очередь, когда встречаете нового человека?', 'Жаңа адаммен танысқанда бірінші не айтасыз?'),
        V('Do you say "thank you" often during the day?', 'Вы часто говорите "спасибо" в течение дня?', 'Күн бойы жиі "рахмет" айтасыз ба?'),
        V('Is it easy for you to ask for help?', 'Вам легко просить о помощи?', 'Көмек сұрау сізге оңай ма?'),
        V('What polite words are most important in your culture?', 'Какие вежливые слова самые важные в вашей культуре?', 'Мәдениетіңізде қандай сыпайы сөздер ең маңызды?'),
        V('How do you usually say goodbye to friends?', 'Как вы обычно прощаетесь с друзьями?', 'Достарыңызбен әдетте қалай қоштасасыз?'),
        V('Do you think politeness is important when traveling?', 'Как вы думаете, вежливость важна во время путешествий?', 'Саяхаттағанда сыпайылық маңызды деп ойлайсыз ба?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'My Favorite Things', 'background_key' => 'playful',
    'warmup' => V("Let's talk about favorites. What are some of your favorite things, and why?", 'Давайте поговорим о любимых вещах. Какие ваши любимые вещи и почему?', 'Сүйікті заттар туралы сөйлесейік. Сүйікті заттарыңыз қандай және неге?'),
    'vocab' => [V('favorite', 'любимый', 'сүйікті'), V('like', 'нравиться', 'ұнату'), V('love', 'любить', 'жақсы көру'), V('hate', 'ненавидеть', 'жек көру'), V('enjoy', 'наслаждаться', 'рахаттану'), V('prefer', 'предпочитать', 'артық көру'), V('best', 'лучший', 'ең жақсы'), V('worst', 'худший', 'ең жаман'), V('choose', 'выбирать', 'таңдау'), V('want', 'хотеть', 'қалау')],
    'questions' => [
        V('What is your favorite thing to do on a free day?', 'Что вы любите делать в свободный день?', 'Бос күні не істегенді ұнатасыз?'),
        V('Is there something you really hate doing?', 'Есть ли что-то, что вы очень не любите делать?', 'Істеуді жек көретін бір нәрсе бар ма?'),
        V('What is the best gift you have ever received?', 'Какой лучший подарок вы когда-либо получали?', 'Алған ең жақсы сыйлығыңыз қандай?'),
        V('Do you find it easy to choose between two good options?', 'Вам легко выбирать между двумя хорошими вариантами?', 'Екі жақсы нұсқаның арасынан таңдау сізге оңай ма?'),
        V('What do you want to do this weekend?', 'Что вы хотите делать в эти выходные?', 'Осы демалыс күндері не істегіңіз келеді?'),
        V('Do your favorite things change often?', 'Ваши любимые вещи часто меняются?', 'Сүйікті заттарыңыз жиі өзгере ме?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Weekend Plans', 'background_key' => 'warm',
    'warmup' => V("Let's talk about weekends. What do you usually plan to do?", 'Давайте поговорим о выходных. Что вы обычно планируете делать?', 'Демалыс күндері туралы сөйлесейік. Әдетте не істеуді жоспарлайсыз?'),
    'vocab' => [V('plan', 'планировать', 'жоспарлау'), V('relax', 'расслабляться', 'демалу'), V('visit', 'навещать', 'бару (қонаққа)'), V('meet', 'встречаться', 'кездесу'), V('party', 'вечеринка', 'кеш'), V('rest', 'отдых', 'демалу'), V('trip', 'поездка', 'сапар'), V('stay home', 'остаться дома', 'үйде қалу'), V('go out', 'выходить', 'сыртқа шығу'), V('sleep in', 'спать подольше', 'ұзақ ұйықтау')],
    'questions' => [
        V('Do you usually plan your weekends or decide last minute?', 'Вы обычно планируете выходные заранее или решаете в последний момент?', 'Демалыс күндерін алдын ала жоспарлайсыз ба, әлде соңғы сәтте шешесіз бе?'),
        V('Do you prefer staying home or going out on weekends?', 'Вы предпочитаете оставаться дома или выходить на выходных?', 'Демалыс күндері үйде қалғанды ұнатасыз ба, әлде сыртқа шыққанды ма?'),
        V('Do you like to sleep in on weekends?', 'Вам нравится спать подольше на выходных?', 'Демалыс күндері ұзақ ұйықтағанды ұнатасыз ба?'),
        V('Who do you usually meet on weekends?', 'С кем вы обычно встречаетесь на выходных?', 'Демалыс күндері әдетте кіммен кездесесіз?'),
        V('Have you gone on any nice trips recently?', 'Вы недавно ездили в приятные поездки?', 'Жақында қандай да бір жақсы сапарға шықтыңыз ба?'),
        V('What is your ideal weekend like?', 'Каковы ваши идеальные выходные?', 'Сіздің идеалды демалыс күндеріңіз қандай?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Simple Chores at Home', 'background_key' => 'calm',
    'warmup' => V("Let's talk about chores. What jobs do you do to help at home?", 'Давайте поговорим о домашних делах. Какую работу вы делаете, чтобы помочь дома?', 'Үй жұмыстары туралы сөйлесейік. Үйге көмектесу үшін қандай жұмыс істейсіз?'),
    'vocab' => [V('clean', 'убирать', 'тазалау'), V('wash', 'мыть', 'жуу'), V('cook', 'готовить', 'тамақ пісіру'), V('clean up', 'убираться', 'жинастыру'), V('help', 'помогать', 'көмектесу'), V('tidy', 'опрятный', 'жинақы'), V('organize', 'организовывать', 'ретке келтіру'), V('throw away', 'выбрасывать', 'лақтырып тастау'), V('fold', 'складывать', 'бүктеу'), V('sweep', 'подметать', 'сыпыру')],
    'questions' => [
        V('What chore do you do most often at home?', 'Какую домашнюю работу вы делаете чаще всего?', 'Үйде қандай жұмысты жиі істейсіз?'),
        V('Do you clean your room every day?', 'Вы убираете свою комнату каждый день?', 'Бөлмеңізді күн сайын тазалайсыз ба?'),
        V('Who cooks in your family?', 'Кто готовит в вашей семье?', 'Отбасыңызда тамақты кім пісіреді?'),
        V('Do you enjoy folding laundry?', 'Вам нравится складывать бельё?', 'Кірді бүктегенді ұнатасыз ба?'),
        V('Is your room usually tidy or messy?', 'Ваша комната обычно опрятная или в беспорядке?', 'Бөлмеңіз әдетте жинақы ма, әлде ретсіз бе?'),
        V('Do you help your parents with chores?', 'Вы помогаете родителям с домашними делами?', 'Ата-анаңызға үй жұмысымен көмектесесіз бе?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Basic Shapes and Sizes', 'background_key' => 'playful',
    'warmup' => V("Let's talk about shapes and sizes. Can you describe the shape and size of things around you?", 'Давайте поговорим о формах и размерах. Можете описать форму и размер вещей вокруг вас?', 'Пішіндер мен өлшемдер туралы сөйлесейік. Айналаңыздағы заттардың пішіні мен өлшемін сипаттай аласыз ба?'),
    'vocab' => [V('circle', 'круг', 'дөңгелек'), V('square', 'квадрат', 'шаршы'), V('triangle', 'треугольник', 'үшбұрыш'), V('big', 'большой', 'үлкен'), V('small', 'маленький', 'кіші'), V('tall', 'высокий', 'биік'), V('short', 'короткий/низкий', 'қысқа'), V('wide', 'широкий', 'кең'), V('narrow', 'узкий', 'тар'), V('round', 'круглый', 'дөңгелек (пішінді)')],
    'questions' => [
        V('What shape is your favorite object at home?', 'Какой формы ваш любимый предмет дома?', 'Үйдегі сүйікті заттыңыздың пішіні қандай?'),
        V('Are you tall or short?', 'Вы высокий или невысокий?', 'Сіз биіксіз бе, әлде аласызсыз ба?'),
        V('Do you prefer round tables or square tables?', 'Вы предпочитаете круглые столы или квадратные?', 'Дөңгелек үстелдерді ұнатасыз ба, әлде шаршыларды ма?'),
        V('Is the street where you live wide or narrow?', 'Улица, где вы живёте, широкая или узкая?', 'Тұратын көшеңіз кең бе, әлде тар ма?'),
        V('What is the biggest object in your house?', 'Какой самый большой предмет в вашем доме?', 'Үйіңіздегі ең үлкен зат қандай?'),
        V('Do you like small houses or big houses?', 'Вам нравятся маленькие дома или большие?', 'Кіші үйлерді ұнатасыз ба, әлде үлкен үйлерді ме?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Talking About Jobs', 'background_key' => 'professional',
    'warmup' => V("Let's talk about jobs. What job do you have, and what does a normal work day look like?", 'Давайте поговорим о работе. Кем вы работаете и как выглядит обычный рабочий день?', 'Жұмыс туралы сөйлесейік. Сіз кіммен жұмыс істейсіз және кәдімгі жұмыс күні қалай өтеді?'),
    'vocab' => [V('work', 'работать', 'жұмыс істеу'), V('job', 'работа', 'жұмыс'), V('boss', 'начальник', 'бастық'), V('busy', 'занятой', 'бос емес'), V('office', 'офис', 'кеңсе'), V('factory', 'фабрика', 'фабрика'), V('shop', 'магазин', 'дүкен'), V('farmer', 'фермер', 'фермер'), V('driver', 'водитель', 'жүргізуші'), V('doctor', 'врач', 'дәрігер')],
    'questions' => [
        V('What is your job?', 'Кем вы работаете?', 'Сіз кіммен жұмыс істейсіз?'),
        V('Is your job busy or relaxed?', 'Ваша работа напряжённая или спокойная?', 'Жұмысыңыз қарбалас па, әлде сабырлы ма?'),
        V('Do you work in an office or somewhere else?', 'Вы работаете в офисе или где-то ещё?', 'Кеңседе жұмыс істейсіз бе, әлде басқа жерде ме?'),
        V('Is your boss friendly?', 'Ваш начальник дружелюбный?', 'Бастығыңыз достық па?'),
        V('What job did you want to do as a child?', 'Кем вы хотели работать в детстве?', 'Балалық шағыңызда кіммен жұмыс істегіңіз келді?'),
        V('Would you like to change your job? Why?', 'Хотели бы вы сменить работу? Почему?', 'Жұмысыңызды өзгерткіңіз келе ме? Неге?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Common Adjectives', 'background_key' => 'calm',
    'warmup' => V("Let's talk about describing things. What words do you use to describe your day?", 'Давайте поговорим об описании вещей. Какие слова вы используете, чтобы описать свой день?', 'Заттарды сипаттау туралы сөйлесейік. Күніңізді сипаттау үшін қандай сөздерді қолданасыз?'),
    'vocab' => [V('good', 'хороший', 'жақсы'), V('bad', 'плохой', 'жаман'), V('easy', 'лёгкий', 'оңай'), V('difficult', 'трудный', 'қиын'), V('fast', 'быстрый', 'жылдам'), V('slow', 'медленный', 'баяу'), V('new', 'новый', 'жаңа'), V('old', 'старый', 'ескі'), V('clean', 'чистый', 'таза'), V('dirty', 'грязный', 'лас')],
    'questions' => [
        V('Was today a good day or a bad day for you?', 'Сегодня был хороший или плохой день для вас?', 'Бүгін сіз үшін жақсы күн бе, әлде жаман күн бе болды?'),
        V('Is English easy or difficult for you?', 'Английский язык лёгкий или трудный для вас?', 'Ағылшын тілі сіз үшін оңай ма, әлде қиын ба?'),
        V('Do you prefer fast or slow internet?', 'Вы предпочитаете быстрый или медленный интернет?', 'Жылдам интернетті ұнатасыз ба, әлде баяуды ма?'),
        V('Do you like buying new things or used things?', 'Вам нравится покупать новые вещи или подержанные?', 'Жаңа заттарды сатып алғанды ұнатасыз ба, әлде қолданылғанды ма?'),
        V('Do you keep your house clean all the time?', 'Вы всегда держите дом в чистоте?', 'Үйіңізді әрдайым таза ұстайсыз ба?'),
        V('What is the most difficult thing you have learned recently?', 'Что самое трудное вы недавно выучили?', 'Жақында үйренген ең қиын нәрсеңіз не?'),
    ],
];

// ========================= ELEMENTARY (batch 3) =========================

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Bills and Utilities', 'background_key' => 'professional',
    'warmup' => V("Let's talk about bills. How do you keep track of your monthly bills?", 'Давайте поговорим о счетах. Как вы отслеживаете свои ежемесячные счета?', 'Шоттар туралы сөйлесейік. Айлық шоттарыңызды қалай қадағалайсыз?'),
    'vocab' => [V('bill', 'счёт', 'шот'), V('due date', 'срок оплаты', 'төлем мерзімі'), V('electricity', 'электричество', 'электр қуаты'), V('rent', 'аренда', 'жалдау ақысы'), V('receipt', 'чек', 'чек'), V('pay online', 'платить онлайн', 'онлайн төлеу'), V('subscription', 'подписка', 'жазылым'), V('overdue', 'просроченный', 'мерзімі өткен'), V('invoice', 'счёт-фактура', 'шот-фактура'), V('utility', 'коммунальные услуги', 'коммуналдық қызмет')],
    'questions' => [
        V('Do you pay your bills online or in person?', 'Вы оплачиваете счета онлайн или лично?', 'Шоттарыңызды онлайн төлейсіз бе, әлде өзіңіз бе?'),
        V('Have you ever paid a bill late? What happened?', 'Вы когда-нибудь платили по счёту с опозданием? Что произошло?', 'Шотты кеш төледіңіз бе? Не болды?'),
        V('What subscriptions do you currently pay for?', 'На какие подписки вы сейчас платите?', 'Қазір қандай жазылымдарға төлейсіз?'),
        V('Do you think rent prices are fair where you live?', 'Как вы думаете, цены на аренду справедливы там, где вы живёте?', 'Тұратын жеріңізде жалдау ақысы әділ деп ойлайсыз ба?'),
        V('How do you remember when bills are due?', 'Как вы запоминаете, когда нужно платить по счетам?', 'Шоттарды қашан төлеу керектігін қалай есте сақтайсыз?'),
        V('Which bill do you think is the most expensive each month?', 'Какой счёт, по-вашему, самый дорогой каждый месяц?', 'Сіздің ойыңызша, ай сайын қай шот ең қымбат?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Weather Forecasts', 'background_key' => 'nature',
    'warmup' => V("Let's talk about weather forecasts. Do you check the weather before planning your day?", 'Давайте поговорим о прогнозах погоды. Вы проверяете погоду перед планированием дня?', 'Ауа райы болжамдары туралы сөйлесейік. Күніңізді жоспарлар алдында ауа райын тексересіз бе?'),
    'vocab' => [V('forecast', 'прогноз', 'болжам'), V('temperature', 'температура', 'температура'), V('humidity', 'влажность', 'ылғалдылық'), V('degrees', 'градусы', 'градус'), V('thunderstorm', 'гроза', 'найзағай'), V('breeze', 'бриз', 'желдей'), V('weather app', 'приложение погоды', 'ауа райы қолданбасы'), V('chance of rain', 'вероятность дождя', 'жаңбыр ықтималдығы'), V('sunny spells', 'солнечные периоды', 'күндізгі кезеңдер'), V('cloudy', 'облачно', 'бұлтты')],
    'questions' => [
        V('Do you check the weather forecast every day?', 'Вы проверяете прогноз погоды каждый день?', 'Ауа райы болжамын күн сайын тексересіз бе?'),
        V('Has a wrong forecast ever ruined your plans?', 'Неправильный прогноз когда-нибудь портил ваши планы?', 'Қате болжам жоспарларыңызды бұзған кезі болды ма?'),
        V('Do you prefer sunny weather or rainy weather?', 'Вы предпочитаете солнечную погоду или дождливую?', 'Күнді ауа райын ұнатасыз ба, әлде жаңбырлыны ма?'),
        V('What is the most extreme weather you have experienced?', 'Какая самая экстремальная погода, которую вы пережили?', 'Бастан кешкен ең экстремалды ауа райы қандай болды?'),
        V('Do you use a weather app on your phone?', 'Вы используете приложение погоды на телефоне?', 'Телефонда ауа райы қолданбасын пайдаланасыз ба?'),
        V('How does weather affect your mood?', 'Как погода влияет на ваше настроение?', 'Ауа райы көңіл-күйіңізге қалай әсер етеді?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => "Doctor's Appointment", 'background_key' => 'calm',
    'warmup' => V("Let's talk about visiting the doctor. What usually happens during a checkup?", 'Давайте поговорим о посещении врача. Что обычно происходит во время осмотра?', 'Дәрігерге бару туралы сөйлесейік. Тексеру кезінде әдетте не болады?'),
    'vocab' => [V('symptom', 'симптом', 'белгі'), V('prescription', 'рецепт', 'рецепт'), V('checkup', 'осмотр', 'тексеру'), V('diagnosis', 'диагноз', 'диагноз'), V('allergy', 'аллергия', 'аллергия'), V('blood pressure', 'давление', 'қан қысымы'), V('x-ray', 'рентген', 'рентген'), V('waiting room', 'зал ожидания', 'күту бөлмесі'), V('receptionist', 'администратор', 'қабылдаушы'), V('insurance', 'страховка', 'сақтандыру')],
    'questions' => [
        V('How often do you go for a general checkup?', 'Как часто вы проходите общий осмотр?', 'Жалпы тексеруден қаншалықты жиі өтесіз?'),
        V('Do you have any allergies?', 'У вас есть аллергия?', 'Сізде аллергия бар ма?'),
        V('Do you have health insurance?', 'У вас есть медицинская страховка?', 'Сізде медициналық сақтандыру бар ма?'),
        V('Do you mind waiting a long time at the doctor\'s office?', 'Вам сложно долго ждать в кабинете врача?', 'Дәрігердің кабинетінде ұзақ күтуге қиналасыз ба?'),
        V('Have you ever had an x-ray? Why?', 'Вам когда-нибудь делали рентген? Почему?', 'Сізге рентген жасалды ма? Неге?'),
        V('Do you always follow the doctor\'s prescription exactly?', 'Вы всегда точно следуете рецепту врача?', 'Дәрігердің рецептін әрдайым дәл орындайсыз ба?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Public Transport Etiquette', 'background_key' => 'night-city',
    'warmup' => V("Let's talk about public transport. What are the unwritten rules of behaving on a bus or train?", 'Давайте поговорим об общественном транспорте. Какие негласные правила поведения в автобусе или поезде?', 'Қоғамдық көлік туралы сөйлесейік. Автобуста немесе пойызда өзін ұстаудың жазылмаған ережелері қандай?'),
    'vocab' => [V('priority seat', 'место для льготников', 'жеңілдікті орын'), V('fare', 'плата за проезд', 'жол ақысы'), V('conductor', 'кондуктор', 'кондуктор'), V('platform', 'платформа', 'платформа'), V('timetable', 'расписание', 'кесте'), V('rush hour', 'час пик', 'жүгіру сағаты'), V('standing room', 'место стоя', 'тұрып бару орны'), V('transfer', 'пересадка', 'ауысу'), V('ticket machine', 'билетный автомат', 'билет автоматы'), V('delay', 'задержка', 'кідіріс')],
    'questions' => [
        V('Do you give up your seat for someone who needs it more?', 'Вы уступаете место тому, кому оно нужнее?', 'Орынды көбірек қажет ететін адамға босатасыз ба?'),
        V('Do you usually travel during rush hour? Is it crowded?', 'Вы обычно ездите в час пик? Там многолюдно?', 'Әдетте жүгіру сағатында жүресіз бе? Онда адам көп пе?'),
        V('Have you ever missed your stop or transfer?', 'Вы когда-нибудь пропускали свою остановку или пересадку?', 'Аялдамаңызды немесе ауысуыңызды өткізіп алдыңыз ба?'),
        V('What annoys you most about public transport?', 'Что вас больше всего раздражает в общественном транспорте?', 'Қоғамдық көлікте сізді ең көп не тітіркендіреді?'),
        V('Do you talk on the phone loudly on public transport?', 'Вы громко разговариваете по телефону в общественном транспорте?', 'Қоғамдық көлікте телефонмен қатты сөйлесесіз бе?'),
        V('Is public transport reliable and on time where you live?', 'Общественный транспорт надёжен и приходит вовремя там, где вы живёте?', 'Тұратын жеріңізде қоғамдық көлік сенімді және уақытында келе ме?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Online Shopping', 'background_key' => 'night-city',
    'warmup' => V("Let's talk about online shopping. What do you usually buy online, and how often?", 'Давайте поговорим об онлайн-шопинге. Что вы обычно покупаете онлайн и как часто?', 'Онлайн сауда туралы сөйлесейік. Онлайн әдетте не сатып аласыз және қаншалықты жиі?'),
    'vocab' => [V('cart', 'корзина', 'себет'), V('checkout', 'оформление заказа', 'тапсырысты рәсімдеу'), V('delivery', 'доставка', 'жеткізу'), V('tracking number', 'номер отслеживания', 'бақылау нөмірі'), V('return policy', 'политика возврата', 'қайтару саясаты'), V('warranty', 'гарантия', 'кепілдік'), V('coupon code', 'промокод', 'промокод'), V('wishlist', 'список желаний', 'қалаулар тізімі'), V('out of stock', 'нет в наличии', 'қоймада жоқ'), V('customer review', 'отзыв покупателя', 'сатып алушы пікірі')],
    'questions' => [
        V('Do you shop online often? What do you buy?', 'Вы часто делаете покупки онлайн? Что вы покупаете?', 'Онлайн жиі сауда жасайсыз ба? Не сатып аласыз?'),
        V('Do you read customer reviews before buying something?', 'Вы читаете отзывы покупателей перед покупкой?', 'Бір нәрсе сатып алмас бұрын сатып алушы пікірлерін оқисыз ба?'),
        V('Have you ever had a problem with an online delivery?', 'У вас когда-нибудь были проблемы с онлайн-доставкой?', 'Онлайн жеткізуде мәселе болды ма?'),
        V('Do you prefer shopping online or in a physical store?', 'Вы предпочитаете покупки онлайн или в обычном магазине?', 'Онлайн сауда жасағанды ұнатасыз ба, әлде әдеттегі дүкенде ме?'),
        V('Have you ever returned something you bought online?', 'Вы когда-нибудь возвращали то, что купили онлайн?', 'Онлайн сатып алған затыңызды қайтардыңыз ба?'),
        V('Do you use coupon codes when shopping online?', 'Вы используете промокоды при онлайн-покупках?', 'Онлайн сауда жасағанда промокодтарды пайдаланасыз ба?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Café Culture', 'background_key' => 'warm',
    'warmup' => V("Let's talk about cafés. Do you enjoy spending time in a café? What do you usually order?", 'Давайте поговорим о кафе. Вам нравится проводить время в кафе? Что вы обычно заказываете?', 'Кафелер туралы сөйлесейік. Кафеде уақыт өткізгенді ұнатасыз ба? Әдетте не тапсырыс бересіз?'),
    'vocab' => [V('barista', 'бариста', 'бариста'), V('espresso', 'эспрессо', 'эспрессо'), V('latte', 'латте', 'латте'), V('pastry', 'выпечка', 'нан-тоқаш'), V('takeaway', 'на вынос', 'алып кету'), V('loyalty card', 'карта лояльности', 'адалдық картасы'), V('cozy', 'уютный', 'жайлы'), V('free wifi', 'бесплатный вайфай', 'тегін wifi'), V('laptop', 'ноутбук', 'ноутбук'), V('queue', 'очередь', 'кезек')],
    'questions' => [
        V('Do you enjoy working or studying in a café?', 'Вам нравится работать или учиться в кафе?', 'Кафеде жұмыс істегенді немесе оқығанды ұнатасыз ба?'),
        V('What do you usually order at a café?', 'Что вы обычно заказываете в кафе?', 'Кафеде әдетте не тапсырыс бересіз?'),
        V('Do you have a favorite café? What makes it special?', 'У вас есть любимое кафе? Что делает его особенным?', 'Сүйікті кафеңіз бар ма? Оны ерекше ететін не?'),
        V('Do you prefer coffee to go or sitting in the café?', 'Вы предпочитаете кофе с собой или посидеть в кафе?', 'Кофені алып кетуді ұнатасыз ба, әлде кафеде отыруды ма?'),
        V('How important is free wifi for you when choosing a café?', 'Насколько важен бесплатный вайфай при выборе кафе?', 'Кафе таңдағанда тегін wifi сіз үшін қаншалықты маңызды?'),
        V('Do you think cafés are good places to meet friends?', 'Как вы думаете, кафе — хорошее место для встреч с друзьями?', 'Кафе достармен кездесуге жақсы орын деп ойлайсыз ба?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Sports Equipment', 'background_key' => 'energetic',
    'warmup' => V("Let's talk about sports equipment. What equipment do you need for your favorite sport?", 'Давайте поговорим о спортивном инвентаре. Какое снаряжение нужно для вашего любимого вида спорта?', 'Спорттық жабдықтар туралы сөйлесейік. Сүйікті спорт түріңіз үшін қандай жабдық керек?'),
    'vocab' => [V('helmet', 'шлем', 'дулыға'), V('racket', 'ракетка', 'ракетка'), V('jersey', 'спортивная майка', 'спорттық жейде'), V('cleats', 'бутсы', 'бутс'), V('goggles', 'очки для плавания', 'жүзу көзілдірігі'), V('whistle', 'свисток', 'ысқырық'), V('scoreboard', 'табло', 'есеп тақтасы'), V('gym bag', 'спортивная сумка', 'спорт сөмкесі'), V('mat', 'мат', 'кілем (жаттығу)'), V('dumbbell', 'гантель', 'гантель')],
    'questions' => [
        V('What sports equipment do you own?', 'Какое спортивное снаряжение у вас есть?', 'Сізде қандай спорт жабдығы бар?'),
        V('Do you have a favorite sports jersey or team?', 'У вас есть любимая спортивная майка или команда?', 'Сүйікті спорттық жейдеңіз немесе командаңыз бар ма?'),
        V('Have you ever forgotten important sports equipment before a game?', 'Вы когда-нибудь забывали важное снаряжение перед игрой?', 'Ойын алдында маңызды жабдықты ұмытып қалдыңыз ба?'),
        V('Do you exercise with weights or dumbbells?', 'Вы тренируетесь с весами или гантелями?', 'Салмақпен немесе гантельмен жаттығасыз ба?'),
        V('Is sports equipment expensive in your country?', 'Спортивное снаряжение дорогое в вашей стране?', 'Еліңізде спорт жабдығы қымбат па?'),
        V('What sport would you like to try if you had the right equipment?', 'В какой спорт вы хотели бы попробовать, если бы у вас было нужное снаряжение?', 'Дұрыс жабдық болса, қандай спортты сынап көргіңіз келеді?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Weekend Getaways', 'background_key' => 'nature',
    'warmup' => V("Let's talk about short trips. Do you enjoy taking weekend getaways?", 'Давайте поговорим о коротких поездках. Вам нравится ездить на выходные?', 'Қысқа сапарлар туралы сөйлесейік. Демалыс күндері саяхаттауды ұнатасыз ба?'),
    'vocab' => [V('road trip', 'путешествие на машине', 'көлікпен саяхат'), V('campsite', 'кемпинг', 'кемпинг орны'), V('cabin', 'домик', 'үйшік'), V('scenic route', 'живописный маршрут', 'көркем маршрут'), V('checklist', 'список дел', 'тексеру тізімі'), V('cooler', 'холодильная сумка', 'салқындатқыш сөмке'), V('tent', 'палатка', 'шатыр'), V('sunscreen', 'солнцезащитный крем', 'күннен қорғайтын крем'), V('GPS', 'GPS', 'GPS'), V('rest stop', 'место отдыха (на трассе)', 'демалыс аялдамасы')],
    'questions' => [
        V('Have you ever gone on a weekend getaway? Where?', 'Вы когда-нибудь ездили на выходные куда-то? Куда?', 'Демалыс күндері бір жерге саяхаттадыңыз ба? Қайда?'),
        V('Do you prefer road trips or flights for short trips?', 'Вы предпочитаете поездки на машине или перелёты для коротких путешествий?', 'Қысқа сапарлар үшін көлікпен саяхатты ұнатасыз ба, әлде ұшуды ма?'),
        V('Have you ever slept in a tent? Was it comfortable?', 'Вы когда-нибудь спали в палатке? Это было удобно?', 'Шатырда ұйықтадыңыз ба? Ол ыңғайлы болды ма?'),
        V('Do you make a checklist before a trip?', 'Вы составляете список дел перед поездкой?', 'Сапар алдында тексеру тізімін жасайсыз ба?'),
        V('Do you use GPS or a paper map when traveling?', 'Вы используете GPS или бумажную карту в поездках?', 'Саяхаттағанда GPS пайдаланасыз ба, әлде қағаз картаны ма?'),
        V('What is your ideal weekend getaway destination?', 'Куда бы вы хотели поехать на идеальные выходные?', 'Идеалды демалыс сапарыңыздың бағыты қандай болар еді?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Office Life', 'background_key' => 'professional',
    'warmup' => V("Let's talk about office life. What is a typical day like at your workplace?", 'Давайте поговорим об офисной жизни. Как проходит типичный день на вашем рабочем месте?', 'Кеңсе өмірі туралы сөйлесейік. Жұмыс орныңызда кәдімгі күн қалай өтеді?'),
    'vocab' => [V('cubicle', 'кабинка', 'бөлме (жұмыс орны)'), V('meeting room', 'переговорная', 'жиналыс бөлмесі'), V('printer', 'принтер', 'принтер'), V('coworker', 'коллега', 'әріптес'), V('coffee break', 'кофе-брейк', 'кофе үзілісі'), V('overtime', 'сверхурочные', 'үстеме сағат'), V('inbox', 'входящие', 'кіріс хаттар'), V('deadline', 'дедлайн', 'мерзім'), V('presentation', 'презентация', 'презентация'), V('teamwork', 'командная работа', 'топпен жұмыс')],
    'questions' => [
        V('Do you work in an office with coworkers?', 'Вы работаете в офисе с коллегами?', 'Әріптестермен кеңседе жұмыс істейсіз бе?'),
        V('How often do you have meetings at work?', 'Как часто у вас бывают совещания на работе?', 'Жұмыста қаншалықты жиі жиналыс өткізесіз?'),
        V('Do you often work overtime?', 'Вы часто работаете сверхурочно?', 'Жиі үстеме сағат жұмыс істейсіз бе?'),
        V('Do you enjoy giving presentations?', 'Вам нравится делать презентации?', 'Презентация жасағанды ұнатасыз ба?'),
        V('How do you usually spend your coffee break?', 'Как вы обычно проводите кофе-брейк?', 'Кофе үзілісін әдетте қалай өткізесіз?'),
        V('Do you get along well with your coworkers?', 'Вы хорошо ладите с коллегами?', 'Әріптестеріңізбен жақсы тіл табысасыз ба?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Fitness Classes', 'background_key' => 'energetic',
    'warmup' => V("Let's talk about fitness classes. Have you ever taken a fitness class? What was it like?", 'Давайте поговорим о фитнес-занятиях. Вы когда-нибудь посещали фитнес-занятия? Каково это было?', 'Фитнес сабақтары туралы сөйлесейік. Фитнес сабағына қатыстыңыз ба? Ол қалай болды?'),
    'vocab' => [V('yoga', 'йога', 'йога'), V('pilates', 'пилатес', 'пилатес'), V('treadmill', 'беговая дорожка', 'жүгіру жолағы'), V('personal trainer', 'персональный тренер', 'жеке жаттықтырушы'), V('warm-up', 'разминка', 'қыздыру'), V('stretch', 'растяжка', 'созылу'), V('cardio', 'кардио', 'кардио'), V('weights', 'веса (тренажёр)', 'салмақтар'), V('instructor', 'инструктор', 'нұсқаушы'), V('membership', 'абонемент', 'мүшелік')],
    'questions' => [
        V('Have you ever tried yoga or pilates?', 'Вы когда-нибудь пробовали йогу или пилатес?', 'Йога немесе пилатесті сынап көрдіңіз бе?'),
        V('Do you prefer exercising alone or in a class?', 'Вы предпочитаете тренироваться в одиночку или на занятии?', 'Жалғыз жаттығуды ұнатасыз ба, әлде сабақта ма?'),
        V('Have you ever had a personal trainer?', 'У вас когда-нибудь был персональный тренер?', 'Сізде жеке жаттықтырушы болды ма?'),
        V('Do you always warm up before exercising?', 'Вы всегда разминаетесь перед тренировкой?', 'Жаттығу алдында әрдайым қыздырасыз ба?'),
        V('Do you have a gym membership?', 'У вас есть абонемент в спортзал?', 'Сізде спортзал мүшелігі бар ма?'),
        V('What type of exercise do you enjoy most?', 'Какой вид упражнений вам нравится больше всего?', 'Қандай жаттығу түрін ең көп ұнатасыз?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Home Repairs', 'background_key' => 'professional',
    'warmup' => V("Let's talk about home repairs. Do you fix things yourself, or call someone for help?", 'Давайте поговорим о ремонте дома. Вы чините вещи сами или зовёте кого-то на помощь?', 'Үй жөндеу туралы сөйлесейік. Заттарды өзіңіз жөндейсіз бе, әлде көмекке біреуді шақырасыз ба?'),
    'vocab' => [V('plumber', 'сантехник', 'сантехник'), V('electrician', 'электрик', 'электрик'), V('leak', 'течь', 'ағу'), V('toolbox', 'ящик с инструментами', 'құрал жәшігі'), V('hammer', 'молоток', 'балға'), V('screwdriver', 'отвёртка', 'бұрағыш'), V('paint', 'краска', 'бояу'), V('repair', 'ремонтировать', 'жөндеу'), V('broken', 'сломанный', 'сынған'), V('fix', 'чинить', 'жөндеу')],
    'questions' => [
        V('Do you fix things yourself or call a professional?', 'Вы чините вещи сами или зовёте специалиста?', 'Заттарды өзіңіз жөндейсіз бе, әлде маманды шақырасыз ба?'),
        V('Have you ever had a leak or a broken pipe at home?', 'У вас когда-нибудь была течь или сломанная труба дома?', 'Үйде ағу немесе сынған құбыр болды ма?'),
        V('Do you have a toolbox at home?', 'У вас дома есть ящик с инструментами?', 'Үйде құрал жәшігіңіз бар ма?'),
        V('Have you ever painted a room yourself?', 'Вы когда-нибудь красили комнату сами?', 'Бөлмені өзіңіз боядыңыз ба?'),
        V('What was the last thing that broke in your house?', 'Что было последним, что сломалось у вас дома?', 'Үйіңізде соңғы рет не сынды?'),
        V('Do you think it is useful to learn basic repair skills?', 'Как вы думаете, полезно ли изучать базовые навыки ремонта?', 'Негізгі жөндеу дағдыларын үйрену пайдалы деп ойлайсыз ба?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Birthday Parties', 'background_key' => 'playful',
    'warmup' => V("Let's talk about birthday parties. How do you usually celebrate birthdays?", 'Давайте поговорим о днях рождения. Как вы обычно отмечаете дни рождения?', 'Туған күн кештері туралы сөйлесейік. Туған күндерді әдетте қалай тойлайсыз?'),
    'vocab' => [V('cake', 'торт', 'торт'), V('candles', 'свечи', 'шамдар'), V('balloons', 'воздушные шары', 'әуе шарлары'), V('gift wrap', 'подарочная упаковка', 'сыйлық қағазы'), V('guest list', 'список гостей', 'қонақтар тізімі'), V('party hat', 'праздничный колпак', 'мереке қалпағы'), V('surprise', 'сюрприз', 'тосынсый'), V('invitation', 'приглашение', 'шақыру'), V('games', 'игры', 'ойындар'), V('playlist', 'плейлист', 'ойнату тізімі')],
    'questions' => [
        V('How do you usually celebrate your birthday?', 'Как вы обычно отмечаете день рождения?', 'Туған күніңізді әдетте қалай тойлайсыз?'),
        V('Do you prefer a big party or a small celebration?', 'Вы предпочитаете большую вечеринку или скромное празднование?', 'Үлкен кешті ұнатасыз ба, әлде шағын тойлауды ма?'),
        V('Have you ever planned a surprise party for someone?', 'Вы когда-нибудь устраивали кому-то вечеринку-сюрприз?', 'Біреуге тосынсый кеш ұйымдастырдыңыз ба?'),
        V('What kind of cake do you like at birthday parties?', 'Какой торт вы любите на днях рождения?', 'Туған күн кештерінде қандай тортты ұнатасыз?'),
        V('Do you make a playlist for parties?', 'Вы делаете плейлист для вечеринок?', 'Кештер үшін ойнату тізімін жасайсыз ба?'),
        V('What is the best birthday party you have ever had or attended?', 'Какой был лучший день рождения, который у вас был или на котором вы были?', 'Болған немесе қатысқан ең жақсы туған күн кешіңіз қандай болды?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Photography as a Hobby', 'background_key' => 'playful',
    'warmup' => V("Let's talk about photography. Do you like taking photos? What do you like to photograph?", 'Давайте поговорим о фотографии. Вам нравится фотографировать? Что вы любите снимать?', 'Фотография туралы сөйлесейік. Сурет түсіргенді ұнатасыз ба? Нені түсіргенді ұнатасыз?'),
    'vocab' => [V('camera', 'камера', 'камера'), V('lens', 'объектив', 'объектив'), V('photo', 'фото', 'сурет'), V('filter', 'фильтр', 'фильтр'), V('angle', 'ракурс', 'бұрыш'), V('lighting', 'освещение', 'жарықтандыру'), V('portrait', 'портрет', 'портрет'), V('landscape', 'пейзаж', 'пейзаж'), V('edit', 'редактировать', 'өңдеу'), V('gallery', 'галерея', 'галерея')],
    'questions' => [
        V('Do you take a lot of photos on your phone?', 'Вы делаете много фотографий на телефон?', 'Телефонда көп сурет түсіресіз бе?'),
        V('Do you prefer taking portraits or landscapes?', 'Вы предпочитаете снимать портреты или пейзажи?', 'Портрет түсіргенді ұнатасыз ба, әлде пейзажды ма?'),
        V('Do you edit your photos before sharing them?', 'Вы редактируете фотографии перед тем, как поделиться ими?', 'Суреттерді бөліспес бұрын өңдейсіз бе?'),
        V('Have you ever used a professional camera?', 'Вы когда-нибудь пользовались профессиональной камерой?', 'Кәсіби камераны пайдаландыңыз ба?'),
        V('What is your favorite photo that you have ever taken?', 'Какая ваша любимая фотография из всех, что вы делали?', 'Түсірген ең сүйікті суретіңіз қандай?'),
        V('Do you think good lighting makes the biggest difference in a photo?', 'Как вы думаете, хорошее освещение — самое важное в фотографии?', 'Жақсы жарықтандыру суретте ең үлкен айырмашылықты жасайды деп ойлайсыз ба?'),
    ],
];

require __DIR__ . '/seed_lessons_batch3_part2.php';

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
