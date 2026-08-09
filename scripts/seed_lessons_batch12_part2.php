<?php
declare(strict_types=1);
// Included from seed_lessons_batch12.php — shares its scope ($lessons, function V()).

// ========================= ELEMENTARY (batch 12) — 15 questions per topic =========================

$lessons[] = ['level' => 'elementary', 'topic' => 'Dealing with Jet Lag', 'background_key' => 'energetic',
    'warmup' => V("Let's talk about jet lag. Have you ever traveled somewhere and felt jet lag afterward?", 'Давайте поговорим о смене часовых поясов. Вы когда-нибудь путешествовали куда-то и потом чувствовали смену часовых поясов?', 'Уақыт белдеуінің ауысуы туралы сөйлесейік. Бір жерге саяхаттап, содан кейін оны сезіндіңіз бе?'),
    'vocab' => [V('jet lag', 'смена часовых поясов', 'уақыт белдеуінің ауысуы'), V('adjust', 'адаптироваться', 'бейімделу'), V('long flight', 'долгий перелёт', 'ұзақ ұшу'), V('exhausted', 'измождённый', 'қатты шаршаған'), V('sleep schedule', 'график сна', 'ұйқы кестесі'), V('daylight', 'дневной свет', 'күндізгі жарық'), V('recover', 'восстановиться', 'қалпына келу'), V('nap', 'вздремнуть', 'қысқа ұйықтау'), V('hydrate', 'пить достаточно воды', 'сумен қамтамасыз ету'), V('adapt quickly', 'быстро адаптироваться', 'тез бейімделу')],
    'questions' => [
        V('Have you ever felt jet lag after a trip?', 'Вы когда-нибудь чувствовали смену часовых поясов после поездки?', 'Сапардан кейін уақыт белдеуінің ауысуын сезіндіңіз бе?'),
        V('How long does it usually take you to adjust to a new time zone?', 'Сколько времени вам обычно нужно, чтобы адаптироваться к новому часовому поясу?', 'Жаңа уақыт белдеуіне бейімделуге әдетте қанша уақыт кетеді?'),
        V('Do you try to stay awake to adjust faster?', 'Вы стараетесь не спать, чтобы адаптироваться быстрее?', 'Тезірек бейімделу үшін ұйықтамауға тырысасыз ба?'),
        V('Have you ever been exhausted from a long flight?', 'Вы когда-нибудь были измождены после долгого перелёта?', 'Ұзақ ұшудан қатты шаршадыңыз ба?'),
        V('Do you take naps to recover from jet lag?', 'Вы вздремываете, чтобы восстановиться после смены часовых поясов?', 'Уақыт белдеуінің ауысуынан қалпыма келу үшін қысқа ұйықтайсыз ба?'),
        V('Does getting daylight help you adjust faster?', 'Дневной свет помогает вам быстрее адаптироваться?', 'Күндізгі жарық алу тезірек бейімделуге көмектесе ме?'),
        V('Do you drink a lot of water during long flights?', 'Вы пьёте много воды во время долгих перелётов?', 'Ұзақ ұшу кезінде көп су ішесіз бе?'),
        V('Have you ever adapted quickly to a new time zone?', 'Вы когда-нибудь быстро адаптировались к новому часовому поясу?', 'Жаңа уақыт белдеуіне тез бейімделдіңіз бе?'),
        V('Do you try to sleep on the plane during long flights?', 'Вы стараетесь спать в самолёте во время долгих перелётов?', 'Ұзақ ұшу кезінде ұшақта ұйықтауға тырысасыз ба?'),
        V('Does jet lag affect your mood?', 'Смена часовых поясов влияет на ваше настроение?', 'Уақыт белдеуінің ауысуы көңіл-күйіңізге әсер ете ме?'),
        V('Do you adjust your sleep schedule before a big trip?', 'Вы корректируете график сна перед большой поездкой?', 'Үлкен сапар алдында ұйқы кестеңізді реттейсіз бе?'),
        V('Is jet lag worse traveling east or west, in your experience?', 'Смена часовых поясов хуже при путешествии на восток или запад, по вашему опыту?', 'Тәжірибеңізде шығысқа саяхаттау нашарырақ па, әлде батысқа ма?'),
        V('Have you ever missed something important because of jet lag?', 'Вы когда-нибудь пропускали что-то важное из-за смены часовых поясов?', 'Уақыт белдеуінің ауысуы себебінен маңызды бір нәрсені өткізіп жібердіңіз бе?'),
        V('Do you avoid caffeine to help you sleep after a flight?', 'Вы избегаете кофеина, чтобы лучше спать после перелёта?', 'Ұшудан кейін жақсы ұйықтау үшін кофеиннен аулақ боласыз ба?'),
        V('What is your best tip for recovering from jet lag quickly?', 'Какой ваш лучший совет для быстрого восстановления от смены часовых поясов?', 'Уақыт белдеуінің ауысуынан тез қалпыма келудің ең жақсы кеңесіңіз қандай?'),
    ],
];

// ========================= PRE-INTERMEDIATE (batch 12) — 15 questions per topic =========================

