<?php snippet('header') ?>

	<main class="home" role="main">
		<div class="home__hero">
			<div class="home__hero--title">
				<?php echo $page->covertext()->kirbytext() ?>
			</div>
			<img class="home__hero--image" src="assets/images/dod-lettering.png" />
		</div>

	  	<section class="home__read">
	  		<div class="home__read--online">
	  			<div class="read__wrapper">
		  			<h3 class="read__wrapper--title"><?php echo $page->onlinetitle() ?></h3>
		  			<img class="read__wrapper--img-mobile" src="assets/images/online_1200px.png" />
			  		<div class="read__wrapper--text"><?php echo $page->onlinetext()->kirbytext() ?></div>
				</div>
				<img class="read__wrapper--image-online" src="assets/images/online_1200px.png" />
	  		</div>

	  		<div id="download" class="home__read--offline">
	  			<img class="read__wrapper--image-offline" src="assets/images/offline_1200px.png" />
	  			<div class="read__wrapper">
		  			<h3 class="read__wrapper--title"><?php echo $page->offlinetitle() ?></h3>
		  			<img class="read__wrapper--img-mobile" src="assets/images/offline_1200px.png" />
		  			<div class="read__wrapper--text"><?php echo $page->offlinetext()->kirbytext() ?></div>
	  			</div>
	  		</div>
	  	</section>
  </main>

<?php snippet('footer') ?>