<?php
$pageTitle       = "Nils-Digital – KI-Automatisierung, Webentwicklung & Apps";
$pageDescription = "Nils-Digital: Webentwicklung, KI-Automatisierung & individuelle Apps für Unternehmen – deutschlandweit und im Raum Münster, Osnabrück & Ibbenbüren. Persönlich, fair, ohne Agentur.";
$pageKeywords    = "KI Automatisierung, Webentwicklung, App Entwicklung, Webdesign, kleine Unternehmen, Freelancer, individuelle Software, nils-digital, Nils Nehring";
$pageCanonical   = "https://nils-digital.de/";
$pageOgTitle     = "Nils-Digital – KI-Automatisierung, Webentwicklung & Apps";
$pageOgDescription = "Professionelle digitale Lösungen für Unternehmen und Selbstständige – KI-Automatisierung, Webseiten und individuelle Apps. Persönlich, fair und auf dich zugeschnitten.";
$bodyClass       = "home";

$pageSchema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "Nils-Digital",
  "url": "https://nils-digital.de",
  "email": "info@nils-digital.de",
  "description": "KI-Automatisierung, Webentwicklung und individuelle App-Entwicklung für kleine Unternehmen und Selbstständige – deutschlandweit und im Raum Münster, Osnabrück und Ibbenbüren.",
  "founder": { "@type": "Person", "name": "Nils Nehring" },
  "areaServed": [
    { "@type": "Country", "name": "Deutschland" },
    { "@type": "City", "name": "Münster" },
    { "@type": "City", "name": "Osnabrück" },
    { "@type": "City", "name": "Ibbenbüren" },
    { "@type": "City", "name": "Lengerich" },
    { "@type": "City", "name": "Ladbergen" }
  ],
  "serviceType": ["Webdesign", "Webentwicklung", "App-Entwicklung", "KI-Automatisierung"],
  "priceRange": "ab 499 €"
}
</script>';

