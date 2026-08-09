<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[69] = [ // Volunteering and Charity
    V('Do you think giving money is as valuable as giving time?', 'Как вы думаете, пожертвовать деньги так же ценно, как пожертвовать время?', 'Сіздің ойыңызша, ақша беру уақыт беру сияқты құнды ма?'),
    V('Have you ever organized a fundraiser?', 'Вы когда-нибудь организовывали сбор средств?', 'Қаражат жинау шарасын ұйымдастырдыңыз ба?'),
    V('Do you think charities spend donations responsibly?', 'Как вы думаете, благотворительные организации ответственно расходуют пожертвования?', 'Сіздің ойыңызша, қайырымдылық ұйымдары қайырымдылықты жауапкершілікпен жұмсай ма?'),
    V('What charitable cause do you think is underfunded?', 'Какое благотворительное дело, по-вашему, недофинансировано?', 'Сіздің ойыңызша, қаржыландырылуы жеткіліксіз қайырымдылық іс қандай?'),
    V('Would you volunteer for a cause you disagree with politically?', 'Вы бы стали волонтёром для дела, с которым не согласны политически?', 'Саяси тұрғыдан келіспейтін іс үшін еріктілік жасар ма едіңіз?'),
    V('Do you think schools should require students to volunteer?', 'Как вы думаете, школы должны требовать от учеников волонтёрства?', 'Мектептер оқушылардан еріктілік жасауды талап етуі керек пе?'),
    V('Have you ever been inspired by someone else\'s charity work?', 'Вас когда-нибудь вдохновляла чужая благотворительная работа?', 'Біреудің қайырымдылық жұмысы сізге шабыт берді ме?'),
    V('Do you prefer supporting local charities or international ones?', 'Вы предпочитаете поддерживать местные благотворительные организации или международные?', 'Жергілікті қайырымдылық ұйымдарын қолдағанды ұнатасыз ба, әлде халықаралықты ма?'),
    V('What is stopping more people from getting involved in charity work?', 'Что мешает большему числу людей заниматься благотворительностью?', 'Көбірек адамның қайырымдылық жұмысына қатысуына не кедергі болады?'),
];

$NEW9[70] = [ // Fashion and Self-Expression
    V('Have you ever changed your style completely?', 'Вы когда-нибудь полностью меняли свой стиль?', 'Стиліңізді толығымен өзгерттіңіз бе?'),
    V('Do you think fashion trends change too quickly today?', 'Как вы думаете, модные тренды сегодня меняются слишком быстро?', 'Сіздің ойыңызша, сән трендтері бүгінде тым жылдам өзгере ме?'),
    V('Would you wear something unusual if it made you happy?', 'Вы бы надели что-то необычное, если бы это делало вас счастливым?', 'Сізді қуантатын болса, ерекше нәрсе киер ме едіңіз?'),
    V('Do you think school uniforms limit self-expression?', 'Как вы думаете, школьная форма ограничивает самовыражение?', 'Сіздің ойыңызша, мектеп формасы өзін-өзі көрсетуді шектей ме?'),
    V('Have you ever regretted a fashion choice you made?', 'Вы когда-нибудь жалели о своём выборе одежды?', 'Жасаған киім таңдауыңызға өкіндіңіз бе?'),
    V('Do you think sustainable fashion is realistic for most people?', 'Как вы думаете, устойчивая мода реальна для большинства людей?', 'Сіздің ойыңызша, тұрақты сән көпшілік адам үшін шынайы ма?'),
    V('What outfit makes you feel most like yourself?', 'В каком наряде вы чувствуете себя наиболее собой?', 'Қандай киімде өзіңізді ең табиғи сезінесіз?'),
    V('Do you think social media has changed how people dress?', 'Как вы думаете, соцсети изменили то, как люди одеваются?', 'Сіздің ойыңызша, әлеуметтік желі адамдардың киіну тәсілін өзгертті ме?'),
    V('Would you ever design your own clothing line?', 'Вы бы когда-нибудь создали свою линию одежды?', 'Өз киім желіңізді жасар ма едіңіз?'),
];

$NEW9[71] = [ // Space and Astronomy
    V('Do you believe there is intelligent life elsewhere in the universe?', 'Вы верите, что во вселенной есть разумная жизнь в другом месте?', 'Ғаламда басқа жерде саналы өмір бар деп сенесіз бе?'),
    V('Have you ever watched a rocket launch, live or online?', 'Вы когда-нибудь смотрели запуск ракеты вживую или онлайн?', 'Зымыранның ұшырылуын тікелей немесе онлайн көрдіңіз бе?'),
    V('What space mission do you find most impressive in history?', 'Какая космическая миссия в истории впечатляет вас больше всего?', 'Тарихтағы ең әсерлі ғарыш миссиясы қандай?'),
    V('Do you think private companies should lead space exploration instead of governments?', 'Как вы думаете, частные компании должны возглавлять освоение космоса вместо правительств?', 'Сіздің ойыңызша, ғарышты игеруде үкіметтердің орнына жеке компаниялар жетекшілік етуі керек пе?'),
    V('What planet, other than Earth, interests you the most?', 'Какая планета, кроме Земли, интересует вас больше всего?', 'Жерден басқа қай планета сізге ең қызық?'),
    V('Do you think space tourism will become common in your lifetime?', 'Как вы думаете, космический туризм станет обычным делом при вашей жизни?', 'Сіздің ойыңызша, ғарыштық туризм өміріңізде кең таралады ма?'),
    V('Have you ever read or watched something about space that changed your perspective?', 'Вы когда-нибудь читали или смотрели что-то о космосе, что изменило ваш взгляд?', 'Ғарыш туралы көзқарасыңызды өзгерткен нәрсені оқыдыңыз ба немесе көрдіңіз бе?'),
    V('What mystery about the universe would you most like solved?', 'Какую тайну вселенной вы больше всего хотели бы разгадать?', 'Ғаламның қандай құпиясы ашылғанын қалайсыз?'),
    V('Do you think exploring space unites or divides countries?', 'Как вы думаете, освоение космоса объединяет или разделяет страны?', 'Сіздің ойыңызша, ғарышты игеру елдерді біріктіре ме, әлде бөле ме?'),
];

