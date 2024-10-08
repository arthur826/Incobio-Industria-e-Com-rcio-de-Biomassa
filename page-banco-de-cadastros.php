<?php get_header(); ?>
    <?php
        //Template name: Página Banco de Cadastros
    ?>
     <?php if ( have_posts(  )) : while ( have_posts(  ) ) : the_post( ); ?>

            <section class="s-inicial-banco-de-cadastro" id="ReturnToTop"> 
                <div class="conteudo">
                    <div class="container">
                        <div class="left">
                            <div class="subtitulo">
                                <span class="span-subtitulo-2"><?php the_field ('acf_subtitulo_da_pagina_banco_de_cadastros'); ?></span>
                                <div class="linha"></div>
                            </div>
                            <h2><?php the_field ('acf_titulo_da_pagina_banco_de_cadastros'); ?></span></h2>
                            <p class="text-02"><?php the_field ('acf_texto_inicial_da_pagina_banco_de_cadastros'); ?></p>
                            <div class="arrow">
                                <i class="fa-solid fa-arrow-down fa-fade" style="color: #17d460;"></i>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="imagem">
                    <img src="<?php the_field ('acf_imagem_de_fundo_da_pagina_banco_de_cadastros'); ?>" alt="">
                </div>
            </section>

            <section class="s-infos-banco-cadastros">
                <div class="container">
                    <h4><?php the_field ('acf_titulo_da_sessao_cadastro_do_formulario'); ?></h4>

                    <p class="texto-vagas-topo"><?php the_field ('acf_informacoes_sobre_o_banco_de_cadastros'); ?></p>

                    <div class="formulario-banco-de-cadastros">
                        <?php
                        // Verifica se a função do_shortcode() está disponível
                        if (function_exists('do_shortcode')) {
                            // Substitua 'your_shortcode_here' pelo shortcode real do seu formulário
                            $form_shortcode = '[gravityform id="1" title="true"]';
                            
                            // Usando a função do_shortcode() para renderizar o formulário
                            echo do_shortcode($form_shortcode);
                        }
                        ?>
                    </div>
                </div>
            </section>


            <?php include(TEMPLATEPATH .'/inc/partial_modulo-unidades.php') ?>


     <?php endwhile; else: endif; ?>
<?php get_footer(); ?>