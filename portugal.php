<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Португалия</h1>
                    <div class="lead">
                        <b>Столица</b>: Лиссабон<br>
                        <b>Официальный язык</b>: португальский, мирандский<br>
                        <b>Валюта</b>: EUR - евро<br>
                        <b>Территория</b>: 92 151 км²<br>
                        <b>Население</b>: 10.8 млн человек<br>
                        <b>Часовой пояс</b>: GMT +0. Разница во времени с Астаной 6 часов
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg class="decorative-divider" preserveAspectRatio="none" viewBox="0 0 100 100">
        <polygon fill="#F8F9FB" points="0 100 100 100 100 0"></polygon>
    </svg>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <p> Португалия - самая западная страна Европы. Она располагается на западной оконечности Иберийского полуострова, граничит только с Испанией, а с запада и юга омывается Атлантическим океаном. Название стране дал один из ее основных городов Порту. Португалия административно разделена на 20 районов, 18 из них находятся на континенте и еще 2 в океане, это Мадейра и Азорские острова.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Главным туристическим направлением Португалии считаются города Лиссабон, Порту, провинция Алгавре и остров Мадейра. Здесь распространен пляжный отдых, океаническая рыбалка с охотой на голубого марлина и посещение памятников архитектуры, которыми богата страна. Кроме столицы интересно посетить Синтру, расположенную неподалеку, южный Фару и замки тамплиеров, сохранившиеся по сей день, а также побывать на мысе Рока, самой западной точке Европейского континента.</p>
                <p>Португалия ценится за свою неспешность и особую элитарность, которая постепенно сформировалась из-за весьма обособленного положения в Европе. Тут чтут традиции и комфорт, хорошую кухню и вкусные вина.</p>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Португалия - Лиссабон - виды с высоты птичьего полета" src="https://i.ytimg.com/vi/7MmOmSijfBE/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/7MmOmSijfBE?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Португалия - Лиссабон - виды с высоты птичьего полета<br>© Globe Trotter 2017</figcaption>
                </figure>

                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Добро пожаловать в сказку: Синтра Португалия" src="https://i.ytimg.com/vi/tp1_ostO5uo/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/tp1_ostO5uo?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Добро пожаловать в сказку: Синтра Португалия<br>© Странник КН 2017</figcaption>
                </figure>

            </div>
        </div>
    </div>
</section>

