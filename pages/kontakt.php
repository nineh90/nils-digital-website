<?php
$pageTitle       = "Kontakt – Webentwicklung anfragen | Nils-Digital";
$pageDescription = "Webentwicklung anfragen bei Nils-Digital – persönlich, direkt und unverbindlich. Für Unternehmen in Münster, Osnabrück, Ibbenbüren und deutschlandweit.";
$pageKeywords    = "Kontakt, Webentwicklung anfragen, Website erstellen lassen, Freelancer kontaktieren, Nils-Digital, Nils Nehring, Webdesign Münster, Webentwicklung Osnabrück";
$pageCanonical   = "https://nils-digital.de/pages/kontakt.php";
$pageOgTitle     = "Kontakt – Webentwicklung anfragen | Nils-Digital";
$pageOgDescription = "Webentwicklung, KI-Automatisierung oder App-Projekt anfragen – persönlich, direkt und unverbindlich. Für Unternehmen deutschlandweit.";

$pageSchema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Kontakt – Nils-Digital",
  "url": "https://nils-digital.de/pages/kontakt.php",
  "description": "Kontaktformular für Webentwicklung, KI-Automatisierung und digitale Projekte – persönlich und unverbindlich.",
  "mainEntity": {
    "@type": "Organization",
    "name": "Nils-Digital",
    "email": "info@nils-digital.de",
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
    { "@type": "ListItem", "position": 2, "name": "Kontakt", "item": "https://nils-digital.de/pages/kontakt.php" }
  ]
}
</script>';

require_once '../includes/header.php';
?>

  <main>
    <section class="page-hero">
      <h1>Schreib <span>uns an</span></h1>
      <p>Du hast ein Projekt, eine Frage oder möchtest einfach Hallo sagen? Wir freuen uns über deine Nachricht.</p>
    </section>

    <section class="content-section">
      <form class="contact-form" id="contactForm">
        <input type="text" name="name" placeholder="Dein Name" required>
        <input type="email" name="email" placeholder="Deine E-Mail" required>
        <input type="text" name="subject" placeholder="Betreff" required>
        <textarea name="message" rows="5" placeholder="Deine Nachricht..." required></textarea>

        <label class="privacy-check">
          <div class="checkbox-wrapper">
            <input type="checkbox" id="privacy" required>
          </div>
          <div class="checkbox-text">
            Ich stimme der Verarbeitung meiner Daten gemäß
            <a href="/pages/datenschutz.php" target="_blank"><strong>Datenschutzerklärung</strong></a> zu.
          </div>
        </label>

        <!-- Honeypot für Anti-Spam -->
        <input type="text" name="website" id="website" style="display:none !important">

        <button type="submit" class="btn">Absenden</button>
      </form>

      <div id="successBox"
           style="display:none; margin-top:20px; padding:15px; background:#1a1f27; border-left:4px solid var(--accent); border-radius:8px;">
        <div class="success-check">
          <svg viewBox="0 0 24 24">
            <polyline points="20 6 9 17 4 12"></polyline>
          </svg>
        </div>
        <strong>Danke! 🎉</strong>
        <p>Deine Nachricht wurde erfolgreich gesendet. Ich melde mich so schnell wie möglich bei dir.</p>
      </div>
    </section>
  </main>

<script src="/js/kontakt.js"></script>

<?php require_once '../includes/footer.php'; ?>
