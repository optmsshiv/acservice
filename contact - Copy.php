<?php
/* ============================================================
   EZAC SERVICE — CONTACT PAGE
   contact.php
   ============================================================ */

$current_page     = 'contact';
$page_title       = 'Contact Us — EZAC Service | AC Repair & Service in Bihar';
$page_description = 'Contact EZAC Service for AC repair, installation, gas refilling and maintenance. Call, WhatsApp or fill our form. Available 7 AM to 10 PM, all 7 days.';
$page_canonical   = 'https://ezacservice.in/contact.php';

include 'partials/head.php';
include 'partials/navbar.php';
?>

<!-- ── BREADCRUMB ── -->
<div class="breadcrumb-bar">
  <div class="container">
    <div class="breadcrumb">
      <a href="/">Home</a>
      <span class="sep">›</span>
      <span class="current">Contact Us</span>
    </div>
  </div>
</div>

<!-- ── PAGE HERO ── -->
<div class="page-hero">
  <div class="container">
    <h1>Get in Touch</h1>
    <p>
      Call, WhatsApp, or fill the form — we respond within 30 minutes
      during service hours (7 AM – 10 PM, all 7 days).
    </p>
  </div>
</div>

<!-- ══════════════════════════════════════════
     CONTACT QUICK LINKS
════════════════════════════════════════════ -->
<section class="section-sm section-gray">
  <div class="container">
    <div class="contact-quick-grid">

      <a href="tel:+918003001234" class="contact-quick-card blue">
        <div class="cq-icon"><i class="fas fa-phone"></i></div>
        <div class="cq-text">
          <strong>Call Us</strong>
          <span>+91-800-300-1234</span>
          <small>7 AM – 10 PM · All Days</small>
        </div>
        <i class="fas fa-arrow-right cq-arrow"></i>
      </a>

      <a href="https://wa.me/918003001234?text=Hi%20EZAC%2C%20I%20need%20AC%20service" class="contact-quick-card green"
        target="_blank" rel="noopener">
        <div class="cq-icon"><i class="fab fa-whatsapp"></i></div>
        <div class="cq-text">
          <strong>WhatsApp</strong>
          <span>Chat Instantly</span>
          <small>Typical reply in &lt; 5 minutes</small>
        </div>
        <i class="fas fa-arrow-right cq-arrow"></i>
      </a>

      <a href="mailto:hello@ezacservice.in" class="contact-quick-card amber">
        <div class="cq-icon"><i class="fas fa-envelope"></i></div>
        <div class="cq-text">
          <strong>Email Us</strong>
          <span>hello@ezacservice.in</span>
          <small>Reply within 4 hours</small>
        </div>
        <i class="fas fa-arrow-right cq-arrow"></i>
      </a>

      <a href="/book.php" class="contact-quick-card dark">
        <div class="cq-icon"><i class="fas fa-calendar-check"></i></div>
        <div class="cq-text">
          <strong>Book Online</strong>
          <span>Instant Confirmation</span>
          <small>Choose date &amp; time slot</small>
        </div>
        <i class="fas fa-arrow-right cq-arrow"></i>
      </a>

    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     MAIN CONTACT SECTION
