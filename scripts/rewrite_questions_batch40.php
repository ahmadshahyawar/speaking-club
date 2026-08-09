<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[199] = [ // The Rise of Micro-Influencers
    V('Have you ever bought something because a micro-influencer recommended it?', 'Вы когда-нибудь покупали что-то, потому что микро-инфлюенсер это рекомендовал?', 'Микро-инфлюенсер ұсынғандықтан бір затты сатып алдыңыз ба?'),
    V('Do you think brands prefer micro-influencers because they seem more genuine?', 'Как вы думаете, бренды предпочитают микро-инфлюенсеров, потому что они кажутся более искренними?', 'Сіздің ойыңызша, бренд шынайырақ көрінгендіктен микро-инфлюенсерлерді таңдай ма?'),
    V('Have you ever unfollowed a creator after they started too many sponsorships?', 'Вы когда-нибудь отписывались от блогера после того, как он начал слишком много рекламировать?', 'Тым көп жарнама жасай бастаған автордан жазылымды алып тастадыңыз ба?'),
    V('Do you think being a micro-influencer counts as a "real job"?', 'Как вы думаете, быть микро-инфлюенсером считается «настоящей работой»?', 'Сіздің ойыңызша, микро-инфлюенсер болу "нақты жұмыс" болып саналады ма?'),
    V('Have you ever felt tricked by an "authentic" post that was actually paid?', 'Вы когда-нибудь чувствовали себя обманутым «искренним» постом, который на самом деле был оплачен?', 'Шындығында ақылы болған "шынайы" жазбаға алданғандай сезіндіңіз бе?'),
    V('Do you think engagement matters more than follower count for brands now?', 'Как вы думаете, вовлечённость сейчас важнее количества подписчиков для брендов?', 'Сіздің ойыңызша, бренд үшін қазір қатысу жазылушылар санынан маңыздырақ па?'),
    V('Would you trust a micro-influencer\'s opinion over a friend\'s?', 'Вы бы доверяли мнению микро-инфлюенсера больше, чем мнению друга?', 'Микро-инфлюенсердің пікіріне досыңыздың пікірінен гөрі сенер ме едіңіз?'),
    V('Have you ever considered starting your own small online following?', 'Вы когда-нибудь думали о создании своей небольшой аудитории онлайн?', 'Өзіңіздің шағын онлайн жазылушыларыңызды бастауды қарастырдыңыз ба?'),
    V('What makes you stop trusting an influencer\'s recommendations?', 'Что заставляет вас перестать доверять рекомендациям инфлюенсера?', 'Инфлюенсердің ұсыныстарына сенуді тоқтатуыңызға не себеп болады?'),
];

$NEW9[200] = [ // Work Burnout Culture
    V('Have you ever bragged about how busy or tired you were?', 'Вы когда-нибудь хвастались тем, насколько заняты или устали?', 'Қаншалықты бос емес немесе шаршағаныңыз туралы мақтандыңыз ба?'),
    V('Do you think taking a proper lunch break makes you look less committed at work?', 'Как вы думаете, полноценный обеденный перерыв делает вас менее преданным работе в глазах других?', 'Сіздің ойыңызша, толық түскі үзіліс жасау жұмысқа берілгендігіңізді азайтады ма?'),
    V('Have you ever ignored physical symptoms of stress until they got worse?', 'Вы когда-нибудь игнорировали физические симптомы стресса, пока они не ухудшились?', 'Стресстің дене белгілерін нашарлағанша елемей келдіңіз бе?'),
    V('Do you think your workplace actually supports taking time off?', 'Как вы думаете, ваше рабочее место действительно поддерживает взятие отгулов?', 'Сіздің ойыңызша, жұмыс орныңыз демалыс алуды шынымен қолдай ма?'),
    V('Have you ever felt guilty for resting on a weekend?', 'Вы когда-нибудь чувствовали вину за отдых на выходных?', 'Демалыс күні тынығып жатқаныңызға кінәлі сезіндіңіз бе?'),
    V('Do you think social media promotes an unhealthy image of constant productivity?', 'Как вы думаете, соцсети продвигают нездоровый образ постоянной продуктивности?', 'Сіздің ойыңызша, әлеуметтік желі үздіксіз өнімділіктің зиянды бейнесін насихаттай ма?'),
    V('Have you ever had to explain to someone why you needed a break?', 'Вам когда-нибудь приходилось объяснять кому-то, почему вам нужен перерыв?', 'Демалыс керек екенін біреуге түсіндіруге тура келді ме?'),
    V('Do you think younger workers are pushing back against hustle culture more than older ones?', 'Как вы думаете, молодые работники сопротивляются культуре «хастла» больше, чем старшие?', 'Сіздің ойыңызша, жас қызметкерлер "асыра еңбек" мәдениетіне үлкендерге қарағанда көбірек қарсы шыға ма?'),
    V('What would a truly balanced week look like for you?', 'Как бы выглядела по-настоящему сбалансированная неделя для вас?', 'Сіз үшін шынымен теңгерімді апта қандай болар еді?'),
];

