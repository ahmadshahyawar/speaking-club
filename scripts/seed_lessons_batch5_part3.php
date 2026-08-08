<?php
declare(strict_types=1);
// Included from seed_lessons_batch5_part2.php — shares its scope ($lessons, function V()).

// ========================= INTERMEDIATE (batch 5) =========================

$lessons[] = ['level' => 'intermediate', 'topic' => 'The Paradox of Choice', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about too many choices. Does having more options actually make decisions harder?", 'Давайте поговорим о слишком большом выборе. Действительно ли больше вариантов усложняет принятие решений?', 'Тым көп таңдау туралы сөйлесейік. Көбірек нұсқалардың болуы шешім қабылдауды шынымен қиындата ма?'),
    'vocab' => [V('decision fatigue', 'усталость от принятия решений', 'шешім қабылдау шаршауы'), V('overchoice', 'переизбыток выбора', 'артық таңдау'), V('satisficing', 'удовлетворение минимальным', 'жеткілікті деңгейге қанағаттану'), V('maximizer', 'максимизатор', 'максимизатор'), V('regret', 'сожаление', 'өкіну'), V('analysis paralysis', 'паралич анализа', 'талдау салдарынан тоқтап қалу'), V('options overload', 'перегрузка вариантами', 'нұсқалардың шамадан тыс болуы'), V('consumer choice', 'потребительский выбор', 'тұтынушы таңдауы'), V('simplicity', 'простота', 'қарапайымдылық'), V('contentment', 'удовлетворённость', 'қанағат')],
    'questions' => [
        V('Do you ever feel overwhelmed by too many choices?', 'Вы когда-нибудь чувствуете себя перегруженным слишком большим выбором?', 'Тым көп таңдаудан шаршайсыз ба?'),
        V('Are you a maximizer who wants the best option, or do you settle for good enough?', 'Вы максимизатор, который хочет лучший вариант, или довольствуетесь достаточно хорошим?', 'Ең жақсы нұсқаны қалайтын максимизаторсыз ба, әлде жеткілікті жақсыға қанағаттанасыз ба?'),
        V('Have you ever regretted a decision because you had too many options?', 'Вы когда-нибудь жалели о решении из-за слишком большого количества вариантов?', 'Тым көп нұсқа болғаны үшін шешіміңізге өкіндіңіз бе?'),
        V('Do you think fewer choices could make people happier?', 'Как вы думаете, меньше выбора могло бы сделать людей счастливее?', 'Аз таңдау адамдарды бақыттырақ ете алады деп ойлайсыз ба?'),
        V('How do you avoid analysis paralysis when making a decision?', 'Как вы избегаете паралича анализа при принятии решения?', 'Шешім қабылдағанда талдау салдарынан тоқтап қалудан қалай аулақ боласыз?'),
        V('Do you simplify your choices in any area of your life?', 'Вы упрощаете выбор в какой-либо сфере своей жизни?', 'Өміріңіздің қандай да бір саласында таңдауды жеңілдетесіз бе?'),
    ],
];

$lessons[] = ['level' => 'intermediate', 'topic' => 'Digital Colonialism', 'background_key' => 'night-city',
    'warmup' => V("Let's talk about digital colonialism. Do a few powerful tech companies control too much of the world's digital infrastructure?", 'Давайте поговорим о цифровом колониализме. Контролируют ли несколько мощных технологических компаний слишком много мировой цифровой инфраструктуры?', 'Цифрлық отаршылдық туралы сөйлесейік. Бірнеше қуатты технологиялық компания әлемдік цифрлық инфрақұрылымның тым көп бөлігін бақылай ма?'),
    'vocab' => [V('data extraction', 'извлечение данных', 'деректерді алу'), V('tech monopoly', 'технологическая монополия', 'технологиялық монополия'), V('global south', 'глобальный юг', 'жаһандық оңтүстік'), V('platform dominance', 'доминирование платформы', 'платформа үстемдігі'), V('cultural homogenization', 'культурная унификация', 'мәдени біртектілену'), V('infrastructure dependency', 'зависимость от инфраструктуры', 'инфрақұрылымға тәуелділік'), V('digital sovereignty', 'цифровой суверенитет', 'цифрлық егемендік'), V('exploitation', 'эксплуатация', 'пайдалану'), V('access inequality', 'неравенство доступа', 'қолжетімділік теңсіздігі'), V('regulation', 'регулирование', 'реттеу')],
    'questions' => [
        V('Do you think a few tech companies have too much global power?', 'Как вы думаете, несколько технологических компаний имеют слишком много глобальной власти?', 'Бірнеше технологиялық компанияда тым көп жаһандық билік бар деп ойлайсыз ба?'),
        V('Should developing countries build their own digital infrastructure?', 'Должны ли развивающиеся страны строить собственную цифровую инфраструктуру?', 'Дамушы елдер өз цифрлық инфрақұрылымын құруы керек пе?'),
        V('Do you think your personal data is being extracted unfairly?', 'Как вы думаете, ваши личные данные извлекаются несправедливо?', 'Жеке деректеріңіз әділетсіз түрде алынады деп ойлайсыз ба?'),
        V('Should there be international regulation of major tech platforms?', 'Должно ли быть международное регулирование крупных технологических платформ?', 'Ірі технологиялық платформаларды халықаралық реттеу болуы керек пе?'),
        V('Do you think global internet access is fair right now?', 'Как вы думаете, глобальный доступ к интернету сейчас справедлив?', 'Қазіргі уақытта интернетке жаһандық қолжетімділік әділ деп ойлайсыз ба?'),
        V('How could smaller countries protect their digital sovereignty?', 'Как небольшие страны могли бы защитить свой цифровой суверенитет?', 'Кішірек елдер өздерінің цифрлық егемендігін қалай қорғай алады?'),
    ],
];

