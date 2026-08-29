<?php
declare(strict_types=1);

require_once __DIR__ . '/db.php';

// Trilingual hint. Hints go from vague/riddle-like to more specific -
// nothing here is a plain dictionary definition like the Hangman clues.
function WH(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }
function WW(string $word, array $h1, array $h2, array $h3): array { return ['word' => $word, 'hints' => [$h1, $h2, $h3]]; }

function build_whoami_bank(string $level): array {
    if ($level === 'elementary') {
        return [
            WW('compass',
                WH("I never get lost, no matter where you take me.", "Я никогда не теряюсь, куда бы ты меня ни взял.", "Мені қайда алып барсаң да, мен ешқашан адаспаймын."),
                WH("My little arrow always points to the same direction, no matter what.", "Моя маленькая стрелка всегда указывает в одном и том же направлении, что бы ни случилось.", "Менің кішкентай көрсеткішім не болса да әрқашан бір бағытты көрсетеді."),
                WH("Sailors and hikers trust me before they trust a map.", "Моряки и туристы доверяют мне раньше, чем карте.", "Теңізшілер мен туристер картаға сенгенше маған сенеді.")),
            WW('telescope',
                WH("I make faraway things feel like they're right beside you.", "Я делаю так, что далёкие вещи кажутся совсем рядом с тобой.", "Мен алыстағы заттарды дәл жаныңдағыдай сезіндіремін."),
                WH("Scientists point me at the sky to study stars no eye can see alone.", "Учёные направляют меня в небо, чтобы изучать звёзды, которые не видно простым глазом.", "Ғалымдар жай көзбен көрінбейтін жұлдыздарды зерттеу үшін мені аспанға бағыттайды."),
                WH("The more powerful I am, the deeper into space I can see.", "Чем я мощнее, тем глубже в космос я могу заглянуть.", "Мен неғұрлым қуатты болсам, соғұрлым ғарышты тереңірек көре аламын.")),
            WW('thermometer',
                WH("People check on me when they're not feeling well.", "Люди обращаются ко мне, когда плохо себя чувствуют.", "Адамдар өздерін жаман сезінгенде маған қарайды."),
                WH("I can tell you if it's freezing or boiling, just by looking at me.", "Я могу сказать тебе, холодно или жарко, стоит только на меня взглянуть.", "Маған қарау арқылы суық немесе ыстық екенін біле аласың."),
                WH("A doctor might put me under your tongue or against your forehead.", "Врач может положить меня тебе под язык или приложить ко лбу.", "Дәрігер мені тіліңнің астына немесе маңдайыңа қоюы мүмкін.")),
            WW('lighthouse',
                WH("I stand alone by the water, watching over travelers I'll never meet.", "Я стою одиноко у воды, наблюдая за путешественниками, которых никогда не встречу.", "Мен судың жағасында жалғыз тұрып, ешқашан кездеспейтін саяхатшыларды бақылаймын."),
                WH("My light spins around all night so no one crashes into the rocks.", "Мой свет кружится всю ночь, чтобы никто не разбился о скалы.", "Ешкім жартастарға соқтығыспас үшін менің жарығым түні бойы айналады."),
                WH("Ships far out at sea search for my beam during a storm.", "Корабли далеко в море ищут мой луч во время шторма.", "Теңіздегі алыс кемелер дауыл кезінде менің сәулемді іздейді.")),
            WW('waterfall',
                WH("I'm always falling, but I never seem to hit the ground for good.", "Я всегда падаю, но, кажется, никогда не падаю окончательно.", "Мен әрқашан құлап жатырмын, бірақ ешқашан толықтай құлап бітпейтін сияқтымын."),
                WH("You can hear my roar long before you ever see me.", "Ты услышишь мой рёв задолго до того, как увидишь меня.", "Сен мені көрмей тұрып-ақ, менің гуілімді естисің."),
                WH("Rivers jump off a cliff and become me.", "Реки прыгают со скалы и становятся мной.", "Өзендер жардан секіріп, мен болып шығады.")),
            WW('glacier',
                WH("I move so slowly that you'd never notice me traveling.", "Я двигаюсь так медленно, что ты никогда не заметишь моего движения.", "Мен соншалықты баяу қозғаламын, сен менің жылжуымды ешқашан байқамайсың."),
                WH("I've been frozen for so long, some of my ice is older than any person alive.", "Я заморожен так давно, что часть моего льда старше любого живого человека.", "Мен сонша ұзақ уақыт мұздап жатырмын, мұзымның кейбір бөлігі кез келген тірі адамнан үлкен."),
                WH("Scientists worry that I'm shrinking faster every year because of warming.", "Учёные беспокоятся, что из-за потепления я таю всё быстрее каждый год.", "Ғалымдар жылынудың салдарынан мен жыл сайын жылдамырақ кішірейіп жатырмын деп алаңдайды.")),
        ];
    }
    if ($level === 'pre-intermediate') {
        return [
            WW('stethoscope',
                WH("I let someone listen to a secret sound hidden inside your chest.", "Я позволяю кому-то услышать тайный звук, спрятанный внутри твоей груди.", "Мен біреуге кеудеңнің ішінде жасырылған құпия дыбысты естуге мүмкіндік беремін."),
                WH("A doctor hangs me around their neck between patients.", "Врач вешает меня на шею между приёмами пациентов.", "Дәрігер науқастар арасында мені мойнына іледі."),
                WH("Through me, you can hear a heart beating from the outside.", "Через меня можно услышать, как бьётся сердце, находясь снаружи.", "Мен арқылы сырттан жүректің соғысын естуге болады.")),
            WW('parachute',
                WH("I'm useless until the moment someone jumps out of something very high.", "Я бесполезен, пока кто-то не прыгнет с чего-то очень высокого.", "Біреу өте биіктен секірмейінше, менен пайда жоқ."),
                WH("I stay folded and forgotten until I suddenly open wide above your head.", "Я остаюсь сложенным и забытым, пока вдруг не раскрываюсь широко над твоей головой.", "Мен басыңның үстінде кенеттен кең ашылғанша бүктеулі және ұмытылған күйде жатамын."),
                WH("Without me, a jump from an airplane would end very badly.", "Без меня прыжок из самолёта закончился бы очень плохо.", "Мен болмасам, ұшақтан секіру өте жаман аяқталар еді.")),
            WW('hourglass',
                WH("I have no hands, yet I still tell you something about time.", "У меня нет стрелок, но я всё равно рассказываю тебе о времени.", "Менің тілшелерім жоқ, бірақ мен саған уақыт туралы бәрібір айтамын."),
                WH("Tiny grains fall through my narrow waist, and when they stop, so does my job.", "Крошечные песчинки падают через мою узкую талию, и когда они останавливаются, моя работа тоже заканчивается.", "Кішкентай құм түйіршіктері менің тар белімнен түседі, олар тоқтағанда менің жұмысым да тоқтайды."),
                WH("Turn me upside down, and I start counting all over again.", "Переверни меня, и я снова начинаю отсчёт.", "Мені төңкерсең, мен қайтадан санай бастаймын.")),
            WW('chameleon',
                WH("I can agree with my surroundings without saying a single word.", "Я могу соглашаться с окружением, не сказав ни единого слова.", "Мен бір ауыз сөз айтпай-ақ қоршаған ортаммен келісе аламын."),
                WH("Blend into a leaf, a rock, or a branch - it's all the same to me.", "Слиться с листом, камнем или веткой — для меня без разницы.", "Жапыраққа, тасқа немесе бұтаққа сіңіп кету — мен үшін бәрібір."),
                WH("My skin changes color so well that predators often walk right past me.", "Моя кожа меняет цвет так хорошо, что хищники часто проходят мимо меня.", "Менің терім түсті соншалықты жақсы өзгертеді, жыртқыштар көбіне менің қасымнан өтіп кетеді.")),
            WW('boomerang',
                WH("Throw me away, and I take that personally - I always come back.", "Выбрось меня, и я восприму это лично — я всегда возвращаюсь.", "Мені лақтырып жібер, мен мұны жеке қабылдаймын — мен әрқашан қайтып ораламын."),
                WH("I curve through the air in a way that no straight stick ever could.", "Я изгибаюсь в воздухе так, как никогда не смогла бы прямая палка.", "Мен ауада түзу таяқша ешқашан жасай алмайтындай иіліп ұшамын."),
                WH("Ancient hunters from Australia trusted me to return to their hand.", "Древние охотники из Австралии доверяли, что я вернусь к ним в руку.", "Аустралиялық ежелгі аңшылар менің қолдарына қайта оралатыныма сенген.")),
            WW('tsunami',
                WH("I start as something small and quiet, far out where no one can see me.", "Я начинаюсь как что-то маленькое и тихое, далеко там, где меня никто не видит.", "Мен ешкім көре алмайтын алыс жерде кішкентай және тыныш нәрсе ретінде басталамын."),
                WH("An earthquake under the ocean is often the reason I wake up.", "Землетрясение под океаном часто становится причиной того, что я просыпаюсь.", "Мұхит астындағы жер сілкінісі көбіне менің оянуыма себеп болады."),
                WH("By the time I reach the shore, I've grown into a wall of water.", "К тому времени, как я достигаю берега, я превращаюсь в стену воды.", "Мен жағаға жеткенше, су қабырғасына айналамын.")),
        ];
    }
    if ($level === 'intermediate') {
        return [
            WW('algorithm',
                WH("I live inside computers, but you'll never see my face.", "Я живу внутри компьютеров, но ты никогда не увидишь моё лицо.", "Мен компьютерлердің ішінде өмір сүремін, бірақ сен менің бетімді ешқашан көрмейсің."),
                WH("I'm just a list of steps, followed exactly, in exactly the right order.", "Я всего лишь список шагов, которым следуют точно и в правильном порядке.", "Мен тек дәл және дұрыс ретпен орындалатын қадамдар тізімімін."),
                WH("Without me, your phone wouldn't know how to sort your photos or suggest a video.", "Без меня твой телефон не знал бы, как отсортировать фотографии или предложить видео.", "Мен болмасам, телефоның суреттерді сұрыптауды немесе бейне ұсынуды білмес еді.")),
            WW('ecosystem',
                WH("I'm not one living thing - I'm an entire community that depends on itself.", "Я не одно живое существо — я целое сообщество, которое зависит само от себя.", "Мен бір тірі жәндік емеспін — мен өзіне-өзі тәуелді тұтас қауымдастықпын."),
                WH("Remove one small piece of me, and the rest of me can start to collapse.", "Убери одну маленькую часть меня, и остальное может начать разрушаться.", "Менің бір кішкентай бөлігімді алып тастасаң, қалғаны құлдырай бастауы мүмкін."),
                WH("A forest, a coral reef, and even a puddle can each be one of me.", "Лес, коралловый риф и даже лужа — каждый из них может быть мной.", "Орман, маржан рифі және тіпті шалшық судың әрқайсысы мен бола алады.")),
            WW('hypothesis',
                WH("I'm not a fact yet - I'm just a guess dressed up in scientific clothes.", "Я ещё не факт — я всего лишь догадка, одетая в научную одежду.", "Мен әлі факт емеспін — мен тек ғылыми киім киген болжаммын."),
                WH("Scientists build me before they even run a single experiment.", "Учёные создают меня ещё до того, как проведут хотя бы один эксперимент.", "Ғалымдар бір ғана тәжірибе жасамай тұрып-ақ мені құрастырады."),
                WH("An experiment's whole job is to prove me right or prove me wrong.", "Вся задача эксперимента — доказать, что я права, или доказать, что я неправа.", "Тәжірибенің бүкіл міндеті — менің дұрыс немесе бұрыс екенімді дәлелдеу.")),
            WW('metaphor',
                WH("I compare two things without ever using the word 'like' or 'as'.", "Я сравниваю две вещи, никогда не используя слово «как» или «словно».", "Мен «сияқты» немесе «тәрізді» деген сөзді қолданбай-ақ екі затты салыстырамын."),
                WH("Poets and writers love to hide me inside their most beautiful lines.", "Поэты и писатели любят прятать меня в своих самых красивых строках.", "Ақындар мен жазушылар мені өздерінің ең әдемі жолдарының ішіне жасыруды жақсы көреді."),
                WH("When someone says 'time is money,' they're actually using me.", "Когда кто-то говорит «время — деньги», он на самом деле использует меня.", "Біреу «уақыт — ақша» дегенде, ол шын мәнінде мені қолданып тұр.")),
            WW('adrenaline',
                WH("I rush through you the moment you're scared or excited - you can't call me on purpose.", "Я мчусь по тебе в момент страха или волнения — ты не можешь вызвать меня специально.", "Сен қорыққанда немесе қуанғанда мен арқылы жүгіремін — сен мені әдейі шақыра алмайсың."),
                WH("Skydivers and roller coaster riders chase the feeling I give them.", "Парашютисты и любители американских горок гоняются за чувством, которое я им дарю.", "Парашютшылар мен аттракционда жүретіндер мен беретін сезімнің соңынан қуады."),
                WH("Your body secretly makes me the instant it senses danger.", "Твоё тело тайно вырабатывает меня в тот миг, когда чувствует опасность.", "Денең қауіпті сезген сәтте мені жасырын түрде шығарады.")),
            WW('gravity',
                WH("I've been pulling on you since the moment you were born, and I never let go.", "Я тяну тебя с самого твоего рождения и никогда не отпускаю.", "Мен сені дүниеге келген сәттен бастап тартып келемін және ешқашан жібермеймін."),
                WH("Drop anything, and I'm the invisible reason it falls instead of floating.", "Урони что угодно, и я — невидимая причина того, что оно падает, а не парит.", "Кез келген затты түсір, мен оның қалықтамай құлауының көрінбейтін себебімін."),
                WH("Without me, everything on Earth - including you - would drift off into space.", "Без меня всё на Земле, включая тебя, унеслось бы в космос.", "Мен болмасам, Жердегінің бәрі, соның ішінде сен де, ғарышқа ұшып кетер едің.")),
        ];
    }
    // beginner (and fallback)
    return [
        WW('moon',
            WH("At night, I often watch over the world while everyone sleeps.", "Ночью я часто наблюдаю за миром, пока все спят.", "Түнде барлығы ұйықтап жатқанда мен әлемді жиі бақылаймын."),
            WH("I don't make my own light - I only borrow it from a brighter friend.", "Я не создаю свой собственный свет — я лишь одалживаю его у более яркого друга.", "Мен өз жарығымды жасамаймын — оны жарқын досымнан ғана қарызға аламын."),
            WH("Humans have walked on my surface and left footprints that will never blow away.", "Люди ходили по моей поверхности и оставили следы, которые никогда не сдует ветром.", "Адамдар менің бетімде жүріп, желмен ешқашан ұшпайтын іздер қалдырды.")),
        WW('umbrella',
            WH("People forget about me until the sky starts to cry.", "Люди забывают обо мне, пока небо не начинает плакать.", "Аспан жылай бастағанша адамдар мені ұмытып кетеді."),
            WH("I open my wings above your head, but I never fly.", "Я раскрываю крылья над твоей головой, но никогда не летаю.", "Мен басыңның үстінде қанатымды жаямын, бірақ ешқашан ұшпаймын."),
            WH("Rain slides right off my back while you stay dry underneath.", "Дождь стекает прямо с моей спины, пока ты остаёшься сухим под ней.", "Сен астымда құрғақ қалғанда, жаңбыр менің арқамнан сырғып түседі.")),
        WW('volcano',
            WH("I look calm for years, but deep inside I'm always a little angry.", "Я выгляжу спокойным годами, но внутри всегда немного зол.", "Мен жылдар бойы тыныш көрінемін, бірақ ішімде әрқашан аздап ашулымын."),
            WH("When I lose my temper, I spit fire and turn the sky grey.", "Когда я теряю терпение, я извергаю огонь и делаю небо серым.", "Мен ашуланғанда, от шашырата бастаймын және аспанды сұр етемін."),
            WH("Ancient cities have been buried under what I breathe out.", "Древние города были погребены под тем, что я выдыхаю.", "Ежелгі қалалар мен тыныстап шығарған заттың астында қалды.")),
        WW('kangaroo',
            WH("I carry my baby everywhere, but never in my arms.", "Я ношу своего малыша везде, но никогда на руках.", "Мен баламды қайда барса да алып жүремін, бірақ ешқашан қолымда емес."),
            WH("My legs are so strong I never need to walk - I just bounce.", "Мои ноги настолько сильные, что мне никогда не нужно ходить — я просто прыгаю.", "Аяқтарым сонша мықты, маған жүрудің қажеті жоқ — мен жай ғана секіремін."),
            WH("I come from a faraway land full of red desert and strange animals.", "Я родом из далёкой земли, полной красной пустыни и странных животных.", "Мен қызыл шөл мен ғажайып жануарларға толы алыс жерден келемін.")),
        WW('rainbow',
            WH("You can never touch me, no matter how close I look.", "Ты никогда не сможешь меня коснуться, каким бы близким я ни казался.", "Мен қаншалықты жақын көрінсем де, сен маған ешқашан қол тигізе алмайсың."),
            WH("I only show my face after the rain and the sun make peace.", "Я показываю своё лицо только после того, как дождь и солнце помирятся.", "Мен жаңбыр мен күн татуласқаннан кейін ғана бетімді көрсетемін."),
            WH("I wear every color at once, arched like a bridge in the sky.", "Я ношу все цвета сразу, изгибаясь, как мост в небе.", "Мен барлық түстерді бірден киемін, аспандағы көпір сияқты иіліп тұрамын.")),
        WW('spider',
            WH("I have more legs than you, and I'm not shy about showing them.", "У меня больше ног, чем у тебя, и я не стесняюсь их показывать.", "Менің аяғым сенікінен көп, және мен оларды көрсетуден тартынбаймын."),
            WH("I build a beautiful trap, but I never mean to scare you.", "Я строю красивую ловушку, но никогда не хочу тебя напугать.", "Мен әдемі тор құрамын, бірақ сені қорқытуды ешқашан ойламаймын."),
            WH("Many people jump on a chair the moment they spot me.", "Многие люди запрыгивают на стул, как только замечают меня.", "Көптеген адамдар мені байқаған сәтте орындыққа секіріп шығады.")),
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
