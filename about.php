<?php
/* ============================================================
   EZAC SERVICE — ABOUT US PAGE
   about.php
   ============================================================ */

$current_page     = 'about';
$page_title       = 'About Us — EZAC Service | Trusted AC Service Company in Delhi NCR';
$page_description = 'EZAC Service — Professional AC repair, gas refilling, installation and servicing for homes and offices across Delhi NCR. Certified technicians, transparent pricing.';
$page_canonical   = 'https://ezacservice.in/about.php';

include 'partials/head.php';
include 'partials/navbar.php';
?>

<!-- ── BREADCRUMB ── -->
<div class="breadcrumb-bar">
  <div class="container">
    <div class="breadcrumb">
      <a href="/">Home</a>
      <span class="sep">›</span>
      <span class="current">About Us</span>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     PAGE HERO
════════════════════════════════════════════ -->
<section class="about-hero">
  <div class="container">
    <div class="about-hero-inner">
      <div class="about-hero-content">
        <div class="section-label white">About EZAC Service</div>
        <h1>Built on Trust.<br>Powered by Expertise.<br><span class="about-hero-accent">Driven by You.</span></h1>
        <p>
          Since 2015, we have been Delhi NCR's most trusted name in AC repair,
          installation, and maintenance — serving 5,000+ homes and businesses
          with certified technicians, genuine parts, and a commitment to
          getting it right the first time.
        </p>
        <div class="about-hero-actions">
          <a href="/book.php" class="btn btn-white btn-lg">
            <i class="fas fa-calendar-check"></i> Book a Service
          </a>
          <a href="/contact.php" class="btn btn-white-outline btn-lg">
            <i class="fas fa-envelope"></i> Get in Touch
          </a>
        </div>
      </div>
      <div class="about-hero-stats">
        <div class="about-stat-card">
          <div class="about-stat-num">5K+</div>
          <div class="about-stat-lbl">Homes &amp; Offices Served</div>
        </div>
        <div class="about-stat-card">
          <div class="about-stat-num">50+</div>
          <div class="about-stat-lbl">Certified Technicians</div>
        </div>
        <div class="about-stat-card">
          <div class="about-stat-num">98%</div>
          <div class="about-stat-lbl">First-Fix Success Rate</div>
        </div>
        <div class="about-stat-card">
          <div class="about-stat-num">4.9★</div>
          <div class="about-stat-lbl">Average Customer Rating</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     OUR STORY
════════════════════════════════════════════ -->
<section class="section">
  <div class="container">
    <div class="grid-2" style="gap:var(--space-56);align-items:center">

      <!-- Story Text -->
      <div>
        <div class="section-label">Our Story</div>
        <h2 class="section-title">From One City to<br>Thousands of Customers</h2>
        <div class="story-text">
          <p>
            EZAC Service was founded in 2015 in Delhi, by a small team
            of engineers frustrated with the same problem: when their own ACs broke
            down in summer, they couldn't find a technician who showed up on time,
            charged fairly, or stood behind their work.
          </p>
          <p>
            So they built the service they wished existed. Starting with just 3
            technicians and a promise of honest pricing and timely service, EZAC
            grew steadily — word of mouth by word of mouth, household by household.
          </p>
          <p>
            Today, we operate across Delhi, Noida, Gurgaon, Faridabad, and Greater Noida
            with a team of 50+ background-verified, brand-certified technicians who
            complete over 200 service visits every month. Our 4.9-star rating across
            5,000+ reviews reflects not just good repairs — but a consistent promise kept.
          </p>
        </div>

        <div class="story-highlights">
          <div class="story-highlight">
            <i class="fas fa-map-marker-alt"></i>
            <span>Founded in Delhi NCR — 2015</span>
          </div>
          <div class="story-highlight">
            <i class="fas fa-city"></i>
            <span>Serving Delhi, Noida, Gurgaon, Faridabad &amp; more</span>
          </div>
          <div class="story-highlight">
            <i class="fas fa-certificate"></i>
            <span>GST registered &amp; ISO 9001-aligned</span>
          </div>
          <div class="story-highlight">
            <i class="fas fa-shield-alt"></i>
            <span>Fully insured, background-verified team</span>
          </div>
        </div>
      </div>

      <!-- Story Visual -->
      <div class="story-visual">
        <div class="story-visual-main">
          <div class="story-visual-icon">
            <i class="fas fa-snowflake"></i>
          </div>
          <div class="story-visual-year">Est. 2015</div>
          <div class="story-visual-title">EZAC Service</div>
          <div class="story-visual-sub">New Delhi, NCR</div>
        </div>
        <div class="story-visual-quote">
          <i class="fas fa-quote-left"></i>
          <p>
            "We started with one belief — every customer deserves a technician
            who is honest, on time, and skilled enough to fix it right the first time."
          </p>
          <div class="story-visual-author">
            <div class="avatar" style="background:rgba(255,255,255,0.2);color:#fff">AK</div>
            <div>
              <strong>Ajay Kumar</strong>
              <span>Founder &amp; CEO, EZAC Service</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     MILESTONES TIMELINE
