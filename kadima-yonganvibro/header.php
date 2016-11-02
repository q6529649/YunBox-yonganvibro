<!DOCTYPE html>
<!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>
    <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>" />
	<?php $wl_theme_options = kadima_get_options(); ?>
	<?php if($wl_theme_options['upload_image_favicon']!=''){ ?>
	<link rel="shortcut icon" href="<?php  echo esc_url($wl_theme_options['upload_image_favicon']); ?>" />
	<?php } ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div>
	<!-- Header Section -->
	<div class="header_section" >
		<div class="container" >
			<!-- Logo & Contact Info -->
			<div class="row ">
				<div class="wl_rtl" >
					<!--ul class="head_r">
						<li>
							<span><i class="ico"></i>Language<i class="ico2"></i></span>
					       	<div class="language" style="display: none;">
						        <a href="#">English</a>
						        <a href="#" target="_blank">中文</a>
					       </div>
					   </li>
				   </ul-->
   					<div class="logo">
   						<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
   						<?php if($wl_theme_options['upload_image_logo']){ ?>
   							<img src="<?php echo $wl_theme_options['upload_image_logo']; ?>" style="height:<?php if($wl_theme_options['height']!='') { echo $wl_theme_options['height']; }  else { "80"; } ?>px; width:<?php if($wl_theme_options['width']!='') { echo $wl_theme_options['width']; }  else { "200"; } ?>px;" />
   							<?php } else {
   								echo get_bloginfo('name');
   							} ?>
   							<span style="font-size:22px;">&nbsp;&nbsp;<?php bloginfo( 'description' ); ?></span>
   						</a>
   					</div>
					<!--div style="margin-top:1.8em;">
						<ul style="list-style-type: none; padding: 0px;">
		  					<li class="lang-item lang-item-9 lang-item-zh" data-original-title="" title="" style="float: left;margin-left:0.3em;">
		  						<div class="btn-group">
                                	<button type="button" class="btn btn-default dropdown-toggle"data-toggle="dropdown" style="border-color:#fff;color:#555;">
										Language <span class="caret"></span>
									</button>
                                	<ul class="dropdown-menu" style="background-color: #fff !important;" role="menu">
										<li class="lang-item lang-item-6 lang-item-en lang-item-first current-lang" data-original-title="" title="" style="float: left;">
					  						<a lang="en-US" hreflang="en-US" href="#" data-slimstat-clicked="false" data-slimstat-type="2" data-slimstat-tracking="false" data-slimstat-async="false" data-slimstat-callback="false">
					  							<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHzSURBVHjaYkxOP8IAB//+Mfz7w8Dwi4HhP5CcJb/n/7evb16/APL/gRFQDiAAw3JuAgAIBEDQ/iswEERjGzBQLEru97ll0g0+3HvqMn1SpqlqGsZMsZsIe0SICA5gt5a/AGIEarCPtFh+6N/ffwxA9OvP/7//QYwff/6fZahmePeB4dNHhi+fGb59Y4zyvHHmCEAAAW3YDzQYaJJ93a+vX79aVf58//69fvEPlpIfnz59+vDhw7t37968efP3b/SXL59OnjwIEEAsDP+YgY53b2b89++/awvLn98MDi2cVxl+/vl6mituCtBghi9f/v/48e/XL86krj9XzwEEEENy8g6gu22rfn78+NGs5Ofr16+ZC58+fvyYwX8rxOxXr169fPny+fPn1//93bJlBUAAsQADZMEBxj9/GBxb2P/9+S/R8u3vzxuyaX8ZHv3j8/YGms3w8ycQARmi2eE37t4ACCDGR4/uSkrKAS35B3TT////wADOgLOBIaXIyjBlwxKAAGKRXjCB0SOEaeu+/y9fMnz4AHQxCP348R/o+l+//sMZQBNLEvif3AcIIMZbty7Ly6t9ZmXl+fXj/38GoHH/UcGfP79//BBiYHjy9+8/oUkNAAHEwt1V/vI/KBY/QSISFqM/GBg+MzB8A6PfYC5EFiDAABqgW776MP0rAAAAAElFTkSuQmCC" title="English (en_US)" alt="English">
					  							<span style="color:#555;">English</span>
					  						</a>
					  					</li>
                                	</ul>
                                </div>
		  					</li>
		  				</ul>
					</div-->
				</div>
			</div>
		</div>
	</div>
	<!-- /Header Section -->
	<!-- Navigation  menus -->
	<div class="navigation_menu "  data-spy="affix" data-offset-top="95" id="kadima_nav_top">
		<div class="container navbar-container" >
			<nav class="navbar navbar-default " role="navigation">
				<div id="menu" class="collapse navbar-collapse ">
					<?php wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_class' => 'nav navbar-nav',
						'fallback_cb' => 'kadima_fallback_page_menu',
						'walker' => new kadima_nav_walker(),
						));?>
					<div style="float: right;">
						<?php get_search_form(); ?>
					</div>
				</div>
			</nav>
		</div>
	</div>
