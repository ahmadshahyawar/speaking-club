<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[74] = [ // The Gig Economy
    V('Have you ever used a gig app like Uber or a delivery service as a customer?', 'Вы когда-нибудь пользовались приложением для подработок, вроде Uber или доставки, как клиент?', 'Клиент ретінде Uber немесе жеткізу қызметі сияқты гиг қосымшасын пайдаландыңыз ба?'),
    V('Do you think gig work is more common now because of necessity or choice?', 'Как вы думаете, подработки сейчас более распространены из-за необходимости или выбора?', 'Сіздің ойыңызша, гиг жұмысы қазір қажеттіліктен көп пе, әлде таңдаудан ба?'),
    V('Would you trust a gig worker\'s five-star rating over a traditional resume?', 'Вы бы доверяли пятизвёздочному рейтингу подрабатывающего работника больше, чем традиционному резюме?', 'Гиг жұмысшысының бес жұлдызды рейтингіне дәстүрлі түйіндемеден гөрі сенер ме едіңіз?'),
    V('Have you ever felt exploited by a company you did gig work for?', 'Вы когда-нибудь чувствовали, что компания, на которую вы подрабатывали, вас эксплуатирует?', 'Гиг жұмысын істеген компанияның сізді пайдаланып жатқанын сезіндіңіз бе?'),
    V('Do you think gig platforms should guarantee a minimum wage?', 'Как вы думаете, гиг-платформы должны гарантировать минимальную зарплату?', 'Сіздің ойыңызша, гиг платформалары ең төменгі жалақыны кепілдендіруі керек пе?'),
    V('What skill would you need to succeed as a full-time freelancer?', 'Какой навык вам понадобился бы, чтобы преуспеть как фрилансер на полную ставку?', 'Толық ставкалы фрилансер ретінде табысты болу үшін қандай дағды керек болар еді?'),
    V('Do you think the gig economy will keep growing or eventually shrink?', 'Как вы думаете, гиг-экономика продолжит расти или в конце концов сократится?', 'Сіздің ойыңызша, гиг экономикасы өсе береді ме, әлде ақыр соңында қысқара ма?'),
    V('Have you ever recommended gig work to a friend or family member?', 'Вы когда-нибудь рекомендовали подработку другу или члену семьи?', 'Досыңызға немесе отбасы мүшесіне гиг жұмысын ұсындыңыз ба?'),
    V('What would make you choose a traditional job over gig work?', 'Что заставило бы вас выбрать традиционную работу вместо подработки?', 'Гиг жұмысының орнына дәстүрлі жұмысты таңдауыңызға не себеп болар еді?'),
];

$NEW9[75] = [ // Consumer Culture and Materialism
    V('Have you ever returned something because you regretted buying it?', 'Вы когда-нибудь возвращали что-то, потому что жалели о покупке?', 'Сатып алғаныңызға өкінгендіктен бір затты қайтарып бердіңіз бе?'),
    V('Do you think advertising makes people feel like they need more than they do?', 'Как вы думаете, реклама заставляет людей чувствовать, что им нужно больше, чем на самом деле?', 'Сіздің ойыңызша, жарнама адамдарға шындығынан да көп нәрсе керек сияқты сезім тудыра ма?'),
    V('Have you ever decluttered your home and felt relieved afterward?', 'Вы когда-нибудь избавлялись от лишних вещей дома и чувствовали облегчение после этого?', 'Үйіңізді артық заттардан тазартып, содан кейін жеңілдік сезіндіңіз бе?'),
    V('Do you think secondhand shopping challenges consumer culture?', 'Как вы думаете, покупки вещей с рук бросают вызов потребительской культуре?', 'Сіздің ойыңызша, қолданылған заттарды сатып алу тұтыну мәдениетіне қарсы тұра ма?'),
    V('What is the last unnecessary thing you bought?', 'Какая последняя ненужная вещь, которую вы купили?', 'Сатып алған соңғы қажетсіз заттыңыз қандай болды?'),
    V('Do you think social media has made materialism worse?', 'Как вы думаете, социальные сети усилили материализм?', 'Сіздің ойыңызша, әлеуметтік желілер материализмді күшейтті ме?'),
    V('Would you feel comfortable admitting you can\'t afford something?', 'Вам было бы комфортно признать, что вы не можете себе что-то позволить?', 'Бір затты сатып алуға қаржыңыз жетпейтінін мойындау сізге ыңғайлы бола ма?'),
    V('Do you think owning less makes people happier?', 'Как вы думаете, обладание меньшим делает людей счастливее?', 'Сіздің ойыңызша, аз затқа ие болу адамдарды бақыттырақ ете ме?'),
    V('What would you tell your younger self about spending money?', 'Что бы вы сказали своему более молодому «я» о трате денег?', 'Ақша жұмсау туралы жас кезіңізге не айтар едіңіз?'),
];

