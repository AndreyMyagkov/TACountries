<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center space-lg pb-0">
            <div class="col-lg-6">
                <h1 class="display-4 no-wrap">Германия</h1>
                <div class="lead">
                    <b>Столица</b>: Берлин<br>
                    <b>Официальный язык</b>: немецкий<br>
                    <b>Валюта</b>: EUR — евро<br>
                    <b>Территория</b>: 357 021 км²<br>
                    <b>Население</b>: 82.2 млн человек<br>
                    <b>Часовой пояс</b>: UTC+1. Разница между Германией и Астаной –5 часов. Осуществляется переход на летнее/зимнее время
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow mb-0">
                        <img alt="Germany in motion 2016 / Deutschland in Bewegung (4K Timelapse & Hyperlapse)" src="https://i.vimeocdn.com/video/583688525_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/176443116?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-light text-right">© Maxim Usov, 2016</figcaption>
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
                <p>Федеративная Республика Германия — европейское государство, в составе которого насчитывается 16 административно-территориальных единиц — федеральных земель.</p>
                <p>Германия граничит с Данией, Чехией, Польшей, Швейцарией, Австрией, Францией, Бельгией, Нидерландами и Люксембургом. Имеет выход к Балтийскому и Северному морям.</p>
                <p>В Германии протекает множество рек, самые крупные: Дунай, Рейн, Везер, Одер и Эльба. Самое большое озеро — Боденское (площадь 540 км², глубина 250 м).</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>
            </div>
        </div>
        <div class="row">
            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Германия. Интересные факты о Германии." src="https://i.ytimg.com/vi/_7Zytt5SZek/maxresdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/_7Zytt5SZek?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Германия. Интересные факты о Германии.<br>© CoolTimes 2016</figcaption>
            </figure>

            <figure class="figure d-block col-lg-6">
                <div class="video-cover box-shadow">
                    <img alt="Германия. Октоберфест, Мюнхен 🍳 Планета вкусов 🌏 Моя Планета" src="https://i.ytimg.com/vi/WhExkSrkNx4/hqdefault.jpg" class="bg-image"/>
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/WhExkSrkNx4?autoplay=1&rel=0&showinfo=0&start=21" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Германия. Октоберфест, Мюнхен 🍳 Планета вкусов 🌏 Моя Планета<br>© Моя Планета 2016</figcaption>
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
            <li class="nav-item"><a class="nav-link" href="#safety">Безопасность</a></li>
            <li class="nav-item"><a class="nav-link" href="#custom">Таможня</a></li>
            <li class="nav-item"><a class="nav-link" href="#transport">Транспорт</a></li>
            <li class="nav-item"><a class="nav-link" href="#auto">Авто</a></li>
            <li class="nav-item"><a class="nav-link" href="#health">Здравоохранение</a></li>
            <li class="nav-item"><a class="nav-link" href="#communication">Связь</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="population">
    <div class="container">
        <h2>Население</h2>
        <p>В стране более 90% населения — этнические немцы, также здесь проживают чехи, австрийцы, турки, сербы, греки, датчане. Большинство немцев исповедуют христианство — более 65%, мусульман около 5%.</p>
        <p>Мужчин и женщин примерно поровну. Средняя продолжительность жизни высокая - 81 год. Для мужчин она составляет 78 лет, а для женщин - 83 года.</p>

        <?= $this->render('_population') ?>
    </div>
</section>

