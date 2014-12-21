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
	</footer>

	<!-- Vendor Scripts -->
	<?php echo js('assets/scripts/vendor/vendor.min.js') ?>
	<!-- Page Scripts -->
	<?php if($page->template() == 'article'): ?>
		<?php echo js('assets/scripts/article.min.js') ?>
	<?php endif ?>
	<!-- Main Scripts -->
	<?php echo js('assets/scripts/main.min.js') ?>


	</body>
</html>