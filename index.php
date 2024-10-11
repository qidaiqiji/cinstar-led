<?php
    // Adding check to redirect all pages other than homepage that are being opened using homepage index.php file (use less pages)
    $explodedURL = explode('/',$_SERVER['REQUEST_URI']);
    if ($explodedURL[2] == '3d-led-display.php') {
        header("Location: https://www.cinstar-led.com/products/3d-led-display-screen.php"); 
        exit();
    }
    if ($explodedURL[2] == 'outdoor-led-display.php') {
        header("Location: https://www.cinstar-led.com/products/outdoor-led-display-screen.php"); 
        exit();
    }
    if ($explodedURL[2] == 'advertising-led.php') {
        header("Location: https://www.cinstar-led.com/products/led-advertising.php"); 
        exit();
    }
    if ($explodedURL[2] == 'digital-billboard.php') {
        header("Location: https://www.cinstar-led.com/products/digital-led-billboard.php"); 
        exit();
    }
    if ($explodedURL[2] == 'rental-led.php') {
        header("Location: https://www.cinstar-led.com/products/rental-led-display-screen.php"); 
        exit();
    }
    if ($explodedURL[2] == 'commercial-led.php') {
        header("Location: https://www.cinstar-led.com/products/commercial-led-display.php"); 
        exit();
    }
    if ($explodedURL[2] == 'creative-led.php') {
        header("Location: https://www.cinstar-led.com/products/creative-led-display.php"); 
        exit();
    }
    if ($explodedURL[2] == 'custom-led.php') {
        header("Location: https://www.cinstar-led.com/products/custom-led-display.php"); 
        exit();
    }
    if ($explodedURL[2] == 'fine-pitch.php') {
        header("Location: https://www.cinstar-led.com/products/fine-pitch-led-display.php"); 
        exit();
    }
    if ($explodedURL[2] == 'stage-led-screen.php') {
        header("Location: https://www.cinstar-led.com/products/led-stage-screen.php"); 
        exit();
    }
    // if($code == 404)
    // {
    //     header("HTTP/1.1 404 Not Found"); 
    //     header("Location: https://www.cinstar-led.com/404.html");
    //     // header("Location: https://www.cinstar-led.com/test/404.php");
    //     exit();            
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('inc/meta.php'); ?>
    <?php include('inc/rem.php'); ?>
    <meta name="description" content="Cinstar LED, a top LED display screen manufacturer, specializes in versatile LED video wall panels perfect for retail, events, and outdoor advertising. Visit us now." />
    <meta name="keywords" content="led display manufacturer, LED screen manufacturer, led video wall panels, led display screen manufacturer, direct view led, fine pitch led video wall, led advertising display, led display supplier, led screen supplier, led video wall, rental led display, custom led display, outdoor led display screen" />  
    <title>LED Display Screen Manufacturer | Cinstar LED</title>
    <link rel="stylesheet" href="utils/swiper-bundle.min.css">  
    <link rel="stylesheet" href="css/custom-product-240818.css">
    <link rel="stylesheet" href="css/common-home-240917.css">
    <link rel="stylesheet" href="css/contact-240815.css">
    <link rel="stylesheet" href="css/main-240917.css">
    <meta name="google-site-verification" content="2FKzXyph5r5iT5qjUrlBVrxJNmFL1OjFylXugJyakps" />
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Cinstar LED",
        "alternateName": "Cinstar",
        "url": "https://www.cinstar-led.com/",
        "logo": "https://www.cinstar-led.com/images/logo.png",
        "sameAs": [
            "https://www.facebook.com/Cinstar-Electronics-2334889366581201/?modal=admin_todo_tour",
            "https://www.instagram.com/cinstarled/",
            "https://twitter.com/Cinstar_led"
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "WebSite",
        "name": "Cinstar LED",
        "url": "https://www.cinstar-led.com",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://www.cinstar-led.com/?s={search_term_string}",
            "query-input": "required name=search_term_string"
            }
    }
    </script>
