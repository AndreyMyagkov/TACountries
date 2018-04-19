<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Черногория</h1>
                <div class="lead">
                    <b>Столица</b>: Подгорица<br>
                    <b>Официальный язык</b>: черногорский<br>
                    <b>Валюта</b>: EUR - евро<br>
                    <b>Территория</b>: 13 812 км²<br>
                    <b>Население</b>: 622 тыс человек<br>
                    <b>Часовой пояс</b>: GMT+1. Разница с Астаной 5 часов
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="MONTENEGRO : Land of nature in 4k | NX1 | D810 | Glidecam" src="https://i.ytimg.com/vi/x8n9bMtE8Kk/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/x8n9bMtE8Kk?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Sacha Luisada, 2016</figcaption>
                </figure>
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
            <div class="col-lg-8 offset-lg-2">
                <p>Черногория - страна черных гор, бирюзового моря и старинных городов. Расположена на юго-западе Балканского полуострова и граничит Хорватией, Боснией и Герцеговиной, Сербией, Косово и Албанией. Привлекает туристов пляжами Адриатического моря, природными парками на севере страны и городами, построенными во времена Венецианской республики.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Черногория - это не только пляжный отдых. В стране огромное количество достопримечательностей, православных монастырей и удивительных пейзажей. Самым красивым местом страны по праву считается Боко-Которская бухта, которую черногорцы зовут Невестой Ядрана. А самым красивым городом считается Котор, который внесен в список всемирного наследия ЮНЕСКО.</p>
                <p>Черногория - небольшая страна, и приезжая сюда на 2 недели, ее можно изучить вдоль и поперек, особенно если взять напрокат машину. Обязательно стоит побывать в бухте, от Котора подняться по серпантину на гору Ловчен и посетить мавзолей Негоша, посмотреть оттуда на открывающуюся панораму, а если повезет - увидеть Италию на том берегу Адриатики. С горы можно спуститься в культурную столицу страны - город Цетинье, погулять по его уютным улочкам и по новой трассе уехать в Подгорицу или спуститься на побережье в районе Будвы. Именно ее туристы часто выбирают для основного места отдыха. Будва - жемчужина Адриатической ривьеры, здесь есть вся инфрастурктура для отдыха: красивый старый город, песчаные пляжи и интересные морские прогулки до острова Святого Николы. Недалеко от Будвы находится и визитная карточка Черногории - остров Свети Стефан, на котором расположен 5* отель Амон Ресорт.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Kotor for all seasons [Official Promotional Film]" src="https://i.vimeocdn.com/video/494400590_1280x720.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/68085730?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Kotor for all seasons [Official Promotional Film]<br>© Dusan Vulekovic 2013</figcaption>
            </figure>
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Черногория - пять красивых мест" src="https://i.ytimg.com/vi/lVdgXR1h3MQ/maxresdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/lVdgXR1h3MQ?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Черногория - пять красивых мест<br>© PGenrikhP 2015</figcaption>
            </figure>
        </div>
    </div>
</section>

<nav id="scrollspy-navbar" class="bg-white navbar sticky-top">
    <div class="container">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item"><a class="nav-link" href="#population">Население</a></li>
            <li class="nav-item"><a class="nav-link" href="#culture">Культура</a></li>
            <li class="nav-item"><a class="nav-link" href="#climate">Климат</a></li>
            <li class="nav-item"><a class="nav-link" href="#visa">Въезд в страну</a></li>
            <li class="nav-item"><a class="nav-link" href="#security">Безопасность</a></li>
            <li class="nav-item"><a class="nav-link" href="#custom">Таможня</a></li>
            <li class="nav-item"><a class="nav-link" href="#transport">Транспорт</a></li>
            <li class="nav-item"><a class="nav-link" href="#auto">Авто</a></li>
            <li class="nav-item"><a class="nav-link" href="#health">Здравоохранение</a></li>
            <li class="nav-item"><a class="nav-link" href="#communication">Связь</a></li>
            <li class="nav-item"><a class="nav-link" href="#prices">Цены</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="population">
    <div class="container">
        <h3>Население</h3>
        <p>Основу населения составляют черногорцы - 43%, сербы - 32%, боснийцы - 8%, албанцы - 5%, мусульмане - 4% и хорваты - 1%.</p>
        <p>Мужчин и женщин примерно поровну.</p>
        <p>Экология, климат и образ жизни местного населения благоприятно влияют на качество жизни. Средняя продолжительность жизни составляет 76 лет.</p>
        <?= $this->render('_population') ?>
    </div>
