<nav class="article__nav--bottom" role="navigation">
	<?php if($next = $page->nextVisible()): ?>
    	<a class="article__nav--bottom--next article__nav--bottom--background" href="<?php echo $next->url() ?>" style="background-image:url(<?php foreach($next->images() as $image): ?><?php if($image->cover() != ''): ?><?php echo $image->url() ?><?php endif ?><?php endforeach?>)">
    		<div class="article__nav--bottom--overlay"></div>
    		<div class="article__nav--bottom--next--content">
	    		<h2><?php echo $next->title() ?></h2>
	    		<p><?php echo excerpt($next->description()->kirbytext(), 160)?></p>
	    		<span>NEXT</span>
	    	</div>
    	</a>
    <?php else: ?>
    	<a href="<?php echo $site->url()?>/index" class="article__nav--bottom--index-next">
    		<h2>BACK TO THE INDEX</h2>
    		<span></span>
    	</a>
    <?php endif ?>
    <?php if($prev = $page->prevVisible()): ?>
    	<a class="article__nav--bottom--prev article__nav--bottom--background hyphenate" href="<?php echo $prev->url() ?>" style="background-image:url(<?php foreach($prev->images() as $image): ?><?php if($image->cover() != ''): ?><?php echo $image->url() ?><?php endif ?><?php endforeach?>)">
    		<div class="article__nav--bottom--overlay"></div>
    		<div class="article__nav--bottom--prev--content">
	    		<h2><?php echo $prev->title() ?></h2>
	    		<span>PREV</span>
    		</div>
    	</a>
    <?php else: ?>
    	<a href="<?php echo $site->url()?>/index" class="article__nav--bottom--index-prev">
    		<h2>BACK TO THE INDEX</h2>
    		<span></span>
    	</a>
    <?php endif ?>
</nav>