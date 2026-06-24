<?php
/* ============================================================
   EZAC SERVICE — HOME PAGE
   index.php
   ============================================================ */

$current_page     = 'home';
$page_title       = 'EZAC Service — AC Repair, Home Appliance & Plumbing Services in Bihar';
$page_description = 'Professional AC repair, installation, refrigerator, washing machine, electrical and plumbing services at your doorstep. Certified technicians, 90-day warranty, transparent pricing across Bihar, Jharkhand & UP.';
$page_canonical   = 'https://ezacservice.in/';

include 'partials/head.php';
include 'partials/navbar.php';
?>

<!-- ══════════════════════════════════════════
     HERO SECTION
════════════════════════════════════════════ -->
<section class="hero">
    <div class="container">
        <div class="hero-grid">

            <!-- LEFT: Content -->
            <div class="hero-content">
                <div class="hero-eyebrow">
                    <i class="fas fa-shield-alt"></i>
                    Trusted by 50,000+ customers across Bihar
                </div>

                <h1 class="hero-title">
                    Expert Home<br>
                    Services, Right<br>
                    at Your <span class="hero-accent">Doorstep.</span>
                </h1>

                <p class="hero-sub">
                    AC repair, installation, refrigerator service, washing machine,
                    electrical &amp; plumbing — all with certified technicians,
                    90-day warranty, and transparent pricing.
                </p>

                <div class="hero-actions">
                    <a href="/book.php" class="btn btn-white btn-lg">
                        <i class="fas fa-calendar-check"></i> Book a Service
                    </a>
                    <a href="tel:+918003001234" class="btn btn-white-outline btn-lg">
                        <i class="fas fa-phone"></i> +91-800-300-1234
                    </a>
                </div>

                <!-- Hero Stats -->
                <div class="hero-stats">
                    <div class="hero-stat">
                        <div class="hero-stat-num">50K+</div>
                        <div class="hero-stat-lbl">Happy Customers</div>
                    </div>
                    <div class="hero-stat-divider"></div>
                    <div class="hero-stat">
                        <div class="hero-stat-num">200+</div>
                        <div class="hero-stat-lbl">Expert Technicians</div>
                    </div>
                    <div class="hero-stat-divider"></div>
                    <div class="hero-stat">
                        <div class="hero-stat-num">4.9★</div>
                        <div class="hero-stat-lbl">Average Rating</div>
                    </div>
                    <div class="hero-stat-divider"></div>
                    <div class="hero-stat">
                        <div class="hero-stat-num">10 yr</div>
                        <div class="hero-stat-lbl">Experience</div>
                    </div>
                </div>
            </div>

            <!-- RIGHT: Quick Book Card -->
            <div class="hero-card">
                <div class="hero-card-header">
                    <span class="hero-card-icon"><i class="fas fa-bolt"></i></span>
                    <span class="hero-card-title">Quick Book a Service</span>
                </div>

                <!-- Service Quick Buttons -->
                <div class="service-quick-grid">
                    <a href="/service-ac.php" class="service-quick-btn">
                        <i class="fas fa-snowflake"></i>
                        <span>AC Repair</span>
                    </a>
                    <a href="/service-ac.php" class="service-quick-btn">
                        <i class="fas fa-tools"></i>
                        <span>AC Install</span>
                    </a>
                    <a href="/service-ac.php" class="service-quick-btn">
                        <i class="fas fa-broom"></i>
                        <span>AC Cleaning</span>
                    </a>
                    <a href="/services.php" class="service-quick-btn">
                        <i class="fas fa-temperature-low"></i>
                        <span>Refrigerator</span>
                    </a>
                    <a href="/services.php" class="service-quick-btn">
                        <i class="fas fa-sync-alt"></i>
                        <span>Washing Machine</span>
                    </a>
                    <a href="/services.php" class="service-quick-btn">
                        <i class="fas fa-plug"></i>
                        <span>Electrical</span>
                    </a>
                    <a href="/services.php" class="service-quick-btn">
                        <i class="fas fa-faucet"></i>
                        <span>Plumbing</span>
                    </a>
                    <a href="/services.php" class="service-quick-btn">
                        <i class="fas fa-ellipsis-h"></i>
                        <span>All Services</span>
                    </a>
                </div>

                <!-- Area Search -->
                <div class="input-group" style="margin-bottom:12px">
                    <i class="fas fa-map-marker-alt input-icon"></i>
                    <input type="text" placeholder="Enter your area or pincode" id="heroAreaInput" autocomplete="off">
                </div>

                <a href="/book.php" class="btn btn-primary btn-block">
                    <i class="fas fa-search"></i> Find Technicians Near Me
                </a>

                <p class="hero-card-note">
                    <i class="fas fa-clock"></i> Available 7 AM – 10 PM &nbsp;·&nbsp;
                    <i class="fas fa-calendar"></i> All 7 Days
                </p>
            </div>

        </div><!-- /hero-grid -->
    </div><!-- /container -->
