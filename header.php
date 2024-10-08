<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/icone-incobio-barra-de-pesquisa.svg" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
    <title><?php echo get_bloginfo('name'); ?> | <?php echo get_bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>
<body>

<header id="js-header-scrolled" class="<?php echo is_front_page() ? 'home-header' : 'internal-header'; ?>">
    <div class="container">
        <div class="logo-header" id="logo-scrolled">
            <a href="<?php echo icl_get_home_url(); ?>"><img src="<?php the_field ('acf_logo_incobio_da_pagina_principal', 'options'); ?>" alt=""></a>
        </div>
        <div class="logo-header-white">
            <a href="<?php echo icl_get_home_url(); ?>"><img src="<?php the_field ('acf_logo_incobio_das_paginas_internas', 'options'); ?>" alt=""></a>
        </div>
        <nav>
            <div class="links-header">
                <?php
                    $args = array(
                    'menu' => 'Header Principal Desktop',
                    'theme_location' => 'header-principal-desktop',
                    'container' => false
                    );
                    wp_nav_menu( $args );
                ?>
            </div>
            <div class="linguagens">
                <?php if( have_rows('acf_repeater_idioma_do_site', 'options') ): while ( have_rows('acf_repeater_idioma_do_site', 'options') ) : the_row(); ?>
                    <a href="<?php the_sub_field ('acf_link_idioma_do_site', 'options'); ?>"><img src="<?php the_sub_field ('acf_bandeira_do_pais', 'options'); ?>" alt=""></a>
                <?php endwhile; else : endif;?>
            </div>
        </nav>
        <div id="js-btnMobile" class="icone-menu-mobile">
          <i class="fa-solid fa-bars-staggered" style="color: #ffffff;"></i>
        </div>
    </div>
</header>

<div class="menu-mobile">
    <div class="overlay js-overlay">
        <aside>
            <div class="logo-header" id="logo-scrolled">
                <img src="<?php the_field ('acf_logo_incobio_da_pagina_principal', 'options'); ?>" alt="">
            </div>
            <nav>
                <div class="links-header">
                    <?php
                        $args = array(
                        'menu' => 'Menu Mobile',
                        'theme_location' => 'menu-mobile',
                        'container' => false
                        );
                        wp_nav_menu( $args );
                    ?>
                </div>
                <div class="linguagens">
                    <?php if( have_rows('acf_repeater_idioma_do_site', 'options') ): while ( have_rows('acf_repeater_idioma_do_site', 'options') ) : the_row(); ?>
                        <a href="<?php the_sub_field ('acf_link_idioma_do_site', 'options'); ?>"><img src="<?php the_sub_field ('acf_bandeira_do_pais', 'options'); ?>" alt=""></a>
                    <?php endwhile; else : endif;?>
                </div>
            </nav>
        </aside>
    </div>
</div>