$lessons[] = ['level' => 'intermediate', 'topic' => 'The Ethics of Longevity Science', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about extending human life. Should science try to significantly extend how long humans live?", 'Давайте поговорим о продлении человеческой жизни. Должна ли наука пытаться значительно продлить жизнь человека?', 'Адам өмірін ұзарту туралы сөйлесейік. Ғылым адам өмірін айтарлықтай ұзартуға тырысуы керек пе?'),
    'vocab' => [V('life extension', 'продление жизни', 'өмірді ұзарту'), V('anti-aging', 'антивозрастной', 'қартаюға қарсы'), V('overpopulation concern', 'опасение перенаселения', 'артық халық санына алаңдаушылық'), V('resource strain', 'нагрузка на ресурсы', 'ресурстарға жүктеме'), V('quality of life', 'качество жизни', 'өмір сапасы'), V('inequality of access', 'неравенство доступа', 'қолжетімділік теңсіздігі'), V('biological limit', 'биологический предел', 'биологиялық шек'), V('ethical implication', 'этическое последствие', 'этикалық салдар'), V('healthspan', 'период здоровой жизни', 'сау өмір кезеңі'), V('mortality', 'смертность', 'өлім')],
    'questions' => [
        V('Would you want to live significantly longer if science made it possible?', 'Хотели бы вы жить значительно дольше, если бы наука сделала это возможным?', 'Ғылым мүмкін етсе, айтарлықтай ұзақ өмір сүргіңіз келе ме?'),
        V('Do you worry that life extension would only be available to the wealthy?', 'Вы беспокоитесь, что продление жизни будет доступно только богатым?', 'Өмірді ұзарту тек байларға ғана қолжетімді болатынына алаңдайсыз ба?'),
        V('Should we focus more on healthspan than lifespan?', 'Следует ли нам больше сосредоточиться на периоде здоровой жизни, чем на продолжительности жизни?', 'Өмір ұзақтығына қарағанда сау өмір кезеңіне көбірек назар аудару керек пе?'),
        V('Do you think extending human life could cause overpopulation problems?', 'Как вы думаете, продление человеческой жизни может вызвать проблемы перенаселения?', 'Адам өмірін ұзарту артық халық санының мәселелерін тудыруы мүмкін деп ойлайсыз ба?'),
        V('Is there a natural limit to how long humans should live?', 'Есть ли естественный предел тому, сколько должен жить человек?', 'Адамдардың қанша өмір сүруі керектігінің табиғи шегі бар ма?'),
        V('What ethical concerns come with anti-aging science?', 'Какие этические проблемы возникают с наукой против старения?', 'Қартаюға қарсы ғылыммен қандай этикалық мәселелер туындайды?'),
    ],
];

$lessons[] = ['level' => 'intermediate', 'topic' => 'Neurodiversity in the Workplace', 'background_key' => 'professional',
    'warmup' => V("Let's talk about neurodiversity. How can workplaces better support people who think differently?", 'Давайте поговорим о нейроразнообразии. Как рабочие места могут лучше поддерживать людей, которые мыслят иначе?', 'Нейроалуантүрлілік туралы сөйлесейік. Жұмыс орындары басқаша ойлайтын адамдарды қалай жақсырақ қолдай алады?'),
    'vocab' => [V('neurodivergent', 'нейроотличный', 'нейробөлек'), V('accommodation', 'приспособление (условия)', 'бейімдеу'), V('inclusive hiring', 'инклюзивный найм', 'инклюзивті жалдау'), V('cognitive diversity', 'когнитивное разнообразие', 'когнитивтік әртүрлілік'), V('stereotype', 'стереотип', 'стереотип'), V('strength-based approach', 'подход, основанный на сильных сторонах', 'күшті жақтарға негізделген тәсіл'), V('sensory environment', 'сенсорная среда', 'сенсорлық орта'), V('productivity myth', 'миф о продуктивности', 'өнімділік туралы аңыз'), V('awareness', 'осведомлённость', 'хабардарлық'), V('acceptance', 'принятие', 'қабылдау')],
    'questions' => [
        V('Have you ever worked with someone who is neurodivergent?', 'Вы когда-нибудь работали с нейроотличным человеком?', 'Нейробөлек адаммен жұмыс істедіңіз бе?'),
        V('What accommodations do you think workplaces should offer?', 'Какие условия, по-вашему, должны предлагать рабочие места?', 'Жұмыс орындары қандай бейімдеулерді ұсынуы керек деп ойлайсыз ба?'),
        V('Do you think cognitive diversity makes teams stronger?', 'Как вы думаете, когнитивное разнообразие делает команды сильнее?', 'Когнитивтік әртүрлілік командаларды күштірек ете ме деп ойлайсыз ба?'),
        V('Have you noticed stereotypes about neurodivergent people in media?', 'Вы замечали стереотипы о нейроотличных людях в медиа?', 'Медиада нейробөлек адамдар туралы стереотиптерді байқадыңыз ба?'),
        V('Should companies focus on accommodating sensory needs at work?', 'Должны ли компании фокусироваться на удовлетворении сенсорных потребностей на работе?', 'Компаниялар жұмыста сенсорлық қажеттіліктерді қанағаттандыруға назар аударуы керек пе?'),
        V('How can society improve awareness and acceptance of neurodiversity?', 'Как общество может улучшить осведомлённость и принятие нейроразнообразия?', 'Қоғам нейроалуантүрлілік туралы хабардарлық пен қабылдауды қалай жақсарта алады?'),
    ],
];

