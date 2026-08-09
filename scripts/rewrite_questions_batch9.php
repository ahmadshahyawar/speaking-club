<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[14] = [ // Travel and Transportation
    V('Have you ever driven a car in another country?', 'Вы когда-нибудь водили машину в другой стране?', 'Басқа елде көлік жүргіздіңіз бе?'),
    V('What is the longest flight you have ever taken?', 'Какой самый долгий перелёт у вас был?', 'Болған ең ұзақ ұшу сапарыңыз қандай болды?'),
    V('Do you get travel sick on buses or boats?', 'Вас укачивает в автобусе или на лодке?', 'Автобуста немесе қайықта теңіз ауруы ұстай ма?'),
    V('What form of transportation do you use most often?', 'Каким видом транспорта вы пользуетесь чаще всего?', 'Қай көлік түрін ең жиі пайдаланасыз?'),
    V('Have you ever traveled by overnight train?', 'Вы когда-нибудь путешествовали на ночном поезде?', 'Түнгі пойызбен саяхаттадыңыз ба?'),
    V('Do you prefer window seats or aisle seats?', 'Вы предпочитаете места у окна или у прохода?', 'Терезе жанындағы орынды ұнатасыз ба, әлде өтпе жол жанындағыны ма?'),
    V('What is one travel mistake you learned from?', 'Какая ошибка в путешествии научила вас чему-то?', 'Саяхатта жасаған, сабақ болған қатеңіз қандай болды?'),
    V('Would you like to travel by cruise ship one day?', 'Хотели бы вы когда-нибудь путешествовать на круизном лайнере?', 'Бір күні круиздік лайнермен саяхаттағыңыз келе ме?'),
    V('What is the most unusual way you have ever traveled?', 'Каким самым необычным способом вы когда-либо путешествовали?', 'Саяхаттаған ең ерекше тәсіліңіз қандай болды?'),
];

$NEW9[15] = [ // Shopping
    V('Do you enjoy window shopping without buying anything?', 'Вам нравится рассматривать витрины, ничего не покупая?', 'Ештеңе сатып алмай, витриналарды тамашалауды ұнатасыз ба?'),
    V('What is the most expensive thing you have ever bought?', 'Какая самая дорогая вещь, которую вы когда-либо покупали?', 'Сатып алған ең қымбат затыңыз қандай болды?'),
    V('Do you compare prices between stores before buying?', 'Вы сравниваете цены в разных магазинах перед покупкой?', 'Сатып алар алдында дүкендер арасында бағаны салыстырасыз ба?'),
    V('Have you ever waited for a sale to buy something?', 'Вы когда-нибудь ждали распродажи, чтобы что-то купить?', 'Бір затты сатып алу үшін жеңілдікті күттіңіз бе?'),
    V('What do you usually buy for yourself as a treat?', 'Что вы обычно покупаете себе в качестве подарка?', 'Өзіңізге сыйлық ретінде әдетте не сатып аласыз?'),
    V('Do you shop more with cash or with cards?', 'Вы чаще расплачиваетесь наличными или картой?', 'Көбіне қолма-қол ақшамен төлейсіз бе, әлде картамен бе?'),
    V('Have you ever bought something you never used?', 'Вы когда-нибудь покупали то, чем так и не воспользовались?', 'Ешқашан пайдаланбаған затты сатып алдыңыз ба?'),
    V('What kind of shop do you enjoy visiting most?', 'Какой тип магазина вам больше всего нравится посещать?', 'Қай дүкенге баруды ең көп ұнатасыз?'),
    V('Do you find shopping relaxing or stressful?', 'Шопинг вас расслабляет или напрягает?', 'Сауда жасау сізді демалдырады ма, әлде күйзелтеді ме?'),
];

