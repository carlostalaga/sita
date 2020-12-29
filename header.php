<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>



</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header">
<div id="branding">


<!-- bootstrap menu integration -->
<nav id="navbar-fx" class="navbar navbarfxbg navbar-fixed-top navbar-expand-xl navbar-dark navbar-custom">

  <div class="container">


    <a id="navbar-brand" href="<?php echo get_option("siteurl"); ?>">
      <!--?php bloginfo('name'); ?-->
      <img id="logo-change" src="<?php echo get_template_directory_uri() ?>/img/logo-sita-stamp-light.png" class="img-fluid logo-fx logo-constraint" alt="logotipo">
    </a>

    <button class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <div class="animated-icon1"><span></span><span></span><span></span></div>
    </button>

    <?php
    wp_nav_menu( array(
        'theme_location'  => 'main-menu',
        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'navbarSupportedContent',
        'menu_class'      => 'navbar-nav ml-auto d-flex align-self-stretch',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
    ) );
    ?>

  </div>
</nav>
<!-- //end bootstrap menu integration -->

</header>
<div id="container">