</section>

<!-- ══════════════════════════════════════════
     TRUST BAR
════════════════════════════════════════════ -->
<div class="trust-bar">
    <div class="container">
        <div class="trust-bar-inner">
            <div class="trust-item">
                <i class="fas fa-user-check"></i>
                <span>Verified Technicians</span>
            </div>
            <div class="trust-divider"></div>
            <div class="trust-item">
                <i class="fas fa-clock"></i>
                <span>Same-Day Service</span>
            </div>
            <div class="trust-divider"></div>
            <div class="trust-item">
                <i class="fas fa-shield-alt"></i>
                <span>90-Day Warranty</span>
            </div>
            <div class="trust-divider"></div>
            <div class="trust-item">
                <i class="fas fa-rupee-sign"></i>
                <span>Transparent Pricing</span>
            </div>
            <div class="trust-divider"></div>
            <div class="trust-item amber">
                <i class="fas fa-star"></i>
                <span>4.9 / 5 Rating</span>
            </div>
            <div class="trust-divider"></div>
            <div class="trust-item green">
                <i class="fas fa-headset"></i>
                <span>24/7 Support</span>
            </div>
        </div>
    </div>
</div>

<!-- ══════════════════════════════════════════
     SERVICES SECTION
════════════════════════════════════════════ -->
<section class="section" id="services">
    <div class="container">

        <div class="section-header center">
            <div class="section-label">Our Services</div>
            <h2 class="section-title">Everything Your Home Needs</h2>
            <p class="section-subtitle">
                From AC to plumbing — we cover all home appliance &amp; service needs
                with certified professionals and genuine spare parts.
            </p>
        </div>

        <div class="services-grid">

            <a href="/service-ac.php" class="service-card">
                <div class="service-icon"><i class="fas fa-snowflake"></i></div>
                <h3>AC Repair</h3>
                <p>Not cooling, gas leak, PCB fault, water dripping — all AC issues fixed.</p>
                <div class="service-card-price"><span class="badge badge-blue">From ₹399</span></div>
                <div class="service-card-link">Book Now <i class="fas fa-arrow-right"></i></div>
            </a>

            <a href="/service-ac.php" class="service-card">
                <div class="service-icon"><i class="fas fa-tools"></i></div>
                <h3>AC Installation</h3>
                <p>Split, window, cassette AC installation by brand-certified engineers.</p>
                <div class="service-card-price"><span class="badge badge-blue">From ₹799</span></div>
                <div class="service-card-link">Book Now <i class="fas fa-arrow-right"></i></div>
            </a>

            <a href="/service-ac.php" class="service-card">
                <div class="service-icon"><i class="fas fa-broom"></i></div>
                <h3>AC Maintenance</h3>
                <p>Deep cleaning, filter wash, coil cleaning — restores full cooling efficiency.</p>
                <div class="service-card-price"><span class="badge badge-blue">From ₹499</span></div>
                <div class="service-card-link">Book Now <i class="fas fa-arrow-right"></i></div>
            </a>

            <a href="/services.php#appliances" class="service-card green">
                <div class="service-icon"><i class="fas fa-temperature-low"></i></div>
                <h3>Refrigerator Repair</h3>
                <p>Cooling issues, compressor, thermostat — all fridge brands serviced.</p>
                <div class="service-card-price"><span class="badge badge-green">From ₹399</span></div>
                <div class="service-card-link">Book Now <i class="fas fa-arrow-right"></i></div>
            </a>

            <a href="/services.php#appliances" class="service-card green">
                <div class="service-icon"><i class="fas fa-sync-alt"></i></div>
                <h3>Washing Machine</h3>
                <p>Front / top load, drum, motor, PCB repair at your doorstep.</p>
                <div class="service-card-price"><span class="badge badge-green">From ₹399</span></div>
                <div class="service-card-link">Book Now <i class="fas fa-arrow-right"></i></div>
            </a>

            <a href="/services.php#appliances" class="service-card green">
                <div class="service-icon"><i class="fas fa-shower"></i></div>
                <h3>Geyser / Water Heater</h3>
                <p>Not heating, thermostat, element replacement, new installation.</p>
                <div class="service-card-price"><span class="badge badge-green">From ₹349</span></div>
                <div class="service-card-link">Book Now <i class="fas fa-arrow-right"></i></div>
            </a>

            <a href="/services.php#electrical" class="service-card amber">
                <div class="service-icon"><i class="fas fa-plug"></i></div>
                <h3>Electrical Services</h3>
                <p>Wiring, switchboard, fan fitting, MCB, inverter — certified electricians.</p>
                <div class="service-card-price"><span class="badge badge-amber">From ₹199</span></div>
                <div class="service-card-link">Book Now <i class="fas fa-arrow-right"></i></div>
            </a>

            <a href="/services.php#plumbing" class="service-card amber">
                <div class="service-icon"><i class="fas fa-faucet"></i></div>
                <h3>Plumbing Services</h3>
                <p>Pipe leaks, tap fitting, drain cleaning, tank repair — all plumbing work.</p>
                <div class="service-card-price"><span class="badge badge-amber">From ₹199</span></div>
                <div class="service-card-link">Book Now <i class="fas fa-arrow-right"></i></div>
            </a>

        </div><!-- /services-grid -->

        <div class="text-center" style="margin-top:var(--space-40)">
            <a href="/services.php" class="btn btn-outline btn-lg">
                View All Services <i class="fas fa-arrow-right"></i>
            </a>
        </div>

    </div>
