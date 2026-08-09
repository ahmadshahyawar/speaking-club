<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[39] = [ // Media and Misinformation
    V('Have you ever shared something online that later turned out to be false?', 'Вы когда-нибудь делились чем-то онлайн, что позже оказалось ложью?', 'Кейін жалған болып шыққан бір нәрсені онлайн бөлістіңіз бе?'),
    V('Do you think older or younger generations are more vulnerable to misinformation?', 'Как вы думаете, старшее или младшее поколение более уязвимо для дезинформации?', 'Сіздің ойыңызша, жалған ақпаратқа қай ұрпақ — үлкендер ме, жастар ма — осалырақ?'),
    V('Would you trust an AI tool to fact-check news for you?', 'Вы бы доверили инструменту ИИ проверку новостей на достоверность?', 'Жаңалықтарды тексеруді ЖИ құралына сенер ме едіңіз?'),
    V('Have you ever changed your opinion after fact-checking a claim?', 'Вы когда-нибудь меняли своё мнение после проверки утверждения на достоверность?', 'Мәлімдемені тексергеннен кейін пікіріңізді өзгерттіңіз бе?'),
    V('Do you think satire and fake news are sometimes confused?', 'Как вы думаете, сатиру и фейковые новости иногда путают?', 'Сіздің ойыңызша, сатира мен жалған жаңалықтар кейде шатастырыла ма?'),
    V('What news source do you trust the most, and why?', 'Какому источнику новостей вы доверяете больше всего и почему?', 'Ең көп сенетін жаңалық көзіңіз қандай, неге?'),
    V('Have you ever unfollowed someone because of what they shared online?', 'Вы когда-нибудь отписывались от кого-то из-за того, чем они делились онлайн?', 'Біреудің онлайн бөліскеніне байланысты одан жазылымды алып тастадыңыз ба?'),
    V('Do you think algorithms are partly to blame for spreading misinformation?', 'Как вы думаете, алгоритмы частично виноваты в распространении дезинформации?', 'Сіздің ойыңызша, алгоритмдер жалған ақпараттың таралуына жартылай кінәлі ме?'),
    V('What would you do if you found out a friend was spreading false information?', 'Что бы вы сделали, если бы узнали, что друг распространяет ложную информацию?', 'Досыңыздың жалған ақпарат таратып жатқанын білсеңіз, не істер едіңіз?'),
];

$NEW9[40] = [ // Cultural Identity
    V('Have you ever had to explain your culture to someone unfamiliar with it?', 'Вам когда-нибудь приходилось объяснять свою культуру тому, кто с ней незнаком?', 'Мәдениетіңізді онымен таныс емес адамға түсіндіруге тура келді ме?'),
    V('Do you think food is an important part of cultural identity?', 'Как вы думаете, еда — важная часть культурной идентичности?', 'Сіздің ойыңызша, тағам мәдени бірегейліктің маңызды бөлігі ме?'),
    V('Have you ever changed how you act depending on who you\'re with culturally?', 'Вы когда-нибудь меняли своё поведение в зависимости от того, с кем вы находитесь культурно?', 'Мәдени тұрғыда кіммен жүргеніңізге қарай әрекетіңізді өзгерттіңіз бе?'),
    V('Do you think your children (or future children) will share your cultural identity?', 'Как вы думаете, ваши дети (или будущие дети) будут разделять вашу культурную идентичность?', 'Сіздің ойыңызша, балаларыңыз (немесе болашақ балаларыңыз) сіздің мәдени бірегейлігіңізді бөліседі ме?'),
    V('Have you ever felt proud of your culture in an unexpected moment?', 'Вы когда-нибудь чувствовали гордость за свою культуру в неожиданный момент?', 'Мәдениетіңізге күтпеген сәтте мақтаныш сезіндіңіз бе?'),
    V('Do you think losing your accent means losing part of your identity?', 'Как вы думаете, потеря акцента означает потерю части идентичности?', 'Сіздің ойыңызша, акцентіңізден айырылу бірегейлігіңіздің бір бөлігінен айырылуды білдіре ме?'),
    V('What tradition from your culture would you never give up?', 'От какой традиции вашей культуры вы бы никогда не отказались?', 'Мәдениетіңіздің қандай дәстүрінен ешқашан бас тартпас едіңіз?'),
    V('Have you ever been mistaken for a different nationality or culture?', 'Вас когда-нибудь принимали за представителя другой национальности или культуры?', 'Сізді басқа ұлт немесе мәдениет өкілі деп қателесіп қалды ма?'),
    V('Do you think travel changes how people see their own culture?', 'Как вы думаете, путешествия меняют то, как люди видят свою собственную культуру?', 'Сіздің ойыңызша, саяхат адамдардың өз мәдениетін көру тәсілін өзгерте ме?'),
];

