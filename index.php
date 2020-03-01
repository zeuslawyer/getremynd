<?php
$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,strpos( $_SERVER["SERVER_PROTOCOL"],'/'))).'://';
if(!empty($_SERVER['HTTP_X_FORWARDED_PROTO'])){
	$root .= $_SERVER['HTTP_X_FORWARDED_PROTO'].'://';
} else {
	$root .= !empty($_SERVER['HTTPS']) ? "https://" : "http://";
}

if ($root=='http://') {
	header("HTTP/1.1 301 Moved Permanently"); 
	header("Location: https://getremynd.com/");
}
?>

<!DOCTYPE html> <!--[if lt IE 7 ]>
<html class="ie ie6" lang="en-US">
<![endif]--> <!--[if IE 7 ]>
<html class="ie ie7" lang="en-US">
<![endif]--> <!--[if IE 8 ]>
<html class="ie ie8" lang="en-US">
<![endif]--> <!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en-US">
	<!--<![endif]--> 
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ReMynd App Page &#8211; making mental notes a little less mental</title>
		<link rel='dns-prefetch' href='//fonts.googleapis.com' />
		<link rel='dns-prefetch' href='//s.w.org' />
		<meta property="og:type" content="website"/>
		<meta property="og:title" content="ReMynd App"/>
		<meta property="og:url" content="https://getremynd.com/"/>
		<meta property="og:site_name" content="ReMynd App Page"/>
		<meta property="og:description" content="Making mental notes a little less mental"/>
		<meta property="og:title" content="ReMynd">
		<meta property="og:image" content="https://getremynd.com/uploads/getremynd.jpg">

		<link rel='stylesheet' id='rs-plugin-settings-css' href='assets/css/settings.css' type='text/css' media='all' />
		<style id='rs-plugin-settings-inline-css' type='text/css'> #rs-demo-id {} </style>

		<link rel='stylesheet' id='bootstrap-css' href='assets/css/bootstrap.css' type='text/css' media='all' />
		<link rel='stylesheet' id='main-css' href='assets/css/main.css?ver=1.9.4.2' type='text/css' media='all' />
		<link rel='stylesheet' id='custom-skin-css' href='assets/css/custom-skin.css' type='text/css' media='all' />
		<link rel='stylesheet' id='primary-font-css' href='assets/css/fonts.css' type='text/css' media='all' />
		<link rel='stylesheet' id='js_composer_front-css' href='assets/css/js_composer.min.css' type='text/css' media='all' />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<style>body{font-family: 'NTR', sans-serif;font-weight: 300;text-transform: none}.single-blog-holder .comments-holder .comment-holder .commenter-details .name a{font-family: 'NTR', sans-serif;font-weight: 300;text-transform: none}h1,h2,h3,h4,h5,h6{font-family: 'NTR', sans-serif;font-weight: 300;text-transform: none}.message-form .send{font-family: 'NTR', sans-serif;font-weight: 300;text-transform: none}.single-blog-holder .blog-author-holder .author-name{font-family: 'NTR', sans-serif;font-weight: 300;text-transform: none}.single-blog-holder .comments-holder .comment-holder .commenter-details .name{font-family: 'NTR', sans-serif;font-weight: 300;text-transform: none}.single-blog-holder .post-controls .next-post strong,.single-blog-holder .post-controls .prev-post strong{font-family: 'NTR', sans-serif;font-weight: 300;text-transform: none}.single-portfolio-holder .portfolio-big-navigation a{font-family: 'NTR', sans-serif;font-weight: 300;text-transform: none}.main-header.menu-type-standard-menu .standard-menu-container{font-family: 'NTR', sans-serif;font-weight: 300;text-transform: none}.main-header.menu-type-standard-menu .standard-menu-container div.menu > ul ul{font-family: 'NTR', sans-serif;font-weight: 300;text-transform: none}.header-logo.logo-text,.search-input-live-type,.blog-sidebar .sidebar-box-holder .product_list_widget li .product-details{font-family: 'NTR', sans-serif;font-weight: 300;text-transform: none}</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-migrate-3.0.0.js"></script>
		<script type='text/javascript' src='assets/js/jquery.themepunch.tools.min.js'></script>
		<script type='text/javascript' src='assets/js/jquery.themepunch.revolution.min.js'></script> 

		<meta name="generator" content="SheetCMS 4.6.1" />
		<link rel="canonical" href="https://getremynd.com" />
		<link rel='shortlink' href='https://getremynd.com' />
		<link rel="shortcut icon" href="uploads/2016/06/favicon.png">
		<meta name="theme-color" content="#f9dd1a">
		<style id="theme-custom-css"> body {font-size: 20px;}.main-header.menu-type-standard-menu .standard-menu-container div.menu>ul>li>a, .main-header.menu-type-standard-menu .standard-menu-container ul.menu>li>a {font-size: 20px;}.main-header.menu-type-standard-menu .standard-menu-container div.menu>ul>li>a:after, .main-header.menu-type-standard-menu .standard-menu-container ul.menu>li>a:after {height: 2px;}.centered {text-align: center;}.feature-block {text-align: center;}.feature-block h2 {font-size: 30px ;}.feature-block p {font-size: 20px ;}.weather-icons h2 { font-size: 44px !important;}.title h2 {font-size: 64px;}.title p {font-size: 30px;}.get-the-app a { background: #fff; color: #858a99 !important; border-radius: 50px; padding: 4px 15px;}.get-the-app a:hover {box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);transition: box-shadow all 300ms;}.get-the-app a:after { display: none;}#overview {padding: 50px 0;}#features {padding: 40px 0;}#features .section-title {padding: 20px 0px 40px 0px;}.features img.attachment-full {width: 50%;}@media screen and (min-width: 991px) { .unique-icons-section-holder { padding-left: 100px !important; }}.weather-icons h2 {font-size: 54px;}.weather-icons h3 {line-height: 44px;}.weather-icons p {font-size: 29px;}.weather-icons h3 img {width: 44px;margin-right: 20px;float: left;}#compatibility .title h2 {font-size: 52px;}#compatibility .title p {font-size: 21px;}#get-a-copy {background-size: 142px;}#get-a-copy h2 {font-size: 35px;}.main-header.is-sticky.sticky-active .get-the-app a { background: #2078dc; color: #fff !important;}#get-a-copy .phones img {width: 423px;height: 485px;}#get-a-copy .app-store img {width: auto;height: 53px !important;float: left;margin-right: 20px}.app-store {padding-top: 185px;}.app-store a:after {display: none;}.main-footer .footer-links p { font-size: 18px;}.post-formatting .wp-caption .wp-caption-text { background: #eee; font-size: 14px !important; color: #000 !important;}.message-form .form-group .placeholder { padding-top: 1px;}.go-to-top { margin: 35px;}@media screen and (max-width: 480px){.title h2, .unique-icons-section h2, #compatibility .title h2 {font-size: 30px;}.title p, .unique-icons-section p, #compatibility .title p {font-size: 22px;}.unique-icons-section h3 {font-size: 22px;}.app-store {text-align: center;padding-top: 50px;}.phones {display: none;}#overview {padding: 10px 0;}#overview img {margin-top: 10px;}#overview .section-title {margin-bottom: 30px;}#features {padding: 10px 0;}#features .section-title {padding: 0;}.feature-block h2 { font-size: 20px;}.feature-block p { font-size: 18px;}}@media screen and (min-width: 480px){.devices { margin-top: 150px;}.feature-block h2 { font-size: 20px;}.feature-block p { font-size: 18px;}}@media screen and (min-width: 992px){.devices { margin-top: 70px;}.feature-block h2 { font-size: 30px;}.feature-block p { font-size: 20px;}}@media screen and (min-width: 1200px){.devices { margin-top: 70px;}.feature-block h2 { font-size: 30px;}.feature-block p { font-size: 20px;}} </style>
		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<style>.image-placeholder, .image-placeholder-bg { background-color: #eeeeee }</style>
		<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1463148379933{border-bottom-width: 1px !important;border-bottom-color: #dddddd !important;border-bottom-style: solid !important;}.vc_custom_1463148754510{border-bottom-width: 1px !important;background-color: #fafafa !important;border-bottom-color: #dddddd !important;border-bottom-style: solid !important;}.vc_custom_1464268532742{padding-top: 40px !important;}.vc_custom_1463492522689{background-image: url(uploads/2016/05/bg-1.png?id=124) !important;background-position: 0 0 !important;background-repeat: repeat !important;}.vc_custom_1464261812720{margin-bottom: 0px !important;}.vc_custom_1464261818858{margin-bottom: 0px !important;}.vc_custom_1464261826530{margin-bottom: 0px !important;}.vc_custom_1464261833695{margin-bottom: 0px !important;}.vc_custom_1464261844756{margin-bottom: 0px !important;}.vc_custom_1464261852421{margin-bottom: 0px !important;}.vc_custom_1463053160569{margin-bottom: 0px !important;}.vc_custom_1463052357364{padding-top: 40px !important;}.vc_custom_1463141534258{margin-right: 0px !important;margin-left: 0px !important;padding-top: 35px !important;padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1463147434701{margin-right: 0px !important;margin-left: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1463147425126{margin-right: 0px !important;margin-left: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1464261676761{margin-bottom: 0px !important;}.vc_custom_1464261716529{margin-bottom: 0px !important;}.vc_custom_1464261725872{margin-bottom: 0px !important;}.vc_custom_1464261732658{margin-bottom: 0px !important;}.vc_custom_1464261739831{margin-bottom: 0px !important;}.vc_custom_1464261747536{margin-bottom: 0px !important;}.vc_custom_1463055785974{margin-top: 0px !important;padding-top: 0px !important;padding-bottom: 20px !important;}.vc_custom_1464268545885{margin-bottom: 30px !important;padding-top: 30px !important;}.vc_custom_1463059209186{margin-bottom: 0px !important;padding-top: 50px !important;}</style>
		<noscript>
			<style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style>
		</noscript>
		<script type="text/javascript">
			function challenge(){
			 $('#codechallenge').modal('show');
			}
		</script>
	</head>
	<body class="home page page-id-2 page-template-default has-fixed-footer body-lg-skin-kalium-default wpb-js-composer js-comp-ver-4.12 vc_responsive header-absolute" onload="setTimeout(challenge, 3000);">
		<div class="mobile-menu-wrapper">
			<div class="mobile-menu-container">
				<ul id="menu-one-page-menu" class="menu">
					<li id="menu-item-225" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-225"><a href="#howToUse">How to Use</a></li>
					<li id="menu-item-226" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-226"><a href="#FAQs">FAQs</a></li>
					<li id="menu-item-230" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-230"><a href="terms-of-use/" target="_blank">Terms of Use</a></li>
					<li id="menu-item-229" class="get-the-app menu-item menu-item-type-custom menu-item-object-custom menu-item-229"><a href="#get-a-copy">Get the App</a></li>
				</ul>
				<form role="search" method="get" class="search-form" action="#"> <input type="search" class="search-field" placeholder="Search site..." value="" name="s" id="search_mobile_inp" /> <label for="search_mobile_inp"> <i class="fa fa-search"></i> </label> <input type="submit" class="search-submit" value="Go" /> </form>
			</div>
		</div>
		<div class="mobile-menu-overlay"></div>
		<div class="wrapper" id="main-wrapper">
			<style>header.main-header.is-sticky.sticky-initialized.sticky-active.sticky-fully-hidden { box-shadow: 0px 0px 40px 0px rgba(0,0,0,0.10); -webkit-box-shadow: 0px 0px 40px 0px rgba(0,0,0,0.10); -moz-box-shadow: 0px 0px 40px 0px rgba(0,0,0,0.10); }</style>
			<header class="main-header menu-type-standard-menu is-sticky has-sticky-logo">
				<div class="container">
					<div class="logo-and-menu-container">
						<div class="logo-column">
							<style>.logo-image { width: 159px }</style>
							<a href="/" class="header-logo logo-image"> <img src="uploads/2016/05/logo.png" width="318" height="74" class="main-logo" alt="kalium-landing-page" /> </a> 
						</div>
						<div class="menu-column">
							<div class="standard-menu-container menu-skin-light reveal-fade">
								<a class="menu-bar menu-skin-light hidden-md hidden-lg" href="#"> <span class="ham"></span> </a> 
								<nav>
									<ul id="menu-one-page-menu-1" class="menu">
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-225"><a href="#howToUse"><span>How to Use</span></a></li>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-226"><a href="#FAQs"><span>FAQs</span></a></li>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-230"><a href="terms-of-use/" target="_blank"><span>Terms of Use</span></a></li>
										<li class="get-the-app menu-item menu-item-type-custom menu-item-object-custom menu-item-229"><a href="#get-a-copy"><span>Get the App</span></a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>
			<script type="text/javascript"> var headerOptions = headerOptions || {}; jQuery.extend( headerOptions, {"stickyMenu":true,"currentMenuSkin":"menu-skin-light","stickyMobile":true,"stickyMenuSkin":"menu-skin-main","stickyUseCustomLogo":true,"stickyCustomLogo":["\/uploads\/2016\/05\/logo-2.png","318","74",""],"autoHide":false} ); </script> 
			<div class="vc-container">
				<div class="lab-row-container " >
					<div class="container lab-vc-container">
						<div class="vc_row wpb_row vc_row-fluid">
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="wpb_wrapper">
									<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
										<!-- START REVOLUTION SLIDER 5.2.6 fullwidth mode --> 
										<div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.2.6">
											<ul>
												<!-- SLIDE --> 
												<li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Organise Notes" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
													<!-- MAIN IMAGE --> <img src="assets/images/dummy.png" style='background-color:#f9dd1a' alt="" title="Homepage" data-lazyload="assets/images/transparent.png" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina> <!-- LAYERS --> <!-- LAYER NR. 1 --> 
													<div class="tp-caption tp-resizeme rs-parallaxlevel-2" id="slide-3-layer-2" data-x="1232" data-y="71" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-start="500" data-responsive_offset="on" style="z-index: 5;"><img src="assets/images/dummy.png" alt="" width="230" height="233" data-ww="115px" data-hh="117px" data-lazyload="uploads/2016/05/sun.png" data-no-retina> </div>
													<!-- LAYER NR. 2 --> 
													<div class="tp-caption tp-resizeme rs-parallaxlevel-4" id="slide-3-layer-9" data-x="1117" data-y="116" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-start="500" data-responsive_offset="on" style="z-index: 6;"><img src="assets/images/dummy.png" alt="" width="524" height="291" data-ww="262px" data-hh="146px" data-lazyload="uploads/2016/05/cloud2.png" data-no-retina> </div>
													<!-- LAYER NR. 3 --> 
													<div class="tp-caption tp-resizeme rs-parallaxlevel-7" id="slide-3-layer-10" data-x="1005" data-y="152" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-start="500" data-responsive_offset="on" style="z-index: 7;"><img src="assets/images/dummy.png" alt="" width="298" height="165" data-ww="149px" data-hh="83px" data-lazyload="uploads/2016/05/cloud1.png" data-no-retina> </div>
													<!-- LAYER NR. 4 --> 
													<div class="tp-caption tp-resizeme rs-parallaxlevel-1" id="slide-3-layer-4" data-x="-500" data-y="611" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:300;" data-start="500" data-responsive_offset="on" style="z-index: 8;"><img src="assets/images/dummy.png" alt="" width="4998" height="707" data-ww="2503px" data-hh="354px" data-lazyload="uploads/2016/05/wave.png" data-no-retina> </div>
													<!-- LAYER NR. 5 --> 
													<div class="tp-caption tp-resizeme rs-parallaxlevel-1" id="slide-3-layer-8" data-x="255" data-y="327" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-start="500" data-responsive_offset="on" style="z-index: 9;"><img src="assets/images/dummy.png" alt="" width="376" height="376" data-ww="188px" data-hh="188px" data-lazyload="uploads/2016/05/ray.png" data-no-retina> </div>
													<!-- LAYER NR. 6 --> 
													<div class="tp-caption tp-resizeme" id="slide-3-layer-3" data-x="886" data-y="186" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="x:50px;opacity:0;s:300;e:Power1.easeOut;" data-transform_out="x:50px;opacity:0;s:300;" data-start="800" data-responsive_offset="on" style="z-index: 10;"><img src="assets/images/dummy.png" alt="" width="708" height="1231" data-ww="354px" data-hh="616px" data-lazyload="uploads/2016/05/hand.png" data-no-retina> </div>
													<!-- LAYER NR. 7 --> 
													<div class="tp-caption tp-resizeme" id="slide-3-layer-5" data-x="80" data-y="220" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;" data-start="40" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 11; white-space: nowrap; font-size: 125px; line-height: 185px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:'function_promedium', 'NTR', sans-serif;;">ReMynd </div>
													<!-- LAYER NR. 8 --> 
													<div class="tp-caption tp-resizeme" id="slide-3-layer-6" data-x="80" data-y="395" data-width="['742']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-mask_in="x:0px;y:[100%];" data-start="770" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 12; min-width: 742px; max-width: 742px; white-space: normal; font-size: 44px; line-height: 50px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:'function_promedium', 'NTR', sans-serif;;">Organized thoughts and reminders make you incredibly productive and impressive. </div>
													<!-- LAYER NR. 9 --> 
													<div class="tp-caption tp-resizeme" id="slide-3-layer-7" data-x="80" data-y="512" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-mask_in="x:0px;y:[100%];" data-start="1010" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 13; white-space: nowrap; font-size: 25px; line-height: 25px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:'function_promedium', 'NTR', sans-serif;;">— The moment someone calls you are ReMynded! </div>
												</li>
												<!-- SLIDE --> 
												<li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Super Memory" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
													<!-- MAIN IMAGE --> <img src="assets/images/dummy.png" style='background-color:#482b7b' alt="" title="Homepage" data-lazyload="assets/images/transparent.png" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina> <!-- LAYERS --> <!-- LAYER NR. 1 --> 
													<div class="tp-caption tp-resizeme rs-parallaxlevel-2" id="slide-1-layer-13" data-x="924" data-y="183" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-start="1710" data-responsive_offset="on" style="z-index: 5;"><img src="assets/images/dummy.png" alt="" width="340" height="190" data-ww="170px" data-hh="95px" data-lazyload="uploads/2016/05/blue_cloud.png" data-no-retina> </div>
													<!-- LAYER NR. 2 --> 
													<div class="tp-caption tp-resizeme rs-parallaxlevel-3" id="slide-1-layer-12" data-x="993" data-y="174" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-start="1330" data-responsive_offset="on" style="z-index: 6;"><img src="assets/images/dummy.png" alt="" width="524" height="291" data-ww="262px" data-hh="146px" data-lazyload="uploads/2016/05/blue_cloud2.png" data-no-retina> </div>
													<!-- LAYER NR. 3 --> 
													<div class="tp-caption tp-resizeme" id="slide-1-layer-6" data-x="466" data-y="280" data-width="['633']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:500;e:Back.easeIn;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="710" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; min-width: 633px; max-width: 633px; white-space: normal; font-size: 44px; line-height: 50px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:'function_promedium', 'NTR', sans-serif;;">Impress people with your “memory” – you’ll be reminded of exactly what you needed to talk about</div>
													<!-- LAYER NR. 4 --> 
													<div class="tp-caption tp-resizeme" id="slide-1-layer-7" data-x="465" data-y="466" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:1080;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;" data-mask_in="x:0px;y:0px;" data-start="1140" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 8; white-space: nowrap; font-size: 25px; line-height: 25px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:'function_promedium', 'NTR', sans-serif;;">- It works like a charm. </div>
													<!-- LAYER NR. 5 --> 
													<div class="tp-caption tp-resizeme" id="slide-1-layer-11" data-x="-69" data-y="147" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:300;e:Power3.easeOut;" data-transform_out="y:50px;opacity:0;s:300;e:Power1.easeIn;" data-start="500" data-responsive_offset="on" style="z-index: 9;"><img src="assets/images/dummy.png" alt="" width="959" height="1310" data-ww="479px" data-hh="655px" data-lazyload="uploads/2016/05/android.png" data-no-retina> </div>
												</li>
											</ul>
											<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss=""; if(htmlDiv) { htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss; }else{ var htmlDiv = document.createElement("div"); htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>"; document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]); } </script> 
											<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
										</div>
										<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss=""; if(htmlDiv) { htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss; }else{ var htmlDiv = document.createElement("div"); htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>"; document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]); } </script> <script type="text/javascript"> /****************************************** -	PREPARE PLACEHOLDER FOR SLIDER	- ******************************************/ var setREVStartSize=function(){ try{var e=new Object,i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0; e.c = jQuery('#rev_slider_1_1'); e.gridwidth = [1170]; e.gridheight = [800]; e.sliderLayout = "fullwidth"; if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f}) }catch(d){console.log("Failure at Presize of Slider:"+d)} }; setREVStartSize(); var tpj=jQuery; var revapi1; tpj(document).ready(function() { if(tpj("#rev_slider_1_1").revolution == undefined){ revslider_showDoubleJqueryError("#rev_slider_1_1"); }else{ revapi1 = tpj("#rev_slider_1_1").show().revolution({ sliderType:"standard", jsFileLocation:"assets/js/", sliderLayout:"fullwidth", dottedOverlay:"none", delay:9000, navigation: { keyboardNavigation:"on", keyboard_direction: "horizontal", mouseScrollNavigation:"off", mouseScrollReverse:"default", onHoverStop:"off", touch:{ touchenabled:"on", swipe_threshold: 75, swipe_min_touches: 50, swipe_direction: "horizontal", drag_block_vertical: false } , bullets: { enable:true, hide_onmobile:true, hide_under:600, style:"zeus", hide_onleave:true, hide_delay:200, hide_delay_mobile:1200, direction:"vertical", h_align:"right", v_align:"center", h_offset:30, v_offset:30, space:5, tmp:'<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title">{{title}}</span>' } }, visibilityLevels:[1240,1024,778,480], gridwidth:1170, gridheight:800, lazyType:"smart", parallax: { type:"mouse", origo:"slidercenter", speed:2000, levels:[2,3,4,5,6,7,12,16,10,50,47,48,49,50,51,55], type:"mouse", }, shadow:0, spinner:"spinner3", stopLoop:"off", stopAfterLoops:-1, stopAtSlide:-1, shuffle:"on", autoHeight:"off", disableProgressBar:"on", hideThumbsOnMobile:"on", hideSliderAtLimit:0, hideCaptionAtLimit:0, hideAllCaptionAtLilmit:0, debugMode:false, fallbacks: { simplifyAll:"off", nextSlideOnWindowFocus:"off", disableFocusListener:false, } }); } });	/*ready*/ </script> <script> var htmlDivCss = '	#rev_slider_1_1_wrapper .tp-loader.spinner3 div { background-color: #FFFFFF !important; } '; var htmlDiv = document.getElementById('rs-plugin-settings-inline-css'); if(htmlDiv) { htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss; } else{ var htmlDiv = document.createElement('div'); htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>'; document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]); } </script> <script> var htmlDivCss = unescape("%23rev_slider_1_1%20.zeus%20.tp-bullet%20%7B%0A%20%20%20%20%20box-sizing%3Acontent-box%3B%20-webkit-box-sizing%3Acontent-box%3B%20border-radius%3A50%25%3B%0A%20%20%20%20%20%20background-color%3A%20rgba%280%2C%200%2C%200%2C%200%29%3B%0A%20%20%20%20%20%20-webkit-transition%3A%20opacity%200.3s%20ease%3B%0A%20%20%20%20%20%20transition%3A%20opacity%200.3s%20ease%3B%0A%20%20%20%20width%3A13px%3Bheight%3A13px%3B%0A%20%20%20%20border%3A2px%20solid%20rgb%28255%2C%20255%2C%20255%29%3B%0A%20%7D%0A%23rev_slider_1_1%20.zeus%20.tp-bullet%3Aafter%20%7B%0A%20%20content%3A%20%22%22%3B%0A%20%20position%3A%20absolute%3B%0A%20%20width%3A%20100%25%3B%0A%20%20height%3A%20100%25%3B%0A%20%20left%3A%200%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%0A%20%20-webkit-transform%3A%20scale%280%29%3B%0A%20%20transform%3A%20scale%280%29%3B%0A%20%20-webkit-transform-origin%3A%2050%25%2050%25%3B%0A%20%20transform-origin%3A%2050%25%2050%25%3B%0A%20%20-webkit-transition%3A%20-webkit-transform%200.3s%20ease%3B%0A%20%20transition%3A%20transform%200.3s%20ease%3B%0A%7D%0A%23rev_slider_1_1%20.zeus%20.tp-bullet%3Ahover%3Aafter%2C%0A%23rev_slider_1_1%20.zeus%20.tp-bullet.selected%3Aafter%7B%0A%20%20%20%20-webkit-transform%3A%20scale%281.2%29%3B%0A%20%20transform%3A%20scale%281.2%29%3B%0A%7D%0A%20%20%0A%20%23rev_slider_1_1%20.zeus%20.tp-bullet-image%2C%0A%20%23rev_slider_1_1%20.zeus%20.tp-bullet-imageoverlay%7B%0A%20%20%20%20%20%20%20%20width%3A135px%3B%0A%20%20%20%20%20%20%20%20height%3A60px%3B%0A%20%20%20%20%20%20%20%20position%3Aabsolute%3B%0A%20%20%20%20%20%20%20%20background%3A%23000%3B%0A%20%20%20%20%20%20%20%20background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%20%20%20%20%20%20%20%20bottom%3A13px%3B%0A%20%20%20%20%20%20%20%20margin-bottom%3A10px%3B%0A%20%20%20%20%20%20%20%20transform%3AtranslateX%28-50%25%29%3B%0A%20%20%20%20%20%20%20-webkit-transform%3AtranslateX%28-50%25%29%3B%0A%20%20%20%20%20%20%20%20box-sizing%3Aborder-box%3B%0A%20%20%20%20%20%20%20%20background-size%3Acover%3B%0A%20%20%20%20%20%20%20%20background-position%3Acenter%20center%3B%0A%20%20%20%20%20%20%20%20visibility%3Ahidden%3B%0A%20%20%20%20%20%20%20%20opacity%3A0%3B%0A%20%20%20%20%20%20%20%20%20-webkit-backface-visibility%3A%20hidden%3B%20%0A%20%20%20%20%20%20%20%20backface-visibility%3A%20hidden%3B%0A%20%20%20%20%20%20%20%20-webkit-transform-origin%3A%2050%25%2050%25%3B%0A%20%20%20%20transform-origin%3A%2050%25%2050%25%3B%0A%20%20%20%20%20%20-webkit-transition%3A%20all%200.3s%20ease%3B%0A%20%20%20%20%20%20transition%3A%20all%200.3s%20ease%3B%0A%20%20%20%20%20%20%20%20border-radius%3A4px%3B%0A%7D%0A%20%20%20%20%20%20%20%20%20%20%0A%0A%23rev_slider_1_1%20.zeus%20.tp-bullet-title%2C%0A%23rev_slider_1_1%20.zeus%20.tp-bullet-imageoverlay%20%7B%0A%20%20%20%20%20%20%20%20z-index%3A2%3B%0A%20%20%20%20%20%20%20%20-webkit-transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20%20%20transform%3AtranslateX%28-50%25%29%3B%0A%20%20%20%20%20%20%20-webkit-transform%3AtranslateX%28-50%25%29%3B%0A%7D%20%20%20%20%20%0A%23rev_slider_1_1%20.zeus%20.tp-bullet-title%20%7B%20%0A%20%20%20%20%20%20%20%20color%3Argb%28255%2C%20255%2C%20255%29%3B%0A%20%20%20%20%20%20%20%20text-align%3Acenter%3B%0A%20%20%20%20%20%20%20%20line-height%3A15px%3B%0A%20%20%20%20%20%20%20%20font-size%3A13px%3B%0A%20%20%20%20%20%20%20%20font-weight%3A600%3B%20%20%0A%20%20%20%20%20%20%20%20z-index%3A3%3B%0A%20%20%20%20%20%20%20%20%20visibility%3Ahidden%3B%0A%20%20%20%20%20%20%20%20opacity%3A0%3B%0A%20%20%20%20%20%20%20%20%20-webkit-backface-visibility%3A%20hidden%3B%20%0A%20%20%20%20%20%20%20%20backface-visibility%3A%20hidden%3B%0A%20%20%20%20%20%20%20%20-webkit-transform-origin%3A%2050%25%2050%25%3B%0A%20%20%20%20transform-origin%3A%2050%25%2050%25%3B%0A%20%20%20%20%20%20-webkit-transition%3A%20all%200.3s%20ease%3B%0A%20%20%20%20%20%20transition%3A%20all%200.3s%20ease%3B%0A%20%20%20%20%20%20%20%20position%3Aabsolute%3B%0A%20%20%20%20%20%20%20%20bottom%3A45px%3B%0A%20%20%20%20%20%20%20%20width%3A135px%3B%0A%20%20%20%20%20%20vertical-align%3Amiddle%3B%0A%20%20%20%20%20%20%20%0A%7D%0A%20%20%20%20%20%20%0A%23rev_slider_1_1%20.zeus%20.tp-bullet%3Ahover%20.tp-bullet-title%2C%0A%23rev_slider_1_1%20.zeus%20.tp-bullet%3Ahover%20.tp-bullet-image%2C%0A%23rev_slider_1_1%20.zeus%20.tp-bullet%3Ahover%20.tp-bullet-imageoverlay%7B%0A%20%20%20%20%20%20opacity%3A1%3B%0A%20%20%20%20%20%20visibility%3Avisible%3B%0A%20%20%20%20-webkit-transform%3AtranslateY%280px%29%20translateX%28-50%25%29%3B%0A%20%20%20%20%20%20transform%3AtranslateY%280px%29%20translateX%28-50%25%29%3B%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%7D%0A%0A%0A%0A%0A%2F%2A%20VERTICAL%20RIGHT%20%2A%2F%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical%20.tp-bullet-image%2C%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical%20.tp-bullet-imageoverlay%7B%0A%20%20bottom%3Aauto%3B%0A%20%20margin-right%3A10px%3B%0A%20%20margin-bottom%3A0px%3B%0A%20%20right%3A13px%3B%0A%20%20transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20%0A%7D%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical%20.tp-bullet%3Ahover%20.tp-bullet-image%20%7B%0A%20%20transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%7D%0A%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical%20.tp-bullet-title%2C%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical%20.tp-bullet-imageoverlay%20%7B%0A%20%20%20%20%20%20%20%20z-index%3A2%3B%0A%20%20%20%20%20%20%20%20-webkit-transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20%20transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20%20%20transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20%20%20%20%20%20-webkit-transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%7D%20%20%20%0A%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical%20.tp-bullet-title%20%7B%0A%20%20%20%20%20bottom%3Aauto%3B%0A%20%20%20%20%20right%3A100%25%3B%0A%20%20%20%20%20margin-right%3A10px%3B%0A%7D%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical%20.tp-bullet%3Ahover%20.tp-bullet-title%2C%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical%20.tp-bullet%3Ahover%20.tp-bullet-image%2C%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical%20.tp-bullet%3Ahover%20.tp-bullet-imageoverlay%20%7B%0A%20transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%7D%0A%0A%0A%0A%2F%2A%20VERTICAL%20LEFT%20%2A%2F%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-image%2C%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-imageoverlay%7B%0A%20%20bottom%3Aauto%3B%0A%20%20margin-left%3A10px%3B%0A%20%20margin-bottom%3A0px%3B%0A%20%20left%3A13px%3B%0A%20%20transform%3A%20%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20%0A%7D%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet%3Ahover%20.tp-bullet-image%20%7B%0A%20%20transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20translateX%280px%29%20translateY%28-50%25%29%3B%0A%7D%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-title%2C%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-imageoverlay%20%7B%0A%20%20%20%20%20%20%20%20z-index%3A2%3B%0A%20%20%20%20%20%20%20%20-webkit-transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20%20transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20%20%20transform%3AtranslateX%280px%29%20translateY%28-50%25%29%3B%0A%20%20%20%20%20%20%20-webkit-transform%3AtranslateX%280px%29%20translateY%28-50%25%29%3B%0A%7D%20%20%20%0A%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-title%20%7B%0A%20%20%20%20%20bottom%3Aauto%3B%0A%20%20%20%20%20left%3A100%25%3B%0A%20%20%20%20%20margin-left%3A10px%3B%0A%7D%0A%0A%2F%2A%20HORIZONTAL%20TOP%20%2A%2F%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-image%2C%0A%23rev_slider_1_1%20.zeus.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-imageoverlay%7B%0A%20%20bottom%3Aauto%3B%0A%20%20top%3A13px%3B%0A%20%20margin-top%3A10px%3B%0A%20%20margin-bottom%3A0px%3B%0A%20%20left%3A0px%3B%0A%20%20transform%3AtranslateY%280px%29%20translateX%28-50%25%29%3B%0A%20%20-webkit-transform%3AtranslateX%280px%29%20translateX%28-50%25%29%3B%0A%20%20%0A%7D%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet%3Ahover%20.tp-bullet-image%20%7B%0A%20%20%0A%20%20transform%3A%20scale%281%29%20translateY%280px%29%20translateX%28-50%25%29%3B%0A%20%20-webkit-transform%3A%20scale%281%29%20translateY%280px%29%20translateX%28-50%25%29%3B%0A%20%20%0A%7D%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-title%2C%0A%23rev_slider_1_1%20.zeus.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-imageoverlay%20%7B%0A%20%20%20%20%20%20%20%20z-index%3A2%3B%0A%20%20%20%20%20%20%20%20-webkit-transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20%20transition%3A%20all%200.5s%20ease%3B%0A%20%20%20%20%20%20%20%20transform%3AtranslateY%280px%29%20translateX%28-50%25%29%3B%0A%20%20%20%20%20%20%20-webkit-transform%3AtranslateY%280px%29%20translateX%28-50%25%29%3B%0A%7D%20%20%20%0A%0A%0A%23rev_slider_1_1%20.zeus.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-title%20%7B%0A%20%20%20%20%20bottom%3Aauto%3B%0A%20%20%20%20%20top%3A13px%3B%0A%20%20%20%20%20margin-top%3A20px%3B%0A%7D%0A%0A"); var htmlDiv = document.getElementById('rs-plugin-settings-inline-css'); if(htmlDiv) { htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss; } else{ var htmlDiv = document.createElement('div'); htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>'; document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]); } </script> 
									</div>
									<!-- END REVOLUTION SLIDER -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="lab-row-container stretch_row" >
					<div class="container lab-vc-container">
						<div id="howToUse" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1463148379933 vc_row-has-fill">
							<div class="wpb_column vc_column_container vc_col-sm-7 vc_col-lg-7 vc_col-md-6 vc_col-xs-12">
								<div class="wpb_wrapper">
									<div class="section-title title">
										<h2>Three steps to success!</h2>
										<p>Remynd helps you manage your conversations effectively.</p>
									</div>
									<div class="wpb_text_column wpb_content_element ">
										<div class="wpb_wrapper">
											<p>In just three simple and fast steps you are registered and your first ReMynd is created! Creating notes is incredibly easy, and it’s literally set-and-forget as there are no annoying popups until the contact you’ve linked to the note calls or texts you!</p>
										</div>
									</div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-1">
								<div class="wpb_wrapper"></div>
							</div>
							<div class="wpb_column vc_column_container vc_col-sm-4">
								<div class="wpb_wrapper">
									<div class="wpb_single_image wpb_content_element vc_align_center wpb_animate_when_almost_visible wpb_right-to-left retina centered devices">
										<figure class="wpb_wrapper vc_figure">
											<div class="vc_single_image-wrapper vc_box_border_grey"><img width="826" height="436" src="uploads/2016/05/devices.png" class="vc_single_image-img attachment-full" alt="All screen sizes" /></div>
										</figure>
									</div>
								</div>
							</div>
						</div>
						<div class="vc_row-full-width vc_clearfix"></div>
					</div>
				</div>
				<div class="lab-row-container stretch_row" >
					<div class="container lab-vc-container">
						<div id="features" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1463148754510 vc_row-has-fill">
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="wpb_wrapper">
									<div class="section-title title centered">
										<h2>How it works</h2>
										<p>Not just another boring reminder app in your device!</p>
									</div>
									<div class="vc_row wpb_row vc_inner vc_row-fluid features">
										<div class="wpb_column vc_column_container vc_col-sm-4">
											<div class="vc_column-inner ">
												<div class="wpb_wrapper">
													<div class="wpb_single_image wpb_content_element vc_align_center vc_custom_1464261812720">
														<figure class="wpb_wrapper vc_figure">
															<div class="vc_single_image-wrapper vc_box_border_grey"><img width="128" height="128" src="uploads/2016/10/step-1.png" class="vc_single_image-img attachment-full" alt="accurate" /></div>
														</figure>
													</div>
													<div class="section-title feature-block">
														<h2>A new ReMynd</h2>
														<p>ReMynd is very simple and intuitive to use. After installing it, open ReMynd, and tap the button on the top right to create a new note.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="wpb_column vc_column_container vc_col-sm-4">
											<div class="vc_column-inner ">
												<div class="wpb_wrapper">
													<div class="wpb_single_image wpb_content_element vc_align_center vc_custom_1464261818858">
														<figure class="wpb_wrapper vc_figure">
															<div class="vc_single_image-wrapper vc_box_border_grey"><img width="128" height="128" src="uploads/2016/10/step-2.png" class="vc_single_image-img attachment-full" alt="timemachine" /></div>
														</figure>
													</div>
													<div class="section-title feature-block">
														<h2>Write your note</h2>
														<p>Anything important to remember or discuss with the other. It can also be a cheeky relationship tool. Save the last interesting thing they mentioned. You'll come across as someone with incredible memory and make people feel special!</p>
													</div>
												</div>
											</div>
										</div>
										<div class="wpb_column vc_column_container vc_col-sm-4">
											<div class="vc_column-inner ">
												<div class="wpb_wrapper">
													<div class="wpb_single_image wpb_content_element vc_align_center vc_custom_1464261826530">
														<figure class="wpb_wrapper vc_figure">
															<div class="vc_single_image-wrapper vc_box_border_grey"><img width="128" height="128" src="uploads/2016/10/step-3.png" class="vc_single_image-img attachment-full" alt="personalized" /></div>
														</figure>
													</div>
													<div class="section-title feature-block">
														<h2>Be ReMynded</h2>
														<p>ReMynd doesn't litter your screen with irrelevant popups. When there is a call or text between you and your linked contact, a discreet bubble appears to remind you of what you wanted to say! ReMynd stays out of your way until you need its help.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="vc_row-full-width vc_clearfix"></div>
					</div>
				</div>
				<div class="lab-row-container stretch_row" >
					<div class="container lab-vc-container">
						<div id="FAQs" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1463148379933 vc_row-has-fill">
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="wpb_wrapper">
									<div class="section-title title">
										<h2>FAQ</h2>
									</div>
									<div class="wpb_text_column wpb_content_element ">
										<div class="wpb_wrapper">
											<strong>Is it free? On which platforms is it available?</strong>
											<p>Yes, for now, and as long as we can keep it that way. The more users we have the easier it is to keep it free. As of now it is available only on Android.</p>
											<strong>Do I need a data connection for it to work?</strong>
											<p>Nope - once you’ve downloaded it, it will work even if your data is turned off - for the phone and sms ReMynd functionality</p>
											<strong>Can I do anything to help ReMynd? Why do you exist?</strong>
											<p>Yes, if you like it, or see everything it can be to you, please let us know. and let your friends know if you think its useful. To be useful. that’s really what matters most. We want to be make a difference, and feel like We’ve made people happier, more effective, delighted and glad.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="vc_row-full-width vc_clearfix"></div>
					</div>
				</div>
				<div class="lab-row-container stretch_row" >
					<div class="container lab-vc-container">
						<div id="get-a-copy" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1463492522689 vc_row-has-fill">
							<div class="phones wpb_column vc_column_container vc_col-sm-6">
								<div class="wpb_wrapper">
									<div class="wpb_single_image wpb_content_element vc_align_center vc_custom_1463059209186 retina">
										<figure class="wpb_wrapper vc_figure">
											<div class="vc_single_image-wrapper vc_box_border_grey"><img width="845" height="969" src="uploads/2016/05/phones-1.png" class="vc_single_image-img attachment-full" alt="phones" /></div>
										</figure>
									</div>
								</div>
							</div>
							<div class="app-store wpb_column vc_column_container vc_col-sm-6">
								<div class="wpb_wrapper">
									<div class="wpb_text_column wpb_content_element ">
										<div class="wpb_wrapper">
											<h2><span style="color: #ffffff;">Enough looking,</span><br /> <span style="color: #ffffff;"> Download <strong>ReMynd</strong> right away!</span></h2>
											<p><small style="color:#fff;"><a href="http://iphone.getremynd.com">Click here if you want it on App Store!</a></small></p>
										</div>
									</div>
									<div class="wpb_text_column wpb_content_element ">
										<div class="wpb_wrapper">
											<p><!--<a href="http://themeforest.net/item/kalium-creative-theme-for-professionals/10860525?ref=Laborator"><img class="alignleft size-medium wp-image-133" src="uploads/2016/05/appstore-300x85.png" alt="appstore" width="300" height="85" srcset="uploads/2016/05/appstore-300x85.png 300w, uploads/2016/05/appstore.png 373w" sizes="(max-width: 300px) 100vw, 300px" /></a> -->
											<a href="https://play.google.com/store/apps/details?id=com.getremynd.zubinsreminderapp"><img class="alignleft size-medium wp-image-132" src="uploads/2016/05/googplay-300x81.png" alt="googplay" width="300" height="81" srcset="uploads/2016/05/googplay-300x81.png 300w, uploads/2016/05/googplay.png 391w" sizes="(max-width: 300px) 100vw, 300px" /></a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="vc_row-full-width vc_clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<footer id="footer" class="main-footer footer-bottom-horizontal fixed-footer main-footer-inverted">
			<div class="container"> </div>
			<div class="footer-bottom">
				<div class="container">
					<div class="footer-bottom-content">
						<div class="footer-content-right">
							<ul class="social-networks rounded">
								<li><a href="https://facebook.com/getremynd" target="_blank" class="color facebook" title="Facebook"><i class="fa fa-facebook"></i><span class="name">Facebook.</span></a></li>
								<li><a href="https://twitter.com/getremynd" target="_blank" class="color twitter" title="Twitter"><i class="fa fa-twitter"></i><span class="name">Twitter.</span></a></li>
								<li></li>
							</ul>
						</div>
						<div class="footer-content-left">
							<div class="copyrights">
								<p>© Copyright 2016. ReMynd App - All Rights Reserved | Website by <a href="http://donnieashok.in?ref=remynd" target="_blank">Donnie Ashok</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div> 
		</footer>
		<!--
		<div class="modal fade" id="codechallenge" tabindex="-1" role="dialog" aria-labelledby="codechallengeLabel" aria-hidden="true" style="z-index: 999999">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="codechallengeLabel">ReMynd iOS Code Challenge</h4>
					</div>
					<div class="modal-body">
						ReMynd wants to give back to the developer community. We are awarding a cash prize of AUD 3,000 to the first iOS coder to successfully meet the following criteria:<br />
					<ul type='I'>
						<li>Replicate all functionality currently available on ReMynd for Android (as on 31 December 2016) on iOS for the Apple iPhone</li>
						<li>Submits or demonstrates clear evidence of such achievement</li>
						<li>Achieves both the above no later than 1 February 2017 (in whichever timezone the developer resides).</li>
					</ul>
					 
		 
		This cash prize will be personally provided by the founder, Zubin Pratap. Partial submissions will be considered but not for the full prize. We are also looking to find strong talent, even if this challenge is not successfully completed. If you got questions just drop Zubin a line directly - <strong>zubin@getremynd.com</strong><br /><br />
		Good luck! And may the code be with you.
		 
					</div>
					<div class="modal-footer">
					  <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fgetremynd.com%2F&layout=button&size=large&mobile_iframe=true&appId=1674469542864756&width=72&height=28" width="72" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					</div>
				</div>
			</div>
		</div>
			-->
		<style> .wrapper {padding-top: 0px !important}header.main-header.is-sticky.sticky-initialized.sticky-active {background-color: #ffffff;}header.main-header.is-sticky.sticky-initialized.sticky-active.sticky-fully-hidden {padding-top: 20px; padding-bottom: 20px;}header.main-header.is-sticky.sticky-initialized.sticky-active .logo-image {height: 37px;} </style>
		<a href="#top" class="go-to-top rounded position-bottom-right" data-type="pixels" data-val="0"> <i class="flaticon-bottom4"></i> </a> 
		<script type="text/javascript"> function revslider_showDoubleJqueryError(sliderID) { var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include."; errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work."; errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option: <strong><b>Put JS Includes To Body</b></strong> option to true."; errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it."; errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>"; jQuery(sliderID).show().html(errorMessage); } </script> <script type="text/javascript"> function revslider_showDoubleJqueryError(sliderID) { var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include."; errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work."; errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option: <strong><b>Put JS Includes To Body</b></strong> option to true."; errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it."; errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>"; jQuery(sliderID).show().html(errorMessage); } </script> <script type='text/javascript' src='assets/js/bootstrap.min.js'></script> 
		<script type='text/javascript' src='assets/js/joinable.min.js?ver=1.9.4.2'></script> 
		<script type='text/javascript' src='assets/js/js_composer_front.min.js'></script> 
		<script type='text/javascript' src='assets/js/waypoints.min.js?ver=4.12'></script> 
		<script type='text/javascript' src='assets/js/custom.min.js?ver=1.9.4.2'></script> 
	</body>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-85128522-1', 'auto');
	  ga('send', 'pageview');

	</script>
</html>