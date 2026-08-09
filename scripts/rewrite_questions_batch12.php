<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[106] = [ // Weekend Getaways
    V('Do you plan getaways months in advance or last minute?', 'Вы планируете поездки за месяцы вперёд или в последний момент?', 'Сапарды бірнеше ай бұрын жоспарлайсыз ба, әлде соңғы сәтте ме?'),
    V('Have you ever gone on a getaway alone?', 'Вы когда-нибудь ездили в поездку одни?', 'Жалғыз сапарға шықтыңыз ба?'),
    V('What is the shortest getaway you have ever taken?', 'Какая самая короткая поездка у вас была?', 'Жасаған ең қысқа сапарыңыз қандай болды?'),
    V('Do you prefer staying at a hotel or camping during a getaway?', 'Вы предпочитаете останавливаться в отеле или в кемпинге во время поездки?', 'Сапарда қонақүйде тоқтағанды ұнатасыз ба, әлде лагерьде ме?'),
    V('Have you ever cancelled a weekend trip? Why?', 'Вы когда-нибудь отменяли поездку на выходные? Почему?', 'Демалыс күндеріне сапарды тоқтаттыңыз ба? Неге?'),
    V('What is your favorite type of getaway: beach, mountains, or city?', 'Какой ваш любимый тип поездки: пляж, горы или город?', 'Сүйікті сапар түріңіз қайсы: жағажай, тау, әлде қала ма?'),
    V('Do you take time off work for weekend trips?', 'Вы берёте отгул для поездок на выходные?', 'Демалыс күндеріне сапар үшін жұмыстан демалыс аласыз ба?'),
    V('What do you always forget to pack for a getaway?', 'Что вы всегда забываете взять в поездку?', 'Сапарға шыққанда әрдайым не алуды ұмытасыз?'),
    V('Would you rather explore a new place or return to a favorite one?', 'Вы бы предпочли исследовать новое место или вернуться в любимое?', 'Жаңа жерді зерттегенді қалайсыз ба, әлде сүйікті жерге қайта барғанды ма?'),
];

$NEW9[107] = [ // Office Life
    V('Do you decorate your desk or workspace?', 'Вы украшаете свой стол или рабочее место?', 'Үстеліңізді немесе жұмыс орныңызды безендіресіз бе?'),
    V('Have you ever fallen asleep during a meeting?', 'Вы когда-нибудь засыпали на совещании?', 'Жиналыс кезінде ұйықтап кеткеніңіз болды ма?'),
    V('Do you prefer working in silence or with background noise?', 'Вы предпочитаете работать в тишине или с фоновым шумом?', 'Тыныштықта жұмыс істегенді ұнатасыз ба, әлде фондық шумен бе?'),
    V('What is your least favorite part of office life?', 'Что вам меньше всего нравится в офисной жизни?', 'Офис өмірінде ең аз ұнататын бөлігіңіз қандай?'),
    V('Do you eat lunch at your desk or somewhere else?', 'Вы обедаете за своим столом или где-то ещё?', 'Түскі асты үстеліңізде ішесіз бе, әлде басқа жерде ме?'),
    V('Have you ever had a conflict with a coworker?', 'У вас когда-нибудь был конфликт с коллегой?', 'Әріптесіңізбен қақтығысыңыз болды ма?'),
    V('Do you think open-plan offices are better than private offices?', 'Как вы думаете, открытые офисы лучше отдельных кабинетов?', 'Сіздің ойыңызша, ашық офистер жеке кабинеттерден жақсы ма?'),
    V('What would make your office more comfortable?', 'Что сделало бы ваш офис более комфортным?', 'Офисіңізді ыңғайлырақ ететін не нәрсе болар еді?'),
    V('Do you prefer working in an office or remotely?', 'Вы предпочитаете работать в офисе или удалённо?', 'Офисте жұмыс істегенді ұнатасыз ба, әлде қашықтан ба?'),
];

$NEW9[108] = [ // Fitness Classes
    V('Have you ever quit a fitness class because it was too hard?', 'Вы когда-нибудь бросали фитнес-занятие, потому что было слишком тяжело?', 'Тым қиын болғандықтан фитнес сабағын тастап кеттіңіз бе?'),
    V('Do you feel motivated by exercising with other people?', 'Занятия спортом с другими людьми вас мотивируют?', 'Басқа адамдармен жаттығу сізді жігерлендіре ме?'),
    V('What fitness class would you like to try?', 'Какое фитнес-занятие вы хотели бы попробовать?', 'Қандай фитнес сабағын сынап көргіңіз келеді?'),
    V('Do you track your progress when exercising?', 'Вы отслеживаете свой прогресс во время тренировок?', 'Жаттығу кезінде прогресіңізді бақылайсыз ба?'),
    V('Have you ever felt embarrassed in a fitness class?', 'Вы когда-нибудь чувствовали себя неловко на фитнес-занятии?', 'Фитнес сабағында ыңғайсыз сезіндіңіз бе?'),
    V('Do you prefer morning or evening workouts?', 'Вы предпочитаете утренние или вечерние тренировки?', 'Таңғы жаттығуды ұнатасыз ба, әлде кешкіні ме?'),
    V('What music do you like to listen to while exercising?', 'Какую музыку вы любите слушать во время тренировки?', 'Жаттығу кезінде қандай музыка тыңдағанды ұнатасыз?'),
    V('Have you ever injured yourself during a workout?', 'Вы когда-нибудь травмировались во время тренировки?', 'Жаттығу кезінде жарақат алдыңыз ба?'),
    V('Do you think fitness classes are worth the cost?', 'Как вы думаете, фитнес-занятия стоят своих денег?', 'Сіздің ойыңызша, фитнес сабақтары ақшасына тұрарлық па?'),
];

