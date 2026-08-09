<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[165] = [ // Home Cooking vs Takeout
    V('What is your favorite dish to order for takeout?', 'Какое ваше любимое блюдо на вынос?', 'Әкетуге тапсырыс беретін сүйікті тағамыңыз қандай?'),
    V('Do you cook more on weekdays or weekends?', 'Вы готовите больше в будни или выходные?', 'Жұмыс күндері көбірек пісіресіз бе, әлде демалыс күндері ме?'),
    V('Have you ever tried to recreate a takeout dish at home?', 'Вы когда-нибудь пытались приготовить дома блюдо навынос?', 'Үйде әкету тағамын қайталап пісіріп көрдіңіз бе?'),
    V('What stops you from cooking more often?', 'Что мешает вам готовить чаще?', 'Жиірек пісіруге сізге не кедергі болады?'),
    V('Do you enjoy the process of cooking, or just eating the result?', 'Вам нравится сам процесс готовки или только результат?', 'Пісіру процесін ұнатасыз ба, әлде тек нәтижесін ба?'),
    V('Is takeout food more expensive than cooking at home in your area?', 'Еда на вынос дороже, чем готовка дома, в вашем районе?', 'Ауданыңызда әкету тағамы үйде пісіргеннен қымбат па?'),
    V('Do you order takeout when you have guests?', 'Вы заказываете еду на вынос, когда у вас гости?', 'Қонақтарыңыз болғанда әкету тағамын тапсырыс бересіз бе?'),
    V('What is a meal you always cook from scratch?', 'Какое блюдо вы всегда готовите с нуля?', 'Әрдайым нөлден пісіретін тағамыңыз қандай?'),
    V('Would you cook more if you had more time?', 'Вы бы готовили больше, если бы у вас было больше времени?', 'Уақытыңыз көп болса, көбірек пісірер ме едіңіз?'),
];

$NEW9[166] = [ // Personal Finance Basics
    V('Do you compare prices before making big purchases?', 'Вы сравниваете цены перед крупными покупками?', 'Үлкен сатып алу алдында бағаларды салыстырасыз ба?'),
    V('Have you ever made a budget and stuck to it?', 'Вы когда-нибудь составляли бюджет и придерживались его?', 'Бюджет жасап, соны ұстандыңыз ба?'),
    V('What is something you saved up for a long time to buy?', 'На что вы долго копили деньги?', 'Ұзақ уақыт ақша жинап сатып алған затыңыз бар ма?'),
    V('Do you talk about money openly with family or friends?', 'Вы открыто говорите о деньгах с семьёй или друзьями?', 'Ақша туралы отбасыңызбен немесе достарыңызбен ашық сөйлесесіз бе?'),
    V('Have you ever borrowed money and had trouble repaying it?', 'Вы когда-нибудь занимали деньги и вам было трудно их вернуть?', 'Ақша қарызға алып, қайтаруда қиналдыңыз ба?'),
    V('What would you do with an unexpected bonus?', 'Что бы вы сделали с неожиданным бонусом?', 'Күтпеген сыйақымен не істер едіңіз?'),
    V('Do you think financial education should be taught in schools?', 'Как вы думаете, финансовую грамотность нужно преподавать в школах?', 'Сіздің ойыңызша, мектептерде қаржылық сауаттылықты оқыту керек пе?'),
    V('Have you ever helped someone else with their finances?', 'Вы когда-нибудь помогали кому-то с финансами?', 'Біреуге қаржысында көмектестіңіз бе?'),
    V('What is one money habit you are proud of?', 'Какая ваша финансовая привычка вызывает у вас гордость?', 'Мақтан тұтатын ақшаға қатысты әдетіңіз қандай?'),
];

$NEW9[167] = [ // Weekend Markets
    V('Do you go to markets in the morning or later in the day?', 'Вы ходите на рынок утром или позже днём?', 'Базарға таңертең барасыз ба, әлде күннің кейінгі уақытында ма?'),
    V('Have you ever haggled for a better price at a market?', 'Вы когда-нибудь торговались за лучшую цену на рынке?', 'Базарда жақсырақ баға үшін саудаластыңыз ба?'),
    V('What food do you always try at a market?', 'Какую еду вы всегда пробуете на рынке?', 'Базарда әрдайым қандай тағамды татып көресіз?'),
    V('Do you prefer indoor markets or outdoor ones?', 'Вы предпочитаете крытые рынки или уличные?', 'Жабық базарларды ұнатасыз ба, әлде ашық базарларды ма?'),
    V('Have you ever gotten lost in a big market?', 'Вы когда-нибудь терялись на большом рынке?', 'Үлкен базарда адасып қалдыңыз ба?'),
    V('What is the most unusual thing you have seen for sale at a market?', 'Какая самая необычная вещь, которую вы видели на продаже на рынке?', 'Базарда сатылатын көрген ең ерекше зат қандай болды?'),
    V('Do you enjoy talking to vendors at markets?', 'Вам нравится общаться с продавцами на рынке?', 'Базардағы сатушылармен сөйлескенді ұнатасыз ба?'),
    V('Have you ever bought something you regretted at a market?', 'Вы когда-нибудь покупали на рынке то, о чём потом жалели?', 'Базарда өкінген затты сатып алдыңыз ба?'),
    V('What makes a market special compared to a regular store?', 'Что делает рынок особенным по сравнению с обычным магазином?', 'Базарды қарапайым дүкеннен ерекшелейтін не нәрсе?'),
];

