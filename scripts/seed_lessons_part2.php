<?php
declare(strict_types=1);
// Included from seed_lessons.php — shares its scope ($lessons, function V()).

// ========================= PRE-INTERMEDIATE =========================

$lessons[] = [
    'level' => 'pre-intermediate', 'topic' => 'Environment and Nature', 'background_key' => 'nature',
    'warmup' => V(
        "Let's talk about the environment. How do human actions affect nature, and what can we do to protect it?",
        'Давайте поговорим об окружающей среде. Как действия человека влияют на природу и что мы можем сделать, чтобы её защитить?',
        'Қоршаған орта туралы сөйлесейік. Адам әрекеттері табиғатқа қалай әсер етеді және оны қорғау үшін не істей аламыз?'
    ),
    'vocab' => [
        V('pollution', 'загрязнение', 'ластану'), V('recycle', 'перерабатывать', 'қайта өңдеу'), V('endangered', 'исчезающий вид', 'жойылу қаупі бар'),
        V('ecosystem', 'экосистема', 'экожүйе'), V('deforestation', 'вырубка лесов', 'орман кесу'), V('renewable', 'возобновляемый', 'жаңартылатын'),
        V('wildlife', 'дикая природа', 'жабайы табиғат'), V('conservation', 'охрана природы', 'табиғатты қорғау'),
        V('climate', 'климат', 'климат'), V('sustainability', 'устойчивое развитие', 'тұрақты даму'),
    ],
    'questions' => [
        V('What is the biggest environmental problem in your country?', 'Какая самая большая экологическая проблема в вашей стране?', 'Еліңіздегі ең үлкен экологиялық мәселе қандай?'),
        V('Do you recycle at home? Why or why not?', 'Вы перерабатываете отходы дома? Почему да или нет?', 'Үйде қалдықты қайта өңдейсіз бе? Неге ия немесе жоқ?'),
        V('What could governments do to fight climate change?', 'Что могли бы сделать правительства для борьбы с изменением климата?', 'Үкіметтер климаттың өзгеруімен күресу үшін не істей алады?'),
        V('Is it more important to protect nature or grow the economy?', 'Что важнее — защищать природу или развивать экономику?', 'Табиғатты қорғау маңызды ма, әлде экономиканы дамыту ма?'),
        V('What small changes could people make to live more sustainably?', 'Какие небольшие изменения могли бы сделать люди, чтобы жить более экологично?', 'Адамдар тұрақты өмір сүру үшін қандай кішкентай өзгерістер жасай алады?'),
        V('Should individuals or companies be more responsible for pollution?', 'Кто должен нести большую ответственность за загрязнение — люди или компании?', 'Ластану үшін жеке адамдар ма, әлде компаниялар ма көбірек жауапты болуы керек?'),
    ],
];

$lessons[] = [
    'level' => 'pre-intermediate', 'topic' => 'Friendship and Relationships', 'background_key' => 'warm',
    'warmup' => V(
        "Let's talk about friendship. What makes a good friend, and how do you keep a friendship strong?",
        'Давайте поговорим о дружбе. Что делает человека хорошим другом и как сохранить крепкую дружбу?',
        'Достық туралы сөйлесейік. Жақсы досты не істейді және достықты қалай берік ұстауға болады?'
    ),
    'vocab' => [
        V('trust', 'доверие', 'сенім'), V('loyalty', 'верность', 'адалдық'), V('conflict', 'конфликт', 'қақтығыс'),
        V('support', 'поддержка', 'қолдау'), V('honesty', 'честность', 'адалдық (шыншылдық)'), V('jealousy', 'ревность', 'қызғаныш'),
        V('communication', 'общение', 'қарым-қатынас'), V('bond', 'связь', 'байланыс'), V('forgiveness', 'прощение', 'кешірім'),
        V('companionship', 'товарищество', 'жолдастық'),
    ],
    'questions' => [
        V('What qualities do you value most in a friend?', 'Какие качества вы больше всего цените в друге?', 'Досыңызда ең бағалайтын қасиеттер қандай?'),
        V('Have you ever had a conflict with a close friend? How did you solve it?', 'У вас когда-нибудь был конфликт с близким другом? Как вы его решили?', 'Жақын досыңызбен қақтығысыңыз болды ма? Оны қалай шештіңіз?'),
        V('Do you think it is possible to stay friends with someone forever?', 'Как вы думаете, возможно ли оставаться друзьями с кем-то навсегда?', 'Біреумен мәңгі дос болып қалу мүмкін бе деп ойлайсыз?'),
        V('Is it easy or hard for you to trust new people? Why?', 'Вам легко или трудно доверять новым людям? Почему?', 'Жаңа адамдарға сену сізге оңай ма, әлде қиын ба? Неге?'),
        V('How has social media changed the way people make friends?', 'Как социальные сети изменили то, как люди заводят друзей?', 'Әлеуметтік желілер адамдардың дос табу тәсілін қалай өзгертті?'),
        V('Would you rather have a few close friends or many casual friends?', 'Вы бы предпочли иметь несколько близких друзей или много обычных знакомых?', 'Бірнеше жақын дос болғанды қалайсыз ба, әлде көптеген таныс адамдар ма?'),
    ],
];

$lessons[] = [
    'level' => 'pre-intermediate', 'topic' => 'Movies and Entertainment', 'background_key' => 'night-city',
    'warmup' => V(
        "Let's talk about movies and entertainment. What kind of movies do you enjoy, and why?",
        'Давайте поговорим о кино и развлечениях. Какие фильмы вам нравятся и почему?',
        'Кино мен ойын-сауық туралы сөйлесейік. Сізге қандай фильмдер ұнайды және неге?'
    ),
    'vocab' => [
        V('genre', 'жанр', 'жанр'), V('plot', 'сюжет', 'сюжет'), V('actor', 'актёр', 'актёр'), V('director', 'режиссёр', 'режиссёр'),
        V('soundtrack', 'саундтрек', 'саундтрек'), V('blockbuster', 'блокбастер', 'блокбастер'), V('sequel', 'продолжение', 'жалғасы'),
        V('audience', 'зрители', 'көрермендер'), V('review', 'рецензия', 'пікір'), V('streaming', 'стриминг', 'стриминг'),
    ],
    'questions' => [
        V('What genre of movie do you enjoy the most? Why?', 'Какой жанр фильмов вам нравится больше всего? Почему?', 'Қай жанрдағы фильмдерді көбірек ұнатасыз? Неге?'),
        V('Do you read reviews before watching a movie?', 'Вы читаете рецензии перед просмотром фильма?', 'Фильм көрмес бұрын пікірлерді оқисыз ба?'),
        V('Do you prefer watching movies at the cinema or streaming at home?', 'Вы предпочитаете смотреть фильмы в кино или дома через стриминг?', 'Фильмдерді кинотеатрда көргенді ұнатасыз ба, әлде үйде стриминг арқылы ма?'),
        V('Who is your favorite actor or director? Why?', 'Кто ваш любимый актёр или режиссёр? Почему?', 'Сүйікті актёріңіз немесе режиссёріңіз кім? Неге?'),
        V('Do you think sequels are usually as good as the original movie?', 'Как вы думаете, продолжения обычно так же хороши, как оригинальный фильм?', 'Жалғас фильмдер әдетте түпнұсқа фильмдей жақсы деп ойлайсыз ба?'),
        V('How has streaming changed the way people watch entertainment?', 'Как стриминг изменил то, как люди смотрят развлекательный контент?', 'Стриминг адамдардың ойын-сауық көру тәсілін қалай өзгертті?'),
    ],
];

