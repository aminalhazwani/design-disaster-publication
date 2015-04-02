<?php snippet('header') ?>

  <main class="about" role="main">

    <div>
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>