<?php
declare(strict_types=1);

require_once __DIR__ . '/db.php';

// Trilingual hint. Hints go from vague/riddle-like to more specific -
// nothing here is a plain dictionary definition like the Hangman clues.
// Answers are professions/roles ("Who am I?" asks about a person, not a
// thing), spoken in the first person by the person doing that job.
function WH(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }
function WW(string $word, array $h1, array $h2, array $h3): array { return ['word' => $word, 'hints' => [$h1, $h2, $h3]]; }

function build_whoami_bank(string $level): array {
    if ($level === 'elementary') {
        return [
            WW('pilot',
                WH("My office happens to be thousands of feet above the ground.", "Мой офис находится на высоте нескольких тысяч метров над землёй.", "Менің кеңсем жерден мыңдаған метр биіктікте."),
                WH("Hundreds of lives are in my hands for every single trip.", "Сотни жизней в моих руках при каждой поездке.", "Әр сапарда жүздеген өмір менің қолымда."),
                WH("I talk to the sky more than I talk to the ground.", "Я говорю с небом больше, чем с землёй.", "Мен жермен емес, аспанмен көбірек сөйлесемін.")),
            WW('firefighter',
                WH("I run straight toward the danger everyone else is running from.", "Я бегу прямо навстречу опасности, от которой все остальные убегают.", "Барлығы қашатын қауіпке мен тура қарай жүгіремін."),
                WH("A heavy hose and a tall ladder are often my closest partners.", "Тяжёлый шланг и высокая лестница часто мои ближайшие напарники.", "Ауыр шланг пен биік саты көбіне менің жақын серіктерім."),
                WH("When smoke fills a building, I'm the one who goes inside.", "Когда здание заполняет дым, я тот, кто входит внутрь.", "Ғимаратты түтін басқанда, ішіне кіретін менмін.")),
            WW('photographer',
                WH("I freeze a single moment so it can be remembered forever.", "Я замораживаю один момент, чтобы его помнили вечно.", "Мен бір сәтті мәңгі есте қалу үшін тоқтатамын."),
                WH("Light and timing matter to me more than almost anything else.", "Свет и время для меня важнее почти всего остального.", "Маған жарық пен уақыт бәрінен де маңызды."),
                WH("A camera is basically an extension of my own eye.", "Камера — это, по сути, продолжение моего собственного глаза.", "Камера — менің көзімнің жалғасы іспетті.")),
            WW('journalist',
                WH("My job is to find out the truth and tell everyone about it.", "Моя работа — узнать правду и рассказать о ней всем.", "Менің жұмысым — шындықты біліп, оны бәріне айту."),
                WH("A deadline chases me nearly every single day of my life.", "Дедлайн преследует меня почти каждый день моей жизни.", "Мерзім мені өмірімнің әр күні дерлік қуалайды."),
                WH("You probably read my words in the news without knowing my name.", "Ты, вероятно, читаешь мои слова в новостях, не зная моего имени.", "Сен менің сөзімді жаңалықтардан атымды білместен оқитын шығарсың.")),
            WW('architect',
                WH("Before a single brick is placed, I've already built it in my mind.", "Прежде чем положить хоть один кирпич, я уже построил это в своей голове.", "Бір кірпіш қаланбай тұрып, мен оны ойымда салып қойғанмын."),
                WH("A pencil and a blank page are where every one of my buildings begins.", "Карандаш и чистый лист бумаги — вот где начинается каждое моё здание.", "Қарындаш пен бос бет — менің әр ғимаратымның басталатын жері."),
                WH("Skyscrapers and houses alike start as a drawing I made.", "Небоскрёбы и дома начинаются с рисунка, который сделал я.", "Аспан асты ғимараттар мен үйлер мен салған суреттен басталады.")),
            WW('translator',
                WH("I live in the space between two languages that don't understand each other.", "Я живу в пространстве между двумя языками, которые не понимают друг друга.", "Мен бір-бірін түсінбейтін екі тілдің арасындағы кеңістікте өмір сүремін."),
                WH("Every word I hear, I quietly turn into a different one.", "Каждое слово, которое я слышу, я тихо превращаю в другое.", "Естіген әрбір сөзімді тыныш басқа тілге аударамын."),
                WH("Without me, two people speaking different languages couldn't understand each other.", "Без меня два человека, говорящие на разных языках, не смогли бы понять друг друга.", "Мен болмасам, әртүрлі тілде сөйлейтін екі адам бір-бірін түсінбес еді.")),
            WW('chemist',
                WH("I mix things together to see what surprising thing happens next.", "Я смешиваю вещи, чтобы увидеть, что удивительное произойдёт дальше.", "Заттарды араластырып, әрі қарай не таңғаларлық нәрсе болатынын көремін."),
                WH("Safety goggles and a lab coat are basically my everyday uniform.", "Защитные очки и лабораторный халат — практически моя повседневная форма.", "Қорғаныс көзілдірігі мен лаборатория халаты — менің күнделікті киімім іспетті."),
                WH("Test tubes and strange reactions are simply part of my normal day.", "Пробирки и странные реакции — просто часть моего обычного дня.", "Сынауық пен ғажайып реакциялар — менің қалыпты күнімнің бір бөлігі ғана.")),
            WW('biologist',
                WH("Living things, from the tiniest cell to the largest whale, fascinate me.", "Живые существа, от крошечной клетки до огромного кита, восхищают меня.", "Кішкентай жасушадан бастап үлкен китке дейінгі тірі жәндіктер мені қызықтырады."),
                WH("A microscope often reveals a whole hidden world to me.", "Микроскоп часто открывает мне целый скрытый мир.", "Микроскоп маған көбіне бүкіл жасырын әлемді ашады."),
                WH("I study life itself, in every shape it comes in.", "Я изучаю саму жизнь, в любой форме, в которой она существует.", "Мен өмірдің өзін, қандай пішінде болса да, зерттеймін.")),
            WW('zookeeper',
                WH("My coworkers roar, hiss, and occasionally try to escape.", "Мои коллеги рычат, шипят и иногда пытаются сбежать.", "Менің әріптестерім ырылдайды, ысылдайды және кейде қашуға тырысады."),
                WH("Feeding time is the most exciting part of my entire day.", "Время кормления — самая захватывающая часть моего дня.", "Тамақтандыру уақыты — күнімнің ең қызықты бөлігі."),
                WH("Lions, penguins, and giraffes are basically my daily colleagues.", "Львы, пингвины и жирафы — практически мои ежедневные коллеги.", "Арыстандар, пингвиндер және керіктер — менің күнделікті әріптестерім іспетті.")),
            WW('lifeguard',
                WH("I watch the water more closely than anyone else at the beach.", "Я слежу за водой внимательнее, чем кто-либо другой на пляже.", "Мен суды жағажайдағы кез келген басқа адамнан мұқият бақылаймын."),
                WH("A whistle and a red float are always within my reach.", "Свисток и красный поплавок всегда у меня под рукой.", "Ысқырық пен қызыл қалқыма әрқашан қолымның астында."),
                WH("If you're struggling in the water, I'm the one who jumps in.", "Если ты тонешь в воде, я тот, кто прыгает на помощь.", "Суда қиналсаң, көмекке секіретін менмін.")),
        ];
    }
    if ($level === 'pre-intermediate') {
        return [
            WW('surgeon',
                WH("My hands must stay perfectly steady while someone's life depends on it.", "Мои руки должны оставаться абсолютно твёрдыми, пока от этого зависит чья-то жизнь.", "Біреудің өмірі осыған байланысты болғанда, қолым мүлде дірілдемеуі керек."),
                WH("A sharp blade and complete focus are the tools of my trade.", "Острый скальпель и полная концентрация — инструменты моего ремесла.", "Өткір скальпель мен толық зейін — менің кәсібімнің құралдары."),
                WH("By the time I'm finished, I've fixed something no medicine alone could.", "К тому времени, как я закончу, я исправлю то, что не могло исправить одно лекарство.", "Мен аяқтағанша, дәрі-дәрмек жалғыз түзете алмайтын нәрсені түзетемін.")),
            WW('therapist',
                WH("People tell me things they've never told anyone else.", "Люди рассказывают мне то, что никогда не рассказывали никому другому.", "Адамдар маған ешкімге айтпаған нәрселерін айтады."),
                WH("I listen far more than I ever speak.", "Я слушаю гораздо больше, чем говорю.", "Мен сөйлегеннен гөрі әлдеқайда көп тыңдаймын."),
                WH("My job is to help untangle thoughts that feel too tangled to face alone.", "Моя работа — помочь распутать мысли, которые слишком запутаны, чтобы справиться с ними в одиночку.", "Менің жұмысым — жалғыз шешуге тым шатасқан ойларды тарқатуға көмектесу.")),
            WW('psychologist',
                WH("I study the mind, even though I can never actually see it.", "Я изучаю разум, хотя никогда не могу увидеть его на самом деле.", "Мен ешқашан нақты көре алмасам да, ойды зерттеймін."),
                WH("Why people think and act the way they do is my entire career.", "Почему люди думают и действуют именно так — вся моя карьера.", "Адамдардың неге солай ойлап, солай әрекет ететіні — менің бүкіл мансабым."),
                WH("People come to me to understand themselves a little better.", "Люди приходят ко мне, чтобы немного лучше понять себя.", "Адамдар өздерін жақсырақ түсіну үшін маған келеді.")),
            WW('paramedic',
                WH("The worst moment of someone's day is often the moment I arrive.", "Худший момент чьего-то дня часто становится моментом, когда я прихожу.", "Біреудің күнінің ең нашар сәті көбіне менің келу сәтім болады."),
                WH("A siren usually announces me before I even step out of the vehicle.", "Сирена обычно объявляет обо мне ещё до того, как я выйду из машины.", "Көлікте шықпай тұрып, сирена әдетте мен туралы хабарлайды."),
                WH("In the first few minutes of an emergency, I'm often the difference that matters most.", "В первые минуты чрезвычайной ситуации я часто становлюсь самой важной разницей.", "Төтенше жағдайдың алғашқы минуттарында көбіне ең маңызды айырмашылықты жасайтын менмін.")),
            WW('veterinarian',
                WH("My patients can't tell me in words where it hurts.", "Мои пациенты не могут сказать мне словами, где у них болит.", "Науқастарым қайда ауыратынын сөзбен айта алмайды."),
                WH("A wagging tail is one of my favorite parts of the job.", "Виляющий хвост — одна из моих любимых частей работы.", "Бұлғақтаған құйрық — менің жұмысымның сүйікті бөлігі."),
                WH("When your pet is sick, I'm the doctor you bring it to.", "Когда твой питомец болен, ты приводишь его ко мне.", "Үй жануарың ауырса, оны маған әкелесің.")),
            WW('diplomat',
                WH("My words are chosen as carefully as a chess player chooses a move.", "Мои слова выбираются так же тщательно, как шахматист выбирает ход.", "Сөздерім шахматшы жүрісті таңдағандай мұқият таңдалады."),
                WH("I represent my entire country, just by walking into a room.", "Я представляю всю свою страну, просто входя в комнату.", "Мен бөлмеге кіру арқылы бүкіл еліммен танылады."),
                WH("Preventing a conflict between nations is sometimes part of my job.", "Иногда предотвращение конфликта между странами — часть моей работы.", "Кейде елдер арасындағы қақтығысты болдырмау — менің жұмысымның бөлігі.")),
            WW('negotiator',
                WH("Two sides refuse to agree, and somehow, I'm the one who finds the middle.", "Две стороны отказываются соглашаться, и почему-то именно я нахожу середину.", "Екі тарап келісуден бас тартады, бірақ қалайда ортасын табатын менмін."),
                WH("I listen to both sides before I ever say what I actually think.", "Я слушаю обе стороны, прежде чем сказать, что думаю на самом деле.", "Шын ойымды айтпас бұрын екі жақты да тыңдаймын."),
                WH("A deal that seemed impossible often becomes possible because of me.", "Сделка, казавшаяся невозможной, часто становится возможной благодаря мне.", "Мүмкін емес сияқты көрінген келісім көбіне мен арқылы мүмкін болады.")),
            WW('economist',
                WH("Numbers about an entire country's money are basically my native language.", "Цифры о деньгах целой страны — практически мой родной язык.", "Бүкіл елдің ақшасы туралы сандар — менің ана тілім іспетті."),
                WH("I try to predict what millions of people will do with their wallets.", "Я пытаюсь предсказать, что миллионы людей сделают со своими кошельками.", "Миллиондаған адамның әмиянымен не істейтінін болжауға тырысамын."),
                WH("Whether prices will rise or fall is a question people bring to me.", "Ко мне приходят с вопросом, вырастут или упадут цены.", "Бағалар өсе ме, түсе ме деген сұрақпен маған келеді.")),
            WW('curator',
                WH("Every object in this room was placed exactly where it is because of me.", "Каждый предмет в этой комнате оказался именно там, где он есть, благодаря мне.", "Осы бөлмедегі әрбір зат дәл осы жерде тұрғаны маған байланысты."),
                WH("I decide which pieces of history deserve to be seen by the public.", "Я решаю, какие произведения истории заслуживают показа публике.", "Тарихтың қай туындылары көпшілікке көрсетуге лайық екенін мен шешемін."),
                WH("A museum's story is really the story I chose to tell.", "История музея — это на самом деле история, которую выбрал рассказать я.", "Мұражайдың тарихы — шын мәнінде менің таңдап айтқан тарихым.")),
            WW('archaeologist',
                WH("I dig through the past, one careful layer of dirt at a time.", "Я копаюсь в прошлом, осторожно, слой за слоем.", "Мен өткенді абайлап, қабат-қабатымен қазамын."),
                WH("A broken pot buried for centuries can make my entire year.", "Разбитый горшок, пролежавший века, может сделать весь мой год.", "Ғасырлар бойы жатқан сынған құмыра менің бүкіл жылымды жасауы мүмкін."),
                WH("Ancient civilizations reveal their secrets to people like me.", "Древние цивилизации раскрывают свои секреты таким людям, как я.", "Ежелгі өркениеттер өз құпияларын мен сияқты адамдарға ашады.")),
        ];
    }
    if ($level === 'intermediate') {
        return [
            WW('entrepreneur',
                WH("I turn a risky idea into a real business.", "Я превращаю рискованную идею в настоящий бизнес.", "Мен тәуекел идеяны нақты бизнеске айналдырамын."),
                WH("I'm not afraid to fail before I finally succeed.", "Я не боюсь потерпеть неудачу, прежде чем наконец добьюсь успеха.", "Ақыры сәтке жеткенше сәтсіздіктен қорықпаймын."),
                WH("Every company you know started because someone like me took a chance.", "Каждая компания, которую ты знаешь, началась, потому что кто-то вроде меня рискнул.", "Білетін әрбір компания мен сияқты біреу тәуекел еткендіктен басталды.")),
            WW('philosopher',
                WH("I ask questions that most people are too busy to even consider.", "Я задаю вопросы, о которых большинство людей слишком заняты, чтобы даже подумать.", "Мен көпшілік адам ойлауға тым бос емес сұрақтар қоямын."),
                WH("What is real, what is right, what is true - these are simply my job description.", "Что реально, что правильно, что истинно — это просто описание моей работы.", "Не нақты, не дұрыс, не шындық — бұл жай ғана менің жұмысымның сипаттамасы."),
                WH("I've spent my whole career thinking harder about 'why' than most people ever do.", "Я всю карьеру думал о «почему» усерднее, чем большинство людей когда-либо думают.", "Мен бүкіл мансабымда 'неге' туралы көпшілік ойлағаннан да қатты ойландым.")),
            WW('anthropologist',
                WH("Human culture itself is the only thing I ever really study.", "Человеческая культура — единственное, что я вообще когда-либо изучаю.", "Адам мәдениеті — менің зерттейтін жалғыз нәрсем."),
                WH("A remote tribe's customs interest me as much as a modern city's habits.", "Обычаи отдалённого племени интересуют меня так же, как привычки современного города.", "Алыс тайпаның әдет-ғұрпы мені заманауи қаланың дағдысындай қызықтырады."),
                WH("I try to understand what makes people, everywhere, human.", "Я пытаюсь понять, что делает людей, повсюду, людьми.", "Мен барлық жердегі адамдарды адам ететін нәрсені түсінуге тырысамын.")),
            WW('geneticist',
                WH("The instructions for building an entire living thing are written in a code only I study closely.", "Инструкции для создания целого живого существа записаны в коде, который изучаю только я.", "Бүкіл тірі жәндікті құру нұсқаулары тек мен мұқият зерттейтін кодта жазылған."),
                WH("A tiny difference in that code can be the reason two people look nothing alike.", "Крошечное различие в этом коде может быть причиной того, что два человека совсем не похожи.", "Сол кодтағы кішкентай айырмашылық екі адамның мүлде ұқсамауының себебі болуы мүмкін."),
                WH("DNA is the material I spend my whole career trying to read.", "ДНК — материал, который я всю карьеру пытаюсь прочитать.", "ДНК — мен бүкіл мансабымда оқуға тырысатын материал.")),
            WW('choreographer',
                WH("I speak in movement instead of words.", "Я говорю движением вместо слов.", "Мен сөздің орнына қимылмен сөйлеймін."),
                WH("A stage full of dancers exists to bring my ideas to life.", "Сцена, полная танцоров, существует, чтобы воплотить мои идеи.", "Билеушілерге толы сахна менің идеяларымды жүзеге асыру үшін бар."),
                WH("Before anyone dances a single step, the whole performance already lives in my head.", "Прежде чем кто-то сделает хоть один шаг танца, весь номер уже живёт в моей голове.", "Ешкім бір қадам билемей тұрып, бүкіл қойылым менің басымда өмір сүреді.")),
            WW('cryptographer',
                WH("I build puzzles that are designed to be nearly impossible to solve.", "Я создаю головоломки, которые почти невозможно решить.", "Мен шешу мүмкін емес дерлік жұмбақтар жасаймын."),
                WH("Secret messages are safe because of the codes people like me invent.", "Секретные сообщения в безопасности благодаря кодам, которые изобретают такие, как я.", "Құпия хабарламалар мен сияқты адамдар ойлап тапқан кодтардың арқасында қауіпсіз."),
                WH("Every time your data stays private online, someone in my profession made that possible.", "Каждый раз, когда твои данные остаются приватными в сети, кто-то в моей профессии сделал это возможным.", "Деректерің интернетте құпия қалған сайын, менің кәсібімдегі біреу мұны мүмкін еткен.")),
            WW('ethicist',
                WH("I'm paid to ask whether something SHOULD be done, not just whether it CAN be done.", "Мне платят за вопрос, СЛЕДУЕТ ли что-то делать, а не только МОЖНО ли это делать.", "Маған бір нәрсені істеуге БОЛА МА емес, істеу КЕРЕК ПЕ деген сұрақ үшін ақы төлейді."),
                WH("New technology often needs someone like me before it's allowed to be used.", "Новой технологии часто нужен кто-то вроде меня, прежде чем её разрешат использовать.", "Жаңа технологияға пайдалануға рұқсат етілмес бұрын көбіне мен сияқты адам керек."),
                WH("Right and wrong, in complicated new situations, is the puzzle I get paid to think through.", "Правильное и неправильное в сложных новых ситуациях — головоломка, за решение которой мне платят.", "Күрделі жаңа жағдайлардағы дұрыс пен бұрыс — маған ақы төленетін жұмбақ.")),
            WW('philanthropist',
                WH("My success only really matters to me once I've given a large part of it away.", "Мой успех действительно важен для меня только после того, как я отдал большую его часть.", "Табысым маған оның үлкен бөлігін бергеннен кейін ғана шынымен маңызды болады."),
                WH("A hospital or a school might exist today because of money I once gave.", "Больница или школа может существовать сегодня благодаря деньгам, которые я когда-то дал.", "Аурухана немесе мектеп бүгін мен бір кездері берген ақшаның арқасында өмір сүруі мүмкін."),
                WH("Helping strangers I'll never meet is somehow one of my greatest joys.", "Помощь незнакомцам, которых я никогда не встречу, почему-то одна из моих величайших радостей.", "Ешқашан кездеспейтін бейтаныс адамдарға көмектесу неге екенін білмеймін, менің ең үлкен қуанышым.")),
            WW('arbitrator',
                WH("Two sides bring me their argument instead of taking it to court.", "Две стороны приносят мне свой спор вместо того, чтобы идти в суд.", "Екі тарап дауын сотқа апарудың орнына маған әкеледі."),
                WH("My decision is final, and both sides already agreed to accept it.", "Моё решение окончательное, и обе стороны уже согласились его принять.", "Менің шешімім түпкілікті, екі тарап та оны қабылдауға келіскен."),
                WH("I settle disputes quietly, without a judge or a jury ever getting involved.", "Я тихо решаю споры, без судьи и присяжных.", "Мен дауларды судья мен алқабилерсіз тыныш шешемін.")),
            WW('actuary',
                WH("Insurance companies pay me to calculate exactly how risky your life really is.", "Страховые компании платят мне за точный расчёт того, насколько рискованна на самом деле твоя жизнь.", "Сақтандыру компаниялары маған өміріңнің қаншалықты қауіпті екенін дәл есептеу үшін ақы төлейді."),
                WH("Numbers about death, accidents, and disasters are simply data to me.", "Цифры о смерти, авариях и катастрофах для меня просто данные.", "Өлім, апат және зілзалалар туралы сандар мен үшін жай ғана деректер."),
                WH("The price of your insurance was very likely decided by someone in my profession.", "Цену твоей страховки, скорее всего, определил кто-то из моей профессии.", "Сақтандыруыңның бағасын менің кәсібімдегі біреу шешкен болуы мүмкін.")),
        ];
    }
    // beginner (and fallback)
    return [
        WW('farmer',
            WH("I wake up before the sun to take care of my land.", "Я просыпаюсь до восхода солнца, чтобы заботиться о своей земле.", "Мен жеріме қарау үшін күн шықпай тұрып оянамын."),
            WH("Rain worries me more than almost anyone else you know.", "Дождь беспокоит меня больше, чем почти любого другого человека, которого ты знаешь.", "Жаңбыр мені сен білетін кез келген адамнан гөрі көбірек алаңдатады."),
            WH("The bread on your table probably started with wheat I grew.", "Хлеб на твоём столе, вероятно, начался с пшеницы, которую вырастил я.", "Үстеліңдегі нан мен өсірген бидайдан басталған болуы мүмкін.")),
        WW('baker',
            WH("My workday often starts while the rest of the town is still asleep.", "Мой рабочий день часто начинается, пока весь город ещё спит.", "Жұмыс күнім бүкіл қала ұйықтап жатқанда басталады."),
            WH("Flour dusts my hands before the sun even rises.", "Мука покрывает мои руки ещё до восхода солнца.", "Күн шықпай жатып қолыма ұн жағылады."),
            WH("That warm smell in the morning air is usually because of me.", "Этот тёплый утренний запах обычно исходит от меня.", "Таңертеңгі сол жылы иіс әдетте меннен шығады.")),
        WW('tailor',
            WH("Give me fabric, and I'll give you something that actually fits you.", "Дай мне ткань, и я сделаю то, что действительно подойдёт тебе.", "Маған мата берсең, саған нақты жарасатын нәрсе жасаймын."),
            WH("A needle and thread are basically extensions of my hands.", "Игла и нить — почти продолжение моих рук.", "Ине мен жіп менің қолымның жалғасы іспетті."),
            WH("When your trousers are too long, I'm the one you visit.", "Когда твои брюки слишком длинные, ты приходишь ко мне.", "Шалбарың тым ұзын болса, сен маған келесің.")),
        WW('barber',
            WH("People trust me with something growing right on top of their head.", "Люди доверяют мне то, что растёт прямо на макушке их головы.", "Адамдар маған бастарының үстінде өсіп тұрған нәрсені сенеді."),
            WH("A pair of scissors and a mirror are my closest tools.", "Ножницы и зеркало — мои самые близкие инструменты.", "Қайшы мен айна — менің ең жақын құралдарым."),
            WH("You leave my chair looking noticeably different than when you arrived.", "Ты уходишь из моего кресла, заметно изменившись.", "Менің орындығымнан айтарлықтай өзгеріп шығасың.")),
        WW('plumber',
            WH("You never think about me until something starts leaking.", "Обо мне никто не думает, пока что-то не начнёт течь.", "Бір нәрсе ағып кетпейінше, ешкім мен туралы ойламайды."),
            WH("Pipes and wrenches are more familiar to me than most furniture.", "Трубы и гаечные ключи знакомы мне лучше, чем большинство мебели.", "Құбырлар мен кілттер маған көптеген жиһаздан да таныс."),
            WH("When your sink won't stop dripping, I'm the emergency call.", "Когда твоя раковина не перестаёт капать, ты звонишь мне.", "Раковинаң тоқтаусыз тамшыласа, сен маған қоңырау шаласың.")),
        WW('painter',
            WH("I turn a plain, boring wall into something worth looking at.", "Я превращаю обычную скучную стену в нечто, на что стоит смотреть.", "Мен қарапайым, жалықтыратын қабырғаны қарауға тұрарлық нәрсеге айналдырамын."),
            WH("My clothes are never quite as clean as they used to be.", "Моя одежда никогда не бывает такой чистой, как раньше.", "Киімім бұрынғыдай таза болмайды."),
            WH("A roller and a can of color are my favorite tools.", "Валик и банка с краской — мои любимые инструменты.", "Дөңгелек щетка мен бояу банкасы — менің сүйікті құралдарым.")),
        WW('librarian',
            WH("Thousands of stories live under my care, and I know exactly where each one hides.", "Тысячи историй под моей заботой, и я точно знаю, где каждая из них прячется.", "Менің қарауымда мыңдаған әңгіме бар, әрқайсысының қайда жасырынғанын дәл білемін."),
            WH("I ask for quiet more often than almost anyone you'll meet.", "Я прошу тишины чаще, чем почти любой человек, которого ты встретишь.", "Мен тыныштық сұрауды сен кездестіретін кез келген адамнан жиірек жасаймын."),
            WH("If you can't find a book, I probably can find it in seconds.", "Если ты не можешь найти книгу, я, вероятно, найду её за секунды.", "Кітапты таба алмасаң, мен оны секундтарда табамын.")),
        WW('cashier',
            WH("You meet me for just a few seconds, but you meet me constantly.", "Ты встречаешь меня всего на несколько секунд, но встречаешь постоянно.", "Сен мені бірнеше секундқа ғана кездестіресің, бірақ үнемі кездестіресің."),
            WH("A drawer full of money and a scanner are the tools of my day.", "Ящик, полный денег, и сканер — инструменты моего дня.", "Ақшаға толы жәшік пен сканер — менің күнімнің құралдары."),
            WH("I'm usually the last person you talk to before leaving a shop.", "Обычно я последний человек, с которым ты разговариваешь перед выходом из магазина.", "Дүкеннен шығар алдында сөйлесетін соңғы адам әдетте менмін.")),
        WW('waiter',
            WH("I remember your order, even when you change your mind twice.", "Я запоминаю твой заказ, даже если ты дважды передумал.", "Екі рет ойыңды өзгертсең де, тапсырысыңды есте сақтаймын."),
            WH("A small tip at the end of the meal can make my whole day.", "Небольшие чаевые в конце обеда могут сделать весь мой день.", "Тамақтан кейінгі кішкентай сыйақы менің бүкіл күнімді жасауы мүмкін."),
            WH("I'm the one who brings your food and takes away your empty plate.", "Я тот, кто приносит твою еду и уносит пустую тарелку.", "Тамағыңды әкеліп, бос тәрелкеңді алып кететін мен.")),
        WW('mechanic',
            WH("Something growls and rattles, and people bring it straight to me.", "Что-то рычит и стучит, и люди приносят это прямо ко мне.", "Бір нәрсе гуілдеп, сарсылдаса, адамдар оны тікелей маған әкеледі."),
            WH("My hands are rarely completely clean by the end of the day.", "Мои руки редко бывают полностью чистыми к концу дня.", "Күн соңында қолым сирек толық таза болады."),
            WH("When your car won't start, I'm the one who finds out why.", "Когда твоя машина не заводится, я узнаю, почему.", "Көлігің қозғалмаса, себебін табатын менмін.")),
    ];
}

// Not level-partitioned for uniqueness like Hangman - riddles are meant to
// feel fresh/random each playthrough rather than guaranteed non-repeating
// across every lesson at a level.
function extract_whoami_words(int $lessonId, string $level, int $count = 4): array {
    $bank = build_whoami_bank($level);
    mt_srand($lessonId + 9973);
    shuffle($bank);
    return array_slice($bank, 0, min($count, count($bank)));
}