$lessons[] = ['level' => 'intermediate', 'topic' => 'The Politics of Language', 'background_key' => 'professional',
    'warmup' => V("Let's talk about language politics. How does language connect to power and identity?", 'Давайте поговорим о политике языка. Как язык связан с властью и идентичностью?', 'Тіл саясаты туралы сөйлесейік. Тіл билік пен бірегейлікке қалай байланысты?'),
    'vocab' => [V('official language', 'официальный язык', 'ресми тіл'), V('linguistic imperialism', 'лингвистический империализм', 'лингвистикалық империализм'), V('language policy', 'языковая политика', 'тіл саясаты'), V('minority language rights', 'права языков меньшинств', 'аз ұлт тілдерінің құқықтары'), V('code-switching', 'переключение кодов', 'код ауыстыру'), V('prestige dialect', 'престижный диалект', 'беделді диалект'), V('standardization', 'стандартизация', 'стандарттау'), V('identity politics', 'политика идентичности', 'бірегейлік саясаты'), V('bilingual education', 'двуязычное образование', 'қос тілді білім'), V('marginalization', 'маргинализация', 'шеттету')],
    'questions' => [
        V('Do you think a country should have one official language?', 'Как вы думаете, у страны должен быть один официальный язык?', 'Елде бір ресми тіл болуы керек деп ойлайсыз ба?'),
        V('Have you ever code-switched between languages or dialects?', 'Вы когда-нибудь переключались между языками или диалектами?', 'Тілдер немесе диалектілер арасында код ауыстырдыңыз ба?'),
        V('Should minority languages receive more government protection?', 'Должны ли языки меньшинств получать больше государственной защиты?', 'Аз ұлт тілдері үкіметтен көбірек қорғау алуы керек пе?'),
        V('Do you think some dialects are unfairly seen as less prestigious?', 'Как вы думаете, некоторые диалекты несправедливо считаются менее престижными?', 'Кейбір диалектілер әділетсіз түрде беделі төмен деп саналады деп ойлайсыз ба?'),
        V('Should schools offer bilingual education more widely?', 'Должны ли школы шире предлагать двуязычное образование?', 'Мектептер қос тілді білімді кеңірек ұсынуы керек пе?'),
        V('How is language connected to a person\'s sense of identity?', 'Как язык связан с чувством идентичности человека?', 'Тіл адамның бірегейлік сезімімен қалай байланысты?'),
    ],
];

$lessons[] = ['level' => 'intermediate', 'topic' => 'Post-Truth Society', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about living in a post-truth society. Do facts still matter as much as they used to in public debate?", 'Давайте поговорим о жизни в постправдивом обществе. Имеют ли факты такое же значение в публичных дебатах, как раньше?', 'Постшындық қоғамында өмір сүру туралы сөйлесейік. Фактілер қоғамдық пікірталаста бұрынғыдай маңызды ма?'),
    'vocab' => [V('objective fact', 'объективный факт', 'объективті факт'), V('alternative fact', 'альтернативный факт', 'балама факт'), V('echo chamber', 'информационный пузырь', 'ақпараттық көпір'), V('confirmation bias', 'предвзятость подтверждения', 'растау бейтараптығы'), V('epistemic crisis', 'эпистемический кризис', 'эпистемикалық дағдарыс'), V('trust in institutions', 'доверие к институтам', 'институттарға сенім'), V('emotional appeal', 'эмоциональное воздействие', 'эмоционалды әсер'), V('fact-checking', 'проверка фактов', 'фактіні тексеру'), V('polarization', 'поляризация', 'поляризация'), V('media literacy', 'медиаграмотность', 'медиа сауаттылық')],
    'questions' => [
        V('Do you think facts matter less in public debate than they used to?', 'Как вы думаете, факты имеют меньшее значение в публичных дебатах, чем раньше?', 'Фактілер қоғамдық пікірталаста бұрынғыдан аз маңызды деп ойлайсыз ба?'),
        V('Do you trust institutions like the news media or government?', 'Вы доверяете институтам, таким как СМИ или правительство?', 'БАҚ немесе үкімет сияқты институттарға сенесіз бе?'),
        V('Have you noticed confirmation bias in yourself or others?', 'Вы замечали предвзятость подтверждения у себя или других?', 'Өзіңізде немесе басқаларда растау бейтараптығын байқадыңыз ба?'),
        V('Do emotional arguments persuade you more than factual ones?', 'Эмоциональные аргументы убеждают вас больше, чем фактические?', 'Эмоционалды дәлелдер сізді фактілі дәлелдерден гөрі көбірек сендіре ме?'),
        V('How can media literacy help fight polarization?', 'Как медиаграмотность может помочь бороться с поляризацией?', 'Медиа сауаттылық поляризациямен күресуге қалай көмектеседі?'),
        V('Do you fact-check information before sharing it?', 'Вы проверяете информацию перед тем, как поделиться ею?', 'Ақпаратпен бөліспес бұрын оны тексересіз бе?'),
    ],
];

