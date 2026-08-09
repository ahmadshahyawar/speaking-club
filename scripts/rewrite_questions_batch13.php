<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[157] = [ // Job Interviews
    V('Have you ever been rejected after an interview? How did you feel?', 'Вас когда-нибудь отклоняли после собеседования? Что вы чувствовали?', 'Сұхбаттан кейін бас тартылды ма? Өзіңізді қалай сезіндіңіз?'),
    V('Do you research a company before an interview?', 'Вы изучаете компанию перед собеседованием?', 'Сұхбат алдында компанияны зерттейсіз бе?'),
    V('What question do you dread being asked in interviews?', 'Какого вопроса на собеседовании вы боитесь больше всего?', 'Сұхбатта қандай сұрақтан қорқасыз?'),
    V('Have you ever had a video interview?', 'У вас когда-нибудь было видео-собеседование?', 'Видео сұхбат өткіздіңіз бе?'),
    V('Do you practice answers before an interview?', 'Вы репетируете ответы перед собеседованием?', 'Сұхбат алдында жауаптарды жаттығасыз ба?'),
    V('What is the best interview advice you have received?', 'Какой лучший совет по собеседованию вы получали?', 'Алған ең жақсы сұхбат кеңесі қандай болды?'),
    V('Have you ever interviewed someone else for a job?', 'Вы когда-нибудь сами проводили собеседование для работы?', 'Жұмысқа біреумен сұхбат жүргіздіңіз бе?'),
    V('Do you feel nervous the night before an interview?', 'Вы нервничаете накануне вечером перед собеседованием?', 'Сұхбат алдындағы түні толқисыз ба?'),
    V('What would make you turn down a job offer?', 'Что заставило бы вас отказаться от предложения о работе?', 'Жұмыс ұсынысынан бас тартуға не итермелейді?'),
];

$NEW9[158] = [ // Renting an Apartment
    V('Have you ever had to move out of a rental quickly?', 'Вам когда-нибудь приходилось быстро съезжать из съёмного жилья?', 'Жалдамалы үйден тез көшуге тура келді ме?'),
    V('Do you think rent in your city is affordable?', 'Как вы думаете, аренда в вашем городе доступна по цене?', 'Сіздің ойыңызша, қалаңыздағы жалдау ақысы қолжетімді ме?'),
    V('Would you rent an apartment without seeing it in person?', 'Вы бы сняли квартиру, не увидев её лично?', 'Пәтерді өз көзіңізбен көрместен жалдар ма едіңіз?'),
    V('What is the most important feature you look for in an apartment?', 'Какая особенность квартиры для вас самая важная?', 'Пәтерде іздейтін ең маңызды қасиетіңіз қандай?'),
    V('Have you ever lost a deposit when moving out?', 'Вы когда-нибудь теряли залог при выезде?', 'Көшкенде кепілдік ақыны жоғалттыңыз ба?'),
    V('Do you read the whole rental contract carefully?', 'Вы внимательно читаете весь договор аренды?', 'Жалдау шартын толық мұқият оқисыз ба?'),
    V('Would you rent from a friend or family member?', 'Вы бы сняли жильё у друга или родственника?', 'Достан немесе туысыңыздан пәтер жалдар ма едіңіз?'),
    V('What is your biggest concern about renting?', 'Что вас больше всего беспокоит в аренде жилья?', 'Пәтер жалдауда сізді ең көп алаңдататын не нәрсе?'),
    V('Have you ever helped a friend find an apartment?', 'Вы когда-нибудь помогали другу найти квартиру?', 'Досыңызға пәтер табуға көмектестіңіз бе?'),
];

$NEW9[159] = [ // At the Gym
    V('Have you ever felt too shy to go to the gym?', 'Вы когда-нибудь стеснялись ходить в спортзал?', 'Спортзалға баруға ұялғаныңыз болды ма?'),
    V('Do you set fitness goals for yourself?', 'Вы ставите себе цели в фитнесе?', 'Өзіңізге фитнес мақсаттарын қоясыз ба?'),
    V('What is your favorite piece of gym equipment?', 'Какой ваш любимый тренажёр в зале?', 'Спортзалдағы сүйікті жаттығу құралыңыз қайсы?'),
    V('Have you ever gone to the gym with a friend?', 'Вы когда-нибудь ходили в спортзал с другом?', 'Спортзалға досыңызбен бардыңыз ба?'),
    V('Do you prefer cardio or strength training?', 'Вы предпочитаете кардио или силовые тренировки?', 'Кардионы ұнатасыз ба, әлде күш жаттығуларын ба?'),
    V('What motivates you to keep going to the gym?', 'Что мотивирует вас продолжать ходить в спортзал?', 'Спортзалға баруды жалғастыруға сізді не жігерлендіреді?'),
    V('Have you ever cancelled a gym membership you weren\'t using?', 'Вы когда-нибудь отменяли абонемент в зал, которым не пользовались?', 'Пайдаланбаған спортзал абонементін тоқтаттыңыз ба?'),
    V('Do you take rest days between workouts?', 'Вы делаете дни отдыха между тренировками?', 'Жаттығулар арасында демалыс күндерін аласыз ба?'),
    V('What would make you enjoy going to the gym more?', 'Что заставило бы вас больше любить ходить в спортзал?', 'Спортзалға баруды көбірек ұнатуыңызға не себеп болар еді?'),
];

