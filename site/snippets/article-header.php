<header class="article__header" style="background-image:url(<?php foreach($page->images() as $image): ?><?php if($image->cover() != ''): ?><?php echo $image->url() ?><?php endif ?><?php endforeach?>)">
    <div class="article__header--info">
        <?php snippet('article-top-navigation') ?>
        <div class="article__header--meta">
            <h1 class="article__header--title<?php if(strlen($page->title()) > 20): ?> article__header--title--long<?php endif ?>">
            <?php echo $page->title()->html() ?></h1>
            <div class="article__header--author">
                <span>Article by</span>
                <h3 class="article__header--author--name"><a href="mailto:<?php echo $page->authormail()->html() ?>"><?php echo $page->author()->html() ?></a></h3>
                <p class="article__header--author--field"><?php echo $page->authoraffilation()->html() ?></p>
            </div>
            <?php if($page->designer() != ''): ?>
            <div class="article__header--designer">
                <span>Design by</span>
                <h3 class="article__header--designer--name"><a href="mailto:<?php echo $page->designeremail()->html() ?>"><?php echo $page->designer()->html() ?></a></h3>
                <p class="article__header--designer--field"><?php echo $page->designeraffilation()->html() ?></p>
            </div>
            <?php endif ?>
        </div>

        <div class="article__header--abstract">
            <?php echo $page->description()->kirbytext() ?>
        </div>
    </div>
</header>