$lessons[] = ['level' => 'intermediate', 'topic' => 'The Economics of Attention', 'background_key' => 'night-city',
    'warmup' => V("Let's talk about attention as a resource. How valuable is your attention, and who is trying to capture it?", 'Давайте поговорим о внимании как ресурсе. Насколько ценно ваше внимание и кто пытается его захватить?', 'Назарды ресурс ретінде сөйлесейік. Назарыңыз қаншалықты құнды және оны кім ұстауға тырысады?'),
    'vocab' => [V('scarcity of attention', 'дефицит внимания', 'назар тапшылығы'), V('engagement bait', 'приманка для вовлечения', 'қатысу жеміс'), V('platform incentive', 'стимул платформы', 'платформа ынталандыруы'), V('cognitive resource', 'когнитивный ресурс', 'когнитивтік ресурс'), V('opportunity cost', 'альтернативные издержки', 'мүмкіндік құны'), V('mindful consumption', 'осознанное потребление', 'саналы тұтыну'), V('information overload', 'информационная перегрузка', 'ақпараттық шамадан тыс жүктеме'), V('value of focus', 'ценность концентрации', 'зейіннің құндылығы'), V('distraction economy', 'экономика отвлечения', 'алаңдату экономикасы'), V('intentionality', 'намеренность', 'ниеттілік')],
    'questions' => [
        V('Do you think your attention is a limited and valuable resource?', 'Как вы думаете, ваше внимание — ограниченный и ценный ресурс?', 'Назарыңыз шектеулі әрі құнды ресурс деп ойлайсыз ба?'),
        V('Which apps or platforms compete most for your attention?', 'Какие приложения или платформы больше всего борются за ваше внимание?', 'Қандай қолданбалар немесе платформалар назарыңыз үшін ең көп бәсекелеседі?'),
        V('Do you practice mindful consumption of media?', 'Вы практикуете осознанное потребление медиа?', 'Медианы саналы тұтынуды тәжірибе жасайсыз ба?'),
        V('What is the opportunity cost of spending hours on social media?', 'Какова альтернативная стоимость часов, проведённых в соцсетях?', 'Әлеуметтік желіде сағаттар өткізудің мүмкіндік құны қандай?'),
        V('Do you think about intentionality before opening an app?', 'Вы думаете о намеренности перед открытием приложения?', 'Қолданбаны ашпас бұрын ниеттілік туралы ойланасыз ба?'),
        V('How can someone protect their attention in a distracting world?', 'Как можно защитить своё внимание в отвлекающем мире?', 'Алаңдатушы әлемде адам өз назарын қалай қорғай алады?'),
    ],
];

$lessons[] = ['level' => 'intermediate', 'topic' => 'Techno-Optimism vs Techno-Skepticism', 'background_key' => 'night-city',
    'warmup' => V("Let's talk about attitudes toward technology. Are you generally optimistic or skeptical about new technology?", 'Давайте поговорим об отношении к технологиям. Вы в целом оптимистичны или скептичны насчёт новых технологий?', 'Технологияға деген көзқарас туралы сөйлесейік. Сіз жалпы жаңа технологияға оптимистсіз бе, әлде скептиксіз бе?'),
    'vocab' => [V('technological determinism', 'технологический детерминизм', 'технологиялық детерминизм'), V('unintended consequence', 'непреднамеренное последствие', 'күтпеген салдар'), V('innovation bias', 'предвзятость к инновациям', 'инновацияға бейтараптық'), V('precautionary principle', 'принцип предосторожности', 'сақтық қағидасы'), V('disruptive technology', 'прорывная технология', 'бұзушы технология'), V('existential risk', 'экзистенциальный риск', 'экзистенциалды тәуекел'), V('progress narrative', 'нарратив прогресса', 'прогресс баяны'), V('critical assessment', 'критическая оценка', 'сыни баға'), V('hype cycle', 'цикл ажиотажа', 'ажиотаж циклі'), V('adoption curve', 'кривая внедрения', 'қабылдау қисығы')],
    'questions' => [
        V('Are you generally optimistic or skeptical about new technology?', 'Вы в целом оптимистичны или скептичны насчёт новых технологий?', 'Жаңа технологияға жалпы оптимистсіз бе, әлде скептиксіз бе?'),
        V('Can you think of a technology that had unintended negative consequences?', 'Можете назвать технологию, у которой были непреднамеренные негативные последствия?', 'Күтпеген теріс салдары болған технологияны атай аласыз ба?'),
        V('Do you think we should apply the precautionary principle to new technologies?', 'Как вы думаете, следует ли применять принцип предосторожности к новым технологиям?', 'Жаңа технологияларға сақтық қағидасын қолдану керек деп ойлайсыз ба?'),
        V('Do you get caught up in the hype around new innovations?', 'Вы поддаётесь ажиотажу вокруг новых инноваций?', 'Жаңа инновациялар төңірегіндегі ажиотажға беріле кетесіз бе?'),
        V('Is the "progress narrative" of technology always accurate?', 'Всегда ли точен "нарратив прогресса" в отношении технологий?', '"Прогресс баяны" технология жайлы әрдайым дәл ме?'),
        V('What technology worries you the most about its future impact?', 'Какая технология вас больше всего беспокоит своим будущим влиянием?', 'Қандай технология болашақ әсерімен сізді ең көп алаңдатады?'),
    ],
];