════════════════════════════════════════════ -->
<section class="section">
  <div class="container">
    <div class="contact-grid">

      <!-- LEFT: Contact Info -->
      <div class="contact-info">

        <h2 style="font-size:var(--text-2xl);font-weight:800;margin-bottom:var(--space-8);color:var(--gray-900)">
          Contact Information
        </h2>
        <p style="color:var(--gray-600);margin-bottom:var(--space-32);font-size:var(--text-base)">
          Reach us through any channel below. For fastest response,
          call or WhatsApp us directly.
        </p>

        <!-- Info Items -->
        <div class="contact-info-item">
          <div class="contact-info-icon" style="background:var(--blue)">
            <i class="fas fa-phone"></i>
          </div>
          <div class="contact-info-text">
            <h4>Phone</h4>
            <a href="tel:+918003001234">+91-800-300-1234</a>
            <p>7 AM – 10 PM · All 7 Days</p>
          </div>
        </div>

        <div class="contact-info-item">
          <div class="contact-info-icon" style="background:#25D366">
            <i class="fab fa-whatsapp"></i>
          </div>
          <div class="contact-info-text">
            <h4>WhatsApp</h4>
            <a href="https://wa.me/918003001234" target="_blank" rel="noopener"
              style="color:var(--green-dark)">+91-800-300-1234</a>
            <p>Send us photos of your AC issue for faster help</p>
          </div>
        </div>

        <div class="contact-info-item">
          <div class="contact-info-icon" style="background:var(--amber);color:var(--gray-900)">
            <i class="fas fa-envelope"></i>
          </div>
          <div class="contact-info-text">
            <h4>Email</h4>
            <a href="mailto:hello@ezacservice.in" style="color:var(--gray-700)">hello@ezacservice.in</a>
            <p>For quotes, AMC plans, or business enquiries</p>
          </div>
        </div>

        <div class="contact-info-item">
          <div class="contact-info-icon" style="background:var(--red)">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <div class="contact-info-text">
            <h4>Head Office</h4>
            <span style="font-size:var(--text-base);font-weight:600;color:var(--gray-800)">
              Station Road, Madhepura<br>Bihar — 852113
            </span>
            <p>By appointment only · Not a walk-in service centre</p>
          </div>
        </div>

        <!-- Office Hours -->
        <div class="office-hours-box">
          <h4><i class="fas fa-clock" style="color:var(--blue)"></i> Service Hours</h4>
          <div class="hours-grid">
            <div class="hours-row">
              <span class="hours-day">Monday – Friday</span>
              <span class="hours-time">7:00 AM – 10:00 PM</span>
            </div>
            <div class="hours-row">
              <span class="hours-day">Saturday</span>
              <span class="hours-time">7:00 AM – 10:00 PM</span>
            </div>
            <div class="hours-row">
              <span class="hours-day">Sunday</span>
              <span class="hours-time">8:00 AM – 8:00 PM</span>
            </div>
            <div class="hours-row">
              <span class="hours-day">Public Holidays</span>
              <span class="hours-time">9:00 AM – 6:00 PM</span>
            </div>
          </div>
          <div class="hours-note">
            <i class="fas fa-info-circle"></i>
            Emergency AC repair may be available outside these hours.
            Call to check availability.
          </div>
        </div>

        <!-- Social -->
        <div class="contact-social">
          <span>Follow us:</span>
          <a href="https://facebook.com/ezacservice" target="_blank" rel="noopener" class="social-btn"
            aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="https://instagram.com/ezacservice" target="_blank" rel="noopener" class="social-btn"
            aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="https://youtube.com/@ezacservice" target="_blank" rel="noopener" class="social-btn"
            aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        </div>

      </div>

      <!-- RIGHT: Contact Form -->
      <div class="form-card">

        <!-- Success State (hidden by default) -->
        <div class="form-success" id="contact-success">
          <i class="fas fa-check-circle"></i>
          <h3>Message Sent Successfully!</h3>
          <p>
            Thank you for reaching out. Our team will get back to you
            within <strong>4 hours</strong>.<br><br>
            For urgent service needs, call us directly at
            <strong><a href="tel:+918003001234">+91-800-300-1234</a></strong>.
          </p>
          <a href="/" class="btn btn-primary" style="margin-top:var(--space-20)">
            Back to Home
          </a>
        </div>

        <!-- Contact Form -->
        <form id="contact-form-el" novalidate>

          <div class="form-card-title">Send Us a Message</div>
          <div class="form-card-subtitle">
            We reply to every message — usually within 4 hours.
          </div>

          <!-- Name + Phone -->
          <div class="form-row">
            <div class="form-group">
              <label class="form-label-required" for="c-name">Your Name</label>
              <input type="text" id="c-name" name="name" placeholder="Rajesh Kumar" autocomplete="name">
            </div>
            <div class="form-group">
              <label class="form-label-required" for="c-phone">Mobile Number</label>
              <div class="input-group">
                <i class="fas fa-phone input-icon"></i>
                <input type="tel" id="c-phone" name="phone" placeholder="98XXXXXXXX" maxlength="10" autocomplete="tel">
              </div>
            </div>
          </div>

          <!-- Email -->
          <div class="form-group">
            <label class="form-label-optional" for="c-email">Email Address</label>
            <div class="input-group">
              <i class="fas fa-envelope input-icon"></i>
              <input type="email" id="c-email" name="email" placeholder="you@email.com" autocomplete="email">
            </div>
          </div>

          <!-- Subject -->
          <div class="form-group">
            <label class="form-label-required" for="c-subject">Subject</label>
            <select id="c-subject" name="subject">
              <option value="">— Select a topic —</option>
              <optgroup label="Service Related">
                <option value="ac-repair">AC Repair Enquiry</option>
                <option value="ac-install">AC Installation Enquiry</option>
                <option value="ac-service">AC Servicing Enquiry</option>
                <option value="gas-refill">Gas Refilling Enquiry</option>
              </optgroup>
              <optgroup label="Other">
                <option value="pricing">Pricing / AMC Plan</option>
                <option value="complaint">Complaint / Feedback</option>
                <option value="partnership">Business Partnership</option>
                <option value="other">Other</option>
              </optgroup>
            </select>
          </div>

          <!-- City -->
          <div class="form-group">
            <label for="c-city">Your City</label>
            <div class="input-group">
              <i class="fas fa-map-marker-alt input-icon"></i>
              <input type="text" id="c-city" name="city" placeholder="e.g. Patna, Madhepura, Bhagalpur">
            </div>
          </div>

          <!-- Message -->
          <div class="form-group">
            <label for="c-msg">Your Message</label>
            <textarea id="c-msg" name="message" rows="5"
              placeholder="Describe your AC issue, service requirement, or question in detail..."></textarea>
          </div>

          <!-- Privacy note -->
          <div class="form-info-box" style="margin-bottom:var(--space-20)">
            <i class="fas fa-lock"></i>
            <p>
              Your information is safe with us. We never share your details
              with third parties. See our
              <a href="/privacy.php" style="color:var(--blue)">Privacy Policy</a>.
            </p>
          </div>

          <button type="submit" class="btn btn-primary btn-lg btn-block">
            <i class="fas fa-paper-plane"></i> Send Message
          </button>

        </form>

      </div><!-- /form-card -->

    </div><!-- /contact-grid -->
  </div>
