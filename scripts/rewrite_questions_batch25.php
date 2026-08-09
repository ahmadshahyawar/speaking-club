<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[174] = [ // The Ethics of Eating Meat
    V('Have you ever visited a farm to see how animals are raised?', 'Вы когда-нибудь посещали ферму, чтобы увидеть, как выращивают животных?', 'Жануарлардың қалай өсірілетінін көру үшін фермаға бардыңыз ба?'),
    V('Do you think labeling meat products more clearly would change buying habits?', 'Как вы думаете, более чёткая маркировка мясных продуктов изменила бы привычки покупателей?', 'Сіздің ойыңызша, ет өнімдерінің таңбалауы анығырақ болса, сатып алу әдеттері өзгерер ме еді?'),
    V('What is your reaction when you learn about animal cruelty in farming?', 'Какова ваша реакция, когда вы узнаёте о жестоком обращении с животными в сельском хозяйстве?', 'Ауыл шаруашылығында жануарларға қатыгездік туралы білгенде реакцияңыз қандай болады?'),
    V('Do you think cultural traditions justify certain meat-eating practices?', 'Как вы думаете, культурные традиции оправдывают некоторые практики употребления мяса?', 'Сіздің ойыңызша, мәдени дәстүрлер белгілі бір ет жеу тәжірибелерін ақтай ма?'),
    V('Would you pay more for ethically raised meat?', 'Вы бы заплатили больше за этично выращенное мясо?', 'Этикалық түрде өсірілген ет үшін көбірек төлер ме едіңіз?'),
    V('Do you think younger generations eat less meat than older ones?', 'Как вы думаете, молодое поколение ест меньше мяса, чем старшее?', 'Сіздің ойыңызша, жас буын егде буынға қарағанда аз ет жей ме?'),
    V('What would it take for you to give up meat completely?', 'Что нужно, чтобы вы полностью отказались от мяса?', 'Еттен толығымен бас тарту үшін сізге не қажет болар еді?'),
    V('Do you think lab-grown meat is a good solution to ethical concerns?', 'Как вы думаете, выращенное в лаборатории мясо — хорошее решение этических проблем?', 'Сіздің ойыңызша, зертханада өсірілген ет этикалық мәселелерге жақсы шешім бе?'),
    V('Is it hypocritical to care about animals but still eat meat?', 'Лицемерно ли заботиться о животных, но всё же есть мясо?', 'Жануарларға қамқорлық жасай отырып, ет жеу екіжүзділік пе?'),
];

$NEW9[175] = [ // Language Loss and Revival
    V('Have you ever tried to learn a language that is becoming rare?', 'Вы когда-нибудь пытались выучить язык, который становится редким?', 'Сирек болып бара жатқан тілді үйренуге тырыстыңыз ба?'),
    V('Do you think technology can help save dying languages?', 'Как вы думаете, технологии могут помочь спасти исчезающие языки?', 'Сіздің ойыңызша, технология жойылып бара жатқан тілдерді сақтауға көмектесе ме?'),
    V('What happens to a culture\'s stories when its language disappears?', 'Что происходит с историями культуры, когда её язык исчезает?', 'Тілі жойылғанда мәдениеттің әңгімелеріне не болады?'),
    V('Have you ever met someone who spoke a language you had never heard of?', 'Вы когда-нибудь встречали человека, который говорил на языке, о котором вы никогда не слышали?', 'Ешқашан естімеген тілде сөйлейтін адаммен кездестіңіз бе?'),
    V('Do you think schools should offer more minority language classes?', 'Как вы думаете, школы должны предлагать больше уроков языков меньшинств?', 'Мектептер аз ұлт тілдері бойынша көбірек сабақ ұсынуы керек пе?'),
    V('What language do you wish you could speak fluently?', 'На каком языке вы хотели бы говорить свободно?', 'Қандай тілде еркін сөйлегіңіз келеді?'),
    V('Do you think a shared global language would be good or bad for cultures?', 'Как вы думаете, общий мировой язык был бы хорошим или плохим для культур?', 'Сіздің ойыңызша, ортақ жаһандық тіл мәдениеттер үшін жақсы ма, әлде жаман ба?'),
    V('Have you ever lost some of your own language ability from not using it?', 'Вы когда-нибудь теряли часть навыков своего родного языка из-за того, что не использовали его?', 'Пайдаланбағандықтан өз тіліңіздегі кейбір дағдыларыңызды жоғалттыңыз ба?'),
    V('What is being done in your country to protect local languages?', 'Что делается в вашей стране для защиты местных языков?', 'Еліңізде жергілікті тілдерді қорғау үшін не істелуде?'),
];

