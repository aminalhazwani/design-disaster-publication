<article markdown="1">
    <?php if($page->intro() != ''): ?>
    <!-- Article introduction -->
    <section>
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->introtitle() ?></h2>
                <?php echo $page->intro()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php endif ?>

    <?php if($page->chone() != ''): ?> 
    <!-- Article chapter one -->
    <section>
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->chonetitle() ?></h2>
                <?php echo $page->chone()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php endif ?>

    <?php if($page->chtwo() != ''): ?>
    <!-- Article chapter two -->
    <section>
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->chtwotitle() ?></h2>
                <?php echo $page->chtwo()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php endif ?>

    <?php if($page->chthree() != ''): ?>
    <!-- Article chapter three -->
    <section>
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->chthreetitle() ?></h2>
                <?php echo $page->chthree()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php endif ?>

    <?php if($page->chfour() != ''): ?>
    <!-- Article chapter four -->
    <section>
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->chfourtitle() ?></h2>
                <?php echo $page->chfour()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php endif ?>

    <?php if($page->chfive() != ''): ?>
    <!-- Article chapter five -->
    <section>
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->chfivetitle() ?></h2>
                <?php echo $page->chfive()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php endif ?>

    <?php if($page->chsix() != ''): ?>
    <!-- Article chapter six -->
    <section>
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->chsixtitle() ?></h2>
                <?php echo $page->chsix()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php endif ?>

    <?php if($page->chseven() != ''): ?>
    <!-- Article chapter seven -->
    <section>
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->chseventitle() ?></h2>
                <?php echo $page->chseven()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php endif ?>

    <?php if($page->cheight() != ''): ?>
    <!-- Article chapter eight -->
    <section>
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->cheighttitle() ?></h2>
                <?php echo $page->cheight()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php endif ?>

    <?php if($page->chnine() != ''): ?>
    <!-- Article chapter nine -->
    <section>
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->chninetitle() ?></h2>
                <?php echo $page->chnine()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php endif ?>

    <?php if($page->chten() != ''): ?>
    <!-- Article chapter ten -->
    <section>
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->chtentitle() ?></h2>
                <?php echo $page->chten()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php endif ?>

    <?php if($page->conclusion() != ''): ?>
    <!-- Article chapter ten -->
    <section>
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->conclusiontitle() ?></h2>
                <?php echo $page->conclusion()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php endif ?>

    <?php if($page->appendix() != ''): ?>
    <!-- Article chapter ten -->
    <section>
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->appendixtitle() ?></h2>
                <?php echo $page->appendix()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php endif ?>
    <?php snippet('article-share') ?>
</article>