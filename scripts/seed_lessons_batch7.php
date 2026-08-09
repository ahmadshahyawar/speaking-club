<?php
declare(strict_types=1);
$configPath = '/home/u856637812/config/speaking_club_config.php';
$cfg = require $configPath;
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$username = $argv[1] ?? null;
if (!$username) { fwrite(STDERR, "Usage: php seed_lessons_batch7.php <teacher_username>\n"); exit(1); }
$stmt = $pdo->prepare('SELECT id FROM teachers WHERE username = ?');
$stmt->execute([$username]);
$teacher = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$teacher) { fwrite(STDERR, "Teacher not found: $username\n"); exit(1); }
$teacherId = (int)$teacher['id'];
function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }
$lessons = [];

// ========================= BEGINNER (batch 7) — 15 questions per topic =========================

$lessons[] = ['level' => 'beginner', 'topic' => 'My First Job', 'background_key' => 'professional',
    'warmup' => V("Let's talk about first jobs. What was your first job, and what did you learn from it?", 'Давайте поговорим о первой работе. Какая у вас была первая работа и чему вы научились?', 'Алғашқы жұмыс туралы сөйлесейік. Алғашқы жұмысыңыз қандай болды және одан не үйрендіңіз?'),
    'vocab' => [V('first job', 'первая работа', 'алғашқы жұмыс'), V('salary', 'зарплата', 'жалақы'), V('boss', 'начальник', 'бастық'), V('training', 'обучение', 'оқыту'), V('shift', 'смена', 'ауысым'), V('coworker', 'коллега', 'әріптес'), V('experience', 'опыт', 'тәжірибе'), V('nervous', 'нервный', 'толқыған'), V('mistake', 'ошибка', 'қате'), V('paycheck', 'зарплата (чек)', 'жалақы чегі')],
    'questions' => [
        V('What was your first job?', 'Какая у вас была первая работа?', 'Алғашқы жұмысыңыз қандай болды?'),
        V('How old were you when you started working?', 'Сколько вам было лет, когда вы начали работать?', 'Жұмыс істей бастағанда неше жаста едіңіз?'),
        V('Were you nervous on your first day?', 'Вы нервничали в первый день?', 'Бірінші күні толқыдыңыз ба?'),
        V('What did you spend your first paycheck on?', 'На что вы потратили первую зарплату?', 'Алғашқы жалақыңызды неге жұмсадыңыз?'),
        V('Did you make any mistakes at your first job?', 'Вы допускали ошибки на первой работе?', 'Алғашқы жұмысыңызда қате жібердіңіз бе?'),
        V('Was your first boss kind or strict?', 'Ваш первый начальник был добрым или строгим?', 'Алғашқы бастығыңыз мейірімді болды ма, әлде қатал ма?'),
        V('Did you make friends with coworkers at your first job?', 'Вы подружились с коллегами на первой работе?', 'Алғашқы жұмысыңызда әріптестермен дос болдыңыз ба?'),
        V('What skill did you learn at your first job?', 'Какому навыку вы научились на первой работе?', 'Алғашқы жұмысыңызда қандай дағдыны үйрендіңіз?'),
        V('Did you work long shifts at your first job?', 'Вы работали долгими сменами на первой работе?', 'Алғашқы жұмысыңызда ұзақ ауысымда жұмыс істедіңіз бе?'),
        V('How did you find your first job?', 'Как вы нашли свою первую работу?', 'Алғашқы жұмысыңызды қалай таптыңыз?'),
        V('Did you like your first job?', 'Вам нравилась ваша первая работа?', 'Алғашқы жұмысыңыз ұнады ма?'),
        V('What advice would you give to someone starting their first job?', 'Какой совет вы бы дали тому, кто начинает первую работу?', 'Алғашқы жұмысын бастап жатқан адамға қандай кеңес берер едіңіз?'),
        V('Do you remember how much your first salary was?', 'Вы помните, какая была ваша первая зарплата?', 'Алғашқы жалақыңыз қанша болғанын есіңізде сақтайсыз ба?'),
        V('Did your first job match what you studied?', 'Ваша первая работа соответствовала тому, что вы изучали?', 'Алғашқы жұмысыңыз оқығаныңызға сәйкес келді ме?'),
        V('How different is your life now compared to your first job?', 'Насколько ваша жизнь сейчас отличается от времени первой работы?', 'Қазіргі өміріңіз алғашқы жұмысыңыздан қаншалықты өзгеше?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Simple Cooking Tools', 'background_key' => 'playful',
    'warmup' => V("Let's talk about kitchen tools you use every day. Which ones could you not cook without?", 'Давайте поговорим о кухонных инструментах, которыми вы пользуетесь каждый день. Без каких вы не смогли бы готовить?', 'Күн сайын пайдаланатын ас үй құралдары туралы сөйлесейік. Қайсысынсыз тамақ жасай алмас едіңіз?'),
    'vocab' => [V('oven', 'духовка', 'пеш'), V('stove', 'плита', 'плита'), V('blender', 'блендер', 'блендер'), V('cutting board', 'разделочная доска', 'кесу тақтасы'), V('spatula', 'лопатка', 'күрекше'), V('measuring cup', 'мерный стакан', 'өлшеу стақаны'), V('grater', 'тёрка', 'үккіш'), V('colander', 'дуршлаг', 'сүзгі'), V('timer', 'таймер', 'таймер'), V('apron', 'фартук', 'алжапқыш')],
    'questions' => [
        V('What kitchen tool could you not cook without?', 'Без какого кухонного инструмента вы не смогли бы готовить?', 'Қандай ас үй құралынсыз тамақ жасай алмас едіңіз?'),
        V('Do you use a blender often?', 'Вы часто пользуетесь блендером?', 'Блендерді жиі пайдаланасыз ба?'),
        V('Do you wear an apron when cooking?', 'Вы надеваете фартук во время готовки?', 'Тамақ жасағанда алжапқыш киесіз бе?'),
        V('Do you use a timer to avoid burning food?', 'Вы используете таймер, чтобы не сжечь еду?', 'Тамақты күйдіріп алмау үшін таймерді пайдаланасыз ба?'),
        V('Do you have a favorite cutting board?', 'У вас есть любимая разделочная доска?', 'Сүйікті кесу тақтаңыз бар ма?'),
        V('Have you ever hurt yourself using a kitchen tool?', 'Вы когда-нибудь травмировались, используя кухонный инструмент?', 'Ас үй құралын пайдаланғанда жарақаттандыңыз ба?'),
        V('Do you clean your kitchen tools right after cooking?', 'Вы моете кухонные инструменты сразу после готовки?', 'Тамақ жасаудан кейін бірден ас үй құралдарын жуасыз ба?'),
        V('What tool do you wish you had in your kitchen?', 'Какой инструмент вы хотели бы иметь на кухне?', 'Ас үйіңізде қандай құрал болғанын қалайсыз?'),
        V('Do you measure ingredients carefully, or estimate?', 'Вы тщательно измеряете ингредиенты, или делаете на глаз?', 'Ингредиенттерді мұқият өлшейсіз бе, әлде шамалап аласыз ба?'),
        V('Do you own many kitchen tools, or just the basics?', 'У вас много кухонных инструментов, или только основные?', 'Ас үй құралдарыңыз көп пе, әлде тек негізгілері ме?'),
        V('Have you ever borrowed a kitchen tool from a neighbor?', 'Вы когда-нибудь одалживали кухонный инструмент у соседа?', 'Көршіден ас үй құралын қарызға алдыңыз ба?'),
        V('Do you enjoy buying new kitchen gadgets?', 'Вам нравится покупать новые кухонные гаджеты?', 'Жаңа ас үй гаджеттерін сатып алуды ұнатасыз ба?'),
        V('What tool do you use to grate cheese or vegetables?', 'Каким инструментом вы натираете сыр или овощи?', 'Ірімшік немесе көкөністі қандай құралмен үкелейсіз?'),
        V('Is your kitchen well organized?', 'Ваша кухня хорошо организована?', 'Ас үйіңіз жақсы ретке келтірілген бе?'),
        V('Would you rather cook with modern gadgets or simple tools?', 'Вы бы предпочли готовить с современными гаджетами или простыми инструментами?', 'Заманауи гаджеттермен тамақ жасағанды ұнатасыз ба, әлде қарапайым құралдармен бе?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Talking About Wishes for the Future', 'background_key' => 'warm',
    'warmup' => V("Let's talk about future wishes. What do you hope your life looks like in ten years?", 'Давайте поговорим о желаниях на будущее. Какой вы надеетесь будет ваша жизнь через десять лет?', 'Болашаққа тілектер туралы сөйлесейік. Он жылдан кейін өміріңіз қандай болуын үміт етесіз?'),
    'vocab' => [V('hope', 'надеяться', 'үміттену'), V('dream job', 'работа мечты', 'арман жұмыс'), V('travel more', 'путешествовать больше', 'көбірек саяхаттау'), V('own a home', 'иметь свой дом', 'үй иесі болу'), V('start a family', 'создать семью', 'отбасы құру'), V('learn a skill', 'научиться навыку', 'дағды үйрену'), V('save money', 'копить деньги', 'ақша жинау'), V('be healthy', 'быть здоровым', 'сау болу'), V('feel happy', 'чувствовать себя счастливым', 'бақытты сезіну'), V('achieve a goal', 'достичь цели', 'мақсатқа жету')],
    'questions' => [
        V('What do you hope your life looks like in ten years?', 'Какой вы надеетесь будет ваша жизнь через десять лет?', 'Он жылдан кейін өміріңіз қандай болуын үміт етесіз?'),
        V('Do you wish to travel more in the future?', 'Вы хотите больше путешествовать в будущем?', 'Болашақта көбірек саяхаттағыңыз келе ме?'),
        V('Would you like to own your own home someday?', 'Хотели бы вы когда-нибудь иметь свой дом?', 'Бір күні өз үйіңіздің иесі болғыңыз келе ме?'),
        V('What skill would you like to learn in the future?', 'Какому навыку вы хотели бы научиться в будущем?', 'Болашақта қандай дағдыны үйренгіңіз келеді?'),
        V('Is having a dream job important to you?', 'Иметь работу мечты важно для вас?', 'Арман жұмысқа ие болу сіз үшін маңызды ма?'),
        V('Do you hope to save more money next year?', 'Вы надеетесь накопить больше денег в следующем году?', 'Келесі жылы көбірек ақша жинауды үміт етесіз бе?'),
        V('What does feeling happy in the future mean to you?', 'Что для вас значит чувствовать себя счастливым в будущем?', 'Болашақта бақытты сезіну сіз үшін нені білдіреді?'),
        V('Do you have a big goal you hope to achieve?', 'У вас есть большая цель, которую вы надеетесь достичь?', 'Жетуді үміт ететін үлкен мақсатыңыз бар ма?'),
        V('Would you like to start a family, or have you already?', 'Хотели бы вы создать семью, или уже создали?', 'Отбасы құрғыңыз келе ме, әлде құрдыңыз ба?'),
        V('Do you think about the future often?', 'Вы часто думаете о будущем?', 'Болашақ туралы жиі ойланасыз ба?'),
        V('What is the biggest wish you have for your future?', 'Какое ваше самое большое желание на будущее?', 'Болашаққа деген ең үлкен тілегіңіз қандай?'),
        V('Do you believe your future wishes will come true?', 'Вы верите, что ваши будущие желания сбудутся?', 'Болашақ тілектеріңіз орындалады деп сенесіз бе?'),
        V('What would make you feel your life was successful?', 'Что заставило бы вас чувствовать, что ваша жизнь удалась?', 'Өміріңіздің сәтті болғанын не сезіндірер еді?'),
        V('Do your future wishes involve your family or mostly yourself?', 'Ваши будущие желания касаются семьи или в основном вас самих?', 'Болашақ тілектеріңіз отбасыңызға қатысты ма, әлде негізінен өзіңізге ме?'),
        V('Has your biggest wish for the future changed over the years?', 'Ваше самое большое желание на будущее менялось с годами?', 'Болашаққа деген ең үлкен тілегіңіз жылдар бойы өзгерді ме?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Common Kitchen Foods', 'background_key' => 'playful',
    'warmup' => V("Let's talk about foods you always have in your kitchen. What can you never run out of?", 'Давайте поговорим о продуктах, которые у вас всегда есть на кухне. Чего у вас никогда не заканчивается?', 'Ас үйіңізде әрдайым болатын тағамдар туралы сөйлесейік. Не ешқашан таусылмайды?'),
    'vocab' => [V('rice', 'рис', 'күріш'), V('bread', 'хлеб', 'нан'), V('eggs', 'яйца', 'жұмыртқа'), V('salt', 'соль', 'тұз'), V('sugar', 'сахар', 'қант'), V('oil', 'масло', 'май'), V('flour', 'мука', 'ұн'), V('onion', 'лук', 'пияз'), V('garlic', 'чеснок', 'сарымсақ'), V('pasta', 'паста', 'паста')],
    'questions' => [
        V('What food do you always have in your kitchen?', 'Какой продукт у вас всегда есть на кухне?', 'Ас үйіңізде әрдайым қандай тағам бар?'),
        V('Do you use a lot of garlic and onion when cooking?', 'Вы используете много чеснока и лука при готовке?', 'Тамақ жасағанда көп сарымсақ пен пияз пайдаланасыз ба?'),
        V('Do you buy rice or pasta more often?', 'Вы чаще покупаете рис или пасту?', 'Күрішті жиі сатып аласыз ба, әлде пастаны ма?'),
        V('How many eggs do you eat in a week?', 'Сколько яиц вы едите за неделю?', 'Аптасына неше жұмыртқа жейсіз?'),
        V('Do you check if you have enough flour before baking?', 'Вы проверяете, достаточно ли у вас муки, перед выпечкой?', 'Пісіру алдында ұнның жеткілікті екенін тексересіз бе?'),
        V('Do you use a lot of salt in your cooking?', 'Вы используете много соли при готовке?', 'Тамақ жасағанда көп тұз пайдаланасыз ба?'),
        V('Have you ever run out of an important ingredient while cooking?', 'У вас когда-нибудь заканчивался важный ингредиент во время готовки?', 'Тамақ жасап жатқанда маңызды ингредиент таусылды ма?'),
        V('Do you always keep bread at home?', 'Вы всегда держите хлеб дома?', 'Үйде әрдайым нан сақтайсыз ба?'),
        V('Do you cook with oil or butter more often?', 'Вы готовите чаще с маслом растительным или сливочным?', 'Өсімдік майымен жиі пісіресіз бе, әлде сары маймен бе?'),
        V('Do you buy these foods weekly or monthly?', 'Вы покупаете эти продукты еженедельно или ежемесячно?', 'Бұл тағамдарды апта сайын сатып аласыз ба, әлде ай сайын ба?'),
        V('Do you prefer white sugar or a healthier alternative?', 'Вы предпочитаете белый сахар или более здоровую альтернативу?', 'Ақ қантты ұнатасыз ба, әлде салауаттырақ баламаны ма?'),
        V('What is your favorite dish made with rice?', 'Какое ваше любимое блюдо из риса?', 'Күрішпен жасалған сүйікті тағамыңыз қандай?'),
        V('Do you keep these basic foods organized in your kitchen?', 'Вы держите эти основные продукты организованно на кухне?', 'Бұл негізгі тағамдарды ас үйіңізде ретті ұстайсыз ба?'),
        V('Do you cook pasta often? What sauce do you use?', 'Вы часто готовите пасту? Какой соус используете?', 'Пастаны жиі пісіресіз бе? Қандай соус пайдаланасыз?'),
        V('Which of these basic foods could you not live without?', 'Без какого из этих основных продуктов вы не смогли бы жить?', 'Осы негізгі тағамдардың қайсысынсыз өмір сүре алмас едіңіз?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'My Favorite Animal', 'background_key' => 'nature',
    'warmup' => V("Let's talk about animals. What is your favorite animal, and why do you like it?", 'Давайте поговорим о животных. Какое ваше любимое животное и почему оно вам нравится?', 'Жануарлар туралы сөйлесейік. Сүйікті жануарыңыз қайсы және неге ұнайды?'),
    'vocab' => [V('favorite animal', 'любимое животное', 'сүйікті жануар'), V('wild', 'дикий', 'жабайы'), V('tame', 'ручной', 'үй жануары'), V('strong', 'сильный', 'күшті'), V('fast', 'быстрый', 'жылдам'), V('cute', 'милый', 'сүйкімді'), V('dangerous', 'опасный', 'қауіпті'), V('gentle', 'нежный', 'жұмсақ мінезді'), V('fur', 'шерсть', 'жүн'), V('habitat', 'среда обитания', 'мекендеу ортасы')],
    'questions' => [
        V('What is your favorite animal?', 'Какое ваше любимое животное?', 'Сүйікті жануарыңыз қайсы?'),
        V('Do you prefer wild animals or pets?', 'Вы предпочитаете диких животных или домашних?', 'Жабайы жануарларды ұнатасыз ба, әлде үй жануарларын ба?'),
        V('Do you think your favorite animal is dangerous?', 'Как вы думаете, ваше любимое животное опасно?', 'Сүйікті жануарыңыз қауіпті деп ойлайсыз ба?'),
        V('Have you ever seen your favorite animal in real life?', 'Вы когда-нибудь видели ваше любимое животное вживую?', 'Сүйікті жануарыңызды нақты өмірде көрдіңіз бе?'),
        V('Is your favorite animal fast or slow?', 'Ваше любимое животное быстрое или медленное?', 'Сүйікті жануарыңыз жылдам ба, әлде баяу ма?'),
        V('Do you find your favorite animal cute or impressive?', 'Ваше любимое животное вам кажется милым или впечатляющим?', 'Сүйікті жануарыңыз сізге сүйкімді көрінеді ме, әлде әсерлі ме?'),
        V('Where does your favorite animal usually live?', 'Где обычно живёт ваше любимое животное?', 'Сүйікті жануарыңыз әдетте қайда тұрады?'),
        V('Would you like to have your favorite animal as a pet?', 'Хотели бы вы иметь ваше любимое животное как питомца?', 'Сүйікті жануарыңызды үй жануары ретінде ұстағыңыз келе ме?'),
        V('Did you like this animal since childhood?', 'Вам нравилось это животное с детства?', 'Бұл жануар балалық шағыңыздан бері ұнай ма?'),
        V('Have you ever seen a documentary about your favorite animal?', 'Вы когда-нибудь смотрели документальный фильм о вашем любимом животном?', 'Сүйікті жануарыңыз туралы деректі фильм көрдіңіз бе?'),
        V('Do you think this animal is endangered?', 'Как вы думаете, это животное находится под угрозой исчезновения?', 'Бұл жануар жойылу қаупінде деп ойлайсыз ба?'),
        V('What sound does your favorite animal make?', 'Какой звук издаёт ваше любимое животное?', 'Сүйікті жануарыңыз қандай дыбыс шығарады?'),
        V('Would you visit a place to see this animal in the wild?', 'Вы бы посетили место, чтобы увидеть это животное в дикой природе?', 'Бұл жануарды жабайы табиғатта көру үшін бір жерге барар ма едіңіз?'),
        V('Do you own anything with a picture of your favorite animal?', 'У вас есть что-то с изображением вашего любимого животного?', 'Сүйікті жануарыңыздың суреті бар затыңыз бар ма?'),
        V('Why do you think people connect emotionally with certain animals?', 'Как вы думаете, почему люди эмоционально привязываются к определённым животным?', 'Сіздің ойыңызша, неге адамдар белгілі бір жануарлармен эмоционалды байланысады?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Talking About Housework Together', 'background_key' => 'calm',
    'warmup' => V("Let's talk about sharing housework. Who does what in your home?", 'Давайте поговорим о разделении домашних дел. Кто что делает у вас дома?', 'Үй жұмысын бөлісу туралы сөйлесейік. Үйіңізде кім не істейді?'),
    'vocab' => [V('share chores', 'делить дела', 'жұмысты бөлісу'), V('fair', 'справедливый', 'әділ'), V('take turns', 'по очереди', 'кезекпен'), V('help out', 'помогать', 'көмектесу'), V('lazy', 'ленивый', 'жалқау'), V('team effort', 'командные усилия', 'топтық күш'), V('argue', 'спорить', 'дауласу'), V('agree', 'соглашаться', 'келісу'), V('responsibility', 'ответственность', 'жауапкершілік'), V('appreciate', 'ценить', 'бағалау')],
    'questions' => [
        V('Who does most of the housework in your home?', 'Кто делает большую часть домашней работы у вас дома?', 'Үйіңізде үй жұмысының көбін кім істейді?'),
        V('Do you think housework is shared fairly in your home?', 'Как вы думаете, домашние дела делятся справедливо в вашем доме?', 'Үйіңізде үй жұмысы әділ бөлінеді деп ойлайсыз ба?'),
        V('Do you and your family take turns doing chores?', 'Вы с семьёй по очереди делаете домашние дела?', 'Отбасыңызбен кезекпен үй жұмысын істейсіздер ме?'),
        V('Have you ever argued about housework with someone at home?', 'Вы когда-нибудь спорили о домашних делах с кем-то дома?', 'Үйдегі біреумен үй жұмысы туралы дауласқаныңыз болды ма?'),
        V('Do you appreciate it when someone helps with chores?', 'Вы цените, когда кто-то помогает с домашними делами?', 'Біреу үй жұмысына көмектескенде бағалайсыз ба?'),
        V('Is there a chore you always avoid doing?', 'Есть ли дело, которое вы всегда избегаете делать?', 'Әрдайым істеуден аулақ болатын жұмысыңыз бар ма?'),
        V('Do children in your family help with housework?', 'Дети в вашей семье помогают по дому?', 'Отбасыңыздағы балалар үй жұмысына көмектесе ме?'),
        V('Do you think it is important to teach children to do chores?', 'Как вы думаете, важно учить детей делать домашние дела?', 'Балаларды үй жұмысын істеуге үйрету маңызды деп ойлайсыз ба?'),
        V('Do you make a schedule for household chores?', 'Вы составляете график домашних дел?', 'Үй жұмысы үшін кесте жасайсыз ба?'),
        V('Have you ever felt like you do more chores than others at home?', 'Вы когда-нибудь чувствовали, что делаете больше дел по дому, чем другие?', 'Үйде басқалардан көбірек жұмыс істейтіндей сезіндіңіз бе?'),
        V('Do you think housework should be a team effort?', 'Как вы думаете, домашние дела должны быть командными усилиями?', 'Үй жұмысы топтық күш болуы керек деп ойлайсыз ба?'),
        V('Would you rather do all chores yourself, or share them?', 'Вы бы предпочли делать все дела сами, или делить их?', 'Барлық жұмысты өзіңіз істегенді қалайсыз ба, әлде бөлісуді ме?'),
        V('Do you ask for help when the housework is too much?', 'Вы просите о помощи, когда домашних дел слишком много?', 'Үй жұмысы тым көп болғанда көмек сұрайсыз ба?'),
        V('What chore do you think is the most important to do regularly?', 'Какое дело, по-вашему, важнее всего делать регулярно?', 'Сіздің ойыңызша, тұрақты істеу маңыздырақ жұмыс қайсы?'),
        V('Do you think men and women share housework equally today?', 'Как вы думаете, мужчины и женщины сегодня делят домашние дела поровну?', 'Ерлер мен әйелдер бүгінде үй жұмысын тең бөліседі деп ойлайсыз ба?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'At the Playground', 'background_key' => 'playful',
    'warmup' => V("Let's talk about playgrounds. Did you enjoy playing at the playground as a child?", 'Давайте поговорим о детских площадках. Вам нравилось играть на детской площадке в детстве?', 'Ойын алаңдары туралы сөйлесейік. Балалық шағыңызда ойын алаңында ойнағанды ұнататынсыз ба?'),
    'vocab' => [V('swing', 'качели', 'теңселме'), V('slide', 'горка', 'сырғанақ'), V('sandbox', 'песочница', 'құмсалғыш'), V('seesaw', 'качели-качалка', 'тербеме'), V('climb', 'лазить', 'өрмелеу'), V('jump rope', 'скакалка', 'жіпсекірткі'), V('run around', 'бегать', 'жүгіру'), V('friends', 'друзья', 'достар'), V('laugh', 'смеяться', 'күлу'), V('fall down', 'упасть', 'құлау')],
    'questions' => [
        V('Did you enjoy playing at the playground as a child?', 'Вам нравилось играть на детской площадке в детстве?', 'Балалық шағыңызда ойын алаңында ойнағанды ұнататынсыз ба?'),
        V('What was your favorite playground equipment?', 'Какой ваш любимый снаряд на детской площадке был?', 'Ойын алаңындағы сүйікті құралыңыз қайсы болды?'),
        V('Did you ever fall down at the playground and get hurt?', 'Вы когда-нибудь падали на детской площадке и получали травму?', 'Ойын алаңында құлап, жарақаттандыңыз ба?'),
        V('Do you remember making friends at the playground?', 'Вы помните, как заводили друзей на детской площадке?', 'Ойын алаңында дос табуды есіңізде сақтайсыз ба?'),
        V('Did you like swings or slides more?', 'Вам больше нравились качели или горки?', 'Теңселмелер ұнады ма, әлде сырғанақтар ма?'),
        V('Do children still play at playgrounds as much today?', 'Дети сегодня всё ещё так же много играют на детских площадках?', 'Балалар бүгінде ойын алаңдарында әлі де көп ойнай ма?'),
        V('Did you play with a jump rope as a child?', 'Вы играли со скакалкой в детстве?', 'Балалық шағыңызда жіпсекірткімен ойнадыңыз ба?'),
        V('Do you take children to the playground now?', 'Вы водите детей на детскую площадку сейчас?', 'Қазір балаларды ойын алаңына апарасыз ба?'),
        V('Was there a playground near your childhood home?', 'Рядом с домом вашего детства была детская площадка?', 'Балалық шағыңыздың үйінің жанында ойын алаңы болды ма?'),
        V('Do you think playgrounds today are safer than before?', 'Как вы думаете, детские площадки сегодня безопаснее, чем раньше?', 'Бүгінгі ойын алаңдары бұрынғыдан қауіпсіздеу деп ойлайсыз ба?'),
        V('Did you enjoy climbing on playground equipment?', 'Вам нравилось лазить по снарядам на площадке?', 'Ойын алаңының құралдарына өрмелегенді ұнататынсыз ба?'),
        V('Do you have a fond memory from a playground?', 'У вас есть приятное воспоминание с детской площадки?', 'Ойын алаңынан жағымды естелігіңіз бар ма?'),
        V('Did you spend hours playing outside as a child?', 'Вы проводили часы, играя на улице в детстве?', 'Балалық шағыңызда далада сағаттап ойнадыңыз ба?'),
        V('Do you think playgrounds are important for children\'s development?', 'Как вы думаете, детские площадки важны для развития детей?', 'Ойын алаңдары балалардың дамуы үшін маңызды деп ойлайсыз ба?'),
        V('Would you like to visit a playground again, just for fun?', 'Хотели бы вы снова посетить детскую площадку, просто для веселья?', 'Тек көңіл көтеру үшін ойын алаңына тағы бір рет барғыңыз келе ме?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Talking About Luck', 'background_key' => 'warm',
    'warmup' => V("Let's talk about luck. Do you consider yourself a lucky person?", 'Давайте поговорим об удаче. Вы считаете себя удачливым человеком?', 'Сәттілік туралы сөйлесейік. Өзіңізді сәтті адам деп санайсыз ба?'),
    'vocab' => [V('lucky', 'удачливый', 'сәтті'), V('unlucky', 'неудачливый', 'сәтсіз'), V('chance', 'шанс', 'мүмкіндік'), V('coincidence', 'совпадение', 'кездейсоқтық'), V('fortune', 'удача (судьба)', 'бақ'), V('lottery', 'лотерея', 'лотерея'), V('superstition', 'суеверие', 'ырым'), V('surprise', 'сюрприз', 'тосынсый'), V('opportunity', 'возможность', 'мүмкіндік'), V('hopeful', 'полный надежды', 'үмітті')],
    'questions' => [
        V('Do you consider yourself a lucky person?', 'Вы считаете себя удачливым человеком?', 'Өзіңізді сәтті адам деп санайсыз ба?'),
        V('Have you ever won something by chance?', 'Вы когда-нибудь что-то выигрывали случайно?', 'Кездейсоқ бір нәрсе ұтып алдыңыз ба?'),
        V('Do you believe in superstitions about luck?', 'Вы верите в суеверия об удаче?', 'Сәттілік туралы ырымдарға сенесіз бе?'),
        V('Have you ever bought a lottery ticket?', 'Вы когда-нибудь покупали лотерейный билет?', 'Лотерея билетін сатып алдыңыз ба?'),
        V('Do you think hard work matters more than luck?', 'Как вы думаете, упорный труд важнее удачи?', 'Қажырлы еңбек сәттіліктен маңыздырақ деп ойлайсыз ба?'),
        V('Have you ever had a surprising coincidence happen to you?', 'У вас когда-нибудь случалось удивительное совпадение?', 'Сізде таңғаларлық кездейсоқтық болды ма?'),
        V('Do you think some people are naturally luckier than others?', 'Как вы думаете, некоторые люди от природы удачливее других?', 'Кейбір адамдар табиғи түрде басқалардан сәттірек деп ойлайсыз ба?'),
        V('What is the luckiest thing that has ever happened to you?', 'Какое самое удачное событие произошло с вами?', 'Сізбен болған ең сәтті оқиға қандай?'),
        V('Do you feel hopeful about the future?', 'Вы чувствуете надежду насчёт будущего?', 'Болашақ туралы үмітті сезінесіз бе?'),
        V('Have you ever missed an opportunity because of bad luck?', 'Вы когда-нибудь упускали возможность из-за неудачи?', 'Сәтсіздік себебінен мүмкіндікті жіберіп алдыңыз ба?'),
        V('Do you have a lucky number or lucky object?', 'У вас есть счастливое число или счастливый предмет?', 'Сәтті санаңыз немесе сәтті затыңыз бар ма?'),
        V('Do you think making your own luck is possible through effort?', 'Как вы думаете, возможно ли создать свою удачу с помощью усилий?', 'Күш-жігер арқылы өз сәттілігіңізді жасау мүмкін деп ойлайсыз ба?'),
        V('Have you ever felt unlucky for a whole day?', 'Вы когда-нибудь чувствовали себя неудачливым весь день?', 'Күні бойы сәтсіз сезіндіңіз бе?'),
        V('Do you think about luck when starting something new?', 'Вы думаете об удаче, начиная что-то новое?', 'Жаңа бір нәрсені бастағанда сәттілік туралы ойланасыз ба?'),
        V('Would you rather have good luck or hard-earned skill?', 'Вы бы предпочли хорошую удачу или заработанное упорным трудом мастерство?', 'Жақсы сәттілікті қалайсыз ба, әлде қажырлы еңбекпен тапқан шеберлікті ме?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'My Favorite Type of Weather', 'background_key' => 'nature',
    'warmup' => V("Let's talk about weather you love. What type of weather makes you feel happiest?", 'Давайте поговорим о погоде, которую вы любите. Какая погода делает вас счастливее всего?', 'Ұнататын ауа райы туралы сөйлесейік. Қандай ауа райы сізді ең бақытты сезіндіреді?'),
    'vocab' => [V('sunshine', 'солнечный свет', 'күн сәулесі'), V('snowfall', 'снегопад', 'қар жауу'), V('breeze', 'бриз', 'жеңіл жел'), V('warm weather', 'тёплая погода', 'жылы ауа райы'), V('cool weather', 'прохладная погода', 'салқын ауа райы'), V('storm', 'буря', 'дауыл'), V('clear sky', 'ясное небо', 'ашық аспан'), V('humid', 'влажный', 'ылғалды'), V('crisp air', 'свежий воздух', 'сергек ауа'), V('cozy', 'уютный', 'жайлы')],
    'questions' => [
        V('What type of weather makes you feel happiest?', 'Какая погода делает вас счастливее всего?', 'Қандай ауа райы сізді ең бақытты сезіндіреді?'),
        V('Do you enjoy warm weather or cool weather more?', 'Вам больше нравится тёплая погода или прохладная?', 'Жылы ауа райын ұнатасыз ба, әлде салқынды ма?'),
        V('Do you like the feeling of a light breeze?', 'Вам нравится ощущение лёгкого бриза?', 'Жеңіл желдің сезімін ұнатасыз ба?'),
        V('Do you enjoy watching snowfall?', 'Вам нравится наблюдать за снегопадом?', 'Қар жауғанын бақылағанды ұнатасыз ба?'),
        V('Do you feel cozy on rainy days?', 'Вы чувствуете себя уютно в дождливые дни?', 'Жаңбырлы күндері өзіңізді жайлы сезінесіз бе?'),
        V('Does humid weather bother you?', 'Влажная погода вас беспокоит?', 'Ылғалды ауа райы сізді мазалай ма?'),
        V('Do you like crisp, cool mornings?', 'Вам нравятся свежие, прохладные утра?', 'Сергек, салқын таңдарды ұнатасыз ба?'),
        V('Have you ever been outside during a storm?', 'Вы когда-нибудь были на улице во время бури?', 'Дауыл кезінде далада болдыңыз ба?'),
        V('Do you prefer a clear sky or a cloudy one?', 'Вы предпочитаете ясное небо или облачное?', 'Ашық аспанды ұнатасыз ба, әлде бұлттыны ма?'),
        V('Does your mood change with the weather?', 'Ваше настроение меняется с погодой?', 'Көңіл-күйіңіз ауа райымен өзгере ме?'),
        V('What weather reminds you of your favorite season?', 'Какая погода напоминает вам о любимом времени года?', 'Қандай ауа райы сізге сүйікті мезгіліңізді еске түсіреді?'),
        V('Do you dress differently depending on the weather you love?', 'Вы одеваетесь по-разному в зависимости от любимой погоды?', 'Ұнататын ауа райыңызға байланысты басқаша киінесіз бе?'),
        V('Would you move somewhere just because of the weather?', 'Вы бы переехали куда-то только из-за погоды?', 'Тек ауа райы үшін бір жерге көшер ме едіңіз?'),
        V('Do you take more photos on days with your favorite weather?', 'Вы делаете больше фотографий в дни с любимой погодой?', 'Сүйікті ауа райыңыз болған күндері көбірек сурет түсіресіз бе?'),
        V('What activity do you enjoy most in your favorite weather?', 'Какое занятие вам больше всего нравится в вашу любимую погоду?', 'Сүйікті ауа райыңызда қандай әрекетті ең көп ұнатасыз?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Simple Money Habits', 'background_key' => 'professional',
    'warmup' => V("Let's talk about money habits. What do you usually do with your money each month?", 'Давайте поговорим о денежных привычках. Что вы обычно делаете со своими деньгами каждый месяц?', 'Ақша әдеттері туралы сөйлесейік. Ай сайын ақшаңызбен әдетте не істейсіз?'),
    'vocab' => [V('save', 'копить', 'жинау'), V('spend', 'тратить', 'жұмсау'), V('budget', 'бюджет', 'бюджет'), V('bank account', 'банковский счёт', 'банк шоты'), V('cash', 'наличные', 'қолма-қол ақша'), V('card', 'карта', 'карта'), V('expensive', 'дорогой', 'қымбат'), V('cheap', 'дешёвый', 'арзан'), V('paycheck', 'зарплата', 'жалақы'), V('bills', 'счета', 'шоттар')],
    'questions' => [
        V('Do you usually save money or spend it quickly?', 'Вы обычно копите деньги или быстро их тратите?', 'Әдетте ақша жинайсыз ба, әлде тез жұмсайсыз ба?'),
        V('Do you use cash or a card most often?', 'Вы чаще пользуетесь наличными или картой?', 'Жиі қолма-қол ақшаны пайдаланасыз ба, әлде картаны ма?'),
        V('Do you have a monthly budget?', 'У вас есть месячный бюджет?', 'Айлық бюджетіңіз бар ма?'),
        V('Do you check your bank account often?', 'Вы часто проверяете банковский счёт?', 'Банк шотыңызды жиі тексересіз бе?'),
        V('Do you pay your bills on time?', 'Вы вовремя оплачиваете счета?', 'Шоттарыңызды уақытында төлейсіз бе?'),
        V('What is the most expensive thing you bought recently?', 'Какая самая дорогая вещь, которую вы недавно купили?', 'Жақында сатып алған ең қымбат затыңыз қандай?'),
        V('Do you look for cheap options when shopping?', 'Вы ищете дешёвые варианты при покупках?', 'Сауда жасағанда арзан нұсқаларды іздейсіз бе?'),
        V('Do you spend most of your paycheck right away?', 'Вы тратите большую часть зарплаты сразу?', 'Жалақыңыздың көбін бірден жұмсайсыз ба?'),
        V('Do you have a savings goal you are working toward?', 'У вас есть цель по сбережениям, к которой вы стремитесь?', 'Ұмтылатын жинақ мақсатыңыз бар ма?'),
        V('Do you and your family talk openly about money?', 'Вы с семьёй открыто говорите о деньгах?', 'Отбасыңызбен ақша туралы ашық сөйлесесіз бе?'),
        V('Do you enjoy shopping, or find it stressful?', 'Вам нравится делать покупки, или это стрессово?', 'Сауда жасауды ұнатасыз ба, әлде күйзелісті ме?'),
        V('Have you ever spent more than you planned?', 'Вы когда-нибудь тратили больше, чем планировали?', 'Жоспарлағаннан көп жұмсадыңыз ба?'),
        V('Do you keep receipts to track your spending?', 'Вы храните чеки, чтобы отслеживать расходы?', 'Шығынды қадағалау үшін чектерді сақтайсыз ба?'),
        V('Would you rather save for something big or enjoy small purchases now?', 'Вы бы предпочли копить на что-то большое или наслаждаться мелкими покупками сейчас?', 'Үлкен нәрсеге жинағанды қалайсыз ба, әлде қазір кішкентай сатып алулардан рахат алғанды ма?'),
        V('What is one good money habit you want to build?', 'Какую хорошую денежную привычку вы хотите выработать?', 'Қандай жақсы ақша әдетін қалыптастырғыңыз келеді?'),
    ],
];

require __DIR__ . '/seed_lessons_batch7_part2.php';
