<main>

    <!-- ======================== SEARCH START ======================== -->

    <div id="search" class="search">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="search-wrapper">

                        <form id="search-form" action="" method="" class="search-form">

                            <div class="row">

                                <div class="col-xs-12 col-lg-3 search-field">

                                    <!-- <span class="icon-search"><img src="/images/search.png" alt=""></span> -->

                                    <input type="text" class="form-control" id="" name="" value="" placeholder="Что вы хотите найти">

                                </div>

                                <div class="col-xs-12 col-lg-3 slider-age">

                                    <label for="">Возраст:</label>

                                    <div id="slider-range"></div>

                                </div>

                                <div class="col-xs-12 col-lg-5 checkboxes text-center">

                                    <div class="checkbox">

                                        <input type="checkbox" name="" value="">

                                        <label for="">Новые</label>

                                    </div>

                                    <div class="checkbox">

                                        <input type="checkbox" name="" value="">

                                        <label for="">Популярные</label>

                                    </div>

                                    <div class="checkbox">

                                        <input type="checkbox" name="" value="">

                                        <label for="">В сети</label>

                                    </div>

                                    <a class="more-opt" ref="#">Больше опции <img src="/images/arrow-down.png" alt=""></a>

                                </div>

                                <div class="col-xs-6 col-xs-offset-3 col-lg-1 col-lg-offset-0 search-submit">

                                    <button type="submit" class="btn btn-purple">Поиск</button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- ======================== SEARCH END ======================== -->

    <!-- ======================== PROFILE START ======================== -->

    <div class="profile-wrapper">

        <div class="container">

            <div class="row">

                <!-- ======================== SIDEBAR MENU START ======================== -->

                <div id="profile-sidebar" class="profile-sidebar">

                    <div class="col-lg-2">

                        <div class="sidebar-wrapper">

                            <div class="sidebar-title">

                                мое меню

                            </div>

                            <div class="sidebar-menu">

                                <ul>

                                    <li id="l-ms">
                                        <a href="#">
													<span class="left-fixer">
														<span class="left-icon fl_l"></span>
														<span class="left-label inl_bl">Письма</span>
														<span class="right-count">(5)</span>
													</span>
                                        </a>
                                    </li>

                                    <li id="l-ch">
                                        <a href="#">
													<span class="left-fixer">
														<span class="left-icon fl_l"></span>
														<span class="left-label inl_bl">Чаты</span>
														<span class="right-count">(11)</span>
													</span>
                                        </a>
                                    </li>

                                    <li id="l-cnn">
                                        <a href="#">
													<span class="left-fixer">
														<span class="left-icon fl_l"></span>
														<span class="left-label inl_bl">Совпадения</span>
														<span class="right-count">(2)</span>
													</span>
                                        </a>
                                    </li>

                                    <li id="l-vie">
                                        <a href="#">
													<span class="left-fixer">
														<span class="left-icon fl_l"></span>
														<span class="left-label inl_bl">Просмотры</span>
														<span class="right-count">(1)</span>
													</span>
                                        </a>
                                    </li>

                                    <li id="l-lik">
                                        <a href="#">
													<span class="left-fixer">
														<span class="left-icon fl_l"></span>
														<span class="left-label inl_bl">Бан-лист</span>
														<span class="right-count">(1)</span>
													</span>
                                        </a>
                                    </li>

                                    <li id="l-fav">
                                        <a href="#">
													<span class="left-fixer">
														<span class="left-icon fl_l"></span>
														<span class="left-label inl_bl">Рекомендации</span>
														<span class="right-count">(1)</span>
													</span>
                                        </a>
                                    </li>
                                    <li id="l-fav">
                                        <a href="../price">
													<span class="left-fixer">
														<span class="left-icon fl_l"></span>
														<span class="left-label inl_bl">Buy a coins</span>
														<span class="right-count">(1)</span>
													</span>
                                        </a>
                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- ======================== SIDEBAR MENU END ======================== -->

                <!--<?/*include ROOT."/application/views/templates/sideMenu.php"*/?>-->

                <!-- ======================== PROFILE DATA START ======================== -->

                <div class="col-lg-10">

                    <!-- ======================== BREADCRUMBS START ======================== -->

                    <section id="breadcrumbs" class="breadcrumbs-section">

                        <div class="row">

                            <div class="col-lg-12">

                                <a class="go-back" href="#">Назад</a>

                                <ul class="breadcrumbs">
                                    <li><span>Главная</span></li>
                                    <li><span>Профили</span></li>
                                    <li><span>Джон (id12345)</span></li>
                                </ul>

                            </div>

                        </div>

                    </section>

                    <!-- ======================== BREADCRUMBS END ======================== -->

                    <section id="profile" class="profile">

                        <div class="row">

                            <div class="col-lg-5">

                                <!-- ======================== PROFILE AVATAR START ======================== -->

                                <div class="profile-avatar-wrapper">

                                    <div class="profile-avatar">

                                        <a href="<?= $data['userInfo']['avatar']['img'] ?>"><img class="object-fit-cover" src="<?= $data['userInfo']['avatar']['img'] ?>" alt=""></a>


                                    </div>

                                    <!-- ======================== PROFILE AVATAR END ======================== -->

                                    <!-- ======================== PROFILE PHOTOS START ======================== -->

                                    <div class="profile-photos">

                                        <ul class="popup-gallery">
                                            <?php
                                            foreach ($data['userInfo']['images'] as $photo){
                                                ?>
                                                <li>
                                                    <a href="<?=$photo['img'] ?>" class="big">
                                                        <img class="object-fit-cover" src="<?= $photo['img'] ?>" alt="">
                                                    </a>
                                                </li>
                                            <?php }
                                            ?>


                                        </ul>

                                    </div>

                                    <!-- ======================== PROFILE PHOTOS END ======================== -->

                                </div>


                                <!-- ======================== PROFILE VIDEO START ======================== -->

                                <div class="profile-video">

                                    <div class="profile-video-wrapper">

                                        <iframe width="100%" height="192" src="<?=$data['userInfo']['profile']['video'] ?>" frameborder="0" allowfullscreen></iframe>

                                    </div>

                                </div>

                                <!-- ======================== PROFILE VIDEO END ======================== -->

                            </div>

                            <!-- ======================== PROFILE DATA START ======================== -->

                            <div class="col-lg-7">

                                <div class="profile-data">

                                    <div class="profile-data-name">

                                        <?=$data['userInfo']['profile']['first_name'] ?>, <?php $birth = date('Y', $data['userInfo']['profile']['birth']); $now = date('Y', time()); echo ($now - $birth); ?> <span class="is-online">(в сети)</span>

                                    </div>

                                    <div class="profile-data-location">

                                        <ul>
                                            <li id="l-ky">
														<span class="left-fixer">
															<span class="left-icon fl_l"></span>
															<span class="left-label inl_bl"><?=$data['userInfo']['profile']['locale'] ?>, <?=$data['userInfo']['profile']['country'] ?></span>
														</span>
                                            </li>
                                            <li id="l-bih">
														<span class="left-fixer">
															<span class="left-icon fl_l"></span>
															<span class="left-label inl_bl"><?= date('m-d', $data['userInfo']['profile']['birth']) ?>  (<?=$data['userInfo']['profile']['zodiak_sign'] ?>)</span>
														</span>
                                            </li>
                                            <li id="l-sgl">
														<span class="left-fixer">
															<span class="left-icon fl_l"></span>
															<span class="left-label inl_bl"><?=$data['userInfo']['profile']['marital_status'] ?></span>
														</span>
                                            </li>
                                        </ul>

                                    </div>

                                    <!-- Personal Data Block 1 -->

                                    <div class="personal-data">

                                        <div class="personal-info">

                                            <div class="label">

                                                Дети:

                                            </div>

                                            <div class="labeled">

                                                <?php
                                                if(empty($data['userInfo']['chlidrens']))
                                                {
                                                    echo 'Нет';
                                                }
                                                else
                                                {
                                                    foreach ($data['userInfo']['chlidrens'] as $child)
                                                    {
                                                        echo $child['child_gender'].'('.$child['age'].')'.', ';
                                                    }
                                                }
                                                ?>

                                            </div>

                                        </div>

                                        <div class="personal-info">

                                            <div class="label">

                                                Больше детей:

                                            </div>

                                            <div class="labeled">

                                                <?=$data['userInfo']['profile']['children_possibility'] ?>

                                            </div>

                                        </div>

                                        <div class="personal-info">

                                            <div class="label">

                                                Вероисповедание:

                                            </div>

                                            <div class="labeled">

                                                <?=$data['userInfo']['profile']['religion'] ?>


                                            </div>

                                        </div>

                                        <div class="personal-info">

                                            <div class="label">

                                                Образование:

                                            </div>

                                            <div class="labeled">

                                                <?=$data['userInfo']['profile']['education'] ?>


                                            </div>

                                        </div>

                                        <div class="personal-info">

                                            <div class="label">

                                                Профессия:

                                            </div>

                                            <div class="labeled">

                                                <?=$data['userInfo']['profile']['occupation'] ?>

                                            </div>

                                        </div>


                                        <div class="personal-info">

                                            <div class="label">

                                                Водительские права:

                                            </div>

                                            <div class="labeled">

                                                <?=$data['userInfo']['profile']['driver_licence'] ?>


                                            </div>

                                        </div>

                                    </div>

                                    <!-- Personal Data Block 2 -->

                                    <div class="personal-data">

                                        <div class="personal-info">

                                            <div class="label">

                                                Цвет глаз:

                                            </div>

                                            <div class="labeled">

                                                <?=$data['userInfo']['profile']['eye_color'] ?>


                                            </div>

                                        </div>

                                        <div class="personal-info">

                                            <div class="label">

                                                Цвет волос:

                                            </div>

                                            <div class="labeled">

                                                <?=$data['userInfo']['profile']['hair_colour'] ?>


                                            </div>

                                        </div>

                                        <div class="personal-info">

                                            <div class="label">

                                                Рост:

                                            </div>

                                            <div class="labeled">

                                                <?=$data['userInfo']['profile']['height'] ?>
                                                см

                                            </div>

                                        </div>

                                        <div class="personal-info">

                                            <div class="label">

                                                Вес:

                                            </div>

                                            <div class="labeled">

                                                <?=$data['userInfo']['profile']['weight'] ?>


                                            </div>

                                        </div>

                                        <div class="personal-info">

                                            <div class="label">

                                                Курит:

                                            </div>

                                            <div class="labeled">

                                                <?=$data['userInfo']['profile']['smoker'] ?>


                                            </div>

                                        </div>

                                        <div class="personal-info">

                                            <div class="label">

                                                Пьет:

                                            </div>

                                            <div class="labeled">

                                                <?=$data['userInfo']['profile']['alcohol'] ?>


                                            </div>

                                        </div>

                                    </div>

                                    <!-- Personal Data Block 3 -->

                                    <div class="personal-data">

                                        <div class="personal-info">

                                            <div class="label">

                                                Любимая еда:

                                            </div>

                                            <div class="labeled">

                                                <?=$data['userInfo']['profile']['favorite_food'] ?>


                                            </div>

                                        </div>

                                        <div class="personal-info">

                                            <div class="label">

                                                Любимая музыка:

                                            </div>

                                            <div class="labeled">

                                                <?=$data['userInfo']['profile']['favorite_music'] ?>


                                            </div>

                                        </div>

                                        <div class="personal-info">

                                            <div class="label">

                                                Любимый фильм:

                                            </div>

                                            <div class="labeled">

                                                <?=$data['userInfo']['profile']['favorite_movie'] ?>


                                            </div>

                                        </div>

                                        <div class="personal-info">

                                            <div class="label">

                                                Любимый город:

                                            </div>

                                            <div class="labeled">

                                                <?=$data['userInfo']['profile']['favorite_city'] ?>


                                            </div>

                                        </div>

                                    </div>

                                    <!-- Personal Data Block 4 -->

                                    <div class="personal-data">

                                        <div class="personal-info">

                                            <div class="label">

                                                Обо мне:

                                            </div>

                                            <div class="labeled">

                                                <?=$data['userInfo']['profile']['about'] ?>


                                            </div>

                                        </div>

                                        <div class="personal-info">

                                            <div class="label">

                                                Увлечения:

                                            </div>

                                            <div class="labeled">

                                                <?=$data['userInfo']['profile']['hobbie'] ?>


                                            </div>

                                        </div>

                                        <div class="personal-info">

                                            <div class="label">

                                                Мечта:

                                            </div>

                                            <div class="labeled">

                                                <?=$data['userInfo']['profile']['dreams'] ?>

                                            </div>

                                        </div>

                                        <div class="personal-info">

                                            <div class="label">

                                                О партнере:

                                            </div>

                                            <div class="labeled">

                                                <?=$data['userInfo']['profile']['ideal_mate'] ?>

                                            </div>

                                        </div>

                                        <div class="personal-info">

                                            <div class="label">

                                                Предпочтительный возраст:

                                            </div>

                                            <div class="labeled">

                                                <?=$data['userInfo']['profile']['pref_min_age'] ?>
                                                -
                                                <?=$data['userInfo']['profile']['pref_max_age'] ?>
                                                years

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- ======================== PROFILE DATA END ======================== -->

                    </section>

                </div>

                <!-- ======================== PROFILE DATA END ======================== -->

            </div>

        </div>

    </div>

    <!-- ========================PROFILE END ======================== -->

</main>