<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[112] = [ // Beauty Standards and Self-Image
    V('Do you think men face the same pressure about appearance as women?', 'Как вы думаете, мужчины испытывают такое же давление по поводу внешности, как женщины?', 'Сіздің ойыңызша, ерлер сыртқы келбетке байланысты әйелдер сияқты қысым сезіне ме?'),
    V('Have you ever avoided taking photos because of how you looked?', 'Вы когда-нибудь избегали фотографироваться из-за своего внешнего вида?', 'Сыртқы келбетіңізге байланысты суретке түсуден бас тарттыңыз ба?'),
    V('What role should schools play in teaching healthy self-image?', 'Какую роль должны играть школы в обучении здоровому восприятию себя?', 'Мектептер дені сау өзін-өзі қабылдауды үйретуде қандай рөл атқаруы керек?'),
    V('Do you think the beauty industry benefits from people\'s insecurities?', 'Как вы думаете, индустрия красоты извлекает выгоду из неуверенности людей?', 'Сіздің ойыңызша, сұлулық индустриясы адамдардың сенімсіздігінен пайда көре ме?'),
    V('Have your beauty standards changed as you\'ve gotten older?', 'Ваши стандарты красоты изменились с возрастом?', 'Жасыңыз үлкейген сайын сұлулық стандарттарыңыз өзгерді ме?'),
    V('Do you think plastic surgery is becoming too normalized?', 'Как вы думаете, пластическая хирургия становится слишком нормальной?', 'Сіздің ойыңызша, пластикалық хирургия тым қалыпты жағдайға айналып жатыр ма?'),
    V('What compliment do you remember receiving that boosted your confidence?', 'Какой комплимент вы помните, который повысил вашу уверенность?', 'Сенімділігіңізді арттырған, есіңізде қалған мақтауыңыз бар ма?'),
    V('Do you follow accounts that promote body positivity?', 'Вы подписаны на аккаунты, продвигающие бодипозитив?', 'Дене позитивін насихаттайтын аккаунттарға жазылғансыз ба?'),
    V('Would you raise a child differently to protect their self-image?', 'Вы бы воспитывали ребёнка по-другому, чтобы защитить его самооценку?', 'Баланың өзін-өзі қабылдауын қорғау үшін оны басқаша тәрбиелер ме едіңіз?'),
];

$NEW9[113] = [ // The Power of Habits
    V('What time of day are your habits strongest?', 'В какое время дня ваши привычки сильнее всего?', 'Күннің қай уақытында әдеттеріңіз ең күшті болады?'),
    V('Have you ever replaced a bad habit with a good one?', 'Вы когда-нибудь заменяли плохую привычку хорошей?', 'Жаман әдетті жақсы әдетпен алмастырдыңыз ба?'),
    V('Do you think small habits really lead to big changes over time?', 'Как вы думаете, маленькие привычки действительно приводят к большим переменам со временем?', 'Сіздің ойыңызша, кішкентай әдеттер уақыт өте үлкен өзгеріске әкеле ме?'),
    V('What habit do people around you wish you would change?', 'Какую привычку окружающие хотели бы, чтобы вы изменили?', 'Айналаңыздағы адамдар қандай әдетіңізді өзгертуіңізді қалайды?'),
    V('Have you ever used an app to track a habit?', 'Вы когда-нибудь использовали приложение для отслеживания привычки?', 'Әдетті бақылау үшін қосымша пайдаландыңыз ба?'),
    V('Do you think habits formed in childhood are hardest to break?', 'Как вы думаете, привычки, сформированные в детстве, труднее всего сломать?', 'Сіздің ойыңызша, балалық шақта қалыптасқан әдеттерді тастау ең қиын ба?'),
    V('What environment helps you stick to good habits?', 'Какая обстановка помогает вам придерживаться хороших привычек?', 'Қандай орта жақсы әдеттерді ұстануға көмектеседі?'),
    V('Have you ever fallen back into an old habit after quitting it?', 'Вы когда-нибудь возвращались к старой привычке после того, как бросили её?', 'Тастаған ескі әдетіңізге қайта оралдыңыз ба?'),
    V('What habit are you most proud of maintaining?', 'Какой привычкой вы больше всего гордитесь, что поддерживаете её?', 'Сақтап келе жатқан ең мақтан тұтатын әдетіңіз қандай?'),
];

