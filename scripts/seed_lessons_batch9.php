<?php
declare(strict_types=1);
$configPath = '/home/u856637812/config/speaking_club_config.php';
$cfg = require $configPath;
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$username = $argv[1] ?? null;
if (!$username) { fwrite(STDERR, "Usage: php seed_lessons_batch9.php <teacher_username>\n"); exit(1); }
$stmt = $pdo->prepare('SELECT id FROM teachers WHERE username = ?');
$stmt->execute([$username]);
$teacher = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$teacher) { fwrite(STDERR, "Teacher not found: $username\n"); exit(1); }
$teacherId = (int)$teacher['id'];
function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }
$lessons = [];

// ========================= BEGINNER (batch 9) — 15 questions per topic =========================

$lessons[] = ['level' => 'beginner', 'topic' => 'Talking About Textures', 'background_key' => 'playful',
    'warmup' => V("Let's talk about how things feel. What textures do you like touching?", 'Давайте поговорим о том, какими вещи ощущаются на ощупь. Какие текстуры вам нравится трогать?', 'Заттардың қалай сезілетіні туралы сөйлесейік. Қандай текстураларды ұстағанды ұнатасыз?'),
    'vocab' => [V('soft', 'мягкий', 'жұмсақ'), V('hard', 'твёрдый', 'қатты'), V('smooth', 'гладкий', 'тегіс'), V('rough', 'шершавый', 'кедір-бұдыр'), V('fluffy', 'пушистый', 'үлпілдек'), V('sticky', 'липкий', 'жабысқақ'), V('cold', 'холодный', 'суық'), V('warm', 'тёплый', 'жылы'), V('wet', 'мокрый', 'дымқыл'), V('dry', 'сухой', 'құрғақ')],
    'questions' => [
        V('What texture do you enjoy touching most?', 'Какую текстуру вам больше всего нравится трогать?', 'Ұстағанды ең көп ұнататын текстураңыз қандай?'),
        V('Do you like soft blankets?', 'Вам нравятся мягкие одеяла?', 'Жұмсақ көрпелерді ұнатасыз ба?'),
        V('Do rough surfaces bother you?', 'Шершавые поверхности вас беспокоят?', 'Кедір-бұдыр беттер сізді мазалай ма?'),
        V('Do you like the feeling of sand between your fingers?', 'Вам нравится ощущение песка между пальцами?', 'Саусақтарыңыздың арасындағы құм сезімін ұнатасыз ба?'),
        V('Do you prefer smooth or textured fabrics?', 'Вы предпочитаете гладкие или текстурированные ткани?', 'Тегіс маталарды ұнатасыз ба, әлде текстуралыны ма?'),
        V('Does anything sticky bother you?', 'Что-нибудь липкое вас беспокоит?', 'Жабысқақ бір нәрсе сізді мазалай ма?'),
        V('Do you like holding something warm on a cold day?', 'Вам нравится держать что-то тёплое в холодный день?', 'Суық күні жылы бір нәрсені ұстағанды ұнатасыз ба?'),
        V('Do you like fluffy pillows or firm ones?', 'Вам нравятся пушистые подушки или жёсткие?', 'Үлпілдек жастықтарды ұнатасыз ба, әлде қатты ма?'),
        V('Do you notice textures when you eat food?', 'Вы замечаете текстуру, когда едите?', 'Тамақ жегенде текстураны байқайсыз ба?'),
        V('Does wet clothing bother you a lot?', 'Мокрая одежда вас сильно беспокоит?', 'Дымқыл киім сізді қатты мазалай ма?'),
        V('Do you like petting animals with soft fur?', 'Вам нравится гладить животных с мягкой шерстью?', 'Жұмсақ жүнді жануарларды сипағанды ұнатасыз ба?'),
        V('Is there a texture you really dislike?', 'Есть ли текстура, которую вы очень не любите?', 'Мүлдем ұнатпайтын текстураңыз бар ма?'),
        V('Do you prefer dry or humid weather?', 'Вы предпочитаете сухую или влажную погоду?', 'Құрғақ ауа райын ұнатасыз ба, әлде ылғалдыны ма?'),
        V('Do you like the texture of fresh bread?', 'Вам нравится текстура свежего хлеба?', 'Жаңа нанның текстурасын ұнатасыз ба?'),
        V('What texture reminds you of your childhood?', 'Какая текстура напоминает вам о детстве?', 'Қандай текстура сізге балалық шағыңызды еске түсіреді?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Talking About House Chores I Enjoy', 'background_key' => 'calm',
    'warmup' => V("Let's talk about chores you actually enjoy. Is there any housework you don't mind doing?", 'Давайте поговорим о делах, которые вам действительно нравятся. Есть ли домашние дела, которые вы не против делать?', 'Шынымен ұнататын жұмыстар туралы сөйлесейік. Істеуге қарсы емес үй жұмысыңыз бар ма?'),
    'vocab' => [V('enjoy', 'наслаждаться', 'рахаттану'), V('gardening', 'садоводство', 'бақша баптау'), V('organizing', 'организация', 'ретке келтіру'), V('folding clothes', 'складывание одежды', 'киім бүктеу'), V('washing dishes', 'мытьё посуды', 'ыдыс жуу'), V('relaxing task', 'расслабляющая задача', 'демалдыратын тапсырма'), V('satisfying', 'приносящий удовлетворение', 'қанағаттандыратын'), V('routine', 'рутина', 'тәртіп'), V('music while working', 'музыка во время работы', 'жұмыс кезіндегі музыка'), V('clean result', 'чистый результат', 'таза нәтиже')],
    'questions' => [
        V('Is there a chore you actually enjoy doing?', 'Есть ли дело, которое вам действительно нравится делать?', 'Шынымен істегенді ұнататын жұмысыңыз бар ма?'),
        V('Do you find folding clothes relaxing?', 'Вам кажется складывание одежды расслабляющим?', 'Киім бүктеу сізге демалдырар ма?'),
        V('Do you like gardening as a chore?', 'Вам нравится садоводство как дело?', 'Бақша баптауды жұмыс ретінде ұнатасыз ба?'),
        V('Do you listen to music while doing chores?', 'Вы слушаете музыку, выполняя домашние дела?', 'Үй жұмысын істегенде музыка тыңдайсыз ба?'),
        V('Is washing dishes satisfying for you?', 'Мытьё посуды приносит вам удовлетворение?', 'Ыдыс жуу сізге қанағат сыйлай ма?'),
        V('Do you enjoy organizing closets or drawers?', 'Вам нравится организовывать шкафы или ящики?', 'Шкаф немесе тартпаларды ретке келтіргенді ұнатасыз ба?'),
        V('Does seeing a clean result motivate you to do chores?', 'Наблюдение чистого результата мотивирует вас делать домашние дела?', 'Таза нәтижені көру сізді үй жұмысын істеуге ынталандыра ма?'),
        V('Do you prefer chores with a clear routine?', 'Вы предпочитаете дела с чёткой рутиной?', 'Анық тәртібі бар жұмыстарды ұнатасыз ба?'),
        V('Is there a chore that feels relaxing rather than tiring?', 'Есть ли дело, которое кажется расслабляющим, а не утомительным?', 'Шаршатпайтын, керісінше демалдыратын жұмысыңыз бар ма?'),
        V('Do you enjoy chores more when you do them with someone?', 'Вам больше нравятся дела, когда вы делаете их с кем-то?', 'Жұмыстарды біреумен бірге істегенде көбірек ұнатасыз ба?'),
        V('Do you feel proud after finishing a big cleaning task?', 'Вы чувствуете гордость после завершения большой уборки?', 'Үлкен тазалау тапсырмасын бітіргеннен кейін мақтаныш сезінесіз бе?'),
        V('Would you choose cooking or cleaning if you had to pick one chore?', 'Вы бы выбрали готовку или уборку, если бы пришлось выбрать одно дело?', 'Бір жұмысты таңдау керек болса, тамақ пісіруді таңдар ма едіңіз, әлде тазалауды ма?'),
        V('Do you enjoy chores more in the morning or evening?', 'Вам больше нравится делать дела утром или вечером?', 'Жұмыстарды таңертең істегенді ұнатасыз ба, әлде кешке ме?'),
        V('Does a satisfying chore help you clear your mind?', 'Приятное дело помогает вам очистить разум?', 'Қанағаттандыратын жұмыс ойыңызды тазартуға көмектесе ме?'),
        V('What chore would you do every day if you had time?', 'Какое дело вы бы делали каждый день, если бы было время?', 'Уақыт болса, күн сайын қандай жұмысты істер едіңіз?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'My Favorite Smell', 'background_key' => 'warm',
    'warmup' => V("Let's talk about smells. What is your favorite smell in the world?", 'Давайте поговорим о запахах. Какой ваш любимый запах на свете?', 'Иістер туралы сөйлесейік. Әлемдегі сүйікті иісіңіз қандай?'),
    'vocab' => [V('smell', 'запах', 'иіс'), V('perfume', 'духи', 'иіс су'), V('fresh', 'свежий', 'жаңа'), V('sweet smell', 'сладкий запах', 'тәтті иіс'), V('flowers', 'цветы', 'гүлдер'), V('coffee smell', 'запах кофе', 'кофе иісі'), V('rain smell', 'запах дождя', 'жаңбыр иісі'), V('bad smell', 'плохой запах', 'жаман иіс'), V('remind', 'напоминать', 'еске түсіру'), V('nose', 'нос', 'мұрын')],
    'questions' => [
        V('What is your favorite smell?', 'Какой ваш любимый запах?', 'Сүйікті иісіңіз қандай?'),
        V('Do you like the smell of fresh coffee?', 'Вам нравится запах свежего кофе?', 'Жаңа кофенің иісін ұнатасыз ба?'),
        V('Does the smell of rain make you happy?', 'Запах дождя делает вас счастливым?', 'Жаңбыр иісі сізді бақытты сезіндіре ме?'),
        V('Do you wear perfume every day?', 'Вы носите духи каждый день?', 'Күн сайын иіс су сеуіп жүресіз бе?'),
        V('Is there a smell that reminds you of your childhood?', 'Есть ли запах, который напоминает вам о детстве?', 'Балалық шағыңызды еске түсіретін иіс бар ма?'),
        V('Do you enjoy the smell of flowers?', 'Вам нравится запах цветов?', 'Гүлдердің иісін ұнатасыз ба?'),
        V('What is a smell you really dislike?', 'Какой запах вам очень не нравится?', 'Мүлдем ұнатпайтын иісіңіз қандай?'),
        V('Does a certain smell remind you of a specific person?', 'Определённый запах напоминает вам о конкретном человеке?', 'Белгілі бір иіс сізге белгілі бір адамды еске түсіре ме?'),
        V('Do you notice smells more than other people?', 'Вы замечаете запахи больше, чем другие люди?', 'Иістерді басқа адамдардан гөрі көбірек байқайсыз ба?'),
        V('Do you like the smell of freshly cut grass?', 'Вам нравится запах свежескошенной травы?', 'Жаңа қиылған шөптің иісін ұнатасыз ба?'),
        V('Does a bad smell ruin your mood quickly?', 'Плохой запах быстро портит вам настроение?', 'Жаман иіс көңіл-күйіңізді тез бұза ма?'),
        V('Do you buy candles because of their smell?', 'Вы покупаете свечи из-за их запаха?', 'Иісі үшін шам сатып аласыз ба?'),
        V('What smell makes you feel hungry?', 'Какой запах вызывает у вас голод?', 'Қандай иіс сізді аш сезіндіреді?'),
        V('Do you associate certain smells with holidays?', 'Вы связываете определённые запахи с праздниками?', 'Белгілі бір иістерді мерекелермен байланыстырасыз ба?'),
        V('If you could bottle one smell forever, what would it be?', 'Если бы вы могли навсегда сохранить один запах, какой бы это был?', 'Бір иісті мәңгі сақтай алсаңыз, ол қандай болар еді?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'At the Car Wash', 'background_key' => 'professional',
    'warmup' => V("Let's talk about washing cars. Do you wash your own car, or take it somewhere?", 'Давайте поговорим о мойке машин. Вы моете свою машину сами, или отвозите её куда-то?', 'Көлік жуу туралы сөйлесейік. Көлігіңізді өзіңіз жуасыз ба, әлде бір жерге апарасыз ба?'),
    'vocab' => [V('car wash', 'автомойка', 'көлік жуу орны'), V('soap', 'мыло', 'сабын'), V('hose', 'шланг', 'шланг'), V('vacuum', 'пылесос', 'шаңсорғыш'), V('shiny', 'блестящий', 'жылтыр'), V('dirty', 'грязный', 'лас'), V('wax', 'воск', 'балауыз'), V('interior', 'салон', 'ішкі бөлігі'), V('sponge', 'губка', 'губка'), V('dry off', 'высушить', 'кептіру')],
    'questions' => [
        V('Do you wash your own car, or take it to a car wash?', 'Вы моете свою машину сами, или отвозите её на автомойку?', 'Көлігіңізді өзіңіз жуасыз ба, әлде автомойкаға апарасыз ба?'),
        V('How often do you wash your car?', 'Как часто вы моете машину?', 'Көлігіңізді қаншалықты жиі жуасыз?'),
        V('Do you like the smell of car soap?', 'Вам нравится запах автомобильного шампуня?', 'Көлік сабынының иісін ұнатасыз ба?'),
        V('Do you clean the interior of your car often?', 'Вы часто чистите салон машины?', 'Көлігіңіздің ішкі бөлігін жиі тазалайсыз ба?'),
        V('Do you enjoy the feeling of driving a shiny clean car?', 'Вам нравится ощущение вождения блестящей чистой машины?', 'Жылтыр таза көлікпен жүру сезімін ұнатасыз ба?'),
        V('Have you ever waxed a car?', 'Вы когда-нибудь наносили воск на машину?', 'Көлікке балауыз жағдыңыз ба?'),
        V('Does a dirty car bother you?', 'Грязная машина вас беспокоит?', 'Лас көлік сізді мазалай ма?'),
        V('Do you use an automatic car wash or wash by hand?', 'Вы используете автоматическую автомойку или моете вручную?', 'Автоматты автомойканы пайдаланасыз ба, әлде қолмен жуасыз ба?'),
        V('Do you vacuum the inside of your car regularly?', 'Вы регулярно пылесосите салон машины?', 'Көлігіңіздің ішкі бөлігін тұрақты шаңсорғышпен тазалайсыз ба?'),
        V('Do you dry off the car after washing it?', 'Вы вытираете машину после мойки?', 'Жуғаннан кейін көлікті кептіресіз бе?'),
        V('Would you pay extra for a very thorough car wash?', 'Вы бы заплатили дополнительно за очень тщательную мойку машины?', 'Өте мұқият көлік жуу үшін қосымша төлер ме едіңіз?'),
        V('Do you think a clean car affects how it drives?', 'Как вы думаете, чистая машина влияет на то, как она едет?', 'Таза көлік оның жүрісіне әсер етеді деп ойлайсыз ба?'),
        V('Do you enjoy washing your car yourself as a relaxing activity?', 'Вам нравится мыть машину самому как расслабляющее занятие?', 'Көлікті өзіңіз жууды демалдыратын әрекет ретінде ұнатасыз ба?'),
        V('Have you ever gone through a car wash with the windows open by mistake?', 'Вы когда-нибудь случайно проезжали автомойку с открытыми окнами?', 'Терезелер ашық күйде кездейсоқ автомойкадан өттіңіз бе?'),
        V('How do you feel right after your car has been cleaned?', 'Как вы себя чувствуете сразу после того, как машина помыта?', 'Көлігіңіз жуылғаннан кейін өзіңізді қалай сезінесіз?'),
    ],
];

require __DIR__ . '/seed_lessons_batch9_part2.php';