<nav id="scrollspy-navbar" class="bg-white navbar sticky-top">
    <div class="container">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item"><a class="nav-link" href="#culture">Культура</a></li>
            <li class="nav-item"><a class="nav-link" href="#visa">Въезд в страну</a></li>
            <li class="nav-item"><a class="nav-link" href="#security">Безопасность</a></li>
            <li class="nav-item"><a class="nav-link" href="#custom">Таможня</a></li>
            <li class="nav-item"><a class="nav-link" href="#transport">Транспорт</a></li>
            <li class="nav-item"><a class="nav-link" href="#health">Здравоохранение</a></li>
            <li class="nav-item"><a class="nav-link" href="#communication">Связь</a></li>
            <li class="nav-item"><a class="nav-link" href="#prices">Цены</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="culture">
    <div class="container">
        <h2>Культура и традиции</h2>
        <p>Культурное наследие Португалии можно наблюдать во всех крупных городах страны. Это величественные замки, старинные храмы, неприступные крепости, они могут рассказать многое об истории и традициях народа. Национальный дворец Синтры или Башня Белем в Лиссабоне представляют собой ярчайших представителей уникального архитектурного стила мануэлино, распространенного в Португалии в эпоху Возрождения.</p>
        <p>

            Говоря о культуре Португалии стоит обязательно упомянуть грустные песни фаду, которые можно услышать во многих кафе Порту или Лиссабона. Это искусство родилось много веков назад, и до сих пор является живым воплощением португальской души. Грустная музыка, протяжный голос, особенности исполнения - все это создает особую атмосферу, которую любят местные жители и могут прочувствовать туристы.</p>
        <p>Португальцы тщательно хранят свои традиции, многие из которых связаны с праздниками. Самые любимые торжества в году - это Рождество и Новый год. Вся страна в этот период превращается в сказку, все украшено елками и игрушками, и никого не смущает отсуствие снега. В первый день нового года все хозяйки принимаются мыть зеркала у себя дома, по традиции это принесет удачу в наступившем году. Через неделю наступает праздник королей, который пользуется пожалуй даже большей популярностью, чем Рождество. В этот день проводят карнавалы и шествия, а на площадях танцуют самбу.</p>
        <p>Кухня Португалии славится своими рыбными блюдами, это единственная страна в мире, где повара знают как приготовить треску 300 разными способами. Кроме трески здесь нужно попробовать сардины, тунца, морепродукты. В горных регионах предпочитают есть мясо, популярна ягнятина или смесь разных сортов с пряными травами, которая называется кузида-а-португеза. Португальцы любят смешение вкусов, поэтому здесь можно попробовать свинину с креветками по-азулежски или франсезинья - сендвич с колбасой, ветчиной и мясом одновременно. Все принято запивать вкуснейшим португальским портвейном. Причем белый пьют как апперетив, а красный как дижестив.</p>

        <h5>Праздники и официально нерабочие даты</h5>

        <div class="card bg-secondary">
            <div class="card-body">
                <h6 class="title-decorative">Нерабочие дни:</h6>
                <ul>
                    <li>1 января - Новый год.</li>
                    <li>6 января - Крещение, День Трех Королей.</li>
                    <li>Карнавальный вторник — февраль/март, день накануне Пепельной Среды, первого дня Великого Поста</li>
                    <li>1-30 апреля - Пасха. </li>
                    <li>День Свободы — 25 апреля, годовщина революции 1974 года</li>
                    <li>1 мая - День труда. </li>
                    <li>10 июня - день Португалии</li>
                    <li>май/июнь - Праздник тела Христова, девятый четверг после Пасхи</li>
                    <li>15 августа - Успение Пресвятой Богородицы. </li>
                    <li>5 октября - День Республики, годовщина провозглашения в 1910 году Республики Португалия</li>
                    <li>1 ноября - День Всех Святых. </li>
                    <li>1 декабря - День Независимости, годовщина провозглашения независимости Португалии от Испании в 1640 году</li>
                    <li>8 декабря - Праздник Непорочного Зачатия</li>
                    <li>25 декабря - Рождество. </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="climate">
    <div class="container">
        <h2>Климат</h2>
        <p>Климат Португалии морской, на него сильно влияет Гольфстрим, идущий недалеко от берегов страны. Здесь никогда не бывает жары, лето сухое и теплое от +20 до +25 градусов. Вода в океане у южных берегов страны прогревается не выше +23. Зимы прохладные и дождливые от +4 до +10 градусов. Самое комфортное время для визита в Португалию с мая по октябрь, когда большое количество солнечных часов и наиболее комфортная температура. Для пляжного отдыха стоит выбрать регионы, расположенные южнее Лисссабона, севернее океан более холодный и неспокойный.</p>
    </div>
</section>

