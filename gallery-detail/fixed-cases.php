<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../inc/meta.php'); ?>
    <?php include('../inc/rem.php'); ?>
    <link rel="stylesheet" href="../css/galleryDetail-240816.css">
    <title>Transform Your Space with Fixed LED Cases | Cinstar LED</title>
    <meta name="description" content="View our collection of fixed cases designed for professional LED installations. Elevate your project with CinstarLED's top-notch solutions.">
    <meta name="keywords" content="digital display screens, LED digital signs, commercial LED screens, advertising LED display screen, advertising LED screen price, outdoor commercial LED billboard, advertising LED billboard">
</head>
<body class="page-index .menu-open">
    <!-- 头部开始 -->
    <?php include('../inc/top.php'); ?>
    <!-- 头部结束 -->
    <div class="container gallery-container">
            <div class="head-title">
            <h1>Fixed Install Cases</h1>
        </div>
        <div class="gallery-wrap">
            <div class="gallery-list">
            </div>
        </div>
            <!-- 底部开始 -->
        <?php include('../inc/foot.php'); ?>
        <!-- 底部结束 -->
    </div>
    <?php include('../inc/js.php'); ?>
    <script>
        let data = [
            {
                line1: 'Location: New Zealand Shopping Mall',
                line2: 'Product: Cinstar DB6',
                line3: 'Screen size: 65sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fixed/1-fixed-case.jpg'
            },
            {
                line1: 'Location：US Retail Store ',
                line2: 'Product：Cinstar EI3.9',
                line3: 'Screen size: 30sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fixed/2-fixed-case.jpg'
            },
            {
                line1: 'Location：UK Shopping Center Creative Columns ',
                line2: 'Product：Cinstar LM3.9',
                line3: 'Screen size: 260sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fixed/3-fixed-case.jpg'
            },
            {
                line1: 'Location：Western Sydney University',
                line2: 'Product：Cinstar TS7.8',
                line3: 'Screen size: 24.5sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fixed/4-fixed-case.jpg'
            },
            {
                line1: 'Location：Finland Shopping Mall Crown Screen',
                line2: "Product：Cinstar MC31",
                line3: 'Screen size: 144sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fixed/5-fixed-case.jpg'
            },
            {
                line1: 'Location：Norway Mobile Trailer Screen',
                line2: "Product：Cinstar FT6.67",
                line3: 'Screen size: 20sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fixed/6-fixed-case.jpg'
            },
            {
                line1: 'Location：New Zealand Auckland Airport',
                line2: "Product：Cinstar EI5.9",
                line3: 'Screen size: 36sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fixed/7-fixed-case.jpg'
            },
            {
                line1: 'Location：Finland Shopping Center',
                line2: "Product：Cinstar CR5.95",
                line3: 'Screen size: 60sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fixed/8-fixed-case.jpg'
            },
            {
                line1: 'Location：Australia Fair Entrance',
                line2: "Product：Cinstar FT6.67",
                line3: 'Screen size: 18sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fixed/9-fixed-case.jpg'
            },
            {
                line1: 'Location：Sweden Ice Hockey Arena',
                line2: "Product：Cinstar MC15",
                line3: 'Screen size: 36sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fixed/10-fixed-case.jpg'
            },
            {
                line1: 'Location：Australia Collins Street',
                line2: "Product：Cinstar EI3.9",
                line3: 'Screen size: 16sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fixed/11-fixed-case.jpg'
            },
            {
                line1: 'Location：Impact-Church Double Sides',
                line2: "Product：Cinstar FT6.67",
                line3: 'Screen size: 15sqmx2',
                imgSrc: 'https://www.cinstar-led.com/images/fixed/12-fixed-case.jpg'
            },
            {
                line1: 'Location：Italy Shopping Center',
                line2: "Product：Cinstar EI3.9",
                line3: 'Screen size: 45sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fixed/13-fixed-case.jpg'
            },
            {
                line1: 'Location：Adelaide Festival Centre',
                line2: "Product：Cinstar FT6.67",
                line3: 'Screen size: 52sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fixed/14-fixed-case.jpg'
            },
            // {
            //     line1: 'Location：Finland Shopping Mall',
            //     line2: "Product：Cinstar 6mm",
            //     line3: 'Screen size: 21sqm',
            //     imgSrc: 'https://www.cinstar-led.com/images/fixed/15-fixed-case.jpg'
            // },
            // {
            //     line1: 'Location：Turku Commercial Advertising',
            //     line2: "Product：Cinstar P10",
            //     line3: 'Screen size: 11sqmx5',
            //     imgSrc: 'https://www.cinstar-led.com/images/fixed/16-fixed-case.jpg'
            // },
            // {
            //     line1: 'Location：Finland Shopping Center Goodman',
            //     line2: "Product：Cinstar DB10",
            //     line3: 'Screen size: 35sqm',
            //     imgSrc: 'https://www.cinstar-led.com/images/fixed/17-fixed-case.jpg'
            // },
            {
                line1: 'Location：Russia Mosco Airport',
                line2: "Product：Cinstar DB10",
                line3: 'Screen size: 112sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fixed/18-fixed-case.jpg'
            },
            {
                line1: 'Location：China Chengdu Shopping Center',
                line2: "Product：Cinstar FT10",
                line3: 'Screen size: 430sqm',
                imgSrc: 'https://www.cinstar-led.com/images/fixed/19-fixed-case.jpg'
            },
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