$NEW9[201] = [ // The Future of Currency
    V('Have you ever paid for something entirely without cash for a whole week?', 'Вы когда-нибудь платили за всё без наличных целую неделю?', 'Бір апта бойы тек қолма-қол ақшасыз төлем жасадыңыз ба?'),
    V('Do you think older generations will ever fully trust digital currency?', 'Как вы думаете, старшее поколение когда-нибудь полностью будет доверять цифровой валюте?', 'Сіздің ойыңызша, үлкен ұрпақ цифрлық валютаға толық сенеді ме?'),
    V('Have you ever lost money because of a currency\'s value dropping suddenly?', 'Вы когда-нибудь теряли деньги из-за внезапного падения курса валюты?', 'Валютаның құнының кенеттен түсуінен ақша жоғалттыңыз ба?'),
    V('Do you think a country could function well with no physical cash at all?', 'Как вы думаете, страна могла бы хорошо функционировать без физических наличных вообще?', 'Сіздің ойыңызша, ел мүлдем қолма-қол ақшасыз жақсы жұмыс істей ала ма?'),
    V('Would you trust a currency created by a company instead of a government?', 'Вы бы доверяли валюте, созданной компанией, а не государством?', 'Үкіметтің орнына компания жасаған валютаға сенер ме едіңіз?'),
    V('Have you ever explained cryptocurrency to someone who didn\'t understand it?', 'Вы когда-нибудь объясняли криптовалюту тому, кто её не понимал?', 'Криптовалютаны түсінбейтін адамға түсіндірдіңіз бе?'),
    V('Do you think digital currency makes it easier or harder to track illegal activity?', 'Как вы думаете, цифровая валюта облегчает или усложняет отслеживание незаконной деятельности?', 'Сіздің ойыңызша, цифрлық валюта заңсыз әрекетті бақылауды жеңілдете ме, әлде қиындата ма?'),
    V('Would you feel safe storing your savings entirely in digital form?', 'Вы бы чувствовали себя в безопасности, храня все свои сбережения в цифровой форме?', 'Жинақтарыңызды толығымен цифрлық түрде сақтау сізге қауіпсіз сезінер ме еді?'),
    V('What would convince you to start using cryptocurrency regularly?', 'Что убедило бы вас регулярно использовать криптовалюту?', 'Криптовалютаны тұрақты пайдалануды бастауға не сендіре алар еді?'),
];

