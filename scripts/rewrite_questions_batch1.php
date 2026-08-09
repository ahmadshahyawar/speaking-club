<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[4] = [ // Family
    V('Do you have any brothers or sisters? Tell me about them.', 'У вас есть братья или сёстры? Расскажите о них.', 'Сізде аға-іні немесе апа-қарындас бар ма? Олар туралы айтып беріңіз.'),
    V('What is your favorite memory with your family?', 'Какое ваше любимое воспоминание с семьёй?', 'Отбасыңызбен байланысты ең сүйікті естелігіңіз қандай?'),
    V('Does your family eat dinner together every day?', 'Ваша семья ужинает вместе каждый день?', 'Отбасыңыз күн сайын бірге кешкі ас ішеді ме?'),
    V('Who in your family are you most similar to?', 'На кого из семьи вы больше всего похожи?', 'Отбасыңызда сіз кімге көбірек ұқсайсыз?'),
    V('What traditions does your family have?', 'Какие традиции есть в вашей семье?', 'Отбасыңызда қандай дәстүрлер бар?'),
    V('Do you live near the rest of your family, or far away?', 'Вы живёте рядом с остальной семьёй или далеко?', 'Сіз отбасыңыздың қалған мүшелеріне жақын тұрасыз ба, әлде алыс па?'),
    V('What does your family like to talk about at the dinner table?', 'О чём любит говорить ваша семья за столом?', 'Отбасыңыз ас үстінде не туралы сөйлескенді ұнатады?'),
    V('Have you ever had a big family celebration?', 'У вас когда-нибудь было большое семейное торжество?', 'Сізде үлкен отбасылық мереке болды ма?'),
    V('What is one thing you learned from your parents?', 'Чему одному вы научились у своих родителей?', 'Ата-анаңыздан үйренген бір нәрсе қандай?'),
];

$NEW9[5] = [ // Daily Routine
    V('Do you check your phone right after waking up?', 'Вы проверяете телефон сразу после того, как просыпаетесь?', 'Оянған бойда телефоныңызды қарайсыз ба?'),
    V('What do you usually do on your way to school or work?', 'Что вы обычно делаете по дороге в школу или на работу?', 'Мектепке немесе жұмысқа бара жатқанда әдетте не істейсіз?'),
    V('Do you take a shower in the morning or at night?', 'Вы принимаете душ утром или вечером?', 'Душты таңертең қабылдайсыз ба, әлде кешке ме?'),
    V('What is the busiest part of your day?', 'Какая часть вашего дня самая напряжённая?', 'Күніңіздің ең жұмыс көп бөлігі қашан?'),
    V('Do you have time to relax during the day?', 'У вас есть время отдохнуть в течение дня?', 'Күндіз демалуға уақытыңыз бола ма?'),
    V('What do you usually eat for lunch?', 'Что вы обычно едите на обед?', 'Түскі асқа әдетте не жейсіз?'),
    V('Does your routine change on weekends?', 'Ваш распорядок меняется по выходным?', 'Демалыс күндері тәртібіңіз өзгере ме?'),
    V('What is the last thing you do before going to sleep?', 'Что последнее вы делаете перед сном?', 'Ұйықтар алдында соңғы не істейсіз?'),
    V('Would you like to change something in your daily routine?', 'Вы бы хотели что-то изменить в своём распорядке дня?', 'Күнделікті тәртібіңізде бір нәрсені өзгерткіңіз келе ме?'),
];

