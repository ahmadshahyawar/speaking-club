<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[211] = [ // Simple Technology
    V('Do you use your phone before going to sleep?', 'Вы пользуетесь телефоном перед сном?', 'Ұйықтар алдында телефоныңызды пайдаланасыз ба?'),
    V('What was the first phone you ever owned?', 'Какой у вас был первый телефон?', 'Иеленген алғашқы телефоныңыз қандай болды?'),
    V('Have you ever dropped and broken a phone?', 'Вы когда-нибудь роняли и разбивали телефон?', 'Телефоныңызды түсіріп сындырып алдыңыз ба?'),
    V('Do you use social media apps often?', 'Вы часто пользуетесь приложениями социальных сетей?', 'Әлеуметтік желі қосымшаларын жиі пайдаланасыз ба?'),
    V('Do you turn off notifications sometimes?', 'Вы иногда отключаете уведомления?', 'Кейде хабарландыруларды өшіресіз бе?'),
    V('What technology do you use most at work or school?', 'Какую технологию вы больше всего используете на работе или в школе?', 'Жұмыста немесе мектепте ең көп қандай технологияны пайдаланасыз?'),
    V('Do you prefer typing or talking on the phone?', 'Вы предпочитаете печатать или разговаривать по телефону?', 'Телефонда жазуды ұнатасыз ба, әлде сөйлесуді ме?'),
    V('Have you ever downloaded an app you never used?', 'Вы когда-нибудь скачивали приложение, которым так и не пользовались?', 'Ешқашан пайдаланбаған қосымшаны жүктеп алдыңыз ба?'),
    V('Would you upgrade your phone every year if you could?', 'Вы бы обновляли телефон каждый год, если бы могли?', 'Мүмкіндік болса, телефоныңызды жыл сайын ауыстырар ма едіңіз?'),
];

$NEW9[212] = [ // At the Beach
    V('Do you build sandcastles when you go to the beach?', 'Вы строите замки из песка, когда ходите на пляж?', 'Жағажайға барғанда құм қамал саласыз ба?'),
    V('What time of day do you like the beach best?', 'В какое время дня вам больше всего нравится пляж?', 'Күннің қай уақытында жағажайды ең көп ұнатасыз?'),
    V('Do you wear sunscreen when you go to the beach?', 'Вы используете солнцезащитный крем, когда идёте на пляж?', 'Жағажайға барғанда күннен қорғайтын крем жағасыз ба?'),
    V('Have you ever seen dolphins or fish in the water?', 'Вы когда-нибудь видели дельфинов или рыб в воде?', 'Суда дельфин немесе балықтарды көрдіңіз бе?'),
    V('Do you prefer a quiet beach or a busy one?', 'Вы предпочитаете тихий пляж или многолюдный?', 'Тыныш жағажайды ұнатасыз ба, әлде адам көп жағажайды ма?'),
    V('What do you bring with you to the beach?', 'Что вы берёте с собой на пляж?', 'Жағажайға өзіңізбен не аласыз?'),
    V('Have you ever gotten sunburned?', 'Вы когда-нибудь обгорали на солнце?', 'Күннен күйіп қалдыңыз ба?'),
    V('Do you enjoy beach sports like volleyball?', 'Вам нравятся пляжные виды спорта, например волейбол?', 'Волейбол сияқты жағажай спортын ұнатасыз ба?'),
    V('What is the nicest beach you have ever visited?', 'Какой самый красивый пляж вы когда-либо посещали?', 'Барған ең әдемі жағажайыңыз қайсы болды?'),
];

$NEW9[213] = [ // Talking About Music
    V('Do you sing in the shower or in the car?', 'Вы поёте в душе или в машине?', 'Душта немесе көлікте ән айтасыз ба?'),
    V('What music did your parents listen to?', 'Какую музыку слушали ваши родители?', 'Ата-анаңыз қандай музыка тыңдады?'),
    V('Do you prefer live music or recorded music?', 'Вы предпочитаете живую музыку или записанную?', 'Тірі музыканы ұнатасыз ба, әлде жазылған музыканы ма?'),
    V('Have you ever learned to play a musical instrument?', 'Вы когда-нибудь учились играть на музыкальном инструменте?', 'Музыкалық аспапта ойнауды үйрендіңіз бе?'),
    V('What song always makes you feel happy?', 'Какая песня всегда делает вас счастливым?', 'Қандай ән сізді әрдайым қуантады?'),
    V('Do you listen to music while working or studying?', 'Вы слушаете музыку во время работы или учёбы?', 'Жұмыс немесе оқу кезінде музыка тыңдайсыз ба?'),
    V('What music do you listen to when you feel sad?', 'Какую музыку вы слушаете, когда вам грустно?', 'Көңіліңіз түскенде қандай музыка тыңдайсыз?'),
    V('Have you ever been to a music festival?', 'Вы когда-нибудь были на музыкальном фестивале?', 'Музыкалық фестивальде болдыңыз ба?'),
    V('Do you know the words to your favorite song?', 'Вы знаете слова своей любимой песни?', 'Сүйікті әніңіздің сөздерін білесіз бе?'),
];

