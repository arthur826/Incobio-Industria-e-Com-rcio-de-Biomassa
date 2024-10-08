<section class="s-entre-contato">
            <div class="container">
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-contato-rodape.svg" alt="">
                <h4 class="text-entre-contato"><?php the_field ('acf_titulo_da_sessao_contato', 'options'); ?></h4>
                <div class="botoes-contato">
                    <a class="link-botao-contato" href="<?php the_field ('acf_link_botao_da_sessao_contato', 'options'); ?>"><button class="btn-fale-conosco"><p><?php the_field ('acf_texto_do_botao_da_sessao_contato', 'options'); ?></p><i class="fa-solid fa-angle-right" style="color: #093F45;"></i></button></a>
                <?php
                    if( get_field('exibir_ocultar_botao_trabalhe_conosco', 'options') ) { ?>
                    <a class="link-botao-contato" href="<?php the_field ('acf_link_do_segundo_botao_da_sessao_contato', 'options'); ?>"><button class="btn-trabalhe-conosco"><p><?php the_field ('acf_texto_do_segundo_botao_da_sessao_contato', 'options'); ?></p><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></button></a>
                    <?php } ?>

                </div>
            </div>
</section>