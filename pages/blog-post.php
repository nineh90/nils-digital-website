<?php
// Fallback-Werte – post.js überschreibt Title, Description und OG-Tags dynamisch per ID
$pageTitle       = "Blog – Nils-Digital";
$pageDescription = "Einblicke aus der Arbeit von Nils-Digital – Webentwicklung, KI-Automatisierung und digitale Projekte.";
$pageCanonical   = "https://nils-digital.de/pages/blog.php";
$pageOgType      = "article";

require_once '../includes/header.php';
?>

<main class="post-page-wrap">

  <!-- Zurück-Link -->
  <div class="post-back">
    <a href="/pages/blog.php" class="post-back-link">← Zurück zum Blog</a>
  </div>

  <!-- Karten-Container -->
  <article class="post-card" id="blog-content">

    <!-- Hero-Bild (wird per JS gesetzt wenn vorhanden) -->
    <div class="post-hero-img-wrap" id="post-hero-wrap" style="display:none;">
      <img id="post-hero-img" class="post-hero-img" src="" alt="">
    </div>

    <!-- Post-Header -->
    <div class="post-card-header">
      <span id="post-category" class="category-badge"></span>
      <h1 id="post-title"></h1>
      <p class="blog-date" id="post-date"></p>
      <span id="product-badge" class="product-badge hidden"></span>
    </div>

    <!-- Produkt-Box -->
    <div id="product-box"></div>

    <!-- Post-Content -->
    <div class="post-card-body" id="post-body"></div>

    <!-- Trennlinie -->
    <hr class="post-divider">

    <!-- Zurück-Button unten -->
    <a href="/pages/blog.php" class="btn-sm post-back-btn">← Zurück zum Blog</a>

  </article>

</main>

<script src="/js/post.js"></script>

<?php require_once '../includes/footer.php'; ?>
