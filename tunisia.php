<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Тунис</h1>
                    <div class="lead">
                        <b>Столица</b>: Тунис<br>
                        <b>Официальный язык</b>: арабский <br>
                        <b>Валюта</b>: TND — тунисский динар (1 динар = 1000 миллимов)<br>
                        <b>Территория</b>: 162 155 км²<br>
                        <b>Население</b>: 11.4 млн человек<br>
                        <b>Часовой пояс</b>: UTC+1. Разница с Астаной -5 часов
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
            <div class="col-lg-8 offset-lg-2">
                <p>Тунис (Тунисская Республика) — государство, расположенное на севере Африки.</p>
                <p>Граничит с Алжиром и Ливией, омывается водами Средиземного моря на севере и востоке.</p>
                <p>Крупнейшие города в стране — Сфакс, Сус и Тунис.</p>
                <p>Около 98 % населения являются мусульманами, небольшое количество жителей исповедуют христианство.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Климат северной части страны и на прибрежных зонах субтропический средиземноморский, а в центральной части и на юге — тропический пустынный.</p>
                <p>Средиземноморский климат характеризуется дождливой зимой (средняя температура января +10 °С) и засушливым жарким летом (средняя температура августа +33 °С). В пустынях же ночью часто случаются заморозки даже осенью или весной, хотя дневная температура в это время может достигать отметки до +27°.</p>

                <div id="chart-climate"></div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="TUNISIA IN A TIMELAPSE" src="https://i.ytimg.com/vi/hs2HMcbqJ7g/maxresdefault.jpg" class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/hs2HMcbqJ7g?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">TUNISIA IN A TIMELAPSE<br>© ishoot studio 2016</figcaption>
                </figure>

                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Тунис 🍅 Мировой рынок 🌏 Моя Планета" src="https://i.ytimg.com/vi/eiUMgxNrp5Y/maxresdefault.jpg" class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/eiUMgxNrp5Y?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Тунис 🍅 Мировой рынок 🌏 Моя Планета<br>© Моя Планета 2016</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<nav id="scrollspy-navbar" class="bg-white navbar sticky-top">
    <div class="container">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item"><a class="nav-link" href="#culture">Культура и традиции</a></li>
            <li class="nav-item"><a class="nav-link" href="#visa">Въезд в страну</a></li>
            <li class="nav-item"><a class="nav-link" href="#custom">Таможня</a></li>
            <li class="nav-item"><a class="nav-link" href="#transport">Транспорт</a></li>
            <li class="nav-item"><a class="nav-link" href="#auto">Авто</a></li>
            <li class="nav-item"><a class="nav-link" href="#health">Здравоохранение</a></li>
            <li class="nav-item"><a class="nav-link" href="#communication">Связь</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="culture">
    <div class="container">
        <h2>Культура и традиции</h2>

        <p>Культура Туниса формировалась под влиянием различных цивилизаций, которые неоднократно сменяли друг друга на протяжении трёх тысячелетий. Так, в результате падения Карфагена, на территории государства утвердилась Римская империя, а памятники той эпохи сохранились на территории современного Туниса. Семь из них, в том числе раскопки Карфагена, амфитеатр в Эль-Джеме, относятся к объектам всемирного наследия ЮНЕСКО.</p>

        <p><i class="icon-link"></i> Федеральное министерство Туризма Туниса - <a href="http://www.tourisme.gov.tn/accueil.html/" target="_blank">tourisme.gov.tn/</a></p>
        <p>Тунис — религиозная страна, где почти 98% населения исповедуют ислам, что не может не отражаться на культуре, укладе жизни и традициях местных жителей. Тунисцы характеризуются спокойным и мирным нравом, они приветливы и дружелюбны.</p>


        <?= $this->render('_population') ?>

        <p>Все жители в стране носят довольно закрытую одежду: женщины надевают длинное, широкое платье в пол и платок, закрывающий
            лицо, а также множество украшений, мужская одежда — это рубахи с широкими рукавами и вышивкой, широкие расшитые брюки
            и туфли без пяток. Интересно, что вместо обручального кольца мужчины здесь носят цветок жасмина за ухом: если цветок
            справа, значит женат, если слева - холост.</p>
        <p>Иностранным туристам из уважения к местным традициям следует придерживаться ряда правил:</p>
        <ul>
            <li>принято здороваться с продавцами, служащими отелей, ресторанов и даже просто проходящими людьми</li>
            <li>нельзя фотографировать жителей без их разрешения</li>
            <li>вне территории отеля носите консервативную одежду</li>
            <li>во время священного месяца Рамадан воздержитесь от курения, еды и питья на улице</li>
            <li>нельзя отвлекать человека во время молитвенного ритуала</li>
        </ul>


        <h5>Безопасность</h5> 
        <p>В стране объявлено чрезвычайное положение, поэтому необходимо соблюдать меры повышенной безопасности:</p>  
        <ul>
            <li>избегайте скопления людей, в том числе демонстрации, митинги, забастовки</li>
            <li>всегда при себе носите паспорт</li>
            <li>настоятельно не рекомендуется посещать районы тунисско-ливийской границы</li>
            <li>не оставляйте без присмотра личные вещи</li>
            <li>ценности и крупные суммы денег оставляйте в сейфе отеля</li>
        </ul>     


        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">

                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Праздничные и нерабочие дни:</h6>
                        <ul>
                            <li>1 января – Новый год</li>
                            <li>14 января – День молодежи и революции</li>
                            <li>20 марта — День провозглашения независимости</li>
                            <li>1 мая — Праздник Труда</li>
                            <li>25 июля — День провозглашения Республики</li>
                            <li>13 августа — День женщин</li>
                            <li>15 октября — День эвакуации (в 1963 г. французские войска покинули Тунис)</li>
                        </ul>
                    </div>
                </div>
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Мусульманские праздники с плавающими датами:</h6>
                        <ul>
                            <li>Мусульманский Новый год</li>
                            <li>День рождения пророка Мухаммеда</li>
                            <li>Окончание священного месяца Рамадан</li>
                            <li>Мусульманский праздник жертвоприношения</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Едем отдыхать в Тунис. Рай на Земле. Природа, отели, питание, шопинг, развлечения" src="https://i.ytimg.com/vi/msMVgaEGe_A/maxresdefault.jpg"
                            class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/msMVgaEGe_A?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Едем отдыхать в Тунис. Рай на Земле. Природа, отели, питание, шопинг, развлечения
                        <br>© Чемоданное настроение: куда поехать 2017</figcaption>
                </figure>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Как выбирать финики в Тунисе! Базар в Тунисе." src="https://i.ytimg.com/vi/gVDWyhie9QA/hqdefault.jpg" class="bg-image"
                        />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/gVDWyhie9QA?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Как выбирать финики в Тунисе! Базар в Тунисе.
                        <br>© Виктория Ровина 2017</figcaption>
                </figure>

            </div>
        </div>

    </div>