<section id="visa" class="bg-white">
    <div class="container">
        <h2>Посещение гражданами Казахстана</h2>
        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Португалия входит в шенгенское соглашение, поэтому для посещения необходимо получить <strong>Шенгенскую визу </strong> категории С. Для посещения Азорских островов и Мадейры подходит основнам виза, дополнительных разрешений получать не требуется.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно! </strong> Посольства Португалии на территории Казахстана нет, выдачей шенгенских виз занимается посольство Франции.</p>
                    </div>
                </div>
                <p>Список необходимых документов для получения визы можно посмотреть на сайте ambafrance-kz.org, там же можно скачать анкету для заполнения. Обычно в него входит подтверждение платежеспособности, это могут быть справки с работы или выписки с банковского счета. Подтверждение бронирования из отеля или приглашение от частного лица или компании. Потребуются билеты в обе стороны и другие документы. Обратите внимание, что при подаче документов снимают отпечатки пальцев, поэтому приходить на прием нужно лично.</p>


            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Шенгенская виза</div>
                                <span></span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-news mr-1"></i> Регистрация</div>
                                <span>обязательна</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=ул.+космонавтов+62,+астана+020000,+казахстан&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Франции</h5>
                        <p>ул. Космонавтов 62, Астана 020000, Казахстан</p>
                        <p><i class="icon-phone"></i> +7 717 279 5100</p>
                        <p><i class="icon-link"></i> <a href="ambafrance-kz.org" target="_blank">ambafrance-kz.org</a></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Авиарейсы с одной пересадкой</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Лиссабон - Астана</div>
                                <span>Каждый день</span>
                            </div>
                        </li>
                    </ul>
                    <div class="card-footer p-3">
                        <a href="http://avia.account.travel" class="btn btn-block btn-outline-success">Подобрать рейс</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="security">
    <div class="container">
        <h2>Безопасность</h2>
        <p>Португалия ситается одной из самых безопасных западно-европейских стран. Здесь минимальны кражи, а угонов автомобилей практически не бывает. При этом полностью расслабляться не следует. не оставлять кошельки и технику без присмотра, фотоаппараты лучше вешать на шею, а портмоне не класть в задние карманы брюк.
        </p>
        <h5>Безопасность на дорогах в Португалии</h5>
        <p>Португальские дороги одни из лучших в Европе. Многочисленные трассы соединяют столицу с отдаленными районами в глубине страны. Стиль вождения здесь спокойный, поэтому аварий на дорогах встречается немного. </p>
        <p>Путешествуя на автомобиле стоит быть внимательным горном регионе на севере страны, там встречаются сложные разъезды, грунтовые дороги и камнепады.</p>
        <p>Всего за прошлый год на дорогах Португалии произошло 84 377 аварий, что выше показателей 2016 г, в связи с чем правительство Португалии приняло ряд мер по улучшению дорожной обстановки в стране.</p>
        <p>При попадании в аварию и при любых других проблемах на дороге нужно звонить по номеру 308.</p>
        <h5>Стихийные бедствия и природные опасности в Португалии</h5>
        <p>Страна расположена в сейсмоактивной зоне, землетрясения случаются по нсколько раз в год разной силы. Самое известное произошло в 1755 году. Тогда был полностью разрушен Лиссабон, а приливная волна унесла множество жизней. Кроме землятресений весь летний сезон сохраняется опасность пожаров. Летом вводится полный запрет на разведение костров и ужесточаются наказания за курение в неположенных местах. Штрафы могут достигать 750 евро.</p>
    </div>
</section>
<section id="custom" class="bg-white">
    <div class="container">
        <h2>Таможенный контроль</h2>
        <h5>Валюта</h5>
        <p>Граждане Казахстана имеют право ввозить и вывозить из Португалии любое количество наличных денег, но свыше 10000 евро их необходимо задекларировать.
        </p>
        <h5>Спиртное и сигареты</h5>
        <p>Все гости страны старше 18 лет могут ввезти или вывезти 1 литр крепких алкогольных напитков или 2 литра вина или других напитков слабее 22 градусов. Сигареты можно в ввозить в количестве 200 штук, вместо них можно ввезти 250 грамм трубочного или сигаретного табака или 50 сигар.</p>
        <h5>Чай, кофе, туалетная вода, ювелирные украшения</h5>
        <p>В Португалию можно ввезти  100 г чая и кофе — 500 г. 50 мл духов и 250 мл туалетной воды, золото и драгоценности не более чем на 500 г.</p>
        <h5>Запрещенные товары</h5>
        <p>Запрещен ввоз и вывоз наркотиков, предметов, имеющих историческую ценность, оружия и боеприпасов, а также животных и растений, внесенных в список исчезающих видов. Под запретом также картофель, произведенный за пределами Евросоюза, любые мясомолочные продукты и шоколад.</p>
        <h5>Tax Free</h5>
        Возвращение налога на товары, купленные на территории Португалии, может сэкономить 15% от их стоимости. получить купоны на возврат налога можно в магазинах, участвующих в программе. Покупка должна превышать 61 евро.

    </div>
</section>

