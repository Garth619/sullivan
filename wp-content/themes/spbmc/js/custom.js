// @codekit-prepend 'waypoints.js'
// @codekit-prepend 'slick.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'modernizr-webp.js'

jQuery(document).ready(function($){
	
	
	
	
	
	// change submit button verbiage



	
	var windowWidth = $(window).width();



	function checkSubmit() {
    
    if (windowWidth < 768) {
        
      
    		$("input[type=submit]").val("Submit");
    	   		
    		
    } 
    
	};
	

	checkSubmit();





	

	
	 /* Modernizr - check if browser supports webp for section_one. 
     --------------------------------------------------------------------------------------- */
    
    // add data-webp and data-jpg to images in section one and you're gucci
    
     Modernizr.on('webp', function (result) {
	    
	    $('#section_one img').each(function () {
	    
				if (result) {
    
					if ($(this).attr('data-webp')) {
          
          	var img = $(this).data('webp');
          
						$(this).attr('src', img);
        	
        	}
        	
        }
  
	 			else {
		 			
		 			if ($(this).attr('data-jpg')) {
          
          	var img = $(this).data('jpg');
          
						$(this).attr('src', img);
        	
        	}
    
    		}
  		
  		});
  		
  		
  		// background images (one time load, does not reflect media queries or window width..yet)
  		
  		if (result) {
	  		
	  		var sectionOne = '#section_one';
	  		
	  		if ($(sectionOne).attr('data-webpbg')) {
		  		
		  		var imgBg = $(sectionOne).data('webpbg');
		  		
		  		$(sectionOne).css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
	  		
	  	}
	  	
	  	
	  	else {
		  	
		  	if ($('#section_one').attr('data-jpgbg')) {
		  		
		  		var imgBg = $('#section_one').data('jpgbg');
		  		
		  		$('#section_one').css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
		  	
	  	}
  		
			// console.log(result);
	
		});
		
		
		
		/* Load Images - Call function when you reach the a section with images using waypoints
       BG image - <div data-src=""></div>   ,   Image - <img data-src="">
      --------------------------------------------------------------------------------------- */

    function loadImages() {
      
      // images
      
      $('img').each(function () {
        
        if ($(this).attr('data-src')) {
          
          var img = $(this).data('src');
          
          $(this).attr('src', img);
        
        }
      
      });

      // background images
      
      $('div, section').each(function () {
       
        if ($(this).attr('data-src')) {
          
          var backgroundImg = $(this).data('src');
          
          $(this).css('background-image', 'url(' + backgroundImg + ')');
        
        }
      
      });

      console.log('images loaded');
    }

    createWaypoint('section_one', null, null, -2, loadImages, false);
    
    createWaypoint('internal_main', null, null, '100%', loadImages, false);







    /* Waypoints
     --------------------------------------------------------------------------------------- */


    function createWaypoint(triggerElementId, animatedElement, className, offsetVal, functionName, reverse) {
      if($('#' + triggerElementId).length) {
        var waypoint = new Waypoint({
          element: document.getElementById(triggerElementId),
          handler: function (direction) {
            if (direction === 'down') {
              $(animatedElement).addClass(className);

              if (typeof functionName === 'function') {
                functionName();
                this.destroy();
              }

            } else if (direction === 'up') {
              if (reverse) {
                $(animatedElement).removeClass(className);
              }

            }
          },
          offset: offsetVal
          // Integer or percent
          // 500 means when element is 500px from the top of the page, the event triggers
          // 50% means when element is 50% from the top of the page, the event triggers
        });
      }
    }


    createWaypoint('section_one', '.sticky_nav', 'visible', 0, null, true);
    
    createWaypoint('internal_main', '.sticky_nav', 'visible', -200, null, true);
   



    /* Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
      --------------------------------------------------------------------------------------- */

    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

		
		
		 /* Wistia - Call function when script needs to be loaded either by hover or waypoints
     --------------------------------------------------------------------------------------- */

    function wistiaLoad() {
      jQuery.getScript('https://fast.wistia.com/assets/external/E-v1.js', function(data, textStatus, jqxhr) {
        console.log('wistia load:', textStatus); // Success
      });
    }

    // examples:

    // jQuery(".banner-box-1").one("mouseenter", function(e){
    //   wistiaLoad();
    // });

    // createWaypoint('section-1', null, null, '100%', wistiaLoad, false)


		
		/* Live Chat - Call function when script needs to be loaded either by hover, click or waypoints
   --------------------------------------------------------------------------------------------------- */ 
   
   
   
   function livechatLoad() {
	   if(my_data.live_chat) {
      jQuery.getScript(my_data.live_chat, function(data, textStatus, jqxhr) {
        console.log('Live Chat load:', textStatus); // Success
      });
      // alert( my_data.live_chat);
      }
    }
   
   
   // createWaypoint('section_one', null, null, -100, livechatLoad, false);
   // createWaypoint('internal_trigger', null, null, -100, livechatLoad, false);




        
    



/* Slick Carousel ( http://kenwheeler.github.io/slick/ )
--------------------------------------------------------------------------------------- */



$('.small_header').slick({
  infinite: true,
  mobileFirst:true,
  slidesToShow: 1,
  slidesToScroll: 1,
	arrows:false,
	dots:false,
	fade:true,
	autoplay:true,
	responsive: [
    {
      breakpoint: 767,
      settings: "unslick",
   }
	]
 });



$('.sec_two_slidehow').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
	arrows:false,
	dots:true,
	customPaging : function(slider, i) {
    var thumb = $(slider.$slides[i]).data();
    return '<a>'+('0'+(i+1)).slice(-2)+'</a>';
  },
  responsive: [
    {
      breakpoint: 1595,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      }
   },
   {
      breakpoint: 1240,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
   },
   {
      breakpoint: 1066,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots:false,
        arrows:true,
        prevArrow:".sec_two_button_left",
				nextArrow:".sec_two_button_right",
      }
   }
	]
 });
 
 
 
 $('#section_two ul.slick-dots').wrap('<div class="mywrap"></div>');
 
 $('.mywrap').append('<span class="slick_line"></span>');
 
 
 
 	

 
 
 
 	function sectwoslide() {
     
     if (windowWidth < 1067) {
         
       
     	$('.sec_two_single_slide').on('click', function(e) {
 	  
 				$(this).toggleClass('open');
 	
 			});
     	   		
     		
     } 
     
  
  };
 	
 
 sectwoslide();




