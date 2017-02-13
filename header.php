<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
  <meta charset="utf-8">
  <?php // force Internet Explorer to use the latest rendering engine available ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title(''); ?></title>

  <?php // mobile meta (hooray!) ?>
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
  <link rel="apple-touch-icon" href="http://shunpachi.jp/wp-content/themes/shunpachi2017/library/images/apple-touch-icon.png">
  <link rel="icon" href="http://shunpachi.jp/wp-content/themes/shunpachi2017/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
      <![endif]-->
      <?php // or, set /favicon.ico for IE10 win ?>
      <meta name="msapplication-TileColor" content="#f01d4f">
      <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
      <meta name="theme-color" content="#121212">
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
      <?php // wordpress head functions ?>
      <?php wp_head(); ?>
      <?php // end of wordpress head ?>
      <?php // drop Google Analytics Here ?>
      <?php // end analytics ?>

       <link media="only screen and (max-device-width:480px)" href="<?php echo get_template_directory_uri(); ?>/library/css/smart.css" type="text/css" rel="stylesheet" />


    </head>

    <body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
      <div id="container">
       <header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
        <div id="inner-header" class="wrap cf">
         <p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/library/images/00_common/logo.svg"></a></p>

         <nav class="nav" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
          <ul class="header-nav">
            <a href="<?php echo home_url(); ?>" target="_blank"><li><img id="header-nav-seika" src="<?php echo get_template_directory_uri(); ?>/library/images/00_common/service_logo-01-seika.svg"></li></a>
            <a href="http://shunpachi-univ.com/" target="_blank"><li><img id="header-nav-uni" src="<?php echo get_template_directory_uri(); ?>/library/images/00_common/service_logo-02-uni.svg"></li></a>
            <a href="/kitchen" target="_blank"><li><img id="header-nav-kitchen" src="<?php echo get_template_directory_uri(); ?>/library/images/00_common/service_logo-04-kitchen.svg"></li></a>
            <a href="http://shop.shunpachi.jp/" target="_blank"><li><img id="header-nav-online" src="<?php echo get_template_directory_uri(); ?>/library/images/00_common/service_logo-05-online.svg"></li></a>
          </ul>
         </nav>
       </div>
     </header>
