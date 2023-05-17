<?php
// include les function register_assets/exercpt/support
require_once get_template_directory () . '/inc/register_assets.php';
require_once get_template_directory () . '/inc/excerpt.php';
require_once get_template_directory () . '/inc/register_support.php';
function getCardGoat($url_img, $name, $description) 
{
    // $url_img= "elon.jpg";
    // $name="Elon Musk";
    $description= "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad laboriosam ab aspernatur similique aut vitae consequuntur voluptates inventore a odit. Cum laborum nemo, eligendi maiores ea impedit et dolorum ad.
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad laboriosam ab aspernatur similique aut vitae consequuntur voluptates inventore a odit. Cum laborum nemo, eligendi maiores ea impedit et dolorum ad.
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad laboriosam ab aspernatur similique aut vitae consequuntur voluptates inventore a odit. Cum laborum nemo, eligendi maiores ea impedit et dolorum ad. ";
    include(get_template_directory(). '/partials/_card_goat.php');

}
// ajouter add style + js
add_action('wp_enqueue_scripts', 'goat_register_assets');
add_action('after_setup_theme', 'goat_supports');
add_filter("excerpt_length", 'goat_lenght_excerpt', 999);
