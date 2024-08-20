<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../inc/meta.php'); ?>
    <?php include('../inc/rem.php'); ?>
    <link rel="stylesheet" href="../css/galleryDetail-240816.css">
    <title>Narrow Pixel Pitch LED Screen | Cinstar-led, Fine Pitch LED Wall</title>
    <meta name="description" content="Cinstar direct view LED display is ideal for high-end installations at conference room, meeting room, board room, control room, monitor room and TV studios where superb image quality is a must." />
    <meta name="keywords" content="Narrow pixel pitch LED screen, fine pitch LED wall, LED display factory, LED display price, LED screen for sale, LED signage screen, big LED display wall" />
</head>
<body class="page-index .menu-open">
    <?php include('../inc/top.php'); ?>
    <div class="container gallery-container">
        <div class="head-title">
            <h2>Fine Pitch Cases</h2>
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
                imgSrc: '../images/fine/Cinstar-HD1.56-China.jpg'
            },
            {
                line1: 'Location: US',
                line2: 'Product: Cinstar HD1.56 ',
                line3: 'Screen size: 8sqm',
                imgSrc: '../images/fine/Cinstar-HD1.56-USA.jpg'
            },
            {
                line1: 'Location: US',
                line2: 'Product: Cinstar HD1.87 ',
                line3: 'Screen size: 13sqm',
                imgSrc: '../images/fine/Cinstar-HD1.87-USA.jpg'
            },

            {
                line1: 'Location: US ESPN Conference Room',
                line2: 'Product: Cinstar HD1.56 ',
                line3: 'Screen size: 12sqm',
                imgSrc: '../images/fine/1-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: Swizerland Conference Room',
                line2: 'Product: Cinstar NL1.2',
                line3: 'Screen size: 10sqm',
                imgSrc: '../images/fine/2-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: India Lecture Theater Installation',
                line2: 'Product: NL1.2',
                line3: 'Screen size: 16sqm',
                imgSrc: '../images/fine/3-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: US ESB Lobby',
                line2: "Product: Cinstar HD1.56",
                line3: 'Screen size: 15sqm',
                imgSrc: '../images/fine/4-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: China Traffic Control Center',
                line2: "Product: Cinstar HD1.2",
                line3: 'Screen size: 38sqm',
                imgSrc: '../images/fine/5-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: Australia Sports Bar Launch',
                line2: "Product: Cinstar P3.9mm",
                line3: 'Screen size: 130sqm',
                imgSrc: '../images/fine/6-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: Sigapore Painting Exibition',
                line2: "Product: Cinstar NL1.2",
                line3: 'Screen size: 10sqm',
                imgSrc: '../images/fine/7-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: US Hotel Dining Room:',
                line2: "Product: Cinstar NL1.56",
                line3: 'Screen size: 32sqm',
                imgSrc: '../images/fine/8-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: UK Heathrow International Airport ',
                line2: "Product: Cinstar NL1.92",
                line3: 'Screen size: 16sqm',
                imgSrc: '../images/fine/9-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: France Control Room',
                line2: "Product: Cinstar HD1.87",
                line3: 'Screen size: 20sqm',
                imgSrc: '../images/fine/10-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: India Wedding Ceremony',
                line2: "Product: Cinstar HD2.3",
                line3: 'Screen size: 21sqm',
                imgSrc: '../images/fine/11-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: UK European Investment Bank',
                line2: "Product: Cinstar HD1.56",
                line3: 'Screen size: 21sqm',
                imgSrc: '../images/fine/12-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: Australia Sydney Airport',
                line2: "Product: Cinstar NL1.66",
                line3: 'Screen size: 24sqm',
                imgSrc: '../images/fine/13-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: France Fitness Club',
                line2: "Product: Cinstar P2.5mm",
                line3: 'Screen size: 15sqm',
                imgSrc: '../images/fine/14-fine-pitch-case.jpg'
            },
            {
                line1: 'Location: UK Luxury Store',
                line2: "Product: Cinstar P2.5mm",
                line3: 'Screen size: 18sqm',
                imgSrc: '../images/fine/15-fine-pitch-case.jpg'
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
                            <img src=${item.imgSrc} alt=${item.line3}/>
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