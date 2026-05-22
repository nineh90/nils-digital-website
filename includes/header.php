<?php
// Standardwerte für optionale Variablen
$pageOgTitle       = $pageOgTitle       ?? $pageTitle;
$pageOgDescription = $pageOgDescription ?? $pageDescription;
$pageOgUrl         = $pageOgUrl         ?? $pageCanonical;
$pageOgType        = $pageOgType        ?? 'website';
$pageOgImage       = $pageOgImage       ?? 'https://nils-digital.de/assets/images/logo/logo.png';
$pageRobots        = $pageRobots        ?? 'index, follow';
$bodyClass         = $bodyClass         ?? '';
$pageKeywords      = $pageKeywords      ?? '';
$pageSchema        = $pageSchema        ?? '';
$headExtras        = $headExtras        ?? '';
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title id="seo-title"><?= htmlspecialchars($pageTitle) ?></title>
  <meta id="seo-description" name="description" content="<?= htmlspecialchars($pageDescription) ?>">
  <?php if ($pageKeywords): ?>
  <meta name="keywords" content="<?= htmlspecialchars($pageKeywords) ?>">
  <?php endif; ?>
  <meta name="author" content="Nils Nehring">
  <link id="seo-canonical" rel="canonical" href="<?= htmlspecialchars($pageCanonical) ?>">

  <!-- Open Graph -->
  <meta id="og-title" property="og:title" content="<?= htmlspecialchars($pageOgTitle) ?>">
  <meta id="og-description" property="og:description" content="<?= htmlspecialchars($pageOgDescription) ?>">
  <meta id="og-image" property="og:image" content="<?= htmlspecialchars($pageOgImage) ?>">
  <meta id="og-url" property="og:url" content="<?= htmlspecialchars($pageOgUrl) ?>">
  <meta property="og:type" content="<?= htmlspecialchars($pageOgType) ?>">
  <meta property="og:locale" content="de_DE">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta id="tw-title" name="twitter:title" content="<?= htmlspecialchars($pageOgTitle) ?>">
  <meta id="tw-description" name="twitter:description" content="<?= htmlspecialchars($pageOgDescription) ?>">
  <meta id="tw-image" name="twitter:image" content="<?= htmlspecialchars($pageOgImage) ?>">

  <!-- Favicon & App Icons -->
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#0d1117">

  <!-- Sicherheit & Indexierung -->
  <meta name="robots" content="<?= htmlspecialchars($pageRobots) ?>">
  <meta name="referrer" content="strict-origin-when-cross-origin">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Styles & Fonts -->
  <link rel="stylesheet" href="/css/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">

  <?php if ($pageSchema): echo $pageSchema; endif; ?>
  <!-- Platzhalter für dynamisches JSON-LD (z. B. blog-post.js) -->
  <script id="jsonld" type="application/ld+json"></script>
  <?php if ($headExtras): echo $headExtras; endif; ?>
</head>

<body<?= $bodyClass ? ' class="' . htmlspecialchars($bodyClass) . '"' : '' ?>>

<header class="header">
  <a class="logo" href="/"><img class="logo-img" src="/assets/images/logo/logo.png" alt="Nils-Digital Logo">&nbsp;Nils-Digital</a>
  <div class="menu-toggle" id="menu-toggle">
    <span></span><span></span><span></span>
  </div>

  <nav id="nav-menu" class="main-nav">
    <ul>
      <li><a class="nav-link" href="/">Startseite</a></li>
      <li><a class="nav-link" href="/pages/webdesign-leistung.php">Leistungen</a></li>
      <li><a class="nav-link" href="/pages/projekte.php">Projekte</a></li>
      <li><a class="nav-link" href="/pages/team.php">Das Team</a></li>
      <li><a class="nav-link" href="/pages/ueber-uns.php">Über uns</a></li>
      <li><a class="nav-link" href="/pages/blog.php">Blog</a></li>
      <li class="nav-item has-dropdown">
        <span class="nav-link dropdown-toggle">
          Kontakt
          <span class="dropdown-arrow"></span>
        </span>
        <ul class="dropdown">
          <li><a class="nav-link" href="/pages/kontakt.php">Kontaktformular</a></li>
          <li><a class="nav-link" href="/pages/projektfragebogen.php">Projektanfrage</a></li>
          <li><a class="nav-link" href="/pages/reservierung.php">Termine</a></li>
        </ul>
      </li>
    </ul>
  </nav>
</header>