$lessons[] = ['level' => 'intermediate', 'topic' => 'The Culture of Overwork in Different Countries', 'background_key' => 'professional',
    'warmup' => V("Let's talk about work culture around the world. Why do work hours and attitudes toward overwork vary so much between countries?", 'Давайте поговорим о рабочей культуре в мире. Почему рабочие часы и отношение к переработке так сильно различаются между странами?', 'Әлемдегі жұмыс мәдениеті туралы сөйлесейік. Неге жұмыс сағаттары мен артық жұмысқа деген көзқарас елдер арасында осыншалықты ерекшеленеді?'),
    'vocab' => [V('work hours', 'рабочие часы', 'жұмыс сағаттары'), V('productivity paradox', 'парадокс продуктивности', 'өнімділік парадоксы'), V('cultural norm', 'культурная норма', 'мәдени норма'), V('vacation policy', 'политика отпусков', 'демалыс саясаты'), V('presenteeism', 'презентеизм', 'презентеизм'), V('national identity', 'национальная идентичность', 'ұлттық бірегейлік'), V('labor law', 'трудовое законодательство', 'еңбек заңнамасы'), V('burnout rate', 'уровень выгорания', 'күйреу деңгейі'), V('comparative culture', 'сравнительная культура', 'салыстырмалы мәдениет'), V('quality of life', 'качество жизни', 'өмір сапасы')],
    'questions' => [
        V('Do you think your country has a healthy work culture?', 'Как вы думаете, в вашей стране здоровая рабочая культура?', 'Еліңізде сау жұмыс мәдениеті бар деп ойлайсыз ба?'),
        V('Why do you think some countries work much longer hours than others?', 'Как вы думаете, почему в некоторых странах работают намного дольше, чем в других?', 'Сіздің ойыңызша, неге кейбір елдер басқаларға қарағанда әлдеқайда ұзақ жұмыс істейді?'),
        V('Do you think working long hours actually makes people more productive?', 'Как вы думаете, работа много часов действительно делает людей продуктивнее?', 'Көп сағат жұмыс істеу адамдарды шынымен өнімдірек ете ме деп ойлайсыз ба?'),
        V('What vacation policy would you consider ideal?', 'Какую политику отпусков вы считаете идеальной?', 'Қандай демалыс саясатын идеал деп санайсыз?'),
        V('Have you ever gone to work while sick just to be seen as hardworking?', 'Вы когда-нибудь ходили на работу больным, просто чтобы показаться трудолюбивым?', 'Еңбекқор болып көріну үшін ауру кезде жұмысқа бардыңыз ба?'),
        V('Is overwork tied to national identity in your country?', 'Связана ли переработка с национальной идентичностью в вашей стране?', 'Еліңізде артық жұмыс ұлттық бірегейлікпен байланысты ма?'),
    ],
];

$lessons[] = ['level' => 'intermediate', 'topic' => 'Rewilding and Ecological Restoration', 'background_key' => 'nature',
    'warmup' => V("Let's talk about rewilding. Should humans actively restore damaged ecosystems back to their natural state?", 'Давайте поговорим о реинтродукции. Должны ли люди активно восстанавливать повреждённые экосистемы до их естественного состояния?', 'Қайта жабайыландыру туралы сөйлесейік. Адамдар зақымдалған экожүйелерді табиғи күйіне белсенді түрде қалпына келтіруі керек пе?'),
    'vocab' => [V('rewilding', 'реинтродукция', 'қайта жабайыландыру'), V('keystone species', 'ключевой вид', 'негізгі түр'), V('ecosystem services', 'экосистемные услуги', 'экожүйе қызметтері'), V('trophic cascade', 'трофический каскад', 'трофикалық каскад'), V('native habitat', 'естественная среда обитания', 'байырғы мекендеу ортасы'), V('restoration project', 'проект восстановления', 'қалпына келтіру жобасы'), V('biodiversity loss', 'потеря биоразнообразия', 'биоалуантүрліліктің жоғалуы'), V('human intervention', 'вмешательство человека', 'адам араласуы'), V('natural balance', 'природный баланс', 'табиғи тепе-теңдік'), V('conservation success', 'успех охраны природы', 'табиғатты қорғау жетістігі')],
    'questions' => [
        V('Do you think humans should actively restore damaged ecosystems?', 'Как вы думаете, люди должны активно восстанавливать повреждённые экосистемы?', 'Адамдар зақымдалған экожүйелерді белсенді түрде қалпына келтіруі керек деп ойлайсыз ба?'),
        V('Have you heard of any successful rewilding projects?', 'Вы слышали об успешных проектах реинтродукции?', 'Қандай да бір сәтті қайта жабайыландыру жобалары туралы естідіңіз бе?'),
        V('Why are keystone species so important to an ecosystem?', 'Почему ключевые виды так важны для экосистемы?', 'Негізгі түрлер экожүйе үшін неге осыншалықты маңызды?'),
        V('Do you think reintroducing predators to an area is a good idea?', 'Как вы думаете, реинтродукция хищников в определённую местность — хорошая идея?', 'Аймаққа жыртқыштарды қайта енгізу жақсы идея ма деп ойлайсыз ба?'),
        V('Should natural balance always take priority over human development?', 'Должен ли природный баланс всегда иметь приоритет над развитием человека?', 'Табиғи тепе-теңдік әрдайым адам дамуынан басым болуы керек пе?'),
        V('What would you like to see restored in nature near you?', 'Что вы хотели бы увидеть восстановленным в природе рядом с вами?', 'Жаныңыздағы табиғатта нені қалпына келтірілгенін көргіңіз келеді?'),
    ],
];

