<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[241] = [ // Urban Green Spaces
    V('Have you ever helped plant trees or clean up a park?', 'Вы когда-нибудь помогали сажать деревья или убирать парк?', 'Ағаш отырғызуға немесе саябақты тазалауға көмектестіңіз бе?'),
    V('Do you think green spaces should be free for everyone to use?', 'Как вы думаете, зелёные зоны должны быть бесплатными для всех?', 'Сіздің ойыңызша, жасыл аймақтар бәріне тегін болуы керек пе?'),
    V('What activity do you enjoy most in a park?', 'Какое занятие вам больше всего нравится в парке?', 'Саябақта ең ұнататын әрекетіңіз қандай?'),
    V('Do you think wealthy neighborhoods have better access to green spaces?', 'Как вы думаете, богатые районы имеют лучший доступ к зелёным зонам?', 'Сіздің ойыңызша, бай аудандардың жасыл аймақтарға қолжетімділігі жақсырақ па?'),
    V('Have you ever avoided a park because it felt unsafe?', 'Вы когда-нибудь избегали парк, потому что он казался небезопасным?', 'Қауіпсіз көрінбегендіктен саябақтан аулақ болдыңыз ба?'),
    V('What is the most beautiful park you have ever visited?', 'Какой самый красивый парк вы когда-либо посещали?', 'Барған ең әдемі саябағыңыз қайсы болды?'),
    V('Do you think rooftop gardens are a good solution for crowded cities?', 'Как вы думаете, сады на крышах — хорошее решение для переполненных городов?', 'Сіздің ойыңызша, шатыр бақшалары адам көп қалалар үшін жақсы шешім бе?'),
    V('Have you ever picnicked in a public park?', 'Вы когда-нибудь устраивали пикник в общественном парке?', 'Көпшілік саябағында пикник жасадыңыз ба?'),
    V('What would motivate your city to build more green spaces?', 'Что мотивировало бы ваш город строить больше зелёных зон?', 'Қалаңызды көбірек жасыл аймақ салуға не итермелер еді?'),
];

$NEW9[242] = [ // The Art of Small Talk
    V('Do you prepare topics in advance before social events?', 'Вы готовите темы заранее перед светскими мероприятиями?', 'Әлеуметтік іс-шаралар алдында тақырыптарды алдын ала дайындайсыз ба?'),
    V('Have you ever accidentally offended someone during small talk?', 'Вы когда-нибудь случайно обижали кого-то во время светской беседы?', 'Жеңіл әңгіме кезінде кездейсоқ біреуді ренжітіп алдыңыз ба?'),
    V('What small talk topic do you find the most boring?', 'Какая тема светской беседы кажется вам самой скучной?', 'Ең жалықтырушы жеңіл әңгіме тақырыбы қандай?'),
    V('Do you think weather is a universal small talk topic everywhere?', 'Как вы думаете, погода — универсальная тема для светской беседы везде?', 'Сіздің ойыңызша, ауа райы барлық жерде әмбебап жеңіл әңгіме тақырыбы ма?'),
    V('Have you ever turned small talk into a meaningful conversation?', 'Вы когда-нибудь превращали светскую беседу в содержательный разговор?', 'Жеңіл әңгімені мәнді сұхбатқа айналдырдыңыз ба?'),
    V('Do you find small talk easier in your native language or in English?', 'Вам легче вести светскую беседу на родном языке или на английском?', 'Жеңіл әңгіме сізге ана тіліңізде жеңіл ме, әлде ағылшынша ма?'),
    V('What is your least favorite small talk question to be asked?', 'Какой вопрос для светской беседы вам меньше всего нравится слышать?', 'Сізге қойылатын ең ұнатпайтын жеңіл әңгіме сұрағы қандай?'),
    V('Do you think introverts and extroverts approach small talk differently?', 'Как вы думаете, интроверты и экстраверты по-разному подходят к светской беседе?', 'Сіздің ойыңызша, интроверттер мен экстроверттер жеңіл әңгімеге басқаша қарай ма?'),
    V('What is the best way to end a small talk conversation politely?', 'Какой лучший способ вежливо завершить светскую беседу?', 'Жеңіл әңгімені әдепті түрде аяқтаудың ең жақсы жолы қандай?'),
];

$NEW9[243] = [ // Ethical Consumerism
    V('Have you ever chosen a more expensive ethical option over a cheaper one?', 'Вы когда-нибудь выбирали более дорогой этичный вариант вместо дешёвого?', 'Арзан нұсқаның орнына қымбатырақ этикалық нұсқаны таңдадыңыз ба?'),
    V('Do you think ethical consumerism is only possible for wealthy people?', 'Как вы думаете, этичное потребление возможно только для богатых людей?', 'Сіздің ойыңызша, этикалық тұтыну тек бай адамдар үшін мүмкін бе?'),
    V('What certification or label do you trust when shopping ethically?', 'Какому сертификату или маркировке вы доверяете при этичных покупках?', 'Этикалық сауда жасағанда қандай сертификатқа немесе белгіге сенесіз?'),
    V('Have you ever researched a company\'s labor practices before buying from them?', 'Вы когда-нибудь изучали трудовые практики компании перед покупкой у неё?', 'Компаниядан сатып алар алдында оның еңбек тәжірибесін зерттедіңіз бе?'),
    V('Do you think individual consumer choices can create real change?', 'Как вы думаете, индивидуальный выбор потребителя может создать реальные перемены?', 'Сіздің ойыңызша, жеке тұтынушы таңдауы нақты өзгеріс жасай ала ма?'),
    V('What product do you wish had a more ethical alternative?', 'Для какого продукта вы хотели бы, чтобы существовала более этичная альтернатива?', 'Қандай өнімнің этикалық баламасы болғанын қалайсыз?'),
    V('Have you ever felt guilty about a purchase after learning more about it?', 'Вы когда-нибудь чувствовали себя виноватым за покупку, узнав о ней больше?', 'Сатып алу туралы көбірек білгеннен кейін кінәлі сезіндіңіз бе?'),
    V('Do you think governments should regulate ethical business practices more?', 'Как вы думаете, правительства должны сильнее регулировать этичные деловые практики?', 'Сіздің ойыңызша, үкіметтер этикалық бизнес тәжірибесін көбірек реттеуі керек пе?'),
    V('What is the hardest part about being an ethical consumer?', 'Что самое трудное в том, чтобы быть этичным потребителем?', 'Этикалық тұтынушы болудың ең қиын бөлігі қандай?'),
];