</section>

<!-- ══════════════════════════════════════════
     HOW IT WORKS
════════════════════════════════════════════ -->
<section class="section section-gray" id="how-it-works">
    <div class="container">

        <div class="section-header center">
            <div class="section-label green">How It Works</div>
            <h2 class="section-title">Service in 4 Simple Steps</h2>
            <p class="section-subtitle">
                Booking a home service has never been easier. From tap to technician in minutes.
            </p>
        </div>

        <div class="steps-grid">

            <div class="step-card">
                <div class="step-num">1</div>
                <h3>Choose a Service</h3>
                <p>Browse our complete list of home services and select what you need.</p>
            </div>

            <div class="step-card">
                <div class="step-num">2</div>
                <h3>Book a Slot</h3>
                <p>Pick a convenient date and time. We're available 7 days a week, 7 AM to 10 PM.</p>
            </div>

            <div class="step-card">
                <div class="step-num">3</div>
                <h3>Technician Arrives</h3>
                <p>Our verified expert arrives on time with all tools, spare parts, and ID.</p>
            </div>

            <div class="step-card">
                <div class="step-num">4</div>
                <h3>Pay After Service</h3>
                <p>Pay only after you're satisfied. Rate your experience to help us improve.</p>
            </div>

        </div>

        <div class="text-center" style="margin-top:var(--space-48)">
            <a href="/book.php" class="btn btn-primary btn-lg">
                <i class="fas fa-calendar-check"></i> Book Now — It's Free to Schedule
            </a>
        </div>

    </div>
</section>

<!-- ══════════════════════════════════════════
     WHY CHOOSE EZAC
