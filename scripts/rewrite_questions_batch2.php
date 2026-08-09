<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[44] = [ // School
    V('Did you wear a uniform at school?', 'Вы носили школьную форму?', 'Мектепте форма кидіңіз бе?'),
    V('What was your least favorite subject?', 'Какой предмет вам нравился меньше всего?', 'Ең ұнатпаған пәніңіз қандай болды?'),
    V('Do you keep in touch with any old school friends?', 'Вы поддерживаете связь со школьными друзьями?', 'Мектеп кездеріндегі достарыңызбен байланыста боласыз ба?'),
    V('What was the hardest exam you ever took?', 'Какой экзамен был для вас самым трудным?', 'Тапсырған ең қиын емтиханыңыз қандай болды?'),
    V('Did you ever get in trouble at school?', 'У вас были неприятности в школе?', 'Мектепте басыңызға бір жайсыздық келді ме?'),
    V('What did you like to do during break time at school?', 'Что вы любили делать на перемене?', 'Мектепте үзілісте не істегенді ұнататынсыз?'),
    V('Would you like to visit your old school again one day?', 'Хотели бы вы когда-нибудь снова посетить свою старую школу?', 'Бір күні ескі мектебіңізге қайта барғыңыз келе ме?'),
    V('What is one thing you wish you had learned at school?', 'Чему одному вы хотели бы научиться в школе, но не смогли?', 'Мектепте үйренгіңіз келген, бірақ үйренбеген бір нәрсе бар ма?'),
    V('Did you play any sports at school?', 'Вы занимались спортом в школе?', 'Мектепте қандай да бір спорт түрімен айналыстыңыз ба?'),
];

$NEW9[45] = [ // Getting Around Town
    V('Have you ever missed a bus or a train?', 'Вы когда-нибудь опаздывали на автобус или поезд?', 'Автобусқа немесе пойызға кешігіп қалдыңыз ба?'),
    V('Do you use a map or an app to find your way?', 'Вы используете карту или приложение, чтобы найти дорогу?', 'Жол табу үшін картаны немесе қосымшаны пайдаланасыз ба?'),
    V('What is the busiest street in your city?', 'Какая улица самая оживлённая в вашем городе?', 'Қалаңыздағы ең қозғалысы көп көше қайсы?'),
    V('Do you ever walk somewhere instead of taking transport?', 'Вы когда-нибудь идёте пешком вместо того, чтобы ехать на транспорте?', 'Көлікпен жүрудің орнына жаяу жүріп кететін кезіңіз бола ма?'),
    V('Have you ever been stuck in traffic for a long time?', 'Вы когда-нибудь долго стояли в пробке?', 'Көлік кептелісінде ұзақ тұрып қалдыңыз ба?'),
    V('Is it expensive to travel around your city?', 'Дорого ли передвигаться по вашему городу?', 'Қалаңыз бойынша жүру қымбат па?'),
    V('Do you feel safe using public transport at night?', 'Вы чувствуете себя в безопасности в общественном транспорте ночью?', 'Түнде қоғамдық көлікті пайдалану қауіпсіз бе?'),
    V('What is the longest trip you have taken by car?', 'Какая была самая долгая поездка на машине?', 'Көлікпен жасаған ең ұзақ сапарыңыз қандай болды?'),
    V('Would you rather travel by bus, train, or taxi?', 'Вы бы предпочли ехать на автобусе, поезде или такси?', 'Автобуспен, пойызбен, әлде таксимен жүргенді қалайсыз ба?'),
];

