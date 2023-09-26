<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<?php if(has_custom_logo()) : ?>
<a class="logo-brand" href="<?php bloginfo('url'); ?>"><?php the_custom_logo(); ?></a>
 <?php else : ?>
<a class="site-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
<?php endif; ?>    
<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
<?php wp_nav_menu([
            'theme_location' => 'header',
            'container' => false,
            'menu_class' => 'navbar-nav mr-auto',
            
]);
            ?>
</nav>

</header>
<div id="container">
<main id="content" role="main">

