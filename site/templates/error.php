<?php snippet('header') ?>

  <main class="error" role="main">
  	<section>
	  	<h1><?php echo $page->title()->html() ?></h1>
	    <?php echo $page->text()->kirbytext() ?>
	</section>
  </main>

<?php snippet('footer') ?>
