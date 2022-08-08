<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title();?></title>
    <?php wp_head();?>
</head>

<body>
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="header__logo">
                    <a href="<?php echo get_permalink(9);?>" class="header__logo-link">
                        <img src="<?php bloginfo('template_url');?>/assets/img/logo.png" alt="" class="header__img">
                    </a>
                </div>
                <div class="header__wrapper">
                    <h2 class="header__title">легкий старт продаж на маркетплейсах</h2>
                    <a href="tel:+7<?php echo get_field( 'city_number_code', 9 );?>" class="hader__phone-link"><?php echo get_field( 'city_number_visual', 9 );?></a>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container">
                <nav class="menu">
                <?php
                    wp_nav_menu([
                        'theme_location' => 'main_menu',
                        'container' => '',
                        'menu_class' => 'menu__list',
                        'menu_id' => ''
                    ])
                    ?>
                    
                    <div class="cross-close">
                        <span></span>
                        <span></span>
                    </div>
                </nav>
                
                   <a data-fancybox data-src="#getorder" class="header__button">Оставить заявку</a>
                
                <div class="mobile__menu">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <div class="modal" style="display:none">
        <div id="getorder">
            <div class="call-block">
                <h2 class="modal__title">Оставить заявку</h2>
                <div class="modal-form">
                <?php echo do_shortcode('[contact-form-7 id="81" title="modal_form"]') ?>
                </div>                
            </div>
        </div>
        <!-- <div id="thank">
            <div class="call-block">
                <h2 class="modal__title">Благодарим за заявку! <br> Наш менеджер свяжется с Вами в течение часа.</h2>
            </div>    
        </div> -->
    </div>