$NEW9[114] = [ // Traditional vs Modern Medicine
    V('Do you think insurance should cover traditional medicine treatments?', 'Как вы думаете, страховка должна покрывать лечение традиционной медициной?', 'Сіздің ойыңызша, сақтандыру дәстүрлі медицина емін жабуы керек пе?'),
    V('Have you ever disagreed with a doctor\'s diagnosis?', 'Вы когда-нибудь не соглашались с диагнозом врача?', 'Дәрігердің диагнозымен келіспей қалдыңыз ба?'),
    V('What is a traditional remedy your grandparents used?', 'Какое традиционное средство использовали ваши бабушка и дедушка?', 'Ата-әжеңіз қолданған дәстүрлі ем қандай болды?'),
    V('Do you think modern medicine ignores traditional knowledge too much?', 'Как вы думаете, современная медицина слишком игнорирует традиционные знания?', 'Сіздің ойыңызша, заманауи медицина дәстүрлі білімді тым көп елемей ме?'),
    V('Would you try a treatment with no scientific proof if a doctor recommended it?', 'Вы бы попробовали лечение без научных доказательств, если бы его рекомендовал врач?', 'Дәрігер ұсынса, ғылыми дәлелі жоқ емді сынап көрер ме едіңіз?'),
    V('Do you think mental health is treated well in your country\'s medical system?', 'Как вы думаете, психическое здоровье хорошо лечится в медицинской системе вашей страны?', 'Сіздің ойыңызша, еліңіздің медицина жүйесінде психикалық денсаулық жақсы емделе ме?'),
    V('Have you ever recovered from something using only traditional methods?', 'Вы когда-нибудь выздоравливали, используя только традиционные методы?', 'Тек дәстүрлі әдістерді пайдаланып жазылып кеттіңіз бе?'),
    V('What worries you most about visiting a doctor?', 'Что вас больше всего беспокоит в посещении врача?', 'Дәрігерге баруда сізді ең көп не алаңдатады?'),
    V('Do you think future medicine will combine both traditional and modern approaches?', 'Как вы думаете, медицина будущего объединит традиционные и современные подходы?', 'Сіздің ойыңызша, болашақ медицина дәстүрлі және заманауи тәсілдерді біріктіреді ме?'),
];

$NEW9[115] = [ // The Sharing Economy
    V('Have you ever had a bad experience using a sharing app?', 'У вас когда-нибудь был плохой опыт использования приложения для шеринга?', 'Бөлісу қосымшасын пайдаланғанда жаман тәжірибе бастан кештіңіз бе?'),
    V('Do you think ownership will become less important in the future?', 'Как вы думаете, владение станет менее важным в будущем?', 'Сіздің ойыңызша, болашақта меншіктену маңызын жоғалта ма?'),
    V('What item would you never share with a stranger?', 'Какой предмет вы бы никогда не поделились с незнакомцем?', 'Бейтаныс адаммен ешқашан бөліспейтін затыңыз қандай?'),
    V('Do you think sharing economy workers have enough protection and rights?', 'Как вы думаете, у работников экономики совместного использования достаточно защиты и прав?', 'Сіздің ойыңызша, бөлісу экономикасында жұмыс істейтіндердің қорғанысы мен құқығы жеткілікті ме?'),
    V('Have you ever shared a car, tool, or space with a neighbor?', 'Вы когда-нибудь делили машину, инструмент или пространство с соседом?', 'Көршіңізбен көлікті, құралды немесе кеңістікті бөлістіңіз бе?'),
    V('What convinced you to trust, or not trust, a sharing platform?', 'Что убедило вас доверять или не доверять платформе для шеринга?', 'Бөлісу платформасына сенуге немесе сенбеуге сізді не иландырды?'),
    V('Do you think the sharing economy is good for the environment?', 'Как вы думаете, экономика совместного использования полезна для окружающей среды?', 'Сіздің ойыңызша, бөлісу экономикасы қоршаған ортаға пайдалы ма?'),
    V('Would you rather own fewer things and rent more?', 'Вы бы предпочли владеть меньшим количеством вещей и больше арендовать?', 'Аз затқа ие болып, көбірек жалдағанды қалайсыз ба?'),
    V('What service do you wish had a sharing option?', 'Для какой услуги вы хотели бы иметь опцию совместного использования?', 'Қандай қызметте бөлісу опциясы болғанын қалайсыз?'),
];

$NEW9[116] = [ // Animal Rights and Ethics
    V('Do you think using animals for entertainment, like circuses, is ethical?', 'Как вы думаете, использование животных для развлечения, например в цирке, этично?', 'Сіздің ойыңызша, жануарларды цирк сияқты ойын-сауық үшін пайдалану этикалық па?'),
    V('Have you ever changed your eating habits because of animal welfare?', 'Вы когда-нибудь меняли пищевые привычки из-за благополучия животных?', 'Жануарлардың әл-ауқатына байланысты тамақтану әдетіңізді өзгерттіңіз бе?'),
    V('What is your opinion on hunting for sport?', 'Каково ваше мнение об охоте как спорте?', 'Спорт үшін аңшылық туралы пікіріңіз қандай?'),
    V('Do you think pet ownership is fair to animals?', 'Как вы думаете, владение домашними животными справедливо по отношению к ним?', 'Сіздің ойыңызша, үй жануарын ұстау жануарларға әділ ме?'),
    V('Have you ever donated to an animal rights organization?', 'Вы когда-нибудь жертвовали организации по защите прав животных?', 'Жануарлар құқығын қорғау ұйымына қайырымдылық жасадыңыз ба?'),
    V('Do you think laws protecting animals are strong enough in your country?', 'Как вы думаете, законы, защищающие животных, достаточно сильны в вашей стране?', 'Сіздің ойыңызша, еліңізде жануарларды қорғайтын заңдар жеткілікті күшті ме?'),
    V('What animal-related issue do you feel most strongly about?', 'Какая проблема, связанная с животными, вас волнует больше всего?', 'Жануарларға қатысты сізді ең көп толғандыратын мәселе қандай?'),
    V('Do you believe animals have the same right to life as humans?', 'Вы верите, что животные имеют такое же право на жизнь, как люди?', 'Жануарлардың адамдар сияқты өмір сүруге құқығы бар деп сенесіз бе?'),
    V('Would you support a ban on fur products?', 'Вы бы поддержали запрет на изделия из меха?', 'Мех бұйымдарына тыйым салуды қолдар ма едіңіз?'),
];