$NEW9[46] = [ // At the Market
    V('Do you make a shopping list before you go?', 'Вы составляете список покупок перед тем, как пойти?', 'Барар алдында сатып алу тізімін жасайсыз ба?'),
    V('Have you ever bargained for a lower price?', 'Вы когда-нибудь торговались за более низкую цену?', 'Бағаны төмендету үшін саудаласып көрдіңіз бе?'),
    V('What is the busiest time to go to the market?', 'Какое самое людное время для похода на рынок?', 'Базарға баратын ең адам көп уақыт қашан?'),
    V('Do you shop alone or with someone else?', 'Вы делаете покупки одни или с кем-то?', 'Сатып алуға жалғыз барасыз ба, әлде біреумен бе?'),
    V('What is something you buy every week?', 'Что вы покупаете каждую неделю?', 'Апта сайын не сатып аласыз?'),
    V('Is there a market near your home?', 'Рядом с вашим домом есть рынок?', 'Үйіңіздің жанында базар бар ма?'),
    V('Do you enjoy talking to the sellers?', 'Вам нравится разговаривать с продавцами?', 'Сатушылармен сөйлескенді ұнатасыз ба?'),
    V('Have you ever forgotten something important at the market?', 'Вы когда-нибудь забывали купить что-то важное на рынке?', 'Базарда маңызды бір нәрсені сатып алуды ұмытып кеттіңіз бе?'),
    V('Do you prefer small shops or big supermarkets?', 'Вы предпочитаете маленькие магазины или большие супермаркеты?', 'Кішкентай дүкендерді ұнатасыз ба, әлде үлкен супермаркеттерді ме?'),
];

$NEW9[47] = [ // Feelings and Emotions
    V('What usually makes you feel angry?', 'Что обычно вас злит?', 'Әдетте сізді не ашуландырады?'),
    V('Do you cry easily, or rarely?', 'Вы легко плачете или редко?', 'Оңай жылайсыз ба, әлде сирек пе?'),
    V('How do you comfort a friend who is sad?', 'Как вы утешаете грустного друга?', 'Көңілі қалған досыңызды қалай жұбатасыз?'),
    V('What is something that always makes you smile?', 'Что всегда заставляет вас улыбаться?', 'Сізді әрдайым күлдіретін не нәрсе бар?'),
    V('Do your feelings change quickly during the day?', 'Ваше настроение быстро меняется в течение дня?', 'Күн бойы көңіл-күйіңіз тез өзгере ме?'),
    V('What do you do when you feel bored?', 'Что вы делаете, когда вам скучно?', 'Жалыққанда не істейсіз?'),
    V('Have you ever felt nervous before an important event?', 'Вы когда-нибудь нервничали перед важным событием?', 'Маңызды оқиға алдында толқыдыңыз ба?'),
    V('Do you show your emotions easily, or do you hide them?', 'Вы легко показываете эмоции или скрываете их?', 'Эмоцияларыңызды оңай білдіресіз бе, әлде жасырасыз ба?'),
    V('What emotion do you feel most often?', 'Какую эмоцию вы испытываете чаще всего?', 'Сіз ең жиі қандай эмоцияны сезінесіз?'),
];

$NEW9[48] = [ // Days of the Week
    V('Which day of the week do you dislike the most?', 'Какой день недели вам нравится меньше всего?', 'Апта күндерінің қайсысын ең аз ұнатасыз?'),
    V('Do you have a fixed schedule every week?', 'У вас есть постоянное расписание каждую неделю?', 'Әр аптада тұрақты кестеңіз бар ма?'),
    V('What do you usually do on Sunday?', 'Что вы обычно делаете в воскресенье?', 'Жексенбіде әдетте не істейсіз?'),
    V('Is Monday a difficult day for you?', 'Понедельник трудный день для вас?', 'Дүйсенбі сіз үшін қиын күн бе?'),
    V('Do you plan your week in advance?', 'Вы планируете свою неделю заранее?', 'Аптаңызды алдын ала жоспарлайсыз ба?'),
    V('Which day do you usually meet friends?', 'В какой день вы обычно встречаетесь с друзьями?', 'Достарыңызбен әдетте қай күні кездесесіз?'),
    V('What was the best day you had this week?', 'Какой был лучший день на этой неделе?', 'Осы аптадағы ең жақсы күніңіз қандай болды?'),
    V('Do the days of the week feel different from each other to you?', 'Дни недели ощущаются для вас по-разному?', 'Апта күндерінің әрқайсысы сізге басқаша сезіле ме?'),
    V('What do you look forward to each week?', 'Чего вы с нетерпением ждёте каждую неделю?', 'Әр аптада не күтесіз?'),
];

