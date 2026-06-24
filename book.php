<?php
/* ============================================================
   EZAC SERVICE — BOOK A SERVICE PAGE
   book.php
   ============================================================ */

$current_page     = 'book';
$page_title       = 'Book AC Service — EZAC Service | Same-Day AC Repair & Installation';
$page_description = 'Book AC repair, gas refilling, installation or servicing online. Choose your time slot. Certified technician arrives same day. No advance payment.';
$page_canonical   = 'https://ezacservice.in/book.php';

/* Pre-select service from URL param */
$preselect_service = isset($_GET['service']) ? htmlspecialchars($_GET['service']) : '';
$preselect_plan    = isset($_GET['plan'])    ? htmlspecialchars($_GET['plan'])    : '';

include 'partials/head.php';
include 'partials/navbar.php';
?>

<!-- ── BREADCRUMB ── -->
<div class="breadcrumb-bar">
  <div class="container">
    <div class="breadcrumb">
      <a href="/">Home</a>
      <span class="sep">›</span>
      <span class="current">Book a Service</span>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     BOOKING HERO
════════════════════════════════════════════ -->
<div class="book-hero">
  <div class="container">
    <div class="book-hero-inner">
      <div>
        <div class="section-label white">Book Online</div>
        <h1>Book Your AC Service<br>in 60 Seconds</h1>
        <p>
          Fill the form. We call back within 30 minutes to confirm your
          technician and exact time slot. No advance payment required.
        </p>
      </div>
      <div class="book-hero-trust">
        <div class="bht-item"><i class="fas fa-clock"></i><span>Same-Day Available</span></div>
        <div class="bht-item"><i class="fas fa-hand-holding-usd"></i><span>No Advance Payment</span></div>
        <div class="bht-item"><i class="fas fa-star" style="color:var(--amber)"></i><span>4.9★ Rated Service</span>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     BOOKING SECTION
