<?php
/* ============================================================
   EZAC SERVICE — ABOUT US PAGE
   about.php
   ============================================================ */

$current_page     = 'about';
$page_title       = 'About Us — EZAC Service | Trusted AC Service Company in Bihar';
$page_description = 'EZAC Service was founded in 2015 with a mission to bring reliable, affordable, and professional AC repair and installation services to homes and businesses across Bihar, Jharkhand and UP.';
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
          Since 2015, we have been Bihar's most trusted name in AC repair,
          installation, and maintenance — serving 50,000+ homes and businesses
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
          <div class="about-stat-num">50K+</div>
          <div class="about-stat-lbl">Homes &amp; Offices Served</div>
        </div>
        <div class="about-stat-card">
          <div class="about-stat-num">200+</div>
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
        <h2 class="section-title">From One City to<br>Thousands of Homes</h2>
        <div class="story-text">
          <p>
            EZAC Service was founded in 2015 in Madhepura, Bihar, by a small team
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
            Today, we operate across 30+ cities in Bihar, Jharkhand, and Uttar Pradesh
            with a team of 200+ background-verified, brand-certified technicians who
            complete over 1,500 service visits every month. Our 4.9-star rating across
            50,000+ reviews reflects not just good repairs — but a consistent promise kept.
          </p>
        </div>

        <div class="story-highlights">
          <div class="story-highlight">
            <i class="fas fa-map-marker-alt"></i>
            <span>Founded in Madhepura, Bihar — 2015</span>
          </div>
          <div class="story-highlight">
            <i class="fas fa-city"></i>
            <span>Now serving 30+ cities across 3 states</span>
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
          <div class="story-visual-sub">Madhepura, Bihar</div>
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
════════════════════════════════════════════ -->
<section class="section section-gray">
  <div class="container">

    <div class="section-header center">
      <div class="section-label">Our Journey</div>
      <h2 class="section-title">A Decade of Growth</h2>
      <p class="section-subtitle">
        From a 3-person team in Madhepura to Bihar's leading AC service brand.
      </p>
    </div>

    <div class="timeline">
      <?php
      $milestones = [
        [
          'year'  => '2015',
          'title' => 'Founded in Madhepura',
          'desc'  => 'Started with 3 technicians and a simple mission — honest, reliable AC repair.',
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
          'title' => '30+ Cities, 200+ Technicians',
          'desc'  => 'Now serving 30+ cities with 200+ certified technicians. Launched Business Pro AMC for commercial clients.',
          'icon'  => 'fa-rocket',
          'color' => 'green',
        ],
        [
          'year'  => '2025',
          'title' => '50,000+ Homes Served',
          'desc'  => 'A decade of trusted service. 50,000+ happy customers. 4.9★ average rating. Still growing.',
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
</section>

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
          'desc'  => 'We show you the problem, explain the fix, and walk you through it — before touching anything. No work begins without your approval.',
        ],
        [
          'icon'  => 'fa-clock',
          'color' => 'green',
          'title' => 'Respect Your Time',
          'desc'  => 'We show up when we say we will. You get the technician\'s name, photo, and live ETA. No waiting around all day.',
        ],
        [
          'icon'  => 'fa-tools',
          'color' => 'amber',
          'title' => 'Right First Time',
          'desc'  => 'Our 98% first-fix rate isn\'t an accident. Technicians carry the right parts, use proper tools, and follow systematic diagnosis.',
        ],
        [
          'icon'  => 'fa-shield-alt',
          'color' => 'blue',
          'title' => 'Stand Behind Our Work',
          'desc'  => 'If the same issue comes back, we come back too — no questions asked. Accountability doesn\'t end when the technician leaves.',
        ],
        [
          'icon'  => 'fa-heart',
          'color' => 'green',
          'title' => 'Customer Above All',
          'desc'  => 'We measure success by whether you\'d recommend us to your neighbour. Every decision we make starts with that question.',
        ],
        [
          'icon'  => 'fa-leaf',
          'color' => 'amber',
          'title' => 'Safe &amp; Responsible',
          'desc'  => 'We follow safe gas handling, proper electrical protocols, and always leave your home as clean as we found it.',
        ],
      ];
      ?>

      <?php foreach ($values as $v): ?>
      <div class="value-card">
        <span class="value-accent <?php echo $v['color']; ?>"></span>
        <div class="value-icon <?php echo $v['color']; ?>">
          <i class="fas <?php echo $v['icon']; ?>"></i>
        </div>
        <h3>
          <?php echo $v['title']; ?>
        </h3>
        <p>
          <?php echo $v['desc']; ?>
        </p>
      </div>
      <?php endforeach; ?>

    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════
     TEAM SECTION
