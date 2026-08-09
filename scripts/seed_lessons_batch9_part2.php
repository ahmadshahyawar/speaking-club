<?php
declare(strict_types=1);
// Included from seed_lessons_batch9.php — shares its scope ($lessons, function V()).

// ========================= ELEMENTARY (batch 9) — 15 questions per topic =========================

$lessons[] = ['level' => 'elementary', 'topic' => 'Learning to Say No', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about saying no. Is it easy or hard for you to turn down a request?", 'Давайте поговорим об отказе. Вам легко или трудно отказывать в просьбе?', 'Жоқ деу туралы сөйлесейік. Өтінішке бас тарту сізге оңай ма, әлде қиын ба?'),
    'vocab' => [V('turn down', 'отказывать', 'бас тарту'), V('boundary', 'граница', 'шекара'), V('guilt', 'чувство вины', 'кінә сезімі'), V('overcommit', 'брать на себя слишком много', 'шамадан тыс міндеттеме алу'), V('assertive', 'напористый', 'батыл'), V('polite refusal', 'вежливый отказ', 'сыпайы бас тарту'), V('people-pleaser', 'угодник', 'басқаларды риза ету'), V('self-respect', 'самоуважение', 'өзін-өзі құрметтеу'), V('priorities', 'приоритеты', 'басымдықтар'), V('firm', 'твёрдый', 'қатаң')],
    'questions' => [
        V('Is it easy or hard for you to say no?', 'Вам легко или трудно говорить "нет"?', '"Жоқ" деу сізге оңай ма, әлде қиын ба?'),
        V('Do you feel guilty after turning down a request?', 'Вы чувствуете вину после отказа в просьбе?', 'Өтінішке бас тартқаннан кейін кінәлі сезінесіз бе?'),
        V('Have you ever overcommitted because you couldn\'t say no?', 'Вы когда-нибудь брали на себя слишком много, потому что не могли отказать?', '"Жоқ" деп айта алмағандықтан шамадан тыс міндеттеме алдыңыз ба?'),
        V('Do you consider yourself a people-pleaser?', 'Вы считаете себя угодником?', 'Өзіңізді басқаларды риза ету адамы деп санайсыз ба?'),
        V('Do you have clear personal boundaries?', 'У вас есть чёткие личные границы?', 'Анық жеке шекараларыңыз бар ма?'),
        V('Have you ever said yes when you really wanted to say no?', 'Вы когда-нибудь говорили "да", хотя на самом деле хотели сказать "нет"?', 'Шынымен "жоқ" дегіңіз келгенде "иә" дедіңіз бе?'),
        V('Do you find it easier to say no to strangers or to family?', 'Вам легче отказывать незнакомцам или семье?', 'Бейтаныс адамдарға бас тарту оңайырақ па, әлде отбасыға ма?'),
        V('Do you think saying no protects your priorities?', 'Как вы думаете, отказ защищает ваши приоритеты?', '"Жоқ" деу басымдықтарыңызды қорғайды деп ойлайсыз ба?'),
        V('Have you practiced being more assertive?', 'Вы тренировались быть более напористым?', 'Батылырақ болуды жаттықтыдыңыз ба?'),
        V('Do you give a reason when you say no, or just decline politely?', 'Вы даёте причину, когда отказываете, или просто вежливо отказываетесь?', 'Бас тартқанда себебін айтасыз ба, әлде жай сыпайы бас тартасыз ба?'),
        V('Does saying no ever damage your relationships?', 'Отказ когда-нибудь портит ваши отношения?', '"Жоқ" деу қарым-қатынасыңызға зиян тигізеді ме?'),
        V('Do you think self-respect requires being able to say no?', 'Как вы думаете, самоуважение требует умения говорить "нет"?', 'Өзін-өзі құрметтеу "жоқ" деп айта білуді талап етеді деп ойлайсыз ба?'),
        V('Have you ever regretted saying yes to something?', 'Вы когда-нибудь жалели о том, что сказали "да"?', 'Бір нәрсеге "иә" дегеніңізге өкіндіңіз бе?'),
        V('Do you find it easier to say no over text than in person?', 'Вам легче отказать в переписке, чем лично?', 'Хабарлама арқылы бас тарту жеке кездескеннен оңайырақ па?'),
        V('What would help you say no more confidently?', 'Что помогло бы вам увереннее говорить "нет"?', 'Сенімдірек "жоқ" деуге сізге не көмектесер еді?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Learning to Fix Simple Things', 'background_key' => 'professional',
    'warmup' => V("Let's talk about fixing things. Do you try to repair things yourself, or call for help?", 'Давайте поговорим о ремонте вещей. Вы пытаетесь чинить вещи сами, или зовёте на помощь?', 'Заттарды жөндеу туралы сөйлесейік. Заттарды өзіңіз жөндеуге тырысасыз ба, әлде көмекке шақырасыз ба?'),
    'vocab' => [V('repair', 'ремонтировать', 'жөндеу'), V('screwdriver', 'отвёртка', 'бұрағыш'), V('leaky faucet', 'протекающий кран', 'ағып тұрған кран'), V('light bulb', 'лампочка', 'шам'), V('tutorial video', 'обучающее видео', 'оқыту бейнесі'), V('trial and error', 'метод проб и ошибок', 'сынау мен қателесу'), V('DIY', 'сделай сам', 'өзің жаса'), V('handyman', 'мастер на все руки', 'шебер'), V('tools', 'инструменты', 'құралдар'), V('replace', 'заменить', 'ауыстыру')],
    'questions' => [
        V('Do you try to fix things yourself, or call for help?', 'Вы пытаетесь чинить вещи сами, или зовёте на помощь?', 'Заттарды өзіңіз жөндеуге тырысасыз ба, әлде көмекке шақырасыз ба?'),
        V('Have you ever fixed a leaky faucet?', 'Вы когда-нибудь чинили протекающий кран?', 'Ағып тұрған кранды жөндедіңіз бе?'),
        V('Do you watch tutorial videos to learn how to fix things?', 'Вы смотрите обучающие видео, чтобы научиться чинить вещи?', 'Заттарды жөндеуді үйрену үшін оқыту бейнелерін көресіз бе?'),
        V('Do you own basic tools like a screwdriver?', 'У вас есть базовые инструменты, такие как отвёртка?', 'Бұрағыш сияқты негізгі құралдарыңыз бар ма?'),
        V('Have you ever changed a light bulb yourself?', 'Вы когда-нибудь меняли лампочку сами?', 'Шамды өзіңіз ауыстырдыңыз ба?'),
        V('Do you enjoy DIY projects around the house?', 'Вам нравятся проекты "сделай сам" по дому?', 'Үй маңындағы "өзің жаса" жобаларын ұнатасыз ба?'),
        V('Do you learn by trial and error, or do research first?', 'Вы учитесь методом проб и ошибок, или сначала изучаете вопрос?', 'Сынау мен қателесу арқылы үйренесіз бе, әлде алдымен зерттейсіз бе?'),
        V('Have you ever made a small problem worse by trying to fix it?', 'Вы когда-нибудь усугубляли небольшую проблему, пытаясь её исправить?', 'Кішкентай мәселені жөндеуге тырысып, оны нашарлатып алдыңыз ба?'),
        V('Would you call a handyman for a small repair?', 'Вы бы вызвали мастера для мелкого ремонта?', 'Кішкентай жөндеу үшін шебер шақырар ма едіңіз?'),
        V('Do you feel proud when you fix something yourself?', 'Вы чувствуете гордость, когда чините что-то сами?', 'Бір нәрсені өзіңіз жөндегенде мақтаныш сезінесіз бе?'),
        V('Have you ever replaced a part in something broken?', 'Вы когда-нибудь заменяли деталь в сломанной вещи?', 'Сынған заттағы бөлшекті ауыстырдыңыз ба?'),
        V('Do you keep a toolbox at home?', 'У вас дома есть ящик с инструментами?', 'Үйде құрал жәшігіңіз бар ма?'),
        V('Is it satisfying for you to solve a practical problem?', 'Вам приятно решать практическую проблему?', 'Практикалық мәселені шешу сізге қанағат бере ме?'),
        V('Do you think basic repair skills should be taught in school?', 'Как вы думаете, базовые навыки ремонта должны преподаваться в школе?', 'Негізгі жөндеу дағдылары мектепте оқытылуы керек деп ойлайсыз ба?'),
        V('What simple repair skill would you like to learn?', 'Какой простой навык ремонта вы хотели бы освоить?', 'Қандай қарапайым жөндеу дағдысын үйренгіңіз келеді?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Weekend Farmers Markets', 'background_key' => 'nature',
    'warmup' => V("Let's talk about farmers markets. Do you enjoy shopping at a farmers market?", 'Давайте поговорим о фермерских рынках. Вам нравится делать покупки на фермерском рынке?', 'Фермерлер базарлары туралы сөйлесейік. Фермерлер базарынан сатып алуды ұнатасыз ба?'),
    'vocab' => [V('farmers market', 'фермерский рынок', 'фермерлер базары'), V('fresh produce', 'свежие продукты', 'жаңа піскен өнім'), V('local farmer', 'местный фермер', 'жергілікті фермер'), V('organic', 'органический', 'органикалық'), V('seasonal', 'сезонный', 'маусымдық'), V('handmade goods', 'товары ручной работы', 'қолмен жасалған тауарлар'), V('stall', 'прилавок', 'сөре (сауда)'), V('haggle', 'торговаться', 'сауда жасау'), V('honey', 'мёд', 'бал'), V('support local', 'поддерживать местных', 'жергіліктілерді қолдау')],
    'questions' => [
        V('Do you enjoy shopping at a farmers market?', 'Вам нравится делать покупки на фермерском рынке?', 'Фермерлер базарынан сатып алуды ұнатасыз ба?'),
        V('Do you prefer organic produce from a farmers market?', 'Вы предпочитаете органические продукты с фермерского рынка?', 'Фермерлер базарынан органикалық өнімді ұнатасыз ба?'),
        V('Do you like talking to local farmers about their produce?', 'Вам нравится разговаривать с местными фермерами об их продукции?', 'Жергілікті фермерлермен олардың өнімі туралы сөйлескенді ұнатасыз ба?'),
        V('Have you ever bought handmade goods at a market?', 'Вы когда-нибудь покупали товары ручной работы на рынке?', 'Базардан қолмен жасалған тауарларды сатып алдыңыз ба?'),
        V('Do you try to buy seasonal fruits and vegetables?', 'Вы стараетесь покупать сезонные фрукты и овощи?', 'Маусымдық жеміс-жидек пен көкөністі сатып алуға тырысасыз ба?'),
        V('Have you ever haggled over a price at a market?', 'Вы когда-нибудь торговались о цене на рынке?', 'Базарда баға туралы сауда жасадыңыз ба?'),
        V('Do you buy local honey when you see it?', 'Вы покупаете местный мёд, когда его видите?', 'Жергілікті балды көргенде сатып аласыз ба?'),
        V('Do you think it is important to support local farmers?', 'Как вы думаете, важно поддерживать местных фермеров?', 'Жергілікті фермерлерді қолдау маңызды деп ойлайсыз ба?'),
        V('Is the food at farmers markets more expensive than at supermarkets?', 'Еда на фермерских рынках дороже, чем в супермаркетах?', 'Фермерлер базарындағы тамақ супермаркеттегіден қымбат па?'),
        V('Do you go to the farmers market every week, or sometimes?', 'Вы ходите на фермерский рынок каждую неделю, или иногда?', 'Фермерлер базарына апта сайын барасыз ба, әлде кейде ме?'),
        V('Do you think the quality of food is better at a farmers market?', 'Как вы думаете, качество продуктов лучше на фермерском рынке?', 'Фермерлер базарындағы тамақ сапасы жақсырақ деп ойлайсыз ба?'),
        V('Have you ever tried a new food because of a farmers market stall?', 'Вы когда-нибудь пробовали новую еду благодаря прилавку на фермерском рынке?', 'Фермерлер базарының сөресі арқасында жаңа тамақты сынап көрдіңіз бе?'),
        V('Do you enjoy the atmosphere of an outdoor market?', 'Вам нравится атмосфера рынка под открытым небом?', 'Ашық аспан астындағы базардың атмосферасын ұнатасыз ба?'),
        V('Would you rather shop at a farmers market or a big supermarket?', 'Вы бы предпочли делать покупки на фермерском рынке или в большом супермаркете?', 'Фермерлер базарынан сатып алғанды ұнатасыз ба, әлде үлкен супермаркеттен бе?'),
        V('What would make you visit a farmers market more often?', 'Что заставило бы вас чаще посещать фермерский рынок?', 'Фермерлер базарына жиірек баруға сізге не себеп болар еді?'),
    ],
];

// ========================= PRE-INTERMEDIATE (batch 9) — 15 questions per topic =========================

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'The Ethics of Lying to Children', 'background_key' => 'warm',
    'warmup' => V("Let's talk about lying to children. Is it okay for parents to tell myths like Santa Claus, or is that dishonest?", 'Давайте поговорим о лжи детям. Нормально ли родителям рассказывать мифы вроде Санта-Клауса, или это нечестно?', 'Балаларға өтірік айту туралы сөйлесейік. Ата-аналарға Санта-Клаус сияқты мифтерді айту дұрыс па, әлде бұл адал емес пе?'),
    'vocab' => [V('myth', 'миф', 'миф'), V('innocence', 'невинность', 'кінәсіздік'), V('imagination', 'воображение', 'қиял'), V('trust', 'доверие', 'сенім'), V('protective lie', 'защитная ложь', 'қорғаныш өтірігі'), V('developmentally appropriate', 'соответствующий развитию', 'дамуға сай'), V('disillusionment', 'разочарование', 'көзі ашылу'), V('honesty policy', 'политика честности', 'адалдық саясаты'), V('age-appropriate', 'подходящий по возрасту', 'жасқа сай'), V('tradition', 'традиция', 'дәстүр')],
    'questions' => [
        V('Do you think telling children myths like Santa Claus is okay?', 'Как вы думаете, рассказывать детям мифы вроде Санта-Клауса — это нормально?', 'Балаларға Санта-Клаус сияқты мифтерді айту дұрыс деп ойлайсыз ба?'),
        V('Were you told these kinds of myths as a child?', 'Вам рассказывали такие мифы в детстве?', 'Балалық шағыңызда осындай мифтер айтылды ма?'),
        V('Do you think these myths harm a child\'s trust when they find out the truth?', 'Как вы думаете, эти мифы вредят доверию ребёнка, когда он узнаёт правду?', 'Бұл мифтер бала шындықты білгенде оның сеніміне зиян тигізеді деп ойлайсыз ба?'),
        V('Do you think there is a difference between protective lies and harmful lies?', 'Как вы думаете, есть разница между защитной ложью и вредной ложью?', 'Қорғаныш өтірігі мен зиянды өтірік арасында айырмашылық бар деп ойлайсыз ба?'),
        V('Would you continue family traditions involving these kinds of myths?', 'Вы бы продолжили семейные традиции, связанные с такими мифами?', 'Осындай мифтермен байланысты отбасылық дәстүрлерді жалғастырар ма едіңіз?'),
        V('Do you think imagination is important enough to justify these myths?', 'Как вы думаете, воображение достаточно важно, чтобы оправдать эти мифы?', 'Қиял бұл мифтерді ақтайтындай маңызды деп ойлайсыз ба?'),
        V('Do you think being fully honest with children at all times is realistic?', 'Как вы думаете, быть полностью честным с детьми всегда реально?', 'Балалармен әрдайым толық адал болу шынайы деп ойлайсыз ба?'),
        V('Do you remember how you felt when you learned the truth about a childhood myth?', 'Вы помните, что чувствовали, когда узнали правду об одном из детских мифов?', 'Балалық шақтағы мифтің шындығын білгенде не сезінгеніңізді есіңізде сақтайсыз ба?'),
        V('Do you think small lies to children can affect their trust in adults generally?', 'Как вы думаете, небольшая ложь детям может повлиять на их доверие ко взрослым в целом?', 'Балаларға айтылған кішкентай өтіріктер жалпы ересектерге деген сеніміне әсер ете ме деп ойлайсыз ба?'),
        V('Should parents explain the difference between stories and reality early on?', 'Должны ли родители объяснять разницу между историями и реальностью с раннего возраста?', 'Ата-аналар оқиғалар мен шындықтың айырмашылығын ерте түсіндіруі керек пе?'),
        V('Do you think cultural traditions justify certain harmless myths?', 'Как вы думаете, культурные традиции оправдывают некоторые безобидные мифы?', 'Мәдени дәстүрлер кейбір зиянсыз мифтерді ақтайды деп ойлайсыз ба?'),
        V('Would you rather your child believe in magic for a while, or know the full truth early?', 'Вы бы предпочли, чтобы ваш ребёнок какое-то время верил в магию, или узнал всю правду рано?', 'Балаңыздың біраз уақыт сиқырға сенгенін қалайсыз ба, әлде ерте толық шындықты білгенін ба?'),
        V('Do you think this kind of "lying" is fundamentally different from adult lies?', 'Как вы думаете, такая "ложь" в корне отличается от лжи взрослых?', 'Мұндай "өтірік" ересектердің өтірігінен түбегейлі ерекшеленеді деп ойлайсыз ба?'),
        V('Do you think children eventually appreciate having believed in these myths?', 'Как вы думаете, дети в конечном итоге ценят то, что верили в эти мифы?', 'Балалар ақыр соңында бұл мифтерге сенгендерін бағалайды деп ойлайсыз ба?'),
        V('Where would you personally draw the line on lying to children?', 'Где бы вы лично провели черту в вопросе лжи детям?', 'Балаларға өтірік айту мәселесінде жеке өзіңіз қай жерде шек қойар едіңіз?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'The Culture of Instant Gratification', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about instant gratification. Has modern life made it harder for people to wait for things?", 'Давайте поговорим о мгновенном удовлетворении. Современная жизнь усложнила людям ожидание чего-либо?', 'Лезде қанағаттану туралы сөйлесейік. Заманауи өмір адамдарға бір нәрсені күтуді қиындатты ма?'),
    'vocab' => [V('instant gratification', 'мгновенное удовлетворение', 'лезде қанағаттану'), V('patience', 'терпение', 'шыдамдылық'), V('delayed reward', 'отложенная награда', 'кейінге қалдырылған сыйақы'), V('impulse', 'импульс', 'жедел ниет'), V('same-day delivery', 'доставка в тот же день', 'сол күнгі жеткізу'), V('overnight success', 'мгновенный успех', 'бір түндегі табыс'), V('self-control', 'самоконтроль', 'өзін-өзі бақылау'), V('convenience', 'удобство', 'ыңғайлылық'), V('long-term goal', 'долгосрочная цель', 'ұзақ мерзімді мақсат'), V('addiction', 'зависимость', 'тәуелділік')],
    'questions' => [
        V('Has modern life made it harder for you to wait for things?', 'Современная жизнь усложнила вам ожидание чего-либо?', 'Заманауи өмір сізге бір нәрсені күтуді қиындатты ма?'),
        V('Do you find it hard to be patient when something loads slowly online?', 'Вам трудно быть терпеливым, когда что-то медленно загружается онлайн?', 'Онлайнда бір нәрсе баяу жүктелгенде шыдамды болу сізге қиын ба?'),
        V('Do you think same-day delivery has changed your expectations?', 'Как вы думаете, доставка в тот же день изменила ваши ожидания?', 'Сол күнгі жеткізу күтулеріңізді өзгертті деп ойлайсыз ба?'),
        V('Do you struggle to work toward long-term goals that take years?', 'Вам трудно работать над долгосрочными целями, которые занимают годы?', 'Жылдар алатын ұзақ мерзімді мақсаттарға жету үшін жұмыс істеу сізге қиын ба?'),
        V('Do you think social media rewards instant reactions over patience?', 'Как вы думаете, соцсети вознаграждают мгновенные реакции больше, чем терпение?', 'Әлеуметтік желі шыдамдылықтан гөрі лезде реакцияны марапаттайды деп ойлайсыз ба?'),
        V('Have you ever given up on something because results took too long?', 'Вы когда-нибудь бросали что-то, потому что результаты занимали слишком много времени?', 'Нәтижелер тым ұзаққа созылғандықтан бір нәрседен бас тарттыңыз ба?'),
        V('Do you think delayed rewards are more satisfying than instant ones?', 'Как вы думаете, отложенные награды приносят больше удовлетворения, чем мгновенные?', 'Кейінге қалдырылған сыйақылар лездегіден қанағаттанарлықтау ма деп ойлайсыз ба?'),
        V('Do you act on impulse often when shopping online?', 'Вы часто действуете под влиянием импульса при онлайн-покупках?', 'Онлайн сауда жасағанда жиі жедел ниетпен әрекет етесіз бе?'),
        V('Do you think younger generations struggle more with patience than older ones?', 'Как вы думаете, младшим поколениям труднее с терпением, чем старшим?', 'Жас ұрпаққа шыдамдылықпен ересек ұрпаққа қарағанда қиынырақ па деп ойлайсыз ба?'),
        V('Have you ever practiced deliberately waiting to build patience?', 'Вы когда-нибудь намеренно тренировались ждать, чтобы развить терпение?', 'Шыдамдылықты дамыту үшін әдейі күтуді жаттықтыдыңыз ба?'),
        V('Do you think instant gratification culture affects relationships too?', 'Как вы думаете, культура мгновенного удовлетворения влияет и на отношения?', 'Лезде қанағаттану мәдениеті қарым-қатынасқа да әсер етеді деп ойлайсыз ба?'),
        V('Do you think self-control is a skill that can be trained?', 'Как вы думаете, самоконтроль — это навык, который можно натренировать?', 'Өзін-өзі бақылау жаттықтыруға болатын дағды деп ойлайсыз ба?'),
        V('Would you rather have a smaller reward now or a bigger one later?', 'Вы бы предпочли меньшую награду сейчас или большую позже?', 'Қазір кішірек сыйақыны қалайсыз ба, әлде кейінірек үлкенін бе?'),
        V('Do you think convenience culture has made people less resilient?', 'Как вы думаете, культура удобства сделала людей менее устойчивыми?', 'Ыңғайлылық мәдениеті адамдарды төзімсіздеу етті деп ойлайсыз ба?'),
        V('What is one area of your life where you practice patience well?', 'В какой сфере вашей жизни вы хорошо практикуете терпение?', 'Өміріңіздің қай саласында шыдамдылықты жақсы тәжірибе жасайсыз?'),
    ],
];

// ========================= INTERMEDIATE (batch 9) — 15 questions per topic =========================

$lessons[] = ['level' => 'intermediate', 'topic' => 'The Ethics of Automated Warfare', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about autonomous weapons. Should machines ever be allowed to make life-or-death decisions in combat?", 'Давайте поговорим об автономном оружии. Должны ли машины когда-либо иметь право принимать решения о жизни и смерти в бою?', 'Автономды қару туралы сөйлесейік. Машиналарға шайқаста өмір мен өлім туралы шешім қабылдауға рұқсат берілуі керек пе?'),
    'vocab' => [V('autonomous weapon', 'автономное оружие', 'автономды қару'), V('drone strike', 'удар дрона', 'дрон соққысы'), V('accountability', 'подотчётность', 'жауапкершілік'), V('collateral damage', 'сопутствующий ущерб', 'қосалқы зиян'), V('human oversight', 'человеческий надзор', 'адам қадағалауы'), V('international law', 'международное право', 'халықаралық құқық'), V('arms race', 'гонка вооружений', 'қару-жарақ жарысы'), V('proportionality', 'пропорциональность', 'пропорционалдылық'), V('military ethics', 'военная этика', 'әскери этика'), V('kill decision', 'решение об уничтожении', 'жою туралы шешім')],
    'questions' => [
        V('Should machines ever be allowed to make life-or-death decisions in combat?', 'Должны ли машины когда-либо иметь право принимать решения о жизни и смерти в бою?', 'Машиналарға шайқаста өмір мен өлім туралы шешім қабылдауға рұқсат берілуі керек пе?'),
        V('Who should be held accountable if an autonomous weapon makes a mistake?', 'Кто должен нести ответственность, если автономное оружие совершает ошибку?', 'Автономды қару қате жіберсе, кім жауапты болуы керек?'),
        V('Do you think autonomous weapons could reduce human casualties in war?', 'Как вы думаете, автономное оружие могло бы снизить человеческие потери на войне?', 'Автономды қару соғыстағы адам шығынын азайта алады деп ойлайсыз ба?'),
        V('Should there be an international ban on fully autonomous weapons?', 'Должен ли быть международный запрет на полностью автономное оружие?', 'Толығымен автономды қаруға халықаралық тыйым болуы керек пе?'),
        V('Do you think an arms race in AI weapons is already happening?', 'Как вы думаете, гонка вооружений в области ИИ-оружия уже происходит?', 'ЖИ қаруындағы қару-жарақ жарысы қазірдің өзінде болып жатыр деп ойлайсыз ба?'),
        V('Do you trust a machine to judge proportionality in a military strike?', 'Вы доверяете машине судить о пропорциональности военного удара?', 'Машинаға әскери соққының пропорционалдылығын бағалауға сенесіз бе?'),
        V('Should human oversight always be required before a lethal strike?', 'Должен ли человеческий надзор всегда требоваться перед смертоносным ударом?', 'Өлтіретін соққы алдында әрдайым адам қадағалауы қажет пе?'),
        V('Do you think autonomous weapons remove moral responsibility from soldiers?', 'Как вы думаете, автономное оружие снимает моральную ответственность с солдат?', 'Автономды қару әскерилерден моральдық жауапкершілікті алып тастайды деп ойлайсыз ба?'),
        V('Do you think smaller countries are at a disadvantage without this technology?', 'Как вы думаете, небольшие страны находятся в невыгодном положении без этой технологии?', 'Кішірек елдер бұл технологиясыз тиімсіз жағдайда деп ойлайсыз ба?'),
        V('Should companies developing this technology face ethical restrictions?', 'Должны ли компании, разрабатывающие эту технологию, сталкиваться с этическими ограничениями?', 'Бұл технологияны жасайтын компаниялар этикалық шектеулерге тап болуы керек пе?'),
        V('Do you think existing international law is enough to regulate this?', 'Как вы думаете, существующего международного права достаточно, чтобы это регулировать?', 'Қолданыстағы халықаралық құқық мұны реттеуге жеткілікті деп ойлайсыз ба?'),
        V('Do you think autonomous weapons could make wars start more easily?', 'Как вы думаете, автономное оружие могло бы облегчить начало войн?', 'Автономды қару соғыстардың оңайырақ басталуына мүмкіндік бере ме деп ойлайсыз ба?'),
        V('Would you support your country developing this kind of weapon for defense?', 'Вы бы поддержали разработку такого оружия вашей страной для обороны?', 'Еліңіздің қорғаныс үшін осындай қару жасауын қолдар ма едіңіз?'),
        V('Do you think this debate gets enough public attention?', 'Как вы думаете, эти дебаты получают достаточно общественного внимания?', 'Бұл пікірталас жеткілікті қоғамдық назар алады деп ойлайсыз ба?'),
        V('What safeguard do you think is most essential for this technology?', 'Какая защита, по-вашему, наиболее важна для этой технологии?', 'Сіздің ойыңызша, бұл технология үшін ең маңызды қорғаныс қандай?'),
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