$lessons[] = ['level' => 'intermediate', 'topic' => 'The Ethics of Wealth Inheritance', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about inheriting wealth. Is it fair that some people start life with a huge financial advantage?", 'Давайте поговорим о наследовании богатства. Справедливо ли, что некоторые люди начинают жизнь с огромным финансовым преимуществом?', 'Байлықты мұралау туралы сөйлесейік. Кейбір адамдардың өмірді үлкен қаржылық артықшылықпен бастауы әділ ме?'),
    'vocab' => [V('inherited wealth', 'унаследованное богатство', 'мұраланған байлық'), V('meritocracy myth', 'миф о меритократии', 'меритократия туралы аңыз'), V('estate tax', 'налог на наследство', 'мұра салығы'), V('generational privilege', 'привилегия поколений', 'ұрпақтар артықшылығы'), V('self-made narrative', 'нарратив о самостоятельном успехе', 'өз күшімен жеткен баян'), V('wealth concentration', 'концентрация богатства', 'байлықтың шоғырлануы'), V('philanthropy', 'филантропия', 'қайырымдылық'), V('social mobility', 'социальная мобильность', 'әлеуметтік мобилділік'), V('entitlement', 'право (привилегированность)', 'құқық (артықшылық)'), V('fairness', 'справедливость', 'әділдік')],
    'questions' => [
        V('Do you think inheriting large amounts of wealth is fair?', 'Как вы думаете, наследование крупных сумм справедливо?', 'Үлкен көлемдегі байлықты мұралау әділ деп ойлайсыз ба?'),
        V('Should governments tax inheritance more heavily?', 'Должны ли правительства облагать наследство более высоким налогом?', 'Үкіметтер мұраны ауырырақ салыққа тартуы керек пе?'),
        V('Do you think the "self-made" success story is often a myth?', 'Как вы думаете, история успеха "своими силами" часто является мифом?', '"Өз күшімен жеткен" табыс тарихы жиі аңыз болады деп ойлайсыз ба?'),
        V('How does inherited wealth affect social mobility?', 'Как унаследованное богатство влияет на социальную мобильность?', 'Мұраланған байлық әлеуметтік мобилділікке қалай әсер етеді?'),
        V('Should wealthy families be expected to give more to philanthropy?', 'Должны ли богатые семьи давать больше на благотворительность?', 'Бай отбасылар қайырымдылыққа көбірек беруі керек деп күтілуі керек пе?'),
        V('Do you think inherited privilege is discussed enough in society?', 'Как вы думаете, унаследованная привилегия достаточно обсуждается в обществе?', 'Мұраланған артықшылық қоғамда жеткілікті талқыланады деп ойлайсыз ба?'),
    ],
];

