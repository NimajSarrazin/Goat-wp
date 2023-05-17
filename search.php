<?php get_header()?>



<h1 class="uppercase text-center text-3xl py-10">Seach page</h1>
<div class='mx-auto max-w-2xl bg-indigo-400 p-8 px-24 my-20'>
    <p class="text-center text-xl text-indigo-600 pb-10 font-bold">
        Rechercher : <?= get_search_query() ?></p>
    </p> 
<!--- loop wp
    check if post exists
    if type start the loop 
    show title and link to 

---->
<?php
    if (have_posts()):
        while (have_posts()): the_post()?>
        <a href="<?php the_permalink() ?>">
            <p><?php the_title()?></p>
        </a>
<?php endwhile;
endif
?>
</div>

<?php get_footer()?>