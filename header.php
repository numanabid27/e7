<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
    // SEO Meta Tags - Set defaults if not defined
    $pageTitle = isset($pageTitle) ? $pageTitle : "ELECTRO-7 GENERAL TRADING LLC | Innovative Technology Solutions & Trading";
    $pageDescription = isset($pageDescription) ? $pageDescription : "ELECTRO-7 General Trading LLC provides innovative technological solutions, system integration, and trading services in Dubai, UAE. Specializing in RTLS, RFID, Asset Management, Solar Solutions, and Water Management.";
    $pageKeywords = isset($pageKeywords) ? $pageKeywords : "ELECTRO-7, Dubai trading, technology solutions, RTLS, RFID, asset management, solar solutions, water management, UAE trading company";
    $pageImage = isset($pageImage) ? $pageImage : "https://electro7.com/assets/images/logo.png";
    $pageUrl = isset($pageUrl) ? $pageUrl : "https://electro7.com" . $_SERVER['REQUEST_URI'];
    $pageType = isset($pageType) ? $pageType : "website";
    $siteName = "ELECTRO-7 GENERAL TRADING LLC";
    ?>
    
    <!-- Primary Meta Tags -->
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords); ?>">
    <meta name="author" content="ELECTRO-7 GENERAL TRADING LLC">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="<?php echo htmlspecialchars($pageType); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($pageUrl); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($pageImage); ?>">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($siteName); ?>">
    <meta property="og:locale" content="en_US">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo htmlspecialchars($pageUrl); ?>">
    <meta property="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="twitter:image" content="<?php echo htmlspecialchars($pageImage); ?>">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo htmlspecialchars($pageUrl); ?>">
    
    <!-- Favicon -->
    <link href="./assets/images/logo.svg" rel="shortcut icon">
    <link rel="icon" type="image/svg+xml" href="./assets/images/logo.svg">
    
    <!-- Stylesheets -->
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
    <link href="./assets/css/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/menu.css">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "ELECTRO-7 GENERAL TRADING LLC",
      "url": "https://electro7.com",
      "logo": "https://electro7.com/assets/images/logo.png",
      "description": "ELECTRO-7 General Trading LLC provides innovative technological solutions, system integration, and trading services in Dubai, UAE.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Office # 207, Garhoud star building, Al-Garhoud",
        "addressLocality": "Dubai",
        "addressCountry": "United Arab Emirates"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+97142946335",
        "contactType": "Customer Service",
        "email": "info@electro7.com"
        "areaServed": "AE",
        "availableLanguage": ["en","ar"]
      },
      "sameAs": [
        "https://www.facebook.com/people/Electro7/61572615522821/",
        "https://www.linkedin.com/company/electro7-trading-technologies/"
      ]
    }
    </script>

</head>

<body class="no-scroll">
    <div class="position-relative">
        <div class="navigation-wrap bg-dark py-2">
            <div class="container-fluid p-0 custom_container">
                <nav class="navbar navbar-expand-lg navbar-dark pr-0 mainmenu">
                    <div class="row w-100">
                        <div class="col-md-3">
                            <div class="d-flex justify-content-between">
                                <a class="navbar-brand" href="index" title="ELECTRO-7 General Trading LLC - Home">
                                    <img src="./assets/images/footer_logo.png" alt="ELECTRO-7 General Trading LLC Logo" title="ELECTRO-7 General Trading LLC" height="40" loading="eager">
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-9 align-content-center d-flex">
                            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                                <ul class="navbar-nav nav-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="./" title="About Us - ELECTRO-7 General Trading LLC">About Us</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="product" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false" title="Products Menu">
                                            Products
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="product">
                                            <li><a class="dropdown-item" href="./ultra_wide_band" title="RTLS Solutions - Ultra Wide Band Technology">RTLS Solutions</a></li>
                                            <li><a class="dropdown-item" href="./long_range_rfid" title="Long Range RFID Readers - Asset Management">Long range RFID Readers</a></li>
                                            <li><a class="dropdown-item" href="./asset_management" title="Asset Management Solutions - NFC Technology">Asset Management Solutions</a></li>
                                            <li><a class="dropdown-item" href="./connectivity_solutions" title="Connectivity Solutions - Industrial Communication">Connectivity Solutions</a></li>
                                            <li>
                                                <a class="dropdown-item" href="./water_flood" title="Water & Flood Monitoring Solutions">Water & Flood Solutions </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="./water_management" title="Water Management Solutions - RainMAN Controllers">Water Management Solutions</a>
                                            </li>
                                            <li class="dropdown-submenu">
                                                <a class="dropdown-item dropdown-toggle" href="#" title="Renewable Energy Solutions">Renewable Energy</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="./solar_glass" title="Solar Glass - Clean Energy Technology">Solar Glass</a></li>
                                                    <li><a class="dropdown-item" href="./solar_panels" title="Solar Panels - High-Efficiency Solar Technology">Solar Panels</a></li>
                                                    <li><a class="dropdown-item" href="./solar_lamp_post" title="Solar Lamp Post - Sustainable Outdoor Lighting">Solar Lamp Post</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact" title="Contact Us - ELECTRO-7 General Trading LLC">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Slider Start here -->