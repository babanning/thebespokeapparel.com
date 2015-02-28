<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title( ' | ', true, 'right' ); ?></title>
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" /> -->
    <link rel="stylesheet" href="/wp-content/themes/thebespokeapparel-child/css/builds/main.css"></link>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<div class="site-header">
    <ul class="wrap site-header-nav">
        <li><a href="#" data-location="section-id-products">Products</a></li>
        <li><a href="#" data-location="section-id-whatwedo">What We Do</a></li>
        <li><a href="#" data-location="section-id-whoweare">Who We Are</a></li>
        <li><a href="#" data-location="section-id-contactus">Contact us</a></li>
    </ul>
</div>