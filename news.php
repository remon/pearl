
<!doctype html>
<html>

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title> Pearl NTEC</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.0/css/font-awesome.min.css" />
    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,700,600italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,300italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bad+Script|Satisfy' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/boot.css" />
    <link rel="stylesheet" href="css/links.css" />

    <link rel="stylesheet" href="css/main.css" />
    
    
    <script src="js/jquery.js" ></script>
    <script src="/js/easing.js"></script>
    <script src="/js/ismobile.js"></script>
        <script>
        // Minified version of isMobile included in the HTML since it's <1kb
        


        // My own arbitrary use of isMobile, as an example
        (function () {
            var MOBILE_SITE = '/mobile/about.php', // site to redirect to
                NO_REDIRECT = 'noredirect'; // cookie to prevent redirect

            // I only want to redirect iPhones, Android phones and a handful of 7" devices
            if ((isMobile.apple.phone || isMobile.android.phone || isMobile.seven_inch)) {
//alert("mobile");
                // Only redirect if the user didn't previously choose
                // to explicitly view the full site. This is validated
                // by checking if a "noredirect" cookie exists
                //if ( document.cookie.indexOf(NO_REDIRECT) === -1 ) {
                    document.location = MOBILE_SITE;
                //}
            }
        })();
    </script>

    <script src="js/site_m.js" ></script>
    </head>
    
    <body class="my_gray">
 
    <div class="container ">
        
        <div class="header relative _mgt15">
       <span class="lefty inline_b " style="margin-top: 20px;">
       	<span class="pearl_header  big_head">PEARL</span>
       	<span class="ntec big_head header_small">NTEC</span>
       </span>
       
            <img src="/images/small_pearl.png" class="righty s_p" />
     
        </div> <!-- end of header-->
                      <?php

include 'bar.php';



?>
        
        <div class="span2 mg wmiya whiteback _mgt8 lity _5br" >
        
            <p style="text-align:center; font-size:2em;margin:40px 0px ;">
       Under Construction
            </p>
        
             </div>

        
                             <?php

include 'footer.php';



?>
        </div><!--end of container -->
    
    
    </body>
</html>
</html>