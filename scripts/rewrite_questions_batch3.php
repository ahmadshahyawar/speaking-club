<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[84] = [ // Clothes Shopping
    V('Do you enjoy shopping, or do you find it stressful?', 'Вам нравится ходить по магазинам, или это вас утомляет?', 'Сауда жасауды ұнатасыз ба, әлде бұл сізді шаршата ма?'),
    V('How often do you buy new clothes?', 'Как часто вы покупаете новую одежду?', 'Жаңа киімді қаншалықты жиі сатып аласыз?'),
    V('Do you buy clothes online?', 'Вы покупаете одежду онлайн?', 'Киімді онлайн сатып аласыз ба?'),
    V('What do you do with clothes you no longer wear?', 'Что вы делаете с одеждой, которую больше не носите?', 'Енді кимейтін киіміңізбен не істейсіз?'),
    V('Do you follow a budget when shopping for clothes?', 'Вы придерживаетесь бюджета при покупке одежды?', 'Киім сатып алғанда бюджетті ұстанасыз ба?'),
    V('What is the last thing you bought to wear?', 'Что последнее вы купили из одежды?', 'Соңғы сатып алған киіміңіз қандай болды?'),
    V('Do you prefer shopping alone or with friends?', 'Вы предпочитаете ходить по магазинам одни или с друзьями?', 'Жалғыз сауда жасағанды ұнатасыз ба, әлде достарыңызбен бе?'),
    V('Have you ever returned something you bought?', 'Вы когда-нибудь возвращали купленную вещь?', 'Сатып алған затыңызды қайтарғаныңыз болды ма?'),
    V('What brand do you usually buy clothes from?', 'Какой бренд одежды вы обычно покупаете?', 'Әдетте қандай брендтен киім сатып аласыз?'),
];

$NEW9[85] = [ // Cooking Basics
    V('What was the first dish you ever learned to cook?', 'Какое блюдо вы научились готовить первым?', 'Пісіруді үйренген алғашқы тағамыңыз қандай болды?'),
    V('Do you follow recipes exactly, or do you improvise?', 'Вы точно следуете рецептам или готовите на свой вкус?', 'Рецептті дәл орындайсыз ба, әлде өз бетінше пісіресіз бе?'),
    V('What food do you often burn or overcook?', 'Какую еду вы часто пережариваете или пересушиваете?', 'Қандай тағамды жиі күйдіріп немесе артық пісіріп аласыз?'),
    V('Do you enjoy cooking for other people?', 'Вам нравится готовить для других людей?', 'Басқа адамдарға тамақ пісіргенді ұнатасыз ба?'),
    V('What ingredient do you always keep at home?', 'Какой ингредиент у вас всегда есть дома?', 'Үйіңізде әрқашан қандай өнім болады?'),
    V('Have you ever had a cooking accident?', 'У вас когда-нибудь случались неприятности во время готовки?', 'Тамақ пісіргенде оқыс оқиға болды ма?'),
    V('Do you prefer cooking or baking?', 'Вы предпочитаете готовить на плите или печь?', 'Пісіруді ұнатасыз ба, әлде нан-тоқаш пісіргенді ме?'),
    V('Who taught you how to cook?', 'Кто научил вас готовить?', 'Тамақ пісіруге сізді кім үйретті?'),
    V('What meal takes you the longest to prepare?', 'Какое блюдо занимает у вас больше всего времени?', 'Дайындауға ең көп уақыт кететін тағамыңыз қандай?'),
];