════════════════════════════════════════════ -->
<section class="section" id="why-us">
    <div class="container">
        <div class="grid-2" style="gap:var(--space-56);align-items:center">

            <!-- Stats Visual Block -->
            <div class="stats-block">
                <div style="font-size:var(--text-xl);font-weight:800;margin-bottom:var(--space-8)">
                    EZAC Service By The Numbers
                </div>
                <p style="color:rgba(255,255,255,0.75);font-size:var(--text-base);margin-bottom:var(--space-32)">
                    A decade of trusted home services across Bihar, Jharkhand &amp; Uttar Pradesh.
                </p>
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-num">50K+</div>
                        <div class="stat-lbl">Homes Served</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-num">200+</div>
                        <div class="stat-lbl">Technicians</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-num">98%</div>
                        <div class="stat-lbl">First-Fix Rate</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-num">4.9★</div>
                        <div class="stat-lbl">Avg. Rating</div>
                    </div>
                </div>
                <div
                    style="background:rgba(255,255,255,0.12);border-radius:var(--radius-md);padding:var(--space-20);text-align:center;margin-top:var(--space-24)">
                    <div style="font-size:var(--text-sm);opacity:0.8;margin-bottom:6px">Serving 30+ cities across 3
                        states</div>
                    <div style="font-weight:700;font-size:var(--text-base)">
                        Patna · Madhepura · Bhagalpur · Muzaffarpur · Saharsa · Darbhanga & more
                    </div>
                </div>
            </div>

            <!-- Why Items -->
            <div>
                <div class="section-label">Why EZAC?</div>
                <h2 class="section-title">Trusted, Reliable,<br>Professional Service</h2>
                <p style="color:var(--gray-600);margin-bottom:var(--space-32);font-size:var(--text-md)">
                    We are not just a repair company — we are your long-term home service partner.
                    Every visit leaves your home better than before.
                </p>

                <div class="why-grid">
                    <div class="why-item">
                        <div class="why-icon"><i class="fas fa-user-shield"></i></div>
                        <div>
                            <h4>Background-Verified Team</h4>
                            <p>All technicians are Aadhaar-verified and police-checked before joining.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fas fa-certificate"></i></div>
                        <div>
                            <h4>Brand-Certified Experts</h4>
                            <p>Trained and certified for all major appliance brands &amp; models.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fas fa-shield-alt"></i></div>
                        <div>
                            <h4>90-Day Service Warranty</h4>
                            <p>Free re-service if the same issue returns within 90 days. No questions asked.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fas fa-rupee-sign"></i></div>
                        <div>
                            <h4>No Hidden Charges</h4>
                            <p>Upfront pricing shown before work begins. You approve, then we proceed.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fas fa-clock"></i></div>
                        <div>
                            <h4>On-Time, Every Time</h4>
                            <p>We respect your schedule. Real-time SMS updates on technician arrival.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fas fa-tools"></i></div>
                        <div>
                            <h4>Genuine Spare Parts</h4>
                            <p>Only OEM-grade spare parts used. No local / cheap substitutes.</p>
                        </div>
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
            <div class="section-label">Brands</div>
            <h2 class="section-title" style="font-size:var(--text-2xl)">All Major Brands Covered</h2>
        </div>
        <div class="brands-grid">
            <?php
      $brands = ['LG','Samsung','Voltas','Daikin','Hitachi','Godrej','Blue Star','Carrier','O\'General','Panasonic','Haier','Lloyd','Whirlpool','IFB'];
      foreach ($brands as $brand): ?>
            <div class="brand-badge">
                <?php echo htmlspecialchars($brand); ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     CUSTOMER TESTIMONIALS
