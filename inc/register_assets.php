<?php

function goat_register_assets()
{

    //tailwindcss
    wp_enqueue_script(
        'goat_tailwindcss',
        "https://cdn.tailwindcss.com",
    );
    // goat style
    wp_enqueue_style(
        'goat-style',
        // recupére l'assets du site en absoulte
        get_template_directory_uri() . '/assets/css/style.css',
        [],
        '1.1'
    );

    // main style
    wp_enqueue_style(
        'main-style',
        // recupére l'assets du site en absoulte
        get_stylesheet_uri(),
        [],
        '1.1'
    );
    // main style
    wp_enqueue_style(
        'lato-font',
        // recupére l'assets du site en absoulte
        "https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap
",
        [],
        '1.1'
    );

}