<?php
declare(strict_types=1);
// Included from seed_lessons_batch5.php — shares its scope ($lessons, function V()).

// ========================= ELEMENTARY (batch 5) =========================

$lessons[] = ['level' => 'elementary', 'topic' => 'Coffee vs Tea Culture', 'background_key' => 'warm',
    'warmup' => V("Let's talk about coffee and tea. Which do you prefer, and how do you make it?", 'Давайте поговорим о кофе и чае. Что вы предпочитаете и как вы его готовите?', 'Кофе мен шай туралы сөйлесейік. Қайсысын ұнатасыз және оны қалай жасайсыз?'),
    'vocab' => [V('brew', 'заваривать', 'демдеу'), V('steep', 'настаивать', 'қайнату (демдеу)'), V('caffeine', 'кофеин', 'кофеин'), V('aroma', 'аромат', 'хош иіс'), V('blend', 'смесь', 'қоспа'), V('roast', 'обжарка', 'қуыру'), V('kettle', 'чайник', 'шәйнек'), V('mug', 'кружка', 'кружка'), V('ritual', 'ритуал', 'ғұрып'), V('wake-up', 'пробуждение', 'ояту')],
    'questions' => [
        V('Do you prefer coffee or tea in the morning?', 'Вы предпочитаете кофе или чай по утрам?', 'Таңертең кофені ұнатасыз ба, әлде шайды ма?'),
        V('How do you make your coffee or tea?', 'Как вы готовите кофе или чай?', 'Кофе немесе шайды қалай жасайсыз?'),
        V('Is drinking coffee or tea part of your daily ritual?', 'Питьё кофе или чая — часть вашего ежедневного ритуала?', 'Кофе немесе шай ішу күнделікті ғұрпыңыздың бөлігі ме?'),
        V('Do you like the smell of freshly brewed coffee?', 'Вам нравится запах свежесваренного кофе?', 'Жаңа демделген кофенің иісін ұнатасыз ба?'),
        V('How many cups do you drink a day?', 'Сколько чашек вы пьёте в день?', 'Күніне қанша кесе ішесіз?'),
        V('Have you ever tried a special blend of coffee or tea?', 'Вы когда-нибудь пробовали особую смесь кофе или чая?', 'Кофенің немесе шайдың ерекше қоспасын сынап көрдіңіз бе?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Public Speaking Basics', 'background_key' => 'professional',
    'warmup' => V("Let's talk about public speaking. Have you ever had to speak in front of a group?", 'Давайте поговорим о публичных выступлениях. Вам когда-нибудь приходилось выступать перед группой?', 'Көпшілік алдында сөйлеу туралы сөйлесейік. Топ алдында сөйлеуге тура келді ме?'),
    'vocab' => [V('audience', 'аудитория', 'аудитория'), V('nervous', 'нервный', 'толқыған'), V('script', 'сценарий', 'сценарий'), V('microphone', 'микрофон', 'микрофон'), V('pause', 'пауза', 'үзіліс'), V('clear voice', 'чёткий голос', 'анық дауыс'), V('eye contact', 'зрительный контакт', 'көзбен байланыс'), V('practice', 'практика', 'жаттығу'), V('confidence', 'уверенность', 'сенімділік'), V('applause', 'аплодисменты', 'қол шапалақтау')],
    'questions' => [
        V('Have you ever spoken in front of a group of people?', 'Вы когда-нибудь выступали перед группой людей?', 'Адамдар тобының алдында сөйлегеніңіз бар ма?'),
        V('Do you get nervous before speaking in public?', 'Вы нервничаете перед публичным выступлением?', 'Көпшілік алдында сөйлеу алдында толқисыз ба?'),
        V('Do you practice before an important presentation?', 'Вы репетируете перед важной презентацией?', 'Маңызды баяндама алдында жаттығасыз ба?'),
        V('Is it easy for you to make eye contact with an audience?', 'Вам легко смотреть в глаза аудитории?', 'Аудиториямен көзбен байланыс жасау сізге оңай ма?'),
        V('What helps you feel more confident when speaking?', 'Что помогает вам чувствовать себя увереннее при выступлении?', 'Сөйлегенде өзіңізді сенімдірек сезінуге не көмектеседі?'),
        V('How does it feel to hear applause after a speech?', 'Каково это — слышать аплодисменты после речи?', 'Сөзден кейін қол шапалақтауды естіген қандай сезім?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Weekend Chores', 'background_key' => 'calm',
    'warmup' => V("Let's talk about weekend chores. What do you usually get done on weekends?", 'Давайте поговорим о делах на выходных. Что вы обычно успеваете сделать на выходных?', 'Демалыс күндеріндегі жұмыстар туралы сөйлесейік. Демалыс күндері әдетте не істеп үлгересіз?'),
    'vocab' => [V('laundry', 'стирка', 'кір жуу'), V('groceries', 'продукты', 'азық-түлік'), V('cleaning', 'уборка', 'тазалау'), V('errands', 'дела (поручения)', 'тапсырмалар'), V('organize', 'организовывать', 'ретке келтіру'), V('schedule', 'расписание', 'кесте'), V('tidy up', 'прибираться', 'жинастыру'), V('repair', 'ремонтировать', 'жөндеу'), V('yard work', 'работа во дворе', 'аула жұмысы'), V('relax after', 'расслабиться после', 'кейін демалу')],
    'questions' => [
        V('What chores do you usually do on weekends?', 'Какие дела вы обычно делаете на выходных?', 'Демалыс күндері әдетте қандай жұмыс істейсіз?'),
        V('Do you do laundry every weekend?', 'Вы стираете каждые выходные?', 'Әр демалыс күні кір жуасыз ба?'),
        V('Do you run errands or grocery shop on weekends?', 'Вы делаете дела или покупаете продукты по выходным?', 'Демалыс күндері тапсырмалар орындайсыз ба немесе азық-түлік сатып аласыз ба?'),
        V('Do you have time to relax after finishing chores?', 'У вас есть время расслабиться после дел?', 'Жұмыстарды бітіргеннен кейін демалуға уақытыңыз бар ма?'),
        V('Do you plan your weekend chores in advance?', 'Вы планируете дела на выходные заранее?', 'Демалыс күндерінің жұмыстарын алдын ала жоспарлайсыз ба?'),
        V('What chore do you dislike the most?', 'Какое дело вам не нравится больше всего?', 'Ең ұнатпайтын жұмысыңыз қайсы?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Local Wildlife', 'background_key' => 'nature',
    'warmup' => V("Let's talk about local wildlife. What animals do you see near where you live?", 'Давайте поговорим о местной дикой природе. Каких животных вы видите рядом с местом, где вы живёте?', 'Жергілікті жабайы табиғат туралы сөйлесейік. Тұратын жеріңіздің жанында қандай жануарларды көресіз?'),
    'vocab' => [V('squirrel', 'белка', 'тиін'), V('pigeon', 'голубь', 'көгершін'), V('park', 'парк', 'саябақ'), V('forest', 'лес', 'орман'), V('nature trail', 'природная тропа', 'табиғи жол'), V('birdwatching', 'наблюдение за птицами', 'құстарды бақылау'), V('insect', 'насекомое', 'жәндік'), V('seasonal', 'сезонный', 'маусымдық'), V('habitat', 'среда обитания', 'мекендеу ортасы'), V('spot', 'заметить', 'байқау')],
    'questions' => [
        V('What animals do you often see near your home?', 'Каких животных вы часто видите рядом с домом?', 'Үйіңіздің жанында қандай жануарларды жиі көресіз?'),
        V('Have you ever gone birdwatching?', 'Вы когда-нибудь наблюдали за птицами?', 'Құстарды бақылап көрдіңіз бе?'),
        V('Do you enjoy walking on nature trails?', 'Вам нравится гулять по природным тропам?', 'Табиғи жолдармен серуендегенді ұнатасыз ба?'),
        V('Have you ever spotted an unusual animal in the city?', 'Вы когда-нибудь замечали необычное животное в городе?', 'Қалада ерекше жануарды байқадыңыз ба?'),
        V('Do wild animals change with the seasons where you live?', 'Дикие животные меняются по сезонам там, где вы живёте?', 'Тұратын жеріңізде жабайы жануарлар маусымдарға қарай өзгере ме?'),
        V('Do you think cities should protect more natural habitats?', 'Как вы думаете, города должны защищать больше природных мест обитания?', 'Қалалар көбірек табиғи мекендеу орталарын қорғауы керек деп ойлайсыз ба?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Learning to Swim', 'background_key' => 'energetic',
    'warmup' => V("Let's talk about swimming. Do you know how to swim, and how did you learn?", 'Давайте поговорим о плавании. Вы умеете плавать, и как вы научились?', 'Жүзу туралы сөйлесейік. Жүзе аласыз ба және қалай үйрендіңіз?'),
    'vocab' => [V('swimming pool', 'бассейн', 'бассейн'), V('float', 'плавать (держаться на воде)', 'су бетінде қалу'), V('dive', 'нырять', 'сүңгу'), V('breathe', 'дышать', 'дем алу'), V('stroke', 'гребок', 'соққы (жүзу)'), V('lifeguard', 'спасатель', 'құтқарушы'), V('goggles', 'очки для плавания', 'жүзу көзілдірігі'), V('instructor', 'инструктор', 'нұсқаушы'), V('confidence', 'уверенность', 'сенімділік'), V('fear of water', 'страх воды', 'судан қорқу')],
    'questions' => [
        V('Do you know how to swim?', 'Вы умеете плавать?', 'Жүзе аласыз ба?'),
        V('How did you learn to swim?', 'Как вы научились плавать?', 'Жүзуді қалай үйрендіңіз?'),
        V('Do you feel confident in deep water?', 'Вы чувствуете себя уверенно в глубокой воде?', 'Терең суда өзіңізді сенімді сезінесіз бе?'),
        V('Have you ever been afraid of water?', 'Вы когда-нибудь боялись воды?', 'Судан қорыққан кезіңіз болды ма?'),
        V('Do you enjoy diving into a pool?', 'Вам нравится нырять в бассейн?', 'Бассейнге сүңгуді ұнатасыз ба?'),
        V('Would you like to swim better than you do now?', 'Хотели бы вы плавать лучше, чем сейчас?', 'Қазіргіден жақсырақ жүзгіңіз келе ме?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'City Nightlife', 'background_key' => 'night-city',
    'warmup' => V("Let's talk about nightlife. What do people usually do at night in your city?", 'Давайте поговорим о ночной жизни. Что люди обычно делают ночью в вашем городе?', 'Түнгі өмір туралы сөйлесейік. Қалаңызда адамдар түнде әдетте не істейді?'),
    'vocab' => [V('nightclub', 'ночной клуб', 'түнгі клуб'), V('bar', 'бар', 'бар'), V('live music', 'живая музыка', 'тірі музыка'), V('dance floor', 'танцпол', 'би алаңы'), V('late night', 'поздняя ночь', 'кеш түн'), V('taxi home', 'такси домой', 'үйге такси'), V('curfew', 'комендантский час', 'үйге қайту уақыты'), V('crowd', 'толпа', 'тобыр'), V('entrance', 'вход', 'кіру'), V('cover charge', 'плата за вход', 'кіру ақысы')],
    'questions' => [
        V('Do you enjoy going out at night?', 'Вам нравится выходить ночью?', 'Түнде сыртқа шығуды ұнатасыз ба?'),
        V('Do you prefer bars with live music or nightclubs?', 'Вы предпочитаете бары с живой музыкой или ночные клубы?', 'Тірі музыкасы бар барларды ұнатасыз ба, әлде түнгі клубтарды ма?'),
        V('How do you usually get home late at night?', 'Как вы обычно добираетесь домой поздно ночью?', 'Кеш түнде әдетте үйге қалай барасыз?'),
        V('Do you like dancing at a club?', 'Вам нравится танцевать в клубе?', 'Клубта билегенді ұнатасыз ба?'),
        V('Is nightlife important to you when choosing a place to live?', 'Ночная жизнь важна для вас при выборе места жительства?', 'Тұратын жер таңдағанда түнгі өмір сіз үшін маңызды ма?'),
        V('Do you prefer quiet evenings or lively nights out?', 'Вы предпочитаете тихие вечера или оживлённые ночные выходы?', 'Тыныш кештерді ұнатасыз ба, әлде қарбалас түнгі шығуларды ма?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Home Gardening', 'background_key' => 'nature',
    'warmup' => V("Let's talk about gardening. Do you grow anything at home?", 'Давайте поговорим о садоводстве. Вы что-нибудь выращиваете дома?', 'Бақша баптау туралы сөйлесейік. Үйде бір нәрсе өсіресіз бе?'),
    'vocab' => [V('seed', 'семя', 'тұқым'), V('soil', 'почва', 'топырақ'), V('water', 'поливать', 'суару'), V('sunlight', 'солнечный свет', 'күн сәулесі'), V('grow', 'расти', 'өсу'), V('bloom', 'цвести', 'гүлдену'), V('weed', 'сорняк', 'арам шөп'), V('pot', 'горшок', 'құмыра'), V('harvest', 'собирать урожай', 'жинау'), V('prune', 'обрезать', 'кесу')],
    'questions' => [
        V('Do you grow any plants at home?', 'Вы выращиваете какие-нибудь растения дома?', 'Үйде қандай да бір өсімдік өсіресіз бе?'),
        V('Do you enjoy gardening?', 'Вам нравится садоводство?', 'Бақша баптауды ұнатасыз ба?'),
        V('How often do you water your plants?', 'Как часто вы поливаете растения?', 'Өсімдіктеріңізді қаншалықты жиі суарасыз?'),
        V('Have you ever grown something from a seed?', 'Вы когда-нибудь выращивали что-то из семени?', 'Тұқымнан бір нәрсе өсірдіңіз бе?'),
        V('Do you have a garden or just pots at home?', 'У вас есть сад или только горшки дома?', 'Үйде бақшаңыз бар ма, әлде тек құмыралар ма?'),
        V('What is your favorite plant or flower?', 'Какое ваше любимое растение или цветок?', 'Сүйікті өсімдігіңіз немесе гүліңіз қандай?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Public Libraries', 'background_key' => 'calm',
    'warmup' => V("Let's talk about libraries. Do you visit the library often?", 'Давайте поговорим о библиотеках. Вы часто посещаете библиотеку?', 'Кітапханалар туралы сөйлесейік. Кітапханаға жиі барасыз ба?'),
    'vocab' => [V('library card', 'читательский билет', 'кітапхана билеті'), V('borrow', 'брать (взаймы)', 'алу (уақытша)'), V('return', 'возвращать', 'қайтару'), V('quiet zone', 'зона тишины', 'тыныштық аймағы'), V('reading room', 'читальный зал', 'оқу залы'), V('bestseller', 'бестселлер', 'бестселлер'), V('late fee', 'штраф за просрочку', 'кешіктіру айыппұлы'), V('catalog', 'каталог', 'каталог'), V('study space', 'место для учёбы', 'оқу орны'), V('librarian', 'библиотекарь', 'кітапханашы')],
    'questions' => [
        V('Do you have a library card?', 'У вас есть читательский билет?', 'Кітапхана билетіңіз бар ма?'),
        V('How often do you visit the library?', 'Как часто вы ходите в библиотеку?', 'Кітапханаға қаншалықты жиі барасыз?'),
        V('Do you borrow books, or do you buy them?', 'Вы берёте книги в библиотеке, или покупаете их?', 'Кітапты кітапханадан аласыз ба, әлде сатып аласыз ба?'),
        V('Have you ever had to pay a late fee?', 'Вам когда-нибудь приходилось платить штраф за просрочку?', 'Кешіктіру айыппұлын төлеуге тура келді ме?'),
        V('Do you like studying in a library?', 'Вам нравится учиться в библиотеке?', 'Кітапханада оқуды ұнатасыз ба?'),
        V('Do you think libraries are still important today?', 'Как вы думаете, библиотеки всё ещё важны сегодня?', 'Кітапханалар бүгінде әлі маңызды деп ойлайсыз ба?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Weekend Sports Leagues', 'background_key' => 'energetic',
    'warmup' => V("Let's talk about local sports leagues. Have you ever played in a league with a team?", 'Давайте поговорим о местных спортивных лигах. Вы когда-нибудь играли в лиге с командой?', 'Жергілікті спорт лигалары туралы сөйлесейік. Командамен лигада ойнадыңыз ба?'),
    'vocab' => [V('league', 'лига', 'лига'), V('teammate', 'товарищ по команде', 'команда мүшесі'), V('practice', 'тренировка', 'жаттығу'), V('referee', 'судья', 'төреші'), V('tournament', 'турнир', 'турнир'), V('score', 'счёт', 'есеп'), V('trophy', 'трофей', 'трофей'), V('weekly game', 'еженедельная игра', 'апталық ойын'), V('sign up', 'записаться', 'жазылу'), V('spectator', 'зритель', 'көрермен')],
    'questions' => [
        V('Have you ever played in a sports league?', 'Вы когда-нибудь играли в спортивной лиге?', 'Спорт лигасында ойнадыңыз ба?'),
        V('Do you prefer playing sports or watching as a spectator?', 'Вы предпочитаете играть в спорт или смотреть как зритель?', 'Спорт ойнағанды ұнатасыз ба, әлде көрермен болғанды ма?'),
        V('Have you ever won a trophy?', 'Вы когда-нибудь выигрывали трофей?', 'Трофей жеңіп алдыңыз ба?'),
        V('Would you sign up for a weekly sports league?', 'Вы бы записались в еженедельную спортивную лигу?', 'Апталық спорт лигасына жазылар ма едіңіз?'),
        V('Is it important to have good teammates?', 'Важно ли иметь хороших товарищей по команде?', 'Жақсы команда мүшелерінің болуы маңызды ма?'),
        V('Have you ever disagreed with a referee\'s decision?', 'Вы когда-нибудь не соглашались с решением судьи?', 'Төрешінің шешімімен келіспей қалдыңыз ба?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Travel Insurance and Safety', 'background_key' => 'professional',
    'warmup' => V("Let's talk about travel safety. What do you do to stay safe when traveling?", 'Давайте поговорим о безопасности в путешествиях. Что вы делаете, чтобы оставаться в безопасности во время поездок?', 'Саяхат қауіпсіздігі туралы сөйлесейік. Саяхаттағанда қауіпсіз болу үшін не істейсіз?'),
    'vocab' => [V('travel insurance', 'туристическая страховка', 'саяхат сақтандыруы'), V('claim', 'заявление на выплату', 'талап'), V('emergency fund', 'резервный фонд', 'төтенше қор'), V('lost luggage', 'потерянный багаж', 'жоғалған багаж'), V('medical coverage', 'медицинское покрытие', 'медициналық жабу'), V('cancellation', 'отмена', 'бас тарту'), V('precaution', 'предосторожность', 'сақтық шара'), V('vaccination', 'вакцинация', 'вакцинация'), V('embassy', 'посольство', 'елшілік'), V('safety tips', 'советы по безопасности', 'қауіпсіздік кеңестері')],
    'questions' => [
        V('Do you buy travel insurance when you travel?', 'Вы покупаете туристическую страховку, когда путешествуете?', 'Саяхаттағанда туристік сақтандыру сатып аласыз ба?'),
        V('Have you ever lost your luggage while traveling?', 'Вы когда-нибудь теряли багаж во время путешествия?', 'Саяхат кезінде багажыңызды жоғалттыңыз ба?'),
        V('Do you always carry an emergency fund when traveling?', 'Вы всегда берёте резервный фонд в путешествия?', 'Саяхатқа әрдайым төтенше қор аласыз ба?'),
        V('Do you research safety tips before visiting a new country?', 'Вы изучаете советы по безопасности перед посещением новой страны?', 'Жаңа елге бармас бұрын қауіпсіздік кеңестерін зерттейсіз бе?'),
        V('Would you know how to find the embassy if you needed help abroad?', 'Вы бы знали, как найти посольство, если бы вам понадобилась помощь за границей?', 'Шетелде көмек қажет болса, елшілікті қалай табатыныңызды білер ме едіңіз?'),
        V('Do you take precautions like vaccinations before traveling?', 'Вы принимаете меры предосторожности, такие как вакцинация, перед поездкой?', 'Саяхат алдында вакцина сияқты сақтық шараларды қабылдайсыз ба?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Renovating a Home', 'background_key' => 'professional',
    'warmup' => V("Let's talk about home renovation. Would you like to renovate your home? What would you change?", 'Давайте поговорим о ремонте дома. Хотели бы вы отремонтировать свой дом? Что бы вы изменили?', 'Үй жөндеу туралы сөйлесейік. Үйіңізді жөндегіңіз келе ме? Нені өзгертер едіңіз?'),
    'vocab' => [V('renovation', 'ремонт', 'жөндеу'), V('contractor', 'подрядчик', 'мердігер'), V('budget', 'бюджет', 'бюджет'), V('blueprint', 'чертёж', 'жоба сызбасы'), V('upgrade', 'улучшение', 'жақсарту'), V('paint colors', 'цвета краски', 'бояу түстері'), V('flooring', 'напольное покрытие', 'еден жабыны'), V('before and after', 'до и после', 'дейін және кейін'), V('timeline', 'сроки', 'мерзім'), V('permit', 'разрешение', 'рұқсат')],
    'questions' => [
        V('Would you like to renovate your home? What would you change?', 'Хотели бы вы отремонтировать дом? Что бы вы изменили?', 'Үйіңізді жөндегіңіз келе ме? Нені өзгертер едіңіз?'),
        V('Have you ever hired a contractor for a project?', 'Вы когда-нибудь нанимали подрядчика для проекта?', 'Жоба үшін мердігер жалдадыңыз ба?'),
        V('Do you stick to a budget when renovating?', 'Вы придерживаетесь бюджета при ремонте?', 'Жөндеу кезінде бюджетті ұстанасыз ба?'),
        V('What paint color would you choose for your living room?', 'Какой цвет краски вы бы выбрали для гостиной?', 'Қонақ бөлмеге қандай бояу түсін таңдар едіңіз?'),
        V('Do you enjoy seeing before and after renovation photos?', 'Вам нравится смотреть фото до и после ремонта?', 'Жөндеуден бұрынғы және кейінгі суреттерді көргенді ұнатасыз ба?'),
        V('Would you renovate a home yourself, or hire professionals?', 'Вы бы ремонтировали дом сами, или наняли профессионалов?', 'Үйді өзіңіз жөндер ма едіңіз, әлде мамандарды жалдар ма едіңіз?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Digital Photography Tips', 'background_key' => 'playful',
    'warmup' => V("Let's talk about photography tips. What makes a good photo, in your opinion?", 'Давайте поговорим о советах по фотографии. Что делает фото хорошим, по-вашему?', 'Фотография кеңестері туралы сөйлесейік. Сіздің ойыңызша, жақсы фотоны не жасайды?'),
    'vocab' => [V('exposure', 'экспозиция', 'экспозиция'), V('composition', 'композиция', 'композиция'), V('resolution', 'разрешение', 'айырымдылық'), V('editing software', 'программа редактирования', 'өңдеу бағдарламасы'), V('backup', 'резервная копия', 'сақтық көшірме'), V('cloud storage', 'облачное хранилище', 'бұлттық сақтау'), V('angle', 'ракурс', 'бұрыш'), V('natural light', 'естественный свет', 'табиғи жарық'), V('cropping', 'кадрирование', 'қиып алу'), V('sharing online', 'делиться онлайн', 'онлайн бөлісу')],
    'questions' => [
        V('What makes a photo good, in your opinion?', 'Что делает фото хорошим, по-вашему?', 'Сіздің ойыңызша, жақсы фотоны не жасайды?'),
        V('Do you prefer taking photos with natural light?', 'Вы предпочитаете фотографировать при естественном свете?', 'Табиғи жарықта сурет түсіргенді ұнатасыз ба?'),
        V('Do you edit your photos before sharing them?', 'Вы редактируете фотографии перед тем, как поделиться ими?', 'Суреттерді бөліспес бұрын өңдейсіз бе?'),
        V('Do you back up your photos to cloud storage?', 'Вы сохраняете фото в облачное хранилище?', 'Суреттеріңізді бұлттық сақтауға сақтайсыз ба?'),
        V('What angle do you usually use when taking a photo?', 'Какой ракурс вы обычно используете при съёмке?', 'Сурет түсіргенде әдетте қандай бұрышты пайдаланасыз?'),
        V('Do you share your photos online often?', 'Вы часто делитесь фотографиями онлайн?', 'Суреттеріңізбен онлайн жиі бөлісесіз бе?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Learning an Instrument', 'background_key' => 'playful',
    'warmup' => V("Let's talk about learning music. Have you ever tried to learn a musical instrument?", 'Давайте поговорим об изучении музыки. Вы когда-нибудь пытались научиться играть на музыкальном инструменте?', 'Музыка үйрену туралы сөйлесейік. Музыкалық аспапта ойнауды үйренуге тырыстыңыз ба?'),
    'vocab' => [V('lesson', 'урок', 'сабақ'), V('practice', 'практика', 'жаттығу'), V('scale', 'гамма', 'гамма'), V('sheet music', 'ноты', 'ноталар'), V('recital', 'концерт (учебный)', 'концерт (оқу)'), V('patience', 'терпение', 'шыдамдылық'), V('progress', 'прогресс', 'прогресс'), V('tune', 'мелодия', 'әуен'), V('chord', 'аккорд', 'аккорд'), V('rhythm', 'ритм', 'ырғақ')],
    'questions' => [
        V('Have you ever learned to play a musical instrument?', 'Вы когда-нибудь учились играть на музыкальном инструменте?', 'Музыкалық аспапта ойнауды үйрендіңіз бе?'),
        V('Do you think learning an instrument takes a lot of patience?', 'Как вы думаете, изучение инструмента требует много терпения?', 'Аспапты үйрену көп шыдамдылықты қажет етеді деп ойлайсыз ба?'),
        V('How often would you need to practice to see progress?', 'Как часто вам нужно было бы практиковаться, чтобы увидеть прогресс?', 'Прогресс көру үшін қаншалықты жиі жаттығу керек?'),
        V('Would you enjoy performing at a recital?', 'Вам бы понравилось выступать на концерте?', 'Концертте өнер көрсету сізге ұнар ма еді?'),
        V('What instrument would you like to learn if you had time?', 'На каком инструменте вы хотели бы научиться играть, если бы было время?', 'Уақыт болса, қандай аспапта ойнауды үйренгіңіз келеді?'),
        V('Do you find it easy to read sheet music?', 'Вам легко читать ноты?', 'Ноталарды оқу сізге оңай ма?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Weekend Volunteering Trips', 'background_key' => 'warm',
    'warmup' => V("Let's talk about volunteering trips. Would you like to spend a weekend helping a community project?", 'Давайте поговорим о волонтёрских поездках. Хотели бы вы провести выходные, помогая общественному проекту?', 'Еріктілер сапарлары туралы сөйлесейік. Демалыс күндерін қоғамдық жобаға көмектесіп өткізгіңіз келе ме?'),
    'vocab' => [V('volunteer trip', 'волонтёрская поездка', 'еріктілер сапары'), V('community project', 'общественный проект', 'қоғамдық жоба'), V('teamwork', 'командная работа', 'топпен жұмыс'), V('donation', 'пожертвование', 'қайыр'), V('cause', 'дело (благое)', 'мақсат (игі іс)'), V('impact', 'влияние', 'әсер'), V('organizer', 'организатор', 'ұйымдастырушы'), V('sign-up sheet', 'лист записи', 'жазылу парағы'), V('group effort', 'групповое усилие', 'топтық күш'), V('gratitude', 'благодарность', 'алғыс')],
    'questions' => [
        V('Would you like to go on a weekend volunteering trip?', 'Хотели бы вы поехать на волонтёрскую поездку на выходные?', 'Демалыс күндері еріктілер сапарына барғыңыз келе ме?'),
        V('What cause would you most like to support?', 'Какое дело вы хотели бы поддержать больше всего?', 'Қандай игі істі ең көп қолдағыңыз келеді?'),
        V('Do you enjoy teamwork on community projects?', 'Вам нравится командная работа над общественными проектами?', 'Қоғамдық жобаларда командалық жұмысты ұнатасыз ба?'),
        V('Have you ever signed up to volunteer for something?', 'Вы когда-нибудь записывались волонтёром на что-то?', 'Бір нәрсеге еріктілерге жазылдыңыз ба?'),
        V('Do you think small group efforts can make a real impact?', 'Как вы думаете, усилия небольшой группы могут оказать реальное влияние?', 'Шағын топтың күш-жігері шынымен әсер ете алады деп ойлайсыз ба?'),
        V('How does it feel to receive gratitude for helping others?', 'Каково это — получать благодарность за помощь другим?', 'Басқаларға көмектескені үшін алғыс алудың қандай сезім екенін білесіз бе?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Public Speaking Anxiety', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about speaking anxiety. What helps you calm down before speaking to a group?", 'Давайте поговорим о тревоге перед выступлением. Что помогает вам успокоиться перед выступлением перед группой?', 'Сөйлеу алдындағы мазасыздық туралы сөйлесейік. Топ алдында сөйлемес бұрын сабырға түсуге не көмектеседі?'),
    'vocab' => [V('nervousness', 'нервозность', 'толқу'), V('stage fright', 'страх сцены', 'сахна қорқынышы'), V('deep breath', 'глубокий вдох', 'терең дем'), V('preparation', 'подготовка', 'дайындық'), V('confidence boost', 'прилив уверенности', 'сенімділікті арттыру'), V('shaky voice', 'дрожащий голос', 'дірілдеген дауыс'), V('calm down', 'успокоиться', 'сабырға түсу'), V('rehearsal', 'репетиция', 'жаттығу'), V('support', 'поддержка', 'қолдау'), V('overcoming fear', 'преодоление страха', 'қорқынышты жеңу')],
    'questions' => [
        V('Do you experience stage fright before speaking?', 'Вы испытываете страх сцены перед выступлением?', 'Сөйлеу алдында сахна қорқынышын сезінесіз бе?'),
        V('What helps you calm down when you are nervous?', 'Что помогает вам успокоиться, когда вы нервничаете?', 'Толқыған кезде сабырға түсуге не көмектеседі?'),
        V('Does taking a deep breath help you before speaking?', 'Глубокий вдох помогает вам перед выступлением?', 'Сөйлеу алдында терең дем алу сізге көмектесе ме?'),
        V('Do you rehearse a lot before an important talk?', 'Вы много репетируете перед важным выступлением?', 'Маңызды сөзге дейін көп жаттығасыз ба?'),
        V('Has your voice ever shaken while speaking in public?', 'Ваш голос когда-нибудь дрожал во время публичного выступления?', 'Көпшілік алдында сөйлегенде дауысыңыз дірілдеді ме?'),
        V('What advice would you give someone with stage fright?', 'Какой совет вы бы дали человеку со страхом сцены?', 'Сахна қорқынышы бар адамға қандай кеңес берер едіңіз?'),
    ],
];

// ========================= PRE-INTERMEDIATE (batch 5) =========================

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'The Ethics of Gift-Giving', 'background_key' => 'warm',
    'warmup' => V("Let's talk about gift-giving. Is giving gifts always a positive thing, or can it create pressure?", 'Давайте поговорим о дарении подарков. Всегда ли дарить подарки — это хорошо, или это может создавать давление?', 'Сыйлық беру туралы сөйлесейік. Сыйлық беру әрдайым жақсы ма, әлде қысым тудыруы мүмкін бе?'),
    'vocab' => [V('reciprocity', 'взаимность', 'өзара әрекет'), V('obligation', 'обязательство', 'міндеттеме'), V('sentiment', 'чувство', 'сезім'), V('extravagant', 'экстравагантный', 'шектен тыс'), V('thoughtful', 'продуманный', 'ойластырылған'), V('regifting', 'передаривание', 'қайта сыйлау'), V('tradition', 'традиция', 'дәстүр'), V('expectation', 'ожидание', 'күту'), V('generosity', 'щедрость', 'жомарттық'), V('awkwardness', 'неловкость', 'ыңғайсыздық')],
    'questions' => [
        V('Do you feel obligated to give a gift when you receive one?', 'Вы чувствуете обязанность подарить подарок в ответ, когда получаете его?', 'Сыйлық алғанда, жауап ретінде сыйлық беруге міндетті сезінесіз бе?'),
        V('Have you ever received a gift that felt too extravagant?', 'Вы когда-нибудь получали подарок, который казался слишком экстравагантным?', 'Тым шектен тыс болып көрінген сыйлық алдыңыз ба?'),
        V('Is it okay to regift something you don\'t need?', 'Нормально ли передаривать то, что вам не нужно?', 'Керек емес затты қайта сыйлау дұрыс па?'),
        V('Do you think thoughtful gifts matter more than expensive ones?', 'Как вы думаете, продуманные подарки важнее дорогих?', 'Ойластырылған сыйлықтар қымбат сыйлықтардан маңыздырақ деп ойлайсыз ба?'),
        V('Has gift-giving ever caused awkwardness for you?', 'Дарение подарков когда-нибудь вызывало у вас неловкость?', 'Сыйлық беру сізге ыңғайсыздық тудырды ма?'),
        V('What is the most thoughtful gift you have ever received?', 'Какой самый продуманный подарок вы когда-либо получали?', 'Алған ең ойластырылған сыйлығыңыз қандай болды?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'Coffee Shop Economy', 'background_key' => 'warm',
    'warmup' => V("Let's talk about coffee shops. Why do you think coffee shops have become so popular as places to gather?", 'Давайте поговорим о кофейнях. Как вы думаете, почему кофейни стали такими популярными местами для встреч?', 'Кофеханалар туралы сөйлесейік. Сіздің ойыңызша, кофеханалар неге жиналатын танымал орындарға айналды?'),
    'vocab' => [V('specialty coffee', '특별한 кофе', 'арнайы кофе'), V('third place', 'третье место (не дом, не работа)', 'үшінші орын'), V('gentrification', 'джентрификация', 'джентрификация'), V('local business', 'местный бизнес', 'жергілікті бизнес'), V('chain store', 'сетевой магазин', 'желілік дүкен'), V('price point', 'ценовая категория', 'баға деңгейі'), V('ambiance', 'атмосфера', 'атмосфера'), V('community hub', 'центр сообщества', 'қауымдастық орталығы'), V('loyalty', 'лояльность', 'адалдық'), V('competition', 'конкуренция', 'бәсеке')],
    'questions' => [
        V('Do you prefer local coffee shops or big chain stores?', 'Вы предпочитаете местные кофейни или крупные сетевые магазины?', 'Жергілікті кофеханаларды ұнатасыз ба, әлде ірі желілік дүкендерді ме?'),
        V('Do you think coffee shops act as a "third place" in people\'s lives?', 'Как вы думаете, кофейни выступают "третьим местом" в жизни людей?', 'Кофеханалар адамдардың өмірінде "үшінші орын" болады деп ойлайсыз ба?'),
        V('What makes the ambiance of a coffee shop good?', 'Что делает атмосферу кофейни хорошей?', 'Кофехананың атмосферасын жақсы ететін не?'),
        V('Are you loyal to one coffee shop, or do you try different ones?', 'Вы верны одной кофейне, или пробуете разные?', 'Бір кофеханаға адалсыз ба, әлде әртүрлілерін сынайсыз ба?'),
        V('Do you think new coffee shops can contribute to gentrification?', 'Как вы думаете, новые кофейни могут способствовать джентрификации?', 'Жаңа кофеханалар джентрификацияға ықпал ете ала ма деп ойлайсыз ба?'),
        V('Would you pay more for specialty coffee from a local shop?', 'Вы бы заплатили больше за особый кофе из местной кофейни?', 'Жергілікті кофеханадан арнайы кофе үшін көбірек төлер ме едіңіз?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'The Rise of Solo Travel', 'background_key' => 'energetic',
    'warmup' => V("Let's talk about solo travel. Would you ever travel alone, and what appeals to you about it?", 'Давайте поговорим о путешествиях в одиночку. Вы бы стали путешествовать одни, и что вас в этом привлекает?', 'Жалғыз саяхаттау туралы сөйлесейік. Жалғыз саяхаттар ма едіңіз, оның сізге не тартымды жағы бар?'),
    'vocab' => [V('solo traveler', 'путешественник-одиночка', 'жалғыз саяхатшы'), V('independence', 'независимость', 'тәуелсіздік'), V('safety concern', 'опасение за безопасность', 'қауіпсіздік алаңдаушылығы'), V('self-discovery', 'самопознание', 'өзін тану'), V('itinerary freedom', 'свобода маршрута', 'бағыт еркіндігі'), V('loneliness', 'одиночество', 'жалғыздық'), V('spontaneity', 'спонтанность', 'жеделдік'), V('budget travel', 'бюджетное путешествие', 'бюджеттік саяхат'), V('confidence', 'уверенность', 'сенімділік'), V('adventure', 'приключение', 'шытырман оқиға')],
    'questions' => [
        V('Would you enjoy traveling alone?', 'Вам бы понравилось путешествовать одному?', 'Жалғыз саяхаттау сізге ұнар ма еді?'),
        V('What appeals to you most about solo travel?', 'Что вас больше всего привлекает в путешествиях в одиночку?', 'Жалғыз саяхаттауда сізді ең көп не тартады?'),
        V('Do safety concerns stop you from traveling alone?', 'Опасения за безопасность останавливают вас от путешествия в одиночку?', 'Қауіпсіздік алаңдаушылығы сізді жалғыз саяхаттаудан тоқтата ма?'),
        V('Do you think solo travel helps with self-discovery?', 'Как вы думаете, путешествие в одиночку помогает самопознанию?', 'Жалғыз саяхаттау өзін тануға көмектеседі деп ойлайсыз ба?'),
        V('Would loneliness be a problem for you while traveling solo?', 'Одиночество было бы проблемой для вас во время путешествия в одиночку?', 'Жалғыз саяхаттағанда жалғыздық сіз үшін мәселе болар ма еді?'),
        V('Do you prefer a planned itinerary or spontaneous travel?', 'Вы предпочитаете спланированный маршрут или спонтанные путешествия?', 'Жоспарлы бағытты ұнатасыз ба, әлде жедел саяхатты ма?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'Workplace Burnout Prevention', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about preventing burnout. What can workers do to protect their wellbeing at work?", 'Давайте поговорим о предотвращении выгорания. Что могут сделать работники, чтобы защитить своё благополучие на работе?', 'Күйреудің алдын алу туралы сөйлесейік. Қызметкерлер жұмыста өз әл-ауқатын қорғау үшін не істей алады?'),
    'vocab' => [V('self-care', 'забота о себе', 'өзіне қамқорлық'), V('work boundaries', 'рабочие границы', 'жұмыс шекаралары'), V('mental health day', 'день психического здоровья', 'психикалық денсаулық күні'), V('delegation', 'делегирование', 'тапсыру'), V('realistic workload', 'реалистичная нагрузка', 'шынайы жүктеме'), V('support system', 'система поддержки', 'қолдау жүйесі'), V('early signs', 'ранние признаки', 'ерте белгілер'), V('recovery time', 'время восстановления', 'қалпына келу уақыты'), V('prioritization', 'расстановка приоритетов', 'басымдық белгілеу'), V('resilience', 'устойчивость', 'төзімділік')],
    'questions' => [
        V('Do you recognize the early signs of burnout in yourself?', 'Вы распознаёте ранние признаки выгорания у себя?', 'Өзіңізде күйреудің ерте белгілерін таниды ма?'),
        V('Have you ever taken a mental health day off work?', 'Вы когда-нибудь брали выходной для психического здоровья?', 'Психикалық денсаулық үшін жұмыстан демалыс алдыңыз ба?'),
        V('Is it easy for you to set boundaries at work?', 'Вам легко устанавливать границы на работе?', 'Жұмыста шекара қою сізге оңай ма?'),
        V('Do you delegate tasks, or try to do everything yourself?', 'Вы делегируете задачи, или пытаетесь делать всё сами?', 'Тапсырмаларды тапсырасыз ба, әлде бәрін өзіңіз істеуге тырысасыз ба?'),
        V('Who is part of your support system when work gets stressful?', 'Кто входит в вашу систему поддержки, когда работа становится напряжённой?', 'Жұмыс күйзелісті болғанда қолдау жүйеңізге кім кіреді?'),
        V('What helps you recover after a demanding work week?', 'Что помогает вам восстановиться после напряжённой рабочей недели?', 'Талапшыл жұмыс аптасынан кейін қалпыма келуге не көмектеседі?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'The Culture of Complaining', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about complaining. Do you think people complain too much these days?", 'Давайте поговорим о жалобах. Как вы думаете, люди слишком много жалуются в наши дни?', 'Шағымдану туралы сөйлесейік. Қазіргі уақытта адамдар тым көп шағымданады деп ойлайсыз ба?'),
    'vocab' => [V('venting', 'выплеск эмоций', 'эмоцияны шығару'), V('negativity', 'негатив', 'теріс көзқарас'), V('perspective', 'перспектива (взгляд)', 'көзқарас'), V('gratitude practice', 'практика благодарности', 'алғыс тәжірибесі'), V('constructive feedback', 'конструктивная обратная связь', 'құрылымдық кері байланыс'), V('chronic complainer', 'хронический нытик', 'үнемі шағымданушы'), V('emotional release', 'эмоциональная разрядка', 'эмоционалды босату'), V('solution-focused', 'ориентированный на решение', 'шешімге бағытталған'), V('social contagion', 'социальное заражение', 'әлеуметтік жұғу'), V('positivity', 'позитив', 'позитивтілік')],
    'questions' => [
        V('Do you think complaining can sometimes be healthy?', 'Как вы думаете, жалобы иногда могут быть полезными?', 'Шағымдану кейде пайдалы болуы мүмкін деп ойлайсыз ба?'),
        V('Do you know someone who complains about everything?', 'Вы знаете кого-то, кто жалуется на всё подряд?', 'Барлығына шағымданатын біреуді білесіз бе?'),
        V('Does hearing someone complain a lot affect your own mood?', 'Слушать чужие постоянные жалобы влияет на ваше настроение?', 'Біреудің көп шағымдануын тыңдау көңіл-күйіңізге әсер ете ме?'),
        V('Do you practice gratitude to balance out negative feelings?', 'Вы практикуете благодарность, чтобы уравновесить негативные чувства?', 'Теріс сезімдерді теңестіру үшін алғыс тәжірибесін жасайсыз ба?'),
        V('Is there a difference between venting and complaining?', 'Есть ли разница между выплеском эмоций и жалобами?', 'Эмоцияны шығару мен шағымдану арасында айырмашылық бар ма?'),
        V('Would you rather be around positive people or realistic ones?', 'Вы бы предпочли находиться рядом с позитивными людьми или реалистичными?', 'Позитивті адамдардың қасында болғанды қалайсыз ба, әлде реалистикалық адамдардың ма?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'Family Traditions and Change', 'background_key' => 'warm',
    'warmup' => V("Let's talk about family traditions. Have your family traditions changed over time?", 'Давайте поговорим о семейных традициях. Изменились ли ваши семейные традиции со временем?', 'Отбасылық дәстүрлер туралы сөйлесейік. Отбасылық дәстүрлеріңіз уақыт өте өзгерді ме?'),
    'vocab' => [V('inherited tradition', 'унаследованная традиция', 'мұраланған дәстүр'), V('modernize', 'модернизировать', 'жаңғырту'), V('generational shift', 'смена поколений', 'ұрпақ ауысымы'), V('nostalgia', 'ностальгия', 'сағыныш'), V('adapt', 'адаптироваться', 'бейімделу'), V('preserve', 'сохранять', 'сақтау'), V('family gathering', 'семейный сбор', 'отбасылық жиналыс'), V('evolving customs', 'меняющиеся обычаи', 'өзгеретін әдет-ғұрып'), V('compromise', 'компромисс', 'ымыраға келу'), V('legacy', 'наследие', 'мұра')],
    'questions' => [
        V('Have your family traditions changed since you were a child?', 'Ваши семейные традиции изменились с детства?', 'Отбасылық дәстүрлеріңіз балалық шағыңыздан бері өзгерді ме?'),
        V('Do you feel nostalgic about old family traditions?', 'Вы ностальгируете по старым семейным традициям?', 'Ескі отбасылық дәстүрлерге сағыныш сезінесіз бе?'),
        V('Is it important to preserve traditions exactly as they were?', 'Важно ли сохранять традиции точно такими, какими они были?', 'Дәстүрлерді дәл сол қалпында сақтау маңызды ма?'),
        V('Have you ever had to compromise with family about how to celebrate something?', 'Вам когда-нибудь приходилось идти на компромисс с семьёй по поводу празднования чего-либо?', 'Бір нәрсені тойлау туралы отбасымен ымыраға келуге тура келді ме?'),
        V('What tradition would you like to pass on to future generations?', 'Какую традицию вы хотели бы передать будущим поколениям?', 'Болашақ ұрпаққа қандай дәстүрді жеткізгіңіз келеді?'),
        V('Do you think family traditions should modernize with the times?', 'Как вы думаете, семейные традиции должны модернизироваться со временем?', 'Отбасылық дәстүрлер уақытпен бірге жаңғыруы керек деп ойлайсыз ба?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'The Psychology of Nostalgia', 'background_key' => 'warm',
    'warmup' => V("Let's talk about nostalgia. What makes you feel nostalgic, and how does it make you feel?", 'Давайте поговорим о ностальгии. Что вызывает у вас ностальгию, и какие чувства она вызывает?', 'Сағыныш туралы сөйлесейік. Сізде не сағыныш тудырады және ол қандай сезім тудырады?'),
    'vocab' => [V('nostalgia', 'ностальгия', 'сағыныш'), V('sentimental', 'сентиментальный', 'сезімтал'), V('bittersweet', 'горько-сладкий', 'ащы-тәтті'), V('memory trigger', 'триггер памяти', 'жады тудырғышы'), V('comfort', 'утешение', 'жұбаныш'), V('longing', 'тоска', 'сағыну'), V('rose-tinted', 'приукрашенный (о воспоминаниях)', 'әсем боялған (естелік)'), V('reminiscing', 'вспоминание', 'еске алу'), V('throwback', 'воспоминание (ретро)', 'бұрынғыны еске түсіру'), V('emotional connection', 'эмоциональная связь', 'эмоционалды байланыс')],
    'questions' => [
        V('What usually triggers a feeling of nostalgia for you?', 'Что обычно вызывает у вас чувство ностальгии?', 'Сізде сағыныш сезімін әдетте не тудырады?'),
        V('Do you enjoy reminiscing about your childhood?', 'Вам нравится вспоминать детство?', 'Балалық шағыңызды еске алғанды ұнатасыз ба?'),
        V('Do you think we remember the past through rose-tinted glasses?', 'Как вы думаете, мы вспоминаем прошлое приукрашенным?', 'Өткенді әсем боялған түрде есте сақтаймыз деп ойлайсыз ба?'),
        V('Is nostalgia usually a comforting feeling for you, or a sad one?', 'Ностальгия для вас обычно утешительное чувство или грустное?', 'Сағыныш сіз үшін әдетте жұбаныш сезімі ме, әлде мұңды сезім бе?'),
        V('Do old songs or smells bring back strong memories for you?', 'Старые песни или запахи вызывают у вас сильные воспоминания?', 'Ескі әндер немесе иістер сізде күшті естеліктер тудыра ма?'),
        V('Do you think nostalgia is becoming more common because of social media?', 'Как вы думаете, ностальгия становится более распространённой из-за соцсетей?', 'Сағыныш әлеуметтік желі себебінен көбірек тарала бастады деп ойлайсыз ба?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'Urban Green Spaces', 'background_key' => 'nature',
    'warmup' => V("Let's talk about urban green spaces. How important are parks and gardens in a city?", 'Давайте поговорим о зелёных зонах в городе. Насколько важны парки и сады в городе?', 'Қаладағы жасыл аймақтар туралы сөйлесейік. Қалада саябақтар мен бақшалар қаншалықты маңызды?'),
    'vocab' => [V('park design', 'дизайн парка', 'саябақ дизайны'), V('biodiversity', 'биоразнообразие', 'биоалуантүрлілік'), V('air quality', 'качество воздуха', 'ауа сапасы'), V('mental wellbeing', 'психическое благополучие', 'психикалық әл-ауқат'), V('community garden', 'общественный сад', 'қоғамдық бақша'), V('green roof', 'зелёная крыша', 'жасыл шатыр'), V('urban planning', 'городское планирование', 'қала жоспарлау'), V('accessibility', 'доступность', 'қолжетімділік'), V('recreation', 'отдых (рекреация)', 'демалыс (рекреация)'), V('tree canopy', 'полог деревьев', 'ағаш жамылғысы')],
    'questions' => [
        V('How important are parks to you in daily life?', 'Насколько важны для вас парки в повседневной жизни?', 'Күнделікті өмірде саябақтар сіз үшін қаншалықты маңызды?'),
        V('Do you think cities have enough green spaces?', 'Как вы думаете, в городах достаточно зелёных зон?', 'Қалаларда жеткілікті жасыл аймақтар бар деп ойлайсыз ба?'),
        V('Would you use a community garden if there was one nearby?', 'Вы бы пользовались общественным садом, если бы он был рядом?', 'Жақын жерде қоғамдық бақша болса, оны пайдаланар ма едіңіз?'),
        V('Do you think green spaces improve mental wellbeing?', 'Как вы думаете, зелёные зоны улучшают психическое благополучие?', 'Жасыл аймақтар психикалық әл-ауқатты жақсартады деп ойлайсыз ба?'),
        V('Should new buildings be required to have green roofs?', 'Должны ли новые здания быть обязаны иметь зелёные крыши?', 'Жаңа ғимараттар жасыл шатырға ие болуға міндетті болуы керек пе?'),
        V('What green space would you like to see added to your city?', 'Какую зелёную зону вы хотели бы видеть в своём городе?', 'Қалаңызға қандай жасыл аймақ қосылғанын қалайсыз?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'The Art of Small Talk', 'background_key' => 'warm',
    'warmup' => V("Let's talk about small talk. Are you good at making conversation with strangers?", 'Давайте поговорим о светской беседе. Вы хорошо умеете общаться с незнакомцами?', 'Жеңіл әңгіме туралы сөйлесейік. Бейтаныс адамдармен әңгімелесе аласыз ба?'),
    'vocab' => [V('icebreaker', 'начало разговора', 'әңгіме бастамасы'), V('awkward silence', 'неловкое молчание', 'ыңғайсыз үнсіздік'), V('common ground', 'общая тема', 'ортақ тақырып'), V('weather talk', 'разговор о погоде', 'ауа райы туралы әңгіме'), V('follow-up question', 'уточняющий вопрос', 'қосымша сұрақ'), V('rapport', 'взаимопонимание', 'өзара түсіністік'), V('superficial', 'поверхностный', 'үстірт'), V('genuine interest', 'искренний интерес', 'шынайы қызығушылық'), V('conversation starter', 'начало беседы', 'әңгіме бастаушы'), V('social skill', 'социальный навык', 'әлеуметтік дағды')],
    'questions' => [
        V('Are you comfortable making small talk with strangers?', 'Вам комфортно вести светскую беседу с незнакомцами?', 'Бейтаныс адамдармен жеңіл әңгіме жасау сізге ыңғайлы ма?'),
        V('What is your go-to conversation starter with new people?', 'Какое ваше стандартное начало разговора с новыми людьми?', 'Жаңа адамдармен әңгіме бастаудың сіздегі әдеттегі тәсілі қандай?'),
        V('Do you find small talk superficial, or a good way to build rapport?', 'Вы считаете светскую беседу поверхностной, или хорошим способом наладить взаимопонимание?', 'Жеңіл әңгімені үстірт деп санайсыз ба, әлде өзара түсіністік орнатудың жақсы тәсілі ме?'),
        V('How do you handle an awkward silence in a conversation?', 'Как вы справляетесь с неловким молчанием в разговоре?', 'Әңгімедегі ыңғайсыз үнсіздікпен қалай күресесіз?'),
        V('Do you ask follow-up questions when talking to someone new?', 'Вы задаёте уточняющие вопросы, разговаривая с новым человеком?', 'Жаңа адаммен сөйлескенде қосымша сұрақтар қоясыз ба?'),
        V('Is small talk a skill that can be learned, in your opinion?', 'Является ли светская беседа навыком, которому можно научиться, по-вашему?', 'Сіздің ойыңызша, жеңіл әңгіме үйренуге болатын дағды ма?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'Ethical Consumerism', 'background_key' => 'professional',
    'warmup' => V("Let's talk about ethical consumerism. Do you think about ethics when you shop?", 'Давайте поговорим об этичном потреблении. Вы думаете об этике, когда делаете покупки?', 'Этикалық тұтыну туралы сөйлесейік. Сауда жасағанда этика туралы ойланасыз ба?'),
    'vocab' => [V('fair trade', 'справедливая торговля', 'әділ сауда'), V('conscious consumer', 'сознательный потребитель', 'саналы тұтынушы'), V('supply chain transparency', 'прозрачность цепочки поставок', 'жеткізу тізбегінің ашықтығы'), V('boycott', 'бойкот', 'бойкот'), V('sustainable brand', 'устойчивый бренд', 'тұрақты бренд'), V('price premium', 'ценовая надбавка', 'баға үстемесі'), V('greenwashing', 'гринвошинг', 'жасыл жуу'), V('informed choice', 'осознанный выбор', 'хабардар таңдау'), V('impact', 'влияние', 'әсер'), V('responsibility', 'ответственность', 'жауапкершілік')],
    'questions' => [
        V('Do you think about where your products come from before buying them?', 'Вы думаете о том, откуда берутся товары, перед покупкой?', 'Сатып алмас бұрын тауарлардың қайдан келетіні туралы ойланасыз ба?'),
        V('Would you pay more for a fair trade or sustainable product?', 'Вы бы заплатили больше за товар справедливой торговли или устойчивый продукт?', 'Әділ сауда немесе тұрақты өнім үшін көбірек төлер ме едіңіз?'),
        V('Have you ever boycotted a brand for ethical reasons?', 'Вы когда-нибудь бойкотировали бренд по этическим соображениям?', 'Этикалық себептермен брендті бойкоттадыңыз ба?'),
        V('Do you think most companies are honest about their sustainability claims?', 'Как вы думаете, большинство компаний честны в своих заявлениях об устойчивости?', 'Көптеген компаниялар тұрақтылық туралы мәлімдемелерінде адал деп ойлайсыз ба?'),
        V('Is it realistic for everyone to be a fully ethical consumer?', 'Реально ли всем быть полностью этичными потребителями?', 'Барлығының толығымен этикалық тұтынушы болуы шынайы ма?'),
        V('What is one change you could make to shop more ethically?', 'Какое одно изменение вы могли бы внести, чтобы делать покупки более этично?', 'Этикалырақ сауда жасау үшін жасай алатын бір өзгеріс қандай?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'The Science of Habit Formation', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about how habits form. What is the secret to building a habit that sticks?", 'Давайте поговорим о том, как формируются привычки. В чём секрет формирования устойчивой привычки?', 'Әдеттердің қалай қалыптасатыны туралы сөйлесейік. Тұрақты әдет қалыптастырудың құпиясы неде?'),
    'vocab' => [V('cue', 'сигнал (триггер)', 'сигнал'), V('routine', 'рутина', 'күнделікті іс-әрекет'), V('reward', 'награда', 'сыйақы'), V('neural pathway', 'нейронный путь', 'нейрондық жол'), V('repetition', 'повторение', 'қайталау'), V('automaticity', 'автоматизм', 'автоматтылық'), V('habit stacking', 'связывание привычек', 'әдеттерді байланыстыру'), V('willpower', 'сила воли', 'ерік-жігер'), V('behavior change', 'изменение поведения', 'мінез-құлықты өзгерту'), V('consistency', 'последовательность', 'тұрақтылық')],
    'questions' => [
        V('What is one habit you have successfully built?', 'Какую привычку вы успешно сформировали?', 'Сәтті қалыптастырған әдетіңіз қандай?'),
        V('Do you rely on willpower, or do you build routines and cues?', 'Вы полагаетесь на силу воли, или создаёте рутины и сигналы?', 'Ерік-жігерге сенесіз бе, әлде күнделікті іс-әрекеттер мен сигналдар жасайсыз ба?'),
        V('Have you ever tried habit stacking?', 'Вы когда-нибудь пробовали связывание привычек?', 'Әдеттерді байланыстыруды сынап көрдіңіз бе?'),
        V('How long do you think it takes to build a new habit?', 'Сколько времени, по-вашему, требуется, чтобы сформировать новую привычку?', 'Сіздің ойыңызша, жаңа әдетті қалыптастыру қанша уақыт алады?'),
        V('What reward motivates you to stick to a habit?', 'Какая награда мотивирует вас придерживаться привычки?', 'Әдетті ұстануға сізді қандай сыйақы ынталандырады?'),
        V('Is consistency more important than intensity when building habits?', 'Последовательность важнее интенсивности при формировании привычек?', 'Әдет қалыптастырғанда тұрақтылық қарқындылықтан маңыздырақ па?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'Language and Thought', 'background_key' => 'professional',
    'warmup' => V("Let's talk about language and thinking. Do you think the language you speak shapes how you think?", 'Давайте поговорим о языке и мышлении. Как вы думаете, язык, на котором вы говорите, формирует ваше мышление?', 'Тіл мен ойлау туралы сөйлесейік. Сіздің ойыңызша, сөйлейтін тіліңіз ойлау тәсіліңізді қалыптастыра ма?'),
    'vocab' => [V('linguistic relativity', 'лингвистическая относительность', 'лингвистикалық салыстырмалылық'), V('bilingual thinking', 'двуязычное мышление', 'қос тілді ойлау'), V('translation gap', 'разрыв перевода', 'аударма алшақтығы'), V('idiom', 'идиома', 'идиома'), V('worldview', 'мировоззрение', 'дүниетаным'), V('vocabulary influence', 'влияние словарного запаса', 'сөздік қордың ықпалы'), V('cognitive flexibility', 'когнитивная гибкость', 'когнитивтік икемділік'), V('mother tongue', 'родной язык', 'ана тілі'), V('dialect', 'диалект', 'диалект'), V('expression', 'выражение', 'білдіру')],
    'questions' => [
        V('Do you think differently when you speak a different language?', 'Вы думаете по-другому, когда говорите на другом языке?', 'Басқа тілде сөйлегенде басқаша ойлайсыз ба?'),
        V('Is there an idiom in your language that is hard to translate?', 'Есть ли в вашем языке идиома, которую трудно перевести?', 'Тіліңізде аударуы қиын идиома бар ма?'),
        V('Do you think bilingual people have more cognitive flexibility?', 'Как вы думаете, у двуязычных людей больше когнитивной гибкости?', 'Қос тілді адамдардың когнитивтік икемділігі көбірек деп ойлайсыз ба?'),
        V('Does your mother tongue shape how you express emotions?', 'Ваш родной язык влияет на то, как вы выражаете эмоции?', 'Ана тіліңіз эмоцияларды білдіру тәсіліңізге әсер ете ме?'),
        V('Have you ever struggled to express an idea because of a translation gap?', 'Вы когда-нибудь испытывали трудности с выражением идеи из-за разрыва в переводе?', 'Аударма алшақтығы себебінен идеяны білдіруге қиналдыңыз ба?'),
        V('Do you think learning a new language changes your worldview?', 'Как вы думаете, изучение нового языка меняет мировоззрение?', 'Жаңа тіл үйрену дүниетанымыңызды өзгертеді деп ойлайсыз ба?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'The Rise of Co-Living Spaces', 'background_key' => 'professional',
    'warmup' => V("Let's talk about co-living. Would you want to live in a space with shared amenities and a built-in community?", 'Давайте поговорим о ко-ливинге. Хотели бы вы жить в пространстве с общими удобствами и готовым сообществом?', 'Ко-ливинг туралы сөйлесейік. Ортақ ыңғайлылықтары мен дайын қауымдастығы бар кеңістікте тұрғыңыз келе ме?'),
    'vocab' => [V('co-living', 'ко-ливинг', 'ко-ливинг'), V('shared amenities', 'общие удобства', 'ортақ ыңғайлылықтар'), V('community living', 'жизнь сообществом', 'қауымдастықпен тұру'), V('affordability', 'доступность', 'қолжетімділік'), V('social connection', 'социальная связь', 'әлеуметтік байланыс'), V('flexible lease', 'гибкая аренда', 'икемді жалдау'), V('urban density', 'городская плотность', 'қалалық тығыздық'), V('communal kitchen', 'общая кухня', 'ортақ ас үй'), V('privacy trade-off', 'компромисс с приватностью', 'жекеліктен бас тарту'), V('lifestyle choice', 'выбор образа жизни', 'өмір салты таңдауы')],
    'questions' => [
        V('Would you want to live in a co-living space?', 'Хотели бы вы жить в ко-ливинг пространстве?', 'Ко-ливинг кеңістігінде тұрғыңыз келе ме?'),
        V('What appeals to you about shared amenities?', 'Что вас привлекает в общих удобствах?', 'Ортақ ыңғайлылықтарда сізді не тартады?'),
        V('Would you trade some privacy for more social connection?', 'Вы бы пожертвовали частью приватности ради большей социальной связи?', 'Көбірек әлеуметтік байланыс үшін жекеліктен бас тартар ма едіңіз?'),
        V('Do you think co-living is a good solution to the housing crisis?', 'Как вы думаете, ко-ливинг — хорошее решение жилищного кризиса?', 'Ко-ливинг тұрғын үй дағдарысына жақсы шешім бе деп ойлайсыз ба?'),
        V('Would a flexible lease be important to you?', 'Гибкая аренда была бы важна для вас?', 'Икемді жалдау сіз үшін маңызды болар ма еді?'),
        V('Is co-living more suited to young people or could anyone enjoy it?', 'Ко-ливинг больше подходит молодым людям, или его могли бы оценить все?', 'Ко-ливинг жастарға көбірек сай ма, әлде кез келген адам ұнатар ма еді?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'Sports Fandom and Identity', 'background_key' => 'energetic',
    'warmup' => V("Let's talk about being a sports fan. Why do you think people feel such strong loyalty to a team?", 'Давайте поговорим о спортивных фанатах. Как вы думаете, почему люди испытывают такую сильную преданность команде?', 'Спорт жанкүйерлері туралы сөйлесейік. Сіздің ойыңызша, неге адамдар командаға осыншалықты күшті адалдық сезінеді?'),
    'vocab' => [V('fan culture', 'культура фанатов', 'жанкүйерлер мәдениеті'), V('loyalty', 'преданность', 'адалдық'), V('rivalry', 'соперничество', 'бәсекелестік'), V('tribalism', 'трайбализм', 'тайпашылдық'), V('matchday', 'день матча', 'матч күні'), V('superstition', 'суеверие', 'ырым'), V('identity', 'идентичность', 'бірегейлік'), V('belonging', 'принадлежность', 'тиесілілік'), V('passion', 'страсть', 'құштарлық'), V('tradition', 'традиция', 'дәстүр')],
    'questions' => [
        V('Do you support a sports team? How did you become a fan?', 'Вы болеете за спортивную команду? Как вы стали фанатом?', 'Спорт командасын жақтайсыз ба? Жанкүйер қалай болдыңыз?'),
        V('Why do you think fan loyalty can feel so personal?', 'Как вы думаете, почему преданность фанатов может ощущаться так лично?', 'Сіздің ойыңызша, неге жанкүйерлердің адалдығы осыншалықты жеке сезілуі мүмкін?'),
        V('Do you have any superstitions on matchday?', 'У вас есть какие-нибудь суеверия в день матча?', 'Матч күні қандай да бір ырымдарыңыз бар ма?'),
        V('Is rivalry between teams a positive or negative part of sports?', 'Соперничество между командами — это положительная или отрицательная часть спорта?', 'Командалар арасындағы бәсекелестік спорттың оң немесе теріс бөлігі ме?'),
        V('Does supporting a team give you a sense of belonging?', 'Поддержка команды даёт вам чувство принадлежности?', 'Команданы қолдау сізге тиесілілік сезімін бере ме?'),
        V('Have you ever traveled far to watch your team play?', 'Вы когда-нибудь ездили далеко, чтобы посмотреть игру своей команды?', 'Командаңыздың ойынын көру үшін алысқа саяхаттадыңыз ба?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'The Ethics of Reality TV', 'background_key' => 'night-city',
    'warmup' => V("Let's talk about reality TV. How much of what we see on reality shows do you think is real?", 'Давайте поговорим о реалити-шоу. Сколько из того, что мы видим в реалити-шоу, по-вашему, реально?', 'Реалити-шоу туралы сөйлесейік. Реалити-шоуда көретініміздің қаншасы шын деп ойлайсыз?'),
    'vocab' => [V('scripted reality', 'сценарная реальность', 'сценарийлі шындық'), V('exploitation', 'эксплуатация', 'пайдалану'), V('entertainment value', 'развлекательная ценность', 'ойын-сауық құндылығы'), V('privacy invasion', 'вторжение в частную жизнь', 'жеке өмірге қол сұғу'), V('manufactured drama', 'искусственная драма', 'жасанды драма'), V('consent', 'согласие', 'келісім'), V('fame-seeking', 'стремление к славе', 'атаққа ұмтылу'), V('voyeurism', 'вуайеризм', 'вуайеризм'), V('authenticity', 'подлинность', 'түпнұсқалық'), V('public interest', 'общественный интерес', 'қоғамдық қызығушылық')],
    'questions' => [
        V('Do you watch reality TV? Why or why not?', 'Вы смотрите реалити-шоу? Почему да или нет?', 'Реалити-шоу көресіз бе? Неге ия немесе жоқ?'),
        V('How much of reality TV do you think is scripted?', 'Сколько в реалити-шоу, по-вашему, сценарного?', 'Реалити-шоудың қаншасы сценарийлі деп ойлайсыз?'),
        V('Do you think reality TV can exploit its participants?', 'Как вы думаете, реалити-шоу может эксплуатировать своих участников?', 'Реалити-шоу қатысушыларын пайдалана алады деп ойлайсыз ба?'),
        V('Why do you think people enjoy watching manufactured drama?', 'Как вы думаете, почему людям нравится смотреть искусственную драму?', 'Сіздің ойыңызша, неге адамдар жасанды драманы көргенді ұнатады?'),
        V('Should there be stricter rules protecting reality TV participants?', 'Должны ли быть более строгие правила защиты участников реалити-шоу?', 'Реалити-шоу қатысушыларын қорғайтын қатаңырақ ережелер болуы керек пе?'),
        V('Do you think reality TV reflects real human behavior?', 'Как вы думаете, реалити-шоу отражает настоящее человеческое поведение?', 'Реалити-шоу шынайы адами мінез-құлықты көрсетеді деп ойлайсыз ба?'),
    ],
];

require __DIR__ . '/seed_lessons_batch5_part3.php';
