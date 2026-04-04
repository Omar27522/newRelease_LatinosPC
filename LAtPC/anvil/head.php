<!DOCTYPE html>
<!--LatinosPC - Tech Support & Computer Services in Pomona, CA-->
<html lang="<?php echo $page->getLang(); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= !empty($page->getTitle()) ? $page->getTitle() : $page->getTitle() ?> </title>
    <meta name="keywords" content="<?=$keywords?>">
    <meta name="description" content="<?=$description?>">
    <meta name="author" content="Miguel Omar, and Available AI Technologies">
    <link rel="stylesheet" href="<?= $page->getDir(); ?>anvil/mainStyle.css">
    <link rel="stylesheet" href="<?= $page->getDir(); ?>anvil/homepage.css">
    <link rel="stylesheet" href="<?= $page->getDir(); ?>anvil/navMenu.css">
    <link rel="shortcut icon" href="<?= $page->getDir(); ?>favicon.ico" />
    <?php
    if (function_exists('cssStyles')) {
        cssStyles();
    }
    ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W6JFHGLW2Y"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-W6JFHGLW2Y');
    </script>
</head>
