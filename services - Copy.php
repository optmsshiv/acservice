<?php
/* ============================================================
   EZAC SERVICE — SERVICES PAGE
   services.php
   ============================================================ */

$current_page     = 'services';
$page_title       = 'AC Services — Repair, Gas Refill & Installation | EZAC Service';
$page_description = 'Professional AC services in Bihar — AC repair, gas refilling, installation for window and split ACs. All brands covered. Certified technicians, 90-day warranty, transparent pricing.';
$page_canonical   = 'https://ezacservice.in/services.php';

include 'partials/head.php';
include 'partials/navbar.php';
?>

<!-- ── BREADCRUMB ── -->
<div class="breadcrumb-bar">
    <div class="container">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span class="sep">›</span>
            <span class="current">AC Services</span>
        </div>
    </div>
</div>

<!-- ── PAGE HERO ── -->
<div class="page-hero">
    <div class="container">
        <div class="page-hero-inner">
            <div>
                <div class="section-label">AC Services</div>
                <h1>Expert AC Services<br>for Window &amp; Split ACs</h1>
                <p>
                    Certified technicians for all AC brands — repair, gas refilling,
                    and installation. Same-day service, 90-day warranty,
                    transparent pricing across Bihar.
                </p>
                <div class="page-hero-actions">
                    <a href="/book.php" class="btn btn-primary btn-lg">
                        <i class="fas fa-calendar-check"></i> Book a Service
                    </a>
                    <a href="tel:+918003001234" class="btn btn-outline btn-lg">
                        <i class="fas fa-phone"></i> Call Now
                    </a>
                </div>
            </div>
            <div class="page-hero-badges">
                        <!-- Hero Badges 
                <div class="hero-badge-item">
                    <i class="fas fa-shield-alt"></i>
                    <div>
                        <strong>90-Day Warranty</strong>
                        <span>On all repair services</span>
                    </div>
                </div> -->

                <div class="hero-badge-item">
                    <i class="fas fa-clock"></i>
                    <div>
                        <strong>Same-Day Service</strong>
                        <span>Available 7 AM – 10 PM</span>
                    </div>
                </div>
                <div class="hero-badge-item">
                    <i class="fas fa-rupee-sign"></i>
                    <div>
                        <strong>Fixed Pricing</strong>
                        <span>No hidden charges</span>
                    </div>
                </div>
                <div class="hero-badge-item">
                    <i class="fas fa-user-check"></i>
                    <div>
                        <strong>Verified Technicians</strong>
                        <span>Background-checked team</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ══════════════════════════════════════════
     SERVICE 1 — AC SERVICE (WINDOW + SPLIT)
