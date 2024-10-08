<?php get_header(); ?>
<?php
//Template name: Página Pellets
?>
<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

        <section id="ReturnToTop" class="s-pellets"
            style="background-image: url('<?php the_field('acf_imagem_principal_da_sessao_pellets'); ?>'); background-size: contain; background-position: center; background-repeat: no-repeat;">
            <div class="conteudo">
                <div class="container">
                    <div class="left">
                        <div class="subtitulo">
                            <span class="span-subtitulo-2"><?php the_field('acf_subtitulo_sessao_pellets'); ?></span>
                            <div class="linha"></div>
                        </div>
                        <h2><?php the_field('acf_titulo_sessao_pellets'); ?></h2>
                        <p class="text-02"><?php the_field('acf_texto_inicial_da_sessao_pellets'); ?></p>
                        <div class="arrow">
                            <i class="fa-solid fa-arrow-down fa-fade" style="color: #17d460;"></i>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="s-ancoras">
            <div class="container">
                <ul>
                    <?php if (have_rows('acf_repetidor_de_ancoras_da_pagina_pellets')):
                        while (have_rows('acf_repetidor_de_ancoras_da_pagina_pellets')):
                            the_row(); ?>
                            <li><a class="link-ancora-js"
                                    href="<?php the_sub_field('acf_link_de_ancora_das_sessoes') ?>"><?php the_sub_field('acf_texto_de_ancora_das_sessoes') ?></a>
                            </li>
                        <?php endwhile; else: endif; ?>
                </ul>
            </div>
        </section>

        <section id="SobrePellets" class="s-sobre-pellets">
            <div class="container">
                <div class="ficha-tecnica" id="js-fichaTecnica">
                    <div class="overlay-ficha" id="overlayFicha-js"></div>
                    <div class="infos-tecnicas">
                        <ul class="modal-especificacoes">
                            <li class="topo-cabecalho">
                                <div class="item-especificacao">
                                    <h4><?php the_field('acf_rotulo_cabecalho_tabela_item'); ?></h4>
                                </div>
                                <div class="item-especificacao">
                                    <h4><?php the_field('acf_rotulo_cabecalho_tabela_especificacoes'); ?></h4>
                                </div>
                            </li>
                            <?php
                            if (have_rows('acf_repetidor_de_informacoes_da_ficha_tecnica')):
                                $count = 0; // Inicializa uma variável de contagem
                                while (have_rows('acf_repetidor_de_informacoes_da_ficha_tecnica')):
                                    the_row();
                                    $count++; // Incrementa o contador em cada iteração
                                    ?>
                                    <li class="rotulos-e-infos <?php if ($count % 2 == 0)
                                        echo 'class-green'; ?>">
                                        <div class="rotulo">
                                            <p><?php the_sub_field('repeat_rotulo'); ?></p>
                                        </div>
                                        <div class="info">
                                            <p><?php the_sub_field('especificacoes_do_rotulo'); ?></p>
                                        </div>
                                    </li>
                                <?php endwhile; else: endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="left">
                    <h3><?php the_field('acf_titulo_sessao_o_que_e'); ?></h3>
                    <div class="txt">
                        <p class="text-02"><?php the_field('acf_texto_o_que_e'); ?></p>
                    </div>
                    <button class="btn-primary" id="js-btnDetails">
                        <p><?php the_field('acf_rotulo_botao_ficha_tecnica'); ?></p><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i>
                    </button>
                </div>
                <div class="right">
                    <div class="swiper produtosSlide">
                        <div class="swiper-wrapper">
                            <?php if (have_rows('acf_repetidor_de_slides_de_produtos')):
                                while (have_rows('acf_repetidor_de_slides_de_produtos')):
                                    the_row(); ?>
                                    <div class="swiper-slide">
                                        <img src="<?php the_sub_field('acf_imagem_dos_produtos'); ?>" alt="">
                                    </div>
                                <?php endwhile; else: endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Certificacao" class="s-certificacao">
            <div class="container">
                <div class="top">
                    <div class="left">
                        <div class="image">
                            <img src="<?php the_field('acf_imagem_principal_da_sessao_certificacao'); ?>" alt="">
                        </div>
                    </div>
                    <div class="right">
                        <div class="subtitulo">
                            <span class="span-subtitulo-2"><?php the_field('acf_subtitulo_da_sessao_certificacao'); ?></span>
                            <div class="linha"></div>
                        </div>
                        <h3><?php the_field('acf_titulo_da_sessao_certificacao'); ?></h3>
                        <p class="text-02"><?php the_field('acf_texto_da_sessao_certificacao'); ?></p>
                    </div>
                </div>
                <div class="bottom">
                    <h4><?php the_field('acf_titulo_saiba_mais_sobre_o_fsc'); ?></h4>
                    <div class="txt">
                        <p><?php the_field('acf_texto_01_saiba_mais_sobre_fsc'); ?></p>
                        <p><?php the_field('acf_texto_02_saiba_mais_sobre_fsc'); ?></p>
                        <div class="box-fsc-two">
                            <div class="green-ball">
                                <img src="<?php the_field('acf_icone_fsc_na_sessao_certificacao'); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Vantagens" class="s-vantagens">
            <div class="container">
                <div class="left">
                    <div class="subtitulo">
                        <span class="span-subtitulo-2"><?php the_field('acf_subtitulo_sessao_vantagens'); ?></span>
                        <div class="linha"></div>
                    </div>
                    <div class="swiper vantagensSlides">
                        <div class="topo-slide">
                            <h3 class="title-style-1"><?php the_field('acf_titulo_sessao_vantagens'); ?></h3>
                            <!--<p><?php the_field('acf_texto_da_sessao_vantagens'); ?></p>-->
                            <div class="pagination">
                                <div class="swiper-button-next">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="34" viewBox="0 0 34 34" width="34">
                                    <path d="M27.0967 17.4008L7.76713 17.4008" stroke="#F03200" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.78878"/>
                                    <path d="M20.1919 10.4956L27.0967 17.4004L20.1919 24.3052" stroke="#F03200" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.78878"/>
                                    </svg>
                                </div>
                                <div class="swiper-button-prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="34" viewBox="0 0 34 34" width="34">
                                    <path d="M6.90332 17.4005L26.2329 17.4005" stroke="#F03200" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.78878"/>
                                    <path d="M13.8081 24.3057L6.90332 17.4009L13.8081 10.4961" stroke="#F03200" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.78878"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-wrapper">
                            <?php if (have_rows('acf_repetidor_sessao_vantagens')):
                            while (have_rows('acf_repetidor_sessao_vantagens')):
                                the_row(); ?>
                                <div class="swiper-slide">
                                    <div class="icone-vantagens">
                                        <img src="<?php the_sub_field('repeate_icone_da_vantagem'); ?>" alt="">
                                    </div>
                                    <h3 h3 class="title-style-vantagens"><?php the_sub_field('repeate_titulo_da_vantagem'); ?></h3>
                                    <!--<p class="text-box-vantagens"><?php the_sub_field('repeate_texto_da_vantagem'); ?></p>-->
                                </div>
                            <?php endwhile; else: endif; ?>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="image">
                        <img src="<?php the_field('acf_imagem_da_sessao_vantagens'); ?>" alt="">
                        <div class="items">
                                <div class="icone-green">
                                    <div class="circle">
                                        <i class="fa-solid fa-check" style="color: #17bd57;"></i>
                                    </div>
                                </div>
                                <div class="icon-ecologico">
                                    <i class="fa-solid fa-circle-check" style="color: #17bd57;"></i>
                                    <p><?php the_field ('acf_texto_botao_icone_vantagens')?></p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section id="Segmentos" class="s-segmentos">
    <div class="container">
        <div class="top">
            <div class="left">
                <div class="subtitulo">
                    <span class="span-subtitulo-2"><?php the_field('acf_subtitulo_sessao_segmentos'); ?></span>
                    <div class="linha"></div>
                </div>
                <h3><?php the_field('acf_titulo_sessao_segmentos'); ?></h3>
            </div>
            <div class="right">
                <p class="text-02"><?php the_field('acf_texto_da_sessao_segmentos'); ?></p>
            </div>
        </div>
        <div class="navegacao">
            <div class="seletor-segmentos" id="js-seletorSegmentos">
                <?php if (have_rows('acf_repeater_botoes_de_navegacao')):
                    while (have_rows('acf_repeater_botoes_de_navegacao')):
                        the_row(); ?>
                        <a href="#conteudo-<?php echo get_row_index(); ?>"><button class="btn-segmentos"><i
                                    class="fa-solid fa-leaf"
                                    style="color: #7e818a;"></i><?php the_sub_field('acf_nome_de_navegacao_do_segmento'); ?></button></a>
                    <?php endwhile; else: endif; ?>
            </div>
        </div>
        <?php
        $first_iteration = true;
        if (have_rows('acf_repeater_informacoes_do_segmento')):
            while (have_rows('acf_repeater_informacoes_do_segmento')):
                the_row(); ?>
                <div class="uso-do-pellet" <?php echo $first_iteration ? 'style="display: block;"' : 'style="display: none;"'; ?> id="conteudo-<?php echo get_row_index(); ?>">
                    <div class="content">
                        <div class="left">
                            <h3><?php the_sub_field('acf_nome_interno_do_segmento'); ?></h3>
                            <p class="text-02"><?php the_sub_field('acf_texto_de_informacoes_do_segmento'); ?></p>
                            <a href="<?php the_sub_field('acf_link_do_botao_da_sessao_segmentos'); ?>"><button
                                    class="btn-orcamento"><i class="fa-brands fa-whatsapp" style="color: #ffffff;"></i>
                                    <p><?php the_sub_field('acf_texto_do_botao_da_sessao_segmentos'); ?></p>
                                </button></a>
                        </div>
                        <div class="right">
                            <img src="<?php the_sub_field('acf_imagem_do_segmento'); ?>" alt="">
                        </div>
                    </div>
                </div>
                <?php $first_iteration = false;
            endwhile;
        else:
        endif;
        ?>
    </div>
