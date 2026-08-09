<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[234] = [ // The Ethics of Gift-Giving
    V('Do you keep track of what people give you so you can give equally?', 'Вы следите за тем, что вам дарят, чтобы дарить в ответ так же?', 'Тең дәрежеде сыйлау үшін адамдардың сізге не бергенін бақылайсыз ба?'),
    V('Have you ever felt disappointed by a gift someone gave you?', 'Вы когда-нибудь были разочарованы подарком, который вам подарили?', 'Біреу берген сыйлыққа көңіліңіз қалды ма?'),
    V('Do you think gift cards are a thoughtful gift or a lazy one?', 'Как вы думаете, подарочные карты — это продуманный подарок или ленивый?', 'Сіздің ойыңызша, сыйлық карталары ойластырылған сыйлық па, әлде жалқаулық па?'),
    V('Have you ever made a gift by hand instead of buying one?', 'Вы когда-нибудь делали подарок своими руками вместо покупки?', 'Сатып алудың орнына сыйлықты өз қолыңызбен жасадыңыз ба?'),
    V('What is your policy on gift-giving budgets with friends or family?', 'Какой у вас подход к бюджету подарков с друзьями или семьёй?', 'Достарыңызбен немесе отбасыңызбен сыйлық бюджетіне қатысты ұстанымыңыз қандай?'),
    V('Do you think surprise gifts are better than requested ones?', 'Как вы думаете, подарки-сюрпризы лучше, чем те, что попросили?', 'Сіздің ойыңызша, тосын сыйлықтар сұралған сыйлықтардан жақсы ма?'),
    V('Have you ever given a gift anonymously?', 'Вы когда-нибудь дарили подарок анонимно?', 'Анонимді түрде сыйлық бердіңіз бе?'),
    V('What holiday or occasion do you think involves too much gift pressure?', 'Какой праздник или событие, по-вашему, связано со слишком большим давлением по поводу подарков?', 'Сіздің ойыңызша, қандай мереке немесе оқиға сыйлыққа қатысты тым көп қысым тудырады?'),
    V('Would you rather receive an experience or a physical gift?', 'Вы бы предпочли получить впечатление или физический подарок?', 'Тәжірибе алғанды қалайсыз ба, әлде затты сыйлықты ма?'),
];

$NEW9[235] = [ // Coffee Shop Economy
    V('Have you ever worked or studied for hours in a coffee shop?', 'Вы когда-нибудь работали или учились часами в кофейне?', 'Кофеханада сағаттап жұмыс істедіңіз бе немесе оқыдыңыз ба?'),
    V('Do you think coffee prices have become too expensive?', 'Как вы думаете, цены на кофе стали слишком высокими?', 'Сіздің ойыңызша, кофе бағасы тым қымбаттап кетті ме?'),
    V('What makes you choose one coffee shop over another?', 'Что заставляет вас выбирать одну кофейню вместо другой?', 'Бір кофеханады екіншісінен артық көруге сізге не себеп болады?'),
    V('Have you ever had a memorable conversation in a coffee shop?', 'У вас когда-нибудь был запоминающийся разговор в кофейне?', 'Кофеханада есте қалған әңгімеңіз болды ма?'),
    V('Do you think coffee shops should offer free wifi to everyone?', 'Как вы думаете, кофейни должны предлагать бесплатный вайфай всем?', 'Сіздің ойыңызша, кофеханалар барлығына тегін вайфай ұсынуы керек пе?'),
    V('What role do coffee shops play in your daily routine?', 'Какую роль играют кофейни в вашем распорядке дня?', 'Кофеханалар күнделікті тәртібіңізде қандай рөл атқарады?'),
    V('Have you ever opened, or considered opening, your own café?', 'Вы когда-нибудь открывали или рассматривали открытие своего кафе?', 'Өз кафеңізді ашуды ойладыңыз ба немесе аштыңыз ба?'),
    V('Do you think chain coffee shops harm local businesses?', 'Как вы думаете, сетевые кофейни вредят местному бизнесу?', 'Сіздің ойыңызша, желілік кофеханалар жергілікті бизнеске зиян тигізе ме?'),
    V('What is your ideal coffee shop atmosphere?', 'Какая ваша идеальная атмосфера кофейни?', 'Сіздің тамаша кофехана атмосферасы қандай?'),
];

