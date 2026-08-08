<?php
declare(strict_types=1);
// Included from seed_lessons_batch2.php — shares its scope ($lessons, function V()).

// ========================= PRE-INTERMEDIATE (batch 2) =========================

$lessons[] = [
    'level' => 'pre-intermediate', 'topic' => 'Health and Fitness Trends', 'background_key' => 'energetic',
    'warmup' => V(
        "Let's talk about fitness. What do you do to stay in shape, and what fitness trends have you noticed?",
        'Давайте поговорим о фитнесе. Что вы делаете, чтобы быть в форме, и какие тренды в фитнесе вы заметили?',
        'Фитнес туралы сөйлесейік. Пішініңізді сақтау үшін не істейсіз және қандай фитнес трендтерін байқадыңыз?'
    ),
    'vocab' => [
        V('nutrition', 'питание', 'тамақтану'), V('workout', 'тренировка', 'жаттығу'), V('calorie', 'калория', 'калория'),
        V('supplement', 'добавка', 'қоспа'), V('obesity', 'ожирение', 'семіздік'), V('diet', 'диета', 'диета'),
        V('metabolism', 'обмен веществ', 'зат алмасу'), V('gym membership', 'абонемент в спортзал', 'спортзал абонементі'), V('physical therapy', 'физиотерапия', 'физиотерапия'), V('wellness', 'благополучие', 'саулық'),
    ],
    'questions' => [
        V('Do you follow a specific diet or exercise routine?', 'Вы придерживаетесь определённой диеты или режима тренировок?', 'Белгілі бір диетаны немесе жаттығу тәртібін ұстанасыз ба?'),
        V('What fitness trend do you find most interesting?', 'Какой тренд в фитнесе кажется вам самым интересным?', 'Қай фитнес тренді сізге ең қызықты көрінеді?'),
        V('Do you think diet or exercise matters more for health?', 'Как вы думаете, что важнее для здоровья — диета или упражнения?', 'Денсаулық үшін диета ма, әлде жаттығу ма маңыздырақ деп ойлайсыз?'),
        V('Would you ever pay for a gym membership? Why or why not?', 'Вы бы стали платить за абонемент в спортзал? Почему да или нет?', 'Спортзал абонементіне ақы төлер ме едіңіз? Неге ия немесе жоқ?'),
        V('Do you think supplements are necessary for a healthy lifestyle?', 'Как вы думаете, добавки необходимы для здорового образа жизни?', 'Сау өмір салты үшін қоспалар қажет деп ойлайсыз ба?'),
        V('What is the biggest obstacle to staying fit for most people?', 'Какое самое большое препятствие для поддержания формы у большинства людей?', 'Көпшілік адамдар үшін пішінді сақтаудағы ең үлкен кедергі не?'),
    ],
];

$lessons[] = [
    'level' => 'pre-intermediate', 'topic' => 'The World of Work', 'background_key' => 'professional',
    'warmup' => V(
        "Let's talk about the modern workplace. What skills do you think matter most for succeeding at work?",
        'Давайте поговорим о современном рабочем месте. Какие навыки, по-вашему, важнее всего для успеха на работе?',
        'Заманауи жұмыс орны туралы сөйлесейік. Жұмыста табысты болу үшін қандай дағдылар ең маңызды деп ойлайсыз?'
    ),
    'vocab' => [
        V('teamwork', 'командная работа', 'топпен жұмыс'), V('leadership', 'лидерство', 'көшбасшылық'), V('negotiation', 'переговоры', 'келіссөз'),
        V('deadline', 'дедлайн', 'мерзім'), V('feedback', 'обратная связь', 'кері байланыс'), V('delegate', 'делегировать', 'тапсыру'),
        V('initiative', 'инициатива', 'бастама'), V('networking', 'нетворкинг', 'байланыс құру'), V('mentor', 'наставник', 'тәлімгер'), V('work ethic', 'трудовая этика', 'еңбек этикасы'),
    ],
    'questions' => [
        V('What skill do you think is most important for a good career?', 'Какой навык, по-вашему, самый важный для хорошей карьеры?', 'Жақсы мансап үшін қандай дағды ең маңызды деп ойлайсыз?'),
        V('Do you prefer working in a team or independently?', 'Вы предпочитаете работать в команде или самостоятельно?', 'Топпен жұмыс істегенді ұнатасыз ба, әлде дербес пе?'),
        V('Have you ever had a mentor? How did they help you?', 'У вас когда-нибудь был наставник? Как он вам помог?', 'Сізде тәлімгер болды ма? Ол сізге қалай көмектесті?'),
        V('How do you usually react to negative feedback?', 'Как вы обычно реагируете на негативную обратную связь?', 'Теріс кері байланысқа әдетте қалай жауап бересіз?'),
        V('Is networking important for building a career? Why?', 'Важен ли нетворкинг для построения карьеры? Почему?', 'Мансап құру үшін байланыс құру маңызды ма? Неге?'),
        V('What makes a good leader in your opinion?', 'Что, по-вашему, делает лидера хорошим?', 'Сіздің ойыңызша, көшбасшыны жақсы ететін не?'),
    ],
];

