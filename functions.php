<?php
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'comBootstrap' ),
    'secondary' => __( 'Secondary Menu', 'comBootstrap' )
) );

?>