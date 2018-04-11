<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-lg-6">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Словения</h1>
                    <div class="lead">
                        <b>Столица</b>: Любляна<br>
                        <b>Официальный язык</b>: словенский<br>
                        <b>Валюта</b>: EUR - евро<br>
                        <b>Территория</b>: 20 253 км²<br>
                        <b>Население</b>: 2.06 млн человек<br>
                        <b>Часовой пояс</b>: GMT +1. Разница с Астаной 5 часов
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="SLOVENIA 720" src="https://i.vimeocdn.com/video/577907170_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/147246156?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Dee Kramer, 2015</figcaption>
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
                <p>Словения - маленькая страна, расположенная на северо-западе Балканского полуострова. Ее соседями являются Австрия, Италия, Хорватия и Венгрия. Она имеет выход к Адриатическому морю в районе Триестского залива. В Словению приезжают понежиться в термальных водах местных курортов, покататься на лыжах или искупаться в море, заплатив за это значительно меньше, чем в соседних странах западной Европы.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Изучению Словении стоит посвятить не менее 2 недель, ведь чтобы посмотреть все замки, старинные города с черепичными крышами, поправить здоровье в термах и позагорать на пляжах Порторожа потребуется достаточно много времени. Несмотря на скромные размеры, здесь всегда найдется чем заняться. На местных курортах можно встретить немцев, австрийцев, итальянцев и французов, предпочитающих проведение отпуска более экономично, но не менее комфортно, чем у себя на родине.</p>
                <p>Начать путешествие стоит в Любляне - столице и главном городе Словении. Продолжить знакомство с архитектурой стоит в Мариборе, Целе или Крани, в каждом из которых сохранилось большое количество, замков, дворцов и соборов. Кроме архитектурных красот, страна привлекает природными достопримечательностями. Известное озеро Блед и менее популярное, но не уступающее в живописности Бохинь, песчаные пляжи Порторожа и вершины альп, все это делает страну такой привлекательной для туристов.</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Непутевые заметки. Словения. Выпуск от 09.07.2017" src="https://i.ytimg.com/vi/ljV0ob2WbT4/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/ljV0ob2WbT4?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Непутевые заметки. Словения. Выпуск от 09.07.2017<br>© Первый канал 2017</figcaption>
                </figure>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Словения Бохинь" src="https://i.ytimg.com/vi/kT00DboA90A/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/kT00DboA90A?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Словения Бохинь<br>© KakNamTam.RU 2015</figcaption>
                </figure>
            </div>
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
        <p>Этнический состав Словении не сильно разнообразен, основную массу жителей страны составляют словенцы, их 80%. Остальные народности в основном представлены выходцами с Балканского полуострова, переехавшими в Словению во времена Югославии. Хорватов здесь 2.8%; сербов - 2.4%; боснийцев - 1.4%; венгров - 0.7%; итальянцев - 0.5%; черногорцев - 0.2%.</p>
        <p>Продолжительность жизни в Словении находится на очень высоком уровне, цифры совпадают с общим уровнем Западной Европы. Мужчины, рожденные в Словении живут до 76,6 лет, а женщины 83 года.</p>
        <?= $this->render('_population') ?>
    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h2>Культура и традиции</h2>
                <p>Культура Словении ярка и необычна, много общего у нее с ее балканскими соседями - хорватами, но и уникальных черт не мало. В Архитектуре просматривается итальянское и австро-венгерское влияние, особенно интересно строение местных церквей, сочетающих в себе готику и барокко. Города близкие к Адриатике и итальянской границе построены в традиционном для этих мест стиле, это каменные здания, черепичные крыши и очень много зелени. А площади больших городов украшают здания, характерные для австрийских городов. Их застройка велась в XIX в., в период владычества Австро-Венгрии.</p>
                <p>Праздники в Словении празднуют обширно, самые любимые - это Рождество с Новым годом и весенняя Пасха, ведь большинство населения страны католики. Кроме религиозных праздников здесь интересно побывать в феврале на днях словенского поэта Франце Прешерна, когда проводят выставки, чтения, спектакли и другие культурные мероприятия. А летом стоит приехать в Любляну и на озеро Блед на знаменитые музыкальные фестивали. </p>
            </div>
            <div class="col-lg-5">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Праздники и официально нерабочие даты:</h6>
                        <ul>
                            <li>1 и 2 января - Новый год.</li>
                            <li>8 февраля – День Прешерна (День словенской культуры)</li>
                            <li>27 апреля – День восстания против оккупации (День освободительного фронта)</li>
                            <li>апрель-май – Пасха</li>
                            <li>апрель-май – Первый понедельник после Пасхи</li>
                            <li>1-2 мая – Праздник труда</li>
                            <li>25 июня – День государственности</li>
                            <li>15 августа – Вознесение Марии (Успение Богородицы)</li>
                            <li>31 октября – День реформации </li>
                            <li>1 ноября – День поминовения усопших (День Всех Святых)</li>
                            <li>25 декабря – Рождество</li>
                            <li>26 декабря – День независимости и единства</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="mt-3">Кухня</h5>
        <div class="row">
            <div class="col-lg-7">
                <p>Кухня Словении в первую очередь мясная, выход к морю здесь слишком мал, чтобы сильно повлиять на пристрастия всей страны. Самые популярные блюда здесь - это свиные колбаски, штрукли - мясные шарики в тесте и копченный окорок - пршут. На первое подают горячие густые супы, а на десерты знаменитые сладости - гибаницы, это пирожки из слоеного теста, начинка может быть какой угодно. Чаще всего можно купить гибаницы с яблоками, орехами, изюмом, творогом. Кроме традиционных блюд здесь распространены блюда, относящиеся к средиземноморской кухне, в пищу используют большое количество оливок и оливкового масла, озерную рыбу и морепродукты, сыры и молочные продукты. У каждого региона свои специалитеты.</p>
            </div>
            <div class="col-lg-5">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Словения. Маленькая страна - большая кухня 🍳 Планета вкусов 🌏 Моя Планета" src="https://i.ytimg.com/vi/Wgo0CxV2xCU/hqdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/Wgo0CxV2xCU?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Словения. Маленькая страна - большая кухня<br>© Моя Планета 2017</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="climate">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Климат</h2>
                <p>Климат в Словении умеренный, его можно разделить на 3 зоны, это морская территория, центр страны и Альпы. Лето везде с комфортной температурой около +25 градусов, сильной жары, как у южных соседей здесь не бывает. Зимы снежные, мягкие, минимальная температура -10 градусов. Сезон в Альпах длится с ноября по апрель. После этого туристы перемещаются с горнолыжных курортов на Адриатическое море, вода в котором прогревается к июню, и купаться можно до октября. Особенно приятно здесь в бархатный сезон, количество туристов идет на спад, а температура воздуха и воды все еще очень приятна.</p>
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
                <p>Гражданам Казахстана для посещения страны необходимо оформить <strong>Шенгенскую визу</strong>. По ней также можно посетить соседнюю Хорватию, которая пока не входит в Шенгенское соглашение, для этого необходимо будет запросить визу с мультивъездом.</p>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <p><strong>Важно! </strong> Посольства Словении в Казахстане нет, поэтому документы на визу можно подать в посольстве Венгрии в Астане или в генеральном консульстве Венгрии в Алматы</p>
                    </div>
                </div>
                <p>Для получения шенгенской визы необходимо обратиться в венгерское посольство в Казахстане и предоставить им необходимый пакет документов. Предварительно нужно будет заполнить анкету на каждого путешественника, включая детей, сделать подходящие фотографии на белом или светло-сером фоне и оформить медицинскую страховку. Посмотреть полный список необходимых документов можно на официальном сайте.</p>

                <h5>Въезд в страну</h5>
                <p>Прямые рейсы в Любляну из Астаны не летают, можно воспользоваться рейсами с одной пересадкой в Амстердаме, Франкфурте-на-Майне, Стамбуле или Москве. Общее время в пути вместе с пересадкой будет от 8 до 10 часов. Некоторые компании предлагают более дешевые билеты с долгими стыковками, в этом случае добираться до Словении можно более суток.</p>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Шенгенская виза</div>
                                <span></span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=улица+космонавтов,+62+010000+астана+казахстан&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Венгрии</h5>
                        <p>Астана, улица Космонавтов, 62</p>
                        <p><i class="icon-phone"></i> +7 (717) 255 0323</p>
                        <p><i class="icon-link"></i> <a href="https://asztana.mfa.gov.hu/rus" target="_blank" rel="nofollow">asztana.mfa.gov.hu</a></p>
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
                                <div>Любляна - Астана</div>
                                <span>Каждый день</span>
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
        <p>Словения относится к благополучным западным странам с высоким уровнем безопасности. При ее посещении достаточно соблюдать элементарные меры предосторожности, чтобы не попадать в неприятные ситуации. Следите за ценными вещами, не оставляйте без внимания на столах кафе телефоны и фототехнику, не носите с собой большие суммы наличными, тогда отдых пройдет максимально спокойно.</p>

        <h5>Безопасность на дорогах Словении</h5>
        <p>Дорожное движение в Словении становится все более безопасным. По статистике количество аварий каждый год идет на убыль, особенно активно снижается количество пострадавших и погибших. В основном происходят мелкие столкновения, не имеющие серьезных последствий.</p>
        <p>За соблюдением правил дорожного движения очень пристально следит полиция, поэтому любителей превышать скорость и ездить в нетрезвом виде здесь практически не осталось. Хорошо работает система штрафов, за мелкие нарушения придется заплатить от 40 евро, за крупные штрафы достигают 1500 евро.</p>
        <p>При аварии и любых других проблемах на дороге нужно звонить по номеру 987.</p>

        <h5>Стихийные бедствия и природные опасности в Словении</h5>
        <p>Стихийные бедствия в стране встречаются редко, в горных регионах бывают сходы лавин, в долинах иногда случаются наводнения. Больше всего надо опасаться клещей при прогулках по лесу, носить закрытую одежду и по возможности привиться от клещевого энцефалита. От комаров хорошо защищают любые репелленты. Летом стоит беречь кожу от солнечных ожогов, которые часто возникают у неопытных туристов на морских курортах.</p>
    </div>