</section>


<section id="culture" class="bg-white">
    <div class="container">
        <div class="container">
            <h2>Культура и традиции</h2>
            <p>Культура Черногории формировалась долгие века под влиянием сначала итальянцев, потом турков и австрийцев, которые по очереди владели этими территориями начиная с XV века. Западные и восточные традиции оставили свой след как в архитектуре, так и в искусстве страны. Гуляя по старинным каменным городам, можно повсеместно увидеть венецианских львов. Особенно много их в Которе и Перасте, который когда-то был главной верфью итальянских кораблестроителей.</p>
            <p>Черногорцы прославили свою страну и в искусстве, и в литературе. Самым известным писателем, получившим нобелевскую премию, считается Иво Андрич. Он родился и вырос в самом западном городе Херцег-Нови. Среди современных художников популярны Петр Лубарда, Мило Милунович, Дадо Джурич, Бранко Филиппович-Фило, Войо Станич. Их работы можно увидеть в галереях современного искусства по всему миру.</p>

            <div class="row mt-3">
                <div class="col-lg-7">
                    <h5>Праздники</h5>
                    <p>У черногорцев сильны православные традиции, они отмечают все церковные праздники, чтят святых, а самым главным праздником для каждой семьи считается Слава. Она отмечается в день святого, которой покровительствует семье, у каждого клана он свой. В этот день все собираются за одним столом, приглашаются родственники, соседи, знакомые. Угощения готовятся так, что ими можно накормить всю деревню. Празднуют от 1 до 3 дней, в виде подарков чаще всего принимаются алкогольные напитки для главы семьи.</p>
                    <p>В дни государственных праздников проводят праздничные мероприятия, карнавалы, парады мажореток, на которые можно посмотреть на центральных улицах городов. Все учреждения в эти дни закрыты, а если праздники приходятся на выходные, то они переносятся на ближайшие будние дни. Магазины, особенно крупные работают, но могут менять график, открываться позже, а закрываться раньше обычного.</p>
                </div>
                <div class="col-lg-5">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <h6 class="title-decorative">Официально нерабочие дни</h6>
                            <ul>
                                <li>1 и 2 января - Новый год.</li>
                                <li>6 января - Бадни дан или сочельник.</li>
                                <li>7 января - Божич или Рждество.</li>
                                <li>1-30 апреля - православная пасха. </li>
                                <li>27 апреля - день республики.</li>
                                <li>1  и 2 мая - День труда. </li>
                                <li>9 мая - День освобождения от фашизма</li>
                                <li>12 мая - День святого Василия Острожского, покровителя страны.</li>
                                <li>21 мая - День независимости Черногории.</li>
                                <li>3 июня - День государственности. </li>
                                <li>13 июля - День восстания. </li>
                                <li>29-30 ноября - Дни республики. </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-7">
                    <h5>Кухня</h5>
                    <p>Кухня Черногории в основном мясная, она формировалась в те времена, когда у коренных черногорцев не было выхода к морю, поэтому рыбу и морепродукты здесь готовят только для туристов. Коренное население предпочитает ягнятину из под сача, чевапи и плескавицы из говядины или свинины, а из рыбных блюд можно встретить чаще озерную форель, чем морского тунца, хотя и того и другого в водах страны водится с избытком.</p>
                </div>
                <div class="col-lg-5">
                    <figure class="figure d-block">
                        <div class="video-cover box-shadow">
                            <img alt="ЕДА В ЧЕРНОГОРИИ, БЛЮДА ЧЕРНОГОРСКОЙ КУХНИ #9" src="https://i.ytimg.com/vi/pEzCWMY6Fe8/maxresdefault.jpg" class="bg-image"/>
                            <div class="video-play-icon">
                                <i class="icon-controller-play"></i>
                            </div>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/pEzCWMY6Fe8?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                        <figcaption class="figure-caption text-right">ЕДА В ЧЕРНОГОРИИ, БЛЮДА ЧЕРНОГОРСКОЙ КУХНИ #9<br>© MY LIFE 2017</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="climate">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Климат</h2>
                <p>В Черногории представлены 2 климатические зоны:</p>
                <ol>
                    <li>
                        Теплый средиземноморский - на побережье.
                        <p>Здесь средняя температура летом выше +30 градусов, а зимой держится около +10 ... +12 градусов. Снега практически никогда не бывает, а если при внезапном похолодании он пойдет, то сразу же тает. Исключением стала зима 2017 года, когда снег лег в прибрежной зоне и продержался в разных местах от 12 часов до 3-х дней.</p>
                    </li>
                    <li>
                        Умеренно континентальный - в горах.
                        <p>Здесь наблюдается комфортное лето с температурой +25 градусов и снежная зима при -10 градусах. В горах Черногории работают 2 горнолыжных курорта Жабляк и Калашин, снежный покров в которых держится с декабря по начало апреля.</p>
                    </li>
                </ol>
            </div>
            <div class="col-lg-6">
                <div id="chart-climate"></div>
            </div>
        </div>
    </div>