$NEW9[72] = [ // Books and Reading Habits
    V('Do you finish every book you start, even if you don\'t enjoy it?', 'Вы дочитываете каждую книгу, которую начали, даже если она вам не нравится?', 'Ұнатпасаңыз да, бастаған әрбір кітапты аяқтайсыз ба?'),
    V('Have you ever cried or laughed out loud while reading?', 'Вы когда-нибудь плакали или громко смеялись во время чтения?', 'Оқып отырып жылап немесе қатты күлдіңіз бе?'),
    V('What book would you recommend to everyone?', 'Какую книгу вы бы порекомендовали всем?', 'Барлығына қандай кітапты ұсынар едіңіз?'),
    V('Do you prefer reading alone in silence or in a busy place?', 'Вы предпочитаете читать в одиночестве в тишине или в людном месте?', 'Тыныштықта жалғыз оқығанды ұнатасыз ба, әлде адам көп жерде ме?'),
    V('Have you ever joined a book club?', 'Вы когда-нибудь состояли в книжном клубе?', 'Кітап клубына қатыстыңыз ба?'),
    V('What genre have you never tried but want to?', 'Какой жанр вы никогда не пробовали, но хотели бы?', 'Ешқашан сынамаған, бірақ қалайтын жанрыңыз бар ма?'),
    V('Do you think movie adaptations are usually worse than the books?', 'Как вы думаете, экранизации обычно хуже книг?', 'Сіздің ойыңызша, фильм нұсқалары әдетте кітаптан нашар ма?'),
    V('How has your reading habit changed since childhood?', 'Как изменилась ваша привычка чтения с детства?', 'Балалық шақтан бері оқу әдетіңіз қалай өзгерді?'),
    V('Would you rather meet a favorite author or a favorite character?', 'Вы бы предпочли встретить любимого автора или любимого персонажа?', 'Сүйікті авторыңызбен кездескенді қалайсыз ба, әлде сүйікті кейіпкеріңізбен бе?'),
];

$NEW9[73] = [ // Public Speaking and Communication
    V('Do you think listening is more important than speaking in communication?', 'Как вы думаете, слушание важнее говорения в общении?', 'Сіздің ойыңызша, қарым-қатынаста тыңдау сөйлеуден маңызды ма?'),
    V('Have you ever misunderstood someone due to poor communication?', 'Вы когда-нибудь неправильно понимали кого-то из-за плохого общения?', 'Нашар қарым-қатынасқа байланысты біреуді дұрыс түсінбей қалдыңыз ба?'),
    V('What communication skill do you wish you were better at?', 'В каком навыке общения вы хотели бы быть лучше?', 'Қарым-қатынас дағдысының қайсысында жақсырақ болғыңыз келеді?'),
    V('Do you think humor helps or hurts a speech?', 'Как вы думаете, юмор помогает или вредит выступлению?', 'Сіздің ойыңызша, әзіл сөзге пайдалы ма, әлде зиянды ма?'),
    V('Have you ever had to give a speech with little preparation time?', 'Вам когда-нибудь приходилось выступать с речью, имея мало времени на подготовку?', 'Дайындалуға уақыт аз болғанда сөз сөйлеуге тура келді ме?'),
    V('Do you think written communication is losing importance compared to speaking?', 'Как вы думаете, письменное общение теряет значение по сравнению с устным?', 'Сіздің ойыңызша, жазбаша қарым-қатынас ауызша сөйлеумен салыстырғанда маңызын жоғалтып жатыр ма?'),
    V('What is the biggest communication mistake people make in daily life?', 'Какая самая большая ошибка в общении, которую люди делают в повседневной жизни?', 'Адамдар күнделікті өмірде жіберетін ең үлкен қарым-қатынас қатесі қандай?'),
    V('Have you ever changed someone\'s opinion through a conversation?', 'Вы когда-нибудь меняли чьё-то мнение через разговор?', 'Әңгіме арқылы біреудің пікірін өзгерттіңіз бе?'),
    V('What is the difference between talking and truly communicating?', 'В чём разница между разговором и настоящим общением?', 'Сөйлесу мен шынайы қарым-қатынас жасаудың айырмашылығы неде?'),
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