$lessons[] = [
    'level' => 'pre-intermediate', 'topic' => 'Consumerism and Advertising', 'background_key' => 'night-city',
    'warmup' => V(
        "Let's talk about advertising. How do ads influence what you buy?",
        'Давайте поговорим о рекламе. Как реклама влияет на то, что вы покупаете?',
        'Жарнама туралы сөйлесейік. Жарнама сатып алатын затыңызға қалай әсер етеді?'
    ),
    'vocab' => [
        V('advertisement', 'реклама', 'жарнама'), V('brand', 'бренд', 'бренд'), V('marketing', 'маркетинг', 'маркетинг'),
        V('consumer', 'потребитель', 'тұтынушы'), V('sponsorship', 'спонсорство', 'демеушілік'), V('product placement', 'продакт-плейсмент', 'өнімді орналастыру'),
        V('slogan', 'слоган', 'ұран'), V('target audience', 'целевая аудитория', 'мақсатты аудитория'), V('packaging', 'упаковка', 'қаптама'), V('endorsement', 'поддержка (рекламная)', 'қолдау (жарнамалық)'),
    ],
    'questions' => [
        V('Do you think advertisements really influence your buying decisions?', 'Как вы думаете, реклама действительно влияет на ваши покупки?', 'Жарнама шынымен сатып алу шешіміңізге әсер етеді деп ойлайсыз ба?'),
        V('What is the most memorable advertisement you have seen?', 'Какая самая запоминающаяся реклама, которую вы видели?', 'Көрген ең есте қаларлық жарнамаңыз қандай?'),
        V('Do you trust products endorsed by celebrities?', 'Вы доверяете товарам, которые рекламируют знаменитости?', 'Атақты адамдар қолдайтын өнімдерге сенесіз бе?'),
        V('Is packaging important to you when buying a product?', 'Важна ли для вас упаковка при покупке товара?', 'Өнім сатып алғанда қаптама сіз үшін маңызды ма?'),
        V('Do you think advertising to children should be limited?', 'Как вы думаете, реклама для детей должна быть ограничена?', 'Балаларға арналған жарнама шектелуі керек деп ойлайсыз ба?'),
        V('Why do you think brand loyalty is so powerful for companies?', 'Как вы думаете, почему лояльность к бренду так важна для компаний?', 'Сіздің ойыңызша, бренд адалдығы компаниялар үшін неге осыншалықты күшті?'),
    ],
];

$lessons[] = [
    'level' => 'pre-intermediate', 'topic' => 'Urban vs Rural Life', 'background_key' => 'nature',
    'warmup' => V(
        "Let's talk about city and countryside life. What are the advantages of each?",
        'Давайте поговорим о жизни в городе и в сельской местности. В чём преимущества каждой из них?',
        'Қала мен ауыл өмірі туралы сөйлесейік. Әрқайсысының артықшылықтары қандай?'
    ),
    'vocab' => [
        V('countryside', 'сельская местность', 'ауыл жері'), V('skyscraper', 'небоскрёб', 'аспан тіреуіш'), V('commute', 'ездить на работу', 'жұмысқа қатынау'),
        V('isolation', 'изоляция', 'оқшаулану'), V('community spirit', 'дух общности', 'қауымдастық рухы'), V('pace of life', 'темп жизни', 'өмір қарқыны'),
        V('noise', 'шум', 'шу'), V('convenience', 'удобство', 'ыңғайлылық'), V('tranquility', 'спокойствие', 'тыныштық'), V('overpopulation', 'перенаселение', 'халықтың артық шоғырлануы'),
    ],
    'questions' => [
        V('Would you rather live in a big city or the countryside? Why?', 'Вы бы предпочли жить в большом городе или в сельской местности? Почему?', 'Үлкен қалада тұрғанды қалайсыз ба, әлде ауылда ма? Неге?'),
        V('What do you think is the biggest downside of city life?', 'Что, по-вашему, самый большой недостаток городской жизни?', 'Сіздің ойыңызша, қала өмірінің ең үлкен кемшілігі не?'),
        V('Do small towns have a stronger sense of community than cities?', 'В маленьких городах сильнее чувство общности, чем в больших?', 'Кішкентай қалаларда қауымдастық рухы қалаларға қарағанда күштірек пе?'),
        V('How does noise pollution affect people living in cities?', 'Как шумовое загрязнение влияет на людей, живущих в городах?', 'Шу ластануы қалада тұратын адамдарға қалай әсер етеді?'),
        V('Do you think the pace of life is too fast today?', 'Как вы думаете, темп жизни сегодня слишком быстрый?', 'Бүгінгі өмір қарқыны тым жылдам деп ойлайсыз ба?'),
        V('Would you give up convenience for more peace and quiet?', 'Вы бы отказались от удобства ради большего покоя и тишины?', 'Тыныштық пен бейбітшілік үшін ыңғайлылықтан бас тартар ма едіңіз?'),
    ],
];

$lessons[] = [
    'level' => 'pre-intermediate', 'topic' => 'Generation Gap', 'background_key' => 'minimal-dark',
    'warmup' => V(
        "Let's talk about generations. How are you different from your parents' or grandparents' generation?",
        'Давайте поговорим о поколениях. Чем вы отличаетесь от поколения своих родителей или бабушек и дедушек?',
        'Ұрпақтар туралы сөйлесейік. Сіз ата-анаңыздың немесе әжеңіз бен атаңыздың ұрпағынан қалай ерекшелінесіз?'
    ),
    'vocab' => [
        V('generation', 'поколение', 'ұрпақ'), V('mindset', 'мышление', 'ойлау қалпы'), V('technology gap', 'технологический разрыв', 'технологиялық алшақтық'),
        V('upbringing', 'воспитание', 'тәрбие'), V('values', 'ценности', 'құндылықтар'), V('rebellion', 'бунт', 'бас көтеру'),
        V('respect', 'уважение', 'құрмет'), V('attitude', 'отношение', 'көзқарас'), V('independence', 'независимость', 'тәуелсіздік'), V('curfew', 'комендантский час', 'үйге қайту уақыты'),
    ],
    'questions' => [
        V('What is the biggest difference between your generation and your parents?', 'Какая самая большая разница между вашим поколением и поколением родителей?', 'Сіздің ұрпағыңыз бен ата-анаңыздың ұрпағы арасындағы ең үлкен айырмашылық не?'),
        V('Do you think older generations understand technology as well as younger ones?', 'Как вы думаете, старшие поколения понимают технологии так же хорошо, как молодые?', 'Ересек ұрпақ технологияны жастар сияқты жақсы түсінеді деп ойлайсыз ба?'),
        V('Were you given a curfew when you were younger?', 'У вас было ограничение на время возвращения домой в юности?', 'Жас кезіңізде үйге қайту уақыты болды ма?'),
        V('Do you think your values are similar to your parents\' values?', 'Как вы думаете, ваши ценности похожи на ценности родителей?', 'Құндылықтарыңыз ата-анаңыздың құндылықтарына ұқсас деп ойлайсыз ба?'),
        V('What do older generations do better than younger ones?', 'Что старшие поколения делают лучше, чем молодые?', 'Ересек ұрпақ жастарға қарағанда нені жақсырақ істейді?'),
        V('Is respect for elders as important today as it used to be?', 'Уважение к старшим так же важно сегодня, как раньше?', 'Үлкендерге деген құрмет бүрынғыдай маңызды ма?'),
    ],
];

