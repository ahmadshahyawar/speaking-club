<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[189] = [ // The Attention Economy
    V('Have you ever lost track of time scrolling on your phone?', 'Вы когда-нибудь теряли счёт времени, листая ленту на телефоне?', 'Телефонда шолу жасап уақыттан жаңылып қалдыңыз ба?'),
    V('Do you think notifications interrupt your focus too often?', 'Как вы думаете, уведомления слишком часто прерывают вашу концентрацию?', 'Сіздің ойыңызша, хабарландырулар назарыңызды тым жиі бөле ме?'),
    V('Have you ever deleted an app specifically to reclaim your attention?', 'Вы когда-нибудь удаляли приложение именно для того, чтобы вернуть себе внимание?', 'Назарыңызды қайтару үшін арнайы қосымшаны жойдыңыз ба?'),
    V('Do you think autoplay features manipulate how much content you consume?', 'Как вы думаете, функции автовоспроизведения манипулируют тем, сколько контента вы потребляете?', 'Сіздің ойыңызша, автоойнату функциялары қанша мазмұн тұтынатыныңызды манипуляциялай ма?'),
    V('Would you pay for an ad-free version of an app you use daily?', 'Вы бы заплатили за версию без рекламы приложения, которым пользуетесь ежедневно?', 'Күнделікті пайдаланатын қосымшаның жарнамасыз нұсқасы үшін ақы төлер ме едіңіз?'),
    V('Do you think children\'s attention is being shaped differently than yours was?', 'Как вы думаете, внимание детей сегодня формируется иначе, чем ваше в своё время?', 'Сіздің ойыңызша, балалардың назары сіздікінен өзгеше қалыптасып жатыр ма?'),
    V('Have you ever felt guilty after realizing how much time you spent online?', 'Вы когда-нибудь чувствовали вину, осознав, сколько времени провели онлайн?', 'Желіде қанша уақыт өткізгеніңізді түсінгеннен кейін кінәлі сезіндіңіз бе?'),
    V('Do you think silence or boredom has become harder to tolerate?', 'Как вы думаете, тишину или скуку стало труднее терпеть?', 'Сіздің ойыңызша, тыныштық немесе жалығуды төзу қиындады ма?'),
    V('What would your life look like with half the screen time you have now?', 'Как бы выглядела ваша жизнь с половиной текущего экранного времени?', 'Қазіргі экран уақытыңыздың жартысымен өміріңіз қандай болар еді?'),
];

$NEW9[190] = [ // Universal Basic Income
    V('Have you ever imagined what you would do with a guaranteed monthly income?', 'Вы когда-нибудь представляли, что бы вы делали с гарантированным ежемесячным доходом?', 'Кепілдендірілген айлық табыспен не істейтініңізді елестеттіңіз бе?'),
    V('Do you think UBI would discourage people from seeking creative work?', 'Как вы думаете, ББД отбил бы у людей желание искать творческую работу?', 'Сіздің ойыңызша, ӘНТ адамдарды шығармашылық жұмыс іздеуден бас тартқыза ма?'),
    V('Have you ever supported someone financially without expecting anything back?', 'Вы когда-нибудь поддерживали кого-то финансово, не ожидая ничего взамен?', 'Ешнәрсе күтпей біреуге қаржылай көмектестіңіз бе?'),
    V('Do you think a small-scale UBI trial in your country would succeed?', 'Как вы думаете, небольшой пробный проект ББД в вашей стране был бы успешным?', 'Сіздің еліңізде шағын ауқымды ӘНТ сынағы табысты бола ма деп ойлайсыз?'),
    V('Would UBI change how people value traditional employment?', 'ББД изменил бы то, как люди ценят традиционную занятость?', 'ӘНТ адамдардың дәстүрлі жұмысқа орналасуды бағалау тәсілін өзгертер ме еді?'),
    V('Do you think UBI could replace other social welfare programs entirely?', 'Как вы думаете, ББД мог бы полностью заменить другие программы социального обеспечения?', 'Сіздің ойыңызша, ӘНТ басқа әлеуметтік қамсыздандыру бағдарламаларын толығымен алмастыра ала ма?'),
    V('Have you ever struggled financially in a way UBI might have helped?', 'Вы когда-нибудь испытывали финансовые трудности, в которых ББД мог бы помочь?', 'ӘНТ көмектесе алатындай қаржылық қиындықты бастан кештіңіз бе?'),
    V('Do you think wealthy countries have a responsibility to try UBI first?', 'Как вы думаете, богатые страны обязаны первыми попробовать ББД?', 'Сіздің ойыңызша, бай елдер ӘНТ-ті бірінші болып сынап көруге жауапты ма?'),
    V('What is the biggest risk you see in implementing UBI?', 'Какой самый большой риск вы видите во внедрении ББД?', 'ӘНТ енгізуде көретін ең үлкен қауіп-қатеріңіз қандай?'),
];

