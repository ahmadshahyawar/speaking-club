<?php
declare(strict_types=1);
// Included from seed_lessons_batch4.php — shares its scope ($lessons, function V()).

// ========================= ELEMENTARY (batch 4) =========================

$lessons[] = ['level' => 'elementary', 'topic' => 'Job Interviews', 'background_key' => 'professional',
    'warmup' => V("Let's talk about job interviews. What makes a job interview go well?", 'Давайте поговорим о собеседованиях. Что делает собеседование успешным?', 'Сұхбаттар туралы сөйлесейік. Сұхбатты сәтті ететін не?'),
    'vocab' => [V('resume', 'резюме', 'түйіндеме'), V('cover letter', 'сопроводительное письмо', 'ілеспе хат'), V('qualification', 'квалификация', 'біліктілік'), V('experience', 'опыт', 'тәжірибе'), V('strength', 'сильная сторона', 'күшті жағы'), V('weakness', 'слабая сторона', 'әлсіз жағы'), V('punctual', 'пунктуальный', 'уақытылы'), V('dress code', 'дресс-код', 'киім коды'), V('handshake', 'рукопожатие', 'қол алысу'), V('follow-up', 'последующий контакт', 'кейінгі байланыс')],
    'questions' => [
        V('Have you ever had a job interview? How did it go?', 'У вас было собеседование? Как оно прошло?', 'Сұхбатыңыз болды ма? Қалай өтті?'),
        V('What do you think is your biggest strength?', 'Что вы считаете своей самой сильной стороной?', 'Ең күшті жағыңыз не деп ойлайсыз?'),
        V('Is it hard for you to talk about your weaknesses?', 'Вам трудно говорить о своих слабых сторонах?', 'Әлсіз жақтарыңыз туралы айту сізге қиын ба?'),
        V('Do you always arrive on time for appointments?', 'Вы всегда приходите вовремя на встречи?', 'Кездесулерге әрдайым уақытында келесіз бе?'),
        V('What should someone wear to a job interview?', 'Что нужно надеть на собеседование?', 'Сұхбатқа не кию керек?'),
        V('Do you send a follow-up message after an interview?', 'Вы отправляете сообщение после собеседования?', 'Сұхбаттан кейін хабарлама жібересіз бе?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Renting an Apartment', 'background_key' => 'professional',
    'warmup' => V("Let's talk about renting. What should you check before renting an apartment?", 'Давайте поговорим об аренде. Что нужно проверить перед арендой квартиры?', 'Жалдау туралы сөйлесейік. Пәтерді жалдамас бұрын нені тексеру керек?'),
    'vocab' => [V('landlord', 'арендодатель', 'үй иесі'), V('tenant', 'арендатор', 'жалдаушы'), V('lease', 'договор аренды', 'жалдау шарты'), V('deposit', 'залог', 'депозит'), V('utilities included', 'коммунальные включены', 'коммуналдық қызметтер қосылған'), V('furnished', 'меблированный', 'жиһазданған'), V('unfurnished', 'без мебели', 'жиһазсыз'), V('notice period', 'срок уведомления', 'ескерту мерзімі'), V('roommate', 'сосед по квартире', 'бөлме серігі'), V('viewing', 'просмотр (квартиры)', 'қарап шығу')],
    'questions' => [
        V('Have you ever rented an apartment? What was the process like?', 'Вы когда-нибудь снимали квартиру? Каким был процесс?', 'Пәтер жалдадыңыз ба? Процесс қалай болды?'),
        V('Would you prefer a furnished or unfurnished apartment?', 'Вы бы предпочли меблированную или немеблированную квартиру?', 'Жиһазданған пәтерді қалайсыз ба, әлде жиһазсызды ма?'),
        V('Do you think rental deposits are fair?', 'Как вы думаете, залоги за аренду справедливы?', 'Жалдау депозиттері әділ деп ойлайсыз ба?'),
        V('Would you rather live alone or with a roommate?', 'Вы бы предпочли жить один или с соседом?', 'Жалғыз тұрғанды қалайсыз ба, әлде бөлме серігімен бе?'),
        V('What questions would you ask a landlord before renting?', 'Какие вопросы вы бы задали арендодателю перед арендой?', 'Жалдамас бұрын үй иесіне қандай сұрақтар қояр едіңіз?'),
        V('Have you ever had a problem with a landlord or tenant?', 'У вас когда-нибудь были проблемы с арендодателем или арендатором?', 'Үй иесімен немесе жалдаушымен мәселеңіз болды ма?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'At the Gym', 'background_key' => 'energetic',
    'warmup' => V("Let's talk about the gym. Do you go to the gym, and what do you usually do there?", 'Давайте поговорим о спортзале. Вы ходите в спортзал, и что вы там обычно делаете?', 'Спортзал туралы сөйлесейік. Спортзалға барасыз ба және онда әдетте не істейсіз?'),
    'vocab' => [V('locker room', 'раздевалка', 'киім ауыстыру бөлмесі'), V('spotter', 'страхующий', 'сақтандырушы'), V('reps', 'повторения', 'қайталаулар'), V('sets', 'подходы', 'жаттығу топтары'), V('protein shake', 'протеиновый коктейль', 'протеин коктейлі'), V('sweat', 'пот', 'тер'), V('stretch', 'растяжка', 'созылу'), V('machine', 'тренажёр', 'тренажёр'), V('trainer', 'тренер', 'жаттықтырушы'), V('membership', 'абонемент', 'мүшелік')],
    'questions' => [
        V('Do you have a gym membership?', 'У вас есть абонемент в спортзал?', 'Спортзал мүшелігіңіз бар ма?'),
        V('Do you prefer working out alone or with a trainer?', 'Вы предпочитаете заниматься один или с тренером?', 'Жалғыз жаттығуды ұнатасыз ба, әлде жаттықтырушымен бе?'),
        V('What machines do you usually use at the gym?', 'Какими тренажёрами вы обычно пользуетесь в спортзале?', 'Спортзалда әдетте қандай тренажёрларды пайдаланасыз?'),
        V('Do you always stretch before exercising?', 'Вы всегда растягиваетесь перед тренировкой?', 'Жаттығу алдында әрдайым созыласыз ба?'),
        V('Do you drink protein shakes after a workout?', 'Вы пьёте протеиновые коктейли после тренировки?', 'Жаттығудан кейін протеин коктейлін ішесіз бе?'),
        V('What time of day do you prefer to exercise?', 'В какое время дня вы предпочитаете тренироваться?', 'Күннің қай уақытында жаттығуды ұнатасыз?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Weather and Clothing', 'background_key' => 'nature',
    'warmup' => V("Let's talk about dressing for the weather. How do you decide what to wear each day?", 'Давайте поговорим об одежде по погоде. Как вы решаете, что надеть каждый день?', 'Ауа райына сай киіну туралы сөйлесейік. Күн сайын не киетінді қалай шешесіз?'),
    'vocab' => [V('raincoat', 'дождевик', 'жаңбырлық'), V('boots', 'сапоги', 'етік'), V('layer', 'слой (одежды)', 'қабат (киім)'), V('forecast', 'прогноз', 'болжам'), V('seasonal', 'сезонный', 'маусымдық'), V('wardrobe change', 'смена гардероба', 'гардеробты ауыстыру'), V('umbrella', 'зонт', 'қолшатыр'), V('sunblock', 'солнцезащитный крем', 'күннен қорғайтын крем'), V('scarf', 'шарф', 'шарф'), V('gloves', 'перчатки', 'қолғап')],
    'questions' => [
        V('Do you check the forecast before choosing your clothes?', 'Вы проверяете прогноз перед выбором одежды?', 'Киім таңдамас бұрын болжамды тексересіз бе?'),
        V('Do you own a good raincoat or umbrella?', 'У вас есть хороший дождевик или зонт?', 'Жақсы жаңбырлығыңыз немесе қолшатырыңыз бар ма?'),
        V('How do you change your wardrobe between seasons?', 'Как вы меняете гардероб между сезонами?', 'Гардеробыңызды маусымдар арасында қалай ауыстырасыз?'),
        V('Do you wear sunblock regularly?', 'Вы регулярно пользуетесь солнцезащитным кремом?', 'Тұрақты түрде күннен қорғайтын кремді пайдаланасыз ба?'),
        V('What is your favorite piece of winter clothing?', 'Какая ваша любимая зимняя одежда?', 'Сүйікті қысқы киіміңіз қандай?'),
        V('Do you layer your clothes in cold weather?', 'Вы надеваете несколько слоёв одежды в холодную погоду?', 'Суық ауа райында киімді қабаттап киесіз бе?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Learning a New Language', 'background_key' => 'professional',
    'warmup' => V("Let's talk about learning languages. What has your experience been like learning a new language?", 'Давайте поговорим об изучении языков. Каким был ваш опыт изучения нового языка?', 'Тіл үйрену туралы сөйлесейік. Жаңа тіл үйренудегі тәжірибеңіз қандай болды?'),
    'vocab' => [V('vocabulary', 'словарный запас', 'сөздік қор'), V('grammar', 'грамматика', 'грамматика'), V('pronunciation', 'произношение', 'айтылым'), V('fluent', 'свободно владеющий', 'еркін сөйлейтін'), V('accent', 'акцент', 'акцент'), V('practice partner', 'партнёр для практики', 'жаттығу серігі'), V('immersion', 'погружение (языковое)', 'тілге сіңу'), V('flashcards', 'карточки для запоминания', 'есте сақтау карточкалары'), V('mistake', 'ошибка', 'қате'), V('progress', 'прогресс', 'прогресс')],
    'questions' => [
        V('How long have you been learning English?', 'Как долго вы изучаете английский?', 'Ағылшын тілін қанша уақыттан бері үйреніп жүрсіз?'),
        V('Do you use flashcards or apps to learn vocabulary?', 'Вы используете карточки или приложения для изучения слов?', 'Сөздерді үйрену үшін карточкаларды немесе қолданбаларды пайдаланасыз ба?'),
        V('Are you afraid of making mistakes when speaking?', 'Вы боитесь допускать ошибки при разговоре?', 'Сөйлегенде қате жіберуден қорқасыз ба?'),
        V('Do you have a practice partner to speak with?', 'У вас есть партнёр, с которым вы практикуете язык?', 'Тілде сөйлесетін жаттығу серігіңіз бар ма?'),
        V('What part of learning a language is hardest for you?', 'Какая часть изучения языка самая трудная для вас?', 'Тіл үйренудің қай бөлігі сіз үшін ең қиын?'),
        V('Would you like to become fluent in another language too?', 'Хотели бы вы свободно владеть ещё одним языком?', 'Тағы бір тілде еркін сөйлегіңіз келе ме?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Car Ownership', 'background_key' => 'professional',
    'warmup' => V("Let's talk about owning a car. What is it like to own and maintain a car?", 'Давайте поговорим о владении машиной. Каково это — иметь и обслуживать машину?', 'Көлікке ие болу туралы сөйлесейік. Көлікке ие болу және оны күту қалай?'),
    'vocab' => [V('driving license', 'водительские права', 'жүргізуші куәлігі'), V('insurance', 'страховка', 'сақтандыру'), V('fuel', 'топливо', 'отын'), V('mechanic', 'механик', 'механик'), V('maintenance', 'обслуживание', 'қызмет көрсету'), V('parking', 'парковка', 'тұрақ'), V('traffic ticket', 'штраф', 'айыппұл'), V('mileage', 'пробег', 'жүріс'), V('breakdown', 'поломка', 'бұзылу'), V('tire', 'шина', 'дөңгелек')],
    'questions' => [
        V('Do you own a car? What kind?', 'У вас есть машина? Какая?', 'Көлігіңіз бар ма? Қандай?'),
        V('Have you ever had a car breakdown? What happened?', 'У вас когда-нибудь ломалась машина? Что случилось?', 'Көлігіңіз бұзылды ма? Не болды?'),
        V('How often do you take your car for maintenance?', 'Как часто вы обслуживаете свою машину?', 'Көлігіңізге қаншалықты жиі қызмет көрсетесіз?'),
        V('Is parking difficult where you live?', 'Трудно ли парковаться там, где вы живёте?', 'Тұратын жеріңізде тұраққа қою қиын ба?'),
        V('Have you ever gotten a traffic ticket?', 'Вы когда-нибудь получали штраф?', 'Айыппұл алдыңыз ба?'),
        V('Would you rather own a car or use public transport?', 'Вы бы предпочли иметь машину или пользоваться общественным транспортом?', 'Көлікке ие болғанды қалайсыз ба, әлде қоғамдық көлікті пайдаланғанды ма?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Recycling and Waste', 'background_key' => 'nature',
    'warmup' => V("Let's talk about recycling. How much do you think about waste in your daily life?", 'Давайте поговорим о переработке отходов. Насколько вы думаете об отходах в повседневной жизни?', 'Қайта өңдеу туралы сөйлесейік. Күнделікті өмірде қалдық туралы қаншалықты ойлайсыз?'),
    'vocab' => [V('recycle bin', 'бак для переработки', 'қайта өңдеу контейнері'), V('compost', 'компост', 'компост'), V('plastic', 'пластик', 'пластик'), V('landfill', 'свалка', 'қоқыс полигоны'), V('reusable', 'многоразовый', 'қайта пайдалануға болатын'), V('sort', 'сортировать', 'сұрыптау'), V('waste', 'отходы', 'қалдық'), V('packaging', 'упаковка', 'қаптама'), V('eco-friendly', 'экологичный', 'экологиялық таза'), V('reduce', 'сокращать', 'азайту')],
    'questions' => [
        V('Do you recycle regularly at home?', 'Вы регулярно перерабатываете отходы дома?', 'Үйде тұрақты түрде қайта өңдейсіз бе?'),
        V('Do you use reusable bags when shopping?', 'Вы используете многоразовые пакеты при покупках?', 'Сауда жасағанда қайта пайдалануға болатын пакеттерді қолданасыз ба?'),
        V('Do you sort your waste into different bins?', 'Вы сортируете отходы по разным бакам?', 'Қалдықты әртүрлі контейнерлерге сұрыптайсыз ба?'),
        V('Do you think there is too much plastic packaging on products?', 'Как вы думаете, на товарах слишком много пластиковой упаковки?', 'Тауарларда пластик қаптама тым көп деп ойлайсыз ба?'),
        V('What could you do to produce less waste?', 'Что вы могли бы сделать, чтобы производить меньше отходов?', 'Аз қалдық шығару үшін не істей аласыз?'),
        V('Do you compost food waste at home?', 'Вы делаете компост из пищевых отходов дома?', 'Үйде тамақ қалдықтарынан компост жасайсыз ба?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Online Dating', 'background_key' => 'warm',
    'warmup' => V("Let's talk about online dating. How has technology changed the way people meet romantic partners?", 'Давайте поговорим об онлайн-знакомствах. Как технологии изменили то, как люди находят романтических партнёров?', 'Онлайн танысу туралы сөйлесейік. Технология адамдардың романтикалық серігін табу тәсілін қалай өзгертті?'),
    'vocab' => [V('profile', 'профиль', 'профиль'), V('match', 'совпадение (пара)', 'сәйкестік'), V('message', 'сообщение', 'хабарлама'), V('first date', 'первое свидание', 'алғашқы кездесу'), V('chemistry', 'химия (притяжение)', 'жарасымдылық'), V('swipe', 'свайп', 'свайп'), V('video call', 'видеозвонок', 'бейнеқоңырау'), V('compatibility', 'совместимость', 'үйлесімділік'), V('meet up', 'встретиться', 'кездесу'), V('relationship', 'отношения', 'қарым-қатынас')],
    'questions' => [
        V('Have you or someone you know ever used a dating app?', 'Вы или кто-то из ваших знакомых пользовались приложением для знакомств?', 'Сіз немесе таныстарыңыз танысу қолданбасын пайдаланды ма?'),
        V('Do you think online dating is a good way to meet people?', 'Как вы думаете, онлайн-знакомства — хороший способ найти людей?', 'Онлайн танысу адамдармен танысудың жақсы тәсілі деп ойлайсыз ба?'),
        V('What makes a good first date?', 'Что делает первое свидание хорошим?', 'Алғашқы кездесуді жақсы ететін не?'),
        V('Is it easy to know if you have chemistry with someone quickly?', 'Легко ли быстро понять, есть ли у вас химия с кем-то?', 'Біреумен жарасымдылығыңыз бар-жоғын тез білу оңай ма?'),
        V('Do you prefer meeting people online or in person?', 'Вы предпочитаете знакомиться с людьми онлайн или лично?', 'Адамдармен онлайн танысуды ұнатасыз ба, әлде жеке ме?'),
        V('What do you think makes a relationship successful long-term?', 'Что, по-вашему, делает отношения успешными в долгосрочной перспективе?', 'Сіздің ойыңызша, қарым-қатынасты ұзақ мерзімді табысты ететін не?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Home Cooking vs Takeout', 'background_key' => 'playful',
    'warmup' => V("Let's talk about cooking versus takeout. Do you cook at home more, or order food?", 'Давайте поговорим о готовке и заказе еды. Вы больше готовите дома или заказываете еду?', 'Үйде тамақ жасау мен алып кету туралы сөйлесейік. Үйде көбірек тамақ жасайсыз ба, әлде тамақ тапсырыс бересіз бе?'),
    'vocab' => [V('takeout', 'еда на вынос', 'алып кету'), V('delivery', 'доставка', 'жеткізу'), V('homemade', 'домашнего приготовления', 'үйде жасалған'), V('convenience', 'удобство', 'ыңғайлылық'), V('leftovers', 'остатки еды', 'қалдық тамақ'), V('meal prep', 'заготовка еды заранее', 'тамақты алдын ала дайындау'), V('fast food', 'фастфуд', 'фастфуд'), V('budget', 'бюджет', 'бюджет'), V('healthy option', 'полезный вариант', 'пайдалы нұсқа'), V('craving', 'сильное желание (еды)', 'қатты қалау (тамаққа)')],
    'questions' => [
        V('Do you cook at home more, or order takeout?', 'Вы больше готовите дома или заказываете еду на вынос?', 'Үйде көбірек тамақ жасайсыз ба, әлде алып кетуге тапсырыс бересіз бе?'),
        V('Do you think homemade food is healthier than takeout?', 'Как вы думаете, домашняя еда полезнее еды на вынос?', 'Үйде жасалған тамақ алып кету тамақтан пайдалырақ деп ойлайсыз ба?'),
        V('Do you meal prep for the week?', 'Вы готовите еду заранее на неделю?', 'Аптаға алдын ала тамақ дайындайсыз ба?'),
        V('What do you crave when you are stressed?', 'Что вам хочется съесть, когда вы в стрессе?', 'Күйзеліс кезінде не жегіңіз келеді?'),
        V('Is fast food a big part of your diet?', 'Фастфуд занимает большую часть вашего рациона?', 'Фастфуд рационыңыздың үлкен бөлігін алады ма?'),
        V('Do leftovers usually go to waste in your house?', 'Остатки еды обычно пропадают у вас дома?', 'Үйіңізде қалдық тамақ әдетте текке кете ме?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Personal Finance Basics', 'background_key' => 'professional',
    'warmup' => V("Let's talk about personal finance. How do you manage your money each month?", 'Давайте поговорим о личных финансах. Как вы управляете своими деньгами каждый месяц?', 'Жеке қаржы туралы сөйлесейік. Ай сайын ақшаңызды қалай басқарасыз?'),
    'vocab' => [V('budgeting', 'составление бюджета', 'бюджет жоспарлау'), V('expenses', 'расходы', 'шығындар'), V('savings account', 'сберегательный счёт', 'жинақ шоты'), V('credit card', 'кредитная карта', 'несие картасы'), V('debt', 'долг', 'борыш'), V('financial goal', 'финансовая цель', 'қаржылық мақсат'), V('spending habit', 'привычка тратить', 'жұмсау әдеті'), V('paycheck', 'зарплата', 'жалақы'), V('bill', 'счёт', 'шот'), V('invest', 'инвестировать', 'инвестициялау')],
    'questions' => [
        V('Do you keep track of your monthly expenses?', 'Вы отслеживаете свои ежемесячные расходы?', 'Айлық шығындарыңызды қадағалайсыз ба?'),
        V('Do you have a savings account?', 'У вас есть сберегательный счёт?', 'Сізде жинақ шотыңыз бар ма?'),
        V('What is one financial goal you are working towards?', 'Какая финансовая цель, к которой вы стремитесь?', 'Қандай қаржылық мақсатқа қарай ұмтылып жатырсыз?'),
        V('Do you use a credit card often?', 'Вы часто пользуетесь кредитной картой?', 'Несие картасын жиі пайдаланасыз ба?'),
        V('Have you ever thought about investing your money?', 'Вы когда-нибудь думали инвестировать свои деньги?', 'Ақшаңызды инвестициялауды ойладыңыз ба?'),
        V('What is your biggest spending habit that you would like to change?', 'Какая ваша самая большая привычка тратить, которую вы хотели бы изменить?', 'Өзгерткіңіз келетін ең үлкен жұмсау әдетіңіз қандай?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Weekend Markets', 'background_key' => 'playful',
    'warmup' => V("Let's talk about weekend markets. Do you enjoy browsing local markets?", 'Давайте поговорим о выходных рынках. Вам нравится гулять по местным рынкам?', 'Демалыс базарлары туралы сөйлесейік. Жергілікті базарларды аралағанды ұнатасыз ба?'),
    'vocab' => [V('flea market', 'блошиный рынок', 'заттар базары'), V('vendor', 'продавец', 'сатушы'), V('handmade', 'ручной работы', 'қолмен жасалған'), V('bargain', 'выгодная покупка', 'тиімді сатып алу'), V('local produce', 'местные продукты', 'жергілікті өнім'), V('stall', 'прилавок', 'сөре (сауда)'), V('crowd', 'толпа', 'тобыр'), V('browse', 'просматривать', 'қарап шығу'), V('artisan', 'ремесленник', 'қолөнерші'), V('souvenir', 'сувенир', 'сувенир')],
    'questions' => [
        V('Do you like visiting flea markets or weekend markets?', 'Вам нравится посещать блошиные рынки или рынки выходного дня?', 'Заттар базарын немесе демалыс базарын аралағанды ұнатасыз ба?'),
        V('Have you ever found a great bargain at a market?', 'Вы когда-нибудь находили выгодную покупку на рынке?', 'Базардан тиімді сатып алу таптыңыз ба?'),
        V('Do you prefer buying local produce or supermarket food?', 'Вы предпочитаете покупать местные продукты или еду из супермаркета?', 'Жергілікті өнімді сатып алғанды ұнатасыз ба, әлде супермаркет тағамын ба?'),
        V('Do you like handmade items more than factory-made ones?', 'Вам нравятся изделия ручной работы больше, чем фабричные?', 'Қолмен жасалған заттарды фабрикада жасалғаннан гөрі ұнатасыз ба?'),
        V('Do crowded markets bother you or excite you?', 'Многолюдные рынки вас раздражают или радуют?', 'Тобырлы базарлар сізді мазалай ма, әлде қуантады ма?'),
        V('What souvenir would you buy from a local market?', 'Какой сувенир вы бы купили на местном рынке?', 'Жергілікті базардан қандай сувенир сатып алар едіңіз?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'City Landmarks', 'background_key' => 'night-city',
    'warmup' => V("Let's talk about landmarks. What is the most famous landmark in your city or country?", 'Давайте поговорим о достопримечательностях. Какая самая известная достопримечательность в вашем городе или стране?', 'Көрікті жерлер туралы сөйлесейік. Қалаңыздағы немесе еліңіздегі ең танымал көрікті жер қайсы?'),
    'vocab' => [V('monument', 'памятник', 'ескерткіш'), V('statue', 'статуя', 'мүсін'), V('tower', 'башня', 'мұнара'), V('historic site', 'исторический объект', 'тарихи орын'), V('tour guide', 'гид', 'гид'), V('entrance fee', 'плата за вход', 'кіру ақысы'), V('plaza', 'площадь', 'алаң'), V('viewpoint', 'смотровая площадка', 'шолу алаңы'), V('architecture', 'архитектура', 'сәулет'), V('postcard', 'открытка', 'ашық хат')],
    'questions' => [
        V('What is the most famous landmark in your city?', 'Какая самая известная достопримечательность в вашем городе?', 'Қалаңыздағы ең танымал көрікті жер қайсы?'),
        V('Have you ever hired a tour guide?', 'Вы когда-нибудь нанимали гида?', 'Гидті жалдадыңыз ба?'),
        V('Do you enjoy visiting historic sites?', 'Вам нравится посещать исторические места?', 'Тарихи орындарға баруды ұнатасыз ба?'),
        V('Do you send postcards when you travel?', 'Вы отправляете открытки, когда путешествуете?', 'Саяхаттағанда ашық хат жібересіз бе?'),
        V('What kind of architecture do you find most beautiful?', 'Какая архитектура кажется вам самой красивой?', 'Қандай сәулет сізге ең әдемі көрінеді?'),
        V('Would you climb a tower for a good view?', 'Вы бы поднялись на башню ради хорошего вида?', 'Жақсы көрініс үшін мұнараға шығар ма едіңіз?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Volunteering Locally', 'background_key' => 'warm',
    'warmup' => V("Let's talk about local volunteering. What community work would you like to do?", 'Давайте поговорим о местном волонтёрстве. Какую общественную работу вы хотели бы делать?', 'Жергілікті еріктілер туралы сөйлесейік. Қандай қоғамдық жұмыс істегіңіз келеді?'),
    'vocab' => [V('soup kitchen', 'столовая для нуждающихся', 'кедейлерге арналған ас үй'), V('food bank', 'продуктовый банк', 'азық-түлік банкі'), V('cleanup', 'уборка (мероприятие)', 'тазалау шарасы'), V('mentor', 'наставник', 'тәлімгер'), V('donation drive', 'сбор пожертвований', 'қайыр жинау'), V('community center', 'общественный центр', 'қоғамдық орталық'), V('elderly care', 'уход за пожилыми', 'қарттарға күтім'), V('tutoring', 'репетиторство', 'репетиторлық'), V('animal shelter', 'приют для животных', 'жануарлар паналайтын жер'), V('outreach', 'работа с населением', 'қоғаммен жұмыс')],
    'questions' => [
        V('Have you ever volunteered at a food bank or shelter?', 'Вы когда-нибудь были волонтёром в продуктовом банке или приюте?', 'Азық-түлік банкінде немесе паналайтын жерде еріктілер қатарында болдыңыз ба?'),
        V('Would you like to be a mentor for someone younger?', 'Хотели бы вы стать наставником для кого-то младше?', 'Жасыраққа тәлімгер болғыңыз келе ме?'),
        V('Do you think everyone should volunteer at least once a year?', 'Как вы думаете, каждый должен быть волонтёром хотя бы раз в год?', 'Әркім жылына кемінде бір рет еріктілер қатарында болуы керек деп ойлайсыз ба?'),
        V('What community work interests you the most?', 'Какая общественная работа вас больше всего интересует?', 'Сізді ең көп қандай қоғамдық жұмыс қызықтырады?'),
        V('Have you ever donated to a cleanup or donation drive?', 'Вы когда-нибудь жертвовали на уборку или сбор пожертвований?', 'Тазалау шарасына немесе қайыр жинауға қаражат бөлдіңіз бе?'),
        V('Do you think volunteering benefits the volunteer as much as the community?', 'Как вы думаете, волонтёрство приносит пользу волонтёру так же, как и сообществу?', 'Еріктілер қызметі еріктінің өзіне қоғамдастыққа пайда әкелгендей пайда әкеле ме деп ойлайсыз ба?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Weather Emergencies', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about severe weather. How do you prepare for a big storm or extreme weather?", 'Давайте поговорим о суровой погоде. Как вы готовитесь к сильному шторму или экстремальной погоде?', 'Қатты ауа райы туралы сөйлесейік. Күшті дауылға немесе экстремалды ауа райына қалай дайындаласыз?'),
    'vocab' => [V('hurricane', 'ураган', 'дауыл (циклон)'), V('flood', 'наводнение', 'су тасқыны'), V('heatwave', 'жара', 'ыстық толқыны'), V('blizzard', 'метель', 'боран'), V('evacuation', 'эвакуация', 'эвакуация'), V('shelter', 'укрытие', 'баспана'), V('warning', 'предупреждение', 'ескерту'), V('disaster kit', 'аварийный набор', 'апаттық жинақ'), V('power outage', 'отключение электричества', 'электр қуатының өшуі'), V('emergency contact', 'экстренный контакт', 'төтенше байланыс')],
    'questions' => [
        V('Have you ever experienced severe weather like a storm or flood?', 'Вы когда-нибудь переживали суровую погоду, например шторм или наводнение?', 'Дауыл немесе су тасқыны сияқты қатты ауа райын бастан кештіңіз бе?'),
        V('Do you have a disaster kit at home?', 'У вас дома есть аварийный набор?', 'Үйде апаттық жинағыңыз бар ма?'),
        V('What do you do during a power outage?', 'Что вы делаете во время отключения электричества?', 'Электр қуаты өшкенде не істейсіз?'),
        V('Do you take weather warnings seriously?', 'Вы серьёзно относитесь к предупреждениям о погоде?', 'Ауа райы туралы ескертулерге байыпты қарайсыз ба?'),
        V('Would you evacuate immediately if told to?', 'Вы бы немедленно эвакуировались, если бы вам сказали?', 'Айтылса, дереу эвакуацияланар ма едіңіз?'),
        V('What extreme weather is most common where you live?', 'Какая экстремальная погода наиболее распространена там, где вы живёте?', 'Тұратын жеріңізде қандай экстремалды ауа райы жиі кездеседі?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Learning to Drive', 'background_key' => 'energetic',
    'warmup' => V("Let's talk about learning to drive. Do you remember your first driving lesson?", 'Давайте поговорим об обучении вождению. Вы помните свой первый урок вождения?', 'Көлік жүргізуді үйрену туралы сөйлесейік. Алғашқы жүргізу сабағыңыз есіңізде ме?'),
    'vocab' => [V('steering wheel', 'руль', 'руль'), V('brake', 'тормоз', 'тежегіш'), V('accelerator', 'педаль газа', 'газ педалі'), V('mirror check', 'проверка зеркал', 'айнаны тексеру'), V('parallel park', 'параллельная парковка', 'параллель тұрақтау'), V('instructor', 'инструктор', 'нұсқаушы'), V('road test', 'экзамен по вождению', 'жол емтиханы'), V("learner's permit", 'ученические права', 'үйренуші куәлігі'), V('seatbelt', 'ремень безопасности', 'қауіпсіздік белбеуі'), V('signal', 'сигнал (поворота)', 'сигнал (бұрылыс)')],
    'questions' => [
        V('Do you remember your first driving lesson?', 'Вы помните свой первый урок вождения?', 'Алғашқы жүргізу сабағыңыз есіңізде ме?'),
        V('Was parallel parking difficult for you to learn?', 'Параллельная парковка была трудной для вас?', 'Параллель тұрақтауды үйрену сізге қиын болды ма?'),
        V('Did you pass your road test on the first try?', 'Вы сдали экзамен по вождению с первого раза?', 'Жол емтиханын бірінші реттен тапсырдыңыз ба?'),
        V('Do you always wear a seatbelt?', 'Вы всегда пристёгиваетесь ремнём безопасности?', 'Әрдайым қауіпсіздік белбеуін тағасыз ба?'),
        V('Do you think driving lessons should be required for everyone?', 'Как вы думаете, уроки вождения должны быть обязательными для всех?', 'Жүргізу сабақтары барлығына міндетті болуы керек деп ойлайсыз ба?'),
        V('Were you nervous when you first started driving?', 'Вы нервничали, когда только начали водить?', 'Көлік жүргізуді жаңа бастағанда толқыдыңыз ба?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Neighborhood Watch', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about neighborhood safety. What keeps a neighborhood safe?", 'Давайте поговорим о безопасности района. Что делает район безопасным?', 'Аудан қауіпсіздігі туралы сөйлесейік. Ауданды қауіпсіз ететін не?'),
    'vocab' => [V('patrol', 'патруль', 'патруль'), V('suspicious', 'подозрительный', 'күдікті'), V('report', 'сообщать', 'хабарлау'), V('alert', 'оповещение', 'ескерту'), V('community safety', 'безопасность сообщества', 'қауымдастық қауіпсіздігі'), V('streetlight', 'уличный фонарь', 'көше шамы'), V('security camera', 'камера видеонаблюдения', 'қауіпсіздік камерасы'), V('cooperation', 'сотрудничество', 'ынтымақтастық'), V('crime rate', 'уровень преступности', 'қылмыс деңгейі'), V('prevention', 'предотвращение', 'алдын алу')],
    'questions' => [
        V('Do you feel your neighborhood is safe?', 'Вы считаете, что ваш район безопасен?', 'Ауданыңызды қауіпсіз деп санайсыз ба?'),
        V('Would you report something suspicious to the police?', 'Вы бы сообщили о чём-то подозрительном в полицию?', 'Күдікті бір нәрсе туралы полицияға хабарлар ма едіңіз?'),
        V('Do you think security cameras make a neighborhood safer?', 'Как вы думаете, камеры видеонаблюдения делают район безопаснее?', 'Қауіпсіздік камералары ауданды қауіпсіздірек ете ме деп ойлайсыз ба?'),
        V('Are streetlights good in your neighborhood at night?', 'Уличные фонари хорошие в вашем районе ночью?', 'Түнде ауданыңызда көше шамдары жақсы ма?'),
        V('Would you join a neighborhood watch group?', 'Вы бы вступили в группу соседского дозора?', 'Аудандық бақылау тобына қосылар ма едіңіз?'),
        V('Do neighbors cooperate well in your area?', 'Соседи хорошо сотрудничают в вашем районе?', 'Ауданыңызда көршілер жақсы ынтымақтасады ма?'),
    ],
];

$lessons[] = ['level' => 'elementary', 'topic' => 'Seasonal Jobs', 'background_key' => 'energetic',
    'warmup' => V("Let's talk about seasonal jobs. Have you ever done a job that only lasted one season?", 'Давайте поговорим о сезонной работе. Вы когда-нибудь выполняли работу, которая длилась только один сезон?', 'Маусымдық жұмыс туралы сөйлесейік. Тек бір маусымға созылған жұмыс істедіңіз бе?'),
    'vocab' => [V('seasonal work', 'сезонная работа', 'маусымдық жұмыс'), V('harvest job', 'работа на сборе урожая', 'егін жинау жұмысы'), V('ski resort', 'горнолыжный курорт', 'шаңғы курорты'), V('summer camp', 'летний лагерь', 'жазғы лагерь'), V('temporary contract', 'временный контракт', 'уақытша келісім-шарт'), V('tourist season', 'туристический сезон', 'туристік маусым'), V('tips', 'чаевые', 'шайпұл'), V('shift', 'смена', 'ауысым'), V('overtime', 'сверхурочные', 'үстеме сағат'), V('hire', 'нанимать', 'жалдау')],
    'questions' => [
        V('Have you ever had a seasonal job? What was it?', 'У вас когда-нибудь была сезонная работа? Какая?', 'Маусымдық жұмысыңыз болды ма? Қандай?'),
        V('Would you like to work at a ski resort or summer camp?', 'Хотели бы вы работать на горнолыжном курорте или в летнем лагере?', 'Шаңғы курортында немесе жазғы лагерьде жұмыс істегіңіз келе ме?'),
        V('Do you think seasonal jobs pay well?', 'Как вы думаете, сезонная работа хорошо оплачивается?', 'Маусымдық жұмыс жақсы ақы төлейді деп ойлайсыз ба?'),
        V('Would a temporary contract job appeal to you?', 'Вас бы заинтересовала работа по временному контракту?', 'Уақытша келісім-шарт бойынша жұмыс сізге қызық болар ма еді?'),
        V('Have you ever worked long shifts or overtime?', 'Вы когда-нибудь работали долгими сменами или сверхурочно?', 'Ұзақ ауысымда немесе үстеме сағат жұмыс істедіңіз бе?'),
        V('Is your area busy during a particular tourist season?', 'Ваш район оживлён в определённый туристический сезон?', 'Ауданыңыз белгілі бір туристік маусымда қарбалас бола ма?'),
    ],
];

// ========================= PRE-INTERMEDIATE (batch 4) =========================

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'The Ethics of Eating Meat', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about eating meat. Do you think about the ethics of your food choices?", 'Давайте поговорим об употреблении мяса. Вы задумываетесь об этике своего выбора еды?', 'Ет жеу туралы сөйлесейік. Тамақ таңдауыңыздың этикасы туралы ойланасыз ба?'),
    'vocab' => [V('carnivore', 'хищник', 'жыртқыш'), V('herbivore', 'травоядное', 'шөпқоректі'), V('factory farming', 'промышленное животноводство', 'өнеркәсіптік мал шаруашылығы'), V('plant-based', 'растительный', 'өсімдік негізді'), V('ethical dilemma', 'этическая дилемма', 'этикалық дилемма'), V('protein source', 'источник белка', 'ақуыз көзі'), V('animal welfare', 'благополучие животных', 'жануарлардың әл-ауқаты'), V('environmental impact', 'воздействие на окружающую среду', 'қоршаған ортаға әсер'), V('moderation', 'умеренность', 'орташалық'), V('food choice', 'выбор еды', 'тамақ таңдауы')],
    'questions' => [
        V('Do you think about where your meat comes from?', 'Вы думаете о том, откуда берётся ваше мясо?', 'Етіңіз қайдан келетіні туралы ойланасыз ба?'),
        V('Would you consider reducing meat in your diet for ethical reasons?', 'Вы бы рассмотрели возможность сократить мясо в рационе по этическим соображениям?', 'Этикалық себептермен рационыңыздағы етті азайтуды қарастырар ма едіңіз?'),
        V('Do you think factory farming is a serious problem?', 'Как вы думаете, промышленное животноводство — серьёзная проблема?', 'Өнеркәсіптік мал шаруашылығы байыпты мәселе деп ойлайсыз ба?'),
        V('Is eating meat in moderation a good compromise?', 'Есть мясо в умеренных количествах — хороший компромисс?', 'Етті орташа мөлшерде жеу жақсы ымыра ма?'),
        V('Would you try a fully plant-based diet for a month?', 'Вы бы попробовали полностью растительную диету на месяц?', 'Бір айға толықтай өсімдік негізді диетаны сынап көрер ме едіңіз?'),
        V('Do you think the environmental impact of meat is exaggerated?', 'Как вы думаете, воздействие мяса на окружающую среду преувеличено?', 'Еттің қоршаған ортаға әсері әсірелеген деп ойлайсыз ба?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'Language Loss and Revival', 'background_key' => 'warm',
    'warmup' => V("Let's talk about endangered languages. Why do languages disappear, and can they be saved?", 'Давайте поговорим об исчезающих языках. Почему языки исчезают и можно ли их спасти?', 'Жойылу қаупі бар тілдер туралы сөйлесейік. Тілдер неге жойылады және оларды құтқаруға бола ма?'),
    'vocab' => [V('endangered language', 'исчезающий язык', 'жойылу қаупі бар тіл'), V('mother tongue', 'родной язык', 'ана тілі'), V('fluent speaker', 'свободно говорящий', 'еркін сөйлеуші'), V('linguistic diversity', 'языковое разнообразие', 'лингвистикалық әртүрлілік'), V('revival program', 'программа возрождения', 'жаңғырту бағдарламасы'), V('dialect', 'диалект', 'диалект'), V('extinction', 'вымирание', 'жойылу'), V('heritage language', 'язык наследия', 'мұралық тіл'), V('bilingual', 'двуязычный', 'қос тілді'), V('preservation', 'сохранение', 'сақтау')],
    'questions' => [
        V('Do you speak more than one language? Which is your mother tongue?', 'Вы говорите более чем на одном языке? Какой ваш родной язык?', 'Бір тілден көп тілде сөйлейсіз бе? Ана тіліңіз қайсы?'),
        V('Why do you think some languages disappear over time?', 'Как вы думаете, почему некоторые языки исчезают со временем?', 'Сіздің ойыңызша, кейбір тілдер неге уақыт өте жойылады?'),
        V('Should governments fund programs to save endangered languages?', 'Должны ли правительства финансировать программы по спасению исчезающих языков?', 'Үкіметтер жойылу қаупі бар тілдерді құтқару бағдарламаларын қаржыландыруы керек пе?'),
        V('Is it important to teach children their heritage language?', 'Важно ли учить детей их языку наследия?', 'Балаларды мұралық тіліне үйрету маңызды ма?'),
        V('Do you think being bilingual gives someone advantages?', 'Как вы думаете, двуязычие даёт человеку преимущества?', 'Қос тілді болу адамға артықшылық бере ме деп ойлайсыз ба?'),
        V('What would be lost if a language disappeared completely?', 'Что было бы потеряно, если бы язык полностью исчез?', 'Тіл толығымен жойылса, не жоғалар еді?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'The Life of a Content Creator', 'background_key' => 'night-city',
    'warmup' => V("Let's talk about content creators. What do you think it takes to succeed as an online creator?", 'Давайте поговорим о создателях контента. Что, по-вашему, нужно, чтобы преуспеть как онлайн-создатель?', 'Контент жасаушылар туралы сөйлесейік. Онлайн жасаушы ретінде табысты болу үшін не қажет деп ойлайсыз?'),
    'vocab' => [V('content creator', 'создатель контента', 'контент жасаушы'), V('subscriber', 'подписчик', 'жазылушы'), V('monetize', 'монетизировать', 'ақшаландыру'), V('algorithm', 'алгоритм', 'алгоритм'), V('burnout', 'выгорание', 'күйреу'), V('engagement', 'вовлечённость', 'қатысу'), V('niche', 'ниша', 'тар сала'), V('viral', 'вирусный', 'вирустық'), V('brand deal', 'сделка с брендом', 'брендпен келісім'), V('consistency', 'последовательность', 'тұрақтылық')],
    'questions' => [
        V('Would you ever want to be a content creator? Why or why not?', 'Хотели бы вы стать создателем контента? Почему да или нет?', 'Контент жасаушы болғыңыз келе ме? Неге ия немесе жоқ?'),
        V('Do you think content creators face a lot of pressure?', 'Как вы думаете, создатели контента сталкиваются с большим давлением?', 'Контент жасаушылар үлкен қысымға тап болады деп ойлайсыз ба?'),
        V('Have you ever had a video or post go viral, or seen one?', 'У вас когда-нибудь становилось видео или пост вирусным, или вы видели такое?', 'Бейне немесе жазбаңыз вирустық болды ма немесе соны көрдіңіз бе?'),
        V('Do you follow any content creators regularly? Why do you like them?', 'Вы регулярно следите за какими-нибудь создателями контента? Почему они вам нравятся?', 'Тұрақты түрде қандай да бір контент жасаушыларды бақылайсыз ба? Олар неге ұнайды?'),
        V('Do you think algorithms control what becomes popular online?', 'Как вы думаете, алгоритмы контролируют то, что становится популярным онлайн?', 'Алгоритмдер онлайнда танымал болатын нәрсені бақылайды деп ойлайсыз ба?'),
        V('Is consistency more important than talent for online success?', 'Последовательность важнее таланта для успеха онлайн?', 'Тұрақтылық онлайн табыс үшін таланттан маңыздырақ па?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'Minimalism and Decluttering', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about minimalism. Do you think owning fewer things could make life better?", 'Давайте поговорим о минимализме. Как вы думаете, владение меньшим количеством вещей могло бы улучшить жизнь?', 'Минимализм туралы сөйлесейік. Аз зат иелену өмірді жақсарта алады деп ойлайсыз ба?'),
    'vocab' => [V('declutter', 'избавляться от лишнего', 'артықтан құтылу'), V('possessions', 'имущество', 'мүлік'), V('clutter', 'беспорядок (вещи)', 'ретсіздік'), V('intentional living', 'осознанная жизнь', 'саналы өмір сүру'), V('capsule wardrobe', 'капсульный гардероб', 'капсулалық гардероб'), V('sentimental value', 'сентиментальная ценность', 'сезімдік құндылық'), V('downsize', 'уменьшать', 'кішірейту'), V('simplicity', 'простота', 'қарапайымдылық'), V('excess', 'излишек', 'артықшылық'), V('organize', 'организовывать', 'ретке келтіру')],
    'questions' => [
        V('Do you own more things than you actually need?', 'У вас больше вещей, чем вам действительно нужно?', 'Шынымен қажетінен көп затыңыз бар ма?'),
        V('Have you ever decluttered your home? How did it feel?', 'Вы когда-нибудь избавлялись от лишних вещей дома? Каково это было?', 'Үйіңізде артық заттардан құтылдыңыз ба? Ол қалай болды?'),
        V('Do you keep things because of their sentimental value?', 'Вы храните вещи из-за их сентиментальной ценности?', 'Заттарды сезімдік құндылығына байланысты сақтайсыз ба?'),
        V('Would you try living with a capsule wardrobe?', 'Вы бы попробовали жить с капсульным гардеробом?', 'Капсулалық гардеробпен өмір сүруді сынап көрер ме едіңіз?'),
        V('Do you think minimalism is only possible for wealthy people?', 'Как вы думаете, минимализм возможен только для богатых людей?', 'Минимализм тек бай адамдар үшін мүмкін деп ойлайсыз ба?'),
        V('What is something you own that you should probably get rid of?', 'Что из того, что у вас есть, вам, вероятно, стоит выбросить?', 'Иеленген заттарыңыздың ішінен, мүмкін, құтылу керек нәрсе қандай?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'The Psychology of Procrastination', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about procrastination. Why do you think people put off tasks even when they know it hurts them?", 'Давайте поговорим о прокрастинации. Как вы думаете, почему люди откладывают дела, даже зная, что это им вредит?', 'Кейінге қалдыру туралы сөйлесейік. Сіздің ойыңызша, адамдар неге зиян екенін біле тұра, істерді кейінге қалдырады?'),
    'vocab' => [V('procrastination', 'прокрастинация', 'кейінге қалдыру'), V('deadline pressure', 'давление сроков', 'мерзім қысымы'), V('avoidance', 'избегание', 'аулақ болу'), V('perfectionism', 'перфекционизм', 'перфекционизм'), V('task', 'задача', 'тапсырма'), V('motivation', 'мотивация', 'мотивация'), V('guilt', 'чувство вины', 'кінә сезімі'), V('productivity', 'продуктивность', 'өнімділік'), V('time management', 'управление временем', 'уақытты басқару'), V('distraction', 'отвлечение', 'алаңдату')],
    'questions' => [
        V('Do you often procrastinate on important tasks?', 'Вы часто откладываете важные дела?', 'Маңызды тапсырмаларды жиі кейінге қалдырасыз ба?'),
        V('Does perfectionism ever make you delay starting something?', 'Перфекционизм когда-нибудь заставляет вас откладывать начало чего-либо?', 'Перфекционизм бір нәрсені бастауды кейінге қалдыруға мәжбүр ете ме?'),
        V('Do you work better under deadline pressure?', 'Вы лучше работаете под давлением сроков?', 'Мерзім қысымымен жақсырақ жұмыс істейсіз бе?'),
        V('What distracts you the most when you should be working?', 'Что вас больше всего отвлекает, когда вы должны работать?', 'Жұмыс істеу керек кезде сізді ең көп не алаңдатады?'),
        V('Do you feel guilty after procrastinating?', 'Вы чувствуете вину после прокрастинации?', 'Кейінге қалдырғаннан кейін кінәлі сезінесіз бе?'),
        V('What technique helps you overcome procrastination?', 'Какой приём помогает вам преодолеть прокрастинацию?', 'Кейінге қалдыруды жеңуге қандай тәсіл көмектеседі?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'Urban Wildlife', 'background_key' => 'nature',
    'warmup' => V("Let's talk about urban wildlife. What animals have you seen living in cities?", 'Давайте поговорим о городской дикой природе. Каких животных вы видели живущими в городах?', 'Қалалық жабайы табиғат туралы сөйлесейік. Қалаларда тұратын қандай жануарларды көрдіңіз?'),
    'vocab' => [V('coexist', 'сосуществовать', 'бірге өмір сүру'), V('urban wildlife', 'городская дикая природа', 'қалалық жабайы табиғат'), V('pigeon', 'голубь', 'көгершін'), V('raccoon', 'енот', 'жуынғыш аю'), V('habitat adaptation', 'адаптация к среде обитания', 'мекендеу ортасына бейімделу'), V('pest', 'вредитель', 'зиянкес'), V('conservation', 'охрана природы', 'табиғатты қорғау'), V('biodiversity', 'биоразнообразие', 'биоалуантүрлілік'), V('green space', 'зелёная зона', 'жасыл аймақ'), V('encounter', 'встреча', 'кездесу')],
    'questions' => [
        V('What wild animals have you encountered in a city?', 'Каких диких животных вы встречали в городе?', 'Қалада қандай жабайы жануарларды кездестірдіңіз?'),
        V('Do you think cities should have more green spaces for wildlife?', 'Как вы думаете, в городах должно быть больше зелёных зон для дикой природы?', 'Қалаларда жабайы табиғат үшін көбірек жасыл аймақтар болуы керек пе деп ойлайсыз ба?'),
        V('Do you consider pigeons and similar animals pests or wildlife?', 'Вы считаете голубей и подобных животных вредителями или дикой природой?', 'Көгершіндер мен ұқсас жануарларды зиянкес деп санайсыз ба, әлде жабайы табиғат па?'),
        V('How do you think animals adapt to living in cities?', 'Как, по-вашему, животные приспосабливаются к жизни в городах?', 'Сіздің ойыңызша, жануарлар қалада өмір сүруге қалай бейімделеді?'),
        V('Should humans and urban wildlife coexist more peacefully?', 'Должны ли люди и городская дикая природа сосуществовать мирнее?', 'Адамдар мен қалалық жабайы табиғат бейбітірек бірге өмір сүруі керек пе?'),
        V('Have you ever had an animal invade your home or garden?', 'У вас когда-нибудь животное проникало в дом или сад?', 'Үйіңізге немесе бақшаңызға жануар кірген кезі болды ма?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'The Rise of Plant-Based Diets', 'background_key' => 'nature',
    'warmup' => V("Let's talk about plant-based diets. Why do you think more people are eating less meat?", 'Давайте поговорим о растительных диетах. Как вы думаете, почему всё больше людей едят меньше мяса?', 'Өсімдік негізді диеталар туралы сөйлесейік. Сіздің ойыңызша, неге көбірек адамдар аз ет жейді?'),
    'vocab' => [V('plant-based', 'растительный', 'өсімдік негізді'), V('vegetarian', 'вегетарианец', 'вегетариан'), V('protein alternative', 'альтернатива белку', 'ақуыз балама'), V('meat substitute', 'заменитель мяса', 'ет орнына'), V('sustainability', 'устойчивое развитие', 'тұрақты даму'), V('nutrition', 'питание', 'тамақтану'), V('transition', 'переход', 'өту'), V('flexitarian', 'флекситарианец', 'флекситариан'), V('taste', 'вкус', 'дәм'), V('availability', 'доступность', 'қолжетімділік')],
    'questions' => [
        V('Have you ever tried a meat substitute? What did you think?', 'Вы когда-нибудь пробовали заменитель мяса? Что вы думаете?', 'Ет орнына затты сынап көрдіңіз бе? Не ойладыңыз?'),
        V('Do you think plant-based diets are better for the environment?', 'Как вы думаете, растительные диеты лучше для окружающей среды?', 'Өсімдік негізді диеталар қоршаған орта үшін жақсырақ деп ойлайсыз ба?'),
        V('Would you consider becoming a flexitarian?', 'Вы бы рассмотрели возможность стать флекситарианцем?', 'Флекситариан болуды қарастырар ма едіңіз?'),
        V('Is taste the biggest barrier to eating less meat for most people?', 'Является ли вкус самым большим препятствием к тому, чтобы есть меньше мяса, для большинства людей?', 'Дәм көпшілік адам үшін азырақ ет жеудің ең үлкен кедергісі ме?'),
        V('Do you think plant-based options are easy to find where you live?', 'Как вы думаете, растительные варианты легко найти там, где вы живёте?', 'Тұратын жеріңізде өсімдік негізді нұсқаларды табу оңай деп ойлайсыз ба?'),
        V('Would you fully switch to a plant-based diet? Why or why not?', 'Вы бы полностью перешли на растительную диету? Почему да или нет?', 'Толықтай өсімдік негізді диетаға көшер ме едіңіз? Неге ия немесе жоқ?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'Public Art and Graffiti', 'background_key' => 'night-city',
    'warmup' => V("Let's talk about public art and graffiti. Where is the line between art and vandalism?", 'Давайте поговорим об уличном искусстве и граффити. Где граница между искусством и вандализмом?', 'Қоғамдық өнер мен граффити туралы сөйлесейік. Өнер мен вандализм арасындағы шекара қайда?'),
    'vocab' => [V('mural', 'фреска', 'мурал'), V('graffiti', 'граффити', 'граффити'), V('street art', 'уличное искусство', 'көше өнері'), V('vandalism', 'вандализм', 'вандализм'), V('artistic expression', 'художественное выражение', 'көркем білдіру'), V('commission', 'заказ (на работу)', 'тапсырыс (жұмысқа)'), V('public space', 'общественное пространство', 'қоғамдық кеңістік'), V('controversial', 'спорный', 'даулы'), V('canvas', 'холст', 'холст'), V('spray paint', 'аэрозольная краска', 'аэрозольді бояу')],
    'questions' => [
        V('Do you consider graffiti art or vandalism?', 'Вы считаете граффити искусством или вандализмом?', 'Граффитиді өнер деп санайсыз ба, әлде вандализм деп пе?'),
        V('Have you ever seen a mural that impressed you?', 'Вы когда-нибудь видели фреску, которая произвела на вас впечатление?', 'Сізге әсер еткен мурал көрдіңіз бе?'),
        V('Should cities commission street artists to decorate public spaces?', 'Должны ли города заказывать уличным художникам оформление общественных пространств?', 'Қалалар көше суретшілеріне қоғамдық кеңістіктерді безендіруге тапсырыс беруі керек пе?'),
        V('Do you think unauthorized graffiti should be punished?', 'Как вы думаете, несанкционированное граффити должно наказываться?', 'Рұқсатсыз граффити жазалануы керек деп ойлайсыз ба?'),
        V('What makes street art different from traditional art?', 'Чем уличное искусство отличается от традиционного?', 'Көше өнерін дәстүрлі өнерден немен ерекшеленеді?'),
        V('Would you want a mural painted near your home?', 'Хотели бы вы, чтобы рядом с вашим домом нарисовали фреску?', 'Үйіңіздің жанына мурал салынғанын қалар ма едіңіз?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'The Etiquette of Tipping', 'background_key' => 'professional',
    'warmup' => V("Let's talk about tipping. How does tipping culture differ around the world?", 'Давайте поговорим о чаевых. Как культура чаевых отличается в разных странах?', 'Шайпұл туралы сөйлесейік. Шайпұл мәдениеті әлемде қалай ерекшеленеді?'),
    'vocab' => [V('tipping culture', 'культура чаевых', 'шайпұл мәдениеті'), V('gratuity', 'чаевые', 'сый ақы'), V('service charge', 'плата за обслуживание', 'қызмет көрсету ақысы'), V('generous', 'щедрый', 'жомарт'), V('stingy', 'скупой', 'сараң'), V('expectation', 'ожидание', 'күту'), V('wage', 'заработная плата', 'жалақы'), V('custom', 'обычай', 'әдет-ғұрып'), V('appreciation', 'признательность', 'алғыс'), V('awkward', 'неловкий', 'ыңғайсыз')],
    'questions' => [
        V('Is tipping common in your country? How much do people usually tip?', 'Чаевые распространены в вашей стране? Сколько обычно дают на чай?', 'Еліңізде шайпұл кең тарал ма? Әдетте қанша шайпұл береді?'),
        V('Have you ever felt awkward about how much to tip?', 'Вы когда-нибудь чувствовали себя неловко из-за того, сколько дать на чай?', 'Қанша шайпұл беру керектігі туралы ыңғайсыз сезіндіңіз бе?'),
        V('Do you think tipping should be replaced by higher wages instead?', 'Как вы думаете, чаевые нужно заменить более высокой зарплатой?', 'Шайпұлды жоғарырақ жалақымен алмастыру керек деп ойлайсыз ба?'),
        V('Do you tip more when service is excellent?', 'Вы даёте больше чаевых, когда обслуживание отличное?', 'Қызмет тамаша болғанда көбірек шайпұл бересіз бе?'),
        V('Is it rude not to tip in cultures where tipping is expected?', 'Грубо ли не давать чаевые в культурах, где это ожидается?', 'Шайпұл күтілетін мәдениеттерде оны бермеу дөрекілік пе?'),
        V('What service worker do you think deserves tips the most?', 'Какой работник сферы услуг, по-вашему, больше всего заслуживает чаевых?', 'Сіздің ойыңызша, қандай қызметші шайпұлға ең көп лайық?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'Living with Roommates', 'background_key' => 'warm',
    'warmup' => V("Let's talk about living with roommates. What makes for a good roommate relationship?", 'Давайте поговорим о жизни с соседями по квартире. Что делает отношения с соседями хорошими?', 'Бөлме серіктерімен өмір сүру туралы сөйлесейік. Бөлме серіктерімен қарым-қатынасты жақсы ететін не?'),
    'vocab' => [V('roommate', 'сосед по квартире', 'бөлме серігі'), V('shared expenses', 'общие расходы', 'ортақ шығындар'), V('chores schedule', 'график домашних дел', 'үй жұмыстары кестесі'), V('personal space', 'личное пространство', 'жеке кеңістік'), V('conflict', 'конфликт', 'қақтығыс'), V('compromise', 'компромисс', 'ымыраға келу'), V('lease', 'договор аренды', 'жалдау шарты'), V('compatibility', 'совместимость', 'үйлесімділік'), V('house rules', 'домашние правила', 'үй ережелері'), V('privacy', 'приватность', 'жекелік')],
    'questions' => [
        V('Have you ever lived with a roommate? How was it?', 'Вы когда-нибудь жили с соседом по квартире? Как это было?', 'Бөлме серігімен тұрдыңыз ба? Ол қалай болды?'),
        V('What house rules do you think are important with roommates?', 'Какие домашние правила вы считаете важными с соседями?', 'Бөлме серіктерімен қандай үй ережелерін маңызды деп санайсыз?'),
        V('Have you ever had a conflict with a roommate? How was it resolved?', 'У вас когда-нибудь был конфликт с соседом по квартире? Как он разрешился?', 'Бөлме серігіңізбен қақтығысыңыз болды ма? Ол қалай шешілді?'),
        V('How do you usually split shared expenses?', 'Как вы обычно делите общие расходы?', 'Ортақ шығындарды әдетте қалай бөлесіз?'),
        V('Is personal space important to you when living with others?', 'Личное пространство важно для вас, когда вы живёте с другими?', 'Басқалармен тұрғанда жеке кеңістік сіз үшін маңызды ма?'),
        V('Would you rather live alone even if it costs more?', 'Вы бы предпочли жить одни, даже если это дороже?', 'Қымбатқа түссе де, жалғыз тұрғанды қалар ма едіңіз?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'The World of Podcasts', 'background_key' => 'night-city',
    'warmup' => V("Let's talk about podcasts. Do you listen to podcasts, and what topics do you enjoy?", 'Давайте поговорим о подкастах. Вы слушаете подкасты, и какие темы вам нравятся?', 'Подкасттар туралы сөйлесейік. Подкасттарды тыңдайсыз ба және қандай тақырыптар ұнайды?'),
    'vocab' => [V('podcast', 'подкаст', 'подкаст'), V('host', 'ведущий', 'жүргізуші'), V('episode', 'эпизод', 'эпизод'), V('subscribe', 'подписаться', 'жазылу'), V('niche topic', 'узкая тема', 'тар тақырып'), V('interview', 'интервью', 'сұхбат'), V('listenership', 'аудитория слушателей', 'тыңдаушылар саны'), V('ad-supported', 'с рекламой', 'жарнамамен қолдау көрсетілетін'), V('binge-listen', 'слушать без перерыва', 'үзіліссіз тыңдау'), V('format', 'формат', 'формат')],
    'questions' => [
        V('Do you listen to podcasts regularly? What kind?', 'Вы регулярно слушаете подкасты? Какие?', 'Подкасттарды тұрақты тыңдайсыз ба? Қандай?'),
        V('What makes a podcast host engaging to listen to?', 'Что делает ведущего подкаста интересным для прослушивания?', 'Подкаст жүргізушісін тыңдауға қызықты ететін не?'),
        V('Have you ever binge-listened to an entire podcast series?', 'Вы когда-нибудь слушали весь сериал подкастов без перерыва?', 'Бүкіл подкаст сериясын үзіліссіз тыңдадыңыз ба?'),
        V('Do you prefer interview-style podcasts or storytelling ones?', 'Вы предпочитаете подкасты в формате интервью или рассказов?', 'Сұхбат форматындағы подкасттарды ұнатасыз ба, әлде әңгімелеу форматын ба?'),
        V('Would you ever want to start your own podcast?', 'Хотели бы вы когда-нибудь запустить свой подкаст?', 'Өз подкастыңызды бастағыңыз келе ме?'),
        V('Do ads in podcasts bother you?', 'Реклама в подкастах вас раздражает?', 'Подкасттардағы жарнама сізді мазалай ма?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'Second-Hand and Vintage Shopping', 'background_key' => 'playful',
    'warmup' => V("Let's talk about second-hand shopping. Do you enjoy thrift shopping, and why?", 'Давайте поговорим о покупках в секонд-хенде. Вам нравится ходить по секонд-хендам, и почему?', 'Секонд-хендтен сатып алу туралы сөйлесейік. Секонд-хендтен сатып алуды ұнатасыз ба, неге?'),
    'vocab' => [V('thrift store', 'секонд-хенд', 'секонд-хенд дүкені'), V('second-hand', 'подержанный', 'қолданылған'), V('vintage', 'винтажный', 'винтаждық'), V('sustainable fashion', 'устойчивая мода', 'тұрақты сән'), V('unique find', 'уникальная находка', 'бірегей олжа'), V('bargain', 'выгодная покупка', 'тиімді сатып алу'), V('resale', 'перепродажа', 'қайта сату'), V('quality check', 'проверка качества', 'сапаны тексеру'), V('trend', 'тренд', 'үрдіс'), V('wardrobe', 'гардероб', 'гардероб')],
    'questions' => [
        V('Have you ever bought second-hand clothes? What was your experience?', 'Вы когда-нибудь покупали одежду секонд-хенд? Каким был ваш опыт?', 'Секонд-хенд киім сатып алдыңыз ба? Тәжірибеңіз қандай болды?'),
        V('Do you think buying second-hand is better for the environment?', 'Как вы думаете, покупка секонд-хенда лучше для окружающей среды?', 'Секонд-хенд сатып алу қоршаған орта үшін жақсырақ деп ойлайсыз ба?'),
        V('Have you ever found a unique or valuable item at a thrift store?', 'Вы когда-нибудь находили уникальную или ценную вещь в секонд-хенде?', 'Секонд-хендтен бірегей немесе құнды зат таптыңыз ба?'),
        V('Do you check the quality of second-hand items carefully?', 'Вы тщательно проверяете качество вещей секонд-хенд?', 'Секонд-хенд заттардың сапасын мұқият тексересіз бе?'),
        V('Would you wear vintage clothing, or do you prefer new items?', 'Вы бы носили винтажную одежду, или предпочитаете новые вещи?', 'Винтаждық киім кияр ма едіңіз, әлде жаңа заттарды ұнатасыз ба?'),
        V('Do you think second-hand shopping will become more popular?', 'Как вы думаете, покупки секонд-хенд станут более популярными?', 'Секонд-хендтен сатып алу танымалырақ болады деп ойлайсыз ба?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'The Science of Sleep', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about sleep. How important is sleep for your daily performance?", 'Давайте поговорим о сне. Насколько важен сон для вашей повседневной работоспособности?', 'Ұйқы туралы сөйлесейік. Ұйқы күнделікті жұмысыңыз үшін қаншалықты маңызды?'),
    'vocab' => [V('REM sleep', 'быстрый сон', 'REM ұйқысы'), V('insomnia', 'бессонница', 'ұйқысыздық'), V('sleep cycle', 'цикл сна', 'ұйқы циклі'), V('circadian rhythm', 'циркадный ритм', 'циркадтық ырғақ'), V('nap', 'дневной сон', 'күндізгі ұйқы'), V('sleep debt', 'дефицит сна', 'ұйқы тапшылығы'), V('screen time', 'время у экрана', 'экран уақыты'), V('sleep hygiene', 'гигиена сна', 'ұйқы гигиенасы'), V('restorative', 'восстановительный', 'қалпына келтіретін'), V('deprivation', 'лишение', 'айырылу')],
    'questions' => [
        V('How many hours of sleep do you usually get?', 'Сколько часов сна вы обычно получаете?', 'Әдетте қанша сағат ұйықтайсыз?'),
        V('Do you ever suffer from insomnia?', 'Вы когда-нибудь страдаете от бессонницы?', 'Ұйқысыздықтан зардап шегесіз бе?'),
        V('Do you take naps during the day?', 'Вы спите днём?', 'Күндіз ұйықтайсыз ба?'),
        V('Does screen time before bed affect your sleep?', 'Время у экрана перед сном влияет на ваш сон?', 'Ұйқы алдындағы экран уақыты ұйқыңызға әсер ете ме?'),
        V('What is your sleep hygiene routine like?', 'Какой у вас распорядок гигиены сна?', 'Ұйқы гигиенасы тәртібіңіз қандай?'),
        V('Have you ever experienced sleep deprivation? How did it feel?', 'Вы когда-нибудь испытывали лишение сна? Каково это было?', 'Ұйқыдан айырылуды бастан кештіңіз бе? Ол қалай болды?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'Body Language and First Impressions', 'background_key' => 'professional',
    'warmup' => V("Let's talk about first impressions. How much do you think body language matters when meeting someone new?", 'Давайте поговорим о первых впечатлениях. Насколько, по-вашему, важен язык тела при знакомстве с новым человеком?', 'Алғашқы әсерлер туралы сөйлесейік. Жаңа адаммен танысқанда дене тілі қаншалықты маңызды деп ойлайсыз?'),
    'vocab' => [V('first impression', 'первое впечатление', 'алғашқы әсер'), V('posture', 'осанка', 'дене қалпы'), V('handshake', 'рукопожатие', 'қол алысу'), V('eye contact', 'зрительный контакт', 'көзбен байланыс'), V('gesture', 'жест', 'ым-ишара'), V('confidence', 'уверенность', 'сенімділік'), V('nonverbal cue', 'невербальный сигнал', 'вербалды емес белгі'), V('approachable', 'доступный (в общении)', 'қарым-қатынасқа ашық'), V('judgment', 'суждение', 'пікір'), V('awareness', 'осознанность', 'хабардарлық')],
    'questions' => [
        V('How quickly do you form a first impression of someone?', 'Как быстро вы формируете первое впечатление о человеке?', 'Адам туралы алғашқы әсеріңізді қаншалықты тез қалыптастырасыз?'),
        V('Do you pay attention to your own body language?', 'Вы обращаете внимание на свой собственный язык тела?', 'Өзіңіздің дене тіліңізге назар аударасыз ба?'),
        V('Is eye contact comfortable or uncomfortable for you?', 'Зрительный контакт вам комфортен или неудобен?', 'Көзбен байланыс сізге ыңғайлы ма, әлде ыңғайсыз ба?'),
        V('Have you ever changed your opinion of someone after getting to know them better?', 'Вы когда-нибудь меняли своё мнение о ком-то, узнав его лучше?', 'Біреуді жақсырақ танығаннан кейін оған деген пікіріңізді өзгерттіңіз бе?'),
        V('Do you think first impressions are usually accurate?', 'Как вы думаете, первые впечатления обычно точны?', 'Алғашқы әсерлер әдетте дәл болады деп ойлайсыз ба?'),
        V('What nonverbal cue do you notice most in others?', 'Какой невербальный сигнал вы замечаете у других больше всего?', 'Басқалардан ең көп қандай вербалды емес белгіні байқайсыз?'),
    ],
];

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'The Rise of Remote Teams', 'background_key' => 'professional',
    'warmup' => V("Let's talk about remote teams. What are the challenges of working with people you never meet in person?", 'Давайте поговорим об удалённых командах. Каковы трудности работы с людьми, с которыми вы никогда не встречаетесь лично?', 'Қашықтан командалар туралы сөйлесейік. Ешқашан жеке кездеспейтін адамдармен жұмыс істеудің қиындықтары қандай?'),
    'vocab' => [V('remote team', 'удалённая команда', 'қашықтағы команда'), V('time zone', 'часовой пояс', 'уақыт белдеуі'), V('virtual meeting', 'виртуальная встреча', 'виртуалды кездесу'), V('collaboration tool', 'инструмент для совместной работы', 'ынтымақтастық құралы'), V('async communication', 'асинхронное общение', 'асинхронды байланыс'), V('team building', 'командообразование', 'команда құру'), V('isolation', 'изоляция', 'оқшаулану'), V('trust', 'доверие', 'сенім'), V('accountability', 'подотчётность', 'жауапкершілік'), V('productivity', 'продуктивность', 'өнімділік')],
    'questions' => [
        V('Have you ever worked on a remote team? What was it like?', 'Вы когда-нибудь работали в удалённой команде? Каково это было?', 'Қашықтағы командада жұмыс істедіңіз бе? Ол қалай болды?'),
        V('Do you think remote teams can build as much trust as in-person teams?', 'Как вы думаете, удалённые команды могут построить столько же доверия, как команды, работающие лично?', 'Қашықтағы командалар жеке жұмыс істейтін командалармен бірдей сенім орната ала ма деп ойлайсыз ба?'),
        V('How do you deal with time zone differences when working with others?', 'Как вы справляетесь с разницей часовых поясов, работая с другими?', 'Басқалармен жұмыс істегенде уақыт белдеуі айырмашылығымен қалай күресесіз?'),
        V('Does working remotely make you feel isolated?', 'Удалённая работа заставляет вас чувствовать изоляцию?', 'Қашықтан жұмыс істеу сізді оқшауланған сезіндіре ме?'),
        V('What collaboration tools do you think work best for remote teams?', 'Какие инструменты для совместной работы, по-вашему, лучше всего подходят для удалённых команд?', 'Сіздің ойыңызша, қашықтағы командалар үшін қандай ынтымақтастық құралдары ең жақсы жұмыс істейді?'),
        V('Is async communication better than constant meetings?', 'Асинхронное общение лучше постоянных встреч?', 'Асинхронды байланыс тұрақты кездесулерден жақсы ма?'),
    ],
];

require __DIR__ . '/seed_lessons_batch4_part3.php';