$NEW9[202] = [ // Parenting in the Digital Age
    V('Have you ever taken away a child\'s device as a form of discipline?', 'Вы когда-нибудь забирали устройство у ребёнка в качестве наказания?', 'Тәртіп үшін баланың құрылғысын тартып алдыңыз ба?'),
    V('Do you think parents today share too much about their children online?', 'Как вы думаете, родители сегодня делятся слишком многим о своих детях онлайн?', 'Сіздің ойыңызша, бүгінгі ата-аналар балалары туралы желіде тым көп бөліседі ме?'),
    V('Have you ever worried about who your child is talking to online?', 'Вы когда-нибудь беспокоились о том, с кем ваш ребёнок общается онлайн?', 'Балаңыздың желіде кіммен сөйлесіп жатқанына алаңдадыңыз ба?'),
    V('Do you think schools should teach digital citizenship as its own subject?', 'Как вы думаете, школы должны преподавать цифровую грамотность как отдельный предмет?', 'Сіздің ойыңызша, мектептер цифрлық азаматтықты жеке пән ретінде оқытуы керек пе?'),
    V('Have you ever caught yourself using your phone too much around children?', 'Вы когда-нибудь замечали, что слишком много пользуетесь телефоном рядом с детьми?', 'Балалардың қасында телефонды тым көп пайдаланып жатқаныңызды байқадыңыз ба?'),
    V('Do you think video games are unfairly blamed for children\'s behavior?', 'Как вы думаете, видеоигры несправедливо обвиняют в поведении детей?', 'Сіздің ойыңызша, видео ойындар балалардың мінез-құлқы үшін әділетсіз кінәлана ма?'),
    V('Would you track your child\'s location through their phone?', 'Вы бы отслеживали местоположение своего ребёнка через его телефон?', 'Баланың орналасқан жерін телефоны арқылы бақылар ма едіңіз?'),
    V('Do you think it\'s harder to parent now than it was a generation ago?', 'Как вы думаете, сейчас растить детей труднее, чем поколение назад?', 'Сіздің ойыңызша, қазір ата-ана болу бір ұрпақ бұрынғыдан қиынырақ па?'),
    V('What is one digital rule you would enforce strictly as a parent?', 'Какое одно цифровое правило вы бы строго соблюдали как родитель?', 'Ата-ана ретінде қатаң сақтайтын бір цифрлық ережеңіз қандай болар еді?'),
];

$NEW9[203] = [ // The Meaning of Success
    V('Have you ever achieved a goal and felt disappointed afterward?', 'Вы когда-нибудь достигали цели и чувствовали разочарование после этого?', 'Мақсатыңызға жетіп, содан кейін көңіліңіз қалды ма?'),
    V('Do you think failure has taught you more than success has?', 'Как вы думаете, неудача научила вас большему, чем успех?', 'Сіздің ойыңызша, сәтсіздік сізге табыстан гөрі көбірек үйретті ме?'),
    V('Have you ever admired someone whose life looked nothing like traditional success?', 'Вы когда-нибудь восхищались кем-то, чья жизнь совсем не была похожа на традиционный успех?', 'Өмірі дәстүрлі табысқа мүлдем ұқсамайтын адамға сүйсіндіңіз бе?'),
    V('Do you think success looks different for men and women in your culture?', 'Как вы думаете, успех выглядит по-разному для мужчин и женщин в вашей культуре?', 'Сіздің ойыңызша, мәдениетіңізде табыс ерлер мен әйелдер үшін әртүрлі көрінеді ме?'),
    V('Have you ever redefined success after a major life change?', 'Вы когда-нибудь пересматривали понятие успеха после крупных перемен в жизни?', 'Үлкен өмірлік өзгерістен кейін табыс түсінігіңізді қайта анықтадыңыз ба?'),
    V('Do you think helping others is a form of success in itself?', 'Как вы думаете, помощь другим сама по себе является формой успеха?', 'Сіздің ойыңызша, басқаларға көмектесу өзі бір табыс түрі ме?'),
    V('Have you ever felt pressure from family to pursue a specific version of success?', 'Вы когда-нибудь чувствовали давление семьи стремиться к определённой версии успеха?', 'Отбасыңыздан белгілі бір табыс түрін ұстануға қысым сезіндіңіз бе?'),
    V('Do you think it\'s possible to be successful and still feel unfulfilled?', 'Как вы думаете, возможно быть успешным и всё же чувствовать себя нереализованным?', 'Сіздің ойыңызша, табысты бола тұра өзін толық жүзеге аспаған сезінуге бола ма?'),
    V('What would make you feel, at the end of your life, that you had succeeded?', 'Что заставило бы вас в конце жизни почувствовать, что вы преуспели?', 'Өмір соңында табысқа жеткеніңізді сезінуге не себеп болар еді?'),
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