</section>

<section id="custom" class="bg-white">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <h5>Валюта</h5>
        <p>Ввоз и вывоз в Словению иностранной или местной валюты не ограничен, декларированию подлежит сумма свыше 13500 евро. Цифры изменили при принятии последних поправок к таможенному законодательству в 2017 году.</p>

        <h5>Спиртное и сигареты</h5>
        <p>Сигареты разрешены к провозу лицам старше 17 лет, не более чем по 200 шт на человека. Но так как в стране идет активная борьба с курением, то разрешенных для этого мест почти не осталось. Кроме сигарет можно ввезти табака 250 гр, 100 сигарилл или 50 сигар. Крепкий алкоголь ограничен 1 л на человека, менее 22 градусов 2 литра, 4 литра вина или 16 литров пива.</p>

        <h5>Чай, кофе, туалетная вода, ювелирные украшения</h5>
        <p>В Словению можно завезти  100 г чая,  500 г кофе, 50 мл духов или 250 мл туалетной воды. Золото и драгоценности не более чем на 500 г. На вывоз антиквариата и других культурных ценностей должно быть оформлено разрешение. Количество личных вещей, не облагаемое пошлинами, ограничено 430 евро на человека.</p>

        <h5>Tax Free</h5>
        <p>Вернуть НДС в размере 22% от покупок можно в пунктах возврата Tax Free в аэропорту или на автомобильных границах. Для этого на руках должны быть чеки на сумму свыше 50 евро, сами товары в упаковке и заполненные магазином бумаги. На границе ставят в документы штамп, а выдача денег происходит в офисе Global Blue по возвращению домой.</p>
    </div>
