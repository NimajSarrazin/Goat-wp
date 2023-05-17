<!DOCTYPE html>
<html <?php language_attributes() ?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE-edge" />
  <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
  <header>
    <nav class='flex justify-between bg-indigo-800 text-white px-20 py-8'>
      <a href=<?=home_url() ?>>GOAT.</a>
      <div class="flex items-center space-x-4">
        <?php 
        wp_nav_menu(array(
          'theme_location' => 'main',// id du menu 
          'container' => 'ul',//default = div mais nous on veut des ul
          'menu_class' => 'flex space-x-4', // ajoute de li avec un space-x-4
        ))
        ?>
        <?php 
        if (is_home()) { ?>
          <div class="text-black">
            <?php get_search_form() ?>
          </div>
        <?php }  ?>
      </div>
    </nav>
  </header>