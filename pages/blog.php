<?php
$pageTitle       = "Blog – Webentwicklung & KI-Automatisierung | Nils-Digital";
$pageDescription = "Der Nils-Digital Blog: Praxiswissen zu Webentwicklung, KI-Automatisierung und digitalen Lösungen – für Unternehmen und Selbstständige deutschlandweit.";
$pageKeywords    = "Blog Webentwicklung, KI-Automatisierung Blog, digitale Lösungen, Webdesign Tipps, Nils-Digital, Nils Nehring, Webentwicklung Münsterland";
$pageCanonical   = "https://nils-digital.de/pages/blog.php";

$pageSchema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Blog",
  "name": "Nils-Digital Blog",
  "url": "https://nils-digital.de/pages/blog.php",
  "description": "Praxiswissen zu Webentwicklung, KI-Automatisierung und digitalen Lösungen für Unternehmen und Selbstständige.",
  "publisher": {
    "@type": "Organization",
    "name": "Nils-Digital",
    "url": "https://nils-digital.de"
  },
  "author": {
    "@type": "Person",
    "name": "Nils Nehring"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Startseite", "item": "https://nils-digital.de/" },
    { "@type": "ListItem", "position": 2, "name": "Blog", "item": "https://nils-digital.de/pages/blog.php" }
  ]
}
</script>';

require_once '../includes/header.php';
?>

  <main>
    <section class="page-hero">
      <h1>Der <span>Blog</span></h1>
      <p>Gedanken, Updates und Einblicke aus unserer Arbeit – Webentwicklung, KI-Automatisierung und digitale Lösungen.</p>
    </section>

    <section class="content-section">
      <input type="text" id="blog-search" placeholder="Beiträge durchsuchen…" class="blog-search">
      <div id="blog-categories"></div>
      <div id="blog-container" class="blog-list"></div>
      <div id="pagination" class="pagination"></div>
    </section>
  </main>

  <!-- Modal -->
  <div id="blog-modal" class="modal hidden">
    <div class="modal-content">
      <span id="close-modal" class="close-btn">&times;</span>
      <h2 id="modal-title"></h2>
      <p id="modal-date" class="modal-date"></p>
      <div id="modal-text"></div>
    </div>
  </div>

<script src="/js/blog.js"></script>

<?php require_once '../includes/footer.php'; ?>