$NEW9[49] = [ // Places in Town
    V('Is there a place in town where you meet friends?', 'Есть ли в городе место, где вы встречаетесь с друзьями?', 'Қалада достарыңызбен кездесетін орын бар ма?'),
    V('Do you enjoy walking around your town?', 'Вам нравится гулять по своему городу?', 'Қалаңызды аралап жүргенді ұнатасыз ба?'),
    V('What new place opened in your town recently?', 'Какое новое место недавно открылось в вашем городе?', 'Қалаңызда жақында қандай жаңа орын ашылды?'),
    V('Is your town noisy or quiet?', 'Ваш город шумный или тихий?', 'Қалаңыз шулы ма, әлде тыныш па?'),
    V('Where do you usually go on a Saturday?', 'Куда вы обычно ходите в субботу?', 'Сенбіде әдетте қайда барасыз?'),
    V('Do you know most people in your neighborhood?', 'Вы знаете большинство людей в своём районе?', 'Ауданыңыздағы адамдардың көбін білесіз бе?'),
    V('What is missing in your town that you wish were there?', 'Чего не хватает в вашем городе, что вы хотели бы там видеть?', 'Қалаңызда болғанын қалайтын, бірақ жоқ нәрсе бар ма?'),
    V('Is there a place in town you avoid?', 'Есть ли в городе место, которое вы избегаете?', 'Қалада аулақ жүретін орныңыз бар ма?'),
    V('What do you like most about your town?', 'Что вам больше всего нравится в вашем городе?', 'Қалаңызда сізге ең не ұнайды?'),
];

$NEW9[50] = [ // Basic Actions
    V('Do you cook, clean, or study more on a typical day?', 'В обычный день вы больше готовите, убираетесь или учитесь?', 'Әдеттегі күні көбірек тамақ пісіресіз бе, тазалайсыз ба, әлде оқисыз ба?'),
    V('What do you do first when you get home?', 'Что вы делаете в первую очередь, когда приходите домой?', 'Үйге келгенде бірінші не істейсіз?'),
    V('Do you prefer talking or writing to communicate?', 'Вы предпочитаете общаться разговором или письмом?', 'Сөйлесіп қарым-қатынас жасағанды ұнатасыз ба, әлде жазып па?'),
    V('How often do you travel?', 'Как часто вы путешествуете?', 'Саяхаттауды қаншалықты жиі жасайсыз?'),
    V('Do you draw or paint sometimes?', 'Вы иногда рисуете?', 'Кейде сурет саласыз ба?'),
    V('What do you usually do before going to bed?', 'Что вы обычно делаете перед сном?', 'Ұйықтар алдында әдетте не істейсіз?'),
    V('Do you enjoy dancing?', 'Вам нравится танцевать?', 'Билегенді ұнатасыз ба?'),
    V('What is something you do every single day?', 'Что вы делаете абсолютно каждый день?', 'Күн сайын, ешбір жіберместен не істейсіз?'),
    V('Do you prefer working alone or working with others?', 'Вы предпочитаете работать одни или с другими?', 'Жалғыз жұмыс істегенді ұнатасыз ба, әлде басқалармен бе?'),
];

$NEW9[51] = [ // Toys and Games
    V('Did you ever build something out of blocks or Lego?', 'Вы когда-нибудь строили что-то из кубиков или Лего?', 'Кубиктерден немесе Легодан бірдеңе құрастырдыңыз ба?'),
    V('Do you still play any games from your childhood?', 'Вы всё ещё играете в какие-то игры из детства?', 'Балалық шақтағы кейбір ойындарды әлі ойнайсыз ба?'),
    V('What was the most popular toy when you were a child?', 'Какая игрушка была самой популярной, когда вы были ребёнком?', 'Балалық шағыңызда ең танымал ойыншық қандай болды?'),
    V('Did you share your toys with brothers, sisters, or friends?', 'Вы делились игрушками с братьями, сёстрами или друзьями?', 'Ойыншықтарыңызды аға-іні, апа-қарындас немесе достарыңызбен бөлісетінсіз бе?'),
    V('Do you enjoy board games or card games?', 'Вам нравятся настольные или карточные игры?', 'Үстел ойындарын немесе карта ойындарын ұнатасыз ба?'),
    V('Have you ever bought a toy for a child?', 'Вы когда-нибудь покупали игрушку для ребёнка?', 'Балаға ойыншық сатып алдыңыз ба?'),
    V('What game did you play the most at school?', 'В какую игру вы играли больше всего в школе?', 'Мектепте ең көп қандай ойын ойнадыңыз?'),
    V('Are video games popular in your country?', 'Видеоигры популярны в вашей стране?', 'Еліңізде видео ойындар танымал ма?'),
    V('Do you think toys today are better or worse than in the past?', 'Как вы думаете, игрушки сегодня лучше или хуже, чем раньше?', 'Сіздің ойыңызша, қазіргі ойыншықтар бұрынғыдан жақсы ма, әлде нашар ма?'),
];

