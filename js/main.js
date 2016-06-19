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
        $(".b-main .main-woman").height(myHeight*0.9);
        $(".b-main .main-woman").width(myHeight*0.9*1.27);
        $(".b-header").css("padding-top",myHeight*0.06);
        var margin = (myHeight*0.35-($(".b-header").height()+myHeight*0.06) > 0) ? myHeight*0.35-($(".b-header").height()+myHeight*0.06) : 0;
        $(" .b-main .b-block h1").css("margin-top",margin);
       

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
    
	var myPlace = new google.maps.LatLng(56.503872, 85.019267);
    var myOptions = {
        zoom: 17,
        center: myPlace,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: true,
        scrollwheel: false,
        zoomControl: true
    }
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 

    var marker = new google.maps.Marker({
        position: myPlace,
        icon: {
        url: "i/pin.png", // url
        scaledSize: new google.maps.Size(38, 58), // scaled size
        origin: new google.maps.Point(0,0), // origin
        anchor: new google.maps.Point(60,-7) // anchor
        },
        animation: google.maps.Animation.DROP,
        map: map,
        title: "COSMODENT"
    });

    var contentString = '<div class="gmap-bubble-marker-cont"><div class="gmap-bubble-marker"><div class="gmap-close-button"></div><p class="gmap-cont gmap-cont-1">Авторская клиника эстетической<br>стоматологии и косметологии «COSMODENT»<br><strong>Иркутсктий тракт, 5<br>+7 (382) 220-23-32</strong></p></div></div>';
    var infowindow = new google.maps.InfoWindow({
        content: contentString
      });
    // marker.addListener('click', function() {
    //     infowindow.open(map, marker);
    //   });

    google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
            var timeHide = setInterval(function(){
                if( $("div").is(".gm-style-iw") ){
                    $(".gm-style-iw").siblings("div").hide();
                    clearInterval(timeHide);
                }
            },5);
        });
    google.maps.event.addListenerOnce(map, 'idle', function(){
        infowindow.open(map,marker);
        var timeHide = setInterval(function(){
            if( $("div").is(".gm-style-iw") ){
                $(".gm-style-iw").siblings("div").hide();
                clearInterval(timeHide);
            }
        },5);
    });
    $("body").on("click",".gmap-close-button",function(){
            infowindow.close();
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
        prevArrow: "<span class='arrow left-arrow'></span>",
        nextArrow: "<span class='arrow right-arrow'></span>",
        fade: true
    });
    $('.slider-back').slick({
        arrows: false
        
    });
     $('.slider-cont').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        console.log(nextSlide - currentSlide);
        if( nextSlide - currentSlide == 1 || (currentSlide - nextSlide) > 1) {
            $('.slider-back').slick('slickNext');
        } else $('.slider-back').slick('slickPrev');
    });

    $('.reviews-slider').slick({
        prevArrow: "<span class='arrow left-arrow black'></span>",
        nextArrow: "<span class='arrow right-arrow black'></span>",
        slidesToShow: 2,
        slidesToScroll: 1
    });
    
    $('.articles-slider').slick({
        prevArrow: "<span class='arrow left-arrow black'></span>",
        nextArrow: "<span class='arrow right-arrow black'></span>",
        slidesToShow: 3,
        slidesToScroll: 1
    });

    var $grid = $('.doctors').isotope({
        itemSelector: '.doctors li',
    });
    // filter items on button click
    $('ul.filter').on( 'click', 'li', function() {
        $('ul.filter li.active').removeClass("active");
        $(this).addClass("active");
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });
});