$('.sec_three_slideshow').slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 5,
	arrows:true,
	prevArrow:".sec_three_awards_button_left",
	nextArrow:".sec_three_awards_button_right",
	dots:false,
	responsive: [
    {
      breakpoint: 1450,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      }
   },
   {
      breakpoint: 1066,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
   },
   {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
   }
	]
 });





$('.att_awards_slideshow').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
	arrows:true,
	prevArrow:".att_awards_button_left",
	nextArrow:".att_awards_button_right",
	dots:false,
	responsive: [
    {
      breakpoint: 1066,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
   },
   {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
   }
	]
 });
 

$('.about_page_slideshow').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
	arrows:true,
	prevArrow:".att_awards_button_left",
	nextArrow:".att_awards_button_right",
	dots:false,
	responsive: [
    {
      breakpoint: 1440,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      }
   },
   {
      breakpoint: 1205,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
   },
   {
      breakpoint: 895,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
   }
	]
 });
 
 
 
 
 
 $('.sec_four_test_slideshow').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
	arrows:false,
	fade:true,
	dots:true,
	customPaging : function(slider, i) {
    var thumb = $(slider.$slides[i]).data();
    return '<a>'+('0'+(i+1)).slice(-2)+'</a>';
  },
	responsive: [
    {
      breakpoint: 1270,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        //adaptiveHeight: true
      }
   }
	]
 });

 

	

/* Remove "#" from menu anchor items to avoid jump to the top of the page
--------------------------------------------------------------------------------------- */


$("ul > li.menu-item-has-children > a[href='#']").removeAttr("href");



// form click


$('.gform_wrapper ul li').on('click', function(e) {
	
	
	$('.gform_wrapper ul li').removeClass('clicked');
  
  $(this).addClass('clicked');
  
});


	$(document).click(function (e){

		var container = $(".gform_wrapper ul li");

		if (!container.is(e.target) && container.has(e.target).length === 0){

			$('.gform_wrapper ul li').removeClass('clicked');
		
		}

	}); 




