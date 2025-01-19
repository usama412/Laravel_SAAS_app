<!DOCTYPE html>

<html class="no-js">

<head>
	<meta charset="utf-8">
	<title>Max Allowance</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="img/favico.png" type="image/x-icon">
	<!-- <link rel="shortcut icon" href="images/favicon.ico"> -->
	<link rel='stylesheet'
		href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,400italic,500,600,700,700italic,900'>
	<link rel='stylesheet'
		href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,400italic,500,600,700,700italic,900'>
	<link href={{url('css/bootstrap.min.css')}} rel="stylesheet">
	<link rel='stylesheet' href={{url('css/structure.css')}}>
	<link rel='stylesheet' href={{url('css/landing4.css')}}>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href={{url('css/rs6.css')}}>
	<style>
	@media screen and (max-width: 600px) {
	    .one-second{
	        margin-bottom: 10px!important;
	        }
	        .button-primary{
	            margin-top: 10px!important;
	        }
	    .stars {
            margin-top: 15px!important;
            margin-bottom: 15px!important;
            }

            .star {
                font-size: 2rem!important;
                margin: 5px!important;
             }
        }
	.stars {
            display: inline-block;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
            }

        .star {
            font-size: 3rem;
            margin: 30px;
            cursor: pointer;
            color: #e3e8f0;
        }

        .star:hover,
        .star.selected {
            color: #fbcd16;
        }
        .star.selected+.rating-text .text {
            display: inline-block;
        }
	.orginal_none{
	    display: none;
	}
		@media (max-width: 600px) {
			#Side_slide .social li a {
				padding: none;
			}
			.mobile_none{
			    display: none;
			}
			.button_mobile {
				font-size: 8px;
			}

			.mobile_margin {
				margin: 0 auto 0 auto;
			}

			.mobile_section {
				display: none;
			}
			.orginal_none{
			    display: block;
			}
			#Header {
				width: 100%;
			}
		    .google_font{
		        font-size: 30px!important;
		        line-height: 40px!important;
		    }
		}
	</style>

</head>

<body
	class="home page template-slider content-brightness-light input-brightness-light style-simple button-custom layout-full-width one-page if-zoom no-content-padding no-shadows header-transparent header-fw sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders mobile-tb-center mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-sticky mobile-icon-user-ss mobile-icon-wishlist-ss mobile-icon-search-ss mobile-icon-wpml-ss mobile-icon-action-ss be-page-48 ">
	<div id="Wrapper">
	    @if(session('message'))
    <script>
        Swal.fire({
            title: 'Error',
            text: "{{ session('message') }}",
            icon: 'error',
            confirmButtonText: 'Ok',
            timer: 3000
        });
    </script>