$lessons[] = ['level' => 'pre-intermediate', 'topic' => 'The Ethics of Ghosting', 'background_key' => 'minimal-dark',
    'warmup' => V("Let's talk about ghosting. Is it ever okay to suddenly cut off communication with someone without explanation?", 'Давайте поговорим об игноре. Нормально ли внезапно прекратить общение с кем-то без объяснений?', 'Елемеу туралы сөйлесейік. Біреумен түсіндірмей кенеттен байланысты үзу дұрыс па?'),
    'vocab' => [V('ghosting', 'игнорирование (внезапное)', 'елемеу'), V('closure', 'завершённость', 'аяқталу'), V('avoidance', 'избегание', 'аулақ болу'), V('confrontation', 'конфронтация', 'қарсы тұру'), V('discomfort', 'дискомфорт', 'ыңғайсыздық'), V('respect', 'уважение', 'құрмет'), V('digital communication', 'цифровое общение', 'цифрлық қарым-қатынас'), V('rejection', 'отказ', 'бас тарту'), V('explanation', 'объяснение', 'түсіндіру'), V('emotional impact', 'эмоциональное воздействие', 'эмоционалды әсер')],
    'questions' => [
        V('Is it ever okay to suddenly cut off communication with someone?', 'Нормально ли когда-либо внезапно прекратить общение с кем-то?', 'Біреумен байланысты кенеттен үзу қашан да болса дұрыс па?'),
        V('Have you ever been ghosted by someone?', 'Вас когда-нибудь игнорировали таким образом?', 'Сізді осылай елемеді ме?'),
        V('Have you ever ghosted someone yourself?', 'Вы сами когда-нибудь так игнорировали кого-то?', 'Сіз өзіңіз біреуді осылай елемедіңіз бе?'),
        V('Do you think ghosting is a form of avoiding confrontation?', 'Как вы думаете, игнорирование — это форма избегания конфронтации?', 'Елемеу қарсы тұрудан аулақ болудың бір түрі ме деп ойлайсыз ба?'),
        V('Do you think people deserve an explanation when a relationship ends?', 'Как вы думаете, люди заслуживают объяснения, когда отношения заканчиваются?', 'Қарым-қатынас аяқталғанда адамдар түсіндіруге лайық па деп ойлайсыз ба?'),
        V('Do you think digital communication has made ghosting more common?', 'Как вы думаете, цифровое общение сделало игнорирование более распространённым?', 'Цифрлық қарым-қатынас елемеуді кеңірек таралған етті деп ойлайсыз ба?'),
        V('Is it easier to ghost someone than to have a difficult conversation?', 'Легче ли игнорировать кого-то, чем провести трудный разговор?', 'Біреуді елемеу қиын әңгімеден гөрі оңайырақ па?'),
        V('Do you think ghosting is disrespectful, even if unintentional?', 'Как вы думаете, игнорирование неуважительно, даже если непреднамеренно?', 'Елемеу әдейі болмаса да құрметсіздік пе деп ойлайсыз ба?'),
        V('Have you ever felt real emotional impact from being ghosted?', 'Вы когда-нибудь испытывали настоящее эмоциональное воздействие от игнорирования?', 'Елемеуден шынайы эмоционалды әсер сезіндіңіз бе?'),
        V('Do you think it is different to ghost a friend versus a romantic partner?', 'Как вы думаете, игнорировать друга отличается от игнорирования романтического партнёра?', 'Досты елемеу романтикалық серіктесті елемеуден ерекшеленеді ме деп ойлайсыз ба?'),
        V('Would you rather receive a difficult message, or be ghosted?', 'Вы бы предпочли получить трудное сообщение, или быть проигнорированным?', 'Қиын хабарлама алғанды қалайсыз ба, әлде елемеуді ме?'),
        V('Do you think there are situations where ghosting is a safety measure?', 'Как вы думаете, есть ли ситуации, когда игнорирование — это мера безопасности?', 'Елемеу қауіпсіздік шарасы болатын жағдайлар бар деп ойлайсыз ба?'),
        V('Do you think social media makes it easier to disappear from someone\'s life?', 'Как вы думаете, соцсети облегчают исчезновение из чьей-то жизни?', 'Әлеуметтік желі біреудің өмірінен жоғалуды жеңілдетеді деп ойлайсыз ба?'),
        V('Do you think ghosting has become normalized among younger generations?', 'Как вы думаете, игнорирование стало нормой среди молодых поколений?', 'Елемеу жас ұрпақ арасында қалыпты жағдайға айналды деп ойлайсыз ба?'),
        V('What would you want someone to do instead of ghosting you?', 'Что бы вы хотели, чтобы кто-то сделал вместо того, чтобы игнорировать вас?', 'Сізді елемеудің орнына біреудің не істегенін қалар едіңіз?'),
    ],
];

// ========================= INTERMEDIATE (batch 12) — 15 questions per topic =========================

