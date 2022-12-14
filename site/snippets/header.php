<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $page->title() ?> | laxis.me</title>

  <link rel="preload" href="/assets/css/stylesheet.css" as="style" />


  <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="/assets/favicon/site.webmanifest">
  <link rel="mask-icon" href="/assets/favicon/safari-pinned-tab.svg" color="#c80a78">
  <link rel="shortcut icon" href="/assets/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-config" content="/assets/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <?php snippet("meta_information"); ?>
  <?php snippet("robots"); ?>
  <?= css(["assets/css/stylesheet.css", "@auto"]) ?>
  <?= js([
    // 'assets/js/index.js',
    "@auto",
  ], ['async' => true]) ?>

</head>

<body>
