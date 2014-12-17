<?php snippet('header') ?>
	<main class="index" role="main">
		<nav role="navigation">
		<ul>
			<?php foreach($pages->find('articles')->children()->visible() as $a): ?>
			<li>
		  		<a href="<?php echo $a->url() ?>">
		  			<?php echo $a->title()->html() ?>
		  		</a>
			</li>
			<?php endforeach ?>
		</ul>
		</nav>
	</main>

<?php snippet('footer') ?>