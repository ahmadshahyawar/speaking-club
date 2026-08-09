<?php
declare(strict_types=1);
$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function V(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

$NEW9 = [];

$NEW9[194] = [ // Deepfakes and Digital Trust
    V('Have you ever doubted whether a video you saw online was real?', 'Вы когда-нибудь сомневались, было ли видео, которое вы видели онлайн, настоящим?', 'Желіде көрген видеоның нақты екеніне күмәндандыңыз ба?'),
    V('Do you think politicians are especially vulnerable to deepfake attacks?', 'Как вы думаете, политики особенно уязвимы для атак с помощью дипфейков?', 'Сіздің ойыңызша, саясаткерлер дипфейк шабуылдарына ерекше осал ма?'),
    V('Would you trust a "verified" label on a video more than your own judgment?', 'Вы бы доверяли метке «проверено» на видео больше, чем собственному суждению?', 'Видеодағы "тексерілген" белгісіне өз пікіріңізден гөрі сенер ме едіңіз?'),
    V('Have you ever shared a video without verifying its source first?', 'Вы когда-нибудь делились видео, не проверив сначала его источник?', 'Дереккөзін тексермей видео бөлістіңіз бе?'),
    V('Do you think deepfake technology could ever be used for good?', 'Как вы думаете, технология дипфейков когда-нибудь может использоваться во благо?', 'Сіздің ойыңызша, дипфейк технологиясы жақсылық үшін пайдаланыла ала ма?'),
    V('Would you support an app that automatically flags manipulated media?', 'Вы бы поддержали приложение, автоматически помечающее манипулированные медиа?', 'Манипуляцияланған медианы автоматты түрде белгілейтін қосымшаны қолдар ма едіңіз?'),
    V('Have you ever been fooled by an edited photo before deepfakes even existed?', 'Вас когда-нибудь обманывало отредактированное фото ещё до появления дипфейков?', 'Дипфейктер пайда болмай тұрып өңделген фотоға алданып қалдыңыз ба?'),
    V('Do you think platforms do enough to remove harmful deepfakes quickly?', 'Как вы думаете, платформы делают достаточно для быстрого удаления вредных дипфейков?', 'Сіздің ойыңызша, платформалар зиянды дипфейктерді тез алып тастау үшін жеткілікті іс істей ме?'),
    V('What would you do if someone created a fake video of you?', 'Что бы вы сделали, если бы кто-то создал поддельное видео с вами?', 'Біреу сіз туралы жалған видео жасаса, не істер едіңіз?'),
];

$NEW9[195] = [ // The Ethics of Self-Driving Cars
    V('Have you ever ridden in a car with advanced driver-assist features?', 'Вы когда-нибудь ездили в автомобиле с продвинутыми функциями помощи водителю?', 'Жетілдірілген жүргізушіге көмек функциялары бар көлікте жүрдіңіз бе?'),
    V('Do you think self-driving cars should be allowed to share roads with human drivers now?', 'Как вы думаете, автономным автомобилям следует уже сейчас разрешить делить дороги с водителями-людьми?', 'Сіздің ойыңызша, өзі жүретін көліктерге қазір адам жүргізушілермен жолды бөлісуге рұқсат берілуі керек пе?'),
    V('Would you feel comfortable letting a self-driving car drive your child to school?', 'Вам было бы комфортно позволить автономному автомобилю отвезти вашего ребёнка в школу?', 'Өзі жүретін көлікке балаңызды мектепке апаруға рұқсат беру сізге ыңғайлы бола ма?'),
    V('Do you think insurance companies are ready for a self-driving future?', 'Как вы думаете, страховые компании готовы к будущему с автономными автомобилями?', 'Сіздің ойыңызша, сақтандыру компаниялары өзі жүретін көліктер болашағына дайын ба?'),
    V('Have you ever felt nervous as a passenger with a human driver you didn\'t trust?', 'Вы когда-нибудь нервничали как пассажир с водителем, которому не доверяли?', 'Сенбейтін жүргізушімен жолаушы ретінде мазасызданғаныңыз болды ма?'),
    V('Do you think self-driving trucks will replace human truck drivers soon?', 'Как вы думаете, автономные грузовики скоро заменят водителей-людей?', 'Сіздің ойыңызша, өзі жүретін жүк көліктері жақында адам жүргізушілерін алмастыра ма?'),
    V('Would a self-driving car change how much you drink before going out?', 'Автономный автомобиль изменил бы то, сколько вы пьёте перед выходом из дома?', 'Өзі жүретін көлік сыртқа шыққанда қаншалықты ішетініңізді өзгертер ме еді?'),
    V('Do you think hacking is a serious risk for self-driving cars?', 'Как вы думаете, взлом представляет серьёзный риск для автономных автомобилей?', 'Сіздің ойыңызша, өзі жүретін көліктер үшін хакерлік елеулі қауіп пе?'),
    V('What would it take for you to fully trust a self-driving car?', 'Что потребовалось бы, чтобы вы полностью доверяли автономному автомобилю?', 'Өзі жүретін көлікке толық сену үшін не керек болар еді?'),
];

$NEW9[196] = [ // Cancel Culture
    V('Have you ever changed your opinion of a public figure after a controversy?', 'Вы когда-нибудь меняли своё мнение об общественном деятеле после скандала?', 'Дау-жанжалдан кейін қоғам қайраткері туралы пікіріңізді өзгерттіңіз бе?'),
    V('Do you think people online forgive too quickly or not quickly enough?', 'Как вы думаете, люди онлайн прощают слишком быстро или недостаточно быстро?', 'Сіздің ойыңызша, желідегі адамдар тым тез кешіре ме, әлде жеткілікті тез кешірмей ме?'),
    V('Have you ever hesitated to share an opinion out of fear of backlash?', 'Вы когда-нибудь колебались поделиться мнением из-за страха негативной реакции?', 'Теріс реакциядан қорқып пікіріңізді бөлісуге екіұдай болдыңыз ба?'),
    V('Do you think "cancelling" someone actually achieves justice?', 'Как вы думаете, «отмена» кого-то действительно достигает справедливости?', 'Сіздің ойыңызша, біреуді "болдырмау" шынымен әділдікке қол жеткізе ме?'),
    V('Have you ever taken part in criticizing someone online?', 'Вы когда-нибудь участвовали в критике кого-то онлайн?', 'Желіде біреуді сынауға қатыстыңыз ба?'),
    V('Do you think apologies after being "cancelled" are usually genuine?', 'Как вы думаете, извинения после «отмены» обычно искренние?', 'Сіздің ойыңызша, "болдырылмағаннан" кейінгі кешірім сұраулар әдетте шынайы ма?'),
    V('Should a person\'s entire career be affected by one mistake?', 'Должна ли вся карьера человека пострадать из-за одной ошибки?', 'Адамның бүкіл мансабы бір қателіктен зардап шегуі керек пе?'),
    V('Do you think cancel culture affects ordinary people differently than celebrities?', 'Как вы думаете, культура отмены влияет на обычных людей иначе, чем на знаменитостей?', 'Сіздің ойыңызша, "болдырмау мәдениеті" қарапайым адамдарға атақтылардан өзгеше әсер ете ме?'),
    V('What would make you personally decide to stop supporting a public figure?', 'Что заставило бы вас лично решить перестать поддерживать общественного деятеля?', 'Сізді жеке өзіңізді қоғам қайраткерін қолдаудан бас тартуға не итермелер еді?'),
];

$NEW9[197] = [ // The Psychology of Social Comparison
    V('Have you ever unfollowed someone because they made you feel worse about yourself?', 'Вы когда-нибудь отписывались от кого-то, потому что они заставляли вас чувствовать себя хуже?', 'Өзіңіз туралы жаман сезінткендіктен біреуден жазылымды алып тастадыңыз ба?'),
    V('Do you compare yourself more to strangers online or to people you know?', 'Вы сравниваете себя больше с незнакомцами онлайн или с людьми, которых знаете?', 'Өзіңізді желідегі бейтаныс адамдармен көбірек салыстырасыз ба, әлде танысыңызбен ба?'),
    V('Have you ever felt genuine joy for someone else\'s success?', 'Вы когда-нибудь испытывали искреннюю радость за чужой успех?', 'Біреудің табысына шынайы қуандыңыз ба?'),
    V('Do you think curated social media posts make comparison worse?', 'Как вы думаете, тщательно отобранные посты в соцсетях усугубляют сравнение?', 'Сіздің ойыңызша, мұқият таңдалған әлеуметтік желі жазбалары салыстыруды нашарлата ма?'),
    V('Have you ever hidden something positive in your life to avoid seeming boastful?', 'Вы когда-нибудь скрывали что-то позитивное в своей жизни, чтобы не казаться хвастливым?', 'Мақтаншақ көрінбеу үшін өміріңіздегі жақсы бір нәрсені жасырдыңыз ба?'),
    V('Do you think comparing yourself to your past self is healthier than comparing to others?', 'Как вы думаете, сравнивать себя с собой в прошлом полезнее, чем сравнивать с другими?', 'Сіздің ойыңызша, өзіңізді өткендегі өзіңізбен салыстыру басқалармен салыстырудан пайдалырақ па?'),
    V('Have you ever taken a break from social media because of how it made you feel?', 'Вы когда-нибудь брали перерыв от соцсетей из-за того, как они заставляли вас чувствовать?', 'Сезіміңізге әсер еткендіктен әлеуметтік желіден демалыс алдыңыз ба?'),
    V('Do you think some people are naturally more prone to comparison than others?', 'Как вы думаете, некоторые люди по природе более склонны к сравнению, чем другие?', 'Сіздің ойыңызша, кейбір адамдар табиғи түрде салыстыруға бейімірек пе?'),
    V('What helps you remember that social media isn\'t the full picture of someone\'s life?', 'Что помогает вам помнить, что соцсети не показывают полную картину чьей-то жизни?', 'Әлеуметтік желінің біреудің өмірінің толық суреті емес екенін еске түсіруге не көмектеседі?'),
];

$NEW9[198] = [ // Renewable Energy Transition
    V('Have you ever considered installing solar panels at home?', 'Вы когда-нибудь рассматривали установку солнечных панелей дома?', 'Үйге күн панельдерін орнатуды қарастырдыңыз ба?'),
    V('Do you think nuclear energy should be part of the renewable conversation?', 'Как вы думаете, ядерная энергия должна быть частью разговора о возобновляемых источниках?', 'Сіздің ойыңызша, ядролық энергия жаңартылатын энергия туралы әңгіменің бөлігі болуы керек пе?'),
    V('Have you ever chosen a product because it was marketed as green energy?', 'Вы когда-нибудь выбирали продукт, потому что он рекламировался как зелёная энергия?', '"Жасыл энергия" ретінде жарнамаланғандықтан өнімді таңдадыңыз ба?'),
    V('Do you think renewable energy jobs will replace fossil fuel jobs fairly?', 'Как вы думаете, рабочие места в возобновляемой энергетике справедливо заменят места в ископаемом топливе?', 'Сіздің ойыңызша, жаңартылатын энергия жұмыс орындары отынды пайдалану жұмыс орындарын әділ алмастыра ма?'),
    V('Would you support building a wind farm near where you live?', 'Вы бы поддержали строительство ветряной электростанции рядом с местом, где вы живёте?', 'Тұратын жеріңіздің жанында жел электр стансасын салуды қолдар ма едіңіз?'),
    V('Do you think individual choices matter as much as government policy here?', 'Как вы думаете, индивидуальный выбор важен здесь так же, как государственная политика?', 'Сіздің ойыңызша, мұнда жеке таңдау мемлекеттік саясат сияқты маңызды ма?'),
    V('Have you ever experienced a power outage caused by extreme weather?', 'Вы когда-нибудь испытывали отключение электричества, вызванное экстремальной погодой?', 'Экстремалды ауа-райынан туындаған электр қуатының өшуін бастан кештіңіз бе?'),
    V('Do you think developing countries should be held to the same energy standards as wealthy ones?', 'Как вы думаете, развивающиеся страны должны придерживаться тех же энергетических стандартов, что и богатые?', 'Сіздің ойыңызша, дамушы елдер бай елдермен бірдей энергетикалық стандарттарды ұстануы керек пе?'),
    V('What would convince you that your country is serious about the energy transition?', 'Что убедило бы вас, что ваша страна серьёзно относится к энергетическому переходу?', 'Еліңіздің энергетикалық ауысуға байыппен қарайтынына не сендіре алар еді?'),
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