════════════════════════════════════════════
<section class="section section-gray">
  <div class="container">

    <div class="section-header center">
      <div class="section-label">Our Journey</div>
      <h2 class="section-title">A Decade of Growth</h2>
      <p class="section-subtitle">
        From a 5-person team in Delhi to NCR's trusted AC service brand.
      </p>
    </div>

    <div class="timeline">
      <?php
      $milestones = [
        [
          'year'  => '2015',
          'title' => 'Founded in Delhi',
          'desc'  => 'Started with 5 technicians and a simple mission — honest AC repair at fair prices.',
          'icon'  => 'fa-flag',
          'color' => 'blue',
        ],
        [
          'year'  => '2017',
          'title' => 'Expanded to Patna & Bhagalpur',
          'desc'  => 'Grew to 25 technicians. Launched our first AMC (Annual Maintenance Contract) plans.',
          'icon'  => 'fa-city',
          'color' => 'green',
        ],
        [
          'year'  => '2019',
          'title' => '10,000 Customers Milestone',
          'desc'  => 'Crossed 10,000 satisfied customers. Introduced same-day service booking system.',
          'icon'  => 'fa-users',
          'color' => 'amber',
        ],
        [
          'year'  => '2021',
          'title' => 'Expanded to Jharkhand & UP',
          'desc'  => 'Launched operations in Jharkhand and Eastern Uttar Pradesh. Team grew to 100+ technicians.',
          'icon'  => 'fa-map-marked-alt',
          'color' => 'blue',
        ],
        [
          'year'  => '2023',
          'title' => '5 Cities, 50+ Technicians',
          'desc'  => 'Now serving all major NCR zones with 50+ certified technicians. Launched AMC for commercial clients.',
          'icon'  => 'fa-rocket',
          'color' => 'green',
        ],
        [
          'year'  => '2025',
          'title' => '5,000+ Customers Served',
          'desc'  => 'A decade of trusted service. 5,000+ happy customers across Delhi NCR. 4.9★ average rating.',
          'icon'  => 'fa-star',
          'color' => 'amber',
        ],
      ];
      ?>

      <?php foreach ($milestones as $i => $m): ?>
      <div class="timeline-item <?php echo $i % 2 === 0 ? 'left' : 'right'; ?>">
        <div class="timeline-dot <?php echo $m['color']; ?>">
          <i class="fas <?php echo $m['icon']; ?>"></i>
        </div>
        <div class="timeline-card">
          <div class="timeline-year <?php echo $m['color']; ?>">
            <?php echo $m['year']; ?>
          </div>
          <h3>
            <?php echo htmlspecialchars($m['title']); ?>
          </h3>
          <p>
            <?php echo htmlspecialchars($m['desc']); ?>
          </p>
        </div>
      </div>
      <?php endforeach; ?>

      <div class="timeline-line"></div>
    </div>

  </div>
</section>  -->

<!-- ══════════════════════════════════════════
     OUR VALUES