════════════════════════════════════════════ -->
<section class="section">
  <div class="container">
    <div class="booking-layout">

      <!-- LEFT: Booking Form -->
      <div class="booking-form-col">

        <!-- Success State -->
        <div class="success-state" id="booking-success" style="display:none">
          <i class="fas fa-check-circle"></i>
          <h3>Booking Request Received! 🎉</h3>
          <p>
            Thank you! Our team will call you at your provided number
            within <strong>30 minutes</strong> to confirm the technician
            name, arrival time, and service details.<br><br>
            For urgent help, call:
            <strong><a href="tel:+917827464409">+91-782-746-4409</a></strong>
          </p>
          <div
            style="display:flex;gap:var(--space-12);flex-wrap:wrap;justify-content:center;margin-top:var(--space-24)">
            <a href="/" class="btn btn-primary">Back to Home</a>
            <a href="/services.php" class="btn btn-outline">View All Services</a>
          </div>
        </div>

        <!-- Booking Form -->
        <form id="booking-form-el" class="form-card" novalidate>

          <!-- ── SECTION 1: Service Selection ── -->
          <div class="form-section-title">
            <span class="form-section-num">1</span> Select Your Service
          </div>

          <!-- Service Type Cards -->
          <div class="service-selector-grid">
            <?php
            $services = [
              ['val'=>'ac-service',     'icon'=>'fa-wind',      'label'=>'AC Service',     'sub'=>'Cleaning & check-up'],
              ['val'=>'ac-repair',      'icon'=>'fa-tools',     'label'=>'AC Repair',      'sub'=>'Fault diagnosis & fix'],
              ['val'=>'gas-refill',     'icon'=>'fa-gas-pump',  'label'=>'Gas Refilling',  'sub'=>'R-22, R-32, R-410A'],
              ['val'=>'ac-installation','icon'=>'fa-hammer',    'label'=>'AC Installation','sub'=>'Split & Window AC'],
            ];
            foreach ($services as $s):
              $selected = ($preselect_service === $s['val']) ? 'selected' : '';
            ?>
            <div class="service-selector-card <?php echo $selected; ?>" data-value="<?php echo $s['val']; ?>"
              onclick="selectService(this)">
              <div class="ssc-icon"><i class="fas <?php echo $s['icon']; ?>"></i></div>
              <div class="ssc-text">
                <strong>
                  <?php echo $s['label']; ?>
                </strong>
                <span>
                  <?php echo $s['sub']; ?>
                </span>
              </div>
              <div class="ssc-check"><i class="fas fa-check-circle"></i></div>
            </div>
            <?php endforeach; ?>
          </div>
          <input type="hidden" id="b-service" name="service" value="<?php echo $preselect_service; ?>">
          <div class="form-error-msg" id="service-error">Please select a service type.</div>

          <!-- AC Type -->
          <div class="form-group" style="margin-top:var(--space-20)">
            <label class="form-label-required" for="b-ac-type">AC Type</label>
            <select id="b-ac-type" name="ac_type">
              <option value="">— Select AC type —</option>
              <option value="split">Split AC</option>
              <option value="window">Window AC</option>
              <option value="not-sure">Not Sure</option>
            </select>
          </div>

          <!-- Brand + Tonnage -->
          <div class="form-row">
            <div class="form-group">
              <label for="b-brand">AC Brand <span
                  style="color:var(--gray-400);font-weight:400;font-size:12px">(optional)</span></label>
              <select id="b-brand" name="brand">
                <option value="">— Select brand —</option>
                <?php
                $brands = ['LG','Samsung','Voltas','Daikin','Hitachi','Godrej','Blue Star','Carrier','O\'General','Panasonic','Haier','Lloyd','IFB','Whirlpool','Other'];
                foreach ($brands as $b) echo "<option>$b</option>";
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="b-tonnage">AC Tonnage <span
                  style="color:var(--gray-400);font-weight:400;font-size:12px">(optional)</span></label>
              <select id="b-tonnage" name="tonnage">
                <option value="">— Select tonnage —</option>
                <option>0.75 Ton</option>
                <option>1.0 Ton</option>
                <option>1.5 Ton</option>
                <option>2.0 Ton</option>
                <option>Not Sure</option>
              </select>
            </div>
          </div>

          <!-- Problem Description -->
          <div class="form-group">
            <label for="b-issue">Describe the Problem <span
                style="color:var(--gray-400);font-weight:400;font-size:12px">(optional but helpful)</span></label>
            <textarea id="b-issue" name="issue" rows="3"
              placeholder="e.g. AC is not cooling, making noise, leaking water, need new AC installed..."></textarea>
          </div>

          <hr style="border:none;border-top:1.5px solid var(--gray-100);margin:var(--space-28) 0">

          <!-- ── SECTION 2: Schedule ── -->
          <div class="form-section-title">
            <span class="form-section-num">2</span> Choose Date &amp; Time
          </div>

          <div class="form-row">
            <div class="form-group">
              <label class="form-label-required" for="b-date">Preferred Date</label>
              <div class="input-group">
                <i class="fas fa-calendar input-icon"></i>
                <input type="date" id="b-date" name="date">
              </div>
            </div>
            <div class="form-group">
              <label class="form-label-required" for="b-time">Preferred Time Slot</label>
              <select id="b-time" name="time_slot">
                <option value="">— Select time —</option>
                <option value="7-9">7:00 AM – 9:00 AM</option>
                <option value="9-11">9:00 AM – 11:00 AM</option>
                <option value="11-1">11:00 AM – 1:00 PM</option>
                <option value="1-3">1:00 PM – 3:00 PM</option>
                <option value="3-5">3:00 PM – 5:00 PM</option>
                <option value="5-7">5:00 PM – 7:00 PM</option>
                <option value="7-9pm">7:00 PM – 9:00 PM</option>
              </select>
            </div>
          </div>

          <hr style="border:none;border-top:1.5px solid var(--gray-100);margin:var(--space-28) 0">

          <!-- ── SECTION 3: Your Details ── -->
          <div class="form-section-title">
            <span class="form-section-num">3</span> Your Details
          </div>

          <div class="form-row">
            <div class="form-group">
              <label class="form-label-required" for="b-name">Full Name</label>
              <input type="text" id="b-name" name="name" placeholder="Your full name" autocomplete="name">
            </div>
            <div class="form-group">
              <label class="form-label-required" for="b-phone">Mobile Number</label>
              <div class="input-group">
                <i class="fas fa-phone input-icon"></i>
                <input type="tel" id="b-phone" name="phone" placeholder="10-digit number" maxlength="10"
                  autocomplete="tel">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label-required" for="b-address">Service Address</label>
            <div class="input-group">
              <i class="fas fa-map-marker-alt input-icon"></i>
              <input type="text" id="b-address" name="address" placeholder="House no., street, area, city, pincode"
                autocomplete="street-address">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="b-city">City</label>
              <input type="text" id="b-city" name="city" placeholder="e.g. Delhi, Noida, Gurgaon">
            </div>
            <div class="form-group">
              <label for="b-pincode">Pincode</label>
              <input type="text" id="b-pincode" name="pincode" placeholder="6-digit pincode" maxlength="6">
            </div>
          </div>

          <!-- Info Box -->
          <div class="form-info-box">
            <i class="fas fa-info-circle"></i>
            <p>
              Our technician will inspect the issue and confirm everything
              with you before any work begins. <strong>No advance payment</strong>
              required.
            </p>
          </div>

          <!-- Terms -->
          <div class="form-check" style="margin-bottom:var(--space-20)">
            <input type="checkbox" id="b-terms" name="terms">
            <label for="b-terms" class="form-check-label">
              I agree to the
              <a href="/terms.php">Terms of Service</a> and
              <a href="/privacy.php">Privacy Policy</a>
            </label>
          </div>

          <button type="submit" class="btn btn-primary btn-xl btn-block" id="bookSubmitBtn">
            <i class="fas fa-calendar-check"></i> Confirm Booking Request
          </button>

          <p style="text-align:center;font-size:12px;color:var(--gray-400);margin-top:var(--space-12)">
            Our team will call you within 30 minutes to confirm. No payment now.
          </p>

        </form>

      </div><!-- /booking-form-col -->

      <!-- RIGHT: Sidebar Info -->
      <div class="booking-sidebar">

        <!-- Why Book Online -->
        <div class="sidebar-card">
          <h3 class="sidebar-card-title">
            <i class="fas fa-bolt" style="color:var(--amber)"></i>
            Why Book with EZAC?
          </h3>
          <ul class="sidebar-benefits">
            <li>
              <i class="fas fa-check-circle"></i>
              <div>
                <strong>No Advance Payment</strong>
                <span>Pay only after the service is complete and you're satisfied.</span>
              </div>
            </li>
            <li>
              <i class="fas fa-check-circle"></i>
              <div>
                <strong>Same-Day Service</strong>
                <span>Most bookings get a technician within 2–4 hours.</span>
              </div>
            </li>
            <li>
              <i class="fas fa-check-circle"></i>
              <div>
                <strong>Verified Technicians</strong>
                <span>Every tech is background-checked and brand-certified.</span>
              </div>
            </li>
          </ul>
        </div>

        <!-- Quick Call -->
        <div class="sidebar-card sidebar-call-card">
          <div class="sidebar-call-icon"><i class="fas fa-phone"></i></div>
          <h3>Prefer to Call?</h3>
          <p>Talk to our service advisor directly for instant booking.</p>
          <a href="tel:+917827464409" class="btn btn-white btn-block" style="margin-top:var(--space-16)">
            <i class="fas fa-phone"></i> +91-782-746-4409
          </a>
          <a href="https://wa.me/917827464409" target="_blank" rel="noopener" class="btn btn-whatsapp btn-block"
            style="margin-top:var(--space-10, 10px)">
            <i class="fab fa-whatsapp"></i> WhatsApp Us
          </a>
          <p style="font-size:11px;color:rgba(255,255,255,0.65);text-align:center;margin-top:var(--space-10,10px)">
            Available 7 AM – 10 PM · All Days
          </p>
        </div>

        <!-- Reviews Mini -->
        <div class="sidebar-card sidebar-review-card">
          <div class="sidebar-review-stars">★★★★★</div>
          <p class="sidebar-review-text">
            "EZAC technician came same day, fixed my AC gas leak in 2 hours.
            Highly recommended!"
          </p>
          <div class="sidebar-reviewer">
            <div class="avatar" style="width:36px;height:36px;font-size:13px;background:var(--blue)">RK</div>
            <div>
              <strong>Rajesh Kumar</strong>
              <span>Dwarka, Delhi</span>
            </div>
          </div>
        </div>

      </div><!-- /booking-sidebar -->

    </div><!-- /booking-layout -->
  </div>