$NEW9[214] = [ // Simple Farewells
    V('Do you hug or shake hands when saying goodbye?', 'Вы обнимаетесь или пожимаете руки, прощаясь?', 'Қоштасқанда құшақтайсыз ба, әлде қол алысасыз ба?'),
    V('What is the hardest goodbye you have ever said?', 'Какое прощание было для вас самым трудным?', 'Айтқан ең қиын қоштасуыңыз қандай болды?'),
    V('Do you wave when someone leaves?', 'Вы машете рукой, когда кто-то уходит?', 'Біреу кеткенде қолыңызбен бұлғайсыз ба?'),
    V('How do you say goodbye at the end of a phone call?', 'Как вы прощаетесь в конце телефонного разговора?', 'Телефон сөйлесуінің соңында қалай қоштасасыз?'),
    V('Have you ever cried when saying goodbye to someone?', 'Вы когда-нибудь плакали, прощаясь с кем-то?', 'Біреумен қоштасқанда жылап алдыңыз ба?'),
    V('Do you prefer short goodbyes or long ones?', 'Вы предпочитаете короткие прощания или долгие?', 'Қысқа қоштасуды ұнатасыз ба, әлде ұзақты ма?'),
    V('What do you say to someone leaving for a new job?', 'Что вы говорите тому, кто уходит на новую работу?', 'Жаңа жұмысқа кетіп бара жатқан адамға не айтасыз?'),
    V('Do you plan to see people again after saying goodbye?', 'Вы планируете снова увидеть людей после прощания?', 'Қоштасқаннан кейін адамдармен қайта кездесуді жоспарлайсыз ба?'),
    V('Is there someone you wish you had said a proper goodbye to?', 'Есть ли человек, с которым вы хотели бы попрощаться как следует?', 'Дұрыстап қоштаспаған, бірақ қоштасқыңыз келетін адам бар ма?'),
];

$NEW9[215] = [ // My City
    V('What is your city famous for?', 'Чем известен ваш город?', 'Қалаңыз немен танымал?'),
    V('Do tourists visit your city often?', 'Туристы часто посещают ваш город?', 'Туристер қалаңызға жиі келе ме?'),
    V('Is public transport easy to use in your city?', 'Общественный транспорт удобно использовать в вашем городе?', 'Қалаңызда қоғамдық көлікті пайдалану оңай ма?'),
    V('What is the oldest part of your city?', 'Какая самая старая часть вашего города?', 'Қалаңыздың ең көне бөлігі қайсы?'),
    V('Do you feel proud of your city?', 'Вы гордитесь своим городом?', 'Қалаңызбен мақтанасыз ба?'),
    V('What would you change about your city?', 'Что бы вы изменили в своём городе?', 'Қалаңызда не өзгертер едіңіз?'),
    V('Is your city growing bigger every year?', 'Ваш город растёт с каждым годом?', 'Қалаңыз жыл сайын үлкейіп келе ме?'),
    V('What is the best season to visit your city?', 'Какое лучшее время года для посещения вашего города?', 'Қалаңызға баруға ең жақсы мезгіл қайсы?'),
    V('Would you recommend your city to a visitor?', 'Вы бы порекомендовали свой город гостю?', 'Қалаңызды келушіге ұсынар ма едіңіз?'),
];