$NEW9[52] = [ // Fruits and Vegetables
    V('What fruit or vegetable do you dislike?', 'Какой фрукт или овощ вам не нравится?', 'Қандай жеміс немесе көкөністі ұнатпайсыз?'),
    V('Do you eat fruit as a snack?', 'Вы едите фрукты в качестве перекуса?', 'Жемісті жеңіл тамақ ретінде жейсіз бе?'),
    V('What vegetable is common in your country\'s traditional food?', 'Какой овощ часто используется в традиционной еде вашей страны?', 'Еліңіздің дәстүрлі тағамында қандай көкөніс жиі кездеседі?'),
    V('Have you ever picked fruit straight from a tree?', 'Вы когда-нибудь срывали фрукты прямо с дерева?', 'Ағаштан тікелей жеміс тердіңіз бе?'),
    V('Do you prefer fruit juice or whole fruit?', 'Вы предпочитаете фруктовый сок или целые фрукты?', 'Жеміс шырынын ұнатасыз ба, әлде тұтас жемісті ме?'),
    V('What is the most expensive fruit in your country?', 'Какой самый дорогой фрукт в вашей стране?', 'Еліңіздегі ең қымбат жеміс қандай?'),
    V('Do you eat the same fruits and vegetables all year, or does it change with the season?', 'Вы едите одни и те же фрукты и овощи круглый год, или это меняется по сезону?', 'Жыл бойы бірдей жеміс-жидек пен көкөніс жейсіз бе, әлде маусымға қарай өзгере ме?'),
    V('What vegetable did you dislike as a child but like now?', 'Какой овощ вы не любили в детстве, а теперь любите?', 'Балалық шақта ұнатпаған, ал қазір ұнататын көкөніс бар ма?'),
    V('Do you buy fruits and vegetables at a market or a supermarket?', 'Вы покупаете фрукты и овощи на рынке или в супермаркете?', 'Жеміс-көкөністі базардан сатып аласыз ба, әлде супермаркеттен бе?'),
];

$NEW9[53] = [ // Places for Fun
    V('Do you prefer going out with friends or staying at home?', 'Вы предпочитаете гулять с друзьями или оставаться дома?', 'Достарыңызбен шыққанды ұнатасыз ба, әлде үйде қалғанды ма?'),
    V('What is the most fun trip you have ever taken?', 'Какая поездка была для вас самой весёлой?', 'Бастан кешірген ең қызықты сапарыңыз қандай болды?'),
    V('Have you ever been to an amusement park?', 'Вы когда-нибудь были в парке развлечений?', 'Атракциондар паркінде болдыңыз ба?'),
    V('Do you enjoy watching movies at the cinema?', 'Вам нравится смотреть фильмы в кинотеатре?', 'Кинотеатрда фильм көргенді ұнатасыз ба?'),
    V('What do you usually do for fun on weekends?', 'Что вы обычно делаете для развлечения по выходным?', 'Демалыс күндері көңіл көтеру үшін әдетте не істейсіз?'),
    V('Have you ever visited another country for fun?', 'Вы когда-нибудь путешествовали в другую страну для развлечения?', 'Көңіл көтеру үшін басқа елге бардыңыз ба?'),
    V('Is there a fun place near your home that you love?', 'Есть ли рядом с вашим домом интересное место, которое вы любите?', 'Үйіңіздің жанында сүйетін қызықты орныңыз бар ма?'),
    V('Do you prefer quiet places or busy, exciting places?', 'Вы предпочитаете тихие места или оживлённые, захватывающие?', 'Тыныш орындарды ұнатасыз ба, әлде қызу да қызықты орындарды ма?'),
    V('What new activity would you like to try for fun?', 'Какое новое занятие вы хотели бы попробовать для развлечения?', 'Көңіл көтеру үшін қандай жаңа әрекетті сынап көргіңіз келеді?'),
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
