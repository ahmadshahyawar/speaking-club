<?php
declare(strict_types=1);
// Included from seed_lessons_batch10.php — shares its scope ($lessons, function V()).

// ========================= ELEMENTARY (batch 10) — 15 questions per topic =========================

$lessons[] = ['level' => 'elementary', 'topic' => 'Choosing an Online Course', 'background_key' => 'professional',
    'warmup' => V("Let's talk about online courses. Have you ever taken an online course to learn a new skill?", 'Давайте поговорим об онлайн-курсах. Вы когда-нибудь проходили онлайн-курс, чтобы освоить новый навык?', 'Онлайн курстар туралы сөйлесейік. Жаңа дағды үйрену үшін онлайн курстан өттіңіз бе?'),
    'vocab' => [V('online course', 'онлайн-курс', 'онлайн курс'), V('certificate', 'сертификат', 'сертификат'), V('instructor', 'преподаватель', 'оқытушы'), V('self-paced', 'в своём темпе', 'өз қарқынымен'), V('deadline', 'дедлайн', 'мерзім'), V('platform', 'платформа', 'платформа'), V('skill', 'навык', 'дағды'), V('review', 'отзыв', 'пікір'), V('enroll', 'записаться', 'жазылу'), V('complete', 'завершить', 'аяқтау')],
    'questions' => [
        V('Have you ever taken an online course?', 'Вы когда-нибудь проходили онлайн-курс?', 'Онлайн курстан өттіңіз бе?'),
        V('What skill would you like to learn through an online course?', 'Какой навык вы хотели бы освоить через онлайн-курс?', 'Онлайн курс арқылы қандай дағды үйренгіңіз келеді?'),
        V('Do you read reviews before enrolling in a course?', 'Вы читаете отзывы перед записью на курс?', 'Курсқа жазылмас бұрын пікірлерді оқисыз ба?'),
        V('Do you prefer self-paced courses or ones with strict deadlines?', 'Вы предпочитаете курсы в своём темпе или со строгими сроками?', 'Өз қарқынымен курстарды ұнатасыз ба, әлде қатаң мерзімі барларды ма?'),
        V('Have you ever finished an online course completely?', 'Вы когда-нибудь полностью заканчивали онлайн-курс?', 'Онлайн курсты толығымен аяқтадыңыз ба?'),
        V('Do certificates from online courses matter to employers, in your opinion?', 'Сертификаты онлайн-курсов важны для работодателей, по-вашему?', 'Сіздің ойыңызша, онлайн курс сертификаттары жұмыс берушілер үшін маңызды ма?'),
        V('Do you learn better from video lectures or written material?', 'Вы лучше учитесь по видеолекциям или письменным материалам?', 'Бейнедәрістерден жақсырақ үйренесіз бе, әлде жазбаша материалдан ба?'),
        V('Have you ever started a course and not finished it?', 'Вы когда-нибудь начинали курс и не заканчивали его?', 'Курсты бастап, аяқтамай қалдыңыз ба?'),
        V('Do you prefer free courses or paid ones with more structure?', 'Вы предпочитаете бесплатные курсы или платные с более чёткой структурой?', 'Тегін курстарды ұнатасыз ба, әлде құрылымы жақсы ақылыларды ма?'),
        V('Do you set a deadline for yourself in self-paced courses?', 'Вы устанавливаете себе срок в курсах со свободным темпом?', 'Өз қарқынымен курстарда өзіңізге мерзім белгілейсіз бе?'),
        V('Have you ever taken a course with an instructor you really liked?', 'Вы когда-нибудь проходили курс с преподавателем, который вам очень понравился?', 'Өте ұнаған оқытушымен курстан өттіңіз бе?'),
        V('Do you think online learning is as effective as classroom learning?', 'Как вы думаете, онлайн-обучение так же эффективно, как обучение в классе?', 'Онлайн оқыту сыныптағы оқытудай тиімді деп ойлайсыз ба?'),
        V('What platform do you use most for online learning?', 'Какую платформу вы чаще всего используете для онлайн-обучения?', 'Онлайн оқу үшін ең жиі қандай платформаны пайдаланасыз?'),
        V('Do you take notes while doing an online course?', 'Вы делаете заметки во время прохождения онлайн-курса?', 'Онлайн курс өткенде жазбалар жасайсыз ба?'),
        V('What online course would you recommend to a friend?', 'Какой онлайн-курс вы бы порекомендовали другу?', 'Досыңызға қандай онлайн курсты ұсынар едіңіз?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Handling a Difficult Customer', 'background_key' => 'professional',
    'warmup' => V("Let's talk about difficult customers. Have you ever had to deal with an upset customer at work?", 'Давайте поговорим о трудных клиентах. Вам приходилось иметь дело с расстроенным клиентом на работе?', 'Қиын клиенттер туралы сөйлесейік. Жұмыста ренжіген клиентпен айналысуға тура келді ме?'),
    'vocab' => [V('difficult customer', 'трудный клиент', 'қиын клиент'), V('complaint', 'жалоба', 'шағым'), V('calm down', 'успокоить', 'сабырға түсіру'), V('apologize', 'извиняться', 'кешірім сұрау'), V('refund', 'возврат денег', 'ақшаны қайтару'), V('patience', 'терпение', 'шыдамдылық'), V('resolve', 'решить', 'шешу'), V('escalate', 'обострить', 'күшейту'), V('customer service', 'обслуживание клиентов', 'клиенттерге қызмет көрсету'), V('professional', 'профессиональный', 'кәсіби')],
    'questions' => [
        V('Have you ever had to deal with an upset customer?', 'Вам приходилось иметь дело с расстроенным клиентом?', 'Ренжіген клиентпен айналысуға тура келді ме?'),
        V('How do you stay calm when someone is angry with you?', 'Как вы сохраняете спокойствие, когда кто-то злится на вас?', 'Біреу сізге ашуланғанда қалай сабырлы боласыз?'),
        V('Do you apologize even if the mistake wasn\'t yours?', 'Вы извиняетесь, даже если ошибка была не ваша?', 'Қате өзіңіздікі болмаса да кешірім сұрайсыз ба?'),
        V('Have you ever had to give a refund to an unhappy customer?', 'Вам приходилось возвращать деньги недовольному клиенту?', 'Ренжіген клиентке ақша қайтаруға тура келді ме?'),
        V('Do you think patience is the most important skill in customer service?', 'Как вы думаете, терпение — самый важный навык в обслуживании клиентов?', 'Клиенттерге қызмет көрсетуде шыдамдылық ең маңызды дағды деп ойлайсыз ба?'),
        V('Have you ever escalated a complaint to a manager?', 'Вы когда-нибудь передавали жалобу менеджеру?', 'Шағымды менеджерге жеткіздіңіз бе?'),
        V('Do you think staying professional is hard when someone is rude to you?', 'Как вы думаете, трудно оставаться профессионалом, когда кто-то грубит вам?', 'Біреу сізге дөрекілік жасағанда кәсіби болу қиын ба деп ойлайсыз ба?'),
        V('Have you ever resolved a conflict successfully with a difficult customer?', 'Вы когда-нибудь успешно разрешали конфликт с трудным клиентом?', 'Қиын клиентпен қақтығысты сәтті шештіңіз бе?'),
        V('Do you think customers are always right?', 'Как вы думаете, клиент всегда прав?', 'Клиент әрдайым дұрыс па деп ойлайсыз ба?'),
        V('Have you ever been a difficult customer yourself?', 'Вы сами когда-нибудь были трудным клиентом?', 'Сіз өзіңіз қиын клиент болдыңыз ба?'),
        V('Do you think listening carefully helps calm an upset customer?', 'Как вы думаете, внимательное слушание помогает успокоить расстроенного клиента?', 'Мұқият тыңдау ренжіген клиентті сабырға түсіруге көмектеседі деп ойлайсыз ба?'),
        V('Would you rather work in customer service or avoid it completely?', 'Вы бы предпочли работать в обслуживании клиентов или полностью избегать этого?', 'Клиенттерге қызмет көрсетуде жұмыс істегенді қалайсыз ба, әлде одан толығымен аулақ болғанды ма?'),
        V('Do you think complaints usually help businesses improve?', 'Как вы думаете, жалобы обычно помогают бизнесу улучшаться?', 'Шағымдар әдетте бизнеске жақсаруға көмектеседі деп ойлайсыз ба?'),
        V('What is the hardest part of handling a difficult customer?', 'Какая самая трудная часть общения с трудным клиентом?', 'Қиын клиентпен айналысудың ең қиын бөлігі не?'),
        V('What advice would you give someone starting a customer service job?', 'Какой совет вы бы дали тому, кто начинает работу в сфере обслуживания клиентов?', 'Клиенттерге қызмет көрсету жұмысын бастайтын адамға қандай кеңес берер едіңіз?'),
    ],
];

// ========================= PRE-INTERMEDIATE (batch 10) — 15 questions per topic =========================

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'The Rise of Silent Walking and Slow Living', 'background_key' => 'nature',
    'warmup' => V("Let's talk about slow living. Why do you think trends like silent walks and doing nothing have become popular?", 'Давайте поговорим о медленной жизни. Как вы думаете, почему такие тренды, как тихие прогулки и безделье, стали популярными?', 'Баяу өмір туралы сөйлесейік. Сіздің ойыңызша, неге тыныш серуендер мен ештеңе істемеу сияқты трендтер танымал болды?'),
    'vocab' => [V('slow living', 'медленная жизнь', 'баяу өмір'), V('mindfulness', 'осознанность', 'зейін сақтау'), V('burnout culture', 'культура выгорания', 'күйреу мәдениеті'), V('silent walk', 'тихая прогулка', 'тыныш серуен'), V('rest', 'отдых', 'демалу'), V('hustle', 'суета (усердная работа)', 'жанталасу'), V('presence', 'присутствие (в моменте)', 'осы сәтте болу'), V('intentional', 'осознанный', 'саналы'), V('overstimulation', 'перевозбуждение', 'шамадан тыс қозу'), V('simplicity', 'простота', 'қарапайымдылық')],
    'questions' => [
        V('Why do you think trends like silent walking have become popular?', 'Как вы думаете, почему такие тренды, как тихие прогулки, стали популярными?', 'Сіздің ойыңызша, тыныш серуен сияқты трендтер неге танымал болды?'),
        V('Do you think people are reacting against hustle culture?', 'Как вы думаете, люди реагируют против культуры суеты?', 'Адамдар жанталасу мәдениетіне қарсы реакция білдіреді деп ойлайсыз ба?'),
        V('Have you ever taken a walk without your phone or music?', 'Вы когда-нибудь гуляли без телефона или музыки?', 'Телефонсыз немесе музыкасыз серуендедіңіз бе?'),
        V('Do you think slow living is realistic for most working people?', 'Как вы думаете, медленная жизнь реальна для большинства работающих людей?', 'Баяу өмір көпшілік жұмыс істейтін адам үшін шынайы ма деп ойлайсыз ба?'),
        V('Do you feel overstimulated by constant notifications and content?', 'Вы чувствуете перевозбуждение от постоянных уведомлений и контента?', 'Үнемі хабарландырулар мен контенттен шамадан тыс қозу сезінесіз бе?'),
        V('Would you enjoy a day with absolutely nothing planned?', 'Вам бы понравился день, в котором совсем ничего не запланировано?', 'Мүлдем ештеңе жоспарланбаған күн сізге ұнар ма еді?'),
        V('Do you think rest should be something you earn, or a basic need?', 'Как вы думаете, отдых — это то, что нужно заслужить, или базовая потребность?', 'Демалу тапталуы керек нәрсе ме, әлде негізгі қажеттілік пе деп ойлайсыз ба?'),
        V('Do you think mindfulness trends are genuine, or just marketing?', 'Как вы думаете, тренды осознанности искренние, или просто маркетинг?', 'Зейін сақтау трендтері шынайы ма, әлде тек маркетинг пе деп ойлайсыз ба?'),
        V('Have you ever felt guilty for doing nothing?', 'Вы когда-нибудь чувствовали вину за то, что ничего не делаете?', 'Ештеңе істемегеніңіз үшін кінәлі сезіндіңіз бе?'),
        V('Do you think simplicity in daily life could reduce stress?', 'Как вы думаете, простота в повседневной жизни могла бы снизить стресс?', 'Күнделікті өмірдегі қарапайымдылық күйзелісті азайта алады деп ойлайсыз ба?'),
        V('Would you try a full day of silence?', 'Вы бы попробовали провести целый день в тишине?', 'Бүкіл күнді тыныштықта өткізіп көрер ме едіңіз?'),
        V('Do you think younger generations value slowness more than older ones?', 'Как вы думаете, молодые поколения ценят медленность больше, чем старшие?', 'Жас ұрпақ баяулықты ересек ұрпаққа қарағанда көбірек бағалайды деп ойлайсыз ба?'),
        V('Do you make intentional time for rest each week?', 'Вы намеренно выделяете время для отдыха каждую неделю?', 'Апта сайын демалу үшін саналы уақыт бөлесіз бе?'),
        V('Do you think being constantly busy is seen as a status symbol?', 'Как вы думаете, постоянная занятость воспринимается как символ статуса?', 'Үнемі бос емес болу мәртебе белгісі ретінде қабылданады деп ойлайсыз ба?'),
        V('What would a slower, more intentional life look like for you?', 'Как бы выглядела для вас более медленная, осознанная жизнь?', 'Сіз үшін баяуырақ, саналырақ өмір қандай болар еді?'),
    ],
];

// ========================= INTERMEDIATE (batch 10) — 15 questions per topic =========================

$lessons[] = ['level' => 'intermediate', 'topic' => 'The Economics of Streaming Wars', 'background_key' => 'night-city',
    'warmup' => V("Let's talk about the streaming industry. Is the current model of many competing subscription services sustainable?", 'Давайте поговорим об индустрии стриминга. Устойчива ли текущая модель множества конкурирующих подписных сервисов?', 'Стриминг индустриясы туралы сөйлесейік. Көптеген бәсекелес жазылым қызметтерінің қазіргі моделі тұрақты ма?'),
    'vocab' => [V('streaming wars', 'войны стриминга', 'стриминг соғысы'), V('subscription fatigue', 'усталость от подписок', 'жазылымнан шаршау'), V('content licensing', 'лицензирование контента', 'контентті лицензиялау'), V('original programming', 'оригинальные программы', 'түпнұсқалық бағдарлама'), V('market saturation', 'насыщение рынка', 'нарық қанықтылығы'), V('churn rate', 'уровень оттока', 'кету деңгейі'), V('ad-supported tier', 'уровень с рекламой', 'жарнамалы деңгей'), V('bundling', 'объединение услуг', 'қызметтерді біріктіру'), V('production cost', 'себестоимость производства', 'өндіріс құны'), V('consolidation', 'консолидация', 'консолидация')],
    'questions' => [
        V('Is the current model of many competing streaming services sustainable?', 'Устойчива ли текущая модель множества конкурирующих стриминговых сервисов?', 'Көптеген бәсекелес стриминг қызметтерінің қазіргі моделі тұрақты ма?'),
        V('Do you experience subscription fatigue from too many services?', 'Вы испытываете усталость от подписок из-за слишком большого количества сервисов?', 'Тым көп қызметтен жазылымнан шаршау сезінесіз бе?'),
        V('Do you think ad-supported tiers are a good compromise for consumers?', 'Как вы думаете, уровни с рекламой — хороший компромисс для потребителей?', 'Жарнамалы деңгейлер тұтынушылар үшін жақсы ымыра ма деп ойлайсыз ба?'),
        V('Do you think the streaming market will consolidate into fewer big players?', 'Как вы думаете, рынок стриминга объединится в меньшее число крупных игроков?', 'Стриминг нарығы азырақ ірі ойыншыға консолидацияланады деп ойлайсыз ба?'),
        V('Do you think original content spending is sustainable for these companies?', 'Как вы думаете, расходы на оригинальный контент устойчивы для этих компаний?', 'Осы компаниялар үшін түпнұсқалық контентке жұмсалатын шығын тұрақты ма деп ойлайсыз ба?'),
        V('Would you cancel a subscription if prices kept increasing?', 'Вы бы отменили подписку, если бы цены продолжали расти?', 'Бағалар өсе берсе, жазылымды бас тартар ма едіңіз?'),
        V('Do you think bundling services together would help reduce costs for consumers?', 'Как вы думаете, объединение сервисов помогло бы снизить затраты для потребителей?', 'Қызметтерді біріктіру тұтынушылар үшін шығынды азайтуға көмектеседі деп ойлайсыз ба?'),
        V('Do you think exclusive content licensing hurts consumers overall?', 'Как вы думаете, эксклюзивное лицензирование контента вредит потребителям в целом?', 'Эксклюзивті контент лицензиялау жалпы алғанда тұтынушыларға зиян тигізеді деп ойлайсыз ба?'),
        V('Do you think streaming has become as expensive as traditional cable?', 'Как вы думаете, стриминг стал таким же дорогим, как традиционное кабельное телевидение?', 'Стриминг дәстүрлі кабельдік теледидардай қымбат болды деп ойлайсыз ба?'),
        V('Would you switch between services monthly to save money?', 'Вы бы переключались между сервисами ежемесячно, чтобы сэкономить деньги?', 'Ақша үнемдеу үшін қызметтер арасында ай сайын ауысар ма едіңіз?'),
        V('Do you think churn rate pressure leads to worse content decisions?', 'Как вы думаете, давление уровня оттока приводит к худшим решениям о контенте?', 'Кету деңгейінің қысымы контент бойынша нашар шешімдерге әкеледі деп ойлайсыз ба?'),
        V('Do you think smaller streaming services can survive against giants?', 'Как вы думаете, небольшие стриминговые сервисы могут выжить против гигантов?', 'Кішірек стриминг қызметтері алыптарға қарсы аман қала алады деп ойлайсыз ба?'),
        V('Would password-sharing crackdowns push you to cancel a service?', 'Ужесточение мер против совместного использования пароля подтолкнуло бы вас отменить сервис?', 'Құпия сөзді бөлісуге қарсы қатаң шаралар сізді қызметтен бас тартуға итермелер ме еді?'),
        V('Do you think the streaming industry will return to fewer, bigger platforms like cable did?', 'Как вы думаете, индустрия стриминга вернётся к меньшему числу более крупных платформ, как это было с кабельным ТВ?', 'Стриминг индустриясы кабельдік теледидардағыдай азырақ, ірірек платформаларға оралады деп ойлайсыз ба?'),
        V('What do you think the future of streaming will look like in five years?', 'Как вы думаете, как будет выглядеть будущее стриминга через пять лет?', 'Сіздің ойыңызша, бес жылдан кейін стримингтің болашағы қандай болады?'),
    ],
];

$insert = $pdo->prepare('INSERT INTO lessons (teacher_id, level, topic, vocab, warmup, questions, background_key) VALUES (:teacher_id, :level, :topic, :vocab, :warmup, :questions, :background_key)');
$count = 0;
foreach ($lessons as $lesson) {
    $insert->execute([
        ':teacher_id' => $teacherId, ':level' => $lesson['level'], ':topic' => $lesson['topic'],
        ':vocab' => json_encode($lesson['vocab'], JSON_UNESCAPED_UNICODE),
        ':warmup' => json_encode($lesson['warmup'], JSON_UNESCAPED_UNICODE),
        ':questions' => json_encode($lesson['questions'], JSON_UNESCAPED_UNICODE),
        ':background_key' => $lesson['background_key'],
    ]);
    $count++;
}
echo "Inserted $count lessons for teacher '$username' (id $teacherId).\n";