</section>

<!-- ══════════════════════════════════════════
     MAP SECTION
════════════════════════════════════════════ -->
<section class="section-sm section-gray">
  <div class="container">
    <div class="section-header center" style="margin-bottom:var(--space-32)">
      <div class="section-label">Find Us</div>
      <h2 class="section-title" style="font-size:var(--text-2xl)">Our Head Office Location</h2>
    </div>
    <div class="map-wrapper">
      <!-- Replace src with actual Google Maps embed URL -->
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.7!2d86.7926!3d25.9253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDU1JzMxLjEiTiA4NsKwNDcnMzMuNCJF!5e0!3m2!1sen!2sin!4v1234567890"
        width="100%" height="380" style="border:0" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade" title="EZAC Service Head Office Location">
      </iframe>
    </div>
    <div class="map-address">
      <i class="fas fa-map-marker-alt" style="color:var(--blue)"></i>
      <span>Station Road, Madhepura, Bihar — 852113</span>
      <a href="https://maps.google.com/?q=Madhepura+Bihar" target="_blank" rel="noopener"
        class="btn btn-outline btn-sm">
        <i class="fas fa-directions"></i> Get Directions
      </a>
    </div>
  </div>
</section>

<!-- ── CTA BANNER ── -->
<section class="section-sm">
  <div class="container">
    <div class="cta-banner">
      <div>
        <h2>Need Immediate AC Help?</h2>
        <p>Don't wait for a reply — call us now for same-day service.</p>
      </div>
      <div class="cta-banner-actions">
        <a href="tel:+918003001234" class="btn btn-white btn-lg">
          <i class="fas fa-phone"></i> Call +91-800-300-1234
        </a>
        <a href="https://wa.me/918003001234" target="_blank" rel="noopener" class="btn btn-white-outline btn-lg">
          <i class="fab fa-whatsapp"></i> WhatsApp Us
        </a>
      </div>
    </div>
  </div>
</section>

<?php include 'partials/footer.php'; ?>