$lessons[] = [
    'level' => 'pre-intermediate', 'topic' => 'Social Media', 'background_key' => 'night-city',
    'warmup' => V(
        "Let's talk about social media. How does it affect your daily life and relationships?",
        'Давайте поговорим о социальных сетях. Как они влияют на вашу повседневную жизнь и отношения?',
        'Әлеуметтік желілер туралы сөйлесейік. Олар күнделікті өміріңіз бен қарым-қатынасыңызға қалай әсер етеді?'
    ),
    'vocab' => [
        V('platform', 'платформа', 'платформа'), V('influencer', 'инфлюенсер', 'инфлюенсер'), V('post', 'публикация', 'жазба'),
        V('follower', 'подписчик', 'жазылушы'), V('privacy', 'конфиденциальность', 'құпиялылық'), V('addiction', 'зависимость', 'тәуелділік'),
        V('algorithm', 'алгоритм', 'алгоритм'), V('trend', 'тренд', 'үрдіс'), V('comment', 'комментарий', 'пікір (комментарий)'),
        V('notification', 'уведомление', 'хабарландыру'),
    ],
    'questions' => [
        V('How many hours a day do you spend on social media?', 'Сколько часов в день вы проводите в соцсетях?', 'Күніне әлеуметтік желіде неше сағат өткізесіз?'),
        V('Do you think social media does more good or more harm?', 'Как вы думаете, соцсети приносят больше пользы или вреда?', 'Әлеуметтік желі көбірек пайда әкеле ме, әлде зиян ба деп ойлайсыз?'),
        V('Have you ever taken a break from social media? How did it feel?', 'Вы когда-нибудь брали перерыв от соцсетей? Каково это было?', 'Әлеуметтік желіден демалыс алдыңыз ба? Қандай сезім болды?'),
        V('Do you worry about your privacy online?', 'Вас беспокоит конфиденциальность в интернете?', 'Интернеттегі құпиялылығыңыз сізді алаңдатады ма?'),
        V('Why do you think influencer culture has become so popular?', 'Как вы думаете, почему культура инфлюенсеров стала такой популярной?', 'Инфлюенсерлер мәдениеті неге осылай танымал болды деп ойлайсыз?'),
        V('Should there be age limits for using social media? Why?', 'Должны ли быть возрастные ограничения для использования соцсетей? Почему?', 'Әлеуметтік желіні пайдалануға жас шектеуі болуы керек пе? Неге?'),
    ],
];

$lessons[] = [
    'level' => 'pre-intermediate', 'topic' => 'Money and Shopping Habits', 'background_key' => 'professional',
    'warmup' => V(
        "Let's talk about money. How do you manage your money, and what are your spending habits?",
        'Давайте поговорим о деньгах. Как вы управляете своими деньгами и какие у вас привычки трат?',
        'Ақша туралы сөйлесейік. Ақшаңызды қалай басқарасыз және жұмсау әдеттеріңіз қандай?'
    ),
    'vocab' => [
        V('budget', 'бюджет', 'бюджет'), V('save', 'копить', 'жинау'), V('spend', 'тратить', 'жұмсау'),
        V('debt', 'долг', 'борыш'), V('income', 'доход', 'табыс'), V('investment', 'инвестиция', 'инвестиция'),
        V('impulse buy', 'спонтанная покупка', 'жедел сатып алу'), V('loan', 'кредит', 'несие'),
        V('luxury', 'роскошь', 'сән-салтанат'), V('discount', 'скидка', 'жеңілдік'),
    ],
    'questions' => [
        V('Do you usually plan a budget, or spend without planning?', 'Вы обычно планируете бюджет или тратите без плана?', 'Әдетте бюджет жоспарлайсыз ба, әлде жоспарсыз жұмсайсыз ба?'),
        V('What is the most useful thing you ever bought?', 'Какая самая полезная вещь, которую вы когда-либо покупали?', 'Сатып алған ең пайдалы затыңыз қандай?'),
        V('Have you ever regretted an impulse purchase?', 'Вы когда-нибудь жалели о спонтанной покупке?', 'Жедел сатып алғаныңызға өкінгеніңіз болды ма?'),
        V('Do you prefer saving money or spending it on experiences?', 'Вы предпочитаете копить деньги или тратить их на впечатления?', 'Ақша жинағанды ұнатасыз ба, әлде оны әсерлерге жұмсағанды ма?'),
        V('Is it a good idea to borrow money to buy something you want?', 'Хорошая ли идея занимать деньги, чтобы купить желаемое?', 'Қалаған затты сатып алу үшін ақша қарызға алу жақсы идея ма?'),
        V('What does financial security mean to you?', 'Что для вас значит финансовая безопасность?', 'Қаржылық қауіпсіздік сіз үшін нені білдіреді?'),
    ],
];

