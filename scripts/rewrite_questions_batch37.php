<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[137] = [ // Historical Memory and Monuments
    V('Have you ever visited a monument that made you feel uncomfortable?', 'Вы когда-нибудь посещали памятник, который заставлял вас чувствовать себя некомфортно?', 'Сізді ыңғайсыз сезінткен ескерткішке бардыңыз ба?'),
    V('Do you think renaming streets or buildings actually changes public opinion?', 'Как вы думаете, переименование улиц или зданий действительно меняет общественное мнение?', 'Сіздің ойыңызша, көшелер немесе ғимараттарды қайта атау қоғамдық пікірді шынымен өзгерте ме?'),
    V('Have you ever learned a different version of a historical event abroad than at home?', 'Вы когда-нибудь узнавали другую версию исторического события за границей, чем дома?', 'Шетелде тарихи оқиғаның үйдегіден өзгеше нұсқасын білдіңіз бе?'),
    V('Do you think museums do a good job of presenting difficult history honestly?', 'Как вы думаете, музеи хорошо справляются с честным представлением сложной истории?', 'Сіздің ойыңызша, мұражайлар қиын тарихты адал таныстыруда жақсы жұмыс істей ме?'),
    V('Should descendants of historical figures have a say in how they are remembered?', 'Должны ли потомки исторических личностей иметь право голоса в том, как их помнят?', 'Тарихи тұлғалардың ұрпақтарының олардың қалай есте қалуына қатысты пікірі болуы керек пе?'),
    V('Have you ever visited a place specifically to learn about a dark chapter of history?', 'Вы когда-нибудь посещали место специально, чтобы узнать о тёмной главе истории?', 'Тарихтың қараңғы кезеңі туралы білу үшін арнайы бір жерге бардыңыз ба?'),
    V('Do you think every country hides parts of its history it\'s ashamed of?', 'Как вы думаете, каждая страна скрывает части своей истории, которых стыдится?', 'Сіздің ойыңызша, әрбір ел ұялатын тарихының бөліктерін жасыра ма?'),
    V('Would you support building new monuments to previously overlooked groups?', 'Вы бы поддержали строительство новых памятников группам, которые ранее игнорировались?', 'Бұрын назардан тыс қалған топтарға жаңа ескерткіштер салуды қолдар ма едіңіз?'),
    V('What historical event from your country do you think is misunderstood today?', 'Какое историческое событие вашей страны, по-вашему, сегодня неправильно понимается?', 'Еліңіздің қандай тарихи оқиғасы бүгін дұрыс түсінілмейді деп ойлайсыз?'),
];

$NEW9[138] = [ // The Rise of E-Sports
    V('Have you ever played a competitive video game seriously?', 'Вы когда-нибудь играли в соревновательную видеоигру серьёзно?', 'Жарыстық видео ойынды байыппен ойнадыңыз ба?'),
    V('Do you think e-sports players need the same discipline as traditional athletes?', 'Как вы думаете, киберспортсменам нужна такая же дисциплина, как традиционным спортсменам?', 'Сіздің ойыңызша, киберспортшыларға дәстүрлі спортшылармен бірдей тәртіп керек пе?'),
    V('Would you attend a live e-sports event in person?', 'Вы бы посетили киберспортивное мероприятие лично?', 'Киберспорт іс-шарасына жеке қатысар ма едіңіз?'),
    V('Do you think e-sports will eventually be included in the Olympics?', 'Как вы думаете, киберспорт в конце концов будет включён в Олимпийские игры?', 'Сіздің ойыңызша, киберспорт ақыр соңында Олимпиада ойындарына қосыла ма?'),
    V('Have you ever followed a specific e-sports team or player?', 'Вы когда-нибудь следили за конкретной киберспортивной командой или игроком?', 'Белгілі бір киберспорт командасын немесе ойыншысын бақыладыңыз ба?'),
    V('Do you think gaming skills can translate into real-world abilities?', 'Как вы думаете, игровые навыки могут перейти в реальные жизненные способности?', 'Сіздің ойыңызша, ойын дағдылары нақты өмірдегі қабілеттерге ауыса ма?'),
    V('Would you consider e-sports a healthy hobby or a risky one?', 'Вы считаете киберспорт здоровым хобби или рискованным?', 'Киберспортты пайдалы хобби деп есептейсіз бе, әлде тәуекелді деп пе?'),
    V('Do you think parents today understand e-sports as a career path?', 'Как вы думаете, родители сегодня понимают киберспорт как карьерный путь?', 'Сіздің ойыңызша, бүгінгі ата-аналар киберспортты мансап жолы ретінде түсіне ме?'),
    V('What do you think is the biggest misconception people have about e-sports?', 'Какое, по-вашему, самое большое заблуждение людей о киберспорте?', 'Сіздің ойыңызша, адамдардың киберспорт туралы ең үлкен қате түсінігі қандай?'),
];

