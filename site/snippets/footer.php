	<footer class="footer">
		<div class="footer__wrapper">
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
			  		<?php echo $site->colophon()->kirbytext() ?>
			  	</div>
			</div>

			<div class="footer__col">
			  	<div class="footer__contacts">
			  		<?php echo $site->contacts()->kirbytext() ?>
			  	</div>
			</div>

			<p></p>
		</div>
	</footer>

	<!-- Vendor scripts -->
	<?php echo js('assets/scripts/vendor/vendor.min.js') ?>
	<?php if($page->template() == 'home'): ?>
	<!-- Homepage scripts -->
		<?php echo js('assets/scripts/home.min.js') ?>
	<?php endif ?>
	<?php if($page->template() == 'article'): ?>
	<!-- Article page scripts -->
		<?php echo js('assets/scripts/article.min.js') ?>
	<?php endif ?>
	<?php if($page->template() == 'index'): ?>
	<!-- Index pafe scripts -->
		<?php echo js('assets/scripts/index.min.js') ?>
	<?php endif ?>
	<?php if($page->template() == 'about'): ?>
	<!-- About page scripts -->
		<?php echo js('assets/scripts/about.min.js') ?>
	<?php endif ?>
	<!-- Main Scripts -->
	<?php echo js('assets/scripts/main.min.js') ?>
	</body>
</html>