$NEW9[41] = [ // Ethics and Moral Dilemmas
    V('Have you ever told a "white lie" to protect someone\'s feelings?', 'Вы когда-нибудь говорили «безобидную ложь», чтобы защитить чьи-то чувства?', 'Біреудің сезімін қорғау үшін "зиянсыз өтірік" айттыңыз ба?'),
    V('Do you think it\'s fair to judge historical figures by today\'s moral standards?', 'Как вы думаете, справедливо ли судить исторических личностей по сегодняшним моральным стандартам?', 'Сіздің ойыңызша, тарихи тұлғаларды бүгінгі моральдық стандарттармен бағалау әділ ме?'),
    V('Have you ever stayed silent about something you knew was wrong?', 'Вы когда-нибудь молчали о том, что, как вы знали, было неправильным?', 'Дұрыс емес екенін біле тұра үндемей қалдыңыз ба?'),
    V('Do you think wealth affects how ethically people behave?', 'Как вы думаете, богатство влияет на то, насколько этично ведут себя люди?', 'Сіздің ойыңызша, байлық адамдардың этикалық жүріс-тұрысына әсер ете ме?'),
    V('Would you return extra change if a cashier gave you too much?', 'Вы бы вернули лишнюю сдачу, если бы кассир дал вам больше, чем нужно?', 'Кассир артық қайтарым берсе, оны қайтарар ма едіңіз?'),
    V('Do you think intentions matter more than outcomes when judging an action?', 'Как вы думаете, намерения важнее результатов при оценке поступка?', 'Сіздің ойыңызша, әрекетті бағалағанда ниет нәтижеден маңыздырақ па?'),
    V('Have you ever forgiven someone for something seriously wrong?', 'Вы когда-нибудь прощали кого-то за что-то серьёзно неправильное?', 'Біреуді елеулі қателігі үшін кешірдіңіз бе?'),
    V('Do you think anonymity online makes people less ethical?', 'Как вы думаете, анонимность онлайн делает людей менее этичными?', 'Сіздің ойыңызша, онлайн анонимдік адамдарды аз этикалы ете ме?'),
    V('What is a moral rule you would never break, no matter the situation?', 'Какое моральное правило вы бы никогда не нарушили, независимо от ситуации?', 'Жағдайға қарамастан ешқашан бұзбайтын моральдық ережеңіз қандай?'),
];

$NEW9[42] = [ // Urbanization
    V('Have you ever moved from a small town to a big city, or the opposite?', 'Вы когда-нибудь переезжали из маленького городка в большой город, или наоборот?', 'Кіші қаладан үлкен қалаға немесе керісінше көшіп бардыңыз ба?'),
    V('Do you think cities are becoming too expensive to live in?', 'Как вы думаете, жизнь в городах становится слишком дорогой?', 'Сіздің ойыңызша, қалаларда тұру тым қымбаттап бара жатыр ма?'),
    V('What is the most annoying thing about living in a crowded city?', 'Что самое раздражающее в жизни в переполненном городе?', 'Адам көп қалада тұрудың ең тітіркендіретін жағы қандай?'),
    V('Do you think smart-city technology actually improves daily life?', 'Как вы думаете, технологии «умного города» действительно улучшают повседневную жизнь?', '"Ақылды қала" технологиясы күнделікті өмірді шынымен жақсарта ма?'),
    V('Have you ever felt unsafe in a city environment?', 'Вы когда-нибудь чувствовали себя небезопасно в городской среде?', 'Қала ортасында қауіпсіз емес сезіндіңіз бе?'),
    V('Do you think green spaces are disappearing too fast in growing cities?', 'Как вы думаете, зелёные зоны исчезают слишком быстро в растущих городах?', 'Сіздің ойыңызша, өсіп келе жатқан қалаларда жасыл аймақтар тым тез жоғалып бара ма?'),
    V('Would you choose a longer commute for a bigger home?', 'Вы бы выбрали более долгую дорогу на работу ради большего дома?', 'Үлкенірек үй үшін ұзағырақ жол жүруді таңдар ма едіңіз?'),
    V('Do you think small towns will eventually disappear as cities grow?', 'Как вы думаете, маленькие городки в конце концов исчезнут по мере роста городов?', 'Сіздің ойыңызша, қалалар өскен сайын кіші қалалар ақыр соңында жоғала ма?'),
    V('What is one thing your city could learn from another city?', 'Чему одному ваш город мог бы научиться у другого города?', 'Қалаңыз басқа қаладан үйрене алатын бір нәрсе қандай?'),
];

$NEW9[43] = [ // The Future of Education
    V('Have you ever learned something valuable outside of a classroom?', 'Вы когда-нибудь узнавали что-то ценное за пределами класса?', 'Сынып сыртында құнды бір нәрсе үйрендіңіз бе?'),
    V('Do you think grades accurately measure a student\'s ability?', 'Как вы думаете, оценки точно измеряют способности студента?', 'Сіздің ойыңызша, бағалар оқушының қабілетін дәл өлшей ме?'),
    V('Would you trust an AI tutor to teach your child?', 'Вы бы доверили ИИ-репетитору обучение своего ребёнка?', 'Балаңызды оқытуды ЖИ репетиторына сенер ме едіңіз?'),
    V('Have you ever felt that school didn\'t prepare you for real life?', 'Вы когда-нибудь чувствовали, что школа не подготовила вас к реальной жизни?', 'Мектептің сізді нақты өмірге дайындамағанын сезіндіңіз бе?'),
    V('Do you think students should be able to choose their own subjects earlier?', 'Как вы думаете, студенты должны иметь возможность выбирать свои предметы раньше?', 'Сіздің ойыңызша, оқушылар өз пәндерін ертерек таңдай алуы керек пе?'),
    V('What subject do you wish had been taught in your school?', 'Какой предмет вы хотели бы, чтобы преподавали в вашей школе?', 'Мектебіңізде оқытылғанын қалайтын пән қандай?'),
    V('Do you think teachers will eventually be replaced by technology?', 'Как вы думаете, учителей в конце концов заменят технологии?', 'Сіздің ойыңызша, мұғалімдерді ақыр соңында технология алмастыра ма?'),
    V('Have you ever taken an online course? How did it compare to a classroom?', 'Вы когда-нибудь проходили онлайн-курс? Чем он отличался от занятий в классе?', 'Онлайн курс өттіңіз бе? Ол сыныппен қалай салыстырылады?'),
    V('What is the most important lesson school ever taught you, outside of academics?', 'Какой самый важный урок дала вам школа, помимо академических знаний?', 'Академиялық білімнен тыс мектеп берген ең маңызды сабақ қандай болды?'),
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