$lessons[] = [
    'level' => 'pre-intermediate', 'topic' => 'Volunteering and Charity', 'background_key' => 'warm',
    'warmup' => V(
        "Let's talk about volunteering. Have you ever volunteered or given to charity?",
        'Давайте поговорим о волонтёрстве. Вы когда-нибудь были волонтёром или жертвовали на благотворительность?',
        'Еріктілер туралы сөйлесейік. Сіз еріктілер қатарында болдыңыз ба немесе қайырымдылыққа қаражат бөлдіңіз бе?'
    ),
    'vocab' => [
        V('charity', 'благотворительность', 'қайырымдылық'), V('donation', 'пожертвование', 'қайыр садақа'), V('volunteer', 'волонтёр', 'еріктілер'),
        V('fundraiser', 'сбор средств', 'қаражат жинау'), V('non-profit', 'некоммерческий', 'коммерциялық емес'), V('awareness', 'осведомлённость', 'хабардарлық'),
        V('campaign', 'кампания', 'науқан'), V('shelter', 'приют', 'баспана'), V('orphanage', 'детский дом', 'жетімхана'), V('sponsor', 'спонсор', 'демеуші'),
    ],
    'questions' => [
        V('Have you ever volunteered for a cause? What was it?', 'Вы когда-нибудь были волонтёром? Для чего?', 'Қандай да бір іс үшін еріктілер қатарында болдыңыз ба? Не үшін?'),
        V('Do you regularly donate to charity?', 'Вы регулярно жертвуете на благотворительность?', 'Тұрақты түрде қайырымдылыққа қаражат бөлесіз бе?'),
        V('What cause do you care about most?', 'Какая проблема вас волнует больше всего?', 'Сізді ең көп қандай мәселе алаңдатады?'),
        V('Do you think celebrities should use their fame to raise awareness?', 'Как вы думаете, знаменитости должны использовать свою известность, чтобы повышать осведомлённость?', 'Атақты адамдар танымалдылығын хабардарлықты арттыру үшін пайдалануы керек пе деп ойлайсыз ба?'),
        V('Would you rather donate money or your time? Why?', 'Вы бы предпочли пожертвовать деньги или своё время? Почему?', 'Ақша жарнасын беруді қалайсыз ба, әлде уақытыңызды ма? Неге?'),
        V('What makes a charity trustworthy?', 'Что делает благотворительную организацию заслуживающей доверия?', 'Қайырымдылық ұйымын сенімді ететін не?'),
    ],
];

$lessons[] = [
    'level' => 'pre-intermediate', 'topic' => 'Fashion and Self-Expression', 'background_key' => 'playful',
    'warmup' => V(
        "Let's talk about fashion. How does the way you dress express who you are?",
        'Давайте поговорим о моде. Как ваш стиль одежды выражает то, кто вы есть?',
        'Сән туралы сөйлесейік. Киім киісіңіз сіздің кім екеніңізді қалай көрсетеді?'
    ),
    'vocab' => [
        V('style', 'стиль', 'стиль'), V('outfit', 'наряд', 'киім жиынтығы'), V('accessory', 'аксессуар', 'аксессуар'),
        V('designer', 'дизайнер', 'дизайнер'), V('statement', 'заявление (стилем)', 'мәлімдеме (стиль арқылы)'), V('vintage', 'винтажный', 'винтаждық'),
        V('aesthetic', 'эстетика', 'эстетика'), V('confidence', 'уверенность', 'сенімділік'), V('individuality', 'индивидуальность', 'дербестік'), V('fabric', 'ткань', 'мата'),
    ],
    'questions' => [
        V('How would you describe your personal style?', 'Как бы вы описали свой личный стиль?', 'Жеке стиліңізді қалай сипаттар едіңіз?'),
        V('Do you think fashion is a form of self-expression?', 'Как вы думаете, мода — это форма самовыражения?', 'Сән өзін-өзі көрсетудің бір түрі деп ойлайсыз ба?'),
        V('Do you follow fashion trends, or wear what you like?', 'Вы следуете модным трендам или носите то, что нравится?', 'Сән трендтерін қадағалайсыз ба, әлде ұнағанды киесіз бе?'),
        V('Have you ever bought vintage clothing?', 'Вы когда-нибудь покупали винтажную одежду?', 'Винтаждық киім сатып алдыңыз ба?'),
        V('Does what you wear affect your confidence?', 'Влияет ли то, что вы носите, на вашу уверенность?', 'Не киетініңіз сенімділігіңізге әсер ете ме?'),
        V('Do you think people judge others based on their clothing too much?', 'Как вы думаете, люди слишком часто судят других по одежде?', 'Адамдар басқаларды киіміне қарап тым көп бағалайды деп ойлайсыз ба?'),
    ],
];

$lessons[] = [
    'level' => 'pre-intermediate', 'topic' => 'Space and Astronomy', 'background_key' => 'night-city',
    'warmup' => V(
        "Let's talk about space. What fascinates you about astronomy and the universe?",
        'Давайте поговорим о космосе. Что вас увлекает в астрономии и вселенной?',
        'Ғарыш туралы сөйлесейік. Астрономия мен әлемде сізді не қызықтырады?'
    ),
    'vocab' => [
        V('galaxy', 'галактика', 'галактика'), V('planet', 'планета', 'ғаламшар'), V('astronaut', 'космонавт', 'ғарышкер'),
        V('telescope', 'телескоп', 'телескоп'), V('orbit', 'орбита', 'орбита'), V('gravity', 'гравитация', 'ауырлық күші'),
        V('satellite', 'спутник', 'серік'), V('universe', 'вселенная', 'әлем (ғалам)'), V('spacecraft', 'космический корабль', 'ғарыш кемесі'), V('constellation', 'созвездие', 'шоқжұлдыз'),
    ],
    'questions' => [
        V('Have you ever looked at stars through a telescope?', 'Вы когда-нибудь смотрели на звёзды через телескоп?', 'Жұлдыздарды телескоп арқылы қарадыңыз ба?'),
        V('Would you like to travel to space one day? Why or why not?', 'Хотели бы вы когда-нибудь полететь в космос? Почему да или нет?', 'Бір күні ғарышқа саяхаттағыңыз келе ме? Неге ия немесе жоқ?'),
        V('Do you think humans will live on another planet someday?', 'Как вы думаете, люди когда-нибудь будут жить на другой планете?', 'Адамдар бір күні басқа ғаламшарда өмір сүреді деп ойлайсыз ба?'),
        V('What do you find most amazing about the universe?', 'Что вас больше всего восхищает во вселенной?', 'Әлемде сізді ең көп таңғалдыратын не?'),
        V('Should countries spend money exploring space, or solve problems on Earth first?', 'Должны ли страны тратить деньги на исследование космоса или сначала решать проблемы на Земле?', 'Елдер ғарышты зерттеуге ақша жұмсауы керек пе, әлде алдымен Жердегі мәселелерді шешуі керек пе?'),
        V('Would you like to be an astronaut? Why or why not?', 'Хотели бы вы стать космонавтом? Почему да или нет?', 'Ғарышкер болғыңыз келе ме? Неге ия немесе жоқ?'),
    ],
];