@endif
		<div id="Header_wrapper">
			<header id="Header">
				<div id="Top_bar">
					<div class="row">
						<div class="col-12">
							<div class="top_bar_left clearfix">
								<div class="logo">
									<a id="logo" href="/" style="display: inline;" title="BeLanding 4 - Betheme"
										data-height="60" data-padding="15"><img class="logo-main scale-with-grid svg"
											src={{url('img/maxlogo3.png')}} data-retina="" data-height="" alt="landing4"
											width="250" data-no-retina /><img class="logo-sticky scale-with-grid svg"
											src={{url('img/maxlogo3.png')}} data-retina="" data-height="" alt="landing4"
											width="250" data-no-retina /><img class="logo-mobile scale-with-grid svg"
											src={{url('img/maxlogo3.png')}} data-retina="" data-height="" alt="landing4"
											width="250" data-no-retina /><img
											class="logo-mobile-sticky scale-with-grid svg" src={{url('img/maxlogo3.png')}}
											data-retina="" data-height="" alt="landing4" width="250"
											data-no-retina /></a>
								</div>
								<div class="menu_wrapper">
									<nav id="menu">
										<ul id="menu-main-menu" class="menu menu-main">
											<li> <a href="/"><span>Home</span></a> </li>
											<li> <a href="#pricing"><span>Pricing</span></a> </li>
											<!-- <li> <a href="plan"><span>Plan</span></a> </li> -->
											<li> <a href="#summary"><span>Business</span></a> </li>
											<li> <a href="#faq"><span>FAQ</span></a> </li>
											<li> <a href="#about"><span>About Us</span></a> </li>
											<li> <a href="#contact"><span>Contact</span></a> </li>
										</ul>

									</nav><a class="responsive-menu-toggle " href="#" aria-label="Mobile menu"><i
											class="icon-menu-fine" aria-hidden="true"></i></a>
								</div>
							</div>
							<div class="top_bar_right">
								<div class="top_bar_right_wrapper">
									@if(Auth::check())
									<a href="/dashboard" class="action_button top-bar-right-button scroll"
										style="margin-right: 3px;    margin-top: 20px;">Dashboard</a>
									@else
									<a href="/login" class="action_button top-bar-right-button scroll"
										style="margin-right: 3px;    margin-top: 20px;">Login</a>
									<a href="/register" class="action_button top-bar-right-button scroll"
										style="color: black;    margin-top: 20px;">Register</a>
									@endif
								</div>



							</div>
						</div>
					</div>
				</div>
				<div class="mfn-main-slider mfn-rev-slider">
					<!-- START Home Landing4 REVOLUTION SLIDER 6.5.11 -->
					<p class="rs-p-wp-fix"></p>
					<rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery"
						style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
						<rs-module id="rev_slider_1_1" data-version="6.5.11">
							<rs-slides>
								<rs-slide style="position: absolute;" data-key="rs-1" data-title="Slide" data-in="o:0;"
									data-out="a:false;"> <img src={{url('img/dummy.png')}} alt="Slide" title="Home"
										class="rev-slidebg tp-rs-img rs-lazyload"
										data-lazyload={{url('img/transparent.png')}} data-parallax="off">
									<!--
										-->
									<rs-group id="slider-1-slide-1-layer-4" data-type="group" data-rsp_ch="on"
										data-xy="x:c;xo:-349px,-349px,-248px,-248px;yo:480px,480px,312px,312px;"
										data-text="w:normal;s:20,20,12,12;l:0,0,15,15;"
										data-dim="w:395px,395px,247px,247px;h:69px,69px,42px,42px;"
										data-vbility="t,t,f,t" data-frame_0="x:-50,-50,-31,-31;" data-frame_1="sp:1000;"
										data-frame_999="o:0;st:w;sA:9000;" style="z-index:12;">
										<!--
											-->
										<rs-layer id="slider-1-slide-1-layer-0" data-type="text" data-color="#0a0130"
											data-rsp_ch="on" data-xy="xo:53px,53px,7px,7px;yo:1px,1px,53px,53px;"
											data-text="w:normal;s:18,18,10,10;l:28,28,17,17;fw:600;"
											data-dim="w:350px,350px,219px,219px;" data-frame_999="o:0;st:w;"
											style="z-index:10;font-family:'Poppins';"> Uncover Hidden Problems </rs-layer>
										<!--

											-->
										<rs-layer id="slider-1-slide-1-layer-3" data-type="image" data-rsp_ch="on"
											data-text="w:normal;s:20,20,12,12;l:0,0,15,15;"
											data-dim="w:30px,30px,18px,18px;h:30px,30px,18px,18px;"
											data-frame_999="o:0;st:w;" style="z-index:11;"><img
												src={{url('img/dummy.png')}} class="tp-rs-img rs-lazyload" width="30"
												height="30" data-lazyload={{url('img/landing4-slider-icon1.webp')}}>
										</rs-layer>
										<!--
											-->
									</rs-group>
									<!--

										-->
										<rs-group id="slider-1-slide-1-layer-4" data-type="group" data-rsp_ch="on"
										data-xy="x:c;xo:-349px,-349px,-248px,-248px;yo:520px,520px,312px,312px;"
										data-text="w:normal;s:20,20,12,12;l:0,0,15,15;"
										data-dim="w:395px,395px,247px,247px;h:69px,69px,42px,42px;"
										data-vbility="t,t,f,t" data-frame_0="x:-50,-50,-31,-31;" data-frame_1="sp:1000;"
										data-frame_999="o:0;st:w;sA:9000;" style="z-index:12;">
										<!--
											-->
										<rs-layer id="slider-1-slide-1-layer-0" data-type="text" data-color="#0a0130"
											data-rsp_ch="on" data-xy="xo:53px,53px,7px,7px;yo:1px,1px,53px,53px;"
											data-text="w:normal;s:18,18,10,10;l:28,28,17,17;fw:600;"
											data-dim="w:350px,350px,219px,219px;" data-frame_999="o:0;st:w;"
											style="z-index:10;font-family:'Poppins';"> Review accident reports like a car dealer </rs-layer>
										<!--

											-->
										<rs-layer id="slider-1-slide-1-layer-3" data-type="image" data-rsp_ch="on"
											data-text="w:normal;s:20,20,12,12;l:0,0,15,15;"
											data-dim="w:30px,30px,18px,18px;h:30px,30px,18px,18px;"
											data-frame_999="o:0;st:w;" style="z-index:11;"><img
												src={{url('img/dummy.png')}} class="tp-rs-img rs-lazyload" width="30"
												height="30" data-lazyload={{url('img/landing4-slider-icon1.webp')}}>
										</rs-layer>
										<!--
											-->
									</rs-group>
										<!--

										-->
										<rs-group id="slider-1-slide-1-layer-4" data-type="group" data-rsp_ch="on"
										data-xy="x:c;xo:-349px,-349px,-248px,-248px;yo:580px,580px,312px,312px;"
										data-text="w:normal;s:20,20,12,12;l:0,0,15,15;"
										data-dim="w:395px,395px,247px,247px;h:69px,69px,42px,42px;"
										data-vbility="t,t,f,t" data-frame_0="x:-50,-50,-31,-31;" data-frame_1="sp:1000;"
										data-frame_999="o:0;st:w;sA:9000;" style="z-index:12;">
										<!--
											-->
										<rs-layer id="slider-1-slide-1-layer-0" data-type="text" data-color="#0a0130"
											data-rsp_ch="on" data-xy="xo:53px,53px,7px,7px;yo:1px,1px,53px,53px;"
											data-text="w:normal;s:18,18,10,10;l:28,28,17,17;fw:600;"
											data-dim="w:350px,350px,219px,219px;" data-frame_999="o:0;st:w;"
											style="z-index:10;font-family:'Poppins';">Benefit from VinAudit&apos;s History Reports&trade; Vehicle History Reports and uncover hidden accidents or title problems</rs-layer>
										<!--

											-->
										<rs-layer id="slider-1-slide-1-layer-3" data-type="image" data-rsp_ch="on"
											data-text="w:normal;s:20,20,12,12;l:0,0,15,15;"
											data-dim="w:30px,30px,18px,18px;h:30px,30px,18px,18px;"
											data-frame_999="o:0;st:w;" style="z-index:11;"><img
												src={{url('img/dummy.png')}} class="tp-rs-img rs-lazyload" width="30"
												height="30" data-lazyload={{url('img/landing4-slider-icon1.webp')}}>
										</rs-layer>
										<!--
											-->
									</rs-group>
									<!--<rs-group id="slider-1-slide-1-layer-7" data-type="group" data-rsp_ch="on"-->
									<!--	data-xy="x:c;xo:-348px,-348px,-248px,-248px;yo:503px,503px,365px,365px;"-->
									<!--	data-text="w:normal;s:20,20,12,12;l:0,0,15,15;"-->
									<!--	data-dim="w:395px,395px,247px,247px;h:69px,69px,42px,42px;"-->
									<!--	data-vbility="t,t,f,t" data-basealign="slide" data-frame_0="x:-50,-50,-31,-31;"-->
									<!--	data-frame_1="sp:1000;" data-frame_999="o:0;st:w;sA:9000;" style="z-index:15;">-->
									<!--
											-->
									<!--<rs-layer id="slider-1-slide-1-layer-8" data-type="text" data-color="#0a0130"-->
									<!--	data-rsp_ch="on" data-xy="xo:53px,53px,7px,7px;yo:1px,1px,53px,53px;"-->
									<!--	data-text="w:normal;s:18,18,10,10;l:28,28,17,17;fw:600;"-->
									<!--	data-dim="w:350px,350px,219px,219px;" data-frame_999="o:0;st:w;"-->
									<!--	style="z-index:13;font-family:'Poppins';"> Gain peace of mind knowing exactly what you're buying.-->
									<!--</rs-layer>-->
									<!--

											-->
									<!--<rs-layer id="slider-1-slide-1-layer-9" data-type="image" data-rsp_ch="on"-->
									<!--	data-text="w:normal;s:20,20,12,12;l:0,0,15,15;"-->
									<!--	data-dim="w:30px,30px,18px,18px;h:30px,30px,18px,18px;"-->
									<!--	data-frame_999="o:0;st:w;" style="z-index:14;"><img-->
									<!--		src={{url('img/dummy.png')}} class="tp-rs-img rs-lazyload" width="30"-->
									<!--		height="30" data-lazyload={{url('img/landing4-slider-icon1.webp')}}>-->
									<!--</rs-layer>-->
									<!--
											-->
									</rs-group>
									<!--

										-->
									<rs-layer id="slider-1-slide-1-layer-1" data-type="shape" data-rsp_ch="on"
										data-xy="xo:-1px,-1px,0,-1px;yo:1px,1px,-1px,-1px;"
										data-text="w:normal;s:20,20,12,12;l:0,0,15,15;" data-dim="w:100%;h:100%;"
										data-basealign="slide" data-frame_999="o:0;st:w;" style="z-index:8;">
										<rs-bg-elem style="background: url(" {{url('img/landing4-slider-bg.webp')}}")
											no-repeat center center; background-size: cover;"></rs-bg-elem>
									</rs-layer>
									<!--

										-->
									<rs-layer id="slider-1-slide-1-layer-2" class="" data-type="text"
										data-color="#0a0130" data-rsp_ch="on"
										data-xy="x:c;xo:-301px,-301px,8px,8px;yo:224px,224px,603px,603px;"
										data-text="w:normal;s:92,92,90,90;l:50,50,50,50;fw:600;a:left,left,center,center;"
										data-dim="w:600px,600px,313px,313px;" data-frame_0="y:-50,-50,-31,-31;"
										data-frame_1="sp:1000;" data-frame_999="o:0;st:w;"
										style="z-index:9;font-family:'Poppins';">
										<span style="font-size: 40px; font-weight: 800;" class="mobile_none">Maximize Cash or Trade with Your Vehicle&apos;s History Report<br></span>
										<span style="font-size: 25px;" class="mobile_none">& Get Free Vehicle History Report.</span>
										
									</rs-layer>
									
										
									</rs-layer>
									<!--

										-->
									<!--<a id="slider-1-slide-1-layer-5" class="rs-layer" href="#" target="_self" data-type="button"-->
									<!--data-color="#0a0130" data-rsp_ch="on"-->
									<!--data-xy="xo:380px,380px,30px,30px;y:b;yo:50px,50px,31px,31px;"-->
									<!--data-text="w:normal;s:16,16,25,25;l:26,26,25,25;fw:600;" data-vbility="t,t,f,t"-->
									<!--data-basealign="slide" data-frame_999="o:0;st:w;" data-frame_hover="c:#8f664a;"-->
									<!--style="z-index:28;font-family:'Poppins';">Twitter </a>-->
									<!--

										-->
									<rs-layer id="slider-1-slide-1-layer-6" class="rs-pxl-2" data-type="image"
										data-rsp_ch="on"
										data-xy="x:c;xo:195px,195px,-58px,-58px;yo:137px,137px,125px,125px;"
										data-text="w:normal;s:20,20,12,12;l:0,0,15,15;"
										data-dim="w:33px,33px,20px,20px;h:33px,33px,20px,20px;" data-basealign="slide"
										data-frame_0="y:-50,-50,-31,-31;" data-frame_1="st:500;sp:500;"
										data-frame_999="o:0;st:w;" style="z-index:22;"><img src={{url('img/dummy.png')}}
											class="tp-rs-img rs-lazyload" width="33" height="33"
											data-lazyload={{url('img/landing4-slider-bg.webp')}}>
									</rs-layer>
									<!--

										-->
									<rs-layer id="slider-1-slide-1-layer-10" class="rev-btn" data-type="button"
										data-rsp_ch="on"
										data-xy="x:c;xo:-447px,-447px,15px,15px;yo:711px,711px,834px,834px;"
										data-text="w:normal;s:18,18,32,32;l:28,28,32,32;fw:600;"
										data-dim="minh:0px,0px,none,0px;"
										data-actions='id:pricing;o:click;a:scrollto;sp:1000ms;e:power1.inOut;'
										data-basealign="slide"
										data-padding="t:15,15,18,18;r:30,30,45,45;b:15,15,18,18;l:30,30,40,40;"
										data-border="bor:25px,25px,25px,25px;" data-frame_0="y:50,50,31,31;"
										data-frame_1="sp:1000;" data-frame_999="o:0;st:w;"
										data-frame_hover="bgc:#3972f5;bor:25px,25px,25px,25px;sp:200;e:power1.inOut;"
										style="z-index:16;background-color:#0b2dda;font-family:'Poppins';"> Subscribe
										now </rs-layer>



									<!--

										-->
									<!--<rs-layer id="slider-1-slide-1-layer-11" data-type="text" data-color="#0a0130"-->
									<!--	data-rsp_ch="on" data-xy="xo:50px,50px,30px,30px;y:b;yo:50px,50px,70px,70px;"-->
									<!--	data-text="w:normal;s:16,16,25,25;l:26,26,25,25;" data-vbility="t,t,f,t"-->
									<!--	data-basealign="slide" data-frame_999="o:0;st:w;"-->
									<!--	style="z-index:19;font-family:'Poppins';"> Discover more on social platforms:-->
									<!--</rs-layer>-->
									<!--

										-->
									<!--<rs-layer id="slider-1-slide-1-layer-15" data-type="text" data-color="#0a0130"-->
									<!--	data-rsp_ch="on"-->
									<!--	data-xy="x:r;xo:170px,170px,30px,30px;y:b;yo:50px,50px,70px,70px;"-->
									<!--	data-text="w:normal;s:16,16,25,25;l:26,26,25,25;" data-vbility="t,t,f,t"-->
									<!--	data-basealign="slide" data-frame_999="o:0;st:w;"-->
									<!--	style="z-index:18;font-family:'Poppins';"> Powered by: </rs-layer>-->
									<!--

										-->
									<rs-layer id="slider-1-slide-1-layer-17" class="rs-pxl-15" data-type="image"
										data-rsp_ch="on"
										data-xy="x:c;xo:338px,338px,31px,31px;yo:170px,170px,146px,146px;"
										data-text="w:normal;s:20,20,12,12;l:0,0,15,15;"
										data-dim="w:675px,675px,360px,360px;h:575px,575px,360px,360px;"
										data-frame_0="y:-50,-50,-31,-31;" data-frame_1="st:500;sp:500;"
										data-frame_999="o:0;st:w;" style="z-index:20;"><img src={{url('img/dummy.png')}}
											class="tp-rs-img rs-lazyload" width="675" height="575"
											data-lazyload={{url("img/LandingPage.png")}}>
									</rs-layer>
									<!--

										-->
									<rs-layer id="slider-1-slide-1-layer-18" class="rs-pxl-4" data-type="image"
										data-rsp_ch="on"
										data-xy="x:c;xo:155px,155px,-83px,-83px;yo:213px,213px,172px,172px;"
										data-text="w:normal;s:20,20,12,12;l:0,0,15,15;"
										data-dim="w:142px,142px,88px,88px;h:133px,133px,82px,82px;"
										data-basealign="slide" data-frame_0="x:-50,-50,-31,-31;"
										data-frame_1="st:500;sp:500;" data-frame_999="o:0;st:w;"
										style="z-index:24;"><img src={{url('img/dummy.png')}}
											class="tp-rs-img rs-lazyload" width="142" height="133"
											data-lazyload={{url('img/LandingPage.png')}}>
									</rs-layer>
									<!--

										-->
									<rs-layer id="slider-1-slide-1-layer-19" class="rs-pxl-5" data-type="image"
										data-rsp_ch="on"
										data-xy="x:c;xo:624px,624px,211px,211px;yo:494px,494px,349px,349px;"
										data-text="w:normal;s:20,20,12,12;l:0,0,15,15;"
										data-dim="w:121px,121px,75px,75px;h:106px,106px,66px,66px;"
										data-basealign="slide" data-frame_0="y:50,50,31,31;"
										data-frame_1="st:500;sp:500;" data-frame_999="o:0;st:w;"
										style="z-index:23;"><img src={{url('img/dummy.png')}}
											class="tp-rs-img rs-lazyload" width="121" height="106"
											data-lazyload="{{url('img/LandingPage.png')}}">
									</rs-layer>
									<!--

										-->
									<rs-layer id="slider-1-slide-1-layer-20" class="rs-pxl-14" data-type="image"
										data-rsp_ch="on" data-xy="xo:589px,589px,189px,189px;yo:55px,55px,74px,74px;"
										data-text="w:normal;s:20,20,12,12;l:0,0,15,15;"
										data-dim="w:1363px,1363px,854px,854px;h:869px,869px,544px,544px;"
										data-frame_0="x:50,50,31,31;" data-frame_1="sp:1000;" data-frame_999="o:0;st:w;"
										style="z-index:21;"><img src={{url('img/dummy.png')}}
											class="tp-rs-img rs-lazyload" width="1363" height="869"
											data-lazyload={{url('img/landing4-slider-pic1.webp')}}>
									</rs-layer>
									<!--

										-->
									<!--<a id="slider-1-slide-1-layer-21" class="rs-layer" href="#" target="_self" data-type="button"-->
									<!--data-color="#0a0130" data-rsp_ch="on"-->
									<!--data-xy="xo:480px,480px,140px,140px;y:b;yo:50px,50px,31px,31px;"-->
									<!--data-text="w:normal;s:16,16,25,25;l:26,26,25,25;fw:600;" data-vbility="t,t,f,t"-->
									<!--data-basealign="slide" data-frame_999="o:0;st:w;" data-frame_hover="c:#8f664a;"-->
									<!--style="z-index:27;font-family:'Poppins';">Facebook </a>-->
									<!--

										-->
									<!--<a id="slider-1-slide-1-layer-22" class="rs-layer" href="#" target="_self" data-type="button"-->
									<!--data-color="#0a0130" data-rsp_ch="on"-->
									<!--data-xy="xo:600px,600px,300px,300px;y:b;yo:50px,50px,31px,31px;"-->
									<!--data-text="w:normal;s:16,16,25,25;l:26,26,25,25;fw:600;" data-vbility="t,t,f,t"-->
									<!--data-basealign="slide" data-frame_999="o:0;st:w;" data-frame_hover="c:#8f664a;"-->
									<!--style="z-index:26;font-family:'Poppins';">Instagram </a>-->
									<!--

										-->
									<!--<a id="slider-1-slide-1-layer-23" class="rs-layer" href="#" target="_self" data-type="button"-->
									<!--data-color="#0a0130" data-rsp_ch="on"-->
									<!--data-xy="x:r;xo:50px,50px,30px,30px;y:b;yo:50px,50px,30px,30px;"-->
									<!--data-text="w:normal;s:16,16,25,25;l:26,26,25,25;fw:600;" data-vbility="t,t,f,t"-->
									<!--data-basealign="slide" data-frame_999="o:0;st:w;" data-frame_hover="c:#8f664a;"-->
									<!--style="z-index:25;font-family:'Poppins';">Max Allowance</a>-->
									<!--
										-->
								</rs-slide>
							</rs-slides>
						</rs-module>
					</rs-module-wrap>
					<!-- END REVOLUTION SLIDER -->
				</div>
			</header>
		</div>
		<div class="section container" id="pricing" style="padding-top:120px;padding-bottom:180px">
			<div class="row justify-content-md-center text-center">
				<div class="col-md-7" data-col="three-fifth">
					<div class="column_attr clearfix text-center">
						<h6 class="landing4-heading grey">SUBSCRIPTION PLANS</h6>
						<hr class="no_line" style="margin: 0 auto 15px auto" />
						<h2 style="color: #333">Choose The Best Option For A <b>Transparentation Certified&trade;</b> Next Car Shopping Experience</h2>
					</div>
				</div>
			</div>
		</div>
		<style>
		    .best-selling-plan{
		            position: absolute;
    bottom: 0;
    left: auto;
    background-color: lightgreen;
    padding: 5px 20px 5px 20px;
    width: 91.5%;
    right: auto;
		    }
		    .best-selling-plan p{
		        margin: 0;padding: 0;line-height: 18px;color: #333;font-weight: 800;font-size: 15px;
		    }
		    .sticky .menu_wrapper{
		        padding-top: 10px;
		    }
		   
		    .menu_wrapper{
		        padding: 25px;
		    }
		    #Top_bar.is-sticky #logo img.logo-sticky{
		        max-height: 120px !important;
		    }
		    .is-sticky{
		        height: 120px !important;
		    }
		</style>
		<div class="section" style="padding-bottom:80px;background-color:#fcf9f1">
			<div class="container">
				<div class="row">
					@foreach ($plan as $plan)
					<div class="col-md-4 column-margin-0px valign-top move-up clearfix" data-col="one-third"
						style="padding:0 2%;margin-top:-120px">
						<div class="row">
							<div class="col-12">

								<div class="text-center"
									style="background-color:#fcf9f1;padding:30px 0 15px;border: 1px solid #e6c4aa; border-bottom: none; border-radius: 15px 15px 0 0;padding-bottom: 30px; height: 150px;  display: flex; align-items: center; justify-content: center;">
									<h2 class="themecolor" style="font-size: 29px;"> 
									        {{$plan->title}}
									<!--@if($plan->plan_id == 1)-->
									    <!--    TRADING OR<br> SELLING TODAY!-->
									    
									    <!--@elseif($plan->plan_id == 3)-->
									    <!--   TIMING MY<br> MARKET-->

									    
									    <!--@else-->
									    <!--   ACTIVATE MY<br> MAX MARKET!-->

									    
									    <!--@endif-->
									    </h2>
									@if($plan->plan_id == 2)
									        <div class="best-selling-plan"><p style="margin: 0; padding: 0">Our Most Popular Plan</p>
