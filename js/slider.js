/*Partenaires*/
(function ($) {  
  setInterval(function(){  
    $(".slider-partenaires ul li:first-child").animate({"margin-left": -350}, 800, function(){  
        $(this).css("margin-left",0).appendTo(".slider-partenaires ul");  
    });  
  }, 3500);  
})(jQuery);