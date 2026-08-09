<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[54] = [ // Neighbors and Community
    V('Have your neighbors ever asked you for help?', 'Ваши соседи когда-нибудь просили вас о помощи?', 'Көршілеріңіз сізден көмек сұрады ма?'),
    V('Does your community organize any events or festivals?', 'Ваше сообщество организует какие-либо мероприятия или фестивали?', 'Қауымдастығыңыз қандай да бір іс-шаралар немесе фестивальдер ұйымдастыра ма?'),
    V('Do you feel a sense of belonging where you live?', 'Вы чувствуете принадлежность к месту, где живёте?', 'Тұратын жеріңізде өзіңізді тиесілі сезінесіз бе?'),
    V('Have you ever reported a problem to your local council?', 'Вы когда-нибудь сообщали о проблеме в местную администрацию?', 'Жергілікті әкімшілікке мәселе туралы хабарладыңыз ба?'),
    V('Do you know if there is a community center near you?', 'Вы знаете, есть ли рядом с вами общественный центр?', 'Жаныңызда қоғамдық орталық бар-жоғын білесіз бе?'),
    V('What would make your neighborhood feel more connected?', 'Что сделало бы ваш район более сплочённым?', 'Ауданыңызды бірлескен сезіндіретін не нәрсе болар еді?'),
    V('Have you ever joined a neighborhood group or chat?', 'Вы когда-нибудь присоединялись к соседской группе или чату?', 'Көрші тобына немесе чатқа қосылдыңыз ба?'),
    V('Do you trust the people who live around you?', 'Вы доверяете людям, которые живут рядом с вами?', 'Айналаңызда тұратын адамдарға сенесіз бе?'),
    V('What is one way you could be a better neighbor?', 'Каким одним способом вы могли бы стать лучшим соседом?', 'Жақсырақ көрші болу үшін қандай бір нәрсе істей аласыз?'),
];

$NEW9[55] = [ // Cooking and Recipes
    V('Do you cook from memory or always check a recipe?', 'Вы готовите по памяти или всегда сверяетесь с рецептом?', 'Есте сақтап пісіресіз бе, әлде әрдайым рецептті қарайсыз ба?'),
    V('What ingredient do you always have in your kitchen?', 'Какой ингредиент у вас всегда есть на кухне?', 'Ас үйіңізде әрдайым қандай өнім болады?'),
    V('Have you ever cooked a meal for a special occasion?', 'Вы когда-нибудь готовили блюдо для особого случая?', 'Ерекше жағдай үшін тағам пісірдіңіз бе?'),
    V('Do you enjoy watching cooking shows or videos?', 'Вам нравится смотреть кулинарные шоу или видео?', 'Аспаздық шоуларды немесе видеоларды көргенді ұнатасыз ба?'),
    V('What is a recipe you inherited from your family?', 'Какой рецепт передался вам от семьи?', 'Отбасыңыздан қалған рецепт бар ма?'),
    V('Do you prefer cooking alone or with someone else?', 'Вы предпочитаете готовить одни или с кем-то?', 'Жалғыз пісіргенді ұнатасыз ба, әлде біреумен бе?'),
    V('Have you ever made a big cooking mistake?', 'Вы когда-нибудь допускали серьёзную ошибку в готовке?', 'Тамақ пісіргенде үлкен қате жіберіп алдыңыз ба?'),
    V('What cuisine would you like to learn to cook?', 'Кухню какой страны вы хотели бы научиться готовить?', 'Қай елдің асханасын пісіруді үйренгіңіз келеді?'),
    V('Do you think cooking skills are important for everyone?', 'Как вы думаете, навыки готовки важны для всех?', 'Сіздің ойыңызша, тамақ пісіру дағдысы бәріне маңызды ма?'),
];

$NEW9[56] = [ // At the Bank
    V('Have you ever had a problem with your bank account?', 'У вас когда-нибудь были проблемы с банковским счётом?', 'Банк шотыңызда мәселе болды ма?'),
    V('Do you trust online banking?', 'Вы доверяете онлайн-банкингу?', 'Онлайн-банкингке сенесіз бе?'),
    V('What was the first bank account you ever opened?', 'Какой был ваш первый банковский счёт?', 'Ашқан алғашқы банк шотыңыз қандай болды?'),
    V('Have you ever compared interest rates between banks?', 'Вы когда-нибудь сравнивали процентные ставки в разных банках?', 'Банктер арасында пайыздық мөлшерлемені салыстырдыңыз ба?'),
    V('Do you keep an emergency fund saved?', 'У вас есть сбережения на чёрный день?', 'Төтенше жағдайға арналған жинақыңыз бар ма?'),
    V('What financial advice would you give a young person?', 'Какой финансовый совет вы бы дали молодому человеку?', 'Жас адамға қандай қаржылық кеңес берер едіңіз?'),
    V('Have you ever used a credit card? How do you manage it?', 'Вы когда-нибудь пользовались кредитной картой? Как вы ею управляете?', 'Несиелік картаны пайдаландыңыз ба? Оны қалай басқарасыз?'),
    V('Do you feel confident managing your own finances?', 'Вы уверены в управлении своими финансами?', 'Өз қаржыңызды басқаруға сенімдісіз бе?'),
    V('What would you do if you won a large amount of money?', 'Что бы вы сделали, если бы выиграли крупную сумму денег?', 'Үлкен соманы ұтып алсаңыз, не істер едіңіз?'),
];