════════════════════════════════════════════ -->
<section class="section section-dark" id="reviews">
    <div class="container">

        <div class="section-header center">
            <div class="section-label dark">Customer Reviews</div>
            <h2 class="section-title white">What Our Customers Say</h2>
            <p class="section-subtitle white">
                Real reviews from real customers — verified bookings only.
            </p>
        </div>

        <!-- Rating Summary -->
        <div class="rating-summary">
            <div class="rating-big">4.9</div>
            <div class="rating-stars-big">★★★★★</div>
            <div class="rating-count">Based on 50,000+ reviews</div>
        </div>

        <div class="reviews-grid">

            <?php
      $reviews = [
        [
          'tag'     => 'AC Repair',
          'stars'   => 5,
          'text'    => 'My AC stopped cooling in peak summer. EZAC sent a technician within 2 hours. He diagnosed a gas leak, fixed it professionally, and charged exactly what was quoted. Excellent!',
          'initials'=> 'RK',
          'name'    => 'Rajesh Kumar',
          'loc'     => 'Patna, Bihar',
          'color'   => '#0D6EFD',
        ],
        [
          'tag'     => 'Washing Machine',
          'stars'   => 5,
          'text'    => 'Washing machine drum stopped spinning. The technician had the spare part with him and completed the repair in under an hour. Very professional and punctual!',
          'initials'=> 'PS',
          'name'    => 'Priya Sharma',
          'loc'     => 'Bhagalpur, Bihar',
          'color'   => '#00B894',
        ],
        [
          'tag'     => 'AC Installation',
          'stars'   => 5,
          'text'    => 'Got my new 1.5 ton split AC installed by EZAC. The team was punctual, clean, and very knowledgeable. They explained optimal placement and completed the job neatly.',
          'initials'=> 'AM',
          'name'    => 'Amit Mishra',
          'loc'     => 'Muzaffarpur, Bihar',
          'color'   => '#FFC107',
          'textColor'=> '#333',
        ],
        [
          'tag'     => 'Refrigerator',
          'stars'   => 5,
          'text'    => 'Fridge wasn\'t cooling for days. Called EZAC and the technician came next morning. Compressor issue diagnosed and fixed in 3 hours. The 90-day warranty gives great peace of mind!',
          'initials'=> 'SD',
          'name'    => 'Sunita Devi',
          'loc'     => 'Saharsa, Bihar',
          'color'   => '#6610f2',
        ],
        [
          'tag'     => 'Electrical',
          'stars'   => 5,
          'text'    => 'Had a short circuit issue. The electrician was thorough, identified the fault, replaced damaged wiring safely, and even checked the entire panel. Great safety awareness.',
          'initials'=> 'MK',
          'name'    => 'Mohan Kumar',
          'loc'     => 'Madhepura, Bihar',
          'color'   => '#dc3545',
        ],
        [
          'tag'     => 'Plumbing',
          'stars'   => 5,
          'text'    => 'Bathroom tap was leaking badly. The plumber arrived on time, fixed it with quality fittings, and left no mess. Will definitely book again for all future service needs.',
          'initials'=> 'AN',
          'name'    => 'Anita Nanda',
          'loc'     => 'Darbhanga, Bihar',
          'color'   => '#fd7e14',
        ],
      ];
      ?>

            <?php foreach ($reviews as $r): ?>
            <div class="review-card">
                <div class="review-service-tag">
                    <?php echo htmlspecialchars($r['tag']); ?>
                </div>
                <div class="stars">
                    <?php echo str_repeat('★', $r['stars']); ?>
                </div>
                <p class="review-text">"
                    <?php echo htmlspecialchars($r['text']); ?>"
                </p>
                <div class="reviewer">
                    <div class="avatar"
                        style="background:<?php echo $r['color']; ?>;<?php echo isset($r['textColor']) ? 'color:'.$r['textColor'] : ''; ?>">
                        <?php echo htmlspecialchars($r['initials']); ?>
                    </div>
                    <div class="reviewer-info">
                        <span class="name">
                            <?php echo htmlspecialchars($r['name']); ?>
                        </span>
                        <span class="loc">
                            <?php echo htmlspecialchars($r['loc']); ?>
                        </span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div><!-- /reviews-grid -->

        <div class="text-center" style="margin-top:var(--space-40)">
            <a href="https://g.page/ezacservice/review" target="_blank" rel="noopener"
                class="btn btn-white-outline btn-lg">
                <i class="fab fa-google"></i> View All Reviews on Google
            </a>
        </div>

    </div>
</section>

<!-- ══════════════════════════════════════════
     PRICING PREVIEW