</section>

<section id="visa" class="bg-white">
    <div class="container">
        <h2>Посещение гражданами Казахстана</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Въезд в Черногорию для граждан Казахстана <strong>в течение сезона разрешен без визы</strong>. Сезон длится с 15 мая по 15 октября. В остальное время для посещения страны необходимо оформить национальную визу. Для этого в консульство нужно предоставить документы, подтверждающие платежеспособность, бронь отеля или апартаментов и билеты на самолет туда и обратно, а также медицинскую страховку путешественника.</p>
                <p>Посольства Черногории в Казахстане нет, получить визу можно либо в посольстве Болгарии в Казахстане, либо в посольстве Черногории в Москве.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно! </strong> При посещении страны в безвизовый период необходимо по прибытие зарегистрироваться в туристическом бюро и заплатить налог, который составляет 1 евро в день. Иногда принимающая сторона отель или владелец апартаментов может сделать это за туриста.</p>
                    </div>
                </div>

                <h5>Авиасообщение</h5>
                <p>Прилет возможен в аэропорт Тивата или Подгорицы. При выборе аэропорта ориентируйтесь на место отдыха. Для курортов Херцег-Нови, Котор, Тиват, Будва удобнее выбрать рейсы в Тиват, для остальной части страны подойдет Подгорица. В сезон и в одном и в другом аэропорту приземляются чартеры из Казахстана</p>
                <p>Прямые перелеты возможны из Астаны и Алматы. Продолжительность полета составляет около 6 часов.</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class="icon-v-card mr-1"></i> Безвизовый режим
                                    <p class="small text-muted">15 мая - 15 октября<br>При этом обязательна регистрация и уплата налога</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class="icon-v-card mr-1"></i> Виза Черногории
                                    <p class="small text-muted">в остальное время</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card">
                                <iframe src="https://www.google.com/maps/embed/v1/search?q=астана,+бц+аружан&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                                <div class="card-body">
                                    <h5>Визовый центр Болгарии в Астане</h5>
                                    <p>Астана, Жансугурова 8/1 (БЦ Аружан), 5 этаж, офис 507</p>
                                    <p><i class="icon-phone"></i> +7 727 3505120</p>
                                    <p><i class="icon-link"></i> <a href="http://www.bulgariavisa-kazakhstan.com/contactus.html" target="_blank">www.bulgariavisa-kazakhstan.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <iframe src="https://www.google.com/maps/embed/v1/search?q=алматы,+тимирязева+28+в,+(бц+гранд+алатау)&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                                <div class="card-body">
                                    <h5>Визовый центр Болгарии в Алматы</h5>
                                    <p>Алматы, Тимирязева 28 В, (БЦ Гранд Алатау), 5 этаж, офис 502</p>
                                    <p><i class="icon-phone"></i> +7 727 3505120</p>
                                    <p><i class="icon-link"></i> <a href="http://www.bulgariavisa-kazakhstan.com/contactus.html" target="_blank" rel="nofollow">www.bulgariavisa-kazakhstan.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <iframe src="https://www.google.com/maps/embed/v1/search?q=москва,+ул.+мытная,+3,+офис+23-25&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                                <div class="card-body">
                                    <h5>Посольство Черногории в России</h5>
                                    <p>Россия, Москва, ул. Мытная, 3, офис 23-25</p>
                                    <p><i class="icon-phone"></i> +7 499 230 18 65</p>
                                    <p><i class="icon-link"></i> <a href="http://ambasadamontenegro.ru/" target="_blank" rel="nofollow">ambasadamontenegro.ru</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Прямые авиарейсы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Подгорица - Астана</div>
                                <span>3 раза/нед в сезон</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Подгорица - Алматы</div>
                                <span>2 раза/нед в сезон</span>
                            </div>
                        </li>
                    </ul>
                    <div class="card-footer p-3">
                        <a href="https://avia.account.travel" class="btn btn-block btn-outline-success">Подобрать рейс</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="security">
    <div class="container">
        <h2>Безопасность</h2>
        <p>Черногория признана одной из самых безопасных стран на Балканском полуострове. Местные жители, особенно вне крупных городов, до сих пор не запирают свои дома, а машины оставляют с открытыми стеклами, чтобы они проветривались. Однако, как и в других странах, в местах скопления туристов могут орудовать карманники, правда число их крайне мало. Стоит быть осторожным только путешествуя по югу страны, в таких городах как Ульцинь и Бар, кражами занимаются живущие там цыгане.</p>

        <h5>Преступность в Черногории</h5>
        <p>Показатели преступности по стране низкие, хотя как и везде за последние годы несколько выросли. Основной проблемой считаются кражи и разборки местных мафиозных структур, не угрожающие туристам, но очевидно ухудшающие статистику по стране.</p>
        <p>Умышленных убийств в стране по статистике происходит 1 на 100000 населения в год, что по сравнению с другими странами считается очень низким показателем.</p>
        <p>Основные опасности в стране исходят не от людей, а от природы. Это горная страна, здесь не редки обвалы и камнепады. Из-за сильных дождей в зимний период могут сходить сели и размываться горные дороги.</p>

        <h5>Безопасность дорожного движения</h5>
        <p>Садясь за руль, в этой стране стоит быть готовым к очень сложным условиям вождения. Скоростных трасс здесь нет, в основном горные дороги со множеством поворотов и изгибов. Часто пропасти ничем не огорожены, и вылетевших машин с каждым годом становится все больше. Еще одной опасностью являются узкие дороги, когда вместо 2 полноценных полос приходится ехать по одной в обе стороны, а при встрече искать места разъезда.</p>
        <p>Местные жители славятся любовью к быстрой езде на неприспособленных к этому дорогах. Стоит опасаться также любителей обгонов, которые производят их в запрещенных для этого местах. Особенно это опасно на поворотах и подъемах в условиях ограниченной видимости.</p>
        <p>Аварии на дорогах не редкость для Черногории, в основном причиной становится превышение скорости, нарушение правил дорожного движения. Из природных условий причиной аварий часто являются дождь или туман в горах. По статистике за год число жертв ДТП постоянно растет и за последние 5 лет составило 477 человек.</p>
        <p>При попадании в аварию и при любых других проблемах на дороге нужно звонить по номеру 112.</p>

        <h5>Стихийные бедствия и природные опасности в Черногории</h5>
        <p>Как и для любой страны, расположенной практически полностью в горах, основной опасностью остается камнепад и сход селей в период дождей. В это же время не редки наводнения в городах. Летом, в период засухи, часто случаются лесные пожары. Стоит быть внимательным с июля по август, не зажигать костров и не бросать горящие предметы на сухую траву.</p>
    </div>