$NEW9[16] = [ // Health and Body
    V('Do you take any vitamins or supplements?', 'Вы принимаете витамины или добавки?', 'Витамин немесе қоспалар ішесіз бе?'),
    V('How do you usually recover from a cold?', 'Как вы обычно выздоравливаете от простуды?', 'Тұмаудан әдетте қалай жазылып шығасыз?'),
    V('Do you think stress affects your physical health?', 'Как вы думаете, стресс влияет на ваше физическое здоровье?', 'Сіздің ойыңызша, стресс дене денсаулығыңызға әсер ете ме?'),
    V('What is one thing you do to relax your mind?', 'Что вы делаете, чтобы расслабить свой разум?', 'Ойыңызды демалдыру үшін не істейсіз?'),
    V('Have you ever changed your diet for health reasons?', 'Вы когда-нибудь меняли питание по состоянию здоровья?', 'Денсаулыққа байланысты тамақтануыңызды өзгерттіңіз бе?'),
    V('Do you prefer exercising outdoors or at a gym?', 'Вы предпочитаете заниматься спортом на улице или в зале?', 'Сыртта жаттығуды ұнатасыз ба, әлде спортзалда ма?'),
    V('What health advice would you give a friend?', 'Какой совет по здоровью вы бы дали другу?', 'Досыңызға денсаулық жайлы қандай кеңес берер едіңіз?'),
    V('Do you get regular check-ups even when you feel fine?', 'Вы проходите регулярные осмотры, даже когда чувствуете себя хорошо?', 'Өзіңізді жақсы сезінсеңіз де тұрақты тексеруден өтесіз бе?'),
    V('What is your biggest challenge in staying healthy?', 'Какая ваша самая большая трудность в поддержании здоровья?', 'Денсаулықты сақтаудағы ең үлкен қиындығыңыз қандай?'),
];

$NEW9[17] = [ // Sports
    V('Have you ever played a sport competitively?', 'Вы когда-нибудь занимались спортом на соревновательном уровне?', 'Спортпен жарыс деңгейінде айналыстыңыз ба?'),
    V('What sport do you think is the most difficult?', 'Какой вид спорта, по-вашему, самый трудный?', 'Сіздің ойыңызша, ең қиын спорт түрі қайсы?'),
    V('Do you enjoy extreme sports?', 'Вам нравятся экстремальные виды спорта?', 'Экстремалды спортты ұнатасыз ба?'),
    V('Have you ever watched a sports event live at a stadium?', 'Вы когда-нибудь смотрели спортивное событие вживую на стадионе?', 'Стадионда спорттық іс-шараны тікелей көрдіңіз бе?'),
    V('What sport would you like to learn?', 'Какому виду спорта вы хотели бы научиться?', 'Қандай спорт түрін үйренгіңіз келеді?'),
    V('Do you think esports should be considered a real sport?', 'Как вы думаете, киберспорт должен считаться настоящим спортом?', 'Сіздің ойыңызша, киберспорт нақты спорт болып саналуы керек пе?'),
    V('What is your opinion about athletes\' high salaries?', 'Что вы думаете о высоких зарплатах спортсменов?', 'Спортшылардың жоғары жалақысы туралы пікіріңіз қандай?'),
    V('Did you ever get injured while playing sports?', 'Вы когда-нибудь получали травму во время занятий спортом?', 'Спортпен айналысқанда жарақат алдыңыз ба?'),
    V('Do you follow any sports league closely?', 'Вы внимательно следите за какой-либо спортивной лигой?', 'Қандай да бір спорт лигасын мұқият бақылайсыз ба?'),
];

$NEW9[18] = [ // Seasons and Holidays
    V('Do you decorate your home for holidays?', 'Вы украшаете дом к праздникам?', 'Мерекеге үйіңізді безендіресіз бе?'),
    V('What holiday food do you look forward to every year?', 'Какую праздничную еду вы ждёте каждый год?', 'Жыл сайын қандай мерекелік тағамды асыға күтесіз?'),
    V('Have you ever spent a holiday alone?', 'Вы когда-нибудь проводили праздник в одиночестве?', 'Мерекені жалғыз өткіздіңіз бе?'),
    V('What holiday from another country would you like to celebrate?', 'Какой праздник из другой страны вы хотели бы отметить?', 'Басқа елдің қандай мерекесін тойлағыңыз келеді?'),
    V('Do you prefer big celebrations or quiet ones?', 'Вы предпочитаете большие торжества или тихие?', 'Үлкен тойларды ұнатасыз ба, әлде тыныш мерекені ме?'),
    V('Have holiday traditions changed in your family over time?', 'Праздничные традиции в вашей семье менялись со временем?', 'Отбасыңыздағы мерекелік дәстүрлер уақыт өте өзгерді ме?'),
    V('What is the most memorable holiday you have had?', 'Какой праздник вам запомнился больше всего?', 'Ең есте қалған мерекеңіз қандай болды?'),
    V('Do you travel during holidays, or stay home?', 'Вы путешествуете во время праздников или остаётесь дома?', 'Мереке кезінде саяхаттайсыз ба, әлде үйде қаласыз ба?'),
    V('What season do most holidays happen in your country?', 'В какое время года в вашей стране больше всего праздников?', 'Еліңізде мерекелердің көбі қай мезгілде өтеді?'),
];

