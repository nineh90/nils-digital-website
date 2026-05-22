<?php
$pageTitle       = "Kostenlose Video-Beratung buchen – Nils-Digital";
$pageDescription = "Kostenlose Video-Beratung bei Nils-Digital buchen – unverbindlich, persönlich, ca. 20–30 Minuten. Für Webentwicklung, KI-Automatisierung & digitale Projekte.";
$pageKeywords    = "Video-Beratung buchen, Termin Webentwicklung, kostenlose Beratung, Freelancer Beratung, Nils-Digital, Webdesign Beratung Münster, Webentwicklung Osnabrück";
$pageCanonical   = "https://nils-digital.de/pages/reservierung.php";
$pageOgDescription = "Unverbindliche Video-Beratung bei Nils-Digital – persönlich, transparent, ca. 20–30 Minuten. Webentwicklung, KI & digitale Projekte.";

$pageSchema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Kostenlose Video-Beratung",
  "url": "https://nils-digital.de/pages/reservierung.php",
  "description": "Unverbindliche Video-Beratung für Webentwicklung, KI-Automatisierung und digitale Projekte – ca. 20–30 Minuten, kostenlos.",
  "provider": {
    "@type": "Organization",
    "name": "Nils-Digital",
    "url": "https://nils-digital.de"
  },
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "EUR",
    "availability": "https://schema.org/InStock",
    "description": "Kostenlose Video-Beratung, unverbindlich"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Startseite", "item": "https://nils-digital.de/" },
    { "@type": "ListItem", "position": 2, "name": "Termin buchen", "item": "https://nils-digital.de/pages/reservierung.php" }
  ]
}
</script>';

require_once '../includes/header.php';
?>

  <main>
    <section class="page-hero">
      <h1>Termin <span>buchen</span></h1>
      <p>Wähle dir einen freien Slot für ein unverbindliches Video-Gespräch – persönlich, transparent und ohne Verpflichtung.</p>
    </section>

    <section class="content-section">
      <p>
        Du möchtest dein Projekt, eine Idee oder eine mögliche Zusammenarbeit besprechen?
        Buche dir hier ganz unkompliziert einen freien Termin für ein persönliches Video-Gespräch.
      </p>
      <p>
        <strong>Hinweis:</strong> Das Gespräch ist unverbindlich und dauert ca. 20–30 Minuten.
        Du erhältst automatisch einen Google-Meet-Link per E-Mail.
      </p>

      <div class="form-wrapper" style="margin-top:30px;">
        <iframe
          src="https://calendar.google.com/calendar/appointments/schedules/AcZssZ3pGJltqztrDmyHNKQTCl6r1S2wLVIPXX182MaNogWt4G6ALG7Fm7Olp_AAiO_ckdv4ZGa2bJws?gv=true"
          style="border:0; border-radius: 8px; background-color: #ffffff;"
          width="100%"
          height="700"
          frameborder="0">
        </iframe>
      </div>

      <p class="form-footer-hint" style="margin-top:20px;">
        Alternativ kannst du mir auch jederzeit direkt per <a style="text-decoration: underline;" href="mailto:info@nils-digital.de">E-Mail</a> schreiben.
      </p>
      <p class="form-footer-hint">
        Hinweis: Die Terminbuchung erfolgt über Google Kalender.
        Dabei werden die eingegebenen Daten ausschließlich zur Terminorganisation verwendet –
        <a href="/pages/datenschutz.php" target="_blank"><strong>Datenschutzerklärung</strong></a>.
      </p>
    </section>
  </main>

<?php require_once '../includes/footer.php'; ?>
