<?php snippet('header') ?>

<main class="article" role="main">
    <?php snippet('article-header') ?>

    <?php snippet('article-content') ?>    

    <nav class="nextprev cf" role="navigation">
        <?php if($prev = $page->prevVisible()): ?>
        <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
        <?php endif ?>
        <?php if($next = $page->nextVisible()): ?>
        <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
        <?php endif ?>
    </nav>
</main>

<?php snippet('footer') ?>