$lessons[] = [
    'level' => 'pre-intermediate', 'topic' => 'Education Systems', 'background_key' => 'professional',
    'warmup' => V(
        "Let's talk about education. What do you think makes a good school or university?",
        'Давайте поговорим об образовании. Что, по-вашему, делает школу или университет хорошими?',
        'Білім беру туралы сөйлесейік. Сіздің ойыңызша, мектеп немесе университетті жақсы ететін не?'
    ),
    'vocab' => [
        V('curriculum', 'учебная программа', 'оқу бағдарламасы'), V('exam', 'экзамен', 'емтихан'), V('scholarship', 'стипендия', 'степендия'),
        V('discipline', 'дисциплина', 'тәртіп'), V('lecture', 'лекция', 'дәріс'), V('graduate', 'выпускник', 'түлек'),
        V('tuition', 'плата за обучение', 'оқу ақысы'), V('classmate', 'одноклассник', 'сыныптас'),
        V('syllabus', 'программа курса', 'курс бағдарламасы'), V('homeschooling', 'домашнее обучение', 'үйде оқыту'),
    ],
    'questions' => [
        V('What do you think is the biggest problem in education today?', 'Как вы думаете, какая самая большая проблема в образовании сегодня?', 'Сіздің ойыңызша, бүгінгі білім берудегі ең үлкен мәселе қандай?'),
        V('Do you prefer learning through lectures or hands-on practice?', 'Вы предпочитаете учиться через лекции или практику?', 'Дәріс арқылы оқығанды ұнатасыз ба, әлде іс-тәжірибе арқылы ма?'),
        V('Should university education be free? Why or why not?', 'Должно ли высшее образование быть бесплатным? Почему да или нет?', 'Университеттік білім тегін болуы керек пе? Неге ия немесе жоқ?'),
        V('What is the most useful thing you learned at school?', 'Что самое полезное вы узнали в школе?', 'Мектепте үйренген ең пайдалы нәрсеңіз не?'),
        V('Do exams really show how much a student has learned?', 'Действительно ли экзамены показывают, сколько выучил студент?', 'Емтихандар студенттің қаншалықты үйренгенін шынымен көрсете ме?'),
        V('What do you think about homeschooling compared to regular school?', 'Что вы думаете о домашнем обучении по сравнению с обычной школой?', 'Үйде оқыту мен әдеттегі мектепті салыстырғанда не ойлайсыз?'),
    ],
];

$lessons[] = [
    'level' => 'pre-intermediate', 'topic' => 'Culture and Traditions', 'background_key' => 'warm',
    'warmup' => V(
        "Let's talk about culture. What traditions are important in your family or country?",
        'Давайте поговорим о культуре. Какие традиции важны в вашей семье или стране?',
        'Мәдениет туралы сөйлесейік. Отбасыңызда немесе еліңізде қандай дәстүрлер маңызды?'
    ),
    'vocab' => [
        V('heritage', 'наследие', 'мұра'), V('custom', 'обычай', 'әдет-ғұрып'), V('ritual', 'ритуал', 'ғұрып'),
        V('ceremony', 'церемония', 'салтанат'), V('folklore', 'фольклор', 'фольклор'), V('ancestor', 'предок', 'ата-баба'),
        V('identity', 'идентичность', 'бірегейлік'), V('celebration', 'празднование', 'мереке тойлау'),
        V('diversity', 'разнообразие', 'әртүрлілік'), V('festival', 'фестиваль', 'фестиваль'),
    ],
    'questions' => [
        V('What tradition from your culture do you value most?', 'Какую традицию вашей культуры вы цените больше всего?', 'Мәдениетіңіздегі ең бағалайтын дәстүрлі не?'),
        V('Do you think traditions should change with time, or stay the same?', 'Как вы думаете, традиции должны меняться со временем или оставаться прежними?', 'Дәстүрлер уақыт өте өзгеруі керек пе, әлде бұрынғыдай қалуы керек пе деп ойлайсыз?'),
        V('What can people learn by exploring different cultures?', 'Что люди могут узнать, изучая разные культуры?', 'Адамдар әртүрлі мәдениеттерді зерттеу арқылы не үйрене алады?'),
        V('Is there a custom from another culture that you find interesting?', 'Есть ли обычай другой культуры, который кажется вам интересным?', 'Басқа мәдениеттің қызықты көрінетін әдет-ғұрпы бар ма?'),
        V('How important is cultural identity to you personally?', 'Насколько важна для вас лично культурная идентичность?', 'Мәдени бірегейлік жеке сіз үшін қаншалықты маңызды?'),
        V('Do you think globalization is making cultures more similar?', 'Как вы думаете, глобализация делает культуры более похожими?', 'Жаһандану мәдениеттерді бір-біріне ұқсас ете ме деп ойлайсыз?'),
    ],
];

$lessons[] = [
    'level' => 'pre-intermediate', 'topic' => 'Dreams and Ambitions', 'background_key' => 'minimal-dark',
    'warmup' => V(
        "Let's talk about dreams and ambitions. What do you hope to achieve in the future?",
        'Давайте поговорим о мечтах и амбициях. Чего вы надеетесь достичь в будущем?',
        'Арман мен мақсаттар туралы сөйлесейік. Болашақта неге жетуді армандайсыз?'
    ),
    'vocab' => [
        V('goal', 'цель', 'мақсат'), V('determination', 'решимость', 'табандылық'), V('obstacle', 'препятствие', 'кедергі'),
        V('success', 'успех', 'жетістік'), V('failure', 'неудача', 'сәтсіздік'), V('motivation', 'мотивация', 'ынта'),
        V('potential', 'потенциал', 'әлеует'), V('aspiration', 'стремление', 'ұмтылыс'), V('achievement', 'достижение', 'жетістік (нәтиже)'),
        V('perseverance', 'настойчивость', 'табандылық (қайсарлық)'),
    ],
    'questions' => [
        V('What is your biggest dream for the future?', 'Какая ваша главная мечта на будущее?', 'Болашаққа деген ең үлкен арманыңыз қандай?'),
        V('What obstacles have you faced while chasing a goal?', 'С какими препятствиями вы сталкивались, стремясь к цели?', 'Мақсатыңызға жету жолында қандай кедергілерге тап болдыңыз?'),
        V('Do you think failure can help a person succeed later?', 'Как вы думаете, неудача может помочь человеку добиться успеха позже?', 'Сәтсіздік адамға кейін жетістікке жетуге көмектесе ме деп ойлайсыз?'),
        V('What motivates you to keep working toward your goals?', 'Что мотивирует вас продолжать работать над своими целями?', 'Мақсаттарыңызға жету үшін жұмыс істеуге не итермелейді?'),
        V('Would you rather have a safe job or chase a risky dream?', 'Вы бы предпочли надёжную работу или рискованную мечту?', 'Қауіпсіз жұмысты қалайсыз ба, әлде тәуекелді арманды қуғанды ма?'),
        V('How do you define success for yourself?', 'Как вы определяете успех для себя?', 'Өзіңіз үшін жетістікті қалай анықтайсыз?'),
    ],
];

