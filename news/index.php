<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../inc/meta.php'); ?>
    <?php include('../inc/rem.php'); ?>
    <link rel="canonical" href="https://www.cinstar-led.com/news/">
    <link rel="stylesheet" href="../css/news-241217.css">
    <title>LED Industry News and Updates | Cinstar LED</title>
    <meta name="description" content="Get the latest news from Cinstar LED, including product releases, company events, and industry news. Keep up with our latest achievements and innovations.">
    <meta name="keywords" content="Cinstar LED display, Cinstar electronics, transparent LED display, creative LED screen, poster LED wall, Indoor LED display, outdoor LED display, commercial LED display, LED digital signage">
</head>
<body class="page-index .menu-open">
    <?php include('../inc/top.php'); ?>
    <div class="news-container">
        <div class="news-list">
            <div class="head-title">
                <h1>LED Industry News and Updates</h1>
            </div>
            <div class="content-box" id="news-box">
            </div>
            <div class="pagination-controls">
                <button class="prev-page">Previous</button>
                <div id="pagination"></div>
                <button class="next-page">Next</button>
            </div>
        </div>
        <?php include('../inc/foot.php'); ?>
    </div>
    <?php include('../inc/js.php'); ?>
    <script>
        let dataList = [
            {
                imgSrc:'https://www.cinstar-led.com/images/news/cinstar-stadium-led-display-for-swedish-hockey-arenas-4.webp',
                title:'Cinstar High-Performance M3.9 Stadium LED Displays for Luleå and Boden Hockey Arenas',
                data:'2025-10-23',
                detail:'Cinstar LED recently completed another remarkable project in Northern Europe, supplying advanced stadium LED displays for two iconic hockey arenas—Luleå Hockey Arena and Boden Hockey Arena in Sweden',
                href: 'https://www.cinstar-led.com/news-detail/cinstar-stadium-led-displays-for-sweden-hockey-arenas.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/3d-led-screen-iraq-1.jpg',
                title:'50SQM Cinstar Outdoor 3D LED Screen Delivered to Iraq',
                data:'2025-06-28',
                detail:'Cinstar LED is proud to announce the successful delivery of a 52-square-meter outdoor 3D LED screen to Iraq, marking a groundbreaking step in the region’s digital display industry. The display, model X3.9 (P3.9), measures 12.56 meters wide by 4 meters high and features a smooth curve at the center—a critical design element enabling an immersive 3D visual effect',
                href: 'https://www.cinstar-led.com/news-detail/cinstar-outdoor-3d-led-screen-delivered-to-Iraq.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/cob-direct-view-led-video-wall.jpg',
                title:'Why COB is Better Than SMD in Direct View LED Video Wall',
                data:'2025-04-14',
                detail:'The display industry is rapidly evolving, especially in the realm of Direct View LED (DVLED) technology. From large-scale public displays to indoor commercial screens and even high-end Direct View LED TV, the need for ultra-fine pixel pitches, improved durability, and better image quality is growing fast. One of the most important innovations fueling this shift is COB',
                href: 'https://www.cinstar-led.com/news-detail/why-cob-is-better-than-smd-in-direct-view-led.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/direct-view-led-video-conference-1.webp',
                title:'Four Direct View LED Video Walls Delivered to USA for Immersive Video Conference Experience',
                data:'2025-01-24',
                detail:'In a major step toward revolutionizing corporate communication, four state-of-the-art direct view LED video walls were recently delivered to the USA to create immersive video conference experiences. The client, a leading innovator in life-sized LED wall technology, aims to transform traditional video conferencing into a truly immersive and lifelike interaction for international companies.',
                href: 'https://www.cinstar-led.com/news-detail/direct-view-led-video-wall-usa-video-conference-experience.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/dvled-1.jpg',
                title:'HD1.2 UHD DV LED video wall display panels delivered to Boston college USA',
                data:'2024-10-24',
                detail:'Thanks to the excellent work of our partner’s extraordinary business development team, another Cinstar HD1.2 direct view (DVLED) LED video wall display panels are ready to be delivered to Boston college to provide a more engaging visual experiences for the college students and staff. What more important is that this DVLED is connected with a lot of portals that our partner built to create an',
                href: 'https://www.cinstar-led.com/news-detail/dvled-video-wall-display-panel.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/led-media-cube.jpg',
                title:'Cinstar P4 media cube LED video wall shines at Lulea Hockey & COOP Norrbotten Arena',
                data:'2024-09-20',
                detail:'Big thanks to our partner’s great efforts and professionalism, the Cinstar P4 massive media cube LED video wall panels were installed and operated as scheduled to deliver high profile match performance for the opening day games of Lulea Hockey and COOP Norrbotten arena. The stunning performance of this current most advanced media cubes caught big attention in the SHL(Swedish Hockey League) field. ',
                href: 'https://www.cinstar-led.com/news-detail/media-cube-led-display-video-wall-at-lulea-hockey-sweden.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/direct-view-led-news.jpg',
                title:'CH1.2 COB direct view LED video wall panels delivered to USA high school',
                data:'2024-09-11',
                detail:'Benefit from encapsulation advancement and big drop in cost, COB technology is getting matured and challenging conventional SMD technology a lot at the direct view LED video wall applications like television broadcast studio, conference room, meeting room, board room, command center and home cinema etc. COB can easily achieve the pixel pitch lower than 0.9mm, such as 0.62mmm, 0.78mm are available now. ',
                href: 'https://www.cinstar-led.com/news-detail/cob-direct-view-led-video-wall-usa.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/media-cube-led-video-wall-panel-2.jpg',
                title:'108SQM media cube LED video wall panels for ice hockey arena',
                data:'2024-07-08',
                detail:'Cinstar is thrilled to be the supplier of two striking media cube LED video wall panels, and we owe a great deal of gratitude to our strategic Swedish partner for their trust as well as their hard work and professionalism. It is anticipated that the new media cubes will provide an even more spectacular visual experience and update the old-fashioned LED bucket screens that have been in operation for more than 10 years',
                href: 'https://www.cinstar-led.com/news-detail/108sqm-media-cube-led-video-wall-panels-aging.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/TF-series-display.webp',
                title:'Cinstar unveils TF series holographic LED Film Screen for Creative Applications',
                data:'2024-05-20',
                detail:'20th May, 2024, Shenzhen, China: Cinstar Electronics proudly announces the launch of its latest product, the TF series holographic LED Film Screen for Creative Applications. Used in wide application scenarios it can be installed in various places. The flexible holographic LED film screen display can be widely installed in retail shops, restaurants, chain stores, shopping centers, corporate exhibition centers, etc., to deliver eye-catching images and advertisements and achieve its commercial value.',
                href: 'https://www.cinstar-led.com/news-detail/cinstar-unveils-tf-series-holographic-led-film-screen-creative-applications.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/CTV-Series.webp',
                title:'Cinstar unveils CTV series All in One Direct View LED TV Video Wall',
                data:'2024-02-20',
                detail:'11th October, 2024, Shenzhen, China: Cinstar Electronics proudly announces the launch of its latest product, the CTV Series All-in-One Direct View LED TV Video Wall. This cutting-edge display solution elevates visual experiences by combining sleek aesthetics with top-tier performance designed for businesses and event spaces.',
                href: 'https://www.cinstar-led.com/news-detail/direct-view-led-tv-video-wall-ctv-series.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/2024-01-26-1.jpg',
                title:'3 sets Cinstar U1.25 UHD fine pitch LED video wall delivered',
                data:'2024-01-26',
                detail:'After the first pilot fine pitch LED video wall has been verified so qualified to deliver top class image performance, here comes 3 sets of Cinstar fine pitch LED video wall U1.2 for low scale production. Each set of the LED video wall is consists of 5x6 panels of 600x337.5mm to achieve ultra-high resolution of 2400x1600 and have been delivered to Atlanta, Chicago and London respectively. ',
                href: 'https://www.cinstar-led.com/news-detail/uhd-fine-pitch-led-video-wall-chicago-atlanta-london.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/CR-series.webp',
                title:'Cinstar unveils CR series flexible rental LED display screen',
                data:'2023-12-20',
                detail:'11th October, 2024, Shenzhen, China: Cinstar Electronics is excited to announce the launch of its new CR Series Flexible Rental LED Display Screen, designed to transform the visual impact of events with its unmatched versatility and cutting-edge technology. The CR Series is poised to meet the ever-growing demand for visually dynamic event solutions, offering unparalleled flexibility for',
                href: 'https://www.cinstar-led.com/news-detail/cr-series-flexible-rental-led-display.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/2023-11-13-1.webp',
                title:'Cinstar creative LED display solutions boost your business ',
                data:'2023-11-13',
                detail:'When the market is in floods of same products and everyone is busy competing on the price, it is more difficult than ever to win trust, but easier to lose project',
                href: 'https://www.cinstar-led.com/news-detail/custom-creative-led-display-screen-solutions.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/2023-08-02-1.jpg',
                title:'Pilot Cinstar U1.25 configuration 5x6 LED video wall for SSS',
                data:'2023-08-02',
                detail:'Great thanks to SSS who trusted and chose Cinstar LED as supplier of its pilot project of dozen portals located around the world. Cinstar team won’t fail the trust and will perform best to deliver our promises to the expectations from customer.',
                href: 'https://www.cinstar-led.com/news-detail/pilot-fine-pitch-led-display-video-wall-usa.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/2023-05-09-1.jpg',
                title:'Innovative transparent LED film screen wall debuts',
                data:'2023-05-09',
                detail:'After months of diligent and trouble shootings, Cinstar team debuted its very innovative transparent LED film screen to bring more possibilities to the industry and create more opportunities and installation scenarios to our clients.',
                href: 'https://www.cinstar-led.com/news-detail/transparent-led-film-screen-debuts.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/X-series-display.webp',
                title:'Cinstar unveils X series Ultra-Bright Versatile Outdoor LED Advertising Billboard',
                data:'2023-03-12',
                detail:'12th March, 2024, Shenzhen, China: Cinstar Electronics is excited to announce the launch of its new X series Ultra-Bright Versatile Outdoor LED Advertising Billboard. Its top stability, superb visibility and extraordinary image performance make it the new icon for outdoor billboard advertising at pedestrian malls, shopping centers, theme parks, shopping malls and other high-traffic areas.',
                href: 'https://www.cinstar-led.com/news-detail/cinstar-unveils-x-series-ultra-bright-versatile-outdoor-led-advertising-billboard.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/2023-1-30-1.jpg',
                title:'UHD direct view LED video wall upgrades visual effects for home cinema',
                data:'2023-01-30',
                detail:'With the tremendous demand and rigorous requirement on high profile digital LED video wall, the fine pitch LED screen display is occupying a critical market position to challenge and beat the dominance of very traditional visual solutions like LCD screen and projectors. What makes the fine pixel pitch LED screen display a rising star is attributed to its unparalleled features as below',
                href: 'https://www.cinstar-led.com/news-detail/uhd-direct-view-led-video-wall-upgrades-visual-effects.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/2022-10-20-1.jpg',
                title:'The largest outdoor LED advertising screen in Finland ',
                data:'2022-10-20',
                detail:'With the substantial collaboration of Cinstar team and its combined Finnish partner, one giant outdoor LED advertising screen was eventually installed and has become the largest outdoor LED advertising screen in Finland since its installation.',
                href: 'https://www.cinstar-led.com/news-detail/largest-outdoor-led-advertising-screen-in-finland.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/2021-11-17-3.jpg',
                title:'Cinstar LED advertising screen decorates Finland shopping mall ',
                data:'2021-11-17',
                detail:'The best is always looking for the best! It has been years since delivered the massive 5x12m indoor P5.9 LED screen for Koskikeskus shopping mall in Finland, we received a lot of complements from our customer for the stunning performance and stability of that screen. Here is the picture of that marvelous screen which required no any maintenance for 4 years after its installation.',
                href: 'https://www.cinstar-led.com/news-detail/cinstar-led-advertising-screen-decorates-finland-shopping-mall.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/2021-7-12-1.jpg',
                title:'Cinstar UHD 4K direct view LED for USA home cinema',
                data:'2021-7-12',
                detail:'In the past June, one another Cinstar UHD 4K LED video wall was delivered and installed at our customer’s home to serve as main screen of home cinema. All parties were satisfied to the vivid colors and detailed image production of the LED screen wall!',
                href: 'https://www.cinstar-led.com/news-detail/uhd-4k-direct-view-led-home-cinema-usa.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/2021-5-25-3.jpg',
                title:'Direct view LED TV to replace your projectors & LCD video wall',
                data:'2021-5-25',
                detail:'Thanks to the breakthrough of encapsulation technology, lower and lower pixel pitches like 1.25mm, 0.9mm and 0.7mm can now be applied to deliver ultra-high resolution to meet the rapidly growing market demand on Micro pitch LED video wall solutions. It is a new era for LED screen industry, but a big challenge to the very traditional display technology, for example the projector and LCD video wall. ',
                href: 'https://www.cinstar-led.com/news-detail/direct-view-led-tv-to-replace-projectors-and-lcd-video-wall.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/2021-2-22.jpg',
                title:'The features an outdoor LED screen should have',
                data:'2021-2-22',
                detail:'The LED display can now be easily seen at both indoor conditions and outdoor places. At present, the word "DOOH" is a very popular term in current digital media industry. DOOH is short for Digital Out Of Home. There will be higher requirements for outdoor conditions, so clients need to choose the most professional LED screen to improve stability. So, what features should an outdoor LED screen have?',
                href: 'https://www.cinstar-led.com/news-detail/features-outdoor-led-screen-should-have.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/Cinstar-HD1.25-9x7panels-1.jpg',
                title:'Cinstar 4K direct view LED video wall ready for shipment to USA',
                data:'2020-4-20',
                detail:'Big thanks to the customers who supported us at this unprecedented period, hope the quarantine time will come to its end soon and everything back to the right track...',
                href: 'https://www.cinstar-led.com/news-detail/cinstar-p1.2-direct-view-led-video-wall-usa.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/Cinstar-HD1.25-20x9panels-2.jpg',
                title:'Cinstar concave direct view LED TV shipping to Germany',
                data:'2020-1-22',
                detail:'As one of the best-selling products among all Cinstar product lines, Cinstar fine pitch LED display solution HD series contributed a major part of our sales volume in 2019.And it seems that this product will have a more prosperous performance in the new year 2020....',
                href: 'https://www.cinstar-led.com/news-detail/cinstar-concave-direct-view-led-tv-shipping-to-germany.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/2years-operation.jpg',
                title:'The best shopping mall LED advertising display in Finland',
                data:'2019-12-16',
                detail:'As an industrial product, there is no possibility for any manufacturer to produce any perfect LED display. But a LED display with high profile quality can get rid of most annoying aftersales troubles and in return to strengthen your business relationship with your clients and enhance your reputation on the market....',
                href: 'https://www.cinstar-led.com/news-detail/best-shopping-mall-led-advertising-display-in-finland.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/Cinstar-HD2.3-2.jpg',
                title:'Cinstar direct view LED video wall installed at USA church',
                data:'2019-10-11',
                detail:'During Chinese National Day festival, our customer delivered 80 panels of Cinstar HD series 2.3mm to Christ    Lutheran Church in California, USA. Before that, the church was using projector for the visual delivering, but they were tired of the inaccuracy brightness of projector and finally decided to replace it with...',
                href: 'https://www.cinstar-led.com/news-detail/direct-view-led-video-wall-church-usa.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/HD1.56-40.5sqm-3.jpg',
                title:'Cinstar HD1.56 direct view LED video wall to France',
                data:'2019-6-26',
                detail:'In recent years, with the tremendous market demand on LED display, as a critical category of LED display, fine pitch LED video display got a big increase on the market share and has been widely used for high profile and high end applications for its ultra-high resolution and stunning image performance...',
                href: 'https://www.cinstar-led.com/news-detail/cinstar-direct-view-led-video-wall-france.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/news1.jpg',
                title:'Cinstar rental LED display lights up Oslo Spektrum Arena Norway',
                data:'2019-3-15',
                detail:'In the past week, Cinstar CR3.9 witnessed a remarkable show at Norway Oslo Spektrum Arena where is primarily known for hosting major events such as annual Nobel Peace Prize Concert, Eurovision Song Contest and concerts by artists of national and international fame. The stage design was...',
                href: 'https://www.cinstar-led.com/news-detail/cinstar-rental-led-display-oslo-norway.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/news2.jpg',
                title:'Cinstar direct view LED for conference room India',
                data:'2019-2-18',
                detail:'As a new trend to digital world, LED display is now playing a more and more important role in conference & meeting industry comparing to traditional projectors for its high brightness, vivid and natural color and seamless connection.Months before, one of our Indian customer was considering to purchasing one LED display or advanced projection for their fast...',
                href: 'https://www.cinstar-led.com/news-detail/direct-view-led-conference-room-india.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/news4.jpg',
                title:'Cinstar direct view LED display wall delivered to Netherlands',
                data:'2018-11-13',
                detail:`Recently in our factory, one stunning LED display will always attract your attention. It is one high profile narrow pitch pitch 1.92mm video wall which is aging and ready to ship to Netherlands.The screen dimension is 4800x2700mm with Cinstar NL 1.92. It will be soon delivered to Netherlands and installed to one luxury yacht. The system is with high quality...`,
                href: 'https://www.cinstar-led.com/news-detail/direct-view-led-display-wall-netherlands.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/news5.jpg',
                title:'Cinstar LED advertising screen aging for shopping mall Finland',
                data:'2018-10-18',
                detail:`LED display is an integrated industrial product rather than accumulation of piles of materials. Even with same materials, the image quality of different manufacturer varies a lot. That is the difference of technology and process design. That is why we can see very different image quality when touring on an exhibition. Cinstar LED display is desig...`,
                href: 'https://www.cinstar-led.com/news-detail/cinstar-led-advertising-screen-shopping-mall-finland.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/news7.jpg',
                title:'Cinstar LED advertising screen for shopping center New Zealand',
                data:'2018-8-22',
                detail:`Large scale LED display is always the preferred channel for outdoor commercial media not only for its high brightness, vivid color and wide viewing angle, but also its unlimited dimension and brilliant visual impact.With the installation permit is more and more difficult to get for high way or road side installation, the sho...`,
                href: 'https://www.cinstar-led.com/news-detail/outdoor-led-advertising-screen-new-zealand.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/news8.jpg',
                title:'Cinstar direct view LED video wall for meeting room Switzerland ',
                data:'2018-7-19',
                detail:`Benefited from technology breakthrough of LED encapsulation, fine pitch LED display is now a new trend for LED applications for its higher capacity module and far better resolution. With the technology becoming matured, the market dominated by LCD video wall facing big challenges from LED display. The main competition concentrated on control room, monitor room, TV studio an...`,
                href: 'https://www.cinstar-led.com/news-detail/cinstar-direct-view-led-video-wall-meeting-room-switzerland.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/news30.jpg',
                title:'Cinstar LED advertising screen upgrades shopping mall in UK ',
                data:'2018-4-12',
                detail:`Shopping is now a critical part of daily activity for the people living in urban cities. And shopping mall is where most people would go, which makes it a perfect location to put up LED displays for commercial advertising. No matter the building façade, elevator box façade or inside shops and stores, all are great places for advertising and can bring huge commercial value...`,
                href: 'https://www.cinstar-led.com/news-detail/led-advertising-screen-for-shopping-mall-uk.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/news13.jpg',
                title:'Cinstar LED advertising screen shines at shopping mall Finland',
                data:'2017-11-22',
                detail:`Recently, one another giant Cinstar LED display has been installed in Tempere KoskiKeskus shopping mall for commercial advertising. The customer was very pleased to the image quality and the whole slim structure. The screen was well installed and starting working now. The perfect flatness, stunning image quality with the giant size of 5x12m always got...`,
                href: 'https://www.cinstar-led.com/news-detail/indoor-led-advertising-screen-shopping-mall-finland.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/news14.jpg',
                title:'Cinstar LED screens for events UUP conference UK',
                data:'2017-10-26',
                detail:`Last week, Cinstar LED screen witnessed one productive UUP conference 2017. The leader Robin Swann attended and host this conference. The whole conference was broadcasted by BBC2 and got a lot of attention from UK political parties. UUP is short for Ulster Unionist Party which is currently the fourth-largest political party in Northern Ireland. Which has great influ...`,
                href: 'https://www.cinstar-led.com/news-detail/led-screens-for-events-uk.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/2.jpg',
                title:'Cinstar LED advertising screen for shopping mall in Finland',
                data:'2017-9-20',
                detail:`Shopping mall is one of the most important market segment Cinstar has always been concentrating to. At present, more and more shopping malls prefer to install digital LED display to do commercial advertising rather than traditional LCD videowall. The market demand is growing fast and will accelerate in the coming years.Several weeks ago, Cinstar got one deal which is to replace...`,
                href: 'https://www.cinstar-led.com/news-detail/led-advertising-screen-for-shopping-mall-finland.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/news16.jpg',
                title:'Cinstar rental video screens for concert ideas Norway',
                data:'2017-8-9',
                detail:`Last week, Cinstar LM5.95 indoor rental screen presented a wonderful music show to the thousands of spectators in Norway Telenor Arena. The total screen for that concert show was 100sqm.For the visual equipment, the whole stage including DJ booth, two main screens at sides of stage and lots of creative strip effects were with Cinstar LM series LED displays The...`,
                href: 'https://www.cinstar-led.com/news-detail/rental-video-screens-for-concert-ideas-norway.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/news17.jpg',
                title:'Cinstar LED video wall panels ready for shipping to Sweden',
                data:'2017-7-18',
                detail:`A few weeks ago, Cinstar won a bid case for Swedish factory project. It was 30 pcs LED displays for large machines. Each machine will be installed with one 9sqm LED display as information window. Considering the high humidity inside the machine, Cinstar recommended LM4.8 outdoor but adjusted the brightness to indoor use level by strict white balance testing to make sure no greyscale...`,
                href: 'https://www.cinstar-led.com/news-detail/led-video-wall-panels-ready-for-shipping-to-sweden.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/news18.jpg',
                title:'Cinstar LED advertising screen for shopping mall Russia',
                data:'2017-4-13',
                detail:`Last week, 5 pcs of Cinstar FT8 front maintenance screens have been installed at entrance area of one shopping mall in Moscow. This shopping mall has five entrances at different direction, each entrance is with one LED screen of 20sqm.Before installing LED display, this shopping mall was using printing advertisement. But when more and more demands on advertising...`,
                href: 'https://www.cinstar-led.com/news-detail/led-advertising-screen-shopping-mall-russia.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/news20.jpg',
                title:'Cinstar church LED screen UK',
                data:'2016-10-13',
                detail:`Thanks to the general recognition from more industries, LED display is now playing a more and more important role in people’s daily life. Take the church for example, except its initial function of spreading God’s message, it is also holding some interesting activities like fashion weeks, story sharing gatherings etc. More and more people can participate into the activity and have better...`,
                href: 'https://www.cinstar-led.com/news-detail/cinstar-church-led-screen-uk.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/news21.jpg',
                title:'Cinstar outdoor LED screen advertising at COOP Arena Sweden',
                data:'2016-8-23',
                detail:`LED display is now the trend of OOH advertising for its seamless splicing, excellent image quality and manageable content comparing to traditional printing advertising. Except the normal wall mounted installation billboard, another kind of LED display is widely used for both OOH advertising and building façade decoration, which is called curtain or mesh screens. See through design is perfect for...`,
                href: 'https://www.cinstar-led.com/news-detail/outdoor-led-screen-advertising-sweden.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/news22.jpg',
                title:'Cinstar LED advertising screen installed at Malaysia hotel tower',
                data:'2016-6-7',
                detail:`Nowadays, LED display has become a part of our daily life. Wherever we go to train station, airport or shopping center, we can always see LED display. It is now the main stream for commercial advertising for its great advantages: Seamless display splicing, unlimited size and perfect image performance. Even we go to some hotels, we can see the LED display. With the arrival of digital ages, any place...`,
                href: 'https://www.cinstar-led.com/news-detail/led-advertising-screen-malaysia-hotel.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/news24.jpg',
                title:'Cinstar rental LED display supports Russia Auto Show',
                data:'2016-1-13',
                detail:`At present, LED display has been widely adopted to deliver high quality image for all kinds of fields and industries. No matter it is news press or corporate conference, we can always see the LED display. But in recent years, LED display has expanded its market to some new fields like wedding ceremony and car showing etc.On the auto show, except the sexy models...`,
                href: 'https://www.cinstar-led.com/news-detail/rental-led-display-auto-show-russia.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/news26.jpg',
                title:'Cinstar rental LED display shines at Dubai Auto Show ',
                data:'2015-4-20',
                detail:`Except for commercial advertising, LED display now has much wider range of applications. One of the star application must be the auto show. As we know, auto enterprise cares much on brand reputation, when they are attending auto show, they are looking any possible way to present the best aspect of their vehicles and company impression. LED display as the current...`,
                href: 'https://www.cinstar-led.com/news-detail/rental-led-display-dubai-auto-show.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/news27.jpg',
                title:'Cinstar rental LED screen shining on Zinzino Annual Event  ',
                data:'2014-11-10',
                detail:`Several weeks ago, Cinstar has delivered one big LED display for Zinzino international annual event held in Telenor Arena in Stockholm. This arena is the biggest one in Sweden and is now a very hot place for all kinds of concerts and events. For this show, all the LED displays were Cinstar LM3.9, more than 180sqm in total including the three main screens and...`,
                href: 'https://www.cinstar-led.com/news-detail/rental-led-screen-stockholm-sweden.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/news28.jpg',
                title:'Cinstar LED advertising screen installed in Denmark',
                data:'2014-7-15',
                detail:`Wherever you are in urban city or country side, LED display is now easy to seen in our livelihood. Except wall mounted on building, stand column beside road, there are more and more locations becoming popular to install commercial LED display. Take parking lot for example, when cars became one indispensable part of our life, parking lots will with high population...`,
                href: 'https://www.cinstar-led.com/news-detail/led-advertising-screen-denmark.php'
            },
            {
                imgSrc:'https://www.cinstar-led.com/images/news/news29.jpg',
                title:'Cinstar rental LED screen for church at convention center Norway',
                data:'2013-8-21',
                detail:`Scandinavia is one of main markets for Cinstar business development. Until now, Cinstar has installed quite a lot of screens there including stage rental screens and indoor outdoor commercial screens. Last week, 60sqm Cinstar CR5 rental screen has been installed in Oslo convention center for worship and other event activities. Olso convention...`,
                href: 'https://www.cinstar-led.com/news-detail/rental-led-screen-for-church-norway.php',
            },
        ]
        // 每页显示的数据条数
        const pageSize = 10;
        // 计算总页数
        const totalPages = Math.ceil(dataList.length / pageSize);
        let currentPage = 1;
        function showDataByPage(page) {
            const startIndex = (page - 1) * pageSize;
            const endIndex = startIndex + pageSize;
            const dataToShow = dataList.slice(startIndex, endIndex);
            $('#news-box').empty();
            $.each(dataToShow, function (index, item) {
                    let htms = `<div class="news-item">
                    <a class="news-img" href=${item.href}>
                        <div class="img-wrap">
                            <img class="lazy-load" src=${item.imgSrc} alt=${item.title}>
                        </div>
                    </a>
                    <div class="desc">
                        <div class="news-title">
                            <h2><a href=${item.href}>${item.title}</a></h2>
                            <span class="date">${item.data}</span>
                        </div>
                        <p class="detail">
                            <a href=${item.href}>${item.detail}</a>
                        </p>
                        <p class="more"><a href=${item.href}>READ MORE>></a></p>
                    </div>
                </div>`
                $('#news-box').append(htms);
            });
            $('#pagination button').removeClass('active');
            $('#pagination button').eq(page - 1).addClass('active');
            currentPage = page;
            updatePaginationControls();
        }
        function createPagination() {
            $('#pagination').empty();
            for (let i = 1; i <= totalPages; i++) {
                const button = $('<button>').text(i);
                button.click(function () {
                    showDataByPage(i);
                });
                $('#pagination').append(button);
            }
        }
        function updatePaginationControls() {
            // 上一页按钮逻辑
            $('.prev-page').prop('disabled', currentPage === 1);
            if ($('.prev-page').prop('disabled')) {
                $('.prev-page').addClass('disabled');
            } else {
                $('.prev-page').removeClass('disabled');
            }
            $('.prev-page').off('click').on('click', function () {
                if (currentPage > 1) {
                    showDataByPage(currentPage - 1);
                }
            });

            // 下一页按钮逻辑
            $('.next-page').prop('disabled', currentPage === totalPages);
            if ($('.next-page').prop('disabled')) {
                $('.next-page').addClass('disabled');
            } else {
                $('.next-page').removeClass('disabled');
            }
            $('.next-page').off('click').on('click', function () {
                if (currentPage < totalPages) {
                    showDataByPage(currentPage + 1);
                }
            });
        }
        showDataByPage(1);
        createPagination();
        updatePaginationControls()
        $('#pagination button').eq(0).addClass('active');
    </script>
    <script>GetCurStyle("news");</script>
</body> 
</html>