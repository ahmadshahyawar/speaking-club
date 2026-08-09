<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[170] = [ // Weather Emergencies
    V('Do you know your area\'s evacuation routes?', 'Вы знаете маршруты эвакуации в вашем районе?', 'Ауданыңыздың эвакуация жолдарын білесіз бе?'),
    V('Have you ever lost power for more than a day?', 'У вас когда-нибудь отключали электричество больше чем на день?', 'Бір күннен артық электрсіз қалдыңыз ба?'),
    V('What supplies do you think are most important in an emergency?', 'Какие припасы, по-вашему, самые важные в чрезвычайной ситуации?', 'Сіздің ойыңызша, төтенше жағдайда ең маңызды заттар қандай?'),
    V('Do you follow local news closely during storm season?', 'Вы внимательно следите за местными новостями в сезон штормов?', 'Дауыл маусымында жергілікті жаңалықтарды мұқият бақылайсыз ба?'),
    V('Have you ever helped a neighbor during bad weather?', 'Вы когда-нибудь помогали соседу во время плохой погоды?', 'Нашар ауа райында көршіге көмектестіңіз бе?'),
    V('What is the scariest weather event you have witnessed?', 'Какое самое страшное погодное явление вы видели?', 'Куә болған ең қорқынышты ауа райы құбылысы қандай болды?'),
    V('Do you trust weather warnings from the government?', 'Вы доверяете предупреждениям о погоде от правительства?', 'Үкіметтің ауа райы туралы ескертулеріне сенесіз бе?'),
    V('Have you ever had to leave your home due to weather?', 'Вам когда-нибудь приходилось покидать дом из-за погоды?', 'Ауа райына байланысты үйіңізден кетуге тура келді ме?'),
    V('What would you do first if a flood warning was issued?', 'Что бы вы сделали в первую очередь при объявлении предупреждения о наводнении?', 'Су тасқыны туралы ескерту жарияланса, бірінші не істер едіңіз?'),
];

$NEW9[171] = [ // Learning to Drive
    V('Who taught you how to drive?', 'Кто научил вас водить машину?', 'Көлік жүргізуге сізді кім үйретті?'),
    V('What was the hardest part of learning to drive?', 'Что было самым трудным в обучении вождению?', 'Көлік жүргізуді үйренудегі ең қиын бөлігі қандай болды?'),
    V('Have you ever had a near accident while driving?', 'У вас когда-нибудь чуть не случилась авария за рулём?', 'Көлік жүргізіп жатқанда апатқа жақындап қалдыңыз ба?'),
    V('Do you get nervous driving in bad weather?', 'Вы нервничаете, когда ведёте машину в плохую погоду?', 'Нашар ауа райында көлік жүргізгенде толқисыз ба?'),
    V('What is one driving rule you think people often break?', 'Какое правило вождения, по-вашему, люди часто нарушают?', 'Сіздің ойыңызша, адамдар жиі бұзатын жол ережесі қандай?'),
    V('Have you ever helped someone else learn to drive?', 'Вы когда-нибудь помогали кому-то научиться водить?', 'Біреуге көлік жүргізуді үйренуге көмектестіңіз бе?'),
    V('Do you prefer driving in the city or on highways?', 'Вы предпочитаете водить в городе или по трассе?', 'Қалада көлік жүргізгенді ұнатасыз ба, әлде трассада ма?'),
    V('What is your biggest fear about driving?', 'Чего вы больше всего боитесь в вождении?', 'Көлік жүргізуде ең көп неден қорқасыз?'),
    V('Would you rather drive or be a passenger on long trips?', 'Вы бы предпочли водить сами или быть пассажиром в долгих поездках?', 'Ұзақ сапарда өзіңіз жүргізгенді қалайсыз ба, әлде жолаушы болғанды ма?'),
];

