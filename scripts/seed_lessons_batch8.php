<?php
declare(strict_types=1);
$configPath = '/home/u856637812/config/speaking_club_config.php';
$cfg = require $configPath;
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$username = $argv[1] ?? null;
if (!$username) { fwrite(STDERR, "Usage: php seed_lessons_batch8.php <teacher_username>\n"); exit(1); }
$stmt = $pdo->prepare('SELECT id FROM teachers WHERE username = ?');
$stmt->execute([$username]);
$teacher = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$teacher) { fwrite(STDERR, "Teacher not found: $username\n"); exit(1); }
$teacherId = (int)$teacher['id'];
function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }
$lessons = [];

// ========================= BEGINNER (batch 8) — 15 questions per topic =========================

$lessons[] = ['level' => 'beginner', 'topic' => 'Talking About Numbers in Daily Life', 'background_key' => 'calm',
    'warmup' => V("Let's talk about numbers. How often do you use numbers in your daily life?", 'Давайте поговорим о числах. Как часто вы используете числа в повседневной жизни?', 'Сандар туралы сөйлесейік. Күнделікті өмірде сандарды қаншалықты жиі пайдаланасыз?'),
    'vocab' => [V('phone number', 'номер телефона', 'телефон нөмірі'), V('address', 'адрес', 'мекенжай'), V('price', 'цена', 'баға'), V('age', 'возраст', 'жас'), V('date', 'дата', 'күн'), V('count', 'считать', 'санау'), V('amount', 'количество', 'мөлшер'), V('percentage', 'процент', 'пайыз'), V('measurement', 'измерение', 'өлшем'), V('total', 'итог', 'жиынтық')],
    'questions' => [
        V('How often do you use numbers in a normal day?', 'Как часто вы используете числа в обычный день?', 'Кәдімгі күнде сандарды қаншалықты жиі пайдаланасыз?'),
        V('Do you remember phone numbers easily?', 'Вы легко запоминаете номера телефонов?', 'Телефон нөмірлерін оңай есте сақтайсыз ба?'),
        V('Do you check prices carefully when shopping?', 'Вы внимательно проверяете цены при покупках?', 'Сауда жасағанда бағаны мұқият тексересіз бе?'),
        V('Is math easy or difficult for you?', 'Математика лёгкая или трудная для вас?', 'Математика сіз үшін оңай ма, әлде қиын ба?'),
        V('Do you calculate things in your head, or use a calculator?', 'Вы считаете в уме, или пользуетесь калькулятором?', 'Есепті ойша шығарасыз ба, әлде калькуляторды пайдаланасыз ба?'),
        V('Do you know your own address by heart?', 'Вы знаете свой адрес наизусть?', 'Мекенжайыңызды жатқа білесіз бе?'),
        V('Do you count calories or steps during the day?', 'Вы считаете калории или шаги в течение дня?', 'Күн бойы калорияны немесе қадамдарды санайсыз ба?'),
        V('Do you round numbers up or down when estimating?', 'Вы округляете числа вверх или вниз при оценке?', 'Бағалау кезінде сандарды жоғары дөңгелетесіз бе, әлде төмен ме?'),
        V('Do percentages confuse you sometimes?', 'Проценты вас иногда путают?', 'Пайыздар кейде сізді шатастыра ма?'),
        V('Do you like working with numbers, or prefer words?', 'Вам нравится работать с числами, или вы предпочитаете слова?', 'Сандармен жұмыс істегенді ұнатасыз ба, әлде сөздерді ме?'),
        V('How many important dates do you need to remember?', 'Сколько важных дат вам нужно помнить?', 'Есіңізде сақтауыңыз керек қанша маңызды күн бар?'),
        V('Do you enjoy solving number puzzles?', 'Вам нравится решать числовые головоломки?', 'Сандық басқатырғыштарды шешуді ұнатасыз ба?'),
        V('Do you check the total before paying at a store?', 'Вы проверяете итог перед оплатой в магазине?', 'Дүкенде төлемес бұрын жиынтықты тексересіз бе?'),
        V('Have you ever made a mistake with numbers that caused a problem?', 'Вы когда-нибудь допускали ошибку с числами, которая вызвала проблему?', 'Мәселе тудырған сандық қате жіберген кезіңіз болды ма?'),
        V('Do you think numbers are important to understand well in life?', 'Как вы думаете, важно ли хорошо разбираться в числах в жизни?', 'Өмірде сандарды жақсы түсіну маңызды деп ойлайсыз ба?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'My Favorite Time of Day', 'background_key' => 'calm',
    'warmup' => V("Let's talk about times of day. What is your favorite time of day, and why?", 'Давайте поговорим о времени суток. Какое ваше любимое время суток и почему?', 'Тәулік уақыттары туралы сөйлесейік. Сүйікті тәулік уақытыңыз қайсы және неге?'),
    'vocab' => [V('morning', 'утро', 'таң'), V('afternoon', 'день', 'түс'), V('evening', 'вечер', 'кеш'), V('night', 'ночь', 'түн'), V('sunrise', 'восход', 'күн шығу'), V('sunset', 'закат', 'күн бату'), V('peaceful', 'спокойный', 'тыныш'), V('busy', 'занятой', 'қарбалас'), V('energetic', 'энергичный', 'қуатты'), V('sleepy', 'сонный', 'ұйқылы')],
    'questions' => [
        V('What is your favorite time of day?', 'Какое ваше любимое время суток?', 'Сүйікті тәулік уақытыңыз қайсы?'),
        V('Do you feel most energetic in the morning or evening?', 'Вы чувствуете себя наиболее энергичным утром или вечером?', 'Таңертең қуаттырақ сезінесіз бе, әлде кешке ме?'),
        V('Do you enjoy watching the sunrise or sunset more?', 'Вам больше нравится наблюдать восход или закат?', 'Күн шығуын көргенді ұнатасыз ба, әлде батуын ба?'),
        V('Is early morning peaceful for you?', 'Раннее утро для вас спокойное?', 'Ерте таң сіз үшін тыныш па?'),
        V('Do you get sleepy in the afternoon?', 'Вы чувствуете сонливость днём?', 'Түсте ұйқылы сезінесіз бе?'),
        V('What do you usually do in the evening?', 'Что вы обычно делаете вечером?', 'Кеште әдетте не істейсіз?'),
        V('Is night your favorite time to relax?', 'Ночь — ваше любимое время для отдыха?', 'Түн демалуға сүйікті уақытыңыз ба?'),
        V('Do you prefer quiet mornings or lively evenings?', 'Вы предпочитаете тихие утра или оживлённые вечера?', 'Тыныш таңдарды ұнатасыз ба, әлде қарбалас кештерді ме?'),
        V('What time of day do you feel most productive?', 'В какое время суток вы чувствуете себя наиболее продуктивным?', 'Тәулік уақытының қайсысында өзіңізді ең өнімді сезінесіз?'),
        V('Do you wake up early or sleep in most days?', 'Вы просыпаетесь рано или спите подольше в большинство дней?', 'Көп күндері ерте оясыз ба, әлде ұзақ ұйықтайсыз ба?'),
        V('Does your mood change depending on the time of day?', 'Ваше настроение меняется в зависимости от времени суток?', 'Көңіл-күйіңіз тәулік уақытына байланысты өзгере ме?'),
        V('Do you like being outside during a certain time of day?', 'Вам нравится быть на улице в определённое время суток?', 'Тәулік уақытының белгілі бір кезінде далада болғанды ұнатасыз ба?'),
        V('What time of day do you spend with family the most?', 'В какое время суток вы больше всего проводите время с семьёй?', 'Тәулік уақытының қайсысында отбасыңызбен көбірек уақыт өткізесіз?'),
        V('Would you rather have more morning hours or evening hours?', 'Вы бы предпочли больше утренних часов или вечерних?', 'Көбірек таңғы сағаттарды қалайсыз ба, әлде кешкіні ме?'),
        V('Has your favorite time of day changed as you got older?', 'Ваше любимое время суток менялось с возрастом?', 'Сүйікті тәулік уақытыңыз жасыңыз үлкейген сайын өзгерді ме?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Simple Household Items', 'background_key' => 'calm',
    'warmup' => V("Let's talk about items in your house. What household item do you use the most?", 'Давайте поговорим о предметах в вашем доме. Каким предметом домашнего обихода вы пользуетесь чаще всего?', 'Үйіңіздегі заттар туралы сөйлесейік. Қандай үй бұйымын ең жиі пайдаланасыз?'),
    'vocab' => [V('key', 'ключ', 'кілт'), V('lamp', 'лампа', 'шам'), V('remote control', 'пульт', 'пульт'), V('clock', 'часы', 'сағат'), V('mirror', 'зеркало', 'айна'), V('trash can', 'мусорное ведро', 'қоқыс шелегі'), V('broom', 'веник', 'сыпырғы'), V('candle', 'свеча', 'шам (парафин)'), V('towel', 'полотенце', 'сүлгі'), V('umbrella', 'зонт', 'қолшатыр')],
    'questions' => [
        V('What household item do you use the most?', 'Каким предметом домашнего обихода вы пользуетесь чаще всего?', 'Қандай үй бұйымын ең жиі пайдаланасыз?'),
        V('Have you ever lost your keys?', 'Вы когда-нибудь теряли ключи?', 'Кілттеріңізді жоғалттыңыз ба?'),
        V('Do you always know where the remote control is?', 'Вы всегда знаете, где находится пульт?', 'Пульттің қайда екенін әрдайым білесіз бе?'),
        V('Do you check the clock often during the day?', 'Вы часто смотрите на часы в течение дня?', 'Күн бойы сағатты жиі қарайсыз ба?'),
        V('Do you keep an umbrella near your door?', 'Вы держите зонт возле двери?', 'Есіктің жанында қолшатыр сақтайсыз ба?'),
        V('Do you use candles at home sometimes?', 'Вы иногда используете свечи дома?', 'Үйде кейде шам пайдаланасыз ба?'),
        V('Do you sweep with a broom, or use a vacuum?', 'Вы подметаете веником, или используете пылесос?', 'Сыпырғымен сыпырасыз ба, әлде шаңсорғышты пайдаланасыз ба?'),
        V('Do you look in the mirror often?', 'Вы часто смотритесь в зеркало?', 'Айнаға жиі қарайсыз ба?'),
        V('Do you have enough towels at home?', 'У вас дома достаточно полотенец?', 'Үйде жеткілікті сүлгіңіз бар ма?'),
        V('What item would you be upset to lose?', 'Какой предмет вы бы расстроились потерять?', 'Қай затты жоғалтуға ренжір едіңіз?'),
        V('Do you organize small household items in a specific place?', 'Вы храните мелкие домашние вещи в определённом месте?', 'Кішкентай үй заттарын белгілі бір жерде сақтайсыз ба?'),
        V('Do you have a favorite lamp in your home?', 'У вас дома есть любимая лампа?', 'Үйде сүйікті шамыңыз бар ма?'),
        V('How often do you empty the trash can?', 'Как часто вы выносите мусор?', 'Қоқыс шелегін қаншалықты жиі босатасыз?'),
        V('What household item do you think is most useful?', 'Какой предмет домашнего обихода, по-вашему, самый полезный?', 'Сіздің ойыңызша, ең пайдалы үй бұйымы қайсы?'),
        V('Do you often forget where you put small household items?', 'Вы часто забываете, куда положили мелкие домашние вещи?', 'Кішкентай үй заттарын қайда қойғаныңызды жиі ұмытасыз ба?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Talking About Strengths and Weaknesses', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about strengths and weaknesses. What is something you are good at?", 'Давайте поговорим о сильных и слабых сторонах. В чём вы хороши?', 'Күшті және әлсіз жақтар туралы сөйлесейік. Сіз неде жақсысыз?'),
    'vocab' => [V('strength', 'сильная сторона', 'күшті жағы'), V('weakness', 'слабая сторона', 'әлсіз жағы'), V('good at', 'хорош в', 'жақсы'), V('improve', 'улучшать', 'жақсарту'), V('talent', 'талант', 'талант'), V('patient', 'терпеливый', 'шыдамды'), V('organized', 'организованный', 'ретті'), V('creative', 'творческий', 'шығармашыл'), V('shy', 'застенчивый', 'ұялшақ'), V('confident', 'уверенный', 'сенімді')],
    'questions' => [
        V('What is something you are good at?', 'В чём вы хороши?', 'Сіз неде жақсысыз?'),
        V('What is a weakness you would like to improve?', 'Какая слабость, которую вы хотели бы улучшить?', 'Жақсартқыңыз келетін әлсіз жағыңыз қандай?'),
        V('Are you a patient person?', 'Вы терпеливый человек?', 'Сіз шыдамды адамсыз ба?'),
        V('Do you consider yourself organized or messy?', 'Вы считаете себя организованным или неряшливым?', 'Өзіңізді ретті деп санайсыз ба, әлде ретсіз бе?'),
        V('Are you a creative person?', 'Вы творческий человек?', 'Сіз шығармашыл адамсыз ба?'),
        V('Are you shy or confident when meeting new people?', 'Вы застенчивы или уверены в себе, знакомясь с новыми людьми?', 'Жаңа адамдармен танысқанда ұялшақсыз ба, әлде сенімдісіз бе?'),
        V('What talent do you wish you had?', 'Какой талант вы хотели бы иметь?', 'Қандай талантыңыз болуын қалайсыз?'),
        V('Do you know your own strengths well?', 'Вы хорошо знаете свои сильные стороны?', 'Өзіңіздің күшті жақтарыңызды жақсы білесіз бе?'),
        V('Is it easy or hard for you to talk about your weaknesses?', 'Вам легко или трудно говорить о своих слабостях?', 'Әлсіз жақтарыңыз туралы айту сізге оңай ма, әлде қиын ба?'),
        V('Do you work on improving your weaknesses?', 'Вы работаете над улучшением своих слабых сторон?', 'Әлсіз жақтарыңызды жақсартуға жұмыс істейсіз бе?'),
        V('What strength do people notice about you first?', 'Какую сильную сторону люди замечают у вас в первую очередь?', 'Адамдар сізде бірінші не байқайды?'),
        V('Do you think everyone has a hidden talent?', 'Как вы думаете, у каждого есть скрытый талант?', 'Әркімде жасырын талант бар деп ойлайсыз ба?'),
        V('Are you more confident now than you used to be?', 'Вы более уверены в себе сейчас, чем раньше?', 'Қазір бұрынғыдан гөрі сенімдірексіз бе?'),
        V('Do your strengths help you in your job or studies?', 'Ваши сильные стороны помогают вам в работе или учёбе?', 'Күшті жақтарыңыз жұмысыңызда немесе оқуыңызда көмектесе ме?'),
        V('What is one weakness that has actually helped you in life?', 'Какая слабость на самом деле помогла вам в жизни?', 'Өмірде шынымен көмектескен әлсіз жағыңыз қандай?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'My Neighborhood Shops', 'background_key' => 'playful',
    'warmup' => V("Let's talk about local shops. What shops are near your home?", 'Давайте поговорим о местных магазинах. Какие магазины находятся рядом с вашим домом?', 'Жергілікті дүкендер туралы сөйлесейік. Үйіңіздің жанында қандай дүкендер бар?'),
    'vocab' => [V('grocery store', 'продуктовый магазин', 'азық-түлік дүкені'), V('bakery', 'пекарня', 'нан дүкені'), V('butcher', 'мясная лавка', 'ет дүкені'), V('convenience store', 'магазин у дома', 'үй жанындағы дүкен'), V('cashier', 'кассир', 'кассир'), V('aisle', 'проход (в магазине)', 'қатар'), V('open late', 'открыт допоздна', 'кешке дейін ашық'), V('closed', 'закрыто', 'жабық'), V('local owner', 'местный владелец', 'жергілікті иесі'), V('regular customer', 'постоянный клиент', 'тұрақты клиент')],
    'questions' => [
        V('What shops are near your home?', 'Какие магазины находятся рядом с вашим домом?', 'Үйіңіздің жанында қандай дүкендер бар?'),
        V('Do you go to a grocery store often?', 'Вы часто ходите в продуктовый магазин?', 'Азық-түлік дүкеніне жиі барасыз ба?'),
        V('Is there a bakery you like near your home?', 'Есть ли рядом с вашим домом пекарня, которая вам нравится?', 'Үйіңіздің жанында ұнататын нан дүкеніңіз бар ма?'),
        V('Do you know the cashiers at your local shop by name?', 'Вы знаете кассиров в местном магазине по имени?', 'Жергілікті дүкендегі кассирлерді атымен білесіз бе?'),
        V('Is there a convenience store open late near you?', 'Есть ли рядом с вами магазин, открытый допоздна?', 'Жаныңызда кешке дейін ашық дүкен бар ма?'),
        V('Do you prefer small local shops or big supermarkets?', 'Вы предпочитаете маленькие местные магазины или большие супермаркеты?', 'Кішкентай жергілікті дүкендерді ұнатасыз ба, әлде үлкен супермаркеттерді ме?'),
        V('Are you a regular customer at any local shop?', 'Вы постоянный клиент в каком-либо местном магазине?', 'Қандай да бір жергілікті дүкенде тұрақты клиентсіз бе?'),
        V('Have you ever found a shop closed when you needed something?', 'Вы когда-нибудь заставали магазин закрытым, когда вам что-то было нужно?', 'Бір нәрсе керек болғанда дүкеннің жабық екенін көрдіңіз бе?'),
        V('Do you know the owner of any local shop?', 'Вы знаете владельца какого-либо местного магазина?', 'Қандай да бір жергілікті дүкеннің иесін білесіз бе?'),
        V('Do you like walking through the aisles, or shop quickly?', 'Вам нравится гулять по проходам, или вы делаете покупки быстро?', 'Қатарлар бойымен серуендегенді ұнатасыз ба, әлде тез сатып аласыз ба?'),
        V('Is there a shop in your neighborhood that has closed down?', 'Есть ли магазин в вашем районе, который закрылся?', 'Ауданыңызда жабылып қалған дүкен бар ма?'),
        V('Would you support a small local shop over a chain store?', 'Вы бы поддержали маленький местный магазин вместо сетевого?', 'Желілік дүкеннің орнына кішкентай жергілікті дүкенді қолдар ма едіңіз?'),
        V('Do you enjoy chatting with shopkeepers?', 'Вам нравится общаться с продавцами?', 'Дүкеншілермен әңгімелесуді ұнатасыз ба?'),
        V('Is it easy to walk to shops from your home?', 'Легко ли дойти пешком до магазинов от вашего дома?', 'Үйіңізден дүкендерге жаяу жету оңай ма?'),
        V('What is missing from the shops in your neighborhood?', 'Чего не хватает в магазинах вашего района?', 'Ауданыңыздағы дүкендерде не жетіспейді?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Talking About Silence and Sound', 'background_key' => 'calm',
    'warmup' => V("Let's talk about silence. Do you enjoy silence, or do you prefer background noise?", 'Давайте поговорим о тишине. Вам нравится тишина, или вы предпочитаете фоновый шум?', 'Тыныштық туралы сөйлесейік. Тыныштықты ұнатасыз ба, әлде фондық шуды ма?'),
    'vocab' => [V('silence', 'тишина', 'тыныштық'), V('sound', 'звук', 'дыбыс'), V('quiet', 'тихий', 'тыныш'), V('loud', 'громкий', 'қатты'), V('peaceful', 'спокойный', 'бейбіт'), V('background noise', 'фоновый шум', 'фондық шу'), V('calm down', 'успокоиться', 'сабырға түсу'), V('meditation', 'медитация', 'медитация'), V('focus', 'сосредоточенность', 'зейін'), V('distraction', 'отвлечение', 'алаңдату')],
    'questions' => [
        V('Do you enjoy silence, or prefer background noise?', 'Вам нравится тишина, или вы предпочитаете фоновый шум?', 'Тыныштықты ұнатасыз ба, әлде фондық шуды ма?'),
        V('Is it easy for you to focus in a quiet room?', 'Вам легко сосредоточиться в тихой комнате?', 'Тыныш бөлмеде шоғырлану сізге оңай ма?'),
        V('Do you play music while working or studying?', 'Вы включаете музыку во время работы или учёбы?', 'Жұмыс немесе оқу кезінде музыка қосасыз ба?'),
        V('Does complete silence ever feel uncomfortable to you?', 'Полная тишина когда-нибудь кажется вам неудобной?', 'Толық тыныштық сізге ыңғайсыз көрінген кезі болды ма?'),
        V('Have you ever tried meditation to find calm?', 'Вы когда-нибудь пробовали медитацию, чтобы найти спокойствие?', 'Сабырлылықты табу үшін медитацияны сынап көрдіңіз бе?'),
        V('Do loud sounds bother you easily?', 'Громкие звуки вас легко раздражают?', 'Қатты дыбыстар сізді оңай мазалай ма?'),
        V('Do you sleep better in silence or with some noise?', 'Вы лучше спите в тишине или с каким-то шумом?', 'Тыныштықта жақсырақ ұйықтайсыз ба, әлде біраз шумен бе?'),
        V('What sound do you find most peaceful?', 'Какой звук вам кажется самым умиротворяющим?', 'Қандай дыбыс сізге ең бейбіт көрінеді?'),
        V('Do you seek out quiet places when you feel stressed?', 'Вы ищете тихие места, когда чувствуете стресс?', 'Күйзеліс сезінгенде тыныш жерлерді іздейсіз бе?'),
        V('Does city noise bother you, or have you gotten used to it?', 'Городской шум вас беспокоит, или вы к нему привыкли?', 'Қала шуы сізді мазалай ма, әлде оған үйреніп қалдыңыз ба?'),
        V('Do you talk to yourself in silence sometimes?', 'Вы иногда разговариваете сами с собой в тишине?', 'Кейде тыныштықта өзіңізбен сөйлесесіз бе?'),
        V('Is silence during a conversation awkward for you?', 'Тишина во время разговора неудобна для вас?', 'Әңгіме кезіндегі тыныштық сізге ыңғайсыз ба?'),
        V('Do you notice sounds more when you are anxious?', 'Вы больше замечаете звуки, когда встревожены?', 'Мазасызданғанда дыбыстарды көбірек байқайсыз ба?'),
        V('What is the quietest place you have ever been to?', 'Какое самое тихое место, где вы когда-либо были?', 'Болған ең тыныш жеріңіз қайсы?'),
        V('Would you enjoy spending a full day in complete silence?', 'Вам бы понравилось провести целый день в полной тишине?', 'Толық тыныштықта бір күн өткізу сізге ұнар ма еді?'),
    ],
];

require __DIR__ . '/seed_lessons_batch8_part2.php';
