<?php 

/**
 * Registers an editor stylesheet for the theme.
 */
function register_editor_stylesheet() {
    add_editor_style( 'css/bootstrap.css' );
}
add_action( 'admin_init', 'register_editor_stylesheet' );


?>