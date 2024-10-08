<?php get_header(); ?>
<?php
//Template name: Página Sustentabilidade
?>
<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>
        <section id="ReturnToTop" style="background-image: url('<?php the_field ('acf_imagem_principal_da_secao_sustentabilidade'); ?>'); background-size: contain; background-position: center; background-repeat: no-repeat;" class="s-sobre s-sobre-sustentabilidade">
            <div class="conteudo">
                <div class="container">
                    <div class="left">
                        <div class="subtitulo">
                            <span class="span-subtitulo-2"><?php the_field ('acf_subtitulo_secao_sustentabilidade'); ?></span>
                            <div class="linha"></div>
                        </div>
                        <h2><?php the_field ('acf_titulo_secao_sustentabilidade'); ?></h2>
                        <p class="text-02"><?php the_field ('acf_texto_inicial_sustentabilidade'); ?></p>
                        <div class="arrow">
                            <i class="fa-solid fa-arrow-down fa-fade" style="color: #17d460;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="s-sustentabilidade-interna">
            <div class="container">
                <div class="topo">
                    <div class="subtitulo">
                        <span class="span-subtitulo-2"><?php the_field ('acf_subtitulo_secao_sobre_sustentabilidade'); ?></span>
                        <div class="linha"></div>
                    </div>
                    <h3><?php the_field ('acf_titulo_secao_sobre_sustentabilidade'); ?></h3>
                </div>
                <div class="texto-colunas">
                    <div class="coluna-esquerda">
                        <p class="text-02"><?php the_field ('acf_texto_sobre_sustentabilidade_left'); ?></p>
                    </div>
                    <div class="coluna-direita">
                        <p class="text-02"><?php the_field ('acf_texto_sobre_sustentabilidade_right'); ?></p>
                    </div>
                </div>
                <div class="image-sustentabilidade">
                    <img src="<?php the_field ('acf_imagem_sobre_sustentabilidade'); ?>" alt="">
                </div>
            </div>
        </section>
        <section class="s-conduta-sustentabilidade">
            <div class="container">
                <div class="caixas">
                    <div class="caixa-individual">
                        <h4><?php the_field ('acf_titulo_sobre_sustentabilidade_caixa01'); ?></h4>
                        <p><?php the_field ('acf_texto_sobre_sustentabilidade_caixa01'); ?></p>
                    </div>

                    <div class="caixa-individual">
                        <h4><?php the_field ('acf_titulo_sobre_sustentabilidade_caixa02'); ?></h4>
                        <p><?php the_field ('acf_texto_sobre_sustentabilidade_caixa02'); ?></p>
                    </div>

                    <div class="caixa-individual">
                        <h4><?php the_field ('acf_titulo_sobre_sustentabilidade_caixa03'); ?></h4>
                        <p><?php the_field ('acf_texto_sobre_sustentabilidade_caixa03'); ?></p>
                    </div>
                </div>
            </div>
        </section>

        <section id="Consumidor" class="s-dicas-consumidor">
            <div class="container">
                <div class="top">
                    <div class="left">
                        <div class="subtitulo">
                            <span
                                class="span-subtitulo-2"><?php the_field('acf_subtitulo_da_sessao_de_dicas_ao_consumidor') ?></span>
                            <div class="linha"></div>
                        </div>
                        <h3><?php the_field('acf_titulo_da_sessao_de_dicas_ao_consumidor') ?></h3>
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
        </section>

        <section class="s-beneficios-incobio-sustentabilidade">
            <div class="container">
                <div class="topo"><!--
                    <div class="subtitulo">
                        <span class="span-subtitulo-2"><?php the_field ('acf_subtitulo_da_secao_garantias'); ?></span>
                        <div class="linha"></div>
                    </div> -->
                    <h3><?php the_field ('acf_titulo_da_secao_garantias'); ?></h3>
                </div>
                <div class="bottom">
                    <div class="left">
                        <div class="card-garantia">
                            <p><?php the_field ('acf_texto_vertical_beneficios')?></p>
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
                                            <img src="<?php the_sub_field('acf_icone_do_problema', 16) ?>" alt="">
                                        </div>
                                        <div class="txt">
                                            <p class="title-green"><?php the_sub_field('acf_titulo_do_problema') ?></p>
                                            <p><?php the_sub_field('acf_informacao_do_problema') ?></p>
                                        </div>
                                    </li>
                                <?php endwhile; else: endif; ?>
                        </ul>
                        <div class="card-atencao">
                            <p><?php the_field ('acf_texto_vertical_problemas')?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php include (TEMPLATEPATH . '/inc/partial_section_contato.php') ?>

    <?php endwhile; else: endif; ?>
<?php get_footer(); ?>