$lessons[] = [
    'level' => 'pre-intermediate', 'topic' => 'Crime and Safety', 'background_key' => 'minimal-dark',
    'warmup' => V(
        "Let's talk about safety. What makes a place feel safe, and what worries people about crime?",
        'Давайте поговорим о безопасности. Что делает место безопасным и что беспокоит людей насчёт преступности?',
        'Қауіпсіздік туралы сөйлесейік. Орынды қауіпсіз ететін не және адамдарды қылмыс туралы не алаңдатады?'
    ),
    'vocab' => [
        V('theft', 'кража', 'ұрлық'), V('security', 'безопасность', 'қауіпсіздік'), V('witness', 'свидетель', 'куә'),
        V('evidence', 'доказательство', 'дәлел'), V('punishment', 'наказание', 'жаза'), V('victim', 'жертва', 'құрбан'),
        V('law', 'закон', 'заң'), V('justice', 'справедливость', 'әділеттілік'), V('prevention', 'предотвращение', 'алдын алу'),
        V('alarm', 'сигнализация', 'дабыл'),
    ],
    'questions' => [
        V('Do you feel safe in the area where you live?', 'Вы чувствуете себя в безопасности в районе, где живёте?', 'Тұратын аймағыңызда өзіңізді қауіпсіз сезінесіз бе?'),
        V('What could be done to prevent crime in cities?', 'Что можно сделать, чтобы предотвратить преступность в городах?', 'Қалаларда қылмысты болдырмау үшін не істеуге болады?'),
        V('Do you think punishments for crimes are usually fair?', 'Как вы думаете, наказания за преступления обычно справедливы?', 'Қылмыс үшін жазалар әдетте әділ деп ойлайсыз ба?'),
        V('Have you ever witnessed something you thought was unsafe?', 'Вы когда-нибудь были свидетелем чего-то, что казалось вам небезопасным?', 'Қауіпсіз емес деп ойлаған бір нәрсенің куәсі болдыңыз ба?'),
        V('What role should technology play in keeping people safe?', 'Какую роль должна играть технология в обеспечении безопасности людей?', 'Адамдардың қауіпсіздігін сақтауда технология қандай рөл атқаруы керек?'),
        V('Is it better to focus on punishment or prevention? Why?', 'Что лучше — сосредоточиться на наказании или на предотвращении? Почему?', 'Жазаға назар аударған дұрыс па, әлде алдын алуға ма? Неге?'),
    ],
];

$lessons[] = [
    'level' => 'pre-intermediate', 'topic' => 'Travel Experiences Abroad', 'background_key' => 'energetic',
    'warmup' => V(
        "Let's talk about traveling abroad. What has been your most memorable experience in another country?",
        'Давайте поговорим о путешествиях за границу. Какой у вас самый запоминающийся опыт в другой стране?',
        'Шетелге саяхаттау туралы сөйлесейік. Басқа елдегі ең есте қалатын тәжірибеңіз қандай болды?'
    ),
    'vocab' => [
        V('culture shock', 'культурный шок', 'мәдени шок'), V('itinerary', 'маршрут', 'бағыт-жоспар'), V('backpacking', 'путешествие с рюкзаком', 'рюкзакпен саяхаттау'),
        V('visa', 'виза', 'виза'), V('currency exchange', 'обмен валюты', 'валюта айырбастау'), V('souvenir', 'сувенир', 'сувенир'),
        V('local cuisine', 'местная кухня', 'жергілікті ас мәзірі'), V('adventure', 'приключение', 'шытырман оқиға'),
        V('hostel', 'хостел', 'хостел'), V('landmark', 'достопримечательность', 'көрікті жер'),
    ],
    'questions' => [
        V('Have you ever traveled to another country? What was it like?', 'Вы когда-нибудь путешествовали в другую страну? Каково это было?', 'Басқа елге саяхаттадыңыз ба? Ол қалай болды?'),
        V('Have you ever experienced culture shock? What surprised you?', 'Вы когда-нибудь испытывали культурный шок? Что вас удивило?', 'Мәдени шок сезіндіңіз бе? Сізді не таңғалдырды?'),
        V('Do you prefer planning every detail of a trip or traveling spontaneously?', 'Вы предпочитаете планировать каждую деталь поездки или путешествовать спонтанно?', 'Сапардың әр бөлшегін жоспарлағанды ұнатасыз ба, әлде кенеттен саяхаттағанды ма?'),
        V('What local food would you like to try in another country?', 'Какую местную еду вы хотели бы попробовать в другой стране?', 'Басқа елде қандай жергілікті тағамды татып көргіңіз келеді?'),
        V('Would you rather stay in a hostel or a hotel while traveling? Why?', 'Вы бы предпочли остановиться в хостеле или в отеле во время путешествия? Почему?', 'Саяхат кезінде хостелде тұрғанды қалайсыз ба, әлде қонақүйде ме? Неге?'),
        V('What can traveling teach a person that staying at home cannot?', 'Чему может научить путешествие, чему не может научить пребывание дома?', 'Саяхат адамға үйде отырып үйренуге болмайтын нені үйрете алады?'),
    ],
];

// ========================= INTERMEDIATE =========================

