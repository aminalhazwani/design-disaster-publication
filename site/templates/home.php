<?php snippet('header') ?>

  <main class="home" role="main">
	<section class="home__header scene_element scene_element--fadeinup">
		<p>
			Proceedings of the conference <br>By Design or By Disaster 2013 <br>→ <a href="<?php $site->url() ?>/index">read</a> or <a class="home__header--download" href="#download">download</a> ↓
		</p>
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

	<div class="home__cover scene_element scene_element--fadeinup">
		<p>The Publication</p>
		<img src="assets/images/dod-lettering.png" />
	</div>

	<!--
  	<section class="home__share scene_element scene_element--fadeinup"> 
  		<p>Please, share this publication!</p>
  		<a href="#">on Facebook</a>
  		<a href="#">on Twitter</a>
  		<a href="#">via E-Mail</a>
  	</section>
	-->

  	<section class="home__read scene_element scene_element--fadeinup">
  		<div class="home__read--online">
  			<div>
	  			<h3>Online reading</h3>
	  			<img class="home__read--img-mobile" src="assets/images/read-placeholder.png" />
		  		<p>
			  		Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum. Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur so, what are you waiting for → <a href="#">read online</a>
			  	</p>
			</div>
			<img class="home__read--online--image" src="assets/images/read-placeholder.png" />
  		</div>

  		<div id="download" class="home__read--offline">
  			<img class="home__read--offline--image" src="assets/images/read-placeholder.png" />
  			<div>
	  			<h3>Offline digital reading</h3>
	  			<img class="home__read--img-mobile" src="assets/images/read-placeholder.png" />
	  			<p>
			  		We offer digital version of our puclication as well. You can download an <a href="#">ePub</a> ↓ for your iPhone, iPad or Nook e-Reader. You can download a <a href="#">Mobi</a> ↓ for your Kindle or if you have another device you can download the standard <a href="#">PDF</a> ↓
			  	</p>
  			</div>
  		</div>
  	</section>
  </main>

<?php snippet('footer') ?>