$lessons[] = [
    'level' => 'pre-intermediate', 'topic' => 'Books and Reading Habits', 'background_key' => 'calm',
    'warmup' => V(
        "Let's talk about reading. Do you enjoy reading books, and what kind of books do you like?",
        'Давайте поговорим о чтении. Вам нравится читать книги, и какие книги вам нравятся?',
        'Оқу туралы сөйлесейік. Кітап оқуды ұнатасыз ба және қандай кітаптар ұнайды?'
    ),
    'vocab' => [
        V('novel', 'роман', 'роман'), V('author', 'автор', 'автор'), V('narrative', 'повествование', 'баяндау'),
        V('chapter', 'глава', 'тарау'), V('bestseller', 'бестселлер', 'бестселлер'), V('protagonist', 'главный герой', 'бас кейіпкер'),
        V('fiction', 'художественная литература', 'көркем әдебиет'), V('non-fiction', 'документальная литература', 'деректі әдебиет'), V('library', 'библиотека', 'кітапхана'), V('cliffhanger', 'интрига (обрыв на самом интересном месте)', 'қызық сәттегі үзіліс'),
    ],
    'questions' => [
        V('Do you prefer fiction or non-fiction books?', 'Вы предпочитаете художественную литературу или документальную?', 'Көркем әдебиетті ұнатасыз ба, әлде деректі әдебиетті ме?'),
        V('Who is your favorite author? Why?', 'Кто ваш любимый автор? Почему?', 'Сүйікті автроыңыз кім? Неге?'),
        V('Do you read physical books or e-books?', 'Вы читаете бумажные книги или электронные?', 'Қағаз кітапты оқисыз ба, әлде электронды кітапты ма?'),
        V('What was the last book that really impressed you?', 'Какая последняя книга действительно вас впечатлила?', 'Сізге шынымен әсер еткен соңғы кітап қандай болды?'),
        V('Do you find it easy to relate to the main character in a story?', 'Вам легко сопереживать главному герою истории?', 'Оқиғаның бас кейіпкеріне жанашырлық таныту сізге оңай ма?'),
        V('Do you think reading books is still important in the digital age?', 'Как вы думаете, чтение книг всё ещё важно в цифровую эпоху?', 'Цифрлық дәуірде кітап оқу әлі маңызды деп ойлайсыз ба?'),
    ],
];

$lessons[] = [
    'level' => 'pre-intermediate', 'topic' => 'Public Speaking and Communication', 'background_key' => 'minimal-dark',
    'warmup' => V(
        "Let's talk about public speaking. How do you feel about speaking in front of a group of people?",
        'Давайте поговорим о публичных выступлениях. Что вы чувствуете, когда выступаете перед группой людей?',
        'Көпшілік алдында сөйлеу туралы сөйлесейік. Адамдар тобының алдында сөйлегенде өзіңізді қалай сезінесіз?'
    ),
    'vocab' => [
        V('articulate', 'ясно выражаться', 'анық жеткізу'), V('body language', 'язык тела', 'дене тілі'), V('persuasion', 'убеждение', 'сендіру'),
        V('eye contact', 'зрительный контакт', 'көзбен байланыс'), V('stage fright', 'страх сцены', 'сахна қорқынышы'), V('tone of voice', 'тон голоса', 'дауыс тоны'),
        V('rehearse', 'репетировать', 'жаттығу (сөз сөйлеуді)'), V('gesture', 'жест', 'ым-ишара'), V('clarity', 'ясность', 'айқындық'), V('engage', 'вовлекать', 'тарту (қызығушылық)'),
    ],
    'questions' => [
        V('Do you feel nervous when speaking in front of others?', 'Вы нервничаете, когда говорите перед другими?', 'Басқалардың алдында сөйлегенде толқисыз ба?'),
        V('What makes a speech engaging for you as a listener?', 'Что делает речь интересной для вас как слушателя?', 'Тыңдаушы ретінде сөзді сіз үшін қызықты ететін не?'),
        V('Do you prepare and rehearse before an important presentation?', 'Вы готовитесь и репетируете перед важной презентацией?', 'Маңызды баяндама алдында дайындалып, жаттығасыз ба?'),
        V('How important is eye contact when talking to someone?', 'Насколько важен зрительный контакт при разговоре с кем-то?', 'Біреумен сөйлескенде көзбен байланыс қаншалықты маңызды?'),
        V('Have you ever had to overcome stage fright? How?', 'Вам когда-нибудь приходилось преодолевать страх сцены? Как?', 'Сахна қорқынышын жеңуге тура келді ме? Қалай?'),
        V('Who is someone you think is a great public speaker? Why?', 'Кого вы считаете отличным оратором? Почему?', 'Тамаша шешен деп кімді санайсыз? Неге?'),
    ],
];

// ========================= INTERMEDIATE (batch 2) =========================

