<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[227] = [ // Weekend Sports Leagues
    V('Have you ever been the captain of a team?', 'Вы когда-нибудь были капитаном команды?', 'Команда капитаны болдыңыз ба?'),
    V('Do you think adults should keep playing organized sports?', 'Как вы думаете, взрослые должны продолжать заниматься организованным спортом?', 'Сіздің ойыңызша, ересектер ұйымдастырылған спортпен айналысуды жалғастыруы керек пе?'),
    V('What sport would you choose to play in a league?', 'Каким видом спорта вы бы выбрали заниматься в лиге?', 'Лигада қандай спорт түрін ойнауды таңдар едіңіз?'),
    V('Have you ever had to miss a game due to work or family?', 'Вам когда-нибудь приходилось пропускать игру из-за работы или семьи?', 'Жұмысқа немесе отбасыға байланысты ойынды жіберіп алдыңыз ба?'),
    V('Do you enjoy the social side of team sports more than the competition?', 'Вам больше нравится общение в командном спорте, чем соревнование?', 'Топтық спорттағы қарым-қатынасты жарыстан гөрі көбірек ұнатасыз ба?'),
    V('What is the most competitive league or team you\'ve been part of?', 'Какая самая конкурентная лига или команда, в которой вы состояли?', 'Қатысқан ең бәсекелес лига немесе команда қайсы болды?'),
    V('Have you ever had a favorite teammate who motivated you?', 'У вас когда-нибудь был любимый товарищ по команде, который вас мотивировал?', 'Сізді жігерлендірген сүйікті командаласыңыз болды ма?'),
    V('Do you think winning matters more than having fun?', 'Как вы думаете, победа важнее, чем удовольствие?', 'Сіздің ойыңызша, жеңіс көңіл көтеруден маңызды ма?'),
    V('Would you rather play in a league or coach one?', 'Вы бы предпочли играть в лиге или тренировать команду?', 'Лигада ойнағанды қалайсыз ба, әлде жаттықтырушы болғанды ма?'),
];

$NEW9[228] = [ // Travel Insurance and Safety
    V('Has travel insurance ever saved you money?', 'Туристическая страховка когда-нибудь экономила вам деньги?', 'Саяхат сақтандыруы сізге ақша үнемдеп берді ме?'),
    V('Do you keep copies of important documents while traveling?', 'Вы храните копии важных документов во время путешествия?', 'Саяхат кезінде маңызды құжаттардың көшірмесін сақтайсыз ба?'),
    V('Have you ever felt unsafe while traveling?', 'Вы когда-нибудь чувствовали себя небезопасно во время путешествия?', 'Саяхат кезінде өзіңізді қауіпсіз сезінбедіңіз бе?'),
    V('Do you share your travel plans with family before leaving?', 'Вы делитесь планами поездки с семьёй перед отъездом?', 'Кетер алдында саяхат жоспарыңызды отбасыңызбен бөлісесіз бе?'),
    V('What is the riskiest trip you have ever taken?', 'Какая самая рискованная поездка у вас была?', 'Жасаған ең тәуекелді сапарыңыз қандай болды?'),
    V('Do you trust local advice about safety when abroad?', 'Вы доверяете местным советам по безопасности за границей?', 'Шетелде қауіпсіздік туралы жергілікті кеңеске сенесіз бе?'),
    V('Have you ever had to cancel a trip and use insurance?', 'Вам когда-нибудь приходилось отменять поездку и использовать страховку?', 'Сапарды тоқтатып, сақтандыруды пайдалануға тура келді ме?'),
    V('What safety item do you always pack when traveling?', 'Какой предмет безопасности вы всегда берёте в поездку?', 'Саяхатқа шыққанда әрдайым қандай қауіпсіздік затын аласыз?'),
    V('Do you avoid certain places because of safety concerns?', 'Вы избегаете определённых мест из-за соображений безопасности?', 'Қауіпсіздікке байланысты белгілі бір орындардан аулақ боласыз ба?'),
];