$NEW9[86] = [ // My Neighborhood
    V('Are there any shops close to where you live?', 'Есть ли рядом с вашим домом магазины?', 'Тұратын жеріңіздің жанында дүкендер бар ма?'),
    V('Do children play outside in your neighborhood?', 'В вашем районе дети играют на улице?', 'Ауданыңызда балалар сыртта ойнай ма?'),
    V('How long have you lived in your current neighborhood?', 'Как долго вы живёте в своём нынешнем районе?', 'Қазіргі ауданыңызда қанша уақыттан бері тұрасыз?'),
    V('Is there enough parking in your neighborhood?', 'В вашем районе достаточно места для парковки?', 'Ауданыңызда көлік тұрағы жеткілікті ме?'),
    V('Do you know your next-door neighbors well?', 'Вы хорошо знаете своих соседей?', 'Көршілеріңізді жақсы білесіз бе?'),
    V('What sounds do you hear in your neighborhood?', 'Какие звуки вы слышите в своём районе?', 'Ауданыңызда қандай дыбыстар естіледі?'),
    V('Is your neighborhood improving or getting worse?', 'Ваш район улучшается или становится хуже?', 'Ауданыңыз жақсарып жатыр ма, әлде нашарлап жатыр ма?'),
    V('Would you recommend your neighborhood to a friend?', 'Вы бы порекомендовали свой район другу?', 'Ауданыңызды досыңызға ұсынар ма едіңіз?'),
    V('What is the biggest problem in your neighborhood?', 'Какая самая большая проблема в вашем районе?', 'Ауданыңыздағы ең үлкен мәселе қандай?'),
];

$NEW9[87] = [ // Talking About Age
    V('What age do you feel like inside?', 'На сколько лет вы себя чувствуете внутри?', 'Ішкі жағыңызбен өзіңізді неше жаста сезінесіз?'),
    V('Did you have a big celebration for any birthday?', 'У вас был большой праздник на какой-нибудь день рождения?', 'Қандай да бір туған күніңізде үлкен мереке болды ма?'),
    V('Do you tell people your real age?', 'Вы говорите людям свой настоящий возраст?', 'Адамдарға шын жасыңызды айтасыз ба?'),
    V('What age were you when you learned to ride a bicycle?', 'В каком возрасте вы научились кататься на велосипеде?', 'Велосипед тебуді неше жаста үйрендіңіз?'),
    V('Do you think people your age act differently from previous generations?', 'Как вы думаете, люди вашего возраста ведут себя иначе, чем предыдущие поколения?', 'Сіздің ойыңызша, құрдастарыңыз алдыңғы буынға қарағанда басқаша ма?'),
    V('What is something you couldn\'t do at a younger age?', 'Что вы не могли делать в более молодом возрасте?', 'Жас кезіңізде істей алмаған нәрсеңіз бар ма?'),
    V('How do you feel about getting older?', 'Как вы относитесь к тому, что становитесь старше?', 'Жасыңыздың үлкейгеніне қалай қарайсыз?'),
    V('What age would you like to be forever?', 'В каком возрасте вы хотели бы остаться навсегда?', 'Мәңгі неше жаста қалғыңыз келеді?'),
    V('Do you remember your fifth birthday?', 'Вы помните свой пятый день рождения?', 'Бес жасқа толған туған күніңізді есіңізде ме?'),
];

$NEW9[88] = [ // Simple Directions
    V('Do you ask strangers for directions?', 'Вы спрашиваете дорогу у незнакомых людей?', 'Бейтаныс адамдардан жол сұрайсыз ба?'),
    V('Have you ever given someone wrong directions by mistake?', 'Вы когда-нибудь случайно указывали кому-то неверный путь?', 'Кездейсоқ біреуге қате жол көрсеттіңіз бе?'),
    V('What landmark helps you find your way home?', 'Какой ориентир помогает вам найти дорогу домой?', 'Үйге жол табуға қандай белгі көмектеседі?'),
    V('Do you use your phone\'s GPS often?', 'Вы часто пользуетесь GPS на телефоне?', 'Телефондағы GPS-ты жиі пайдаланасыз ба?'),
    V('Is it easy to find parking near your home?', 'Легко ли найти парковку рядом с вашим домом?', 'Үйіңіздің жанынан көлік тұрағын табу оңай ма?'),
    V('What is the fastest way to get to your favorite place?', 'Какой самый быстрый путь до вашего любимого места?', 'Сүйікті орныңызға баратын ең жылдам жол қандай?'),
    V('Have you ever explored a new area without a map?', 'Вы когда-нибудь исследовали новый район без карты?', 'Картасыз жаңа ауданды аралап көрдіңіз бе?'),
    V('Do you remember directions easily?', 'Вы легко запоминаете дорогу?', 'Жолды оңай есте сақтайсыз ба?'),
    V('What is on the left side of your house?', 'Что находится слева от вашего дома?', 'Үйіңіздің сол жағында не бар?'),
];

