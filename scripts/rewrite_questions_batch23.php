<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[119] = [ // Cultural Festivals and Events
    V('Have you ever volunteered to help organize a festival?', 'Вы когда-нибудь помогали организовывать фестиваль в качестве волонтёра?', 'Фестивальді ұйымдастыруға еріктілік жасадыңыз ба?'),
    V('Do you think festivals bring communities closer together?', 'Как вы думаете, фестивали сближают сообщества?', 'Сіздің ойыңызша, фестивальдер қауымдастықты жақындастыра ма?'),
    V('What festival food do you look forward to the most?', 'Какую фестивальную еду вы больше всего ждёте?', 'Фестиваль тағамдарының қайсысын ең көп асыға күтесіз?'),
    V('Have you ever traveled to another country just to attend a festival?', 'Вы когда-нибудь ездили в другую страну только для того, чтобы посетить фестиваль?', 'Тек фестивальге қатысу үшін басқа елге бардыңыз ба?'),
    V('Do you think modern festivals have lost their original meaning?', 'Как вы думаете, современные фестивали потеряли свой первоначальный смысл?', 'Сіздің ойыңызша, заманауи фестивальдер бастапқы мағынасын жоғалтты ма?'),
    V('What is a festival tradition you find strange or interesting?', 'Какая фестивальная традиция кажется вам странной или интересной?', 'Сізге қызық немесе таңғаларлық көрінетін фестиваль дәстүрі бар ма?'),
    V('Would you rather attend a music festival or a cultural heritage festival?', 'Вы бы предпочли посетить музыкальный фестиваль или фестиваль культурного наследия?', 'Музыкалық фестивальге барғанды қалайсыз ба, әлде мәдени мұра фестиваліне ме?'),
    V('Have you ever performed at a festival?', 'Вы когда-нибудь выступали на фестивале?', 'Фестивальде өнер көрсеттіңіз бе?'),
    V('What festival would you like to see created in your city?', 'Какой фестиваль вы хотели бы видеть созданным в вашем городе?', 'Қалаңызда қандай фестиваль құрылғанын қалайсыз?'),
];

$NEW9[120] = [ // The Rise of Remote Learning
    V('Do you think remote learning prepares students for real jobs as well as traditional schools?', 'Как вы думаете, дистанционное обучение готовит студентов к работе так же хорошо, как традиционные школы?', 'Сіздің ойыңызша, қашықтықтан оқыту студенттерді дәстүрлі мектеп сияқты нақты жұмысқа дайындай ма?'),
    V('Have you ever cheated or been tempted to cheat during an online exam?', 'Вы когда-нибудь списывали или испытывали соблазн списать на онлайн-экзамене?', 'Онлайн емтиханда алдап көрдіңіз бе немесе соған азғырылдыңыз ба?'),
    V('What technology problem have you faced during online classes?', 'С какой технической проблемой вы сталкивались во время онлайн-занятий?', 'Онлайн сабақтарда қандай техникалық мәселеге тап болдыңыз?'),
    V('Do you think remote learning increases or decreases the education gap between rich and poor?', 'Как вы думаете, дистанционное обучение увеличивает или уменьшает разрыв в образовании между богатыми и бедными?', 'Сіздің ойыңызша, қашықтықтан оқыту бай мен кедей арасындағы білім алшақтығын арттыра ма, әлде азайта ма?'),
    V('Have you ever taught someone online?', 'Вы когда-нибудь учили кого-то онлайн?', 'Біреуді онлайн оқыттыңыз ба?'),
    V('What subject do you think is hardest to teach remotely?', 'Какой предмет, по-вашему, труднее всего преподавать удалённо?', 'Сіздің ойыңызша, қашықтан оқытуға ең қиын пән қайсы?'),
    V('Do you feel more or less confident asking questions online than in person?', 'Вы чувствуете себя увереннее или менее уверенно, задавая вопросы онлайн, чем лично?', 'Онлайн сұрақ қою жеке кездескеннен гөрі сенімдірек сезінесіз бе, әлде керісінше ме?'),
    V('Would you choose a fully online degree over a traditional one?', 'Вы бы выбрали полностью онлайн-диплом вместо традиционного?', 'Толық онлайн дипломды дәстүрліден артық көрер ме едіңіз?'),
    V('What skill do you think remote learning develops better than traditional learning?', 'Какой навык, по-вашему, дистанционное обучение развивает лучше, чем традиционное?', 'Сіздің ойыңызша, қашықтықтан оқыту дәстүрлі оқытудан қандай дағдыны жақсырақ дамытады?'),
];

