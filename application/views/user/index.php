<body class="body-ladies">

	<!-- ======================== PAGE WRAPPER ======================== -->

	<div class="page page-wrapper page-ladies">

		<!-- ======================== HEADER ======================== -->

		<header id="header" class="header page-header hero-ladies">

			<div class="header-top-overlay">

				<div class="container">

					<div class="top-bar top-bar-ladies text-center">

						<div class="row">

							<div class="col-lg-12">

								<a class="mob-menu" href="#mobile_menu">
									<div class="hamburger-box">
										<div class="hamburger-inner"></div>
									</div>
								</a>
								<!-- ======================== LOGIN FORM ======================== -->


								<div id="log_nav">
									<ul>
										<li id="login_li">
											<a href="#" class="btn btn-purple" id="login-trigger">вход</a>

											<div id="login-content">
												<form action="" method="post" id="login_form">
													<fieldset id="inputs">
														Логин <input id="name" class="form-control" type="text" name="auth_login" required>
														Пароль <input id="pass" class="form-control" type="text" name="auth_password" required>
														<div id="error_login" class="error"></div>
													</fieldset>
													<fieldset id="actions">
														<input type="submit"  id="sbmt" name="auth_submit" value="Войти" class="btn btn-blue">

													</fieldset>
												</form>
											</div>
										</li>
									</ul>
								</div>
								<div class="data">

									<span class="ukr-time"><span>UA:</span> 23:45</span>
									<span class="weather">+25<sup>o</sup></span>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="main-navigation">

				<div class="container">

					<div class="row">

						<div class="col-xs-12 mobile-logo text-center">

							<img src="/images/logo/logo-men.png" alt="mobile-logo">

						</div>

					</div>

					<div class="row">

						<nav class="nav navbar">

							<ul class="navigation nav-l text-center">

								<li class="nav-item active"><a href="#">search</a></li>
								<li class="nav-item"><a href="#">services</a></li>
								<li class="nav-item"><a href="#">about us</a></li>
								<li class="nav-item"><a href="#">about ukraine</a></li>
								<li class="nav-item"><a href="#">blog</a></li>
								<li class="nav-item"><a href="#">travel info</a></li>
								<li class="nav-item"><a href="#">f&q</a></li>
								<li class="nav-item"><a href="#">contacts</a></li>

							</ul>

						</nav>

					</div>

				</div>

			</div>

			<div class="register">

				<div class="container">

					<div class="register-wrapper">

						<div class="row">

							<!-- ФОРМА -->

							<div class="col-xs-12 col-lg-5 col-lg-offset-0 col-lg-push-7">

								<div class="register-form-wrapper">

									<div class="row">

										<div class="col-lg-12">

											<div class="reg-form-header">

												Register for free
												and  find your future wife here
												at wifefromukraine.com

											</div>

										</div>

									</div>

									<!-- REGISTER FORM START -->

									<form action="" method="post" class="reg-form" id="reg">

										<div class="row">

											<div class="col-lg-12">

												<div class="form-group">

													<label for="username">login</label>
													<input type="text" class="form-control" id="username" name="username" value="">

												</div>

											</div>

										</div>

										<div class="row">

											<div class="col-lg-12">

												<div class="form-group">

													<label for="email">email</label>
													<input type="email" class="form-control" id="email" name="email" value="">

												</div>

											</div>

										</div>

										<div class="row">

											<div class="col-lg-12">

												<div class="form-group">

													<label for="password">password</label>
													<input type="password" class="form-control" id="password" name="password" value="">

												</div>

											</div>

										</div>

										<div class="row">

											<div class="col-lg-12">

												<div class="form-group">

													<label for="state">state</label>
													<input type="text" class="form-control" id="state" name="city" value="">

												</div>

											</div>

										</div>

										<div class="row">

											<div class="col-lg-12">

												<div class="form-group">

													<div class="row">

														<div class="col-lg-4">

															<label for="">birth date:</label>


														</div>

														<div class="col-lg-8 select-wrap">
															<?php
															$monthOptions = '<option value="0" id="month_option">Month:</option>';
															$dayOptions = '<option value="0" id="day_option">Day:</option>';
															$yearOptions = '<option value="0" id="year_option">Year:</option>';

															for($month=1; $month<=12; $month++)
															{
																$monthName = date("M", mktime(0, 0, 0, $month));
																$monthOptions .= "<option value=\"{$month}\">{$monthName}</option>\n";
															}
															for($day=1; $day<=31; $day++)
															{
																$dayOptions .= "<option value=\"{$day}\">{$day}</option>\n";
															}
															for($year=2015; $year>=1890; $year--)
															{
																$yearOptions .= "<option value=\"{$year}\">{$year}</option>\n";
															}
															?>
															<script type="text/javascript">
																function updateDays()
																{
																	//Create variables needed
																	var monthSel = document.getElementById('month');
																	var daySel   = document.getElementById('day');
																	var yearSel  = document.getElementById('year');
																	var monthVal = monthSel.value;
																	var yearVal  = yearSel.value;

																	//Determine the number of days in the month/year
																	var daysInMonth = 31;
																	if (monthVal==2)
																	{
																		daysInMonth = (yearVal%4==0 && (yearVal%100!=0 || yearVal%400==0)) ? 29 : 28;
																	}
																	else if (monthVal==4 || monthVal==6 || monthVal==9 || monthVal==11)
																	{
																		daysInMonth = 30;
																	}

																	//Add/remove options from days select list as needed
																	if(daySel.options.length > daysInMonth)
																	{   //Remove excess days, if needed
																		daySel.options.length = daysInMonth;
																	}
																	while (daySel.options.length != daysInMonth)
																	{   //Add additional days, if needed
																		daySel.options[daySel.length] = new Option(daySel.length+1, daySel.length+1, false);
																	}

																	return;
																}
															</script>

																<select name="day" id="day" class="form-control">
																	<?php echo $dayOptions; ?>
																</select>
																<select name="month" id="month" onchange="updateDays();" class="form-control">
																	<?php echo $monthOptions; ?>
																</select>
																<select name="year" id="year" onchange="updateDays();" class="form-control">
																	<?php echo $yearOptions; ?>
																</select>


