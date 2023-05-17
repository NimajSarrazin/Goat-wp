<div class="flex justify-between space-x-12 px-24">
  <div class="w-2/4">
    <img src="<?=get_template_directory_uri(); ?>/assets/img/<?= $url_img ?>" alt="<?= $name ?>" class="w-full" />
  </div>
  <div class="w-2/4">
    <h2 class="text-4xl font-bold pb-5">
      Hi. I'm <?= $name ?>
    </h2>
    <p>
      <?= $description ?>
    </p>
  </div>
</div>