$lessons[] = ['level' => 'intermediate', 'topic' => 'Digital Nomadism and Global Inequality', 'background_key' => 'night-city',
    'warmup' => V("Let's talk about digital nomads. Does remote work create unfair advantages between rich and poor countries?", 'Давайте поговорим о цифровых кочевниках. Создаёт ли удалённая работа несправедливые преимущества между богатыми и бедными странами?', 'Цифрлық көшпенділер туралы сөйлесейік. Қашықтан жұмыс бай және кедей елдер арасында әділетсіз артықшылықтар тудыра ма?'),
    'vocab' => [V('digital nomad visa', 'виза цифрового кочевника', 'цифрлық көшпенді визасы'), V('cost of living arbitrage', 'арбитраж стоимости жизни', 'өмір сүру құны арбитражы'), V('local displacement', 'вытеснение местных жителей', 'жергілікті тұрғындарды ығыстыру'), V('remote privilege', 'привилегия удалённой работы', 'қашықтан жұмыс артықшылығы'), V('gentrifying effect', 'эффект джентрификации', 'джентрификация әсері'), V('global mobility', 'глобальная мобильность', 'жаһандық мобилділік'), V('economic disparity', 'экономическое неравенство', 'экономикалық алшақтық'), V('community impact', 'влияние на сообщество', 'қауымдастыққа әсер'), V('sustainable tourism', 'устойчивый туризм', 'тұрақты туризм'), V('ethical travel', 'этичное путешествие', 'этикалық саяхат')],
    'questions' => [
        V('Have you heard of digital nomads moving to lower-cost countries?', 'Вы слышали о цифровых кочевниках, переезжающих в страны с более низкой стоимостью жизни?', 'Өмір сүру құны төмен елдерге көшетін цифрлық көшпенділер туралы естідіңіз бе?'),
        V('Do you think digital nomads can raise local costs for residents?', 'Как вы думаете, цифровые кочевники могут повышать местные цены для жителей?', 'Цифрлық көшпенділер тұрғындар үшін жергілікті бағаларды көтере алады деп ойлайсыз ба?'),
        V('Is it ethical to work remotely from a country with a much lower cost of living?', 'Этично ли работать удалённо из страны с гораздо более низкой стоимостью жизни?', 'Өмір сүру құны әлдеқайда төмен елден қашықтан жұмыс істеу этикалық ма?'),
        V('Would you consider becoming a digital nomad?', 'Вы бы рассмотрели возможность стать цифровым кочевником?', 'Цифрлық көшпенді болуды қарастырар ма едіңіз?'),
        V('How can digital nomads have a more positive impact on local communities?', 'Как цифровые кочевники могут оказывать более позитивное влияние на местные сообщества?', 'Цифрлық көшпенділер жергілікті қауымдастықтарға қалай оңтайлырақ әсер ете алады?'),
        V('Do you think remote work privilege is discussed enough?', 'Как вы думаете, привилегия удалённой работы достаточно обсуждается?', 'Қашықтан жұмыс артықшылығы жеткілікті талқыланады деп ойлайсыз ба?'),
    ],
];

$lessons[] = ['level' => 'intermediate', 'topic' => 'The Philosophy of Time Management', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about time. Is modern productivity culture actually helping us use time well?", 'Давайте поговорим о времени. Действительно ли современная культура продуктивности помогает нам хорошо использовать время?', 'Уақыт туралы сөйлесейік. Заманауи өнімділік мәдениеті уақытты жақсы пайдалануға шынымен көмектесе ме?'),
    'vocab' => [V('urgency vs importance', 'срочность против важности', 'шұғылдық пен маңыздылық'), V("Parkinson's law", 'закон Паркинсона', 'Паркинсон заңы'), V('opportunity cost', 'альтернативные издержки', 'мүмкіндік құны'), V('deep work', 'глубокая работа', 'терең жұмыс'), V('time affluence', 'изобилие времени', 'уақыт молшылығы'), V('busyness culture', 'культура занятости', 'бос еместік мәдениеті'), V('intentional living', 'осознанная жизнь', 'саналы өмір сүру'), V('productivity trap', 'ловушка продуктивности', 'өнімділік тұзағы'), V('presence', 'присутствие (в моменте)', 'осы сәтте болу'), V('rest ethic', 'этика отдыха', 'демалу этикасы')],
    'questions' => [
        V('Do you often confuse what is urgent with what is important?', 'Вы часто путаете срочное с важным?', 'Шұғылды маңыздымен жиі шатастырасыз ба?'),
        V('Do you think busyness has become a status symbol?', 'Как вы думаете, занятость стала символом статуса?', 'Бос еместік мәртебе белгісіне айналды деп ойлайсыз ба?'),
        V('Have you ever fallen into a "productivity trap" of always optimizing?', 'Вы когда-нибудь попадали в "ловушку продуктивности" постоянной оптимизации?', 'Үнемі оңтайландырудың "өнімділік тұзағына" түстіңіз бе?'),
        V('What does "time affluence" mean to you personally?', 'Что для вас лично значит "изобилие времени"?', '"Уақыт молшылығы" сіз үшін жеке нені білдіреді?'),
        V('Do you make time for deep, focused work?', 'Вы находите время для глубокой, сосредоточенной работы?', 'Терең, шоғырланған жұмысқа уақыт бөлесіз бе?'),
        V('Do you feel guilty when you rest instead of being productive?', 'Вы чувствуете вину, когда отдыхаете вместо продуктивной деятельности?', 'Өнімді болудың орнына демалғанда кінәлі сезінесіз бе?'),
    ],
];

