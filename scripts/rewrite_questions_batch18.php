<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[24] = [ // Environment and Nature
    V('Do you think your generation cares more about the environment than previous ones?', 'Как вы думаете, ваше поколение больше заботится об окружающей среде, чем предыдущие?', 'Сіздің ойыңызша, сіздің буыныңыз алдыңғы буындарға қарағанда қоршаған ортаға көбірек қамқорлық жасай ма?'),
    V('Have you ever taken part in an environmental cleanup or protest?', 'Вы когда-нибудь участвовали в экологической уборке или протесте?', 'Экологиялық тазалау немесе наразылыққа қатыстыңыз ба?'),
    V('What everyday habit do you think harms the environment the most?', 'Какая повседневная привычка, по-вашему, больше всего вредит окружающей среде?', 'Сіздің ойыңызша, қоршаған ортаға ең көп зиян келтіретін күнделікті әдет қандай?'),
    V('Should countries be punished for high pollution levels?', 'Должны ли страны наказываться за высокий уровень загрязнения?', 'Елдер жоғары ластану деңгейі үшін жазалануы керек пе?'),
    V('Do you believe technology can solve environmental problems?', 'Вы верите, что технологии могут решить экологические проблемы?', 'Технология экологиялық мәселелерді шеше алады деп сенесіз бе?'),
    V('What natural place would you be devastated to see destroyed?', 'Какое природное место вас бы огорчило увидеть разрушенным?', 'Қандай табиғи орынның құрдымға кеткенін көру сізді қатты күйзелтер еді?'),
    V('Do you buy eco-friendly products even if they cost more?', 'Вы покупаете экологичные товары, даже если они дороже?', 'Экологиялық таза өнімдерді қымбат болса да сатып аласыз ба?'),
    V('What do you think the world will look like environmentally in fifty years?', 'Как, по-вашему, будет выглядеть мир с точки зрения экологии через пятьдесят лет?', 'Сіздің ойыңызша, әлем елу жылдан кейін экологиялық тұрғыдан қандай болады?'),
    V('Is it fair to ask developing countries to limit pollution as much as rich ones?', 'Справедливо ли просить развивающиеся страны ограничивать загрязнение так же, как богатые?', 'Дамушы елдерден бай елдер сияқты ластануды шектеуді сұрау әділ ме?'),
];

$NEW9[25] = [ // Friendship and Relationships
    V('Do you think opposites attract, or do similar people become better friends?', 'Как вы думаете, противоположности притягиваются, или похожие люди становятся лучшими друзьями?', 'Сіздің ойыңызша, қарама-қарсылар тартыла ма, әлде ұқсас адамдар жақсырақ дос бола ма?'),
    V('Have you ever ended a friendship? What led to that decision?', 'Вы когда-нибудь заканчивали дружбу? Что привело к этому решению?', 'Достықты тоқтатқаныңыз болды ма? Не себеп болды?'),
    V('How do long-distance friendships survive over time?', 'Как дружба на расстоянии выживает со временем?', 'Алыстағы достық уақыт өте қалай сақталады?'),
    V('Do you believe you can be best friends with a family member?', 'Вы верите, что можно быть лучшим другом с членом семьи?', 'Отбасы мүшесімен ең жақын дос бола аласыз деп сенесіз бе?'),
    V('What role does honesty play in your closest relationships?', 'Какую роль играет честность в ваших самых близких отношениях?', 'Ең жақын қарым-қатынастарыңызда адалдық қандай рөл атқарады?'),
    V('Have your friendships changed a lot since you were a teenager?', 'Ваша дружба сильно изменилась с подросткового возраста?', 'Жасөспірім кезіңізден бері достықтарыңыз көп өзгерді ме?'),
    V('Do you think it\'s harder to make friends as an adult?', 'Как вы думаете, взрослому труднее заводить друзей?', 'Сіздің ойыңызша, ересек кезде дос табу қиынырақ па?'),
    V('What is something a good friend has taught you about yourself?', 'Чему хороший друг научил вас о самом себе?', 'Жақсы досыңыз сізге өзіңіз туралы не үйретті?'),
    V('Would you forgive a friend who betrayed your trust?', 'Вы бы простили друга, который предал ваше доверие?', 'Сеніміңізді сатқан досты кешірер ме едіңіз?'),
];