$NEW9[191] = [ // The Ethics of Zoos and Aquariums
    V('Have you ever visited a zoo and felt it changed your view of animals?', 'Вы когда-нибудь посещали зоопарк, и это меняло ваш взгляд на животных?', 'Хайуанаттар бағына барғаныңызда, жануарларға көзқарасыңыз өзгергенін сезіндіңіз бе?'),
    V('Do you think online documentaries could replace the need for zoos?', 'Как вы думаете, онлайн-документальные фильмы могут заменить потребность в зоопарках?', 'Сіздің ойыңызша, онлайн деректі фильмдер хайуанаттар бағының қажеттілігін алмастыра ала ма?'),
    V('Have you ever supported a wildlife sanctuary or conservation charity?', 'Вы когда-нибудь поддерживали заповедник дикой природы или благотворительность по охране природы?', 'Жабайы табиғат қорығын немесе табиғатты қорғау қайырымдылығын қолдадыңыз ба?'),
    V('Do you think large marine animals should ever be kept in captivity?', 'Как вы думаете, крупных морских животных вообще следует держать в неволе?', 'Сіздің ойыңызша, ірі теңіз жануарлары тұтқында ұсталуы керек пе?'),
    V('Would you take your children to a zoo, or avoid it?', 'Вы бы взяли своих детей в зоопарк или избегали бы этого?', 'Балаларыңызды хайуанаттар бағына апарар ма едіңіз, әлде одан аулақ болар ма едіңіз?'),
    V('Do you think zoos genuinely contribute to saving endangered species?', 'Как вы думаете, зоопарки действительно способствуют спасению вымирающих видов?', 'Сіздің ойыңызша, хайуанаттар бағы жойылып бара жатқан түрлерді сақтауға шынымен үлес қоса ма?'),
    V('Have you ever felt torn between enjoying a zoo and worrying about the animals?', 'Вы когда-нибудь чувствовали себя разрывающимся между удовольствием от зоопарка и беспокойством о животных?', 'Хайуанаттар бағынан ләззат алу мен жануарлар үшін алаңдау арасында қиналдыңыз ба?'),
    V('Do you think future generations will view zoos as outdated?', 'Как вы думаете, будущие поколения будут считать зоопарки устаревшими?', 'Сіздің ойыңызша, болашақ ұрпақ хайуанаттар бағын ескірген деп санай ма?'),
    V('What would an ideal, ethical zoo look like to you?', 'Как бы выглядел идеальный, этичный зоопарк для вас?', 'Сіз үшін тамаша, этикалық хайуанаттар бағы қандай болар еді?'),
];

