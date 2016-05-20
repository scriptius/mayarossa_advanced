<?php
\frontend\assets\MainAsset::register($this);
?>
<?php $this->beginPage() ?>
	<!DOCTYPE html>
	<!--[if IE 7 ]><html class="ie7" lang="en"> <![endif]-->
	<!--[if IE 8 ]><html class="ie8" lang="en"> <![endif]-->
	<!--[if IE 9 ]><html class="ie9" xmlns="http://www.w3.org/1999/xhtml" lang="en-US"> <![endif]-->
	<!--[if (gte IE 10)|!(IE)]><!-->
	<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
	<!--<![endif]-->
	<head>
		<title>Мая Егорова (Maya Rossa)</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<!-- Seo Meta -->
		<meta name="description" content="Remix - Music & Band Site Template HTML5 and CSS3">
		<meta name="keywords" content="remix, music, light, dark, themeforest, multi purpose, band, css3, html5">

		<!-- Styles -->
<!--		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen" />-->
<!--		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" media="screen" />-->
<!--		<link rel="stylesheet" type="text/css" href="style.css" id="dark" media="screen" />-->
<!--		<link rel="stylesheet" type="text/css" href="js/rs-plugin/css/settings.css" media="screen" />-->
<!--		<link rel="stylesheet" type="text/css" href="styles/icons/icons.css" media="screen" />-->
<!--		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>-->
<!--		<link rel="stylesheet" type="text/css" href="styles/light.css" media="screen" />-->
		<!-- Favicon -->
		<link rel="shortcut icon" href="themeMayarossa/images/favicon.ico">
		<link rel="apple-touch-icon" href="themeMayarossa/images/apple-touch-icon.png">

		<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE" />
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/icons/font-awesome-ie7.min.css" />
		<![endif]-->
		<?php $this->head() ?>
	</head>
	<body id="fluidGridSystem" class="modern">
	<?php $this->beginBody() ?>
	<div id="layout" class="boxed-margin">
		<!-- popup login -->
		<div id="popupLogin">
			<div class="def-block widget">
				<h4> Sign In </h4><span class="liner"></span>
				<div class="widget-content row-fluid">
					<form id="popup_login_form">
						<input type="text" name="login_username" id="login_username" onfocus="if (this.value=='username') this.value = '';" onblur="if (this.value=='') this.value = 'username';" value="username" placeholder="username">
						<input type="password" name="login_password" id="login_password" onfocus="if (this.value=='password') this.value = '';" onblur="if (this.value=='') this.value = 'password';" value="password" placeholder="password">
						<a href="#" class="tbutton small"><span>Sign In</span></a>
						<a href="#" class="tbutton color2 small"><span>Register</span></a>
					</form><!-- login form -->
				</div><!-- content -->
			</div><!-- widget -->
			<div id="popupLoginClose">x</div>
		</div><!-- popup login -->
		<div id="LoginBackgroundPopup"></div>
		<!-- popup login -->

		<header id="header" class="glue">
			<div class="row clearfix">
				<div class="little-head">
					<div id="Login_PopUp_Link" class="sign-btn tbutton small"><span>Sign In</span></div>

					<div class="social social-head">
						<a href="http://twitter.com/behzadg1" class="bottomtip" title="Follow us on Twitter" target="_blank"><i class="icon-twitter"></i></a>
						<a href="http://fb.com/theme20" class="bottomtip" title="Like us on Facebook" target="_blank"><i class="icon-facebook"></i></a>
						<a href="https://plus.google.com/u/0/104807493509867599773" class="bottomtip" title="GooglePlus" target="_blank"><i class="icon-google-plus"></i></a>
						<a href="http://instagram.com/" class="bottomtip" title="instagram" target="_blank"><i class="icon-instagram"></i></a>
						<a href="http://instagram.com/" class="bottomtip" title="instagram" target="_blank"><i class="icon-instagram"></i></a>
						<a href="http://dribbble.com/behzadg" class="bottomtip" title="Dribbble" target="_blank"><i class="icon-dribbble"></i></a>
						<a href="https://soundcloud.com/behzad-gh" class="bottomtip" title="Soundcloud" target="_blank"><i class="icon-cloud"></i></a>
						<a href="http://reverbnation.com/" class="bottomtip" target="_blank" title="Reverbnation"><i class="icon-star"></i></a>
						<a href="http://youtube.com/" class="bottomtip" target="_blank" title="YouTube"><i class="icon-youtube-play"></i></a>
						<a href="http://youtube.com/" class="bottomtip" target="_blank" title="Flickr"><i class="icon-flickr"></i></a>
						<a href="http://www.linkedin.com/" class="bottomtip" title="Linkedin" target="_blank"><i class="icon-linkedin"></i></a>
					</div><!-- end social -->

					<div class="search">
						<form action="search.html" id="search" method="get">
							<input id="inputhead" name="search" type="text" onfocus="if (this.value=='Искать здесь...') this.value = '';" onblur="if (this.value=='') this.value = 'Искать здесь...';" value="Искать здесь..." placeholder="Искать здесь...">
							<button type="submit"><i class="icon-search"></i></button>
						</form><!-- end form -->
					</div><!-- search -->
				</div><!-- little head -->
			</div><!-- row -->

			<div class="headdown">
				<div class="row clearfix">
					<div class="logo bottomtip" title="Официальный сайт певицы - MAYA ROSSA">
						<a href="index.html"><img src="themeMayarossa/images/logo_light.png" alt="Best and Most Popular Musics"></a>
					</div><!-- end logo -->

					<nav>
						<ul class="sf-menu">
							<li class="current selectedLava"><a href="index.html">Главная<span class="sub">Начало здесь</span></a>
								<ul>