$NEW9[26] = [ // Movies and Entertainment
    V('Do you think movie ticket prices are worth the experience today?', 'Как вы думаете, цены на билеты в кино стоят впечатлений сегодня?', 'Сіздің ойыңызша, кинотеатр билетінің бағасы қазіргі әсерге тұрарлық па?'),
    V('Has a movie ever changed the way you see something in real life?', 'Фильм когда-нибудь менял ваш взгляд на что-то в реальной жизни?', 'Фильм өмірдегі бір нәрсеге көзқарасыңызды өзгертті ме?'),
    V('Do you prefer movies with deep messages or pure entertainment?', 'Вы предпочитаете фильмы с глубоким смыслом или чистое развлечение?', 'Терең мағыналы фильмдерді ұнатасыз ба, әлде таза ойын-сауықты ма?'),
    V('What movie do you think is overrated?', 'Какой фильм, по-вашему, переоценён?', 'Сіздің ойыңызша, қай фильм асыра бағаланған?'),
    V('Do special effects matter more to you than storytelling?', 'Спецэффекты для вас важнее, чем сюжет?', 'Арнайы эффектілер сіз үшін оқиға желісінен маңыздырақ па?'),
    V('Have you ever watched a movie multiple times in the cinema?', 'Вы когда-нибудь смотрели фильм несколько раз в кино?', 'Кинотеатрда бір фильмді бірнеше рет көрдіңіз бе?'),
    V('Do you think award shows accurately choose the best films?', 'Как вы думаете, премии точно выбирают лучшие фильмы?', 'Сіздің ойыңызша, марапат кештері ең жақсы фильмдерді дұрыс таңдай ма?'),
    V('What entertainment trend do you think will disappear soon?', 'Какой тренд в развлечениях, по-вашему, скоро исчезнет?', 'Сіздің ойыңызша, қандай ойын-сауық трендi жақында жойылады?'),
    V('Would you rather watch a movie alone or discuss it with others afterward?', 'Вы бы предпочли смотреть фильм в одиночку или обсуждать его с другими потом?', 'Фильмді жалғыз көргенді қалайсыз ба, әлде кейін басқалармен талқылағанды ма?'),
];

$NEW9[27] = [ // Social Media
    V('Do you compare your life to others on social media?', 'Вы сравниваете свою жизнь с другими в соцсетях?', 'Өміріңізді әлеуметтік желідегі басқалармен салыстырасыз ба?'),
    V('Have you ever unfollowed someone because of their content?', 'Вы когда-нибудь отписывались от кого-то из-за его контента?', 'Мазмұнына байланысты біреуден жазылымды алып тастадыңыз ба?'),
    V('Do you think social media companies should be regulated more?', 'Как вы думаете, компании соцсетей должны регулироваться строже?', 'Сіздің ойыңызша, әлеуметтік желі компаниялары көбірек реттелуі керек пе?'),
    V('What is the biggest change social media has caused in society?', 'Какое самое большое изменение соцсети вызвали в обществе?', 'Әлеуметтік желі қоғамда тудырған ең үлкен өзгеріс қандай?'),
    V('Have you ever felt pressure to post a certain image of yourself?', 'Вы когда-нибудь чувствовали давление, чтобы публиковать определённый образ себя?', 'Өзіңіз туралы белгілі бір бейне жариялауға қысым сезіндіңіз бе?'),
    V('Do you think anonymous accounts cause more harm than good?', 'Как вы думаете, анонимные аккаунты приносят больше вреда, чем пользы?', 'Сіздің ойыңызша, анонимді аккаунттар пайдадан гөрі зиян көбірек тигізе ме?'),
    V('What would your life be like without social media?', 'Какой была бы ваша жизнь без соцсетей?', 'Әлеуметтік желісіз өміріңіз қандай болар еді?'),
    V('Do you trust news you see on social media platforms?', 'Вы доверяете новостям, которые видите в соцсетях?', 'Әлеуметтік желі платформаларынан көрген жаңалықтарға сенесіз бе?'),
    V('Should parents monitor their children\'s social media use closely?', 'Должны ли родители внимательно следить за использованием соцсетей детьми?', 'Ата-аналар балаларының әлеуметтік желіні пайдалануын мұқият бақылауы керек пе?'),
];

