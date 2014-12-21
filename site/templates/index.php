<?php snippet('header') ?>

	<main class="index" role="main">
		<nav class="index__navation" role="navigation">
			<ul class="index__navigation--list">
				<?php foreach($pages->find('articles')->children()->visible() as $article): ?>
				<li class="scene_element scene_element--fadeinup index__item">
			  		<a href="<?php echo $article->url() ?>" style="background-image:url(<?php foreach($article->images() as $image): ?><?php if($image->cover() != ''): ?><?php echo $image->url() ?><?php endif ?><?php endforeach?>)">
			  			<div class="article__header--overlay"></div>
			  			<div class="index__item--info">
				  			<div class="index__item--meta">
						        <h1 class="index__item--title"><?php echo $article->title()->html() ?></h1>
						        <div class="index__item--authors">
						            by <strong><?php echo $article->author()->html() ?></strong>
						            with <strong><?php echo $article->designer()->html() ?></strong>
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