$NEW9[229] = [ // Renovating a Home
    V('Have you ever lived in a house during renovations?', 'Вы когда-нибудь жили в доме во время ремонта?', 'Жөндеу кезінде үйде тұрдыңыз ба?'),
    V('What room would you renovate first if you had the money?', 'Какую комнату вы бы отремонтировали первой, если бы были деньги?', 'Ақшаңыз болса, алдымен қай бөлмені жөндер едіңіз?'),
    V('Do you prefer modern or classic home designs?', 'Вы предпочитаете современный дизайн дома или классический?', 'Заманауи үй дизайнын ұнатасыз ба, әлде классикалықты ма?'),
    V('Have you ever regretted a renovation decision?', 'Вы когда-нибудь жалели о решении по ремонту?', 'Жөндеу шешіміне өкіндіңіз бе?'),
    V('Do you watch home renovation shows?', 'Вы смотрите шоу о ремонте дома?', 'Үй жөндеу шоуларын көресіз бе?'),
    V('What is the most expensive part of renovating a home?', 'Какая самая дорогая часть ремонта дома?', 'Үй жөндеудің ең қымбат бөлігі қандай?'),
    V('Would you sell a house that needs renovation, or fix it up first?', 'Вы бы продали дом, который нуждается в ремонте, или сначала отремонтировали его?', 'Жөндеуді қажет ететін үйді сатар ма едіңіз, әлде алдымен жөндер ме едіңіз?'),
    V('Have you ever done a DIY renovation project?', 'Вы когда-нибудь делали ремонт своими руками?', 'Өз қолыңызбен жөндеу жобасын жасадыңыз ба?'),
    V('What renovation would add the most value to a home, in your opinion?', 'Какой ремонт, по-вашему, больше всего повышает ценность дома?', 'Сіздің ойыңызша, қандай жөндеу үйдің құнын ең көп арттырады?'),
];

$NEW9[230] = [ // Digital Photography Tips
    V('Do you use a professional camera or just your phone?', 'Вы используете профессиональную камеру или только телефон?', 'Кәсіби камераны пайдаланасыз ба, әлде тек телефонды ма?'),
    V('Have you ever taken a photo you regretted posting?', 'Вы когда-нибудь публиковали фото, о котором потом пожалели?', 'Жариялағанға өкінген суретіңіз болды ма?'),
    V('What subject do you find hardest to photograph well?', 'Что вам труднее всего хорошо сфотографировать?', 'Жақсы түсіру ең қиын нысан қандай?'),
    V('Do you follow photography accounts for inspiration?', 'Вы подписаны на аккаунты о фотографии для вдохновения?', 'Шабыт үшін фотография аккаунттарына жазылғансыз ба?'),
    V('Have you ever taken a photography course?', 'Вы когда-нибудь проходили курс фотографии?', 'Фотография курсынан өттіңіз бе?'),
    V('Do you prefer portrait or landscape orientation?', 'Вы предпочитаете портретную ориентацию или альбомную?', 'Тік бағдарды ұнатасыз ба, әлде көлденеңді ме?'),
    V('What editing app or tool do you use most?', 'Каким приложением или инструментом для редактирования вы пользуетесь чаще всего?', 'Ең жиі қандай өңдеу қосымшасын немесе құралын пайдаланасыз?'),
    V('Have you ever printed and framed a photo you took?', 'Вы когда-нибудь распечатывали и вставляли в рамку сделанное вами фото?', 'Түсірген суретіңізді басып шығарып, рамкаға салдыңыз ба?'),
    V('What makes a photo look unprofessional, in your opinion?', 'Что, по-вашему, делает фото непрофессиональным?', 'Сіздің ойыңызша, суретті кәсіби емес етіп көрсететін не нәрсе?'),
];

$NEW9[231] = [ // Learning an Instrument
    V('Did you ever quit learning an instrument? Why?', 'Вы когда-нибудь бросали учиться играть на инструменте? Почему?', 'Аспапта ойнауды үйренуді тастап кеттіңіз бе? Неге?'),
    V('Do you think talent matters more than practice for music?', 'Как вы думаете, талант важнее практики в музыке?', 'Сіздің ойыңызша, музыкада талант жаттығудан маңызды ма?'),
    V('Have you ever played an instrument in front of others?', 'Вы когда-нибудь играли на инструменте перед другими?', 'Басқалардың алдында аспапта ойнадыңыз ба?'),
    V('What song would you like to learn to play?', 'Какую песню вы хотели бы научиться играть?', 'Қандай әнді ойнауды үйренгіңіз келеді?'),
    V('Do you think it\'s harder to learn an instrument as an adult?', 'Как вы думаете, ересек кезінде аспапта ойнауды үйрену қиынырақ па?', 'Сіздің ойыңызша, ересек кезде аспапта ойнауды үйрену қиынырақ па?'),
    V('Have you ever taught yourself an instrument without lessons?', 'Вы когда-нибудь учились играть на инструменте самостоятельно, без уроков?', 'Сабақсыз аспапта ойнауды өзіңіз үйрендіңіз бе?'),
    V('What instrument do you find the most impressive to watch someone play?', 'На каком инструменте вам больше всего впечатляет наблюдать игру?', 'Біреудің ойнағанын көргенде ең әсерлі аспап қайсы?'),
    V('Do you enjoy listening to instrumental music while relaxing?', 'Вам нравится слушать инструментальную музыку во время отдыха?', 'Демалғанда аспаптық музыка тыңдағанды ұнатасыз ба?'),
    V('Would you encourage your children to learn an instrument?', 'Вы бы поощряли своих детей учиться играть на инструменте?', 'Балаларыңызды аспапта ойнауды үйренуге ынталандырар ма едіңіз?'),
];

