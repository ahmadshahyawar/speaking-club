<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[204] = [ // Talking About Pets
    V('Did you have a pet as a child?', 'У вас был питомец в детстве?', 'Балалық шағыңызда үй жануарыңыз болды ма?'),
    V('What is your pet\'s name, if you have one?', 'Как зовут вашего питомца, если он у вас есть?', 'Үй жануарыңыздың аты кім, егер бар болса?'),
    V('Do you take your pet to the vet regularly?', 'Вы регулярно водите питомца к ветеринару?', 'Үй жануарыңызды тұрақты түрде ветеринарға апарасыз ба?'),
    V('Have you ever trained a pet to do a trick?', 'Вы когда-нибудь учили питомца трюку?', 'Үй жануарыңызды бір нәрсеге үйреттіңіз бе?'),
    V('Do you think pets should sleep in the bedroom?', 'Как вы думаете, питомцы должны спать в спальне?', 'Сіздің ойыңызша, үй жануарлары жатын бөлмеде ұйықтауы керек пе?'),
    V('What is the most unusual pet you have ever seen?', 'Какой самый необычный питомец, которого вы видели?', 'Көрген ең ерекше үй жануарыңыз қандай болды?'),
    V('Do you talk to your pet as if it understands you?', 'Вы разговариваете с питомцем, как будто он вас понимает?', 'Үй жануарыңызбен сізді түсінетіндей сөйлесесіз бе?'),
    V('Have you ever lost a pet?', 'Вы когда-нибудь теряли питомца?', 'Үй жануарыңызды жоғалтып алдыңыз ба?'),
    V('Would you rather have a big pet or a small pet?', 'Вы бы предпочли большого питомца или маленького?', 'Үлкен үй жануарын ұнатасыз ба, әлде кішкентайды ма?'),
];

$NEW9[205] = [ // My Favorite Season
    V('Which season is the shortest where you live?', 'Какое время года самое короткое там, где вы живёте?', 'Тұратын жеріңізде ең қысқа мезгіл қайсы?'),
    V('Do you feel more energetic in a certain season?', 'Вы чувствуете себя энергичнее в определённое время года?', 'Белгілі бір мезгілде өзіңізді энергиялы сезінесіз бе?'),
    V('What food do you enjoy most in your favorite season?', 'Какую еду вы больше всего любите в своё любимое время года?', 'Сүйікті мезгіліңізде қандай тағамды ең көп ұнатасыз?'),
    V('Does your mood change with the seasons?', 'Ваше настроение меняется в зависимости от времени года?', 'Көңіл-күйіңіз мезгілге қарай өзгере ме?'),
    V('Have you ever traveled somewhere just to experience a different season?', 'Вы когда-нибудь путешествовали, чтобы застать другое время года?', 'Басқа мезгілді көру үшін арнайы саяхаттадыңыз ба?'),
    V('What season do most people in your country dislike?', 'Какое время года не любит большинство людей в вашей стране?', 'Еліңіздегі адамдардың көбі қай мезгілді ұнатпайды?'),
    V('Do you decorate your home differently for each season?', 'Вы по-разному украшаете дом в разное время года?', 'Үйіңізді әр мезгілге қарай басқаша безендіресіз бе?'),
    V('Is there a season you wish lasted longer?', 'Есть ли время года, которое вы хотели бы продлить?', 'Ұзағырақ болғанын қалайтын мезгіліңіз бар ма?'),
    V('What outdoor activity do you only do in one season?', 'Каким занятием на улице вы занимаетесь только в одно время года?', 'Тек бір мезгілде ғана істейтін сыртқы әрекетіңіз қандай?'),
];

