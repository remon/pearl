
<!doctype html>
<html>

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title> Pearl NTEC</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.0/css/font-awesome.min.css" />
    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,700,600italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,300italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bad+Script|Satisfy' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/boot.css" />
    <link rel="stylesheet" href="css/links.css" />
    <link rel="stylesheet" href="css/owl.css" />
    <link rel="stylesheet" href="css/owl.theme.css" />
    <link rel="stylesheet" href="css/main.css" />
    
    
    <script src="js/jquery.js" ></script>
    <script src="/js/ismobile.js"></script>
        <script>
        // Minified version of isMobile included in the HTML since it's <1kb
        


        // My own arbitrary use of isMobile, as an example
        (function () {
            var MOBILE_SITE = '/mobile/index.php', // site to redirect to
                NO_REDIRECT = 'noredirect'; // cookie to prevent redirect

            // I only want to redirect iPhones, Android phones and a handful of 7" devices
            if ((isMobile.apple.phone || isMobile.android.phone || isMobile.seven_inch)) {
//alert("mobile");
                // Only redirect if the user didn't previously choose
                // to explicitly view the full site. This is validated
                // by checking if a "noredirect" cookie exists
                if ( document.cookie.indexOf(NO_REDIRECT) === -1 ) {
                    document.location = MOBILE_SITE;
                }
            }
        })();
    </script>
    <script src="js/owl.js" ></script>
    <script src="js/site.js" ></script>
    </head>
    
    <body class="my_gray">
        <img src="images/back_f.png" class="my_b abs"  style="display:none;"/>
    <div class="container ">
        
        <div class="header relative">
        <img src="images/custom_logo2.png" class="custom_logo"/>
            
            <span class="abs tr_t whity boldy" style="display:none;">
                Negotiation Training ,Education and Consultancy  
            </span>
        </div> <!-- end of header-->
                      <?php

include 'bar.php';



?>
        <div class="span2 mg wmiya whiteback _mgt8 lit _5br">
            <div id="owl-demo" class="owl-carousel owl-theme">
 
  <div class="item span2 mg wmiya ">
      <div class="item_inside span2">
      <img src="images/shutter1m.jpg" alt="The Last of us">
                
                <div class="content_image  righty ">
                    <div class="site_color mg_t">
"Everything is negotiable. Wether or not the negotiation is easy is another thing” 
</div>
                 <em class="righty"> Carrie Fisher</em>
                    </div>
          </div>
                </div><!--end of item -->
   
  <div class="item span2 mg wmiya ">
      <div class="item_inside span2">
      <img src="images/shutter2m.jpg" alt="The Last of us">
                
              
                <div class="content_image  righty ">
                    <div class="site_color mg_t">
 “In life you don’t get what you deserve, you get what you negotiate”
</div>
                 <em class="righty"> Krisha Sagar</em>
                    </div>
          </div>
                </div><!--end of item -->
  
  <div class="item span2 mg wmiya ">
      <div class="item_inside span2">
      <img src="images/shutter3m.jpg" alt="The Last of us">
                
               
                <div class="content_image  righty ">
                    <div class="site_color mg_t">
 “Let us move from the era of confrontation to the era of negotiation” 
</div>
                 <em class="righty">Richard M. Nixon</em>
                    </div>
          </div>
                </div><!--end of item -->
</div>
             </div>
 
        
                     <?php

include 'footer.php';



?>
        </div><!--end of container -->
    
    
    </body>
</html>
</html>