════════════════════════════════════════════ -->
<section class="section" id="ac-service">
    <div class="container">

        <div class="service-detail-block">

            <!-- Left: Info -->
            <div class="service-detail-info">
                <div class="service-detail-icon blue">
                    <i class="fas fa-wind"></i>
                </div>
                <div class="section-label">AC Service</div>
                <h2>AC Servicing<br><span style="color:var(--blue)">Window &amp; Split AC</span></h2>
                <p class="service-detail-desc">
                    Regular AC servicing keeps your unit running at peak efficiency,
                    reduces electricity bills, and extends the life of your appliance.
                    Our comprehensive service covers deep cleaning, filter washing,
                    coil cleaning, drain pipe clearing, and a full health check.
                </p>

                <ul class="service-checklist">
                    <li><i class="fas fa-check-circle"></i> Indoor &amp; outdoor unit deep cleaning</li>
                    <li><i class="fas fa-check-circle"></i> Filter wash and sanitisation</li>
                    <li><i class="fas fa-check-circle"></i> Evaporator &amp; condenser coil cleaning</li>
                    <li><i class="fas fa-check-circle"></i> Drain pipe flushing &amp; clearing</li>
                    <li><i class="fas fa-check-circle"></i> Refrigerant pressure check</li>
                    <li><i class="fas fa-check-circle"></i> Electrical connections check</li>
                    <li><i class="fas fa-check-circle"></i> Cooling performance test</li>
                    <li><i class="fas fa-check-circle"></i> 30-day post-service warranty</li>
                </ul>

                <div class="ac-type-chips">
                    <div class="ac-chip"><i class="fas fa-square"></i> Window AC</div>
                    <div class="ac-chip"><i class="fas fa-grip-lines"></i> Split AC</div>
                    <div class="ac-chip"><i class="fas fa-th"></i> Cassette AC</div>
                </div>
            </div>

            <!-- Right: Price Card + Booking -->
            <div class="service-detail-aside">
                <div class="service-price-card">
                    <div class="spc-header">
                        <i class="fas fa-wind"></i> AC Servicing
                    </div>
                    <div class="spc-body">
                        <div class="spc-price-row">
                            <div>
                                <div class="spc-label">Split AC Service</div>
                                <div class="spc-price">₹499 <span>onwards</span></div>
                            </div>
                            <div>
                                <div class="spc-label">Window AC Service</div>
                                <div class="spc-price">₹399 <span>onwards</span></div>
                            </div>
                        </div>
                        <div class="spc-note">
                            <i class="fas fa-info-circle"></i>
                            Final price confirmed before work begins. Parts extra if needed.
                        </div>
                        <a href="/book.php?service=ac-service" class="btn btn-primary btn-block">
                            <i class="fas fa-calendar-check"></i> Book AC Service
                        </a>
                        <a href="tel:+918003001234" class="btn btn-outline btn-block" style="margin-top:10px">
                            <i class="fas fa-phone"></i> Call for Instant Booking
                        </a>
                    </div>
                </div>

                <!-- Benefits box -->
                <div class="service-benefit-box">
                    <h4><i class="fas fa-bolt" style="color:var(--amber)"></i> Why Service Regularly?</h4>
                    <ul>
                        <li><i class="fas fa-arrow-right"></i> Restores up to 30% cooling efficiency</li>
                        <li><i class="fas fa-arrow-right"></i> Reduces electricity bill by 15–20%</li>
                        <li><i class="fas fa-arrow-right"></i> Extends AC lifespan by 3–5 years</li>
                        <li><i class="fas fa-arrow-right"></i> Prevents costly breakdowns</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- DIVIDER -->
<div class="section-divider">
    <div class="container">
        <hr>
    </div>
</div>

<!-- ══════════════════════════════════════════
     SERVICE 2 — AC REPAIR
