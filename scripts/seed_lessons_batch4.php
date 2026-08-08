<?php
declare(strict_types=1);
// Batch 4: beginner + elementary. Run: php seed_lessons_batch4.php <username>

$configPath = '/home/u856637812/config/speaking_club_config.php';
$cfg = require $configPath;
$pdo = new PDO(
    "mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4",
    $cfg['db_user'], $cfg['db_pass'],
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$username = $argv[1] ?? null;
if (!$username) { fwrite(STDERR, "Usage: php seed_lessons_batch4.php <teacher_username>\n"); exit(1); }

$stmt = $pdo->prepare('SELECT id FROM teachers WHERE username = ?');
$stmt->execute([$username]);
$teacher = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$teacher) { fwrite(STDERR, "Teacher not found: $username\n"); exit(1); }
$teacherId = (int)$teacher['id'];

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$lessons = [];

// ========================= BEGINNER (batch 4) =========================

$lessons[] = ['level' => 'beginner', 'topic' => 'My Body and Health Habits', 'background_key' => 'calm',
    'warmup' => V("Let's talk about staying healthy. What habits keep your body healthy?", 'Давайте поговорим о здоровье. Какие привычки поддерживают ваше тело здоровым?', 'Денсаулық туралы сөйлесейік. Қандай әдеттер денеңізді сау ұстайды?'),
    'vocab' => [V('exercise', 'упражнение', 'жаттығу'), V('brush hair', 'расчёсывать волосы', 'шашты тарау'), V('wash face', 'умывать лицо', 'бетті жуу'), V('healthy', 'здоровый', 'сау'), V('unhealthy', 'нездоровый', 'сау емес'), V('strong', 'сильный', 'күшті'), V('weak', 'слабый', 'әлсіз'), V('energy', 'энергия', 'қуат'), V('sick day', 'больничный день', 'ауру күні'), V('checkup', 'осмотр', 'тексеру')],
    'questions' => [
        V('What do you do every morning to feel fresh?', 'Что вы делаете каждое утро, чтобы чувствовать себя бодрым?', 'Сергек сезіну үшін таңертең не істейсіз?'),
        V('Do you feel you have enough energy during the day?', 'Вы чувствуете, что у вас достаточно энергии днём?', 'Күндіз жеткілікті қуатыңыз бар деп сезінесіз бе?'),
        V('What food makes you feel strong?', 'Какая еда делает вас сильным?', 'Қандай тағам сізді күшті сезіндіреді?'),
        V('How many sick days did you take last year?', 'Сколько больничных дней вы взяли в прошлом году?', 'Былтыр неше ауру күнін алдыңыз?'),
        V('Do you go for regular health checkups?', 'Вы проходите регулярные медицинские осмотры?', 'Тұрақты медициналық тексеруден өтесіз бе?'),
        V('What is one healthy habit you would like to start?', 'Какую полезную привычку вы хотели бы завести?', 'Қандай пайдалы әдетті бастағыңыз келеді?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'In the Classroom', 'background_key' => 'professional',
    'warmup' => V("Let's talk about classroom life. What happens during a normal lesson?", 'Давайте поговорим о жизни в классе. Что происходит на обычном уроке?', 'Сынып өмірі туралы сөйлесейік. Кәдімгі сабақта не болады?'),
    'vocab' => [V('raise hand', 'поднимать руку', 'қол көтеру'), V('answer', 'отвечать', 'жауап беру'), V('question', 'вопрос', 'сұрақ'), V('test', 'тест', 'тест'), V('grade', 'оценка', 'баға'), V('pass', 'сдать (экзамен)', 'өту'), V('fail', 'провалить', 'сәтсіз болу'), V('correct', 'правильный', 'дұрыс'), V('wrong', 'неправильный', 'қате'), V('practice', 'практика', 'жаттығу')],
    'questions' => [
        V('Do you like answering questions in class?', 'Вам нравится отвечать на вопросы в классе?', 'Сыныпта сұрақтарға жауап бергенді ұнатасыз ба?'),
        V('Were you good at tests when you were a student?', 'Вы хорошо сдавали тесты, когда были учеником?', 'Оқушы кезіңізде тесттерді жақсы тапсырдыңыз ба?'),
        V('How do you feel when you get something wrong?', 'Что вы чувствуете, когда допускаете ошибку?', 'Қате жіберген кезде өзіңізді қалай сезінесіз?'),
        V('Do you think practice is more important than talent?', 'Как вы думаете, практика важнее таланта?', 'Жаттығу талаптан маңыздырақ деп ойлайсыз ба?'),
        V('What was your best grade at school?', 'Какая была ваша лучшая оценка в школе?', 'Мектептегі ең жақсы бағаңыз қандай болды?'),
        V('Do you get nervous before a test?', 'Вы нервничаете перед тестом?', 'Тест алдында толқисыз ба?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Simple Recipes', 'background_key' => 'playful',
    'warmup' => V("Let's talk about following a recipe. What steps do you follow when you cook something simple?", 'Давайте поговорим о рецептах. Какие шаги вы выполняете, когда готовите что-то простое?', 'Рецепт бойынша жасау туралы сөйлесейік. Қарапайым бір нәрсе пісіргенде қандай қадамдарды орындайсыз?'),
    'vocab' => [V('mix', 'смешивать', 'араластыру'), V('pour', 'наливать', 'құю'), V('cut', 'резать', 'кесу'), V('peel', 'чистить (кожуру)', 'аршу'), V('add', 'добавлять', 'қосу'), V('heat', 'нагревать', 'қыздыру'), V('cool', 'охлаждать', 'салқындату'), V('serve', 'подавать', 'ұсыну'), V('ready', 'готовый', 'дайын'), V('delicious', 'вкусный', 'дәмді')],
    'questions' => [
        V('What is the easiest recipe you know?', 'Какой самый простой рецепт вы знаете?', 'Білетін ең оңай рецептіңіз қандай?'),
        V('Do you follow recipe steps exactly?', 'Вы точно следуете шагам рецепта?', 'Рецепт қадамдарын дәл орындайсыз ба?'),
        V('What do you usually add to make food taste better?', 'Что вы обычно добавляете, чтобы еда была вкуснее?', 'Тағамды дәмдірек ету үшін әдетте не қосасыз?'),
        V('Do you enjoy cutting and preparing ingredients?', 'Вам нравится резать и готовить ингредиенты?', 'Ингредиенттерді кесіп, дайындауды ұнатасыз ба?'),
        V('What is the most delicious thing you have ever cooked?', 'Какое самое вкусное блюдо вы когда-либо готовили?', 'Пісірген ең дәмді тағамыңыз қандай болды?'),
        V('Who do you like to cook for?', 'Для кого вам нравится готовить?', 'Кімге тамақ жасағанды ұнатасыз?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'My Daily Schedule', 'background_key' => 'calm',
    'warmup' => V("Let's talk about your schedule. How organized is your typical day?", 'Давайте поговорим о вашем расписании. Насколько организован ваш типичный день?', 'Кестеңіз туралы сөйлесейік. Кәдімгі күніңіз қаншалықты ұйымдастырылған?'),
    'vocab' => [V('schedule', 'расписание', 'кесте'), V('appointment', 'встреча', 'кездесу'), V('plan', 'план', 'жоспар'), V('busy day', 'занятой день', 'бос емес күн'), V('free time', 'свободное время', 'бос уақыт'), V('wake time', 'время подъёма', 'ояту уақыты'), V('bed time', 'время сна', 'ұйықтау уақыты'), V('lunch time', 'обеденное время', 'түскі ас уақыты'), V('meeting', 'встреча (деловая)', 'жиналыс'), V('break', 'перерыв', 'үзіліс')],
    'questions' => [
        V('Is your typical day busy or relaxed?', 'Ваш типичный день напряжённый или спокойный?', 'Кәдімгі күніңіз қарбалас па, әлде сабырлы ма?'),
        V('Do you plan your schedule the night before?', 'Вы планируете расписание накануне вечером?', 'Кестеңізді алдыңғы кеште жоспарлайсыз ба?'),
        V('What time do you usually have lunch?', 'Во сколько вы обычно обедаете?', 'Түскі асты әдетте сағат нешеде ішесіз?'),
        V('Do you take breaks during your work or study?', 'Вы делаете перерывы во время работы или учёбы?', 'Жұмыс немесе оқу кезінде үзіліс жасайсыз ба?'),
        V('How much free time do you have each day?', 'Сколько у вас свободного времени каждый день?', 'Күн сайын қанша бос уақытыңыз бар?'),
        V('Do you prefer a fixed schedule or a flexible one?', 'Вы предпочитаете фиксированное расписание или гибкое?', 'Тұрақты кестені ұнатасыз ба, әлде икемдіні ме?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Talking About the Past', 'background_key' => 'calm',
    'warmup' => V("Let's talk about the past. What did you do last week that you enjoyed?", 'Давайте поговорим о прошлом. Что вы делали на прошлой неделе, что вам понравилось?', 'Өткен туралы сөйлесейік. Өткен аптада не істегеніңіз ұнады?'),
    'vocab' => [V('yesterday', 'вчера', 'кеше'), V('last week', 'на прошлой неделе', 'өткен апта'), V('ago', 'назад', 'бұрын'), V('before', 'до', 'дейін'), V('after', 'после', 'кейін'), V('remember', 'помнить', 'есте сақтау'), V('forget', 'забывать', 'ұмыту'), V('past', 'прошлое', 'өткен'), V('then', 'тогда', 'сонда'), V('used to', 'раньше делал', 'бұрын істейтін')],
    'questions' => [
        V('What did you do yesterday?', 'Что вы делали вчера?', 'Кеше не істедіңіз?'),
        V('What is something you did a long time ago that you remember well?', 'Что вы делали давно, что хорошо помните?', 'Көп бұрын істеген, жақсы есте қалған нәрсеңіз бар ма?'),
        V('What did you use to do as a child that you don\'t do now?', 'Что вы делали в детстве, чего сейчас не делаете?', 'Балалық шақта істеп, қазір істемейтін нәрсеңіз не?'),
        V('Do you often forget things? Give an example.', 'Вы часто забываете вещи? Приведите пример.', 'Жиі нәрсені ұмытасыз ба? Мысал келтіріңіз.'),
        V('What did you do before you learned English?', 'Что вы делали до того, как выучили английский?', 'Ағылшын тілін үйренбес бұрын не істедіңіз?'),
        V('How different is your life now compared to five years ago?', 'Насколько сейчас отличается ваша жизнь от пятилетней давности?', 'Қазіргі өміріңіз бес жыл бұрынғыдан қаншалықты өзгеше?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Talking About the Future', 'background_key' => 'energetic',
    'warmup' => V("Let's talk about the future. What are you hoping to do soon?", 'Давайте поговорим о будущем. Что вы надеетесь сделать в ближайшее время?', 'Болашақ туралы сөйлесейік. Жақын арада не істегіңіз келеді?'),
    'vocab' => [V('tomorrow', 'завтра', 'ертең'), V('next week', 'на следующей неделе', 'келесі апта'), V('soon', 'скоро', 'жақында'), V('later', 'позже', 'кейінірек'), V('plan', 'планировать', 'жоспарлау'), V('will', 'буду (глагол будущего)', 'болады (келер шақ)'), V('hope', 'надеяться', 'үміттену'), V('future', 'будущее', 'болашақ'), V('someday', 'когда-нибудь', 'бір күні'), V('goal', 'цель', 'мақсат')],
    'questions' => [
        V('What are your plans for tomorrow?', 'Какие у вас планы на завтра?', 'Ертеңге жоспарларыңыз қандай?'),
        V('What do you hope to achieve this year?', 'Чего вы надеетесь достичь в этом году?', 'Осы жылы неге жетуді үміт етесіз?'),
        V('Where do you see yourself in the future?', 'Кем вы видите себя в будущем?', 'Болашақта өзіңізді қалай көресіз?'),
        V('Is there something you want to do someday?', 'Есть ли что-то, что вы хотите сделать когда-нибудь?', 'Бір күні істегіңіз келетін нәрсе бар ма?'),
        V('What is one goal you are working on right now?', 'Над какой целью вы сейчас работаете?', 'Қазір қандай мақсат үстінде жұмыс істеп жатырсыз?'),
        V('Do you like to plan ahead, or take life as it comes?', 'Вам нравится планировать заранее или жить, как получится?', 'Алдын ала жоспарлағанды ұнатасыз ба, әлде өмірді қалай келсе солай қабылдайсыз ба?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Common Sounds and Noises', 'background_key' => 'playful',
    'warmup' => V("Let's talk about sounds. What sounds do you hear every day?", 'Давайте поговорим о звуках. Какие звуки вы слышите каждый день?', 'Дыбыстар туралы сөйлесейік. Күн сайын қандай дыбыстарды естисіз?'),
    'vocab' => [V('loud', 'громкий', 'қатты (дыбыс)'), V('quiet', 'тихий', 'тыныш'), V('ring', 'звонить', 'шылдырлау'), V('knock', 'стучать', 'қағу'), V('bark', 'лаять', 'үру'), V('honk', 'сигналить', 'дабыл беру'), V('music', 'музыка', 'музыка'), V('silence', 'тишина', 'тыныштық'), V('noise', 'шум', 'шу'), V('alarm', 'будильник/сигнал', 'дабыл')],
    'questions' => [
        V('What sound wakes you up in the morning?', 'Какой звук будит вас утром?', 'Таңертең сізді қандай дыбыс оятады?'),
        V('Do you prefer silence or background music while working?', 'Вы предпочитаете тишину или фоновую музыку во время работы?', 'Жұмыс істегенде тыныштықты ұнатасыз ба, әлде фондық музыканы ма?'),
        V('What noise bothers you the most?', 'Какой шум вас больше всего раздражает?', 'Сізді ең көп қандай шу мазалайды?'),
        V('Do dogs bark a lot in your neighborhood?', 'Собаки много лают в вашем районе?', 'Ауданыңызда иттер көп ұра ма?'),
        V('Do you jump when someone knocks on your door suddenly?', 'Вы вздрагиваете, когда кто-то внезапно стучит в дверь?', 'Біреу кенеттен есікті қаққанда селк етіп қаласыз ба?'),
        V('What is your favorite type of music to listen to?', 'Какую музыку вам больше всего нравится слушать?', 'Тыңдағанды ұнататын музыка түрі қандай?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Simple Wishes and Dreams', 'background_key' => 'warm',
    'warmup' => V("Let's talk about wishes. If you could have one wish, what would it be?", 'Давайте поговорим о желаниях. Если бы у вас было одно желание, каким бы оно было?', 'Тілектер туралы сөйлесейік. Бір тілегіңіз болса, ол қандай болар еді?'),
    'vocab' => [V('wish', 'желание', 'тілек'), V('dream', 'мечта', 'арман'), V('hope', 'надежда', 'үміт'), V('imagine', 'воображать', 'елестету'), V('wonder', 'интересоваться', 'қызығу'), V('want', 'хотеть', 'қалау'), V('someday', 'когда-нибудь', 'бір күні'), V('magic', 'магия', 'сиқыр'), V('wishlist', 'список желаний', 'қалаулар тізімі'), V('believe', 'верить', 'сену')],
    'questions' => [
        V('If you had one wish, what would you wish for?', 'Если бы у вас было одно желание, что бы вы пожелали?', 'Бір тілегіңіз болса, не тілер едіңіз?'),
        V('What is a dream you have had since childhood?', 'Какая у вас мечта с детства?', 'Балалық шақтан бергі арманыңыз қандай?'),
        V('Do you believe dreams can come true?', 'Вы верите, что мечты могут сбыться?', 'Армандар орындала алады деп сенесіз бе?'),
        V('What is on your wishlist right now?', 'Что сейчас в вашем списке желаний?', 'Қазір қалаулар тізіміңізде не бар?'),
        V('Do you often wonder about your future?', 'Вы часто задумываетесь о своём будущем?', 'Болашағыңыз туралы жиі ойланасыз ба?'),
        V('What is something you hope happens soon?', 'На что вы надеетесь, что скоро произойдёт?', 'Жақында болатынына үміттенетін нәрсеңіз не?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'At the Post Office', 'background_key' => 'professional',
    'warmup' => V("Let's talk about the post office. Have you ever sent a letter or package?", 'Давайте поговорим о почте. Вы когда-нибудь отправляли письмо или посылку?', 'Пошта туралы сөйлесейік. Хат немесе сәлемдеме жібердіңіз бе?'),
    'vocab' => [V('letter', 'письмо', 'хат'), V('stamp', 'марка', 'марка'), V('envelope', 'конверт', 'конверт'), V('package', 'посылка', 'сәлемдеме'), V('mail', 'почта', 'пошта'), V('send', 'отправлять', 'жіберу'), V('receive', 'получать', 'алу'), V('address', 'адрес', 'мекенжай'), V('postman', 'почтальон', 'почташы'), V('mailbox', 'почтовый ящик', 'пошта жәшігі')],
    'questions' => [
        V('When was the last time you sent a letter?', 'Когда вы в последний раз отправляли письмо?', 'Соңғы рет хатты қашан жібердіңіз?'),
        V('Do you check your mailbox often?', 'Вы часто проверяете почтовый ящик?', 'Пошта жәшігіңізді жиі тексересіз бе?'),
        V('Have you ever sent a package to another country?', 'Вы когда-нибудь отправляли посылку в другую страну?', 'Басқа елге сәлемдеме жібердіңіз бе?'),
        V('Do you prefer writing letters or sending messages online?', 'Вы предпочитаете писать письма или отправлять сообщения онлайн?', 'Хат жазғанды ұнатасыз ба, әлде онлайн хабарлама жіберуді ме?'),
        V('Have you ever received a surprise package?', 'Вы когда-нибудь получали неожиданную посылку?', 'Күтпеген сәлемдеме алдыңыз ба?'),
        V('Do you know your full home address by heart?', 'Вы знаете свой полный домашний адрес наизусть?', 'Толық үй мекенжайыңызды жатқа білесіз бе?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'School Subjects', 'background_key' => 'professional',
    'warmup' => V("Let's talk about school subjects. Which subjects did you enjoy most at school?", 'Давайте поговорим о школьных предметах. Какие предметы вам больше всего нравились в школе?', 'Мектеп пәндері туралы сөйлесейік. Мектепте қандай пәндер сізге көбірек ұнады?'),
    'vocab' => [V('math', 'математика', 'математика'), V('science', 'наука', 'жаратылыстану'), V('history', 'история', 'тарих'), V('art', 'искусство', 'өнер'), V('music', 'музыка', 'музыка'), V('geography', 'география', 'география'), V('language', 'язык', 'тіл'), V('sport', 'спорт', 'спорт'), V('break', 'перемена', 'үзіліс'), V('exam', 'экзамен', 'емтихан')],
    'questions' => [
        V('What was your favorite subject at school?', 'Какой был ваш любимый предмет в школе?', 'Мектептегі сүйікті пәніңіз қандай болды?'),
        V('Were you good at math?', 'Вы хорошо знали математику?', 'Математиканы жақсы білдіңіз бе?'),
        V('Did you enjoy history class?', 'Вам нравились уроки истории?', 'Тарих сабақтары ұнады ма?'),
        V('What subject did you find most difficult?', 'Какой предмет казался вам самым трудным?', 'Ең қиын пән қайсы болды?'),
        V('Do you still use anything you learned at school today?', 'Вы всё ещё используете что-то из того, что учили в школе?', 'Мектепте үйренген нәрселеріңізді әлі пайдаланасыз ба?'),
        V('If you could study one more subject now, what would it be?', 'Если бы вы могли изучать ещё один предмет сейчас, какой бы он был?', 'Қазір тағы бір пәнді оқи алсаңыз, ол қандай болар еді?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Simple Comparisons', 'background_key' => 'calm',
    'warmup' => V("Let's talk about comparing things. What do you like to compare in your life?", 'Давайте поговорим о сравнении вещей. Что вам нравится сравнивать в жизни?', 'Заттарды салыстыру туралы сөйлесейік. Өміріңізде нені салыстырғанды ұнатасыз?'),
    'vocab' => [V('bigger', 'больше', 'үлкенірек'), V('smaller', 'меньше', 'кішірек'), V('faster', 'быстрее', 'жылдамырақ'), V('slower', 'медленнее', 'баяуырақ'), V('better', 'лучше', 'жақсырақ'), V('worse', 'хуже', 'нашар'), V('more', 'больше (количество)', 'көбірек'), V('less', 'меньше (количество)', 'азырақ'), V('same', 'такой же', 'бірдей'), V('different', 'другой', 'басқа')],
    'questions' => [
        V('Is your city bigger or smaller than where you grew up?', 'Ваш город больше или меньше того, где вы выросли?', 'Қалаңыз өскен жеріңізден үлкен бе, әлде кіші ме?'),
        V('Do you work faster or slower than your coworkers?', 'Вы работаете быстрее или медленнее своих коллег?', 'Әріптестеріңізге қарағанда жылдам жұмыс істейсіз бе, әлде баяу ма?'),
        V('Is your life better or worse than five years ago?', 'Ваша жизнь лучше или хуже, чем пять лет назад?', 'Өміріңіз бес жыл бұрынғыдан жақсы ма, әлде нашар ма?'),
        V('Do you spend more time working or relaxing?', 'Вы проводите больше времени за работой или отдыхом?', 'Жұмыс жасауға көбірек уақыт бөлесіз бе, әлде демалуға ма?'),
        V('Are you and your best friend the same or different?', 'Вы и ваш лучший друг похожи или разные?', 'Сіз бен ең жақын досыңыз бірдейсіздер ме, әлде әртүрлісіздер ме?'),
        V('What is different about your life now compared to your parents\' life?', 'Чем ваша жизнь отличается от жизни ваших родителей?', 'Өміріңіз ата-анаңыздың өмірінен немен ерекшеленеді?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Family Roles', 'background_key' => 'warm',
    'warmup' => V("Let's talk about extended family. Who are the important people in your extended family?", 'Давайте поговорим о большой семье. Кто важные люди в вашей большой семье?', 'Үлкен отбасы туралы сөйлесейік. Үлкен отбасыңызда маңызды адамдар кімдер?'),
    'vocab' => [V('mom', 'мама', 'ана'), V('dad', 'папа', 'әке'), V('aunt', 'тётя', 'апай'), V('uncle', 'дядя', 'ағай'), V('cousin', 'двоюродный брат/сестра', 'немере'), V('nephew', 'племянник', 'жиен'), V('niece', 'племянница', 'жиен қыз'), V('grandchild', 'внук/внучка', 'немере'), V('relative', 'родственник', 'туыс'), V('family tree', 'генеалогическое древо', 'шежіре')],
    'questions' => [
        V('How many aunts and uncles do you have?', 'Сколько у вас тётей и дядей?', 'Сізде неше апай мен ағай бар?'),
        V('Are you close with your cousins?', 'Вы близки со своими двоюродными братьями и сёстрами?', 'Немерелеріңізбен жақынсыз ба?'),
        V('Do you know your family tree well?', 'Вы хорошо знаете своё генеалогическое древо?', 'Шежіреңізді жақсы білесіз бе?'),
        V('Who is your favorite relative? Why?', 'Кто ваш любимый родственник? Почему?', 'Сүйікті туысыңыз кім? Неге?'),
        V('How often do you see your extended family?', 'Как часто вы видитесь с расширенной семьёй?', 'Үлкен отбасыңызды қаншалықты жиі көресіз?'),
        V('Do big family gatherings happen often in your family?', 'В вашей семье часто бывают большие семейные встречи?', 'Отбасыңызда үлкен отбасылық жиналыстар жиі бола ма?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Rooms and Furniture', 'background_key' => 'calm',
    'warmup' => V("Let's talk about furniture. What furniture do you have in your favorite room?", 'Давайте поговорим о мебели. Какая мебель есть в вашей любимой комнате?', 'Жиһаз туралы сөйлесейік. Сүйікті бөлмеңізде қандай жиһаз бар?'),
    'vocab' => [V('sofa', 'диван', 'диван'), V('bed', 'кровать', 'төсек'), V('lamp', 'лампа', 'шам'), V('shelf', 'полка', 'сөре'), V('mirror', 'зеркало', 'айна'), V('closet', 'шкаф', 'шкаф'), V('curtain', 'занавеска', 'перде'), V('carpet', 'ковёр', 'кілем'), V('wardrobe', 'гардероб', 'гардероб'), V('drawer', 'ящик', 'тартпа')],
    'questions' => [
        V('What furniture is in your bedroom?', 'Какая мебель есть в вашей спальне?', 'Жатын бөлмеңізде қандай жиһаз бар?'),
        V('Do you have a favorite piece of furniture?', 'У вас есть любимый предмет мебели?', 'Сүйікті жиһаз бұйымыңыз бар ма?'),
        V('Is your closet usually organized or messy?', 'Ваш шкаф обычно организован или в беспорядке?', 'Шкафыңыз әдетте ретті ме, әлде ретсіз бе?'),
        V('Do you prefer a big sofa or a small one?', 'Вы предпочитаете большой диван или маленький?', 'Үлкен диванды ұнатасыз ба, әлде кішіні ме?'),
        V('What furniture would you like to buy next?', 'Какую мебель вы хотели бы купить следующей?', 'Келесі қандай жиһазды сатып алғыңыз келеді?'),
        V('Do you have a carpet in your home?', 'У вас дома есть ковёр?', 'Үйіңізде кілем бар ма?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Travel Items', 'background_key' => 'energetic',
    'warmup' => V("Let's talk about packing for a trip. What items do you always bring when you travel?", 'Давайте поговорим о сборах в поездку. Какие вещи вы всегда берёте с собой в путешествие?', 'Сапарға жиналу туралы сөйлесейік. Саяхаттағанда өзіңізбен әрдайым не аласыз?'),
    'vocab' => [V('suitcase', 'чемодан', 'чемодан'), V('ticket', 'билет', 'билет'), V('passport', 'паспорт', 'паспорт'), V('map', 'карта', 'карта'), V('camera', 'камера', 'камера'), V('sunglasses', 'солнцезащитные очки', 'күн көзілдірігі'), V('hat', 'шляпа', 'бас киім'), V('guidebook', 'путеводитель', 'нұсқаулық кітап'), V('wallet', 'кошелёк', 'әмиян'), V('phone', 'телефон', 'телефон')],
    'questions' => [
        V('What do you always pack first when traveling?', 'Что вы всегда упаковываете первым в поездку?', 'Саяхатқа алдымен әрдайым не жинайсыз?'),
        V('Do you use a guidebook or your phone when traveling?', 'Вы используете путеводитель или телефон в путешествиях?', 'Саяхатта нұсқаулық кітапты пайдаланасыз ба, әлде телефонды ма?'),
        V('Have you ever forgotten something important on a trip?', 'Вы когда-нибудь забывали что-то важное в поездке?', 'Сапарда маңызды бір нәрсені ұмытып қалдыңыз ба?'),
        V('Do you take a lot of photos when you travel?', 'Вы делаете много фотографий, когда путешествуете?', 'Саяхаттағанда көп сурет түсіресіз бе?'),
        V('Do you pack light or bring a big suitcase?', 'Вы берёте мало вещей или большой чемодан?', 'Аз зат аласыз ба, әлде үлкен чемодан ба?'),
        V('Is your passport always up to date?', 'Ваш паспорт всегда действителен?', 'Паспортыңыздың мерзімі әрдайым жарамды ма?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Talking About the Weather Today', 'background_key' => 'nature',
    'warmup' => V("Let's talk about today's weather. Is it a good day to go outside?", 'Давайте поговорим о сегодняшней погоде. Сегодня хороший день, чтобы выйти на улицу?', 'Бүгінгі ауа райы туралы сөйлесейік. Бүгін далаға шығуға жақсы күн бе?'),
    'vocab' => [V('sunny', 'солнечно', 'күнді'), V('cloudy', 'облачно', 'бұлтты'), V('windy', 'ветрено', 'желді'), V('foggy', 'туманно', 'тұманды'), V('stormy', 'штормовой', 'дауылды'), V('mild', 'умеренный', 'қоңыржай'), V('freezing', 'морозный', 'қатты суық'), V('humid', 'влажный', 'ылғалды'), V('dry', 'сухой', 'құрғақ'), V('wet', 'мокрый', 'дымқыл')],
    'questions' => [
        V('Is it sunny or cloudy where you are today?', 'У вас сегодня солнечно или облачно?', 'Бүгін сіздің жақта күнді ме, әлде бұлтты ма?'),
        V('Do you like windy days?', 'Вам нравятся ветреные дни?', 'Желді күндерді ұнатасыз ба?'),
        V('Is the weather usually mild or extreme where you live?', 'Погода обычно умеренная или экстремальная там, где вы живёте?', 'Тұратын жеріңізде ауа райы әдетте қоңыржай ма, әлде қатал ма?'),
        V('Do you go outside when it is foggy?', 'Вы выходите на улицу, когда туманно?', 'Тұманды болғанда далаға шығасыз ба?'),
        V('How do you deal with humid weather?', 'Как вы справляетесь с влажной погодой?', 'Ылғалды ауа райымен қалай күресесіз?'),
        V('Would you rather live somewhere dry or somewhere wet?', 'Вы бы предпочли жить в сухом месте или во влажном?', 'Құрғақ жерде тұрғанды қалайсыз ба, әлде дымқыл жерде ме?'),
    ],
];

require __DIR__ . '/seed_lessons_batch4_part2.php';

$insert = $pdo->prepare(
    'INSERT INTO lessons (teacher_id, level, topic, vocab, warmup, questions, background_key)
     VALUES (:teacher_id, :level, :topic, :vocab, :warmup, :questions, :background_key)'
);

$count = 0;
foreach ($lessons as $lesson) {
    $insert->execute([
        ':teacher_id' => $teacherId, ':level' => $lesson['level'], ':topic' => $lesson['topic'],
        ':vocab' => json_encode($lesson['vocab'], JSON_UNESCAPED_UNICODE),
        ':warmup' => json_encode($lesson['warmup'], JSON_UNESCAPED_UNICODE),
        ':questions' => json_encode($lesson['questions'], JSON_UNESCAPED_UNICODE),
        ':background_key' => $lesson['background_key'],
    ]);
    $count++;
}

echo "Inserted $count lessons for teacher '$username' (id $teacherId).\n";