$NEW9[6] = [ // Food and Drinks
    V('What is a traditional dish from your country?', 'Какое традиционное блюдо есть в вашей стране?', 'Еліңіздің дәстүрлі тағамы қандай?'),
    V('Do you often eat at restaurants or mostly at home?', 'Вы часто едите в ресторанах или в основном дома?', 'Сіз жиі мейрамханада тамақтанасыз ба, әлде негізінен үйде ме?'),
    V('What is your favorite snack?', 'Какая ваша любимая закуска?', 'Сүйікті тағамыңыз (жеңіл тамағыңыз) қандай?'),
    V('Do you add a lot of salt or spice to your food?', 'Вы добавляете много соли или специй в еду?', 'Тағамыңызға тұз немесе дәмдеуішті көп саласыз ба?'),
    V('What did you eat yesterday for dinner?', 'Что вы ели вчера на ужин?', 'Кеше кешкі асқа не жедіңіз?'),
    V('Is there a food you could eat every day?', 'Есть ли еда, которую вы могли бы есть каждый день?', 'Күн сайын жей беретін тағамыңыз бар ма?'),
    V('Do you prefer sweet or salty food?', 'Вы предпочитаете сладкую или солёную еду?', 'Тәтті тағамды ұнатасыз ба, әлде тұзды ма?'),
    V('Have you ever cooked a meal for your family?', 'Вы когда-нибудь готовили еду для своей семьи?', 'Отбасыңызға тамақ пісіріп бердіңіз бе?'),
    V('What drink do you usually have with your meals?', 'Какой напиток вы обычно пьёте во время еды?', 'Тамақ ішкенде әдетте қандай сусын ішесіз?'),
];

$NEW9[7] = [ // My House
    V('Who do you live with?', 'С кем вы живёте?', 'Сіз кіммен тұрасыз?'),
    V('What is in your kitchen?', 'Что есть у вас на кухне?', 'Ас үйіңізде не бар?'),
    V('Do you have your own bedroom?', 'У вас есть своя спальня?', 'Сізде жеке жатын бөлмеңіз бар ма?'),
    V('What can you see from your window?', 'Что вы видите из своего окна?', 'Терезеңізден не көресіз?'),
    V('Is your house near a park or a busy street?', 'Ваш дом находится рядом с парком или оживлённой улицей?', 'Үйіңіз саябаққа жақын ба, әлде қозғалысы көп көшеге ме?'),
    V('What do you usually do in the living room?', 'Что вы обычно делаете в гостиной?', 'Қонақ бөлмесінде әдетте не істейсіз?'),
    V('How long have you lived in your house?', 'Как долго вы живёте в своём доме?', 'Үйіңізде қанша уақыттан бері тұрасыз?'),
    V('Do you keep your room clean and tidy?', 'Вы держите свою комнату чистой и опрятной?', 'Бөлмеңізді таза және ретті ұстайсыз ба?'),
    V('What would you change about your house if you could?', 'Что бы вы изменили в своём доме, если бы могли?', 'Мүмкіндік болса, үйіңізде не өзгертер едіңіз?'),
];

$NEW9[8] = [ // Weather
    V('Do you check the weather forecast every day?', 'Вы каждый день смотрите прогноз погоды?', 'Ауа райы болжамын күн сайын қарайсыз ба?'),
    V('What do you do when it is very hot outside?', 'Что вы делаете, когда на улице очень жарко?', 'Сыртта өте ыстық болғанда не істейсіз?'),
    V('Have you ever been caught in the rain without an umbrella?', 'Вы когда-нибудь попадали под дождь без зонта?', 'Қолшатырсыз жаңбырға қалдыңыз ба?'),
    V('Does bad weather ever change your plans?', 'Плохая погода когда-нибудь меняла ваши планы?', 'Нашар ауа райы жоспарларыңызды өзгерте ме?'),
    V('What is the coldest weather you have ever experienced?', 'Какая самая холодная погода, которую вы когда-либо переживали?', 'Бастан кешірген ең суық ауа райы қандай болды?'),
    V('Do you like windy days?', 'Вам нравятся ветреные дни?', 'Желді күндерді ұнатасыз ба?'),
    V('What clothes do you wear in the summer?', 'Какую одежду вы носите летом?', 'Жазда қандай киім киесіз?'),
    V('Is the weather in your city the same all year, or does it change a lot?', 'Погода в вашем городе одинаковая круглый год или сильно меняется?', 'Қалаңыздағы ауа райы жыл бойы бірдей ме, әлде көп өзгере ме?'),
    V('Do you prefer living somewhere hot or somewhere cold?', 'Вы предпочитаете жить там, где жарко, или там, где холодно?', 'Ыстық жерде тұрғанды қалайсыз ба, әлде суық жерде ме?'),
];

