<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[132] = [ // Automation and Job Displacement
    V('Have you ever seen automation replace a job at your workplace?', 'Вы когда-нибудь видели, как автоматизация заменяла рабочее место у вас на работе?', 'Жұмыс орныңызда автоматтандырудың жұмыс орнын алмастырғанын көрдіңіз бе?'),
    V('Do you think a universal basic income would help if automation takes over many jobs?', 'Как вы думаете, безусловный базовый доход помог бы, если автоматизация заменит многие рабочие места?', 'Автоматтандыру көптеген жұмысты алмастырса, әмбебап негізгі табыс көмектесе ме?'),
    V('Would you trust a robot to perform a task that requires human judgment?', 'Вы бы доверили роботу выполнение задачи, требующей человеческого суждения?', 'Адами пайымдауды қажет ететін тапсырманы роботқа сенер ме едіңіз?'),
    V('Have you ever worked alongside a machine or automated system?', 'Вы когда-нибудь работали вместе с машиной или автоматизированной системой?', 'Машинамен немесе автоматтандырылған жүйемен қатар жұмыс істедіңіз бе?'),
    V('Do you think creative jobs are safe from automation forever?', 'Как вы думаете, творческие профессии навсегда защищены от автоматизации?', 'Сіздің ойыңызша, шығармашылық жұмыстар автоматтандырудан мәңгі қауіпсіз бе?'),
    V('Would you support a tax on companies that replace workers with robots?', 'Вы бы поддержали налог на компании, заменяющие работников роботами?', 'Жұмысшыларды роботтармен алмастыратын компанияларға салынатын салықты қолдар ма едіңіз?'),
    V('Have you ever felt anxious about your industry\'s future because of automation?', 'Вы когда-нибудь беспокоились о будущем своей отрасли из-за автоматизации?', 'Автоматтандыруға байланысты салаңыздың болашағы туралы алаңдадыңыз ба?'),
    V('Do you think automation will widen the gap between skilled and unskilled workers?', 'Как вы думаете, автоматизация увеличит разрыв между квалифицированными и неквалифицированными работниками?', 'Сіздің ойыңызша, автоматтандыру білікті және біліксіз жұмысшылар арасындағы алшақтықты кеңейте ме?'),
    V('What new job do you think automation might create that doesn\'t exist today?', 'Какую новую профессию, по-вашему, может создать автоматизация, которой сегодня не существует?', 'Сіздің ойыңызша, автоматтандыру бүгін жоқ қандай жаңа жұмыс орнын жасай алады?'),
];

$NEW9[133] = [ // Global Health Crises
    V('Have you ever changed your daily habits permanently because of a health crisis?', 'Вы когда-нибудь навсегда меняли свои повседневные привычки из-за кризиса здравоохранения?', 'Денсаулық сақтау дағдарысына байланысты күнделікті әдеттеріңізді мәңгілікке өзгерттіңіз бе?'),
    V('Do you think misinformation was as dangerous as the crisis itself?', 'Как вы думаете, дезинформация была так же опасна, как и сам кризис?', 'Сіздің ойыңызша, жалған ақпарат дағдарыстың өзіндей қауіпті болды ма?'),
    V('Have you ever lost someone you know to a widespread illness?', 'Вы когда-нибудь теряли знакомого человека из-за широко распространённой болезни?', 'Танысыңызды кең тараған аурудан айырылдыңыз ба?'),
    V('Do you think remote work became more accepted because of a health crisis?', 'Как вы думаете, удалённая работа стала более принятой из-за кризиса здравоохранения?', 'Сіздің ойыңызша, денсаулық сақтау дағдарысына байланысты қашықтан жұмыс көбірек қабылданды ма?'),
    V('Should international travel be restricted quickly during a new outbreak?', 'Должны ли международные поездки быстро ограничиваться во время новой вспышки?', 'Жаңа індет кезінде халықаралық сапарлар тез шектелуі керек пе?'),
    V('Have you ever volunteered or helped others during a difficult health situation?', 'Вы когда-нибудь были волонтёром или помогали другим в трудной ситуации со здоровьем?', 'Қиын денсаулық жағдайында еріктілік жасадыңыз ба немесе басқаларға көмектестіңіз бе?'),
    V('Do you think mental health suffered as much as physical health during recent crises?', 'Как вы думаете, психическое здоровье пострадало так же сильно, как физическое, во время недавних кризисов?', 'Сіздің ойыңызша, соңғы дағдарыстарда психикалық денсаулық дене денсаулығы сияқты зардап шекті ме?'),
    V('Do you trust international health organizations to handle the next crisis well?', 'Вы доверяете международным организациям здравоохранения в том, что они хорошо справятся со следующим кризисом?', 'Халықаралық денсаулық сақтау ұйымдарының келесі дағдарысты жақсы шешетініне сенесіз бе?'),
    V('What lesson do you hope society truly remembers from the last global health crisis?', 'Какой урок вы надеетесь, общество действительно запомнит из последнего глобального кризиса здравоохранения?', 'Соңғы ғаламдық денсаулық сақтау дағдарысынан қоғам шынымен есте сақтайды деп үміттенетін сабағыңыз қандай?'),
];