$NEW9[192] = [ // Cultural Appropriation vs Appreciation
    V('Have you ever worn or used something from a culture not your own?', 'Вы когда-нибудь носили или использовали что-то из культуры, не являющейся вашей?', 'Өз мәдениетіңізге жатпайтын бір нәрсені киіп немесе пайдаланып көрдіңіз бе?'),
    V('Have you ever been offended by how your own culture was represented elsewhere?', 'Вы когда-нибудь обижались на то, как ваша собственная культура была представлена в другом месте?', 'Өз мәдениетіңіздің басқа жерде көрсетілу тәсіліне ренжідіңіз бе?'),
    V('Do you think fashion brands should consult cultural experts before using traditional designs?', 'Как вы думаете, модные бренды должны консультироваться с экспертами по культуре перед использованием традиционных дизайнов?', 'Сіздің ойыңызша, сән бренддері дәстүрлі дизайнды пайдаланар алдында мәдениет сарапшыларымен кеңесуі керек пе?'),
    V('Have you ever corrected someone for misusing a cultural symbol?', 'Вы когда-нибудь поправляли кого-то за неправильное использование культурного символа?', 'Мәдени символды дұрыс пайдаланбаған адамды түзеттіңіз бе?'),
    V('Do you think globalization makes this issue harder to define?', 'Как вы думаете, глобализация усложняет определение этой проблемы?', 'Сіздің ойыңызша, жаһандану бұл мәселені анықтауды қиындата ма?'),
    V('Would you feel comfortable calling out a friend for cultural appropriation?', 'Вам было бы комфортно указать другу на культурное присвоение?', 'Досыңызды мәдени иемденуге байланысты сынауға ыңғайлы сезінер ме едіңіз?'),
    V('Do you think celebrating a culture always requires deep understanding of it?', 'Как вы думаете, празднование культуры всегда требует её глубокого понимания?', 'Сіздің ойыңызша, мәдениетті мерекелеу әрқашан оны терең түсінуді талап ете ме?'),
    V('Have you ever changed your mind about something you once considered appropriation?', 'Вы когда-нибудь меняли своё мнение о том, что раньше считали присвоением?', 'Бір кездері иемдену деп есептеген нәрсе туралы пікіріңізді өзгерттіңіз бе?'),
    V('What is one respectful way you think cultures can be shared across borders?', 'Какой один уважительный способ обмена культурами между границами, по-вашему?', 'Сіздің ойыңызша, мәдениеттерді шекара арқылы құрметпен бөлісудің бір жолы қандай?'),
];

$NEW9[193] = [ // The Housing Crisis
    V('Have you ever been priced out of a neighborhood you wanted to live in?', 'Вас когда-нибудь вытесняли из-за цен из района, где вы хотели жить?', 'Тұрғысы келген ауданда бағаға байланысты тұра алмай қалдыңыз ба?'),
    V('Do you think short-term rental platforms make the housing crisis worse?', 'Как вы думаете, платформы краткосрочной аренды усугубляют жилищный кризис?', 'Сіздің ойыңызша, қысқа мерзімді жалдау платформалары тұрғын үй дағдарысын күшейте ме?'),
    V('Have you ever shared housing with others just to afford rent?', 'Вы когда-нибудь делили жильё с другими только для того, чтобы позволить себе аренду?', 'Жалдау ақысын көтере алу үшін басқалармен пәтерді бөлістіңіз бе?'),
    V('Do you think building more housing is the real solution, or is it more complicated?', 'Как вы думаете, строительство большего количества жилья — это настоящее решение, или всё сложнее?', 'Сіздің ойыңызша, көбірек тұрғын үй салу нақты шешім бе, әлде бәрі күрделірек пе?'),
    V('Would you support limits on how many properties one person can own?', 'Вы бы поддержали ограничения на количество недвижимости, которой может владеть один человек?', 'Бір адамға тиесілі жылжымайтын мүлік санына шектеу қоюды қолдар ма едіңіз?'),
    V('Have you ever delayed a major life decision because of housing costs?', 'Вы когда-нибудь откладывали важное жизненное решение из-за стоимости жилья?', 'Тұрғын үй құнына байланысты маңызды өмірлік шешімді кейінге қалдырдыңыз ба?'),
    V('Do you think younger generations will ever catch up financially on housing?', 'Как вы думаете, молодые поколения когда-нибудь смогут финансово догнать в вопросе жилья?', 'Сіздің ойыңызша, жас ұрпақ тұрғын үй жағынан қаржылай қуып жете ала ма?'),
    V('Do you think remote work has changed where people want to live?', 'Как вы думаете, удалённая работа изменила то, где люди хотят жить?', 'Сіздің ойыңызша, қашықтан жұмыс адамдардың тұрғысы келетін жерін өзгертті ме?'),
    V('What is the biggest housing challenge in the city or town you live in?', 'Какая самая большая жилищная проблема в городе, где вы живёте?', 'Тұратын қалаңыздағы ең үлкен тұрғын үй мәселесі қандай?'),
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