</div>
									       @endif
								</div>
							</div>
							<div class="col-12">
								<div class="text-center"
									style="background-color:#fff;padding:60px 8% 65px;border: 1px solid #e6c4aa; border-top: none; border-radius: 0 0 15px 15px; box-shadow: 0px 6px 24px 6px rgba(132,82,38,0.1);">
									<div class="google_font"
										style="font-family:'Poppins',Arial,Tahoma,sans-serif;font-size:60px;line-height:60px;font-weight:600;letter-spacing:0px;color:#0a0130;">
										<sup style="font-size: 0.6em;">$</sup><span
											class="counter-inline animate-math">{{$plan->price}}</span></span><span
											style="font-size: 0.5em">@if($plan->day_for_plan > 29)
									        
									            /mo
									        @else
									        @endif
									        </span>
										
										 
									</div>
									<hr class="no_line" style="margin: 0 auto 15px auto" />
									<p class="big"> Days For Plan: {{$plan->day_for_plan}}</p>
									<hr class="no_line" style="margin: 0 auto 15px auto" />
									<p> <b><span class="counter-inline animate-math"> Number Of Reports: <span
													class="number"
													data-to="{{$plan->reports}}">
									    
									    
									        {{$plan->reports}}
									    
									   
									    
									    </span></span></b>
									</p>
								
									<p> <b>
									    
									        PLUS {{$plan->free_report}} FREE REPORT{{$plan->free_report > 1 ? 'S' : ''}}
									    
									    
									    </b>  </p>
									<p> {{$plan->free_report > 1 ? 'Use your FREE reports to check the history of additional vehicles you own or cars you might wanna buy.' : 'Use your FREE report  to check the history of a 2nd vehicle you own or a car you might want to buy'}}  </p>
									<hr class="no_line" style="margin: 0 auto 60px auto" />
									@if(Auth::check())
									
									<!-- User is logged in -->
									<a href="/plancheckout/{{ $plan->plan_id }}"
										class="crd-wrp-btn button button_size_2 button_theme button_label">Buy Now</a>
									@else
									<!-- User is not logged in -->
									<a href="/login" class="crd-wrp-btn">Buy Now</a>
									@endif
								</div>
							</div>
							<div class="col-12">
								<hr class="no_line" style="margin: 0 auto 180px auto" />
							</div>
						</div>
					</div>

					@endforeach
				</div>
				<div class="col-md-2" data-col="one-sixth" style="display: none;">
					<div class="column mcb-column one column_placeholder">
						<div class="placeholder"> &nbsp; </div>
					</div>
				</div>
				<div class="col-md-12" data-col="two-third">
					<div class="image_frame image_item no_link scale-with-grid text-center no_border">
						<div class="image_wrapper"><img class="scale-with-grid"
								src={{url("img/landing4-pic18.webp")}} /> </div>
					</div>
					<div class="text-center">
						<p style="display: flex;"> MaxAllowance offers flexible payment options for reports, including credit card, debit, and
							more, ensuring convenient access to the information you need. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div id="Content">
		<div class="section container" id="summary" style="padding-top:120px;padding-bottom:20px">
			<div class="row justify-content-md-center text-center">
				<div class="col-md-6">
					<h6 class="landing4-heading grey">SUMMARY</h6>
					<hr class="no_line" style="margin: 0 auto 15px auto" />
					<h2 style="font-size: 25px;">Don't risk buying a lemon! Get the most accurate and complete vehicle history report for free.
						<span class="themecolor"> Simply enter your VIN below to instantly access: </span></h2>
				</div>
			</div>
		</div>
		<div class="section container" style="padding-bottom:20px">
			<div class="row">
				<div class="col-12">
					<hr class="no_line" style="margin:0 auto 40px">
				</div>
				<div class="col-md-2" data-col="one-sixth">
					<hr class="no_line" style="margin: 0 auto 60px auto" />
					<div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
						<div class="image_wrapper"><img class="scale-with-grid" src={{url("img/landing4-pic1.webp")}} />
						</div>
					</div>
				</div>
				<div class="col-md-4" data-col="one-third">
					<div class="row">
						<div class="col-md-10">
							<div class="column_attr clearfix mobile_align_center" style="padding:20px 5% 0;">
								<hr class="no_line" style="margin: 0 auto 60px auto" />
								<h5>Accident History: Find out if the vehicle has been in any collisions, even minor
									ones.</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6" data-col="one-second"
					style="padding:50px 50px 0px;background-size:cover;background-color:#fcfaf2;background-image:url(img/landing4-footer-bg.webp);background-repeat:no-repeat;background-position:right bottom;border-radius: 15px; ">
					<div class="row">
						<div class="col-md-10">
							<div class="column_attr clearfix mobile_align_center">
								<h3>Title Information: Check for salvage titles, flood damage, or other issues.</h3>
								<hr class="no_line" style="margin: 0 auto 30px auto" /> <a
									class="button scroll button_size_2 button_theme button_mobile" id="mycheckbutton" style=" cursor: pointer;"><span
										class="button_label button_mobile">Check Your VIN Now – It's Free!</span></a>
								<hr class="no_line" style="margin: 0 auto 50px auto" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section container" style="padding-bottom:20px">
			<div class="row">
				<div class="col-12">
					<hr class="no_line" style="margin:0 auto 40px">
				</div>
				<div class="col-md-6" data-col="one-second"
					style="padding:50px 50px 0px;background-size:cover;background-color:#fcfaf2;background-image:url(img/landing4-footer-bg.webp);background-repeat:no-repeat;background-position:right bottom;border-radius: 15px; ">
					<div class="row">
						<div class="col-md-10">
							<div class="column_attr clearfix mobile_align_center">
								<h3>Mileage Verification: Verify the odometer reading and make sure it's accurate.</h3>
								<hr class="no_line" style="margin: 0 auto 30px auto" /> <a
									class="button scroll button_size_2 button_theme button_mobile" id="mycheckbutton2" style=" cursor: pointer;"><span
										class="button_label button_mobile">Check Your VIN Now – It's Free!</span></a>
								<hr class="no_line" style="margin: 0 auto 50px auto" />
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-2" data-col="one-sixth">
					<hr class="no_line" style="margin: 0 auto 60px auto" />
					<div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
						<div class="image_wrapper"><img class="scale-with-grid" src={{url("img/landing4-pic1.webp")}} />
						</div>
					</div>
				</div>
				<div class="col-md-4" data-col="one-third">
					<div class="row">
						<div class="col-md-10">
							<div class="column_attr clearfix mobile_align_center" style="padding:20px 5% 0;">
								<hr class="no_line" style="margin: 0 auto 60px auto" />
								<h5>Ownership History: See how many previous owners the vehicle has had.</h5>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="section container" style="padding-bottom:100px">
			<div class="row">
				<div class="col-md-6" data-col="one-second">
					<div class="image_frame image_item no_link scale-with-grid no_border">
						<div class="image_wrapper"><img class="scale-with-grid"
								src={{url("img/LandingPageblue.png")}} /> </div>
					</div>
				</div>
				<div class="col-md-6 valign-middle clearfix" data-col="one-second" style="padding:5% 4%">
					<div class="row">
						<div class="col-12">
							<div class="column_attr clearfix mobile_align_center">
								<h3 class="themecolor">Maintenance Records:</h3>
								<hr class="no_line" style="margin: 0 auto 15px auto" />
								<p> Gain insight into how well the car was maintained. </p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="column_attr clearfix mobile_align_center">
								<div class="google_font"
									style="font-family:'Poppins',Arial,Tahoma,sans-serif;font-size:60px;line-height:60px;font-weight:600;letter-spacing:0px;color:#0b2dda;">
									<span class="counter-inline animate-math"><span class="number"
											data-to="23">23</span></span>
								</div>
								<p> We perceive detailed information. </p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="column_attr clearfix mobile_align_center"
								style="https:img/landing4-section-bg2.webp">
								<div class="google_font"
									style="font-family:'Poppins',Arial,Tahoma,sans-serif;font-size:60px;line-height:60px;font-weight:600;letter-spacing:0px;color:#0b2dda;">
									<span class="counter-inline animate-math"><span class="number"
											data-to="7">7</span></span>
								</div>
								<p> Quantity </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section mcb-section equal-height-wrap full-width" id="use"
			style="padding-top:120px;padding-bottom:80px;padding-left:8%;padding-right:8%;background-color:#0b1556;background-image:url(img/landing4-section-bg2.webp);background-repeat:no-repeat;background-position:right top">
			<div class="row">
				<div class="col-md-5" data-col="two-fifth">
					<div class="row">
						<div class="col-md-10">
							<div class="column_attr clearfix mobile_align_center"
								style="https:img/landing4-wrap-bg2.webp">
								<h6 class="landing4-heading purple">APP IN USE</h6>
								<hr class="no_line" style="margin: 0 auto 15px auto" />
								<h2><span style="color:#FFF;">What You'll Find in Our Reports:</span></h2>
							</div>
						</div>
						<div class="col-12 ">
							<hr class="no_line mobile_margin" style="margin: 0 auto 80px auto" />
						</div>
						<div class="col-md-8">
							<div class="column_attr clearfix">
								<!--<p> <span style="color:#FFF;">Our commitment to accuracy drives us to meticulously research and analyze every vehicle's past, ensuring you have a complete understanding before making any decisions. While minor discrepancies may arise, our VIN decoder strives to provide the most comprehensive and transparent report possible, illuminating every detail of the vehicle's history.</span> </p>-->
								<p>
								<ul style="color:white; list-style: disc;">
									<li>Detailed breakdown of accident history, including severity and repairs.</li>
									<li>Full title history (salvage, rebuilt, flood, etc.).</li>
									<li>Accurate mileage records from various sources.</li>
									<li>Number of previous owners.</li>
									<li>Maintenance records (if available).</li>
									<li>Open recalls and safety information.</li>
									<li>Vehicle specifications and details.</li>
									<li>Much More!</li>
								</ul>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-7" data-col="three-fifth"
					style="padding:160px 0 120px;background-image:url(img/landing4-wrap-bg2.webp);background-repeat:no-repeat;background-position:center">
					<div class="image_frame image_item scale-with-grid text-center no_border">
						<div class="image_wrapper">
							<a href="https://www.youtube.com/watch?v=1ZmmlMFj74k" rel="prettyphoto">
								<div class="mask"></div><img src={{url("img/landing4-pic3.webp")}} />
							</a>
							<div class="image_links ">
								<a href="https://www.youtube.com/watch?v=1ZmmlMFj74k" class="zoom" rel="prettyphoto">
									<svg viewBox="0 0 26 26">
										<circle cx="11.35" cy="11.35" r="6" class="path" />
										<line x1="15.59" y1="15.59" x2="20.65" y2="20.65" class="path" />
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section mcb-section no-margin-h full-width" style="padding-bottom:120px;background-color:#0b1556">
			<div class="row">
				<!--<div class="col-12" data-col="one">-->
				<!--	<div class="content_slider center">-->
				<!--		<ul class="content_slider_ul">-->
				<!--			<li class="content_slider_li_1"><img width="1024" height="700"-->
				<!--					src="{{url('img/landing4-pic6.webp')}}"-->
				<!--					class="scale-with-grid wp-post-image" /> </li>-->
				<!--			<li class="content_slider_li_2"><img width="1024" height="700"-->
				<!--					src={{url("img/landing4-pic5.webp")}} class="scale-with-grid wp-post-image"-->
				<!--					loading="lazy" /> </li>-->
				<!--			<li class="content_slider_li_3"><img width="1024" height="700"-->
				<!--					src={{url("img/landing4-pic4.webp")}} class="scale-with-grid wp-post-image"-->
				<!--					loading="lazy" /> </li>-->
				<!--		</ul>-->
				<!--		<div class="slider_pager slider_pagination"></div>-->
				<!--	</div>-->
				<!--</div>-->
				<div class="col-12" data-col="one">
					<hr class="no_line" style="margin: 0 auto 65px auto" />
					<div class="button_align text-center"> <a class="button scroll button_size_2 button_theme"
							id="mycheckbutton3" style=" cursor: pointer;"><span class="button_label">Subscription plans</span></a> </div>
				</div>
			</div>
		</div>
		<div class="section container" style="padding-top:120px;padding-bottom:50px">
			<div class="row">
				<div class="col-md-5" data-col="two-fifth">
					<div class="image_frame image_item no_link scale-with-grid no_border">
						<div class="image_wrapper"><img class="scale-with-grid" src={{url("img/landing4-pic7.webp")}} />
						</div>
					</div>
				</div>
				<div class="col-md-7" data-col="three-fifth" style="padding:0 0 0 2% ">
					<div class="column_attr clearfix ">
						<hr class="no_line" style="margin: 0 auto 25px auto" />
						<h3>Why Choose Our Vehicle History Reports?</h3>
						<!--<p> Our VIN decoder meticulously decodes every digit, providing accurate and detailed vehicle information. By identifying and addressing potential errors, we ensure clarity and offer valuable insights into all vehicle specifications, making it easier for you to understand and verify crucial vehicle details. </p>-->
						<p>
						<ul style="color:black; list-style: disc;">
							<li>Most Comprehensive Data: We source data from trusted sources like NMVTIS, insurance
								companies, and more.</li>
							<li>Easy to Understand: Our reports are clear and concise, even if you're not a car expert.
							</li>
							<li>100% Free: No hidden fees, no credit card required.</li>
							<!--<li>Number of previous owners.</li>	-->
						</ul>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="section container">
			<div class="row">
				<div class="col-md-7" data-col="three-fifth" style="padding:0 2% 0 0">
					<div class="column_attr clearfix ">
						<hr class="no_line" style="margin: 0 auto 25px auto" />
						<h3>How to Use Our Free VIN Check:</h3>
						<!--<p>MaxAllowance makes accessing accurate vehicle history a breeze. With just a few clicks, you can obtain comprehensive and reliable information about any vehicle, ensuring transparency and confidence in your car-buying or selling process. Say goodbye to guesswork and hello to informed decisions with MaxAllowance.</p>-->
						<p>
						<ul style="color:black; list-style: disc;">
							<li>Enter the VIN (Vehicle Identification Number) in the box above.</li>
							<li>Click "Check Your VIN Now."</li>
							<li>Instantly access your free report.</li>
							<!--<li>Number of previous owners.</li>	-->
						</ul>
						</p>
					</div>
				</div>
				<div class="col-md-5" data-col="two-fifth">
					<div class="image_frame image_item no_link scale-with-grid no_border">
						<div class="image_wrapper"><img class="scale-with-grid" src={{url("img/landing4-pic8.webp")}} />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section mcb-section" style="padding-top:120px;padding-bottom:60px">
			<div class="container">
				<div class="row" data-col="one">
					<div class="col-12 text-center">
						<h3 class="landing4-heading grey themecolor">Now you can:</h3>
						<hr class="no_line" style="margin: 0 auto 40px auto" />
					</div>
				</div>
				<div class="row" data-col="one">
					<div class="col-md-4 column_icon_box">
						<div class="icon_box icon_position_left no_border">
							<div class="image_wrapper"><img src={{url("img/landing4-icon1.webp")}}
									class="scale-with-grid" /> </div>
							<div class="desc_wrapper">
								<h5 class="title">Accident History: Find out if the vehicle has been in any collisions,
									even minor ones.
								</h5>
							</div>
						</div>
					</div>
					<div class="col-md-4 column_icon_box">
						<div class="icon_box icon_position_left no_border">
							<div class="image_wrapper"><img src={{url("img/landing4-icon2.webp")}}
									class="scale-with-grid" /> </div>
							<div class="desc_wrapper">
								<h5 class="title">Title Information: Check for salvage titles, flood damage, or other
									issues.</h5>
							</div>
						</div>
					</div>
					<div class="col-md-4 column_icon_box">
						<div class="icon_box icon_position_left no_border">
							<div class="image_wrapper"><img src={{url("img/landing4-icon3.webp")}}
									class="scale-with-grid" /> </div>
							<div class="desc_wrapper">
								<h5 class="title">Mileage Verification: Verify the odometer reading and make sure it's
									accurate.</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="row" data-col="one">
					<div class="col-md-4 column_icon_box">
						<div class="icon_box icon_position_left no_border">
							<div class="image_wrapper"><img src={{url("img/landing4-icon4.webp")}}
									class="scale-with-grid" /> </div>
							<div class="desc_wrapper">
								<h5 class="title">Ownership History: See how many previous owners the vehicle has had.
								</h5>
							</div>
						</div>
					</div>
					<div class="col-md-4 column_icon_box">
						<div class="icon_box icon_position_left no_border">
							<div class="image_wrapper"><img src={{url("img/landing4-icon5.webp")}}
									class="scale-with-grid" /> </div>
							<div class="desc_wrapper">
								<h5 class="title">Maintenance Records: (If available) Gain insight into how well the car
									was maintained.</h5>
							</div>
						</div>
					</div>
					<!--<div class="col-md-4 column_icon_box">-->
					<!--	<div class="icon_box icon_position_left no_border">-->
					<!--		<div class="image_wrapper"><img src={{url("img/landing4-icon6.webp")}}-->
					<!--				class="scale-with-grid" /> </div>-->
					<!--		<div class="desc_wrapper">-->
					<!--			<h5 class="title">Unlock the truth behind any vehicle's history with MaxAllowance.</h5>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->
					<div class="col-12">
						<hr class="no_line" style="margin: 0 auto 120px auto" />
					</div>
				</div>
				<div class="row" data-col="one"
					style="padding:60px 6% 60px;background-color:#16226e;background-image:url(img/landing4-wrap-bg1.webp);background-repeat:no-repeat;background-position:right top;border-radius: 50px; ">
					<div class="col-md-2">
						<div class="image_frame image_item no_link scale-with-grid aligncenter no_border"
							style="margin-top:-130px!important;">
							<div class="image_wrapper"><img class="scale-with-grid"
									src={{url("img/landing4-pic9.webp")}} /> </div>
						</div>
					</div>
					<div class="col-12">
						<hr class="no_line" style="margin: 0 auto 0px auto" />
					</div>
					<div class="col-md-2" style="display: flex;">
						<div class="image_frame image_item no_link scale-with-grid aligncenter no_border"
							style="align-self: center;">
							<div class="image_wrapper"><img class="scale-with-grid"
									src={{url("img/landing4-pic10.webp")}} /> </div>
						</div>
					</div>
					<!--<div class="col-md-4">-->
					<!--	<div class="column_attr clearfix align_center">-->
					<!--		<div class="google_font"-->
					<!--			style="font-family:'Poppins',Arial,Tahoma,sans-serif;font-size:80px;line-height:80px;font-weight:600;letter-spacing:0px;color:#356ff3;">-->
					<!--			<span class="counter-inline animate-math"><span class="number"-->
					<!--					data-to="4">4</span></span>.9/5-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->
					
					<div class="col-md-10">
						<div class="column_attr clearfix align_center">
							<div class="google_font"
								style="font-family:'Poppins',Arial,Tahoma,sans-serif;font-size:70px;line-height:80px;font-weight:600;letter-spacing:0px;color:#356ff3;">
								<span class="counter-inline animate-math">Like or love what you see? Review us now.</span>
							</div>
						</div>
					</div>
					<!--<div class="col-md-4">-->
					<!--	<div class="column_attr clearfix mobile_align_center" style="padding:10px 0 0 ;">-->
					<!--		<h4><span style="color:#FFF;">Based on-->
					<!--				<br />-->
					<!--				14 000 Reviews</span></h4>-->
					<!--	</div>-->
					<!--</div>-->
				</div>
			</div>
		</div>
		<div class="section mcb-section bg-contain" id="review"
			style="padding-top:180px;padding-bottom:40px;background-color:#16226e;background-image:url(img/landing4-section-bg1.webp);background-repeat:no-repeat;background-position:right top">
			<div class="container">
				<div class="row justify-content-md-center text-center">
					<div class="col-md-8">
						<div class="column_attr clearfix text-center">
							<h6 class="landing4-heading">Review</h6>
							<hr class="no_line" style="margin: 0 auto 15px auto" />
							<h2 style="color:#356ff3;">Let us know how we did
								<br />
								We'd appreciate it if you <span style="color: white;"> left a review.</span>
							</h2>
							<hr class="no_line" style="margin: 0 auto 30px auto" />
							<div id="contactWrapper">
								<div id="reviewform">
									<form method="POST" id="review_form" action="">
										@csrf
										<!-- One Second (1/2) Column -->
										<div class="column one-second">
											<input placeholder="Your name" id="name" type="text" name="username"
												required maxlength="50" style="border-radius: 10px;">
										</div>
										<!-- One Second (1/2) Column -->
										<div class="column one-second">
											<input placeholder="Your e-mail" id="email" type="email" name="email"
												required maxlength="50" style="border-radius: 10px;">
										</div>
										<div class="stars">
											<h3 style="color: white">Rate Us Now</h3>
											<span class="star" data-value="1" value="1"><i class="fas fa-star"></i></span>
											<span class="star" data-value="2" value="2"><i class="fas fa-star"></i></span>
											<span class="star" data-value="3" value="3"><i class="fas fa-star"></i></span>
											<span class="star" data-value="4" value="4"><i class="fas fa-star"></i></span>
											<span class="star" data-value="5" value="5"><i class="fas fa-star"></i></span>
							
										</div>
										<input type="hidden" id="rating" name="rating" value="0">

										<div class="column one">
											<textarea placeholder="We value your feedback..." id="message" name="message" rows="10"
												maxlength="1000" required style=" height: 200px; border-radius: 10px;"></textarea>
										</div>
										<div class="column one">
											<button class="button-primary" id="submit" type="submit"> Send A Message
											</button>
										</div>
									</form>
									<div id="success_message" style="display:none; color: white;">
										<h3 style="color: white;">Submitted the Reviews successfully!</h3>
										<p> We will get back to you soon. </p>
									</div>
									<div id="error_message" style="width:100%; height:100%; display:none; color: white;">
										<h3 style="color: white;">Error</h3> Sorry there was an error sending your review.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section container" id="reviews" style="padding-top:40px;padding-bottom:80px">
			<div class="row">
				<div class="col-md-2" data-col="one-fifth">
					<div class="placeholder"> &nbsp; </div>
				</div>
				<div class="col-md-7" data-col="three-fifth" id="about">
					<div class="column_attr clearfix text-center" style="padding:0 8%;">
						<h6 class="landing4-heading grey">TESTIMONIALS</h6>
						<hr class="no_line" style="margin: 0 auto 15px auto" />
						<h2 style="font-size: 25px;">The MaxAllowance vehicle history report gives the precise and reliable information everyone
							needs, making my car-buying decision a breeze.</h2>
					</div>
					<hr class="no_line" style="margin: 0 auto 60px auto" />
				</div>
				<div class="col-md-6" data-col="one-second" style="padding:0 3%">
					<div class="row">
						<div class="col-12">
							<hr class="no_line" style="margin: 0 auto 70px auto" />
						</div>
						<div class="col-12">
							<div class="column_attr clearfix align_center"
								style="background-color:#fff;padding:30px 10% 30px;border: 1px solid #dadaea; border-radius: 15px; box-shadow: 0px 15px 34px 0px rgba(47,34,109,0.08);">
								<div class="image_frame image_item no_link scale-with-grid alignnone no_border"
									style="margin-top:-50px;">
									<div class="image_wrapper"><img class="scale-with-grid"
											src={{url("img/landing4-pic11.webp")}} /> </div>
								</div>
								<hr class="no_line" style="margin: 0 auto 40px auto" />
								<h4><span style="color:#756d9a;">Provides seamless, reliable vehicle data with
										comprehensive details, ensuring accurate insights and user
										satisfaction.</span></h4>
								<hr class="no_line" style="margin: 0 auto 30px auto" /> <img class="scale-with-grid"
									src={{url("img/profile3.jpg")}} style="
    width: 120px;
