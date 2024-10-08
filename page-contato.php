<?php get_header(); ?>
    <?php
        //Template name: Página Contato
    ?>

        <?php if ( have_posts(  )) : while ( have_posts(  ) ) : the_post( ); ?>

            <section class="s-fale-conosco" id="ReturnToTop" style="background-image: url('<?php the_field ('acf_imagem_principal_da_sessao_contato'); ?>'); background-size: contain; background-position: center; background-repeat: no-repeat;">
                <div class="conteudo">
                    <div class="container">
                        <div class="left">
                            <div class="subtitulo">
                                <span class="span-subtitulo-2"><?php the_field ('acf_subtitulo_da_sessao_contato'); ?></span>
                                <div class="linha"></div>
                            </div>
                            <h2><?php the_field ('acf_titulo_principal_da_sessao_contato'); ?></h2>
                            <p class="text-02"><?php the_field ('acf_texto_principal_da_sessao_contato'); ?>.</p>
                            <div class="arrow">
                                <i class="fa-solid fa-arrow-down fa-fade" style="color: #17d460;"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


            <section class="s-comunicacao">
                <div class="container">
                    <div class="left">
                        <h2><?php the_field ('acf_titulo_principal_da_sessao_comunicacao'); ?></h2>
                        <p class="text-02"><?php the_field ('acf_texto_da_sessao_comunicacao'); ?></p>
                        <div class="canais-comunicacao">
                            <ul>
                                <li>
                                    <i class="fa-brands fa-whatsapp" style="color: #0fa958;"></i>
                                    <div class="contato">
                                        <p class="text-box-contato"><?php the_field ('acf_titulo_whatsapp')?></p>
                                        <a target="_blank" href="<?php the_field ('acf_link_numero_do_whatsapp'); ?>"><span class="span-box-contato"><?php the_field ('acf_numero_do_whatsapp'); ?></span></a>
                                    </div>
                                </li>

                                <li>
                                    <i class="fa-regular fa-envelope" style="color: #0fa958;"></i>
                                    <div class="contato">
                                        <p class="text-box-contato"><?php the_field ('acf_titulo_email')?></p>
                                        <a href="mailto:<?php the_field ('acf_email_da_empresa'); ?>"><span class="span-box-contato"><?php the_field ('acf_email_da_empresa'); ?></span></a>
                                    </div>
                                </li>

                                <li>
                                    <i class="fa-solid fa-phone-volume fa-shake" style="color: #0fa958;"></i>
                                    <div class="contato">
                                        <p class="text-box-contato"><?php the_field ('acf_titulo_phone')?></p>
                                        <a href="tel:+<?php the_field ('acf_link_numero_da_central_de_atendimento'); ?>"><span class="span-box-contato"><?php the_field ('acf_numero_da_central_de_atendimento'); ?></span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <p class="txt-duvidas"><?php the_field('acf_texto_de_duvidas') ?></p>
                        <p class="txt-duvidas">
                            <?php the_field('acf_informacoes_do_encarregado_de_dados') ?>
                        </p>
                    </div>
                    <div class="formulario">
                        <?php
                        echo do_shortcode(get_field('acf_shortcode_do_formulario_contato'));
                        ?>
                        <!--<?php
                        // Verifica se a função do_shortcode() está disponível
                        if (function_exists('do_shortcode')) {
                            // Substitua 'your_shortcode_here' pelo shortcode real do seu formulário
                            $form_shortcode = '[contact-form-7 id="67ad907" title="Formulário de Contato Incobio"]';

                            // Usando a função do_shortcode() para renderizar o formulário
                            echo do_shortcode($form_shortcode);
                        }
                        ?>-->
                    </div>
                </div>
            </section>

            <?php include(TEMPLATEPATH .'/inc/partial_modulo-unidades.php') ?>


        <?php endwhile; else: endif; ?>
<?php get_footer(); ?>

