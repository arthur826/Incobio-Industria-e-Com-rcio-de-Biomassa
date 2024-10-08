<?php 
    //Template name: Página Interna Vaga
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <section class="s-vaga-interna">
        <div class="container">
            <div class="text">
                <?php the_category();?>
                <h2><span class="span-vaga-interna">Candidatar-se a vaga:</span> </br><?php the_title(); ?></h2>
                <h4><?php the_time('d.m.Y'); // Display the time it was published ?></h4>
                <div class="arrow">
                    <i class="fa-solid fa-arrow-down fa-fade" style="color: #17d460;"></i>
                </div>
            </div>
        </div>
    </section>

    <section class="formulario-vaga">
        <div class="container">
        <?php
            // Verifica se a função do_shortcode() está disponível
            if (function_exists('do_shortcode')) {
                // Substitua 'your_shortcode_here' pelo shortcode real do seu formulário
                $form_shortcode = get_field('acf_link_formulario');
                
                // Usando a função do_shortcode() para renderizar o formulário
                echo do_shortcode($form_shortcode);
            }
        ?>
        </div>
    </section>
    
    
    <?php endwhile; else: endif; ?>

<?php get_footer() ?>