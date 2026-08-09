<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[79] = [ // Consumer Technology and Privacy
    V('Have you ever changed your privacy settings after learning how much data was being collected?', 'Вы когда-нибудь меняли настройки конфиденциальности, узнав, сколько данных собирается?', 'Қаншалықты дерек жиналатынын білгеннен кейін құпиялылық баптауларын өзгерттіңіз бе?'),
    V('Do you think you have control over your personal data online?', 'Как вы думаете, у вас есть контроль над своими личными данными онлайн?', 'Сіздің ойыңызша, желідегі жеке деректеріңізді бақылай аласыз ба?'),
    V('Would you pay for a service to avoid seeing targeted ads?', 'Вы бы платили за сервис, чтобы не видеть таргетированную рекламу?', 'Мақсатты жарнаманы көрмеу үшін қызметке ақы төлер ме едіңіз?'),
    V('Have you ever been surprised by an eerily accurate ad?', 'Вас когда-нибудь удивляла реклама, странно точно совпадающая с вашими интересами?', 'Тым дәл сай келген жарнамаға таңғалдыңыз ба?'),
    V('Do you think governments should regulate how tech companies use data?', 'Как вы думаете, правительства должны регулировать, как технологические компании используют данные?', 'Сіздің ойыңызша, үкіметтер технология компанияларының деректерді пайдалануын реттеуі керек пе?'),
    V('Would you trade some privacy for more convenience?', 'Вы бы пожертвовали частью конфиденциальности ради удобства?', 'Ыңғайлылық үшін құпиялылықтың бір бөлігінен бас тартар ма едіңіз?'),
    V('Have you ever deleted an app because of privacy concerns?', 'Вы когда-нибудь удаляли приложение из-за проблем с конфиденциальностью?', 'Құпиялылыққа қатысты алаңдаушылыққа байланысты қосымшаны жойдыңыз ба?'),
    V('Do you think younger generations care less about privacy than older ones?', 'Как вы думаете, молодое поколение меньше заботится о конфиденциальности, чем старшее?', 'Сіздің ойыңызша, жас ұрпақ құпиялылыққа үлкендерге қарағанда аз мән бере ме?'),
    V('What is one piece of personal data you would never share online?', 'Какие личные данные вы бы никогда не поделились онлайн?', 'Желіде ешқашан бөліспейтін жеке деректеріңіз қандай?'),
];

$NEW9[80] = [ // Political Systems and Democracy
    V('Have you ever voted in an election? Why or why not?', 'Вы когда-нибудь голосовали на выборах? Почему да или почему нет?', 'Сайлауда дауыс бердіңіз бе? Неге бердіңіз немесе бермедіңіз?'),
    V('Do you think social media has changed how political campaigns work?', 'Как вы думаете, социальные сети изменили работу политических кампаний?', 'Сіздің ойыңызша, әлеуметтік желілер саяси науқандардың жұмыс істеу тәсілін өзгертті ме?'),
    V('Would you ever run for a political position yourself?', 'Вы бы когда-нибудь баллотировались на политическую должность сами?', 'Өзіңіз саяси лауазымға үміткер болар ма едіңіз?'),
    V('Do you trust the media to cover politics fairly?', 'Вы доверяете СМИ в справедливом освещении политики?', 'БАҚ саясатты әділ жабатынына сенесіз бе?'),
    V('Have you ever changed your political opinion after a real conversation?', 'Вы когда-нибудь меняли своё политическое мнение после настоящего разговора?', 'Нақты әңгімеден кейін саяси пікіріңізді өзгерттіңіз бе?'),
    V('Do you think younger people should have more political influence?', 'Как вы думаете, молодёжь должна иметь больше политического влияния?', 'Сіздің ойыңызша, жастардың саяси ықпалы көбірек болуы керек пе?'),
    V('What quality do you value most in a political leader?', 'Какое качество вы больше всего цените в политическом лидере?', 'Саяси көшбасшыда ең бағалайтын қасиетіңіз қандай?'),
    V('Do you think democracy works better in small countries than large ones?', 'Как вы думаете, демократия работает лучше в маленьких странах, чем в больших?', 'Сіздің ойыңызша, демократия кіші елдерде үлкен елдерге қарағанда жақсы жұмыс істей ме?'),
    V('Have you ever felt your vote didn\'t matter?', 'Вы когда-нибудь чувствовали, что ваш голос не имеет значения?', 'Дауысыңыздың маңызы жоқ сияқты сезіндіңіз бе?'),
];

$NEW9[81] = [ // The Ageing Population
    V('Have you ever cared for an elderly family member?', 'Вы когда-нибудь ухаживали за пожилым членом семьи?', 'Отбасыңыздағы қарт адамға қамқорлық жасадыңыз ба?'),
    V('Do you think retirement age should be flexible instead of fixed?', 'Как вы думаете, пенсионный возраст должен быть гибким, а не фиксированным?', 'Сіздің ойыңызша, зейнетке шығу жасы қатаң емес, икемді болуы керек пе?'),
    V('Have you ever learned something valuable from an older person?', 'Вы когда-нибудь узнавали что-то ценное от пожилого человека?', 'Қарт адамнан құнды бір нәрсе үйрендіңіз бе?'),
    V('Do you think technology can help elderly people live more independently?', 'Как вы думаете, технологии могут помочь пожилым людям жить более независимо?', 'Сіздің ойыңызша, технология қарт адамдардың дербес өмір сүруіне көмектесе ме?'),
    V('What do you think is the hardest part of growing old?', 'Что, по-вашему, самое трудное в старении?', 'Сіздің ойыңызша, қартаюдың ең қиын бөлігі қандай?'),
    V('Do you think younger generations respect elderly people enough?', 'Как вы думаете, молодое поколение достаточно уважает пожилых людей?', 'Сіздің ойыңызша, жас ұрпақ қарт адамдарды жеткілікті құрметтей ме?'),
    V('Would you want to live near your children when you\'re older?', 'Вы бы хотели жить рядом со своими детьми, когда состаритесь?', 'Қартайғанда балаларыңыздың жанында тұрғыңыз келе ме?'),
    V('Do you think pensions will be enough to support people in the future?', 'Как вы думаете, пенсий будет достаточно для поддержки людей в будущем?', 'Сіздің ойыңызша, болашақта зейнетақы адамдарды қолдауға жеткілікті бола ма?'),
    V('What do you hope your life looks like in old age?', 'Какой вы надеетесь будет ваша жизнь в старости?', 'Қартайғанда өміріңіздің қандай болғанын қалайсыз?'),
];

