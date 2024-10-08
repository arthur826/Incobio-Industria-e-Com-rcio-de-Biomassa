<?php get_header(); ?>
    <?php
        //Template name: Página Trabalhe Conosco
    ?>
        <?php if ( have_posts(  )) : while ( have_posts(  ) ) : the_post( ); ?>

            <section class="s-trabalhe-conosco-hero" id="ReturnToTop" style="background-image: url('<?php the_field ('acf_imagem_sessao_trabalhe_conosco'); ?>'); background-size: contain; background-position: center; background-repeat: no-repeat;">
                <div class="conteudo">
                    <div class="container">
                        <div class="left">
                            <div class="subtitulo">
                                <span class="span-subtitulo-2"><?php the_field ('acf_subtitulo_sessao_trabalhe_conosco'); ?></span>
                                <div class="linha"></div>
                            </div>
                            <h2><?php the_field ('acf_titulo_sessao_trabalhe_conosco'); ?></h2>
                            <p class="text-02"><?php the_field ('acf_texto_sessao_trabalhe_conosco'); ?></p>
                            <div class="arrow">
                                <i class="fa-solid fa-arrow-down fa-fade" style="color: #17d460;"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="s-vagas-de-trabalho">
                <div class="container">
                    <div class="topo">
                        <!--<p class="texto-vagas-topo"><?php the_field ('acf_texto_do_topo_da_sessao_01'); ?></p>-->
                        <h4 class="title-vagas-trabalho"><?php the_field ('acf_titulo_observacoes_gerais'); ?></h4>
                        <ul class="lista-observações">
                        <?php if( have_rows('acf_repetidor_de_observacoes_gerais') ): while ( have_rows('acf_repetidor_de_observacoes_gerais') ) : the_row(); ?>
                            <li><p class="texto-observações"><?php the_sub_field ('acf_texto_de_observacoes'); ?></p></li>
                        <?php endwhile; else : endif;?>
                        </ul>
                        <h4 class="title-vagas-trabalho"><?php the_field ('acf_titulo_requisitos_basicos'); ?></h4>
                        <ul class="listas-pre-requisitos">
                        <?php if( have_rows('acf_repetidor_de_pre_requisitos', 'options') ): while ( have_rows('acf_repetidor_de_pre_requisitos', 'options') ) : the_row(); ?>
                            <li class="accordion">
                                <div class="contentBx">
                                    <div class="label">
                                        <h4 class="title-requisitos"><?php the_sub_field ('repeate_titulo_dos_setores_disponiveis', 'options'); ?></h4><button><i class="fa-solid fa-chevron-down arrowButton" id="arrowButton" style="color: #17d460;"></i></button>
                                    </div>
                                    <div class="content">
                                        <?php if( have_rows('repeater_de_informacoes_dos_pre_requisitos', 'options') ): while ( have_rows('repeater_de_informacoes_dos_pre_requisitos', 'options') ) : the_row(); ?>
                                            <div class="infos-requisitos">
                                                <h5 class="text-requisitos"><?php the_sub_field ('repeate_nome_dos_setores_de_atuacao', 'options'); ?></h5>
                                                <p class="texto-vagas-topo"><?php the_sub_field ('repeate_texto_requisito_do_setor_de_atuacao', 'options'); ?></p>
                                            </div>
                                        <?php endwhile; else : endif;?>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; else : endif;?>
                        </ul>
                        </div>
                    </div>
                </div>
            </section>

            <?php
    $args = array(
        'post_type' => 'Vaga',
        'posts_per_page' => 3,
        'order' => 'DESC',
    );
    $category_query = new WP_Query($args);
    if ($category_query->have_posts()): ?>
        <section class="s-vagas-disponiveis">
            <div class="container">
                <h4 class="title-vagas-trabalho"><?php the_field('acf_titulo_de_vagas_disponiveis'); ?></h4>
                <p class="texto-vagas-topo"><?php the_field('acf_texto_do_topo_da_sessao_de_vagas_disponiveis'); ?></p>

                <div class="informações-vagas">
                    <div class="left">
                        <ul class="detalhes-vagas" id="js-detalhesVaga">
                            <div class="swiper-container swiperVagas">
                                <div class="swiper-wrapper">
                                    <?php
                                        while ($category_query->have_posts()) : $category_query->the_post(); ?>
                                            <div class="swiper-slide">
                                                <li class="vaga" id="mostrarDiv" onclick="scrollToDetalhes()">
                                                    <h4 class="title-nome-vaga"><?php the_field('acf_cargo_da_vaga'); ?></h4>
                                                    <div class="infos">
                                                        <span class="span-vagas">Cidade:</span><span class="span-vagas-2"><?php the_field('acf_cidade'); ?></span>
                                                    </div>
                                                    <div class="infos">
                                                        <span class="span-vagas">Horário:</span><span class="span-vagas-2"><?php the_field('acf_horario'); ?></span>
                                                    </div>
                                                    <span id="spanVaga" class="span-detalhes-vaga">+ detalhes da vaga </span>
                                                    <span class="id-do-post-01"><?php echo get_the_ID(); ?></span>
                                                </li>
                                            </div>
                                    <?php endwhile;
                                        wp_reset_postdata(); ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </ul>
                    </div>

                    <div class="right" id="minhaDiv" >
                        <h4 class="title-vagas-trabalho"><?php the_field('acf_titulo_detalhes_sobre_a_vaga'); ?></h4>
                        <p class="texto-vagas-topo" id="TextoDeSelecaoDeVaga">Clique em uma das vagas listadas acima para ver os detalhes e se inscrever:</p>
                        <?php
                            $args = array(
                                'post_type' => 'Vaga',
                                'posts_per_page' => 3,
                                'order' => 'DESC',
                            );
                            $category_query = new WP_Query($args);
                            if ($category_query->have_posts()):
                                while ($category_query->have_posts()) : $category_query->the_post(); ?>
                                    <div class="cover-content">
                                        <div class="detalhes-sobre-vaga">
                                            <h4 class="title-nome-vaga"><?php the_field('acf_cargo_da_vaga'); ?></h4>
                                            <div class="infos">
                                                <span class="span-vagas">Cargo da Vaga:</span><span class="span-vagas-2"><?php the_field('acf_cargo_da_vaga'); ?></span>
                                            </div>
                                            <div class="infos">
                                                <span class="span-vagas">Cidade:</span><span class="span-vagas-2"><?php the_field('acf_cidade'); ?></span>
                                            </div>
                                            <div class="infos">
                                                <span class="span-vagas">Horário:</span><span class="span-vagas-2"><?php the_field('acf_horario'); ?></span>
                                            </div>
                                            <span class="span-vagas">Descrição da Vaga:</span>
                                            <span class="span-vagas-2"><?php the_field('acf_descricao_da_vaga'); ?></span>
                                            <span class="span-vagas">Benefícios Imediatos:</span>
                                            <span class="span-vagas-2"><?php the_field('acf_listagem_beneficios_imediatos'); ?></span>
                                            <span class="span-vagas">Benefícios Pós Experiência:</span>
                                            <span class="span-vagas-2"><?php the_field('acf_listagem_requisitos_pos_experiencia'); ?></span></br>
                                            <span class="span-vagas">Escolaridade:</span><span class="span-vagas-2"><?php the_field('acf_escolaridade'); ?></span>
                                            <span class="span-vagas">Observações Gerais</span><span class="span-vagas-2"><?php the_field('acf_listagem_observacoes_gerais'); ?></span>
                                            <span class="span-vagas">Vaga Disponível para cadastro até: </span><span class="span-vagas-2"><?php the_field('acf_final_inicio_inscricoes'); ?></span>

                                            <?php $post_id = get_field('link_para_post_interno'); if ($post_id) {
                                                $post_url = esc_url(get_permalink($post_id));
                                                echo '<a class="link-candidatar-se" target="_blank" href="' . $post_url . '"><button class="btn-candidatar-se">Candidatar-se</button></a>';
                                            } ?>
                                            <h5 class="id-do-post-02"><?php echo get_the_ID(); ?></h5>
                                        </div>
                                    </div>
                                <?php endwhile;
                                    wp_reset_postdata(); ?>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section class="s-sem-vagas">
            <div class="container">
                <h3><?php the_field ('acf_texto_sem_vagas')?></h3>
            </div>
        </section>

    <?php endif; ?>





            <section class="s-banco-de-cadastros" style="background-image: url('<?php the_field ('acf_imagem_principal_da_sessao_banco_de_cadastros'); ?>'); background-size: contain; background-position: center; background-repeat: no-repeat;">
                    <div class="conteudo">
                        <div class="container">
                            <div class="left">
                                <div class="subtitulo">
                                    <span class="span-subtitulo-2"><?php the_field ('acf_subtitulo_da_sessao_banco_de_cadastros'); ?></span>
                                    <div class="linha"></div>
                                </div>
                                <h2><?php the_field ('acf_titulo_da_sessao_banco_de_cadastros'); ?></h2>
                                <p class="text-02"><?php the_field ('acf_texto_da_sessao_banco_de_cadastros'); ?></p>
                                <a class="link-btn-vagas" href="<?php the_field ('acf_link_do_botao_cadastrar-se_teste'); ?>"><button class="btn-vagas"><?php the_field ('acf_texto_do_botao_cadastrar-se'); ?></button></a>
                            </div>
                        </div>
                    </div>
            </section>


            <?php include(TEMPLATEPATH .'/inc/partial_modulo-unidades.php') ?>
            <script src="<?php echo get_template_directory_uri() ?>/js/filtros.js"></script>


        <?php endwhile; else: endif; ?>
<?php get_footer(); ?>