<section id="culture" class="bg-white">
    <div class="container">
        <h2>Культура и традиции</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p><i class="icon-link"></i> Федеральное министерство Германии по делам семьи  -  <a href="http://www.bmfsfj.de/" target="_blank">bmfsfj.de</a></p>
                <p>Богатое историческое прошлое страны получило яркое отражение в культурном наследии Германии, являющейся крупнейшей неотъемлемой частью мировой культуры, будь то: архитектура, киноклассика (например, эпоха немого кино), классическая музыка (Вагнер, Бетховен, Бах, Брамс), современная музыка, философия (Гегель, Ницше, Кант), литература, театр, живопись.</p>
                <p>В стране насчитывается более 650 музеев и галерей искусств, более 300 театров, и их число только растёт.</p>
                <p>К самым известным и посещаемым музеям можно отнести Дрезденскую картинную галерею, Исторический музей в Берлине, Германский музей в Мюнхене и другие.</p>
                <p>Немцы, особенно в небольших провинциальных городках, очень ценят германские традиции и обычаи и неукоснительно им следуют, что выражается в музыке и танцах, местной кухне, традиционных костюмах, национальных праздниках и гуляниях, которые ежегодно проводятся сотнями по различным поводам и собирают тысячи зрителей. Так, одним из самых известных и масштабных событий является Октоберфест – фестиваль, посвященный пиву — главному немецкому напитку, он проходит Мюнхене в течение 16 дней.</p>
            </div>

            <div class="col-md-4">
                <figure class="figure d-block">
                        <div class="video-cover box-shadow">
                            <img alt="Немецкая кухня для гурманов" src="https://i.ytimg.com/vi/o00cezIYm1s/maxresdefault.jpg" class="bg-image"/>
                            <div class="video-play-icon">
                                <i class="icon-controller-play"></i>
                            </div>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/o00cezIYm1s?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                    <figcaption class="figure-caption text-right">Немецкая кухня для гурманов<br>© DW (Russian) 2015</figcaption>
                </figure>

                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Праздничные и нерабочие дни:</h6>
                        <ul>
                            <li>1 января – Новый год</li>
                            <li>25-28 марта — Пасха</li>
                            <li>5 мая — Вознесение Господне</li>
                            <li>30 апреля — Большой молитвенный день</li>
                            <li>16 мая — Святая Троица</li>
                            <li>3 октября — День германского единства</li>
                            <li>24-26 декабря — Рождество</li>
                        </ul>
                    </div>
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
                <p>На севере государства климат морской, в центральной части умеренный, к югу переходит в умеренно континентальный, вследствие чего погода довольно переменчива.</p>
                <p>Средние летние температурные показатели составляют от +14 °С до +22 °С, средние зимние — от -5 ° до +4 °С.</p>
                <p>Среднемесячный уровень осадков около 60-80 мм.</p>
                <p>Неблагоприятные погодные явления, такие как: сильные морозы, жара, засухи или штормы, достаточно редки.</p>
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
                <p>Гражданам Республики Казахстан для поездки в ФРГ требуется виза — шенгенская или национальная германская виза.</p>
                <p>Для оформления визы туриста (в консульстве или через турагентство) помимо стандартного пакета документов (паспорт, анкета, фото) необходимо предоставить:</p>
                <ul>
                    <li>подтверждение факта размещения в Германии (бронь гостиницы или пансиона)</li>
                    <li>оплаченные в оба конца билеты (на самолет или автобусные)</li>
                    <li>подтверждение платежеспособности на все время пребывания в ФРГ из расчета 50 евро в сутки на человека (справка с места работы о заработной плате, выписка о состоянии банковского счёта</li>
                </ul>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Шенгенская виза</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <iframe src="https://www.google.com/maps/embed/v1/search?q=астана,+ул.+космонавтов,+62&key=AIzaSyBy4GyZglz_6mltKrjCVr0S1Vb33LHTJf4" allowfullscreen class="card-img-top w-100"></iframe>
                    <div class="card-body">
                        <h5>Посольство Германии</h5>
                        <p>Астана, ул. Космонавтов, 62</p>
                        <p><i class="icon-phone"></i> +7 (7172) 79-12-00</p>
                        <p><i class="icon-link"></i> <a href="http://www.kasachstan.diplo.de/Vertretung/kasachstan/ru/02-die-botschaft/0-botschaft.html" target="_blank">www.kasachstan.diplo.de</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="safety">
    <div class="container">
        <h2>Безопасность</h2>
        <p>В Германии наблюдается рост преступности, а именно мелких краж. В 2017 году отмечались случаи вооруженного нападения психически нездоровых людей. В связи с этим, туристам необходимо придерживаться ряда правил:</p>
        <ul>
            <li>соблюдать бдительность при посещении столицы и крупных городов (особенно во время фестивалей и праздников)</li>
            <li>избегать посещения криминогенных районов, трущоб</li>
            <li>не оставлять без присмотра личные вещи</li>
            <li>не носить при себе крупные денежные суммы, хранить их в сейфах отелей</li>
            <li>соблюдать бдительность около банкоматов при обналичивании денежных средств</li>
            <li>избегать посещение митингов, демонстраций</li>
        </ul>
    </div>
</section>

<section id="custom" class="bg-white">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <p><i class="icon icon-link"></i> Сайт таможенной службы Германии - <a href="http://www.bundesfinanzministerium.de/" target="_blank">bundesfinanzministerium.de</a></p>

        <h5>Спиртное и сигареты</h5>
        <p>Лица старше 17 лет имеют право на беспошлинный ввоз сигарет количеством до 200 шт. (или 0,25 кг табака). Разрешается также провоз 16 л пива, 4 л вина и 1 л крепкого алкоголя.</p>

        <h5>Валюта</h5>
        <p>Ввозимая валюта, превышающая сумму 10 тыс. евро, подлежит декларированию.</p>

        <h5>Оружие и боеприпасы</h5>
        <p>Ввоз огнестрельного оружия, взрывчатых веществ и боеприпасов возможен только при получении разрешения соответствующего гос. органа.</p>

        <h5>Животные</h5>
        <p>Разрешен ввоз питомцев (собак, кошек, птиц,  хорьков, грызунов и рептилий) осуществляется через соответствующие пункты контроля при наличии специального вет. сертификата, возможен физический осмотр.</p>

        <h5>Предметы, запрещенные к ввозу/вывозу:</h5>
        <ul>
            <li>наркотические вещества</li>
            <li>пиротехника (в т. ч. фейерверки)</li>
            <li>холодное оружие</li>
            <li>необработанные алмазы (без специального разрешения)</li>
            <li>мясо и мясные продукты (за исключением детского питания)</li>
            <li>молоко и молочные продукты (за исключением детского питания)</li>
            <li>яйца</li>
            <li>мёд</li>
            <li>поддельные товары (часы, электроника, компакт-диски с нелицензированными программами)</li>

        </ul>

    </div>
</section>

<section id="transport">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>В столице и крупных германских городах сеть общественного транспорта отлично развита: есть метро, городские электрички, трамваи и автобусы. Тарифы разнообразные, в зависимости от планируемого количества поездок и времени пребывания в стране можно подобрать максимально выгодный вариант: например, единый проездной на месяц обойдется в 40 евро, разовый билет стоит 2 евро.</p>
                <p>Также, довольно распространено такси — автомобиль с шашечками можно остановить на улице или заказать по телефону. Оплата производится по таксометру и согласно тарифам (в среднем поездка обойдется от 7 евро).</p>
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
                                <div>Единоразовый билет</div>
                                <span>2 EUR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Проездной на день</div>
                                <span>6 EUR</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <div>Проездной на неделю</div>
                                    <span>25 EUR</span>
                                </div>
                            </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>от 10 EUR</span>
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
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Дороги Германии считаются одними из лучших в мире как по качеству дорожного полотна, так и по уровню безопасности — это связано с тем, что в обществе соблюдение ПДД является абсолютной нормой, а несоблюдение законов и правил карается суровыми штрафами и наказаниями.</p>
                <p>Дорожное движение является правосторонним, в целом правила дорожного движения близки и понятны для туристов из Казахстана.</p>
                <p>Особенности дорожного движения в Германии:</p>
                <ul>
                    <li>максимальная скорость в населенных пунктах — 50 км/час, вне населенных пунктов — до 100 км/час, на скоростных магистралях — до 130 км/час</li>
                    <li>водитель и все пассажиры должны быть пристегнуты ремнем безопасности</li>
                    <li>дети до 12 лет могут перевозиться только в автокресле</li>
                    <li>запрещается использовать шипованные шины</li>
                    <li>категорически запрещено управление транспортным средством в состоянии алкогольного опьянения (грозит крупными штрафами, тюремным заключением и лишением прав)</li>
                    <li>проезд по дорогам страны бесплатный, за исключением экологических зон и тоннелей (Warnowtunnel и Herrentunnel)</li>
                    <li>парковка в неположенном месте грозит крупным штрафом</li>
                    <li>в Германии все автомобили подлежат страхованию</li>
                </ul>

                <h5>Аренда авто</h5>
                <p>Арендовать автомобиль туристу можно заранее в международной компании посредством сети Интернет или непосредственно на месте, обратившись в частное агентство по прокату. При себе необходимо иметь водительское удостоверение и банковскую карту для залога. В стоимость проката, как правило, включается страховка от угона и повреждений, НДС, неограниченный пробег. Дополнительно оплачиваются навигатор, детское автокресло, страховка для второго водителя. Ориентировочная стоимость проката авто С класса составляет 80-100 евро в сутки.</p>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="bg-secondary">
                        <div class="card-body">
                            <p>Граждане Республики Казахстан могут управлять автомобилем при наличии национального водительского удостоверения (при условии краткосрочного пребывания в стране).</p>
                        </div>
                    </div>
                </div>

                <div id="block-fuel"></div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Аренда авто в Германии" src="https://i.ytimg.com/vi/VyRZuIZ4HY4/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/VyRZuIZ4HY4?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Аренда авто в Германии<br>© Вероника Монблан 2017</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="health">
    <div class="container">
        <h2>Здравоохранение</h2>
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>В стране благополучная эпидемиологическая ситуация. Въезжающим туристам не требуется наличие прививочного сертификата, также не требуется какая-либо дополнительная вакцинация.</p>
                <p>Качество оказываемых медицинских услуг высокое.</p>
                <p>При поездке в Германию гражданам Республики Казахстан необходимо иметь страховой полис, охватывающий весь период пребывания в Германии. Он является гарантом оказания медицинской помощи (часто весьма дорогостоящей) при наступлении страхового случая, при этом расходы ложатся на страховую компанию.</p>
                <p>В экстренных случаях (например, при кровотечениях, потере сознания, инфаркте) необходимо вызывать скорую помощь по телефону 112.</p>
                <p>Аптеки в Германии обозначены красной буквой A (Apotheke). Режим работы аптек — с 08:00 до 19:00.</p>
                <p>Многие аптеки работают до обеда по средам и субботам. Большинство медикаментов продается только по рецепту.</p>

                <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
            </div>
            <div class="col-md-4">
                <figure class="figure d-block">
                        <div class="video-cover box-shadow">
                            <img alt="Медицина в Германии. 5 фактов." src="https://i.ytimg.com/vi/gttPmf09SMI/maxresdefault.jpg" class="bg-image"/>
                            <div class="video-play-icon">
                                <i class="icon-controller-play"></i>
                            </div>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/gttPmf09SMI?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                    <figcaption class="figure-caption text-right">Медицина в Германии. 5 фактов.<br>© Inessa Jung 2016</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section id="communication" class="bg-white">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>На рынке услуг сотовой связи в Германии главенствуют 4 крупных федеральных оператора:</p>
                <ul>
                    <li>o2 — <a href="https://www.o2online.de/" target="_blank">перейти на сайт</a></li>
                    <li>Vodafone — <a href="http://www.vodafone.de/" target="_blank">перейти на сайт</a></li>
                    <li>Deutsche Telekom — <a href="http://www.telekom.com/en/" target="_blank">перейти на сайт</a></li>
                    <li>E-Plus — <a href="https://www.handyflatrate.de/" target="_blank">перейти на сайт</a></li>
                </ul>

                <p>Они отличаются тарифами и качеством связи. E-Plus - оператор с недорогими тарифами, но сотовая связь этого оператора есть не везде.  Telekom характеризуется отличным качеством связи и повсеместным покрытием, соответственно предоставляемые услуги стоят несколько дороже.</p>
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
                                <div>Экстренная служба</div>
                                <span>112</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Справочная информация</div>
                                <span>11-830</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Справочная ж/д вокзалов</div>
                                <span>33-99-11</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Справочная аэропортов</div>
                                <span>50-81</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <?= $this->render('_electricity', $country) ?>
            </div>
        </div>
    </div>
</section>

<section id="sight">
    <div class="container">
        <!--Блок экскурсий-->
        <?= $this->render('_excursions', $country) ?>
    </div>
</section>