$NEW9[160] = [ // Weather and Clothing
    V('Do you own clothes for every season?', 'У вас есть одежда на каждый сезон?', 'Әр мезгілге арналған киіміңіз бар ма?'),
    V('Have you ever been badly dressed for the weather?', 'Вы когда-нибудь были одеты не по погоде?', 'Ауа райына сай емес киінгеніңіз болды ма?'),
    V('What is the first thing you check before leaving the house?', 'Что вы проверяете в первую очередь перед выходом из дома?', 'Үйден шығар алдында бірінші не тексересіз?'),
    V('Do you prefer natural fabrics or synthetic ones for comfort?', 'Вы предпочитаете натуральные ткани или синтетические для комфорта?', 'Ыңғайлылық үшін табиғи маталарды ұнатасыз ба, әлде синтетикалықты ма?'),
    V('Have you ever bought clothes just for one trip?', 'Вы когда-нибудь покупали одежду только для одной поездки?', 'Тек бір сапар үшін киім сатып алдыңыз ба?'),
    V('What clothing item do you wish you owned?', 'Какую вещь одежды вы хотели бы иметь?', 'Иеленгіңіз келетін киім бұйымы қандай?'),
    V('Does the weather affect what colors you wear?', 'Погода влияет на то, какие цвета вы носите?', 'Ауа райы киетін түстеріңізге әсер ете ме?'),
    V('Do you dress differently for work than for home?', 'Вы одеваетесь по-разному для работы и дома?', 'Жұмысқа және үйге басқаша киінесіз бе?'),
    V('What is your go-to outfit for unpredictable weather?', 'Какой у вас наряд на случай непредсказуемой погоды?', 'Болжауға болмайтын ауа райына арналған әдеттегі киіміңіз қандай?'),
];

$NEW9[161] = [ // Learning a New Language
    V('Do you watch movies or shows in English to practice?', 'Вы смотрите фильмы или сериалы на английском, чтобы практиковаться?', 'Жаттығу үшін ағылшын тілінде фильм немесе сериал көресіз бе?'),
    V('Have you ever dreamed in another language?', 'Вам когда-нибудь снились сны на другом языке?', 'Басқа тілде түс көрдіңіз бе?'),
    V('What method has helped you learn the most?', 'Какой метод помог вам учиться больше всего?', 'Сізге ең көп көмектескен әдіс қандай болды?'),
    V('Do you feel confident speaking English with native speakers?', 'Вы уверенно говорите по-английски с носителями языка?', 'Ана тілінде сөйлейтіндермен ағылшынша сөйлескенде сенімді сезінесіз бе?'),
    V('Have you ever been embarrassed by a language mistake?', 'Вы когда-нибудь смущались из-за языковой ошибки?', 'Тілдік қатеге байланысты ұяттансыз ба?'),
    V('What is your biggest motivation for learning English?', 'Какая ваша главная мотивация для изучения английского?', 'Ағылшын тілін үйренудегі ең үлкен ынтаңыз қандай?'),
    V('Do you think grammar or vocabulary is more important to learn first?', 'Как вы думаете, что важнее изучить сначала: грамматику или словарный запас?', 'Сіздің ойыңызша, алдымен грамматиканы үйрену маңызды ма, әлде сөздік қорды ма?'),
    V('Have you ever taught someone else a language?', 'Вы когда-нибудь учили кого-то языку?', 'Біреуге тіл үйреттіңіз бе?'),
    V('What is your goal for your English level this year?', 'Какая у вас цель по уровню английского в этом году?', 'Биылғы ағылшын тілі деңгейіңіздегі мақсатыңыз қандай?'),
];

