<?php
/*
 * Ajouter mon nouvau menu au panneau de contrôle administrateur.
 */

add_action('admin_menu', 'vpia_Add_My_Admin_Link');

// Ajouter un nouvau lien au menu de navigation du panneau de contrôle administrateur.
function vpia_Add_My_Admin_Link() {
    add_menu_page(
        'VeepIA Plugin !',
        'VeepIA Page',
        'manage_options',
        'VeepIAPage/includes/vpia-first-acp-page.php'
    );
}