════════════════════════════════════════════ -->
<section class="section" id="ac-repair">
    <div class="container">

        <div class="service-detail-block reverse">

            <!-- Left: Price Card -->
            <div class="service-detail-aside">
                <div class="service-price-card green">
                    <div class="spc-header green">
                        <i class="fas fa-tools"></i> AC Repair
                    </div>
                    <div class="spc-body">
                        <div class="spc-price-row">
                            <div>
                                <div class="spc-label">Diagnosis Fee</div>
                                <div class="spc-price green">₹299 <span>waived on repair</span></div>
                            </div>
                            <div>
                                <div class="spc-label">Repair (labour)</div>
                                <div class="spc-price green">₹399 <span>onwards</span></div>
                            </div>
                        </div>
                        <div class="spc-note">
                            <i class="fas fa-info-circle"></i>
                            Diagnosis fee adjusted against repair cost if you proceed.
                        </div>
                        <a href="/book.php?service=ac-repair" class="btn btn-green btn-block">
                            <i class="fas fa-calendar-check"></i> Book AC Repair
                        </a>
                        <a href="tel:+918003001234" class="btn btn-green-outline btn-block" style="margin-top:10px">
                            <i class="fas fa-phone"></i> Call for Urgent Repair
                        </a>
                    </div>
                </div>

                <!-- Common Issues -->
                <div class="service-issues-box">
                    <h4><i class="fas fa-exclamation-circle" style="color:var(--red)"></i> Common Issues We Fix</h4>
                    <ul>
                        <li><i class="fas fa-snowflake" style="color:var(--blue)"></i> AC not cooling / weak cooling
                        </li>
                        <li><i class="fas fa-tint" style="color:var(--blue)"></i> Water leaking from indoor unit</li>
                        <li><i class="fas fa-volume-up" style="color:var(--blue)"></i> Strange noise or vibration</li>
                        <li><i class="fas fa-power-off" style="color:var(--blue)"></i> AC not turning on</li>
                        <li><i class="fas fa-thermometer-half" style="color:var(--blue)"></i> Remote / thermostat issues
                        </li>
                        <li><i class="fas fa-cog" style="color:var(--blue)"></i> Compressor not starting</li>
                        <li><i class="fas fa-icicles" style="color:var(--blue)"></i> Ice forming on the unit</li>
                        <li><i class="fas fa-wind" style="color:var(--blue)"></i> Bad smell from AC</li>
                    </ul>
                </div>
            </div>

            <!-- Right: Info -->
            <div class="service-detail-info">
                <div class="service-detail-icon green">
                    <i class="fas fa-tools"></i>
                </div>
                <div class="section-label green">AC Repair</div>
                <h2>AC Repair Service<br><span style="color:var(--green-dark)">All Faults, All Brands</span></h2>
                <p class="service-detail-desc">
                    Is your AC not cooling? Making noise? Leaking water? Our certified
                    AC repair technicians diagnose and fix all types of faults — from
                    minor issues to major PCB or compressor failures — for both
                    window ACs and split ACs of all brands.
                </p>

                <ul class="service-checklist">
                    <li><i class="fas fa-check-circle"></i> Complete fault diagnosis</li>
                    <li><i class="fas fa-check-circle"></i> PCB / circuit board repair &amp; replacement</li>
                    <li><i class="fas fa-check-circle"></i> Compressor testing &amp; repair</li>
                    <li><i class="fas fa-check-circle"></i> Fan motor, capacitor replacement</li>
                    <li><i class="fas fa-check-circle"></i> Thermostat &amp; sensor repair</li>
                    <li><i class="fas fa-check-circle"></i> Remote control &amp; display issues</li>
                    <li><i class="fas fa-check-circle"></i> All electrical faults inside AC</li>
                    <li><i class="fas fa-check-circle"></i> 90-day repair warranty</li>
                </ul>

                <div class="warranty-strip">
                    <i class="fas fa-shield-alt"></i>
                    <div>
                        <strong>90-Day Repair Warranty</strong>
                        <span>If the same fault returns within 90 days, we fix it free of charge.</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- DIVIDER -->
<div class="section-divider">
    <div class="container">
        <hr>
    </div>
</div>

<!-- ══════════════════════════════════════════
     SERVICE 3 — AC GAS REFILL