$lessons[] = [
    'level' => 'intermediate', 'topic' => 'Globalization', 'background_key' => 'professional',
    'warmup' => V(
        "Let's talk about globalization. How has an increasingly connected world changed the way we live, work and trade?",
        'Давайте поговорим о глобализации. Как всё более взаимосвязанный мир изменил то, как мы живём, работаем и торгуем?',
        'Жаһандану туралы сөйлесейік. Барған сайын өзара байланысты әлем біздің өмір сүру, жұмыс істеу және сауда жасау тәсілімізді қалай өзгертті?'
    ),
    'vocab' => [
        V('interconnected', 'взаимосвязанный', 'өзара байланысты'), V('multinational', 'многонациональный', 'көпұлтты'),
        V('outsourcing', 'аутсорсинг', 'аутсорсинг'), V('tariff', 'тариф', 'тариф'), V('cultural homogenization', 'культурная унификация', 'мәдени біртектілену'),
        V('supply chain', 'цепочка поставок', 'жеткізу тізбегі'), V('trade agreement', 'торговое соглашение', 'сауда келісімі'),
        V('economic interdependence', 'экономическая взаимозависимость', 'экономикалық өзара тәуелділік'), V('migration', 'миграция', 'көші-қон'),
        V('global market', 'мировой рынок', 'әлемдік нарық'),
    ],
    'questions' => [
        V('Do you think globalization has done more good or more harm overall?', 'Как вы думаете, глобализация принесла больше пользы или вреда в целом?', 'Жаһандану жалпы алғанда көбірек пайда әкелді ме, әлде зиян ба деп ойлайсыз?'),
        V('How has globalization changed the culture in your country?', 'Как глобализация изменила культуру в вашей стране?', 'Жаһандану еліңіздегі мәдениетті қалай өзгертті?'),
        V('Should countries protect local industries from foreign competition?', 'Должны ли страны защищать местную промышленность от иностранной конкуренции?', 'Елдер жергілікті өнеркәсіпті шетелдік бәсекелестіктен қорғауы керек пе?'),
        V('What are the risks of relying on a global supply chain?', 'Какие риски связаны с зависимостью от глобальной цепочки поставок?', 'Жаһандық жеткізу тізбегіне тәуелді болудың қандай тәуекелдері бар?'),
        V('Is cultural homogenization something we should worry about? Why?', 'Стоит ли беспокоиться о культурной унификации? Почему?', 'Мәдени біртектілену туралы алаңдау керек пе? Неге?'),
        V('How does globalization affect ordinary workers versus large companies?', 'Как глобализация влияет на обычных работников по сравнению с крупными компаниями?', 'Жаһандану қарапайым қызметкерлерге және ірі компанияларға қалай әсер етеді?'),
    ],
];

$lessons[] = [
    'level' => 'intermediate', 'topic' => 'Artificial Intelligence and the Future', 'background_key' => 'night-city',
    'warmup' => V(
        "Let's talk about artificial intelligence. How is AI changing our lives, and what does the future hold?",
        'Давайте поговорим об искусственном интеллекте. Как ИИ меняет нашу жизнь и что нас ждёт в будущем?',
        'Жасанды интеллект туралы сөйлесейік. ЖИ өміріміз қалай өзгертіп жатыр және болашақта не күтіп тұр?'
    ),
    'vocab' => [
        V('automation', 'автоматизация', 'автоматтандыру'), V('machine learning', 'машинное обучение', 'машиналық оқыту'),
        V('ethical dilemma', 'этическая дилемма', 'этикалық дилемма'), V('innovation', 'инновация', 'инновация'),
        V('artificial intelligence', 'искусственный интеллект', 'жасанды интеллект'), V('workforce disruption', 'нарушение рынка труда', 'еңбек нарығының бұзылуы'),
        V('data privacy', 'конфиденциальность данных', 'деректер құпиялылығы'), V('singularity', 'сингулярность', 'сингулярлық'),
        V('augmented reality', 'дополненная реальность', 'толықтырылған шындық'), V('algorithm', 'алгоритм', 'алгоритм'),
    ],
    'questions' => [
        V('Do you think AI will create more jobs than it destroys, or the opposite?', 'Как вы думаете, ИИ создаст больше рабочих мест, чем уничтожит, или наоборот?', 'ЖИ жойғаннан гөрі көбірек жұмыс орнын жасайды деп ойлайсыз ба, әлде керісінше ме?'),
        V('What ethical dilemmas do you think AI development raises?', 'Какие этические дилеммы, по-вашему, поднимает развитие ИИ?', 'ЖИ дамуы қандай этикалық дилеммалар тудырады деп ойлайсыз?'),
        V('How comfortable are you with AI making decisions that affect your life?', 'Насколько вам комфортно, что ИИ принимает решения, влияющие на вашу жизнь?', 'ЖИ өміріңізге әсер ететін шешімдер қабылдауы сізге қаншалықты ыңғайлы?'),
        V('Should there be international laws to regulate artificial intelligence?', 'Должны ли быть международные законы для регулирования искусственного интеллекта?', 'Жасанды интеллектті реттеу үшін халықаралық заңдар болуы керек пе?'),
        V('What jobs do you think are safest from automation?', 'Какие профессии, по-вашему, наиболее защищены от автоматизации?', 'Автоматтандырудан ең қауіпсіз жұмыстар қандай деп ойлайсыз?'),
        V('Do you trust AI systems with your personal data? Why or why not?', 'Доверяете ли вы системам ИИ свои личные данные? Почему да или нет?', 'ЖИ жүйелеріне жеке деректеріңізді сенесіз бе? Неге ия немесе жоқ?'),
    ],
];

$lessons[] = [
    'level' => 'intermediate', 'topic' => 'Mental Health and Wellbeing', 'background_key' => 'minimal-dark',
    'warmup' => V(
        "Let's talk about mental health. How do people manage stress and take care of their emotional wellbeing?",
        'Давайте поговорим о психическом здоровье. Как люди справляются со стрессом и заботятся о своём эмоциональном благополучии?',
        'Психикалық денсаулық туралы сөйлесейік. Адамдар күйзелісті қалай жеңеді және эмоционалды әл-ауқатына қалай қамқорлық жасайды?'
    ),
    'vocab' => [
        V('anxiety', 'тревога', 'мазасыздық'), V('resilience', 'устойчивость', 'төзімділік'), V('therapy', 'терапия', 'терапия'),
        V('self-care', 'забота о себе', 'өзіне қамқорлық'), V('mindfulness', 'осознанность', 'зейін сақтау'),
        V('stigma', 'стигма', 'стигма'), V('emotional intelligence', 'эмоциональный интеллект', 'эмоционалды интеллект'),
        V('stress management', 'управление стрессом', 'күйзелісті басқару'), V('wellbeing', 'благополучие', 'әл-ауқат'),
        V('burnout', 'выгорание', 'күйреу (эмоционалды)'),
    ],
    'questions' => [
        V('What do you do to manage stress in your daily life?', 'Что вы делаете, чтобы справляться со стрессом в повседневной жизни?', 'Күнделікті өмірде күйзелісті қалай басқарасыз?'),
        V('Do you think there is still a stigma around talking about mental health?', 'Как вы думаете, всё ещё существует стигма вокруг разговоров о психическом здоровье?', 'Психикалық денсаулық туралы сөйлесу төңірегінде стигма әлі бар деп ойлайсыз ба?'),
        V('Have you ever felt burned out? What caused it?', 'Вы когда-нибудь чувствовали выгорание? Что его вызвало?', 'Эмоционалды күйреуді сезіндіңіз бе? Оның себебі не болды?'),
        V('What role should schools and workplaces play in mental health support?', 'Какую роль должны играть школы и рабочие места в поддержке психического здоровья?', 'Мектептер мен жұмыс орындары психикалық денсаулықты қолдауда қандай рөл атқаруы керек?'),
        V('Is it easy for you to ask for help when you are struggling?', 'Легко ли вам просить о помощи, когда вам тяжело?', 'Қиналған кезде көмек сұрау сізге оңай ма?'),
        V('What does a healthy work-life balance mean to you?', 'Что для вас значит здоровый баланс между работой и личной жизнью?', 'Сау жұмыс пен өмір теңгерімі сіз үшін нені білдіреді?'),
    ],
];