$NEW9[232] = [ // Weekend Volunteering Trips
    V('Have you ever traveled somewhere specifically to volunteer?', 'Вы когда-нибудь путешествовали куда-то специально для волонтёрства?', 'Арнайы еріктілік үшін бір жерге саяхаттадыңыз ба?'),
    V('Do you think volunteering trips are more about helping others or personal growth?', 'Как вы думаете, волонтёрские поездки больше о помощи другим или о личностном росте?', 'Сіздің ойыңызша, еріктілік сапарлары көбіне басқаларға көмектесу туралы ма, әлде жеке даму туралы ма?'),
    V('What skills would you bring to a volunteer trip?', 'Какие навыки вы бы принесли в волонтёрскую поездку?', 'Еріктілік сапарына қандай дағдыларыңызды алып барар едіңіз?'),
    V('Have you ever organized a group volunteering trip?', 'Вы когда-нибудь организовывали групповую волонтёрскую поездку?', 'Топтық еріктілік сапарын ұйымдастырдыңыз ба?'),
    V('Do you prefer volunteering with people you know or strangers?', 'Вы предпочитаете волонтёрить со знакомыми людьми или незнакомцами?', 'Танысыңызбен еріктілік жасағанды ұнатасыз ба, әлде бейтаныс адамдармен бе?'),
    V('What is the most meaningful volunteer experience you have had?', 'Какой самый значимый волонтёрский опыт у вас был?', 'Ең мәнді еріктілік тәжірибеңіз қандай болды?'),
    V('Would you volunteer somewhere far from home?', 'Вы бы стали волонтёром где-то далеко от дома?', 'Үйден алыс жерде еріктілік жасар ма едіңіз?'),
    V('Do you think companies should sponsor volunteer trips for employees?', 'Как вы думаете, компании должны спонсировать волонтёрские поездки для сотрудников?', 'Сіздің ойыңызша, компаниялар қызметкерлер үшін еріктілік сапарларын демеушілеуі керек пе?'),
    V('What cause do you wish more people supported?', 'Какое дело вы хотели бы, чтобы поддерживало больше людей?', 'Көбірек адам қолдағанын қалайтын іс қандай?'),
];

$NEW9[233] = [ // Public Speaking Anxiety
    V('Have you ever avoided an opportunity because of public speaking fear?', 'Вы когда-нибудь упускали возможность из-за страха публичных выступлений?', 'Көпшілік алдында сөйлеуден қорқып, мүмкіндіктен бас тарттыңыз ба?'),
    V('Does speaking to people you know feel easier than strangers?', 'Говорить с людьми, которых вы знаете, легче, чем с незнакомцами?', 'Танитын адамдармен сөйлесу бейтаныстармен сөйлесуден жеңіл ме?'),
    V('What physical symptoms do you notice when you are anxious?', 'Какие физические симптомы вы замечаете, когда волнуетесь?', 'Толқығанда қандай дене белгілерін байқайсыз?'),
    V('Have you ever used notes to help calm your nerves?', 'Вы когда-нибудь использовали заметки, чтобы успокоить нервы?', 'Мазасызданбау үшін жазбаларды пайдаландыңыз ба?'),
    V('Do you think anxiety before speaking ever fully goes away?', 'Как вы думаете, тревога перед выступлением когда-нибудь полностью проходит?', 'Сіздің ойыңызша, сөйлеу алдындағы мазасыздық толығымен жоя ма?'),
    V('Have you ever seen someone overcome stage fright successfully?', 'Вы когда-нибудь видели, как кто-то успешно преодолел страх сцены?', 'Біреудің сахна қорқынышын сәтті жеңгенін көрдіңіз бе?'),
    V('What environment makes you feel more comfortable speaking?', 'В какой обстановке вам комфортнее говорить?', 'Қандай ортада сөйлеу сізге ыңғайлырақ?'),
    V('Do you prepare differently for anxious moments versus normal talks?', 'Вы готовитесь по-другому к тревожным моментам, чем к обычным выступлениям?', 'Мазасыз сәттерге қалыпты сөзден басқаша дайындаласыз ба?'),
    V('What would you tell your younger self about public speaking fear?', 'Что бы вы сказали себе в молодости о страхе публичных выступлений?', 'Көпшілік алдында сөйлеу қорқынышы туралы жас кезіңізге не айтар едіңіз?'),
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
