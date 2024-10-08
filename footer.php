    <footer>
        <div class="container">
            <div class="topo-footer">
                <div class="left">
                    <div class="top">
                      <a href="<?php echo get_option("siteurl"); ?>"><img src="<?php the_field ('acf_logo_incobio_footer', 'options'); ?>"></a>
                    </div>
                    <div class="bottom">
                        <h4 class="titles-footer"><?php the_field ('acf_titulo_redes_sociais', 'options'); ?></h4>
                        <div class="redes-sociais">
                            <a target="_blank" href="<?php the_field ('acf_link_do_linkedin', 'options'); ?>"><i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i></a>
                            <a target="_blank" href="<?php the_field ('acf_link_do_facebook', 'options'); ?>"><i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i></a>
                            <a target="_blank" href="<?php the_field ('acf_link_do_instagram', 'options'); ?>"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a>
                        </div>
                        <div class="paises">
                            <?php if( have_rows('acf_repeater_idioma_do_site', 'options') ): while ( have_rows('acf_repeater_idioma_do_site', 'options') ) : the_row(); ?>
                                <a href="<?php the_sub_field ('acf_link_idioma_do_site', 'options'); ?>"><img src="<?php the_sub_field ('acf_bandeira_do_pais', 'options'); ?>" alt=""></a>
                            <?php endwhile; else : endif;?>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <ul>
                        <li>
                            <h4 class="titles-footer">Institucional</h4>
                            <?php
                                $args = array(
                                'menu' => 'Menu Institucional Footer',
                                'theme_location' => 'menu-institucional-footer',
                                'container' => false
                                );
                                wp_nav_menu( $args );
                            ?>
                        </li>
                        <?php if( have_rows('acf_repeater_enderecos_das_filiais', 'options') ): while ( have_rows('acf_repeater_enderecos_das_filiais', 'options') ) : the_row(); ?>
                            <li>
                                <h4 class="titles-footer"><?php the_sub_field ('acf_repeate_nome_da_filial', 'options'); ?></h4>
                                <a class="link-footer" target="_blank" href="tel:+<?php the_sub_field ('repeate_link_do_numero_de_contato_da_filial', 'options'); ?>"><?php the_sub_field ('repeate_numero_de_contato_da_filial', 'options'); ?></a>
                                <a class="link-footer" target="_blank" href="<?php the_sub_field ('acf_repeate_link_do_maps', 'options'); ?>"><?php the_sub_field ('acf_repeate_endereco', 'options'); ?></a>
                                <a class="link-footer link-maps" target="_blank" href="<?php the_sub_field ('acf_repeate_link_do_maps', 'options'); ?>"><?php the_sub_field ('acf_repeater_texto_ver_maps', 'options'); ?></a>
                            </li>
                        <?php endwhile; else : endif;?>
                    </ul>
                </div>
            </div>
            <div class="base-footer">
                <div class="left">
                    <p><?php the_field ('acf_texto_direitos_reservados', 'options'); ?></p>
                    <div class="icone-up">
                        <a href="#ReturnToTop"><i class="fa-solid fa-chevron-up" style="color: #ffffff;"></i></a>
                    </div>
                </div>
                <div class="right">
                    <p>Desenvolvido por <a target="_blank" href="<?php the_field ('acf_link_para_o_site_do_desenvolvedor', 'options'); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo-jpx-footer.png" alt=""></a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?php echo get_template_directory_uri() ?>/js/aos.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/scripts.js"></script>
    <script src="https://kit.fontawesome.com/04ace31e72.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



    <script>
      var swiper1 = new Swiper(".logosSwiper", {
        spaceBetween: 0,
        centeredSlides: true,
        speed: 5000,
        autoplay: {
          delay: 1,
        },
        loop: true,
        slidesPerView: 6,
        allowTouchMove: false,
        disableOnInteraction: true,

        breakpoints: {
            320: {
            slidesPerView: 3,
            },
            640: {
            slidesPerView: 4,
            },
            768: {
            slidesPerView: 5,
            },
            1360: {
            slidesPerView: 6,
            },
        }
      });
    </script>

    <script>
      var swiper2 = new Swiper(".nomesCidades", {
        slidesPerView: 7,
        spaceBetween: 37,
        loop: true,
        autoplay: {
          delay: 3000,
        },
        loopFillGroupWithBlank: false,
        freeMode: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        breakpoints: {
            320: {
            slidesPerView: 3,
            spaceBetween: 10,
            },
            640: {
            slidesPerView: 4,
            spaceBetween: 10,
            },
            768: {
            slidesPerView: 5,
            spaceBetween: 1,
            },
            1360: {
            slidesPerView: 4,
            spaceBetween: 10,
            },
        }
      });
    </script>

    <script>
      var swiper3 = new Swiper(".produtosSlide", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        loopFillGroupWithBlank: false,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
      });
    </script>

    <script>
          var swiper4 = new Swiper('.swiperVagas', {
            slidesPerView: 3,
            spaceBetween: 10,
            pagination: {
              el: '.swiper-pagination',
              clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                320: {
                slidesPerView: 1,
                spaceBetween: 10,
                },
                768: {
                slidesPerView: 2,
                spaceBetween: 10,
                },
                1360: {
                slidesPerView: 3,
                spaceBetween: 10,
                },
            }
          });
    </script>

<script>
      var swiper1 = new Swiper(".vantagensSlides", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        //loopFillGroupWithBlank: false,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
          delay: 2500,
          disableOnInteraction: true,
        },
        breakpoints: {
            320: {
            slidesPerView: 2,
            spaceBetween: 10,
            },
            768: {
            slidesPerView: 3,
            spaceBetween: 20,
            },
            1360: {
            slidesPerView: 3,
            spaceBetween: 20,
            },
        }
      });
    </script>

    <?php wp_footer(); ?>
</body>
</html>

    <script>
      var swiper5 = new Swiper(".boxVaga", {
        slidesPerView: 3,
        spaceBetween: 15,
        direction: 'vertical',
        loop: true,
        loopFillGroupWithBlank: false,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
            320: {
            slidesPerView: 3,
            spaceBetween: 40,
            },
            640: {
            slidesPerView: 4,
            spaceBetween: 30,
            },
            768: {
            slidesPerView: 5,
            spaceBetween: 40,
            },
            1360: {
            slidesPerView: 7,
            spaceBetween: 37,
            },
        }
      });
    </script>