$NEW9[139] = [ // Water Scarcity and Resources
    V('Have you ever experienced a water shortage yourself?', 'Вы сами когда-нибудь испытывали нехватку воды?', 'Өзіңіз су тапшылығын бастан кештіңіз бе?'),
    V('Do you think people in wealthy countries take clean water for granted?', 'Как вы думаете, люди в богатых странах воспринимают чистую воду как должное?', 'Сіздің ойыңызша, бай елдердегі адамдар таза суды қарапайым нәрсе деп қабылдай ма?'),
    V('Would you support restrictions on water use during a drought?', 'Вы бы поддержали ограничения на использование воды во время засухи?', 'Құрғақшылық кезінде су пайдалануға шектеу қоюды қолдар ма едіңіз?'),
    V('Have you ever calculated how much water you use in a day?', 'Вы когда-нибудь подсчитывали, сколько воды используете за день?', 'Күніне қанша су жұмсайтыныңызды есептедіңіз бе?'),
    V('Do you think agriculture or industry wastes more water?', 'Как вы думаете, сельское хозяйство или промышленность тратят больше воды впустую?', 'Сіздің ойыңызша, ауыл шаруашылығы мен өнеркәсіптің қайсысы суды көбірек шығындайды?'),
    V('Would you eat less meat if you knew it saved significant water?', 'Вы бы ели меньше мяса, если бы знали, что это значительно экономит воду?', 'Едәуір су үнемдейтінін білсеңіз, етті азырақ жер ме едіңіз?'),
    V('Do you think bottled water companies should be more regulated?', 'Как вы думаете, компании по производству бутилированной воды должны регулироваться строже?', 'Сіздің ойыңызша, бөтелкедегі су компаниялары қатаңырақ реттелуі керек пе?'),
    V('Have you ever visited a place suffering from water scarcity?', 'Вы когда-нибудь посещали место, страдающее от нехватки воды?', 'Су тапшылығынан зардап шегетін жерге бардыңыз ба?'),
    V('What is one habit you could change to use less water?', 'Какую одну привычку вы могли бы изменить, чтобы использовать меньше воды?', 'Азырақ су пайдалану үшін өзгерте алатын бір әдетіңіз қандай?'),
];