</section>

<?php include 'partials/footer.php'; ?>

<!-- Page-specific JS -->
<script>
  /* Service selector cards */
  function selectService(card) {
    document.querySelectorAll('.service-selector-card').forEach(c => c.classList.remove('selected'));
    card.classList.add('selected');
    document.getElementById('b-service').value = card.dataset.value;
    document.getElementById('service-error').classList.remove('show');
  }

  /* Extra validation for booking page */
  document.getElementById('booking-form-el').addEventListener('submit', function (e) {
    e.preventDefault();

    /* Check service selected */
    const service = document.getElementById('b-service').value;
    if (!service) {
      document.getElementById('service-error').classList.add('show');
      document.querySelector('.service-selector-grid').scrollIntoView({ behavior: 'smooth', block: 'center' });
      return;
    }

    /* Check AC type */
    const acType = document.getElementById('b-ac-type').value;
    if (!acType) {
      showError(document.getElementById('b-ac-type'), 'Please select AC type.');
      return;
    }

    /* Check terms */
    const terms = document.getElementById('b-terms');
    if (!terms.checked) {
      alert('Please agree to the Terms of Service to proceed.');
      terms.focus();
      return;
    }

    /* Use forms.js validateBookingForm() */
    if (typeof validateBookingForm === 'function' && !validateBookingForm()) return;

    /* Submit */
    const btn = document.getElementById('bookSubmitBtn');
    if (typeof setLoading === 'function') setLoading(btn, true);

    setTimeout(() => {
      if (typeof setLoading === 'function') setLoading(btn, false);
      document.getElementById('booking-form-el').style.display = 'none';
      const success = document.getElementById('booking-success');
      success.style.display = 'block';
      success.scrollIntoView({ behavior: 'smooth', block: 'center' });
      if (typeof showToast === 'function') {
        showToast('Booking confirmed! We\'ll call you within 30 minutes.', 'success');
      }
    }, 2000);
  });