$NEW9[176] = [ // The Life of a Content Creator
    V('Do you think content creators deserve the criticism they sometimes receive?', 'Как вы думаете, создатели контента заслуживают критику, которую иногда получают?', 'Сіздің ойыңызша, контент жасаушылар кейде алатын сынға лайық па?'),
    V('Have you ever unsubscribed from a creator because their content changed?', 'Вы когда-нибудь отписывались от блогера, потому что его контент изменился?', 'Мазмұны өзгергендіктен блогерден жазылымды алып тастадыңыз ба?'),
    V('What topic would you create content about if you started today?', 'На какую тему вы бы создавали контент, если бы начали сегодня?', 'Бүгін бастасаңыз, қандай тақырыпта контент жасар едіңіз?'),
    V('Do you think being a content creator is a stable career choice?', 'Как вы думаете, быть создателем контента — стабильный карьерный выбор?', 'Сіздің ойыңызша, контент жасаушы болу тұрақты мансап таңдауы ма?'),
    V('Have you ever felt like you knew a content creator personally?', 'Вы когда-нибудь чувствовали, что лично знаете блогера?', 'Контент жасаушыны жеке білетіндей сезіндіңіз бе?'),
    V('What is the downside of fame that most people don\'t consider?', 'Какой недостаток славы большинство людей не учитывают?', 'Көпшілік адам ескермейтін атақтылықтың кемшілігі қандай?'),
    V('Do you think authenticity matters more than production quality online?', 'Как вы думаете, аутентичность важнее качества производства онлайн?', 'Сіздің ойыңызша, онлайнда шынайылық өндіріс сапасынан маңыздырақ па?'),
    V('Have you ever supported a creator financially?', 'Вы когда-нибудь финансово поддерживали блогера?', 'Контент жасаушыны қаржылай қолдадыңыз ба?'),
    V('What would make you stop watching or following someone online?', 'Что заставило бы вас перестать смотреть или подписываться на кого-то онлайн?', 'Онлайнда біреуді көруді немесе бақылауды тоқтатуыңызға не себеп болар еді?'),
];

$NEW9[177] = [ // Minimalism and Decluttering
    V('Have you ever regretted throwing something away?', 'Вы когда-нибудь жалели, что что-то выбросили?', 'Бір затты лақтырғаныңызға өкіндіңіз бе?'),
    V('Do you think minimalism is a trend or a lasting lifestyle change?', 'Как вы думаете, минимализм — это тренд или долгосрочное изменение образа жизни?', 'Сіздің ойыңызша, минимализм тренд пе, әлде тұрақты өмір салты өзгерісі ме?'),
    V('What category of items do you find hardest to declutter?', 'Какую категорию вещей вам труднее всего убрать?', 'Қай санаттағы заттардан құтылу ең қиын?'),
    V('Have you ever helped someone else declutter their home?', 'Вы когда-нибудь помогали кому-то разобрать вещи в доме?', 'Біреудің үйін реттеуге көмектестіңіз бе?'),
    V('Do you think advertising encourages people to buy things they don\'t need?', 'Как вы думаете, реклама побуждает людей покупать ненужные вещи?', 'Сіздің ойыңызша, жарнама адамдарды керек емес заттарды сатып алуға итермелей ме?'),
    V('What is the most useless item you have ever bought?', 'Какая самая бесполезная вещь, которую вы когда-либо покупали?', 'Сатып алған ең пайдасыз затыңыз қандай болды?'),
    V('Would you feel more relaxed with fewer possessions?', 'Вы бы чувствовали себя спокойнее, имея меньше вещей?', 'Аз затқа ие болсаңыз, өзіңізді жайлырақ сезінер ме едіңіз?'),
    V('Do you think digital clutter, like emails and files, matters as much as physical clutter?', 'Как вы думаете, цифровой беспорядок, например письма и файлы, важен так же, как физический?', 'Сіздің ойыңызша, электрондық хаттар мен файлдар сияқты цифрлық ретсіздік физикалық ретсіздік сияқты маңызды ма?'),
    V('What is one thing you could declutter from your life today?', 'Что одно вы могли бы убрать из своей жизни сегодня?', 'Бүгін өміріңізден құтыла алатын бір зат қандай?'),
];