$lessons[] = [
    'level' => 'intermediate', 'topic' => 'The Gig Economy', 'background_key' => 'professional',
    'warmup' => V(
        "Let's talk about the gig economy. How has freelance and app-based work changed the job market?",
        'Давайте поговорим об экономике свободного заработка. Как фриланс и работа через приложения изменили рынок труда?',
        'Гиг-экономика туралы сөйлесейік. Фриланс пен қолданба арқылы жұмыс еңбек нарығын қалай өзгертті?'
    ),
    'vocab' => [
        V('freelance', 'фриланс', 'фриланс'), V('gig worker', 'работник на подработке', 'уақытша жұмысшы'), V('contract', 'контракт', 'келісім-шарт'),
        V('job security', 'гарантия занятости', 'жұмыс кепілдігі'), V('side hustle', 'подработка', 'қосымша жұмыс'), V('platform economy', 'платформенная экономика', 'платформалық экономика'),
        V('benefits', 'льготы', 'жеңілдіктер'), V('self-employed', 'самозанятый', 'өзін-өзі жұмыспен қамтыған'), V('income instability', 'нестабильность дохода', 'табыс тұрақсыздығы'), V('autonomy', 'автономия', 'дербестік'),
    ],
    'questions' => [
        V('Would you rather have a stable job or freelance freedom? Why?', 'Вы бы предпочли стабильную работу или свободу фриланса? Почему?', 'Тұрақты жұмысты қалайсыз ба, әлде фриланс еркіндігін бе? Неге?'),
        V('What are the biggest risks of gig work?', 'Какие самые большие риски подработки?', 'Уақытша жұмыстың ең үлкен тәуекелдері қандай?'),
        V('Do you think gig workers deserve the same benefits as full-time employees?', 'Как вы думаете, работники на подработке заслуживают тех же льгот, что и штатные сотрудники?', 'Уақытша жұмысшылар толық ставкадағы қызметкерлермен бірдей жеңілдіктерге лайық па деп ойлайсыз ба?'),
        V('Have you ever had a side hustle? What was it?', 'У вас когда-нибудь была подработка? Какая?', 'Сізде қосымша жұмыс болды ма? Қандай?'),
        V('How has the platform economy changed the way people find work?', 'Как платформенная экономика изменила то, как люди находят работу?', 'Платформалық экономика адамдардың жұмыс табу тәсілін қалай өзгертті?'),
        V('Is income instability a fair price for more autonomy?', 'Является ли нестабильность дохода справедливой ценой за большую автономию?', 'Табыс тұрақсыздығы көбірек дербестік үшін әділ баға ма?'),
    ],
];

$lessons[] = [
    'level' => 'intermediate', 'topic' => 'Consumer Culture and Materialism', 'background_key' => 'night-city',
    'warmup' => V(
        "Let's talk about consumer culture. Do you think people today buy more than they need?",
        'Давайте поговорим о потребительской культуре. Как вы думаете, покупают ли люди сегодня больше, чем им нужно?',
        'Тұтынушылық мәдениет туралы сөйлесейік. Қазіргі адамдар қажеттіден көп сатып алады деп ойлайсыз ба?'
    ),
    'vocab' => [
        V('materialism', 'материализм', 'материализм'), V('consumerism', 'потребительство', 'тұтынушылық'), V('disposable income', 'располагаемый доход', 'бос табыс'),
        V('planned obsolescence', 'запланированное устаревание', 'жоспарлы ескіру'), V('status symbol', 'символ статуса', 'мәртебе белгісі'), V('minimalism', 'минимализм', 'минимализм'),
        V('overconsumption', 'чрезмерное потребление', 'шектен тыс тұтыну'), V('brand loyalty', 'лояльность к бренду', 'бренд адалдығы'), V('impulse spending', 'спонтанные траты', 'жедел жұмсау'), V('thrift', 'бережливость', 'үнемшілдік'),
    ],
    'questions' => [
        V('Do you think people buy things to impress others?', 'Как вы думаете, люди покупают вещи, чтобы произвести впечатление на других?', 'Адамдар басқаларға әсер ету үшін зат сатып алады деп ойлайсыз ба?'),
        V('Have you ever tried living a more minimalist lifestyle?', 'Вы когда-нибудь пробовали жить более минималистично?', 'Минималистік өмір салтын сынап көрдіңіз бе?'),
        V('Do you think companies design products to break quickly on purpose?', 'Как вы думаете, компании специально проектируют товары так, чтобы они быстро ломались?', 'Компаниялар өнімдерді әдейі тез бұзылатындай жасайды деп ойлайсыз ба?'),
        V('What is something you own that you consider a status symbol?', 'Что из того, чем вы владеете, вы считаете символом статуса?', 'Иеленген заттарыңыздың ішінен қайсысын мәртебе белгісі деп санайсыз?'),
        V('How do you resist impulse spending?', 'Как вы противостоите спонтанным тратам?', 'Жедел жұмсауға қалай қарсы тұрасыз?'),
        V('Is brand loyalty a good thing or does it limit your choices?', 'Лояльность к бренду — это хорошо, или она ограничивает ваш выбор?', 'Бренд адалдығы жақсы ма, әлде таңдауыңызды шектей ме?'),
    ],
];

$lessons[] = [
    'level' => 'intermediate', 'topic' => 'Genetic Engineering and Bioethics', 'background_key' => 'night-city',
    'warmup' => V(
        "Let's talk about genetic engineering. How far should science go in changing living things?",
        'Давайте поговорим о генной инженерии. Как далеко должна заходить наука в изменении живых существ?',
        'Генетикалық инженерия туралы сөйлесейік. Ғылым тірі организмдерді өзгертуде қаншалықты алысқа баруы керек?'
    ),
    'vocab' => [
        V('gene editing', 'редактирование генов', 'гендерді өңдеу'), V('CRISPR', 'CRISPR', 'CRISPR'), V('cloning', 'клонирование', 'клондау'),
        V('bioethics', 'биоэтика', 'биоэтика'), V('designer baby', 'ребёнок на заказ', 'жобаланған сәби'), V('genetic disorder', 'генетическое заболевание', 'генетикалық ауру'),
        V('biotechnology', 'биотехнология', 'биотехнология'), V('stem cell', 'стволовая клетка', 'дің жасуша'), V('hereditary', 'наследственный', 'тұқым қуалайтын'), V('mutation', 'мутация', 'мутация'),
    ],
    'questions' => [
        V('Do you think gene editing should be allowed to cure diseases?', 'Как вы думаете, редактирование генов должно быть разрешено для лечения болезней?', 'Аурулардан емдеу үшін гендерді өңдеуге рұқсат берілуі керек пе деп ойлайсыз ба?'),
        V('Should parents be allowed to choose traits for their children?', 'Должны ли родители иметь право выбирать черты для своих детей?', 'Ата-аналарға балалары үшін қасиеттерді таңдауға рұқсат берілуі керек пе?'),
        V('What are the ethical risks of cloning?', 'Какие этические риски связаны с клонированием?', 'Клондаудың этикалық тәуекелдері қандай?'),
        V('Do you trust biotechnology companies to make ethical decisions?', 'Вы доверяете биотехнологическим компаниям в принятии этичных решений?', 'Биотехнологиялық компаниялардың этикалық шешім қабылдайтынына сенесіз бе?'),
        V('Would you want to know if you carry a hereditary disease? Why?', 'Хотели бы вы знать, есть ли у вас наследственное заболевание? Почему?', 'Тұқым қуалайтын ауруыңыз бар-жоғын білгіңіз келе ме? Неге?'),
        V('How could genetic engineering change society in the future?', 'Как генная инженерия может изменить общество в будущем?', 'Генетикалық инженерия болашақта қоғамды қалай өзгерте алады?'),
    ],
];

