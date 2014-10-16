
<!doctype html>
<html>

<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pearl NTEC</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.0/css/font-awesome.min.css" />
    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,700,600italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,300italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bad+Script|Satisfy' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/boot.css" />
    <link rel="stylesheet" href="css/links.css" />
    <link rel="stylesheet" href="css/owl.css" />
    <link rel="stylesheet" href="css/owl.theme.css" />
    <link rel="stylesheet " href="css/sidr.css" />
    <link rel="stylesheet" href="css/mobile.css" />
    
   <style type="text/css">
       #map-canvas { 
           height: 300px;margin-top: 5%; width: 95%; margin-right: 50px;
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

    <script src="js/owl.js" ></script>
    <script src="js/fastclick.js"></script>
    <script src="js/sidr.js"></script>
    <script src="js/site.js" ></script>
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
    
    <body >
    		<script>
		$(function() {
    FastClick.attach(document.body);
});
	</script>
                        <?php

include 'heado.php';



?>
<div class="container span2 mg wmiya">
        
        <div class="header relative">
        <img src="images/custom_logo2.png" class="custom_logo"/>
            
            <span class="abs tr_t whity boldy" style="display:none;">
                Negotiation Training ,Education and Consultancy  
            </span>
        </div> <!-- end of header-->
          <?php

include 'bar.php';



?>
        
        <div class="span2 mg wmiya whiteback _mgt8 lit _5br" style="padding-top: 20px;">
            <div class="span2 mg wmiya ">
                <h4 style="margin-top:10px; text-align:center;">
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