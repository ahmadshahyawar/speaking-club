<?php
declare(strict_types=1);
$configPath = '/home/u856637812/config/speaking_club_config.php';
$cfg = require $configPath;
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$username = $argv[1] ?? null;
if (!$username) { fwrite(STDERR, "Usage: php seed_lessons_batch5.php <teacher_username>\n"); exit(1); }
$stmt = $pdo->prepare('SELECT id FROM teachers WHERE username = ?');
$stmt->execute([$username]);
$teacher = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$teacher) { fwrite(STDERR, "Teacher not found: $username\n"); exit(1); }
$teacherId = (int)$teacher['id'];
function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }
$lessons = [];

// ========================= BEGINNER (batch 5) =========================

$lessons[] = ['level' => 'beginner', 'topic' => 'Talking About Pets', 'background_key' => 'warm',
    'warmup' => V("Let's talk about pets. Do you have a pet, or would you like one?", 'Давайте поговорим о питомцах. У вас есть питомец, или вы хотели бы его завести?', 'Үй жануарлары туралы сөйлесейік. Сізде үй жануары бар ма, әлде ұстағыңыз келе ме?'),
    'vocab' => [V('dog', 'собака', 'ит'), V('cat', 'кошка', 'мысық'), V('fish', 'рыба', 'балық'), V('bird', 'птица', 'құс'), V('feed', 'кормить', 'тамақтандыру'), V('walk', 'гулять', 'серуендеу'), V('playful', 'игривый', 'ойыншыл'), V('loyal', 'верный', 'адал'), V('cage', 'клетка', 'тор'), V('leash', 'поводок', 'бау')],
    'questions' => [
        V('Do you have a pet at home?', 'У вас есть питомец дома?', 'Үйде үй жануарыңыз бар ма?'),
        V('What pet would you like to have?', 'Какого питомца вы хотели бы завести?', 'Қандай үй жануарын ұстағыңыз келеді?'),
        V('Are dogs more loyal than cats, in your opinion?', 'По-вашему, собаки более верные, чем кошки?', 'Сіздің ойыңызша, иттер мысықтарға қарағанда адалырақ па?'),
        V('Who feeds the pet in your family?', 'Кто кормит питомца в вашей семье?', 'Отбасыңызда үй жануарын кім тамақтандырады?'),
        V('Do you enjoy walking a dog?', 'Вам нравится гулять с собакой?', 'Итпен серуендегенді ұнатасыз ба?'),
        V('Have you ever had a very playful pet?', 'У вас когда-нибудь был очень игривый питомец?', 'Сізде өте ойыншыл үй жануары болды ма?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'My Favorite Season', 'background_key' => 'nature',
    'warmup' => V("Let's talk about seasons. Which season do you like best, and why?", 'Давайте поговорим о временах года. Какое время года вам нравится больше всего и почему?', 'Мезгілдер туралы сөйлесейік. Қай мезгіл сізге көбірек ұнайды және неге?'),
    'vocab' => [V('spring', 'весна', 'көктем'), V('summer', 'лето', 'жаз'), V('autumn', 'осень', 'күз'), V('winter', 'зима', 'қыс'), V('warm', 'тёплый', 'жылы'), V('cold', 'холодный', 'суық'), V('holiday', 'праздник', 'мереке'), V('festival', 'фестиваль', 'фестиваль'), V('harvest', 'урожай', 'егін жинау'), V('snowman', 'снеговик', 'қарбала')],
    'questions' => [
        V('Which season do you like best?', 'Какое время года вам нравится больше всего?', 'Қай мезгіл сізге көбірек ұнайды?'),
        V('Do you prefer warm weather or cold weather?', 'Вы предпочитаете тёплую погоду или холодную?', 'Жылы ауа райын ұнатасыз ба, әлде суықты ма?'),
        V('Have you ever built a snowman?', 'Вы когда-нибудь лепили снеговика?', 'Қарбала жасадыңыз ба?'),
        V('What holidays happen in your favorite season?', 'Какие праздники бывают в ваше любимое время года?', 'Сүйікті мезгіліңізде қандай мерекелер болады?'),
        V('Do you enjoy harvest time?', 'Вам нравится время сбора урожая?', 'Егін жинау уақытын ұнатасыз ба?'),
        V('What do you wear in the coldest season?', 'Что вы носите в самое холодное время года?', 'Ең суық мезгілде не киесіз?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'At the Restaurant', 'background_key' => 'warm',
    'warmup' => V("Let's talk about eating out. What happens when you go to a restaurant?", 'Давайте поговорим о походах в ресторан. Что происходит, когда вы идёте в ресторан?', 'Мейрамханаға бару туралы сөйлесейік. Мейрамханаға барғанда не болады?'),
    'vocab' => [V('menu', 'меню', 'мәзір'), V('order', 'заказ', 'тапсырыс'), V('waiter', 'официант', 'даяршы'), V('bill', 'счёт', 'чек'), V('tip', 'чаевые', 'шайпұл'), V('table', 'столик', 'үстел'), V('reservation', 'бронирование', 'брондау'), V('dessert', 'десерт', 'десерт'), V('drink', 'напиток', 'сусын'), V('hungry', 'голодный', 'аш')],
    'questions' => [
        V('How often do you go to a restaurant?', 'Как часто вы ходите в ресторан?', 'Мейрамханаға қаншалықты жиі барасыз?'),
        V('Do you always look at the menu carefully?', 'Вы всегда внимательно смотрите меню?', 'Мәзірге әрдайым мұқият қарайсыз ба?'),
        V('Do you leave a tip at restaurants?', 'Вы оставляете чаевые в ресторанах?', 'Мейрамханаларда шайпұл қалдырасыз ба?'),
        V('Do you like ordering dessert?', 'Вам нравится заказывать десерт?', 'Десерт тапсырыс беруді ұнатасыз ба?'),
        V('Do you make a reservation before going to a restaurant?', 'Вы бронируете столик перед посещением ресторана?', 'Мейрамханаға бармас бұрын орын брондайсыз ба?'),
        V('What do you usually drink with your meal?', 'Что вы обычно пьёте во время еды?', 'Тамақ ішкенде әдетте не ішесіз?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Simple Sports', 'background_key' => 'energetic',
    'warmup' => V("Let's talk about sports. What sports do you like to play or watch?", 'Давайте поговорим о спорте. В какие виды спорта вам нравится играть или смотреть их?', 'Спорт туралы сөйлесейік. Қандай спортты ойнағанды немесе көргенді ұнатасыз?'),
    'vocab' => [V('football', 'футбол', 'футбол'), V('basketball', 'баскетбол', 'баскетбол'), V('run', 'бегать', 'жүгіру'), V('jump', 'прыгать', 'секіру'), V('win', 'выигрывать', 'жеңу'), V('lose', 'проигрывать', 'ұтылу'), V('team', 'команда', 'команда'), V('ball', 'мяч', 'доп'), V('goal', 'гол', 'гол'), V('score', 'счёт', 'есеп')],
    'questions' => [
        V('What sport do you like to play?', 'В какой спорт вам нравится играть?', 'Қандай спортты ойнағанды ұнатасыз?'),
        V('Do you prefer football or basketball?', 'Вы предпочитаете футбол или баскетбол?', 'Футболды ұнатасыз ба, әлде баскетболды ма?'),
        V('Do you like winning, or do you not mind losing?', 'Вам нравится побеждать, или вы не против проигрыша?', 'Жеңгенді ұнатасыз ба, әлде ұтылуға қарсы емессіз бе?'),
        V('Do you play sports on a team?', 'Вы играете в спорт в команде?', 'Командада спорт ойнайсыз ба?'),
        V('Can you run fast?', 'Вы можете быстро бегать?', 'Жылдам жүгіре аласыз ба?'),
        V('What was the highest score you ever got in a game?', 'Какой самый высокий счёт вы когда-либо получали в игре?', 'Ойында алған ең жоғары есебіңіз қандай болды?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'My Neighbors', 'background_key' => 'calm',
    'warmup' => V("Let's talk about neighbors. Do you talk to your neighbors often?", 'Давайте поговорим о соседях. Вы часто разговариваете со своими соседями?', 'Көршілер туралы сөйлесейік. Көршілеріңізбен жиі сөйлесесіз бе?'),
    'vocab' => [V('neighbor', 'сосед', 'көрші'), V('greet', 'приветствовать', 'сәлемдесу'), V('borrow', 'одалживать', 'қарызға алу'), V('share', 'делиться', 'бөлісу'), V('help', 'помогать', 'көмектесу'), V('friendly', 'дружелюбный', 'достық'), V('quiet', 'тихий', 'тыныш'), V('loud', 'громкий', 'қатты'), V('wave', 'махать', 'қол бұлғау'), V('chat', 'болтать', 'әңгімелесу')],
    'questions' => [
        V('Do you know your neighbors well?', 'Вы хорошо знаете своих соседей?', 'Көршілеріңізді жақсы білесіз бе?'),
        V('Do you wave or greet your neighbors when you see them?', 'Вы машете или приветствуете соседей, когда видите их?', 'Көршілеріңізді көргенде қол бұлғайсыз ба немесе сәлемдесесіз бе?'),
        V('Have you ever borrowed something from a neighbor?', 'Вы когда-нибудь одалживали что-то у соседа?', 'Көршіден бір нәрсе қарызға алдыңыз ба?'),
        V('Are your neighbors quiet or loud?', 'Ваши соседи тихие или громкие?', 'Көршілеріңіз тыныш па, әлде қатты ма?'),
        V('Do you like to chat with your neighbors?', 'Вам нравится болтать с соседями?', 'Көршілеріңізбен әңгімелесуді ұнатасыз ба?'),
        V('Would you help a neighbor in need?', 'Вы бы помогли соседу в нужде?', 'Мұқтаж көршіге көмектесер ме едіңіз?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Talking About Health', 'background_key' => 'calm',
    'warmup' => V("Let's talk about health. What do you do to stay healthy?", 'Давайте поговорим о здоровье. Что вы делаете, чтобы оставаться здоровым?', 'Денсаулық туралы сөйлесейік. Сау болу үшін не істейсіз?'),
    'vocab' => [V('doctor', 'врач', 'дәрігер'), V('medicine', 'лекарство', 'дәрі'), V('hospital', 'больница', 'аурухана'), V('healthy', 'здоровый', 'сау'), V('sick', 'больной', 'ауру'), V('pain', 'боль', 'ауырсыну'), V('rest', 'отдых', 'демалу'), V('exercise', 'упражнение', 'жаттығу'), V('checkup', 'осмотр', 'тексеру'), V('better', 'лучше', 'жақсырақ')],
    'questions' => [
        V('What do you do to stay healthy?', 'Что вы делаете, чтобы оставаться здоровым?', 'Сау болу үшін не істейсіз?'),
        V('How often do you exercise?', 'Как часто вы тренируетесь?', 'Қаншалықты жиі жаттығасыз?'),
        V('When did you last visit a doctor?', 'Когда вы в последний раз были у врача?', 'Соңғы рет дәрігерге қашан бардыңыз?'),
        V('What do you do when you feel sick?', 'Что вы делаете, когда чувствуете себя больным?', 'Ауру сезінгенде не істейсіз?'),
        V('Do you rest enough every night?', 'Вы достаточно отдыхаете каждую ночь?', 'Түнде жеткілікті демаласыз ба?'),
        V('What helps you feel better when you are unwell?', 'Что помогает вам чувствовать себя лучше, когда вы нездоровы?', 'Ауру болғанда өзіңізді жақсырақ сезінуге не көмектеседі?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'My Favorite Movies', 'background_key' => 'playful',
    'warmup' => V("Let's talk about movies. What kind of movies do you enjoy watching?", 'Давайте поговорим о фильмах. Какие фильмы вам нравится смотреть?', 'Фильмдер туралы сөйлесейік. Қандай фильмдерді көргенді ұнатасыз?'),
    'vocab' => [V('movie', 'фильм', 'фильм'), V('actor', 'актёр', 'актёр'), V('funny', 'смешной', 'күлкілі'), V('scary', 'страшный', 'қорқынышты'), V('sad', 'грустный', 'мұңды'), V('exciting', 'захватывающий', 'қызықты'), V('cinema', 'кинотеатр', 'кинотеатр'), V('popcorn', 'попкорн', 'попкорн'), V('screen', 'экран', 'экран'), V('story', 'история', 'оқиға')],
    'questions' => [
        V('What kind of movies do you like?', 'Какие фильмы вам нравятся?', 'Қандай фильмдер ұнайды?'),
        V('Do you prefer funny movies or scary movies?', 'Вы предпочитаете смешные фильмы или страшные?', 'Күлкілі фильмдерді ұнатасыз ба, әлде қорқынышты ма?'),
        V('Do you eat popcorn when you watch a movie?', 'Вы едите попкорн, когда смотрите фильм?', 'Фильм көргенде попкорн жейсіз бе?'),
        V('Do you prefer watching movies at the cinema or at home?', 'Вы предпочитаете смотреть фильмы в кино или дома?', 'Фильмдерді кинотеатрда көргенді ұнатасыз ба, әлде үйде ме?'),
        V('What is a movie that made you cry?', 'Какой фильм заставил вас плакать?', 'Сізді жылатқан фильм қайсы?'),
        V('Who is your favorite actor?', 'Кто ваш любимый актёр?', 'Сүйікті актёріңіз кім?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Simple Technology', 'background_key' => 'night-city',
    'warmup' => V("Let's talk about technology. What devices do you use every day?", 'Давайте поговорим о технологиях. Какими устройствами вы пользуетесь каждый день?', 'Технология туралы сөйлесейік. Күн сайын қандай құрылғыларды пайдаланасыз?'),
    'vocab' => [V('phone', 'телефон', 'телефон'), V('computer', 'компьютер', 'компьютер'), V('internet', 'интернет', 'интернет'), V('app', 'приложение', 'қолданба'), V('screen', 'экран', 'экран'), V('button', 'кнопка', 'түйме'), V('charge', 'заряжать', 'зарядтау'), V('battery', 'батарея', 'батарея'), V('video', 'видео', 'бейне'), V('message', 'сообщение', 'хабарлама')],
    'questions' => [
        V('How often do you use your phone?', 'Как часто вы пользуетесь телефоном?', 'Телефонды қаншалықты жиі пайдаланасыз?'),
        V('What app do you use the most?', 'Каким приложением вы пользуетесь чаще всего?', 'Ең жиі қай қолданбаны пайдаланасыз?'),
        V('Does your phone battery last a long time?', 'Батарея вашего телефона долго держится?', 'Телефоныңыздың батареясы ұзақ уақыт жетеді ме?'),
        V('Do you send a lot of messages every day?', 'Вы отправляете много сообщений каждый день?', 'Күн сайын көп хабарлама жібересіз бе?'),
        V('Do you watch videos online?', 'Вы смотрите видео онлайн?', 'Онлайн бейне көресіз бе?'),
        V('Could you live without the internet for a day?', 'Вы смогли бы прожить без интернета один день?', 'Бір күн интернетсіз өмір сүре алар ма едіңіз?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'At the Beach', 'background_key' => 'nature',
    'warmup' => V("Let's talk about the beach. Do you enjoy spending time at the beach?", 'Давайте поговорим о пляже. Вам нравится проводить время на пляже?', 'Жағажай туралы сөйлесейік. Жағажайда уақыт өткізуді ұнатасыз ба?'),
    'vocab' => [V('sand', 'песок', 'құм'), V('sea', 'море', 'теңіз'), V('wave', 'волна', 'толқын'), V('swim', 'плавать', 'жүзу'), V('sun', 'солнце', 'күн'), V('towel', 'полотенце', 'сүлгі'), V('shell', 'ракушка', 'ракушка'), V('boat', 'лодка', 'қайық'), V('fish', 'рыба', 'балық'), V('relax', 'расслабляться', 'демалу')],
    'questions' => [
        V('Do you enjoy going to the beach?', 'Вам нравится ходить на пляж?', 'Жағажайға баруды ұнатасыз ба?'),
        V('Can you swim well?', 'Вы хорошо плаваете?', 'Жақсы жүзе аласыз ба?'),
        V('Have you ever collected shells at the beach?', 'Вы когда-нибудь собирали ракушки на пляже?', 'Жағажайда ракушка жинадыңыз ба?'),
        V('Do you like lying in the sun to relax?', 'Вам нравится лежать на солнце, чтобы расслабиться?', 'Демалу үшін күнде жатуды ұнатасыз ба?'),
        V('Have you ever been on a boat?', 'Вы когда-нибудь были на лодке?', 'Қайықта болдыңыз ба?'),
        V('What is your favorite thing to do at the beach?', 'Что вам больше всего нравится делать на пляже?', 'Жағажайда істегенді ең көп ұнататын нәрсеңіз не?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Talking About Music', 'background_key' => 'playful',
    'warmup' => V("Let's talk about music. What kind of music do you enjoy?", 'Давайте поговорим о музыке. Какая музыка вам нравится?', 'Музыка туралы сөйлесейік. Сізге қандай музыка ұнайды?'),
    'vocab' => [V('song', 'песня', 'ән'), V('singer', 'певец', 'әнші'), V('guitar', 'гитара', 'гитара'), V('dance', 'танцевать', 'билеу'), V('loud', 'громкий', 'қатты'), V('soft', 'тихий (мягкий)', 'жұмсақ'), V('band', 'группа', 'топ'), V('concert', 'концерт', 'концерт'), V('radio', 'радио', 'радио'), V('rhythm', 'ритм', 'ырғақ')],
    'questions' => [
        V('What kind of music do you like?', 'Какая музыка вам нравится?', 'Сізге қандай музыка ұнайды?'),
        V('Do you like to dance?', 'Вам нравится танцевать?', 'Билегенді ұнатасыз ба?'),
        V('Can you play the guitar or another instrument?', 'Вы умеете играть на гитаре или другом инструменте?', 'Гитарада немесе басқа аспапта ойнай аласыз ба?'),
        V('Have you ever been to a concert?', 'Вы когда-нибудь были на концерте?', 'Концертте болдыңыз ба?'),
        V('Do you listen to the radio?', 'Вы слушаете радио?', 'Радио тыңдайсыз ба?'),
        V('Who is your favorite singer or band?', 'Кто ваш любимый певец или группа?', 'Сүйікті әншіңіз немесе тобыңыз кім?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Simple Farewells', 'background_key' => 'warm',
    'warmup' => V("Let's talk about saying goodbye. How do you usually say farewell to people?", 'Давайте поговорим о прощании. Как вы обычно прощаетесь с людьми?', 'Қоштасу туралы сөйлесейік. Адамдармен әдетте қалай қоштасасыз?'),
    'vocab' => [V('goodbye', 'до свидания', 'сау болыңыз'), V('see you', 'увидимся', 'көріскенше'), V('take care', 'береги себя', 'өзіңе қара'), V('safe travels', 'счастливого пути', 'сапарың сәтті болсын'), V('miss you', 'скучаю по тебе', 'сағынамын'), V('keep in touch', 'оставайся на связи', 'байланыста бол'), V('farewell', 'прощание', 'қоштасу'), V('until next time', 'до следующего раза', 'келесіге дейін'), V('good luck', 'удачи', 'сәттілік'), V('bye', 'пока', 'сау бол')],
    'questions' => [
        V('How do you usually say goodbye to close friends?', 'Как вы обычно прощаетесь с близкими друзьями?', 'Жақын достарыңызбен әдетте қалай қоштасасыз?'),
        V('Do you say "see you soon" or "goodbye" more often?', 'Вы чаще говорите "до скорого" или "до свидания"?', '"Жақында көрісеміз" бе, әлде "сау болыңыз" ба жиірек айтасыз?'),
        V('Have you ever said goodbye to someone for a long time?', 'Вы когда-нибудь прощались с кем-то надолго?', 'Біреумен ұзақ уақытқа қоштастыңыз ба?'),
        V('Do you keep in touch with old friends?', 'Вы поддерживаете связь со старыми друзьями?', 'Ескі достарыңызбен байланыста боласыз ба?'),
        V('Is it easy or hard for you to say goodbye?', 'Вам легко или трудно прощаться?', 'Қоштасу сізге оңай ма, әлде қиын ба?'),
        V('What do you usually say to someone going on a trip?', 'Что вы обычно говорите тому, кто отправляется в поездку?', 'Сапарға шығатын адамға әдетте не айтасыз?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'My City', 'background_key' => 'night-city',
    'warmup' => V("Let's talk about your city. What is your city like?", 'Давайте поговорим о вашем городе. Какой ваш город?', 'Қалаңыз туралы сөйлесейік. Қалаңыз қандай?'),
    'vocab' => [V('city', 'город', 'қала'), V('street', 'улица', 'көше'), V('building', 'здание', 'ғимарат'), V('park', 'парк', 'саябақ'), V('busy', 'оживлённый', 'қарбалас'), V('quiet', 'тихий', 'тыныш'), V('crowd', 'толпа', 'тобыр'), V('traffic', 'пробки', 'көлік қозғалысы'), V('square', 'площадь', 'алаң'), V('market', 'рынок', 'базар')],
    'questions' => [
        V('Is your city busy or quiet?', 'Ваш город оживлённый или тихий?', 'Қалаңыз қарбалас па, әлде тыныш па?'),
        V('Do you like living in your city?', 'Вам нравится жить в вашем городе?', 'Қалаңызда тұруды ұнатасыз ба?'),
        V('Is there a lot of traffic in your city?', 'В вашем городе много пробок?', 'Қалаңызда көлік қозғалысы көп пе?'),
        V('What is your favorite park in the city?', 'Какой ваш любимый парк в городе?', 'Қаладағы сүйікті саябағыңыз қайсы?'),
        V('Do you enjoy crowded places?', 'Вам нравятся многолюдные места?', 'Тобырлы жерлерді ұнатасыз ба?'),
        V('Is there a market you visit often?', 'Есть ли рынок, который вы часто посещаете?', 'Жиі баратын базарыңыз бар ма?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Talking About Friends', 'background_key' => 'warm',
    'warmup' => V("Let's talk about friendship. What do you value most in a friend?", 'Давайте поговорим о дружбе. Что вы больше всего цените в друге?', 'Достық туралы сөйлесейік. Досыңызда ең бағалайтын нәрсе не?'),
    'vocab' => [V('friend', 'друг', 'дос'), V('best friend', 'лучший друг', 'ең жақсы дос'), V('trust', 'доверие', 'сенім'), V('fun', 'весело', 'қызық'), V('laugh', 'смеяться', 'күлу'), V('help', 'помогать', 'көмектесу'), V('share', 'делиться', 'бөлісу'), V('meet', 'встречаться', 'кездесу'), V('close', 'близкий', 'жақын'), V('kind', 'добрый', 'мейірімді')],
    'questions' => [
        V('Who is your best friend?', 'Кто ваш лучший друг?', 'Ең жақсы досыңыз кім?'),
        V('What do you like to do together with friends?', 'Что вам нравится делать вместе с друзьями?', 'Достарыңызбен бірге не істегенді ұнатасыз?'),
        V('Do you trust your close friends completely?', 'Вы полностью доверяете своим близким друзьям?', 'Жақын достарыңызға толығымен сенесіз бе?'),
        V('How did you meet your best friend?', 'Как вы познакомились со своим лучшим другом?', 'Ең жақсы досыңызбен қалай таныстыңыз?'),
        V('Do you laugh a lot when you are with friends?', 'Вы много смеётесь, когда вы с друзьями?', 'Достарыңызбен болғанда көп күлесіз бе?'),
        V('What makes someone a kind friend?', 'Что делает человека добрым другом?', 'Адамды мейірімді досқа айналдыратын не?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Simple Shopping List', 'background_key' => 'playful',
    'warmup' => V("Let's talk about shopping lists. Do you make a list before you go shopping?", 'Давайте поговорим о списках покупок. Вы составляете список перед покупками?', 'Сатып алу тізімдері туралы сөйлесейік. Сауда жасамас бұрын тізім жасайсыз ба?'),
    'vocab' => [V('list', 'список', 'тізім'), V('buy', 'покупать', 'сатып алу'), V('need', 'нуждаться', 'қажет ету'), V('want', 'хотеть', 'қалау'), V('store', 'магазин', 'дүкен'), V('basket', 'корзина', 'себет'), V('pay', 'платить', 'төлеу'), V('cart', 'тележка', 'арба'), V('item', 'товар', 'зат'), V('forget', 'забывать', 'ұмыту')],
    'questions' => [
        V('Do you always make a shopping list?', 'Вы всегда составляете список покупок?', 'Әрдайым сауда тізімін жасайсыз ба?'),
        V('Do you buy things you need or things you want?', 'Вы покупаете то, что вам нужно, или то, что хотите?', 'Қажет заттарды сатып аласыз ба, әлде қалаған заттарды ма?'),
        V('Have you ever forgotten something important at the store?', 'Вы когда-нибудь забывали что-то важное в магазине?', 'Дүкенде маңызды бір нәрсені ұмытып кеттіңіз бе?'),
        V('Do you use a basket or a cart when shopping?', 'Вы используете корзину или тележку при покупках?', 'Сауда жасағанда себет пайдаланасыз ба, әлде арбаны ма?'),
        V('How many items do you usually buy at once?', 'Сколько товаров вы обычно покупаете за раз?', 'Бір мезгілде әдетте қанша зат сатып аласыз?'),
        V('Do you prefer paying by card or cash?', 'Вы предпочитаете платить картой или наличными?', 'Картамен төлегенді ұнатасыз ба, әлде қолма-қол ақшамен ме?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'My Free Time', 'background_key' => 'playful',
    'warmup' => V("Let's talk about free time. What do you do when you have nothing to do?", 'Давайте поговорим о свободном времени. Что вы делаете, когда вам нечем заняться?', 'Бос уақыт туралы сөйлесейік. Істер жоқ кезде не істейсіз?'),
    'vocab' => [V('relax', 'расслабляться', 'демалу'), V('hobby', 'хобби', 'хобби'), V('read', 'читать', 'оқу'), V('watch', 'смотреть', 'қарау'), V('play', 'играть', 'ойнау'), V('rest', 'отдыхать', 'демалу'), V('walk', 'гулять', 'серуендеу'), V('draw', 'рисовать', 'сурет салу'), V('listen', 'слушать', 'тыңдау'), V('enjoy', 'наслаждаться', 'рахаттану')],
    'questions' => [
        V('What do you like to do in your free time?', 'Что вам нравится делать в свободное время?', 'Бос уақытта не істегенді ұнатасыз?'),
        V('Do you have a hobby?', 'У вас есть хобби?', 'Хоббиіңіз бар ма?'),
        V('Do you prefer reading or watching movies?', 'Вы предпочитаете читать или смотреть фильмы?', 'Оқығанды ұнатасыз ба, әлде фильм көргенді ме?'),
        V('Do you like to walk when you want to relax?', 'Вам нравится гулять, когда вы хотите расслабиться?', 'Демалғыңыз келгенде серуендегенді ұнатасыз ба?'),
        V('Do you draw or paint in your free time?', 'Вы рисуете в свободное время?', 'Бос уақытта сурет саласыз ба?'),
        V('How much free time do you have each week?', 'Сколько у вас свободного времени каждую неделю?', 'Апта сайын қанша бос уақытыңыз бар?'),
    ],
];

require __DIR__ . '/seed_lessons_batch5_part2.php';
