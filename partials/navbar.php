<?php
/**
 * EZAC Service — Sticky Navbar Partial
 * Usage: <?php include 'partials/navbar.php'; ?>
 *
 * Variable (set BEFORE including):
 *   $current_page — e.g. 'home', 'services', 'pricing', 'about', 'contact'
 */
$current_page = $current_page ?? '';

$nav_links = [
  'home'     => ['label' => 'Home',     'href' => '/'],
  'services' => ['label' => 'Services', 'href' => '/services.php'],
  'about'    => ['label' => 'About Us', 'href' => '/about.php'],
  'contact'  => ['label' => 'Contact',  'href' => '/contact.php'],
];
?>

<!-- ══════════════════════════════════════════
     STICKY NAVBAR
════════════════════════════════════════════ -->
<header id="navbar">
  <div class="container">
    <div class="nav-inner">

      <!-- LOGO -->
      <a href="/" class="nav-logo" aria-label="EZAC Service Home">
        <div class="logo-icon" aria-hidden="true">
          <i class="fas fa-bolt"></i>
        </div>
        <span class="logo-text">EZAC<strong>Service</strong></span>
      </a>

      <!-- DESKTOP NAV LINKS -->
      <nav class="nav-links" aria-label="Main navigation">
        <?php foreach ($nav_links as $key => $link): ?>
          <a href="<?php echo $link['href']; ?>"
             class="nav-link <?php echo ($current_page === $key) ? 'active' : ''; ?>"
             <?php echo ($current_page === $key) ? 'aria-current="page"' : ''; ?>>
            <?php echo $link['label']; ?>
          </a>
        <?php endforeach; ?>
      </nav>

      <!-- DESKTOP RIGHT ACTIONS -->
      <div class="nav-actions">
        <a href="tel:+917827464409" class="nav-phone" aria-label="Call EZAC Service">
          <i class="fas fa-phone" aria-hidden="true"></i>
          <span>+91-782-746-4409</span>
        </a>
        <a href="/book.php" class="btn btn-primary btn-sm">
          <i class="fas fa-calendar-check" aria-hidden="true"></i>
          Book Now
        </a>
      </div>

      <!-- HAMBURGER (mobile) -->
      <button class="hamburger"
              id="hamburgerBtn"
              aria-label="Open navigation menu"
              aria-expanded="false"
              aria-controls="mobileMenu">
        <span></span>
        <span></span>
        <span></span>
      </button>

    </div><!-- /nav-inner -->
  </div><!-- /container -->
</header>

<!-- ══════════════════════════════════════════
     MOBILE FULL-SCREEN MENU
════════════════════════════════════════════ -->
<div class="mobile-menu" id="mobileMenu" role="dialog" aria-label="Navigation menu" aria-hidden="true">

  <!-- Mobile Menu Header -->
  <div class="mobile-menu-header">
    <a href="/" class="mobile-logo">
      <div class="logo-icon"><i class="fas fa-bolt"></i></div>
      <span>EZAC<strong>Service</strong></span>
    </a>
    <button class="mobile-close"
            id="mobileClose"
            aria-label="Close navigation menu">
      <i class="fas fa-times" aria-hidden="true"></i>
    </button>
  </div>

  <!-- Mobile Nav Links -->
  <nav class="mobile-nav" aria-label="Mobile navigation">
    <a href="/" class="mobile-link <?php echo ($current_page==='home') ? 'active' : ''; ?>">
      <i class="fas fa-home" aria-hidden="true"></i> Home
    </a>
    <button type="button" class="mobile-link mobile-link-toggle <?php echo ($current_page==='services') ? 'active' : ''; ?>" id="servicesToggle" aria-expanded="false" aria-controls="servicesSublinks">
      <i class="fas fa-tools" aria-hidden="true"></i> Services
      <i class="fas fa-chevron-down mobile-toggle-arrow" aria-hidden="true"></i>
    </button>

    <!-- Services Sub-links — hidden by default, toggled by JS -->
    <div class="mobile-sublinks" id="servicesSublinks" style="display:none">
      <a href="/service-ac.php"><i class="fas fa-snowflake"></i> AC Repair &amp; Install</a>
      <a href="/services.php#gas-refill"><i class="fas fa-gas-pump"></i> AC Gas Refill</a>
      <a href="/services.php#ac-service"><i class="fas fa-wind"></i> AC Deep Cleaning</a>
      <a href="/services.php#ac-installation"><i class="fas fa-hammer"></i> AC Installation</a>
    </div>

    <a href="/about.php" class="mobile-link <?php echo ($current_page==='about') ? 'active' : ''; ?>">
      <i class="fas fa-info-circle" aria-hidden="true"></i> About Us
    </a>
    <a href="/contact.php" class="mobile-link <?php echo ($current_page==='contact') ? 'active' : ''; ?>">
      <i class="fas fa-envelope" aria-hidden="true"></i> Contact
    </a>
  </nav>

  <!-- Mobile CTAs -->
  <div class="mobile-cta-area">
    <a href="/book.php" class="btn btn-primary" style="width:100%;justify-content:center">
      <i class="fas fa-calendar-check"></i> Book a Service
    </a>
    <a href="tel:+917827464409" class="btn btn-outline" style="width:100%;justify-content:center">
      <i class="fas fa-phone"></i> Call +91-782-746-4409
    </a>
    <a href="https://wa.me/917827464409?text=Hi+EZAC%2C+I+need+home+service"
       class="btn btn-whatsapp"
       target="_blank" rel="noopener">
      <i class="fab fa-whatsapp"></i> Chat on WhatsApp
    </a>
  </div>

  <!-- Mobile Contact Info -->
  <div class="mobile-contact-info">
    <div><i class="fas fa-clock"></i> Available 7 AM – 10 PM · All 7 Days</div>
    <div><i class="fas fa-map-marker-alt"></i> Serving Delhi NCR</div>
  </div>

</div><!-- /mobile-menu -->

<!-- Overlay backdrop for mobile menu -->
<div class="mobile-overlay" id="mobileOverlay" aria-hidden="true"></div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  var toggle = document.getElementById('servicesToggle');
  var sublinks = document.getElementById('servicesSublinks');
  if (toggle && sublinks) {
    toggle.addEventListener('click', function () {
      var isOpen = sublinks.style.display !== 'none';
      sublinks.style.display = isOpen ? 'none' : 'flex';
      toggle.classList.toggle('open', !isOpen);
      toggle.setAttribute('aria-expanded', String(!isOpen));
    });
  }
});
</script>