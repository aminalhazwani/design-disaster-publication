<section class="article__share">
	<p>It looks like you’re enjoying this publication... share it!</p>
	<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $page->url() ?>" class="article__share--fbk"></a>
	<a href="https://twitter.com/intent/tweet?url=<?php echo $page->url() ?>&text=<?php echo $page->title() ?> by <?php echo $page->author()->html() ?> and <?php echo $page->designer()->html() ?>" class="article__share--bird"></a>
	<a href="mailto:" class="article__share--mail"></a>
</section>