</section>

<section id="custom" class="bg-white">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <h5>Общая информация</h5>
        <p>Граждане Казахстана могут провозить на территорию Черногории не более 10000 евро наличными без декларации, при выезде сумма не имеет значение.</p>

        <h5>Спиртное и сигареты</h5>
        <p>Алкоголь, разрешенный к провозу, могут ввезти только лица, достигшие 17 лет. Разрешенный объем - это 1 литр крепких напитков или 2 литра любого вина. На вывоз ограничения такие же. Покупайте не больше 1 литра местной ракии или 2 литров знаменитого Вранаца. Сигареты можно ввезти в количестве 200 шт или 250 г табака или 50 сигар. Цены на сигареты здесь стартуют от 1,5 евро за пачку.</p>

        <h5>Личные вещи</h5>
        <p>С 2017 года изменились таможенных правила по ввозу в страну вещей для личного пользования. Их суммарная стоимость не должна превышать 75 евро, а все что свыше этой суммы - должно быть задекларированно и оплачены соответствующие пошлины. Особенно это касается вещей, доставляемых в страну почтой. Стоимость вещей в чемоданах в аэропорту не пересчитывают.</p>
    </div>
</section>

<section id="transport">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Транспорт в Черногории представлен в основном автобусами и маршрутными такси, которые ходят по всей стране и в ближайшие государства. Также есть одна железнодорожная ветка, соединяющая Бар с Подгорицей, Колашиным, а далее уходящая в Сербию. В основном поезда используют для недорогого путешествия в Сербию. Или же как туристический вид транспорта, ведь путь проходит по самым живописным горным ущельям страны.</p>

                <h5>Автобусы</h5>
                <p>Городские автобусы ходят с перерывом в среднем в 30 мин. Некоторые рейсы курсируют только по городу, а некоторые идут и по ближайшим поселкам. В те населенные пункты, что лежат вдали от основного маршрута, идут городские маршрутные такси. Отходят они от главной автобусной станции города, но, к сожалению, достаточно редко. Доехать до небольших поселков можно от 2 до 8 раз в день.</p>
                <p>Стоимость проезда зависит от маршрута, в пределах города это 0,75 евро, в черте общины 1,5 евро.</p>
                <p>Междугородные автобусы ходят регулярно по расписанию, которое можно посмотреть на автобусной станции в каждом городе. Автобусные маршруты соединяют собой все города страны, именно они являются основным видом транспорта и пользуются регулярным спросом у населения. Скорость движения в западной части страны часто зависит от того, идет ли автобус через паром или объезжает бухту. На остальной территории скорость средняя и зависит от дорожных условий. Время в пути на автобусе между Тиватом и Будвой 40 минут, между Будвой и Баром 1 час, между Будвой и Подгорицей 2 часа.</p>
                <p>Билеты можно приобрести заранее в кассе автовокзала или при посадке у водителя. Заранее обычно приобретаются билеты дальнего следования в Белгард, Сараево и другие, а по стране люди берут билет сразу у водителя. При покупке в кассе станции цена будет немного выше.</p>

                <h5>Паром</h5>
                <p>Через Боко-Которскую бухту организовано паромное сообщение, которое экономит автомобилистам около 1 часа времени. Паромы ходят в самом узком месте бухты рядом с проливом Вериге. На стороне Тивата корабли причаливают в местечке Лепетане, со стороны Херцег-Нови можно попасть на борт в селе Каменари.</p>
                <p>Всего работают ежедневно 5 кораблей, которые обеспечивают весь пассажиропоток. В сезон они ходят практически без перерыва, время ожидания будет зависеть от количества машин в очереди. В зимний период паромы отправляются по мере загрузки. Переправиться на другую сторону залива можно и ночью, но в этом случае ждать парома можно и 2 часа, чаще проще объехать бухту по периметру.</p>
                <p>Время в море около 10 минут. Стоимость проезда 4,5 евро за легковой автомобиль, 1,5 евро за мотоцикл, пешеходам бесплатно.</p>

                <h5>Такси</h5>
                <p>Самым распространенным транспортом в городах является такси. Именно оно может быстро доставить туриста в любое место, также предлагает услуги трансфера в аэропорт и из него. В каждом городе есть своя фирма государственного такси с коротким номером телефона и многочисленные частники.</p>
                <p>Пользоваться лучше официальной фирмой с диспетчерской и единым номером заказа. Частные машины часто завышают цену поездки в несколько раз. Особенно такая проблема характерна для Будвы. Там лучше сразу договариваться о конкретной цене поездки, особенно если надо доехать до Бечичи и других ближайших населенных пунктов.</p>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость проезда</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Автобус в городе</div>
                                <span>от 0.75 евро</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Автобус пригородный</div>
                                <span>от 1.50 евро</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Автобус междугородный</div>
                                <span>от 2.50 евро</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>от 1.60 евро</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Паром</div>
                                <span>4.50 евро за автомобиль</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Черногория. Паромная переправа" src="https://i.ytimg.com/vi/9uRgLXHxurM/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/9uRgLXHxurM?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Черногория. Паромная переправа<br>© САМОХОДОМ Жизнь в путешествии!!! 2016</figcaption>
                </figure>

            </div>
        </div>
    </div>
