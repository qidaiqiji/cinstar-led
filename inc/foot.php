<head>
    <link rel="stylesheet" href="../css/footer-240818.css">
</head>
<div class="sepreate"></div>
<div class="footer">
    <div class="footer-container">
        <div class="footer-item footer-products">
            <div class="footer-title">
                <span>Products</span>
            </div>
            <div class="footer-detail">
                <p><a href="../products/direct-view-led.php">Direct View LED</a></p>
                <p><a href="../products/rental-led.php">Rental LED Display</a></p>
                <p><a href="../products/stage-led-screen.php">LED Stage Screen</a></p>
                <p><a href="../products/indoor-led-display.php">Indoor LED Display</a></p>
                <p><a href="../products/creative-led.php">Creative LED Display</a></p>
                <p><a href="../products/custom-led.php">Custom LED Display</a></p>
                <p><a href="../products/digital-billboard.php">Digital LED Billboard</a></p>
            </div>
        </div>
        <div class="footer-item footer-gallery">
            <div class="footer-title">
                <span>Solutions</span>
            </div>
            <div class="footer-detail">
                <p><a href="../products/3d-led-display.php">3D LED Display Screen</a></p>
                <p><a href="../products/advertising-led.php">LED Advertising Display</a></p>
                <p><a href="../products/commercial-led.php">Commercial LED Display</a></p>
                <p><a href="../products/event-led-screen.php">LED Screens for Events</a></p>
                <p><a href="../products/church-led-screen.php">LED Screen for Church</a></p>
                <p><a href="../products/concert-led-screen.php">Concert LED Screen</a></p>
                <p><a href="../products/outdoor-led-display.php">Outdoor LED Display Screen</a></p>
            </div>
        </div>
        <div class="footer-item input-item">
            <div class="footer-title">
                Get A Quote
            </div>
            <div class="footer-detail">
                <form id="myform" name="myform" method="post" action="/quotes/Index/index" onSubmit="return Check()">
                    <p class="input-line">
                        <input type="text" name="name" maxlength="50" placeholder="Name">
                        <input type="text" name="company" maxlength="50" placeholder="Company">
                    </p>
                    <p class="input-line">
                        <input type="text" name="email" maxlength="50" placeholder="E-mail">
                        <input type="text" name="tel" maxlength="50" placeholder="Telephone">
                    </p>
                    <textarea name="contents" maxlength="1000" placeholder="Message"></textarea>
                    <button type="submit" class="submit foot-submit">Submit</button>
                </form>
            </div>
        </div>
<script language="javascript">
function Check()
{
    if (document.myform.name.value.length==""){
        alert ("Your name is null!");
        document.myform.name.focus();
        return false;
    }
 if (document.myform.company.value.length==""){
        alert ("Company name is null!");
        document.myform.company.focus();
        return false;
    }
    if (document.myform.email.value.length==""){
        alert ("Email is null!");
        document.myform.email.focus();
        return false;
    }
    if (document.myform.tel.value.length==""){
        alert ("Telephone is null!");
        document.myform.tel.focus();
        return false;
    }
    if (document.myform.contents.value.length==""){
        alert ("Message is null!");
        document.myform.contents.focus();
        return false;
    }	
}
</script>
        <div class="footer-item footer-contact">
            <div class="footer-title">
                <span>Contact</span>
            </div>
            <div class="footer-detail">
                <span class="companyName">Cinstar Electronics  Co., Limited</span>
                <span class="adderss">Building A, Hengchangrong technology park, Shiyan street, Boan district, Shenzhen, China</span>
                <a href="mailto:sales@cinstar-led.com">sales@cinstar-led.com</a>
                <!-- <a class="phone">+86 183 2088 9297</a> -->
            </div>
            <div class="footer-social">
                <a href="https://www.facebook.com/Cinstar-Electronics-2334889366581201/?modal=admin_todo_tour" target="_blank"><i class="fa fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/cinstarled/" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="https://twitter.com/Cinstar_led" target="_blank"><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="copy">
    Copyright 2012-2023 &copy; Cinstar Electronics. All Rights Reserved
</div>