$NEW9[57] = [ // Pets and Pet Care
    V('How much money do you think pet care costs each month?', 'Сколько денег, по-вашему, уходит на содержание питомца в месяц?', 'Сіздің ойыңызша, ай сайын үй жануарына қанша ақша жұмсалады?'),
    V('Have you ever fostered an animal temporarily?', 'Вы когда-нибудь временно приютили животное?', 'Жануарды уақытша баптап көрдіңіз бе?'),
    V('Do you think exotic animals should be kept as pets?', 'Как вы думаете, экзотических животных можно держать как питомцев?', 'Сіздің ойыңызша, экзотикалық жануарларды үй жануары ретінде ұстауға бола ма?'),
    V('What is the most challenging part of owning a pet?', 'Что самое трудное в содержании питомца?', 'Үй жануарын ұстаудың ең қиын бөлігі қандай?'),
    V('Have you ever seen a therapy or service animal at work?', 'Вы когда-нибудь видели терапевтическое или служебное животное за работой?', 'Терапиялық немесе қызметтік жануарды жұмыс үстінде көрдіңіз бе?'),
    V('Do you think it\'s better to have one pet or several?', 'Как вы думаете, лучше иметь одного питомца или несколько?', 'Сіздің ойыңызша, бір үй жануары жақсы ма, әлде бірнешеу ме?'),
    V('What would you do if you found a lost pet?', 'Что бы вы сделали, если бы нашли потерявшегося питомца?', 'Адасқан үй жануарын тапсаңыз, не істер едіңіз?'),
    V('Do you follow any pet accounts on social media?', 'Вы подписаны на аккаунты о питомцах в соцсетях?', 'Әлеуметтік желіде үй жануарлары туралы аккаунттарға жазылғансыз ба?'),
    V('How do pets affect a person\'s mental health, in your opinion?', 'Как, по-вашему, питомцы влияют на психическое здоровье человека?', 'Сіздің ойыңызша, үй жануарлары адамның психикалық денсаулығына қалай әсер етеді?'),
];

$NEW9[58] = [ // Celebrations Around the World
    V('Have you ever celebrated a holiday that isn\'t from your culture?', 'Вы когда-нибудь отмечали праздник не своей культуры?', 'Өз мәдениетіңізге жатпайтын мерекені тойладыңыз ба?'),
    V('What celebration involves the most food in your culture?', 'Какой праздник в вашей культуре связан с наибольшим количеством еды?', 'Мәдениетіңізде ең көп тағам болатын мереке қайсы?'),
    V('Do you prefer celebrations indoors or outdoors?', 'Вы предпочитаете праздновать в помещении или на улице?', 'Мерекені үйде тойлағанды ұнатасыз ба, әлде сыртта ма?'),
    V('Have you ever missed an important celebration? How did you feel?', 'Вы когда-нибудь пропускали важный праздник? Что вы чувствовали?', 'Маңызды мерекені жіберіп алдыңыз ба? Өзіңізді қалай сезіндіңіз?'),
    V('What is a celebration you would love to experience someday?', 'Какой праздник вы хотели бы когда-нибудь испытать?', 'Бір күні қатысқыңыз келетін мереке қайсы?'),
    V('Do celebrations in your country involve a lot of music and dancing?', 'Праздники в вашей стране включают много музыки и танцев?', 'Еліңіздегі мерекелерде музыка мен би көп бола ма?'),
    V('What is the most colorful celebration you know of?', 'Какой самый яркий праздник вы знаете?', 'Білетін ең түрлі-түсті мерекеңіз қайсы?'),
    V('Do you give or receive gifts during your favorite celebration?', 'Вы дарите или получаете подарки на любимый праздник?', 'Сүйікті мерекеде сыйлық бересіз бе, әлде аласыз ба?'),
    V('How do celebrations bring communities together, in your opinion?', 'Как, по-вашему, праздники объединяют сообщества?', 'Сіздің ойыңызша, мерекелер қауымдастықты қалай біріктіреді?'),
];

