<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[254] = [ // Post-Truth Society
    V('Have you ever avoided reading a news article because it contradicted your beliefs?', 'Вы когда-нибудь избегали чтения новостной статьи, потому что она противоречила вашим убеждениям?', 'Наныміңізге қайшы келгендіктен жаңалық мақаласын оқудан аулақ болдыңыз ба?'),
    V('Do you think social media algorithms deepen post-truth thinking?', 'Как вы думаете, алгоритмы соцсетей углубляют пост-правдивое мышление?', 'Сіздің ойыңызша, әлеуметтік желі алгоритмдері постшындық ойлауды тереңдете ме?'),
    V('Have you ever been in an argument where facts didn\'t seem to change anyone\'s mind?', 'Вы когда-нибудь были в споре, где факты, казалось, ничьё мнение не меняли?', 'Фактілер ешкімнің пікірін өзгертпейтіндей көрінген дауда болдыңыз ба?'),
    V('Do you think politicians benefit from a post-truth environment?', 'Как вы думаете, политики извлекают выгоду из пост-правдивой среды?', 'Сіздің ойыңызша, саясаткерлер постшындық ортадан пайда көре ме?'),
    V('Have you ever discovered a widely believed claim was actually false?', 'Вы когда-нибудь обнаруживали, что широко распространённое убеждение на самом деле было ложным?', 'Кеңінен сенілетін мәлімдеменің шындығында жалған екенін анықтадыңыз ба?'),
    V('Do you think education can reverse the post-truth trend?', 'Как вы думаете, образование может обратить вспять пост-правдивую тенденцию?', 'Сіздің ойыңызша, білім постшындық үрдісін кері бұра ала ма?'),
    V('Would you trust a friend\'s opinion over an expert\'s, if they conflicted?', 'Вы бы доверяли мнению друга больше, чем эксперту, если бы они противоречили друг другу?', 'Қайшы келсе, досыңыздың пікіріне сарапшыныкінен гөрі сенер ме едіңіз?'),
    V('Do you think satire and misinformation blur together too easily today?', 'Как вы думаете, сатира и дезинформация сегодня слишком легко сливаются?', 'Сіздің ойыңызша, бүгінде сатира мен жалған ақпарат тым оңай араласып кетеді ме?'),
    V('What would restore your trust in public information sources?', 'Что восстановило бы ваше доверие к общественным источникам информации?', 'Қоғамдық ақпарат көздеріне сеніміңізді не қалпына келтіре алар еді?'),
];

$NEW9[255] = [ // The Economics of Attention
    V('Have you ever paid to remove ads just to protect your focus?', 'Вы когда-нибудь платили за удаление рекламы, чтобы защитить свою концентрацию?', 'Назарыңызды қорғау үшін жарнаманы алып тастауға ақы төледіңіз бе?'),
    V('Do you think free apps are truly free, or do they cost you attention?', 'Как вы думаете, бесплатные приложения действительно бесплатны, или они стоят вам внимания?', 'Сіздің ойыңызша, тегін қосымшалар шынымен тегін бе, әлде олар сізге назарыңыздың есебінен келеді ме?'),
    V('Have you ever set aside dedicated time to focus without any distractions?', 'Вы когда-нибудь выделяли специальное время для концентрации без каких-либо отвлечений?', 'Ешбір алаңдатушылықсыз шоғырлануға арнайы уақыт бөлдіңіз бе?'),
    V('Do you think multitasking actually wastes more time than it saves?', 'Как вы думаете, многозадачность на самом деле тратит больше времени, чем экономит?', 'Сіздің ойыңызша, көп тапсырманы бір мезгілде орындау үнемдегеннен гөрі көбірек уақытты ысырап ете ме?'),
    V('Have you ever felt like your attention was being sold to advertisers?', 'Вы когда-нибудь чувствовали, что ваше внимание продаётся рекламодателям?', 'Назарыңыз жарнама берушілерге сатылып жатқандай сезіндіңіз бе?'),
    V('Do you think workplaces respect employees\' attention enough?', 'Как вы думаете, рабочие места достаточно уважают внимание сотрудников?', 'Сіздің ойыңызша, жұмыс орындары қызметкерлердің назарын жеткілікті құрметтей ме?'),
    V('Would you use a tool that blocks distracting websites during work hours?', 'Вы бы использовали инструмент, блокирующий отвлекающие сайты в рабочее время?', 'Жұмыс уақытында алаңдатушы сайттарды бұғаттайтын құралды пайдаланар ма едіңіз?'),
    V('Have you ever regretted how you spent your attention on a given day?', 'Вы когда-нибудь жалели о том, как потратили своё внимание в определённый день?', 'Белгілі бір күні назарыңызды қалай жұмсағаныңызға өкіндіңіз бе?'),
    V('What is the most valuable thing you could do with an extra hour of undistracted attention?', 'Что самое ценное вы могли бы сделать с дополнительным часом сосредоточенного внимания?', 'Алаңдамай назар аударатын қосымша бір сағатпен ең құнды не істей алар едіңіз?'),
];

