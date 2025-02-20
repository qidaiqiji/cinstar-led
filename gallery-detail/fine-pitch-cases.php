<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../inc/meta.php'); ?>
    <?php include('../inc/rem.php'); ?>
    <link rel="stylesheet" href="../css/galleryDetail-240816.css">
    <title>Fine Pitch LED Cases | Visual Excellence | Cinstar LED</title>
    <meta name="description" content="Discover visual excellence with fine pitch LED cases. Cinstar LED delivers stunning clarity and detail for premium installations!">
    <meta name="keywords" content="Narrow pixel pitch LED screen, fine pitch LED wall, LED display factory, LED display price, LED screen for sale, LED signage screen, big LED display wall">
</head>
<body class="page-index .menu-open">
    <?php include('../inc/top.php'); ?>
    <div class="container gallery-container">
        <div class="head-title">
            <h1>Fine Pitch Cases</h1>
        </div>
        <div class="gallery-wrap">
            <div class="gallery-list">
            </div>
        </div>
        <?php include('../inc/foot.php'); ?>
    </div>
    <?php include('../inc/js.php'); ?>
    <script>
        let data = [
            {
                line1: 'Location: China Command Room',
                line2: 'Product: Cinstar HD1.56 ',
                line3: 'Screen size: 35sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fine/Cinstar-HD1.56-China.jpg'
            },
            {
                line1: 'Location: US',
                line2: 'Product: Cinstar HD1.56 ',
                line3: 'Screen size: 8sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fine/Cinstar-HD1.56-USA.jpg'
            },
            {
                line1: 'Location: US',
                line2: 'Product: Cinstar HD1.87 ',
                line3: 'Screen size: 13sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fine/Cinstar-HD1.87-USA.jpg'
            },

            {
                line1: 'Location: US ESPN Conference Room',
                line2: 'Product: Cinstar HD1.56 ',
                line3: 'Screen size: 12sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fine/1-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: Swizerland Conference Room',
                line2: 'Product: Cinstar NL1.2',
                line3: 'Screen size: 10sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fine/2-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: India Lecture Theater Installation',
                line2: 'Product: NL1.2',
                line3: 'Screen size: 16sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fine/3-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: US ESB Lobby',
                line2: "Product: Cinstar HD1.56",
                line3: 'Screen size: 15sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fine/4-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: China Traffic Control Center',
                line2: "Product: Cinstar HD1.2",
                line3: 'Screen size: 38sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fine/5-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: Australia Sports Bar Launch',
                line2: "Product: Cinstar P3.9mm",
                line3: 'Screen size: 130sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fine/6-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: Sigapore Painting Exibition',
                line2: "Product: Cinstar NL1.2",
                line3: 'Screen size: 10sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fine/7-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: US Hotel Dining Room:',
                line2: "Product: Cinstar NL1.56",
                line3: 'Screen size: 32sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fine/8-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: UK Heathrow International Airport ',
                line2: "Product: Cinstar NL1.92",
                line3: 'Screen size: 16sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fine/9-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: France Control Room',
                line2: "Product: Cinstar HD1.87",
                line3: 'Screen size: 20sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fine/10-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: India Wedding Ceremony',
                line2: "Product: Cinstar HD2.3",
                line3: 'Screen size: 21sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fine/11-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: UK European Investment Bank',
                line2: "Product: Cinstar HD1.56",
                line3: 'Screen size: 21sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fine/12-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: Australia Sydney Airport',
                line2: "Product: Cinstar NL1.66",
                line3: 'Screen size: 24sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fine/13-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: France Fitness Club',
                line2: "Product: Cinstar P2.5mm",
                line3: 'Screen size: 15sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fine/14-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: UK Luxury Store',
                line2: "Product: Cinstar P2.5mm",
                line3: 'Screen size: 18sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fine/15-fine-pitch-case.jpg'
            }
        ];
        let htms = "";
        data.map(item=>{
            htms += `<div class="gallery-item">
                        <div class="gallery-left">
                            <p>${item.line1}</p>
                            <p>${item.line2}</p>
                            <p>${item.line3}</p>
                        </div>
                        <div class="gallery-img">
                            <img src=${item.imgSrc} alt=${item.line3}>
                        </div>
                </div>`
        })
        $(function(){
            $(".gallery-list").append(htms)
        })
    </script>
    <script>GetCurStyle("gallery");</script>
</body> 
</html>