$NEW9[59] = [ // Household Chores
    V('Do you use any tools or machines to make chores easier?', 'Вы используете какие-либо инструменты, чтобы облегчить домашние дела?', 'Үй жұмысын жеңілдету үшін құрал немесе техника пайдаланасыз ба?'),
    V('Have you ever hired someone to help with cleaning?', 'Вы когда-нибудь нанимали кого-то для уборки?', 'Тазалауға көмектесу үшін біреуді жалдадыңыз ба?'),
    V('What chore takes up most of your weekend?', 'Какое дело занимает большую часть ваших выходных?', 'Демалыс күндеріңіздің көбін қандай үй жұмысы алады?'),
    V('Do you and your family argue about chores sometimes?', 'Вы с семьёй иногда спорите из-за домашних дел?', 'Отбасыңызбен үй жұмысына байланысты кейде дауласасыз ба?'),
    V('What is one chore you wish didn\'t exist?', 'Какое домашнее дело вы хотели бы, чтобы не существовало?', 'Болмағанын қалайтын үй жұмысыңыз қандай?'),
    V('Do you reward yourself after finishing chores?', 'Вы вознаграждаете себя после выполнения дел?', 'Үй жұмысын бітіргеннен кейін өзіңізді марапаттайсыз ба?'),
    V('Have your chore habits changed since you were younger?', 'Ваши привычки в домашних делах изменились с юности?', 'Жас кезіңізден бері үй жұмысындағы әдеттеріңіз өзгерді ме?'),
    V('Do you think chores teach children responsibility?', 'Как вы думаете, домашние дела учат детей ответственности?', 'Сіздің ойыңызша, үй жұмысы балаларды жауапкершілікке үйрете ме?'),
    V('What is the most satisfying chore to finish?', 'Какое домашнее дело приносит наибольшее удовлетворение после завершения?', 'Аяқтағанда ең қанағат беретін үй жұмысы қайсы?'),
];

$NEW9[60] = [ // At the Airport and Hotel
    V('Have you ever missed a connecting flight?', 'Вы когда-нибудь пропускали стыковочный рейс?', 'Жалғасатын рейсті жіберіп алдыңыз ба?'),
    V('Do you arrive at the airport early, or just in time?', 'Вы приезжаете в аэропорт заранее или в последний момент?', 'Әуежайға ерте келесіз бе, әлде дәл уақытында ма?'),
    V('What is the best hotel you have ever stayed at?', 'Какой лучший отель, в котором вы останавливались?', 'Тоқтаған ең жақсы қонақүйіңіз қайсы болды?'),
    V('Have you ever had a problem with a hotel booking?', 'У вас когда-нибудь были проблемы с бронированием отеля?', 'Қонақүй брондауда мәселе болды ма?'),
    V('Do you prefer hotels or vacation rentals?', 'Вы предпочитаете отели или аренду жилья на время отпуска?', 'Қонақүйлерді ұнатасыз ба, әлде демалыс үшін жалдамалы үйлерді ме?'),
    V('What do you always pack in your carry-on bag?', 'Что вы всегда кладёте в ручную кладь?', 'Қол жүгіңізге әрдайым не саласыз?'),
    V('Have you ever been upgraded at a hotel or on a flight?', 'Вас когда-нибудь повышали категорию в отеле или на рейсе?', 'Қонақүйде немесе рейсте деңгейіңіз жоғарылатылды ма?'),
    V('Do you tip hotel staff?', 'Вы даёте чаевые персоналу отеля?', 'Қонақүй қызметкерлеріне сый ақы бересіз бе?'),
    V('What makes a hotel stay memorable for you?', 'Что делает пребывание в отеле запоминающимся для вас?', 'Сіз үшін қонақүйде тұруды есте қаларлықтай ететін не нәрсе?'),
];

