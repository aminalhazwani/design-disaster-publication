<section class="article__share">
	<p></p>
	<div class="article__share--icons">
		<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $page->url() ?>" class="article__share--fbk"></a>
		<a href="https://twitter.com/intent/tweet?url=<?php echo $page->url() ?>&text=<?php echo $page->title() ?> - <?php echo $site->title()->html() ?>" class="article__share--bird"></a>
		<a href="mailto:?subject=<?php echo $page->title() ?> - <?php echo $site->title()->html() ?>&body=<?php echo $page->url() ?>" class="article__share--mail"></a>
	</div>
</section>