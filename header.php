<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/assets/theme/default/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/assets/theme/default/css/additional.css">

    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/assets/theme/default/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/assets/theme/default/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/assets/theme/default/css/socicon-styles.css">

    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/assets/theme/default/css/hover-min.css" />
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/assets/theme/default/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/assets/theme/default/css/styles.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/assets/theme/default/css/responsive.css">
    <script src="<?= get_template_directory_uri() ?>/assets/assets/theme/default/js/jquery-2.2.4.min.js" crossorigin="anonymous"
            type="text/javascript"></script>

    <link rel="stylesheet" type="text/css"
          href="<?= get_template_directory_uri() ?>/assets/assets/theme/default/swiper/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/assets/theme/default/swiper/css/custom.css">

    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/assets/theme/default/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/assets/theme/default/css/owl-custom.css">
    <link rel="stylesheet" type="text/css"
          href="<?= get_template_directory_uri() ?>/assets/assets/theme/default/css/owl.theme.default.min.css">
    <script src="<?= get_template_directory_uri() ?>/assets/assets/theme/default/js/owl.carousel.js" type="text/javascript"></script>

    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js" type="text/javascript"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet" type="text/css"
          media="all" />
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/assets/theme/default/css/auto-complete.css">

    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/assets/theme/default/css/filter.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/assets/theme/default/css/blue.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/assets/theme/default/css/dark.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/assets/theme/default/css/custom.css">
    
</head>
<body>


<div id="wrapper">
    <div id="main-content">
        <?php include_once THEME_URL.'/templates/header.php' ?>
        <?php if(get_option('ophim_is_ads') == 'on') { ?>
            <div id=top_addd style="text-align: center"></div>
        <?php } ?>