$lessons[] = ['level' => 'intermediate', 'topic' => 'Algorithmic Bias', 'background_key' => 'night-city',
    'warmup' => V("Let's talk about algorithmic bias. Can artificial intelligence systems be unfair, even without meaning to be?", 'Давайте поговорим о предвзятости алгоритмов. Могут ли системы искусственного интеллекта быть несправедливыми, даже не желая этого?', 'Алгоритмдік бейтараптық туралы сөйлесейік. Жасанды интеллект жүйелері әдейі емес болса да, әділетсіз бола алады ма?'),
    'vocab' => [V('training data', 'обучающие данные', 'оқыту деректері'), V('discriminatory outcome', 'дискриминационный результат', 'кемсітушілік нәтижесі'), V('black box', 'чёрный ящик', 'қара жәшік'), V('fairness metric', 'метрика справедливости', 'әділдік көрсеткіші'), V('accountability gap', 'разрыв в подотчётности', 'жауапкершілік алшақтығы'), V('unintended bias', 'непреднамеренная предвзятость', 'күтпеген бейтараптық'), V('audit', 'аудит', 'аудит'), V('transparency', 'прозрачность', 'ашықтық'), V('machine learning ethics', 'этика машинного обучения', 'машиналық оқыту этикасы'), V('systemic inequality', 'системное неравенство', 'жүйелік теңсіздік')],
    'questions' => [
        V('Did you know that AI systems can be biased based on their training data?', 'Вы знали, что системы ИИ могут быть предвзятыми на основе обучающих данных?', 'ЖИ жүйелерінің оқыту деректеріне негізделген бейтараптығы болуы мүмкін екенін білдіңіз бе?'),
        V('Should AI decision-making be more transparent to the public?', 'Должно ли принятие решений ИИ быть более прозрачным для общества?', 'ЖИ шешім қабылдауы қоғам үшін ашығырақ болуы керек пе?'),
        V('Who should be held accountable when an algorithm causes harm?', 'Кто должен нести ответственность, когда алгоритм причиняет вред?', 'Алгоритм зиян келтіргенде кім жауапты болуы керек?'),
        V('Do you trust AI systems used in hiring or lending decisions?', 'Вы доверяете системам ИИ, используемым при найме или кредитовании?', 'Жалдау немесе несиелеу шешімдерінде пайдаланылатын ЖИ жүйелеріне сенесіз бе?'),
        V('Should companies be required to audit their algorithms for bias?', 'Должны ли компании быть обязаны проверять свои алгоритмы на предвзятость?', 'Компаниялар алгоритмдерін бейтараптыққа тексеруге міндетті болуы керек пе?'),
        V('Can algorithmic bias reflect and worsen existing social inequality?', 'Может ли предвзятость алгоритмов отражать и усугублять существующее социальное неравенство?', 'Алгоритмдік бейтараптық қолданыстағы әлеуметтік теңсіздікті көрсетіп, оны нашарлата ма?'),
    ],
];

$lessons[] = ['level' => 'intermediate', 'topic' => 'The Future of Human-AI Collaboration', 'background_key' => 'night-city',
    'warmup' => V("Let's talk about working alongside AI. Will artificial intelligence mostly replace human work, or augment it?", 'Давайте поговорим о работе рядом с ИИ. Будет ли искусственный интеллект в основном заменять человеческий труд или дополнять его?', 'ЖИ-мен қатар жұмыс істеу туралы сөйлесейік. Жасанды интеллект негізінен адам еңбегін алмастырады ма, әлде толықтырады ма?'),
    'vocab' => [V('augmentation vs replacement', 'дополнение против замены', 'толықтыру мен алмастыру'), V('human oversight', 'человеческий надзор', 'адам қадағалауы'), V('hybrid intelligence', 'гибридный интеллект', 'гибридті интеллект'), V('trust calibration', 'калибровка доверия', 'сенімді калибрлеу'), V('skill complementarity', 'взаимодополняемость навыков', 'дағдылардың өзара толықтыруы'), V('ethical guardrail', 'этическое ограждение', 'этикалық қорғаныс'), V('creative collaboration', 'творческое сотрудничество', 'шығармашылық ынтымақтастық'), V('decision support', 'поддержка принятия решений', 'шешім қабылдауды қолдау'), V('adaptation', 'адаптация', 'бейімделу'), V('coexistence', 'сосуществование', 'бірге өмір сүру')],
    'questions' => [
        V('Do you think AI will mostly replace jobs, or work alongside humans?', 'Как вы думаете, ИИ в основном заменит рабочие места, или будет работать рядом с людьми?', 'ЖИ негізінен жұмыс орындарын алмастырады ма, әлде адамдармен қатар жұмыс істейді ме деп ойлайсыз ба?'),
        V('Would you feel comfortable using AI as a creative collaborator?', 'Вам было бы комфортно использовать ИИ как творческого соратника?', 'ЖИ-ні шығармашылық серік ретінде пайдалану сізге ыңғайлы бола ма?'),
        V('How much human oversight should AI decisions require?', 'Сколько человеческого надзора должны требовать решения ИИ?', 'ЖИ шешімдері қаншалықты адам қадағалауын қажет етуі керек?'),
        V('What skills do you think humans will always do better than AI?', 'Какие навыки, по-вашему, люди всегда будут делать лучше ИИ?', 'Сіздің ойыңызша, адамдар қандай дағдыларды ЖИ-ден әрдайым жақсырақ жасайды?'),
        V('Do you trust AI-generated recommendations for important decisions?', 'Вы доверяете рекомендациям, сгенерированным ИИ, для важных решений?', 'Маңызды шешімдер үшін ЖИ жасаған ұсыныстарға сенесіз бе?'),
        V('What ethical guardrails do you think are necessary for AI systems?', 'Какие этические ограждения, по-вашему, необходимы для систем ИИ?', 'ЖИ жүйелері үшін қандай этикалық қорғаныстар қажет деп ойлайсыз?'),
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
