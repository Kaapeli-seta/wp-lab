<?php
function register_my_menu(): void {
register_nav_menu( 'main-menu', __( 'Main Menu' ) );
}

add_action( 'after_setup_theme', 'register_my_menu' );

function add_h1_to_title( $title ): string {
    return '<h1>' . $title . '</h1>';
}

add_filter( 'the_title', 'add_h1_to_title' );