$lessons[] = [
    'level' => 'intermediate', 'topic' => 'The Justice System', 'background_key' => 'minimal-dark',
    'warmup' => V(
        "Let's talk about the justice system. Do you think it treats everyone fairly?",
        'Давайте поговорим о судебной системе. Как вы думаете, она справедлива ко всем?',
        'Сот жүйесі туралы сөйлесейік. Ол барлығына әділ қарайды деп ойлайсыз ба?'
    ),
    'vocab' => [
        V('verdict', 'вердикт', 'үкім'), V('jury', 'присяжные', 'алқабилер'), V('testimony', 'свидетельские показания', 'куәгерлік жауап'),
        V('sentencing', 'вынесение приговора', 'жаза тағайындау'), V('appeal', 'апелляция', 'апелляция'), V('incarceration', 'заключение', 'қамауда ұстау'),
        V('rehabilitation', 'реабилитация', 'оңалту'), V('plea bargain', 'сделка со следствием', 'айыппен келісім'), V('prosecutor', 'прокурор', 'прокурор'), V('defendant', 'подсудимый', 'айыпталушы'),
    ],
    'questions' => [
        V('Do you think the justice system in your country is fair?', 'Как вы думаете, судебная система в вашей стране справедлива?', 'Еліңіздегі сот жүйесі әділ деп ойлайсыз ба?'),
        V('Should the goal of prison be punishment or rehabilitation?', 'Должна ли цель тюрьмы быть наказанием или реабилитацией?', 'Түрменің мақсаты жаза болуы керек пе, әлде оңалту ма?'),
        V('Do you trust juries to make fair decisions?', 'Вы доверяете присяжным в принятии справедливых решений?', 'Алқабилердің әділ шешім қабылдайтынына сенесіз бе?'),
        V('What could be done to make trials fairer?', 'Что можно сделать, чтобы сделать судебные процессы справедливее?', 'Сот процестерін әділетті ету үшін не істеуге болады?'),
        V('Should wealthy and poor defendants have equal access to good lawyers?', 'Должны ли богатые и бедные подсудимые иметь равный доступ к хорошим адвокатам?', 'Бай және кедей айыпталушылардың жақсы адвокаттарға тең қолжетімділігі болуы керек пе?'),
        V('Do you think punishments today are too harsh or too lenient?', 'Как вы думаете, наказания сегодня слишком суровые или слишком мягкие?', 'Бүгінгі жазалар тым қатал ма, әлде тым жұмсақ па деп ойлайсыз ба?'),
    ],
];

$lessons[] = [
    'level' => 'intermediate', 'topic' => 'Immigration and National Identity', 'background_key' => 'warm',
    'warmup' => V(
        "Let's talk about immigration. How does immigration shape a country's identity and culture?",
        'Давайте поговорим об иммиграции. Как иммиграция формирует идентичность и культуру страны?',
        'Иммиграция туралы сөйлесейік. Иммиграция елдің бірегейлігі мен мәдениетін қалай қалыптастырады?'
    ),
    'vocab' => [
        V('immigrant', 'иммигрант', 'иммигрант'), V('refugee', 'беженец', 'босқын'), V('border control', 'пограничный контроль', 'шекара бақылауы'),
        V('naturalization', 'натурализация', 'азаматтыққа қабылдау'), V('asylum', 'убежище', 'пана'), V('xenophobia', 'ксенофобия', 'ксенофобия'),
        V('cultural exchange', 'культурный обмен', 'мәдени алмасу'), V('homeland', 'родина', 'отан'), V('displacement', 'перемещение', 'орын ауыстыру'), V('citizenship', 'гражданство', 'азаматтық'),
    ],
    'questions' => [
        V('How do you think immigration changes a country over time?', 'Как, по-вашему, иммиграция меняет страну со временем?', 'Сіздің ойыңызша, иммиграция уақыт өте елді қалай өзгертеді?'),
        V('What challenges do immigrants usually face in a new country?', 'С какими трудностями обычно сталкиваются иммигранты в новой стране?', 'Иммигранттар жаңа елде әдетте қандай қиындықтарға тап болады?'),
        V('Do you think countries should accept more refugees?', 'Как вы думаете, страны должны принимать больше беженцев?', 'Елдер көбірек босқын қабылдауы керек деп ойлайсыз ба?'),
        V('How can societies reduce xenophobia?', 'Как общества могут уменьшить ксенофобию?', 'Қоғамдар ксенофобияны қалай азайта алады?'),
        V('Is it possible to feel connected to two homelands at once?', 'Возможно ли чувствовать связь с двумя родинами одновременно?', 'Бір мезгілде екі отанмен байланыстылық сезіну мүмкін бе?'),
        V('What does citizenship mean to you beyond legal status?', 'Что для вас значит гражданство помимо юридического статуса?', 'Заңды мәртебеден тыс азаматтық сіз үшін нені білдіреді?'),
    ],
];

