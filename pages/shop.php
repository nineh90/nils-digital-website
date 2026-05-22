<?php
$pageTitle       = "Shop – Nils-Digital / SunnyCam";
$pageDescription = "Offizieller nils-digital & SunnyCam Shop 🐾 – kreative Designs, Hoodies, Shirts, Tassen & mehr. Mit Liebe gemacht für alle, die Technik, Tiere & gute Laune verbinden.";
$pageKeywords    = "Shop, SunnyCam, nils digital, Merch, Spreadshop, Hoodies, Shirts, Tassen, Hund, Design, Nils Nehring";
$pageCanonical   = "https://nils-digital.de/pages/shop.php";
$pageOgImage     = "https://nils-digital.de/assets/images/sunny-nils.jpg";
$pageRobots      = "noindex, follow";

require_once '../includes/header.php';
?>

  <main>
    <div id="shop-wrapper">
      <div id="myShop">
        <a href="https://sunnycam.myspreadshop.de">SunnyCam Shop</a>
      </div>
    </div>
  </main>

<script>
  var spread_shop_config = {
    shopName: 'sunnycam',
    locale: 'de_DE',
    prefix: 'https://sunnycam.myspreadshop.de',
    baseId: 'myShop',
    shopContentTarget: 'myShop',
    scrollToTop: false
  };
</script>
<script src="https://sunnycam.myspreadshop.de/shopfiles/shopclient/shopclient.nocache.js"></script>

<?php require_once '../includes/footer.php'; ?>
