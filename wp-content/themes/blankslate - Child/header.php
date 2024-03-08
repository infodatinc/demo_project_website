<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!-- <meta name="viewport" content="width=device-width" /> -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />

    <script src="https://kit.fontawesome.com/732cabdced.js" crossorigin="anonymous"></script>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.1.11.3.js"></script>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.expander.min.js"></script>
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">


<header id="header" role="banner" >
  <div class="pw-1090">
<div id="branding" >
<a href="<?php echo get_home_url(); ?>" class="branding_image">

  <img class="light" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/InfodatLogoTop.svg" alt="Infodat International">

  <img class="dark" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/thumbnail_image002.png" alt="Infodat International">




</a>



<!-- NEHA: THIS IS THE BEGINNING OF THE MOBILE MENU'S HTML -->

<a class="menu-toggle-button" href="#">
    <!-- <span class="open">Open</span> -->
    <span class="material-symbols-outlined">
menu
</span>
</a>
<div class="mm-offcanvas">
    <div class="offcanvas-flex">
        <div class="close-toggle">
            <a class="menu-toggle-button-mobile" href="#">
            <img class="close"  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/close.svg">
              </a>
        </div>
        <div class="mobile-menu-content">
            <div class="mobile-logo">
                <div class="logo">
                    <img class="logo-placeholder" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/thumbnail_image002.png" alt="Infodat International">

                    <!-- <span class="logo-placeholder">Infodat</span> -->
                </div>  
                <div class="box box-green"></div>  
                <div class="box box-purple"></div>  
                <div class="box box-orange"></div>  
                <div class="box box-blue"></div>
            </div>
            <div id="search"><?php get_search_form(); ?></div>
            <?php echo do_shortcode('[iks_menu id="225"]'); ?> 
          </div>
    </div>
</div>


<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">

<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>

<!-- <div class=navItems>
<a class="industries" href="" id="Industries">Industries </a>
<a class="Services" href="" id="Services">Services </a>              
<a class="Insights" href="" id="Insights">Insights  </a>
</div>  -->


<!-- <div id="search"><?php get_search_form(); ?></div>   -->
</nav>
 </div>
</div>




</header>
<div id="container">
<main id="content" role="main">

</div>




</body>