$lessons[] = [
    'level' => 'intermediate', 'topic' => 'Consumer Technology and Privacy', 'background_key' => 'night-city',
    'warmup' => V(
        "Let's talk about privacy. How much personal information are you comfortable sharing with technology companies?",
        'Давайте поговорим о конфиденциальности. Какой личной информацией вам комфортно делиться с технологическими компаниями?',
        'Құпиялылық туралы сөйлесейік. Технологиялық компаниялармен қандай жеке ақпаратпен бөлісу сізге ыңғайлы?'
    ),
    'vocab' => [
        V('surveillance', 'слежка', 'қадағалау'), V('data breach', 'утечка данных', 'деректер ағуы'), V('encryption', 'шифрование', 'шифрлау'),
        V('digital footprint', 'цифровой след', 'цифрлық із'), V('biometric', 'биометрический', 'биометриялық'), V('cybersecurity', 'кибербезопасность', 'киберқауіпсіздік'),
        V('tracking', 'отслеживание', 'бақылау'), V('consent', 'согласие', 'келісім'), V('terms of service', 'условия использования', 'қызмет көрсету шарттары'), V('anonymity', 'анонимность', 'анонимдік'),
    ],
    'questions' => [
        V('Do you read the terms of service before using an app?', 'Вы читаете условия использования перед тем, как начать пользоваться приложением?', 'Қолданбаны пайдаланбас бұрын қызмет көрсету шарттарын оқисыз ба?'),
        V('How do you feel about companies tracking your online activity?', 'Что вы думаете о компаниях, отслеживающих вашу активность в интернете?', 'Компаниялардың интернеттегі белсенділігіңізді бақылауына қалай қарайсыз?'),
        V('Have you ever been affected by a data breach?', 'Вас когда-нибудь затрагивала утечка данных?', 'Деректер ағуынан зардап шектіңіз бе?'),
        V('Do you think biometric data like fingerprints is safe to share?', 'Как вы думаете, безопасно ли делиться биометрическими данными, такими как отпечатки пальцев?', 'Саусақ ізі сияқты биометриялық деректермен бөлісу қауіпсіз деп ойлайсыз ба?'),
        V('Is complete online anonymity a good or bad thing?', 'Полная анонимность в интернете — это хорошо или плохо?', 'Интернетте толық анонимдік жақсы ма, әлде жаман ба?'),
        V('What responsibility do tech companies have to protect user data?', 'Какую ответственность несут технологические компании за защиту данных пользователей?', 'Технологиялық компаниялардың пайдаланушы деректерін қорғауда қандай жауапкершілігі бар?'),
    ],
];

$lessons[] = [
    'level' => 'intermediate', 'topic' => 'Political Systems and Democracy', 'background_key' => 'professional',
    'warmup' => V(
        "Let's talk about democracy. What makes a political system fair and effective?",
        'Давайте поговорим о демократии. Что делает политическую систему справедливой и эффективной?',
        'Демократия туралы сөйлесейік. Саяси жүйені әділ әрі тиімді ететін не?'
    ),
    'vocab' => [
        V('democracy', 'демократия', 'демократия'), V('authoritarianism', 'авторитаризм', 'авторитаризм'), V('referendum', 'референдум', 'референдум'),
        V('electorate', 'электорат', 'сайлаушылар'), V('legislation', 'законодательство', 'заңнама'), V('corruption', 'коррупция', 'сыбайлас жемқорлық'),
        V('lobbying', 'лоббирование', 'лоббизм'), V('sovereignty', 'суверенитет', 'егемендік'), V('coalition', 'коалиция', 'коалиция'), V('constituency', 'избирательный округ', 'сайлау округі'),
    ],
    'questions' => [
        V('Do you think democracy is the best political system? Why or why not?', 'Как вы думаете, демократия — лучшая политическая система? Почему да или нет?', 'Демократия ең жақсы саяси жүйе деп ойлайсыз ба? Неге ия немесе жоқ?'),
        V('How does corruption damage trust in government?', 'Как коррупция подрывает доверие к правительству?', 'Сыбайлас жемқорлық үкіметке деген сенімге қалай нұқсан келтіреді?'),
        V('Should citizens vote directly on important issues through referendums?', 'Должны ли граждане голосовать напрямую по важным вопросам через референдумы?', 'Азаматтар маңызды мәселелер бойынша референдум арқылы тікелей дауыс беруі керек пе?'),
        V('Do you think lobbying gives too much power to wealthy groups?', 'Как вы думаете, лоббирование даёт слишком много власти богатым группам?', 'Лоббизм бай топтарға тым көп билік береді деп ойлайсыз ба?'),
        V('How important is voter turnout for a healthy democracy?', 'Насколько важна явка избирателей для здоровой демократии?', 'Сайлаушылардың қатысуы сау демократия үшін қаншалықты маңызды?'),
        V('What would you change about the political system in your country?', 'Что бы вы изменили в политической системе своей страны?', 'Еліңіздің саяси жүйесінде нені өзгертер едіңіз?'),
    ],
];

$lessons[] = [
    'level' => 'intermediate', 'topic' => 'The Ageing Population', 'background_key' => 'minimal-dark',
    'warmup' => V(
        "Let's talk about ageing populations. How should societies prepare for more elderly people?",
        'Давайте поговорим о старении населения. Как обществам следует готовиться к увеличению числа пожилых людей?',
        'Халықтың қартаюы туралы сөйлесейік. Қоғамдар қарт адамдардың көбеюіне қалай дайындалуы керек?'
    ),
    'vocab' => [
        V('life expectancy', 'продолжительность жизни', 'өмір сүру ұзақтығы'), V('retirement', 'выход на пенсию', 'зейнетке шығу'), V('pension', 'пенсия', 'зейнетақы'),
        V('elderly care', 'уход за пожилыми', 'қарттарға күтім'), V('ageism', 'возрастная дискриминация', 'жас бойынша алалау'), V('dependency ratio', 'коэффициент зависимости', 'тәуелділік коэффициенті'),
        V('longevity', 'долголетие', 'ұзақ өмір сүру'), V('caregiver', 'сиделка', 'күтуші'), V('nursing home', 'дом престарелых', 'қарттар үйі'), V('generational wealth', 'семейное богатство (по поколениям)', 'ұрпақтар байлығы'),
    ],
    'questions' => [
        V('Do you think it is better to care for elderly parents at home or in a nursing home?', 'Как вы думаете, лучше заботиться о пожилых родителях дома или в доме престарелых?', 'Қарт ата-анаға үйде қамқорлық жасаған дұрыс па, әлде қарттар үйінде ме деп ойлайсыз ба?'),
        V('How do you think society should support elderly people?', 'Как, по-вашему, общество должно поддерживать пожилых людей?', 'Сіздің ойыңызша, қоғам қарт адамдарды қалай қолдауы керек?'),
        V('Have you ever experienced or witnessed ageism?', 'Вы когда-нибудь сталкивались с возрастной дискриминацией или были её свидетелем?', 'Жас бойынша алалауды бастан кештіңіз бе немесе оның куәсі болдыңыз ба?'),
        V('At what age do you think people should retire?', 'В каком возрасте, по-вашему, люди должны выходить на пенсию?', 'Сіздің ойыңызша, адамдар қай жаста зейнетке шығуы керек?'),
        V('Do you worry about who will take care of you when you are old?', 'Вы беспокоитесь о том, кто позаботится о вас в старости?', 'Қартайғанда сізге кім қамқорлық жасайтыны туралы алаңдайсыз ба?'),
        V('How might an ageing population affect the economy?', 'Как старение населения может повлиять на экономику?', 'Халықтың қартаюы экономикаға қалай әсер етуі мүмкін?'),
    ],
];

