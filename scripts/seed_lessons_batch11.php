<?php
declare(strict_types=1);
$configPath = '/home/u856637812/config/speaking_club_config.php';
$cfg = require $configPath;
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$username = $argv[1] ?? null;
if (!$username) { fwrite(STDERR, "Usage: php seed_lessons_batch11.php <teacher_username>\n"); exit(1); }
$stmt = $pdo->prepare('SELECT id FROM teachers WHERE username = ?');
$stmt->execute([$username]);
$teacher = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$teacher) { fwrite(STDERR, "Teacher not found: $username\n"); exit(1); }
$teacherId = (int)$teacher['id'];
function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }
$lessons = [];

// ========================= BEGINNER (batch 11) — 15 questions per topic =========================

$lessons[] = ['level' => 'beginner', 'topic' => 'Talking About Noise at Night', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about nighttime noise. Is your neighborhood quiet or noisy at night?", 'Давайте поговорим о ночном шуме. Ваш район тихий или шумный ночью?', 'Түнгі шу туралы сөйлесейік. Ауданыңыз түнде тыныш па, әлде шулы ма?'),
    'vocab' => [V('nighttime', 'ночное время', 'түнгі уақыт'), V('bark', 'лаять', 'үру'), V('siren', 'сирена', 'сирена'), V('traffic noise', 'шум транспорта', 'көлік шуы'), V('earplugs', 'беруши', 'құлаққап'), V('light sleeper', 'чутко спящий', 'жеңіл ұйықтайтын'), V('deep sleeper', 'крепко спящий', 'қатты ұйықтайтын'), V('wake up', 'просыпаться', 'ояну'), V('peaceful', 'спокойный', 'бейбіт'), V('disturb', 'беспокоить', 'мазалау')],
    'questions' => [
        V('Is your neighborhood quiet or noisy at night?', 'Ваш район тихий или шумный ночью?', 'Ауданыңыз түнде тыныш па, әлде шулы ма?'),
        V('Are you a light sleeper or a deep sleeper?', 'Вы чутко спите или крепко?', 'Жеңіл ұйықтайсыз ба, әлде қатты ма?'),
        V('Do dogs barking at night wake you up?', 'Лай собак ночью вас будит?', 'Иттердің түнде үруі сізді оята ма?'),
        V('Do you use earplugs to sleep better?', 'Вы используете беруши, чтобы лучше спать?', 'Жақсырақ ұйықтау үшін құлаққапты пайдаланасыз ба?'),
        V('Does traffic noise bother you at night?', 'Шум транспорта беспокоит вас ночью?', 'Түнде көлік шуы сізді мазалай ма?'),
        V('Have you ever been woken up by a siren?', 'Вас когда-нибудь будила сирена?', 'Сирен сізді оятты ма?'),
        V('Do you think city life is always noisy at night?', 'Как вы думаете, городская жизнь всегда шумная ночью?', 'Қала өмірі түнде әрдайым шулы деп ойлайсыз ба?'),
        V('Would you move to a quieter area for better sleep?', 'Вы бы переехали в более тихий район ради лучшего сна?', 'Жақсы ұйықтау үшін тыныш ауданға көшер ме едіңіз?'),
        V('Do you fall back asleep easily after being woken up?', 'Вы легко засыпаете снова после пробуждения?', 'Оянғаннан кейін қайта оңай ұйықтап кетесіз бе?'),
        V('Is it peaceful where you sleep?', 'Там, где вы спите, спокойно?', 'Ұйықтайтын жеріңіз бейбіт пе?'),
        V('Do loud neighbors disturb your sleep?', 'Громкие соседи мешают вашему сну?', 'Қатты дауыстайтын көршілер ұйқыңызды бұза ма?'),
        V('Do you sleep with a window open or closed?', 'Вы спите с открытым окном или закрытым?', 'Терезе ашық ұйықтайсыз ба, әлде жабық па?'),
        V('Would you use a white noise machine to block out sound?', 'Вы бы использовали устройство белого шума, чтобы заглушить звук?', 'Дыбысты басу үшін ақ шу құрылғысын пайдаланар ма едіңіз?'),
        V('Have you ever complained about nighttime noise?', 'Вы когда-нибудь жаловались на ночной шум?', 'Түнгі шу туралы шағымдандыңыз ба?'),
        V('What is the most peaceful place you have ever slept?', 'Какое самое спокойное место, где вы когда-либо спали?', 'Ұйықтаған ең бейбіт орныңыз қайсы болды?'),
    ],
];