</section>

<section id="transport">
    <div class="container">
        <h2>Транспорт</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Наиболее популярным транспортом в Словении считаются автобусы. На них можно пересечь страну вдоль и поперек. Маршрутная сеть охватывает все города и небольшие деревни, а также морские и горнолыжные курорты. Автобусы отправляются с автовокзалов, которые расположены в центре города. Все машины обслуживаются фирмой Avtobusna Postaja Ljubljana и оборудованы удобными сидениями, кондиционерами и защитой от солнца на окнах. Билеты на любой автобус можно приобрести у водителя, в кассе автовокзала, в специальном терминале или на <a href="https://www.ap-ljubljana.si/en/" target="_blank" rel="nofollow">официальном сайте</a>.</p>

                <h5>Стоимость проезда</h5>
                <p>Билеты на автобус стоят недорого, от столицы до Целе можно доехать за 7.5 евро, а до морского курорта Порторож 17.1 евро, а поездка в Марибор обойдется в 11.4 евро.</p>
                <p>В городе проще всего перемещаться на местных автобусах. Они курсируют по столице и всем крупным городам страны. Стоимость поездки начинается от 1.2 евро. Билеты можно купить в специальных киосках или у водителя. Жители столицы чаще всего пользуются пополняемыми картами Urbana, которые можно купить в специальных терминалах и там же пополнить. Время движения городского транспорта с 3:00 до 0:00. Из-за небольшого ночного промежутка ночные автобусы распространения не получили.</p>

                <h5>Поезда</h5>
                <p>Между крупными городами Словении проложена сеть железных дорог. Передвигаться на поездах и электричках очень выгодно. Билеты можно купить на их <a href="http://www.slo-zeleznice.si/en/" target="_blank" rel="nofollow">сайте</a>, а также в специальных автоматах или в кассах вокзалов. Стоимость поездки из столицы до знаменитого озера Блед 6.6 евро, до Крань 2.6 евро, а до солнечного Копера 9.6 евро.</p>

                <h5>Такси</h5>
                <p>Такси - популярный вид транспорта, который не так дорог, как в других европейский столицах. Посадка стоит всего 2 евро, а цена за километр составит от 1.2 евро в зависимости от города. В ночное время тарифы повышаются, как и в праздничные дни.</p>
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
                                <div>Автобус</div>
                                <span>1,2 евро</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Карта Urbana</div>
                                <span>от 2 евро</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="auto" class="bg-white">
    <div class="container">
        <h2>Автомобиль</h2>
        <div class="row">
            <div class="col-lg-6">
                <p>Путешествовать по Словении на автомобиле очень приятно, свобода передвижения, качественные дороги и небольшой размер страны позволят осмотреть ее за несколько дней.</p>

                <h5>Аренда авто</h5>
                <p>Взять машину в аренду здесь можно у любой из огромного числа фирм. Здесь представлены как местные конторы, так и крупные мировые гиганты. Правила аренды у всех примерно одинаковы. Вам должно быть больше 21 года, а вашим правам больше года. Стоимость машины начинается с 25 евро за сутки, а блокируемый на карте депозит с 500 евро за машину.</p>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Путешествие на машине по Европе. Дороги Словении. Любляна. Slovenia 2016" src="https://i.ytimg.com/vi/E2njxPIcY2U/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/E2njxPIcY2U?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Дороги Словении. Любляна<br>© Evgen TV 2016</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health">
    <div class="container">
        <h2>Здравоохранение в Словении</h2>
        <p>Словенская медицина - лучшая из всех балканских стран на сегодня, она по качеству приближается к Западной Европе, но пока еще значительно дешевле. В любой клинике страны можно получить медицинское обследование и необходимую помощь за небольшие деньги, а в экстренных случаях по медицинской страховке. Многие приезжают сюда специально для получения качественного лечения, когда это невозможно в своей стране.</p>
        <p>Кроме медицинских центров пользуются популярностью и различные курорты с минеральными водами. Самым популярным из них считается Рогашка Слатина, здесь поправляют здоровье все жители Балкан, а местная вода Донат Магний прописывается как лекарственное средство. Богатый магнием источник полезен при беременности, заболеваниях сердечно-сосудистой и нервной системы. На других курортах страны можно восстановить опорно-двигательный аппарат, решить проблемы со спиной, суставами и вылечить головные боли. Для тех, кто хочет просто отдохнуть и восстановить силы, курорты на минеральных источниках предлагают веллнес-программы, массажи, обертывания, бассейны с лечебной водой и другие расслабляющие процедуры.</p>

        <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
    </div>
