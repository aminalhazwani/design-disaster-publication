<nav class="article-nav-bottom" role="navigation">
	<?php if($next = $page->nextVisible()): ?>
    	<a class="article-nav-bottom__next article-nav-bottom__background" href="<?php echo $next->url() ?>" style="background-image:url(<?php foreach($next->images() as $image): ?><?php if($image->cover() != ''): ?><?php echo $image->url() ?><?php endif ?><?php endforeach?>)">
    		<div class="article-nav-bottom__next--wrapper">
	    		<h2><?php echo $next->title() ?></h2>
	    		<p><?php echo excerpt($next->description()->kirbytext(), 160)?></p>
	    		<span>NEXT</span>
            </div>
    	</a>
    <?php else: ?>
    	<a class="article-nav-bottom__index" href="<?php echo $site->url()?>/index">
            <div class="article-nav-bottom__index--wrapper">
                <h2>BACK TO THE INDEX</h2>
        		<span></span>
            </div>
    	</a>
    <?php endif ?>

    <?php if($prev = $page->prevVisible()): ?>
    	<a class="article-nav-bottom__prev article-nav-bottom__background hyphenate" href="<?php echo $prev->url() ?>" style="background-image:url(<?php foreach($prev->images() as $image): ?><?php if($image->cover() != ''): ?><?php echo $image->url() ?><?php endif ?><?php endforeach?>)">
    		<div class="article-nav-bottom__prev--wrapper">
	    		<h2><?php echo $prev->title() ?></h2>
	    		<span>PREV</span>
            </div>
    	</a>
    <?php else: ?>
    	<a class="article-nav-bottom__prev-index" href="<?php echo $site->url()?>/index">
    		<div class="article-nav-bottom__prev-index--wrapper">
                <h2>BACK TO THE INDEX</h2>
        		<span></span>
            </div>
    	</a>
    <?php endif ?>
</nav>