════════════════════════════════════════════ -->
<section class="section">
  <div class="container">

    <div class="section-header center">
      <div class="section-label">Our Values</div>
      <h2 class="section-title">What We Stand For</h2>
      <p class="section-subtitle">
        These aren't slogans on a wall. They are the standards every EZAC
        technician is trained to uphold on every single visit.
      </p>
    </div>

    <div class="values-grid">
      <?php
      $values = [
        [
          'icon'  => 'fa-handshake',
          'color' => 'blue',
          'title' => 'Honesty First',
          'desc'  => 'We show you the problem, explain the fix, and quote the price — before touching anything. No work begins without your approval.',
          'tag'   => 'Transparent',
        ],
        [
          'icon'  => 'fa-clock',
          'color' => 'green',
          'title' => 'Respect Your Time',
          'desc'  => 'We show up when we say we will. You get the technician\'s name, photo, and live ETA. No waiting around all day.',
          'tag'   => 'On-Time Always',
        ],
        [
          'icon'  => 'fa-tools',
          'color' => 'amber',
          'title' => 'Right First Time',
          'desc'  => 'Our high first-fix rate isn\'t an accident. Technicians carry the right parts, use proper tools, and follow systematic diagnosis.',
          'tag'   => '98% Fix Rate',
        ],
        [
          'icon'  => 'fa-certificate',
          'color' => 'blue',
          'title' => 'Quality Guaranteed',
          'desc'  => 'We use only OEM-grade spare parts and follow brand-certified procedures. Every job ends with a thorough test run — no shortcuts.',
          'tag'   => 'Genuine Parts',
        ],
        [
          'icon'  => 'fa-heart',
          'color' => 'green',
          'title' => 'Customer Above All',
          'desc'  => 'We measure success by whether you\'d recommend us to your neighbour. Every decision we make starts with that question.',
          'tag'   => '4.9★ Rated',
        ],
        [
          'icon'  => 'fa-leaf',
          'color' => 'amber',
          'title' => 'Safe &amp; Responsible',
          'desc'  => 'We follow safe gas handling, proper electrical protocols, and always leave your home as clean as we found it.',
          'tag'   => 'Clean &amp; Safe',
        ],
      ];
      ?>

      <?php foreach ($values as $v): ?>
      <div class="value-card">
        <div class="value-card-top">
          <div class="value-icon <?php echo $v['color']; ?>">
            <i class="fas <?php echo $v['icon']; ?>"></i>
          </div>
          <span class="value-tag <?php echo $v['color']; ?>"><?php echo $v['tag']; ?></span>
        </div>
        <h3><?php echo $v['title']; ?></h3>
        <p><?php echo $v['desc']; ?></p>
      </div>
      <?php endforeach; ?>

    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════
     TEAM SECTION
════════════════════════════════════════════ 


<!-- ══════════════════════════════════════════
     SERVICE AREA
════════════════════════════════════════════ -->
<section class="section">
  <div class="container">

    <div class="section-header center">
      <div class="section-label">Service Area</div>
      <h2 class="section-title">Where We Operate</h2>
      <p class="section-subtitle">
        Serving homes and businesses across Bihar, Jharkhand and Uttar Pradesh.
      </p>
    </div>

    <div class="areas-block">
      <?php
      $areas = [
        'Delhi'  => ['South Delhi','North Delhi','East Delhi','West Delhi','Central Delhi','Dwarka','Rohini','Janakpuri','Saket','Lajpat Nagar','Karol Bagh','Connaught Place','Vasant Kunj','Pitampura'],
        'Noida / Greater Noida' => ['Sector 18','Sector 62','Sector 137','Greater Noida West','Knowledge Park','Pari Chowk','Sector 50','Sector 76'],
        'Gurgaon / Faridabad' => ['DLF Phase 1-5','Sohna Road','Golf Course Road','Cyber City','Sector 14','Sector 56','NIT Faridabad','Old Faridabad'],
      ];
      ?>

      <?php foreach ($areas as $state => $cities): ?>
      <div class="area-card">
        <div class="area-state">
          <i class="fas fa-map-marker-alt"></i>
          <?php echo htmlspecialchars($state); ?>
        </div>
        <div class="area-cities">
          <?php foreach ($cities as $city): ?>
          <span class="area-city">
            <?php echo htmlspecialchars($city); ?>
          </span>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>

    </div>

    <p class="areas-note">
      <i class="fas fa-info-circle"></i>
      Don't see your area? Call us at <a href="tel:+917827464409">+91-782-746-4409</a> —
      we may still be able to cover your location within Delhi NCR.
    </p>

  </div>