</section>

<section id="auto" class="bg-white">
    <div class="container">
        <h2>Автомобиль</h2>
        <p>Для аренды автомобиля в Черногории понадобятся права международного образца и документ, подтверждающий личность. При пересечении границы соседних государств необходимо будет кроме этого предъявить договор на аренду транспортного средства, документы на него и международную страховку.</p>
        <p>Полиция на дорогах чаще всего останавливает за превышение скорости или за выключенные фары ближнего света или ходовые огни.</p>
    </div>
</section>

<section id="health">
    <div class="container">
        <h2>Здравоохранение в Черногории</h2>
        <p>Медицина в Черногории на достаточно низком уровне. Здесь лучше не болеть, а если заболел - искать специалистов придется скорее всего в столице. В каждом крупном городе есть 1 больница, где представлены основные врачи, но любой серьезный случай рассматривают только в Подгорице. Если не справляются и там, то пациента везут в Белград.</p>
        <p>Для получения медицинской помощи любому туристу необходимо иметь туристическую страховку. Даже при путешествии в безвизовый период ее следует оформить во избежание проблем с местной медициной. Здесь любая помощь туристу оплачивается и часто стоит очень дорого.</p>
        <a href="https://medical.account.travel" class="btn btn-outline-success mb-3">Оформить туристическую страховку</a>

        <p>В некоторых городах страны воду пить можно из-под крана, она чистая в Херцег-Нови, Подгорице, Никшиче, Которе и Тивате. В Будве для питья рекомендуют кипятить воду или покупать бутилированную.</p>
        <p>Инфекционные заболевания в стране в высокой концентрации не зарегистрированы. Стоит быть аккуратным в летний период, так как часто на побережье случаются вспышки ротовируса, а также беречь себя от солнечных ожогов и переохлаждения в прохладной воде Адриатического моря.</p>
        <p>В горах нужно соблюдать элементарные меры безопасности, не уходить одному с троп, следить за прогнозами синоптиков и не переоценивать свои силы на горнолыжных склонах.</p>
    </div>