$NEW9[61] = [ // Music and Instruments
    V('Did you ever take music lessons?', 'Вы когда-нибудь брали уроки музыки?', 'Музыка сабақтарына қатыстыңыз ба?'),
    V('Do you enjoy singing, even if you\'re not great at it?', 'Вам нравится петь, даже если у вас это не очень хорошо получается?', 'Жақсы шықпаса да, ән айтқанды ұнатасыз ба?'),
    V('What instrument do you find the most beautiful to listen to?', 'Какой инструмент вам приятнее всего слушать?', 'Тыңдауға ең әдемі аспап қайсы?'),
    V('Have you ever been part of a band or choir?', 'Вы когда-нибудь были в группе или хоре?', 'Топта немесе хорда болдыңыз ба?'),
    V('Does music help you focus or distract you?', 'Музыка помогает вам сосредоточиться или отвлекает?', 'Музыка сізге назар аударуға көмектесе ме, әлде алаңдата ма?'),
    V('What song reminds you of an important moment in your life?', 'Какая песня напоминает вам о важном моменте в жизни?', 'Қандай ән өміріңіздегі маңызды сәтті еске түсіреді?'),
    V('Do you prefer instrumental music or songs with lyrics?', 'Вы предпочитаете инструментальную музыку или песни со словами?', 'Аспаптық музыканы ұнатасыз ба, әлде сөзді әндерді ме?'),
    V('Have you ever cried while listening to a song?', 'Вы когда-нибудь плакали, слушая песню?', 'Ән тыңдап жатып жылап алдыңыз ба?'),
    V('What music genre do you think will always stay popular?', 'Какой музыкальный жанр, по-вашему, всегда будет популярен?', 'Сіздің ойыңызша, қандай музыка жанры әрдайым танымал болады?'),
];

$NEW9[62] = [ // Emergency Situations
    V('Do you keep a first aid kit at home?', 'У вас дома есть аптечка первой помощи?', 'Үйде алғашқы көмек жинағы бар ма?'),
    V('Have you ever called emergency services?', 'Вы когда-нибудь звонили в экстренные службы?', 'Жедел қызметке қоңырау шалдыңыз ба?'),
    V('Do you know your nearest hospital\'s location?', 'Вы знаете, где находится ближайшая больница?', 'Ең жақын аурухананың орналасуын білесіз бе?'),
    V('What would you do if someone near you fainted?', 'Что бы вы сделали, если бы кто-то рядом с вами упал в обморок?', 'Жаныңызда біреу естен танса, не істер едіңіз?'),
    V('Have you ever practiced a fire drill?', 'Вы когда-нибудь участвовали в пожарной тревоге?', 'Өрт кезіндегі жаттығуға қатыстыңыз ба?'),
    V('Do you have an emergency contact list?', 'У вас есть список экстренных контактов?', 'Төтенше байланыс тізіміңіз бар ма?'),
    V('What is the scariest emergency you have witnessed?', 'Какая самая страшная чрезвычайная ситуация, свидетелем которой вы были?', 'Куә болған ең қорқынышты төтенше жағдайыңыз қандай болды?'),
    V('Do you think people stay calm enough during emergencies?', 'Как вы думаете, люди достаточно спокойны во время чрезвычайных ситуаций?', 'Сіздің ойыңызша, адамдар төтенше жағдайда жеткілікті сабырлы бола ма?'),
    V('What emergency skill would you like to learn?', 'Какому навыку оказания экстренной помощи вы хотели бы научиться?', 'Қандай төтенше жағдай дағдысын үйренгіңіз келеді?'),
];

$NEW9[63] = [ // Farm and Countryside
    V('Have you ever picked fruit or vegetables yourself?', 'Вы когда-нибудь сами собирали фрукты или овощи?', 'Жеміс немесе көкөністі өзіңіз тердіңіз бе?'),
    V('Do you think city people understand farm life?', 'Как вы думаете, городские жители понимают жизнь на ферме?', 'Сіздің ойыңызша, қала тұрғындары фермадағы өмірді түсіне ме?'),
    V('What is the biggest challenge for farmers today?', 'Какая самая большая трудность для фермеров сегодня?', 'Бүгінгі фермерлердің ең үлкен қиындығы қандай?'),
    V('Have you ever ridden a horse or another farm animal?', 'Вы когда-нибудь ездили верхом на лошади или другом животном?', 'Атқа немесе басқа мал жануарына мініп көрдіңіз бе?'),
    V('Do you buy food directly from farmers sometimes?', 'Вы иногда покупаете еду напрямую у фермеров?', 'Кейде тағамды тікелей фермерлерден сатып аласыз ба?'),
    V('What do you think country life is missing compared to city life?', 'Чего, по-вашему, не хватает сельской жизни по сравнению с городской?', 'Сіздің ойыңызша, ауыл өмірінде қалалық өмірмен салыстырғанда не жетіспейді?'),
    V('Have you ever helped with farm work?', 'Вы когда-нибудь помогали с работой на ферме?', 'Ферма жұмысына көмектестіңіз бе?'),
    V('Do you enjoy the smell and sounds of the countryside?', 'Вам нравятся запахи и звуки сельской местности?', 'Ауыл жерінің иісі мен дыбыстарын ұнатасыз ба?'),
    V('Would you ever consider becoming a farmer?', 'Вы бы когда-нибудь рассмотрели возможность стать фермером?', 'Фермер болуды қарастырар ма едіңіз?'),
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