$lessons[] = [
    'level' => 'intermediate', 'topic' => 'Language and Communication in a Digital Age', 'background_key' => 'night-city',
    'warmup' => V(
        "Let's talk about digital communication. How has texting and messaging changed the way we use language?",
        'Давайте поговорим о цифровом общении. Как переписка и мессенджеры изменили то, как мы используем язык?',
        'Цифрлық қарым-қатынас туралы сөйлесейік. Хабарлама алмасу тілді пайдалану тәсілімізді қалай өзгертті?'
    ),
    'vocab' => [
        V('emoji', 'эмодзи', 'эмодзи'), V('abbreviation', 'сокращение', 'қысқарту'), V('tone', 'тон (письменный)', 'үн (жазбаша)'),
        V('miscommunication', 'недопонимание', 'түсінбеушілік'), V('digital etiquette', 'цифровой этикет', 'цифрлық әдеп'), V('multilingualism', 'многоязычие', 'көптілділік'),
        V('dialect', 'диалект', 'диалект'), V('slang', 'сленг', 'сленг'), V('translation', 'перевод', 'аударма'), V('nuance', 'нюанс', 'нюанс'),
    ],
    'questions' => [
        V('Do you think texting has made communication better or worse?', 'Как вы думаете, переписка сделала общение лучше или хуже?', 'Хабарлама алмасу қарым-қатынасты жақсартты ма, әлде нашарлатты ма деп ойлайсыз ба?'),
        V('Have you ever misunderstood someone because of a text message?', 'Вы когда-нибудь неправильно понимали кого-то из-за текстового сообщения?', 'Мәтіндік хабарлама себебінен біреуді дұрыс түсінбей қалдыңыз ба?'),
        V('Do you use emojis often? Why or why not?', 'Вы часто используете эмодзи? Почему да или нет?', 'Эмодзиді жиі пайдаланасыз ба? Неге ия немесе жоқ?'),
        V('Do you think slang changes too quickly to keep up with?', 'Как вы думаете, сленг меняется слишком быстро, чтобы за ним успевать?', 'Сленг оны қуып жетуге тым жылдам өзгереді деп ойлайсыз ба?'),
        V('How important is it to learn a language\'s dialects, not just the standard form?', 'Насколько важно изучать диалекты языка, а не только стандартную форму?', 'Тілдің стандартты түрін ғана емес, диалектілерін де үйрену қаншалықты маңызды?'),
        V('Can translation ever fully capture the meaning of another language?', 'Может ли перевод полностью передать смысл другого языка?', 'Аударма басқа тілдің мағынасын толық жеткізе алады ма?'),
    ],
];

$lessons[] = [
    'level' => 'intermediate', 'topic' => 'Space Exploration and Colonization', 'background_key' => 'night-city',
    'warmup' => V(
        "Let's talk about space exploration. Should humans try to colonize other planets?",
        'Давайте поговорим об исследовании космоса. Должны ли люди пытаться колонизировать другие планеты?',
        'Ғарышты игеру туралы сөйлесейік. Адамдар басқа ғаламшарларды отарлауға тырысуы керек пе?'
    ),
    'vocab' => [
        V('colonization', 'колонизация', 'отарлау'), V('extraterrestrial', 'внеземной', 'жерден тыс'), V('interplanetary', 'межпланетный', 'планетааралық'),
        V('space agency', 'космическое агентство', 'ғарыш агенттігі'), V('terraforming', 'терраформирование', 'терраформинг'), V('zero gravity', 'невесомость', 'салмақсыздық'),
        V('mission control', 'центр управления полётами', 'ұшуды басқару орталығы'), V('rover', 'марсоход', 'марсход'), V('cosmic', 'космический', 'ғарыштық'), V('frontier', 'рубеж', 'шекара (жаңа кеңістік)'),
    ],
    'questions' => [
        V('Do you think humans should try to colonize Mars? Why or why not?', 'Как вы думаете, людям следует пытаться колонизировать Марс? Почему да или нет?', 'Адамдар Марсты отарлауға тырысуы керек пе деп ойлайсыз ба? Неге ия немесе жоқ?'),
        V('What are the biggest challenges of living on another planet?', 'Какие самые большие проблемы жизни на другой планете?', 'Басқа ғаламшарда өмір сүрудің ең үлкен қиындықтары қандай?'),
        V('Should space exploration be led by governments or private companies?', 'Кто должен возглавлять освоение космоса — правительства или частные компании?', 'Ғарышты игеруді үкіметтер басқаруы керек пе, әлде жеке компаниялар ма?'),
        V('Do you believe there is extraterrestrial life somewhere in the universe?', 'Вы верите, что где-то во вселенной есть внеземная жизнь?', 'Әлемнің бір жерінде жерден тыс өмір бар деп сенесіз бе?'),
        V('Would you ever want to live in zero gravity for a long time?', 'Хотели бы вы когда-нибудь долго жить в невесомости?', 'Ұзақ уақыт салмақсыздықта өмір сүргіңіз келе ме?'),
        V('Is space exploration a good use of money, or should it be spent on Earth?', 'Является ли освоение космоса хорошим использованием денег, или их нужно тратить на Земле?', 'Ғарышты игеру ақшаны жақсы жұмсау ма, әлде оны Жерге жұмсау керек пе?'),
    ],
];