$NEW9[162] = [ // Car Ownership
    V('Do you wash your car often?', 'Вы часто моете машину?', 'Көлігіңізді жиі жуасыз ба?'),
    V('Have you ever lent your car to someone?', 'Вы когда-нибудь давали свою машину кому-то?', 'Көлігіңізді біреуге беріп тұрдыңыз ба?'),
    V('What is the most important feature in a car for you?', 'Какая особенность автомобиля для вас самая важная?', 'Көлікте ең маңызды қасиет сіз үшін қандай?'),
    V('Do you prefer automatic or manual cars?', 'Вы предпочитаете автомат или механику?', 'Автоматты көлікті ұнатасыз ба, әлде механикалықты ма?'),
    V('Have you ever been in a car accident?', 'Вы когда-нибудь попадали в автомобильную аварию?', 'Жол апатына тап болдыңыз ба?'),
    V('What would make you switch to an electric car?', 'Что заставило бы вас перейти на электромобиль?', 'Электр көлігіне көшуге сізді не итермелер еді?'),
    V('Do you enjoy long drives?', 'Вам нравятся долгие поездки на машине?', 'Ұзақ жүргенді ұнатасыз ба?'),
    V('Have you ever helped someone whose car broke down?', 'Вы когда-нибудь помогали тому, у кого сломалась машина?', 'Көлігі бұзылған адамға көмектестіңіз бе?'),
    V('What is the most useful thing you keep in your car?', 'Какая самая полезная вещь, которую вы держите в машине?', 'Көлігіңізде сақтайтын ең пайдалы затыңыз қандай?'),
];

$NEW9[163] = [ // Recycling and Waste
    V('Have you ever been criticized for not recycling properly?', 'Вас когда-нибудь критиковали за неправильную сортировку мусора?', 'Қалдықты дұрыс сұрыптамағаныңыз үшін сынға ұшырадыңыз ба?'),
    V('Do you think your city recycles enough?', 'Как вы думаете, ваш город достаточно перерабатывает отходы?', 'Сіздің ойыңызша, қалаңыз жеткілікті қайта өңдей ме?'),
    V('Have you ever reused something instead of throwing it away?', 'Вы когда-нибудь использовали что-то повторно вместо того, чтобы выбросить?', 'Лақтырудың орнына бір затты қайта пайдаландыңыз ба?'),
    V('What product do you wish had less packaging?', 'У какого продукта вы хотели бы, чтобы было меньше упаковки?', 'Қаптамасы аз болғанын қалайтын өнім бар ма?'),
    V('Do you know what happens to recycling after it\'s collected?', 'Вы знаете, что происходит с переработкой после сбора?', 'Жиналған қайта өңделетін қалдыққа не болатынын білесіз бе?'),
    V('Have you ever picked up litter that wasn\'t yours?', 'Вы когда-нибудь подбирали мусор, который был не ваш?', 'Өзіңіздікі емес қоқысты жинап алдыңыз ба?'),
    V('What is the easiest way you reduce waste?', 'Какой самый простой способ, которым вы сокращаете отходы?', 'Қалдықты азайтудың сіз үшін ең оңай жолы қандай?'),
    V('Do you think companies should be responsible for less waste?', 'Как вы думаете, компании должны нести ответственность за меньшее количество отходов?', 'Сіздің ойыңызша, компаниялар аз қалдық үшін жауапты болуы керек пе?'),
    V('What would encourage more people to recycle?', 'Что побудило бы больше людей заниматься переработкой?', 'Көбірек адамды қайта өңдеуге не итермелер еді?'),
];

$NEW9[164] = [ // Online Dating
    V('Have you ever been nervous before a first date?', 'Вы когда-нибудь нервничали перед первым свиданием?', 'Алғашқы кездесу алдында толқыдыңыз ба?'),
    V('Do you think honesty is important in dating profiles?', 'Как вы думаете, честность важна в анкетах для знакомств?', 'Сіздің ойыңызша, танысу профильдерінде адалдық маңызды ма?'),
    V('Have you ever had an awkward first date?', 'У вас когда-нибудь было неловкое первое свидание?', 'Ыңғайсыз алғашқы кездесуіңіз болды ма?'),
    V('What red flag would make you stop talking to someone?', 'Какой тревожный сигнал заставил бы вас перестать общаться с кем-то?', 'Біреумен сөйлесуді тоқтатуға қандай ескерту белгісі себеп болар еді?'),
    V('Do you think looks matter more than personality in dating?', 'Как вы думаете, внешность важнее характера в отношениях?', 'Сіздің ойыңызша, танысуда сыртқы келбет мінезден маңызды ма?'),
    V('Have you ever been ghosted, or ghosted someone else?', 'Вас когда-нибудь игнорировали без объяснений, или вы сами так делали?', 'Сізбен байланыс үзілді ме, әлде өзіңіз біреумен байланысты үздіңіз бе?'),
    V('What is the most important quality in a partner?', 'Какое самое важное качество в партнёре?', 'Серіктесте ең маңызды қасиет қандай?'),
    V('Do you prefer being set up by friends or meeting people yourself?', 'Вы предпочитаете, чтобы вас знакомили друзья, или знакомиться самим?', 'Достарыңыз таныстырғанды ұнатасыз ба, әлде өзіңіз танысқанды ма?'),
    V('How has dating changed since technology became involved?', 'Как изменились свидания с появлением технологий?', 'Технология араласқаннан бері танысу қалай өзгерді?'),
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
