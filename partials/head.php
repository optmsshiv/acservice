<?php
/**
 * EZAC Service — Shared <head> partial
 * Usage: <?php include 'partials/head.php'; ?>
 *
 * Variables (set BEFORE including this file):
 *   $page_title       — Tab title (string)
 *   $page_description — Meta description (string)
 *   $page_canonical   — Canonical URL (string, optional)
 *   $extra_css        — Additional page-specific CSS file (string, optional)
 */

$page_title       = $page_title       ?? 'EZAC Service — AC Repair, Home Appliance & Plumbing Services';
$page_description = $page_description ?? 'Professional AC repair, installation, refrigerator, washing machine, electrical and plumbing services at your doorstep. Certified technicians, 90-day warranty, transparent pricing.';
$page_canonical   = $page_canonical   ?? 'https://ezacservice.in/';
$extra_css        = $extra_css        ?? '';

$site_name = 'EZAC Service';
$site_url  = 'https://ezacservice.in';
$og_image  = $site_url . '/assets/images/og-image.jpg';
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- ── CHARACTER SET & VIEWPORT ── -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- ── PRIMARY META ── -->
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="keywords"    content="AC repair, AC installation, AC maintenance, refrigerator repair, washing machine repair, electrical service, plumbing service, home appliance repair, Bihar, Patna, Madhepura">
  <meta name="author"      content="EZAC Service">
  <meta name="robots"      content="index, follow">
  <link rel="canonical"    href="<?php echo htmlspecialchars($page_canonical); ?>">

  <!-- ── OPEN GRAPH (Facebook / WhatsApp) ── -->
  <meta property="og:type"        content="website">
  <meta property="og:site_name"   content="<?php echo $site_name; ?>">
  <meta property="og:title"       content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:url"         content="<?php echo htmlspecialchars($page_canonical); ?>">
  <meta property="og:image"       content="<?php echo $og_image; ?>">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height"content="630">
  <meta property="og:locale"      content="en_IN">

  <!-- ── TWITTER CARD ── -->
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:title"       content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="twitter:image"       content="<?php echo $og_image; ?>">

  <!-- ── FAVICON ── -->
  <link rel="icon"             type="image/x-icon"     href="/assets/images/icons/favicon.ico">
  <link rel="icon"             type="image/png" sizes="32x32" href="/assets/images/icons/favicon-32.png">
  <link rel="apple-touch-icon" sizes="180x180"          href="/assets/images/icons/apple-touch-icon.png">
  <link rel="manifest"                                  href="/manifest.json">
  <meta name="theme-color" content="#0D6EFD">

  <!-- ── LOCAL BUSINESS SCHEMA (JSON-LD) ── -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "EZAC Service",
    "description": "<?php echo htmlspecialchars($page_description); ?>",
    "url": "<?php echo $site_url; ?>",
    "logo": "<?php echo $site_url; ?>/assets/images/logo.svg",
    "image": "<?php echo $og_image; ?>",
    "telephone": "+91-800-300-1234",
    "email": "hello@ezacservice.in",
    "priceRange": "₹₹",
    "currenciesAccepted": "INR",
    "paymentAccepted": "Cash, UPI, Credit Card, Debit Card",
    "openingHours": "Mo-Su 07:00-22:00",
    "areaServed": "Bihar, Jharkhand, Uttar Pradesh",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Station Road",
      "addressLocality": "Madhepura",
      "addressRegion": "Bihar",
      "postalCode": "852113",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "25.9253",
      "longitude": "86.7926"
    },
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.9",
      "reviewCount": "50000"
    },
    "sameAs": [
      "https://www.facebook.com/ezacservice",
      "https://www.instagram.com/ezacservice"
    ]
  }
  </script>

  <!-- ── GOOGLE FONTS ── -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- ── FONT AWESOME ICONS ── -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- ── GLOBAL STYLESHEETS ── -->
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/navbar.css">
  <link rel="stylesheet" href="/assets/css/footer.css">
  <link rel="stylesheet" href="/assets/css/buttons.css">
  <link rel="stylesheet" href="/assets/css/forms.css">
  <link rel="stylesheet" href="/assets/css/cards.css">
  <link rel="stylesheet" href="/assets/css/responsive.css">

  <?php if ($extra_css): ?>
  <!-- ── PAGE-SPECIFIC CSS ── -->
  <link rel="stylesheet" href="/assets/css/<?php echo htmlspecialchars($extra_css); ?>">
  <?php endif; ?>

</head>
<body>