$NEW9[140] = [ // The Psychology of Persuasion
    V('Have you ever changed your mind because of a compelling argument?', 'Вы когда-нибудь меняли своё мнение из-за убедительного аргумента?', 'Сендіретін дәлелге байланысты пікіріңізді өзгерттіңіз бе?'),
    V('Do you think discounts and sales are a form of psychological manipulation?', 'Как вы думаете, скидки и распродажи — это форма психологической манипуляции?', 'Сіздің ойыңызша, жеңілдіктер мен сатылымдар психологиялық манипуляцияның бір түрі ме?'),
    V('Have you ever fallen for a scam or manipulative sales tactic?', 'Вы когда-нибудь попадались на мошенничество или манипулятивную тактику продаж?', 'Алаяқтыққа немесе манипуляциялық сату тактикасына сендіңіз бе?'),
    V('Do you think social proof, like reviews, genuinely changes your decisions?', 'Как вы думаете, социальное доказательство, например отзывы, действительно меняет ваши решения?', 'Сіздің ойыңызша, пікірлер сияқты әлеуметтік дәлел шешімдеріңізді шынымен өзгерте ме?'),
    V('Have you ever used persuasion techniques to convince someone yourself?', 'Вы когда-нибудь сами использовали техники убеждения, чтобы кого-то в чём-то убедить?', 'Біреуді сендіру үшін өзіңіз сендіру тәсілдерін пайдаландыңыз ба?'),
    V('Do you think children are more or less resistant to persuasion than adults?', 'Как вы думаете, дети более или менее устойчивы к убеждению, чем взрослые?', 'Сіздің ойыңызша, балалар ересектерге қарағанда сендіруге көбірек төзімді ме, әлде азырақ па?'),
    V('Would you say you\'re more persuaded by logic or emotion?', 'Вы бы сказали, что вас больше убеждает логика или эмоции?', 'Сізді логика көбірек сендіреді дей аласыз ба, әлде эмоция ма?'),
    V('Have you ever noticed a friend using guilt to persuade you?', 'Вы когда-нибудь замечали, что друг использует чувство вины, чтобы убедить вас?', 'Досыңыздың сізді сендіру үшін кінәні пайдаланғанын байқадыңыз ба?'),
    V('Do you think understanding persuasion techniques makes you immune to them?', 'Как вы думаете, понимание техник убеждения делает вас невосприимчивым к ним?', 'Сіздің ойыңызша, сендіру тәсілдерін түсіну оларға қарсы иммунитет бере ме?'),
];

$NEW9[141] = [ // Artificial Intelligence in Everyday Life
    V('Have you ever asked a voice assistant something embarrassing by accident?', 'Вы когда-нибудь случайно спрашивали голосового помощника о чём-то неловком?', 'Дауыстық көмекшіден байқаусызда ыңғайсыз бірдеңе сұрап алдыңыз ба?'),
    V('Do you think AI recommendations limit what you discover, or expand it?', 'Как вы думаете, рекомендации ИИ ограничивают то, что вы открываете, или расширяют это?', 'Сіздің ойыңызша, ЖИ ұсыныстары сіз ашатын нәрсені шектей ме, әлде кеңейте ме?'),
    V('Have you ever disagreed with a decision an algorithm made about you?', 'Вы когда-нибудь не соглашались с решением, которое алгоритм принял о вас?', 'Алгоритм сіз туралы қабылдаған шешіммен келіспей қалдыңыз ба?'),
    V('Would you trust an AI to manage your finances?', 'Вы бы доверили ИИ управление своими финансами?', 'Қаржыңызды басқаруды ЖИ-ге сенер ме едіңіз?'),
    V('Do you think your parents or grandparents use AI without realizing it?', 'Как вы думаете, ваши родители или бабушки и дедушки используют ИИ, не осознавая этого?', 'Сіздің ойыңызша, ата-анаңыз немесе әжеңіз бен атаңыз ЖИ-ді байқамай пайдалана ма?'),
    V('Have you ever turned off an AI feature because it felt invasive?', 'Вы когда-нибудь отключали функцию ИИ, потому что она казалась навязчивой?', 'ЖИ функциясын шектен тыс сезінгендіктен өшірдіңіз бе?'),
    V('Do you think AI makes daily life easier or just more complicated?', 'Как вы думаете, ИИ делает повседневную жизнь легче или просто сложнее?', 'Сіздің ойыңызша, ЖИ күнделікті өмірді жеңілдете ме, әлде тек күрделендіре ме?'),
    V('Would you feel comfortable with an AI reading your messages to summarize them?', 'Вам было бы комфортно, если бы ИИ читал ваши сообщения, чтобы их резюмировать?', 'ЖИ хабарламаларыңызды қысқаша мазмұндау үшін оқыса, сізге ыңғайлы бола ма?'),
    V('What everyday task do you wish AI could handle for you?', 'Какую повседневную задачу вы хотели бы, чтобы ИИ выполнял за вас?', 'ЖИ сіз үшін орындағанын қалайтын күнделікті тапсырма қандай?'),
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
