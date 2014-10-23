
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
            var MOBILE_SITE = '/mobile/index.php', // site to redirect to
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
    <script src="js/jquery.zaccordion.min.js" ></script>
    
    <script src="js/site_s.js" ></script>
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
        <div class="span2 mg wmiya whiteback _mgt8 lit _5br" style="
    border: 1px solid rgba(221, 221, 221,0.2);
    padding-top: 5px;
">
        	<ul id="featured">
	<li>
		<span class="contr whity">
			"Everything is negotiable. Wether or not the negotiation is easy is another thing” 

                 <em class="righty"> Carrie Fisher</em>
			
		</span>
	   <img src="images/shutter1m.jpg" alt="The Last of us">
	</li>
	<li>
			<span class="contr whity">
				 “In life you don’t get what you deserve, you get what you negotiate”

                 <em class="righty"> Krisha Sagar</em>
				</span>
	    <img src="images/shutter2m.jpg" alt="The Last of us">
	</li>
	<li>
			<span class="contr whity">
				 “Let us move from the era of confrontation to the era of negotiation” 

                 <em class="righty">Richard M. Nixon</em>
				</span>
	   <img src="images/shutter3m.jpg" alt="The Last of us">
	</li>
	<li>
		<span class="contr whity">
			“
			There are no secrets to success. It is the result of preparation, hard work, and learning from failure
			.” 

                 <em class="righty"> Colin Powell</em>
			
		</span>
	   <img src="images/nego.jpg" alt="The Last of us">
	</li>
		<li>
		<span class="contr whity">
			“
			There are no secrets to success. It is the result of preparation, hard work, and learning from failure
			.” 

                 <em class="righty"> Colin Powell</em>
			
		</span>
	   <img src="images/nego2.jpg" alt="The Last of us">
	</li>
			<li>
		<span class="contr whity">
			“
			There are no secrets to success. It is the result of preparation, hard work, and learning from failure
			.” 

                 <em class="righty"> Colin Powell</em>
			
		</span>
	   <img src="images/nego3.jpg" alt="The Last of us">
	</li>
</ul>

             </div>
             <div class="span2  index_content">
             	 <div class="span2 mg _70">
             	 	<h1 class="_15f">
             	 		PEARL NTEC FOR NEGOTIATION TRAINING ,EDUCATION AND CONSULTANCY (NTEC)
             	 	</h1>
             	 	<p class="w_po">
             	 		<span class="first_ch _15f whity">
             	 		F</span>
             	 		irst specialized business unit in
the Middle East established to provide high quality negotiation training and consultancy services
to individuals and organizations of all sizes within the private and public sectors.
We aim at enabling Organizations to leverage its Corporate Communication and Negotiation
Management.
             	 	</p>
             	 	</div>
             	 <div class="span2 mg _30">
             	 	<div class="inner_t span1 _mgt20" >
             	 		<ul class="nopadding nomargin left_ban">
          
            <li class="_1">
                <a href="/about.php">
                About us
                </a>
                </li>
          <li class="_2">
                <a href="/services.php">
                Services 
      </a>
            
            </li><!--end of services-->
         
              <li class="_3">
                <a href="/experts.php">
                Experts
                </a>
                </li>
             <li class="_4">
                <a href="/news.php">
                News & updates
                </a>
                </li>
             <li class="_5">
                <a href="/resources.php">
                Resources
                </a>
                </li>
             <li class="_6"> 
                <a href="/contact.php">
                Contact us
                </a>
                </li>
         
            </ul>
             	 		
             	 	</div>
             	 	
             	 	</div>
             	
             	
             </div>
 
        
                     <?php

include 'footer.php';



?>
        </div><!--end of container -->
    
    
    </body>
</html>
</html>