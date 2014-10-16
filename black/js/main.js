$(document).ready(function(){
    var height = $(window).height(),
        intro_height = $(".intro").outerHeight(),
        rest = (height /2) - (intro_height /2),
        tot_width = $(window).width(),
        sub_width = (tot_width /2) /3,
        black = $("._black"),
        violet = $("._violet"),
        purple = $("._purple"),
        golden = $("._golden"),
        logo = $(".mylogo"),
        logo_width = (tot_width /2) -150 ,
    def_time = sub_width * 5,
        d_time =def_time  ;
    //console.log(sub_width);
    
    
logo.css({
    top : rest +"px",
    left :(logo_width + 52 )+"px"
    });
    
    $(".intro").css("top" ,rest +"px");
    
        function update_layout(){
            $("body").removeClass("my_gray");
    $(".intro img").hide();
          
          $(".mylogo").show();
            setTimeout(function(){
          $(".mylogo").animate({
            top: "0px",
              left: "0px"
              },def_time,"linear");
   },500);
   
            
      }
    
    black.show().animate({
        top : "0px" ,
        left :sub_width +"px"
        
        
        },d_time,"linear",function(){
            black.animate({
                bottom: "0px",
                top :"60px",
                left : (sub_width *2 ) +"px"
                
                
                },d_time,"linear",function(){
                     black.animate({
                top: "0px",
                bottom :"60px",
              left : ((sub_width *3 ) -30) +"px"          
                     },d_time,"linear") ;       
                } );
                
        });
    //for golden 
    
    
    setTimeout(function(){
          golden.show().animate({
        top : "0px" ,
        left :sub_width +"px"
        
        
        },1000,"linear",function(){
            golden.animate({
                bottom: "0px",
                top :"60px",
                left : (sub_width *2 ) +"px"
                
                
                },d_time,"linear",function(){
                     golden.animate({
                top: "0px",
                bottom :"60px",
                left : ((sub_width *3 ) -30) +"px"          
                     },d_time,"linear") ;       
                } );
                
        });
        
    },800);
    
    ///left images
    
    
  
    
    violet.animate({
        top : "0px" ,
        right :sub_width +"px"
        
        
        },1000,"linear",function(){
             
    violet.show().animate({
                bottom: "0px",
                top :"70px",
                right : (sub_width *2 ) +"px"
                
                
                   },d_time,"linear",function(){
                       
    violet.animate({
                top: "0px",
                bottom :"70px",
          right: ((sub_width *3 ) -30) +"px"     
                     },d_time,"linear") ;       
                } );
                
        });
    //for purple
    
    
    setTimeout(function(){
          purple.show().animate({
        top : "0px" ,
        right :sub_width +"px"
        
        
        },1000,"linear",function(){
            purple.animate({
                bottom: "0px",
                top :"70px",
                right : (sub_width *2 ) +"px"
                
                
                 },d_time,"linear",function(){
                   purple.animate({
                top: "0px",
                bottom :"70px",
               right: ((sub_width *3 ) -30) +"px"        
                     },d_time,"linear" ,update_layout  ) ;       
                    
                    
                    
                    
                } );
                
        });
        
    },800);
    
    
});