$NEW9[89] = [ // The Human Senses
    V('Which of your senses do you trust the most?', 'Какому из своих чувств вы доверяете больше всего?', 'Сезім мүшелеріңіздің қайсысына көбірек сенесіз?'),
    V('Do you enjoy loud music or quiet music more?', 'Вам больше нравится громкая или тихая музыка?', 'Қатты музыканы ұнатасыз ба, әлде ақырын музыканы ма?'),
    V('What food has the strongest taste for you?', 'Какая еда имеет для вас самый сильный вкус?', 'Сіз үшін дәмі ең күшті тағам қандай?'),
    V('Can you recognize people by their voice alone?', 'Вы можете узнать человека только по голосу?', 'Адамды тек дауысынан тани аласыз ба?'),
    V('Do you like the smell of rain?', 'Вам нравится запах дождя?', 'Жаңбыр иісін ұнатасыз ба?'),
    V('What is something you love to look at?', 'На что вам нравится смотреть?', 'Қарауды ұнататын нәрсеңіз қандай?'),
    V('Have you ever tasted something you really disliked?', 'Вы когда-нибудь пробовали что-то, что вам совсем не понравилось?', 'Мүлдем ұнатпаған дәмді татып көрдіңіз бе?'),
    V('Do you prefer silence or background noise while working?', 'Вы предпочитаете тишину или фоновый шум во время работы?', 'Жұмыс істегенде тыныштықты ұнатасыз ба, әлде фондық шуды ма?'),
    V('What texture do you dislike touching?', 'Какую текстуру вам неприятно трогать?', 'Қай текстураны ұстауды ұнатпайсыз?'),
];

$NEW9[90] = [ // Money and Prices
    V('Do you compare prices before making a big purchase?', 'Вы сравниваете цены перед крупной покупкой?', 'Үлкен сатып алу алдында бағаларды салыстырасыз ба?'),
    V('What is something you regret spending money on?', 'На что вы жалеете, что потратили деньги?', 'Ақша жұмсағаныңызға өкінетін нәрсе бар ма?'),
    V('Do you like to shop during sales?', 'Вам нравится делать покупки во время распродаж?', 'Жеңілдік кезінде сауда жасағанды ұнатасыз ба?'),
    V('Have you ever lent money to a friend?', 'Вы когда-нибудь одалживали деньги другу?', 'Досыңызға ақша қарызға бердіңіз бе?'),
    V('What is one thing you would buy if you had extra money?', 'Что бы вы купили, если бы у вас были лишние деньги?', 'Артық ақшаңыз болса, не сатып алар едіңіз?'),
    V('Do you use a budget to manage your money?', 'Вы используете бюджет, чтобы управлять деньгами?', 'Ақшаңызды басқару үшін бюджет пайдаланасыз ба?'),
    V('Is it easy for you to save money?', 'Вам легко копить деньги?', 'Ақша жинау сізге оңай ма?'),
    V('What was the last thing you bought that made you happy?', 'Что последнее вы купили, что сделало вас счастливым?', 'Сізді қуантқан соңғы сатып алған затыңыз қандай?'),
    V('Do prices in your city feel high or reasonable to you?', 'Цены в вашем городе кажутся вам высокими или разумными?', 'Қалаңыздағы бағалар сізге қымбат сияқты ма, әлде қалыпты ма?'),
];

$NEW9[91] = [ // Common Illnesses
    V('What is the last illness you had?', 'Какая последняя болезнь у вас была?', 'Соңғы ауырған ауруыңыз қандай болды?'),
    V('Do you take medicine quickly, or do you wait it out?', 'Вы быстро принимаете лекарства или ждёте, пока пройдёт само?', 'Дәрі-дәрмекті тез ішесіз бе, әлде өзі өтуін күтесіз бе?'),
    V('What do you eat or drink when you have a sore throat?', 'Что вы едите или пьёте, когда у вас болит горло?', 'Тамағыңыз ауырғанда не жейсіз немесе ішесіз?'),
    V('Have you ever missed school or work because you were sick?', 'Вы когда-нибудь пропускали школу или работу из-за болезни?', 'Ауру болғандықтан мектепті немесе жұмысты жіберіп алдыңыз ба?'),
    V('Do you get a flu shot every year?', 'Вы делаете прививку от гриппа каждый год?', 'Жыл сайын тұмауға қарсы екпе аласыз ба?'),
    V('What helps you avoid getting sick?', 'Что помогает вам не заболеть?', 'Ауырмауға не көмектеседі?'),
    V('Do you visit sick friends or family members?', 'Вы навещаете больных друзей или родственников?', 'Ауру достарыңызды немесе туыстарыңызды жолықтырасыз ба?'),
    V('How do you feel when you have a fever?', 'Как вы себя чувствуете при температуре?', 'Қызба болғанда өзіңізді қалай сезінесіз?'),
    V('What illness are you most afraid of catching?', 'Какой болезнью вы больше всего боитесь заразиться?', 'Қандай ауруды жұқтырудан ең көп қорқасыз?'),
];

