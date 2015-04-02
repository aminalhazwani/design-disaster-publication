<?php snippet('header') ?>

  <main class="home" role="main">
	<section class="home__header">
		<?php echo $page->introtext()->kirbytext() ?>
		<!--
		<div>
	  		<p>Proceedings of the conference By Design or By Disaster 2013</p>
	  	</div>
	  	<div>
		  	<a href="<?php $site->url() ?>/index">Read</a>
		  	<a class="home__header--download" href="#download">Download</a>
		</div>
		-->
	</section>

	<div class="home__cover">
		<?php echo $page->covertext()->kirbytext() ?>
		<img src="assets/images/dod-lettering.png" />
	</div>

	<!--
  	<section class="home__share"> 
  		<p>Please, share this publication!</p>
  		<a href="#">on Facebook</a>
  		<a href="#">on Twitter</a>
  		<a href="#">via E-Mail</a>
  	</section>
	-->

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