$NEW9[134] = [ // The Ethics of Surveillance
    V('Have you ever felt watched in a way that made you uncomfortable?', 'Вы когда-нибудь чувствовали, что за вами наблюдают так, что это вас беспокоило?', 'Сізді ыңғайсыз ететіндей бақылап тұрғандай сезіндіңіз бе?'),
    V('Do you think employers should be allowed to monitor employees\' online activity?', 'Как вы думаете, работодателям следует разрешить отслеживать онлайн-активность сотрудников?', 'Жұмыс берушілерге қызметкерлердің онлайн белсенділігін бақылауға рұқсат берілуі керек пе?'),
    V('Have you ever avoided saying something because you worried who might be listening?', 'Вы когда-нибудь избегали что-то сказать, потому что беспокоились, кто может слушать?', 'Кім тыңдап тұрғанын білмей алаңдап, бірдеңе айтудан аулақ болдыңыз ба?'),
    V('Do you think surveillance actually reduces crime, or just displaces it?', 'Как вы думаете, наблюдение действительно снижает преступность, или просто перемещает её?', 'Сіздің ойыңызша, бақылау қылмысты шынымен азайта ма, әлде тек басқа жерге ауыстыра ма?'),
    V('Would you support surveillance cameras inside your own neighborhood?', 'Вы бы поддержали камеры наблюдения в вашем собственном районе?', 'Өз ауданыңызда бақылау камераларын қолдар ма едіңіз?'),
    V('Do you think smart home devices listen to more than we realize?', 'Как вы думаете, устройства умного дома слушают больше, чем мы осознаём?', 'Сіздің ойыңызша, ақылды үй құрылғылары біз ойлағаннан көбірек тыңдай ма?'),
    V('Have you ever read the full privacy policy of a surveillance app or device?', 'Вы когда-нибудь читали полную политику конфиденциальности приложения или устройства наблюдения?', 'Бақылау қосымшасының немесе құрылғысының толық құпиялылық саясатын оқыдыңыз ба?'),
    V('Do you think surveillance technology will be harder to control in the future?', 'Как вы думаете, технологии наблюдения будет труднее контролировать в будущем?', 'Сіздің ойыңызша, болашақта бақылау технологиясын бақылау қиынырақ бола ма?'),
    V('What would make you comfortable trusting a government with surveillance power?', 'Что заставило бы вас спокойно доверять правительству полномочия наблюдения?', 'Үкіметке бақылау билігін сенуге не көмектесер еді?'),
];