$NEW9[172] = [ // Neighborhood Watch
    V('Have you ever witnessed a crime in your area?', 'Вы когда-нибудь были свидетелем преступления в своём районе?', 'Ауданыңызда қылмысқа куә болдыңыз ба?'),
    V('Do you lock your doors even during the day?', 'Вы запираете двери даже днём?', 'Күндіз де есіктеріңізді құлыптайсыз ба?'),
    V('Would you install a security camera at your home?', 'Вы бы установили камеру видеонаблюдения у себя дома?', 'Үйіңізге бақылау камерасын орнатар ма едіңіз?'),
    V('Do you know what to do if you see something suspicious?', 'Вы знаете, что делать, если увидите что-то подозрительное?', 'Күдікті нәрсе көрсеңіз не істеу керектігін білесіз бе?'),
    V('Have you ever helped catch someone doing something wrong?', 'Вы когда-нибудь помогали поймать кого-то за неправильным поступком?', 'Дұрыс емес әрекет жасаған адамды ұстауға көмектестіңіз бе?'),
    V('Do you think community trust prevents crime?', 'Как вы думаете, доверие в сообществе предотвращает преступность?', 'Сіздің ойыңызша, қауымдастықтағы сенім қылмыстың алдын алады ма?'),
    V('Would you feel comfortable calling the police for a minor issue?', 'Вам было бы комфортно звонить в полицию по незначительному поводу?', 'Кішігірім мәселе бойынша полицияға қоңырау шалу сізге ыңғайлы ма?'),
    V('Has crime in your area increased or decreased recently?', 'Преступность в вашем районе выросла или снизилась в последнее время?', 'Соңғы кезде ауданыңыздағы қылмыс өсті ме, әлде азайды ма?'),
    V('What makes you feel unsafe in your neighborhood?', 'Что заставляет вас чувствовать себя небезопасно в своём районе?', 'Ауданыңызда өзіңізді қауіпсіз сезінбеуге не себеп болады?'),
];

$NEW9[173] = [ // Seasonal Jobs
    V('Have you ever worked during a holiday season?', 'Вы когда-нибудь работали в праздничный сезон?', 'Мереке маусымында жұмыс істедіңіз бе?'),
    V('Do you think seasonal work experience helps future careers?', 'Как вы думаете, опыт сезонной работы помогает будущей карьере?', 'Сіздің ойыңызша, маусымдық жұмыс тәжірибесі болашақ мансапқа көмектесе ме?'),
    V('Would you move to another city for a seasonal job?', 'Вы бы переехали в другой город ради сезонной работы?', 'Маусымдық жұмыс үшін басқа қалаға көшер ме едіңіз?'),
    V('What seasonal job do you think is the most difficult?', 'Какая сезонная работа, по-вашему, самая трудная?', 'Сіздің ойыңызша, ең қиын маусымдық жұмыс қайсы?'),
    V('Have you ever hired someone for seasonal work?', 'Вы когда-нибудь нанимали кого-то на сезонную работу?', 'Маусымдық жұмысқа біреуді жалдадыңыз ба?'),
    V('Do you prefer stable jobs or the variety of seasonal work?', 'Вы предпочитаете стабильную работу или разнообразие сезонной?', 'Тұрақты жұмысты ұнатасыз ба, әлде маусымдық жұмыстың әртүрлілігін бе?'),
    V('What season do you think offers the most job opportunities?', 'Какой сезон, по-вашему, предлагает больше всего рабочих мест?', 'Сіздің ойыңызша, қай маусымда жұмыс мүмкіндігі көп болады?'),
    V('Have you ever worked with tourists?', 'Вы когда-нибудь работали с туристами?', 'Туристермен жұмыс істедіңіз бе?'),
    V('Would you take a seasonal job just for the experience, even with low pay?', 'Вы бы взялись за сезонную работу только ради опыта, даже с низкой оплатой?', 'Тәжірибе үшін ғана, тіпті жалақысы төмен болса да, маусымдық жұмысқа орналасар ма едіңіз?'),
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
