
<footer class="footer">
  <div id="cookie-banner" class="cookie-banner hidden">
    <div class="cookie-box">
      <h3>Cookies 🍪</h3>
      <p>
        Du liebst Cookies? Ich auch 😄<br>
        Hier gibt's allerdings nur die digitalen!<br>
        Ich nutze sie, um meine Seite für dich zu verbessern.<br>
        Google Analytics wird nur aktiviert, wenn du zustimmst –<br>
        und du kannst deine Entscheidung jederzeit im Footer ändern.
      </p>
      <div class="cookie-buttons">
        <button id="cookie-accept" class="btn">Akzeptieren</button>
        <button id="cookie-decline" class="btn-outline">Ablehnen</button>
      </div>
    </div>
  </div>

  <p>© 2026 Nils-Digital | Nils Nehring</p>

  <p>
    <a href="/">Startseite</a> •
    <a href="/pages/kontakt.php">Kontakt</a> •
    <a href="/pages/datenschutz.php">Datenschutz</a> •
    <a href="/pages/agb.php">AGB</a> •
    <a href="/pages/impressum.php">Impressum</a>
  </p>

  <p>
    <a href="https://www.tiktok.com/@sunnycam28" target="_blank" rel="noopener">TikTok</a> |
    <a href="https://www.facebook.com/nils.nehring" target="_blank" rel="noopener">Facebook</a> |
    <a href="https://github.com/" target="_blank" rel="noopener">GitHub</a>
  </p>

  <div class="cookie-change">
    <button id="cookie-settings" class="btn-link">Cookie-Einstellungen</button>
  </div>
</footer>

<script src="/js/main.js"></script>
<script>
  // main.js ist geladen → headerLoaded feuern (Hamburger-Menü, Dropdown)
  document.dispatchEvent(new Event("headerLoaded"));
  // Cookie-Banner starten (Footer ist bereits im DOM)
  if (typeof initCookieBanner === "function") initCookieBanner();
</script>
</body>
</html>
