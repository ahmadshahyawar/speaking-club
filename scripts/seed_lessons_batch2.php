<?php
declare(strict_types=1);
// Batch 2: 10 more lessons per level (beginner + elementary here, pre-intermediate
// + intermediate in seed_lessons_batch2_part2.php). Run once: php seed_lessons_batch2.php <username>

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
    fwrite(STDERR, "Usage: php seed_lessons_batch2.php <teacher_username>\n");
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

// ========================= BEGINNER (batch 2) =========================

$lessons[] = [
    'level' => 'beginner', 'topic' => 'School', 'background_key' => 'professional',
    'warmup' => V(
        "Let's talk about school. What do you remember about your classroom and your favorite lesson?",
        'Давайте поговорим о школе. Что вы помните о своём классе и любимом уроке?',
        'Мектеп туралы сөйлесейік. Сыныбыңыз бен сүйікті сабағыңыз туралы не есіңізде?'
    ),
    'vocab' => [
        V('classroom', 'класс', 'сынып бөлмесі'), V('teacher', 'учитель', 'мұғалім'), V('student', 'ученик', 'оқушы'),
        V('book', 'книга', 'кітап'), V('pencil', 'карандаш', 'қарындаш'), V('homework', 'домашнее задание', 'үй тапсырмасы'),
        V('blackboard', 'доска', 'тақта'), V('lesson', 'урок', 'сабақ'), V('backpack', 'рюкзак', 'рюкзак'), V('ruler', 'линейка', 'сызғыш'),
    ],
    'questions' => [
        V('What was your favorite subject at school?', 'Какой был ваш любимый предмет в школе?', 'Мектепте сүйікті пәніңіз қандай болды?'),
        V('Do you remember your first teacher? What were they like?', 'Вы помните своего первого учителя? Каким он был?', 'Алғашқы мұғаліміңізді есте сақтайсыз ба? Ол қандай болды?'),
        V('Do you usually do your homework right away or later?', 'Вы обычно делаете домашнее задание сразу или позже?', 'Үй тапсырмасын әдетте бірден орындайсыз ба, әлде кейінірек пе?'),
        V('What do you carry in your bag every day?', 'Что вы носите в своей сумке каждый день?', 'Сумкаңызда күн сайын не аласыз?'),
        V('Was school easy or difficult for you?', 'Школа была для вас лёгкой или трудной?', 'Мектеп сіз үшін оңай болды ма, әлде қиын ба?'),
        V('What do you think makes a good teacher?', 'Что, по-вашему, делает учителя хорошим?', 'Сіздің ойыңызша, мұғалімді жақсы ететін не?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Getting Around Town', 'background_key' => 'energetic',
    'warmup' => V(
        "Let's talk about transportation. How do you usually travel around your town?",
        'Давайте поговорим о транспорте. Как вы обычно передвигаетесь по своему городу?',
        'Көлік туралы сөйлесейік. Қалаңызда әдетте қалай жүресіз?'
    ),
    'vocab' => [
        V('car', 'машина', 'көлік'), V('bus', 'автобус', 'автобус'), V('bicycle', 'велосипед', 'велосипед'),
        V('train', 'поезд', 'пойыз'), V('airplane', 'самолёт', 'ұшақ'), V('boat', 'лодка', 'қайық'),
        V('walk', 'ходить пешком', 'жаяу жүру'), V('drive', 'водить машину', 'көлік жүргізу'), V('ride', 'ехать (на чём-то)', 'мініп жүру'), V('road', 'дорога', 'жол'),
    ],
    'questions' => [
        V('How do you usually get to work or school?', 'Как вы обычно добираетесь до работы или школы?', 'Жұмысқа немесе мектепке әдетте қалай барасыз?'),
        V('Do you know how to ride a bicycle?', 'Вы умеете кататься на велосипеде?', 'Велосипед тебуді білесіз бе?'),
        V('Have you ever traveled by train? What was it like?', 'Вы когда-нибудь ездили на поезде? Каково это было?', 'Пойызбен саяхаттадыңыз ба? Ол қалай болды?'),
        V('Do you prefer walking or driving for short trips?', 'Вы предпочитаете ходить пешком или ездить на машине на короткие расстояния?', 'Қысқа сапарларға жаяу жүргенді ұнатасыз ба, әлде көлікпен ме?'),
        V('Is public transport good in your city?', 'Общественный транспорт хороший в вашем городе?', 'Қалаңызда қоғамдық көлік жақсы ма?'),
        V('Would you like to fly in an airplane one day? Where to?', 'Хотели бы вы когда-нибудь полететь на самолёте? Куда?', 'Бір күні ұшақпен ұшқыңыз келе ме? Қайда?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'At the Market', 'background_key' => 'playful',
    'warmup' => V(
        "Let's talk about buying things at the market. What do you usually buy, and how?",
        'Давайте поговорим о покупках на рынке. Что вы обычно покупаете и как?',
        'Базардан сатып алу туралы сөйлесейік. Әдетте не сатып аласыз және қалай?'
    ),
    'vocab' => [
        V('buy', 'покупать', 'сатып алу'), V('sell', 'продавать', 'сату'), V('money', 'деньги', 'ақша'),
        V('coin', 'монета', 'тиын'), V('basket', 'корзина', 'себет'), V('queue', 'очередь', 'кезек'),
        V('cart', 'тележка', 'арба'), V('weigh', 'взвешивать', 'өлшеу'), V('fresh', 'свежий', 'жаңа піскен'), V('cheap', 'дешёвый', 'арзан'),
    ],
    'questions' => [
        V('Do you like going to the market? Why or why not?', 'Вам нравится ходить на рынок? Почему да или нет?', 'Базарға баруды ұнатасыз ба? Неге ия немесе жоқ?'),
        V('What do you usually buy when you go shopping?', 'Что вы обычно покупаете, когда идёте за покупками?', 'Сауда жасауға барғанда әдетте не сатып аласыз?'),
        V('Do you mind waiting in a queue?', 'Вам не трудно ждать в очереди?', 'Кезекте тұруға қиналасыз ба?'),
        V('Do you always check if fruit is fresh?', 'Вы всегда проверяете, свежие ли фрукты?', 'Жемістің жаңа піскенін әрдайым тексересіз бе?'),
        V('Is it easy to find cheap and good products in your city?', 'Легко ли найти дешёвые и хорошие товары в вашем городе?', 'Қалаңызда арзан әрі сапалы тауарды табу оңай ма?'),
        V('Do you carry cash or use a card when you shop?', 'Вы носите наличные или используете карту, когда делаете покупки?', 'Сауда жасағанда қолма-қол ақша аласыз ба, әлде карта пайдаланасыз ба?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Feelings and Emotions', 'background_key' => 'warm',
    'warmup' => V(
        "Let's talk about feelings. How do you feel today, and what usually makes you feel that way?",
        'Давайте поговорим о чувствах. Как вы себя чувствуете сегодня и что обычно вызывает это чувство?',
        'Сезімдер туралы сөйлесейік. Бүгін өзіңізді қалай сезінесіз және оны әдетте не тудырады?'
    ),
    'vocab' => [
        V('happy', 'счастливый', 'бақытты'), V('sad', 'грустный', 'мұңды'), V('angry', 'злой', 'ашулы'),
        V('tired', 'уставший', 'шаршаған'), V('scared', 'напуганный', 'қорыққан'), V('excited', 'взволнованный', 'қуанышты'),
        V('surprised', 'удивлённый', 'таңғалған'), V('worried', 'обеспокоенный', 'мазасыз'), V('calm', 'спокойный', 'сабырлы'), V('proud', 'гордый', 'мақтанышты'),
    ],
    'questions' => [
        V('How do you feel today?', 'Как вы себя чувствуете сегодня?', 'Бүгін өзіңізді қалай сезінесіз?'),
        V('What makes you feel happy?', 'Что делает вас счастливым?', 'Сізді не бақытты етеді?'),
        V('What do you do when you feel worried?', 'Что вы делаете, когда чувствуете беспокойство?', 'Мазасызданғанда не істейсіз?'),
        V('Can you remember a time you felt very proud?', 'Вы помните момент, когда очень гордились собой?', 'Өзіңізді өте мақтанышты сезінген сәтті есіңізге түсіре аласыз ба?'),
        V('What helps you feel calm when you are stressed?', 'Что помогает вам успокоиться, когда вы в стрессе?', 'Күйзеліс кезінде сабырлы болуға не көмектеседі?'),
        V('Is it easy for you to talk about your feelings?', 'Вам легко говорить о своих чувствах?', 'Сезімдеріңіз туралы айту сізге оңай ма?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Days of the Week', 'background_key' => 'calm',
    'warmup' => V(
        "Let's talk about the days of the week. What do you usually do on each day?",
        'Давайте поговорим о днях недели. Что вы обычно делаете в каждый день?',
        'Апта күндері туралы сөйлесейік. Әр күні әдетте не істейсіз?'
    ),
    'vocab' => [
        V('Monday', 'понедельник', 'дүйсенбі'), V('Tuesday', 'вторник', 'сейсенбі'), V('Wednesday', 'среда', 'сәрсенбі'),
        V('Thursday', 'четверг', 'бейсенбі'), V('Friday', 'пятница', 'жұма'), V('Saturday', 'суббота', 'сенбі'),
        V('Sunday', 'воскресенье', 'жексенбі'), V('today', 'сегодня', 'бүгін'), V('tomorrow', 'завтра', 'ертең'), V('yesterday', 'вчера', 'кеше'),
    ],
    'questions' => [
        V('What day is it today?', 'Какой сегодня день?', 'Бүгін қандай күн?'),
        V('What is your favorite day of the week? Why?', 'Какой ваш любимый день недели? Почему?', 'Аптаның сүйікті күні қайсы? Неге?'),
        V('What did you do yesterday?', 'Что вы делали вчера?', 'Кеше не істедіңіз?'),
        V('What are your plans for tomorrow?', 'Какие у вас планы на завтра?', 'Ертеңге жоспарларыңыз қандай?'),
        V('Which day do you usually feel most tired?', 'В какой день вы обычно чувствуете себя самым уставшим?', 'Қай күні әдетте өзіңізді ең шаршаған сезінесіз?'),
        V('Do you work or study on weekends?', 'Вы работаете или учитесь по выходным?', 'Демалыс күндері жұмыс істейсіз бе немесе оқисыз ба?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Places in Town', 'background_key' => 'night-city',
    'warmup' => V(
        "Let's talk about places in town. Which places do you visit most often?",
        'Давайте поговорим о местах в городе. Какие места вы посещаете чаще всего?',
        'Қаладағы орындар туралы сөйлесейік. Қай жерлерге жиі барасыз?'
    ),
    'vocab' => [
        V('hospital', 'больница', 'аурухана'), V('park', 'парк', 'саябақ'), V('library', 'библиотека', 'кітапхана'),
        V('bank', 'банк', 'банк'), V('store', 'магазин', 'дүкен'), V('mosque', 'мечеть', 'мешіт'),
        V('police station', 'полицейский участок', 'полиция бөлімі'), V('restaurant', 'ресторан', 'мейрамхана'), V('station', 'вокзал', 'вокзал'), V('bus stop', 'автобусная остановка', 'автобус аялдамасы'),
    ],
    'questions' => [
        V('What place in your town do you visit most often?', 'Какое место в вашем городе вы посещаете чаще всего?', 'Қалаңызда қай жерге жиі барасыз?'),
        V('Is there a library near your home? Do you go there?', 'Есть ли библиотека рядом с вашим домом? Вы туда ходите?', 'Үйіңізге жақын кітапхана бар ма? Сол жерге барасыз ба?'),
        V('How far is the nearest bus stop from your house?', 'Как далеко ближайшая автобусная остановка от вашего дома?', 'Үйіңізден ең жақын автобус аялдамасы қаншалықты алыс?'),
        V('Do you prefer eating at a restaurant or at home?', 'Вы предпочитаете есть в ресторане или дома?', 'Мейрамханада тамақтанғанды ұнатасыз ба, әлде үйде ме?'),
        V('When was the last time you went to a park?', 'Когда вы в последний раз ходили в парк?', 'Соңғы рет саябаққа қашан бардыңыз?'),
        V('Do you know where the nearest hospital is?', 'Вы знаете, где находится ближайшая больница?', 'Ең жақын ауруханың қайда екенін білесіз бе?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Basic Actions', 'background_key' => 'energetic',
    'warmup' => V(
        "Let's talk about everyday actions. What actions do you do most during the day?",
        'Давайте поговорим о повседневных действиях. Какие действия вы совершаете чаще всего в течение дня?',
        'Күнделікті әрекеттер туралы сөйлесейік. Күн бойы қандай әрекеттерді ең жиі жасайсыз?'
    ),
    'vocab' => [
        V('run', 'бегать', 'жүгіру'), V('jump', 'прыгать', 'секіру'), V('eat', 'есть', 'жеу'),
        V('drink', 'пить', 'ішу'), V('read', 'читать', 'оқу'), V('write', 'писать', 'жазу'),
        V('listen', 'слушать', 'тыңдау'), V('watch', 'смотреть', 'қарау'), V('play', 'играть', 'ойнау'), V('sit', 'сидеть', 'отыру'),
    ],
    'questions' => [
        V('What do you like to watch on TV or online?', 'Что вы любите смотреть по телевизору или онлайн?', 'Теледидардан немесе онлайн не көргенді ұнатасыз?'),
        V('Do you enjoy reading books? What do you read?', 'Вам нравится читать книги? Что вы читаете?', 'Кітап оқуды ұнатасыз ба? Не оқисыз?'),
        V('How often do you run or exercise?', 'Как часто вы бегаете или тренируетесь?', 'Қаншалықты жиі жүгіресіз немесе жаттығасыз?'),
        V('What music do you like to listen to?', 'Какую музыку вы любите слушать?', 'Қандай музыканы тыңдағанды ұнатасыз?'),
        V('Do you sit for a long time at work or school?', 'Вы долго сидите на работе или в школе?', 'Жұмыста немесе мектепте ұзақ отырасыз ба?'),
        V('What games did you play as a child?', 'В какие игры вы играли в детстве?', 'Балалық шағыңызда қандай ойындар ойнадыңыз?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Toys and Games', 'background_key' => 'playful',
    'warmup' => V(
        "Let's talk about toys and games. What did you play with when you were a child?",
        'Давайте поговорим об игрушках и играх. С чем вы играли в детстве?',
        'Ойыншықтар мен ойындар туралы сөйлесейік. Балалық шағыңызда немен ойнадыңыз?'
    ),
    'vocab' => [
        V('ball', 'мяч', 'доп'), V('doll', 'кукла', 'қуыршақ'), V('puzzle', 'пазл', 'пазл'),
        V('kite', 'воздушный змей', 'жел бумасы'), V('blocks', 'кубики', 'текшелер'), V('swing', 'качели', 'теңселме'),
        V('slide', 'горка', 'сырғанақ'), V('balloon', 'воздушный шар', 'әуе шары'), V('teddy bear', 'плюшевый мишка', 'аюшық'), V('marble', 'шарик (стеклянный)', 'шыны шарик'),
    ],
    'questions' => [
        V('What was your favorite toy as a child?', 'Какая была ваша любимая игрушка в детстве?', 'Балалық шақтағы сүйікті ойыншығыңыз қандай болды?'),
        V('Did you play outside a lot when you were young?', 'Вы много играли на улице в детстве?', 'Жас кезіңізде далада көп ойнадыңыз ба?'),
        V('Do you remember flying a kite? Was it fun?', 'Вы помните, как запускали воздушного змея? Это было весело?', 'Жел бумасын ұшырғаныңыз есіңізде ме? Ол қызық болды ма?'),
        V('Do children today play differently than you did?', 'Дети сегодня играют по-другому, чем вы играли?', 'Қазіргі балалар сіз ойнағаннан басқаша ойнай ма?'),
        V('What game would you like to play again?', 'В какую игру вы хотели бы поиграть снова?', 'Қай ойынды тағы да ойнағыңыз келеді?'),
        V('Do you think playing is important for adults too?', 'Как вы думаете, игра важна и для взрослых тоже?', 'Ойнау ересектер үшін де маңызды деп ойлайсыз ба?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Fruits and Vegetables', 'background_key' => 'nature',
    'warmup' => V(
        "Let's talk about fruits and vegetables. Which ones do you eat most often?",
        'Давайте поговорим о фруктах и овощах. Какие вы едите чаще всего?',
        'Жемістер мен көкөністер туралы сөйлесейік. Қайсысын жиі жейсіз?'
    ),
    'vocab' => [
        V('apple', 'яблоко', 'алма'), V('banana', 'банан', 'банан'), V('orange', 'апельсин', 'апельсин'),
        V('carrot', 'морковь', 'сәбіз'), V('potato', 'картофель', 'картоп'), V('tomato', 'помидор', 'қызанақ'),
        V('onion', 'лук', 'пияз'), V('grape', 'виноград', 'жүзім'), V('watermelon', 'арбуз', 'қарбыз'), V('cucumber', 'огурец', 'қияр'),
    ],
    'questions' => [
        V('What is your favorite fruit?', 'Какой ваш любимый фрукт?', 'Сүйікті жемісіңіз қандай?'),
        V('Do you eat vegetables every day?', 'Вы едите овощи каждый день?', 'Көкөністі күн сайын жейсіз бе?'),
        V('What fruits and vegetables grow in your country?', 'Какие фрукты и овощи растут в вашей стране?', 'Еліңізде қандай жемістер мен көкөністер өседі?'),
        V('Do you prefer sweet fruit or fresh vegetables?', 'Вы предпочитаете сладкие фрукты или свежие овощи?', 'Тәтті жемісті ұнатасыз ба, әлде жаңа піскен көкөністі ме?'),
        V('Do you grow any fruits or vegetables at home?', 'Вы выращиваете какие-нибудь фрукты или овощи дома?', 'Үйде қандай да бір жеміс немесе көкөніс өсіресіз бе?'),
        V('Is it easy to buy fresh fruit where you live?', 'Легко ли купить свежие фрукты там, где вы живёте?', 'Тұратын жеріңізде жаңа піскен жемісті сатып алу оңай ма?'),
    ],
];

$lessons[] = [
    'level' => 'beginner', 'topic' => 'Places for Fun', 'background_key' => 'nature',
    'warmup' => V(
        "Let's talk about fun places to visit. Where do you like to go to relax or have fun?",
        'Давайте поговорим о интересных местах. Куда вы любите ходить, чтобы отдохнуть или повеселиться?',
        'Қызықты орындар туралы сөйлесейік. Демалу немесе көңіл көтеру үшін қайда баруды ұнатасыз?'
    ),
    'vocab' => [
        V('beach', 'пляж', 'жағажай'), V('zoo', 'зоопарк', 'зообақ'), V('mountain', 'гора', 'тау'),
        V('lake', 'озеро', 'көл'), V('forest', 'лес', 'орман'), V('playground', 'детская площадка', 'ойын алаңы'),
        V('picnic', 'пикник', 'пикник'), V('camping', 'кемпинг', 'кемпинг'), V('hiking', 'поход', 'жаяу серуен'), V('festival', 'фестиваль', 'фестиваль'),
    ],
    'questions' => [
        V('What is your favorite place to visit for fun?', 'Какое ваше любимое место для отдыха?', 'Көңіл көтеру үшін сүйікті орныңыз қайсы?'),
        V('Have you ever been to a zoo? What animals did you see?', 'Вы когда-нибудь были в зоопарке? Каких животных видели?', 'Зообақта болдыңыз ба? Қандай жануарларды көрдіңіз?'),
        V('Do you prefer the beach or the mountains?', 'Вы предпочитаете пляж или горы?', 'Жағажайды ұнатасыз ба, әлде тауларды ма?'),
        V('Have you ever gone camping? Did you enjoy it?', 'Вы когда-нибудь ездили в кемпинг? Вам понравилось?', 'Кемпингке бардыңыз ба? Ұнады ма?'),
        V('Do you like having a picnic outside? What do you bring?', 'Вам нравится устраивать пикник на улице? Что вы берёте с собой?', 'Далада пикник жасағанды ұнатасыз ба? Не аласыз?'),
        V('What place would you like to visit that you have never been to?', 'Какое место вы хотели бы посетить, где никогда не были?', 'Ешқашан болмаған қай жерге баруды қалар едіңіз?'),
    ],
];

// ========================= ELEMENTARY (batch 2) =========================

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Neighbors and Community', 'background_key' => 'warm',
    'warmup' => V(
        "Let's talk about your neighborhood. Do you know your neighbors well, and do you help each other?",
        'Давайте поговорим о вашем районе. Хорошо ли вы знаете своих соседей и помогаете ли друг другу?',
        'Ауданыңыз туралы сөйлесейік. Көршілеріңізді жақсы білесіз бе және бір-біріңізге көмектесесіз бе?'
    ),
    'vocab' => [
        V('neighbor', 'сосед', 'көрші'), V('community', 'сообщество', 'қауымдастық'), V('volunteer', 'волонтёр', 'еріктілер'),
        V('borrow', 'одалживать', 'қарызға алу'), V('favor', 'услуга', 'жақсылық'), V('greet', 'приветствовать', 'сәлемдесу'),
        V('gossip', 'сплетни', 'өсек'), V('apartment', 'квартира', 'пәтер'), V('landlord', 'арендодатель', 'үй иесі'), V('tenant', 'арендатор', 'жалдаушы'),
    ],
    'questions' => [
        V('Do you know your neighbors well?', 'Вы хорошо знаете своих соседей?', 'Көршілеріңізді жақсы білесіз бе?'),
        V('Have you ever borrowed something from a neighbor?', 'Вы когда-нибудь одалживали что-то у соседа?', 'Көршіден бір нәрсе қарызға алдыңыз ба?'),
        V('Do you live in an apartment or a house? Which do you prefer?', 'Вы живёте в квартире или в доме? Что вы предпочитаете?', 'Пәтерде тұрасыз ба, әлде үйде ме? Қайсысын қалайсыз?'),
        V('What makes a good community?', 'Что делает сообщество хорошим?', 'Қауымдастықты жақсы ететін не?'),
        V('Do you think people should greet their neighbors every day?', 'Как вы думаете, люди должны приветствовать соседей каждый день?', 'Адамдар көршілерін күн сайын сәлемдесуі керек деп ойлайсыз ба?'),
        V('Have you ever volunteered to help your community?', 'Вы когда-нибудь были волонтёром, чтобы помочь своему сообществу?', 'Қауымдастығыңызға көмектесу үшін еріктілерге қатыстыңыз ба?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Cooking and Recipes', 'background_key' => 'playful',
    'warmup' => V(
        "Let's talk about cooking. Do you enjoy cooking, and what is a recipe you know well?",
        'Давайте поговорим о готовке. Вам нравится готовить, и какой рецепт вы хорошо знаете?',
        'Тамақ пісіру туралы сөйлесейік. Тамақ жасауды ұнатасыз ба және қандай рецептті жақсы білесіз?'
    ),
    'vocab' => [
        V('recipe', 'рецепт', 'рецепт'), V('ingredient', 'ингредиент', 'құрам бөлігі'), V('boil', 'варить', 'қайнату'),
        V('fry', 'жарить', 'қуыру'), V('bake', 'печь', 'пісіру (пеште)'), V('slice', 'нарезать', 'тіліктеу'),
        V('mix', 'смешивать', 'араластыру'), V('oven', 'духовка', 'пеш'), V('taste', 'пробовать на вкус', 'дәмін тату'), V('portion', 'порция', 'үлес'),
    ],
    'questions' => [
        V('What is one dish you know how to cook well?', 'Какое блюдо вы умеете хорошо готовить?', 'Қандай тағамды жақсы пісіре аласыз?'),
        V('Do you follow recipes exactly, or change them?', 'Вы точно следуете рецептам или изменяете их?', 'Рецептерді дәл орындайсыз ба, әлде өзгертесіз бе?'),
        V('Who taught you how to cook?', 'Кто научил вас готовить?', 'Сізге тамақ пісіруді кім үйретті?'),
        V('Do you prefer baking or frying food?', 'Вы предпочитаете печь или жарить еду?', 'Тамақты пісіргенді ұнатасыз ба, әлде қуырғанды ма?'),
        V('What is the hardest dish you have ever tried to cook?', 'Какое самое сложное блюдо вы когда-либо пытались приготовить?', 'Пісіруге тырысқан ең қиын тағамыңыз қандай болды?'),
        V('Do you enjoy trying recipes from other countries?', 'Вам нравится пробовать рецепты из других стран?', 'Басқа елдердің рецептерін байқап көргенді ұнатасыз ба?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'At the Bank', 'background_key' => 'professional',
    'warmup' => V(
        "Let's talk about banking. How do you manage your money at the bank?",
        'Давайте поговорим о банках. Как вы управляете своими деньгами в банке?',
        'Банк туралы сөйлесейік. Ақшаңызды банкте қалай басқарасыз?'
    ),
    'vocab' => [
        V('account', 'счёт', 'шот'), V('deposit', 'вносить деньги', 'салым салу'), V('withdraw', 'снимать деньги', 'ақша алу'),
        V('balance', 'баланс', 'баланс'), V('ATM', 'банкомат', 'банкомат'), V('transfer', 'перевод', 'аудару'),
        V('currency', 'валюта', 'валюта'), V('savings', 'сбережения', 'жинақ'), V('loan', 'кредит', 'несие'), V('interest', 'процент', 'пайыз'),
    ],
    'questions' => [
        V('Do you check your bank balance often?', 'Вы часто проверяете баланс банковского счёта?', 'Банк балансыңызды жиі тексересіз бе?'),
        V('Do you prefer using an ATM or going inside the bank?', 'Вы предпочитаете пользоваться банкоматом или заходить в банк?', 'Банкоматты пайдаланғанды ұнатасыз ба, әлде банкке кіргенді ме?'),
        V('Do you try to save money every month?', 'Вы стараетесь откладывать деньги каждый месяц?', 'Әр ай сайын ақша жинауға тырысасыз ба?'),
        V('Have you ever taken out a loan? What was it for?', 'Вы когда-нибудь брали кредит? На что?', 'Несие алдыңыз ба? Не үшін?'),
        V('Do you use a bank app on your phone?', 'Вы пользуетесь банковским приложением на телефоне?', 'Телефонда банк қолданбасын пайдаланасыз ба?'),
        V('What do you think is the best way to save money?', 'Как вы думаете, какой лучший способ копить деньги?', 'Сіздің ойыңызша, ақша жинаудың ең жақсы жолы қандай?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Pets and Pet Care', 'background_key' => 'warm',
    'warmup' => V(
        "Let's talk about pets. Do you have a pet, and how do you take care of it?",
        'Давайте поговорим о домашних животных. У вас есть питомец, и как вы за ним ухаживаете?',
        'Үй жануарлары туралы сөйлесейік. Сізде үй жануары бар ма және оған қалай қамқорлық жасайсыз?'
    ),
    'vocab' => [
        V('leash', 'поводок', 'бау'), V('vet', 'ветеринар', 'ветеринар'), V('feed', 'кормить', 'тамақтандыру'),
        V('groom', 'ухаживать (за шерстью)', 'күтім жасау'), V('kennel', 'вольер', 'ит үйі'), V('vaccinate', 'делать прививку', 'вакцина салу'),
        V('adopt', 'брать питомца из приюта', 'асырап алу'), V('breed', 'порода', 'тұқым'), V('cage', 'клетка', 'тор'), V('aquarium', 'аквариум', 'аквариум'),
    ],
    'questions' => [
        V('Do you have a pet? What kind?', 'У вас есть питомец? Какой?', 'Сізде үй жануары бар ма? Қандай?'),
        V('How often do you take your pet to the vet?', 'Как часто вы водите своего питомца к ветеринару?', 'Үй жануарыңызды қаншалықты жиі ветеринарға апарасыз?'),
        V('Would you rather adopt a pet or buy one from a breeder?', 'Вы бы предпочли взять питомца из приюта или купить у заводчика?', 'Үй жануарын асырап алғанды қалайсыз ба, әлде тұқымнан сатып алғанды ма?'),
        V('What responsibilities come with having a pet?', 'Какие обязанности связаны с содержанием питомца?', 'Үй жануарын ұстаудың қандай жауапкершіліктері бар?'),
        V('Do you think animals should live in cages?', 'Как вы думаете, животные должны жить в клетках?', 'Жануарлар торда өмір сүруі керек деп ойлайсыз ба?'),
        V('What pet would you like to have if you could have any?', 'Какого питомца вы хотели бы завести, если бы могли выбрать любого?', 'Кез келгенін таңдай алсаңыз, қандай үй жануарын ұстар едіңіз?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Celebrations Around the World', 'background_key' => 'warm',
    'warmup' => V(
        "Let's talk about celebrations. What kind of celebrations do you enjoy, and how do people celebrate them?",
        'Давайте поговорим о праздниках. Какие праздники вам нравятся и как люди их отмечают?',
        'Мерекелер туралы сөйлесейік. Сізге қандай мерекелер ұнайды және адамдар оларды қалай тойлайды?'
    ),
    'vocab' => [
        V('parade', 'парад', 'парад'), V('fireworks', 'фейерверк', 'от шашу'), V('costume', 'костюм', 'костюм'),
        V('anniversary', 'годовщина', 'мерейтой'), V('invitation', 'приглашение', 'шақыру'), V('decorate', 'украшать', 'безендіру'),
        V('candle', 'свеча', 'шам'), V('toast', 'тост', 'тост'), V('ceremony', 'церемония', 'салтанат'), V('guest', 'гость', 'қонақ'),
    ],
    'questions' => [
        V('What celebration do you enjoy the most?', 'Какой праздник вам нравится больше всего?', 'Қай мерекені ең көп ұнатасыз?'),
        V('Have you ever watched fireworks? Where?', 'Вы когда-нибудь смотрели фейерверк? Где?', 'От шашуды көрдіңіз бе? Қайда?'),
        V('Do you like decorating your home for celebrations?', 'Вам нравится украшать дом к праздникам?', 'Мерекелерге үйіңізді безендіргенді ұнатасыз ба?'),
        V('Do you prefer small celebrations or big parties with many guests?', 'Вы предпочитаете небольшие праздники или большие вечеринки с множеством гостей?', 'Кішкентай мерекелерді ұнатасыз ба, әлде көп қонақты үлкен кештерді ме?'),
        V('What is a celebration from another culture that you find interesting?', 'Какой праздник другой культуры вам кажется интересным?', 'Басқа мәдениеттің қызықты көрінетін мерекесі бар ма?'),
        V('Have you ever worn a costume for a celebration?', 'Вы когда-нибудь надевали костюм на праздник?', 'Мерекеге костюм кигеніңіз бар ма?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Household Chores', 'background_key' => 'calm',
    'warmup' => V(
        "Let's talk about housework. What chores do you do at home, and how often?",
        'Давайте поговорим о домашних делах. Какие дела вы делаете дома и как часто?',
        'Үй жұмыстары туралы сөйлесейік. Үйде қандай жұмыстар істейсіз және қаншалықты жиі?'
    ),
    'vocab' => [
        V('sweep', 'подметать', 'сыпыру'), V('vacuum', 'пылесосить', 'шаңсорғышпен тазалау'), V('laundry', 'стирка', 'кір жуу'),
        V('dishwasher', 'посудомоечная машина', 'ыдыс жуғыш машина'), V('iron', 'гладить', 'үтіктеу'), V('mop', 'мыть пол шваброй', 'едені жуу'),
        V('dust', 'вытирать пыль', 'шаң сүрту'), V('trash', 'мусор', 'қоқыс'), V('tidy', 'убирать', 'жинастыру'), V('chores', 'домашние дела', 'үй жұмыстары'),
    ],
    'questions' => [
        V('What chores do you do most often at home?', 'Какие домашние дела вы делаете чаще всего?', 'Үйде қандай жұмысты жиі істейсіз?'),
        V('Do you enjoy cleaning, or do you find it boring?', 'Вам нравится убираться, или вам это скучно?', 'Тазалауды ұнатасыз ба, әлде жалықтырады ма?'),
        V('Who does most of the housework in your home?', 'Кто делает большую часть домашних дел у вас дома?', 'Үйіңізде үй жұмыстарының көбін кім істейді?'),
        V('Do you have a cleaning schedule, or do you clean when needed?', 'У вас есть график уборки, или вы убираетесь по необходимости?', 'Тазалау кестеңіз бар ма, әлде қажет болғанда тазалайсыз ба?'),
        V('What household task do you dislike the most?', 'Какое домашнее дело вам не нравится больше всего?', 'Қай үй жұмысын ең көп ұнатпайсыз?'),
        V('Do you think children should help with chores? From what age?', 'Как вы думаете, дети должны помогать с домашними делами? С какого возраста?', 'Балалар үй жұмысына көмектесуі керек деп ойлайсыз ба? Қай жастан бастап?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'At the Airport and Hotel', 'background_key' => 'energetic',
    'warmup' => V(
        "Let's talk about airports and hotels. What is your experience checking in and staying somewhere new?",
        'Давайте поговорим об аэропортах и отелях. Каков ваш опыт регистрации и проживания в новом месте?',
        'Әуежайлар мен қонақүйлер туралы сөйлесейік. Тіркелу мен жаңа жерде тұрудың тәжірибеңіз қандай?'
    ),
    'vocab' => [
        V('check-in', 'регистрация', 'тіркелу'), V('boarding pass', 'посадочный талон', 'отырғызу талоны'), V('customs', 'таможня', 'кеден'),
        V('lobby', 'вестибюль', 'вестибюль'), V('reception', 'ресепшн', 'қабылдау бөлмесі'), V('room service', 'обслуживание номеров', 'нөмірге қызмет көрсету'),
        V('elevator', 'лифт', 'лифт'), V('balcony', 'балкон', 'балкон'), V('checkout', 'выезд из отеля', 'қонақүйден шығу'), V('concierge', 'консьерж', 'консьерж'),
    ],
    'questions' => [
        V('Have you ever stayed at a hotel? What was it like?', 'Вы когда-нибудь останавливались в отеле? Каково это было?', 'Қонақүйде тұрдыңыз ба? Ол қалай болды?'),
        V('Do you prefer a hotel room with a balcony or a view?', 'Вы предпочитаете номер с балконом или с видом?', 'Балконы бар нөмірді ұнатасыз ба, әлде керемет көрінісі бар ма?'),
        V('Have you ever gone through customs at an airport? Was it easy?', 'Вы когда-нибудь проходили таможню в аэропорту? Это было легко?', 'Әуежайда кеденнен өттіңіз бе? Ол оңай болды ма?'),
        V('Do you check in for flights online or at the airport?', 'Вы регистрируетесь на рейс онлайн или в аэропорту?', 'Рейске онлайн тіркелесіз бе, әлде әуежайда ма?'),
        V('What do you look for when choosing a hotel?', 'Что вы ищете при выборе отеля?', 'Қонақүй таңдағанда неге назар аударасыз?'),
        V('Have you ever used room service? What did you order?', 'Вы когда-нибудь пользовались обслуживанием номеров? Что вы заказали?', 'Нөмірге қызмет көрсетуді пайдаландыңыз ба? Не тапсырыс бердіңіз?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Music and Instruments', 'background_key' => 'playful',
    'warmup' => V(
        "Let's talk about music. Do you play an instrument, and what music do you enjoy?",
        'Давайте поговорим о музыке. Вы играете на инструменте, и какую музыку вы любите?',
        'Музыка туралы сөйлесейік. Сіз аспапта ойнайсыз ба және қандай музыканы ұнатасыз?'
    ),
    'vocab' => [
        V('guitar', 'гитара', 'гитара'), V('piano', 'пианино', 'пианино'), V('drum', 'барабан', 'барабан'),
        V('violin', 'скрипка', 'скрипка'), V('melody', 'мелодия', 'әуен'), V('rhythm', 'ритм', 'ырғақ'),
        V('band', 'группа', 'топ (музыкалық)'), V('lyrics', 'текст песни', 'ән мәтіні'), V('audition', 'прослушивание', 'сынақ'), V('orchestra', 'оркестр', 'оркестр'),
    ],
    'questions' => [
        V('Do you play a musical instrument? Which one?', 'Вы играете на музыкальном инструменте? На каком?', 'Музыкалық аспапта ойнайсыз ба? Қайсысында?'),
        V('What kind of music do you listen to the most?', 'Какую музыку вы слушаете больше всего?', 'Қандай музыканы ең көп тыңдайсыз?'),
        V('Have you ever been to a live concert? How was it?', 'Вы когда-нибудь были на живом концерте? Как это было?', 'Тірі концертте болдыңыз ба? Ол қалай болды?'),
        V('Do you remember the lyrics of your favorite song?', 'Вы помните слова вашей любимой песни?', 'Сүйікті әніңіздің мәтінін есіңізде сақтайсыз ба?'),
        V('Would you like to learn to play an instrument? Which one?', 'Хотели бы вы научиться играть на инструменте? На каком?', 'Аспапта ойнауды үйренгіңіз келе ме? Қайсысында?'),
        V('Do you think music can change how a person feels?', 'Как вы думаете, музыка может изменить настроение человека?', 'Музыка адамның көңіл-күйін өзгерте алады деп ойлайсыз ба?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Emergency Situations', 'background_key' => 'minimal-dark',
    'warmup' => V(
        "Let's talk about emergencies. Do you know what to do if there is an emergency?",
        'Давайте поговорим о чрезвычайных ситуациях. Вы знаете, что делать в случае чрезвычайной ситуации?',
        'Төтенше жағдайлар туралы сөйлесейік. Төтенше жағдай болса не істеу керектігін білесіз бе?'
    ),
    'vocab' => [
        V('ambulance', 'скорая помощь', 'жедел жәрдем'), V('fire truck', 'пожарная машина', 'өрт сөндіру көлігі'), V('emergency', 'чрезвычайная ситуация', 'төтенше жағдай'),
        V('rescue', 'спасение', 'құтқару'), V('danger', 'опасность', 'қауіп'), V('evacuate', 'эвакуировать', 'эвакуациялау'),
        V('first aid', 'первая помощь', 'алғашқы көмек'), V('alarm', 'сигнализация', 'дабыл'), V('accident', 'авария', 'апат'), V('helpline', 'горячая линия', 'сенім телефоны'),
    ],
    'questions' => [
        V('Do you know the emergency phone number in your country?', 'Вы знаете номер экстренной службы в вашей стране?', 'Еліңіздегі төтенше жағдай телефон нөмірін білесіз бе?'),
        V('Have you ever seen an ambulance or fire truck respond to an emergency?', 'Вы когда-нибудь видели, как скорая или пожарная машина реагируют на чрезвычайную ситуацию?', 'Жедел жәрдем немесе өрт сөндіру көлігінің төтенше жағдайға жауап бергенін көрдіңіз бе?'),
        V('Do you know basic first aid?', 'Вы знаете основы первой помощи?', 'Алғашқы көмектің негіздерін білесіз бе?'),
        V('What should people do if there is a fire at home?', 'Что должны делать люди, если дома пожар?', 'Үйде өрт шықса, адамдар не істеуі керек?'),
        V('Have you ever been in a situation that felt dangerous?', 'Вы когда-нибудь были в ситуации, которая казалась опасной?', 'Қауіпті сезілген жағдайда болдыңыз ба?'),
        V('Do you think schools should teach emergency skills?', 'Как вы думаете, школы должны обучать навыкам действий в чрезвычайных ситуациях?', 'Мектептер төтенше жағдай дағдыларын үйретуі керек деп ойлайсыз ба?'),
    ],
];

$lessons[] = [
    'level' => 'elementary', 'topic' => 'Farm and Countryside', 'background_key' => 'nature',
    'warmup' => V(
        "Let's talk about farms and the countryside. Have you ever visited a farm or lived in the countryside?",
        'Давайте поговорим о фермах и сельской местности. Вы когда-нибудь посещали ферму или жили в сельской местности?',
        'Фермалар мен ауыл жайлы сөйлесейік. Фермаға бардыңыз ба немесе ауылда тұрдыңыз ба?'
    ),
    'vocab' => [
        V('farmer', 'фермер', 'фермер'), V('harvest', 'урожай', 'егін жинау'), V('tractor', 'трактор', 'трактор'),
        V('barn', 'амбар', 'қора'), V('crop', 'урожай (культура)', 'дақыл'), V('livestock', 'домашний скот', 'мал'),
        V('orchard', 'фруктовый сад', 'жеміс бағы'), V('irrigation', 'орошение', 'суару'), V('pasture', 'пастбище', 'жайылым'), V('plow', 'плуг', 'соқа'),
    ],
    'questions' => [
        V('Have you ever visited a farm? What did you see?', 'Вы когда-нибудь посещали ферму? Что вы видели?', 'Фермаға бардыңыз ба? Не көрдіңіз?'),
        V('Would you prefer to live in the countryside or in a city?', 'Вы бы предпочли жить в сельской местности или в городе?', 'Ауылда тұрғанды қалайсыз ба, әлде қалада ма?'),
        V('Do you know how food gets from a farm to your table?', 'Вы знаете, как еда попадает с фермы на ваш стол?', 'Тамақтың фермадан үстеліңізге қалай жететінін білесіз бе?'),
        V('What animals do you think are kept on a farm?', 'Каких животных, по-вашему, держат на ферме?', 'Фермада қандай жануарлар ұсталады деп ойлайсыз?'),
        V('Do you think farming is hard work? Why?', 'Как вы думаете, фермерство — тяжёлая работа? Почему?', 'Фермерлік ауыр жұмыс деп ойлайсыз ба? Неге?'),
        V('What fruits or vegetables would you like to grow yourself?', 'Какие фрукты или овощи вы хотели бы вырастить сами?', 'Қандай жеміс немесе көкөністі өзіңіз өсіргіңіз келеді?'),
    ],
];

require __DIR__ . '/seed_lessons_batch2_part2.php';

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