$NEW9[178] = [ // The Psychology of Procrastination
    V('Do you procrastinate more with tasks you dislike or tasks that feel too big?', 'Вы больше откладываете дела, которые не любите, или дела, которые кажутся слишком большими?', 'Ұнатпайтын тапсырмаларды көбірек кейінге қалдырасыз ба, әлде тым үлкен сезілетіндерді ме?'),
    V('Have you ever missed a deadline because of procrastination?', 'Вы когда-нибудь пропускали дедлайн из-за прокрастинации?', 'Кейінге қалдырғандықтан мерзімді жіберіп алдыңыз ба?'),
    V('What time of day are you most likely to procrastinate?', 'В какое время дня вы чаще всего откладываете дела?', 'Күннің қай уақытында ісіңізді жиі кейінге қалдырасыз?'),
    V('Do you think procrastination is linked to fear of failure?', 'Как вы думаете, прокрастинация связана со страхом неудачи?', 'Сіздің ойыңызша, кейінге қалдыру сәтсіздіктен қорқумен байланысты ма?'),
    V('Have you ever tricked yourself into starting a task you were avoiding?', 'Вы когда-нибудь обманывали себя, чтобы начать дело, которое избегали?', 'Аулақ болып жүрген тапсырманы бастау үшін өзіңізді алдадыңыз ба?'),
    V('What task have you been procrastinating on right now?', 'Какое дело вы сейчас откладываете?', 'Қазір қандай тапсырманы кейінге қалдырып жүрсіз?'),
    V('Do you think some people are naturally better at avoiding procrastination?', 'Как вы думаете, некоторые люди от природы лучше избегают прокрастинации?', 'Сіздің ойыңызша, кейбір адамдар табиғи түрде кейінге қалдырмауда жақсырақ па?'),
    V('Have you ever helped a friend overcome procrastination?', 'Вы когда-нибудь помогали другу справиться с прокрастинацией?', 'Досыңызға кейінге қалдырудан арылуға көмектестіңіз бе?'),
    V('What reward system helps motivate you to finish tasks?', 'Какая система вознаграждения помогает вам мотивировать себя закончить дела?', 'Тапсырмаларды аяқтауға қандай марапат жүйесі жігерлендіреді?'),
];

