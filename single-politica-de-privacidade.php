<?php get_header(); ?>
    <?php
        //Template name: Página Política de Privacidade
    ?>
        <?php if ( have_posts(  )) : while ( have_posts(  ) ) : the_post( ); ?>

        <section class="s-hero-politica-de-privacidade" id="ReturnToTop">
            <div class="container">
                <h2><?php the_title() ?></h2>
                <div class="arrow" style="border: 1px solid #ffff;">
                    <i class="fa-solid fa-arrow-down fa-fade" style="color: #ffff;"></i>
                </div>
            </div>
        </section>

        <section class="s-politica-de-privacidade">
            <div class="hero">
                <div class="container">
                    <h2><?php the_title(); ?></h2>
                    <img src="<?php echo get_template_directory_uri() ?>/img/solar_arrow-up-broken.png" alt="">
                </div>
            </div>
            <div class="container">
                    <div class="post-content">
                        <div class="post-text">
                            <p><?php the_content();
                                    // This call the main content of the post, the stuff in the main text box while composing.
                                    // This will wrap everything in p tags
                                    ?></p>
                        </div>
                    </div>
                </div>
        </section>


        <?php endwhile; else: endif; ?>
<?php get_footer(); ?>