<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[151] = [ // School Subjects
    V('Did you take any music or art classes?', 'Вы посещали уроки музыки или рисования?', 'Музыка немесе сурет сабақтарына қатыстыңыз ба?'),
    V('What foreign languages did you study at school?', 'Какие иностранные языки вы изучали в школе?', 'Мектепте қандай шет тілдерін оқыдыңыз?'),
    V('Was physical education your favorite or least favorite class?', 'Физкультура была вашим любимым или нелюбимым уроком?', 'Дене шынықтыру сабағы сүйікті пәніңіз болды ма, әлде керісінше ме?'),
    V('Did you enjoy science experiments?', 'Вам нравились научные эксперименты?', 'Ғылыми тәжірибелерді ұнататынсыз ба?'),
    V('Was there a subject you found surprisingly interesting?', 'Был ли предмет, который оказался неожиданно интересным?', 'Күтпеген жерден қызықты болып шыққан пән болды ма?'),
    V('Do you think schools should teach more practical skills?', 'Как вы думаете, школы должны учить больше практическим навыкам?', 'Сіздің ойыңызша, мектептер тәжірибелік дағдыларды көбірек үйретуі керек пе?'),
    V('What subject do you think is most useful for real life?', 'Какой предмет, по-вашему, самый полезный в жизни?', 'Сіздің ойыңызша, өмірде ең пайдалы пән қайсы?'),
    V('Did you have a favorite teacher for a certain subject?', 'У вас был любимый учитель по какому-то предмету?', 'Белгілі бір пән бойынша сүйікті мұғаліміңіз болды ма?'),
    V('What subject would you like your children to focus on?', 'На каком предмете вы хотели бы, чтобы сосредоточились ваши дети?', 'Балаларыңыздың қай пәнге көбірек көңіл бөлгенін қалайсыз?'),
];

$NEW9[152] = [ // Simple Comparisons
    V('Is English easier or harder than you expected?', 'Английский язык оказался легче или труднее, чем вы ожидали?', 'Ағылшын тілі күткеніңізден жеңіл бе, әлде қиын ба?'),
    V('Do you eat healthier now than you did in the past?', 'Вы едите более здоровую пищу сейчас, чем раньше?', 'Қазір бұрынғыға қарағанда дұрыс тамақтанасыз ба?'),
    V('Is your job more stressful than your previous one?', 'Ваша работа более стрессовая, чем предыдущая?', 'Қазіргі жұмысыңыз бұрынғыдан стресстірек пе?'),
    V('Are you more confident now than you were a few years ago?', 'Вы более уверены в себе сейчас, чем несколько лет назад?', 'Бірнеше жыл бұрынғыға қарағанда қазір өзіңізге сенімдірексіз бе?'),
    V('Do you sleep more or less than you used to?', 'Вы спите больше или меньше, чем раньше?', 'Бұрынғыдан көп ұйықтайсыз ба, әлде аз ба?'),
    V('Is your hometown quieter or louder than a big city?', 'Ваш родной город тише или шумнее, чем большой город?', 'Туған қалаңыз үлкен қалаға қарағанда тыныш па, әлде шулы ма?'),
    V('Are your friends today different from your childhood friends?', 'Ваши нынешние друзья отличаются от друзей детства?', 'Қазіргі достарыңыз балалық шақтағы достарыңыздан өзгеше ме?'),
    V('Do you save more money now than before?', 'Вы копите больше денег сейчас, чем раньше?', 'Қазір бұрынғыдан көп ақша жинайсыз ба?'),
    V('Is your English better than your other foreign language skills?', 'Ваш английский лучше, чем другие иностранные языки, которые вы знаете?', 'Ағылшын тіліңіз білетін басқа шет тілдеріңізден жақсы ма?'),
];

$NEW9[153] = [ // Family Roles
    V('Who is the youngest person in your extended family?', 'Кто самый младший в вашей большой семье?', 'Үлкен отбасыңыздағы ең кіші адам кім?'),
    V('Does your family have a leader or decision-maker?', 'В вашей семье есть лидер или человек, принимающий решения?', 'Отбасыңызда шешім қабылдайтын көшбасшы бар ма?'),
    V('Who tells the best stories in your family?', 'Кто лучше всех рассказывает истории в вашей семье?', 'Отбасыңызда ең тамаша әңгіме айтатын кім?'),
    V('Are you closer to your mother\'s side or your father\'s side?', 'Вы ближе к родне матери или отца?', 'Ана жағыңызға жақынсыз ба, әлде әке жағыңызға ма?'),
    V('Who in your family do you go to for advice?', 'К кому в семье вы обращаетесь за советом?', 'Отбасыңызда кеңес сұрау үшін кімге барасыз?'),
    V('Does your family have a family business or tradition passed down?', 'В вашей семье есть семейный бизнес или передаваемая традиция?', 'Отбасыңызда ұрпақтан ұрпаққа берілетін бизнес немесе дәстүр бар ма?'),
    V('Do you have a twin or someone who looks like you in your family?', 'У вас есть близнец или кто-то похожий на вас в семье?', 'Отбасыңызда егіздеріңіз немесе сізге ұқсас адам бар ма?'),
    V('Who is the funniest person in your family?', 'Кто самый смешной человек в вашей семье?', 'Отбасыңыздағы ең күлкілі адам кім?'),
    V('Do family members often disagree with each other?', 'Члены вашей семьи часто спорят друг с другом?', 'Отбасы мүшелері бір-бірімен жиі келіспей қала ма?'),
];