════════════════════════════════════════════ -->
<section class="section section-gray" id="ac-gas-refill">
    <div class="container">

        <div class="service-detail-block">

            <!-- Left: Info -->
            <div class="service-detail-info">
                <div class="service-detail-icon amber">
                    <i class="fas fa-gas-pump"></i>
                </div>
                <div class="section-label amber">Gas Refill</div>
                <h2>AC Gas Refilling<br><span style="color:var(--amber-dark)">R-22 · R-32 · R-410A</span></h2>
                <p class="service-detail-desc">
                    Low refrigerant is one of the most common causes of poor AC cooling.
                    Our technicians detect leaks, repair them if needed, and refill the
                    correct gas for your AC model — restoring full cooling performance.
                </p>

                <ul class="service-checklist">
                    <li><i class="fas fa-check-circle"></i> Refrigerant pressure testing</li>
                    <li><i class="fas fa-check-circle"></i> Leak detection before refilling</li>
                    <li><i class="fas fa-check-circle"></i> R-22 gas refilling (older models)</li>
                    <li><i class="fas fa-check-circle"></i> R-32 gas refilling (mid-range)</li>
                    <li><i class="fas fa-check-circle"></i> R-410A gas refilling (inverter ACs)</li>
                    <li><i class="fas fa-check-circle"></i> Post-refill cooling performance test</li>
                    <li><i class="fas fa-check-circle"></i> Written gas-fill certificate</li>
                    <li><i class="fas fa-check-circle"></i> 60-day refill warranty</li>
                </ul>

                <!-- Gas Type Cards -->
                <div class="gas-types-grid">
                    <div class="gas-type-card">
                        <div class="gas-name">R-22</div>
                        <div class="gas-desc">Older window &amp; split ACs</div>
                        <div class="gas-price">From ₹999</div>
                    </div>
                    <div class="gas-type-card">
                        <div class="gas-name">R-32</div>
                        <div class="gas-desc">Modern split ACs</div>
                        <div class="gas-price">From ₹1,199</div>
                    </div>
                    <div class="gas-type-card">
                        <div class="gas-name">R-410A</div>
                        <div class="gas-desc">Inverter ACs</div>
                        <div class="gas-price">From ₹1,499</div>
                    </div>
                </div>
            </div>

            <!-- Right: Price Card -->
            <div class="service-detail-aside">
                <div class="service-price-card amber">
                    <div class="spc-header amber">
                        <i class="fas fa-gas-pump"></i> Gas Refilling
                    </div>
                    <div class="spc-body">
                        <div class="spc-price-row" style="grid-template-columns:1fr">
                            <div>
                                <div class="spc-label">Gas Refilling (all types)</div>
                                <div class="spc-price amber">₹999 <span>onwards</span></div>
                                <div style="font-size:12px;color:var(--gray-500);margin-top:4px">
                                    Price varies by gas type &amp; quantity
                                </div>
                            </div>
                        </div>
                        <div class="spc-note amber">
                            <i class="fas fa-info-circle"></i>
                            Leak detection &amp; repair charged separately if a leak is found.
                        </div>
                        <a href="/book.php?service=gas-refill" class="btn btn-amber btn-block">
                            <i class="fas fa-calendar-check"></i> Book Gas Refill
                        </a>
                        <a href="tel:+918003001234" class="btn btn-outline btn-block" style="margin-top:10px">
                            <i class="fas fa-phone"></i> Call for Price Estimate
                        </a>
                    </div>
                </div>

                <!-- When to refill -->
                <div class="service-benefit-box amber">
                    <h4><i class="fas fa-lightbulb" style="color:var(--amber)"></i> Signs You Need a Gas Refill</h4>
                    <ul>
                        <li><i class="fas fa-arrow-right"></i> AC runs but room isn't cooling</li>
                        <li><i class="fas fa-arrow-right"></i> Warm air blowing from indoor unit</li>
                        <li><i class="fas fa-arrow-right"></i> Ice forming on copper pipes</li>
                        <li><i class="fas fa-arrow-right"></i> Hissing sound from indoor unit</li>
                        <li><i class="fas fa-arrow-right"></i> AC takes very long to cool room</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- DIVIDER -->
<div class="section-divider">
    <div class="container">
        <hr>
    </div>
</div>

<!-- ══════════════════════════════════════════
     SERVICE 4 — AC INSTALLATION