════════════════════════════════════════════ -->
<section class="section section-gray">
  <div class="container">

    <div class="section-header center">
      <div class="section-label">Our Team</div>
      <h2 class="section-title">The People Behind EZAC</h2>
      <p class="section-subtitle">
        Led by engineers, built by technicians, trusted by thousands.
      </p>
    </div>

    <!-- Leadership -->
    <div class="team-section-title">Leadership</div>
    <div class="team-grid" style="margin-bottom:var(--space-48)">
      <?php
      $leadership = [
        ['initials'=>'AK','name'=>'Ajay Kumar',   'role'=>'Founder & CEO',          'color'=>'#0D6EFD','desc'=>'10+ years in appliance service industry. Founded EZAC at 26 with just 3 technicians.'],
        ['initials'=>'RS','name'=>'Rohit Singh',   'role'=>'Head of Operations',     'color'=>'#00B894','desc'=>'Manages day-to-day operations across 30+ cities. Former operations manager at a national service chain.'],
        ['initials'=>'PM','name'=>'Pooja Mishra',  'role'=>'Customer Experience',    'color'=>'#6610f2','desc'=>'Leads our customer support and quality assurance team. Ensures every booking ends with a 5-star experience.'],
        ['initials'=>'SK','name'=>'Sanjay Kumar',  'role'=>'Head of Technicians',    'color'=>'#FFC107','textColor'=>'#333','desc'=>'Trains and certifies all EZAC technicians. Holds certification from LG, Samsung, and Daikin service academies.'],
      ];
      ?>

      <?php foreach ($leadership as $m): ?>
      <div class="team-card-full">
        <div class="avatar team-avatar-lg"
          style="background:<?php echo $m['color']; ?>;<?php echo isset($m['textColor']) ? 'color:'.$m['textColor'] : ''; ?>">
          <?php echo $m['initials']; ?>
        </div>
        <div class="team-card-info">
          <h4>
            <?php echo htmlspecialchars($m['name']); ?>
          </h4>
          <div class="team-role">
            <?php echo htmlspecialchars($m['role']); ?>
          </div>
          <p>
            <?php echo htmlspecialchars($m['desc']); ?>
          </p>
        </div>
      </div>
      <?php endforeach; ?>

    </div>

    <!-- Technician Stats -->
    <div class="tech-stats-banner">
      <div class="tech-stats-text">
        <h3>200+ Certified Technicians</h3>
        <p>
          Every EZAC technician goes through a rigorous 3-stage process before
          their first customer visit — background verification, technical training,
          and brand certification. They are re-evaluated every 6 months.
        </p>
      </div>
      <div class="tech-stats-grid">
        <div class="tech-stat">
          <i class="fas fa-id-card"></i>
          <div>
            <strong>Aadhaar Verified</strong>
            <span>Identity confirmed</span>
          </div>
        </div>
        <div class="tech-stat">
          <i class="fas fa-user-shield"></i>
          <div>
            <strong>Police Verified</strong>
            <span>Background checked</span>
          </div>
        </div>
        <div class="tech-stat">
          <i class="fas fa-graduation-cap"></i>
          <div>
            <strong>Brand Certified</strong>
            <span>LG, Samsung, Daikin & more</span>
          </div>
        </div>
        <div class="tech-stat">
          <i class="fas fa-sync-alt"></i>
          <div>
            <strong>Re-trained</strong>
            <span>Every 6 months</span>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

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
        'Bihar'        => ['Patna','Madhepura','Bhagalpur','Muzaffarpur','Saharsa','Darbhanga','Begusarai','Purnia','Gaya','Munger','Sitamarhi','Supaul','Araria','Kishanganj','Katihar','Banka'],
        'Jharkhand'    => ['Ranchi','Jamshedpur','Dhanbad','Bokaro','Deoghar','Giridih','Hazaribagh'],
        'Uttar Pradesh'=> ['Varanasi','Gorakhpur','Azamgarh','Mau','Deoria','Ballia','Ghazipur'],
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
      Don't see your city? Call us at <a href="tel:+918003001234">+91-800-300-1234</a> —
      we may still be able to help or expand to your area soon.
    </p>

  </div>
</section>

<!-- ── CTA BANNER ── -->
<section class="section-sm">
  <div class="container">
    <div class="cta-banner">
      <div>
        <h2>Join 50,000+ Happy Customers</h2>
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
  .values-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-24);
  }

  .value-card {
    position: relative;
    background: var(--white);
    border: 1.5px solid var(--gray-200);
    border-radius: var(--radius-lg);
    padding: var(--space-28) var(--space-24) var(--space-24);
    overflow: hidden;
    transition: var(--transition);
  }

  .value-accent {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.35s ease;
  }

  .value-accent.blue   { background: var(--blue); }
  .value-accent.green  { background: var(--green); }
  .value-accent.amber  { background: var(--amber); }

  .value-card:hover {
    border-color: transparent;
    box-shadow: var(--shadow-lg);
    transform: translateY(-4px);
  }

  .value-card:hover .value-accent {
    transform: scaleX(1);
  }

  .value-icon {
    width: 52px;
    height: 52px;
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 21px;
    margin-bottom: var(--space-20);
    transition: var(--transition);
  }

  .value-icon.blue {
    background: var(--blue-light);
    color: var(--blue);
    box-shadow: inset 0 0 0 1px rgba(13, 110, 253, 0.12);
  }

  .value-icon.green {
    background: var(--green-light);
    color: var(--green-dark);
    box-shadow: inset 0 0 0 1px rgba(0, 184, 148, 0.14);
  }

  .value-icon.amber {
    background: var(--amber-light);
    color: var(--amber-dark);
    box-shadow: inset 0 0 0 1px rgba(255, 193, 7, 0.25);
  }

  .value-card:hover .value-icon.blue {
    background: var(--blue);
    color: #fff;
    box-shadow: var(--shadow-blue);
  }

  .value-card:hover .value-icon.green {
    background: var(--green);
    color: #fff;
    box-shadow: var(--shadow-green);
  }

  .value-card:hover .value-icon.amber {
    background: var(--amber);
    color: var(--gray-900);
    box-shadow: 0 4px 20px rgba(255, 193, 7, 0.30);
  }

  .value-card h3 {
    font-size: var(--text-md);
    font-weight: 800;
    letter-spacing: -0.01em;
    color: var(--gray-900);
    margin-bottom: var(--space-8);
  }

  .value-card p {
    font-size: var(--text-sm);
    color: var(--gray-600);
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