$NEW9[154] = [ // Rooms and Furniture
    V('What furniture do you keep in your living room?', 'Какая мебель у вас в гостиной?', 'Қонақ бөлмеңізде қандай жиһаз бар?'),
    V('Do you decorate your rooms with plants or pictures?', 'Вы украшаете комнаты растениями или картинами?', 'Бөлмелеріңізді өсімдіктермен немесе суреттермен безендіресіз бе?'),
    V('Have you ever built furniture yourself?', 'Вы когда-нибудь собирали мебель сами?', 'Жиһазды өзіңіз құрастырып көрдіңіз бе?'),
    V('What is the most comfortable piece of furniture you own?', 'Какая мебель у вас самая удобная?', 'Иеленген ең ыңғайлы жиһазыңыз қандай?'),
    V('Do you rearrange your furniture often?', 'Вы часто переставляете мебель?', 'Жиһазыңызды жиі қайта орналастырасыз ба?'),
    V('What room in your house has the least furniture?', 'В какой комнате вашего дома меньше всего мебели?', 'Үйіңіздің қай бөлмесінде жиһаз ең аз?'),
    V('Do you prefer wooden or modern-style furniture?', 'Вы предпочитаете деревянную мебель или в современном стиле?', 'Ағаш жиһазды ұнатасыз ба, әлде заманауи стильді ме?'),
    V('Have you ever received furniture as a gift?', 'Вам когда-нибудь дарили мебель?', 'Сыйға жиһаз алдыңыз ба?'),
    V('What furniture do you think every home needs?', 'Какая мебель, по-вашему, нужна каждому дому?', 'Сіздің ойыңызша, әр үйге қандай жиһаз керек?'),
];

$NEW9[155] = [ // Travel Items
    V('Do you bring your own snacks when you travel?', 'Вы берёте с собой еду, когда путешествуете?', 'Саяхаттағанда өзіңізбен тағам аласыз ба?'),
    V('What electronic device do you always bring on trips?', 'Какое электронное устройство вы всегда берёте в поездки?', 'Сапарға әрқашан қандай электронды құрылғы аласыз?'),
    V('Have you ever traveled with too much luggage?', 'Вы когда-нибудь путешествовали со слишком большим багажом?', 'Тым көп жүкпен саяхаттап көрдіңіз бе?'),
    V('Do you buy souvenirs when you travel?', 'Вы покупаете сувениры, когда путешествуете?', 'Саяхаттағанда сувенир сатып аласыз ба?'),
    V('What is one item you never forget to pack?', 'Какую вещь вы никогда не забываете взять с собой?', 'Жинауды ешқашан ұмытпайтын затыңыз қандай?'),
    V('Do you keep a travel bag ready at home?', 'У вас дома всегда готова дорожная сумка?', 'Үйде әрдайым дайын саяхат сөмкеңіз бар ма?'),
    V('Have you ever borrowed a travel item from a friend?', 'Вы когда-нибудь брали вещь для путешествия у друга?', 'Досыңыздан саяхатқа арналған зат қарызға алдыңыз ба?'),
    V('What do you wear on long flights or trips?', 'Что вы надеваете на долгие перелёты или поездки?', 'Ұзақ ұшу немесе сапарда не киесіз?'),
    V('Is there an item you wish you had brought on a past trip?', 'Есть ли вещь, которую вы хотели бы взять в прошлую поездку?', 'Өткен сапарда алып жүргіңіз келген зат бар ма?'),
];

$NEW9[156] = [ // Talking About the Weather Today
    V('Did the weather match the forecast today?', 'Погода сегодня совпала с прогнозом?', 'Бүгінгі ауа райы болжаммен сәйкес келді ме?'),
    V('Do you dress differently depending on the weather?', 'Вы одеваетесь по-разному в зависимости от погоды?', 'Ауа райына қарай басқаша киінесіз бе?'),
    V('Does today\'s weather make you want to stay inside?', 'Сегодняшняя погода заставляет вас хотеть остаться дома?', 'Бүгінгі ауа райы үйде қалғыңызды келтіре ме?'),
    V('What is your ideal weather for a walk outside?', 'Какая погода для вас идеальна для прогулки?', 'Серуендеу үшін сіздің тамаша ауа райыңыз қандай?'),
    V('Do you enjoy watching storms from indoors?', 'Вам нравится наблюдать за грозой из дома?', 'Дауылды үйден бақылағанды ұнатасыз ба?'),
    V('Has today\'s weather affected your mood?', 'Сегодняшняя погода повлияла на ваше настроение?', 'Бүгінгі ауа райы көңіл-күйіңізге әсер етті ме?'),
    V('What season does today\'s weather remind you of?', 'Какое время года напоминает вам сегодняшняя погода?', 'Бүгінгі ауа райы сізге қай мезгілді еске түсіреді?'),
    V('Do you take an umbrella with you just in case?', 'Вы берёте зонт с собой на всякий случай?', 'Сақтық үшін қолшатыр аласыз ба?'),
    V('Would today be a good day for a picnic?', 'Сегодня был бы хороший день для пикника?', 'Бүгін пикникке жақсы күн бола ма?'),
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
