<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FEP9HXTB68"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-FEP9HXTB68');
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KSG83D7B3P"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-KSG83D7B3P');
</script>
<!-- Google Tag Manager -->
<script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KJM6DGZG');
</script>
<!-- End Google Tag Manager -->
<!-- Event snippet for Website traffic conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-767120070/vvGACPTs9O0BEMal5e0C'});
</script>
<meta charset="UTF-8">
<meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="../css/common-240917.css">

<?php
 
 if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      

    $hrefArray = [
                    'https://www.cinstar-led.com'=>'https://es.cinstar-led.com',
                    'https://www.cinstar-led.com/about'=>'https://es.cinstar-led.com/sobre-nosotros',
                    'https://www.cinstar-led.com/products'=>'https://es.cinstar-led.com/productos',
                    'https://www.cinstar-led.com/products/rental-led-display-screen.php'=>'https://es.cinstar-led.com/productos/pantalla-led-de-alquiler.php',
                    'https://www.cinstar-led.com/products/commercial-led-display.php'=>'https://es.cinstar-led.com/productos/pantalla-led-comercial.php',
                    'https://www.cinstar-led.com/products/fine-pitch-led-display.php'=>'https://es.cinstar-led.com/productos/pantalla-led-de-paso-fino.php',
                    'https://www.cinstar-led.com/products/creative-led-display.php'=>'https://es.cinstar-led.com/productos/pantalla-led-creativa.php',
                    'https://www.cinstar-led.com/gallery'=>'https://es.cinstar-led.com/galeria',
                    'https://www.cinstar-led.com/contact'=>'https://es.cinstar-led.com/contactenos',
                    
                    
    ];
    $hrefLink = '';
    if(isset($hrefArray[$url]))
    {
        $hrefLink = $hrefArray[$url];
    }
    else
    {
        $url2 = rtrim($url,'/');
        if(isset($hrefArray[$url2]))
        {
            $hrefLink = $hrefArray[$url2] .'/';
        }        
    }
    
?>
 
<link rel="canonical" href="<?php echo $url; ?>"> 

<?php
if($hrefLink != '')
{
    ?>
    <link rel="alternate" href="<?php echo $url; ?>" hreflang="en">
    <link rel="alternate" href="<?php echo $hrefLink; ?>" hreflang="es">
    <?php
}
?>

<link rel="preload" href="../css/font-awesome/css/font-awesome.min.css" as="style" onload="this.rel='stylesheet'">
<link rel="icon" href="https://www.cinstar-led.com/images/favicon.ico">