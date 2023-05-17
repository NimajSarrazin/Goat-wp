<?php 
function goat_supports()
{
// affiche la balise title dynamiquement
    add_theme_support('title-tag');
//declarer enclammer de menu
    register_nav_menus(array(
        'main' => "Menu principal",
        'footer' => 'Menu footer',
    ));
// afficher Feature image/ image à la une 
add_theme_support('post-thumbnails');
}