$NEW9[19] = [ // Technology
    V('Do you think social media has more benefits or drawbacks?', 'Как вы думаете, у соцсетей больше плюсов или минусов?', 'Сіздің ойыңызша, әлеуметтік желілердің пайдасы көп пе, әлде зияны ма?'),
    V('Have you ever felt addicted to your phone?', 'Вы когда-нибудь чувствовали зависимость от телефона?', 'Телефоныңызға тәуелді болғаныңызды сезіндіңіз бе?'),
    V('What technology do you avoid using?', 'Какую технологию вы избегаете использовать?', 'Қандай технологияны пайдаланудан аулақ боласыз?'),
    V('Do you trust artificial intelligence tools?', 'Вы доверяете инструментам искусственного интеллекта?', 'Жасанды интеллект құралдарына сенесіз бе?'),
    V('What was the last software update you installed?', 'Какое последнее обновление программного обеспечения вы устанавливали?', 'Орнатқан соңғы бағдарламалық жаңартуыңыз қандай болды?'),
    V('Do you back up your important files and photos?', 'Вы делаете резервные копии важных файлов и фото?', 'Маңызды файлдар мен фотосуреттердің көшірмесін сақтайсыз ба?'),
    V('How has technology changed the way you communicate?', 'Как технологии изменили ваш способ общения?', 'Технология қарым-қатынас жасау тәсіліңізді қалай өзгертті?'),
    V('Do you think privacy online is possible today?', 'Как вы думаете, конфиденциальность онлайн сегодня возможна?', 'Сіздің ойыңызша, бүгінде онлайн жекеменшік мүмкін бе?'),
    V('What piece of technology could you not live without?', 'Без какой технологии вы не смогли бы жить?', 'Қандай технологиясыз өмір сүре алмас едіңіз?'),
];

$NEW9[20] = [ // City and Directions
    V('Have you ever given someone directions in another language?', 'Вы когда-нибудь объясняли дорогу на другом языке?', 'Басқа тілде біреуге жол көрсеттіңіз бе?'),
    V('What part of your city do you avoid?', 'Какую часть города вы избегаете?', 'Қаланың қай бөлігінен аулақ боласыз?'),
    V('Do you enjoy exploring new neighborhoods?', 'Вам нравится исследовать новые районы?', 'Жаңа аудандарды аралағанды ұнатасыз ба?'),
    V('Is it easy to find parking in your city?', 'Легко ли найти парковку в вашем городе?', 'Қалаңызда көлік тұрағын табу оңай ма?'),
    V('What is the most confusing part of your city to navigate?', 'Какая часть вашего города самая запутанная для ориентации?', 'Қалаңыздың бағдарлануы ең қиын бөлігі қайсы?'),
    V('Have you ever used a taxi app to get somewhere?', 'Вы когда-нибудь пользовались приложением такси, чтобы добраться куда-то?', 'Бір жерге бару үшін такси қосымшасын пайдаландыңыз ба?'),
    V('Do you know the history of your city\'s streets or landmarks?', 'Вы знаете историю улиц или достопримечательностей своего города?', 'Қалаңыздың көшелері немесе көрікті жерлерінің тарихын білесіз бе?'),
    V('What would make getting around your city easier?', 'Что бы облегчило передвижение по вашему городу?', 'Қалаңыз бойынша жүруді не жеңілдетер еді?'),
    V('Have you ever gotten completely lost in a new place?', 'Вы когда-нибудь полностью терялись в новом месте?', 'Жаңа жерде мүлдем адасып қалдыңыз ба?'),
];

$NEW9[21] = [ // Jobs and Careers
    V('Have you ever changed careers completely?', 'Вы когда-нибудь полностью меняли карьеру?', 'Мансабыңызды мүлдем өзгерттіңіз бе?'),
    V('What was your dream job as a child?', 'Кем вы мечтали стать в детстве?', 'Балалық шақта арман жұмысыңыз қандай болды?'),
    V('Do you think a university degree is necessary for success?', 'Как вы думаете, университетское образование необходимо для успеха?', 'Сіздің ойыңызша, табысқа жету үшін университет дипломы қажет пе?'),
    V('Would you start your own business if you could?', 'Вы бы открыли свой бизнес, если бы могли?', 'Мүмкіндік болса, өз бизнесіңізді бастар ма едіңіз?'),
    V('What is the biggest challenge in your current job?', 'Какая самая большая трудность на вашей нынешней работе?', 'Қазіргі жұмысыңыздағы ең үлкен қиындық қандай?'),
    V('Do you prefer working with a team or independently?', 'Вы предпочитаете работать в команде или самостоятельно?', 'Топпен жұмыс істегенді ұнатасыз ба, әлде дербес пе?'),
    V('How do you handle stress at work?', 'Как вы справляетесь со стрессом на работе?', 'Жұмыстағы стресспен қалай күресесіз?'),
    V('What does career success mean to you?', 'Что для вас значит успех в карьере?', 'Сіз үшін мансаптағы табыс дегеніміз не?'),
    V('Would you move to another city for a better job?', 'Вы бы переехали в другой город ради лучшей работы?', 'Жақсырақ жұмыс үшін басқа қалаға көшер ме едіңіз?'),
];

