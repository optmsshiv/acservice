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
                    Trusted by 5,000+ customers across Delhi NCR
                </div>

                <h1 class="hero-title">
                    Expert Home<br>
                    Services, Right<br>
                    at Your <span class="hero-accent">Doorstep.</span>
                </h1>

                <p class="hero-sub">
                    AC repair, installation, refrigerator service, washing machine,
                    electrical &amp; plumbing — all with certified technicians,
                    and transparent pricing.
                </p>

                <div class="hero-actions">
                    <a href="/book.php" class="btn btn-white btn-lg">
                        <i class="fas fa-calendar-check"></i> Book a Service
                    </a>
                    <a href="tel:+917827464409" class="btn btn-white-outline btn-lg">
                        <i class="fas fa-phone"></i> +91-782-746-4409


                    </a>
                </div>

                <!-- Hero Stats -->
                <div class="hero-stats">
                    <div class="hero-stat">
                        <div class="hero-stat-num">5K+</div>
                        <div class="hero-stat-lbl">Happy Customers</div>
                    </div>
                    <div class="hero-stat-divider"></div>
                    <div class="hero-stat">
                        <div class="hero-stat-num">20+</div>
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
                    <a href="/services.php#ac-service" class="service-quick-btn">
                        <i class="fas fa-wind"></i>
                        <span>AC Service</span>
                    </a>
                    <a href="/services.php#ac-repair" class="service-quick-btn">
                        <i class="fas fa-snowflake"></i>
                        <span>AC Repair</span>
                    </a>
                    <a href="/services.php#ac-gas-refill" class="service-quick-btn">
                        <i class="fas fa-gas-pump"></i>
                        <span>Gas Refill</span>
                    </a>
                    <a href="/services.php#ac-installation" class="service-quick-btn">
                        <i class="fas fa-hammer"></i>
                        <span>AC Install</span>
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
            <h2 class="section-title">Expert AC Services for Every Need</h2>
            <p class="section-subtitle">
                Window AC or Split AC — we handle repair, gas refilling, deep cleaning
                and fresh installation with certified technicians and genuine parts.
            </p>
        </div>

        <div class="services-grid">

            <a href="/services.php#ac-service" class="service-card">
                <div class="sc-top">
                    <div class="service-icon"><i class="fas fa-wind"></i></div>
                    <div class="sc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
                <h3>AC Service</h3>
                <p>Deep cleaning, filter wash, coil cleaning — restores full cooling efficiency for window &amp; split ACs.</p>
                <div class="sc-footer">
                    <span class="sc-tag">Window &amp; Split AC</span>
                    <span class="sc-book">Book Now →</span>
                </div>
            </a>

            <a href="/services.php#ac-repair" class="service-card">
                <div class="sc-top">
                    <div class="service-icon"><i class="fas fa-snowflake"></i></div>
                    <div class="sc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
                <h3>AC Repair</h3>
                <p>Not cooling, gas leak, PCB fault, water dripping, compressor issue — all AC faults fixed fast.</p>
                <div class="sc-footer">
                    <span class="sc-tag">All Brands Covered</span>
                    <span class="sc-book">Book Now →</span>
                </div>
            </a>

            <a href="/services.php#ac-gas-refill" class="service-card">
                <div class="sc-top">
                    <div class="service-icon"><i class="fas fa-gas-pump"></i></div>
                    <div class="sc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
                <h3>AC Gas Refill</h3>
                <p>R-22, R-32, R-410A refrigerant refilling with leak detection — restores peak cooling performance.</p>
                <div class="sc-footer">
                    <span class="sc-tag">R-22 · R-32 · R-410A</span>
                    <span class="sc-book">Book Now →</span>
                </div>
            </a>

            <a href="/services.php#ac-installation" class="service-card">
                <div class="sc-top">
                    <div class="service-icon"><i class="fas fa-hammer"></i></div>
                    <div class="sc-arrow"><i class="fas fa-arrow-right"></i></div>
                </div>
                <h3>AC Installation</h3>
                <p>Split &amp; window AC installation by brand-certified engineers — with test run and full demo.</p>
                <div class="sc-footer">
                    <span class="sc-tag">Split &amp; Window AC</span>
                    <span class="sc-book">Book Now →</span>
                </div>
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
                    A decade of trusted home services across New Delhi &amp; NCR.
                </p>
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-num">5K+</div>
                        <div class="stat-lbl">Homes Served</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-num">20+</div>
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
                    <div style="font-size:var(--text-sm);opacity:0.8;margin-bottom:6px">Serving 10+ cities across 3
                        states</div>
                    <div style="font-weight:700;font-size:var(--text-base)">
                        New Delhi · NCR & more
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
                            <p>All Verified technicians for service.</p>
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
            <div class="rating-summary-inner">
                <div class="rating-left">
                    <div class="rating-big">4.9</div>
                    <div class="rating-stars-big">★★★★★</div>
                    <div class="rating-count">Based on 5,000+ reviews</div>
                </div>
                <div class="rating-bars">
                    <div class="rating-bar-row"><span>5★</span><div class="bar-track"><div class="bar-fill" style="width:88%"></div></div><span>88%</span></div>
                    <div class="rating-bar-row"><span>4★</span><div class="bar-track"><div class="bar-fill" style="width:9%"></div></div><span>9%</span></div>
                    <div class="rating-bar-row"><span>3★</span><div class="bar-track"><div class="bar-fill" style="width:2%"></div></div><span>2%</span></div>
                    <div class="rating-bar-row"><span>2★</span><div class="bar-track"><div class="bar-fill" style="width:1%"></div></div><span>1%</span></div>
                    <div class="rating-bar-row"><span>1★</span><div class="bar-track"><div class="bar-fill" style="width:0%"></div></div><span>0%</span></div>
                </div>
                <div class="rating-platform">
                    <div class="platform-badge"><i class="fab fa-google"></i><span>Google Reviews</span></div>
                    <div class="platform-badge"><i class="fas fa-check-circle"></i><span>Verified Bookings</span></div>
                </div>
            </div>
        </div>

        <div class="reviews-grid">
            <?php
            $reviews = [
                [
                    'tag'      => 'AC Repair',
                    'stars'    => 5,
                    'text'     => 'My AC stopped cooling in peak summer. EZAC sent a technician within 2 hours. He diagnosed a gas leak, fixed it professionally, and charged exactly what was quoted. Excellent!',
                    'initials' => 'RK',
                    'name'     => 'Rajesh Kumar',
                    'loc'      => 'Dwarka, New Delhi',
                    'color'    => '#0D6EFD',
                    'date'     => 'June 2025',
                ],
                [
                    'tag'      => 'AC Gas Refill',
                    'stars'    => 5,
                    'text'     => 'AC was running but not cooling at all. EZAC technician came the same day, found low refrigerant, refilled R-32 gas and it\'s working like new. Super fast and honest pricing!',
                    'initials' => 'PS',
                    'name'     => 'Priya Sharma',
                    'loc'      => 'Noida, NCR',
                    'color'    => '#00B894',
                    'date'     => 'May 2025',
                ],
                [
                    'tag'      => 'AC Installation',
                    'stars'    => 5,
                    'text'     => 'Got my new 1.5 ton split AC installed by EZAC. The team was punctual, clean, and very knowledgeable. They explained optimal placement and completed the job neatly. Highly recommend!',
                    'initials' => 'AM',
                    'name'     => 'Amit Mishra',
                    'loc'      => 'Gurgaon, NCR',
                    'color'    => '#7c3aed',
                    'date'     => 'April 2025',
                ],
            ];
            ?>

            <?php foreach ($reviews as $r): ?>
            <div class="review-card">
                <div class="review-card-top">
                    <div class="review-service-tag"><?php echo htmlspecialchars($r['tag']); ?></div>
                    <div class="review-date"><?php echo $r['date']; ?></div>
                </div>
                <div class="review-stars">
                    <?php for($i=0;$i<$r['stars'];$i++) echo '<i class="fas fa-star"></i>'; ?>
                </div>
                <p class="review-text">"<?php echo htmlspecialchars($r['text']); ?>"</p>
                <div class="reviewer">
                    <div class="avatar" style="background:<?php echo $r['color']; ?>">
                        <?php echo htmlspecialchars($r['initials']); ?>
                    </div>
                    <div class="reviewer-info">
                        <span class="name"><?php echo htmlspecialchars($r['name']); ?></span>
                        <span class="loc"><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($r['loc']); ?></span>
                    </div>
                    <div class="review-verified"><i class="fas fa-check-circle"></i> Verified</div>
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
════════════════════════════════════════════ 
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

            <!-- BASIC 
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

            <!-- POPULAR 
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

            <!-- AMC 
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

        </div><!-- /pricing-grid 

        <div class="text-center" style="margin-top:var(--space-32)">
            <a href="/pricing.php" class="btn btn-ghost">
                View Full Price List <i class="fas fa-arrow-right"></i>
            </a>
        </div>

    </div>