$NEW9[9] = [ // Colors and Clothes
    V('What color do you never wear?', 'Какой цвет вы никогда не носите?', 'Қандай түсті ешқашан кимейсіз?'),
    V('Do you wear the same clothes on weekdays and weekends?', 'Вы носите одинаковую одежду в будни и выходные?', 'Жұмыс күндері мен демалыс күндері бірдей киім киесіз бе?'),
    V('What is your favorite item of clothing?', 'Какая ваша любимая вещь из одежды?', 'Сүйікті киім бұйымыңыз қандай?'),
    V('Do you choose your clothes the night before or in the morning?', 'Вы выбираете одежду вечером накануне или утром?', 'Киіміңізді кешке дайындайсыз ба, әлде таңертең бе?'),
    V('What colors are popular in your country?', 'Какие цвета популярны в вашей стране?', 'Еліңізде қандай түстер танымал?'),
    V('Do you like wearing a uniform, or do you prefer choosing your own clothes?', 'Вам нравится носить форму или вы предпочитаете выбирать одежду сами?', 'Форма киюді ұнатасыз ба, әлде өз киіміңізді таңдағанды қалайсыз ба?'),
    V('What do you usually wear to a special event?', 'Что вы обычно надеваете на особое событие?', 'Ерекше іс-шараға әдетте не киесіз?'),
    V('Have you ever worn something and felt very confident?', 'Вы когда-нибудь надевали что-то и чувствовали себя очень уверенно?', 'Бір нәрсе киіп, өзіңізді сенімді сезінген кезіңіз болды ма?'),
    V('Do you follow fashion trends?', 'Вы следите за модными тенденциями?', 'Сән трендтерін бақылайсыз ба?'),
];

$NEW9[10] = [ // Animals
    V('What is the biggest animal you have ever seen in real life?', 'Какое самое большое животное вы видели в реальной жизни?', 'Өмірде көрген ең үлкен жануарыңыз қандай?'),
    V('Are there wild animals near where you live?', 'Рядом с вашим домом есть дикие животные?', 'Тұратын жеріңіздің маңында жабайы жануарлар бар ма?'),
    V('Do you think animals should live in zoos?', 'Как вы думаете, животные должны жить в зоопарках?', 'Сіздің ойыңызша, жануарлар хайуанаттар бағында тұруы керек пе?'),
    V('What sound does your favorite animal make?', 'Какой звук издаёт ваше любимое животное?', 'Сүйікті жануарыңыз қандай дыбыс шығарады?'),
    V('Would you like to work with animals one day?', 'Хотели бы вы когда-нибудь работать с животными?', 'Бір күні жануарлармен жұмыс істегіңіз келе ме?'),
    V('What is a popular pet in your country?', 'Какое домашнее животное популярно в вашей стране?', 'Еліңізде қандай үй жануары танымал?'),
    V('Have you ever fed an animal?', 'Вы когда-нибудь кормили животное?', 'Жануарды тамақтандырып көрдіңіз бе?'),
    V('Do you prefer cats or dogs?', 'Вы предпочитаете кошек или собак?', 'Мысықты ұнатасыз ба, әлде итті ме?'),
    V('What animal represents your country?', 'Какое животное символизирует вашу страну?', 'Еліңізді қандай жануар білдіреді?'),
];