$lessons[] = [
    'level' => 'intermediate', 'topic' => 'Work-Life Balance', 'background_key' => 'minimal-dark',
    'warmup' => V(
        "Let's talk about work-life balance. How do people balance their careers with the rest of their lives?",
        'Давайте поговорим о балансе между работой и личной жизнью. Как люди совмещают карьеру с остальной жизнью?',
        'Жұмыс пен өмір теңгерімі туралы сөйлесейік. Адамдар мансабын өмірінің қалған бөлігімен қалай теңестіреді?'
    ),
    'vocab' => [
        V('deadline', 'дедлайн', 'мерзім'), V('overtime', 'сверхурочные', 'үстеме сағат'), V('flexibility', 'гибкость', 'икемділік'),
        V('remote work', 'удалённая работа', 'қашықтан жұмыс'), V('productivity', 'продуктивность', 'өнімділік'),
        V('workload', 'рабочая нагрузка', 'жұмыс жүктемесі'), V('prioritize', 'расставлять приоритеты', 'басымдық белгілеу'),
        V('downtime', 'время отдыха', 'бос уақыт (демалыс)'), V('work ethic', 'трудовая этика', 'еңбек этикасы'),
        V('boundaries', 'личные границы', 'шекаралар'),
    ],
    'questions' => [
        V('Do you think you currently have a good work-life balance?', 'Как вы думаете, у вас сейчас хороший баланс между работой и жизнью?', 'Қазір жұмыс пен өмір теңгеріміңіз жақсы деп ойлайсыз ба?'),
        V('Should employees be expected to answer emails outside working hours?', 'Должны ли сотрудники отвечать на письма вне рабочего времени?', 'Қызметкерлер жұмыс уақытынан тыс хаттарға жауап беруі керек деп күтуге бола ма?'),
        V('How do you set boundaries between work and personal life?', 'Как вы устанавливаете границы между работой и личной жизнью?', 'Жұмыс пен жеке өмір арасында шекараларды қалай белгілейсіз?'),
        V('Do you think remote work has improved or worsened work-life balance?', 'Как вы думаете, удалённая работа улучшила или ухудшила баланс работы и жизни?', 'Қашықтан жұмыс жұмыс пен өмір теңгерімін жақсартты ма, әлде нашарлатты ма деп ойлайсыз?'),
        V('What would you change about your current work schedule if you could?', 'Что бы вы изменили в своём текущем рабочем графике, если бы могли?', 'Мүмкіндігіңіз болса, қазіргі жұмыс кестеңізде нені өзгертер едіңіз?'),
        V('Is ambition at work worth sacrificing personal time for? Why?', 'Стоит ли амбиции на работе жертвы личным временем? Почему?', 'Жұмыстағы талпыныс жеке уақытты құрбан етуге тұрарлық па? Неге?'),
    ],
];

$lessons[] = [
    'level' => 'intermediate', 'topic' => 'Climate Change', 'background_key' => 'nature',
    'warmup' => V(
        "Let's talk about climate change. What are its biggest causes and consequences, and what can be done about it?",
        'Давайте поговорим об изменении климата. Каковы его главные причины и последствия, и что можно с этим сделать?',
        'Климаттың өзгеруі туралы сөйлесейік. Оның ең үлкен себептері мен салдары қандай және не істеуге болады?'
    ),
    'vocab' => [
        V('carbon footprint', 'углеродный след', 'көміртегі ізі'), V('greenhouse gas', 'парниковый газ', 'парник газы'),
        V('sea level rise', 'повышение уровня моря', 'теңіз деңгейінің көтерілуі'), V('fossil fuel', 'ископаемое топливо', 'қазба отын'),
        V('renewable energy', 'возобновляемая энергия', 'жаңартылатын энергия'), V('biodiversity', 'биоразнообразие', 'биоалуантүрлілік'),
        V('drought', 'засуха', 'құрғақшылық'), V('emission', 'выброс', 'шығарынды'), V('global warming', 'глобальное потепление', 'жаһандық жылыну'),
        V('sustainability', 'устойчивое развитие', 'тұрақты даму'),
    ],
    'questions' => [
        V('What worries you most about climate change?', 'Что вас больше всего беспокоит в связи с изменением климата?', 'Климаттың өзгеруі туралы сізді ең көп не алаңдатады?'),
        V('Do you try to reduce your own carbon footprint? How?', 'Вы стараетесь уменьшить свой углеродный след? Как?', 'Өзіңіздің көміртегі ізіңізді азайтуға тырысасыз ба? Қалай?'),
        V('Should wealthy countries do more to fight climate change than poorer ones?', 'Должны ли богатые страны делать больше для борьбы с изменением климата, чем бедные?', 'Бай елдер климаттың өзгеруімен күресуде кедей елдерге қарағанда көбірек істеуі керек пе?'),
        V('Do you think individuals can really make a difference, or is it up to governments?', 'Как вы думаете, могут ли отдельные люди реально что-то изменить, или это дело правительств?', 'Жеке адамдар шынымен өзгеріс жасай алады ма, әлде бұл үкіметтердің ісі ме деп ойлайсыз?'),
        V('What renewable energy source do you think has the most potential?', 'Какой источник возобновляемой энергии, по-вашему, имеет наибольший потенциал?', 'Сіздің ойыңызша, қандай жаңартылатын энергия көзінің әлеуеті ең зор?'),
        V('How might climate change affect the place where you live in the future?', 'Как изменение климата может повлиять на место, где вы живёте, в будущем?', 'Климаттың өзгеруі болашақта сіз тұратын жерге қалай әсер етуі мүмкін?'),
    ],
];

