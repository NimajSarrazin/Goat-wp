<?php get_header()?>
<div class="p-20">
    <?php
    if (have_posts()):
        while (have_posts()): the_post();?>
        <h2 class="pb-6 font-bold "><?php the_title()?></h2>
        <div class="max-w-2xl mx-auto">
            <?php the_content()?>
            <p>
                Publié le: <?php the_date() ?>
                Auteur le: <?php the_author() ?>
                Category: <?php the_category() ?>
            </p>
        </div>
    <?php endwhile;
    endif;?>
</div>
<?php get_footer()?>
