<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../inc/meta.php'); ?>
    <?php include('../inc/rem.php'); ?>
    <link rel="stylesheet" href="../css/contact.css">
    <title>Contact Us – Cinstar-LED</title>
    <meta name="description" content="Feel free to contact our support team for varied custom queries, help, and feedback. We have a huge responsive support team waiting for you to serve." />
    <meta name="keywords" content="Cinstar LED display, Cinstar electronics, LED screen company, LED display manufacturer, LED screen supplier, LED display supplier" />
</head>
<style>
    .head-title h1 {
    font-size: 42px;
    color: #000;
}
</style>
<body class="page-index .menu-open">
    <!-- 头部开始 -->
    <?php include('../inc/top.php'); ?>
    <!-- 头部结束 -->
    <div class="container">
        <div class="contact-box">
           
            <div class="head-title">
                <h1>CONTACT US</h1>
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
                    <p>+86 755 33969838</p>
                </div>
                <div class="contact-item">
                    <div class="icon-box"><i class="fa fa-envelope-o"></i></div>
                    <p class="title">E-mail</p>
                    <p>Cinstar Electronics Co., Limited</p>
                    <a href="mailto:sales@cinstar-led.com" style="cursor: pointer;">sales@cinstar-led.com</a>
                </div>
            </div>
        </div>
        <div class="contact-detail">
            <div class="head-title">
                <h2>Leave A Message</h2>
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
<script language="javascript">
function Checks()
{
    if (document.myforms.name.value.length==""){
        alert ("Your name is null");
        document.myforms.name.focus();
        return false;
    }
 if (document.myforms.company.value.length==""){
        alert ("Company name is null");
        document.myforms.company.focus();
        return false;
    }
    if (document.myforms.email.value.length==""){
        alert ("Email is null");
        document.myforms.email.focus();
        return false;
    }
    if (document.myforms.tel.value.length==""){
        alert ("Telephone is null");
        document.myforms.tel.focus();
        return false;
    }
    if (document.myforms.contents.value.length==""){
        alert ("Message is null");
        document.myforms.contents.focus();
        return false;
    }   
}
</script>
        <?php include('../inc/foot.php'); ?>
            <!-- 底部结束 -->
    </div>
    <?php include('../inc/js.php'); ?>
    <script>GetCurStyle("contact");</script>
</body> 
</html>