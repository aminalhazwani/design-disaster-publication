<nav class="article__nav--top">
	<a href="<?php echo $site->url()?>/index" class="article__nav--top--index">INDEX</a>
	<div class="article__nav--top--arrows">
		<?php if($prev = $page->prevVisible()): ?>
	    	<a class="article__nav--top--arrows--prev" href="<?php echo $prev->url() ?>">PREV</a>
	    <?php endif ?>
	    <?php if($next = $page->nextVisible()): ?>
	    	<a class="article__nav--top--arrows--next" href="<?php echo $next->url() ?>">NEXT</a>
	    <?php endif ?>
	</div>
</nav>