$NEW9[168] = [ // City Landmarks
    V('Have you ever taken a photo at a famous landmark?', 'Вы когда-нибудь фотографировались у известной достопримечательности?', 'Танымал көрікті жерде суретке түстіңіз бе?'),
    V('Do locals visit landmarks as often as tourists do?', 'Местные жители посещают достопримечательности так же часто, как туристы?', 'Жергілікті тұрғындар көрікті жерлерге туристер сияқты жиі бара ма?'),
    V('What landmark would you like to see in another country?', 'Какую достопримечательность вы хотели бы увидеть в другой стране?', 'Басқа елде қандай көрікті жерді көргіңіз келеді?'),
    V('Have you ever been disappointed by a famous landmark?', 'Вас когда-нибудь разочаровывала известная достопримечательность?', 'Танымал көрікті жер сізді көңіліңізден шығарды ма?'),
    V('Do you know the history behind your city\'s most famous landmark?', 'Вы знаете историю самой известной достопримечательности вашего города?', 'Қалаңыздың ең танымал көрікті жерінің тарихын білесіз бе?'),
    V('What time of day is best to visit a busy landmark?', 'В какое время дня лучше всего посещать людное место?', 'Адам көп көрікті жерге баруға күннің қай уақыты жақсы?'),
    V('Have you ever waited in a long line to see something famous?', 'Вы когда-нибудь стояли в длинной очереди, чтобы увидеть что-то известное?', 'Танымал нәрсені көру үшін ұзақ кезекте тұрдыңыз ба?'),
    V('Do you prefer natural landmarks or man-made ones?', 'Вы предпочитаете природные достопримечательности или созданные человеком?', 'Табиғи көрікті жерлерді ұнатасыз ба, әлде адам жасағанын ба?'),
    V('What landmark best represents your country?', 'Какая достопримечательность лучше всего представляет вашу страну?', 'Еліңізді ең жақсы білдіретін көрікті жер қайсы?'),
];

$NEW9[169] = [ // Volunteering Locally
    V('Have you ever organized a volunteer event yourself?', 'Вы когда-нибудь сами организовывали волонтёрское мероприятие?', 'Еріктілер іс-шарасын өзіңіз ұйымдастырдыңыз ба?'),
    V('What skills do you have that could help a community project?', 'Какие у вас навыки, которые могли бы помочь общественному проекту?', 'Қауымдастық жобасына көмектесе алатын қандай дағдыларыңыз бар?'),
    V('Do you think companies should give employees time off to volunteer?', 'Как вы думаете, компании должны давать сотрудникам время для волонтёрства?', 'Сіздің ойыңызша, компаниялар қызметкерлерге еріктілік үшін уақыт беруі керек пе?'),
    V('Have you ever volunteered abroad?', 'Вы когда-нибудь занимались волонтёрством за границей?', 'Шетелде еріктілік жасадыңыз ба?'),
    V('What cause do you care about the most?', 'Какое дело вас волнует больше всего?', 'Ең көп алаңдайтын мәселеңіз қандай?'),
    V('Do you think young people volunteer enough today?', 'Как вы думаете, молодёжь сегодня достаточно волонтёрит?', 'Сіздің ойыңызша, қазіргі жастар жеткілікті еріктілік жасай ма?'),
    V('Have you ever received help from a volunteer?', 'Вы когда-нибудь получали помощь от волонтёра?', 'Еріктіден көмек алдыңыз ба?'),
    V('What stops people from volunteering more often?', 'Что мешает людям заниматься волонтёрством чаще?', 'Адамдардың жиірек еріктілік жасауына не кедергі болады?'),
    V('Would you volunteer regularly if you had more free time?', 'Вы бы регулярно занимались волонтёрством, если бы у вас было больше свободного времени?', 'Бос уақытыңыз көп болса, тұрақты еріктілік жасар ма едіңіз?'),
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