$NEW9[76] = [ // Genetic Engineering and Bioethics
    V('Have you ever taken a genetic test to learn about your ancestry or health?', 'Вы когда-нибудь проходили генетический тест, чтобы узнать о своих предках или здоровье?', 'Тегіңіз немесе денсаулығыңыз туралы білу үшін генетикалық тест тапсырдыңыз ба?'),
    V('Do you think athletes should be allowed to use genetic enhancements?', 'Как вы думаете, спортсменам следует разрешить использовать генетические улучшения?', 'Сіздің ойыңызша, спортшыларға генетикалық жақсартуларды пайдалануға рұқсат берілуі керек пе?'),
    V('Would you edit a future child\'s genes to prevent a serious disease?', 'Вы бы редактировали гены будущего ребёнка, чтобы предотвратить серьёзную болезнь?', 'Ауыр аурудың алдын алу үшін болашақ баланың гендерін өзгертер ме едіңіз?'),
    V('Do you think genetic engineering could increase inequality between rich and poor?', 'Как вы думаете, генная инженерия может увеличить неравенство между богатыми и бедными?', 'Сіздің ойыңызша, генетикалық инженерия бай мен кедей арасындағы теңсіздікті арттыра ма?'),
    V('Have you ever discussed hereditary illness with your family?', 'Вы когда-нибудь обсуждали наследственную болезнь со своей семьёй?', 'Тұқым қуалайтын ауру туралы отбасыңызбен талқыладыңыз ба?'),
    V('Do you think there should be a global ban on human cloning?', 'Как вы думаете, должен быть глобальный запрет на клонирование человека?', 'Сіздің ойыңызша, адамды клондауға жаһандық тыйым салынуы керек пе?'),
    V('What genetic trait, if any, would you want to change in yourself?', 'Какую генетическую черту, если бы могли, вы хотели бы изменить в себе?', 'Мүмкіндік болса, өзіңіздегі қандай генетикалық қасиетті өзгертер едіңіз?'),
    V('Do you trust scientists to regulate themselves on this issue?', 'Вы доверяете учёным в саморегулировании этого вопроса?', 'Бұл мәселеде ғалымдардың өздерін-өздері реттеуіне сенесіз бе?'),
    V('Do you think future generations will see today\'s gene-editing debates as outdated?', 'Как вы думаете, будущие поколения будут считать сегодняшние споры о генном редактировании устаревшими?', 'Сіздің ойыңызша, болашақ ұрпақ бүгінгі ген өзгерту пікірталастарын ескірген деп санай ма?'),
];

