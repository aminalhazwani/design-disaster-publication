<header class="article__header">
    <div class="article__header--meta">
        <h1 class="article__header--title hyphenate"><?php echo $page->title()->html() ?></h1>
        <div class="article__header--author">
            <span>Article by</span>
            <h3 class="article__header--author--name"><a href="mailto:<?php echo $page->authormail()->html() ?>"><?php echo $page->author()->html() ?></a></h3>
            <p class="article__header--author--field"><?php echo $page->authoraffilation()->html() ?></p>
        </div>
        <div class="article__header--designer">
            <span>Design by</span>
            <h3 class="article__header--designer--name"><a href="mailto:<?php echo $page->designeremail()->html() ?>"><?php echo $page->designer()->html() ?></a></h3>
            <p class="article__header--designer--field"><?php echo $page->designeraffilation()->html() ?></p>
        </div>
    </div>
    <div class="article__header--abstract">
        <?php echo $page->description()->kirbytext() ?>
    </div>
</header>