</section>

<section id="communication" class="bg-white">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <h5>Мобильная связь</h5>
                <p>У Словении 4 лидера операторов мобильной связи</p>
                <ul>
                    <li>Telekom Slovenije - <a href="http://www.telekom.si/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Telemach - <a href="https://telemach.si/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>A1 Slovenija - <a href="https://www.a1.si/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                    <li>Izimobil - <a href="https://www.izimobil.si/" target="_blank" rel="nofollow">перейти на сайт</a></li>
                </ul>
                <p>У каждого из них есть туристические тарифы не требующие резиденции. Для подключения сим-карты потребуется только паспорт. Купить симку можно в любом магазине или офисе сети. Пополнить счет на кассе супермаркета, в киосках или на заправках. В среднем карта стоит 10 евро, разговор и другими странами от 0.9 евро за минуту.</p>
                
                <h5>Интернет</h5>
                <p>При подключении специального пакета можно настроить работу мобильного интернета, это значительно выгоднее, чем пользоваться обычными звонками. 1 Гб интернета будет стоить 2 евро в сутки. Также можно подключится к точкам доступа WI-Fi в центре Любляны с бесплатным интернетом в течение часа. Или в кафе, ресторанах, лобби отеля без ограничения по времени.</p>
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
                                <div>Единый экстренный телефонный номер</div>
                                <span>112</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>113</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая и Пожарная</div>
                                <span>112</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Помощь на дорогах</div>
                                <span>987</span>
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
                                    <nobr>230 Вт</nobr>, <nobr>50 Гц</nobr>, используется <a href="/journal/electric-sockets.html#typeF">разъем типа F</a>
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
        <div class="row">
            <div class="col-lg-6">
                <p>Цены в Словении значительно ниже остальной части Западной Европы, для бюджетных путешественников здесь есть хостелы с ценой 10 евро за кровать в общей комнате. Цены на нормальные отели начинаются с 40 евро за номер. Поселится достойной 4-ке с хорошим сервисом можно за 120 евро, а 5-ке за 210 евро. На озере Блед предлагаются в аренду уютные шале в альпийском стиле за 200-250 евро/ночь.</p>
                <p>Цены в кафе и магазинах также вполне приемлемы. Поесть в любом кафе можно за 8-10 евро. В эту стоимость входит одно блюдо, например, жареная рыба с картошкой или итальянская паста и бокал пива или другой напиток. Посидеть в ресторане и вкусно поужинать с бокалом местного вина обойдется на двоих в 40 евро, а перекусить на ходу можно в Макдональдсе, Сабвее, Бургер Кинге и других мировых сетях начиная от 5 евро за сет или 3 евро за сендвич. </p>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Словения. Магазины Любляны. Цены на Продукты в Словении" src="https://i.ytimg.com/vi/9ru-Tv65NX8/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/9ru-Tv65NX8?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Магазины Любляны. Цены на Продукты в Словении<br>© Хочу Так Жить 2016</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="sight" class="bg-white">
    <div class="container">
        <!--Блок экскурсий-->
        <?= $this->render('_excursions', $country) ?>
    </div>
</section>