$NEW9[256] = [ // Techno-Optimism vs Techno-Skepticism
    V('Have you ever been excited about a technology that later disappointed you?', 'Вы когда-нибудь были в восторге от технологии, которая позже вас разочаровала?', 'Кейін көңіліңізден шықпаған технологияға қуанғаныңыз болды ма?'),
    V('Do you think older generations are naturally more skeptical of new tech?', 'Как вы думаете, старшее поколение по природе более скептично к новым технологиям?', 'Сіздің ойыңызша, үлкен ұрпақ жаңа технологияға табиғи түрде күмәнмен қарай ма?'),
    V('Have you ever refused to adopt a popular technology on principle?', 'Вы когда-нибудь принципиально отказывались принимать популярную технологию?', 'Танымал технологияны принципті түрде қабылдаудан бас тарттыңыз ба?'),
    V('Do you think tech companies exaggerate the benefits of their products?', 'Как вы думаете, технологические компании преувеличивают преимущества своих продуктов?', 'Сіздің ойыңызша, технология компаниялары өз өнімдерінің артықшылықтарын әсірелей ме?'),
    V('Have you ever changed your opinion about a technology after using it yourself?', 'Вы когда-нибудь меняли своё мнение о технологии после того, как сами её использовали?', 'Технологияны өзіңіз пайдаланғаннан кейін ол туралы пікіріңізді өзгерттіңіз бе?'),
    V('Do you think skepticism slows down helpful innovation unnecessarily?', 'Как вы думаете, скептицизм без необходимости замедляет полезные инновации?', 'Сіздің ойыңызша, күмәнданушылық пайдалы инновацияны қажетсіз баяулата ма?'),
    V('Would you trust a new technology more if regulators approved it first?', 'Вы бы больше доверяли новой технологии, если бы регуляторы сначала её одобрили?', 'Реттеушілер алдымен мақұлдаса, жаңа технологияға көбірек сенер ме едіңіз?'),
    V('Have you ever warned a friend or family member about a technology\'s risks?', 'Вы когда-нибудь предупреждали друга или члена семьи о рисках технологии?', 'Досыңызды немесе отбасы мүшесін технологияның қауіп-қатері туралы ескерттіңіз бе?'),
    V('What would make you fully embrace an emerging technology?', 'Что заставило бы вас полностью принять новую технологию?', 'Жаңадан пайда болған технологияны толығымен қабылдауыңызға не себеп болар еді?'),
];

$NEW9[257] = [ // The Culture of Overwork in Different Countries
    V('Have you ever taken all your vacation days in a single year?', 'Вы когда-нибудь использовали все свои отпускные дни за один год?', 'Барлық демалыс күндеріңізді бір жылда пайдаландыңыз ба?'),
    V('Do you think your culture rewards visible effort over actual results?', 'Как вы думаете, ваша культура вознаграждает видимые усилия больше, чем реальные результаты?', 'Сіздің ойыңызша, мәдениетіңіз нақты нәтижеден гөрі көрінетін күш-жігерді марапаттай ма?'),
    V('Have you ever felt judged for leaving work on time?', 'Вы когда-нибудь чувствовали себя осуждённым за то, что уходите с работы вовремя?', 'Жұмыстан уақытында кеткеніңіз үшін сотталғандай сезіндіңіз бе?'),
    V('Do you think remote work has made overwork better or worse?', 'Как вы думаете, удалённая работа улучшила или ухудшила переработку?', 'Сіздің ойыңызша, қашықтан жұмыс шамадан тыс жұмыс істеуді жақсартты ма, әлде нашарлатты ма?'),
    V('Have you ever compared your work hours to those of friends in other countries?', 'Вы когда-нибудь сравнивали свои рабочие часы с часами друзей в других странах?', 'Жұмыс сағаттарыңызды басқа елдердегі достарыңыздікімен салыстырдыңыз ба?'),
    V('Do you think overwork is more common in certain industries than others?', 'Как вы думаете, переработка более распространена в определённых отраслях, чем в других?', 'Сіздің ойыңызша, шамадан тыс жұмыс кейбір салаларда жиірек кездесе ме?'),
    V('Would you take a lower salary for guaranteed shorter hours?', 'Вы бы согласились на меньшую зарплату за гарантированно более короткий рабочий день?', 'Кепілдендірілген қысқа жұмыс сағаттары үшін төмен жалақыға келісер ме едіңіз?'),
    V('Have you ever seen someone praised specifically for overworking?', 'Вы когда-нибудь видели, чтобы кого-то хвалили именно за переработку?', 'Біреудің шамадан тыс жұмыс істегені үшін арнайы мақталғанын көрдіңіз бе?'),
    V('What would a genuinely healthy work culture look like to you?', 'Как бы выглядела действительно здоровая рабочая культура для вас?', 'Сіз үшін шынымен пайдалы жұмыс мәдениеті қандай болар еді?'),
];

