$(document).ready(function(){	
    var myWidth,myHeight;
    function resize(){
       if( typeof( window.innerWidth ) == 'number' ) {
            myWidth = window.innerWidth;
            myHeight = window.innerHeight;
        } else if( document.documentElement && ( document.documentElement.clientWidth || 
        document.documentElement.clientHeight ) ) {
            myWidth = document.documentElement.clientWidth;
            myHeight = document.documentElement.clientHeight;
        } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
            myWidth = document.body.clientWidth;
            myHeight = document.body.clientHeight;
        }
        $(".b-main").css({
            height: myHeight,
            maxHeight: myHeight,
            minHeight: 640
        });
        $(".b-main .main-woman").height(myWidth*0.487/1.27);
        // $(".b-main .main-woman").width(myWidth*0.487);
    }
    $(window).resize(resize);
    resize();

    $.fn.placeholder = function() {
        if(typeof document.createElement("input").placeholder == 'undefined') {
            $('[placeholder]').focus(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                    input.removeClass('placeholder');
                }
            }).blur(function() {
                var input = $(this);
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.addClass('placeholder');
                    input.val(input.attr('placeholder'));
                }
            }).blur().parents('form').submit(function() {
                $(this).find('[placeholder]').each(function() {
                    var input = $(this);
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                });
            });
        }
    }
    $.fn.placeholder();
    
	var myPlace = new google.maps.LatLng(56.503487, 85.018815);
    var myOptions = {
        zoom: 16,
        center: myPlace,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: true,
        scrollwheel: false,
        zoomControl: true
    }
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 

    var marker = new google.maps.Marker({
	    position: myPlace,
	    map: map,
	    title: "1"
	});

    //  var options = {
    //     $AutoPlay: true,                                
    //     $SlideDuration: 500,                            

    //     $BulletNavigatorOptions: {                      
    //         $Class: $JssorBulletNavigator$,             
    //         $ChanceToShow: 2,                           
    //         $AutoCenter: 1,                            
    //         $Steps: 1,                                  
    //         $Lanes: 1,                                  
    //         $SpacingX: 10,                              
    //         $SpacingY: 10,                              
    //         $Orientation: 1                             
    //     }
    // };

    // var jssor_slider1 = new $JssorSlider$("slider1_container", options);


    $('.slider-cont').slick({
        dots: true,
        fade: true,
        cssEase: 'linear',
        prevArrow: "<span class='arrow left-arrow'></span>",
        nextArrow: "<span class='arrow right-arrow'></span>"
    });
    $('.reviews-slider').slick({
        prevArrow: "<span class='arrow left-arrow'></span>",
        nextArrow: "<span class='arrow right-arrow'></span>",
        slidesToShow: 2,
        slidesToScroll: 2
    });
    
    $('.articles-slider').slick({
        prevArrow: "<span class='arrow left-arrow'></span>",
        nextArrow: "<span class='arrow right-arrow'></span>",
        slidesToShow: 3,
        slidesToScroll: 3
    });
});