$NEW9[135] = [ // Corporate Social Responsibility
    V('Have you ever boycotted a company because of its business practices?', 'Вы когда-нибудь бойкотировали компанию из-за её деловой практики?', 'Компанияны бизнес тәжірибесіне байланысты бойкоттадыңыз ба?'),
    V('Do you think small businesses have the same social responsibility as large corporations?', 'Как вы думаете, малый бизнес несёт такую же социальную ответственность, как крупные корпорации?', 'Сіздің ойыңызша, шағын бизнестің үлкен корпорациялармен бірдей әлеуметтік жауапкершілігі бар ма?'),
    V('Have you ever researched a company\'s charitable work before trusting its claims?', 'Вы когда-нибудь изучали благотворительную деятельность компании, прежде чем доверять её заявлениям?', 'Компанияның мәлімдемелеріне сенер алдында оның қайырымдылық жұмысын зерттедіңіз бе?'),
    V('Do you think employees should have a say in a company\'s social responsibility efforts?', 'Как вы думаете, сотрудники должны иметь право голоса в усилиях компании по социальной ответственности?', 'Сіздің ойыңызша, қызметкерлердің компанияның әлеуметтік жауапкершілік әрекеттеріне қатысты пікірі болуы керек пе?'),
    V('Would you work for a company whose values conflicted with your own?', 'Вы бы работали в компании, чьи ценности противоречат вашим?', 'Құндылықтары өзіңізбен қайшы келетін компанияда жұмыс істер ме едіңіз?'),
    V('Do you think consumers actually reward socially responsible companies with loyalty?', 'Как вы думаете, потребители действительно вознаграждают социально ответственные компании лояльностью?', 'Сіздің ойыңызша, тұтынушылар әлеуметтік жауапты компанияларды адалдықпен шынымен марапаттай ма?'),
    V('Have you ever felt manipulated by a company\'s charity campaign?', 'Вы когда-нибудь чувствовали себя обманутым благотворительной кампанией компании?', 'Компанияның қайырымдылық науқанына манипуляцияланғандай сезіндіңіз бе?'),
    V('Do you think social responsibility should be regulated by law rather than left voluntary?', 'Как вы думаете, социальная ответственность должна регулироваться законом, а не оставаться добровольной?', 'Сіздің ойыңызша, әлеуметтік жауапкершілік ерікті болудың орнына заңмен реттелуі керек пе?'),
    V('What would make you trust a company\'s social responsibility claims?', 'Что заставило бы вас доверять заявлениям компании о социальной ответственности?', 'Компанияның әлеуметтік жауапкершілік туралы мәлімдемелеріне сенуіңізге не себеп болар еді?'),
];

$NEW9[136] = [ // The Future of Work
    V('Have you ever worked a job that let you choose your own hours?', 'Вы когда-нибудь работали на работе, где могли сами выбирать часы работы?', 'Өз сағаттарыңызды таңдауға мүмкіндік беретін жұмыста істедіңіз бе?'),
    V('Do you think younger workers value flexibility more than older generations did?', 'Как вы думаете, молодые работники ценят гибкость больше, чем ценили старшие поколения?', 'Сіздің ойыңызша, жас қызметкерлер икемділікті үлкен ұрпаққа қарағанда көбірек бағалай ма?'),
    V('Have you ever felt burned out from constantly being reachable for work?', 'Вы когда-нибудь чувствовали выгорание от того, что постоянно доступны для работы?', 'Жұмыс үшін үнемі қолжетімді болудан шаршадыңыз ба?'),
    V('Do you think office spaces will become less necessary in the future?', 'Как вы думаете, офисные помещения станут менее необходимыми в будущем?', 'Сіздің ойыңызша, болашақта кеңсе кеңістіктері азырақ қажет бола ма?'),
    V('Would you take a pay cut for a more flexible work schedule?', 'Вы бы согласились на снижение зарплаты ради более гибкого графика работы?', 'Икемдірек жұмыс кестесі үшін жалақыңыздың азайғанына келісер ме едіңіз?'),
    V('Do you think artificial intelligence will change what "work" even means?', 'Как вы думаете, искусственный интеллект изменит само значение слова «работа»?', 'Сіздің ойыңызша, жасанды интеллект "жұмыс" деген сөздің мағынасын өзгерте ме?'),
    V('Have you ever struggled to separate work time from personal time at home?', 'Вам когда-нибудь было трудно отделить рабочее время от личного дома?', 'Үйде жұмыс уақыты мен жеке уақытты бөлуге қиналдыңыз ба?'),
    V('Do you think loyalty to a single employer is becoming outdated?', 'Как вы думаете, преданность одному работодателю устаревает?', 'Сіздің ойыңызша, бір жұмыс берушіге адалдық ескіріп бара жатыр ма?'),
    V('What does your ideal future workplace look like?', 'Как выглядит ваше идеальное будущее рабочее место?', 'Сіздің тамаша болашақ жұмыс орныңыз қандай болар еді?'),
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