════════════════════════════════════════════ -->
<section class="section" id="ac-installation">
    <div class="container">

        <div class="service-detail-block reverse">

            <!-- Left: Price + Info boxes -->
            <div class="service-detail-aside">
                <div class="service-price-card">
                    <div class="spc-header">
                        <i class="fas fa-hammer"></i> AC Installation
                    </div>
                    <div class="spc-body">
                        <div class="spc-price-row">
                            <div>
                                <div class="spc-label">Split AC Installation</div>
                                <div class="spc-price">₹799 <span>onwards</span></div>
                            </div>
                            <div>
                                <div class="spc-label">Window AC Installation</div>
                                <div class="spc-price">₹599 <span>onwards</span></div>
                            </div>
                        </div>
                        <div class="spc-note">
                            <i class="fas fa-info-circle"></i>
                            Pipes, brackets &amp; copper wire extra if not provided by customer.
                        </div>
                        <a href="/book.php?service=ac-installation" class="btn btn-primary btn-block">
                            <i class="fas fa-calendar-check"></i> Book Installation
                        </a>
                        <a href="tel:+918003001234" class="btn btn-outline btn-block" style="margin-top:10px">
                            <i class="fas fa-phone"></i> Call for Free Consultation
                        </a>
                    </div>
                </div>

                <!-- Installation includes -->
                <div class="install-checklist-box">
                    <h4><i class="fas fa-clipboard-list" style="color:var(--blue)"></i> What's Included</h4>
                    <div class="install-includes-grid">
                        <div class="install-include"><i class="fas fa-check"></i> Wall drilling &amp; bracket fixing
                        </div>
                        <div class="install-include"><i class="fas fa-check"></i> Indoor unit mounting</div>
                        <div class="install-include"><i class="fas fa-check"></i> Outdoor unit placement</div>
                        <div class="install-include"><i class="fas fa-check"></i> Copper pipe connection</div>
                        <div class="install-include"><i class="fas fa-check"></i> Electrical wiring</div>
                        <div class="install-include"><i class="fas fa-check"></i> Gas pressure check</div>
                        <div class="install-include"><i class="fas fa-check"></i> Test run &amp; demo</div>
                        <div class="install-include"><i class="fas fa-check"></i> Site cleanup</div>
                    </div>
                </div>
            </div>

            <!-- Right: Info -->
            <div class="service-detail-info">
                <div class="service-detail-icon blue">
                    <i class="fas fa-hammer"></i>
                </div>
                <div class="section-label">AC Installation</div>
                <h2>AC Installation Service<br><span style="color:var(--blue)">Window &amp; Split AC</span></h2>
                <p class="service-detail-desc">
                    Just bought a new AC? Our certified installation team ensures your AC
                    is set up correctly for maximum performance and energy efficiency.
                    We handle everything from wall drilling to test run — leaving
                    your home clean and your AC running perfectly.
                </p>

                <ul class="service-checklist">
                    <li><i class="fas fa-check-circle"></i> New AC installation (split &amp; window)</li>
                    <li><i class="fas fa-check-circle"></i> Optimal placement advice for best cooling</li>
                    <li><i class="fas fa-check-circle"></i> Proper copper pipe routing</li>
                    <li><i class="fas fa-check-circle"></i> Dedicated electrical point setup</li>
                    <li><i class="fas fa-check-circle"></i> Outdoor unit secure mounting</li>
                    <li><i class="fas fa-check-circle"></i> Gas pressure verification after install</li>
                    <li><i class="fas fa-check-circle"></i> Full demo of remote &amp; features</li>
                    <li><i class="fas fa-check-circle"></i> 6-month installation warranty</li>
                </ul>

                <!-- AC Shift / Reinstall note -->
                <div class="warranty-strip">
                    <i class="fas fa-exchange-alt"></i>
                    <div>
                        <strong>AC Uninstall &amp; Reinstallation Also Available</strong>
                        <span>Moving to a new home? We safely remove, transport-prep, and reinstall your AC.</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     BRANDS WE SERVICE
════════════════════════════════════════════ -->
<section class="section-sm section-gray">
    <div class="container">
        <div class="section-header center" style="margin-bottom:var(--space-32)">
            <div class="section-label">All Brands</div>
            <h2 class="section-title" style="font-size:var(--text-3xl)">We Service All Major AC Brands</h2>
        </div>
        <div class="brands-row">
            <?php
      $brands = [
        'LG','Samsung','Voltas','Daikin','Hitachi',
        'Godrej','Blue Star','Carrier','O\'General',
        'Panasonic','Haier','Lloyd','IFB','Whirlpool',
      ];
      foreach ($brands as $b): ?>
            <div class="brand-pill">
                <?php echo htmlspecialchars($b); ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     FAQ