</section>

<section id="visa" class="bg-white">
    <div class="container">

        <h2>Посещение гражданами Казахстана</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Посещение Туниса гражданами Республики Казахстан безвизовое (сроком до 90 дней).</p>
                <p>Для оформления визы туриста (в консульстве или через турагентство) помимо стандартного пакета документов (паспорт, анкета, фото) необходимо предоставить:</p>
                <p>Загранпаспорт должен быть действителен не менее полугода. на момент окончания поездки.</p>
                <p>Добраться из Казахстана в Тунис можно прямым авиарейсом, чартерным или рейсом с пересадкой (в Риме, Париже, Алжире, Стамбуле и др.). Авиакомпании, совершающие регулярные рейсы из Казахстана в Тунис: Lufthansa, Alitalia, Emirates, KLM, Air France, Qatar Airways, Turkish Airlines, Аэрофлот и др.</p>
            </div>

            <div class="col-md-4">
                <?= $this->render('_electricity', $country) ?>
            </div>

        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <p><i class="icon icon-link"></i> Сайт таможенной службы Туниса - <a href="http://www.douane.gov.tn/" target="_blank">douane.gov.tn</a></p>

        <h5>Спиртное и сигареты</h5>
        <p>Разрешено провозить сигареты в количестве до 200 штук (или 50 сигар), 1 литр крепкого алкоголя и 2 литра алкогольных напитков крепостью ниже 25°.</p>

        <h5>Валюта</h5>
        <p>Денежные средства эквивалентом свыше 10 тыс. TND (4,5 тыс. USD) подлежат декларированию. Запрещен ввоз и вывоз тунисских динаров.</p>

        <h5>Животные</h5>
        <p>Все домашние животные должны быть привиты и иметь международный медицинский сертификат.</p>

    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>Общественный транспорт представлен трамваями и автобусами. Автопарк достаточно устаревший, без кондиционеров. Проезд достаточно дешевый — от 0,58 TND, однако туристам не всегда понятен маршрут автобуса, т.к. на информационном табло указано только место назначения автобуса на арабском языке.</p>
                <p>Такси в таком случае является более удобным и понятным средством передвижения — оплата производится согласно счетчику, но ночью действуют двойные тарифы. Машину можно вызвать по телефону на ресепшене отеля или остановить на улице.</p>

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
                                <span>0,58 TND</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Проездной на 14 дней</div>
                                <span>0,58 TND</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>0,6-1,2 TND/км</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="auto">
    <div class="container">
        <h2>Автомобиль</h2>

        <div class="card mb-4">
            <div class="bg-secondary">
                <div class="card-body">
                    <h6 class="title-decorative">Казахстанское водительское удостоверение</h6>
                    <p>Гражданам Казахстана для управления автомобилем требуются международные водительские права и водительский стаж от двух лет.</p>    
                </div>
            </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                    <p>В Тунисе довольно качественное дорожное покрытие, суммарная протяженность дорог около 20 тыс. км, лучше всего развита дорожная сеть вблизи курортов страны.</p>
                    <p>Движение в Тунисе правостороннее, действуют строгое ограничение скорости: в населенных пунктах до 50 км/ч, за городом на шоссе до 90 км/ч, и на автострадах до 110 км/ч.</p>
                    <p>Большинство правил общепринятые: запрещено пересечение двойной сплошной разметки, управление автомобилем в нетрезвом состоянии, необходимо пользоваться ремнями безопасности как водителю, так и всем пассажирам, дети перевозятся в автокреслах. Необходимо также помнить, что на дорогах с круговым движением дорога уступается движущемуся автомобилю по кругу.</p>
                    <p>Дороги в Тунисе трёх типов: автобаны (платные — около 1,5 VND, помечаются желтым цветом на карте), национальные дороги (на карте помечаются красным цветом) и муниципальные дороги (на карте помечаются коричневым цветом).</p>
                    <p>Для иностранцев, особенно для новичков, управление автомобилем небезопасно в связи с тем, что тунисцы зачастую пренебрегают правилами дорожного движения, поэтому рекомендуется быть предельно внимательным за рулем, особенно в ночное время.</p>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость топлива</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-95</div>
                                <span>1,7 TND/литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-98</div>
                                <span>1,9 TND/литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>1,47 TND/литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Лада Веста или Рено Логан(Симбол)?!  По дорогам Туниса на автомобиле. ПДД, аренда, штрафы, манеры" src="https://i.ytimg.com/vi/NKq7Hf_TGDA/maxresdefault.jpg"
                            class="bg-image" />
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/NKq7Hf_TGDA?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                                mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Лада Веста или Рено Логан(Симбол)?! По дорогам Туниса на автомобиле. ПДД, аренда, штрафы, манеры
                        <br>© Блог LADA Vesta 2017</figcaption>
                </figure>
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>
        <div class="row justify-content-between">
        <div class="col-md-8 col-lg-7">
            <p>Перед посещением Туниса рекомендована вакцинация от гепатита А и В, тифа, но это не обязательное условия для въезда на территорию государства.</p>
            <p>Во избежание проблем с ЖКТ необходимо употреблять только бутилированную воду, а также тщательно промывать ею все овощи и фрукты. Рекомендуется воздерживаться от употребления свежевыжатых соков и блюд, приготовленных в сомнительных местах.</p>
            <p>Туристам, особенно лицам с хроническими заболеваниями, необходимо учитывать особенности местного жаркого климата — избегать прямых солнечных лучей, пить много жидкости, носить головные уборы и пользоваться солнцезащитными средствами.</p>
            <p>Первая медицинская помощь в экстренном случае оказывается бесплатно, для длительного лечения требуется расширенная страховка.</p>


            <a href="https://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
        </div>
        <div class="col-md-4">
            <figure class="figure d-block">
                <div class="video-cover box-shadow">
                    <img alt="Медицина в Тунисе - Включение второе: аптека" src="https://i.ytimg.com/vi/fMPd-T0HiAY/maxresdefault.jpg" class="bg-image"
                    />
                    <div class="video-play-icon">
                        <i class="icon-controller-play"></i>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/fMPd-T0HiAY?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen
                            mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <figcaption class="figure-caption text-right">Медицина в Тунисе - Включение второе: аптека
                    <br>© Novostar Hotels Live 2017</figcaption>
            </figure>
        </div>
        </div>

        
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-7">
                <p>В Тунисе сотовую связь предоставляют три оператора: Ooredoo, Orange и Tunisie Telecom.</p>
                <ul class="mt-4">
                    <li>Ooredoo — <a href="http://www.ooredoo.tn/" target="_blank">перейти на сайт</a></li>
                    <li>Orange — <a href="http://www.orange.tn/" target="_blank">перейти на сайт</a></li>
                    <li>Tunisie Telecom — <a href="http://www.tunisietelecom.tn/Fr/" target="_blank">перейти на сайт</a></li>
                </ul>
                <p>Приобрести местную сим-карту можно приобрести (при наличии паспорта) в аэропорту, в салонах связи на улицах города и в торговых комплексах, в некоторых отелях.</p>
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
                                <div>Скорая медицинская помощь</div>
                                <span>190</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>197</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная служба</div>
                                <span>198</span>
                            </div>
                        </li>
                    </ul>
                </div>

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

