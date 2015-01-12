	<footer class="footer scene_element scene_element--fadeinup">
	  	<div class="footer__col">
		  	<div class="footer__copy">
		    	<?php echo $site->copyright()->kirbytext() ?>
		    </div>
		  	<div class="footer__logos">
		  		<div class="footer__logos--uni">
		  			<a href="#"></a>
		  		</div>
		  		<div class="footer__logos--press">
		  			<a href="#"></a>
		  		</div>
		  	</div>
		</div>

		<div class="footer__col">
		  	<div class="footer__imprint">
		  		<?php echo $site->imprint()->kirbytext() ?>
		  	</div>
		</div>

		<p></p>
	</footer>

	<!-- Vendor scripts -->
	<?php echo js('assets/scripts/vendor/vendor.min.js') ?>
	<!-- Homepage scripts -->
	<?php if($page->template() == 'home'): ?>
		<?php echo js('assets/scripts/home.min.js') ?>
	<?php endif ?>
	<!-- Article page scripts -->
	<?php if($page->template() == 'article'): ?>
		<?php echo js('assets/scripts/article.min.js') ?>
	<?php endif ?>
	<!-- Index pafe scripts -->
	<?php if($page->template() == 'index'): ?>
		<?php echo js('assets/scripts/index.min.js') ?>
	<?php endif ?>
	<!-- About page scripts -->
	<?php if($page->template() == 'about'): ?>
		<?php echo js('assets/scripts/about.min.js') ?>
	<?php endif ?>
	<!-- Main Scripts -->
	<?php echo js('assets/scripts/main.min.js') ?>


	</body>
</html>