$NEW9[258] = [ // Rewilding and Ecological Restoration
    V('Have you ever seen the direct effects of habitat loss near where you live?', 'Вы когда-нибудь видели прямые последствия утраты среды обитания рядом с местом, где живёте?', 'Тұратын жеріңіздің жанында тіршілік ету ортасының жойылуының тікелей салдарын көрдіңіз бе?'),
    V('Do you think rewilding projects should prioritize native species only?', 'Как вы думаете, проекты по возвращению дикой природы должны отдавать приоритет только местным видам?', 'Сіздің ойыңызша, жабайы табиғатты қалпына келтіру жобалары тек жергілікті түрлерге басымдық беруі керек пе?'),
    V('Have you ever supported or donated to a conservation project?', 'Вы когда-нибудь поддерживали или жертвовали проекту по охране природы?', 'Табиғатты қорғау жобасын қолдадыңыз ба немесе оған қаражат бөлдіңіз бе?'),
    V('Do you think farmers and rewilding advocates can find common ground?', 'Как вы думаете, фермеры и сторонники возвращения дикой природы могут найти общий язык?', 'Сіздің ойыңызша, фермерлер мен жабайы табиғатты қалпына келтіру жақтастары ортақ тіл таба ала ма?'),
    V('Would you support reintroducing a large predator near your home region?', 'Вы бы поддержали повторное заселение крупного хищника рядом с вашим родным регионом?', 'Тұрғылықты аймағыңыздың жанына үлкен жыртқышты қайта қоныстандыруды қолдар ма едіңіз?'),
    V('Have you ever visited a place that had been successfully restored ecologically?', 'Вы когда-нибудь посещали место, которое было успешно восстановлено экологически?', 'Экологиялық тұрғыда сәтті қалпына келтірілген жерге бардыңыз ба?'),
    V('Do you think cities could be redesigned to support more wildlife?', 'Как вы думаете, города можно перепроектировать для поддержки большего количества дикой природы?', 'Сіздің ойыңызша, қалаларды көбірек жабайы табиғатты қолдайтындай етіп қайта жобалауға бола ма?'),
    V('Do you think rewilding is more about nostalgia or about the future?', 'Как вы думаете, возвращение дикой природы больше связано с ностальгией или с будущим?', 'Сіздің ойыңызша, жабайы табиғатты қалпына келтіру ностальгия туралы ма, әлде болашақ туралы ма?'),
    V('What single animal or plant would you love to see thriving again in your area?', 'Какое одно животное или растение вы бы хотели снова увидеть процветающим в вашем регионе?', 'Аймағыңызда қайта өркендегенін көргіңіз келетін бір жануар немесе өсімдік қандай?'),
];