require_once 'includes/header.php';
?>

  <main>

    <!-- Hero -->
    <section class="hero">
      <canvas id="hero-canvas" aria-hidden="true"></canvas>
      <div class="hero-content">
        <div class="hero-text">
          <span class="hero-label">Digitale Lösungen für Unternehmen & Selbstständige</span>
          <h1 class="glow">Digitale Lösungen,<br>die für dich arbeiten</h1>
          <p class="hero-services-line">KI-Automatisierung &nbsp;·&nbsp; Webentwicklung &nbsp;·&nbsp; Individuelle Apps</p>
          <p class="hero-desc">Wir sind Nils-Digital - bei uns bekommst du persönliche Betreuung statt anonymes Team. Maßgeschneidert, transparent und fair bepreist.</p>
          <div class="buttons">
            <a href="/pages/kontakt.php" class="btn">Kostenlos anfragen</a>
            <a href="/pages/webdesign-leistung.php" class="btn-outline">Leistungen entdecken</a>
          </div>
        </div>
        <div class="hero-image">
          <img src="/assets/images/sunny-nils.jpg" alt="Nils Nehring – Gründer Nils-Digital" />
        </div>
      </div>
    </section>

    <!-- Leistungen -->
    <section class="home-services">
      <div class="home-services-inner">
        <h2>Was ich für dich tue</h2>
        <p class="home-services-sub">Drei Kernbereiche – alles aus einer Hand, alles persönlich betreut.</p>
        <div class="home-services-grid">

          <article class="home-service-card">
            <div class="home-service-icon">🤖</div>
            <h3>KI-Automatisierung</h3>
            <p>Spare Zeit durch intelligente Prozesse. Workflows, die selbst laufen – damit du dich auf dein Kerngeschäft konzentrierst.</p>
            <a href="/pages/webdesign-leistung.php" class="btn-sm">Mehr erfahren →</a>
          </article>

          <article class="home-service-card">
            <div class="home-service-icon">🌐</div>
            <h3>Web- & App-Entwicklung</h3>
            <p>Professionelle Webseiten und individuelle Anwendungen – modern, schnell und suchmaschinenoptimiert.</p>
            <a href="/pages/webdesign-leistung.php" class="btn-sm">Mehr erfahren →</a>
          </article>

          <article class="home-service-card">
            <div class="home-service-icon">🎯</div>
            <h3>Persönliche Lösungen</h3>
            <p>Keine Stangenware – alles individuell auf dein Unternehmen zugeschnitten. Du bekommst mich direkt, nicht ein anonymes Team.</p>
            <a href="/pages/kontakt.php" class="btn-sm">Jetzt anfragen →</a>
          </article>

        </div>
      </div>
    </section>

    <!-- Warum Nils-Digital -->
    <section class="home-usp">
      <div class="home-usp-inner">
        <h2>Warum Nils-Digital?</h2>
        <div class="home-usp-grid">

          <div class="home-usp-item">
            <strong>Persönlich</strong>
            <p>Ein direkter Ansprechpartner – kein Ticket-System, kein anonymes Team.</p>
          </div>

          <div class="home-usp-item">
            <strong>Schnell</strong>
            <p>Kurze Reaktionszeiten und direkte Kommunikation ohne Umwege.</p>
          </div>

          <div class="home-usp-item">
            <strong>Transparent</strong>
            <p>Faire Preise und klare Absprachen – keine versteckten Kosten.</p>
          </div>

          <div class="home-usp-item">
            <strong>Individuell</strong>
            <p>Maßgeschneidert für dein Unternehmen – keine Copy-Paste-Lösungen.</p>
          </div>

        </div>
      </div>
    </section>

    <!-- Referenzen & Projekte -->
    <section class="home-projects">
      <div class="home-projects-header">
        <h2>Referenzen & Projekte</h2>
        <a href="/pages/projekte.php" class="home-projects-all">Alle ansehen →</a>
      </div>

      <div class="home-proj-track-wrap">
        <div class="home-proj-track" id="home-proj-track">

          <article class="home-proj-card">
            <div class="home-proj-img-wrap">
              <img src="/assets/images/lerndex/lerndex_logo.png"
                   alt="Lerndex – KI-Lernumgebung für Kinder"
                   class="home-proj-img home-proj-img--contain"
                   loading="lazy">
            </div>
            <div class="home-proj-body">
              <div class="home-proj-meta">
                <span class="home-proj-type">App / Lernsoftware</span>
                <span class="home-proj-status home-proj-status--beta">Beta</span>
              </div>
              <h3 class="home-proj-title">Lerndex</h3>
              <p class="home-proj-desc">Sichere KI-Lernumgebung für Kinder – pädagogisch geführter KI-Tutor, XP-System und Kinderschutz.</p>
              <a href="https://lerndex.de" target="_blank" rel="noopener noreferrer" class="btn-sm">Zum Projekt →</a>
            </div>
          </article>

          <article class="home-proj-card">
            <div class="home-proj-img-wrap">
              <img src="/assets/images/shop/crazy_family_logo.png"
                   alt="CRAZYFAMILY Community Website"
                   class="home-proj-img home-proj-img--contain"
                   loading="lazy">
            </div>
            <div class="home-proj-body">
              <div class="home-proj-meta">
                <span class="home-proj-type">Kundenprojekt</span>
                <span class="home-proj-status home-proj-status--live">Live</span>
              </div>
              <h3 class="home-proj-title">CRAZYFAMILY</h3>
              <p class="home-proj-desc">Community-Website für Streamer – Design, Sounds, Highlights, Merch und Mod-Bereich.</p>
              <a href="https://crazyfamily.info/" target="_blank" rel="noopener noreferrer" class="btn-sm">crazyfamily.info →</a>
            </div>
          </article>

          <article class="home-proj-card">
            <div class="home-proj-img-wrap">
              <img src="/assets/images/blog/handmade-by-fischer-logo.png"
                   alt="Handmade by Fischer"
                   class="home-proj-img home-proj-img--contain"
                   loading="lazy">
            </div>
            <div class="home-proj-body">
              <div class="home-proj-meta">
                <span class="home-proj-type">Kundenprojekt</span>
                <span class="home-proj-status home-proj-status--live">Live</span>
              </div>
              <h3 class="home-proj-title">Handmade by Fischer</h3>
              <p class="home-proj-desc">Mobile Optimierung – Header, Navigation und Nutzerführung für Smartphones komplett überarbeitet.</p>
              <a href="https://www.handmade-by-fischer.de/" target="_blank" rel="noopener noreferrer" class="btn-sm">Zur Webseite →</a>
            </div>
          </article>

          <article class="home-proj-card">
            <div class="home-proj-img-wrap">
              <img src="/assets/images/sunny-nils.jpg"
                   alt="Nils-Digital – Individuelles Kundenprojekt"
                   class="home-proj-img home-proj-img--cover"
                   loading="lazy">
            </div>
            <div class="home-proj-body">
              <div class="home-proj-meta">
                <span class="home-proj-type">Individualprojekt</span>
                <span class="home-proj-status home-proj-status--live">Live</span>
              </div>
              <h3 class="home-proj-title">Dein Projekt</h3>
              <p class="home-proj-desc">Du hast eine Idee? Lass uns gemeinsam etwas bauen, das wirklich funktioniert – von der Planung bis zum Launch.</p>
              <a href="/pages/kontakt.php" class="btn-sm">Jetzt anfragen →</a>
            </div>
          </article>

        </div>
        <div class="home-proj-dots" id="home-proj-dots"></div>
      </div>
    </section>

    <!-- Kundenstimmen -->
    <section class="reviews">
      <div class="reviews-inner">
        <h2>Was Kunden sagen</h2>
        <div class="google-badge" id="google-badge">
          <span class="google-logo">Google</span>
          <span class="google-stars" id="google-stars"></span>
          <span class="google-rating" id="google-rating"></span>
        </div>
        <div id="review-box" class="review-box">
          <div class="review-stars" id="review-stars"></div>
          <p class="review-text" id="review-text"></p>
          <p class="review-author" id="review-author"></p>
          <p class="review-source" id="review-source"></p>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="home-cta">
      <div class="home-cta-inner">
        <h2>Bereit für dein Projekt?</h2>
        <p>Schreib mir – ich melde mich innerhalb von 24 Stunden. Wir schauen gemeinsam, was ich für dich tun kann.</p>
        <div class="home-cta-buttons">
          <a href="/pages/kontakt.php" class="btn">Kostenloses Erstgespräch</a>
          <a href="/pages/projektfragebogen.php" class="btn-outline">Projektanfrage stellen</a>
        </div>
      </div>
    </section>

  </main>

<script src="/js/reviews.js"></script>
<script src="/js/hero-canvas.js"></script>

<?php require_once 'includes/footer.php'; ?>