</section>
-->


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
            <a href="tel:+917827464409" class="btn btn-ghost">
                <i class="fas fa-phone"></i> +91-782-746-4409
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

    /* ── SERVICES SECTION: 4 equal columns ── */
    #services .services-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: var(--space-24);
    }

    /* ══ PREMIUM SERVICE CARD ══ */
    #services .service-card {
        background: #fff;
        border: 1.5px solid var(--gray-200);
        border-radius: 20px;
        padding: 28px 24px 24px;
        text-decoration: none;
        display: flex;
        flex-direction: column;
        gap: 0;
        position: relative;
        overflow: hidden;
        transition: all 0.28s ease;
        cursor: pointer;
    }

    /* Gradient top border on hover */
    #services .service-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 3px;
        background: linear-gradient(90deg, var(--blue), #60a5fa);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.3s ease;
    }
    #services .service-card:hover::before { transform: scaleX(1); }

    /* Subtle background glow on hover */
    #services .service-card::after {
        content: '';
        position: absolute;
        top: -60px; right: -60px;
        width: 160px; height: 160px;
        background: radial-gradient(circle, rgba(13,110,253,0.06) 0%, transparent 70%);
        border-radius: 50%;
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
    }
    #services .service-card:hover::after { opacity: 1; }

    #services .service-card:hover {
        box-shadow: 0 12px 40px rgba(13,110,253,0.12);
        transform: translateY(-5px);
        border-color: rgba(13,110,253,0.25);
    }

    /* Card top row: icon + arrow */
    .sc-top {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    /* Icon */
    #services .service-icon {
        width: 56px;
        height: 56px;
        background: var(--blue-light);
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: var(--blue);
        transition: all 0.28s ease;
        flex-shrink: 0;
    }
    #services .service-card:hover .service-icon {
        background: var(--blue);
        color: #fff;
        transform: scale(1.08) rotate(-4deg);
    }

    /* Arrow top-right */
    .sc-arrow {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: var(--gray-100);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        color: var(--gray-400);
        transition: all 0.25s ease;
        flex-shrink: 0;
    }
    #services .service-card:hover .sc-arrow {
        background: var(--blue);
        color: #fff;
        transform: rotate(-45deg);
    }

    /* Title */
    #services .service-card h3 {
        font-size: 17px;
        font-weight: 800;
        color: var(--gray-900);
        margin-bottom: 10px;
        line-height: 1.3;
    }

    /* Description */
    #services .service-card p {
        font-size: 13.5px;
        color: var(--gray-500);
        line-height: 1.65;
        margin: 0 0 20px;
        flex: 1;
    }

    /* Card footer: tag + book */
    .sc-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 16px;
        border-top: 1px solid var(--gray-100);
        margin-top: auto;
    }
    .sc-tag {
        font-size: 11px;
        font-weight: 700;
        color: var(--blue);
        background: var(--blue-light);
        padding: 4px 10px;
        border-radius: 20px;
        letter-spacing: 0.3px;
    }
    .sc-book {
        font-size: 13px;
        font-weight: 700;
        color: var(--blue);
        transition: gap 0.2s;
    }
    #services .service-card:hover .sc-book {
        text-decoration: underline;
        text-underline-offset: 2px;
    }

    /* ══ PREMIUM REVIEW CARDS ══ */

    /* Rating summary redesign */
    .rating-summary { margin-bottom: var(--space-48); }
    .rating-summary-inner {
        display: flex;
        align-items: center;
        gap: 48px;
        background: rgba(255,255,255,0.07);
        border: 1px solid rgba(255,255,255,0.12);
        border-radius: 20px;
        padding: 32px 40px;
        flex-wrap: wrap;
        justify-content: center;
    }
    .rating-left { text-align: center; }
    .rating-big {
        font-size: 72px;
        font-weight: 900;
        color: #fff;
        line-height: 1;
        margin-bottom: 6px;
    }
    .rating-stars-big {
        font-size: 24px;
        color: var(--amber);
        letter-spacing: 3px;
        margin-bottom: 6px;
    }
    .rating-count { font-size: 13px; color: rgba(255,255,255,0.5); }

    /* Rating bars */
    .rating-bars {
        display: flex;
        flex-direction: column;
        gap: 8px;
        min-width: 200px;
    }
    .rating-bar-row {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 12px;
        color: rgba(255,255,255,0.65);
        font-weight: 600;
    }
    .rating-bar-row span:first-child { width: 20px; text-align: right; }
    .rating-bar-row span:last-child  { width: 28px; }
    .bar-track {
        flex: 1;
        height: 6px;
        background: rgba(255,255,255,0.12);
        border-radius: 10px;
        overflow: hidden;
    }
    .bar-fill {
        height: 100%;
        background: linear-gradient(90deg, var(--amber), #fbbf24);
        border-radius: 10px;
    }

    /* Platform badges */
    .rating-platform { display: flex; flex-direction: column; gap: 10px; }
    .platform-badge {
        display: flex;
        align-items: center;
        gap: 8px;
        background: rgba(255,255,255,0.10);
        border: 1px solid rgba(255,255,255,0.15);
        border-radius: 10px;
        padding: 10px 16px;
        font-size: 13px;
        font-weight: 600;
        color: rgba(255,255,255,0.90);
    }
    .platform-badge i { font-size: 16px; color: var(--amber); }

    /* Review cards redesign */
    .reviews-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }
    .review-card {
        background: rgba(255,255,255,0.06);
        border: 1px solid rgba(255,255,255,0.10);
        border-radius: 20px;
        padding: 28px;
        display: flex;
        flex-direction: column;
        gap: 14px;
        transition: all 0.25s ease;
        position: relative;
        overflow: hidden;
    }
    .review-card::before {
        content: '\201C';
        position: absolute;
        top: -10px; right: 20px;
        font-size: 100px;
        font-family: Georgia, serif;
        color: rgba(255,255,255,0.05);
        line-height: 1;
        pointer-events: none;
    }
    .review-card:hover {
        background: rgba(255,255,255,0.10);
        border-color: rgba(255,255,255,0.20);
        transform: translateY(-4px);
        box-shadow: 0 16px 40px rgba(0,0,0,0.3);
    }

    /* Card top row */
    .review-card-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .review-service-tag {
        background: rgba(13,110,253,0.25);
        border: 1px solid rgba(13,110,253,0.4);
        color: rgba(255,255,255,0.95);
        font-size: 11px;
        font-weight: 700;
        padding: 4px 12px;
        border-radius: 20px;
        letter-spacing: 0.3px;
    }
    .review-date {
        font-size: 11px;
        color: rgba(255,255,255,0.35);
        font-weight: 500;
    }

    /* Stars */
    .review-stars { display: flex; gap: 3px; }
    .review-stars i { color: var(--amber); font-size: 14px; }

    /* Review text */
    .review-text {
        font-size: 14px;
        color: rgba(255,255,255,0.82);
        line-height: 1.75;
        font-style: italic;
        flex: 1;
        margin: 0;
    }

    /* Reviewer row */
    .reviewer {
        display: flex;
        align-items: center;
        gap: 12px;
        padding-top: 14px;
        border-top: 1px solid rgba(255,255,255,0.08);
    }
    .avatar {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 14px;
        color: #fff;
        text-transform: uppercase;
        flex-shrink: 0;
        border: 2px solid rgba(255,255,255,0.2);
    }
    .reviewer-info { flex: 1; }
    .reviewer-info .name {
        display: block;
        font-size: 14px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 2px;
    }
    .reviewer-info .loc {
        font-size: 12px;
        color: rgba(255,255,255,0.45);
        display: flex;
        align-items: center;
        gap: 4px;
    }
    .reviewer-info .loc i { font-size: 10px; }
    .review-verified {
        font-size: 11px;
        font-weight: 700;
        color: var(--green);
        display: flex;
        align-items: center;
        gap: 4px;
        flex-shrink: 0;
    }
    .review-verified i { font-size: 13px; }

    /* ── RESPONSIVE: services + reviews ── */
    @media (max-width: 1024px) {
        #services .services-grid { grid-template-columns: repeat(2, 1fr); }
        .reviews-grid { grid-template-columns: repeat(2, 1fr); }
        .rating-summary-inner { gap: 28px; padding: 24px; }
    }
    @media (max-width: 768px) {
        #services .services-grid { grid-template-columns: repeat(2, 1fr); }
        .reviews-grid { grid-template-columns: 1fr; }
        .rating-summary-inner { flex-direction: column; align-items: center; text-align: center; }
        .rating-bars { width: 100%; max-width: 280px; }
        .rating-platform { flex-direction: row; flex-wrap: wrap; justify-content: center; }
    }
    @media (max-width: 480px) {
        #services .services-grid { grid-template-columns: 1fr; }
    }
</style>