$lessons[] = [
    'level' => 'intermediate', 'topic' => 'Media and Misinformation', 'background_key' => 'night-city',
    'warmup' => V(
        "Let's talk about media and misinformation. How do you decide what news to trust?",
        'Давайте поговорим о медиа и дезинформации. Как вы решаете, каким новостям доверять?',
        'Медиа мен жалған ақпарат туралы сөйлесейік. Қай жаңалыққа сенуді қалай шешесіз?'
    ),
    'vocab' => [
        V('bias', 'предвзятость', 'бейтараптылықтың жоқтығы'), V('fake news', 'фейковые новости', 'жалған жаңалық'),
        V('credibility', 'достоверность', 'сенімділік'), V('propaganda', 'пропаганда', 'насихат'),
        V('fact-check', 'проверка фактов', 'фактіні тексеру'), V('headline', 'заголовок', 'айдар'),
        V('journalism', 'журналистика', 'журналистика'), V('censorship', 'цензура', 'цензура'),
        V('echo chamber', 'информационный пузырь', 'ақпараттық көпір (жаңғырық камерасы)'), V('source', 'источник', 'дереккөз'),
    ],
    'questions' => [
        V('How do you check whether a news story is true?', 'Как вы проверяете, правдива ли новость?', 'Жаңалықтың шын екенін қалай тексересіз?'),
        V('Do you think social media has made misinformation worse?', 'Как вы думаете, соцсети усугубили проблему дезинформации?', 'Әлеуметтік желі жалған ақпарат мәселесін ушықтырды деп ойлайсыз ба?'),
        V('Should governments be allowed to censor certain information? Why or why not?', 'Должны ли правительства иметь право цензурировать определённую информацию? Почему да или нет?', 'Үкіметтерге белгілі бір ақпаратқа цензура жасауға рұқсат етілуі керек пе? Неге ия немесе жоқ?'),
        V('Do you think you live in an echo chamber of similar opinions?', 'Как вы думаете, живёте ли вы в информационном пузыре похожих мнений?', 'Ұқсас пікірлердің ақпараттық көпірінде өмір сүресіз бе деп ойлайсыз ба?'),
        V('What responsibility do journalists have to the public?', 'Какую ответственность несут журналисты перед обществом?', 'Журналистердің қоғам алдында қандай жауапкершілігі бар?'),
        V('How can schools teach people to spot fake news?', 'Как школы могут научить людей распознавать фейковые новости?', 'Мектептер адамдарды жалған жаңалықты тануға қалай үйрете алады?'),
    ],
];

$lessons[] = [
    'level' => 'intermediate', 'topic' => 'Cultural Identity', 'background_key' => 'warm',
    'warmup' => V(
        "Let's talk about cultural identity. How does your background shape who you are?",
        'Давайте поговорим о культурной идентичности. Как ваше происхождение формирует то, кто вы есть?',
        'Мәдени бірегейлік туралы сөйлесейік. Тегіңіз сіздің кім екеніңізді қалай қалыптастырады?'
    ),
    'vocab' => [
        V('heritage', 'наследие', 'мұра'), V('assimilation', 'ассимиляция', 'сіңісу'), V('stereotype', 'стереотип', 'стереотип'),
        V('diaspora', 'диаспора', 'диаспора'), V('belonging', 'принадлежность', 'тиесілілік сезімі'),
        V('multiculturalism', 'мультикультурализм', 'көпмәдениеттілік'), V('prejudice', 'предрассудок', 'нәсілдік көзқарас (алалаушылық)'),
        V('tradition', 'традиция', 'дәстүр'), V('identity crisis', 'кризис идентичности', 'бірегейлік дағдарысы'),
        V('integration', 'интеграция', 'интеграция'),
    ],
    'questions' => [
        V('What part of your cultural background are you most proud of?', 'Какой частью своей культурной принадлежности вы гордитесь больше всего?', 'Мәдени тегіңіздің қай бөлігімен ең көп мақтанасыз?'),
        V('Have you ever felt caught between two cultures? Describe it.', 'Вы когда-нибудь чувствовали себя между двух культур? Опишите это.', 'Екі мәдениеттің арасында қалғандай сезіндіңіз бе? Сипаттаңыз.'),
        V('Do you think stereotypes about your culture are accurate or unfair?', 'Как вы думаете, стереотипы о вашей культуре точны или несправедливы?', 'Мәдениетіңіз туралы стереотиптер дәл ме, әлде әділетсіз бе деп ойлайсыз?'),
        V('Is it possible to belong to more than one culture at once?', 'Возможно ли принадлежать сразу к нескольким культурам?', 'Бір мезгілде бірнеше мәдениетке жату мүмкін бе?'),
        V('What can multicultural societies do to reduce prejudice?', 'Что могут делать многокультурные общества, чтобы уменьшить предрассудки?', 'Көпмәдениетті қоғамдар алалаушылықты азайту үшін не істей алады?'),
        V('How do you think identity changes when someone moves to a new country?', 'Как, по-вашему, меняется идентичность, когда человек переезжает в новую страну?', 'Адам жаңа елге көшкенде бірегейлігі қалай өзгереді деп ойлайсыз?'),
    ],
];

$lessons[] = [
    'level' => 'intermediate', 'topic' => 'Ethics and Moral Dilemmas', 'background_key' => 'minimal-dark',
    'warmup' => V(
        "Let's talk about ethics. How do we decide what is right and wrong when a decision is not simple?",
        'Давайте поговорим об этике. Как мы решаем, что правильно, а что нет, когда решение непростое?',
        'Этика туралы сөйлесейік. Шешім қиын болғанда нені дұрыс, нені бұрыс деп қалай шешеміз?'
    ),
    'vocab' => [
        V('morality', 'мораль', 'моральдылық'), V('integrity', 'честность/цельность', 'адалдық (тұтастық)'),
        V('dilemma', 'дилемма', 'дилемма'), V('conscience', 'совесть', 'ар-ождан'), V('principle', 'принцип', 'принцип'),
        V('justice', 'справедливость', 'әділеттілік'), V('virtue', 'добродетель', 'ізгілік'),
        V('hypocrisy', 'лицемерие', 'екіжүзділік'), V('accountability', 'подотчётность', 'жауапкершілік (есеп беру)'),
        V('empathy', 'эмпатия', 'эмпатия'),
    ],
    'questions' => [
        V('Have you ever faced a difficult moral dilemma? What did you decide?', 'Вы когда-нибудь сталкивались со сложной моральной дилеммой? Что вы решили?', 'Қиын моральдық дилеммаға тап болдыңыз ба? Не шештіңіз?'),
        V('Is it ever acceptable to lie? Under what circumstances?', 'Приемлемо ли когда-нибудь лгать? При каких обстоятельствах?', 'Өтірік айту қашан да болса қолайлы ма? Қандай жағдайларда?'),
        V('Do you think morality is the same for everyone, or does it depend on culture?', 'Как вы думаете, мораль одинакова для всех или зависит от культуры?', 'Мораль барлығына бірдей ме, әлде мәдениетке байланысты ма деп ойлайсыз?'),
        V('Should people be held accountable for mistakes made a long time ago?', 'Должны ли люди нести ответственность за ошибки, совершённые давно?', 'Адамдар бұрын жіберген қателіктері үшін жауапты болуы керек пе?'),
        V('What is more important: following the law or following your conscience?', 'Что важнее: следовать закону или следовать своей совести?', 'Заңға бағыну маңызды ма, әлде ар-ожданға бағыну ма?'),
        V('How would you respond if you saw a friend acting dishonestly?', 'Как бы вы отреагировали, если бы увидели, что друг ведёт себя нечестно?', 'Досыңыздың адал емес әрекет еткенін көрсеңіз, қалай жауап берер едіңіз?'),
    ],
];