<style>
  /* ── CONTACT QUICK CARDS ── */
  .contact-quick-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: var(--space-16);
  }

  .contact-quick-card {
    display: flex;
    align-items: center;
    gap: var(--space-14, 14px);
    background: var(--white);
    border: 2px solid var(--gray-200);
    border-radius: var(--radius-lg);
    padding: var(--space-20);
    text-decoration: none;
    transition: var(--transition);
    position: relative;
  }

  .contact-quick-card:hover {
    transform: translateY(-3px);
    box-shadow: var(--shadow-md);
  }

  .contact-quick-card.blue:hover {
    border-color: var(--blue);
  }

  .contact-quick-card.green:hover {
    border-color: var(--green);
  }

  .contact-quick-card.amber:hover {
    border-color: var(--amber);
  }

  .contact-quick-card.dark:hover {
    border-color: var(--gray-800);
  }

  .cq-icon {
    width: 44px;
    height: 44px;
    min-width: 44px;
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    flex-shrink: 0;
  }

  .contact-quick-card.blue .cq-icon {
    background: var(--blue-light);
    color: var(--blue);
  }

  .contact-quick-card.green .cq-icon {
    background: var(--green-light);
    color: var(--green-dark);
  }

  .contact-quick-card.amber .cq-icon {
    background: var(--amber-light);
    color: var(--amber-dark);
  }

  .contact-quick-card.dark .cq-icon {
    background: var(--gray-100);
    color: var(--gray-800);
  }

  .contact-quick-card:hover .cq-icon {
    color: #fff;
  }

  .contact-quick-card.blue:hover .cq-icon {
    background: var(--blue);
  }

  .contact-quick-card.green:hover .cq-icon {
    background: var(--green);
  }

  .contact-quick-card.amber:hover .cq-icon {
    background: var(--amber);
    color: var(--gray-900);
  }

  .contact-quick-card.dark:hover .cq-icon {
    background: var(--gray-800);
  }

  .cq-text {
    flex: 1;
  }

  .cq-text strong {
    display: block;
    font-size: var(--text-base);
    font-weight: 700;
    color: var(--gray-900);
    margin-bottom: 2px;
  }

  .cq-text span {
    display: block;
    font-size: var(--text-sm);
    color: var(--gray-600);
    font-weight: 500;
  }

  .cq-text small {
    display: block;
    font-size: 11px;
    color: var(--gray-400);
    margin-top: 2px;
  }

  .cq-arrow {
    font-size: 14px;
    color: var(--gray-400);
    flex-shrink: 0;
    transition: var(--transition-fast);
  }

  .contact-quick-card:hover .cq-arrow {
    transform: translateX(4px);
    color: var(--gray-600);
  }

  /* ── OFFICE HOURS ── */
  .office-hours-box {
    background: var(--gray-50);
    border: 1.5px solid var(--gray-200);
    border-radius: var(--radius-lg);
    padding: var(--space-20) var(--space-24);
    margin-top: var(--space-24);
  }

  .office-hours-box h4 {
    font-size: var(--text-base);
    font-weight: 700;
    color: var(--gray-900);
    margin-bottom: var(--space-16);
    display: flex;
    align-items: center;
    gap: var(--space-8);
  }

  .hours-grid {
    display: flex;
    flex-direction: column;
    gap: var(--space-10, 10px);
    margin-bottom: var(--space-14, 14px);
  }

  .hours-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: var(--text-sm);
    padding-bottom: var(--space-10, 10px);
    border-bottom: 1px solid var(--gray-100);
  }

  .hours-row:last-child {
    border-bottom: none;
    padding-bottom: 0;
  }

  .hours-day {
    color: var(--gray-700);
    font-weight: 500;
  }

  .hours-time {
    color: var(--gray-900);
    font-weight: 700;
  }

  .hours-note {
    display: flex;
    align-items: flex-start;
    gap: var(--space-8);
    font-size: var(--text-xs);
    color: var(--gray-500);
    margin-top: var(--space-12);
  }

  .hours-note i {
    color: var(--blue);
    margin-top: 1px;
    flex-shrink: 0;
  }

  /* ── SOCIAL (light version) ── */
  .contact-social {
    display: flex;
    align-items: center;
    gap: var(--space-10, 10px);
    margin-top: var(--space-24);
    font-size: var(--text-sm);
    color: var(--gray-500);
    font-weight: 600;
  }

  .contact-social .social-btn {
    background: var(--gray-100);
    border: 1px solid var(--gray-200);
    color: var(--gray-700);
  }

  .contact-social .social-btn:hover {
    background: var(--blue);
    border-color: var(--blue);
    color: #fff;
  }

  /* ── MAP ── */
  .map-wrapper {
    border-radius: var(--radius-xl);
    overflow: hidden;
    border: 1.5px solid var(--gray-200);
    box-shadow: var(--shadow-sm);
  }

  .map-address {
    display: flex;
    align-items: center;
    gap: var(--space-10, 10px);
    margin-top: var(--space-16);
    font-size: var(--text-base);
    color: var(--gray-700);
    font-weight: 500;
    flex-wrap: wrap;
  }

  /* ── RESPONSIVE ── */
  @media (max-width: 1024px) {
    .contact-quick-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media (max-width: 768px) {
    .contact-quick-grid {
      grid-template-columns: 1fr 1fr;
    }

    .contact-grid {
      grid-template-columns: 1fr;
    }
  }

  @media (max-width: 480px) {
    .contact-quick-grid {
      grid-template-columns: 1fr;
    }

    .map-wrapper iframe {
      height: 280px;
    }

    .map-address {
      flex-direction: column;
      align-items: flex-start;
    }
  }
</style>