$lessons[] = ['level' => 'intermediate', 'topic' => 'The Ethics of Corporate Lobbying', 'background_key' => 'professional',
    'warmup' => V("Let's talk about corporate lobbying. Does the influence of large companies on government policy undermine democracy?", 'Давайте поговорим о корпоративном лоббировании. Подрывает ли влияние крупных компаний на государственную политику демократию?', 'Корпоративтік лоббизм туралы сөйлесейік. Ірі компаниялардың мемлекеттік саясатқа әсері демократияны әлсіретеме?'),
    'vocab' => [V('lobbying', 'лоббирование', 'лоббизм'), V('campaign donation', 'пожертвование на кампанию', 'науқанға қайыр'), V('special interest', 'особый интерес', 'ерекше мүдде'), V('regulatory capture', 'регуляторный захват', 'реттеушілік басып алу'), V('transparency', 'прозрачность', 'ашықтық'), V('conflict of interest', 'конфликт интересов', 'мүдделер қақтығысы'), V('policy influence', 'влияние на политику', 'саясатқа әсер'), V('accountability', 'подотчётность', 'жауапкершілік'), V('public interest', 'общественный интерес', 'қоғамдық мүдде'), V('legislation', 'законодательство', 'заңнама')],
    'questions' => [
        V('Do you think corporate lobbying undermines democracy?', 'Как вы думаете, корпоративное лоббирование подрывает демократию?', 'Корпоративтік лоббизм демократияны әлсіретеді деп ойлайсыз ба?'),
        V('Should there be stricter limits on campaign donations from companies?', 'Должны ли быть более строгие ограничения на пожертвования компаний на кампании?', 'Компаниялардың науқандарға қайырларына қатаңырақ шектеулер болуы керек пе?'),
        V('Do you think lobbying gives wealthy companies unfair political influence?', 'Как вы думаете, лоббирование даёт богатым компаниям несправедливое политическое влияние?', 'Лоббизм бай компанияларға әділетсіз саяси ықпал бере ме деп ойлайсыз ба?'),
        V('Should all lobbying activity be required to be publicly transparent?', 'Должна ли вся лоббистская деятельность быть обязательно публично прозрачной?', 'Барлық лоббистік қызмет қоғам алдында ашық болуға міндетті болуы керек пе?'),
        V('Do you think regulatory agencies can be captured by the industries they regulate?', 'Как вы думаете, регулирующие органы могут быть захвачены отраслями, которые они регулируют?', 'Реттеуші органдар реттейтін салаларымен басып алынуы мүмкін деп ойлайсыз ба?'),
        V('Do you think lobbying is a legitimate form of political participation?', 'Как вы думаете, лоббирование — это законная форма политического участия?', 'Лоббизм саяси қатысудың заңды түрі ме деп ойлайсыз ба?'),
        V('Should politicians be banned from working for companies they used to regulate?', 'Должны ли политикам запретить работать в компаниях, которые они раньше регулировали?', 'Саясаткерлерге бұрын реттеген компанияларда жұмыс істеуге тыйым салынуы керек пе?'),
        V('Do you think ordinary citizens can compete with corporate lobbying power?', 'Как вы думаете, обычные граждане могут конкурировать с силой корпоративного лоббирования?', 'Қарапайым азаматтар корпоративтік лоббизм күшімен бәсекелесе алады деп ойлайсыз ба?'),
        V('Do you trust that legislation is written in the public interest?', 'Вы верите, что законодательство пишется в интересах общества?', 'Заңнама қоғамдық мүдде үшін жазылады деп сенесіз бе?'),
        V('Should there be a limit on how much money can be spent lobbying?', 'Должен ли быть предел на то, сколько денег можно тратить на лоббирование?', 'Лоббизмге жұмсалатын ақша мөлшеріне шек болуы керек пе?'),
        V('Do you think smaller countries are less affected by corporate lobbying?', 'Как вы думаете, небольшие страны менее подвержены влиянию корпоративного лоббирования?', 'Кішірек елдер корпоративтік лоббизмнен азырақ әсер алады деп ойлайсыз ба?'),
        V('Do you think lobbying disclosure laws are strong enough currently?', 'Как вы думаете, законы о раскрытии лоббистской деятельности достаточно строги сейчас?', 'Қазіргі лоббистік қызметті ашу заңдары жеткілікті қатаң деп ойлайсыз ба?'),
        V('Would you support a complete ban on corporate political donations?', 'Вы бы поддержали полный запрет на политические пожертвования от компаний?', 'Компаниялардың саяси қайырларына толық тыйым салуды қолдар ма едіңіз?'),
        V('Do you think journalists do enough to expose problematic lobbying?', 'Как вы думаете, журналисты делают достаточно, чтобы разоблачать проблемное лоббирование?', 'Журналистер проблемалы лоббизмді әшкерелеу үшін жеткілікті нәрсе істейді деп ойлайсыз ба?'),
        V('What reform would you propose to reduce the influence of corporate lobbying?', 'Какую реформу вы бы предложили для снижения влияния корпоративного лоббирования?', 'Корпоративтік лоббизмнің ықпалын азайту үшін қандай реформа ұсынар едіңіз?'),
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
