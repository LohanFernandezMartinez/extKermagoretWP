<?php
/*
 * Ajouter mon nouvau menu au panneau de contrôle administrateur.
 */

add_action('admin_menu', 'veepia_init_menu');

/**
 * Init Admin Menu.
 *
 * @return void
 */
function veepia_init_menu() {
    add_menu_page( __( 'VeepIA', 'veepia'), __( 'VeepIA', 'veepia'), 'manage_options', 'veepia', 'veepia_admin_page', 'dashicons-admin-post', '2.1' );
}

/**
 * Init Admin Page.
 *
 * @return void
 */
function veepia_admin_page() {
    require_once plugin_dir_path(__FILE__) . '../templates/app.php';
}
add_action('admin_enqueue_scripts', 'veepia_admin_enqueue_scripts');

/**
 * Enqueue scripts and styles.
 *
 * @return void
 */
function veepia_admin_enqueue_scripts() {
    wp_enqueue_style( 'veepia-style', plugin_dir_url( __FILE__ ) . 'build/index.css' );
    wp_enqueue_script( 'veepia-script', plugin_dir_url( __FILE__ ) . 'build/index.js', array( 'wp-element' ), '1.0.0', true );
}

