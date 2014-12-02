<?php snippet('header') ?>

<main class="article" role="main">
    <header class="article__header">
        <div class="article__header--meta">
            <h1 class="article__header--title"><?php echo $page->title()->html() ?></h1>
            <div class="article__header--author">
                <span>Article by</span>
                <h4 class="article__header--author--name"><a href="mailto:<?php echo $page->authormail()->html() ?>"><?php echo $page->author()->html() ?></a></h4>
                <p class="article__header--author--field"><?php echo $page->authoraffilation()->html() ?></p>
            </div>
            <div class="article__header--designer">
                <span>Design by</span>
                <h4 class="article__header--designer--name"><a href="mailto:<?php echo $page->designeremail()->html() ?>"><?php echo $page->designer()->html() ?></a></h4>
                <p class="article__header--designer--field"><?php echo $page->designeraffilation()->html() ?></p>
            </div>
        </div>
        <div class="article__header--abstract">
            <?php echo $page->abstract()->kirbytext() ?>
        </div>
    </header>

    <article markdown="1">
        <section>
            <?php echo $page->introduction()->kirbytext() ?>
        </section>
        <section>
            <?php echo $page->text()->kirbytext() ?>
        </section>
        <section>
            <?php echo $page->conclusion()->kirbytext() ?>
        </section>
        <section>
            <?php echo $page->appendix()->kirbytext() ?>
        </section>
    </article>

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