$NEW9[236] = [ // The Rise of Solo Travel
    V('Have you ever eaten alone at a restaurant while traveling?', 'Вы когда-нибудь ели одни в ресторане во время путешествия?', 'Саяхаттап жүргенде мейрамханада жалғыз тамақтандыңыз ба?'),
    V('Do you think solo travelers meet more people than those traveling in groups?', 'Как вы думаете, путешественники-одиночки знакомятся с большим количеством людей, чем группы?', 'Сіздің ойыңызша, жалғыз саяхаттаушылар топпен саяхаттаушыларға қарағанда көбірек адаммен таныса ма?'),
    V('What destination would you feel safest traveling to alone?', 'В какое место вы бы чувствовали себя безопаснее всего путешествуя одни?', 'Жалғыз саяхаттауға ең қауіпсіз сезінетін бағытыңыз қайсы?'),
    V('Have you ever changed your travel plans spontaneously while alone?', 'Вы когда-нибудь спонтанно меняли планы путешествия, будучи одни?', 'Жалғыз жүргенде саяхат жоспарыңызды кенеттен өзгерттіңіз бе?'),
    V('Do you think solo travel is more common now because of social media?', 'Как вы думаете, сольные путешествия стали более распространёнными из-за соцсетей?', 'Сіздің ойыңызша, әлеуметтік желіге байланысты жалғыз саяхаттау көбірек тарады ма?'),
    V('What is the hardest part of traveling alone for you?', 'Что для вас самое трудное в путешествии в одиночку?', 'Жалғыз саяхаттаудың сіз үшін ең қиын бөлігі қандай?'),
    V('Have you ever made a friend while traveling solo?', 'Вы когда-нибудь заводили друга во время сольного путешествия?', 'Жалғыз саяхаттап жүріп дос таптыңыз ба?'),
    V('Would you recommend solo travel to someone who has never done it?', 'Вы бы порекомендовали сольное путешествие тому, кто никогда этого не делал?', 'Ешқашан жасамаған адамға жалғыз саяхаттауды ұсынар ма едіңіз?'),
    V('What is the biggest lesson solo travel could teach a person?', 'Какой самый важный урок может преподать сольное путешествие человеку?', 'Жалғыз саяхат адамға үйрете алатын ең үлкен сабақ қандай?'),
];

$NEW9[237] = [ // Workplace Burnout Prevention
    V('Do you think companies do enough to prevent employee burnout?', 'Как вы думаете, компании делают достаточно для предотвращения выгорания сотрудников?', 'Сіздің ойыңызша, компаниялар қызметкерлердің күйзелісінің алдын алу үшін жеткілікті іс-әрекет жасай ма?'),
    V('Have you ever continued working while feeling completely exhausted?', 'Вы когда-нибудь продолжали работать, чувствуя себя полностью измотанным?', 'Толығымен шаршаған кезде жұмысты жалғастырдыңыз ба?'),
    V('What warning sign of burnout do you notice first in yourself?', 'Какой первый признак выгорания вы замечаете у себя?', 'Өзіңізде күйзелістің қандай алғашқы белгісін байқайсыз?'),
    V('Do you think unlimited vacation policies actually help prevent burnout?', 'Как вы думаете, политика неограниченного отпуска действительно помогает предотвратить выгорание?', 'Сіздің ойыңызша, шексіз демалыс саясаты күйзелістің алдын алуға шынымен көмектесе ме?'),
    V('Have you ever had to change jobs because of burnout?', 'Вам когда-нибудь приходилось менять работу из-за выгорания?', 'Күйзеліске байланысты жұмыс ауыстыруға тура келді ме?'),
    V('What activity outside of work helps you recharge the most?', 'Какое занятие вне работы помогает вам восстановиться больше всего?', 'Жұмыстан тыс қандай әрекет сізге ең көп күш береді?'),
    V('Do you think remote work makes burnout better or worse?', 'Как вы думаете, удалённая работа улучшает или ухудшает выгорание?', 'Сіздің ойыңызша, қашықтан жұмыс күйзелісті жақсарта ма, әлде нашарлата ма?'),
    V('Have you ever supported a coworker who was burned out?', 'Вы когда-нибудь поддерживали коллегу, который выгорел?', 'Күйзеліске ұшыраған әріптесіңізді қолдадыңыз ба?'),
    V('What would an ideal workplace look like for preventing burnout?', 'Как выглядело бы идеальное рабочее место для предотвращения выгорания?', 'Күйзелістің алдын алу үшін тамаша жұмыс орны қандай болар еді?'),
];