</section>

<!-- ── CTA BANNER ── -->
<section class="section-sm">
  <div class="container">
    <div class="cta-banner">
      <div>
        <h2>Join 5,000+ Happy Customers</h2>
        <p>Experience the EZAC difference — on time, honest, and done right.</p>
      </div>
      <div class="cta-banner-actions">
        <a href="/book.php" class="btn btn-white btn-lg">
          <i class="fas fa-calendar-check"></i> Book a Service
        </a>
        <a href="/contact.php" class="btn btn-white-outline btn-lg">
          <i class="fas fa-envelope"></i> Contact Us
        </a>
      </div>
    </div>
  </div>
</section>

<?php include 'partials/footer.php'; ?>

<style>
  /* ── ABOUT HERO ── */
  .about-hero {
    background: linear-gradient(135deg, #0a1628 0%, #1a3a6e 55%, #0D6EFD 100%);
    color: #fff;
    padding: 80px 0;
    position: relative;
    overflow: hidden;
  }

  .about-hero::before {
    content: '';
    position: absolute;
    top: -100px;
    right: -100px;
    width: 500px;
    height: 500px;
    background: rgba(255, 255, 255, 0.03);
    border-radius: 50%;
    pointer-events: none;
  }

  .about-hero-inner {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-56);
    align-items: center;
    position: relative;
    z-index: 1;
  }

  .about-hero-content .section-label {
    margin-bottom: var(--space-16);
  }

  .about-hero-content h1 {
    font-size: clamp(30px, 4vw, 52px);
    font-weight: 900;
    line-height: 1.1;
    color: #fff;
    margin-bottom: var(--space-20);
  }

  .about-hero-accent {
    color: var(--amber);
  }

  .about-hero-content p {
    font-size: var(--text-md);
    color: rgba(255, 255, 255, 0.82);
    line-height: 1.75;
    margin-bottom: var(--space-28);
    max-width: 480px;
  }

  .about-hero-actions {
    display: flex;
    gap: var(--space-12);
    flex-wrap: wrap;
  }

  .about-hero-stats {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-16);
  }

  .about-stat-card {
    background: rgba(255, 255, 255, 0.10);
    border: 1px solid rgba(255, 255, 255, 0.18);
    border-radius: var(--radius-lg);
    padding: var(--space-24) var(--space-20);
    text-align: center;
    backdrop-filter: blur(4px);
    transition: var(--transition);
  }

  .about-stat-card:hover {
    background: rgba(255, 255, 255, 0.15);
    transform: translateY(-2px);
  }

  .about-stat-num {
    font-size: clamp(28px, 4vw, 40px);
    font-weight: 900;
    color: #fff;
    line-height: 1.1;
    margin-bottom: var(--space-6, 6px);
  }

  .about-stat-lbl {
    font-size: var(--text-sm);
    color: rgba(255, 255, 255, 0.70);
    font-weight: 500;
  }

  /* ── STORY ── */
  .story-text p {
    font-size: var(--text-md);
    color: var(--gray-600);
    line-height: 1.8;
    margin-bottom: var(--space-16);
  }

  .story-highlights {
    display: flex;
    flex-direction: column;
    gap: var(--space-10, 10px);
    margin-top: var(--space-24);
  }

  .story-highlight {
    display: flex;
    align-items: center;
    gap: var(--space-12);
    font-size: var(--text-base);
    color: var(--gray-700);
    font-weight: 500;
  }

  .story-highlight i {
    color: var(--blue);
    font-size: 15px;
    width: 18px;
  }

  .story-visual {
    background: linear-gradient(135deg, var(--blue), var(--green-dark));
    border-radius: var(--radius-xl);
    padding: var(--space-40);
    color: #fff;
    display: flex;
    flex-direction: column;
    gap: var(--space-24);
  }

  .story-visual-main {
    text-align: center;
  }

  .story-visual-icon {
    width: 72px;
    height: 72px;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    margin: 0 auto var(--space-16);
  }

  .story-visual-year {
    font-size: var(--text-sm);
    opacity: 0.75;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
  }

  .story-visual-title {
    font-size: var(--text-2xl);
    font-weight: 900;
    margin: var(--space-4) 0;
  }

  .story-visual-sub {
    font-size: var(--text-sm);
    opacity: 0.75;
  }

  .story-visual-quote {
    background: rgba(255, 255, 255, 0.12);
    border-radius: var(--radius-lg);
    padding: var(--space-20);
  }

  .story-visual-quote i {
    font-size: 20px;
    color: var(--amber);
    margin-bottom: var(--space-10, 10px);
  }

  .story-visual-quote p {
    font-size: var(--text-base);
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.7;
    font-style: italic;
    margin-bottom: var(--space-16);
  }

  .story-visual-author {
    display: flex;
    align-items: center;
    gap: var(--space-12);
  }

  .story-visual-author strong {
    display: block;
    font-size: var(--text-base);
    font-weight: 700;
  }

  .story-visual-author span {
    font-size: var(--text-xs);
    opacity: 0.7;
  }

  /* ── TIMELINE ── */
  .timeline {
    position: relative;
    max-width: 900px;
    margin: 0 auto;
    padding: var(--space-20) 0;
  }

  .timeline-line {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 2px;
    background: var(--gray-200);
    z-index: 0;
  }

  .timeline-item {
    display: flex;
    justify-content: flex-end;
    padding-right: calc(50% + var(--space-40));
    margin-bottom: var(--space-32);
    position: relative;
    z-index: 1;
  }

  .timeline-item.right {
    justify-content: flex-start;
    padding-right: 0;
    padding-left: calc(50% + var(--space-40));
  }

  .timeline-dot {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 44px;
    height: 44px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    z-index: 2;
    border: 3px solid var(--white);
    box-shadow: var(--shadow-md);
  }

  .timeline-dot.blue {
    background: var(--blue);
    color: #fff;
  }

  .timeline-dot.green {
    background: var(--green);
    color: #fff;
  }

  .timeline-dot.amber {
    background: var(--amber);
    color: var(--gray-900);
  }

  .timeline-card {
    background: var(--white);
    border: 1.5px solid var(--gray-200);
    border-radius: var(--radius-lg);
    padding: var(--space-20) var(--space-24);
    max-width: 340px;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
  }

  .timeline-card:hover {
    border-color: var(--blue-light);
    box-shadow: var(--shadow-md);
    transform: translateY(-2px);
  }

  .timeline-year {
    font-size: var(--text-xl);
    font-weight: 900;
    margin-bottom: var(--space-6, 6px);
  }

  .timeline-year.blue {
    color: var(--blue);
  }

  .timeline-year.green {
    color: var(--green-dark);
  }

  .timeline-year.amber {
    color: var(--amber-dark);
  }

  .timeline-card h3 {
    font-size: var(--text-md);
    font-weight: 700;
    color: var(--gray-900);
    margin-bottom: var(--space-6, 6px);
  }

  .timeline-card p {
    font-size: var(--text-sm);
    color: var(--gray-600);
    margin: 0;
    line-height: 1.65;
  }

  /* ── VALUES ── */
  /* ══ VALUES GRID — PREMIUM REDESIGN ══ */
  .values-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
  }

  .value-card {
    background: var(--white);
    border: 1.5px solid var(--gray-200);
    border-radius: 18px;
    padding: 28px 24px;
    transition: all 0.28s ease;
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    gap: 0;
  }

  /* Left accent bar */
  .value-card::before {
    content: '';
    position: absolute;
    left: 0; top: 0; bottom: 0;
    width: 3px;
    background: var(--blue);
    transform: scaleY(0);
    transform-origin: bottom;
    transition: transform 0.3s ease;
    border-radius: 0 3px 3px 0;
  }
  .value-card:hover::before { transform: scaleY(1); }

  /* Subtle glow bg */
  .value-card::after {
    content: '';
    position: absolute;
    bottom: -40px; right: -40px;
    width: 120px; height: 120px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(13,110,253,0.05) 0%, transparent 70%);
    opacity: 0;
    transition: opacity 0.3s ease;
    pointer-events: none;
  }
  .value-card:hover::after { opacity: 1; }

  .value-card:hover {
    border-color: rgba(13,110,253,0.25);
    box-shadow: 0 10px 36px rgba(13,110,253,0.10);
    transform: translateY(-4px);
  }

  /* Top row: icon + tag */
  .value-card-top {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    margin-bottom: 18px;
  }

  /* Icon */
  .value-icon {
    width: 52px;
    height: 52px;
    min-width: 52px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    transition: all 0.28s ease;
  }
  .value-icon.blue  { background: var(--blue-light);  color: var(--blue); }
  .value-icon.green { background: var(--green-light); color: var(--green-dark); }
  .value-icon.amber { background: var(--amber-light); color: var(--amber-dark); }

  .value-card:hover .value-icon.blue  { background: var(--blue);  color: #fff; transform: scale(1.08) rotate(-5deg); }
  .value-card:hover .value-icon.green { background: var(--green); color: #fff; transform: scale(1.08) rotate(-5deg); }
  .value-card:hover .value-icon.amber { background: var(--amber); color: var(--gray-900); transform: scale(1.08) rotate(-5deg); }

  /* Tag pill */
  .value-tag {
    font-size: 11px;
    font-weight: 700;
    padding: 4px 10px;
    border-radius: 20px;
    letter-spacing: 0.3px;
    white-space: nowrap;
  }
  .value-tag.blue  { background: var(--blue-light);  color: var(--blue); }
  .value-tag.green { background: var(--green-light); color: var(--green-dark); }
  .value-tag.amber { background: var(--amber-light); color: var(--amber-dark); }

  /* Title */
  .value-card h3 {
    font-size: 16px;
    font-weight: 800;
    color: var(--gray-900);
    margin-bottom: 10px;
    line-height: 1.3;
  }

  /* Description */
  .value-card p {
    font-size: 13.5px;
    color: var(--gray-500);
    line-height: 1.7;
    margin: 0;
  }

  /* ── TEAM ── */
  .team-section-title {
    font-size: var(--text-lg);
    font-weight: 700;
    color: var(--gray-800);
    margin-bottom: var(--space-20);
    padding-bottom: var(--space-10, 10px);
    border-bottom: 2px solid var(--gray-200);
  }

  .team-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--space-20);
  }

  .team-card-full {
    display: flex;
    gap: var(--space-16);
    align-items: flex-start;
    background: var(--white);
    border: 1.5px solid var(--gray-200);
    border-radius: var(--radius-lg);
    padding: var(--space-24);
    transition: var(--transition);
  }

  .team-card-full:hover {
    border-color: var(--blue-light);
    box-shadow: var(--shadow-md);
  }

  .team-avatar-lg {
    width: 64px;
    height: 64px;
    font-size: var(--text-xl);
    flex-shrink: 0;
  }

  .team-card-info h4 {
    font-size: var(--text-md);
    font-weight: 700;
    color: var(--gray-900);
    margin-bottom: 2px;
  }

  .team-role {
    font-size: var(--text-sm);
    color: var(--blue);
    font-weight: 600;
    margin-bottom: var(--space-8);
  }

  .team-card-info p {
    font-size: var(--text-sm);
    color: var(--gray-600);
    line-height: 1.65;
    margin: 0;
  }

  /* ── TECH STATS BANNER ── */
  .tech-stats-banner {
    background: linear-gradient(135deg, var(--blue), var(--blue-darker));
    border-radius: var(--radius-xl);
    padding: var(--space-40) var(--space-40);
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-40);
    align-items: center;
    color: #fff;
  }

  .tech-stats-text h3 {
    font-size: var(--text-2xl);
    font-weight: 800;
    color: #fff;
    margin-bottom: var(--space-12);
  }

  .tech-stats-text p {
    font-size: var(--text-base);
    color: rgba(255, 255, 255, 0.80);
    line-height: 1.75;
    margin: 0;
  }

  .tech-stats-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-16);
  }

  .tech-stat {
    display: flex;
    align-items: center;
    gap: var(--space-12);
    background: rgba(255, 255, 255, 0.10);
    border-radius: var(--radius-md);
    padding: var(--space-16);
  }

  .tech-stat i {
    font-size: 22px;
    color: var(--amber);
    flex-shrink: 0;
  }

  .tech-stat strong {
    display: block;
    font-size: var(--text-base);
    font-weight: 700;
    color: #fff;
  }

  .tech-stat span {
    font-size: var(--text-xs);
    color: rgba(255, 255, 255, 0.65);
  }

  /* ── SERVICE AREAS ── */
  .areas-block {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-24);
    margin-bottom: var(--space-24);
  }

  .area-card {
    background: var(--white);
    border: 1.5px solid var(--gray-200);
    border-radius: var(--radius-lg);
    padding: var(--space-24);
  }

  .area-state {
    font-size: var(--text-md);
    font-weight: 800;
    color: var(--blue);
    margin-bottom: var(--space-14, 14px);
    display: flex;
    align-items: center;
    gap: var(--space-8);
    padding-bottom: var(--space-12);
    border-bottom: 2px solid var(--blue-light);
  }

  .area-cities {
    display: flex;
    flex-wrap: wrap;
    gap: var(--space-8);
  }

  .area-city {
    background: var(--gray-50);
    border: 1px solid var(--gray-200);
    border-radius: var(--radius-full);
    padding: 4px 12px;
    font-size: var(--text-xs);
    font-weight: 600;
    color: var(--gray-700);
    transition: var(--transition-fast);
  }

  .area-city:hover {
    background: var(--blue-light);
    border-color: var(--blue);
    color: var(--blue);
  }

  .areas-note {
    text-align: center;
    font-size: var(--text-sm);
    color: var(--gray-500);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: var(--space-8);
  }

  .areas-note i {
    color: var(--blue);
  }

  .areas-note a {
    color: var(--blue);
    font-weight: 600;
  }

  /* ── RESPONSIVE ── */
  @media (max-width: 1024px) {
    .about-hero-inner {
      grid-template-columns: 1fr;
      gap: var(--space-40);
    }

    .about-hero-stats {
      grid-template-columns: repeat(4, 1fr);
    }

    .tech-stats-banner {
      grid-template-columns: 1fr;
    }

    .areas-block {
      grid-template-columns: 1fr 1fr;
    }

    .values-grid {
      grid-template-columns: 1fr 1fr;
    }
  }

  @media (max-width: 768px) {
    .about-hero {
      padding: 52px 0;
    }

    .about-hero-stats {
      grid-template-columns: 1fr 1fr;
    }

    .timeline-item,
    .timeline-item.right {
      padding: 0 0 0 var(--space-56);
      justify-content: flex-start;
    }

    .timeline-dot {
      left: 0;
      transform: none;
    }

    .timeline-line {
      left: 20px;
      transform: none;
    }

    .timeline-card {
      max-width: 100%;
    }

    .team-grid {
      grid-template-columns: 1fr;
    }

    .areas-block {
      grid-template-columns: 1fr;
    }

    .values-grid {
      grid-template-columns: 1fr;
    }

    .tech-stats-grid {
      grid-template-columns: 1fr;
    }

    .about-hero-actions {
      flex-direction: column;
    }

    .about-hero-actions .btn {
      width: 100%;
    }
  }

  @media (max-width: 480px) {
    .about-hero-stats {
      grid-template-columns: 1fr 1fr;
    }

    .tech-stats-banner {
      padding: var(--space-28) var(--space-20);
    }
  }
</style>