</script>

<style>
  /* ── BOOK HERO ── */
  .book-hero {
    background: linear-gradient(135deg, #0a1628 0%, #1a3a6e 60%, #0D6EFD 100%);
    color: #fff;
    padding: 52px 0;
  }

  .book-hero-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: var(--space-32);
    flex-wrap: wrap;
  }

  .book-hero-inner h1 {
    font-size: clamp(26px, 3.5vw, 42px);
    font-weight: 900;
    color: #fff;
    margin-bottom: var(--space-12);
  }

  .book-hero-inner p {
    font-size: var(--text-md);
    color: rgba(255, 255, 255, 0.80);
    max-width: 480px;
    margin: 0;
  }

  .book-hero-trust {
    display: flex;
    flex-direction: column;
    gap: var(--space-10, 10px);
    flex-shrink: 0;
  }

  .bht-item {
    display: flex;
    align-items: center;
    gap: var(--space-10, 10px);
    background: rgba(255, 255, 255, 0.10);
    border: 1px solid rgba(255, 255, 255, 0.18);
    border-radius: var(--radius-md);
    padding: 10px 16px;
    font-size: var(--text-sm);
    font-weight: 600;
    color: rgba(255, 255, 255, 0.95);
    white-space: nowrap;
  }

  .bht-item i {
    color: var(--amber);
    font-size: 16px;
  }

  /* ── BOOKING LAYOUT ── */
  .booking-layout {
    display: grid;
    grid-template-columns: 1fr 360px;
    gap: var(--space-32);
    align-items: start;
  }

  /* ── FORM SECTION NUMBERS ── */
  .form-section-title {
    display: flex;
    align-items: center;
    gap: var(--space-12);
    font-size: var(--text-md);
    font-weight: 800;
    color: var(--gray-900);
    margin-bottom: var(--space-20);
    padding-bottom: var(--space-12);
    border-bottom: 2px solid var(--gray-100);
  }

  .form-section-num {
    width: 28px;
    height: 28px;
    background: var(--blue);
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: var(--text-sm);
    font-weight: 800;
    flex-shrink: 0;
  }

  /* ── SERVICE SELECTOR CARDS ── */
  .service-selector-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--space-10, 10px);
    margin-bottom: var(--space-8);
  }

  .service-selector-card {
    display: flex;
    align-items: center;
    gap: var(--space-12);
    padding: var(--space-14, 14px) var(--space-16);
    border: 2px solid var(--gray-200);
    border-radius: var(--radius-md);
    cursor: pointer;
    transition: var(--transition);
    background: var(--white);
    position: relative;
  }

  .service-selector-card:hover {
    border-color: var(--blue);
    background: var(--blue-faint);
  }

  .service-selector-card.selected {
    border-color: var(--blue);
    background: var(--blue-light);
  }

  .ssc-icon {
    width: 40px;
    height: 40px;
    min-width: 40px;
    background: var(--gray-100);
    border-radius: var(--radius-sm);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 17px;
    color: var(--blue);
    transition: var(--transition);
  }

  .service-selector-card.selected .ssc-icon,
  .service-selector-card:hover .ssc-icon {
    background: var(--blue);
    color: #fff;
  }

  .ssc-text {
    flex: 1;
  }

  .ssc-text strong {
    display: block;
    font-size: var(--text-sm);
    font-weight: 700;
    color: var(--gray-900);
  }

  .ssc-text span {
    font-size: 11px;
    color: var(--gray-500);
  }

  .ssc-check {
    position: absolute;
    top: 8px;
    right: 8px;
    font-size: 16px;
    color: var(--blue);
    opacity: 0;
    transition: var(--transition-fast);
  }

  .service-selector-card.selected .ssc-check {
    opacity: 1;
  }

  /* ── SIDEBAR ── */
  .booking-sidebar {
    display: flex;
    flex-direction: column;
    gap: var(--space-20);
  }

  .sidebar-card {
    background: var(--white);
    border: 1.5px solid var(--gray-200);
    border-radius: var(--radius-lg);
    padding: var(--space-24);
  }

  .sidebar-card-title {
    font-size: var(--text-md);
    font-weight: 700;
    color: var(--gray-900);
    margin-bottom: var(--space-16);
    display: flex;
    align-items: center;
    gap: var(--space-8);
  }

  .sidebar-benefits {
    display: flex;
    flex-direction: column;
    gap: var(--space-12);
  }

  .sidebar-benefits li {
    display: flex;
    align-items: flex-start;
    gap: var(--space-10, 10px);
    font-size: var(--text-sm);
  }

  .sidebar-benefits i {
    color: var(--green);
    margin-top: 2px;
    flex-shrink: 0;
    font-size: 15px;
  }

  .sidebar-benefits strong {
    display: block;
    font-weight: 700;
    color: var(--gray-900);
    margin-bottom: 2px;
  }

  .sidebar-benefits span {
    color: var(--gray-500);
    font-size: 12px;
  }

  /* Call card */
  .sidebar-call-card {
    background: linear-gradient(135deg, var(--blue), var(--blue-darker));
    border-color: transparent;
    text-align: center;
    color: #fff;
  }

  .sidebar-call-icon {
    width: 52px;
    height: 52px;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin: 0 auto var(--space-12);
  }

  .sidebar-call-card h3 {
    color: #fff;
    font-size: var(--text-lg);
    margin-bottom: var(--space-8);
  }

  .sidebar-call-card p {
    color: rgba(255, 255, 255, 0.80);
    font-size: var(--text-sm);
    margin: 0;
  }

  /* Review card */
  .sidebar-review-card {
    background: var(--gray-50);
  }

  .sidebar-review-stars {
    color: var(--amber);
    font-size: 18px;
    letter-spacing: 2px;
    margin-bottom: var(--space-10, 10px);
  }

  .sidebar-review-text {
    font-size: var(--text-sm);
    color: var(--gray-700);
    font-style: italic;
    line-height: 1.7;
    margin-bottom: var(--space-14, 14px);
  }

  .sidebar-reviewer {
    display: flex;
    align-items: center;
    gap: var(--space-10, 10px);
  }

  .sidebar-reviewer strong {
    display: block;
    font-size: var(--text-sm);
    font-weight: 700;
    color: var(--gray-900);
  }

  .sidebar-reviewer span {
    font-size: 11px;
    color: var(--gray-500);
  }

  /* ── RESPONSIVE ── */
  @media (max-width: 1024px) {
    .booking-layout {
      grid-template-columns: 1fr;
    }

    .booking-sidebar {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: var(--space-16);
    }

    .sidebar-review-card {
      grid-column: 1 / -1;
    }
  }

  @media (max-width: 768px) {
    .book-hero-inner {
      flex-direction: column;
    }

    .book-hero-trust {
      flex-direction: row;
      flex-wrap: wrap;
    }

    .bht-item {
      flex: 1;
      min-width: 140px;
    }

    .booking-sidebar {
      grid-template-columns: 1fr;
    }

    .service-selector-grid {
      grid-template-columns: 1fr;
    }
  }

  @media (max-width: 480px) {
    .bht-item {
      min-width: 100%;
    }

    .book-hero-inner h1 {
      font-size: 26px;
    }
  }
</style>