════════════════════════════════════════════ -->
<section class="section section-gray" id="pricing-preview">
    <div class="container">

        <div class="section-header center">
            <div class="section-label amber">Pricing</div>
            <h2 class="section-title">Transparent, Fixed Pricing</h2>
            <p class="section-subtitle">
                No surprises. You see the price before we begin any work.
            </p>
        </div>

        <div class="pricing-grid">

            <!-- BASIC -->
            <div class="pricing-card">
                <div class="pricing-plan">One-Time</div>
                <div class="pricing-name">Basic Service</div>
                <div class="pricing-price">
                    <span class="amount">₹299</span>
                    <span class="period"> / visit</span>
                </div>
                <hr class="pricing-divider">
                <ul class="pricing-features">
                    <li class="feature-item"><i class="fas fa-check"></i> Inspection + Diagnosis</li>
                    <li class="feature-item"><i class="fas fa-check"></i> Single appliance check</li>
                    <li class="feature-item"><i class="fas fa-check"></i> Written fault report</li>
                    <li class="feature-item"><i class="fas fa-check"></i> 30-day service warranty</li>
                    <li class="feature-item"><i class="fas fa-times"></i> Parts included</li>
                    <li class="feature-item"><i class="fas fa-times"></i> Priority booking</li>
                </ul>
                <div class="pricing-cta">
                    <a href="/book.php?plan=basic" class="btn btn-outline btn-block">Book Basic</a>
                </div>
            </div>

            <!-- POPULAR -->
            <div class="pricing-card featured">
                <div class="pricing-badge">⭐ Most Popular</div>
                <div class="pricing-plan">One-Time</div>
                <div class="pricing-name">Full Repair</div>
                <div class="pricing-price">
                    <span class="amount">₹599</span>
                    <span class="period"> / visit</span>
                </div>
                <hr class="pricing-divider">
                <ul class="pricing-features">
                    <li class="feature-item"><i class="fas fa-check"></i> Complete repair service</li>
                    <li class="feature-item"><i class="fas fa-check"></i> Gas refilling (AC)</li>
                    <li class="feature-item"><i class="fas fa-check"></i> Minor parts included</li>
                    <li class="feature-item"><i class="fas fa-check"></i> 90-day service warranty</li>
                    <li class="feature-item"><i class="fas fa-check"></i> Priority same-day slots</li>
                    <li class="feature-item"><i class="fas fa-times"></i> AMC benefits</li>
                </ul>
                <div class="pricing-cta">
                    <a href="/book.php?plan=full" class="btn btn-primary btn-block">Book Full Repair</a>
                </div>
            </div>

            <!-- AMC -->
            <div class="pricing-card">
                <div class="pricing-plan">Annual Plan</div>
                <div class="pricing-name">AMC Plan</div>
                <div class="pricing-price">
                    <span class="amount">₹1,999</span>
                    <span class="period"> / year</span>
                </div>
                <hr class="pricing-divider">
                <ul class="pricing-features">
                    <li class="feature-item"><i class="fas fa-check"></i> 4 free visits / year</li>
                    <li class="feature-item"><i class="fas fa-check"></i> Annual deep cleaning</li>
                    <li class="feature-item"><i class="fas fa-check"></i> Parts at cost price</li>
                    <li class="feature-item"><i class="fas fa-check"></i> 1-year warranty</li>
                    <li class="feature-item"><i class="fas fa-check"></i> Priority 24/7 support</li>
                    <li class="feature-item"><i class="fas fa-check"></i> Multi-appliance coverage</li>
                </ul>
                <div class="pricing-cta">
                    <a href="/pricing.php" class="btn btn-outline btn-block">View AMC Plans</a>
                </div>
            </div>

        </div><!-- /pricing-grid -->

        <div class="text-center" style="margin-top:var(--space-32)">
            <a href="/pricing.php" class="btn btn-ghost">
                View Full Price List <i class="fas fa-arrow-right"></i>
            </a>
        </div>

    </div>
</section>

<!-- ══════════════════════════════════════════
     FAQ SECTION