$NEW9[117] = [ // The Art of Negotiation
    V('Do you think emotions should be hidden during negotiation?', 'Как вы думаете, эмоции нужно скрывать во время переговоров?', 'Сіздің ойыңызша, келіссөз кезінде эмоцияларды жасыру керек пе?'),
    V('Have you ever regretted agreeing to a deal too quickly?', 'Вы когда-нибудь жалели, что слишком быстро согласились на сделку?', 'Мәмілеге тым тез келіскеніңізге өкіндіңіз бе?'),
    V('What negotiation tactic do you think is unfair?', 'Какую тактику переговоров вы считаете нечестной?', 'Қандай келіссөз тактикасын әділетсіз деп санайсыз?'),
    V('Do you prepare research before negotiating something important?', 'Вы готовитесь заранее перед важными переговорами?', 'Маңызды нәрсе туралы келіссөз жүргізер алдында зерттеу жасайсыз ба?'),
    V('Have you ever negotiated on behalf of someone else?', 'Вы когда-нибудь вели переговоры от имени кого-то другого?', 'Біреудің атынан келіссөз жүргіздіңіз бе?'),
    V('Do you think culture affects how people negotiate?', 'Как вы думаете, культура влияет на то, как люди ведут переговоры?', 'Сіздің ойыңызша, мәдениет адамдардың келіссөз жүргізу тәсіліне әсер ете ме?'),
    V('What is the hardest thing you have ever negotiated?', 'Что было самым трудным, о чём вам приходилось договариваться?', 'Келіссөз жүргізген ең қиын нәрсеңіз қандай болды?'),
    V('Do you believe honesty always leads to better negotiation outcomes?', 'Вы верите, что честность всегда приводит к лучшим результатам переговоров?', 'Адалдық әрдайым жақсы келіссөз нәтижесіне әкеледі деп сенесіз бе?'),
    V('Would you rather negotiate salary in person or over email?', 'Вы бы предпочли обсуждать зарплату лично или по электронной почте?', 'Жалақыны жеке кездесіп талқылағанды қалайсыз ба, әлде электрондық пошта арқылы ма?'),
];

$NEW9[118] = [ // Digital Detox
    V('Have you ever felt anxious being away from your phone?', 'Вы когда-нибудь чувствовали тревогу, находясь без телефона?', 'Телефоныңыздан алшақ болғанда мазасызданғаныңыз болды ма?'),
    V('Do you think workplaces should limit phone use during work hours?', 'Как вы думаете, на работе должны ограничивать использование телефона в рабочее время?', 'Сіздің ойыңызша, жұмыс орындары жұмыс уақытында телефон қолдануды шектеуі керек пе?'),
    V('What app do you spend the most time on, and do you regret it?', 'На каком приложении вы проводите больше всего времени и жалеете ли об этом?', 'Ең көп уақыт өткізетін қосымшаңыз қандай және оған өкінесіз бе?'),
    V('Have you ever deleted a social media app to reduce screen time?', 'Вы когда-нибудь удаляли приложение соцсети, чтобы сократить экранное время?', 'Экран уақытын азайту үшін әлеуметтік желі қосымшасын жойдыңыз ба?'),
    V('Do you think children should have limited screen time?', 'Как вы думаете, у детей должно быть ограниченное экранное время?', 'Сіздің ойыңызша, балалардың экран уақыты шектелуі керек пе?'),
    V('What activity do you replace screen time with when you disconnect?', 'Каким занятием вы заменяете экранное время, когда отключаетесь?', 'Байланыс үзгенде экран уақытын немен алмастырасыз?'),
    V('Have you ever gone on a trip specifically to disconnect from technology?', 'Вы когда-нибудь ездили в поездку специально, чтобы отключиться от технологий?', 'Технологиядан алшақтау үшін арнайы сапарға шықтыңыз ба?'),
    V('Do you think complete digital detox is realistic in modern life?', 'Как вы думаете, полный цифровой детокс реалистичен в современной жизни?', 'Сіздің ойыңызша, толық цифрлық детокс қазіргі өмірде мүмкін бе?'),
    V('What is the longest you have gone without checking your phone?', 'Сколько дольше всего вы обходились без проверки телефона?', 'Телефоныңызды қарамай өткен ең ұзақ уақытыңыз қанша болды?'),
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
