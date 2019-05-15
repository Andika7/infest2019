<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>INFEST 2019</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="content/tea/images/favicon.ico">

    <!-- FONTS -->
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
	<link rel='stylesheet' href="http://www.tenbytwenty.com/#munro">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700,700italic'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arvo:400,400italic,700,700italic'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:100,300,400'>
    
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/uikit/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="<?php echo base_url() ?>asset/uikit/js/uikit.min.js"></script>
    <script src="<?php echo base_url() ?>asset/uikit/js/uikit-icons.min.js"></script>

    <!-- CSS -->
    <link rel='stylesheet' href='<?php echo base_url() ?>asset/betea/css/global.css'>
    <link rel='stylesheet' href='<?php echo base_url() ?>asset/betea/content/tea/css/structure.css'>
    <link rel='stylesheet' href='<?php echo base_url() ?>asset/betea/content/tea/css/tea.css'>
    

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/betea/plugins/rs-plugin/css/settings.css">
		<link rel='stylesheet' href='<?php echo base_url() ?>asset/betea/content/tea/css/custom.css'>
</head>


<body class="template-slider color-custom style-simple layout-full-width nice-scroll-on mobile-tb-left button-stroke no-content-padding header-split header-semi minimalist-header-no sticky-header sticky-white ab-hide subheader-both-center menu-line-below-80 footer-copy-center tr-content">
    <div id="Wrapper">
        <div id="Header_wrapper" class="bg-parallax" data-enllax-ratio="0.3">
            <header id="Header">
                <div class="header_placeholder"></div>
                <div id="Top_bar" style="background-color: #d73f40;">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <div class="logo">
                                    <a id="logo" href="#" title="BeTea - BeTheme"><img class="logo-main   scale-with-grid" src="<?php echo base_url() ?>asset/image/logo_infest.png" alt="BeTea - BeTheme" /><img class="logo-sticky scale-with-grid" src="<?php echo base_url() ?>asset/image/logo_infest.png" alt=""><img class="logo-mobile scale-with-grid" src="<?php echo base_url() ?>asset/image/logo_infest.png" alt="">
                                    </a>
                                </div>
                                <div class="menu_wrapper">
                                    <nav id="menu">
                                        <ul id="menu-main-menu-left" class="menu menu_left">
                                            <li class="current_page_item">
                                                <a href="index-tea.html"><span>Beranda</span></a>
                                            </li>
                                            <li>
												<a href="content/tea/selected-tea.html"><span>Kategori Lomba</span></a>
												<ul class="sub-menu">
												<?php foreach($lombas as $lomba){?>
                                                    <li>
                                                        <a href="<?php echo base_url();?>pemograman"><span> <?php echo $lomba->nama_lomba; ?></span></a>
													</li>
												<?php } ?>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="content/tea/process.html"><span>Seminar</span></a>
                                            </li>
                                        </ul>
                                        <ul id="menu-main-menu-right" class="menu menu_right">
                                            <li>
                                                <a href="content/tea/values.html"><span>Pengumuman</span></a>
                                            </li>
                                            <li>
                                                <a href="content/tea/contact-us.html"><span>Jadwal</span></a>
                                            </li>
                                            <li>
                                                <a target="_blank"><span><span>Tentang</span></span></a>
                                            </li>
                                        </ul>
                                    </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
                                </div>
                                
                                <div class="banner_wrapper"></div>
                                <div class="search_wrapper">
                                    <form method="get" id="searchform" action="#">
                                        <i class="icon_search icon-search"></i><a href="#" class="icon_close"><i class="icon-cancel"></i></a>
                                        <input type="text" class="field" name="s" id="s" placeholder="Enter your search" />
                                        <input type="submit" class="submit" value="" style="display:none;" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mfn-main-slider" id="mfn-rev-slider">
                    <div id="rev_slider_1_2_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                        <div id="rev_slider_1_2" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.1.6">
                            <ul>
                                <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
									<div class="uk-overflow-hidden">
											<img src="<?php echo base_url() ?>asset/betea/content/tea/images/home_tea_slider.jpg" alt="" width="1920" height="850" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-no-retina class="rev-slidebguk-animation-reverse uk-transform-origin-top-right" uk-scrollspy="cls: uk-animation-kenburns; repeat: true">
									</div>

											
											<div class="uk-animation-toggle" tabindex="0">
												<div class="uk-card uk-card-default uk-card-body uk-animation-slide-right">
														
												</div>
										</div>

											<!--Logo -->
									<div class="tp-caption uk-animation-toggle tp-resizeme" id="slide-1-layer-4" data-x="right" data-hoffset="" data-y="top" data-voffset="120" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-responsive_offset="on" style="z-index: 5;"><img src="<?php echo base_url() ?>asset/image/informatika.png" alt="" width="72" data-no-retina></div> 										
                                    <div class="tp-caption   tp-resizeme" id="slide-1-layer-4" data-x="right" data-hoffset="140" data-y="top" data-voffset="100" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-responsive_offset="on" style="z-index: 5;"><img src="<?php echo base_url() ?>asset/image/hmif.png" alt="" width="72" data-no-retina> </div>																		
                                    <div class="tp-caption   tp-resizeme" id="slide-1-layer-4" data-x="right" data-hoffset="280" data-y="top" data-voffset="105" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-responsive_offset="on" style="z-index: 5;"><img src="<?php echo base_url() ?>asset/image/unsyiah.png" alt="" width="72" data-no-retina> </div>																		
											<!-- endLogo -->

									<div class="tp-caption mfnrs_tea_large_light tp-resizeme" id="slide-1-layer-2" data-x="center" data-hoffset="" data-y="center" data-voffset="-60" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="600" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">
                                        Informatics Festival </div>
                                    <div class="tp-caption mfnrs_tea_large_light   tp-resizeme" id="slide-1-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="30" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-weight: 700;">
                                        INFEST 2019</div>
                                    <div class="tp-caption   tp-resizeme" id="slide-1-layer-5" data-x="center" data-hoffset="-460" data-y="center" data-voffset="30" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="700" data-responsive_offset="on" style="z-index: 8;"><img src="<?php echo base_url() ?>asset/betea/content/tea/images/home_tea_slider_slogan_l.png" alt="" width="127" height="57" data-ww="127px" data-hh="57px" data-no-retina> </div>
                                    <div class="tp-caption   tp-resizeme" id="slide-1-layer-6" data-x="center" data-hoffset="450" data-y="center" data-voffset="30" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="700" data-responsive_offset="on" style="z-index: 9;"><img src="<?php echo base_url() ?>asset/betea/content/tea/images/home_tea_slider_slogan_r.png" alt="" width="127" height="57" data-ww="127px" data-hh="57px" data-no-retina> </div>
                                    <div class="tp-caption mfnrs_tea_small_light   tp-resizeme" id="slide-1-layer-3" data-x="center" data-hoffset="" data-y="center" data-voffset="120" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 10; white-space: nowrap;">
                                        Since 1745 </div>
                                    <div class="tp-caption   tp-resizeme" id="slide-1-layer-7" data-x="center" data-hoffset="" data-y="bottom" data-voffset="100" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="900" data-responsive_offset="on" style="z-index: 11;"><img src="<?php echo base_url() ?>asset/betea/content/tea/images/home_tea_slider_slogan2.png" alt="" width="421" height="56" data-ww="421px" data-hh="56px" data-no-retina> </div>
																</li>
																
                            </ul>
                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
												</div>
										</div>
										
                </div>
            </header>
				</div>
				

        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section mcb-section" style="padding-top:100px; background-color:#fbdcd0; background-repeat:no-repeat; background-position:center top; ">
                            <div class="section_wrapper mcb-section-inner">

								<?php foreach($lombas as $lomba){?>
                                <div class="wrap mcb-wrap one-third  valign-top clearfix" style="padding:0 2%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image ">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="<?php echo base_url().$lomba->image; ?>" alt="" width="400" height="390" /> </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr align_center">
                                                <h4><?php echo $lomba->nama_lomba; ?></h4>
                                                <hr class="no_line" style="margin: 0 auto 20px;" />
                                                <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                    <div class="image_wrapper"><img class="scale-with-grid" src="<?php echo base_url() ?>asset/betea/content/tea/images/home_tea_sep.png" alt="" width="75" height="3" /> </div>
                                                </div>
                                                <hr class="no_line" style="margin: 0 auto 20px;" />
                                                <p class="big">
                                                    <?php echo $lomba->desc_lomba ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
									</div>    
									
								<?php }?>  
                            </div>
                        </div>
                        <div class="section mcb-section" style="padding-top:100px; padding-bottom:50px; background-color : #d73f40; background-repeat:no-repeat; background-position:center top; ">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one  valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr align_center">
                                                <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Great+Vibes:400">
                                                <div class="google_font" style="font-family:'Great Vibes',Arial,Tahoma,sans-serif; font-size:40px; line-height:40px; font-weight:400; color:#b69247;">
                                                    Since 1745
                                                </div>
                                                <h2>THE GREATEST FESTIVAL UNSYIAH</h2>
                                                <hr class="no_line" style="margin: 0 auto 20px;" />
                                                <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                    <div class="image_wrapper"><img class="scale-with-grid" src="<?php echo base_url() ?>asset/betea/content/tea/images/home_tea_sep2.png" alt="" width="255" height="3" /> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider ">
                                            <hr class="no_line" style="margin: 0 auto 20px;" />
                                        </div>
                                        <div class="column mcb-column one-second column_column">
                                            <div class="column_attr align_center" style=" padding:20px 7% 0 0;">
                                                <h5><span style="color: #c4ab68; padding: 0px 7px; font-family: Arvo; font-size: 230%; font-weight: 700;">L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation dignissim nisl non.</h5>
                                                <hr class="no_line" style="margin: 0 auto 30px;" />
                                                <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                    <div class="image_wrapper"><img class="scale-with-grid" src="<?php echo base_url() ?>asset/betea/content/tea/images/home_tea_sep3.png" alt="" width="145" height="25" /> </div>
                                                </div>
                                                <hr class="no_line" style="margin: 0 auto 30px;" />
                                                <p>
                                                    Donec id dolor enim. Nulla facilisi. Vivamus metus nisl, placerat quis nunc vitae, <a href="content/tea/selected-tea.html">congue venenatis</a> sapien. Aliquam vel bibendum augue. Praesent at mi volutpat. Suspendisse et ornare lacus, vitae bibendum nisi.
                                                </p>
                                                <hr class="no_line" style="margin: 0 auto 30px;" />
                                                <a class="button  button_js" href="content/tea/contact-us.html"><span class="button_label">CONTACT US</span></a> </div>
                                        </div>
                                        <div class="column mcb-column one-second column_image ">
                                            <div class="image_frame image_item no_link scale-with-grid no_border">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="<?php echo base_url() ?>asset/betea/content/tea/images/home_tea_pic1.png" alt="" width="626" height="480" /> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section" style=" background-color:#dde19c; padding-top:0px; padding-bottom:50px; ">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one  valign-top clearfix">
                                    <div class="mcb-wrap-inner">

									
                                        <div class="column mcb-column one column_image ">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="<?php echo base_url() ?>asset/betea/content/tea/images/home_tea_sep4.png" alt="" width="1196" height="42" /> </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider ">
                                            <hr class="no_line" style="margin: 0 auto 50px;" />
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-third  valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr">
                                                <h3>THE GREATEST
													<br>
													TEA IN UK</h3>
                                                <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                    <div class="image_wrapper"><img class="scale-with-grid" src="<?php echo base_url() ?>asset/betea/content/tea/images/home_tea_stars.png" alt="" width="129" height="21" /> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-third  valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-third column_image ">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="<?php echo base_url() ?>asset/betea/content/tea/images/home_tea_list_1.png" alt="" width="96" height="96" /> </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column two-third column_column">
                                            <div class="column_attr" style=" padding:0 0 0 3%;">
                                                <h4>DOLOR MIT</h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-third  valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-third column_image ">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="<?php echo base_url() ?>asset/betea/content/tea/images/home_tea_list_2.png" alt="" width="96" height="96" /> </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column two-third column_column">
                                            <div class="column_attr" style=" padding:0 0 0 3%;">
                                                <h4>PORTA LEO</h4>
                                                <p>
                                                    Fusce turpis ex, tristique at nunc eu, commodo convallis leo. Nunc imperdiet sapien eget condimentum ultrices
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one  valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_slider ">
                                            <div class="content_slider carousel">
                                                <ul class="content_slider_ul">
                                                    <li class="content_slider_li_1">
                                                        <a href="#"><img width="600" height="250" src="<?php echo base_url() ?>asset/betea/content/tea/images/home_tea_offer1.png" class="scale-with-grid wp-post-image" alt="home_tea_offer1" />
                                                            <p class="title">
                                                                Fusce luctus est </p>
                                                        </a>
                                                    </li>
                                                    <li class="content_slider_li_2">
                                                        <a href="#"><img width="600" height="250" src="<?php echo base_url() ?>asset/betea/content/tea/images/home_tea_offer2.png" class="scale-with-grid wp-post-image" alt="home_tea_offer2" />
                                                            <p class="title">
                                                                Cras sapien eros </p>
                                                        </a>
                                                    </li>
                                                    <li class="content_slider_li_3">
                                                        <a href="#"><img width="600" height="250" src="<?php echo base_url() ?>asset/betea/content/tea/images/home_tea_offer3.png" class="scale-with-grid wp-post-image" alt="home_tea_offer3" />
                                                            <p class="title">
                                                                Nullam velit turpis </p>
                                                        </a>
                                                    </li>
                                                    <li class="content_slider_li_4">
                                                        <a href="#"><img width="600" height="250" src="<?php echo base_url() ?>asset/betea/content/tea/images/home_tea_offer4.png" class="scale-with-grid wp-post-image" alt="home_tea_offer4" />
                                                            <p class="title">
                                                                Curabitur ac ornare </p>
                                                        </a>
                                                    </li>
                                                    <li class="content_slider_li_5">
                                                        <a href="#"><img width="600" height="250" src="<?php echo base_url() ?>asset/betea/content/tea/images/home_tea_offer5.png" class="scale-with-grid wp-post-image" alt="home_tea_offer5" />
                                                            <p class="title">
                                                                Metus nec posuere </p>
                                                        </a>
                                                    </li>
                                                    <li class="content_slider_li_6">
                                                        <a href="#"><img width="600" height="250" src="<?php echo base_url() ?>asset/betea/content/tea/images/home_tea_offer6.png" class="scale-with-grid wp-post-image" alt="home_tea_offer6" />
                                                            <p class="title">
                                                                Vitae justo metus </p>
                                                        </a>
                                                    </li>
                                                </ul><a class="button button_js slider_prev" href="#"><span class="button_icon"><i class="icon-left-open-big"></i></span></a><a class="button button_js slider_next" href="#"><span class="button_icon"><i class="icon-right-open-big"></i></span></a>
                                                <div class="slider_pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section the_content no_content">
                            <div class="section_wrapper">
                                <div class="the_content_wrapper"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="Footer" class="clearfix">
            <div class="widgets_wrapper" style="padding:30px 0;">
                <div class="container">
                    <div class="column one">
                        <aside class="widget widget_text">
                            <div class="textwidget">
                                <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                    <div class="image_wrapper"><img class="scale-with-grid" src="<?php echo base_url() ?>asset/betea/content/tea/images/home_tea_footer_be.png" alt="" width="261" height="58" /> </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <div class="copyright">
                            &copy; 2017 BeTea - BeTheme.Muffin group - HTML by <a target="_blank" rel="nofollow" href="http://bit.ly/1M6lijQ">BeantownThemes</a>
                        </div>
                        <ul class="social"></ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- JS -->
    <script src="<?php echo base_url() ?>asset/betea/js/jquery-2.1.4.min.js"></script>

    <script src="<?php echo base_url() ?>asset/betea/js/mfn.menu.js"></script>
    <script src="<?php echo base_url() ?>asset/betea/js/jquery.plugins.js"></script>
    <script src="<?php echo base_url() ?>asset/betea/js/jquery.jplayer.min.js"></script>
    <script src="<?php echo base_url() ?>asset/betea/js/animations/animations.js"></script>
    <script src="<?php echo base_url() ?>asset/betea/js/scripts.js"></script>

    <script src="<?php echo base_url() ?>asset/betea/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo base_url() ?>asset/betea/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo base_url() ?>asset/betea/plugins/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
    <script src="<?php echo base_url() ?>asset/betea/plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?php echo base_url() ?>asset/betea/plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?php echo base_url() ?>asset/betea/plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php echo base_url() ?>asset/betea/plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?php echo base_url() ?>asset/betea/plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?php echo base_url() ?>asset/betea/plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?php echo base_url() ?>asset/betea/plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

    <script>
        var tpj = jQuery;
        var revapi1;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_1_2").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_2");
            } else {
                revapi1 = tpj("#rev_slider_1_2").show().revolution({
                    sliderType: "hero",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {},
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1240,
                    gridheight: 850,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner2",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        disableFocusListener: false,
                    }
                });
            }
        });
    </script>

</body>

</html>