$NEW9[77] = [ // The Justice System
    V('Have you ever served on a jury or been called for jury duty?', 'Вы когда-нибудь были присяжным заседателем или вас вызывали для этого?', 'Алқабилер алқасында болдыңыз ба немесе оған шақырылдыңыз ба?'),
    V('Do you think wealthy people receive lighter punishments than poor people?', 'Как вы думаете, богатые люди получают более мягкие наказания, чем бедные?', 'Сіздің ойыңызша, бай адамдар кедейлерге қарағанда жеңілірек жаза ала ма?'),
    V('Have you ever witnessed something unfair happen in a legal or school context?', 'Вы когда-нибудь были свидетелем несправедливости в юридическом или школьном контексте?', 'Заңды немесе мектеп контекстінде әділетсіз бір нәрсенің болғанын көрдіңіз бе?'),
    V('Do you think the death penalty should exist in any country?', 'Как вы думаете, смертная казнь должна существовать в какой-либо стране?', 'Сіздің ойыңызша, өлім жазасы қандай да бір елде болуы керек пе?'),
    V('What would you change about how trials are reported in the media?', 'Что бы вы изменили в том, как суды освещаются в СМИ?', 'Сот процестерінің БАҚ-та жазылу тәсілінде нені өзгертер едіңіз?'),
    V('Do you trust the police in your country to act fairly?', 'Вы доверяете полиции своей страны в справедливости действий?', 'Еліңіздегі полицияның әділ әрекет ететініне сенесіз бе?'),
    V('Have you ever changed your opinion about someone\'s guilt after learning more facts?', 'Вы когда-нибудь меняли своё мнение о чьей-то вине, узнав больше фактов?', 'Көбірек факт білгеннен кейін біреудің кінәлілігі туралы пікіріңізді өзгерттіңіз бе?'),
    V('Do you think former prisoners are given a fair chance to rebuild their lives?', 'Как вы думаете, бывшим заключённым дают справедливый шанс восстановить свою жизнь?', 'Сіздің ойыңызша, бұрынғы тұтқындарға өмірін қайта құруға әділ мүмкіндік беріле ме?'),
    V('What is the biggest flaw in your country\'s justice system?', 'Какой самый большой недостаток в судебной системе вашей страны?', 'Еліңіздің сот жүйесіндегі ең үлкен кемшілік қандай?'),
];

$NEW9[78] = [ // Immigration and National Identity
    V('Have you ever lived as an immigrant or foreigner in another country?', 'Вы когда-нибудь жили как иммигрант или иностранец в другой стране?', 'Басқа елде иммигрант немесе шетелдік ретінде тұрып көрдіңіз бе?'),
    V('Do you think it\'s harder to integrate now than it was a generation ago?', 'Как вы думаете, сейчас интегрироваться труднее, чем поколение назад?', 'Сіздің ойыңызша, қазір бейімделу бір ұрпақ бұрынғыдан қиынырақ па?'),
    V('Have you ever helped an immigrant adjust to life in your country?', 'Вы когда-нибудь помогали иммигранту адаптироваться к жизни в вашей стране?', 'Иммигрантқа еліңіздегі өмірге бейімделуге көмектестіңіз бе?'),
    V('Do you think a country should require immigrants to learn the local language?', 'Как вы думаете, страна должна требовать от иммигрантов изучения местного языка?', 'Сіздің ойыңызша, ел иммигранттардан жергілікті тілді үйренуді талап етуі керек пе?'),
    V('What do you think your country gains from immigration?', 'Что, по-вашему, ваша страна получает от иммиграции?', 'Сіздің ойыңызша, еліңіз иммиграциядан не ұтады?'),
    V('Have you ever felt like an outsider, even in your own country?', 'Вы когда-нибудь чувствовали себя чужим, даже в своей собственной стране?', 'Өз еліңізде де бөтен сияқты сезіндіңіз бе?'),
    V('Do you think dual citizenship weakens or strengthens national identity?', 'Как вы думаете, двойное гражданство ослабляет или укрепляет национальную идентичность?', 'Сіздің ойыңызша, қос азаматтық ұлттық бірегейлікті әлсірете ме, әлде күшейте ме?'),
    V('What is the biggest misconception people have about immigrants?', 'Какое самое большое заблуждение у людей об иммигрантах?', 'Адамдардың иммигранттар туралы ең үлкен қате түсінігі қандай?'),
    V('Would you ever emigrate permanently to another country?', 'Вы бы когда-нибудь эмигрировали навсегда в другую страну?', 'Басқа елге мәңгілікке көшіп кетер ме едіңіз?'),
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
