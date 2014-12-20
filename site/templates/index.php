<?php snippet('header') ?>

	<main class="index" role="main">
		<nav role="navigation">
		<ul>
			<?php foreach($pages->find('articles')->children()->visible() as $article): ?>
			<li class="scene_element scene_element--fadeinup">
		  		<a href="<?php echo $article->url() ?>" style="background-image:url(<?php foreach($article->images() as $image): ?><?php if($image->cover() != ''): ?><?php echo $image->url() ?><?php endif ?><?php endforeach?>)">
		  			<div class="article__header--overlay"></div>
		  			<div class="article__header--info">
			  			<div class="article__header--meta">
					        <h1><?php echo $article->title()->html() ?></h1>
					        <div>
					            <span>Article by</span>
					            <h3><a href="mailto:<?php echo $article->authormail()->html() ?>"><?php echo $article->author()->html() ?></a></h3>
					            <p><?php echo $article->authoraffilation()->html() ?></p>
					        </div>
					        <div>
					            <span>Design by</span>
					            <h3><a href="mailto:<?php echo $article->designeremail()->html() ?>"><?php echo $article->designer()->html() ?></a></h3>
					            <p><?php echo $article->designeraffilation()->html() ?></p>
					        </div>
        				</div>
        			</div>
		  		</a>
			</li>
			<?php endforeach ?>
		</ul>
		</nav>
	</main>

<?php snippet('footer') ?>