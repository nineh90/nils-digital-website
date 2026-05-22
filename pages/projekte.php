<?php
$pageTitle       = "Referenzen & Projekte – Webentwicklung | Nils-Digital";
$pageDescription = "Abgeschlossene Web- und App-Projekte von Nils-Digital – Referenzen aus Webentwicklung, KI-Automatisierung und individuellem Softwarebau für Unternehmen.";
$pageKeywords    = "Webentwicklung Referenzen, Webdesign Projekte, App-Entwicklung, KI-Automatisierung Projekte, Nils-Digital, Nils Nehring, Webentwicklung Münster, Webdesign Münsterland";
$pageCanonical   = "https://nils-digital.de/pages/projekte.php";
$pageOgTitle     = "Referenzen & Projekte – Nils-Digital";
$pageOgDescription = "Abgeschlossene Web- und App-Projekte von Nils-Digital – Webentwicklung, KI-Automatisierung und individuelle digitale Lösungen für Unternehmen.";

$pageSchema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "name": "Referenzen & Projekte – Nils-Digital",
  "url": "https://nils-digital.de/pages/projekte.php",
  "description": "Abgeschlossene Web- und App-Projekte von Nils-Digital – Webentwicklung, KI-Automatisierung und individuelle digitale Lösungen.",
  "publisher": {
    "@type": "Organization",
    "name": "Nils-Digital",
    "url": "https://nils-digital.de"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Startseite", "item": "https://nils-digital.de/" },
    { "@type": "ListItem", "position": 2, "name": "Projekte", "item": "https://nils-digital.de/pages/projekte.php" }
  ]
}
</script>';

require_once '../includes/header.php';
?>

  <main>
    <section class="page-hero">
      <h1>Unsere <span>Projekte</span></h1>
      <p>Eine Auswahl an Projekten, die wir mit Technik, Kreativität und Herzblut umgesetzt haben.</p>
    </section>

    <section class="content-section">
      <div id="project-container" class="project-grid"></div>
    </section>
  </main>

<script src="/js/projects.js"></script>

<?php require_once '../includes/footer.php'; ?>
