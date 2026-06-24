<?php
/**
 * EZAC Service — Footer Partial
 * Usage: <?php include 'partials/footer.php'; ?>
 * Place just before </body>
 */
$current_year = date('Y');
?>

<!-- ══════════════════════════════════════════
     SITE FOOTER
════════════════════════════════════════════ -->
<footer id="site-footer">

  <!-- TOP SECTION -->
  <div class="footer-top">
    <div class="container">
      <div class="footer-grid">

        <!-- BRAND COLUMN -->
        <div class="footer-brand">
          <a href="/" class="footer-logo" aria-label="EZAC Service Home">
            <div class="logo-icon"><i class="fas fa-bolt"></i></div>
            <span>EZAC<strong>Service</strong></span>
          </a>
          <p>Your trusted home service partner. Expert technicians for AC repair, appliances, electrical & plumbing — available 7 days a week across Delhi NCR.</p>

          <!-- TRUST BADGES -->
          <div class="footer-badges">
            <div class="footer-badge"><i class="fas fa-user-check"></i> Verified Service</div>
            <div class="footer-badge"><i class="fas fa-shield-alt"></i> Insured Work</div>
            <div class="footer-badge"><i class="fas fa-star"></i> 4.8★ Rated</div>
          </div>

          <!-- SOCIAL LINKS -->
          <div class="footer-social">
            <a href="https://facebook.com/ezacservice" class="social-btn" target="_blank" rel="noopener" aria-label="Facebook">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://instagram.com/ezacservice" class="social-btn" target="_blank" rel="noopener" aria-label="Instagram">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="https://youtube.com/@ezacservice" class="social-btn" target="_blank" rel="noopener" aria-label="YouTube">
              <i class="fab fa-youtube"></i>
            </a>
            <a href="https://wa.me/917827464409" class="social-btn social-wa" target="_blank" rel="noopener" aria-label="WhatsApp">
              <i class="fab fa-whatsapp"></i>
            </a>
          </div>
        </div>

        <!-- SERVICES COLUMN -->
        <div class="footer-col">
          <h4 class="footer-col-title">Our Services</h4>
          <ul>
            <li><a href="/service-ac.php">AC Repair</a></li>
            <li><a href="/service-ac.php#installation">AC Installation</a></li>
            <li><a href="/service-ac.php#cleaning">AC Deep Cleaning</a></li>
            <li><a href="/service-ac.php#gas">Gas Refilling</a></li>
          </ul>
        </div>

        <!-- COMPANY COLUMN -->
        <div class="footer-col">
          <h4 class="footer-col-title">Company</h4>
          <ul>
            <li><a href="/about.php">About Us</a></li>
            <li><a href="/book.php">Book a Service</a></li>
            <li><a href="/contact.php">Contact Us</a></li>
          </ul>
        </div>

        <!-- SUPPORT & CONTACT COLUMN -->
        <div class="footer-col">
          <h4 class="footer-col-title">Support</h4>
          <ul class="footer-contact-list">
            <li>
              <i class="fas fa-phone"></i>
              <a href="tel:+917827464409">+91-782-746-4409</a>
            </li>
            <li>
              <i class="fab fa-whatsapp"></i>
              <a href="https://wa.me/917827464409" target="_blank" rel="noopener">WhatsApp Us</a>
            </li>
            <li>
              <i class="fas fa-envelope"></i>
              <a href="mailto:hello@ezacservice.in">hello@ezacservice.in</a>
            </li>
            <li>
              <i class="fas fa-clock"></i>
              <span>7 AM – 10 PM, All 7 Days</span>
            </li>
            <li>
              <i class="fas fa-map-marker-alt"></i>
              <span>Delhi NCR, India</span>
            </li>
          </ul>

          <h4 class="footer-col-title" style="margin-top:24px">Legal</h4>
          <ul>
            <li><a href="/privacy.php">Privacy Policy</a></li>
            <li><a href="/terms.php">Terms of Service</a></li>
            <li><a href="/warranty.php">Warranty Policy</a></li>
            <li><a href="/refund.php">Refund Policy</a></li>
          </ul>
        </div>

      </div><!-- /footer-grid -->
    </div><!-- /container -->
  </div><!-- /footer-top -->

  <!-- BOTTOM BAR -->
  <div class="footer-bottom">
    <div class="container">
      <div class="footer-bottom-inner">
        <p>
          © <?php echo $current_year; ?> EZAC Service. All rights reserved.
          &nbsp;·&nbsp; Powered by <a href="https://ezacservice.in" target="_blank" rel="noopener">EZAC Service</a>
          &nbsp;·&nbsp; Built by <a href="https://optms.co.in" target="_blank" rel="noopener">OPTMS Tech</a>
        </p>
        <div class="footer-bottom-links">
          <a href="/privacy.php">Privacy</a>
          <a href="/terms.php">Terms</a>
          <a href="/sitemap.xml">Sitemap</a>
        </div>
      </div>
    </div>
  </div><!-- /footer-bottom -->

</footer>

<!-- ══════════════════════════════════════════
     FLOATING BUTTONS
════════════════════════════════════════════ -->
<div class="float-btns" aria-label="Quick contact buttons">

  <!-- WhatsApp (desktop + mobile) -->
  <a href="https://wa.me/917827464409?text=Hi+EZAC%2C+I+need+home+service"
     class="float-btn float-wa"
     target="_blank"
     rel="noopener"
     aria-label="Chat on WhatsApp"
     title="Chat on WhatsApp">
    <i class="fab fa-whatsapp" aria-hidden="true"></i>
    <span class="float-wa-label">Chat with us</span>
  </a>

  <!-- Call Now (mobile only — shown via CSS) -->
  <a href="tel:+917827464409"
     class="float-btn float-call"
     aria-label="Call us now"
     title="Call Now">
    <i class="fas fa-phone" aria-hidden="true"></i>
  </a>

  <!-- Back to Top -->
  <button class="float-top"
          id="backToTop"
          aria-label="Back to top"
          title="Back to top"
          style="display:none">
    <i class="fas fa-chevron-up" aria-hidden="true"></i>
  </button>

</div>

<!-- ══════════════════════════════════════════
     GLOBAL SCRIPTS
════════════════════════════════════════════ -->
<script src="/assets/js/main.js"></script>
<script src="/assets/js/faq.js"></script>
<script src="/assets/js/forms.js"></script>

</body>
</html>