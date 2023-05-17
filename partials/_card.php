
<div class="max-w-sm p-5 shadow bg-slate-200 border border-black shadow-2xl">
    <a href=<?php the_permalink() ?>>
    <img src=<?php the_post_thumbnail_url() ?> alt=<?php the_title() ?>>
    <div class="">
        <p class="text-black font-bold"><?php the_title()?></p>
        <div>
        <?php the_excerpt()?>
        </div>
        <span class="text-indigo-400 text-md pt-4">
            <?php the_time(get_option('date_format'))?>
        </span>
    </div>
    </a>
</div>