$NEW9[259] = [ // The Ethics of Wealth Inheritance
    V('Have you ever benefited from financial help passed down in your family?', 'Вы когда-нибудь пользовались финансовой помощью, переданной в вашей семье?', 'Отбасыңызда берілген қаржылық көмектен пайда көрдіңіз бе?'),
    V('Do you think children of wealthy families face different pressures than others?', 'Как вы думаете, дети из богатых семей сталкиваются с иным давлением, чем другие?', 'Сіздің ойыңызша, бай отбасылардың балалары басқалардан өзгеше қысымға тап бола ма?'),
    V('Have you ever met someone who claimed to be "self-made" but had hidden advantages?', 'Вы когда-нибудь встречали человека, который утверждал, что «сделал себя сам», но имел скрытые преимущества?', '"Өзі жеткен" деп мәлімдеген, бірақ жасырын артықшылықтары бар адаммен кездестіңіз бе?'),
    V('Do you think inheritance taxes discourage people from building wealth?', 'Как вы думаете, налоги на наследство отбивают у людей желание накапливать богатство?', 'Сіздің ойыңызша, мұрагерлік салығы адамдарды байлық жинаудан бас тартқыза ма?'),
    V('Would you leave your own children an equal inheritance, or base it on need?', 'Вы бы оставили своим детям равное наследство, или основывали бы его на потребностях?', 'Балаларыңызға тең мұра қалдырар ма едіңіз, әлде қажеттілікке қарай ма?'),
    V('Have you ever felt resentment toward someone because of inherited wealth?', 'Вы когда-нибудь испытывали негодование к кому-то из-за унаследованного богатства?', 'Мұраға қалған байлыққа байланысты біреуге өкпе сезіндіңіз бе?'),
    V('Do you think inherited wealth should come with any social obligation?', 'Как вы думаете, унаследованное богатство должно нести какое-либо социальное обязательство?', 'Сіздің ойыңызша, мұраға қалған байлық қандай да бір әлеуметтік міндетпен келуі керек пе?'),
    V('Do you think society respects earned wealth more than inherited wealth?', 'Как вы думаете, общество уважает заработанное богатство больше, чем унаследованное?', 'Сіздің ойыңызша, қоғам мұраға қалған байлықтан гөрі тапқан байлықты көбірек құрметтей ме?'),
    V('What would a fairer system of passing on wealth look like to you?', 'Как бы выглядела более справедливая система передачи богатства для вас?', 'Сіз үшін байлықты мұраға қалдырудың әділірек жүйесі қандай болар еді?'),
];

$NEW9[260] = [ // Digital Nomadism and Global Inequality
    V('Have you ever met a digital nomad while traveling?', 'Вы когда-нибудь встречали цифрового кочевника во время путешествия?', 'Саяхаттап жүргенде цифрлық көшпендімен кездестіңіз бе?'),
    V('Do you think digital nomads have a responsibility to give back to local communities?', 'Как вы думаете, цифровые кочевники несут ответственность вносить вклад в местные сообщества?', 'Сіздің ойыңызша, цифрлық көшпенділердің жергілікті қауымдастыққа қайтару жауапкершілігі бар ма?'),
    V('Have you ever noticed rising prices in a place because of foreign remote workers?', 'Вы когда-нибудь замечали рост цен в каком-то месте из-за иностранных удалённых работников?', 'Шетелдік қашықтан жұмыс істейтіндерге байланысты бір жердегі бағаның өскенін байқадыңыз ба?'),
    V('Would you feel comfortable earning a foreign salary while living somewhere with a lower cost of living?', 'Вам было бы комфортно получать зарубежную зарплату, живя в месте с более низкой стоимостью жизни?', 'Өмір сүру құны төмен жерде тұрып, шетелдік жалақы табу сізге ыңғайлы бола ма?'),
    V('Do you think digital nomad visas help or hurt local economies overall?', 'Как вы думаете, визы для цифровых кочевников в целом помогают или вредят местной экономике?', 'Сіздің ойыңызша, цифрлық көшпенді визалары жалпы жергілікті экономикаға көмектесе ме, әлде зиян тигізе ме?'),
    V('Have you ever felt conflicted about the ethics of a travel choice you made?', 'Вы когда-нибудь испытывали внутренний конфликт по поводу этичности своего решения о путешествии?', 'Жасаған саяхат таңдауыңыздың этикасы туралы ішкі қайшылық сезіндіңіз бе?'),
    V('Do you think digital nomadism will become more common or fade as a trend?', 'Как вы думаете, цифровое кочевничество станет более распространённым или угаснет как тренд?', 'Сіздің ойыңызша, цифрлық көшпенділік кеңірек тарала ма, әлде трend ретінде сөнеді ме?'),
    V('Have you ever tried to learn the local language while living somewhere temporarily?', 'Вы когда-нибудь пытались выучить местный язык, живя где-то временно?', 'Уақытша бір жерде тұрғанда жергілікті тілді үйренуге тырыстыңыз ба?'),
    V('What would responsible digital nomadism look like to you?', 'Как бы выглядело ответственное цифровое кочевничество для вас?', 'Сіз үшін жауапты цифрлық көшпенділік қандай болар еді?'),
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