$NEW9[238] = [ // The Culture of Complaining
    V('Have you ever complained about something just to bond with someone?', 'Вы когда-нибудь жаловались на что-то просто чтобы сблизиться с кем-то?', 'Біреумен жақындасу үшін ғана бір нәрсеге шағымдандыңыз ба?'),
    V('Do you think social media has increased the culture of complaining?', 'Как вы думаете, соцсети усилили культуру жалоб?', 'Сіздің ойыңызша, әлеуметтік желі шағымдану мәдениетін күшейтті ме?'),
    V('What is something you complain about often but never try to fix?', 'На что вы часто жалуетесь, но никогда не пытаетесь исправить?', 'Жиі шағымданатын, бірақ түзетуге тырыспайтын нәрсеңіз бар ма?'),
    V('Have you ever stopped a conversation because it turned into complaining?', 'Вы когда-нибудь прекращали разговор, потому что он превращался в жалобы?', 'Шағымға айналғандықтан әңгімені тоқтаттыңыз ба?'),
    V('Do you think complaining ever leads to real change?', 'Как вы думаете, жалобы когда-нибудь приводят к реальным переменам?', 'Сіздің ойыңызша, шағымдану нақты өзгеріске әкеле ме?'),
    V('What is the difference between constructive criticism and complaining?', 'В чём разница между конструктивной критикой и жалобой?', 'Конструктивті сын мен шағымданудың айырмашылығы неде?'),
    V('Have you ever been told you complain too much?', 'Вам когда-нибудь говорили, что вы слишком много жалуетесь?', 'Тым көп шағымданатыныңыз туралы сізге айтылды ма?'),
    V('Do you think some cultures complain more openly than others?', 'Как вы думаете, некоторые культуры жалуются более открыто, чем другие?', 'Сіздің ойыңызша, кейбір мәдениеттер басқаларға қарағанда ашығырақ шағымдана ма?'),
    V('What helps you turn a complaint into a solution?', 'Что помогает вам превратить жалобу в решение?', 'Шағымды шешімге айналдыруға сізге не көмектеседі?'),
];