<!--									<li><a href="index_revolution.html">Home 2 - Revolution</a></li>-->
<!--									<li class="current"><a href="index_modern.html">Home 3 - Modern</a></li>-->
<!--									<li><a href="index_footer.html">Home with Footer</a></li>-->
<!--									<li><a href="index_loading.html">Home with Loading</a></li>-->
								</ul>
							</li>
							<li><a href="index.html">Обо мне<span class="sub">и не только</span></a>
								<ul>
									<li><a href="#">Биография</a>
<!--										<ul>-->
<!--											<li><a href="shortcode_accordion.html">Accordion</a></li>-->
<!--											<li><a href="shortcode_buttons.html">Buttons</a></li>-->
<!--											<li><a href="#">Typography</a>-->
<!--												<ul>-->
<!--													<li><a href="shortcode_columns.html">Grid Columns</a></li>-->
<!--													<li><a href="shortcode_quote.html">Quote</a></li>-->
<!--													<li><a href="shortcode_list_styles.html">List Styles</a></li>-->
<!--													<li><a href="shortcode_googlefonts.html">Google Fonts</a></li>-->
<!--													<li><a href="shortcode_dropcaps.html">Dropcaps</a></li>-->
<!--													<li><a href="shortcode_divider_lines.html">Divider Lines</a></li>-->
<!--													<li><a href="shortcode_highlights.html">Highlights</a></li>-->
<!--												</ul>-->
<!--											</li>-->
<!--											<li><a href="shortcode_tables.html">Tables</a></li>-->
<!--											<li><a href="shortcode_lightbox.html">Lightbox</a></li>-->
<!--											<li><a href="shortcode_googlemap.html">Google Map</a></li>-->
<!--											<li><a href="shortcode_video.html">Video</a></li>-->
<!--											<li><a href="shortcode_social_icons.html">Retina Social Icons</a></li>-->
<!--											<li><a href="shortcode_tab.html">Tab</a></li>-->
<!--											<li><a href="shortcode_toggle.html">Toggle</a></li>-->
<!--											<li><a href="shortcode_message_box.html">Message box</a></li>-->
<!--										</ul>-->
									</li>
									<li><a href="shop.html">Достижения и награды</a>
