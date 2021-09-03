<?php

//иконки

if ( ! function_exists( 'tracks' ) ) {

    function tracks() {
        $labels = array(
            'name'                => _x( 'Треки', 'Post Type General Name', 'icons' ),
            'singular_name'       => _x( 'Треки', 'icons' ),
            'parent_item_colon'   => __( 'Родительский:', 'icons' ),
            'all_items'           => __( 'Все треки', 'icons' ),
            'view_item'           => __( 'Просмотреть', 'icons' ),
            'add_new_item'        => __( 'Добавить новый трек', 'icons' ),
            'add_new'             => __( 'Добавить новый', 'icons' ),
            'edit_item'           => __( 'Редактировать', 'icons' ),
            'update_item'         => __( 'Обновить', 'icons' ),
            'search_items'        => __( 'Найти', 'icons' ),
            'not_found'           => __( 'Не найдено', 'icons' ),
            'not_found_in_trash'  => __( 'Не найдено в корзине', 'icons' ),
        );
        $args = array(
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'custom-fields' ),
            'taxonomies'          => array( 'post' ),
            'public'              => true,
            'menu_position'       => 6,
            'menu_icon'           => 'dashicons-cover-image',
        );
        register_post_type( 'tracks', $args );
    }
    add_action( 'init', 'tracks' ); // инициализируем
}


//slider

if ( ! function_exists( 'slider_cp' ) ) {
    function slider_cp() {
        $labels = array(
            'name'                => _x( 'Слайдер на главной', 'Post Type General Name', 'slider' ),
            'singular_name'       => _x( 'Слайдер на главной', 'Post Type Singular Name', 'slider' ),
            'menu_name'           => __( 'Слайдер на главной', 'slider' ),
            'parent_item_colon'   => __( 'Родительский:', 'slider' ),
            'all_items'           => __( 'Все слайды', 'slider' ),
            'view_item'           => __( 'Просмотреть', 'slider' ),
            'add_new_item'        => __( 'Добавить новый слайд', 'slider' ),
            'add_new'             => __( 'Добавить новый', 'slider' ),
            'edit_item'           => __( 'Редактировать', 'slider' ),
            'update_item'         => __( 'Обновить', 'slider' ),
            'search_items'        => __( 'Найти', 'slider' ),
            'not_found'           => __( 'Не найдено', 'slider' ),
            'not_found_in_trash'  => __( 'Не найдено в корзине', 'slider' ),
        );
        $args = array(
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'custom-fields' ),
            'taxonomies'          => array( 'post' ),
            'public'              => true,
            'menu_position'       => 7,
            'menu_icon'           => 'dashicons-category',
        );
        register_post_type( 'slider', $args );
    }
    add_action( 'init', 'slider_cp' ); // инициализируем
}

?>