$NEW9[206] = [ // At the Restaurant
    V('Have you ever complained about food at a restaurant?', 'Вы когда-нибудь жаловались на еду в ресторане?', 'Мейрамханада тағамға шағымдандыңыз ба?'),
    V('Do you try new restaurants often, or go to the same ones?', 'Вы часто пробуете новые рестораны или ходите в одни и те же?', 'Жаңа мейрамханаларды жиі сынайсыз ба, әлде бір мейрамханаға барасыз ба?'),
    V('What is your go-to order at your favorite restaurant?', 'Что вы обычно заказываете в любимом ресторане?', 'Сүйікті мейрамханаңызда әдетте не тапсырыс бересіз?'),
    V('Do you enjoy eating alone at a restaurant?', 'Вам нравится есть в ресторане одному?', 'Мейрамханада жалғыз тамақтанғанды ұнатасыз ба?'),
    V('Have you ever waited a long time for your food?', 'Вы когда-нибудь долго ждали свою еду?', 'Тамағыңызды ұзақ күткеніңіз болды ма?'),
    V('Do you prefer fast food or fine dining?', 'Вы предпочитаете фастфуд или изысканную кухню?', 'Фастфудты ұнатасыз ба, әлде талғампаз мейрамхананы ма?'),
    V('What is the best meal you have had at a restaurant?', 'Какая лучшая еда, которую вы пробовали в ресторане?', 'Мейрамханада ішкен ең дәмді тағамыңыз қандай болды?'),
    V('Do you check reviews before choosing a restaurant?', 'Вы смотрите отзывы перед выбором ресторана?', 'Мейрамхана таңдамас бұрын пікірлерді қарайсыз ба?'),
    V('Have you ever sent food back because it wasn\'t right?', 'Вы когда-нибудь возвращали еду, потому что она была неправильной?', 'Дұрыс дайындалмағаны үшін тағамды кері қайтарғаныңыз болды ма?'),
];

$NEW9[207] = [ // Simple Sports
    V('What sport did you play as a child?', 'Каким видом спорта вы занимались в детстве?', 'Балалық шағыңызда қандай спортпен айналыстыңыз?'),
    V('Do you enjoy watching sports on TV?', 'Вам нравится смотреть спорт по телевизору?', 'Теледидардан спорт көргенді ұнатасыз ба?'),
    V('Have you ever attended a live sports match?', 'Вы когда-нибудь были на спортивном матче вживую?', 'Спорттық матчқа тікелей барып көрдіңіз бе?'),
    V('What sport would you like to try for the first time?', 'Каким видом спорта вы хотели бы заняться впервые?', 'Алғаш рет қандай спорт түрін сынап көргіңіз келеді?'),
    V('Do you think sports are important for children?', 'Как вы думаете, спорт важен для детей?', 'Сіздің ойыңызша, спорт балалар үшін маңызды ма?'),
    V('Have you ever gotten injured while playing a sport?', 'Вы когда-нибудь получали травму во время спорта?', 'Спортпен айналысқанда жарақат алдыңыз ба?'),
    V('Do you prefer team sports or individual sports?', 'Вы предпочитаете командные виды спорта или индивидуальные?', 'Топтық спортты ұнатасыз ба, әлде жеке спортты ма?'),
    V('What sport is most popular in your country?', 'Какой вид спорта самый популярный в вашей стране?', 'Еліңізде ең танымал спорт түрі қайсы?'),
    V('Do you exercise as much as you would like to?', 'Вы занимаетесь спортом столько, сколько хотели бы?', 'Қалағаныңыздай жаттығасыз ба?'),
];

$NEW9[208] = [ // My Neighbors
    V('Have your neighbors ever helped you?', 'Ваши соседи когда-нибудь помогали вам?', 'Көршілеріңіз сізге көмектесті ме?'),
    V('Do you invite your neighbors over sometimes?', 'Вы иногда приглашаете соседей в гости?', 'Кейде көршілеріңізді қонаққа шақырасыз ба?'),
    V('Has a neighbor ever complained about noise from your home?', 'Сосед когда-нибудь жаловался на шум из вашего дома?', 'Көрші үйіңізден шыққан шуға шағымданды ма?'),
    V('Do you know if your neighbors have children or pets?', 'Вы знаете, есть ли у соседей дети или питомцы?', 'Көршілеріңізде бала немесе үй жануары бар-жоғын білесіз бе?'),
    V('Have you ever had a disagreement with a neighbor?', 'У вас когда-нибудь были разногласия с соседом?', 'Көршіңізбен түсінбестік болды ма?'),
    V('Do you feel comfortable asking a neighbor for a favor?', 'Вам комфортно просить соседа об услуге?', 'Көршіден өтініш сұрау сізге ыңғайлы ма?'),
    V('How long have your current neighbors lived nearby?', 'Как долго ваши нынешние соседи живут рядом?', 'Қазіргі көршілеріңіз жанында қанша уақыттан бері тұрады?'),
    V('Do neighbors in your area organize community events?', 'Соседи в вашем районе организуют мероприятия для сообщества?', 'Ауданыңыздағы көршілер қауымдастық іс-шараларын ұйымдастыра ма?'),
    V('What makes a good neighbor, in your opinion?', 'Что, по-вашему, делает соседа хорошим?', 'Сіздің ойыңызша, жақсы көршіні қандай қасиет ерекшелейді?'),
];