$NEW9[11] = [ // Numbers and Time
    V('What number is your favorite, and why?', 'Какое ваше любимое число и почему?', 'Сүйікті саныңыз қандай және неге?'),
    V('Do you often look at the clock during the day?', 'Вы часто смотрите на часы в течение дня?', 'Күндіз сағатқа жиі қарайсыз ба?'),
    V('How long does it take you to get to school or work?', 'Сколько времени у вас уходит на дорогу до школы или работы?', 'Мектепке немесе жұмысқа жету қанша уақыт алады?'),
    V('Do you prefer mornings or evenings?', 'Вы предпочитаете утро или вечер?', 'Таңды ұнатасыз ба, әлде кешті ме?'),
    V('What time do most people in your country eat dinner?', 'В какое время большинство людей в вашей стране ужинают?', 'Еліңізде адамдардың көбі кешкі асты неше саутта ішеді?'),
    V('Have you ever lost track of time doing something fun?', 'Вы когда-нибудь теряли счёт времени, занимаясь чем-то интересным?', 'Қызық нәрсе істеп, уақытты ұмытып кеткеніңіз болды ма?'),
    V('Do you wear a watch?', 'Вы носите часы?', 'Қол сағат тағасыз ба?'),
    V('What is your age, and how do you feel about it?', 'Сколько вам лет и как вы к этому относитесь?', 'Жасыңыз нешеде және оған қалай қарайсыз?'),
    V('How many hours a day do you spend on your phone?', 'Сколько часов в день вы проводите за телефоном?', 'Күніне телефонға қанша сағат жұмсайсыз?'),
];

$NEW9[12] = [ // Hobbies
    V('Did anyone teach you your hobby, or did you learn by yourself?', 'Кто-то научил вас вашему хобби, или вы научились сами?', 'Хоббиіңізге сізді біреу үйретті ме, әлде өзіңіз үйрендіңіз бе?'),
    V('What equipment or tools do you need for your hobby?', 'Какое оборудование или инструменты нужны для вашего хобби?', 'Хоббиіңіз үшін қандай құралдар қажет?'),
    V('Do your friends share the same hobby as you?', 'У ваших друзей такое же хобби, как у вас?', 'Достарыңызда сіздікімен бірдей хобби бар ма?'),
    V('What hobby did you have as a child?', 'Какое хобби у вас было в детстве?', 'Балалық шағыңызда қандай хоббиіңіз болды?'),
    V('Is your hobby expensive or cheap?', 'Ваше хобби дорогое или дешёвое?', 'Хоббиіңіз қымбат па, әлде арзан ба?'),
    V('Have you ever won anything because of your hobby?', 'Вы когда-нибудь что-то выигрывали благодаря своему хобби?', 'Хоббиіңіздің арқасында бірдеңе ұтып алдыңыз ба?'),
    V('What new hobby would you like to start this year?', 'Какое новое хобби вы хотели бы начать в этом году?', 'Биыл қандай жаңа хобби бастағыңыз келеді?'),
    V('Do you talk about your hobby with other people?', 'Вы разговариваете о своём хобби с другими людьми?', 'Хоббиіңіз туралы басқа адамдармен сөйлесесіз бе?'),
    V('What do you enjoy most about your hobby?', 'Что вам больше всего нравится в вашем хобби?', 'Хоббиіңізде сізге ең не ұнайды?'),
];

$NEW9[13] = [ // Body Parts
    V('Which part of your body is the strongest?', 'Какая часть вашего тела самая сильная?', 'Дене мүшеңіздің қайсысы ең күшті?'),
    V('Do you stretch before exercising?', 'Вы делаете растяжку перед тренировкой?', 'Жаттығу алдында созылу жасайсыз ба?'),
    V('What do you do to protect your eyes?', 'Что вы делаете, чтобы защитить глаза?', 'Көзіңізді қорғау үшін не істейсіз?'),
    V('Have you ever hurt your leg or arm?', 'Вы когда-нибудь травмировали ногу или руку?', 'Аяғыңызды немесе қолыңызды жарақаттап алдыңыз ба?'),
    V('How often do you go to the doctor?', 'Как часто вы ходите к врачу?', 'Дәрігерге қаншалықты жиі барасыз?'),
    V('What helps you fall asleep at night?', 'Что помогает вам засыпать ночью?', 'Түнде ұйықтап кетуге не көмектеседі?'),
    V('Do you drink enough water every day?', 'Вы пьёте достаточно воды каждый день?', 'Күн сайын жеткілікті су ішесіз бе?'),
    V('What is your favorite way to stay active?', 'Какой ваш любимый способ оставаться активным?', 'Белсенді болудың сүйікті тәсіліңіз қандай?'),
    V('Do you take care of your teeth every day?', 'Вы заботитесь о зубах каждый день?', 'Тісіңізге күн сайын күтім жасайсыз ба?'),
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
