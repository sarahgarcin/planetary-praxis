<!DOCTYPE html>
<html lang="<?php echo $kirby->language() ?? 'en' ?>">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <meta name="author" content="<?php echo $site->author()->html() ?>">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

  <?php
    header("Content-type: text/css; charset: UTF-8");
    $mainColor = $site->sitecolor();
  ?>
  <style type="text/css">
    /* HEADER */
    .sign{
      color: <?php echo $mainColor; ?>;
    }
    header nav li.active a{
      color: <?php echo $mainColor; ?>;
    }
    #toggle-menu .span-nochecked:hover, #toggle-menu .span-checked:hover{
      color: <?php echo $mainColor; ?>;
    }
    #toggle-menu:checked + label .span-checked { display: block; border-bottom: 1px solid <?php echo $mainColor; ?>;
    }
    /* FIN HEADER */

    /* MAIN */
    hr{
      border: 1px solid <?php echo $mainColor; ?>;
    }
    a:hover {
      color: <?php echo $mainColor; ?>;
    }
    p a{
      border-bottom: 1px solid <?php echo $mainColor; ?>;
    }
    .featured-img.background{
      background-color: <?php echo $mainColor; ?>;
    }
    .footnote a{
      color: <?php echo $mainColor; ?>;
    }  
    #footnotes .footnotereverse a{
      color: <?php echo $mainColor; ?>;
    }
    #toggle-related .span-nochecked:hover, #toggle-related .span-checked:hover{
      color: <?php echo $mainColor; ?>;
    }
    #toggle-footnotes .span-nochecked:hover, #toggle-footnotes .span-checked:hover{
      color: <?php echo $mainColor; ?>;
    }

  </style>

  <?php echo css('assets/css/flexboxgrid.min.css') ?>
  <?php echo css('assets/css/main.css') ?>
  <?php echo css('assets/css/header.css') ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn’t work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <meta property="og:site_name"    content="<?php echo $site->title()->html() ?>">
  <meta property="og:url"          content="<?php echo $page->url() ?>">
  <meta property="og:title"        content="<?php echo $page->title()->html() ?>">
  <meta property="og:description"  content="<?php e( $page->text()->isNotEmpty(), $page->text()->excerpt(600), $site->description()->excerpt(600)) ?>">
  <meta property="og:type"         content="website">
  <?php if ( $page->hasImages() && $image = $site->images()->sortBy('sort', 'asc')->first() ): ?>
  <meta property="og:image"        content="<?php echo $image->resize(800, 800)->url() ?>">
  <?php endif; ?>

  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:site"        content="<?php echo $page->url() ?>">
  <meta name="twitter:creator"     content="<?php echo $site->author()->html() ?>">
  <meta name="twitter:title"       content="<?php echo $page->title()->html() ?>">
  <meta name="twitter:description" content="<?php e( $page->text()->isNotEmpty(), $page->text()->excerpt(600), $site->description()->excerpt(600)) ?>">
  <?php if ( $page->hasImages() && $image = $page->images()->sortBy('sort', 'asc')->first() ): ?>
  <meta name="twitter:image"       content="<?php echo $image->resize(800, 800)->url() ?>">
  <?php endif; ?>

  <!-- FAVICON -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">




</head>
<body
   data-login="<?php e($kirby->user(),'true', 'false') ?>"
   data-template="<?php echo $page->template() ?>"
   data-intended-template="<?php echo $page->intendedTemplate() ?>">
