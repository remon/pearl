
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
   <style type="text/css">
       #map-canvas { 
           height: 300px;margin-top: 5%; width: 40%;float: right; margin-right: 50px;
     border: 5px solid rgba(110, 154, 188,0.5);
           border-radius: 5px;
           margin-bottom: 30px;
       
       }
        .myinfo{
            padding-top: 180px;
            padding-left: 10px;
            padding-right: 10px;
        }
   #map-canvas img { max-width:none; }
    </style>
 
    
    
    <script src="js/jquery.js" ></script>
 <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDG_lwdc7G4UOQmN80KhyRTPzIOP1r2g10"></script>
  <script type="text/javascript">
  
      var myLatlng = new google.maps.LatLng(30.0558605,31.2218552);
      function initialize() {
          
        var mapOptions = {
          center: myLatlng,
          zoom: 15,
            draggable :true,
   mapTypeControl: true,
    mapTypeControlOptions: {
      style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
    },
    zoomControl: true,
    zoomControlOptions: {
      style: google.maps.ZoomControlStyle.DEFAULT
    },
            scrollwheel :false,
         
             mapTypeId: google.maps.MapTypeId.ROADMAP,
     
    streetViewControl: false
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
            var marker = new google.maps.Marker({
    position: myLatlng,
    map: map,
    title:"PearlNTEC"
});
      }
    
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
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
            <div class="span2 mg _50">
                <h4 style="margin-top:50px; text-align:center;">
            Address of pearl Ntec    
                    </h4>
                
                <p class="centery">
                25 zamalek street cairo 
                    <br>
                    Tel : 01234567859
                    <br>
                    Email :info@pearlntect.com
                
                </p>
                </div>
            
         <div id="map-canvas"></div>
        
             </div>

                     <?php

include 'footer.php';



?>
        </div><!--end of container -->
    
    
    </body>
</html>
</html>