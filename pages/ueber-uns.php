<?php
$pageTitle       = "Über uns – Nils-Digital";
$pageDescription = "Nils-Digital: Persönliche Webentwicklung & KI-Automatisierung aus dem Münsterland – für Unternehmen in Münster, Osnabrück, Ibbenbüren und deutschlandweit.";
$pageKeywords    = "Nils-Digital, Über uns, Nils Nehring, Webentwicklung Münsterland, KI-Automatisierung, Webdesign Ibbenbüren, Webentwicklung Münster, Freelancer Osnabrück";
$pageCanonical   = "https://nils-digital.de/pages/ueber-uns.php";
$pageOgDescription = "Nils-Digital steht für persönliche Betreuung, individuelle Lösungen und direkte Kommunikation – kein anonymes Unternehmen, keine Zwischenhändler.";
$headExtras      = '<link rel="stylesheet" href="/css/ueber-uns.css">';

$pageSchema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Nils-Digital",
  "url": "https://nils-digital.de",
  "description": "KI-Automatisierung, Webentwicklung und individuelle App-Entwicklung für kleine Unternehmen und Selbstständige.",
  "founder": {
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
    { "@type": "ListItem", "position": 2, "name": "Über uns", "item": "https://nils-digital.de/pages/ueber-uns.php" }
  ]
}
</script>';

require_once '../includes/header.php';
?>

  <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Startseite</a>
    <span>›</span>
    <span aria-current="page">Über uns</span>
  </nav>

  <main>

    <section class="page-hero">
      <h1>Über <span>uns</span></h1>
      <p>Nils-Digital steht für persönliche Betreuung, individuelle Lösungen und direkte Kommunikation – kein anonymes Unternehmen, keine Zwischenhändler.</p>
    </section>

    <section class="ueber-section content-section">

      <div class="ueber-block">
        <h2>Was uns antreibt</h2>
        <p>
          Wir glauben daran, dass digitale Lösungen wirklich für Menschen arbeiten sollten – nicht umgekehrt.
          Ob eine moderne Website, ein automatisierter Workflow oder eine individuelle App: Unser Ziel ist immer,
          dass du als Kunde einen echten Mehrwert bekommst und nicht einfach ein weiteres Produkt von der Stange.
        </p>
        <p>
          Genau deshalb nehmen wir uns die Zeit, dein Projekt, deine Ziele und deine Arbeitsweise wirklich zu verstehen –
          bevor wir anfangen zu entwickeln.
        </p>
      </div>

      <div class="ueber-values" aria-label="Unsere Werte">

        <div class="ueber-value-card">
          <h3>Persönlich</h3>
          <p>Du arbeitest direkt mit uns – keine Ticketsysteme, kein anonymes Support-Team. Feste Ansprechpartner, kurze Wege.</p>
        </div>

        <div class="ueber-value-card">
          <h3>Individuell</h3>
          <p>Kein Copy-Paste aus dem Template-Baukasten. Jede Lösung wird auf deine Anforderungen zugeschnitten.</p>
        </div>

        <div class="ueber-value-card">
          <h3>Transparent</h3>
          <p>Klare Preise, ehrliche Kommunikation. Du weißt jederzeit, woran wir arbeiten und was dich das kostet.</p>
        </div>

        <div class="ueber-value-card">
          <h3>Langfristig</h3>
          <p>Wir denken über das Projekt hinaus. Technische Qualität und Wartbarkeit sind für uns kein Bonus – sie sind Standard.</p>
        </div>

      </div>

      <div class="ueber-block">
        <h2>Wie wir arbeiten</h2>
        <p>
          Ein Projekt bei Nils-Digital beginnt immer mit einem Gespräch – kein Formular, kein Briefing-Template.
          Wir wollen verstehen, was du brauchst und was dich bewegt.
          Dann entwickeln wir gemeinsam eine Lösung, die wirklich passt.
        </p>
        <p>
          Während der Umsetzung bleiben wir in engem Austausch: Du siehst den Fortschritt, kannst Feedback geben
          und weißt immer, wo dein Projekt gerade steht.
          Nach dem Launch lassen wir dich nicht allein – wir sind weiterhin da, wenn etwas geändert oder erweitert werden soll.
        </p>
      </div>

      <div class="ueber-cta">
        <p>Neugierig, wer hinter Nils-Digital steckt?</p>
        <a href="/pages/team.php" class="btn">Das Team kennenlernen</a>
        <a href="/pages/kontakt.php" class="btn btn-outline">Projekt besprechen</a>
      </div>

    </section>

  </main>

<?php require_once '../includes/footer.php'; ?>
