<?php get_header()?>

<h1 class="uppercase text-center text-3xl">Accueil Blog</h1>

<div class="grid grid-cols-5 gap-10 py-20 px-20">
<?php
if (have_posts()):
    while (have_posts()): the_post();
        //include
        get_template_part('partials/_card');
        
    endwhile;
endif
?>

</div>
<?php get_footer()?>
