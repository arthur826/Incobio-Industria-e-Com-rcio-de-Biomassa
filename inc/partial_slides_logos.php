<section class="s-slides-logos">
        <div class="container">
            <div class="title-slides">
                <h4><?php the_field('acf_titulo_dos_slides_das_empresas', 'options') ?></h4>
            </div>
            <div class="swiper logosSwiper">
                <div class="swiper-wrapper">
                    <?php if( have_rows('acf_repeater_slides_logos', 'options') ): while ( have_rows('acf_repeater_slides_logos', 'options') ) : the_row(); ?>
                        <div class="swiper-slide">
                            <img src="<?php the_sub_field ('acf_logo_da_empresa', 'options'); ?>" alt="">
                        </div>
                    <?php endwhile; else : endif;?>
                </div>
            </div>
        </div>
</section>

