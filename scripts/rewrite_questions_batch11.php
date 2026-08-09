<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[99] = [ // Bills and Utilities
    V('Do you split bills with roommates or family?', 'Вы делите счета с соседями по квартире или семьёй?', 'Пәтерлестеріңізбен немесе отбасыңызбен шоттарды бөлісесіз бе?'),
    V('Have you ever disputed a bill you thought was wrong?', 'Вы когда-нибудь оспаривали счёт, который считали неверным?', 'Қате деп ойлаған шотыңызға дау айттыңыз ба?'),
    V('What utility do you try to use less of to save money?', 'Какую коммунальную услугу вы стараетесь использовать меньше, чтобы сэкономить?', 'Ақша үнемдеу үшін қай қызметті аз пайдалануға тырысасыз?'),
    V('Do you have automatic payments set up for your bills?', 'У вас настроена автоматическая оплата счетов?', 'Шоттарыңыз үшін автоматты төлем орнатылған ба?'),
    V('Have your bills increased a lot in recent years?', 'Ваши счета сильно выросли за последние годы?', 'Соңғы жылдары шоттарыңыз көп өсті ме?'),
    V('Do you compare providers before choosing utilities?', 'Вы сравниваете поставщиков перед выбором коммунальных услуг?', 'Қызмет таңдамас бұрын жеткізушілерді салыстырасыз ба?'),
    V('What happens in your area if you don\'t pay a bill on time?', 'Что происходит в вашем районе, если не оплатить счёт вовремя?', 'Ауданыңызда шотты уақытында төлемесеңіз не болады?'),
    V('Do you keep records of your paid bills?', 'Вы храните записи об оплаченных счетах?', 'Төленген шоттарыңыздың жазбасын сақтайсыз ба?'),
    V('What would you do if your electricity was suddenly cut off?', 'Что бы вы сделали, если бы у вас внезапно отключили электричество?', 'Электр қуаты кенеттен өшсе, не істер едіңіз?'),
];

$NEW9[100] = [ // Weather Forecasts
    V('Do you trust weather forecasts to be accurate?', 'Вы доверяете точности прогнозов погоды?', 'Ауа райы болжамдарының дәлдігіне сенесіз бе?'),
    V('Have you ever packed the wrong clothes because of the forecast?', 'Вы когда-нибудь брали не ту одежду из-за неверного прогноза?', 'Болжамға байланысты қате киім алдыңыз ба?'),
    V('What weather app or channel do you trust the most?', 'Какому приложению или каналу погоды вы доверяете больше всего?', 'Ауа райы қосымшасының немесе арнасының қайсысына көбірек сенесіз?'),
    V('Do you plan outdoor activities around the forecast?', 'Вы планируете мероприятия на улице в зависимости от прогноза?', 'Сыртқы шараларды болжамға қарай жоспарлайсыз ба?'),
    V('Has climate change affected the weather in your area?', 'Изменение климата повлияло на погоду в вашем регионе?', 'Климаттың өзгеруі ауданыңыздағы ауа райына әсер етті ме?'),
    V('Do you enjoy watching the weather report on the news?', 'Вам нравится смотреть прогноз погоды в новостях?', 'Жаңалықтардан ауа райы болжамын көргенді ұнатасыз ба?'),
    V('What weather forecast surprised you the most?', 'Какой прогноз погоды удивил вас больше всего?', 'Сізді ең көп таңғалдырған ауа райы болжамы қандай болды?'),
    V('Do older generations predict weather without technology in your culture?', 'В вашей культуре старшее поколение предсказывает погоду без технологий?', 'Мәдениетіңізде егде адамдар технологиясыз ауа райын болжай ма?'),
    V('What is your favorite type of weather to wake up to?', 'При какой погоде вам больше всего нравится просыпаться?', 'Оянғанда сүйікті ауа райыңыз қандай?'),
];

