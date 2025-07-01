<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../inc/meta.php'); ?>
    <?php include('../inc/rem.php'); ?>
    <link rel="stylesheet" href="../css/contact-241024.css">
    <title>Get in Touch with Us | Cinstar LED</title>
    <meta name="description" content="Contact Cinstar LED for support, product details, or business inquiries. We’re dedicated to providing excellent customer service.">
    <meta name="keywords" content="Cinstar LED display, Cinstar electronics, LED screen company, LED display manufacturer, LED screen supplier, LED display supplier">
</head>
<body class="page-index .menu-open">
    <?php include('../inc/top.php'); ?>
    <div class="container">
        <div class="contact-box">
            <div class="head-title">
                <h1>Get in Touch for Your Needs</h1>
            </div>
            <div class="contact-head">
                <div class="contact-item">
                    <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                    <p class="title">Address</p>
                    <p>Building A, Hengchangrong technology park,  </p>
                    <p>Shiyan street, Boan district, Shenzhen, China</p>
                </div>
                <div class="contact-item">
                    <div class="icon-box"><i class="fa fa-phone"></i></div>
                    <p class="title">Phone call</p>
                    <p>+86 18320889297（<a href="https://api.whatsapp.com/send?l=en&phone=8618320889297" target="_blank" style="color:#0bbb27;font-weight:bold">WhatsApp</a>）</p>
                </div>
                <div class="contact-item">
                    <div class="icon-box"><i class="fa fa-envelope-o"></i></div>
                    <p class="title">E-mail</p>
                    <p>Sales Inquiry: <a href="mailto:sales@cinstar-led.com" style="cursor: pointer;color:#0909f2">sales@cinstar-led.com</a></p>
                </div>
            </div>
        </div>
        <div class="contact-detail">
            <div class="head-title">
                <h2>Leave A Message</h2>
            </div>
            <form id="myforms" name="myforms" method="post" action="/backend/form/submit" onSubmit="return Checks()">
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
        <?php include('../inc/foot.php'); ?>
    </div>
    <?php include('../inc/js.php'); ?>
    <script>GetCurStyle("contact");</script>
</body> 
</html>