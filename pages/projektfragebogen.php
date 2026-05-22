<?php
$pageTitle       = "Projektanfrage – Website erstellen lassen | Nils-Digital";
$pageDescription = "Webprojekt starten mit Nils-Digital – Fragebogen ausfüllen, persönliches Angebot erhalten. Webentwicklung, KI-Automatisierung & Apps deutschlandweit.";
$pageKeywords    = "Projektanfrage, Website erstellen lassen, Webdesign Anfrage, Angebot Webentwicklung, KI-Automatisierung anfragen, Nils-Digital, Nils Nehring, Webdesign Münster";
$pageCanonical   = "https://nils-digital.de/pages/projektfragebogen.php";
$pageOgDescription = "Webprojekt in wenigen Minuten beschreiben – persönliches Angebot für Webentwicklung, KI-Automatisierung und individuelle Apps erhalten.";

$pageSchema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Projektanfrage – Nils-Digital",
  "url": "https://nils-digital.de/pages/projektfragebogen.php",
  "description": "Webprojekt in wenigen Minuten beschreiben und ein persönliches Angebot für Webentwicklung, KI-Automatisierung oder App-Entwicklung erhalten.",
  "provider": {
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
    { "@type": "ListItem", "position": 2, "name": "Projektanfrage", "item": "https://nils-digital.de/pages/projektfragebogen.php" }
  ]
}
</script>';

require_once '../includes/header.php';
?>

  <main>
    <section class="page-hero">
      <h1>Projekt<span>anfrage</span></h1>
      <p>Beschreibe dein Projekt in wenigen Minuten – ich melde mich persönlich und unverbindlich bei dir zurück.</p>
    </section>

    <section class="content-section">
      <p>
        Du hast eine Idee, ein Projekt oder möchtest deine bestehende Website überarbeiten?
        Mit dem folgenden Fragebogen kannst du mir ganz unkompliziert ein paar Infos mitgeben und ich erstelle dir ein individuelles Angebot.
      </p>
      <p>
        <strong>Hinweis:</strong> Das Ausfüllen dauert ca. 3–5 Minuten.
        Ich melde mich anschließend bei dir zurück.
      </p>

      <div class="form-wrapper" style="margin-top:30px;">
        <iframe
          src="https://docs.google.com/forms/d/e/1FAIpQLSd-EFyDKc1vizclZKvuuhmoFJg13Jnbls4BPM_qXBFJZUO8Yw/viewform?embedded=true"
          style="width: 100%; height: 1000px; border: 0; border-radius: 8px; background-color: #ffffff;"
          frameborder="0"
          marginheight="0"
          marginwidth="0">
            Wird geladen…
        </iframe>
      </div>

      <p class="form-footer-hint" style="margin-top:20px;">
        Alternativ kannst du mir auch jederzeit direkt per <a style="text-decoration: underline;" href="mailto:info@nils-digital.de">E-Mail</a> schreiben.
      </p>
      <p class="form-footer-hint">
        Hinweis: Das Formular wird über Google Formulare bereitgestellt.
        Die Angaben werden ausschließlich zur Bearbeitung deiner Anfrage verwendet –
        <a href="/pages/datenschutz.php" target="_blank"><strong>Datenschutzerklärung</strong></a>.
      </p>
    </section>
  </main>

<?php require_once '../includes/footer.php'; ?>
