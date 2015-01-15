<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- Tyoekit fonts -->
    <script src="//use.typekit.net/ldh7zej.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    <!-- Page title -->
    <?php if($page->template() != 'home'): ?>
        <title><?php echo $page->title()->html() ?> – <?php echo $site->title()->html() ?></title>
    <?php else: ?>
        <title><?php echo $site->title()->html() ?></title>
    <?php endif ?>

    <!-- Page description -->
    <?php if($page->template() != 'home'): ?>
        <meta name="description" content="<?php echo $page->description()->html() ?>">
    <?php else: ?>
        <meta name="description" content="<?php echo $site->description()->html() ?>">
    <?php endif ?>

    <!-- Page keywords -->
    <?php if($page->template() != 'home'): ?>
        <meta name="keywords" content="<?php echo $page->keywords()->html() ?>">
    <?php else: ?>
        <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    <?php endif ?>

    <!-- Favicon and Touch icons -->
    <link rel="icon" type="image/png" href="#">
    <link href="#" rel="apple-touch-icon" />
    <link href="#" rel="apple-touch-icon" sizes="76x76" />
    <link href="#" rel="apple-touch-icon" sizes="120x120" />
    <link href="#" rel="apple-touch-icon" sizes="152x152" />

    <!-- Opengraph data -->
    <?php if($page->template() != 'home'): ?>
        <meta property="og:title" content="<?php echo $page->title()->html() ?> – <?php echo $site->title()->html() ?>" />
    <?php else: ?>
        <meta property="og:title" content="<?php echo $site->title()->html() ?>" />
    <?php endif ?>

    <?php if($page->template() != 'home'): ?>
        <meta property="og:description" content="<?php echo $page->description()->html() ?>">
    <?php else: ?>
        <meta property="og:description" content="<?php echo $site->description()->html() ?>">
    <?php endif ?>

    <meta property="og:url" content="<?php echo $page->url() ?>" />
  
    <?php if($page->template() == 'article'): ?>
        <meta property="og:image" content="<?php foreach($page->images() as $image): ?><?php if($image->cover() != ''): ?><?php echo $image->url() ?><?php endif ?><?php endforeach?>" />
    <?php else: ?>
        <meta property="og:image" content="#" />
    <?php endif ?>

    <!-- Stylesheets -->
    <?php echo css('assets/styles/main.min.css') ?>
</head>
<body id="main" class="m-scene">
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php snippet('analyticstracking') ?>
    <header class="header">
        <div class="header__logo">
            <a href="<?php echo $site->url() ?>/">
                By <span>design</span> or by <span>disaster</span>
            </a>
        </div>

        <div class="header__menu">
            <span></span>
        </div>
    </header>

    <?php snippet('navigation') ?>