$NEW9[28] = [ // Money and Shopping Habits
    V('Do you think advertising manipulates people into spending more?', 'Как вы думаете, реклама манипулирует людьми, заставляя их тратить больше?', 'Сіздің ойыңызша, жарнама адамдарды көбірек жұмсауға итермелей ме?'),
    V('Have you ever felt judged based on what you own?', 'Вы когда-нибудь чувствовали, что вас судят по тому, что у вас есть?', 'Иеленген заттарыңызға байланысты сотталған сияқты сезіндіңіз бе?'),
    V('What is a purchase you consider a smart investment?', 'Какую покупку вы считаете разумной инвестицией?', 'Ақылды инвестиция деп санайтын сатып алуыңыз бар ма?'),
    V('Do you think minimalism is a realistic lifestyle today?', 'Как вы думаете, минимализм — реалистичный образ жизни сегодня?', 'Сіздің ойыңызша, минимализм бүгінде шынайы өмір салты ма?'),
    V('Have you ever helped a friend who was struggling financially?', 'Вы когда-нибудь помогали другу, у которого были финансовые трудности?', 'Қаржылық қиындықта жүрген досыңызға көмектестіңіз бе?'),
    V('Do you think younger generations handle money differently than older ones?', 'Как вы думаете, молодое поколение обращается с деньгами иначе, чем старшее?', 'Сіздің ойыңызша, жас буын ақшаны егде буыннан басқаша басқара ма?'),
    V('What financial mistake do you see people make often?', 'Какую финансовую ошибку люди часто совершают, по-вашему?', 'Адамдар жиі жіберетін қаржылық қате қандай?'),
    V('Would you rather have financial security or a high-status job?', 'Вы бы предпочли финансовую стабильность или престижную работу?', 'Қаржылық тұрақтылықты қалайсыз ба, әлде беделді жұмысты ма?'),
    V('Do you think luxury brands are worth the extra cost?', 'Как вы думаете, люксовые бренды стоят дополнительных затрат?', 'Сіздің ойыңызша, люкс брендтер қосымша шығынға тұрарлық па?'),
];

$NEW9[29] = [ // Education Systems
    V('Do you think class sizes affect how well students learn?', 'Как вы думаете, размер класса влияет на успеваемость учеников?', 'Сіздің ойыңызша, сынып көлемі оқушылардың үлгеріміне әсер ете ме?'),
    V('Should schools focus more on skills than academic subjects?', 'Должны ли школы уделять больше внимания навыкам, чем академическим предметам?', 'Мектептер академиялық пәндерден гөрі дағдыларға көбірек көңіл бөлуі керек пе?'),
    V('Do you think standardized testing is a fair way to measure ability?', 'Как вы думаете, стандартизированное тестирование — справедливый способ оценки способностей?', 'Сіздің ойыңызша, стандартталған тестілеу қабілетті бағалаудың әділ жолы ма?'),
    V('What role should technology play in classrooms?', 'Какую роль должны играть технологии в классах?', 'Технология сыныпта қандай рөл атқаруы керек?'),
    V('Do you believe teachers are paid fairly for their work?', 'Вы считаете, что учителям справедливо платят за их труд?', 'Мұғалімдерге еңбегіне лайықты ақы төленеді деп сенесіз бе?'),
    V('What subject do you think should be added to school curriculums?', 'Какой предмет, по-вашему, следует добавить в школьную программу?', 'Сіздің ойыңызша, мектеп бағдарламасына қандай пән қосылуы керек?'),
    V('Do you think students today face more pressure than in the past?', 'Как вы думаете, сегодняшние студенты испытывают больше давления, чем раньше?', 'Сіздің ойыңызша, қазіргі студенттер бұрынғыдан көп қысым сезіне ме?'),
    V('Should students have more freedom to choose what they study?', 'Должны ли студенты иметь больше свободы в выборе того, что изучать?', 'Студенттерге не оқитынын таңдауда көбірек еркіндік берілуі керек пе?'),
    V('What is the biggest difference between education in your country and others?', 'Какая самая большая разница между образованием в вашей стране и других?', 'Еліңіздегі білім беру мен басқа елдердегінің ең үлкен айырмашылығы қандай?'),
];