" />
								<h5 style="margin-bottom:0px;">Emily</h5>
								<p> <a href="#">Emily@gmail.com</a> </p>
							</div>
						</div>
						<div class="col-12">
							<hr class="no_line" style="margin: 0 auto 70px auto" />
						</div>
						<div class="col-12">
							<div class="column_attr clearfix align_center"
								style="background-color:#fff;padding:30px 10% 30px;border: 1px solid #dadaea; border-radius: 15px; box-shadow: 0px 15px 34px 0px rgba(47,34,109,0.08);">
								<div class="image_frame image_item no_link scale-with-grid alignnone no_border"
									style="margin-top:-50px;">
									<div class="image_wrapper"><img class="scale-with-grid"
											src={{url("img/landing4-pic11.webp")}} /> </div>
								</div>
								<hr class="no_line" style="margin: 0 auto 40px auto" />
								<h4><span style="color:#756d9a;">Easy to use. Provides clear and accurate vehicle
										data. Ensures detailed insights and smooth operation. Reliable and efficient
										for all your vehicle information needs.</span></h4>
								<hr class="no_line" style="margin: 0 auto 30px auto" /> <img class="scale-with-grid"
									src={{url("img/profile3.jpg")}} style="
    width: 120px;
" />
								<h5 style="margin-bottom:0px;">Michael</h5>
								<p> <a href="#">Michael@gmail.com</a> </p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6" data-col="one-second" style="padding:0 3%">
					<div class="row">
					    <div class="col-12">
							<hr class="no_line" style="margin: 0 auto 70px auto" />
						</div>
						<div class="col-12">
							<div class="column_attr clearfix align_center"
								style="background-color:#fff;padding:30px 10% 30px;border: 1px solid #dadaea; border-radius: 15px; box-shadow: 0px 15px 34px 0px rgba(47,34,109,0.08);">
								<div class="image_frame image_item no_link scale-with-grid alignnone no_border"
									style="margin-top:-50px;">
									<div class="image_wrapper"><img class="scale-with-grid"
											src={{url("img/landing4-pic11.webp")}} /> </div>
								</div>
								<hr class="no_line" style="margin: 0 auto 40px auto" />
								<h4><span style="color:#756d9a;">Accurate and reliable. Provides essential vehicle
										details clearly and efficiently. Ideal for thorough vehicle
										information.</span>
								</h4>
								<hr class="no_line" style="margin: 0 auto 30px auto" /> <img class="scale-with-grid"
									src={{url("img/profile3.jpg")}} style="
    width: 120px;