$lessons[] = [
    'level' => 'intermediate', 'topic' => 'Urbanization', 'background_key' => 'night-city',
    'warmup' => V(
        "Let's talk about urbanization. What are the benefits and problems of more people moving to cities?",
        'Давайте поговорим об урбанизации. Каковы преимущества и проблемы переезда всё большего числа людей в города?',
        'Урбандану туралы сөйлесейік. Көбірек адамдардың қалаға көшуінің артықшылықтары мен мәселелері қандай?'
    ),
    'vocab' => [
        V('infrastructure', 'инфраструктура', 'инфрақұрылым'), V('overcrowding', 'перенаселённость', 'халықтың тым көп шоғырлануы'),
        V('gentrification', 'джентрификация', 'джентрификация'), V('skyline', 'силуэт города', 'қала силуэті'),
        V('urban sprawl', 'разрастание города', 'қаланың тарбиюі'), V('public transport', 'общественный транспорт', 'қоғамдық көлік'),
        V('housing crisis', 'жилищный кризис', 'тұрғын үй дағдарысы'), V('metropolitan', 'столичный/городской', 'мегаполистік'),
        V('congestion', 'затор', 'кептеліс'), V('city planning', 'городское планирование', 'қала жоспарлау'),
    ],
    'questions' => [
        V('What are the biggest advantages of living in a city?', 'Каковы главные преимущества жизни в городе?', 'Қалада тұрудың ең үлкен артықшылықтары қандай?'),
        V('What problems does rapid urbanization create?', 'Какие проблемы создаёт быстрая урбанизация?', 'Жылдам урбандану қандай мәселелер тудырады?'),
        V('Do you think cities should invest more in public transport or roads?', 'Как вы думаете, городам следует больше инвестировать в общественный транспорт или в дороги?', 'Қалалар қоғамдық көлікке көбірек инвестиция салуы керек пе, әлде жолдарға ма?'),
        V('Is it better to live in a big city or a small town? Why?', 'Лучше жить в большом городе или в маленьком городке? Почему?', 'Үлкен қалада тұрған дұрыс па, әлде кішкентай қалашықта ма? Неге?'),
        V('How can cities solve housing shortages?', 'Как города могут решить проблему нехватки жилья?', 'Қалалар тұрғын үй жетіспеушілігін қалай шеше алады?'),
        V('What would your ideal city look like?', 'Как бы выглядел ваш идеальный город?', 'Сіздің идеал қалаңыз қандай болар еді?'),
    ],
];

$lessons[] = [
    'level' => 'intermediate', 'topic' => 'The Future of Education', 'background_key' => 'professional',
    'warmup' => V(
        "Let's talk about the future of education. How might the way we learn change in the coming years?",
        'Давайте поговорим о будущем образования. Как может измениться то, как мы учимся, в ближайшие годы?',
        'Білім берудің болашағы туралы сөйлесейік. Алдағы жылдары оқу тәсіліміз қалай өзгеруі мүмкін?'
    ),
    'vocab' => [
        V('e-learning', 'электронное обучение', 'электронды оқыту'), V('personalized learning', 'персонализированное обучение', 'жекелендірілген оқыту'),
        V('digital divide', 'цифровое неравенство', 'цифрлық алшақтық'), V('lifelong learning', 'обучение на протяжении всей жизни', 'өмір бойы оқу'),
        V('curriculum', 'учебная программа', 'оқу бағдарламасы'), V('critical thinking', 'критическое мышление', 'сыни ойлау'),
        V('standardized testing', 'стандартизированное тестирование', 'стандартталған тестілеу'), V('vocational training', 'профессиональное обучение', 'кәсіптік дайындық'),
        V('online degree', 'онлайн-диплом', 'онлайн диплом'), V('educational technology', 'образовательные технологии', 'білім беру технологиялары'),
    ],
    'questions' => [
        V('Do you think online learning will eventually replace traditional classrooms?', 'Как вы думаете, онлайн-обучение в конце концов заменит традиционные классы?', 'Онлайн оқыту дәстүрлі сыныптарды ақыр соңында алмастырады деп ойлайсыз ба?'),
        V('What is the biggest problem with standardized testing?', 'Какая самая большая проблема со стандартизированным тестированием?', 'Стандартталған тестілеудің ең үлкен мәселесі қандай?'),
        V('Should schools focus more on critical thinking than memorizing facts?', 'Должны ли школы уделять больше внимания критическому мышлению, чем запоминанию фактов?', 'Мектептер фактілерді жаттауға қарағанда сыни ойлауға көбірек назар аударуы керек пе?'),
        V('How can schools help students who do not have equal access to technology?', 'Как школы могут помочь ученикам, у которых нет равного доступа к технологиям?', 'Мектептер технологияға тең қолжетімділігі жоқ оқушыларға қалай көмектесе алады?'),
        V('Do you believe an online degree is as valuable as a traditional one?', 'Считаете ли вы, что онлайн-диплом так же ценен, как традиционный?', 'Онлайн дипломды дәстүрлі дипломдай құнды деп санайсыз ба?'),
        V('What skill do you think schools should teach more of in the future?', 'Какому навыку, по-вашему, школы должны учить больше в будущем?', 'Сіздің ойыңызша, мектептер болашақта қандай дағдыны көбірек үйретуі керек?'),
    ],
];
