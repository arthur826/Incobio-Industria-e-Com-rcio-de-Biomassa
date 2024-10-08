            <section class="s-unidades">
                <div class="container">
                    <div class="left">
                        <div class="subtitulo">
                            <span class="span-subtitulo-2"><?php the_field ('acf_subtitulo_nossas_unidades', 'options'); ?></span>
                            <div class="linha">
                            </div>
                        </div>
                        <h3><?php the_field ('acf_titulo_nossas_unidades', 'options'); ?></h3>
                        <p class="text-02"><?php the_field ('acf_texto_nossas_unidades', 'options'); ?></p>
                    </div>
                    <div class="right">
                        <div class="swiper nomesCidades">
                            <div class="swiper-wrapper" id="seletorCidades">
                                <?php if( have_rows('acf_repetidor_informacoes_das_unidades', 'options') ): while ( have_rows('acf_repetidor_informacoes_das_unidades', 'options') ) : the_row(); ?>
                                    <div class="swiper-slide">
                                        <button class="btn-cidades"><?php the_sub_field ('acf_nome_da_cidade', 'options'); ?></button>
                                    </div>
                                <?php endwhile; else : endif;?>

                            </div>

                        </div>
                       <div class="bottom">
                            <?php

                            $first_iteration = true;

                            if( have_rows('acf_repetidor_informacoes_das_unidades', 'options') ): while ( have_rows('acf_repetidor_informacoes_das_unidades', 'options') ) : the_row(); ?>
                                <div class="infos-cidade" <?php echo $first_iteration ? 'style="display: block;"' : 'style="display: none;"'; ?>>
                                    <div class="content">
                                        <div class="image">
                                            <img src="<?php the_sub_field ('acf_imagem_da_unidade', 'options'); ?>" alt="">
                                        </div>
                                        <div class="infos">
                                            <span class="span-subtitulo-2"><?php the_sub_field ('acf_rede_empresarial', 'options'); ?></span>
                                            <h3><?php the_sub_field ('acf_nome_da_cidade', 'options'); ?></h3>
                                            <p class="text-02"><?php the_sub_field ('acf_endereco_da_unidade', 'options'); ?></p>
                                            <a href="tel:+<?php the_sub_field ('acf_link_para_o_telefone_da_unidade', 'options'); ?>" class="text-02"><?php the_sub_field ('acf_numero_da_unidade', 'options'); ?></a>
                                            <div class="link-maps">
                                                <i class="fa-solid fa-location-dot fa-flip" style="color: #17aa61;"></i>
                                                <a class="span-maps" target="_blank" href="<?php the_sub_field ('acf_link_da_localizacao_da_unidade', 'options'); ?>"><?php the_sub_field ('acf_rotulo_botao_ver_maps', 'options'); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php  $first_iteration = false;
                            endwhile; else : endif;?>
                       </div>
                    </div>
                </div>
            </section>