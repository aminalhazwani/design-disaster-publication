<?php snippet('header') ?>

  <main class="home" role="main">
	<!-- <section class="home__header">
		<?php echo $page->introtext()->kirbytext() ?>
	</section> -->

	<div class="home__cover">
		<div>
			<?php echo $page->covertext()->kirbytext() ?>
		</div>
		<img src="assets/images/dod-lettering.png" />
	</div>

  	<section class="home__read">
  		<div class="home__read--online">
  			<div>
	  			<h3><?php echo $page->onlinetitle() ?></h3>
	  			<img class="home__read--img-mobile" src="assets/images/read-placeholder.png" />
		  		<?php echo $page->onlinetext()->kirbytext() ?>
			</div>
			<img class="home__read--online--image" src="assets/images/read-placeholder.png" />
  		</div>

  		<div id="download" class="home__read--offline">
  			<img class="home__read--offline--image" src="assets/images/read-placeholder.png" />
  			<div>
	  			<h3><?php echo $page->offlinetitle() ?></h3>
	  			<img class="home__read--img-mobile" src="assets/images/read-placeholder.png" />
	  			<?php echo $page->offlinetext()->kirbytext() ?>
  			</div>
  		</div>
  	</section>
  </main>

<?php snippet('footer') ?>