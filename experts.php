
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
    <script src="js/jquery.collapse.js"></script>
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
        	<div class="span2 mg wmiya _mgb5">
        		
        	<img src="images/nego.jpg" class="cat_image wmiya">
        	</div>
        <div class="span2 mg wmiya _mgt20 empo_container">
            <div class="span1 empo is_cl _5br" data-url="1">
            <img src="/images/blue%20pearl.png" class="_5br" />
            </div>
            <div class="span1 empo _5br" data-url="2">
                
                <img src="/images/nicolas.jpg" class="_5br" />
                </div>
             <div class="span1 empo _5br" data-url="3">
                
                <img src="/images/arny.jpg" class="_5br" />
                </div>
              <div class="span1 empo _5br" data-url="4">
                
                <img src="/images/peter.jpg" class="_5br" />
                </div>
            
           
            
            </div>
            <div class="span2 mg wmiya bio_cont relative remonoverflow">
            <div class="span2 sub_bio is_sho" id="1" style="display:block;">
                <span class="up_arrow"></span>
                <p> 
                <h5> Dr Cherine Soliman</h5>
                <ul>
                <li>Experienced Negotiation Specialist and Consultant, MBA, MSc and Phd in Negotiation from Nantes University, France. </li>
              <li>  excellent team leader with 8 years of work experience in the consulting industry . </li>
             <li>   8 years lecturer in different universities in different countries among different systems . </li>
                <li>5 years working experience in the United Nations, global profile with excellent cross culture management experience . </li>
                <li>author of a number of publications all in the field of negotiation management and enhancement . </li>
                <li>Seeking to enable Organizations to leverage its Corporate Communication and Negotiation Management . </li>
                <li>Aiming at enhancing the intra organizational negotiation among stakeholders enabling maximum transversal cooperation and conflict management, as well as improving inter organizational negotiation to maintain long term corporate partners in the global environment . </li>
                    </ul>
                
                </p>
                </div>
          <div class="span2 sub_bio " id="2">
                <span class="up_arrow"></span>
                <p> 
              <h5>Nicolas Antheaume</h5>
              <ul>
                  <li>
               Professor at the University of Nantes, France. </li>
<li>He is currently head of the University of Nantes’ French-Chinese International Management Centre. This centre has existed for 20 years and hosts an MBA programme for Chinese Students as well as a Master of International French-Chinese Management Programme non Chinese Students who want to start a career in China . </li>
<li>He has worked in Egypt for five years as Director of Studies at the Faculty of Business and Informatics at the French University in Egypt . </li>
 <li>He is a member of the LEMNA research lab, at the University of Nantes . </li>
<li>He has worked as a consultant for various private and public organizations wishing to improve their environmental management . </li>
<li>He is involved in research in the fields of environmental accounting, family business, international management and negotiation . </li>
                  </ul>

              </p>
                </div>
              <div class="span2 sub_bio " id="3">
                <span class="up_arrow"></span>
                <p> <h5> Arnaud STIMEC	</h5>
        
                 Bio is in french (
        
        </p>
                </div>
              <div class="span2 sub_bio " id="4">
                <span class="up_arrow"></span>
                    <p> <h5> Peter Knopp</h5>
        
                  
                  Bio not filled yet
        
        </p>
                </div>
    </div> <!--end of bio_cont-->
             </div>

        <script>
        var lefo = (parseInt($(".empo").first().outerWidth()) /2 )
           , lo = parseInt($(".sub_bio").css("left"))
            , nlefo = lefo - ($(".up_arrow").outerWidth() / 2 ) -  parseInt($(".sub_bio").first().css("left"));
            
            $(".sub_bio span").css("left",nlefo + "px");
            $(".empo").click(function(){
               var url = $(this).data("url");
                var wido = parseInt($(".bio_cont").outerWidth());
                $(".is_sho").animate({"left" :"-" + wido +"px"}
                                ,500);
               var ind = $( ".empo" ).index( this ) ;
                if (ind ===0){
                    
                }else{
                    var inlo = ((ind + 1 ) * (parseInt ($(".empo").first().outerWidth()) )) - lefo + (parseInt($(".up_arrow").outerWidth() / 2 )) 
                    console.log(inlo);
                    $(".sub_bio#"+url).find("span").css("left",inlo + "px"); 
                }
                $(".is_cl").removeClass("is_cl");
            $(this).addClass("is_cl");   
                $(".sub_bio#"+url).css("left",wido+ "px").show();
                $(".is_sho").removeClass("is_sho");
                $(".sub_bio#"+url).stop().addClass("is_sho").animate({
                    left : lo +"px"
                    
                    },500);
            });
        
        </script>
                 <?php

include 'footer.php';



?>
        </div><!--end of container -->
    
    
    </body>
</html>
</html>