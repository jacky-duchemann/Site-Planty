<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');
}
?>


<?php
add_filter( 'wp_nav_menu_items', 'admin_menu_item', 10, 2 );
function admin_menu_item( $items, $args ) {
    if ( $args->theme_location == 'primary' && is_user_logged_in() ) {
        // Trouver l'index du premier lien dans le menu
        $first_link_position = strpos( $items, '</a>' ) + 4;
        // Insérer le lien admin juste après le premier lien
        $items = substr_replace( $items, '<li id="menu-item-18" ><a href="' . admin_url() . '">Admin</a></li>', $first_link_position, 0 );
    }
    return $items;
}