$NEW9[82] = [ // Language and Communication in a Digital Age
    V('Have you ever had an argument that started because of a misunderstood text?', 'У вас когда-нибудь была ссора, начавшаяся из-за неправильно понятого сообщения?', 'Дұрыс түсінілмеген хабарламадан басталған дау болды ма?'),
    V('Do you think voice messages are more personal than text messages?', 'Как вы думаете, голосовые сообщения более личные, чем текстовые?', 'Сіздің ойыңызша, дауыстық хабарлама мәтіндік хабарламадан жекелеу ме?'),
    V('Have you ever used a translation app in a real conversation?', 'Вы когда-нибудь использовали приложение-переводчик в реальном разговоре?', 'Нақты әңгімеде аударма қосымшасын пайдаландыңыз ба?'),
    V('Do you think emojis can fully replace tone of voice in writing?', 'Как вы думаете, эмодзи могут полностью заменить тон голоса в письме?', 'Сіздің ойыңызша, эмодзи жазуда дауыс тонын толығымен алмастыра ала ма?'),
    V('Have you ever felt disconnected because of too much screen-based communication?', 'Вы когда-нибудь чувствовали себя отстранённым из-за слишком большого количества общения через экран?', 'Экран арқылы тым көп қарым-қатынас жасағандықтан алшақтап қалғандай сезіндіңіз бе?'),
    V('Do you think handwriting is becoming a lost skill?', 'Как вы думаете, почерк становится утраченным навыком?', 'Сіздің ойыңызша, қолжазба жоғалып бара жатқан дағдыға айналып жатыр ма?'),
    V('What communication habit from before smartphones do you miss?', 'По какой привычке общения до появления смартфонов вы скучаете?', 'Смартфондардан бұрынғы қандай қарым-қатынас әдетін сағынасыз?'),
    V('Do you think video calls are a good substitute for meeting in person?', 'Как вы думаете, видеозвонки — хорошая замена личной встрече?', 'Сіздің ойыңызша, бейне қоңыраулар жеке кездесудің жақсы алмастырушысы ма?'),
    V('Have you ever regretted sending a message too quickly?', 'Вы когда-нибудь жалели, что отправили сообщение слишком быстро?', 'Хабарламаны тым тез жібергеніңізге өкіндіңіз бе?'),
];

$NEW9[83] = [ // Space Exploration and Colonization
    V('Have you ever watched a rocket launch, live or on video?', 'Вы когда-нибудь смотрели запуск ракеты, вживую или на видео?', 'Зымыранның ұшырылуын тікелей немесе видео арқылы көрдіңіз бе?'),
    V('Do you think ordinary people will travel to space in your lifetime?', 'Как вы думаете, обычные люди полетят в космос при вашей жизни?', 'Сіздің ойыңызша, қарапайым адамдар сіздің өміріңізде ғарышқа сапар шегеді ме?'),
    V('Would you volunteer for a one-way mission to Mars?', 'Вы бы вызвались добровольцем на миссию в один конец на Марс?', 'Марсқа бір бағытты сапарға еріктілікпен барар ма едіңіз?'),
    V('Do you think money spent on space exploration is justified?', 'Как вы думаете, деньги, потраченные на исследование космоса, оправданы?', 'Сіздің ойыңызша, ғарышты зерттеуге жұмсалған қаражат негізделген бе?'),
    V('Have you ever been inspired by a space-related movie or book?', 'Вас когда-нибудь вдохновлял фильм или книга о космосе?', 'Ғарышқа қатысты фильм немесе кітап сізді шабыттандырды ма?'),
    V('Do you think private companies will outperform governments in space exploration?', 'Как вы думаете, частные компании превзойдут правительства в освоении космоса?', 'Сіздің ойыңызша, жеке компаниялар ғарышты игеруде үкіметтерден асып түсе ме?'),
    V('What would worry you most about living on another planet?', 'Что бы вас больше всего беспокоило в жизни на другой планете?', 'Басқа планетада тұру туралы сізді ең көп алаңдататын не нәрсе болар еді?'),
    V('Do you think discovering alien life would change how humans see themselves?', 'Как вы думаете, открытие внеземной жизни изменило бы то, как люди видят себя?', 'Сіздің ойыңызша, ғарыштық тіршілікті ашу адамдардың өздерін көру тәсілін өзгертер ме еді?'),
    V('Would you want your children to consider a career in space exploration?', 'Вы бы хотели, чтобы ваши дети рассмотрели карьеру в исследовании космоса?', 'Балаларыңыздың ғарышты зерттеу саласында мансап құруын қалар ма едіңіз?'),
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