<!--										<ul>-->
<!--											<li><a href="shop.html">Shop Page</a></li>-->
<!--											<li><a href="shop_product.html">Shop Product</a></li>-->
<!--											<li><a href="shop_cart.html">Shopping Cart</a></li>-->
<!--											<li><a href="shop_checkout.html">Shop Checkout</a></li>-->
<!--										</ul>-->
									</li>
									<li><a href="under_construction.html">Что пишут СМИ</a></li>
<!--									<li><a href="icons.html"><i class="icon-microphone mi"></i>660 Retina Icons</a></li>-->
<!--									<li><a href="#"><i class="icon-caret-right mi"></i>3rd Level</a>-->
<!--										<ul>-->
<!--											<li><a href="#">1st Menu</a></li>-->
<!--											<li><a href="#">2nd Menu</a></li>-->
<!--											<li><a href="#">Another Sub</a>-->
<!--												<ul>-->
<!--													<li><a href="#">1st Menu</a></li>-->
<!--													<li><a href="#">2nd Menu</a></li>-->
<!--												</ul>-->
<!--											</li>-->
<!--										</ul>-->
<!--									</li>-->
								</ul>
							</li>
							<li><a href="mp3s.html">Музыка<span class="sub">полный архив</span></a></li>
							<li><a href="videos.html">Видео<span class="sub">все клипы</span></a></li>
							<li><a href="gallery4.html">Фото<span class="sub">галерея</span></a>
								<ul>
<!--									<li><a href="gallery4.html">Gallery 4 Column</a></li>-->
<!--									<li><a href="gallery3.html">Gallery 3 Column</a></li>-->
<!--									<li><a href="gallery2.html">Gallery 2 Column</a></li>-->
								</ul>
							</li>
							<li><a href="#">Календарь<span class="sub">событий</span></a>
								<ul>
<!--									<li><a href="rtl.html">RTL Support</a></li>-->
<!--									<li><a href="events.html">Events</a></li>-->
<!--									<li><a href="mp3_single_wide.html">MP3 Single Wide</a></li>-->
<!--									<li><a href="mp3_single_half.html">MP3 Single Half</a></li>-->
<!--									<li><a href="video_single_wide.html">Video Single Wide</a></li>-->
<!--									<li><a href="video_single_half.html">Video Single Half</a></li>-->
<!--									<li><a href="fullwide.html">Fullwide Page</a></li>-->
<!--									<li><a href="support_forum.html">Support Forum</a></li>-->
<!--									<li><a href="contact.html">Contact</a></li>-->
<!--									<li><a href="contact2.html">Contact 2</a></li>-->
<!--									<li><a href="search.html">Search Result</a></li>-->
<!--									<li><a href="404.html">Custom 404</a></li>-->
<!--									<li><a href="archive.html">Archive</a></li>-->
<!--									<li><a href="news_single.html">News Single</a></li>-->
								</ul>
							</li>
							<li><a href="blog-right-sidebar.html">Контакты<span class="sub">Связь со мной</span></a>
								<ul>