$NEW9[30] = [ // Culture and Traditions
    V('Do you think younger generations are losing touch with tradition?', 'Как вы думаете, молодое поколение теряет связь с традициями?', 'Сіздің ойыңызша, жас буын дәстүрмен байланысын жоғалтып жатыр ма?'),
    V('Have you ever felt out of place in another culture?', 'Вы когда-нибудь чувствовали себя неуместно в другой культуре?', 'Басқа мәдениетте өзіңізді бейтаныс сезіндіңіз бе?'),
    V('What tradition would you like to pass on to future generations?', 'Какую традицию вы хотели бы передать будущим поколениям?', 'Болашақ ұрпаққа қандай дәстүрді жеткізгіңіз келеді?'),
    V('Do you think tourism helps or harms cultural preservation?', 'Как вы думаете, туризм помогает или вредит сохранению культуры?', 'Сіздің ойыңызша, туризм мәдениетті сақтауға көмектесе ме, әлде зиян тигізе ме?'),
    V('Is there a tradition in your culture that outsiders often misunderstand?', 'Есть ли в вашей культуре традиция, которую посторонние часто неправильно понимают?', 'Мәдениетіңізде бөгделер жиі дұрыс түсінбейтін дәстүр бар ма?'),
    V('Do you think food is one of the strongest parts of cultural identity?', 'Как вы думаете, еда — одна из самых сильных частей культурной идентичности?', 'Сіздің ойыңызша, тағам мәдени сәйкестіктің ең күшті бөліктерінің бірі ме?'),
    V('Have you ever changed a personal belief after learning about another culture?', 'Вы когда-нибудь меняли личное убеждение после знакомства с другой культурой?', 'Басқа мәдениетті білгеннен кейін жеке сеніміңізді өзгерттіңіз бе?'),
    V('What do you think is lost when cultures blend together?', 'Что, по-вашему, теряется, когда культуры смешиваются?', 'Сіздің ойыңызша, мәдениеттер араласқанда не жоғалады?'),
    V('Should schools teach more about different world cultures?', 'Должны ли школы больше учить о разных мировых культурах?', 'Мектептер әлемдегі әртүрлі мәдениеттер туралы көбірек оқытуы керек пе?'),
];

$NEW9[31] = [ // Dreams and Ambitions
    V('Have you ever given up on a dream? Do you regret it?', 'Вы когда-нибудь отказывались от мечты? Вы жалеете об этом?', 'Арманыңыздан бас тарттыңыз ба? Оған өкінесіз бе?'),
    V('Do you think ambition can sometimes hurt personal relationships?', 'Как вы думаете, амбиции иногда могут навредить личным отношениям?', 'Сіздің ойыңызша, амбиция кейде жеке қарым-қатынасқа зиян тигізе ме?'),
    V('What does your ideal life look like in ten years?', 'Как выглядит ваша идеальная жизнь через десять лет?', 'Он жылдан кейінгі тамаша өміріңіз қандай болар еді?'),
    V('Do you think luck plays a bigger role in success than hard work?', 'Как вы думаете, удача играет большую роль в успехе, чем упорный труд?', 'Сіздің ойыңызша, сәттілік табыста қажырлы еңбектен үлкен рөл атқара ма?'),
    V('Have you ever changed your definition of success over time?', 'Ваше понимание успеха менялось со временем?', 'Табыс туралы түсінігіңіз уақыт өте өзгерді ме?'),
    V('What dream would you pursue if money were not an issue?', 'Какую мечту вы бы преследовали, если бы деньги не были проблемой?', 'Ақша мәселе болмаса, қандай арманды қуар едіңіз?'),
    V('Do you think people should share their goals publicly or keep them private?', 'Как вы думаете, люди должны делиться целями публично или держать их при себе?', 'Сіздің ойыңызша, адамдар мақсаттарын жария етуі керек пе, әлде жеке ұстауы керек пе?'),
    V('Have you ever helped someone else achieve their dream?', 'Вы когда-нибудь помогали кому-то другому достичь мечты?', 'Біреудің арманына жетуіне көмектестіңіз бе?'),
    V('What is one risk you are willing to take for your ambitions?', 'На какой риск вы готовы пойти ради своих амбиций?', 'Мақсаттарыңыз үшін баруға дайын бір тәуекеліңіз қандай?'),
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