════════════════════════════════════════════ -->
<section class="section" id="faq">
    <div class="container">

        <div class="section-header center">
            <div class="section-label">FAQ</div>
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">
                Got a question? We've got the answer. Can't find it? Call us.
            </p>
        </div>

        <div class="faq-list">

            <?php
      $faqs = [
        [
          'q' => 'How quickly can I get a technician?',
          'a' => 'We offer same-day service in most cities. You can book a slot as early as 2 hours from now. Our technicians are available 7 AM to 10 PM, all 7 days of the week including public holidays.',
        ],
        [
          'q' => 'Are your technicians verified and trained?',
          'a' => 'Yes. Every EZAC technician undergoes Aadhaar-linked identity verification, police background check, technical training, and brand-specific certification before being onboarded. We regularly re-train our team on new models and technology.',
        ],
        [
          'q' => 'What is the 90-day service warranty?',
          'a' => 'If the same issue returns within 90 days of our repair, we will fix it at absolutely no extra cost. This applies to all repair services (not diagnostic-only visits). Our AMC plan extends this to 1 full year.',
        ],
        [
          'q' => 'How is pricing decided? Is there a visit charge?',
          'a' => 'The Basic plan includes a ₹299 inspection/diagnosis fee. If you proceed with the repair, that fee is adjusted against the total cost. Full pricing is shown upfront — you approve before we start any work. No hidden charges, ever.',
        ],
        [
          'q' => 'Which brands and appliances do you service?',
          'a' => 'We service all major brands including LG, Samsung, Voltas, Daikin, Hitachi, Godrej, Whirlpool, Haier, Panasonic, O\'General, Blue Star, Carrier, Lloyd, and more — for ACs, refrigerators, washing machines, geysers, and other home appliances.',
        ],
        [
          'q' => 'What payment methods do you accept?',
          'a' => 'We accept cash, UPI (PhonePe, GPay, Paytm), debit/credit cards, and net banking. You pay only after the service is completed and you are satisfied. No advance payment required for standard services.',
        ],
        [
          'q' => 'Do you provide service for offices and commercial spaces?',
          'a' => 'Absolutely. We serve homes, offices, shops, apartments, hotels, and commercial establishments. For large commercial requirements, we have a dedicated Business Pro AMC plan with unlimited appliance coverage and priority response.',
        ],
      ];
      ?>

            <?php foreach ($faqs as $index => $faq): ?>
            <div class="faq-item <?php echo $index === 0 ? 'open' : ''; ?>">
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

        </div><!-- /faq-list -->

        <div class="text-center" style="margin-top:var(--space-40)">
            <p style="color:var(--gray-600);margin-bottom:var(--space-16)">Still have questions?</p>
            <a href="/contact.php" class="btn btn-outline">
                <i class="fas fa-envelope"></i> Contact Us
            </a>
            &nbsp;
            <a href="tel:+918003001234" class="btn btn-ghost">
                <i class="fas fa-phone"></i> +91-800-300-1234
            </a>
        </div>

    </div>
</section>

<!-- ══════════════════════════════════════════
     CTA BANNER
════════════════════════════════════════════ -->
<section class="section-sm">
    <div class="container">
        <div class="cta-banner">
            <div>
                <h2>Ready to Book a Service?</h2>
                <p>Get a certified technician at your door — today. No advance payment needed.</p>
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