<!--									<li><a href="blog-right-sidebar.html">Blog</a></li>-->
<!--									<li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>-->
<!--									<li><a href="blog-both-sidebar.html">Blog Both Sidebar</a></li>-->
<!--									<li><a href="blog-without-sidebar.html">Blog Without Sidebar</a></li>-->
<!--									<li><a href="blog-single_wide.html">Blog Single Wide</a></li>-->
<!--									<li><a href="blog-single_half.html">Blog Single Half</a></li>-->
<!--									<li><a href="blog-single_facebook_comment.html">With Facebook Comment</a></li>-->
<!--									<li><a href="blog-single_comment_form.html">With Comment Form</a></li>-->
								</ul>
							</li>
						</ul><!-- end menu -->
					</nav><!-- end nav -->
				</div><!-- row -->
			</div><!-- headdown -->
		</header><!-- end header -->

		<!-- Start Revolution Slider -->
		<div class="sliderr boxedcontainer">
			<div class="tp-banner-container">
				<div class="tp-banner" >
					<ul>
						<!-- SLIDE  -->
						<li data-transition="random" data-slotamount="7" data-masterspeed="7000" >
							<!-- MAIN IMAGE -->
							<img src="themeMayarossa/images/slides/slider2.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
							<!-- LAYERS -->
							<div class="tp-caption fade"
								 data-x="5"
								 data-y="206"
								 data-hoffset="0"
								 data-speed="1000"
								 data-start="800"
								 data-easing="Back.easeInOut"
								 data-endspeed="300"
								 style="z-index: 11"><img src="themeMayarossa/images/slides/slide1-cap1.png" alt=""></div>

							<div class="tp-caption lfb"
								 data-x="15"
								 data-y="205"
								 data-hoffset="0"
								 data-speed="1000"
								 data-start="1200"
								 data-easing="Back.easeInOut"
								 data-endspeed="300"
								 style="z-index: 11"><img src="themeMayarossa/images/slides/slide1-cap2.png" alt=""></div>

							<div class="tp-caption lft"
								 data-x="220"
								 data-y="205"
								 data-hoffset="0"
								 data-speed="1000"
								 data-start="1200"
								 data-easing="Back.easeInOut"
								 data-endspeed="300"
								 style="z-index: 11"><img src="themeMayarossa/images/slides/slide1-cap3.png" alt=""></div>

							<div class="tp-caption lfb"
								 data-x="40"
								 data-y="280"
								 data-hoffset="0"
								 data-speed="1000"
								 data-start="2000"
								 data-easing="Back.easeInOut"
								 data-endspeed="300"
								 style="z-index: 11"><img src="themeMayarossa/images/slides/slide1-cap4.png" alt=""></div>

							<div class="tp-caption lft"
								 data-x="41"
								 data-y="280"
								 data-hoffset="0"
								 data-speed="1000"
								 data-start="2000"
								 data-easing="Back.easeInOut"
								 data-endspeed="300"
								 style="z-index: 11"><img src="themeMayarossa/images/slides/slide1-cap5.png" alt=""></div>
						</li>
						
						
						<!-- SLIDE  -->
						<li data-transition="random" data-slotamount="7" data-masterspeed="5000" >
							<!-- MAIN IMAGE -->
							<img src="themeMayarossa/images/slides/slider3.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
							<!-- LAYERS -->
							<div class="tp-caption modern_big_redbg randomrotate"
								 data-x="0"
								 data-y="245"
								 data-hoffset="0"
								 data-speed="700"
								 data-start="1000"
								 data-easing="Back.easeInOut"
								 data-endspeed="300"
								 style="z-index: 11">Здесь Вы познакомитесь</div>

							<div class="tp-caption modern_m_bluebg randomrotate"
								 data-x="15"
								 data-y="300"
								 data-hoffset="0"
								 data-speed="700"
								 data-start="1500"
								 data-easing="Back.easeInOut"
								 data-endspeed="300"
								 style="z-index: 11">с моим творчеством,</div>

							<div class="tp-caption modern_m_bluebg randomrotate"
								 data-x="0"
								 data-y="365"
								 data-hoffset="0"
								 data-speed="700"
								 data-start="2000"
								 data-easing="Back.easeInOut"
								 data-endspeed="300"
								 style="z-index: 11">посмотрите фотогалерею,</div>

							<div class="tp-caption modern_m_bluebg randomrotate"
								 data-x="15"
								 data-y="430"
								 data-hoffset="0"
								 data-speed="700"
								 data-start="2500"
								 data-easing="Back.easeInOut"
								 data-endspeed="300"
								 style="z-index: 11">сможете связаться со мной</div>

							<div class="tp-caption modern_m_bluebg randomrotate"
								 data-x="0"
								 data-y="495"
								 data-hoffset="0"
								 data-speed="700"
								 data-start="3000"
								 data-easing="Back.easeInOut"
								 data-endspeed="300"
								 style="z-index: 11">и еще много чего ...</div>
						</li>

						<!-- SLIDE  -->
						<li data-transition="random" data-slotamount="7" data-masterspeed="5000" >
							<!-- MAIN IMAGE -->
							<img src="themeMayarossa/images/slides/slider4.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
							<!-- LAYERS -->
							<div class="tp-caption modern_big_bluebg randomrotate"
								 data-x="703"
								 data-y="384"
								 data-hoffset="0"
								 data-speed="700"
								 data-start="1200"
								 data-easing="Back.easeInOut"
								 data-endspeed="300"
								 style="z-index: 11">друзья!</div>

							<div class="tp-caption modern_big_redbg randomrotate"
								 data-x="703"
								 data-y="328"
								 data-hoffset="0"
								 data-speed="700"
								 data-start="1700"
								 data-easing="Back.easeInOut"
								 data-endspeed="300"
								 style="z-index: 11">До скорых встреч</div>
						</li>


					</ul><!-- End Slides -->
					<div class="tp-bannertimer"></div>
				</div>
			</div>
		</div>
		<!-- End Revolution Slider -->

		<div class="page-content left-sidebar">
			<div class="row clearfix mbf">
				<div class="music-player-list"></div>
			</div><!-- row music player -->
			<div class="row clearfix mbf">
				<div class="def-block animtt" data-gen="fadeUp" style="opacity:0;">
					<h4> Новые видео </h4><span class="liner"></span>

					<div class="video-grid clearfix">
						<div class="videos-carousel">
							<div class="anyClass">
								<ul>
									<li>
										<a href="video_single_wide.html">
											<iframe width="230" height="160" src="https://www.youtube.com/embed/Jym_qIvphAo" frameborder="0" allowfullscreen></iframe>
											<span><strong>Maya Rossa</strong>Who's loving you (cover) by Maya Rossa</span>
										</a>
									</li>
									<li>
										<a href="video_single_wide.html">
											<iframe width="230" height="160" src="https://www.youtube.com/embed/39eRlf5N4fU" frameborder="0" allowfullscreen></iframe>
											<span><strong>Maya Rossa</strong>Моя Россия</span>
										</a>
									</li>
									<li>
										<a href="video_single_wide.html">
											<iframe width="230" height="160" src="https://www.youtube.com/embed/0nfgs1HZ8iE" frameborder="0" allowfullscreen></iframe>
											<span><strong>Maya Rossa</strong>Колокола</span>
										</a>
									</li>
									<li>
										<a href="video_single_wide.html">
											<iframe width="230" height="160" src="https://www.youtube.com/embed/61HJlnyI7jY" frameborder="0" allowfullscreen></iframe>
											<span><strong>Maya Rossa</strong>Hello (cover)</span>
										</a>
									</li>
									<li>
										<a href="video_single_wide.html">
											<iframe width="230" height="160" src="https://www.youtube.com/embed/Fo0SelOjJpE" frameborder="0" allowfullscreen></iframe>
											<span><strong>Maya Rossa</strong>Гран-при "Кукушка"</span>
										</a>
									</li>
									<li>
										<a href="video_single_wide.html">
											<iframe width="230" height="160" src="https://www.youtube.com/embed/K2LVoHDC1KU" frameborder="0" allowfullscreen></iframe>
											<span><strong>Maya Rossa</strong>Я вернусь</span>
										</a>
									</li>
								</ul>
							</div><!-- anyclass -->

							<div class="preve"><i class="icon-angle-left"></i></div><!-- carousel left -->
							<div class="nexte"><i class="icon-angle-right"></i></div><!-- carousel right -->

						</div><!-- carousel -->
					</div><!-- videos -->
				</div><!-- block -->
			</div><!-- row video jcarousel -->

			<div class="row row-fluid clearfix mbf">
				<div class="span8 posts">
					<div class="def-block">
						<h4> Последние события </h4><span class="liner"></span>

						<div class="news row-fluid animtt" data-gen="fadeUp" style="opacity:0;">
							<div class="span5"><img class="four-radius" src="themeMayarossa/images/assets/news1.jpg" alt="#"></div>
							<div class="span7">
								<h3 class="news-title"> <a href="news_single.html">Australia’s 2014 Soundwave Festival</a> </h3>
								<p>Nine Inch Nails aren't on the bill, and they won't play the fest anytime soon. Soundwave promoter AJ Maddah started a Twitter war-of-words with a few choice comments about NIN's Trent Reznor.</p>
								<div class="meta">
									<span> <i class="icon-time mi"></i>August 26, 2013 5:09 AM </span> | <span> <a href="#"><i class="icon-comments-alt"></i> 14</a> </span>
								</div><!-- meta -->
								<a href="news_single.html" class="sign-btn tbutton small"><span>Подробнее</span></a>
							</div><!-- span7 -->
						</div><!-- news -->

						<div class="news row-fluid animtt" data-gen="fadeUp" style="opacity:0;">
							<div class="span5"><img class="four-radius" src="themeMayarossa/images/assets/news2.jpg" alt="#"></div>
							<div class="span7">
								<h3 class="news-title"> <a href="news_single.html">MTV Video Music Awards 2013</a> </h3>
								<p>Nine Inch Nails aren't on the bill, and they won't play the fest anytime soon. Soundwave promoter AJ Maddah started a Twitter war-of-words with a few choice comments about NIN's Trent Reznor.</p>
								<div class="meta">
									<span> <i class="icon-time mi"></i>August 24, 2013 8:10 PM </span> | <span> <a href="#"><i class="icon-comments-alt"></i> 5</a> </span>
								</div><!-- meta -->
								<a href="news_single.html" class="sign-btn tbutton small"><span>Подробнее</span></a>
							</div><!-- span7 -->
						</div><!-- news -->

						<div class="news row-fluid animtt" data-gen="fadeUp" style="opacity:0;">
							<div class="span5"><img class="four-radius" src="themeMayarossa/images/assets/news3.jpg" alt="#"></div>
							<div class="span7">
								<h3 class="news-title"> <a href="news_single.html">VMAs With A Round Of 'Applause'</a> </h3>
								<p>Nine Inch Nails aren't on the bill, and they won't play the fest anytime soon. Soundwave promoter AJ Maddah started a Twitter war-of-words with a few choice comments about NIN's Trent Reznor.</p>
								<div class="meta">
									<span> <i class="icon-time mi"></i>August 20, 2013 2:00 AM </span> | <span> <a href="#"><i class="icon-comments-alt"></i> 27</a> </span>
								</div><!-- meta -->
								<a href="news_single.html" class="tbutton small"><span>Подробнее</span></a>
							</div><!-- span7 -->
						</div><!-- news -->

						<div class="load-news tac"><a href="#" class="tbutton small"><span>Load More</span></a></div>
					</div><!-- def block -->
				</div><!-- span8 news -->

				<div class="span4 sidebar">
					<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
						<h4> Не пропустите </h4><span class="liner"></span>
						<div class="widget-content row-fluid">
							<div class="span12 mb">
								<ul id="event1" class="event-timer">
									<li>
										<span class="days">00</span>
										<p class="timeRefDays">дней</p>
									</li>
									<li>
										<span class="hours">00</span>
										<p class="timeRefHours">часов</p>
									</li>
									<li>
										<span class="minutes">00</span>
										<p class="timeRefMinutes">минут</p>
									</li>
									<li>
										<span class="seconds">00</span>
										<p class="timeRefSeconds">секунд</p>
									</li>
								</ul> <!-- end timer -->
							</div><!-- timer -->

							<div class="grid_8">
								<p class="event-titlett">Здесь текст события</p>
							</div>
							<div class="grid_4">
								<a href="#" class="tbutton buy-ticket small"><span>Подробнее</span></a>
							</div>

						</div><!-- widget content -->
					</div><!-- def block widget events -->

					<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
						<h4> Это я в instagram </h4><span class="liner"></span>
						<div class="widget-content">
							<div class="tweet"></div>
						</div><!-- widget content -->
					</div><!-- def block widget videos -->

					<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
						<h4> А это - популярные треки </h4><span class="liner"></span>
						<div class="widget-content row-fluid">
							<div class="scroll-mp3" style="height: 220px;">
								<div class="content">
									<ul class="tab-content-items">
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="themeMayarossa/images/assets/thumb-mp3-1.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Don’t go mary ( Remix )</a></h3>
											<span> Alexander </span>
											<span> 1,892,250 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="themeMayarossa/images/assets/thumb-mp3-2.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">That's My Kind Of Night </a></h3>
											<span> Alexander Mikoole </span>
											<span> 998,879 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="themeMayarossa/images/assets/thumb-mp3-3.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Magna Carta... Holy Grail </a></h3>
											<span> Joe </span>
											<span> 792,240 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="themeMayarossa/images/assets/thumb-mp3-4.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">If you love me</a></h3>
											<span> Enrique </span>
											<span> 788,471 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="themeMayarossa/images/assets/thumb-mp3-5.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Burning For you</a></h3>
											<span> Lura </span>
											<span> 710,105 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="themeMayarossa/images/assets/thumb-mp3-6.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Skyfool ( Dubstep Remix )</a></h3>
											<span> Babel </span>
											<span> 611,748 Plays </span>
										</li>
									</ul>
								</div>
							</div>
						</div><!-- widget content -->
					</div><!-- def block widget popular items -->

				</div><!-- span4 sidebar -->
			</div><!-- row clearfix -->

		</div><!-- end page content -->

		<footer id="footer">
			<div class="footer-last">
				<div class="row clearfix">
					<span class="copyright">При использовании информации с сайта, ссылка на сайт ОБЯЗАТЕЛЬНА! © 2016 by <a href="http://mayarossa.ru/">mayarossa.ru</a>.</span>
					<div id="toTop"><i class="icon-angle-up"></i></div><!-- Back to top -->
					<div class="foot-menu">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="mp3s.html">MP3</a></li>
							<li><a href="videos.html">Video</a></li>
							<li><a href="gallery.html">Photo Gallery</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul><!-- end links -->
					</div><!-- end foot menu -->
				</div><!-- row -->
			</div><!-- end last -->

		</footer><!-- end footer -->

	</div><!-- end layout -->
	<!-- Scripts -->
