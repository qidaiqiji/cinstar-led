<link rel="stylesheet" href="../css/footer-240818.css">
<div class="sepreate"></div>
<div class="footer">
    <div class="footer-container">
        <div class="footer-item footer-products">
            <div class="footer-title">
                <span>Products</span>
            </div>
            <div class="footer-detail">
                <p><a href="https://www.cinstar-led.com/products/direct-view-led.php">Direct View LED</a></p>
                <p><a href="https://www.cinstar-led.com/products/rental-led-display-screen.php">Rental LED Display</a></p>
                <p><a href="https://www.cinstar-led.com/products/led-stage-screen.php">LED Stage Screen</a></p>
                <p><a href="https://www.cinstar-led.com/products/indoor-led-display.php">Indoor LED Display</a></p>
                <p><a href="https://www.cinstar-led.com/products/creative-led-display.php">Creative LED Display</a></p>
                <p><a href="https://www.cinstar-led.com/products/custom-led-display.php">Custom LED Display</a></p>
                <p><a href="https://www.cinstar-led.com/products/digital-led-billboard.php">Digital LED Billboard</a></p>
            </div>
        </div>
        <div class="footer-item footer-gallery">
            <div class="footer-title">
                <span>Solutions</span>
            </div>
            <div class="footer-detail">
                <p><a href="https://www.cinstar-led.com/products/3d-led-display-screen.php">3D LED Display Screen</a></p>
                <p><a href="https://www.cinstar-led.com/products/led-advertising.php">LED Advertising Display</a></p>
                <p><a href="https://www.cinstar-led.com/products/commercial-led-display.php">Commercial LED Display</a></p>
                <p><a href="https://www.cinstar-led.com/products/event-led-screen.php">LED Screens for Events</a></p>
                <p><a href="https://www.cinstar-led.com/products/church-led-screen.php">LED Screen for Church</a></p>
                <p><a href="https://www.cinstar-led.com/products/concert-led-screen.php">Concert LED Screen</a></p>
                <p><a href="https://www.cinstar-led.com/products/outdoor-led-display-screen.php ">Outdoor LED Display Screen</a></p>
            </div>
        </div>
        <div class="footer-item input-item">
            <div class="footer-title">
                Get A Quote
            </div>
            <div class="footer-detail">
                <form id="myform" name="myform" method="post" action="/backend/form/submit" onSubmit="return Check()">
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
<script>
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
                <p class="companyName">Cinstar Electronics  Co., Limited</p>
                <p class="adderss">Building A, Hengchangrong technology park, Shiyan street, Boan district, Shenzhen, China</p>
                <a href="mailto:sales@cinstar-led.com">sales@cinstar-led.com</a>
                <!-- <a class="phone">+86 183 2088 9297</a> -->
            </div>
            <div class="footer-social">
                <a href="https://www.facebook.com/Cinstar-Electronics-2334889366581201/?modal=admin_todo_tour" target="_blank" rel="nofollow"><i class="fa fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/cinstarled/" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a>
                <a href="https://twitter.com/Cinstar_led" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="copy">
    Copyright 2012-2023 &copy; Cinstar Electronics. All Rights Reserved
</div>