$NEW9[209] = [ // Talking About Health
    V('Do you eat fruit and vegetables every day?', 'Вы едите фрукты и овощи каждый день?', 'Күн сайын жеміс пен көкөніс жейсіз бе?'),
    V('Have you ever had a serious illness?', 'У вас когда-нибудь была серьёзная болезнь?', 'Ауыр ауру болдыңыз ба?'),
    V('Do you take medicine when you have a headache?', 'Вы принимаете лекарство, когда болит голова?', 'Басыңыз ауырғанда дәрі ішесіз бе?'),
    V('How important is sleep for your health?', 'Насколько важен сон для вашего здоровья?', 'Ұйқы денсаулығыңыз үшін қаншалықты маңызды?'),
    V('Do you avoid smoking or drinking alcohol?', 'Вы избегаете курения или употребления алкоголя?', 'Темекі шегуден немесе алкоголь ішуден аулақ боласыз ба?'),
    V('What is one health goal you have?', 'Какая у вас цель, связанная со здоровьем?', 'Денсаулыққа қатысты бір мақсатыңыз қандай?'),
    V('Do you feel stressed often?', 'Вы часто испытываете стресс?', 'Жиі стресс сезінесіз бе?'),
    V('Have you ever visited a hospital?', 'Вы когда-нибудь были в больнице?', 'Ауруханада болдыңыз ба?'),
    V('Do you trust doctors\' advice completely?', 'Вы полностью доверяете советам врачей?', 'Дәрігерлердің кеңесіне толық сенесіз бе?'),
];

$NEW9[210] = [ // My Favorite Movies
    V('Do you watch movies alone or with others?', 'Вы смотрите фильмы одни или с кем-то?', 'Фильмдерді жалғыз көресіз бе, әлде біреумен бе?'),
    V('Have you ever watched the same movie many times?', 'Вы когда-нибудь смотрели один и тот же фильм много раз?', 'Бір фильмді бірнеше рет көрдіңіз бе?'),
    V('Do you prefer movies based on true stories or fiction?', 'Вы предпочитаете фильмы по реальным событиям или вымышленные?', 'Шынайы оқиғаға негізделген фильмдерді ұнатасыз ба, әлде ойдан шығарылғанды ма?'),
    V('What language do you usually watch movies in?', 'На каком языке вы обычно смотрите фильмы?', 'Фильмдерді әдетте қай тілде көресіз?'),
    V('Have you ever fallen asleep during a movie?', 'Вы когда-нибудь засыпали во время фильма?', 'Фильм кезінде ұйықтап кеткеніңіз болды ма?'),
    V('Do you read reviews before watching a movie?', 'Вы читаете отзывы перед просмотром фильма?', 'Фильм көрер алдында пікірлерді оқисыз ба?'),
    V('What movie would you recommend to a friend?', 'Какой фильм вы бы порекомендовали другу?', 'Досыңызға қандай фильмді ұсынар едіңіз?'),
    V('Do you like movies with happy endings?', 'Вам нравятся фильмы со счастливым концом?', 'Соңы бақытты аяқталатын фильмдерді ұнатасыз ба?'),
    V('Have you ever cried during a movie in public?', 'Вы когда-нибудь плакали во время фильма на публике?', 'Көпшілік алдында фильм кезінде жылап алдыңыз ба?'),
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