<section id="transport">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Самым распространенным транспортом Португалии по праву можно назвать автобусы. Они ходят в любом городе, а также связывают их между собой. Всего выделяется 3 вида автобусов. Местного значения, обозначенные буквами CR, они останавливаются на всех остановках, и используются для коротких маршрутах по городу или по сельской местности. Есть междугородние экспрессы, которые ходят по расписанию между самыми крупными городами и экспрессы повышенной комфортности, воспользоваться которыми имеет смысл при дальних переездах. </p>

                <h5>Стоимость проезда</h5>
                <p>Автобус от Лиссабона до Порту идет 3.5 часа и стоит 17.5 евро. Из столицы в южный Фару можно уехать за 4 часа и 18 евро. Чтобы сэкономить можно купить билеты заранее через интернет или выбрать путешествие железной дорогой. Поезда в Португалии менее удобны, идут дольше, но стоят дешевле.</p>
                <p>Льготные билеты часто можно купить на автобусы студентам до 26 лет, пенсионерам после 60 лет и детям от 5 до 12 лет. </p>
                <p>Общественный транспорт в городе представлен чаще всего автобусами и трамваями. В Лиссабоне в транспортную сеть включен фуникулер Глория и знаменитый лифт Санта Жушта. Одна поездка будет стоить 1.4 евро, а купленный билет у водителя 1.8 евро.</p>
                <h5>Метро</h5>
                <p>Метро есть в двух городах страны в Лиссабоне и Порту. Стоимость проезда в столице 1.4 евро, в Порту 1.2 евро. Всего 4 линии обеспечивают весь город, работая с 6.00 утра до 1.30 ночи.
                </p>
                <h5>Трамвай</h5>
                <p> Популярный вид транспорта в городах, который в Лиссабоне является одной из достопримечательностей города. Маршрут № 28 - это старинные вагоны, которые катают туристов по самым знаковым местам города, проезжая рядом с замком святого Георгия, лифтом Санта Жушта и другими культовыми сооружениями столицы. Кроме него есть и другие маршруты, на них ходят современные вагоны с низким полом, удобные для передвижения людей с ограниченными возможностями.
                </p>
                <h5>Автобусы</h5>
                <p> Автобусы есть во всех городах страны. Чтобы остановить его, с остановки надо подать сигнал водителю рукой, а из салона нажать на специальную кнопку. Нужно быть особенно внимательными, так как без сигнала, автобус просто проедет мимо вас.
                </p>
                <p>В Лиссабоне есть ночные маршруты, которые ходят после закрытия метро в 1 час ночи и до его открытия в 6 утра.</p>


            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость проезда</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Метро, автобус, трамвай, фуникулер</div>
                                <span>от 1.40 евро</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Трамвай №28</div>
                                <span>2.85 евро</span>
                            </div>
                        </li>
                    </ul>

                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-light-bulb"></i>
                        <span class="h6"><b>Электросеть</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <nobr>230 В</nobr>, <nobr>50 Гц</nobr>, используется <a href="/journal/electric-sockets.html#typeF">разъем типа F</a>
                                </div>
                                <span class="text-right">
                                    <img src="/img/electric/type_f.svg" style="width:100px; max-width:100%;">
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