<!--	<script type="text/javascript" src="themeMayarossa/js/jquery.min.js"></script>-->
<!--	<script type="text/javascript" src="themeMayarossa/js/theme20.js"></script>-->
<!--	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>-->
<!--	<script type="text/javascript" src="themeMayarossa/js/rs-plugin/themeMayarossa/js/jquery.themepunch.plugins.min.js"></script>-->
<!--	<script type="text/javascript" src="themeMayarossa/js/rs-plugin/themeMayarossa/js/jquery.themepunch.revolution.min.js"></script>-->
<!--	<script type="text/javascript" src="themeMayarossa/js/jquery.prettyPhoto.js"></script>-->
<!--	<script type="text/javascript" src="themeMayarossa/js/jquery.flexslider-min.js"></script>-->
<!--	<script type="text/javascript" src="themeMayarossa/js/jquery.jplayer.js"></script>-->
<!--	<script type="text/javascript" src="themeMayarossa/js/ttw-music-player-min.js"></script>-->
<!--	<script type="text/javascript" src="themeMayarossa/music/myplaylist.js"></script>-->
<!--	<script type="text/javascript" src="themeMayarossa/js/countdown.js"></script>-->
<!--	<script type="text/javascript" src="themeMayarossa/js/jquery.nicescroll.min.js"></script>-->
<!--	<script type="text/javascript" src="themeMayarossa/js/twitter/jquery.tweet.js"></script>-->
<!--	<script type="text/javascript" src="themeMayarossa/js/custom.js"></script>-->
	<script type="text/javascript">
		/* <![CDATA[ */
		jQuery(document).ready(function() {
			jQuery('.tp-banner').revolution({
				delay:9000,
				startwidth:1060,
				startheight:610,
				hideThumbs:10,
				navigationType:"off"
			});
			jQuery("#event1").countdown({
					date: "31 December 2013 23:59:59",
					format: "on"
				},
				function() {
					// callback function
				});
		});
		/* ]]> */
	</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>