$lessons[] = ['level' => 'beginner', 'topic' => 'Talking About Favorite Numbers', 'background_key' => 'playful',
    'warmup' => V("Let's talk about favorite numbers. Do you have a lucky or favorite number?", 'Давайте поговорим о любимых числах. У вас есть счастливое или любимое число?', 'Сүйікті сандар туралы сөйлесейік. Сізде сәтті немесе сүйікті саныңыз бар ма?'),
    'vocab' => [V('favorite number', 'любимое число', 'сүйікті сан'), V('lucky number', 'счастливое число', 'сәтті сан'), V('birthday number', 'число дня рождения', 'туған күн саны'), V('even number', 'чётное число', 'жұп сан'), V('odd number', 'нечётное число', 'тақ сан'), V('meaning', 'значение', 'мағына'), V('remember', 'помнить', 'есте сақтау'), V('choose', 'выбирать', 'таңдау'), V('special', 'особый', 'ерекше'), V('coincidence', 'совпадение', 'кездейсоқтық')],
    'questions' => [
        V('Do you have a favorite or lucky number?', 'У вас есть любимое или счастливое число?', 'Сізде сүйікті немесе сәтті саныңыз бар ма?'),
        V('Why is that number special to you?', 'Почему это число особенное для вас?', 'Бұл сан сіз үшін неге ерекше?'),
        V('Do you choose that number when you can, like for a jersey or seat?', 'Вы выбираете это число, когда можете, например, для футболки или места?', 'Мүмкіндік болса, форма немесе орын үшін сол санды таңдайсыз ба?'),
        V('Is your favorite number related to your birthday?', 'Ваше любимое число связано с вашим днём рождения?', 'Сүйікті саныңыз туған күніңізбен байланысты ма?'),
        V('Do you prefer even numbers or odd numbers?', 'Вы предпочитаете чётные числа или нечётные?', 'Жұп сандарды ұнатасыз ба, әлде тақты ма?'),
        V('Have you ever noticed your favorite number appearing by coincidence?', 'Вы когда-нибудь замечали, что ваше любимое число появляется случайно?', 'Сүйікті саныңыздың кездейсоқ пайда болғанын байқадыңыз ба?'),
        V('Does your favorite number have a personal meaning?', 'У вашего любимого числа есть личное значение?', 'Сүйікті саныңыздың жеке мағынасы бар ма?'),
        V('Do you remember numbers easily in general?', 'Вы вообще легко запоминаете числа?', 'Жалпы сандарды оңай есте сақтайсыз ба?'),
        V('Did a family member give you your favorite number?', 'Кто-то из семьи подарил вам ваше любимое число?', 'Отбасы мүшесі сізге сүйікті саныңызды берді ме?'),
        V('Do you think numbers can bring good luck?', 'Как вы думаете, числа могут приносить удачу?', 'Сандар сәттілік әкеле алады деп ойлайсыз ба?'),
        V('Do you avoid a number you consider unlucky?', 'Вы избегаете числа, которое считаете несчастливым?', 'Сәтсіз деп санайтын саннан аулақ боласыз ба?'),
        V('Would you choose your favorite number for a phone number if you could?', 'Вы бы выбрали любимое число для номера телефона, если бы могли?', 'Мүмкін болса, телефон нөмірі үшін сүйікті санды таңдар ма едіңіз?'),
        V('Do children usually have favorite numbers?', 'У детей обычно есть любимые числа?', 'Балаларда әдетте сүйікті сандар бола ма?'),
        V('Has your favorite number ever changed?', 'Ваше любимое число когда-нибудь менялось?', 'Сүйікті саныңыз өзгерді ме?'),
        V('What is the significance of numbers in your culture?', 'Какое значение имеют числа в вашей культуре?', 'Мәдениетіңізде сандардың қандай маңызы бар?'),
    ],
];

require __DIR__ . '/seed_lessons_batch11_part2.php';