$NEW9[101] = [ // Doctor's Appointment
    V('Do you get nervous before a doctor\'s appointment?', 'Вы нервничаете перед приёмом у врача?', 'Дәрігерге қабылдау алдында толқисыз ба?'),
    V('Have you ever needed a second opinion from another doctor?', 'Вам когда-нибудь требовалось мнение другого врача?', 'Басқа дәрігердің пікірі қажет болды ма?'),
    V('Do you ask a lot of questions during appointments?', 'Вы задаёте много вопросов во время приёма?', 'Қабылдау кезінде көп сұрақ қоясыз ба?'),
    V('Have you ever had surgery?', 'Вам когда-нибудь делали операцию?', 'Операция жасалды ма?'),
    V('Do you trust your family doctor?', 'Вы доверяете своему семейному врачу?', 'Отбасылық дәрігеріңізге сенесіз бе?'),
    V('What is the longest you have ever waited for an appointment?', 'Сколько дольше всего вы ждали приёма?', 'Қабылдауды күткен ең ұзақ уақытыңыз қанша болды?'),
    V('Do you research your symptoms online before seeing a doctor?', 'Вы ищете симптомы онлайн перед визитом к врачу?', 'Дәрігерге барар алдында белгілерді интернеттен іздейсіз бе?'),
    V('Have you ever been prescribed medicine that didn\'t work?', 'Вам когда-нибудь прописывали лекарство, которое не помогло?', 'Көмектеспеген дәрі тағайындалды ма?'),
    V('Do you prefer male or female doctors, or does it not matter?', 'Вы предпочитаете врачей-мужчин или женщин, или это неважно?', 'Ер немесе әйел дәрігерді ұнатасыз ба, әлде маңызды емес пе?'),
];

$NEW9[102] = [ // Public Transport Etiquette
    V('Do you eat food on public transport?', 'Вы едите в общественном транспорте?', 'Қоғамдық көлікте тамақ ішесіз бе?'),
    V('Have you ever had an argument with someone on public transport?', 'У вас когда-нибудь была ссора с кем-то в общественном транспорте?', 'Қоғамдық көлікте біреумен дауласып қалдыңыз ба?'),
    V('Do you offer help to tourists who look lost?', 'Вы предлагаете помощь туристам, которые выглядят потерянными?', 'Адасқан сияқты көрінетін туристерге көмек ұсынасыз ба?'),
    V('Do people queue properly for buses or trains in your country?', 'Люди в вашей стране правильно стоят в очереди на автобус или поезд?', 'Еліңізде адамдар автобус немесе пойызға дұрыс кезек күте ме?'),
    V('Have you ever seen someone act rudely on public transport?', 'Вы когда-нибудь видели, как кто-то грубо ведёт себя в транспорте?', 'Қоғамдық көлікте біреудің дөрекі әрекет еткенін көрдіңіз бе?'),
    V('Do you keep your bag on your lap or on the seat next to you?', 'Вы держите сумку на коленях или на соседнем сиденье?', 'Сөмкеңізді тізеңізде ұстайсыз ба, әлде қасыңыздағы орындықта ма?'),
    V('What would you do if someone was being disrespectful on the bus?', 'Что бы вы сделали, если бы кто-то вёл себя неуважительно в автобусе?', 'Автобуста біреу құрметсіз әрекет етсе, не істер едіңіз?'),
    V('Do you wear headphones to avoid talking to strangers?', 'Вы надеваете наушники, чтобы избежать разговоров с незнакомцами?', 'Бейтаныс адамдармен сөйлеспеу үшін құлаққап тағасыз ба?'),
    V('What is one rule everyone should follow on public transport?', 'Какое одно правило все должны соблюдать в общественном транспорте?', 'Қоғамдық көлікте бәрі сақтауы керек бір ереже қандай?'),
];

$NEW9[103] = [ // Online Shopping
    V('Have you ever bought something online that looked different in person?', 'Вы когда-нибудь покупали онлайн вещь, которая оказалась другой в реальности?', 'Онлайн сатып алған зат нақты өмірде басқаша болып шықты ма?'),
    V('Do you use different websites to compare prices?', 'Вы используете разные сайты, чтобы сравнить цены?', 'Бағаларды салыстыру үшін әртүрлі сайттарды пайдаланасыз ба?'),
    V('What was the best thing you ever bought online?', 'Какая лучшая вещь, которую вы когда-либо покупали онлайн?', 'Онлайн сатып алған ең жақсы затыңыз қандай болды?'),
    V('Do you feel safe entering your card details online?', 'Вам комфортно вводить данные карты онлайн?', 'Картаңыздың деректерін онлайн енгізу сізге қауіпсіз ме?'),
    V('Have you ever accidentally ordered the wrong item?', 'Вы когда-нибудь случайно заказывали не тот товар?', 'Кездейсоқ қате затқа тапсырыс бердіңіз бе?'),
    V('Do you prefer fast delivery or cheaper shipping?', 'Вы предпочитаете быструю доставку или более дешёвую?', 'Жылдам жеткізуді ұнатасыз ба, әлде арзан тасымалды ма?'),
    V('What do you never buy online?', 'Что вы никогда не покупаете онлайн?', 'Онлайн ешқашан не сатып алмайсыз?'),
    V('Have you ever tracked a package obsessively?', 'Вы когда-нибудь навязчиво отслеживали посылку?', 'Сәлемдемені үздіксіз бақылап отырдыңыз ба?'),
    V('Do you trust online sellers you\'ve never used before?', 'Вы доверяете онлайн-продавцам, которыми никогда раньше не пользовались?', 'Бұрын пайдаланбаған онлайн сатушыларға сенесіз бе?'),
];

