<?php
    //Template name: Home
?>
<?php get_header(); ?>
    <?php if ( have_posts(  )) : while ( have_posts(  ) ) : the_post( ); ?>
        <!-- Sessão Padrão Hero Original
        <section id="ReturnToTop" class="s-hero">
            <div class="container">
                    <div class="left">
                        <h1><?php the_field ('acf_titulo_principal'); ?></h1>
                        <p class="text-inicial"><?php the_field ('acf_texto_principal'); ?></p>
                        <a class="link-btn-hero" href="<?php the_field ('acf_link_do_botao_principal_da_sessao_hero'); ?>"><button class="btn-primary"><p><?php the_field ('acf_texto_do_botao_principal_da_sessao_hero'); ?></p><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></button></a>
                        <div class="arrow">
                            <i class="fa-solid fa-arrow-down fa-fade" style="color: #17d460;"></i>
                        </div>
                    </div>
                    <div class="right">
                        <div class="content">
                            <div class="image">
                                <img src="<?php the_field ('acf_imagem_principal_da_sessao_hero'); ?>" alt="">
                            </div>
                            <div class="redes-sociais">
                                <div class="icone-redes-sociais">
                                    <a target="_blank" href="<?php the_field ('acf_link_do_facebook', 'options'); ?>"><i class="fa-brands fa-facebook-f" style="color: #17bd57;"></i></a>
                                </div>
                                <div class="icone-redes-sociais">
                                    <a target="_blank" href="<?php the_field ('acf_link_do_instagram', 'options'); ?>"><i class="fa-brands fa-instagram" style="color: #17bd57;"></i></a>
                                </div>
                                <div class="icone-redes-sociais">
                                    <a target="_blank" href="<?php the_field ('acf_link_do_linkedin', 'options'); ?>"><i class="fa-brands fa-linkedin-in" style="color: #17bd57;"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="icones-bottom">
                            <div class="icon-ecologico">
                                <i class="fa-solid fa-circle-check" style="color: #17bd57;"></i>
                                <p><?php the_field ('acf_texto_do_botao_ecologico'); ?></p>
                            </div>
                            <img class="en-plus" src="<?php the_field('acf_icone_en-plus')?>" alt="">
                            <div class="box-fsc">
                                <div class="icone-fsc">
                                    <img src="<?php the_field ('acf_icone_do_botao_rastreabilidade'); ?>" alt="">
                                </div>
                                <div class="bottom">
                                    <p><?php the_field ('acf_texto_do_botao_rastreabilidade'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fundo-verde-claro">

                    </div>
            </div>
        </section>-->


        <section id="ReturnToTop" class="s-hero-video">

        <video autoplay muted loop playsinline class="background-video">
            <source src="<?php the_field('acf_background-video-home') ?>" type="video/mp4">
        </video>



            <div class="container">
                    <div class="left">
                        <h1><?php the_field ('acf_titulo_principal'); ?></h1>
                        <p class="text-inicial"><?php the_field ('acf_texto_principal'); ?></p>
                        <a class="link-btn-hero" href="<?php the_field ('acf_link_do_botao_principal_da_sessao_hero'); ?>"><button class="btn-primary"><p><?php the_field ('acf_texto_do_botao_principal_da_sessao_hero'); ?></p><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></button></a>
                        <div class="arrow">
                            <i class="fa-solid fa-arrow-down fa-fade" style="color: #17d460;"></i>
                        </div>
                    </div>
                    <div class="right">
                        <div class="content">
                            <!--<div class="image">
                                <img src="<?php the_field ('acf_imagem_principal_da_sessao_hero'); ?>" alt="">
                            </div>-->
                            <div class="redes-sociais">
                                <div class="icone-redes-sociais">
                                    <a target="_blank" href="<?php the_field ('acf_link_do_facebook', 'options'); ?>"><i class="fa-brands fa-facebook-f" style="color: #17bd57;"></i></a>
                                </div>
                                <div class="icone-redes-sociais">
                                    <a target="_blank" href="<?php the_field ('acf_link_do_instagram', 'options'); ?>"><i class="fa-brands fa-instagram" style="color: #17bd57;"></i></a>
                                </div>
                                <div class="icone-redes-sociais">
                                    <a target="_blank" href="<?php the_field ('acf_link_do_linkedin', 'options'); ?>"><i class="fa-brands fa-linkedin-in" style="color: #17bd57;"></i></a>
                                </div>
                            </div>
                        </div>
            </div>
        </section>

        <section class="s-sobre-nos">
            <div class="container">
                <div class="left">
                    <div class="fundo"></div>
                    <div class="image">
                        <img src="<?php the_field ('acf_imagem_principal_da_sessao_conheca'); ?>" alt="">
                    </div>
                </div>
                <div class="right">
                    <div class="logo-girando">
                                <img class="text-circle" src="<?php the_field ('acf_texto_animado_rodando'); ?>" alt="">
                            <div class="logo">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/icone-planta.svg" alt="">
                                    </div>
                            </div>
                    </div>
                    <div class="text">
                        <div class="subtitulo">
                            <span class="span-subtitulo-2"><?php the_field ('acf_subtitulo_da_sessao_conheca'); ?></span>
                            <div class="linha"></div>
                        </div>
                        <div class="titulo-icone">
                            <h3><?php the_field ('acf_titulo_principal_da_sessao_conheca'); ?></h3>
                        </div>
                        <div class="txt">
                            <div class="texto-1">
                                <p><?php the_field ('acf_coluna_de_textos_da_esquerda'); ?></p>
                            </div>
                            <div class="texto-2">
                                <p><?php the_field ('acf_coluna_de_textos_da_direita'); ?></p>
                            </div>
                        </div>

                        <a class="link-btn-produtos" href="<?php the_field ('acf_link_do_botao_da_sessao_conheca'); ?>"><button class="btn-primary"><p><?php the_field ('acf_texto_do_botao_da_sessao_conheca'); ?></p><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></button></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="s-nossos-produtos">
            <div class="container">
                <div class="left">
                    <div class="subtitulo">
                        <span class="span-subtitulo-2"><?php the_field ('acf_subtitulo_da_sessao_nossos_produtos'); ?></span>
                        <div class="linha"></div>
                    </div>
                    <h3><?php the_field ('acf_titulo_da_sessao_nossos_produtos'); ?></h3>
                    <div class="textos">
                        <p><?php the_field ('acf_texto_sessao_nossos_produtos_'); ?></p>
                    </div>
                    <a class="link-btn-produtos" href="<?php the_field ('acf_link_do_botao_da_sessao_nossos_produtos'); ?>"><button class="btn-primary"><p><?php the_field ('acf_texto_do_botao_da_sessao_nossos_produtos'); ?></p><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></button></a>
                </div>
                <div class="right">
                    <div class="background-green">
                        <img src="<?php echo get_template_directory_uri() ?>/img/bg-planta-transparente.svg" alt="">
                    </div>
                    <div class="conteudo">
                        <div class="imagem-principal-nossos-produtos">
                            <img class="image-section-produtos" src="<?php the_field ('acf_imagem_da_sessao_nossos_produtos'); ?>" alt="">
                        </div>
                        <div class="box-fsc">
                            <div class="icone-fsc">
                                <img src="<?php the_field('acf_icone_do_botao_fsc_da_sessao_nossos_produtos') ?>" alt="">
                            </div>
                            <div class="bottom">
                                <p><?php the_field('acf_texto_do_botao_fsc_da_sessao_nossos_produtos') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include(TEMPLATEPATH .'/inc/partial_slides_logos.php') ?>

        <?php include(TEMPLATEPATH .'/inc/partial_modulo-sustentabilidade.php') ?>

        <?php include(TEMPLATEPATH .'/inc/partial_section_contato.php') ?>


    <?php endwhile; else: endif; ?>
<?php get_footer(); ?>