$NEW9[216] = [ // Talking About Friends
    V('How many close friends do you have?', 'Сколько у вас близких друзей?', 'Жақын досыңыз қаншау?'),
    V('Have you ever lost touch with a good friend?', 'Вы когда-нибудь теряли связь с хорошим другом?', 'Жақсы досыңызбен байланысты үзіп алдыңыз ба?'),
    V('Do you make new friends easily?', 'Вам легко заводить новых друзей?', 'Жаңа дос табу сізге оңай ма?'),
    V('What do you and your friends usually talk about?', 'О чём вы обычно разговариваете с друзьями?', 'Достарыңызбен әдетте не туралы сөйлесесіз?'),
    V('Have you ever helped a friend through a hard time?', 'Вы когда-нибудь помогали другу в трудное время?', 'Досыңызға қиын кезінде көмектестіңіз бе?'),
    V('Do your friends live near you or far away?', 'Ваши друзья живут рядом с вами или далеко?', 'Достарыңыз сізге жақын тұра ма, әлде алыс па?'),
    V('What is a memory you share with your closest friend?', 'Какое воспоминание связывает вас с ближайшим другом?', 'Ең жақын досыңызбен байланысты естелігіңіз қандай?'),
    V('Do you prefer having many friends or a few close ones?', 'Вы предпочитаете иметь много друзей или мало, но близких?', 'Көп досты ұнатасыз ба, әлде бірнеше жақынды ма?'),
    V('Have you ever had a big argument with a friend?', 'У вас когда-нибудь была серьёзная ссора с другом?', 'Досыңызбен үлкен дауласып қалдыңыз ба?'),
];

$NEW9[217] = [ // Simple Shopping List
    V('Do you check your fridge before making a list?', 'Вы проверяете холодильник перед составлением списка?', 'Тізім жасамас бұрын тоңазытқышты тексересіз бе?'),
    V('Have you ever bought too much of something by mistake?', 'Вы когда-нибудь случайно покупали слишком много чего-то?', 'Кездейсоқ бір нәрседен тым көп сатып алдыңыз ба?'),
    V('Do you shop once a week or more often?', 'Вы делаете покупки раз в неделю или чаще?', 'Аптасына бір рет сауда жасайсыз ба, әлде жиірек пе?'),
    V('Do you use an app to make your shopping list?', 'Вы используете приложение для списка покупок?', 'Сатып алу тізімін жасау үшін қосымша пайдаланасыз ба?'),
    V('Do you stick to your list, or buy extra things?', 'Вы придерживаетесь списка или покупаете лишнее?', 'Тізіміңізді ұстанасыз ба, әлде артық зат аласыз ба?'),
    V('Who usually writes the shopping list in your home?', 'Кто обычно составляет список покупок в вашем доме?', 'Үйіңізде сатып алу тізімін әдетте кім жазады?'),
    V('Have you ever gone shopping without a list?', 'Вы когда-нибудь ходили за покупками без списка?', 'Тізімсіз сауда жасауға барғаныңыз болды ма?'),
    V('What is always on your shopping list?', 'Что всегда есть в вашем списке покупок?', 'Сатып алу тізіміңізде әрдайым не болады?'),
    V('Do you shop for groceries alone or with someone?', 'Вы ходите за продуктами одни или с кем-то?', 'Азық-түлікке жалғыз барасыз ба, әлде біреумен бе?'),
];

$NEW9[218] = [ // My Free Time
    V('Do you spend your free time alone or with others?', 'Вы проводите свободное время одни или с другими?', 'Бос уақытыңызды жалғыз өткізесіз бе, әлде басқалармен бе?'),
    V('What do you do in your free time that relaxes you most?', 'Что вы делаете в свободное время, что расслабляет вас больше всего?', 'Бос уақытта сізді ең көп демалдыратын әрекет қандай?'),
    V('Do you feel like you have enough free time?', 'Вам кажется, что у вас достаточно свободного времени?', 'Бос уақытыңыз жеткілікті сияқты ма?'),
    V('What free-time activity would you like to try?', 'Каким занятием на досуге вы хотели бы заняться?', 'Бос уақытта қандай әрекетті сынап көргіңіз келеді?'),
    V('Do you spend your free time indoors or outdoors?', 'Вы проводите свободное время дома или на улице?', 'Бос уақытыңызды үйде өткізесіз бе, әлде сыртта ма?'),
    V('Does your free time change on weekends?', 'Ваше свободное время меняется по выходным?', 'Демалыс күндері бос уақытыңыз өзгере ме?'),
    V('Do you plan your free time, or is it spontaneous?', 'Вы планируете свободное время или оно спонтанное?', 'Бос уақытыңызды жоспарлайсыз ба, әлде күтпеген жерден бе?'),
    V('What did you do with your free time last week?', 'Что вы делали в свободное время на прошлой неделе?', 'Өткен аптада бос уақытыңызда не істедіңіз?'),
    V('Is your free time mostly active or restful?', 'Ваше свободное время в основном активное или спокойное?', 'Бос уақытыңыз негізінен белсенді ме, әлде тыныш па?'),
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