</head>
<body class="page-index">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBDRNKJB"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php include('inc/top.php'); ?>   
    <div class="container new-product-container">
        <div class="banner mobile-show">
            <ul class="swiper-wrapper">
                <li class="swiper-slide">
                    <img src="images/products/new-page/Indoor-led-display/indoor-led-display-1-2.webp" alt="indoor-led-display"/>
                    <a href="products/indoor-led-display.php" class="text-cover">
                        <p>Indoor LED Display</p>
                        <span>The Most Cost Effective Indoor LED Display Screen</span>
                        <span class="border-button">Get More Information</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="swiper banner mobile-hide">
            <ul class="swiper-wrapper">
                <li class="swiper-slide">
                    <img src="images/products/new-page/direct-view-led/direct-view-led-1.webp" alt="direct-view-led"/>   
                    <a href="products/direct-view-led.php" class="text-cover">
                        <p>Direct View LED</p>
                        <span>UHD Visual Impact Fine Pitch LED Video Wall</span>
                        <span class="border-button">Get More Information</span>
                    </a>
                </li>
                <li class="swiper-slide">
                    <img loading="lazy" src="images/products/new-page/3d-led-display/3d-led-display-1.webp" alt="3d-led-display"/>
                    <a href="products/3d-led-display-screen.php" class="text-cover">
                        <p>3D LED Display</p>
                        <span>Outdoor Naked Eye 3D LED Screen Advertising</span>
                        <span class="border-button">Get More Information</span>
                    </a>
                </li>
                <li class="swiper-slide">
                    <img loading="lazy" src="images/products/new-page/Indoor-led-display/indoor-led-display-1.webp" alt="indoor-led-display"/>
                    <a href="products/indoor-led-display.php" class="text-cover">
                        <p>Indoor LED Display</p>
                        <span>The Most Cost Effective Indoor LED Display Screen</span>
                        <span class="border-button">Get More Information</span>
                    </a>
                </li>
            </ul>
            <div class="swiper-pagination"></div>
        </div>
        <div class="home-h1">
            <h1>Leading LED Display Manufacturer</h1>
        </div>
        <div class="detail-section profile-mobile">
            <div class="profile-content">
                <p>As a leading sophisticated LED display screen manufacturer in China, Cinstar is dedicated to offering a wide range of LED video wall panels to grow and expand your business. We are honored to get involved into each of your project and propose you a tailored LED visual solution！</p>
                <div class="profile-mark">
                    <div class="profile-mark-item" style="width: 20%;">
                        <span class="mark-title">2012</span>
                        <span>Established</span>
                    </div>
                    <div class="profile-mark-item">
                        <span class="mark-title">+1200 Projects</span>
                        <span>Delivered</span>
                    </div>
                    <div class="profile-mark-item">
                        <span class="mark-title">+50 Countries</span>
                        <span>Exported</span>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="profile">
            <img src="images/home-new/banner-cinstar-1.webp" alt="Cinstar Profile" />
            <div class="profile-content">
                <div class="profile-dialog">
                    <h2>Cinstar Profile</h2>
                    <p>As a leading sophisticated LED display screen manufacturer in China, Cinstar is dedicated to offering a wide range of LED video wall panels to grow and expand your business. We are honored to get involved into each of your project and propose you a tailored LED visual solution！</p>
                </div>
                <div class="profile-mark">
                    <div class="profile-mark-item" style="width: 20%;">
                        <span class="mark-title">2012</span>
                        <span>Established</span>
                    </div>
                    <div class="profile-mark-item">
                        <span class="mark-title">+1200 Projects</span>
                        <span>Delivered</span>
                    </div>
                    <div class="profile-mark-item">
                        <span class="mark-title">+50 Countries</span>
                        <span>Exported</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail-section" style="border-bottom: none">
            <div class="brief" style="padding-top: 70px;">
                <div class="img-content">
                    <div class="img-box">
                        <div class="img-main1 img-main">
                            <div class="img">
                                <img src="images/home-new/cinstar-reception-2.webp" alt="cinstar-reception"/>
                            </div>
                            <div class="img">
                                <img src="images/home-new/cinstar-team-3.jpg" alt="cinstar-team"/>
                            </div>
                            <div class="img">
                                <img src="images/home-new/cinstar-production-4.jpg" alt="cinstar-production"/>
                            </div>
                            <div class="img">
                                <img src="images/home-new/cinstar-production-5.jpg" alt="cinstar-production"/>
                            </div>
                            <div class="img">
                                <img src="images/home-new/cinstar-aging-6.jpg" alt="cinstar-aging"/>
                            </div>
                            <div class="img">
                                <img src="images/home-new/cinstar-aging-7.jpg" alt="cinstar-aging"/>
                            </div>
                        </div>
                    </div>
                    <ul class="img-list1 img-list">
                        <li class="active">
                            <img src="images/home-new/cinstar-reception-2.webp" alt="cinstar-reception"/>
                        </li>
                        <li>
                            <img src="images/home-new/cinstar-team-3.jpg" alt="cinstar-team"/>
                        </li>
                        <li>
                            <img src="images/home-new/cinstar-production-4.jpg" alt="cinstar-production"/>
                        </li>
                        <li>
                            <img src="images/home-new/cinstar-production-5.jpg" alt="cinstar-production"/>
                        </li>
                        <li>
                            <img src="images/home-new/cinstar-aging-6.jpg" alt="cinstar-aging"/>
                        </li>
                        <li>
                            <img src="images/home-new/cinstar-aging-7.jpg" alt="cinstar-aging"/>
                        </li>
                    </ul>
                </div>
                <div class="instruction home-instruction">
                    <h2>Your Best China LED Display Screen Manufacturer & LED Video Wall Panels Supplier</h2>
                    <p>Cinstar is committed to manufacturing the most cost effective and quality assured LED video wall panels to cater to all your requirements on high profile or budget projects. In addition, Cinstar offers a wide variety of LED video wall panels which customizable for application scenarios such as advertising campaigns, rental events, television broadcasts and any other creative installations etc. Cinstar is making its every effort to be your trusted China LED display screen manufacturer by offering unparalleled service and top quality LED video wall panels.</p>
                    <a class="inquery" href="mailto:sales@cinstar-led.com">Get A Quote</a>
                </div>
            </div>
        </div>
        <div class="detail-section" style="background-color: #f2f2f2;border-bottom: none">
            <div class="brief" style="padding-top: 70px;">
                <div class="instruction home-instruction">
                    <h2>Comprehensive LED Video Wall Panel Solutions Provider</h2>
                    <p>With more than 12 years of industry manufacturing experience and industry veteran R&D team, all Cinstar LED video wall panels are designed and manufactured to meet and exceed your expectation on the quality, while maintaining the price at competitive level, creating more business opportunities and greatly optimize your ROI. Cinstar has one seasoned technical service team to tackle all your concerns about pre-sale consulting, on-site installation instruction or after sales technical support etc. Cinstar team are ready to deliver the best LED video wall panels for your projects!</p>
                    <a class="inquery" href="mailto:sales@cinstar-led.com">Get A Quote</a>
                </div>
                <div class="img-content">
                    <div class="img-box">
                        <div class="img-main2 img-main">
                            <div class="img">
                                <img src="images/home-new/cinstar-case-7.webp" alt="cinstar-case-7"/>
                            </div>
                            <div class="img">
                                <img src="images/home-new/cinstar-case-8.webp" alt="cinstar-case-8"/>
                            </div>
                            <div class="img">
                                <img src="images/home-new/cinstar-case-9.webp" alt="cinstar-case-9"/>
                            </div>
                            <div class="img">
                                <img src="images/home-new/cinstar-case-10.webp" alt="cinstar-case-10"/>
                            </div>
                            <div class="img">
                                <img src="images/home-new/cinstar-case-12.jpg" alt="cinstar-case-12"/>
                            </div>
                            <div class="img">
                                <img src="images/home-new/cinstar-case-13.webp" alt="cinstar-case-13"/>
                            </div>
                        </div>
                    </div>
                    <ul class="img-list2 img-list">
                        <li class="active">
                            <img src="images/home-new/cinstar-case-7.webp" alt="cinstar-case-7"/>
                        </li>
                        <li>
                            <img src="images/home-new/cinstar-case-8.webp" alt="cinstar-case-8"/>
                        </li>
                        <li>
                            <img src="images/home-new/cinstar-case-9.webp" alt="cinstar-case-9"/>
                        </li>
                        <li>
                            <img src="images/home-new/cinstar-case-10.webp" alt="cinstar-case-10"/>
                        </li>
                        <li>
                            <img src="images/home-new/cinstar-case-12.jpg" alt="cinstar-case-12"/>
                        </li>
                        <li>
                            <img src="images/home-new/cinstar-case-13.webp" alt="cinstar-case-13"/>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="product product-section">
            <div class="head-title">
                <h2>Featured Products</h2>
                <p>Cinstar wide range of LED video wall panels boost your business</p>
            </div>
            <div class="product-container">
                <div class="product-item">
                    <a class="thumb" href="/product-detail/ctv-series.php">
                        <img src="/images/home-new/ctv-series.webp" alt="ctv series" class="short" style="width: 100%" />
                    </a>
                    <a class="list-title" href="/product-detail/ctv-series.php">
                        <span class="current">All In One LED TV</span><span class="more">CTV Series</span>
                    </a>
                </div>
                <div class="product-item">
                    <a class="thumb" href="/product-detail/ch-series.php">
                        <img src="/images/products/Fine-Pitch/CH-series-1.webp" alt="ch-series" class="short" style="width: 93%" />
                    </a>
                    <a class="list-title" href="/product-detail/ch-series.php">
                        <span class="current">DVLED COB</span><span class="more">CH Series</span>
                    </a>
                </div>
                <div class="product-item">
                    <a class="thumb" href="/product-detail/cr-series.php">
                        <img src="/images/products/Rental-LED/CR-series-1.webp" alt="CR series" style="width: 93%"/>
                    </a>
                    <a class="list-title" href="/product-detail/cr-series.php">
                        <span class="current">Flexible Rental LED Display</span><span class="more">CR Series</span>
                    </a>
                </div>
                <div class="product-item">
                    <a class="thumb" href="/product-detail/x-series.php">
                        <img src="/images/products/Commercial-LED/X-series-1.webp" style="width: 95%" alt="x-series" class="short" />
                    </a>
                    <a class="list-title" href="/product-detail/x-series.php">
                        <span class="current">Outdoor LED Display Screen</span><span class="more">X Series</span>
                    </a>
                </div>
                <div class="product-item mobile-hide">
                    <a class="thumb" href="/product-detail/hd-series.php">
                        <img src="/images/products/Fine-Pitch/HD-SERIES-2.webp" alt="hd-series"  style="width: 93%"/>
                    </a>
                    <a class="list-title" href="/product-detail/hd-series.php">
                        <span class="current">Direct View LED Video Wall</span><span class="more">HD Series</span>
                    </a>
                </div>
                <div class="product-item mobile-hide">
                    <a class="thumb" href="/product-detail/a-series.php">
                        <img src="/images/products/Rental-LED/A-series-1.webp" alt="a-series" class="short" style="width: 95%" />
                    </a>
                    <a class="list-title" href="/product-detail/a-series.php">
                        <span class="current">Stage LED Video Screen Wall</span><span class="more">A Series</span>
                    </a>
                </div>
                <div class="product-item mobile-hide">
                    <a class="thumb" href="/product-detail/m-series.php">
                        <img src="images/products/Rental-LED/M-series-1.webp" alt="M-series" class="short" style="width: 90%" />
                    </a>
                    <a class="list-title" href="/product-detail/m-series.php">
                        <span class="current">Rental LED Video Wall Panel</span><span class="more">M Series</span>
                    </a>
                </div>
                <div class="product-item">
                    <a class="thumb" href="/product-detail/tf-series.php">
                        <img src="/images/products/Creative-LED/tf-1.jpg" alt="tf-series" style="width: auto;" />
                    </a>
                    <a class="list-title" href="/product-detail/tf-series.php">
                        <span class="current">LED Film Display Screen</span><span class="more">TF Series</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="spec-content product-section" style="display: flex; flex-direction: column; background: #f2f2f2;">
            <div class="head-title">
                <h2 style="margin-bottom: 0;">Products & Solutions</h2>
                <p>Cinstar LED video wall panel solutions cater to all your applications</p>
            </div>
            <div class="content series-list-content">
                <div class="series-box">
                    <div class="series-item">
                        <a href="products/direct-view-led.php" class="img-box"><img src="images/home-new/product-direct-view-led-14.webp" alt="product-direct-view-led-14"/></a>
                        <p>Cinstar direct view LED video wall panels are versatile and customizable for a wide variety of installations like wall mounted LED video wall panel, all-in-one LED TV screen and movable LED digital poster display. Our direct view LED video wall panels are designed with solid quality to satisfy all your high profile applications in TV studio, corporate showroom, control room, conference room, board room and home cinema etc.</p>
                        <div class="title-box-change">
                            <a href="products/direct-view-led.php" class="title-border-button">Direct View LED Video Wall</a>
                        </div>
                    </div>
                    <div class="series-item">
                        <a href="products/indoor-led-display.php" class="img-box"><img src="images/home-new/product-indoor-led-display-15.webp" alt="product-indoor-led-display-15"/></a>
                        <p>Cinstar indoor LED video wall panels offer wide pixel pitches and panel designs for your options. Featuring top tier LEDs, high refresh rate driver IC and ultra-sleek panel construction, all our indoor LED video wall panels are the ideal solutions for both rental events and advertisings, ensuring vibrant color, high quality image production and bringing you more happy clients. You deserve a reliable LED display screen manufacturer for your business.</p>
                        <div class="title-box-change">
                            <a href="products/indoor-led-display.php" class="title-border-button">Indoor LED Display Screen</a>
                        </div>
                    </div>
                    <div class="series-item">
                        <a href="products/outdoor-led-display-screen.php " class="img-box"><img src="images/home-new/product-outdoor-led-display-16.jpg" alt="product-outdoor-led-display-16"/></a>
                        <p>Featuring high brightness (more than 5500nits) and excellent IP rating (IP65), Cinstar outdoor LED video wall panels serve as the most reliable video display for both outdoor stage rental and outdoor LED advertising. All Cinstar outdoor LED video wall panels can be maintained from front or rear side to ensure the quick installation and easy maintenance. Cinstar can be the best  LED display screen manufacturer for your outdoor LED video wall panels.</p>
                        <div class="title-box-change">
                            <a href="products/outdoor-led-display-screen.php " class="title-border-button">Outdoor LED Display Screen</a>
                        </div>
                    </div>
                    <div class="series-item">
                        <a href="products/rental-led-display-screen.php" class="img-box"><img src="images/home-new/product-rental-led-display-17.webp" alt="product-rental-led-display-17"/></a>
                        <p>Designed with black LEDs, superb refresh rate(3840Hz) and great grayscale, Cinstar rental LED video wall panels can easily deliver top image quality for all rental events like music festival, concert tour, corporate event, Gala, award ceremony etc. With magnetic module and practical modular design, Cinstar rental LED video wall panels can be built and dismantled quick and easy. Contact us for cost effective rental LED video wall panel solutions.</p>
                        <div class="title-box-change">
                            <a href="products/rental-led-display-screen.php" class="title-border-button">Rental LED Display Screen</a>
                        </div>
                    </div>
                    <div class="series-item">
                        <a href="products/event-led-screen.php" class="img-box"><img src="images/home-new/product-event-led-display-18.jpg" alt="product-event-led-display-18"/></a>
                        <p>Cinstar has a series of quality rental LED video wall panels for events, church applications and stage rental events etc. To cater to all types of installations, Cinstar rental LED video wall panels can be built with truss suspension, ground/floor stacking or simply wall mounted. If you are looking for a trustworthy LED display screen manufacturer for your rental events, try out Cinstar rental LED video wall panels and our supreme quality services.</p>
                        <div class="title-box-change">
                            <a href="products/event-led-screen.php" class="title-border-button">LED Screens for Event</a>
                        </div>
                    </div>
                    <div class="series-item">
                        <a href="products/led-advertising.php" class="img-box"><img src="images/home-new/product-advertising-display-19.jpg" alt="product-advertising-display"/></a>
                        <p>As a leading reliable LED display screen manufacturer in China, all Cinstar advertising LED video wall panels are developed with top stability and durability to overcome any harsh weather conditions to achieve the 24/7 operations. Cinstar LED video wall panels can be customized to satisfy all kinds of installations and requirements on creative shapes. We aim to be a value-added partner to you and help to expand your business with max support.</p>
                        <div class="title-box-change">
                            <a href="products/led-advertising.php" class="title-border-button">LED Advertising Display</a>
                        </div>
                    </div>
                    <div class="series-item">
                        <a href="products/3d-led-display-screen.php" class="img-box"><img src="images/home-new/product-3d-led-display-20.jpg" alt="product-3d-led-display-20"/></a>
                        <p>Would you like your LED display screen to stand out from the crowd and become a remarkable iconic landscape, Cinstar 3D LED video wall panel display is for sure your first choice. No matter you want to get a seamless sharp right angle or truly smooth curve to deliver the most visual impact advertising to get the viewers engaged, Cinstar 3D LED video wall panels screen can reach all your expectations and ensuring you the best 3D LED display.</p>
                        <div class="title-box-change">
                            <a href="products/3d-led-display-screen.php" class="title-border-button">3D LED Display Screen</a>
                        </div>
                    </div>
                    <div class="series-item">
                        <a href="products/creative-led-display.php" class="img-box"><img src="images/home-new/product-creative-led-display-21.webp" alt="product-creative-led-display-21"/></a>
                        <p>Cinstar creative LED video wall panels offer wide options like holographic LED film screen, transparent LED video wall display, flexible LED module and dance floor LED video wall panels etc, to strengthen your competitiveness and stand out from your rivals with creative LED video wall solutions. Serving as the industry leading LED display screen manufacturer, Cinstar will supply you the creative LED video wall panels with best design and quality.</p>
                        <div class="title-box-change">
                            <a href="products/creative-led-display.php" class="title-border-button">Creative LED Display Screen</a>
                        </div>
                    </div>
                    <div class="series-item">
                        <a href="products/custom-led-display.php" class="img-box"><img src="images/home-new/product-custom-led-display-22.jpg" alt="product-custom-led-display-22"/></a>
                        <p>Cinstar offers OEM & ODM services for any customized LED video wall panel request from our customers. Our custom LED video wall displays can satisfy the very diversified applications like LED cube display, LED sphere screen, digital LED shelf, LED cylindrical display, taxi top LED sign, and LED trumpet display etc. They can working as LED video walls and also the creative decoration to the open space. A great visual solution for creative design.</p>
                        <div class="title-box-change">
                            <a href="products/custom-led-display.php" class="title-border-button">Custom LED Display Screen</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="choose product-section">
            <div class="head-title choose-header">
                <h2><a href="about/">Why Choose Cinstar</a></h2>
                <p>Cinstar is dedicated to being your trusted LED video wall panel manufacturer</p>
            </div>
            <div class="iconList">
                <div class="iconItem">
                    <div class="iconCricle">
                        <i class="fa fa-diamond"></i>
                    </div>
                    <div class="desc">
                        <div class="title">
                                LED EXPERTS
                        </div>
                        <div class="content">
                            As industry veterans, Cinstar team have managed thousands of LED projects and passionate about fulfilling customer's ideas by best LED video wall panels
                        </div>
                    </div>
                </div>
                <div class="iconItem">
                    <div class="iconCricle">
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="desc">
                        <div class="title">
                                TRUSTWORTHY
                        </div>
                        <div class="content">
                            Cinstar is committed to be a reliable LED display screen manufacturer by providing quality LED video wall panels and services. We never compete with our customers
                        </div>
                    </div>
                </div>
                <div class="iconItem">
                    <div class="iconCricle">
                        <i class="fa fa-signal"></i>
                    </div>
                    <div class="desc">
                        <div class="title half-title">
                                DIVERSITY 
                        </div>
                        <div class="content">
                            Cinstar has comprehensive LED video wall panels which cover a wide range of applications and equipped certificates which compatible with EU or US standards
                        </div>
                    </div>
                </div>
                <div class="iconItem">
                    <div class="iconCricle">
                        <i class="fa fa-cogs"></i>
                    </div>
                    <div class="desc">
                        <div class="title">
                                MANUFACTURING
                        </div>
                        <div class="content">
                            Cinstar believes that quality is the lifeline to customers. By applying advanced machines, all our LED video wall panels are manufactured with top quality and stability
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="customer product-section">
            <div class="head-title">
                <h2>What Our Customers Say</h2>
                <p>Cinstar quality LED video wall panels enhance your reputation</p>
            </div>
            <div id="customer-box" class="swiper">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide">
                        <div class="quote">
                            <p class="quote-content">
                                <i class="iconfont left-icon">&#xe6a1;</i>
                                I have known Jason for some years. Right from the start, Jason impressed me with his professional manner and consummate business acumen. He has a no nonsense approach, with always a focus on what are the best solutions to meet both short term and long term business objectives. He has an outstanding understanding of customer service and client retention and is trusted by many to always be honest and give the best advice.
                                I would have no hesitation in recommending prospective customers to use Cinstar LED screen display and their excellent services.
                                <i class="iconfont">&#xe6a2;</i>
                            </p>
                            <p class="author">– Garrett Henderson – Complete AV Solutions</p>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="quote">
                            <p class="quote-content">
                                <i class="iconfont left-icon">&#xe6a1;</i>
                                I'd like to say a massive thank you-the big LED screen display looks so great at my event site and I think it just adds an extra touch for our participants! Working with you again this year has been excellent, your service and technician team have been incredible too!
                                <i class="iconfont">&#xe6a2;</i>
                            </p>
                            <p class="author">– Anthony Van Andel – AV Direct CC</p>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="quote">
                            <p class="quote-content">
                                <i class="iconfont left-icon">&#xe6a1;</i>
                                Cinstar LED video display exceeded all expectations. We were extremely happy with every aspect from the initial design and consultations, right through to the commissioning. Their expertise and technical knowledge proved to be invaluable and the dedication they showed right through the project was relentless. I would have absolutely no hesitation in recommending them.
                                <i class="iconfont">&#xe6a2;</i>
                            </p>
                            <p class="author">– Matthew Shankle – ADTI Media</p>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="quote">
                            <p class="quote-content">
                                <i class="iconfont left-icon">&#xe6a1;</i>
                                I wanted to thank you for supplying the LED video display at the last minute, the event went very well as scheduled and the LED video display worked with zero-defect for three days, it was really amazing!!! We highly appreciated your great efforts and services on this case and look forward to working with you again in the not too distant future.
                                <i class="iconfont">&#xe6a2;</i>
                            </p>
                            <p class="author">– Jens Løvaas – Hove West</p>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="quote">
                            <p class="quote-content">
                                <i class="iconfont left-icon">&#xe6a1;</i>
                                Alex and Sharon have provided my business with a fantastic service over the past year. They are always at the end of the phone when I need them and offer a service which goes above and beyond any other service provider I have used. I can highly recommend doing business with Cinstar team as they are reliable, knowledgeable and full of integrity.
                                <i class="iconfont">&#xe6a2;</i>
                            </p>
                            <p class="author">– Patrick Herveille – Highlite international BV</p>
                        </div>
                    </li>
                </ul>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="caseStudy product-section">
            <div class="head-title gallery-title">
                <h2><a href="gallery/">Projects Gallery</a></h2>
                <p>Cinstar cost effective LED video wall panels support your project</p>
            </div>
            <div class="case-list">
                <div class="case-item">
                    <span class="case-thumb">
                        <img src="images/home/Lulea-Hockey-Media-Cube-LED-Video-Wall.webp" alt="Lulea Hockey Media Cube LED Video Wall"/>
                    </span>
                    <span class="case-title">
                        <span class="current">Lulea Hockey Media Cube LED Video Wall</span>
                    </span>
                </div>
                <div class="case-item">
                    <span class="case-thumb">
                        <img src="images/home-new/Touring-P3.9-LED-Video-Wall-Panel-23.webp" alt="Touring-P3.9-LED-Video-Wall-Panel"/>
                    </span>
                    <span class="case-title">
                        <span class="current">Touring P3.9 LED Video Wall Panel</span>
                    </span>
                </div>
                <div class="case-item">
                    <span class="case-thumb">
                        <img src="images/home-new/P8-3D-LED-Video-Wall-Panel-24.webp" alt="P8-3D-LED-Video-Wall-Panel"/>
                    </span>
                    <span class="case-title">
                        <span class="current">P8 3D LED Video Wall Panel</span>
                    </span>
                </div>
                <div class="case-item">
                    <span class="case-thumb">
                        <img src="images/home-new/TV-Studio-P1.2-LED-Video-Wall-Panel-25.jpg" alt="TV-Studio-P1.2-LED-Video-Wall-Panel"/>
                    </span>
                    <span class="case-title">
                        <span class="current">TV Studio P1.2 LED Video Wall Panel</span>
                    </span>
                </div>
                <div class="case-item">
                    <span class="case-thumb">
                        <img src="images/home-new/Church-P2.9-LED-Video-Wall-Panel-26.webp" alt="Church-P2.9-LED-Video-Wall-Panel"/>
                    </span>
                    <span class="case-title">
                        <span class="current">Church P2.9 LED Video Wall Panel</span>
                    </span>
                </div>
                <div class="case-item">
                    <span class="case-thumb">
                        <img src="images/home-new/P6-Advertising-LED-Video-Wall-27.jpg" alt="P6 Advertising LED Video Wall"/>
                    </span>
                    <span class="case-title">
                        <span class="current">P6 Advertising LED Video Wall</span>
                    </span>
                </div>
                <div class="case-item mobile-hide">
                    <span class="case-thumb">
                        <img src="images/home-new/P8-LED-Digital-Billboard-28.webp" alt="P8 LED Digital Billboard"/>
                    </span>
                    <span class="case-title">
                        <span class="current">P8 LED Digital Billboard</span>
                    </span>
                </div>
                <div class="case-item mobile-hide">
                    <span class="case-thumb">
                        <img src="images/home/ESPN-Conference-Room-1.56mm.jpg" alt="ESPN Conference Room 1.56mm"/>
                    </span>
                    <span class="case-title">
                        <span class="current">ESPN 1.56mm LED Screen Display</span>
                    </span>
                </div>
                <div class="case-item mobile-hide">
                    <span class="case-thumb">
                        <img src="images/home/Mosco-Airport-10mm.webp" alt="Mosco Airport 10mm"/>
                    </span>
                    <span class="case-title">
                        <span class="current">Mosco Airport 10mm LED Video Display</span>
                    </span>
                </div>
                <div class="case-item mobile-hide">
                    <span class="case-thumb">
                        <img src="images/home/New-Zealand-Shopping-Mall-6mm.webp" alt="New Zealand Shopping Mall 6mm"/>
                    </span>
                    <span class="case-title">
                        <span class="current">New Zealand 6mm LED Screen Display</span>
                    </span>
                </div>
                <div class="case-item mobile-hide">
                    <span class="case-thumb">
                        <img src="images/home/Strickly-Star-3.9mm.webp" alt="Strickly Star 3.9mm"/>
                    </span>
                    <span class="case-title">
                        <span class="current">Strickly Star 3.9mm LED Video Display</span>
                    </span>
                </div>
                <div class="case-item mobile-hide">
                    <span class="case-thumb">
                        <img src="images/home/Swizerland-Conference-room-1.2mm.webp" alt="Swizerland Conference room 1.2mm"/>
                    </span>
                    <span class="case-title">
                        <span class="current">Swizerland 1.2mm LED Screen Display</span>
                    </span>
                </div>
            </div>
            
        </div>
        <div class="news product-section" style="background: #f2f2f2">
            <div class="head-title">
                <h2><a href="news/">Latest News</a></h2>
                <p>Stay with Cinstar for new project & LED video wall panel launch</p>
            </div>
            <div class="news-list">
                <div class="news-item">
                    <a class="news-thumb" href="news-detail/2024-09-20.php">
                        <img src="images/home/Lulea-Hockey-Media-Cube-LED-Video-Wall.webp" alt="Lulea Hockey Media Cube LED Video Wall"/>
                    </a>
                    <div class="news-detail">
                        <div class="news-title">
                            <h3>Cinstar P4 media cube LED video wall shines at Lulea Hockey & COOP Norrbotten Arena </h3>
                            <p class="date">2024-09-20</p>
                        </div>
                        <div class="news-desc">
                        Big thanks to our partner’s great efforts and professionalism, the Cinstar P4 massive media cube LED video wall panels were installed and operated as scheduled to deliver high profile match performance for the opening day games of Lulea Hockey and COOP Norrbotten arena. The stunning performance of this current most advanced media cubes caught big attention in the SHL(Swedish Hockey League) field. 
                        </div>
                    </div>
                    <hr class="under-line"/>
                </div>
                <div class="news-item">
                    <a class="news-thumb" href="news-detail/2024-09-11.php">
                        <img src="images/news/direct-view-led-news.jpg" alt="direct-view-led-news"/>
                    </a>
                    <div class="news-detail">
                        <div class="news-title">
                            <h3>CH1.2 COB direct view LED video wall panels delivered to USA high school </h3>
                            <p class="date">2024-09-11</p>
                        </div>
                        <div class="news-desc">
                            Benefit from encapsulation advancement and big drop in cost, COB technology is getting matured and challenging conventional SMD technology a lot at the direct view LED video wall applications like television broadcast studio, conference room, meeting room, board room, command center and home cinema etc. COB can easily achieve the pixel pitch lower than 0.9mm, such as 0.62mmm, 0.78mm are available now. 
                        </div>
                    </div>
                    <hr class="under-line"/>
                </div>
                <div class="news-item">
                    <a class="news-thumb" href="news-detail/2024-07-08.php">
                        <img src="images/news/media-cube-led-video-wall-panel-2.jpg" alt="Cube LED Video Wall Panel"/>
                    </a>
                    <div class="news-detail">
                        <div class="news-title">
                            <h3>108SQM media cube LED video wall panels for ice hockey arena</h3>
                            <p class="date">2024-07-08</p>
                        </div>
                        <div class="news-desc">
                        Cinstar is thrilled to be the supplier of two striking media cube LED video wall panels, and we owe a great deal of gratitude to our strategic Swedish partner for their trust as well as their hard work and professionalism. It is anticipated that the new media cubes will provide an even more spectacular visual experience and update the old-fashioned LED bucket screens that have been in operation for more than 10 years.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-detail product-section">
            <div class="head-title">
                <h2>Get In Touch</h2>
                <p>Contact Cinstar for your tailored LED video wall panel solution</p>
            </div>
            <form id="myforms" name="myforms" method="post" action="/quotes/Index/index" onSubmit="return Checks()">
                <div class="contact-body">
                    <p class="input-contact">
                        <input type="text" placeholder="Name" maxlength="50" name="name" class="contact-input">
                        <input type="text" placeholder="Company" maxlength="50" name="company" class="contact-input">
                    </p>
                    <p class="input-contact">
                        <input type="text" placeholder="E-mail" maxlength="50" name="email" class="contact-input">
                        <input type="text" placeholder="Telephone" maxlength="50" name="tel" class="contact-input">
                    </p>
                    <textarea placeholder="Message" name="contents" maxlength="1000" class="contact-textarea"></textarea>
                    <div class="btn">
                        <button class="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <?php include('inc/foot.php'); ?>
    </div>
    <?php include('inc/js.php'); ?>
    <script>GetCurStyle("home");</script>
    <script src="utils/swiper-bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            var swiper = new Swiper(".banner", {
                centeredSlides: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
            var customer = new Swiper("#customer-box", {
                centeredSlides: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
        })
    </script>
    <script>scrollImg(".img-main1", '.img-list1');</script>
    <script>scrollImg(".img-main2", '.img-list2');</script>
</body> 
</html>