<!-- ── PAGE-SPECIFIC STYLES ── -->
<style>
    /* ── HERO ── */
    .hero {
        background: linear-gradient(135deg, #0a1628 0%, #1a3a6e 55%, #0D6EFD 100%);
        color: #fff;
        padding: 90px 0 80px;
        position: relative;
        overflow: hidden;
    }

    .hero::before {
        content: '';
        position: absolute;
        top: -80px;
        right: -80px;
        width: 520px;
        height: 520px;
        background: rgba(255, 255, 255, 0.03);
        border-radius: 50%;
        pointer-events: none;
    }

    .hero::after {
        content: '';
        position: absolute;
        bottom: -100px;
        left: -60px;
        width: 420px;
        height: 420px;
        background: rgba(13, 110, 253, 0.12);
        border-radius: 50%;
        pointer-events: none;
    }

    .hero-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 64px;
        align-items: center;
        position: relative;
        z-index: 1;
    }

    /* Hero Left */
    .hero-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: var(--space-8);
        background: rgba(255, 255, 255, 0.12);
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 7px 16px;
        border-radius: var(--radius-full);
        font-size: var(--text-sm);
        font-weight: 600;
        margin-bottom: var(--space-20);
        color: rgba(255, 255, 255, 0.95);
    }

    .hero-eyebrow i {
        color: var(--amber);
    }

    .hero-title {
        font-size: clamp(32px, 4.5vw, 58px);
        font-weight: 900;
        line-height: 1.08;
        margin-bottom: var(--space-20);
        color: #fff;
    }

    .hero-accent {
        color: var(--amber);
    }

    .hero-sub {
        font-size: var(--text-lg);
        color: rgba(255, 255, 255, 0.82);
        margin-bottom: var(--space-32);
        line-height: 1.75;
        max-width: 500px;
    }

    .hero-actions {
        display: flex;
        flex-wrap: wrap;
        gap: var(--space-14, 14px);
        margin-bottom: var(--space-48);
    }

    /* Hero Stats */
    .hero-stats {
        display: flex;
        align-items: center;
        gap: var(--space-24);
        padding-top: var(--space-32);
        border-top: 1px solid rgba(255, 255, 255, 0.15);
    }

    .hero-stat-num {
        font-size: 28px;
        font-weight: 900;
        color: #fff;
        line-height: 1.1;
    }

    .hero-stat-lbl {
        font-size: var(--text-xs);
        color: rgba(255, 255, 255, 0.6);
        margin-top: 3px;
        font-weight: 500;
    }

    .hero-stat-divider {
        width: 1px;
        height: 40px;
        background: rgba(255, 255, 255, 0.18);
        flex-shrink: 0;
    }

    /* Hero Right Card */
    .hero-card {
        background: #fff;
        border-radius: var(--radius-xl);
        padding: var(--space-32);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.25);
        color: var(--gray-800);
    }

    .hero-card-header {
        display: flex;
        align-items: center;
        gap: var(--space-10, 10px);
        margin-bottom: var(--space-20);
    }

    .hero-card-icon {
        width: 32px;
        height: 32px;
        background: var(--blue);
        border-radius: var(--radius-sm);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 15px;
        flex-shrink: 0;
    }

    .hero-card-title {
        font-size: var(--text-md);
        font-weight: 700;
        color: var(--gray-900);
    }

    /* Quick Service Grid */
    .service-quick-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: var(--space-8);
        margin-bottom: var(--space-16);
    }

    .service-quick-btn {
        background: var(--gray-50);
        border: 1.5px solid var(--gray-200);
        border-radius: var(--radius-md);
        padding: 12px 8px;
        text-align: center;
        cursor: pointer;
        transition: var(--transition);
        font-size: 12px;
        font-weight: 600;
        color: var(--gray-700);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 6px;
        text-decoration: none;
    }

    .service-quick-btn i {
        font-size: 20px;
        color: var(--blue);
    }

    .service-quick-btn span {
        line-height: 1.2;
        font-size: 11px;
    }

    .service-quick-btn:hover {
        border-color: var(--blue);
        background: var(--blue-light);
        color: var(--blue);
        transform: translateY(-2px);
    }

    .service-quick-btn:hover i {
        color: var(--blue);
    }

    .hero-card-note {
        text-align: center;
        font-size: 12px;
        color: var(--gray-500);
        margin-top: var(--space-10, 10px);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: var(--space-8);
    }

    .hero-card-note i {
        color: var(--blue);
        font-size: 11px;
    }

    /* ── BRANDS GRID ── */
    .brands-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(110px, 1fr));
        gap: var(--space-12);
    }

    .brand-badge {
        background: var(--white);
        border: 1.5px solid var(--gray-200);
        border-radius: var(--radius-md);
        padding: 14px 12px;
        text-align: center;
        font-weight: 700;
        font-size: var(--text-sm);
        color: var(--gray-700);
        transition: var(--transition);
    }

    .brand-badge:hover {
        border-color: var(--blue);
        color: var(--blue);
        background: var(--blue-light);
    }

    /* ── RATING SUMMARY ── */
    .rating-summary {
        text-align: center;
        margin-bottom: var(--space-40);
    }

    .rating-big {
        font-size: clamp(48px, 6vw, 72px);
        font-weight: 900;
        color: var(--white);
        line-height: 1;
        margin-bottom: var(--space-8);
    }

    .rating-stars-big {
        font-size: 28px;
        color: var(--amber);
        letter-spacing: 4px;
        margin-bottom: var(--space-8);
    }

    .rating-count {
        font-size: var(--text-sm);
        color: rgba(255, 255, 255, 0.55);
    }

    /* ── RESPONSIVE OVERRIDES ── */
    @media (max-width: 1024px) {
        .hero-grid {
            gap: var(--space-32);
        }

        .service-quick-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    @media (max-width: 768px) {
        .hero {
            padding: 52px 0 40px;
        }

        .hero-grid {
            grid-template-columns: 1fr;
            gap: var(--space-32);
        }

        .hero-card {
            display: none;
        }

        /* hidden on mobile — use CTA buttons instead */
        .hero-sub {
            font-size: var(--text-base);
        }

        .hero-stats {
            flex-wrap: wrap;
            gap: var(--space-16);
        }

        .hero-stat-divider {
            display: none;
        }

        .brands-grid {
            grid-template-columns: repeat(auto-fill, minmax(90px, 1fr));
        }
    }

    @media (max-width: 480px) {
        .hero-actions {
            flex-direction: column;
        }

        .hero-actions .btn {
            width: 100%;
        }
    }
</style>