</section>
<section id="auto" class="bg-white">
    <div class="container">
        <h2>Автомобиль</h2>
        <div class="card mb-4">
            <div class="bg-secondary">
                <div class="card-body">
                    <h6 class="title-decorative">Аренда автомобиля</h6>
                    <p>В Португалии фирмы по прокату автомобилей вас встретят прямо в аэропорту. Прилетев, вы можете взять машину и отправится сразу исследовать страну. Для этого потребуются только ваши права международного образца, опыт вождения от года и возраст старше 21, а в некоторых фирмах 25 лет. При получении машины зафиксируйте все имеющиеся повреждения, заполните договор и проверьте наличие всех необходимых документов и страховки на машину как на сам автомобиль, так и автогражданскую отвественность. Так вы сможете избежать проблем во время путешествия.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="health">
    <div class="container">
        <h2>Здравоохранение в Португалии</h2>
        <p>Медицина в Португалии достойно занимает одно из ведущих мест в западной Европе. Здесь во всех крупных городах можно найти современные госпитали, оборудованные по современным стандартам. При наличии страховки любая медицинская помощь, будет для вас оказана бесплатно. Если же страховки нет, то за любую операцию придется заплатить не маленькую сумму.</p>
        <p>В аптеке можно приобрести все необходимые лекарства, если вам потребуется что-то специфическое, то придется обратиться к врачу за рецептом. Обчные же препараты продают в свободном доступе.</p>
        <p>Во всей стране из крана течет питьевая вода, но стоит быть внимательным в южном регионе Алгавре часто из крана идет слегка солоноватая вода. Она не опасна, но по вкусу не приятна, в этот период лучше покупать бутылированную воду. </p>
        <p>Местных инфекций в стране нет, ее посещение не требует каких-либо дополнительных прививок. В летний период необходимо соблюдать осторожность в южных регионах, находясь постоянно на солнце надо защищать голову и кожу от перегрева и ожогов. Лучше с 12 до 16 часов дня на улицу не выходить.</p>


        <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>

        <!--<script src="//f.sravni.ru/f/apps/build/widgets/sravni-widgets.js"></script>
        <sravni-micro-widget type="mantravel" logo="false" partner="tonkosti.ru" theme="tonkosti.ru" data-countries="Азербайджан"><link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet"><style>sravni-micro-widget{text-align: center;display: block;position:relative}a.sravni-dl{font: 300 14px 'Open Sans', sans-serif; max-width:100%px; display:inline-block; color: #a7a7a7; text-decoration: none;border-bottom:1px solid #a7a7a7;}</style></sravni-micro-widget>-->
    </div>
</section>

<section id="communication" class="bg-white">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <h5>Мобильная связь</h5>
                <p>Приезжая в страну на срок более чем 3 дня, выгодно купить местную сим-карту от одного из операторов: Vodafone, Optimus и TMN. Все они предоставляют равное качество связи и практически одинаковые тарифы. Покупка карты обойдется в 10 евро, звонок по Португалии 0.09 евро. Звонки в другие страны от 0.2 евро.
                </p>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Интернет в Португалии. Виды и тарифы. FAQ о Португалии." src="https://i.ytimg.com/vi/s6jRmWeGNiQ/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/s6jRmWeGNiQ?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Интернет в Португалии. Виды и тарифы. FAQ о Португалии.<br>© Португалия 2015</figcaption>
                </figure>
            </div>



            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-old-phone"></i>
                        <span class="h6"><b>Полезные телефоны</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Экстренный телефонный номер</div>
                                <span>115</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция, Пожарные и Скорая</div>
                                <span>112</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Справочная служба</div>
                                <span>118</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая помощь на дорогах</div>
                                <span>308</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
<section id="prices">
    <div class="container">
        <h2>Цены</h2>
        <p>Португалия традиционно считается местом эксклюзивного отдыха, здесь цены несколько выше,чем в остальной Европе, а курорты расчитаны на людей с доходом выше среднего. Поэтому здесь сложно найти апартаменты за 30-50 евро, в основном здесь представлены классические отели с завтраком, бассейном и другими услугами. Цены на ночь в них начинаются от 100 евро. Самые простые отели, которые можно встретить в стране расположены на севере, там цены начинаются от 25 евро.</p>
        <p>Цены на еду в кафе и ресторанах также высоки, заказав здесь тарелку морепродуктов будьте готовы отдать около 20 евро, а за ужин из трех блюд с вином заплатить 75 евро за одного или 150 евро за двоих. Чаевые в счет не включены, но подразумевается, что вы оставите официанту 10% от общего чека.</p>
        <p>Но кроме дорогих ресторанов в Португалии распространен местный фастфуд, множество небольших заведений предлагающих бутерброды и сендвичи за 2-3 евро, пекарни с вкусными местными булками паштеиш по 1.5 евро.</p>
    </div>
</section>

<section id="sight" class="bg-white">
    <div class="container">
        <!--Блок экскурсий-->
        <?= $this->render('_excursions', $country) ?>
    </div>
</section>