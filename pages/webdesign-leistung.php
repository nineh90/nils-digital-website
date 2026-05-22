<?php
$pageTitle       = "Webentwicklung, KI & Apps – Leistungen & Preise | Nils-Digital";
$pageDescription = "Professionelle Webentwicklung, KI-Automatisierung & individuelle Apps – transparent bepreist, persönlich betreut, ohne Agenturaufschlag. Für Unternehmen in Münster, Osnabrück, Ibbenbüren & deutschlandweit.";
$pageKeywords    = "Webentwicklung Preise, Webdesign Leistungen, KI-Automatisierung, Website erstellen lassen, Freelancer Webentwicklung, Webdesign Münster, Webentwicklung Osnabrück, Webdesign Ibbenbüren, Webdesign Münsterland, Nils-Digital";
$pageCanonical   = "https://nils-digital.de/pages/webdesign-leistung.php";
$pageOgTitle     = "Webentwicklung, KI & Apps – Leistungen & Preise | Nils-Digital";
$pageOgDescription = "Professionelle Webentwicklung, KI-Automatisierung & individuelle Apps – transparent bepreist, persönlich betreut, ohne Agenturaufschlag. Deutschlandweit und im Raum Münster & Osnabrück.";

$pageSchema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Webdesign & Webentwicklung",
  "url": "https://nils-digital.de/pages/webdesign-leistung.php",
  "description": "Professionelle Websites, Shops und individuelle Webanwendungen – modular aufgebaut, fair bepreist und persönlich betreut.",
  "provider": {
    "@type": "Organization",
    "name": "Nils-Digital",
    "url": "https://nils-digital.de",
    "email": "info@nils-digital.de"
  },
  "areaServed": [
    { "@type": "Country", "name": "Deutschland" },
    { "@type": "City", "name": "Münster" },
    { "@type": "City", "name": "Osnabrück" },
    { "@type": "City", "name": "Ibbenbüren" },
    { "@type": "City", "name": "Lengerich" },
    { "@type": "City", "name": "Ladbergen" }
  ],
  "offers": {
    "@type": "AggregateOffer",
    "priceCurrency": "EUR",
    "lowPrice": "499",
    "highPrice": "2999",
    "description": "Webentwicklung, KI-Automatisierung & individuelle Apps – transparente Festpreise"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Startseite", "item": "https://nils-digital.de/" },
    { "@type": "ListItem", "position": 2, "name": "Leistungen & Preise", "item": "https://nils-digital.de/pages/webdesign-leistung.php" }
  ]
}
</script>';

require_once '../includes/header.php';
?>

  <main>
    <section class="page-hero">
      <h1>Leistungen & <span>Preise</span></h1>
      <p>Moderne Webseiten, Shops, Blogsysteme & technischer Support – flexibel, transparent und fair bepreist. Alle Leistungen sind modular aufgebaut.</p>
    </section>

    <section class="content-section">
      <p>
        Zusätzlich biete ich Hosting- und Pflegepakete an. Domain und Hosting werden dabei
        <strong>im Auftrag des Kunden</strong> bei einem Anbieter wie z. B. STRATO gebucht.
        Der Kunde bleibt jederzeit <strong>rechtlicher Inhaber aller Zugänge</strong>.
        Ich übernehme die technische Einrichtung, Verwaltung und laufende Pflege –
        damit du dich um nichts kümmern musst.
      </p>

      <p class="service-hint">
        <strong>Tipp:</strong> Mit einem Pflegeabo bleibt deine Website technisch aktuell
        und du hast jederzeit einen festen Ansprechpartner für Änderungen,
        Optimierungen oder Fragen.
      </p>

      <div id="service-container" class="service-grid"></div>
    </section>
  </main>

<script src="/js/service-loader.js"></script>
<script src="/js/service-schema.js"></script>

<?php require_once '../includes/footer.php'; ?>
