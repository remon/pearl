
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
        
        <div class="span2 mg wmiya whiteback _mgt8 lity _5br" >
        	<div class="span2 mg wmiya">
        		
        	<img src="images/shutter1m.jpg" class="cat_image wmiya">
        	</div>
                      <div class="span2 about_div">
                      	<div class="span2 mg wmiya">
<h5 class="jsv _15f _mgl5 boldy abt">The Founder and CEO</h5>
</div>
                          <h6>Dr. Cherine Soliman</h6>
            <p>
                Experienced Negotiation Specialist and Consultant, MBA, MSc and PhD in Negotiation Science
and Business Negotiation Management from Nantes University, France. Excellent team leader
with 8 years of work experience in the consulting industry, 9 years lecturer in different universities in
different countries, 5 years working experience in the United Nations, global profile with excellent
cross culture management experience, author of a number of international publications all in the
field of negotiation management and enhancement.
            </p>
                </div>
            <div class="span2 about_div">
            	<div class="span2 mg wmiya">
<h5 class="jsv _15f _mgl5 boldy abt"> About us</h5>
</div>
            <p>
            Pearl Negotiation Training, Education and Consultancy (NTEC) is the first specialized business unit in
the Middle East established to provide high quality negotiation training and consultancy services
to individuals and organizations of all sizes within the private and public sectors.
We aim at enabling Organizations to leverage its Corporate Communication and Negotiation
Management.
            </p>
                </div>
                     <div class="span2 about_div">
                     	<div class="span2 mg wmiya">
<h5 class="jsv _15f _mgl5 boldy abt"> Vision</h5>
</div>
            <p>
     Our vision is to become your most trusted business consultancy partner in Egypt and the Middle
East for negotiation services.
            </p>
                </div>
                   <div class="span2 about_div">
                   	<div class="span2 mg wmiya">
<h5 class="jsv _15f _mgl5 boldy abt"> Mission</h5>
</div>
            <p>
   Our mission is to design and deliver high impact negotiation development programs among a
wide range of consultancy support services to produce outstanding human performance in your
organizations. We aim at creating a smart long term partnership with you and are committed to
continuously empower your human capital.
            </p>
                </div><!--end of about_div-->
                            <div class="span2 about_div">
                            	<div class="span2 mg wmiya">
<h5 class="jsv _15f _mgl5 boldy abt"> Commitment</h5>
</div>
            <p>
                <ul class="cl">
<li> Understand your business needs . </li>
<li> Design and deliver high impact training .</li>
<li> Develop and implement powerful reinforcement programs.</li>
<li> Track and measure for continuous improvement and sustainability.</li>
<li> Improve your organizational competencies and capabilities to produce effective and efficient
business transaction .</li>
                    </ul>
            </p>
                </div><!--end of about_div-->
                              <div class="span2 about_div">
                              	<div class="span2 mg wmiya">
<h5 class="jsv _15f _mgl5 boldy abt">     why Pearl NTEC </h5>
</div>
            <p>
 <ul class="cl">
<li> 1st specialized provider in Negotiation services in the Middle East .</li>
<li> 1st to tailor the training design and content to region specific characteristics .</li>
<li> 1st to apply proof tested European negotiation training methodology and tools .</li>
<li> 1st to offer a comprehensive degree in negotiation .</li>
<li> We offer a wide range of training modules .</li>
<li> We offer a free longitudinal follow- up and Return on Investment .</li>
                                  </ul>
            </p>
                </div><!--end of about_div-->
        
             </div>
<?php

include 'footer.php';



?>
        
         
        </div><!--end of container -->
    
    
    </body>
</html>
</html>