$NEW9[104] = [ // Café Culture
    V('Have you ever met someone for the first time at a café?', 'Вы когда-нибудь встречались с кем-то впервые в кафе?', 'Кафеде біреумен алғаш рет кездестіңіз бе?'),
    V('Do you tip at cafés?', 'Вы даёте чаевые в кафе?', 'Кафеде сый ақы бересіз бе?'),
    V('What time of day do you usually visit a café?', 'В какое время дня вы обычно посещаете кафе?', 'Күннің қай уақытында кафеге бара аласыз?'),
    V('Have you ever spent hours at a café without noticing the time?', 'Вы когда-нибудь проводили в кафе часы, не замечая времени?', 'Уақытты байқамай кафеде сағаттар бойы отырдыңыз ба?'),
    V('Do you prefer small local cafés or big chain coffee shops?', 'Вы предпочитаете маленькие местные кафе или крупные сети кофеен?', 'Кішкентай жергілікті кафелерді ұнатасыз ба, әлде үлкен желілік кофеханаларды ма?'),
    V('What is your usual coffee or drink order?', 'Что вы обычно заказываете из кофе или напитков?', 'Әдетте қандай кофе немесе сусын тапсырыс бересіз?'),
    V('Do you enjoy the background noise of a busy café?', 'Вам нравится фоновый шум оживлённого кафе?', 'Толы кафенің фондық шуын ұнатасыз ба?'),
    V('Have you ever had a bad experience at a café?', 'У вас когда-нибудь был плохой опыт в кафе?', 'Кафеде жаман тәжірибе бастан кештіңіз бе?'),
    V('What makes a café feel cozy to you?', 'Что делает кафе уютным для вас?', 'Сіз үшін кафені жайлы ететін не нәрсе?'),
];

$NEW9[105] = [ // Sports Equipment
    V('Have you ever bought expensive equipment you barely used?', 'Вы когда-нибудь покупали дорогое снаряжение, которым почти не пользовались?', 'Сирек пайдаланған қымбат жабдық сатып алдыңыз ба?'),
    V('Do you take care of your sports equipment properly?', 'Вы правильно ухаживаете за спортивным снаряжением?', 'Спорттық жабдығыңызға дұрыс күтім жасайсыз ба?'),
    V('Have you ever borrowed equipment from a friend?', 'Вы когда-нибудь брали снаряжение у друга?', 'Досыңыздан жабдық қарызға алдыңыз ба?'),
    V('What is the most useful piece of sports equipment you own?', 'Какое ваше спортивное снаряжение самое полезное?', 'Иеленген ең пайдалы спорттық жабдығыңыз қандай?'),
    V('Do you prefer buying new equipment or second-hand?', 'Вы предпочитаете покупать новое снаряжение или подержанное?', 'Жаңа жабдық сатып алуды ұнатасыз ба, әлде қолданылғанды ма?'),
    V('Has equipment ever caused you an injury?', 'Снаряжение когда-нибудь становилось причиной вашей травмы?', 'Жабдық сізге жарақат әкелді ме?'),
    V('What sports equipment would you like to buy next?', 'Какое спортивное снаряжение вы хотели бы купить следующим?', 'Келесі қандай спорттық жабдықты сатып алғыңыз келеді?'),
    V('Do you think proper equipment improves performance a lot?', 'Как вы думаете, правильное снаряжение сильно улучшает результаты?', 'Сіздің ойыңызша, дұрыс жабдық нәтижені көп жақсарта ма?'),
    V('Have you ever shopped for equipment you never ended up using?', 'Вы когда-нибудь покупали снаряжение, которым так и не воспользовались?', 'Ешқашан пайдаланбаған жабдықты сатып алдыңыз ба?'),
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
