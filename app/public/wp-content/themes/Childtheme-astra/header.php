<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <!-- Lien vers l'acceuil avec le logo -->
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo2.png" alt="Logo Planty" />
				</a>
            </div>
            <nav class="menu">
			<?php
			// Afficher le menu principal //
			wp_nav_menu(array(
    			'theme_location' => 'primary', // emplacement du menu
    			'menu_class' => 'menu', // classe CSS du menu
    			'container' => 'nav', // élément HTML conteneur du menu
    			'container_class' => 'main-menu', // classe CSS du conteneur
			));
			?>
            </nav>
        </div>
    </header>