<article markdown="1">
    <?php if($page->intro() != ''): ?>
    <!-- Article introduction -->
    <section class="article__intro <?php if($page->introbkcolor() == 'black'): ?>bk-black<?php endif ?><?php if($page->introbkcolor() == 'yellow'): ?>bk-yellow<?php endif ?><?php if($page->introbkcolor() == 'red'): ?>bk-red<?php endif ?><?php if($page->introbkcolor() == 'white'): ?>bk-white<?php endif ?> <?php if($page->introtextcolor() == 'black'): ?>text-black<?php endif ?><?php if($page->introtextcolor() == 'yellow'): ?>text-yellow<?php endif ?><?php if($page->introtextcolor() == 'red'): ?>text-red<?php endif ?><?php if($page->introtextcolor() == 'white'): ?>text-white<?php endif ?>">
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->introtitle() ?></h2>
                <?php echo $page->intro()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php snippet('article-share') ?>
    <?php endif ?>

    <?php if($page->chone() != ''): ?> 
    <!-- Article chapter one -->
    <section class="<?php if($page->chonebkcolor() == 'black'): ?>bk-black<?php endif ?><?php if($page->chonebkcolor() == 'yellow'): ?>bk-yellow<?php endif ?><?php if($page->chonebkcolor() == 'red'): ?>bk-red<?php endif ?><?php if($page->chonebkcolor() == 'white'): ?>bk-white<?php endif ?> <?php if($page->chonetextcolor() == 'black'): ?>text-black<?php endif ?><?php if($page->chonetextcolor() == 'yellow'): ?>text-yellow<?php endif ?><?php if($page->chonetextcolor() == 'red'): ?>text-red<?php endif ?><?php if($page->chonetextcolor() == 'white'): ?>text-white<?php endif ?>">
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->chonetitle() ?></h2>
                <?php echo $page->chone()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php snippet('article-share') ?>
    <?php endif ?>

    <?php if($page->chtwo() != ''): ?>
    <!-- Article chapter two -->
    <section class="<?php if($page->chtwobkcolor() == 'black'): ?>bk-black<?php endif ?><?php if($page->chtwobkcolor() == 'yellow'): ?>bk-yellow<?php endif ?><?php if($page->chtwobkcolor() == 'red'): ?>bk-red<?php endif ?><?php if($page->chtwobkcolor() == 'white'): ?>bk-white<?php endif ?> <?php if($page->chtwotextcolor() == 'black'): ?>text-black<?php endif ?><?php if($page->chtwotextcolor() == 'yellow'): ?>text-yellow<?php endif ?><?php if($page->chtwotextcolor() == 'red'): ?>text-red<?php endif ?><?php if($page->chtwotextcolor() == 'white'): ?>text-white<?php endif ?>">
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->chtwotitle() ?></h2>
                <?php echo $page->chtwo()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php snippet('article-share') ?>
    <?php endif ?>

    <?php if($page->chthree() != ''): ?>
    <!-- Article chapter three -->
    <section class="<?php if($page->chthreebkcolor() == 'black'): ?>bk-black<?php endif ?><?php if($page->chthreebkcolor() == 'yellow'): ?>bk-yellow<?php endif ?><?php if($page->chthreebkcolor() == 'red'): ?>bk-red<?php endif ?><?php if($page->chthreebkcolor() == 'white'): ?>bk-white<?php endif ?> <?php if($page->chthreetextcolor() == 'black'): ?>text-black<?php endif ?><?php if($page->chthreetextcolor() == 'yellow'): ?>text-yellow<?php endif ?><?php if($page->chthreetextcolor() == 'red'): ?>text-red<?php endif ?><?php if($page->chthreetextcolor() == 'white'): ?>text-white<?php endif ?>">
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->chthreetitle() ?></h2>
                <?php echo $page->chthree()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php snippet('article-share') ?>
    <?php endif ?>

    <?php if($page->chfour() != ''): ?>
    <!-- Article chapter four -->
    <section class="<?php if($page->chfourbkcolor() == 'black'): ?>bk-black<?php endif ?><?php if($page->chfourbkcolor() == 'yellow'): ?>bk-yellow<?php endif ?><?php if($page->chfourbkcolor() == 'red'): ?>bk-red<?php endif ?><?php if($page->chfourbkcolor() == 'white'): ?>bk-white<?php endif ?> <?php if($page->chfourtextcolor() == 'black'): ?>text-black<?php endif ?><?php if($page->chfourtextcolor() == 'yellow'): ?>text-yellow<?php endif ?><?php if($page->chfourtextcolor() == 'red'): ?>text-red<?php endif ?><?php if($page->chfourtextcolor() == 'white'): ?>text-white<?php endif ?>">
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->chfourtitle() ?></h2>
                <?php echo $page->chfour()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php snippet('article-share') ?>
    <?php endif ?>

    <?php if($page->chfive() != ''): ?>
    <!-- Article chapter five -->
    <section class="<?php if($page->chfivebkcolor() == 'black'): ?>bk-black<?php endif ?><?php if($page->chfivebkcolor() == 'yellow'): ?>bk-yellow<?php endif ?><?php if($page->chfivebkcolor() == 'red'): ?>bk-red<?php endif ?><?php if($page->chfivebkcolor() == 'white'): ?>bk-white<?php endif ?> <?php if($page->chfivetextcolor() == 'black'): ?>text-black<?php endif ?><?php if($page->chfivetextcolor() == 'yellow'): ?>text-yellow<?php endif ?><?php if($page->chfivetextcolor() == 'red'): ?>text-red<?php endif ?><?php if($page->chfivetextcolor() == 'white'): ?>text-white<?php endif ?>">
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->chfivetitle() ?></h2>
                <?php echo $page->chfive()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php snippet('article-share') ?>
    <?php endif ?>

    <?php if($page->chsix() != ''): ?>
    <!-- Article chapter six -->
    <section class="<?php if($page->chsixbkcolor() == 'black'): ?>bk-black<?php endif ?><?php if($page->chsixbkcolor() == 'yellow'): ?>bk-yellow<?php endif ?><?php if($page->chsixbkcolor() == 'red'): ?>bk-red<?php endif ?><?php if($page->chsixbkcolor() == 'white'): ?>bk-white<?php endif ?> <?php if($page->chsixtextcolor() == 'black'): ?>text-black<?php endif ?><?php if($page->chsixtextcolor() == 'yellow'): ?>text-yellow<?php endif ?><?php if($page->chsixtextcolor() == 'red'): ?>text-red<?php endif ?><?php if($page->chsixtextcolor() == 'white'): ?>text-white<?php endif ?>">
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->chsixtitle() ?></h2>
                <?php echo $page->chsix()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php snippet('article-share') ?>
    <?php endif ?>

    <?php if($page->chseven() != ''): ?>
    <!-- Article chapter seven -->
    <section class="<?php if($page->chsevenbkcolor() == 'black'): ?>bk-black<?php endif ?><?php if($page->chsevenbkcolor() == 'yellow'): ?>bk-yellow<?php endif ?><?php if($page->chsevenbkcolor() == 'red'): ?>bk-red<?php endif ?><?php if($page->chsevenbkcolor() == 'white'): ?>bk-white<?php endif ?> <?php if($page->chseventextcolor() == 'black'): ?>text-black<?php endif ?><?php if($page->chseventextcolor() == 'yellow'): ?>text-yellow<?php endif ?><?php if($page->chseventextcolor() == 'red'): ?>text-red<?php endif ?><?php if($page->chseventextcolor() == 'white'): ?>text-white<?php endif ?>">
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->chseventitle() ?></h2>
                <?php echo $page->chseven()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php snippet('article-share') ?>
    <?php endif ?>

    <?php if($page->cheight() != ''): ?>
    <!-- Article chapter eight -->
    <section class="<?php if($page->cheightbkcolor() == 'black'): ?>bk-black<?php endif ?><?php if($page->cheightbkcolor() == 'yellow'): ?>bk-yellow<?php endif ?><?php if($page->cheightbkcolor() == 'red'): ?>bk-red<?php endif ?><?php if($page->cheightbkcolor() == 'white'): ?>bk-white<?php endif ?> <?php if($page->cheighttextcolor() == 'black'): ?>text-black<?php endif ?><?php if($page->cheighttextcolor() == 'yellow'): ?>text-yellow<?php endif ?><?php if($page->cheighttextcolor() == 'red'): ?>text-red<?php endif ?><?php if($page->cheighttextcolor() == 'white'): ?>text-white<?php endif ?>">
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->cheighttitle() ?></h2>
                <?php echo $page->cheight()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php snippet('article-share') ?>
    <?php endif ?>

    <?php if($page->chnine() != ''): ?>
    <!-- Article chapter nine -->
    <section class="<?php if($page->chninebkcolor() == 'black'): ?>bk-black<?php endif ?><?php if($page->chninebkcolor() == 'yellow'): ?>bk-yellow<?php endif ?><?php if($page->chninebkcolor() == 'red'): ?>bk-red<?php endif ?><?php if($page->chninebkcolor() == 'white'): ?>bk-white<?php endif ?> <?php if($page->chninetextcolor() == 'black'): ?>text-black<?php endif ?><?php if($page->chninetextcolor() == 'yellow'): ?>text-yellow<?php endif ?><?php if($page->chninetextcolor() == 'red'): ?>text-red<?php endif ?><?php if($page->chninetextcolor() == 'white'): ?>text-white<?php endif ?>">
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->chninetitle() ?></h2>
                <?php echo $page->chnine()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php snippet('article-share') ?>
    <?php endif ?>

    <?php if($page->chten() != ''): ?>
    <!-- Article chapter ten -->
    <section class="<?php if($page->chtenbkcolor() == 'black'): ?>bk-black<?php endif ?><?php if($page->chtenbkcolor() == 'yellow'): ?>bk-yellow<?php endif ?><?php if($page->chtenbkcolor() == 'red'): ?>bk-red<?php endif ?><?php if($page->chtenbkcolor() == 'white'): ?>bk-white<?php endif ?> <?php if($page->chtentextcolor() == 'black'): ?>text-black<?php endif ?><?php if($page->chtentextcolor() == 'yellow'): ?>text-yellow<?php endif ?><?php if($page->chtentextcolor() == 'red'): ?>text-red<?php endif ?><?php if($page->chtentextcolor() == 'white'): ?>text-white<?php endif ?>">
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->chtentitle() ?></h2>
                <?php echo $page->chten()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php snippet('article-share') ?>
    <?php endif ?>

    <?php if($page->conclusion() != ''): ?>
    <!-- Article chapter ten -->
    <section class="<?php if($page->conclusionbkcolor() == 'black'): ?>bk-black<?php endif ?><?php if($page->conclusionbkcolor() == 'yellow'): ?>bk-yellow<?php endif ?><?php if($page->conclusionbkcolor() == 'red'): ?>bk-red<?php endif ?><?php if($page->conclusionbkcolor() == 'white'): ?>bk-white<?php endif ?> <?php if($page->conclusiontextcolor() == 'black'): ?>text-black<?php endif ?><?php if($page->conclusiontextcolor() == 'yellow'): ?>text-yellow<?php endif ?><?php if($page->conclusiontextcolor() == 'red'): ?>text-red<?php endif ?><?php if($page->conclusiontextcolor() == 'white'): ?>text-white<?php endif ?>">
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->conclusiontitle() ?></h2>
                <?php echo $page->conclusion()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php snippet('article-share') ?>
    <?php endif ?>

    <?php if($page->appendix() != ''): ?>
    <!-- Article chapter ten -->
    <section class="<?php if($page->appendixbkcolor() == 'black'): ?>bk-black<?php endif ?><?php if($page->appendixbkcolor() == 'yellow'): ?>bk-yellow<?php endif ?><?php if($page->appendixbkcolor() == 'red'): ?>bk-red<?php endif ?><?php if($page->appendixbkcolor() == 'white'): ?>bk-white<?php endif ?> <?php if($page->appendixtextcolor() == 'black'): ?>text-black<?php endif ?><?php if($page->appendixtextcolor() == 'yellow'): ?>text-yellow<?php endif ?><?php if($page->appendixtextcolor() == 'red'): ?>text-red<?php endif ?><?php if($page->appendixtextcolor() == 'white'): ?>text-white<?php endif ?>">
        <div class="article__wrapper">
            <div class="article__content hyphenate">
                <h2><?php echo $page->appendixtitle() ?></h2>
                <?php echo $page->appendix()->kirbytext() ?>
            </div>
        </div> 
    </section>
    <?php endif ?>
</article>