<?php
$pageTitle       = "Das Team – Nils-Digital";
$pageDescription = "Nils Nehring und Kevin – das Team hinter Nils-Digital. Webentwicklung & KI-Automatisierung aus dem Münsterland, persönlich und ohne Zwischenhändler.";
$pageKeywords    = "Nils-Digital Team, Nils Nehring, Kevin, Webentwicklung, KI-Automatisierung, Freelancer Münsterland, Webentwickler Ibbenbüren, Webdesign Tecklenburger Land";
$pageCanonical   = "https://nils-digital.de/pages/team.php";
$pageOgDescription = "Nils Nehring und Kevin – Webentwickler aus dem Münsterland. Persönliche Betreuung, direkte Kommunikation, keine Agentur-Zwischenhändler.";
$headExtras      = '<link rel="stylesheet" href="/css/team.css">';

$pageSchema = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Nils-Digital",
  "url": "https://nils-digital.de",
  "description": "KI-Automatisierung, Webentwicklung und individuelle App-Entwicklung für kleine Unternehmen und Selbstständige.",
  "member": [
    {
      "@type": "Person",
      "name": "Nils Nehring",
      "jobTitle": "Gründer & Lead-Entwickler",
      "url": "https://nils-digital.de/pages/team.php",
      "knowsAbout": ["Webdesign", "HTML", "CSS", "JavaScript", "KI-Automatisierung", "SEO", "Projektleitung"]
    },
    {
      "@type": "Person",
      "name": "Kevin",
      "jobTitle": "Entwickler",
      "knowsAbout": ["Webentwicklung", "JavaScript", "Frontend", "Backend", "Softwareentwicklung"]
    }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Startseite", "item": "https://nils-digital.de/" },
    { "@type": "ListItem", "position": 2, "name": "Das Team", "item": "https://nils-digital.de/pages/team.php" }
  ]
}
</script>';

require_once '../includes/header.php';
?>

  <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Startseite</a>
    <span>›</span>
    <span aria-current="page">Das Team</span>
  </nav>

  <main>

    <section class="page-hero">
      <h1>Das <span>Team</span></h1>
      <p>Wir sind Nils und Kevin – zwei Entwickler mit dem Fokus auf moderne Webseiten, KI-Automatisierung und individuelle digitale Lösungen. Kein anonymes Unternehmen, keine Zwischenhändler – du arbeitest direkt mit uns.</p>
    </section>

    <section class="team-grid" aria-label="Teammitglieder">

      <article class="team-card" aria-label="Nils Nehring">
        <img
          src="/assets/images/sunny-nils.jpg"
          alt="Nils Nehring – Gründer von Nils-Digital"
          class="team-avatar"
          width="90"
          height="90"
          loading="lazy"
        >
        <h2 class="team-name">Nils Nehring</h2>
        <span class="team-role">
          <svg width="12" height="12" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
            <path d="M8 1a3 3 0 1 0 0 6A3 3 0 0 0 8 1zm0 8c-3.3 0-6 1.5-6 3.3V14h12v-1.7C14 10.5 11.3 9 8 9z"/>
          </svg>
          Gründer & Lead-Entwickler
        </span>
        <p class="team-bio">
          Ich bin Nils – Gründer von Nils-Digital und dein direkter Ansprechpartner für Konzept, Umsetzung und Kommunikation.
          Ich entwickle Webseiten, Apps und digitale Lösungen, die nicht nur gut aussehen, sondern echte Ergebnisse liefern.
          Mein Anspruch: Du bekommst mich persönlich – als festen Partner, der dein Projekt von der ersten Idee bis zum Launch begleitet.
        </p>
        <div class="team-skills" aria-label="Kompetenzen">
          <span class="skill-tag">Webdesign</span>
          <span class="skill-tag">Frontend</span>
          <span class="skill-tag">Backend</span>
          <span class="skill-tag">KI-Automatisierung</span>
          <span class="skill-tag">SEO</span>
          <span class="skill-tag">Projektleitung</span>
        </div>
        <div class="team-fact">
          <strong>Arbeitsweise</strong> — Direkte Kommunikation, kurze Wege, transparente Absprachen. Kein Ticket-System, kein anonymes Support-Team.
        </div>
      </article>

      <article class="team-card" aria-label="Kevin">
        <div class="team-avatar-placeholder" aria-hidden="true">K</div>
        <h2 class="team-name">Kevin</h2>
        <span class="team-role">
          <svg width="12" height="12" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
            <path d="M3 2h10a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1zm3 6l-2 2 2 2 1-1-1-1 1-1-1-1zm4 0l-1 1 1 1-1 1 1 1 2-2-2-2z"/>
          </svg>
          Entwickler
        </span>
        <p class="team-bio">
          Kevin ist Entwickler bei Nils-Digital und sorgt dafür, dass alles technisch sauber, stabil und zuverlässig läuft –
          besonders wenn Projekte komplex werden.
          Mit seinem Blick fürs Detail und strukturiertem Code liefert er genau die technische Tiefe, die anspruchsvolle Projekte brauchen.
        </p>
        <div class="team-skills" aria-label="Kompetenzen">
          <span class="skill-tag">JavaScript</span>
          <span class="skill-tag">Frontend</span>
          <span class="skill-tag">Backend</span>
          <span class="skill-tag">Clean Code</span>
          <span class="skill-tag">Problemlösung</span>
        </div>
        <div class="team-fact">
          <strong>Stärke</strong> — Kevin hat in kürzester Zeit über 70 Tickets umgesetzt – präzise, strukturiert und schneller als erwartet.
        </div>
      </article>

    </section>

    <div class="team-divider">
      <p>Wir freuen uns über Projekte jeder Größe – von der digitalen Visitenkarte bis zur komplexen Webanwendung.<br>
      <a href="/pages/kontakt.php">Sprich uns einfach an.</a></p>
    </div>

  </main>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".team-card");
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: "0px 0px -40px 0px" });
    cards.forEach(card => observer.observe(card));
  });
</script>

<?php require_once '../includes/footer.php'; ?>
