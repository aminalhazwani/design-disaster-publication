	<footer class="footer">
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

   <!-- Scripts -->
   <?php echo js('assets/scripts/main.min.js') ?>
</body>
</html>