════════════════════════════════════════════ -->
<section class="section">
    <div class="container">
        <div class="section-header center">
            <div class="section-label">FAQ</div>
            <h2 class="section-title">AC Service Questions Answered</h2>
        </div>

        <div class="faq-list">
            <?php
      $faqs = [
        [
          'q' => 'How often should I service my AC?',
          'a' => 'Ideally, once before summer and once before winter — so twice a year. At minimum, once a year. Regular servicing keeps the AC efficient, reduces electricity consumption, and prevents sudden breakdowns during peak summer.',
        ],
        [
          'q' => 'How do I know if my AC needs a gas refill?',
          'a' => 'Key signs include: AC running continuously but not cooling, warm air blowing from the indoor unit, ice forming on the copper pipes, or a hissing sound from the unit. Our technician will confirm with a pressure test before recommending a refill.',
        ],
        [
          'q' => 'How long does AC installation take?',
          'a' => 'A standard split AC installation takes 2–3 hours. Window AC installation is faster — typically 1–1.5 hours. Time may vary depending on wall type (concrete vs brick), floor height, and pipe routing distance.',
        ],
        [
          'q' => 'Do you install ACs on higher floors or with long pipe runs?',
          'a' => 'Yes. We handle installations on all floors and manage long copper pipe runs (up to 15 metres standard, longer runs available with additional pipe cost). We assess the site before starting any work.',
        ],
        [
          'q' => 'What is the warranty on your AC repair work?',
          'a' => 'All AC repair work comes with a 90-day service warranty. If the same fault returns within 90 days, we fix it free of charge. Gas refills carry a 60-day warranty. New installations are covered for 6 months.',
        ],
        [
          'q' => 'Do you carry spare parts for all AC brands?',
          'a' => 'Our technicians carry commonly needed parts (capacitors, filters, drain pipes, etc.) in their van. For specific parts like PCBs, motors, or compressors, we source OEM-grade parts within 24–48 hours and schedule a return visit.',
        ],
      ];
      foreach ($faqs as $i => $faq): ?>
            <div class="faq-item <?php echo $i === 0 ? 'open' : ''; ?>">
                <div class="faq-q">
                    <?php echo htmlspecialchars($faq['q']); ?>
                    <div class="faq-icon"><i class="fas fa-plus"></i></div>
                </div>
                <div class="faq-a">
                    <div class="faq-a-inner">
                        <?php echo htmlspecialchars($faq['a']); ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── CTA BANNER ── -->
<section class="section-sm">
    <div class="container">
        <div class="cta-banner">
            <div>
                <h2>Book Your AC Service Today</h2>
                <p>Same-day slots available. Certified technicians. 90-day warranty. No advance payment.</p>
            </div>
            <div class="cta-banner-actions">
                <a href="/book.php" class="btn btn-white btn-lg">
                    <i class="fas fa-calendar-check"></i> Book Now
                </a>
                <a href="tel:+918003001234" class="btn btn-white-outline btn-lg">
                    <i class="fas fa-phone"></i> Call Us
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>