$NEW9[22] = [ // Free Time Activities
    V('Do you feel guilty relaxing during your free time?', 'Вы чувствуете вину, отдыхая в свободное время?', 'Бос уақытта демалғанда кінәлі сезінесіз бе?'),
    V('What activity helps you disconnect from work or study?', 'Какое занятие помогает вам отвлечься от работы или учёбы?', 'Жұмыстан немесе оқудан алаңдауға қандай әрекет көмектеседі?'),
    V('Have you picked up a new hobby recently?', 'Вы недавно освоили новое хобби?', 'Жақында жаңа хобби бастадыңыз ба?'),
    V('Do you spend your free time productively or just resting?', 'Вы проводите свободное время продуктивно или просто отдыхаете?', 'Бос уақытыңызды тиімді өткізесіз бе, әлде жай демаласыз ба?'),
    V('What free time activity did you enjoy as a child that you miss?', 'Какое занятие из детства вы любили и скучаете по нему?', 'Балалық шақтағы сағынған әрекетіңіз қандай?'),
    V('Is it hard for you to find free time during the week?', 'Вам трудно найти свободное время в течение недели?', 'Апта ішінде бос уақыт табу сізге қиын ба?'),
    V('Do you prefer planned activities or spontaneous ones?', 'Вы предпочитаете запланированные занятия или спонтанные?', 'Жоспарланған әрекеттерді ұнатасыз ба, әлде кенеттен болатынды ма?'),
    V('What would your ideal free afternoon look like?', 'Как бы выглядел ваш идеальный свободный день?', 'Сіздің тамаша бос күндізгі уақытыңыз қандай болар еді?'),
    V('Do you think people today have less free time than before?', 'Как вы думаете, у людей сегодня меньше свободного времени, чем раньше?', 'Сіздің ойыңызша, қазіргі адамдардың бос уақыты бұрынғыдан аз ба?'),
];

$NEW9[23] = [ // Restaurants and Eating Out
    V('Have you ever eaten at a restaurant alone?', 'Вы когда-нибудь ели в ресторане одни?', 'Мейрамханада жалғыз тамақтандыңыз ба?'),
    V('Do you try food from cultures you\'re not familiar with?', 'Вы пробуете еду культур, с которыми не знакомы?', 'Таныс емес мәдениеттің тағамдарын татып көресіз бе?'),
    V('What is a dish you always order when you see it on a menu?', 'Какое блюдо вы всегда заказываете, если видите его в меню?', 'Мәзірде көрсеңіз әрдайым тапсырыс беретін тағамыңыз қандай?'),
    V('Have you ever worked in a restaurant?', 'Вы когда-нибудь работали в ресторане?', 'Мейрамханада жұмыс істедіңіз бе?'),
    V('Do you prefer casual restaurants or fancy ones?', 'Вы предпочитаете простые рестораны или изысканные?', 'Қарапайым мейрамханаларды ұнатасыз ба, әлде сәнділерін бе?'),
    V('What ruins a good restaurant experience for you?', 'Что портит для вас хороший опыт в ресторане?', 'Мейрамханадағы жақсы әсерді сізге не бұзады?'),
    V('Do you take photos of your food before eating?', 'Вы фотографируете еду перед тем, как её съесть?', 'Тамақ ішер алдында суретке түсіресіз бе?'),
    V('Have you ever been to a restaurant with a theme?', 'Вы когда-нибудь были в тематическом ресторане?', 'Тақырыптық мейрамханада болдыңыз ба?'),
    V('What is the most memorable meal you have ever had?', 'Какая еда вам больше всего запомнилась?', 'Ең есте қалған тағамыңыз қандай болды?'),
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