$NEW9[121] = [ // Wildlife Conservation
    V('Have you ever visited a wildlife sanctuary or reserve?', 'Вы когда-нибудь посещали заповедник или заказник?', 'Жабайы табиғат қорығына бардыңыз ба?'),
    V('Do you think ecotourism helps conservation efforts?', 'Как вы думаете, экотуризм помогает усилиям по охране природы?', 'Сіздің ойыңызша, экотуризм табиғатты қорғау шараларына көмектесе ме?'),
    V('What role should governments play in wildlife protection?', 'Какую роль должны играть правительства в защите дикой природы?', 'Үкіметтер жабайы табиғатты қорғауда қандай рөл атқаруы керек?'),
    V('Have you ever reported illegal wildlife trade or poaching?', 'Вы когда-нибудь сообщали о незаконной торговле дикими животными или браконьерстве?', 'Заңсыз жануарлар саудасы немесе браконьерлік туралы хабарладыңыз ба?'),
    V('Do you think climate change is a bigger threat to wildlife than hunting?', 'Как вы думаете, изменение климата представляет большую угрозу дикой природе, чем охота?', 'Сіздің ойыңызша, климаттың өзгеруі жабайы табиғатқа аңшылықтан үлкен қауіп пе?'),
    V('What species extinction would affect you the most emotionally?', 'Исчезновение какого вида животных затронуло бы вас больше всего эмоционально?', 'Қай түрдің жойылуы сізге эмоционалды тұрғыда ең көп әсер етер еді?'),
    V('Do you support banning products made from endangered animals?', 'Вы поддерживаете запрет на продукцию из вымирающих животных?', 'Жойылу қаупі бар жануарлардан жасалған өнімдерге тыйым салуды қолдайсыз ба?'),
    V('Have you ever changed a habit to help protect wildlife?', 'Вы когда-нибудь меняли привычку, чтобы помочь защитить дикую природу?', 'Жабайы табиғатты қорғауға көмектесу үшін әдетіңізді өзгерттіңіз бе?'),
    V('What conservation success story inspires you?', 'Какая история успеха в области охраны природы вас вдохновляет?', 'Табиғатты қорғаудағы қандай табыс тарихы сізге шабыт береді?'),
];

$NEW9[122] = [ // The Psychology of Color
    V('Do you think color affects how productive you are at work?', 'Как вы думаете, цвет влияет на вашу продуктивность на работе?', 'Сіздің ойыңызша, түс жұмыстағы өнімділігіңізге әсер ете ме?'),
    V('Have you ever chosen a car color for a specific reason?', 'Вы когда-нибудь выбирали цвет машины по определённой причине?', 'Белгілі бір себеппен көлік түсін таңдадыңыз ба?'),
    V('What color do you think represents your personality?', 'Какой цвет, по-вашему, отражает вашу личность?', 'Сіздің ойыңызша, қай түс мінез-құлқыңызды білдіреді?'),
    V('Do you avoid wearing certain colors because of how they make you feel?', 'Вы избегаете носить определённые цвета из-за того, как они заставляют вас себя чувствовать?', 'Белгілі бір түстердің сізді қалай сезіндіретініне байланысты оларды киюден аулақ боласыз ба?'),
    V('Do you think restaurants use color to influence appetite?', 'Как вы думаете, рестораны используют цвет, чтобы влиять на аппетит?', 'Сіздің ойыңызша, мейрамханалар тәбетке әсер ету үшін түсті пайдалана ма?'),
    V('What color combination do you find most pleasing?', 'Какое сочетание цветов вам кажется наиболее приятным?', 'Ең ұнамды түс комбинациясы қандай деп ойлайсыз?'),
    V('Have you ever repainted a room because the color felt wrong?', 'Вы когда-нибудь перекрашивали комнату, потому что цвет казался неподходящим?', 'Түсі дұрыс емес сияқты көрінгендіктен бөлмені қайта бояттыңыз ба?'),
    V('Do you think color therapy is a legitimate treatment?', 'Как вы думаете, цветотерапия — законное лечение?', 'Сіздің ойыңызша, түс терапиясы заңды емдеу түрі ме?'),
    V('What color would you never use to decorate your home?', 'Какой цвет вы бы никогда не использовали для оформления дома?', 'Үйіңізді безендіруге ешқашан пайдаланбайтын түсіңіз қандай?'),
];

$NEW9[123] = [ // Workplace Diversity
    V('Have you ever experienced discrimination at work?', 'Вы когда-нибудь сталкивались с дискриминацией на работе?', 'Жұмыста кемсітушілікке ұшырадыңыз ба?'),
    V('Do you think quotas help or hurt true diversity efforts?', 'Как вы думаете, квоты помогают или вредят настоящим усилиям по разнообразию?', 'Сіздің ойыңызша, квоталар шынайы әртүрлілік шараларына пайдалы ма, әлде зиянды ма?'),
    V('What is the biggest barrier to workplace equality today?', 'Какое самое большое препятствие для равенства на рабочем месте сегодня?', 'Бүгінгі жұмыс орнындағы теңдіктің ең үлкен кедергісі қандай?'),
    V('Have you ever spoken up against unfair treatment at work?', 'Вы когда-нибудь высказывались против несправедливого отношения на работе?', 'Жұмыста әділетсіз қарым-қатынасқа қарсы дауыс көтердіңіз бе?'),
    V('Do you think diversity training programs actually work?', 'Как вы думаете, программы обучения разнообразию действительно работают?', 'Сіздің ойыңызша, әртүрлілік бойынша оқыту бағдарламалары шынымен нәтиже бере ме?'),
    V('What does an inclusive workplace look like to you?', 'Как выглядит инклюзивное рабочее место для вас?', 'Сіз үшін инклюзивті жұмыс орны қандай болуы керек?'),
    V('Have you ever learned something valuable from a coworker with a different background?', 'Вы когда-нибудь узнавали что-то ценное от коллеги с другим происхождением?', 'Басқа тектегі әріптесіңізден құнды нәрсе үйрендіңіз бе?'),
    V('Do you think leadership positions are diverse enough today?', 'Как вы думаете, руководящие должности сегодня достаточно разнообразны?', 'Сіздің ойыңызша, бүгінде басшылық қызметтер жеткілікті әртүрлі ме?'),
    V('What change would make your workplace more inclusive?', 'Какое изменение сделало бы ваше рабочее место более инклюзивным?', 'Қандай өзгеріс жұмыс орныңызды инклюзивтірек ететін еді?'),
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
