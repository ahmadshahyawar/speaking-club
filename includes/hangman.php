<?php
declare(strict_types=1);

// Curated word -> trilingual definitional clue bank. Hangman words are
// drawn from here (never from the lesson's own vocab list) so every clue
// actually describes the word instead of just showing it in a sentence.
function C(string $en, string $ru, string $kz): array { return ['en' => $en, 'ru' => $ru, 'kz' => $kz]; }

function build_hangman_clues(): array {
    return [
        'mother' => C("This is the woman who gave birth to you or raised you.", "Это женщина, которая родила вас или вырастила.", "Бұл сізді туған немесе тәрбиелеген әйел."),
        'father' => C("This is the man who is your parent.", "Это мужчина, который является вашим родителем.", "Бұл сіздің әкеңіз болып табылатын ер адам."),
        'sister' => C("This is a girl who has the same parents as you.", "Это девочка, у которой такие же родители, как у вас.", "Бұл сізбен бірдей ата-анасы бар қыз."),
        'brother' => C("This is a boy who has the same parents as you.", "Это мальчик, у которого такие же родители, как у вас.", "Бұл сізбен бірдей ата-анасы бар ұл."),
        'grandmother' => C("This is your mother's or father's mother.", "Это мать вашей мамы или папы.", "Бұл сіздің анаңыздың немесе әкеңіздің анасы."),
        'grandfather' => C("This is your mother's or father's father.", "Это отец вашей мамы или папы.", "Бұл сіздің анаңыздың немесе әкеңіздің әкесі."),
        'cousin' => C("This is the child of your aunt or uncle.", "Это ребёнок вашей тёти или дяди.", "Бұл сіздің апайыңыздың немесе ағайыңыздың баласы."),
        'uncle' => C("This is your father's or mother's brother.", "Это брат вашего отца или матери.", "Бұл сіздің әкеңіздің немесе анаңыздың ағасы/інісі."),
        'aunt' => C("This is your father's or mother's sister.", "Это сестра вашего отца или матери.", "Бұл сіздің әкеңіздің немесе анаңыздың апасы/қарындасы."),
        'family' => C("This is the group of people related to you, like parents and children.", "Это группа людей, связанных с вами, например родители и дети.", "Бұл сізбен туыс адамдар тобы, мысалы ата-аналар мен балалар."),
        'baby' => C("This is a very young child who cannot walk or talk yet.", "Это очень маленький ребёнок, который ещё не умеет ходить или говорить.", "Бұл әлі жүре немесе сөйлей алмайтын өте кішкентай бала."),
        'wife' => C("This is a married woman, in relation to her husband.", "Это замужняя женщина по отношению к своему мужу.", "Бұл күйеуіне қатысты тұрмыс құрған әйел."),
        'husband' => C("This is a married man, in relation to his wife.", "Это женатый мужчина по отношению к своей жене.", "Бұл әйеліне қатысты үйленген ер адам."),
        'friend' => C("This is a person you like and enjoy spending time with.", "Это человек, который вам нравится и с которым приятно проводить время.", "Бұл сізге ұнайтын және бірге уақыт өткізгіңіз келетін адам."),
        'neighbor' => C("This is a person who lives next to you or near you.", "Это человек, который живёт рядом с вами.", "Бұл сіздің қасыңызда тұратын адам."),
        'stranger' => C("This is a person you have never met before.", "Это человек, которого вы никогда раньше не встречали.", "Бұл сіз бұрын-соңды кездестірмеген адам."),
        'chicken' => C("This is meat and people eat it a lot.", "Это мясо, которое люди едят очень часто.", "Бұл ет, адамдар оны жиі жейді."),
        'bread' => C("This is baked from flour and eaten every day, often with butter.", "Это выпекается из муки и едят каждый день, часто с маслом.", "Бұл ұннан пісіріледі және күн сайын, көбіне маймен жейді."),
        'rice' => C("These are small white grains, very common in Asian cooking.", "Это маленькие белые зёрна, очень распространённые в азиатской кухне.", "Бұл Азия асханасында өте кең тараған кішкентай ақ дән."),
        'apple' => C("This round fruit, often red or green, is said to keep the doctor away.", "Этот круглый фрукт, часто красный или зелёный, как говорят, отгоняет доктора.", "Бұл жиі қызыл немесе жасыл түсті дөңгелек жеміс, дәрігерден алшақ ұстайды дейді."),
        'banana' => C("This is a long yellow fruit that monkeys love to eat.", "Это длинный жёлтый фрукт, который любят есть обезьяны.", "Бұл маймылдар жегенді жақсы көретін ұзын сары жеміс."),
        'orange' => C("This round citrus fruit shares its name with a color.", "Этот круглый цитрусовый фрукт имеет то же название, что и цвет.", "Бұл дөңгелек цитрус жемісінің атауы түстің атауымен бірдей."),
        'potato' => C("This vegetable grows underground and can be fried or boiled.", "Этот овощ растёт под землёй, его можно жарить или варить.", "Бұл көкөніс жер астында өседі, оны қуыруға немесе қайнатуға болады."),
        'tomato' => C("This red fruit is often used in salads and sauces.", "Этот красный плод часто используют в салатах и соусах.", "Бұл қызыл жеміс салаттар мен тұздықтарда жиі қолданылады."),
        'cheese' => C("This is made from milk and is often melted on pizza.", "Это делают из молока, и его часто плавят на пицце.", "Бұл сүттен жасалады және көбіне пиццаның үстінде ерітіледі."),
        'butter' => C("This soft yellow food is spread on bread.", "Этот мягкий жёлтый продукт намазывают на хлеб.", "Бұл жұмсақ сары тағамды нанға жағады."),
        'sugar' => C("This white substance makes your tea or coffee sweet.", "Это белое вещество делает ваш чай или кофе сладким.", "Бұл ақ зат шәйіңізді немесе кофеңізді тәтті етеді."),
        'salt' => C("This white substance is sprinkled on food to add flavor.", "Это белое вещество посыпают на еду, чтобы придать вкус.", "Бұл ақ зат дәм қосу үшін тағамға себіледі."),
        'milk' => C("This white drink comes from cows and is good for your bones.", "Этот белый напиток получают от коров, и он полезен для костей.", "Бұл ақ сусын сиырдан алынады және сүйекке пайдалы."),
        'coffee' => C("This hot dark drink helps people wake up in the morning.", "Этот горячий тёмный напиток помогает людям проснуться утром.", "Бұл ыстық қара сусын адамдарға таңертең ояну үшін көмектеседі."),
        'juice' => C("This sweet drink is made by pressing fruit.", "Этот сладкий напиток делают, отжимая фрукты.", "Бұл тәтті сусын жемісті сығу арқылы жасалады."),
        'soup' => C("This warm liquid food is often eaten with a spoon.", "Эту тёплую жидкую еду часто едят ложкой.", "Бұл жылы сұйық тағамды көбіне қасықпен жейді."),
        'salad' => C("This dish is made of raw vegetables mixed together.", "Это блюдо готовят из смешанных сырых овощей.", "Бұл тағам шикі көкөністерді араластырып жасалады."),
        'cake' => C("This sweet dessert is often eaten on birthdays.", "Этот сладкий десерт часто едят на дни рождения.", "Бұл тәтті десертті көбіне туған күндерде жейді."),
        'sandwich' => C("This food has fillings placed between two slices of bread.", "В этой еде начинка кладётся между двумя кусками хлеба.", "Бұл тағамда толтырғыш екі кесек нанның арасына салынады."),
        'breakfast' => C("This is the first meal you eat in the morning.", "Это первый приём пищи, который вы едите утром.", "Бұл таңертең жейтін алғашқы тамақ."),
        'vegetable' => C("This healthy food grows in a garden, like carrots or spinach.", "Эта полезная еда растёт в саду, например морковь или шпинат.", "Бұл пайдалы тағам бақшада өседі, мысалы сәбіз немесе саумалдық."),
        'fruit' => C("This sweet food grows on trees or plants, like apples or bananas.", "Эта сладкая еда растёт на деревьях или растениях, например яблоки или бананы.", "Бұл тәтті тағам ағаштарда немесе өсімдіктерде өседі, мысалы алма немесе банан."),
        'dog' => C("This animal is often called a person's best friend and loves to bark.", "Это животное часто называют лучшим другом человека, и оно любит лаять.", "Бұл жануарды жиі адамның ең жақын досы деп атайды және ол үруді жақсы көреді."),
        'cat' => C("This small animal likes to chase mice and says \"meow\".", "Это маленькое животное любит гоняться за мышами и говорит «мяу».", "Бұл кішкентай жануар тышқанды қууды жақсы көреді және «мияу» дейді."),
        'horse' => C("This large animal can be ridden and likes to run fast.", "На этом большом животном можно ездить верхом, и оно любит быстро бегать.", "Бұл үлкен жануарға мініп жүруге болады және ол жылдам жүгіруді жақсы көреді."),
        'cow' => C("This farm animal gives us milk.", "Это домашнее животное даёт нам молоко.", "Бұл үй жануары бізге сүт береді."),
        'sheep' => C("This farm animal has wool and says \"baa\".", "У этого домашнего животного есть шерсть, и оно говорит «бее».", "Бұл үй жануарының жүні бар және ол «маа» дейді."),
        'lion' => C("This big wild cat is known as the king of the jungle.", "Эту большую дикую кошку называют королём джунглей.", "Бұл үлкен жабайы мысық джунгли патшасы деп аталады."),
        'tiger' => C("This large wild cat has orange and black stripes.", "У этой большой дикой кошки оранжевые и чёрные полосы.", "Бұл үлкен жабайы мысықтың қызғылт сары және қара жолақтары бар."),
        'elephant' => C("This is the biggest land animal, and it has a long trunk.", "Это самое большое сухопутное животное, у него длинный хобот.", "Бұл ең үлкен құрлық жануары, оның ұзын хоботы бар."),
        'monkey' => C("This animal loves bananas and can climb trees quickly.", "Это животное любит бананы и умеет быстро лазить по деревьям.", "Бұл жануар бананды жақсы көреді және ағашқа тез өрмелей алады."),
        'rabbit' => C("This small animal has long ears and hops around.", "У этого маленького животного длинные уши, и оно прыгает.", "Бұл кішкентай жануардың құлақтары ұзын және секіріп жүреді."),
        'snake' => C("This long animal has no legs and can be dangerous.", "У этого длинного животного нет ног, и оно может быть опасным.", "Бұл ұзын жануардың аяғы жоқ және қауіпті болуы мүмкін."),
        'bear' => C("This large wild animal likes honey and sleeps through winter.", "Это большое дикое животное любит мёд и спит всю зиму.", "Бұл үлкен жабайы жануар балды жақсы көреді және қыста ұйықтайды."),
        'duck' => C("This bird swims on water and says \"quack\".", "Эта птица плавает по воде и говорит «кря».", "Бұл құс суда жүзеді және «қуақ» дейді."),
        'spider' => C("This small creature has eight legs and spins webs.", "У этого маленького существа восемь ног, и оно плетёт паутину.", "Бұл кішкентай жәндіктің сегіз аяғы бар және ол өрмек тоқиды."),
        'butterfly' => C("This colorful insect starts life as a caterpillar.", "Это яркое насекомое начинает жизнь как гусеница.", "Бұл түрлі-түсті жәндік өмірін көбелек құрты ретінде бастайды."),
        'rain' => C("This is water that falls from the clouds.", "Это вода, которая падает с облаков.", "Бұл бұлттардан жауатын су."),
        'snow' => C("This is soft, white, and cold, and falls in winter.", "Это мягкое, белое и холодное, выпадает зимой.", "Бұл жұмсақ, ақ әрі суық, қыста жауады."),
        'sun' => C("This bright object in the sky gives us light and heat.", "Этот яркий объект в небе даёт нам свет и тепло.", "Аспандағы бұл жарқын дене бізге жарық пен жылу береді."),
        'wind' => C("This is moving air that can blow your hat away.", "Это движущийся воздух, который может сдуть вашу шапку.", "Бұл қозғалыстағы ауа, ол сіздің бөркіңізді ұшырып әкетуі мүмкін."),
        'cloud' => C("This white or gray shape floats in the sky before it rains.", "Эта белая или серая фигура плывёт по небу перед дождём.", "Бұл ақ немесе сұр пішін жаңбыр жаумас бұрын аспанда қалқиды."),
        'storm' => C("This is very bad weather with strong wind and rain.", "Это очень плохая погода с сильным ветром и дождём.", "Бұл күшті жел мен жаңбыры бар өте жаман ауа райы."),
        'weather' => C("This word describes whether it is sunny, rainy, or cold outside.", "Это слово описывает, солнечно, дождливо или холодно на улице.", "Бұл сөз далада күн ашық, жаңбырлы немесе суық екенін сипаттайды."),
        'morning' => C("This is the part of the day right after you wake up.", "Это часть дня сразу после того, как вы просыпаетесь.", "Бұл сіз оянғаннан кейінгі күннің бөлігі."),
        'afternoon' => C("This is the part of the day between lunch and evening.", "Это часть дня между обедом и вечером.", "Бұл түскі астан кейін кештен бұрынғы күн бөлігі."),
        'evening' => C("This is the part of the day before night, after work or school.", "Это часть дня перед ночью, после работы или школы.", "Бұл жұмыстан немесе мектептен кейін, түннен бұрынғы күн бөлігі."),
        'tomorrow' => C("This is the day right after today.", "Это день сразу после сегодняшнего.", "Бұл бүгіннен кейінгі күн."),
        'yesterday' => C("This is the day right before today.", "Это день перед сегодняшним.", "Бұл бүгінге дейінгі күн."),
        'calendar' => C("This tool shows you all the days, weeks, and months of the year.", "Этот инструмент показывает вам все дни, недели и месяцы года.", "Бұл құрал сізге жылдың барлық күндерін, апталары мен айларын көрсетеді."),
        'schedule' => C("This is a plan that shows what you will do and when.", "Это план, который показывает, что и когда вы будете делать.", "Бұл не істейтініңізді және қашан істейтініңізді көрсететін жоспар."),
        'school' => C("This is a place where children go to learn.", "Это место, куда дети ходят учиться.", "Бұл балалар оқуға баратын орын."),
        'hospital' => C("This is a place where sick people go to get better.", "Это место, куда идут больные люди, чтобы поправиться.", "Бұл ауру адамдар жазылу үшін баратын орын."),
        'restaurant' => C("This is a place where you pay to eat a meal.", "Это место, где вы платите за еду.", "Бұл тамақ ішу үшін ақы төлейтін орын."),
        'airport' => C("This is a place where airplanes take off and land.", "Это место, где самолёты взлетают и приземляются.", "Бұл ұшақтар ұшып шығатын және қонатын орын."),
        'market' => C("This is a place where people buy and sell fresh food.", "Это место, где люди покупают и продают свежие продукты.", "Бұл адамдар жаңа өнімдерді сатып алатын және сататын орын."),
        'library' => C("This is a quiet place full of books you can borrow.", "Это тихое место, полное книг, которые можно взять почитать.", "Бұл сіз алып оқи алатын кітаптарға толы тыныш орын."),
        'beach' => C("This is a sandy place next to the sea.", "Это песчаное место рядом с морем.", "Бұл теңіздің жанындағы құмды орын."),
        'mountain' => C("This is a very tall landform, often covered in snow at the top.", "Это очень высокая форма рельефа, вершина которой часто покрыта снегом.", "Бұл өте биік жер бедері, оның шыңы көбіне қармен жабылған."),
        'forest' => C("This is a large area full of trees.", "Это большая территория, полная деревьев.", "Бұл ағаштарға толы үлкен аумақ."),
        'bridge' => C("This structure lets you cross a river or road.", "Это сооружение позволяет вам пересечь реку или дорогу.", "Бұл құрылым сізге өзен немесе жолдан өтуге мүмкіндік береді."),
        'museum' => C("This is a building where old and interesting objects are shown.", "Это здание, где показывают старые и интересные предметы.", "Бұл ескі және қызықты заттар көрсетілетін ғимарат."),
        'hotel' => C("This is a place where you pay to sleep when you travel.", "Это место, где вы платите за ночлег во время путешествия.", "Бұл сіз саяхаттағанда ұйықтау үшін ақы төлейтін орын."),
        'office' => C("This is a place where people go to do business work.", "Это место, куда люди ходят для деловой работы.", "Бұл адамдар іскерлік жұмыс істеу үшін баратын орын."),
        'table' => C("This furniture has four legs and you eat your meals on it.", "У этой мебели четыре ножки, и вы едите на ней.", "Бұл жиһаздың төрт аяғы бар және сіз тамақты соның үстінде ішесіз."),
        'chair' => C("This piece of furniture is made for one person to sit on.", "Этот предмет мебели предназначен для того, чтобы на нём сидел один человек.", "Бұл жиһаз бір адам отыруы үшін жасалған."),
        'window' => C("This lets light into your room and you can see outside through it.", "Это пропускает свет в вашу комнату, и через него видно улицу.", "Бұл бөлмеңізге жарық түсіреді және одан сыртты көруге болады."),
        'door' => C("You open and close this to enter or leave a room.", "Вы открываете и закрываете это, чтобы войти в комнату или выйти из неё.", "Сіз бөлмеге кіру немесе шығу үшін мұны ашасыз және жабасыз."),
        'kitchen' => C("This room in the house is used for cooking food.", "Эта комната в доме используется для приготовления еды.", "Үйдегі бұл бөлме тамақ пісіру үшін пайдаланылады."),
        'bedroom' => C("This is the room in a house where you sleep.", "Это комната в доме, где вы спите.", "Бұл үйдегі сіз ұйықтайтын бөлме."),
        'mirror' => C("You look into this to see your own face.", "Вы смотрите в это, чтобы увидеть своё лицо.", "Сіз өз бетіңізді көру үшін мұған қарайсыз."),
        'refrigerator' => C("This kitchen machine keeps your food cold.", "Эта кухонная техника хранит вашу еду холодной.", "Бұл ас үй құрылғысы тағамыңызды салқын ұстайды."),
        'shirt' => C("You wear this on the top part of your body.", "Вы носите это на верхней части тела.", "Сіз мұны денеңіздің жоғарғы бөлігіне киесіз."),
        'shoes' => C("You wear these on your feet to walk outside.", "Вы носите это на ногах, чтобы гулять на улице.", "Сіз мұны сыртта жүру үшін аяғыңызға киесіз."),
        'jacket' => C("You wear this over your clothes when it is cold outside.", "Вы надеваете это поверх одежды, когда на улице холодно.", "Сыртта суық болғанда мұны киіміңіздің үстінен киесіз."),
        'hat' => C("You wear this on top of your head.", "Вы носите это на голове.", "Сіз мұны басыңыздың үстіне киесіз."),
        'gloves' => C("You wear these to keep your hands warm.", "Вы носите это, чтобы согреть руки.", "Сіз қолыңызды жылы ұстау үшін мұны киесіз."),
        'head' => C("This is the top part of your body, where your brain is.", "Это верхняя часть вашего тела, где находится мозг.", "Бұл денеңіздің ми орналасқан жоғарғы бөлігі."),
        'hand' => C("You use this part of your body to hold things.", "Вы используете эту часть тела, чтобы держать вещи.", "Сіз заттарды ұстау үшін дене мүшесінің осы бөлігін пайдаланасыз."),
        'eye' => C("You use this part of your body to see.", "Вы используете эту часть тела, чтобы видеть.", "Сіз көру үшін дене мүшесінің осы бөлігін пайдаланасыз."),
        'ear' => C("You use this part of your body to hear.", "Вы используете эту часть тела, чтобы слышать.", "Сіз есту үшін дене мүшесінің осы бөлігін пайдаланасыз."),
        'nose' => C("You use this part of your body to smell.", "Вы используете эту часть тела, чтобы чувствовать запах.", "Сіз иіс сезу үшін дене мүшесінің осы бөлігін пайдаланасыз."),
        'mouth' => C("You use this part of your body to eat and speak.", "Вы используете эту часть тела, чтобы есть и говорить.", "Сіз тамақтану және сөйлеу үшін дене мүшесінің осы бөлігін пайдаланасыз."),
        'heart' => C("This organ pumps blood through your body.", "Этот орган перекачивает кровь по вашему телу.", "Бұл мүше қаныңызды денеңіз бойынша айдайды."),
        'happy' => C("This is how you feel when something good happens to you.", "Так вы себя чувствуете, когда с вами происходит что-то хорошее.", "Бұл сізбен жақсы бір нәрсе болғанда сезінетін көңіл-күй."),
        'sad' => C("This is how you feel when you want to cry.", "Так вы себя чувствуете, когда хотите плакать.", "Бұл жылағыңыз келгенде сезінетін көңіл-күй."),
        'angry' => C("This is how you feel when something makes you very upset.", "Так вы себя чувствуете, когда что-то вас сильно расстраивает.", "Бұл бір нәрсе сізді қатты ашуландырғанда сезінетін көңіл-күй."),
        'tired' => C("This is how you feel when you need to sleep.", "Так вы себя чувствуете, когда вам нужно спать.", "Бұл ұйықтау керек болғанда сезінетін көңіл-күй."),
        'hungry' => C("This is how you feel when your stomach needs food.", "Так вы себя чувствуете, когда ваш желудок требует еды.", "Бұл асқазаныңыз тамақ сұрағанда сезінетін көңіл-күй."),
        'thirsty' => C("This is how you feel when your body needs water.", "Так вы себя чувствуете, когда вашему телу нужна вода.", "Бұл денеңізге су керек болғанда сезінетін көңіл-күй."),
        'scared' => C("This is how you feel when something frightens you.", "Так вы себя чувствуете, когда что-то вас пугает.", "Бұл бір нәрсе сізді қорқытқанда сезінетін көңіл-күй."),
        'excited' => C("This is how you feel right before something fun happens.", "Так вы себя чувствуете прямо перед тем, как произойдёт что-то весёлое.", "Бұл қызықты бір нәрсе болар алдында сезінетін көңіл-күй."),
        'nervous' => C("This is how you feel before a big test or interview.", "Так вы себя чувствуете перед важным экзаменом или собеседованием.", "Бұл үлкен емтихан немесе сұхбат алдында сезінетін көңіл-күй."),
        'proud' => C("This is how you feel when you achieve something great.", "Так вы себя чувствуете, когда достигаете чего-то важного.", "Бұл үлкен жетістікке жеткенде сезінетін көңіл-күй."),
        'teacher' => C("This person helps students learn in a classroom.", "Этот человек помогает ученикам учиться в классе.", "Бұл адам сыныпта оқушыларға үйренуге көмектеседі."),
        'doctor' => C("This person helps sick people feel better.", "Этот человек помогает больным людям чувствовать себя лучше.", "Бұл адам ауру адамдарға жақсы сезінуге көмектеседі."),
        'nurse' => C("This person works in a hospital and helps doctors care for patients.", "Этот человек работает в больнице и помогает врачам ухаживать за пациентами.", "Бұл адам ауруханада жұмыс істейді және дәрігерлерге науқастарды күтуге көмектеседі."),
        'engineer' => C("This person designs and builds machines, roads, or buildings.", "Этот человек проектирует и строит машины, дороги или здания.", "Бұл адам машиналарды, жолдарды немесе ғимараттарды жобалайды және салады."),
        'farmer' => C("This person grows crops and raises animals for a living.", "Этот человек выращивает урожай и разводит животных для заработка.", "Бұл адам күнкөріс үшін дақыл өсіреді және мал бағады."),
        'driver' => C("This person controls a car, bus, or truck.", "Этот человек управляет машиной, автобусом или грузовиком.", "Бұл адам машинаны, автобусты немесе жүк көлігін басқарады."),
        'chef' => C("This person cooks food in a restaurant kitchen.", "Этот человек готовит еду на кухне ресторана.", "Бұл адам мейрамхана асханасында тамақ пісіреді."),
        'artist' => C("This person creates paintings or other beautiful works.", "Этот человек создаёт картины или другие красивые произведения.", "Бұл адам сурет немесе басқа әдемі туындылар жасайды."),
        'lawyer' => C("This person helps people with legal problems in court.", "Этот человек помогает людям с юридическими проблемами в суде.", "Бұл адам сотта адамдарға заңды мәселелерде көмектеседі."),
        'pilot' => C("This person flies an airplane.", "Этот человек управляет самолётом.", "Бұл адам ұшақты басқарады."),
        'car' => C("This vehicle has four wheels and you drive it on roads.", "У этого транспортного средства четыре колеса, и вы ездите на нём по дорогам.", "Бұл көліктің төрт дөңгелегі бар және сіз онымен жолмен жүресіз."),
        'bus' => C("This large vehicle carries many passengers around a city.", "Этот большой транспорт перевозит много пассажиров по городу.", "Бұл үлкен көлік қала бойынша көптеген жолаушыларды тасиды."),
        'train' => C("This long vehicle runs on tracks and carries many people.", "Этот длинный транспорт движется по рельсам и перевозит много людей.", "Бұл ұзын көлік рельс бойымен жүреді және көп адамды тасиды."),
        'bicycle' => C("This two-wheeled vehicle is powered by pedaling with your legs.", "Этот двухколёсный транспорт приводится в движение педалями с помощью ваших ног.", "Бұл екі дөңгелекті көлік аяғыңызбен педаль басу арқылы қозғалады."),
        'airplane' => C("This vehicle flies through the sky and carries passengers far away.", "Этот транспорт летает по небу и перевозит пассажиров далеко.", "Бұл көлік аспанмен ұшады және жолаушыларды алысқа апарады."),
        'boat' => C("This vehicle travels on water.", "Этот транспорт передвигается по воде.", "Бұл көлік су бетімен жүреді."),
        'taxi' => C("This is a car you can pay to take you somewhere.", "Это машина, за которую вы платите, чтобы вас куда-то отвезли.", "Бұл сізді бір жерге апару үшін ақы төлейтін көлік."),
        'music' => C("This is sounds arranged to be pleasant, like songs.", "Это звуки, организованные так, чтобы быть приятными, например песни.", "Бұл ән сияқты жағымды болатындай ретке келтірілген дыбыстар."),
        'dance' => C("This means moving your body to the rhythm of music.", "Это значит двигать телом в ритме музыки.", "Бұл денеңізді музыка ырғағына сай қозғау дегенді білдіреді."),
        'football' => C("This popular sport is played with a round ball and two teams.", "В этот популярный вид спорта играют круглым мячом две команды.", "Бұл танымал спорт түрінде екі команда дөңгелек допты ойнайды."),
        'swimming' => C("This activity means moving your body through water.", "Это занятие означает передвижение тела по воде.", "Бұл әрекет денеңізді су арқылы қозғау дегенді білдіреді."),
        'painting' => C("This hobby uses a brush and colors to create pictures.", "В этом хобби используют кисть и краски, чтобы создавать картины.", "Бұл хоббиде сурет салу үшін қылқалам мен бояулар қолданылады."),
        'reading' => C("This hobby means looking at words in a book to understand a story.", "Это хобби означает читать слова в книге, чтобы понять историю.", "Бұл хобби әңгімені түсіну үшін кітаптағы сөздерді оқу дегенді білдіреді."),
        'cooking' => C("This activity means preparing food to eat.", "Это занятие означает готовить еду.", "Бұл әрекет жеу үшін тамақ дайындау дегенді білдіреді."),
        'photography' => C("This hobby means taking pictures with a camera.", "Это хобби означает делать снимки с помощью камеры.", "Бұл хобби камерамен сурет түсіру дегенді білдіреді."),
        'chess' => C("This is a strategy board game played with kings and queens.", "Это настольная стратегическая игра, в которой есть короли и королевы.", "Бұл патшалар мен патшайымдар қатысатын стратегиялық үстел ойыны."),
        'camping' => C("This activity means sleeping outdoors, often in a tent.", "Это занятие означает спать на улице, часто в палатке.", "Бұл әрекет сыртта, көбіне шатырда ұйықтау дегенді білдіреді."),
        'fishing' => C("This activity means trying to catch fish from the water.", "Это занятие означает пытаться поймать рыбу из воды.", "Бұл әрекет судан балық аулауға тырысу дегенді білдіреді."),
        'hiking' => C("This activity means walking long distances in nature, often on hills.", "Это занятие означает ходить на большие расстояния на природе, часто по холмам.", "Бұл әрекет табиғатта, көбіне төбелерде ұзақ қашықтыққа жаяу жүру дегенді білдіреді."),
        'phone' => C("You use this device to call or text people.", "Вы используете это устройство, чтобы звонить или писать людям.", "Сіз адамдарға қоңырау шалу немесе хабарлама жазу үшін бұл құрылғыны пайдаланасыз."),
        'computer' => C("You use this machine to work, browse the internet, or play games.", "Вы используете эту машину для работы, интернета или игр.", "Сіз бұл құрылғыны жұмыс істеу, интернетті шолу немесе ойын ойнау үшін пайдаланасыз."),
        'internet' => C("This is the network that connects computers around the world.", "Это сеть, которая соединяет компьютеры по всему миру.", "Бұл бүкіл әлем бойынша компьютерлерді байланыстыратын желі."),
        'camera' => C("You use this device to take photos.", "Вы используете это устройство, чтобы делать фотографии.", "Сіз фотосурет түсіру үшін бұл құрылғыны пайдаланасыз."),
        'television' => C("You watch shows and movies on this device.", "Вы смотрите шоу и фильмы на этом устройстве.", "Сіз бұл құрылғыдан хабарлар мен фильмдер көресіз."),
        'password' => C("You need this secret code to log into your account.", "Вам нужен этот секретный код, чтобы войти в свой аккаунт.", "Аккаунтыңызға кіру үшін сізге осы құпия код керек."),
        'battery' => C("This device stores power for your phone or other devices.", "Это устройство хранит энергию для вашего телефона или других приборов.", "Бұл құрылғы телефоныңыз немесе басқа құрылғылар үшін қуат сақтайды."),
        'tree' => C("This tall plant has a trunk, branches, and leaves.", "У этого высокого растения есть ствол, ветви и листья.", "Бұл биік өсімдіктің діңі, бұтақтары және жапырақтары бар."),
        'flower' => C("This colorful part of a plant often smells nice.", "Эта яркая часть растения часто приятно пахнет.", "Өсімдіктің бұл түрлі-түсті бөлігі көбіне жағымды иіс шығарады."),
        'river' => C("This is a long body of water that flows to the sea.", "Это длинный водоём, который течёт к морю.", "Бұл теңізге құятын ұзын су айдыны."),
        'ocean' => C("This is a huge body of salt water.", "Это огромный водоём с солёной водой.", "Бұл тұзды судың алып айдыны."),
        'sky' => C("This is what you see above you, blue in the day and dark at night.", "Это то, что вы видите над собой, синее днём и тёмное ночью.", "Бұл сіздің үстіңізде көретін нәрсе, күндіз көк, түнде қараңғы."),
        'star' => C("This bright object appears in the night sky.", "Этот яркий объект появляется в ночном небе.", "Бұл жарқын дене түнгі аспанда пайда болады."),
        'moon' => C("This object orbits the earth and is visible at night.", "Этот объект вращается вокруг Земли и виден ночью.", "Бұл дене Жерді айналады және түнде көрінеді."),
        'sand' => C("These are the tiny grains you find on a beach.", "Это крошечные крупинки, которые вы находите на пляже.", "Бұл жағажайдан табатын ұсақ түйіршіктер."),
        'expensive' => C("This word describes something that costs a lot of money.", "Это слово описывает то, что стоит много денег.", "Бұл сөз көп ақшаға тұратын нәрсені сипаттайды."),
        'cheap' => C("This word describes something that costs very little money.", "Это слово описывает то, что стоит очень мало денег.", "Бұл сөз аз ақшаға тұратын нәрсені сипаттайды."),
        'beautiful' => C("This word describes something that is very pleasant to look at.", "Это слово описывает то, на что очень приятно смотреть.", "Бұл сөз қарауға өте жағымды нәрсені сипаттайды."),
        'delicious' => C("This word describes food that tastes very good.", "Это слово описывает еду, которая очень вкусная.", "Бұл сөз дәмі өте жақсы тағамды сипаттайды."),
        'dangerous' => C("This word describes something that could hurt you.", "Это слово описывает то, что может вам навредить.", "Бұл сөз сізге зиян тигізуі мүмкін нәрсені сипаттайды."),
        'healthy' => C("This word describes something good for your body.", "Это слово описывает то, что полезно для вашего тела.", "Бұл сөз денеңізге пайдалы нәрсені сипаттайды."),
        'crowded' => C("This word describes a place that is full of people.", "Это слово описывает место, полное людей.", "Бұл сөз адамға толы орынды сипаттайды."),
        'quiet' => C("This word describes a place with very little noise.", "Это слово описывает место с очень небольшим шумом.", "Бұл сөз шуы өте аз орынды сипаттайды."),
        'strong' => C("This word describes someone with a lot of physical power.", "Это слово описывает того, у кого много физической силы.", "Бұл сөз дене күші мол адамды сипаттайды."),
        'travel' => C("This means going to different places, often far from home.", "Это значит ездить в разные места, часто далеко от дома.", "Бұл көбіне үйден алыс, әртүрлі жерлерге бару дегенді білдіреді."),
        'study' => C("This means spending time learning something.", "Это значит проводить время, изучая что-то.", "Бұл бір нәрсені үйренуге уақыт жұмсау дегенді білдіреді."),
        'clean' => C("This means making something free of dirt.", "Это значит делать что-то свободным от грязи.", "Бұл бір нәрсені кірден тазарту дегенді білдіреді."),
        'drive' => C("This means controlling a car to move it.", "Это значит управлять машиной, чтобы она двигалась.", "Бұл машинаны қозғалту үшін басқару дегенді білдіреді."),
        'swim' => C("This means moving your body through water.", "Это значит двигать телом в воде.", "Бұл денеңізді су арқылы қозғау дегенді білдіреді."),
        'sing' => C("This means using your voice to make music.", "Это значит использовать свой голос, чтобы создавать музыку.", "Бұл музыка жасау үшін дауысыңызды пайдалану дегенді білдіреді."),
        'listen' => C("This means paying close attention with your ears.", "Это значит внимательно слушать ушами.", "Бұл құлағыңызбен мұқият тыңдау дегенді білдіреді."),
        'smile' => C("This means turning up the corners of your mouth to show happiness.", "Это значит поднимать уголки рта, чтобы показать радость.", "Бұл қуанышты білдіру үшін ауыз бұрышын жоғары көтеру дегенді білдіреді."),
        'laugh' => C("This means making a sound when something is funny.", "Это значит издавать звук, когда что-то смешно.", "Бұл бір нәрсе күлкілі болғанда дыбыс шығару дегенді білдіреді."),
        'help' => C("This means giving support to someone who needs it.", "Это значит оказывать поддержку тому, кто в ней нуждается.", "Бұл көмек қажет ететін адамға қолдау көрсету дегенді білдіреді."),
        'learn' => C("This means gaining new knowledge or a skill.", "Это значит получать новые знания или навык.", "Бұл жаңа білім немесе дағды алу дегенді білдіреді."),
        'teach' => C("This means helping someone else learn something.", "Это значит помогать кому-то другому чему-то научиться.", "Бұл басқа адамға бір нәрсені үйренуге көмектесу дегенді білдіреді."),
        'build' => C("This means putting materials together to make something new.", "Это значит соединять материалы, чтобы создать что-то новое.", "Бұл жаңа нәрсе жасау үшін материалдарды біріктіру дегенді білдіреді."),
    ];
}

function extract_hangman_words(string $warmupEn, array $questionsEn, array $vocabWords, int $seed): array {
    $vocabLower = array_flip(array_map('mb_strtolower', $vocabWords));
    $clues = build_hangman_clues();

    $text = mb_strtolower($warmupEn . ' ' . implode(' ', $questionsEn));
    preg_match_all("/[a-z']+/", $text, $m);
    $mentioned = array_flip($m[0]);

    $available = [];
    foreach ($clues as $word => $clue) {
        if (isset($vocabLower[$word])) continue;
        $available[$word] = $clue;
    }

    $mentionedKeys = array_keys(array_intersect_key($available, $mentioned));

    mt_srand($seed);
    shuffle($mentionedKeys);
    $chosen = array_slice($mentionedKeys, 0, 5);

    if (count($chosen) < 5) {
        $remaining = array_values(array_diff(array_keys($available), $chosen));
        shuffle($remaining);
        $needed = 5 - count($chosen);
        $chosen = array_merge($chosen, array_slice($remaining, 0, $needed));
    }

    $result = [];
    foreach ($chosen as $word) {
        $result[] = ['word' => $word, 'clue' => $available[$word]];
    }
    return $result;
}