/* Nav Clone
--------------------------------------------------------------------------------------- */


// current page


function checkNavdesktop() {
    
    if (windowWidth > 1201) {
        
      
    	$('nav ul.menu > li.current-menu-ancestor > a').next('ul.sub-menu').clone().appendTo('.nav_clone').show();


			$('nav ul.menu > li.current-menu-ancestor > a').addClass('open');


			$('nav ul.menu > li.menu-item-has-children > a').on('click', function(e) {
  

				$(".nav_clone").empty();
	
				$(this).next('ul.sub-menu').clone().appendTo('.nav_clone').fadeIn();
	
				$('nav ul.menu > li.menu-item-has-children > a').removeClass('open');
	
				$(this).addClass('open');
	

			});

    	   		
    		
    } 
  
    
	};
	

	checkNavdesktop();


// open


$('.menu_wrapper').on('click', function(e) {
  
	$('nav').slideToggle(450);
	
	$('.close').addClass('fade');
	
	$('html, body').addClass('fixed');

});


// close 

$('.close').on('click', function(e) {
  
	$('nav').slideToggle(450);
	
	$('.close').removeClass('fade');
	
	$('html, body').removeClass('fixed');
	

});



	
	function checkNav() {
    
    if (windowWidth < 1201) {
	    

	    //$('nav ul.menu > li.current-menu-ancestor').toggleClass('open');

        
      
    	$('nav ul.menu > li.menu-item-has-children > a').on('click', function(e) {
    	  
    		$(this).next('ul.sub-menu').toggleClass('open');
    		
    		$(this).toggleClass('open');

    		
    	});
    	   		
    		
    } 
  
    
	};
	

	checkNav();
	
	
	// sidebar
	
	
	$('.sidebar_wrapper ul.menu > li.menu-item-has-children > a').on('click', function(e) {
	  
	
		$(this).next('ul.sub-menu').slideToggle(200);
		
		$(this).toggleClass('open');
		

	});
	
	
	// check if there is a banner on just internals to style the different headers 
	
	
	if (!$(".home")[0] && !$(".internal_banner")[0] ){
		
		$('body').addClass('no-banner');
   	
  }
  
  
  // meet the team wrapper
  
  
 // hides the divider on the previous tab 
 
 
 $('.meet_team_selector ul li').on('mouseover', function(e) {
   
 		$(this).prev('li').addClass('hide');
 
 });
 
 
 $('.meet_team_selector ul li').on('mouseout', function(e) {
   
 		$(this).prev('li').removeClass('hide');
 
 });
 

 // meet team hardcoded tabs
  
  
 $('.meet_team_selector ul li').on('click', function(e) {
	 
	 
	 $('.meet_team_selector ul li').removeClass('active');
   
   $(this).addClass('active');
   
   $('.meet_team_selector ul li').prev('li').removeClass('hide');
   
   $(this).prev('li').addClass('hide');
   
   
   $('.meet_team_selector ul li.active').on('mouseout', function(e) {
   
 		$(this).prev('li').addClass('hide');
 
 	
 	});
   
   
   
   var dataTab = $(this).attr('data-tab');
   
   $('.tab').fadeOut(300);
   
   $('.'+dataTab).delay(600).fadeIn(400);
   
  });
  
	
	
	
	// case results 
	
	

	$('span.top_level_tab_title').on('click', function(e) {
		  
		$(this).next('ul.second_level').slideToggle(400);
					
		$(this).toggleClass('active');
					
	});
	
	
	$('span.tab_title').on('click', function(e) {
		  
			$(this).next('.tab_title_content').slideToggle(400);
					
			$(this).toggleClass('active');
					
	});
	
	
	// sidebar
	

  $('.case_results ul.menu li').on('click', function(e) {
    
  	
  	var crTab = $(this).attr('data-caseresult');
		
		$('.secondary_tab').fadeOut(300);
		
		$('.secondary_tab.'+crTab).delay(600).fadeIn(400);
		
		
		$('.case_results ul.menu li').removeClass('active');
		
		$(this).addClass('active');
  
  });
	
	
	// Meet the team page - disable gold line hover on placeholders
	
	
	
	$('img.placeholder').parents('.single_meet_team').addClass('no_gold')
	

	
  
}); // document ready