<style>
    /* ── PAGE HERO INNER ── */
    .page-hero-inner {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: var(--space-48);
        align-items: center;
    }

    .page-hero-inner h1 {
        margin-bottom: var(--space-16);
    }

    .page-hero-inner p {
        margin-bottom: var(--space-24);
        font-size: var(--text-md);
    }

    .page-hero-actions {
        display: flex;
        gap: var(--space-12);
        flex-wrap: wrap;
    }

    .page-hero-badges {
        display: flex;
        flex-direction: column;
        gap: var(--space-12);
    }

    .hero-badge-item {
        display: flex;
        align-items: center;
        gap: var(--space-16);
        background: var(--white);
        border: 1.5px solid var(--gray-200);
        border-radius: var(--radius-md);
        padding: var(--space-16) var(--space-20);
        box-shadow: var(--shadow-xs);
    }

    .hero-badge-item i {
        font-size: 22px;
        color: var(--blue);
        width: 28px;
        text-align: center;
        flex-shrink: 0;
    }

    .hero-badge-item strong {
        display: block;
        font-size: var(--text-base);
        color: var(--gray-900);
    }

    .hero-badge-item span {
        font-size: var(--text-sm);
        color: var(--gray-500);
    }

    /* ── SERVICE DETAIL BLOCK ── */
    .service-detail-block {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: var(--space-56);
        align-items: start;
    }

    .service-detail-block.reverse {}

    .service-detail-icon {
        width: 64px;
        height: 64px;
        border-radius: var(--radius-lg);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        margin-bottom: var(--space-16);
    }

    .service-detail-icon.blue {
        background: var(--blue-light);
        color: var(--blue);
    }

    .service-detail-icon.green {
        background: var(--green-light);
        color: var(--green-dark);
    }

    .service-detail-icon.amber {
        background: var(--amber-light);
        color: var(--amber-dark);
    }

    .service-detail-info h2 {
        font-size: clamp(24px, 3vw, 36px);
        margin-bottom: var(--space-16);
        color: var(--gray-900);
    }

    .service-detail-desc {
        font-size: var(--text-md);
        color: var(--gray-600);
        line-height: 1.75;
        margin-bottom: var(--space-24);
    }

    /* AC Type Chips */
    .ac-type-chips {
        display: flex;
        gap: var(--space-10, 10px);
        flex-wrap: wrap;
        margin-top: var(--space-20);
    }

    .ac-chip {
        display: flex;
        align-items: center;
        gap: var(--space-6, 6px);
        background: var(--blue-light);
        color: var(--blue);
        border: 1.5px solid rgba(13, 110, 253, 0.2);
        border-radius: var(--radius-full);
        padding: 7px 14px;
        font-size: var(--text-sm);
        font-weight: 600;
    }

    /* Warranty Strip */
    .warranty-strip {
        display: flex;
        align-items: flex-start;
        gap: var(--space-14, 14px);
        background: var(--blue-light);
        border: 1.5px solid rgba(13, 110, 253, 0.2);
        border-radius: var(--radius-md);
        padding: var(--space-16) var(--space-20);
        margin-top: var(--space-24);
    }

    .warranty-strip i {
        font-size: 22px;
        color: var(--blue);
        margin-top: 2px;
        flex-shrink: 0;
    }

    .warranty-strip strong {
        display: block;
        font-weight: 700;
        font-size: var(--text-base);
        color: var(--gray-900);
    }

    .warranty-strip span {
        font-size: var(--text-sm);
        color: var(--gray-600);
    }

    /* ── SERVICE PRICE CARD ── */
    .service-price-card {
        background: var(--white);
        border: 2px solid var(--blue);
        border-radius: var(--radius-xl);
        overflow: hidden;
        box-shadow: var(--shadow-md);
        margin-bottom: var(--space-20);
    }

    .service-price-card.green {
        border-color: var(--green);
    }

    .service-price-card.amber {
        border-color: var(--amber);
    }

    .spc-header {
        background: var(--blue);
        color: var(--white);
        padding: var(--space-16) var(--space-24);
        font-size: var(--text-md);
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: var(--space-10, 10px);
    }

    .spc-header.green {
        background: var(--green);
    }

    .spc-header.amber {
        background: var(--amber);
        color: var(--gray-900);
    }

    .spc-body {
        padding: var(--space-24);
    }

    .spc-price-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: var(--space-16);
        margin-bottom: var(--space-20);
        padding-bottom: var(--space-20);
        border-bottom: 1px solid var(--gray-100);
    }

    .spc-label {
        font-size: var(--text-xs);
        color: var(--gray-500);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 4px;
    }

    .spc-price {
        font-size: var(--text-2xl);
        font-weight: 900;
        color: var(--blue);
    }

    .spc-price.green {
        color: var(--green-dark);
    }

    .spc-price.amber {
        color: var(--amber-dark);
    }

    .spc-price span {
        font-size: var(--text-sm);
        font-weight: 400;
        color: var(--gray-500);
    }

    .spc-note {
        display: flex;
        align-items: flex-start;
        gap: var(--space-8);
        background: var(--gray-50);
        border-radius: var(--radius-sm);
        padding: var(--space-12);
        font-size: var(--text-xs);
        color: var(--gray-600);
        margin-bottom: var(--space-16);
    }

    .spc-note.amber {
        background: var(--amber-light);
    }

    .spc-note i {
        color: var(--blue);
        margin-top: 1px;
        flex-shrink: 0;
    }

    .spc-note.amber i {
        color: var(--amber-dark);
    }

    /* Benefit / Issues Boxes */
    .service-benefit-box,
    .service-issues-box,
    .install-checklist-box {
        background: var(--gray-50);
        border: 1.5px solid var(--gray-200);
        border-radius: var(--radius-lg);
        padding: var(--space-20) var(--space-24);
    }

    .service-benefit-box.amber {
        background: var(--amber-light);
        border-color: rgba(255, 193, 7, 0.25);
    }

    .service-benefit-box h4,
    .service-issues-box h4,
    .install-checklist-box h4 {
        font-size: var(--text-base);
        font-weight: 700;
        color: var(--gray-900);
        margin-bottom: var(--space-14, 14px);
        display: flex;
        align-items: center;
        gap: var(--space-8);
    }

    .service-benefit-box ul,
    .service-issues-box ul {
        display: flex;
        flex-direction: column;
        gap: var(--space-10, 10px);
    }

    .service-benefit-box li,
    .service-issues-box li {
        display: flex;
        align-items: center;
        gap: var(--space-10, 10px);
        font-size: var(--text-sm);
        color: var(--gray-700);
    }

    .service-benefit-box li i {
        color: var(--blue);
        font-size: 12px;
    }

    .service-benefit-box.amber li i {
        color: var(--amber-dark);
    }

    .service-issues-box li i {
        font-size: 14px;
    }

    /* Gas Types Grid */
    .gas-types-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: var(--space-12);
        margin-top: var(--space-24);
    }

    .gas-type-card {
        background: var(--white);
        border: 2px solid var(--amber);
        border-radius: var(--radius-md);
        padding: var(--space-16) var(--space-12);
        text-align: center;
    }

    .gas-name {
        font-size: var(--text-lg);
        font-weight: 900;
        color: var(--amber-dark);
    }

    .gas-desc {
        font-size: 11px;
        color: var(--gray-500);
        margin: 4px 0 8px;
    }

    .gas-price {
        font-size: var(--text-sm);
        font-weight: 700;
        color: var(--gray-800);
    }

    /* Install includes grid */
    .install-includes-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: var(--space-8);
        margin-top: var(--space-8);
    }

    .install-include {
        display: flex;
        align-items: center;
        gap: var(--space-8);
        font-size: var(--text-sm);
        color: var(--gray-700);
    }

    .install-include i {
        color: var(--green);
        font-size: 12px;
    }

    /* Section Divider */
    .section-divider {
        padding: 0;
    }

    .section-divider hr {
        border: none;
        border-top: 1px solid var(--gray-200);
    }

    /* Brands Row */
    .brands-row {
        display: flex;
        flex-wrap: wrap;
        gap: var(--space-10, 10px);
        justify-content: center;
    }

    .brand-pill {
        background: var(--white);
        border: 1.5px solid var(--gray-200);
        border-radius: var(--radius-full);
        padding: 8px 20px;
        font-size: var(--text-sm);
        font-weight: 700;
        color: var(--gray-700);
        transition: var(--transition);
    }

    .brand-pill:hover {
        border-color: var(--blue);
        color: var(--blue);
        background: var(--blue-light);
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 1024px) {
        .service-detail-block {
            gap: var(--space-32);
        }

        .page-hero-inner {
            grid-template-columns: 1fr;
            gap: var(--space-32);
        }

        .page-hero-badges {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: var(--space-12);
        }
    }

    @media (max-width: 768px) {

        .service-detail-block,
        .service-detail-block.reverse {
            grid-template-columns: 1fr;
        }

        .service-detail-block.reverse .service-detail-aside {
            order: -1;
        }

        .gas-types-grid {
            grid-template-columns: repeat(3, 1fr);
        }

        .spc-price-row {
            grid-template-columns: 1fr;
        }

        .page-hero-badges {
            grid-template-columns: 1fr;
        }

        .install-includes-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        .gas-types-grid {
            grid-template-columns: 1fr;
        }

        .page-hero-actions {
            flex-direction: column;
        }

        .page-hero-actions .btn {
            width: 100%;
        }
    }
</style>