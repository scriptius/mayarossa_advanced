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
		<title><?= $this->title;?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<!-- Seo Meta -->
		<meta name="description" content="Maya Rossa (Мая Егорова) - официальный сайт">
		<meta name="keywords" content="remix, music, light, dark, themeforest, multi purpose, band, css3, html5">
		<?php \yii\helpers\Html::csrfMetaTags(); ?>

		<!-- Styles -->

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

		<?= $this->render('//layouts/head'); ?>


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

<?= $this->render('//layouts/footer');?>

	</div><!-- end layout -->
	
	<!-- Scripts -->


	<?php $this->endBody() ?>
	
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

</body>
</html>
<?php $this->endPage() ?>