$(document).ready(function() {
	
 $("#simple-menu").on("click",function(e){
	e.preventDefault();
	e.stopPropagation();
       //jQuery.sidr('toggle', 'sidr');

});
		  $('#simple-menu').sidr({
		  	name: "sidr",
	  	speed: 200,
	  	onOpen: function(){
	  		var w_i = $("#sidr").width();
	  		$(".bottom_header").animate({"left": w_i +"px"},205);
	  		
	  		$('#simple-menu').find("i").removeClass("icon-align-justify").addClass("icon-indent-left");
	  	},
	  	onClose: function(){
	  		$(".bottom_header").animate({"left":"0px"},205);
	  	$('#simple-menu').find("i").removeClass("icon-indent-left").addClass("icon-align-justify");
	  	}
	  });

 
  $("#owl-demo").owlCarousel({
 
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      autoPlay: true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
});
$( window ).resize(function() {
  
  //          $.sidr('close', 'sidr');        

});