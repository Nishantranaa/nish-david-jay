<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>

    <div class="container clearfix">
        <header class="header clearfix">
            <a href="<?php echo home_url(); ?>" class="header__logo"><?php bloginfo('name'); ?> </a>
            <a href="#" class="header__icon-bar"><span></span><span></span><span></span></a>
            <ul class="header__menu">
                <li class="header__menu__item"><a href="">link</a></li>
                <li class="header__menu__item"><a href="">link</a></li>
                <li class="header__menu__item"><a href="">link</a></li>
                <li class="header__menu__item"><a href="">link</a></li>
                <li class="header__menu__item"><a href="">link</a></li>
            </ul>
        </header>
        <h1 class="main-title">ourThem</h1>