$NEW9[109] = [ // Home Repairs
    V('Have you ever made a repair worse by trying to fix it yourself?', 'Вы когда-нибудь усугубляли поломку, пытаясь исправить её сами?', 'Өзіңіз жөндеймін деп, жағдайды нашарлатып алдыңыз ба?'),
    V('Do you watch videos online to learn how to fix things?', 'Вы смотрите видео онлайн, чтобы научиться чинить вещи?', 'Заттарды жөндеуді үйрену үшін онлайн видео қарайсыз ба?'),
    V('What tool do you use most often at home?', 'Какой инструмент вы чаще всего используете дома?', 'Үйде ең жиі қандай құралды пайдаланасыз?'),
    V('Have you ever hired the wrong person for a repair job?', 'Вы когда-нибудь нанимали не того человека для ремонта?', 'Жөндеу жұмысына қате адамды жалдап алдыңыз ба?'),
    V('Is it expensive to hire a repair professional in your area?', 'Дорого ли нанять мастера по ремонту в вашем районе?', 'Ауданыңызда жөндеу маманын жалдау қымбат па?'),
    V('What repair are you most proud of doing yourself?', 'Каким ремонтом, сделанным своими руками, вы больше всего гордитесь?', 'Өзіңіз жасаған, ең мақтан тұтатын жөндеуіңіз қандай?'),
    V('Do you keep spare parts at home for repairs?', 'Вы храните запасные детали дома для ремонта?', 'Жөндеу үшін үйде қосалқы бөлшектерді сақтайсыз ба?'),
    V('Have you ever had to repair something during an emergency?', 'Вам когда-нибудь приходилось чинить что-то в экстренной ситуации?', 'Төтенше жағдайда бір нәрсені жөндеуге тура келді ме?'),
    V('What repair skill would you like to learn?', 'Какому навыку ремонта вы хотели бы научиться?', 'Қандай жөндеу дағдысын үйренгіңіз келеді?'),
];

$NEW9[110] = [ // Birthday Parties
    V('Do you enjoy organizing parties for others?', 'Вам нравится организовывать вечеринки для других?', 'Басқаларға кеш ұйымдастырғанды ұнатасыз ба?'),
    V('Have you ever forgotten someone\'s birthday?', 'Вы когда-нибудь забывали чей-то день рождения?', 'Біреудің туған күнін ұмытып қалдыңыз ба?'),
    V('What birthday age do you think is the most important to celebrate?', 'Какой возраст, по-вашему, важнее всего отметить?', 'Сіздің ойыңызша, тойлау үшін ең маңызды жас қандай?'),
    V('Do you prefer birthday parties at home or in a venue?', 'Вы предпочитаете отмечать день рождения дома или в заведении?', 'Туған күнді үйде тойлағанды ұнатасыз ба, әлде арнайы орында ма?'),
    V('Have you ever received a gift you didn\'t like?', 'Вы когда-нибудь получали подарок, который вам не понравился?', 'Ұнатпаған сыйлық алдыңыз ба?'),
    V('Do you post birthday photos on social media?', 'Вы публикуете фото с дня рождения в соцсетях?', 'Туған күн суреттерін әлеуметтік желіге жариялайсыз ба?'),
    V('What games do you play at birthday parties?', 'В какие игры вы играете на днях рождения?', 'Туған күн кештерінде қандай ойындар ойнайсыз?'),
    V('Do you enjoy blowing out candles and making a wish?', 'Вам нравится задувать свечи и загадывать желание?', 'Шамдарды сөндіріп, тілек тілегенді ұнатасыз ба?'),
    V('What is one birthday you will never forget?', 'Какой день рождения вы никогда не забудете?', 'Ешқашан ұмытпайтын туған күніңіз қандай болды?'),
];

$NEW9[111] = [ // Photography as a Hobby
    V('Do you print your photos, or keep them only online?', 'Вы печатаете свои фотографии или храните их только онлайн?', 'Суреттеріңізді басып шығарасыз ба, әлде тек онлайн сақтайсыз ба?'),
    V('Have you ever taken a photo you were really proud of?', 'Вы когда-нибудь делали фото, которым по-настоящему гордились?', 'Шынымен мақтан тұтатын сурет түсірдіңіз бе?'),
    V('What do you enjoy photographing the most?', 'Что вам больше всего нравится фотографировать?', 'Ең көп нені түсіргенді ұнатасыз?'),
    V('Do you ask permission before photographing strangers?', 'Вы спрашиваете разрешения, прежде чем фотографировать незнакомцев?', 'Бейтаныс адамдарды түсірмес бұрын рұқсат сұрайсыз ба?'),
    V('Have you ever missed a great photo opportunity?', 'Вы когда-нибудь упускали отличную возможность сделать фото?', 'Тамаша сурет түсіру мүмкіндігін жіберіп алдыңыз ба?'),
    V('What photography skill would you like to improve?', 'Какой навык фотографии вы хотели бы улучшить?', 'Фотографияда қандай дағдыңызды жетілдіргіңіз келеді?'),
    V('Do you follow any photographers on social media?', 'Вы подписаны на фотографов в соцсетях?', 'Әлеуметтік желіде фотографтарға жазылғансыз ба?'),
    V('Have you ever taken a photography class?', 'Вы когда-нибудь посещали курсы фотографии?', 'Фотография сабақтарына қатыстыңыз ба?'),
    V('What makes a photo truly memorable, in your opinion?', 'Что, по-вашему, делает фото по-настоящему запоминающимся?', 'Сіздің ойыңызша, суретті шынымен есте қаларлықтай ететін не нәрсе?'),
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