<!--															<select type="text" class="form-control">-->
<!--																--><?php
//																$monthOptions = '<option value="Месяц">Месяц</option>';
//																$dayOptions = '<option value="0">День</option>';
//																$yearOptions = '<option value="0">Год</option>';
//																$monthName = [null,"Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"];
//																foreach ($monthName as $key){
//																for($month=0;$month<count($key);$month++) {
//																	$monthName = date("F", mktime(0, 0, 0, $month));
//																	$monthOptions .= "<option value=\"{$month}\">{$key}</option>\n";
//																}
//																}
//
//																?>
<!---->
<!--																<option value="1">1</option>-->
<!--																<option value="1">1</option>-->
<!---->
<!--															</select>-->
<!---->
<!---->
<!--															<select type="text" class="form-control">-->
<!---->
<!--																<option value="day">day</option>-->
<!--																<option value="1">1</option>-->
<!--																<option value="1">1</option>-->
<!---->
<!--															</select>-->
<!---->
<!--															<select type="text" class="form-control">-->
<!---->
<!--																<option value="year">year</option>-->
<!--																<option value="1">1</option>-->
<!--																<option value="1">1</option>-->
<!---->
<!--															</select>-->

														</div>

													</div>

												</div>

											</div>

										</div>

										<div class="row">

											<div class="col-lg-12">

												<div class="reg-form-content">

													By registering you agree with our terms & conditions, privacy policy and opt-in to receiving emails. We will never sell, rent or spam your email address.

												</div>

											</div>

										</div>

										<div class="row">

											<div class="col-lg-12">

												<div class="form-group">

													<button type="submit" class="btn btn-blue">Register now for free</button>

												</div>

											</div>

										</div>

									</form>

								</div>

								<!-- REGISTER FORM END -->

							</div>

							<!-- ТЕКСТ -->

							<div class="col-xs-10 col-xs-offset-1 col-lg-7 col-lg-offset-0 col-lg-pull-5">

								<!-- HEADER CONTENT START -->

								<div class="header-content-wrapper">

									<div class="row">

										<div class="col-lg-12">

											<div class="header-content-title text-white">

												Find your love<br> on Wife from Ukraine

											</div>

											<div class="row">

												<div class="col-lg-6">

													<ul>
														<li>Matchmakers in the USA and Ukraine</li>
														<li>All ladies are interviewed</li>
														<li>Secure Payment System</li>
													</ul>

												</div>

												<div class="col-lg-6">

													<ul>
														<li>Consultation 24/7</li>
														<li>Women And Men Profiles</li>
														<li>Us Company – Obeyed Us law sand regulations</li>
													</ul>

												</div>

											</div>

										</div>

									</div>

								</div>

								<!-- HEADER CONTENT END -->

							</div>

						</div>

					</div>

				</div>

			</div>

		</header>

		<!-- ======================== MAIN CONTENT ======================== -->

		<main class="page-content">

			<!-- ======================== SECTION NEWS ======================== -->

			<section id="news" class="section section-news">

				<div class="container">

					<div class="row">

						<div class="col-lg-6">

							<p>It turned out we were both going through breakups and we started
								talking about our love for animals and he said</p>

							</div>

							<div class="col-lg-6">

								<p>It turned out we were both going through breakups and we started
									talking about our love for animals and he said</p>

								</div>

							</div>

						</div>

					</section>

					<!-- ======================== SECTION POPULAR  ======================== -->

					<section id="popular" class="section section-popular">

						<div class="container">

							<div class="popular-wrapper">

								<div class="row">

									<div class="col-lg-6">

										<div class="popular-ladies">

											<!-- POPULAR LADIES TITLE START-->

											<div class="row">

												<div class="popular-header text-center">

													<h2>Popular ladies</h2>

												</div>

											</div>

											<!-- POPULAR LADIES TITLE END -->

											<!-- POPULAR LADIES PROFILE START -->

											<div class="row">

												<div class="col-lg-4">

													<div class="popular-ladies-profile">

														<a href="#">

															<figure class="profile-image test-bg-img">

																<img src="/images/ladies/girl-1.jpg" class="image-circle responsive-img" alt="ladies">

															</figure>

															<div class="profile-data">

																<span class="profile-name">olga</span>

																<span class="profile-age">(23 years old)</span>

																<span class="profile-lang">English: Good</span>

																<div class="media-data">

																	<span class="profile-media">Photo: 15</span>
																	<span class="profile-media">Video: 2</span>

																</div>

																<div class="profile-write">

																	write just now

																</div>

															</div>

														</a>

													</div>

												</div>

												<div class="col-lg-4">

													<div class="popular-ladies-profile">

														<a href="#">

															<figure class="profile-image">

																<img src="/images/ladies/girl-2.jpg" class="image-circle responsive-img" alt="ladies">

															</figure>

															<div class="profile-data">

																<span class="profile-name">olga</span>

																<span class="profile-age">(23 years old)</span>

																<span class="profile-lang">English: Good</span>

																<div class="media-data">

																	<span class="profile-media">Photo: 15</span>
																	<span class="profile-media">Video: 2</span>

																</div>

																<div class="profile-write">

																	write just now

																</div>

															</div>

														</a>

													</div>

												</div>

												<div class="col-lg-4">

													<div class="popular-ladies-profile">

														<a href="#">

															<figure class="profile-image">

																<img src="/images/ladies/girl-3.jpg" class="image-circle responsive-img" alt="ladies">

															</figure>

															<div class="profile-data">

																<span class="profile-name">olga</span>

																<span class="profile-age">(23 years old)</span>

																<span class="profile-lang">English: Good</span>

																<div class="media-data">

																	<span class="profile-media">Photo: 15</span>
																	<span class="profile-media">Video: 2</span>

																</div>

																<div class="profile-write">

																	write just now

																</div>

															</div>

														</a>

													</div>

												</div>

											</div>

											<div class="row">

												<div class="col-lg-4">

													<div class="popular-ladies-profile">

														<a href="#">

															<figure class="profile-image">

																<img src="/images/ladies/girl-4.jpg" class="image-circle responsive-img" alt="ladies">

															</figure>

															<div class="profile-data">

																<span class="profile-name">olga</span>

																<span class="profile-age">(23 years old)</span>

																<span class="profile-lang">English: Good</span>

																<div class="media-data">

																	<span class="profile-media">Photo: 15</span>
																	<span class="profile-media">Video: 2</span>

																</div>

																<div class="profile-write">

																	write just now

																</div>

															</div>

														</a>

													</div>

												</div>

												<div class="col-lg-4">

													<div class="popular-ladies-profile">

														<a href="#">

															<figure class="profile-image">

																<img src="img/ladies/girl-5.jpg" class="image-circle responsive-img" alt="ladies">

															</figure>

															<div class="profile-data">

																<span class="profile-name">olga</span>

																<span class="profile-age">(23 years old)</span>

																<span class="profile-lang">English: Good</span>

																<div class="media-data">

																	<span class="profile-media">Photo: 15</span>
																	<span class="profile-media">Video: 2</span>

																</div>

																<div class="profile-write">

																	write just now

																</div>

															</div>

														</a>

													</div>

												</div>

												<div class="col-lg-4">

													<div class="popular-ladies-profile">

														<a href="#">

															<figure class="profile-image">

																<img src="img/ladies/girl-6.jpg" class="image-circle responsive-img" alt="ladies">

															</figure>

															<div class="profile-data">

																<span class="profile-name">olga</span>

																<span class="profile-age">(23 years old)</span>

																<span class="profile-lang">English: Good</span>

																<div class="media-data">

																	<span class="profile-media">Photo: 15</span>
																	<span class="profile-media">Video: 2</span>

																</div>

																<div class="profile-write">

																	write just now

																</div>

															</div>

														</a>

													</div>

												</div>

											</div>

											<!-- POPULAR LADIES PROFILE END -->

										</div>

									</div>

									<div class="col-lg-6">

										<div class="popular-ladies">

											<!-- POPULAR LADIES TITLE START-->

											<div class="row">

												<div class="popular-header text-center">

													<h2>Online ladies</h2>

												</div>

											</div>

											<!-- POPULAR LADIES TITLE END -->

											<!-- POPULAR LADIES PROFILE START -->

											<div class="row">

												<div class="col-lg-4">

													<div class="popular-ladies-profile">

														<a href="#">

															<figure class="profile-image">

																<img src="img/ladies/girl-7.jpg" class="image-circle responsive-img" alt="ladies">

															</figure>

															<div class="profile-data">

																<span class="profile-name">olga</span>

																<span class="profile-age">(23 years old)</span>

																<span class="profile-lang">English: Good</span>

																<div class="media-data">

																	<span class="profile-media">Photo: 15</span>
																	<span class="profile-media">Video: 2</span>

																</div>

																<div class="profile-write">

																	write just now

																</div>

															</div>

														</a>

													</div>

												</div>

												<div class="col-lg-4">

													<div class="popular-ladies-profile">

														<a href="#">

															<figure class="profile-image">

																<img src="img/ladies/girl-8.jpg" class="responsive-img" alt="ladies">

															</figure>

															<div class="profile-data">

																<span class="profile-name">olga</span>

																<span class="profile-age">(23 years old)</span>

																<span class="profile-lang">English: Good</span>

																<div class="media-data">

																	<span class="profile-media">Photo: 15</span>
																	<span class="profile-media">Video: 2</span>

																</div>

																<div class="profile-write">

																	write just now

																</div>

															</div>

														</a>

													</div>

												</div>

												<div class="col-lg-4">

													<div class="popular-ladies-profile">

														<a href="#">

															<figure class="profile-image">

																<img src="img/ladies/girl-9.jpg" class="responsive-img" alt="ladies">

															</figure>

															<div class="profile-data">

																<span class="profile-name">olga</span>

																<span class="profile-age">(23 years old)</span>

																<span class="profile-lang">English: Good</span>

																<div class="media-data">

																	<span class="profile-media">Photo: 15</span>
																	<span class="profile-media">Video: 2</span>

																</div>

																<div class="profile-write">

																	write just now

																</div>

															</div>

														</a>

													</div>

												</div>

											</div>

											<div class="row">

												<div class="col-lg-4">

													<div class="popular-ladies-profile">

														<a href="#">

															<figure class="profile-image">

																<img src="img/ladies/girl-10.jpg" class="responsive-img" alt="ladies">

															</figure>

															<div class="profile-data">

																<span class="profile-name">olga</span>

																<span class="profile-age">(23 years old)</span>

																<span class="profile-lang">English: Good</span>

																<div class="media-data">

																	<span class="profile-media">Photo: 15</span>
																	<span class="profile-media">Video: 2</span>

																</div>

																<div class="profile-write">

																	write just now

																</div>

															</div>

														</a>

													</div>

												</div>

												<div class="col-lg-4">

													<div class="popular-ladies-profile">

														<a href="#">

															<figure class="profile-image">

																<img src="img/ladies/girl-11.jpg" class="responsive-img" alt="ladies">

															</figure>

															<div class="profile-data">

																<span class="profile-name">olga</span>

																<span class="profile-age">(23 years old)</span>

																<span class="profile-lang">English: Good</span>

																<div class="media-data">

																	<span class="profile-media">Photo: 15</span>
																	<span class="profile-media">Video: 2</span>

																</div>

																<div class="profile-write">

																	write just now

																</div>

															</div>

														</a>

													</div>

												</div>

												<div class="col-lg-4">

													<div class="popular-ladies-profile">

														<a href="#">

															<figure class="profile-image">

																<img src="img/ladies/girl-12.jpg" class="responsive-img" alt="ladies">

															</figure>

															<div class="profile-data">

																<span class="profile-name">olga</span>

																<span class="profile-age">(23 years old)</span>

																<span class="profile-lang">English: Good</span>

																<div class="media-data">

																	<span class="profile-media">Photo: 15</span>
																	<span class="profile-media">Video: 2</span>

																</div>

																<div class="profile-write">

																	write just now

																</div>

															</div>

														</a>

													</div>

												</div>

											</div>

											<!-- POPULAR LADIES PROFILE END -->

										</div>

									</div>

								</div>

							</div>

						</div>

					</section>

					<!-- ======================== SECTION FEATURES  ======================== -->

					<section id="features" class="section section-features">

						<div class="container">

							<div class="features-wrapper">

								<div class="row">

									<div class="col-lg-4">

										<div class="features-item">

											<img src="/images/features/f-icon-1.png" alt="features">

											<span>Create your profile</span>

											<p>Registar now for free and start your Search of your future wife</p>

										</div>

									</div>

									<div class="col-lg-4">

										<div class="features-item">

											<img src="/images/features/f-icon-2.png" alt="features">

											<span>Online conversation</span>

											<p>2 ways to start a conversation with our ladies: letter and online chat</p>

										</div>

									</div>

									<div class="col-lg-4">

										<div class="features-item">

											<img src="/images/features/f-icon-3.png" alt="features">

											<span>One on one dating</span>

											<p>Visit Ukraine and get married Get all necessary travel Recomendations and services</p>

										</div>

									</div>

								</div>

							</div>

						</div>

					</section>

					<!-- ======================== SECTION ABOUT  ======================== -->

					<section id="about" class="section section-about">

						<div class="container">

							<div class="row">

								<div class="col-lg-6">

									<p><a href="#">Wifefromukraine.com</a> offers single men and women the opportunity to find and communicate with each other through varios of services on our website. Registration is free and easy. You can get advantage to  upload up to 25 photos to your profile and select your personal preferences to better match your future significant other. All profiles and photos are reviewed then posted on our site.</p>

								</div>

								<div class="col-lg-6">

									<p>All ladies interviewed in person or via skype, passport is verified to avoid potential fraud. With click of the mouse you can write a letter or chat with your special lady. Translation services are available if needed. You can also surprise your lady with a <a href="#">gift of love</a> or visit her personally, see details by clicking <a href="">here</a>. We here to help, just let us know.</p>

								</div>

							</div>

						</div>

					</section>

					<!-- ======================== SECTION CONTACTS  ======================== -->

					<section id="contacts" class="section section-contacts">

						<div class="container">

							<div class="row">

								<div class="col-xs-12 col-lg-8 col-lg-offset-0">

									<div class="write-us">

										<!-- WRITE US HEADER -->

										<div class="row">

											<div class="col-lg-8">

												<div class="write-us-header">

													<span>Write us</span>

													<p>You can write your own story or give a feedback. We are waiting
														for your stories and propositions.</p>

													</div>

												</div>

											</div>

											<!-- WRITE US FORM -->

											<div class="row">

												<div class="col-lg-12">

													<div class="write-us-form">

														<form action="" method="" id="" class="">

															<div class="row">

																<div class="col-lg-6">

																	<div class="form-group">

																		<input type="text" class="form-control" id="" name="" value="" placeholder="Yor name">

																	</div>

																</div>

																<div class="col-lg-6">

																	<div class="form-group">

																		<input type="email" class="form-control" id="" name="" value="" placeholder="Yor e-mail">

																	</div>

																</div>

															</div>

															<div class="row">

																<div class="col-lg-12">

																	<div class="form-group">

																		<textarea name="" placeholder="Write us" class="form-control" rows="3"></textarea>

																	</div>

																</div>

															</div>

															<div class="row">

																<div class="col-lg-6">

																	<div class="file-upload">

																		<input type="file" class="custom-file-input form-control" id="" name="" value="">

																		<div class="input-group-addon">

																			<input type="text" class="form-control" readonly="readonly" value="Загрузите ваше изображение">

																			<a class="btn btn-blue"><img src="/images/loupe.png" alt=""></a>

																		</div>

																	</div>

																</div>

																<div class="col-lg-6">

																	<button type="submit" class="btn btn-blue">Отправить</button>

																</div>

															</div>

														</form>

													</div>

												</div>

											</div>

										</div>

									</div>

								</div>

							</div>

						</section>

						<!-- ======================== SECTION ADVANTEGES  ======================== -->

						<section id="advanteges" class="section section-advanteges">

							<div class="container">

								<div class="advanteges-wrapper">

									<div class="row">

										<div class="col-lg-4">

											<!-- Advantages Icon -->

											<div class="advantages-item">

												<div class="advantage-image">

													<img src="/images/advanteges/shield.png" alt="shield">

												</div>

												<div class="advantage-title">Dating safety tips</div>

											</div>

										</div>

										<div class="col-lg-4">

											<!-- Advantages Icon -->

											<div class="advantages-item">

												<div class="advantage-image">

													<img src="/images/advanteges/circular-question.png" alt="circular-question">

												</div>

												<div class="advantage-title">Suggestions & questions</div>

											</div>

										</div>

										<div class="col-lg-4">

											<!-- Advantages Icon -->

											<div class="advantages-item">

												<div class="advantage-image">

													<img src="/images/advanteges/gender.png" alt="circular-question">

												</div>

												<div class="advantage-title">Getting in touch with matchmakers for free now.</div>

											</div>

										</div>

									</div>

									<div class="row">

										<div class="col-lg-4">

											<!-- Advantages Icon -->

											<div class="advantages-item">

												<div class="advantage-image">

													<img src="/images/advanteges/light-bulb.png" alt="light-bulb">

												</div>

												<div class="advantage-title">Date ideas</div>

											</div>

										</div>

										<div class="col-lg-4">

											<!-- Advantages Icon -->

											<div class="advantages-item">

												<div class="advantage-image">

													<img src="/images/advanteges/wallet.png" alt="wallet">

												</div>

												<div class="advantage-title">Promotionals</div>

											</div>

										</div>

										<div class="col-lg-4">

											<!-- Advantages Icon -->

											<div class="advantages-item">

												<div class="advantage-image">

													<img src="/images/advanteges/engagement-rings.png" alt="engagement-rings">

												</div>

												<div class="advantage-title">Success stories</div>

											</div>

										</div>

									</div>

									<div class="row">

										<div class="col-lg-4 col-lg-offset-4">

											<!-- Advantages Icon -->

											<div class="advantages-item">

												<div class="advantage-image">

													<img src="/images/advanteges/tap.png" alt="tap">

												</div>

												<div class="advantage-title">Intarnational dating advise</div>

											</div>

										</div>

									</div>

								</div>

								<div class="register-button">

									<div class="row">

										<div class="col-lg-4 col-lg-offset-4">

											<a class="btn btn-blue">Register now for free</a>

										</div>

									</div>

								</div>

							</div>

						</section>

					</main>

					<footer id="footer" class="page-footer">

						<div class="footer">

							<div class="container">

								<div class="footer-menu">

									<div class="row">

										<div class="col-lg-2">

											<ul>
												<li><a href="#">Travel info</a></li>
												<li><a href="#">About ukraine</a></li>
												<li><a href="#">About us</a></li>
											</ul>

										</div>

										<div class="col-lg-2">

											<ul>
												<li><a href="#">Terms and conditions</a></li>
												<li><a href="#">Your Privacy</a></li>
												<li><a href="#">Ad Choices</a></li>
											</ul>

										</div>

										<div class="col-lg-2">

											<ul>
												<li><a href="#">Success Stories</a></li>
												<li><a href="#">Date ideas </a></li>
											</ul>

										</div>

										<div class="col-lg-3">

											<ul>
												<li><a href="#">Online Dating Safety Tips</a></li>
												<li><a href="#">International Dating  Advice</a></li>
											</ul>

										</div>

										<div class="col-lg-3">

											<div class="social-link text-center">

												<span>Follow us</span>

												<ul>
													<li><a href="#"><img src="/images/fb-icon.png" alt=""></a></li>
													<li><a href="#"><img src="/images/vk-icon.png" alt=""></a></li>
												</ul>

											</div>

										</div>

									</div>

								</div>

								<div class="all-rights-reserved">

									<div class="row">

										<div class="col-lg-6 col-lg-offset-3">

											Copyright ©2016 Ukrainian Wife Agency Limited. All Rights Reserved.

										</div>

									</div>

								</div>

							</div>

						</div>

						<div class="copyright-area">

							<div class="container">

								<div class="row">

									<div class="copyright-text lantrix-footer-hover">
										Designed and Developed by<br>
										<a href="https://lantrix.com.ua" data-hover="Lantrix" title="Создание сайта - студия Lantrix">Lantrix</a>
									</div>

								</div>

							</div>

						</div>

					</footer>

					<nav id="mobile_menu">
						<ul class="navigation-mob">
							<li class="nav-item active"><a href="#">Поиск</a></li>
							<li class="nav-item"><a href="#">о нас</a></li>
							<li class="nav-item"><a href="#">о usa</a></li>
							<li class="nav-item"><a href="#">блог</a></li>
							<li class="nav-item"><a href="#">вопрос-ответ</a></li>
							<li class="nav-item"><a href="#">контакты</a></li>
						</ul>
					</nav>

				</div>


