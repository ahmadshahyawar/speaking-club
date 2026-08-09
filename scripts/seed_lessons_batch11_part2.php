<?php
declare(strict_types=1);
// Included from seed_lessons_batch11.php — shares its scope ($lessons, function V()).

// ========================= ELEMENTARY (batch 11) — 15 questions per topic =========================

$lessons[] = ['level' => 'elementary', 'topic' => 'Preparing for a Job Fair', 'background_key' => 'professional',
    'warmup' => V("Let's talk about job fairs. Have you ever attended a job fair to look for work?", 'Давайте поговорим о ярмарках вакансий. Вы когда-нибудь посещали ярмарку вакансий в поисках работы?', 'Жұмыс жәрмеңкелері туралы сөйлесейік. Жұмыс іздеу үшін жұмыс жәрмеңкесіне бардыңыз ба?'),
    'vocab' => [V('job fair', 'ярмарка вакансий', 'жұмыс жәрмеңкесі'), V('elevator pitch', 'краткая самопрезентация', 'қысқа өзін таныстыру'), V('recruiter', 'рекрутер', 'рекрутер'), V('booth', 'стенд', 'стенд'), V('handshake', 'рукопожатие', 'қол алысу'), V('follow up', 'связаться позже', 'кейін хабарласу'), V('resume copies', 'копии резюме', 'түйіндеме көшірмелері'), V('dress professionally', 'одеться профессионально', 'кәсіби киіну'), V('network', 'налаживать связи', 'байланыс құру'), V('opportunity', 'возможность', 'мүмкіндік')],
    'questions' => [
        V('Have you ever attended a job fair?', 'Вы когда-нибудь посещали ярмарку вакансий?', 'Жұмыс жәрмеңкесіне бардыңыз ба?'),
        V('Do you bring copies of your resume to a job fair?', 'Вы берёте копии резюме на ярмарку вакансий?', 'Жұмыс жәрмеңкесіне түйіндеме көшірмелерін аласыз ба?'),
        V('Do you have a short elevator pitch prepared about yourself?', 'У вас есть подготовленная краткая самопрезентация о себе?', 'Өзіңіз туралы дайындалған қысқа таныстыруыңыз бар ма?'),
        V('Do you feel nervous talking to recruiters?', 'Вы нервничаете, разговаривая с рекрутерами?', 'Рекрутерлермен сөйлескенде толқисыз ба?'),
        V('Do you dress professionally for events like this?', 'Вы одеваетесь профессионально для таких мероприятий?', 'Осындай іс-шаралар үшін кәсіби киінесіз бе?'),
        V('Do you follow up with recruiters after meeting them?', 'Вы связываетесь с рекрутерами после встречи с ними?', 'Рекрутерлермен кездескеннен кейін хабарласасыз ба?'),
        V('Do you research companies before visiting their booth?', 'Вы изучаете компании перед посещением их стенда?', 'Стендіне барудан бұрын компанияларды зерттейсіз бе?'),
        V('Is a firm handshake important to you when meeting someone new?', 'Крепкое рукопожатие важно для вас при знакомстве с новым человеком?', 'Жаңа адаммен танысқанда мықты қол алысу сіз үшін маңызды ма?'),
        V('Have you ever gotten a job opportunity from a job fair?', 'Вы когда-нибудь получали возможность трудоустройства с ярмарки вакансий?', 'Жұмыс жәрмеңкесінен жұмыс мүмкіндігін алдыңыз ба?'),
        V('Do you enjoy networking events like job fairs?', 'Вам нравятся такие мероприятия для налаживания связей, как ярмарки вакансий?', 'Жұмыс жәрмеңкелері сияқты байланыс құру іс-шараларын ұнатасыз ба?'),
        V('Do you visit many booths, or focus on a few companies?', 'Вы посещаете много стендов, или фокусируетесь на нескольких компаниях?', 'Көп стендке барасыз ба, әлде бірнеше компанияға назар аударасыз ба?'),
        V('Would you attend a job fair even if you already have a job?', 'Вы бы посетили ярмарку вакансий, даже если у вас уже есть работа?', 'Жұмысыңыз болса да, жұмыс жәрмеңкесіне барар ма едіңіз?'),
        V('Do you think job fairs are still useful in the age of online job searching?', 'Как вы думаете, ярмарки вакансий всё ещё полезны в эпоху онлайн-поиска работы?', 'Онлайн жұмыс іздеу дәуірінде жұмыс жәрмеңкелері әлі де пайдалы деп ойлайсыз ба?'),
        V('Do you practice what you will say before talking to a recruiter?', 'Вы репетируете, что скажете, перед разговором с рекрутером?', 'Рекрутермен сөйлесу алдында не айтатыныңызды жаттықтыдыңыз ба?'),
        V('What advice would you give someone attending their first job fair?', 'Какой совет вы бы дали тому, кто впервые идёт на ярмарку вакансий?', 'Алғаш рет жұмыс жәрмеңкесіне баратын адамға қандай кеңес берер едіңіз?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Understanding Time Zones', 'background_key' => 'night-city',
    'warmup' => V("Let's talk about time zones. Have you ever gotten confused scheduling something across time zones?", 'Давайте поговорим о часовых поясах. Вы когда-нибудь путались, планируя что-то в разных часовых поясах?', 'Уақыт белдеулері туралы сөйлесейік. Әртүрлі уақыт белдеулерінде бір нәрсе жоспарлағанда шатасқан кезіңіз болды ма?'),
    'vocab' => [V('time zone', 'часовой пояс', 'уақыт белдеуі'), V('time difference', 'разница во времени', 'уақыт айырмасы'), V('jet lag', 'смена часовых поясов', 'уақыт белдеуінің ауысуы'), V('schedule a call', 'запланировать звонок', 'қоңырауды жоспарлау'), V('daylight saving', 'летнее время', 'жазғы уақыт'), V('convert time', 'переводить время', 'уақытты аудару'), V('overseas', 'за границей', 'шетелде'), V('local time', 'местное время', 'жергілікті уақыт'), V('coordinate', 'координировать', 'үйлестіру'), V('remote team', 'удалённая команда', 'қашықтағы команда')],
    'questions' => [
        V('Have you ever gotten confused scheduling something across time zones?', 'Вы когда-нибудь путались, планируя что-то в разных часовых поясах?', 'Әртүрлі уақыт белдеулерінде бір нәрсе жоспарлағанда шатасқан кезіңіз болды ма?'),
        V('Do you have friends or family who live in a different time zone?', 'У вас есть друзья или семья, живущие в другом часовом поясе?', 'Басқа уақыт белдеуінде тұратын достарыңыз немесе отбасыңыз бар ма?'),
        V('Have you ever experienced jet lag after traveling?', 'Вы когда-нибудь испытывали смену часовых поясов после путешествия?', 'Саяхаттан кейін уақыт белдеуінің ауысуын сезіндіңіз бе?'),
        V('Do you find it hard to convert time between zones in your head?', 'Вам трудно переводить время между поясами в уме?', 'Уақыт белдеулері арасында ойша уақытты аудару сізге қиын ба?'),
        V('Have you ever scheduled a call at the wrong time because of a time zone mistake?', 'Вы когда-нибудь назначали звонок не в то время из-за ошибки с часовым поясом?', 'Уақыт белдеуі қатесі себебінен қоңырауды дұрыс емес уақытта жоспарладыңыз ба?'),
        V('Do you work with a remote team across different time zones?', 'Вы работаете с удалённой командой в разных часовых поясах?', 'Әртүрлі уақыт белдеулеріндегі қашықтағы командамен жұмыс істейсіз бе?'),
        V('Does daylight saving time confuse you when it changes?', 'Летнее время путает вас, когда оно меняется?', 'Жазғы уақыт өзгергенде сізді шатастыра ма?'),
        V('Do you use an app to check time zones?', 'Вы используете приложение для проверки часовых поясов?', 'Уақыт белдеулерін тексеру үшін қолданбаны пайдаланасыз ба?'),
        V('Have you ever called someone overseas at a bad time by accident?', 'Вы когда-нибудь случайно звонили кому-то за границей в неподходящее время?', 'Шетелдегі біреуге кездейсоқ жайсыз уақытта қоңырау шалдыңыз ба?'),
        V('Do you think working across time zones is stressful?', 'Как вы думаете, работа в разных часовых поясах вызывает стресс?', 'Әртүрлі уақыт белдеулерінде жұмыс істеу күйзелісті ме деп ойлайсыз ба?'),
        V('Would you want to work for a company with an international team?', 'Вы бы хотели работать в компании с международной командой?', 'Халықаралық командасы бар компанияда жұмыс істегіңіз келе ме?'),
        V('Do you know the time difference between your city and a major world city?', 'Вы знаете разницу во времени между вашим городом и крупным мировым городом?', 'Қалаңыз бен әлемдегі ірі қаланың арасындағы уақыт айырмасын білесіз бе?'),
        V('Have you ever missed an event because you didn\'t convert the time zone correctly?', 'Вы когда-нибудь пропускали мероприятие, потому что неправильно перевели часовой пояс?', 'Уақыт белдеуін дұрыс аудармағандықтан іс-шараны өткізіп жібердіңіз бе?'),
        V('Do you think the world should use one universal time?', 'Как вы думаете, миру следует использовать единое всемирное время?', 'Әлем бірыңғай жаһандық уақытты пайдалануы керек деп ойлайсыз ба?'),
        V('What is the biggest time difference you have dealt with?', 'Какая самая большая разница во времени, с которой вам приходилось иметь дело?', 'Тап болған ең үлкен уақыт айырмашылығыңыз қандай болды?'),
    ],
];

// ========================= PRE-INTERMEDIATE (batch 11) — 15 questions per topic =========================

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'The Rise of Silent Reading Clubs', 'background_key' => 'calm',
    'warmup' => V("Let's talk about silent reading gatherings. Why do you think people are choosing to read together in silence instead of talking?", 'Давайте поговорим о встречах для тихого чтения. Как вы думаете, почему люди выбирают читать вместе в тишине вместо разговоров?', 'Тыныш оқу кездесулері туралы сөйлесейік. Сіздің ойыңызша, неге адамдар сөйлесудің орнына бірге тыныштықта оқуды таңдайды?'),
    'vocab' => [V('silent reading', 'тихое чтение', 'тыныш оқу'), V('social gathering', 'социальная встреча', 'әлеуметтік жиналыс'), V('community', 'сообщество', 'қауымдастық'), V('focus', 'сосредоточенность', 'зейін'), V('screen-free', 'без экранов', 'экрансыз'), V('shared space', 'общее пространство', 'ортақ кеңістік'), V('introvert-friendly', 'подходящий интровертам', 'интроверттерге ыңғайлы'), V('cafe culture', 'культура кафе', 'кафе мәдениеті'), V('unplugging', 'отключение от техники', 'технологиядан ажырау'), V('togetherness', 'единение', 'бірлік')],
    'questions' => [
        V('Why do you think people choose to read together in silence?', 'Как вы думаете, почему люди выбирают читать вместе в тишине?', 'Сіздің ойыңызша, неге адамдар бірге тыныштықта оқуды таңдайды?'),
        V('Would you enjoy attending a silent reading event?', 'Вам бы понравилось посещать мероприятие тихого чтения?', 'Тыныш оқу іс-шарасына қатысу сізге ұнар ма еді?'),
        V('Do you think this trend appeals more to introverts?', 'Как вы думаете, этот тренд больше привлекает интровертов?', 'Бұл тренд интроверттерге көбірек тартымды деп ойлайсыз ба?'),
        V('Do you think being around others while reading helps you focus?', 'Как вы думаете, нахождение рядом с другими во время чтения помогает сосредоточиться?', 'Оқу кезінде басқалардың жанында болу шоғырлануға көмектеседі деп ойлайсыз ба?'),
        V('Do you think this is a reaction against constant screen time?', 'Как вы думаете, это реакция на постоянное время у экрана?', 'Бұл үнемі экран уақытына қарсы реакция ма деп ойлайсыз ба?'),
        V('Would you rather socialize by talking, or by sharing a quiet activity?', 'Вы бы предпочли общаться разговором, или разделяя тихое занятие?', 'Сөйлесіп қарым-қатынас жасағанды қалайсыз ба, әлде тыныш әрекетті бөлісіп пе?'),
        V('Do you think cafes are a good place for this kind of gathering?', 'Как вы думаете, кафе — хорошее место для такого рода встреч?', 'Кафелер осындай жиналыстар үшін жақсы орын ба деп ойлайсыз ба?'),
        V('Have you ever read in a public place surrounded by strangers?', 'Вы когда-нибудь читали в общественном месте в окружении незнакомцев?', 'Бейтаныс адамдардың арасында қоғамдық жерде оқыдыңыз ба?'),
        V('Do you think silence can create a sense of togetherness?', 'Как вы думаете, тишина может создать чувство единения?', 'Тыныштық бірлік сезімін тудыра алады деп ойлайсыз ба?'),
        V('Would this kind of event help you unplug from technology?', 'Такое мероприятие помогло бы вам отключиться от технологий?', 'Мұндай іс-шара сізге технологиядан ажырауға көмектесер ме еді?'),
        V('Do you think this trend will grow in popularity?', 'Как вы думаете, этот тренд будет расти в популярности?', 'Бұл тренд танымалдылықта өседі деп ойлайсыз ба?'),
        V('Do you prefer reading alone at home, or in a group setting?', 'Вы предпочитаете читать одни дома, или в группе?', 'Үйде жалғыз оқығанды ұнатасыз ба, әлде топта ма?'),
        V('Do you think younger people are drawn to these low-key social events?', 'Как вы думаете, молодых людей привлекают такие спокойные социальные мероприятия?', 'Жастар осындай тыныш әлеуметтік іс-шараларға тартылады деп ойлайсыз ба?'),
        V('Would you make friends at a silent reading event, even without talking much?', 'Вы бы завели друзей на мероприятии тихого чтения, даже почти не разговаривая?', 'Тыныш оқу іс-шарасында көп сөйлеспесеңіз де дос табар ма едіңіз?'),
        V('What book would you bring to a silent reading gathering?', 'Какую книгу вы бы принесли на встречу тихого чтения?', 'Тыныш оқу кездесуіне қандай кітап алып барар едіңіз?'),
    ],
];

// ========================= INTERMEDIATE (batch 11) — 15 questions per topic =========================

$lessons[] = ['level' => 'intermediate', 'topic' => 'The Ethics of Cultural Preservation vs Progress', 'background_key' => 'warm',
    'warmup' => V("Let's talk about tradition and progress. When traditional ways of life conflict with modern development, which should take priority?", 'Давайте поговорим о традициях и прогрессе. Когда традиционный образ жизни вступает в конфликт с современным развитием, чему следует отдавать приоритет?', 'Дәстүр мен прогресс туралы сөйлесейік. Дәстүрлі өмір салты заманауи дамумен қайшы келгенде, неге басымдық берілуі керек?'),
    'vocab' => [V('cultural preservation', 'сохранение культуры', 'мәдениетті сақтау'), V('indigenous community', 'коренная община', 'байырғы қауымдастық'), V('modernization', 'модернизация', 'жаңғырту'), V('displacement', 'вытеснение', 'ығыстыру'), V('heritage site', 'объект наследия', 'мұра нысаны'), V('economic development', 'экономическое развитие', 'экономикалық даму'), V('autonomy', 'автономия', 'дербестік'), V('assimilation', 'ассимиляция', 'сіңісу'), V('sustainable development', 'устойчивое развитие', 'тұрақты даму'), V('self-determination', 'самоопределение', 'өзін-өзі анықтау')],
    'questions' => [
        V('When tradition conflicts with modern development, which should take priority?', 'Когда традиции вступают в конфликт с современным развитием, чему следует отдавать приоритет?', 'Дәстүр заманауи дамумен қайшы келгенде, неге басымдық берілуі керек?'),
        V('Do you think indigenous communities should have the final say over development on their land?', 'Как вы думаете, коренные общины должны иметь последнее слово по развитию на своей земле?', 'Байырғы қауымдастықтардың өз жеріндегі даму туралы соңғы сөзі болуы керек пе деп ойлайсыз ба?'),
        V('Do you think economic development always requires cultural sacrifice?', 'Как вы думаете, экономическое развитие всегда требует культурной жертвы?', 'Экономикалық даму әрдайым мәдени құрбандықты талап етеді деп ойлайсыз ба?'),
        V('Should governments prioritize heritage sites over infrastructure projects?', 'Должны ли правительства отдавать приоритет объектам наследия перед инфраструктурными проектами?', 'Үкіметтер мұра нысандарына инфрақұрылым жобаларынан гөрі басымдық беруі керек пе?'),
        V('Do you think modernization is a form of cultural assimilation?', 'Как вы думаете, модернизация — это форма культурной ассимиляции?', 'Жаңғырту мәдени сіңісудің бір түрі ме деп ойлайсыз ба?'),
        V('Should communities have the right to reject development projects on their land?', 'Должны ли общины иметь право отклонять проекты развития на своей земле?', 'Қауымдастықтардың өз жеріндегі даму жобаларынан бас тартуға құқығы болуы керек пе?'),
        V('Do you think it is possible to modernize without losing cultural identity?', 'Как вы думаете, возможно ли модернизироваться, не теряя культурную идентичность?', 'Мәдени бірегейлікті жоғалтпай жаңғыру мүмкін бе деп ойлайсыз ба?'),
        V('Do you think outsiders should have a say in how another culture preserves its traditions?', 'Как вы думаете, посторонние должны иметь право голоса в том, как другая культура сохраняет свои традиции?', 'Бөтен адамдардың басқа мәдениеттің дәстүрлерін қалай сақтайтыны туралы пікірі болуы керек пе деп ойлайсыз ба?'),
        V('Do you think displacement for development projects is ever justified?', 'Как вы думаете, вытеснение ради проектов развития когда-либо оправдано?', 'Даму жобалары үшін ығыстыру қашан да ақталады деп ойлайсыз ба?'),
        V('Should self-determination be a fundamental right for all cultural groups?', 'Должно ли самоопределение быть основным правом для всех культурных групп?', 'Өзін-өзі анықтау барлық мәдени топтар үшін негізгі құқық болуы керек пе?'),
        V('Do you think sustainable development can balance progress and tradition?', 'Как вы думаете, устойчивое развитие может сбалансировать прогресс и традиции?', 'Тұрақты даму прогресс пен дәстүрді теңестіре алады деп ойлайсыз ба?'),
        V('Do you think younger generations within a culture often want more modernization than elders?', 'Как вы думаете, младшие поколения внутри культуры часто хотят большей модернизации, чем старшие?', 'Мәдениет ішіндегі жас ұрпақ ересектерге қарағанда жиі көбірек жаңғыртуды қалайды деп ойлайсыз ба?'),
        V('Should international organizations intervene to protect endangered cultural practices?', 'Должны ли международные организации вмешиваться, чтобы защитить исчезающие культурные практики?', 'Халықаралық ұйымдар жойылу қаупі бар мәдени тәжірибелерді қорғау үшін араласуы керек пе?'),
        V('Do you think tourism helps or harms cultural preservation?', 'Как вы думаете, туризм помогает или вредит сохранению культуры?', 'Туризм мәдениетті сақтауға көмектесе ме, әлде зиян тигізе ме деп ойлайсыз ба?'),
        V('What do you think a fair balance between progress and tradition looks like?', 'Как, по-вашему, выглядит справедливый баланс между прогрессом и традицией?', 'Сіздің ойыңызша, прогресс пен дәстүр арасындағы әділ теңгерім қандай болады?'),
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