$NEW9[244] = [ // The Science of Habit Formation
    V('Have you ever failed to build a habit despite trying hard?', 'Вы когда-нибудь не могли выработать привычку, несмотря на старания?', 'Тырысқаныңызбен әдет қалыптастыра алмай қалдыңыз ба?'),
    V('Do you think habits are easier to build alone or with someone else?', 'Как вы думаете, привычки легче формировать в одиночку или с кем-то ещё?', 'Сіздің ойыңызша, әдетті жалғыз қалыптастыру оңай ма, әлде біреумен бе?'),
    V('What environment change helped you build a new habit?', 'Какое изменение окружения помогло вам выработать новую привычку?', 'Жаңа әдет қалыптастыруға қандай орта өзгерісі көмектесті?'),
    V('Have you ever used a habit tracker or journal?', 'Вы когда-нибудь использовали трекер привычек или дневник?', 'Әдет бақылаушысын немесе күнделікті пайдаландыңыз ба?'),
    V('Do you think identity, like calling yourself "a runner," helps build habits?', 'Как вы думаете, идентичность, например называть себя «бегуном», помогает формировать привычки?', 'Сіздің ойыңызша, өзіңізді "жүгіруші" деп атау сияқты сәйкестік әдет қалыптастыруға көмектесе ме?'),
    V('What is a habit you built without even realizing it?', 'Какая привычка сформировалась у вас, даже не осознавая этого?', 'Байқамай қалыптасқан әдетіңіз бар ма?'),
    V('Do you think breaking a habit is harder than building one?', 'Как вы думаете, отказаться от привычки труднее, чем её выработать?', 'Сіздің ойыңызша, әдеттен арылу оны қалыптастырудан қиын ба?'),
    V('Have you ever helped someone else build a positive habit?', 'Вы когда-нибудь помогали кому-то выработать полезную привычку?', 'Біреуге пайдалы әдет қалыптастыруға көмектестіңіз бе?'),
    V('What habit would most improve your life if you built it today?', 'Какая привычка больше всего улучшила бы вашу жизнь, если бы вы выработали её сегодня?', 'Бүгін қалыптастырсаңыз, өміріңізді ең көп жақсартатын әдет қандай?'),
];

$NEW9[245] = [ // Language and Thought
    V('Have you ever dreamed in a language other than your native one?', 'Вы когда-нибудь видели сны на языке, отличном от родного?', 'Ана тіліңізден басқа тілде түс көрдіңіз бе?'),
    V('Do you think some emotions are easier to express in certain languages?', 'Как вы думаете, некоторые эмоции легче выразить на определённых языках?', 'Сіздің ойыңызша, кейбір эмоцияларды белгілі бір тілдерде білдіру оңай ма?'),
    V('Have you ever found a word in another language with no direct translation?', 'Вы когда-нибудь находили слово на другом языке без прямого перевода?', 'Тікелей аудармасы жоқ басқа тілдегі сөзді таптыңыз ба?'),
    V('Do you think people who speak multiple languages have different personalities in each?', 'Как вы думаете, у людей, говорящих на нескольких языках, разные личности в каждом?', 'Сіздің ойыңызша, бірнеше тілде сөйлейтін адамдардың әр тілде әртүрлі мінезі бола ма?'),
    V('Has learning a language ever helped you understand a culture better?', 'Изучение языка когда-нибудь помогало вам лучше понять культуру?', 'Тіл үйрену мәдениетті жақсырақ түсінуге көмектесті ме?'),
    V('Do you think language shapes how we perceive time or color?', 'Как вы думаете, язык формирует то, как мы воспринимаем время или цвет?', 'Сіздің ойыңызша, тіл уақыт немесе түсті қабылдауымызды қалыптастыра ма?'),
    V('Have you ever accidentally mixed two languages together while speaking?', 'Вы когда-нибудь случайно смешивали два языка во время разговора?', 'Сөйлеп жатып кездейсоқ екі тілді араластырып алдыңыз ба?'),
    V('What word in your native language do you wish existed in English?', 'Какое слово из вашего родного языка вы хотели бы видеть в английском?', 'Ана тіліңіздегі қандай сөздің ағылшын тілінде болғанын қалайсыз?'),
    V('Do you think losing a language changes how a community thinks?', 'Как вы думаете, потеря языка меняет то, как думает сообщество?', 'Сіздің ойыңызша, тілдің жоғалуы қауымдастықтың ойлау тәсілін өзгерте ме?'),
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
