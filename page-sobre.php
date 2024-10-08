<?php get_header(); ?>
    <?php
        //Template name: Página Sobre
    ?>
     <?php if ( have_posts(  )) : while ( have_posts(  ) ) : the_post( ); ?>

    <section id="ReturnToTop" style="background-image: url('<?php the_field ('acf_imagem_da_principal_da_pagina_sobre'); ?>'); background-size: contain; background-position: center; background-repeat: no-repeat;" class="s-sobre">
                    <div class="conteudo">
                        <div class="container">
                            <div class="left">
                                <div class="subtitulo">
                                    <span class="span-subtitulo-2"><?php the_field ('acf_subtitulo_sobre'); ?></span>
                                    <div class="linha"></div>
                                </div>
                                <h2><?php the_field ('acf_titulo_sobre'); ?></h2>
                                <p class="text-02"><?php the_field ('acf_texto_sobre'); ?></p>
                                <div class="arrow">
                                    <i class="fa-solid fa-arrow-down fa-fade" style="color: #17d460;"></i>
                                </div>

                            </div>
                        </div>
                    </div>
    </section>

    <section class="s-historia">
        <div class="container">
            <div class="left">
                <img src="<?php the_field ('acf_imagem_sessao_nossa_historia'); ?>" alt="">
            </div>
            <div class="right">
                <div class="topo">
                    <div class="subtitulo">
                        <span class="span-subtitulo-2"><?php the_field ('acf_subtitulo_nossa_historia_'); ?></span>
                        <div class="linha"></div>
                    </div>
                    <div class="icone">
                        <img class="text-circle-2" src="<?php the_field ('acf_texto_animado_rodando_sobre'); ?>" alt="">
                        <div class="eclipse">
                            <img src="<?php echo get_template_directory_uri() ?>/img/flower-icon.svg" alt="">
                        </div>
                    </div>
                </div>
                <h3><?php the_field ('acf_titulo_nossa_historia'); ?></h3>
                <p class="text-02"><?php the_field ('acf_textos_nossa_historia'); ?></p>
            </div>
        </div>
    </section>

    <section class="s-linha-do-tempo">
        <div class="container">
            <div class="titulo-linha-do-tempo">
                <div class="subtitulo">
                    <span class="span-subtitulo-2"><?php the_field ('acf_subtitulo_linha_do_tempo'); ?></span>
                    <div class="linha"></div>
                </div>
                    <h3><?php the_field ('acf_titulo_linha_do_tempo'); ?></h3>
            </div>
            <div class="content">
                <?php if( have_rows('repetidor_de_slides_da_linha_do_tempo') ): while ( have_rows('repetidor_de_slides_da_linha_do_tempo') ) : the_row(); ?>
                    <div class="slide-linha-do-tempo">
                        <div class="conteudo-do-slide">
                            <div class="left">
                                <div class="image">
                                    <img src="<?php the_sub_field ('acf_imagem_foto_linha_do_tempo'); ?>" alt="">
                                </div>
                                <div class="legenda">
                                    <p><?php the_sub_field ('acf_legenda_imagem_foto_linha_do_tempo'); ?></p>
                                </div>
                            </div>
                            <div class="center">
                                <h3><?php the_sub_field ('acf_ano'); ?></h3>
                                <h4 class="span-subtitulo-2"><?php the_sub_field ('acf_subtitulo_linha_do_tempo'); ?></h4>
                                <p><?php the_sub_field ('acf_texto_de_informacoes_da_incobio'); ?></p>
                            </div>
                            <div class="right">
                                <img src="<?php the_sub_field ('acf_logo_da_incobio_no_slide'); ?>" alt="">
                            </div>
                        </div>
                    </div>
                <?php endwhile; else : endif;?>

                    <div class="timelineButtons" id="timelineButtons-js">
                        <?php $first = true; if( have_rows('repetidor_de_slides_da_linha_do_tempo') ): while ( have_rows('repetidor_de_slides_da_linha_do_tempo') ) : the_row(); ?>
                            <button class="btn-year-nav <?php echo $first ? 'active' : ''; ?>" onclick="expandLine(this)" id="btnYearNav">
                                <p class="year"><?php the_sub_field ('acf_ano'); ?></p>
                                <div class="ball"></div>
                            </button>
                        <?php $first = false;endwhile; else : endif; ?>
                    </div>
                </div>
        </div>
        <div class="back-line"></div>
        <div class="line" id="lineProgress"></div>
    </section>

    <section class="s-exportacao">
        <div class="container">
            <div class="left">
                <div class="subtitulo">
                    <span class="span-subtitulo-2"><?php the_field ('acf_subtitulo_exportacao'); ?></span>
                    <div class="linha"></div>
                </div>
                <h3><?php the_field ('acf_titulo_exportacao'); ?></h3>
                <p class="text-02"><?php the_field ('acf_textos_exportacao'); ?></p>
            </div>
            <div class="right">
                <div class="image-left-exportacao">
                    <img src="<?php the_field ('acf_imagem_exportacao'); ?>" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="s-energia-alternativa">
        <div class="container">
            <div class="left">
                <div class="imagem-left-energia-alternativa">
                    <img src="<?php the_field ('acf_imagem_sustentabilidade_interna'); ?>" alt="">
                </div>
            </div>
            <div class="right">
                <div class="subtitulo">
                    <span class="span-subtitulo-2"><?php the_field ('acf_subtitulo_sustentabilidade_interna'); ?></span>
                    <div class="linha"></div>
                </div>
                <h3><?php the_field ('acf_titulo_sustentabilidade_interna'); ?></h3>
                    <p class="text-02"><?php the_field ('acf_textos_de_sustentabilidade'); ?></p>
            </div>
        </div>
    </section>
    <?php
    if( get_field('exibir_ocultar_secao_trabalhe_conosco') ) { ?>
    <section class="s-trabalhe-conosco" style="background-image: url('<?php the_field ('acf_imagem_da_sessao_trabalhe_conosco'); ?>'); background-size: contain; background-position: center; background-repeat: no-repeat;">
                    <div class="conteudo">
                        <div class="container">
                            <div class="left">
                                <div class="subtitulo">
                                        <span class="span-subtitulo-2"><?php the_field ('acf_subtitulo_sessao_trabalhe_conosco'); ?></span>
                                        <div class="linha"></div>
                                </div>
                                <h2><?php the_field ('acf_titulo_sessao_trabalhe_conosco'); ?></h2>
                                <p class="text-02"><?php the_field ('acf_texto_sessao_trabalhe_conosco'); ?></p>
                                <a class="link-btn-vagas" href="<?php the_field ('acf_link_do_botao_da_sessao_trabalhe_conosco'); ?>"><button class="btn-vagas"><?php the_field ('acf_texto_do_botao_da_sessao_trabalhe_conosco'); ?></button></a>
                            </div>
                        </div>
                    </div>
    </section>
    <?php } ?>


    <?php include(TEMPLATEPATH .'/inc/partial_modulo-unidades.php') ?>

    <?php include(TEMPLATEPATH .'/inc/partial_section_contato.php') ?>



    <script>
        const btnYearNav = document.querySelectorAll(".btn-year-nav");
        const lineProgress = document.getElementById("lineProgress")


        function activeYear(index) {
            // Remove a classe "active" de todos os botões
            btnYearNav.forEach(btn => btn.classList.remove("active"));

            // Adiciona a classe "active" ao botão clicado
            btnYearNav[index].classList.add("active");
        }

        btnYearNav.forEach((btn, index) => {
            btn.addEventListener("click", () => activeYear(index));
        });

        function expandLine(button) {
            var buttonPosition = button.getBoundingClientRect();
            var line = document.getElementById('lineProgress');
            var lineWidth = buttonPosition.left + (button.offsetWidth / 2);
            line.style.width = lineWidth + 'px';
        }

    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const timelineButtons = document.getElementById("timelineButtons-js");

            const seletorAno = timelineButtons.querySelectorAll(".btn-year-nav");

            const slideAno =  document.querySelectorAll(".slide-linha-do-tempo");

                // Ocultar todos os slides, exceto o primeiro
            for (let i = 1; i < slideAno.length; i++) {
                slideAno[i].style.display = "none";
            }

                slideAno.forEach(function(slideAno) {
                    const anoDoSlide = slideAno.querySelector("h3").textContent.trim();

                    for (let i = 0; i < seletorAno.length; i++) {
                        seletorAno[i].addEventListener("click", function() {
                            const valor = seletorAno[i].textContent.trim();
                            if(valor === anoDoSlide) {
                                slideAno.style.display="block";
                            } else {
                                slideAno.style.display="none";
                            }
                        });
                    }
                })
        })
    </script>



     <?php endwhile; else: endif; ?>
<?php get_footer(); ?>