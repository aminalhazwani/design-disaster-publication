<?php snippet('header') ?>

  <main class="about" role="main">

    <div class="scene_element scene_element--fadeinup">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>