</section>

<section id="communication" class="bg-white">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h5>Мобильная связь</h5>
                <p>Мобильная связь и интернет имеют хорошее покрытие по побережью, но могут плохо работать в горах. Можно пользоваться роумингом, но для экономии лучше купить местную сим-карту, которая предназначена для туристов. Она продается в любом киоске или магазине.</p>
                <p>В стране есть три крупных оператора связи:</p>
                <ul>
                    <li>М-тел - <a href="http://mtel.me/en/private" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Теленор - <a href="https://www.telenor.me/en/consumer/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Т-ком - <a href="https://www.telekom.me/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>У каждого из них есть тариф для туристов. Карту можно купить за 5 евро, пополнять в любом магазине и на заправке.</p>
                <p>Код Черногории +382, при звонке внутри страны он заменяется на 0. Номер состоит из кода оператора и еще 6 цифр. 069, 068 и 067 - коды мобильных операторов.</p>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-old-phone"></i>
                        <span class="h6"><b>Полезные телефоны</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Международный экстренный телефонный номер</div>
                                <span>112</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>122</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная служба</div>
                                <span>123</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая помощь</div>
                                <span>124</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-light-bulb"></i>
                        <span class="h6">
                            <b>Электросеть</b>
                        </span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <nobr>230 В</nobr>,
                                    <nobr>50 Гц</nobr>. Используются разъемы
                                    <a href="/journal/electric-sockets.html#typeF">типа F</a>
                                </div>
                                <span class="text-right">
                                    <img src="/img/electric/type_f.svg" style="width:100px; max-width:100%;">
                                </span>
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
        <p>Несмотря на невысокий уровень жизни, цены в Черногории мало отличаются от европейских. Стоимость проживания в сезон начинается от 50 евро за ночь, пик цен приходится на июль и август. Аренда автомобиля эконом-класса от 45 евро, среднего класса от 60 евро. Правда во многих небольших компаниях не требуют оставлять залог, что привлекает к ним дополнительных туристов.</p>
        <p>Цены на обед ресторане стартуют от 5 евро за бизнес-ланч в дешевом кафе и легко могут доходить до 100 евро в крупных ресторанах в центре Будвы. В среднем основное блюдо стоит 15 евро, закуска от 3 евро, также как и супы, а десерты начинаются от 2,5 евро. Чаще всего это традиционные местные блины с бананами и нуттелой.</p>
        <p>Фастфуд здесь представлен только небольшими палатками на набережной, предлагающими кусок пиццы по 1,5 евро, плескавицу в булке за 2,5 евро, блины по 1 евро и вкусное мороженное по 0,6 евро за шарик.</p>
    </div>
</section>

<section id="sight" class="bg-white">
    <div class="container">
        <!--Блок экскурсий-->
        <?= $this->render('_excursions', $country) ?>
    </div>
</section>