$NEW9[179] = [ // Urban Wildlife
    V('Have you ever fed a wild animal in the city, even accidentally?', 'Вы когда-нибудь кормили дикое животное в городе, даже случайно?', 'Қалада жабайы жануарды тамақтандырдыңыз ба, тіпті кездейсоқ болса да?'),
    V('Do you think urban wildlife is a sign of a healthy environment?', 'Как вы думаете, городская дикая природа — признак здоровой окружающей среды?', 'Сіздің ойыңызша, қалалық жабайы табиғат таза қоршаған ортаның белгісі ме?'),
    V('What animal do you think has adapted best to city life?', 'Какое животное, по-вашему, лучше всего приспособилось к городской жизни?', 'Сіздің ойыңызша, қала өміріне ең жақсы бейімделген жануар қайсы?'),
    V('Have you ever felt scared by an urban animal?', 'Вас когда-нибудь пугало городское животное?', 'Қалалық жануардан қорыққаныңыз болды ма?'),
    V('Do you think cities should build wildlife corridors for animals?', 'Как вы думаете, города должны строить коридоры для диких животных?', 'Сіздің ойыңызша, қалалар жануарлар үшін дәліздер салуы керек пе?'),
    V('What is the strangest urban wildlife encounter you have heard about?', 'О какой самой странной встрече с городской дикой природой вы слышали?', 'Естіген ең таңғаларлық қалалық жабайы табиғатпен кездесу қандай болды?'),
    V('Do you think people should be allowed to feed wild animals in the city?', 'Как вы думаете, людям должно быть разрешено кормить диких животных в городе?', 'Адамдарға қалада жабайы жануарларды тамақтандыруға рұқсат берілуі керек пе?'),
    V('Have you ever seen wildlife return to an area after pollution decreased?', 'Вы когда-нибудь видели, как дикая природа возвращается в район после снижения загрязнения?', 'Ластану азайғаннан кейін жабайы табиғаттың ауданға қайта оралғанын көрдіңіз бе?'),
    V('What would you do if a wild animal made a home in your yard?', 'Что бы вы сделали, если бы дикое животное поселилось у вас во дворе?', 'Жабайы жануар ауласыңызда мекендесе, не істер едіңіз?'),
];

$NEW9[180] = [ // The Rise of Plant-Based Diets
    V('Have you ever cooked a plant-based meal for others?', 'Вы когда-нибудь готовили растительное блюдо для других?', 'Басқаларға өсімдік негізіндегі тағам пісірдіңіз бе?'),
    V('Do you think plant-based diets are more expensive than regular diets?', 'Как вы думаете, растительное питание дороже обычного?', 'Сіздің ойыңызша, өсімдік негізіндегі тамақтану әдеттегіден қымбат па?'),
    V('What plant-based food surprised you by tasting good?', 'Какая растительная еда удивила вас своим хорошим вкусом?', 'Дәмі жақсы болып сізді таңғалдырған өсімдік негізіндегі тағам бар ма?'),
    V('Have you ever felt judged for your eating choices, whether plant-based or not?', 'Вы когда-нибудь чувствовали, что вас осуждают за выбор питания, растительное оно или нет?', 'Тамақтану таңдауыңыз үшін сотталған сияқты сезіндіңіз бе?'),
    V('Do you think restaurants offer enough plant-based options today?', 'Как вы думаете, рестораны сегодня предлагают достаточно растительных блюд?', 'Сіздің ойыңызша, мейрамханалар бүгінде өсімдік негізіндегі тағамдарды жеткілікті ұсына ма?'),
    V('What would encourage more people to try plant-based eating?', 'Что побудило бы больше людей попробовать растительное питание?', 'Көбірек адамды өсімдік негізіндегі тамақтануды сынап көруге не итермелейді?'),
    V('Do you think plant-based diets provide enough nutrition for athletes?', 'Как вы думаете, растительное питание обеспечивает достаточно питания для спортсменов?', 'Сіздің ойыңызша, өсімдік негізіндегі тамақтану спортшыларға жеткілікті қоректік зат бере ме?'),
    V('Have you ever tried making your own plant-based milk or cheese?', 'Вы когда-нибудь пытались сделать собственное растительное молоко или сыр?', 'Өз өсімдік сүтіңізді немесе ірімшігіңізді жасап көрдіңіз бе?'),
    V('What is the biggest myth about plant-based eating, in your opinion?', 'Какой самый большой миф о растительном питании, по-вашему?', 'Сіздің ойыңызша, өсімдік негізіндегі тамақтану туралы ең үлкен миф қандай?'),
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
