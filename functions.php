<?php

add_theme_support( 'menus' ); //Habilitar a funcão menu no wordpress


function registrar_menu_principal_desktop() {
    register_nav_menu('header-principal-desktop',__('Header Principal Desktop')); //Criar funcão para registar o menu
}

function registrar_menu_institucional_footer() {
    register_nav_menu('menu-institucional-footer',__('Menu Institucional Footer')); //Criar funcão para registar o menu
}

function registrar_menu_mobile() {
    register_nav_menu('menu-mobile',__('Menu Mobile')); //Criar funcão para registar o menu
}




add_action('init', 'registrar_menu_principal_desktop');//Inicializar função do menu
add_action('init', 'registrar_menu_institucional_footer');//Inicializar função do menu
add_action('init', 'registrar_menu_mobile');//Inicializar função do menu







// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');



//Adicionar Metabox para Data de Expiração - Vagas
function add_expiration_meta_box() {
    add_meta_box(
        'expiration_meta_box',
        'Data de Expiração do Post',
        'show_expiration_meta_box',
        'vaga',
        'side',
        'high'
    );
}
add_action('add_meta_boxes', 'add_expiration_meta_box');

function show_expiration_meta_box($post) {
    $expiration_date = get_post_meta($post->ID, '_expiration_date', true);
    echo 'Data de Expiração: <input type="date" name="expiration_date" value="' . esc_attr($expiration_date) . '">';
}

function save_expiration_date($post_id) {
    if (isset($_POST['expiration_date'])) {
        update_post_meta($post_id, '_expiration_date', sanitize_text_field($_POST['expiration_date']));
    }
}
add_action('save_post', 'save_expiration_date');


//Verficar e Expirar Vagas
function check_expired_posts() {
    $args = array(
        'post_type' => 'vaga',
        'meta_query' => array(
            array(
                'key' => '_expiration_date',
                'value' => date('Y-m-d'),
                'compare' => '<=',
                'type' => 'DATE'
            )
        ),
        'post_status' => 'publish'
    );

    $query = new WP_Query($args);
    while ($query->have_posts()) {
        $query->the_post();
        wp_update_post(array(
            'ID' => get_the_ID(),
            'post_status' => 'draft'
        ));
    }
}
add_action('wp', 'check_expired_posts');

?>