</section>



        <!-- Seção Dicas Movida para Sustentabilidade
        <section id="Consumidor" class="s-dicas-consumidor">
            <div class="container">
                <div class="top">
                    <div class="left">
                        <div class="subtitulo">
                            <span
                                class="span-subtitulo-2"><?php the_field("acf_subtitulo_da_sessao_de_dicas_ao_consumidor") ?></span>
                            <div class="linha"></div>
                        </div>
                        <h3><?php the_field("acf_titulo_da_sessao_de_dicas_ao_consumidor") ?></h3>
                    </div>
                    <div class="right">
                        <svg width="150" height="150" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M359.417 260.208C353.5 309.479 321.229 329.166 307.292 343.458C293.333 357.791 295.833 360.645 296.771 381.666C296.927 384.267 296.549 386.872 295.661 389.321C294.772 391.77 293.391 394.012 291.603 395.907C289.815 397.802 287.658 399.311 285.265 400.341C282.872 401.371 280.293 401.9 277.687 401.895H222.312C219.707 401.897 217.129 401.366 214.736 400.335C212.343 399.305 210.186 397.796 208.397 395.901C206.608 394.007 205.225 391.767 204.333 389.319C203.44 386.872 203.058 384.267 203.208 381.666C203.208 361.041 205.125 356.249 192.708 343.458C176.875 327.624 139.625 305.27 139.625 243.791C139.53 228.52 142.599 213.395 148.64 199.37C154.68 185.344 163.561 172.722 174.722 162.298C185.883 151.875 199.082 143.877 213.487 138.808C227.893 133.739 243.192 131.71 258.42 132.847C273.649 133.985 288.477 138.265 301.97 145.417C315.462 152.57 327.327 162.44 336.815 174.405C346.304 186.371 353.211 200.172 357.101 214.94C360.991 229.707 361.779 245.12 359.417 260.208Z"
                                stroke="currentColor" stroke-width="31.25" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M217.917 400.75V432.25C217.917 440.854 222.708 447.916 228.604 447.916H271.375C277.313 447.916 282.083 440.833 282.083 432.25V400.75M233.75 181.166C221.449 181.172 209.653 186.062 200.957 194.763C192.26 203.463 187.375 215.261 187.375 227.562M402.75 248H440.958M364.292 122.75L391.396 95.6455M385.125 354.166L412.229 381.25M250 49.5205V80.4163M109.167 95.6247L136.083 122.75M88.3333 381.25L115.25 354.166M97.25 248H59.0625"
                                stroke="currentColor" stroke-width="31.25" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
                <ul class="lista-de-dicas">
                    <?php if (have_rows('acf_repetidor_de_dicas_ao_consumidor')):
                        while (have_rows('acf_repetidor_de_dicas_ao_consumidor')):
                            the_row(); ?>
                            <li>
                                <div class="icone-dica">
                                    <img src="<?php the_sub_field("acf_icone_da_dica") ?>" alt="">
                                </div>
                                <h3 class="title-style-dicas">
                                    <?php the_sub_field("acf_titulo_da_dica") ?>
                                </h3>
                                <p class="text-box-vantagens">
                                    <?php the_sub_field("acf_texto_da_dica") ?>
                                </p>
                            </li>
                        <?php endwhile; else: endif; ?>
                </ul>
                <div class="saiba-mais-dicas-2">
                    <div class="icone">
                        <img src="<?php echo get_template_directory_uri() ?>/img/contact-us.svg" alt="">
                    </div>
                    <p><?php the_field('acf_texto_veja_mais_dicas'); ?></p>
                    <a class="btn-vagas"
                        href="<?php the_field('acf_link_do_botao_veja_mais_dicas') ?>"><?php the_field('acf_texto_do_botao_veja_mais_dicas'); ?></a>
                </div>
            </div>
        </section>-->

        <!--SEÇÃO BENEFÍCIOS - MOVIDA PARA SUSTENTABILIDADE
        <section class="s-beneficios-incobio">
            <div class="container">
                <div class="left">
                    <div class="card-garantia">
                        <p>Escolha a Incobio e Garanta:</p>
                    </div>
                    <ul>
                        <?php if (have_rows('acf_repetidor_de_garantias_da_incobio')):
                            while (have_rows('acf_repetidor_de_garantias_da_incobio')):
                                the_row(); ?>
                                <li class="lista-de-garantias">
                                    <div class="txt">
                                        <p class="title-green"><?php the_sub_field('acf_titulo_da_vantagem') ?></p>
                                        <p><?php the_sub_field('acf_informacao_da_vantagem') ?></p>
                                    </div>
                                    <div class="icone">
                                        <img src="<?php echo get_template_directory_uri() ?>/img/icone-inc-green.svg" alt="">
                                    </div>
                                </li>
                            <?php endwhile; else: endif; ?>
                    </ul>
                </div>
                <div class="right">
                    <ul>
                        <?php if (have_rows('acf_repetidor_de_problemas_a_ficar_atento_do_mercado')):
                            while (have_rows('acf_repetidor_de_problemas_a_ficar_atento_do_mercado')):
                                the_row(); ?>
                                <li class="lista-de-atencao-2">
                                    <div class="icone">
                                        <img src="<?php the_sub_field('acf_icone_do_problema') ?>" alt="">
                                    </div>
                                    <div class="txt">
                                        <p class="title-green"><?php the_sub_field('acf_titulo_do_problema') ?></p>
                                        <p><?php the_sub_field('acf_informacao_do_problema') ?></p>
                                    </div>
                                </li>
                            <?php endwhile; else: endif; ?>
                    </ul>
                    <div class="card-atencao">
                        <p>Fique atento ao mercado!</p>
                    </div>
                </div>
            </div>
        </section>-->

        <?php include (TEMPLATEPATH . '/inc/partial_modulo-sustentabilidade.php') ?>

        <?php include (TEMPLATEPATH . '/inc/partial_section_contato.php') ?>

    <?php endwhile; else: endif; ?>
<?php get_footer(); ?>