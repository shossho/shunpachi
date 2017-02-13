<?php
/*
 * CUSTOM POST TYPE ARCHIVE TEMPLATE
 *
 * This is the custom post type archive template. If you edit the custom post type name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is called "register_post_type( 'bookmarks')",
 * then your template name should be archive-bookmarks.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

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
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
      <![endif]-->
      <?php // or, set /favicon.ico for IE10 win ?>
      <meta name="msapplication-TileColor" content="#f01d4f">
      <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
      <meta name="theme-color" content="#121212">
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

       <link media="only screen and (max-device-width:480px)" href="<?php echo get_template_directory_uri(); ?>/library/css/smart-kitchen.css" type="text/css" rel="stylesheet" />
       <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/makino.css">

      <?php // wordpress head functions ?>
      <?php wp_head(); ?>
      <?php // end of wordpress head ?>
      <?php // drop Google Analytics Here ?>
      <?php // end analytics ?>
    </head>

    <body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
      <div id="container">

       <header class="header header-kitchen" role="banner" itemscope itemtype="http://schema.org/WPHeader">
        <div id="inner-header" class="wrap cf">

         <p id="logo-kitchen" class="h1" itemscope itemtype="http://schema.org/Organization"><img id="kitchen-logo" src="http://bunchosha.com/wp-content/uploads/2017/02/aec8862ed4ea17f5ba0705c2f41b567d-2.png"></p>
         
         </nav>
       </div>
     </header>

			<div id="content">

				<div id="kitchen">

					<div id="top">
		<div class="nav-local">
			<ul class="">
				<li></li>
			</ul>
		</div>
	</div>


				<div id="inner-content" class="wrap cf">
					<main id="main" class="m-all t-3of3 d-4of5 kitchen-main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
					
					<div class="kitchen-messege">					

						<h2>出来たて、美味しい、お手頃価格。</h2>
						<h2>旬の食材を使った、惣菜とお弁当のお店です。</h2></br>	

						旬八キッチンは、旬八の青果をふんだんに使った、惣菜とお弁当のお店です。

						毎日、旬八青果店から届く、色とりどりの旬の青果を使用したお惣菜。
						毎日メニューが変わるから、旬の料理を楽しめます。
						野菜たっぷりのサラダや、ゴロっと野菜のオーブン焼き。
						水は使わず果物・野菜のみでつくったスムージーやポタージュ。
						お昼には季節野菜のカレーや日替わり弁当。					
						せわしない日々の中、不本意な食生活している人たちへ。
						旬のおいしい青果を、毎日食べてもらえるように、
						お手頃価格でお届けします。
					</br>					</br>
						2017年2月中旬、天王洲にオープンです。

						</br></br></br>

            <a href="<?php echo home_url(); ?>" target="_blank"><img id="header-nav-seika" src="<?php echo get_template_directory_uri(); ?>/library/images/00_common/service_logo-01-seika.svg"></a>						

	
					</div>
<div class="recruit">
	<h2>一緒に働くメンバーを募集しています</h2>
詳しくは<a href="http://agrigate.co.jp/partner/">AGRIGATE</a>	のホームページをご覧ください。

	

</div>					

						

						</main>

				</div>
			</div>
			</div>

<?php get_footer(); ?>
