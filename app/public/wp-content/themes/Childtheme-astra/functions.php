<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');
}
?>


<?php
add_filter('wp_nav_menu_items', 'ajouter_lien_admin_menu', 10, 2);

function
ajouter_lien_admin_menu($items, $args) {
    if (is_user_logged_in() && $args->theme_location == 'primary') { 
        //creer le lien admin
        $lien_admin = '<li id="menu-item-18" ><a href="' . admin_url() . '">Admin</a></li>';
        //separer les elements du menu en 2
        $elements_menu = explode('</li>', $items);
        $moitie_elements = ceil(count($elements_menu) / 2);
        //inserer le lien admin au millieu
        $menu_gauche = implode('</li>', array_slice($elements_menu, 0, $moitie_elements));
        $menu_droite = implode('</li>', array_slice($elements_menu, $moitie_elements));

        $items = $menu_gauche . $lien_admin . $menu_droite;
    }
    return $items;
}

/*add_filter( 'wp_nav_menu_primary-menu_items', 'prefix_add_menu_item', 10, 2 );
/**
 * Add Menu Item to a specific place in the menu
 */
/*function prefix_add_menu_item ( $items, $args ) {
    if (is_user_logged_in() && $args->theme_location == 'primary') {

$items_array = array();
        while ( false !== ( $item_pos = strpos ( $items, '<li', 10 ) ) ) 
        {
            $items_array[] = substr($items, 0, $item_pos);
            $items = substr($items, $item_pos);
        }
        $items_array[] = $items;
        array_splice($items_array, 1, 0, '<li id="menu-item-18"><a href="' . admin_url() . '">Admin</a></li>'); // inserer l'item aprés le premier item

        $items = implode('', $items_array);
    }
       return $items;
}*/
