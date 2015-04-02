<?php snippet('header') ?>

	<main class="index" role="main">
		<nav class="index__navigation" role="navigation">
			<ul class="index__navigation--list">
				<?php foreach($pages->find('articles')->children()->visible() as $article): ?>
				<li class="index__item">
			  		<a href="<?php echo $article->url() ?>" style="background-image:linear-gradient(to bottom, rgba(5, 5, 5, 0.5),  rgba(5, 5, 5, 0.25)),url(<?php foreach($article->images() as $image): ?><?php if($image->cover() != ''): ?><?php echo $image->url() ?><?php endif ?><?php endforeach?>)">
			  			<div class="index__item--info">
				  			<div class="index__item--meta">
						        <h1 class="index__item--title<?php if(strlen($article->title()) > 24): ?> article__header--title--long<?php endif ?>"><?php echo $article->title()->html() ?></h1>
						        <div class="index__item--authors">
						            by <strong><?php echo $article->author()->html() ?></strong>
						            <?php if($article->designer() != ''): ?>
						            with <strong><?php echo $article->designer()->html() ?></strong>
						        	<?php endif ?>
						        </div>
	        				</div>
	        				<div class="index__item--description">
					            <?php echo $article->description()->kirbytext() ?>
					        </div>
					    </div>
			  		</a>
				</li>
				<?php endforeach ?>
			</ul>
		</nav>
	</main>

<?php snippet('footer') ?>