<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="shortcut icon" href="<?php Helpers::image_url('favicon.png'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo( 'title' ); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <base href="<?php echo site_url(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