" />
								<h5 style="margin-bottom:0px;">Sarah</h5>
								<p> <a href="#">Sarah@gmail.com</a> </p>
							</div>
						</div>
						<div class="col-12">
							<hr class="no_line" style="margin: 0 auto 70px auto" />
						</div>
						<div class="col-12">
							<div class="column_attr clearfix align_center"
								style="background-color:#fff;padding:30px 10% 30px;border: 1px solid #dadaea; border-radius: 15px; box-shadow: 0px 15px 34px 0px rgba(47,34,109,0.08);">
								<div class="image_frame image_item no_link scale-with-grid alignnone no_border"
									style="margin-top:-50px;">
									<div class="image_wrapper"><img class="scale-with-grid"
											src={{url("img/landing4-pic11.webp")}} /> </div>
								</div>
								<hr class="no_line" style="margin: 0 auto 40px auto" />
								<h4><span style="color:#756d9a;"> Accurate and reliable. Provides essential vehicle
										details clearly and efficiently. Ideal for thorough vehicle
										information.</span></h4>
								<hr class="no_line" style="margin: 0 auto 30px auto" /> <img class="scale-with-grid"
									src={{url("img/profile3.jpg")}} style="
    width: 120px;
" />
								<h5 style="margin-bottom:0px;">David</h5>
								<p> <a href="#">David@gmail.com</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section mcb-section full-width bg-contain" style="padding-left:10%;padding-right:10%">
			<div class="row" data-col="one"
				style="padding:120px 6% 80px;background-color:#16226e;background-image:url(img/landing4-wrap-bg3.webp);background-repeat:no-repeat;background-position:left top;border-radius: 50px; ">
				<div class="col-md-7">
					<div class="column_attr clearfix mobile_align_center">
						<h6 class="landing4-heading purple">PARTNERSHIP</h6>
						<hr class="no_line" style="margin: 0 auto 15px auto" />
						<h2><span style="color:#FFF;">Vehicle histories can be complex, but our MaxAllowance report is
								always precise. Our VIN decoder effortlessly reveals essential details, simplifying your
								car-buying journey.</span></h2>
					</div>
				</div>
				<div class="col-md-5">
					<div class="image_frame image_item no_link scale-with-grid no_border" style="margin-top:-260px;">
						<div class="image_wrapper"><img class="scale-with-grid"
								src={{url("img/landing4-pic16.webp")}} /> </div>
					</div>
				</div>
				<div class="col-12">
					<hr class="no_line" style="margin: 0 auto 80px auto" />
				</div>
				<div class="col-12 column_clients">
					<ul class="clients clearfix ">
						<li style="width:25%">
							<div class="client_wrapper">
								<a target="_blank" href="#" title="C1">
									<div class="gs-wrapper"><img width="150" height="39" src={{url("img/ebait.png")}}
											loading="lazy" /> </div>
								</a>
							</div>
						</li>
						<li style="width:25%">
							<div class="client_wrapper">
								<a target="_blank" href="#" title="C2">
									<div class="gs-wrapper"><img width="250" height="40"
											src={{url("img/idU11CHU_F.png")}} loading="lazy" />
									</div>
								</a>
							</div>
						</li>
						<!--<li style="width:25%">-->
						<!--	<div class="client_wrapper">-->
						<!--		<a target="_blank" href="#" title="C3">-->
						<!--			<div class="gs-wrapper"><img width="100" height="46"-->
						<!--					src={{url("img/chrome-data-solutions_owler_20170705_164338_original.png")}} loading="lazy" />-->
						<!--			</div>-->
						<!--		</a>-->
						<!--	</div>-->
						<!--</li>-->
						<li style="width:25%">
							<div class="client_wrapper">
								<a target="_blank" href="#" title="C4">
									<div class="gs-wrapper"><img width="250" height="40" src={{url("img/autoplaiwhite.png")}}
											loading="lazy" /> </div>
								</a>
							</div>
						</li>
						<li style="width:25%">
							<div class="client_wrapper">
								<a target="_blank" href="#" title="C4">
									<div class="gs-wrapper"><img width="150" height="40" src={{url("img/max-allo.png")}}
											loading="lazy" /> </div>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="section container" id="faq" style="padding-top:120px;padding-bottom:40px">
			<div class="row justify-content-md-center text-center">
				<div class="col-md-7" data-col="three-fifth">
					<div class="row">
						<div class="col-12">
							<div class="column_attr clearfix align_center" style="padding:0 8%;">
								<h6 class="landing4-heading grey">FAQ</h6>
								<hr class="no_line" style="margin: 0 auto 15px auto" />
								<h2 style="font-size: 25px;">Providing reliable, detailed vehicle information with efficiency.</h2>
							</div>
						</div>
						<div class="col-12">
							<hr class="no_line" style="margin: 0 auto 20px auto" />
						</div>
						<div class="column mcb-column one column_faq">
							<div class="faq">
								<div class="mfn-acc faq_wrapper ">
									<div class="question">
										<div class="title"> <span class="num">1</span><i
												class="icon-plus acc-icon-plus"></i><i
												class="icon-minus acc-icon-minus"></i>User-friendly interface, providing
											clear and precise vehicle details.</div>
										<div class="answer"> Clear and essential vehicle details at your fingertips.
											Seamlessly integrates data for effective use, ensuring comprehensive and
											accurate vehicle information. </div>
									</div>
									<div class="question">
										<div class="title"> <span class="num">2</span><i
												class="icon-plus acc-icon-plus"></i><i
												class="icon-minus acc-icon-minus"></i>User-friendly interface,
											delivering detailed and accurate vehicle data efficiently. </div>
										<div class="answer"> Efficient and user-friendly. Offers clear and precise
											vehicle information, focusing on ease of use and comprehensive details.
											Ensures accurate data and smooth operation. </div>
									</div>
									<div class="question">
										<div class="title"> <span class="num">3</span><i
												class="icon-plus acc-icon-plus"></i><i
												class="icon-minus acc-icon-minus"></i>Now precise and efficient, with
											great attention to detail. </div>
										<div class="answer"> User-friendly interface with comprehensive data access.
											Avoids complexity while providing essential and accurate vehicle information
											efficiently. </div>
									</div>
									<div class="question">
										<div class="title"> <span class="num">4</span><i
												class="icon-plus acc-icon-plus"></i><i
												class="icon-minus acc-icon-minus"></i>Efficient data processing
											framework.</div>
										<div class="answer"> Now streamlined. Provides essential vehicle data
											efficiently and clearly. User-friendly interface with detailed and accurate
											information. Ensures ease of use and comprehensive insights into vehicle
											specifications. </div>
									</div>
									<div class="question">
										<div class="title"> <span class="num">5</span><i
												class="icon-plus acc-icon-plus"></i><i
												class="icon-minus acc-icon-minus"></i>Efficient and user-friendly,
											providing smooth and reliable vehicle information. </div>
										<div class="answer"> Precise and reliable. Provides clear and essential vehicle
											details. Easy to use with effective support. Focuses on delivering
											straightforward, accurate information. </div>
									</div>
									<div class="question">
										<div class="title"> <span class="num">6</span><i
												class="icon-plus acc-icon-plus"></i><i
												class="icon-minus acc-icon-minus"></i>Provides essential data with
											precision and clarity. </div>
										<div class="answer"> Reliable and efficient. Focuses on delivering accurate
											vehicle information with a user-friendly interface. Provides comprehensive
											data and clear insights, supported by effective and structured processes.
										</div>
									</div>
									<div class="question">
										<div class="title"> <span class="num">7</span><i
												class="icon-plus acc-icon-plus"></i><i
												class="icon-minus acc-icon-minus"></i>Efficient and thorough vehicle
											data processing. </div>
										<div class="answer"> Streamlined and effective. Delivers high-quality, reliable
											vehicle information. Designed for excellence, providing clear and accurate
											data with a focus on precision. </div>
									</div>
									<div class="question">
										<div class="title"> <span class="num">8</span><i
												class="icon-plus acc-icon-plus"></i><i
												class="icon-minus acc-icon-minus"></i>Ensures detailed and accurate
											vehicle information. </div>
										<div class="answer"> Efficient and reliable. Provides consistent and accurate
											vehicle data. Ensures a straightforward and comprehensive experience for all
											users. </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section mcb-section bg-contain" id="contact"
			style="padding-top:180px;padding-bottom:40px;background-color:#fcf9f1;background-image:url(img/landing4-section-bg1.webp);background-repeat:no-repeat;background-position:right top">
			<div class="container">
				<div class="row justify-content-md-center text-center">
					<div class="col-md-8">
						<div class="column_attr clearfix text-center">
							<h6 class="landing4-heading">CONTACT</h6>
							<hr class="no_line" style="margin: 0 auto 15px auto" />
							<h2>Still not convinced?
								<br />
								Please <span class="themecolor">drop us a line.</span>
							</h2>
							<hr class="no_line" style="margin: 0 auto 30px auto" />
							<div id="contactWrapper">
								<div id="contactform">
									<form method="POST" id="reused_form" action="/message">
										@csrf
										<!-- One Second (1/2) Column -->
										<div class="column one-second">
											<input placeholder="Your name" id="name" type="text" name="username"
												required maxlength="50">
										</div>
										<!-- One Second (1/2) Column -->
										<div class="column one-second">
											<input placeholder="Your e-mail" id="email" type="email" name="email"
												required maxlength="50">
										</div>
										<div class="column one">
											<input placeholder="Subject" id="subject" type="text" name="subject"
												maxlength="50">
										</div>
										<div class="column one">
											<textarea placeholder="Message" id="message" name="message" rows="10"
												maxlength="6000" required></textarea>
										</div>
										<div class="column one">
											<button class="button-primary" id="submit" type="submit"> Send A Message
											</button>
										</div>
									</form>
									<div id="success_message" style="display:none">
										<h3>Submitted the form successfully!</h3>
										<p> We will get back to you soon. </p>
									</div>
									<div id="error_message" style="width:100%; height:100%; display:none;">
										<h3>Error</h3> Sorry there was an error sending your form.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer id="Footer" class="clearfix ">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<hr class="no_line" style="margin:0 auto 100px">
				</div>
				<div class="col-md-3">
					<div class="wp-block-column" style="flex-basis:33.33%">
						<figure class="wp-block-image size-full"><img loading="lazy" width="300" style="height:auto;"
								src="{{url("img/maxlogo1.png")}}" class="wp-image-11" /> </figure>
					</div>
				</div>
				<div class="col-md-3">
					<h4>Contact details</h4>
					<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
					<p> Contact us for more details.</p>
					<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
					<p style="font-weight: 500;"><a
							href="mailto:helpdesk@chromacars.com"><span>helpdesk@chromacars.com</span></a>
					</p>
				</div>

				<div class="col-md-3">
					<h4>Payments</h4>
					<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
					<p> We offer multiple payment solutions. Choose the option that's most convenient for you! </p>
					<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
					<figure class="wp-block-image size-full"><img loading="lazy" width="249" height="20" src="{{url("
							img/landing4-footer-pic1.webp")}}" class="wp-image-12" /> </figure>
					<figure class="wp-block-image size-full"><img loading="lazy" width="223" height="21"
							src={{url("img/landing4-footer-pic2.webp")}} class="wp-image-13" /> </figure>
				</div>
				<div class="col-12">
					<hr class="no_line" style="margin:0 auto 50px">
				</div>
			</div>
		</div>
		<div class="footer_copy">
			<div class="container">
				<div class="column one"> <a id="back_to_top" class="footer_button" href="#"><i
							class="icon-up-open-big"></i></a>
					<div class="copyright"> &copy; 2024 - Max Allowance group </div>
					<ul class="social">
						<li class="skype"> <a href="#" title="Skype"><i class="icon-skype"></i></a> </li>
						<li class="facebook"> <a href="#" title="Facebook"><i class="icon-facebook"></i></a> </li>
						<li class="twitter"> <a href="#" title="Twitter"><i class="icon-twitter"></i></a> </li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	</div>
	<div id="body_overlay"></div>
	<div id="Side_slide" class="right light" data-width="250">
		<div class="close-wrapper"> <a href="#" class="close"><i class="icon-cancel-fine"></i></a> </div>
		<div class="extras"> <a href="/plan" class="action_button scroll">Subscribe</a>
			<div class="extras-wrapper"></div>
		</div>
		<div class="menu_wrapper"></div>
		<ul class="social" style="text-align: left; margin-left: 10px; padding-left: 26px;">
			<li>
			    @if(Auth::check())
									<a href="/dashboard" ><b>Dashboard</b></a>
									@else
									<a href="/login"><b>Login Now </b></a>
									
									@endif
			</li>
			<!--<li class="skype"> <a href="#" title="Skype"><i class="icon-skype"></i></a> </li>-->
			<!--<li class="facebook"> <a href="#" title="Facebook"><i class="icon-facebook"></i></a> </li>-->
			<!--<li class="twitter"> <a href="#" title="Twitter"><i class="icon-twitter"></i></a> </li>-->
		</ul>
	</div>
	<!-- JS -->
	<script src={{url("js/jquery-3.6.0.min.js")}}></script>
	<script src={{url("js/jquery-migrate-3.4.0.min.js")}}></script>
	<script src={{url("js/mfn.menu.js")}}></script>
	<script src={{url("js/jquery.plugins.js")}}></script>
	<script src={{url("js/jquery.jplayer.min.js")}}></script>
	<script src={{url("js/animations.js")}}></script>
	<script src={{url("js/translate3d.js")}}></script>
	<script src={{url("js/scripts.js")}}></script>
	<script src={{url("js/revolution.tools.min.js")}}></script>
	<script src={{url("js/rs6.min.js")}}></script>
	<script src={{url("phpmailer/form.js")}}></script>
	<script>
		var revapi1, tpj;

		function revinit_revslider11() {
			jQuery(function () {
				tpj = jQuery;
				revapi1 = tpj("#rev_slider_1_1");
				if (revapi1 == undefined || revapi1.revolution == undefined) {
					revslider_showDoubleJqueryError("rev_slider_1_1");
				} else {
					revapi1.revolution({
						sliderLayout: "fullwidth",
						visibilityLevels: "1240,1240,778,778",
						gridwidth: "1400,1400,778,778",
						gridheight: "950,950,1100,1100",
						spinner: "spinner12",
						perspective: 600,
						perspectiveType: "global",
						spinnerclr: "#13d5ff",
						editorheight: "950,768,1100,720",
						responsiveLevels: "1240,1240,778,778",
						progressBar: {
							disableProgressBar: true
						},
						navigation: {
							onHoverStop: false
						},
						fallbacks: {
							allowHTML5AutoPlayOnAndroid: true
						},
					});
				}
			});
		} // End of RevInitScript
		var once_revslider11 = false;
		if (document.readyState === "loading") {
			document.addEventListener('readystatechange', function () {
				if ((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11) {
					once_revslider11 = true;
					revinit_revslider11();
				}
			});
		} else {
			once_revslider11 = true;
			revinit_revslider11();
		}
	</script>
	<script>
       document.addEventListener("DOMContentLoaded", function () {
    const stars = document.querySelectorAll(".star");
    const ratingTexts = document.querySelectorAll(".rating-text .text");
    const ratingInput = document.getElementById("rating");

    stars.forEach((star, index) => {
        star.addEventListener("click", function () {
            const value = star.getAttribute("data-value");
            stars.forEach((s, i) => {
                if (i <= index) {
                    s.classList.add("selected");
                } else {
                    s.classList.remove("selected");
                }
            });
            ratingTexts.forEach((text, i) => {
                if (i == index) {
                    text.style.display = "inline-block";
                } else {
                    text.style.display = "none";
                }
            });
            ratingInput.value = value;
        });
        star.addEventListener("mouseover", function () {
            const value = star.getAttribute("data-value");
            stars.forEach((s, i) => {
                if (i < value) {
                    s.classList.add("hovered");
                } else {
                    s.classList.remove("hovered");
                }
            });
        });
        star.addEventListener("mouseout", function () {
            stars.forEach(s => s.classList.remove("hovered"));
        });
    });

    // AJAX form submission
    $('#review_form').on('submit', function(event) {
        event.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: "/ratting_save", // Form action URL
            type: 'POST',
            data: formData,
            success: function(response) {
                $('#success_message').show();
                $('#error_message').hide();
                $('#review_form').hide();
            },
            error: function() {
                $('#error_message').show();
                $('#success_message').hide();
            }
        });
    });
});

        $("#mycheckbutton").click(function() {
    $('html, body').animate({
        scrollTop: $("#pricing").offset().top
    }, 2000);
});
$("#mycheckbutton2").click(function() {
    $('html, body').animate({
        scrollTop: $("#pricing").offset().top
    }, 2000);
});
$("#mycheckbutton3").click(function() {
    $('html, body').animate({
        scrollTop: $("#pricing").offset().top
    }, 2000);
});
    </script>
    
</body>

</html>