$NEW9[239] = [ // Family Traditions and Change
    V('Have you ever started a completely new tradition in your family?', 'Вы когда-нибудь начинали совершенно новую традицию в своей семье?', 'Отбасыңызда мүлдем жаңа дәстүр бастадыңыз ба?'),
    V('Do you think distance makes it harder to keep family traditions alive?', 'Как вы думаете, расстояние усложняет сохранение семейных традиций?', 'Сіздің ойыңызша, қашықтық отбасылық дәстүрлерді сақтауды қиындата ма?'),
    V('What tradition from your partner\'s family have you adopted?', 'Какую традицию от семьи партнёра вы переняли?', 'Серіктесіңіздің отбасынан қандай дәстүрді қабылдадыңыз?'),
    V('Have you ever disagreed with how your family celebrates something?', 'Вы когда-нибудь не соглашались с тем, как ваша семья что-то празднует?', 'Отбасыңыздың бір нәрсені тойлау тәсілімен келіспей қалдыңыз ба?'),
    V('Do you think younger family members care less about traditions?', 'Как вы думаете, младшие члены семьи меньше заботятся о традициях?', 'Сіздің ойыңызша, отбасының жас мүшелері дәстүрлерге аз мән бере ме?'),
    V('What tradition do you remember most vividly from your childhood?', 'Какую традицию вы ярче всего помните из детства?', 'Балалық шақтан ең жарқын есте қалған дәстүріңіз қандай?'),
    V('Have traditions in your family become simpler or more elaborate over time?', 'Традиции в вашей семье со временем стали проще или сложнее?', 'Отбасыңыздағы дәстүрлер уақыт өте қарапайымдана ма, әлде күрделене ме?'),
    V('Do you think blending traditions from different cultures enriches a family?', 'Как вы думаете, смешение традиций разных культур обогащает семью?', 'Сіздің ойыңызша, әртүрлі мәдениеттердің дәстүрлерін араластыру отбасын байыта ма?'),
    V('What would you do if your children wanted to abandon a family tradition?', 'Что бы вы сделали, если бы ваши дети захотели отказаться от семейной традиции?', 'Балаларыңыз отбасылық дәстүрден бас тартқысы келсе, не істер едіңіз?'),
];

$NEW9[240] = [ // The Psychology of Nostalgia
    V('Do certain places make you feel nostalgic when you visit them?', 'Некоторые места вызывают у вас ностальгию, когда вы их посещаете?', 'Белгілі бір орындарға барғанда ностальгия сезінесіз бе?'),
    V('Have you ever tried to recreate a nostalgic memory and been disappointed?', 'Вы когда-нибудь пытались воссоздать ностальгическое воспоминание и были разочарованы?', 'Ностальгиялық естелікті қайталауға тырысып, көңіліңіз қалды ма?'),
    V('Do you think nostalgia can be harmful if someone dwells on it too much?', 'Как вы думаете, ностальгия может быть вредной, если кто-то слишком много о ней думает?', 'Сіздің ойыңызша, біреу тым көп ойласа, ностальгия зиянды бола ма?'),
    V('What decade do you feel the most nostalgic about, even if you didn\'t live through it?', 'По какому десятилетию вы испытываете наибольшую ностальгию, даже если не жили в нём?', 'Тірі болмасаңыз да, қай онжылдыққа ең көп ностальгия сезінесіз?'),
    V('Have you ever kept an object purely for nostalgic reasons?', 'Вы когда-нибудь хранили предмет исключительно из ностальгических соображений?', 'Тек ностальгия үшін бір затты сақтадыңыз ба?'),
    V('Do you think younger generations will feel nostalgic about today\'s technology?', 'Как вы думаете, молодое поколение будет испытывать ностальгию по сегодняшним технологиям?', 'Сіздің ойыңызша, жас буын бүгінгі технологияға ностальгия сезіне ме?'),
    V('What movie or show always makes you feel nostalgic?', 'Какой фильм или шоу всегда вызывает у вас ностальгию?', 'Қандай фильм немесе шоу сізге әрдайым ностальгия сездіреді?'),
    V('Have you ever reconnected with an old friend because of nostalgia?', 'Вы когда-нибудь восстанавливали связь со старым другом из-за ностальгии?', 'Ностальгияға байланысты ескі досыңызбен қайта байланыстыңыз ба?'),
    V('Do you think nostalgia says more about the past or about how we feel now?', 'Как вы думаете, ностальгия больше говорит о прошлом или о том, что мы чувствуем сейчас?', 'Сіздің ойыңызша, ностальгия өткен туралы көбірек айта ма, әлде қазіргі сезіміміз туралы ма?'),
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