$NEW9[92] = [ // Simple Travel Phrases
    V('What phrase do you find hardest to say in a foreign language?', 'Какую фразу вам труднее всего сказать на иностранном языке?', 'Шет тілінде айтуға ең қиын тіркес қандай?'),
    V('Do you smile a lot when meeting new people?', 'Вы много улыбаетесь, знакомясь с новыми людьми?', 'Жаңа адамдармен танысқанда көп күлесіз бе?'),
    V('What do you say when you don\'t understand someone?', 'Что вы говорите, когда не понимаете кого-то?', 'Біреуді түсінбегенде не айтасыз?'),
    V('Is it normal in your culture to shake hands when meeting someone?', 'В вашей культуре принято пожимать руку при встрече?', 'Мәдениетіңізде кездескенде қол алысу қалыпты ма?'),
    V('How do you greet someone older than you?', 'Как вы приветствуете человека старше себя?', 'Өзіңізден үлкен адаммен қалай сәлемдесесіз?'),
    V('Do you use different words with friends than with strangers?', 'Вы используете другие слова с друзьями, чем с незнакомцами?', 'Достарыңызбен және бейтаныс адамдармен басқаша сөйлесесіз бе?'),
    V('What phrase do tourists need to know in your country?', 'Какую фразу нужно знать туристам в вашей стране?', 'Еліңізде туристерге қандай тіркесті білу керек?'),
    V('Have you ever misunderstood someone because of a language mistake?', 'Вы когда-нибудь неправильно понимали кого-то из-за языковой ошибки?', 'Тілдік қатеге байланысты біреуді дұрыс түсінбей қалдыңыз ба?'),
    V('What is your favorite phrase in English?', 'Какая ваша любимая фраза на английском?', 'Ағылшын тіліндегі сүйікті тіркесіңіз қандай?'),
];

$NEW9[93] = [ // My Favorite Things
    V('What is your favorite thing that you own?', 'Какая ваша любимая вещь, которой вы владеете?', 'Иеленген сүйікті затыңыз қандай?'),
    V('Do you collect anything?', 'Вы что-нибудь коллекционируете?', 'Бірдеңе жинайсыз ба?'),
    V('What smell reminds you of something you love?', 'Какой запах напоминает вам о том, что вы любите?', 'Қандай иіс сүйікті нәрсеңізді еске түсіреді?'),
    V('What is your favorite thing to do with your family?', 'Что вам больше всего нравится делать со своей семьёй?', 'Отбасыңызбен бірге істегенді ең ұнататын әрекетіңіз қандай?'),
    V('Would you rather have one great thing or many good things?', 'Вы бы предпочли одну прекрасную вещь или много хороших?', 'Бір керемет затты алғанды қалайсыз ба, әлде көптеген жақсы заттарды ма?'),
    V('What was your favorite thing as a child?', 'Какая вещь была вашей любимой в детстве?', 'Балалық шақтағы сүйікті затыңыз қандай болды?'),
    V('Is there something you always carry with you?', 'Есть ли что-то, что вы всегда носите с собой?', 'Әрдайым өзіңізбен бірге алып жүретін затыңыз бар ма?'),
    V('What is your favorite place to relax?', 'Какое ваше любимое место для отдыха?', 'Демалуға сүйікті орныңыз қайсы?'),
    V('If your house was on fire, what one thing would you save?', 'Если бы ваш дом горел, какую одну вещь вы бы спасли?', 'Үйіңіз өртеніп жатса, қандай бір затты құтқарар едіңіз?'),
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
