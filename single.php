<?php get_header(); ?>
    <?php
        //Template name: Página Formulario de Vagas
    ?>
        <?php if ( have_posts(  )) : while ( have_posts(  ) ) : the_post( ); ?>

            <section class="s-inicial-formulario" id="ReturnToTop"> 
                <div class="conteudo">
                    <div class="container">
                        <div class="left">
                            <div class="subtitulo">
                                <span class="span-subtitulo-2">banco de cadastros</span>
                                <div class="linha"></div>
                            </div>
                            <h2>Não encontrou <span class="span-subtitulo-3">vagas em aberto?</span></h2>
                            <p class="text-02">A Incobio conta com um banco de dados de profissionais interessados em fazer parte da nossa equipe, preencha o formulário abaixo inscreva-se agora mesmo.</p>
                            <div class="arrow">
                                <i class="fa-solid fa-arrow-down fa-fade" style="color: #17d460;"></i>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="imagem">
                    <img src="<?php echo get_template_directory_uri() ?>/img/banco-de-cadastros-bg.svg" alt="">
                </div>
            </section>

            <section class="s-cadastro-vaga-escolhida">
                <div class="container">
                    <div class="topo">
                        <h4 class="text-modal-vaga">Candidatar-se a Vaga: </br><span class="span-modal-vaga"><?php the_category();?></span></h4>
                    </div>
                    <div class="formulario-page-vaga">
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