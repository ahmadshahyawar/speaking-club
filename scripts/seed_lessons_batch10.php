<?php
declare(strict_types=1);
$configPath = '/home/u856637812/config/speaking_club_config.php';
$cfg = require $configPath;
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$username = $argv[1] ?? null;
if (!$username) { fwrite(STDERR, "Usage: php seed_lessons_batch10.php <teacher_username>\n"); exit(1); }
$stmt = $pdo->prepare('SELECT id FROM teachers WHERE username = ?');
$stmt->execute([$username]);
$teacher = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$teacher) { fwrite(STDERR, "Teacher not found: $username\n"); exit(1); }
$teacherId = (int)$teacher['id'];
function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }
$lessons = [];

// ========================= BEGINNER (batch 10) — 15 questions per topic =========================

$lessons[] = ['level' => 'beginner', 'topic' => 'Talking About Guests', 'background_key' => 'warm',
    'warmup' => V("Let's talk about having guests. Do you enjoy having people visit your home?", 'Давайте поговорим о приёме гостей. Вам нравится, когда люди приходят к вам домой?', 'Қонақ қабылдау туралы сөйлесейік. Адамдардың үйіңізге келгенін ұнатасыз ба?'),
    'vocab' => [V('guest', 'гость', 'қонақ'), V('welcome', 'приветствовать', 'қарсы алу'), V('host', 'хозяин', 'қонақ жасаушы'), V('visit', 'визит', 'бару'), V('prepare', 'готовиться', 'дайындалу'), V('offer food', 'предлагать еду', 'тамақ ұсыну'), V('polite', 'вежливый', 'сыпайы'), V('overnight stay', 'ночёвка', 'түнеп қалу'), V('leave', 'уходить', 'кету'), V('hospitality', 'гостеприимство', 'қонақжайлылық')],
    'questions' => [
        V('Do you enjoy having guests at your home?', 'Вам нравится, когда у вас дома гости?', 'Үйіңізде қонақтардың болғанын ұнатасыз ба?'),
        V('How do you prepare when guests are coming?', 'Как вы готовитесь, когда приходят гости?', 'Қонақтар келерде қалай дайындаласыз?'),
        V('Do you always offer food to guests?', 'Вы всегда предлагаете еду гостям?', 'Қонақтарға әрдайым тамақ ұсынасыз ба?'),
        V('Do you enjoy visiting other people\'s homes?', 'Вам нравится посещать дома других людей?', 'Басқа адамдардың үйлеріне баруды ұнатасыз ба?'),
        V('Have you ever had a guest stay overnight?', 'У вас когда-нибудь гость ночевал?', 'Сізде қонақ түнеп қалды ма?'),
        V('Do you think your culture values hospitality highly?', 'Как вы думаете, ваша культура высоко ценит гостеприимство?', 'Мәдениетіңіз қонақжайлылықты жоғары бағалайды деп ойлайсыз ба?'),
        V('Do you feel nervous before guests arrive?', 'Вы нервничаете перед приходом гостей?', 'Қонақтар келер алдында толқисыз ба?'),
        V('Is it easy to know when a guest is ready to leave?', 'Легко ли понять, когда гость готов уйти?', 'Қонақ кетуге дайын екенін білу оңай ма?'),
        V('Do you clean your home before guests come?', 'Вы убираете дом перед приходом гостей?', 'Қонақтар келер алдында үйді тазалайсыз ба?'),
        V('Do you enjoy being a guest, or prefer being a host?', 'Вам нравится быть гостем, или вы предпочитаете быть хозяином?', 'Қонақ болғанды ұнатасыз ба, әлде қонақ жасаушы болғанды ма?'),
        V('Do you welcome unexpected guests warmly?', 'Вы тепло принимаете неожиданных гостей?', 'Күтпеген қонақтарды жылы қарсы аласыз ба?'),
        V('What do you usually offer a guest to drink?', 'Что вы обычно предлагаете гостю выпить?', 'Қонаққа әдетте не ішуге ұсынасыз?'),
        V('Do you think being a good host is a valuable skill?', 'Как вы думаете, быть хорошим хозяином — ценный навык?', 'Жақсы қонақ жасаушы болу құнды дағды деп ойлайсыз ба?'),
        V('Have you ever felt uncomfortable as a guest somewhere?', 'Вы когда-нибудь чувствовали себя неловко как гость где-то?', 'Біреудің үйінде қонақ ретінде ыңғайсыз сезіндіңіз бе?'),
        V('What makes someone a great host, in your opinion?', 'Что делает человека отличным хозяином, по-вашему?', 'Сіздің ойыңызша, адамды тамаша қонақ жасаушы ететін не?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'My Favorite Time of Year', 'background_key' => 'nature',
    'warmup' => V("Let's talk about times of year you love. Is there a month or season you always look forward to?", 'Давайте поговорим о временах года, которые вы любите. Есть ли месяц или сезон, которого вы всегда ждёте?', 'Ұнататын жыл мезгілдері туралы сөйлесейік. Әрдайым күтетін ай немесе мезгіліңіз бар ма?'),
    'vocab' => [V('month', 'месяц', 'ай'), V('anniversary', 'годовщина', 'мерейтой'), V('birthday month', 'месяц дня рождения', 'туған күн айы'), V('festival season', 'сезон фестивалей', 'фестиваль маусымы'), V('school break', 'школьные каникулы', 'мектеп демалысы'), V('harvest time', 'время сбора урожая', 'егін жинау уақыты'), V('look forward to', 'ждать с нетерпением', 'асыға күту'), V('countdown', 'обратный отсчёт', 'кері санау'), V('calendar', 'календарь', 'күнтізбе'), V('memorable', 'запоминающийся', 'есте қаларлық')],
    'questions' => [
        V('Is there a month or season you always look forward to?', 'Есть ли месяц или сезон, которого вы всегда ждёте?', 'Әрдайым асыға күтетін ай немесе мезгіліңіз бар ма?'),
        V('Do you count down to your favorite time of year?', 'Вы считаете дни до вашего любимого времени года?', 'Сүйікті мезгіліңізге дейін кері санайсыз ба?'),
        V('Is your favorite month your birthday month?', 'Ваш любимый месяц — это месяц вашего дня рождения?', 'Сүйікті айыңыз туған күн айыңыз ба?'),
        V('Do you enjoy festival season the most?', 'Вам больше всего нравится сезон фестивалей?', 'Фестиваль маусымын ең көп ұнатасыз ба?'),
        V('Did you look forward to school breaks as a child?', 'Вы ждали школьных каникул в детстве?', 'Балалық шағыңызда мектеп демалысын күттіңіз бе?'),
        V('Do you mark special dates on a calendar?', 'Вы отмечаете особые даты в календаре?', 'Ерекше күндерді күнтізбеде белгілейсіз бе?'),
        V('What makes a certain time of year memorable for you?', 'Что делает определённое время года запоминающимся для вас?', 'Белгілі бір жыл мезгілін сіз үшін есте қаларлық ететін не?'),
        V('Do you enjoy harvest time if you live near farms?', 'Вам нравится время сбора урожая, если вы живёте рядом с фермами?', 'Фермаларға жақын тұрсаңыз, егін жинау уақытын ұнатасыз ба?'),
        V('Do you celebrate an anniversary every year?', 'Вы отмечаете годовщину каждый год?', 'Жыл сайын мерейтой тойлайсыз ба?'),
        V('Does your favorite time of year change as you get older?', 'Ваше любимое время года меняется с возрастом?', 'Сүйікті мезгіліңіз жасыңыз үлкейген сайын өзгере ме?'),
        V('Do you plan special activities for your favorite time of year?', 'Вы планируете особые занятия на любимое время года?', 'Сүйікті мезгіліңізге арнайы іс-шараларды жоспарлайсыз ба?'),
        V('Is there a time of year that makes you feel sad?', 'Есть ли время года, которое вызывает у вас грусть?', 'Сізді мұңды сезіндіретін жыл мезгілі бар ма?'),
        V('Do you take more photos during your favorite time of year?', 'Вы делаете больше фотографий в ваше любимое время года?', 'Сүйікті мезгіліңізде көбірек сурет түсіресіз бе?'),
        V('Do family traditions happen during your favorite time of year?', 'Семейные традиции происходят в ваше любимое время года?', 'Отбасылық дәстүрлер сүйікті мезгіліңізде бола ма?'),
        V('What time of year would you choose if you could live in it forever?', 'Какое время года вы бы выбрали, если бы могли жить в нём вечно?', 'Мәңгі сол мезгілде өмір сүре алсаңыз, қайсысын таңдар едіңіз?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Talking About Mistakes', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about mistakes. What is a small mistake you made recently?", 'Давайте поговорим об ошибках. Какую небольшую ошибку вы недавно допустили?', 'Қателер туралы сөйлесейік. Жақында қандай кішкентай қате жібердіңіз?'),
    'vocab' => [V('mistake', 'ошибка', 'қате'), V('sorry', 'извините', 'кешіріңіз'), V('forgive', 'прощать', 'кешіру'), V('learn from', 'учиться на', 'сабақ алу'), V('embarrassed', 'смущённый', 'ұялған'), V('fix', 'исправить', 'түзету'), V('accident', 'случайность', 'кездейсоқтық'), V('careless', 'небрежный', 'абайсыз'), V('honest', 'честный', 'адал'), V('try again', 'попробовать снова', 'қайта тырысу')],
    'questions' => [
        V('What is a small mistake you made recently?', 'Какую небольшую ошибку вы недавно допустили?', 'Жақында қандай кішкентай қате жібердіңіз?'),
        V('Do you find it easy to admit when you are wrong?', 'Вам легко признавать, что вы неправы?', 'Қате екеніңізді мойындау сізге оңай ма?'),
        V('Have you ever felt embarrassed about a mistake?', 'Вы когда-нибудь чувствовали смущение из-за ошибки?', 'Қате үшін ұялған кезіңіз болды ма?'),
        V('Do you say sorry quickly when you make a mistake?', 'Вы быстро извиняетесь, когда допускаете ошибку?', 'Қате жіберген кезде тез кешірім сұрайсыз ба?'),
        V('Do you think mistakes help you learn?', 'Как вы думаете, ошибки помогают учиться?', 'Қателер үйренуге көмектеседі деп ойлайсыз ба?'),
        V('Have you ever forgiven someone for a big mistake?', 'Вы когда-нибудь прощали кого-то за большую ошибку?', 'Үлкен қате үшін біреуді кешірдіңіз бе?'),
        V('Do you try to fix a mistake right away?', 'Вы стараетесь сразу исправить ошибку?', 'Қатені бірден түзетуге тырысасыз ба?'),
        V('Was your recent mistake an accident, or were you careless?', 'Ваша недавняя ошибка была случайностью, или вы были небрежны?', 'Соңғы қатеңіз кездейсоқтық болды ма, әлде абайсыз болдыңыз ба?'),
        V('Do you get angry at yourself when you make mistakes?', 'Вы злитесь на себя, когда допускаете ошибки?', 'Қате жіберген кезде өзіңізге ашуланасыз ба?'),
        V('Do you tell others honestly when you make a mistake?', 'Вы честно рассказываете другим, когда допускаете ошибку?', 'Қате жіберген кезде басқаларға адал айтасыз ба?'),
        V('Have you ever repeated the same mistake twice?', 'Вы когда-нибудь повторяли одну и ту же ошибку дважды?', 'Бір қатені екі рет қайталадыңыз ба?'),
        V('Do you try again quickly after failing at something?', 'Вы быстро пробуете снова после неудачи в чём-то?', 'Бір нәрседен сәтсіздікке ұшырағаннан кейін тез қайта тырысасыз ба?'),
        V('What mistake taught you the most in life?', 'Какая ошибка научила вас больше всего в жизни?', 'Өмірде ең көп сабақ берген қатеңіз қандай?'),
        V('Do you think it is important to laugh at your own mistakes sometimes?', 'Как вы думаете, важно ли иногда смеяться над своими ошибками?', 'Кейде өз қателеріңізге күлу маңызды деп ойлайсыз ба?'),
        V('How do you feel after someone forgives your mistake?', 'Что вы чувствуете, когда кто-то прощает вашу ошибку?', 'Біреу қатеңізді кешіргенде не сезінесіз?'),
    ],
];

require __DIR__ . '/seed_lessons_batch10_part2.php';
