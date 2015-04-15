<?php snippet('header') ?>

	<main class="about" role="main">

		<section class="about__intro">
			<?php echo $page->text()->kirbytext() ?>
		</section>

		<section class="about__team">
			<h1>Team</h1>
			<div class="about__team--core">
				<?php foreach($pages->find('/about')->children()->visible() as $member): ?>
				<?php if($member->kind() == 'core'): ?>
					<div class="team__core--member">
						<!-- <h3><?php echo $member->title()->html() ?></h3> -->
						<?php echo $member->bio()->kirbytext() ?>
					</div>
				<?php endif?>
				<?php endforeach ?>
			</div>

			<div class="about__team--support">
				<?php foreach($pages->find('/about')->children()->visible() as $member): ?>
				<?php if($member->kind() == 'support'): ?>
					<div class="team__support--member">
						<!-- <h3><?php echo $member->title()->html() ?></h3> -->
						<?php echo $member->bio()->kirbytext() ?>
					</div>
				<?php endif?>
				<?php endforeach ?>
			</div>
		</section>

		<section class="about__editors">
			<h1>Editors</h1>
		</section>

	</main>

<?php snippet('footer') ?>