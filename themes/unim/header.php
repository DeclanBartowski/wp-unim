<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title(); ?></title>



    <link type="font/woff2" href="<?=get_stylesheet_directory_uri()?>/assets/fonts/Raleway-Regular/Raleway-Regular.woff2" rel="preload" as="font" crossorigin="anonymous">
    <link type="font/woff2" href="<?=get_stylesheet_directory_uri()?>/assets/fonts/Raleway-Bold/Raleway-Bold.woff2" rel="preload" as="font" crossorigin="anonymous">
    <link type="font/woff2" href="<?=get_stylesheet_directory_uri()?>/assets/fonts/MyriadPro-Regular/MyriadPro-Regular.woff2" rel="preload" as="font" crossorigin="anonymous">
    <link type="font/woff2" href="<?=get_stylesheet_directory_uri()?>/assets/fonts/RobotoSlab-Regular/RobotoSlab-Regular.woff2" rel="preload" as="font" crossorigin="anonymous">
    <link type="font/woff2" href="<?=get_stylesheet_directory_uri()?>/assets/fonts/RobotoSlab-Bold/RobotoSlab-Bold.woff2" rel="preload" as="font" crossorigin="anonymous">
    <link type="font/woff2" href="<?=get_stylesheet_directory_uri()?>/assets/fonts/AktivGroteskCorp-Light/AktivGroteskCorp-Light.woff2" rel="preload" as="font" crossorigin="anonymous">
    <link type="font/woff2" href="<?=get_stylesheet_directory_uri()?>/assets/fonts/AktivGroteskCorp-Regular/AktivGroteskCorp-Regular.woff2" rel="preload" as="font" crossorigin="anonymous">
    <link type="font/woff2" href="<?=get_stylesheet_directory_uri()?>/assets/fonts/AktivGroteskCorp-Bold/AktivGroteskCorp-Bold.woff2" rel="preload" as="font" crossorigin="anonymous">
    <link type="font/woff2" href="<?=get_stylesheet_directory_uri()?>/assets/fonts/AktivGroteskCorp-Medium/AktivGroteskCorp-Medium.woff2" rel="preload" as="font" crossorigin="anonymous">

    <?php wp_head() ?>
</head>
<style>.loaded_hiding {  opacity: 0; pointer-events: none;  } .loaded_hiding::before { display: none; }</style>

<body class="loaded_hiding">
<!-- start header-->
<header class="header" id="header">
    <? get_template_part('logo'); ?>
    <? get_template_part('menu'); ?>
    <? get_template_part('main_slider'); ?>
</header>