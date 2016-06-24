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
            maxHeight: myHeight
        });
        if(myHeight > 640) {
            $(".b-main").css('background-size',"auto "+myHeight+"px");
        } else $(".b-main").css('background-size',"auto 640px");
        $(".b-main .b-block .content").height(myHeight-55);
       

    }

    $(window).resize(resize);
    resize();

    $(window).scroll(function(){
        var scroll = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
        if(scroll > ($(".b-block .b-header").height()+50) ) $(".b-header-fixed").addClass("show"); else $(".b-header-fixed").removeClass("show");
        // $("body").mousedown();
        // $("body").mouseup();
    });

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
    if($("#map_canvas").length) {
    	var myPlace = new google.maps.LatLng(56.501057, 85.001960);
        var myOptions = {
            zoom: 17,
            center: new google.maps.LatLng(56.501157, 85.001960),
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
            anchor: new google.maps.Point(19,58) // anchor
            },
            animation: google.maps.Animation.DROP,
            map: map,
            title: "COSMODENT"
        });

        var contentString = '<div class="gmap-bubble-marker-cont"><div class="gmap-bubble-marker"><div class="gmap-close-button"></div><p class="gmap-cont gmap-cont-1">Авторская клиника эстетической<br>стоматологии и косметологии «COSMODENT»<br><strong>Иркутсктий тракт, 5<br>+7 (382) 220-23-32</strong></p></div></div>';
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
            if( $(".gmap-bubble-marker").hasClass("gmap-bubble-marker-hide") ){
                $(".gmap-bubble-marker").removeClass("gmap-bubble-marker-hide");
            }else{
                $(".gmap-bubble-marker").addClass("gmap-bubble-marker-hide");
            }
        });
        google.maps.event.addListenerOnce(map, 'idle', function(){
            infowindow.open(map,marker);
        });
        $("body").on("click",".gmap-close-button",function(){
            $(".gmap-bubble-marker").addClass("gmap-bubble-marker-hide");
        });
    }
    $('.slider-cont').slick({
        dots: true,
        prevArrow: "<span class='arrow icon-arrow-left'></span>",
        nextArrow: "<span class='arrow icon-arrow-right'></span>",
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
        prevArrow: "<span class='arrow icon-arrow-left black'></span>",
        nextArrow: "<span class='arrow icon-arrow-right black'></span>",
        slidesToShow: 2,
        slidesToScroll: 1
    });
    
    $('.b-articles .articles-slider').slick({
        prevArrow: "<span class='arrow icon-arrow-left black'></span>",
        nextArrow: "<span class='arrow icon-arrow-right black'></span>",
        slidesToShow: 3,
        slidesToScroll: 1
    });

    var $grid = $('#doctors').isotope({
        itemSelector: '#doctors li',
    });
    // filter items on button click
    $('ul.filter').on( 'click', 'li', function() {
        $('ul.filter li.active').removeClass("active");
        $(this).addClass("active");
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });

    $.datetimepicker.setLocale('ru');

    $('#datepicker').datetimepicker({
        format:'d.m.Y H:i',
        minDate: 0,
        yearStart: 2016,
        yearEnd: 2030,
        scrollMonth: false,
        allowTimes: [
            "9:00",
            "10:00",
            "11:00",
            "12:00",
            "13:00",
            "14:00",
            "15:00",
            "16:00",
            "17:00",
            "18:00",
            "19:00",
            "20:00"
        ]
    });

    

    $(".b-header .search").click(function(){
        var $this = $(this);
        $(this).parent().find("ul li:nth-child(n+4)").animate({marginRight: "hide",width: "hide"}, 200);
        $(this).animate({
            width: "465px"
          }, 200, function() {
            $this.find("input").fadeIn(150);
            $this.find("input[type='text']").focus();
        });
    });

    var open = false;
    $("body").on("mouseup",".b-header .search *",function(){
        open = true;

    });
    $("body").on("mousedown",function() {
        open = false;
    }).bind("mouseup",function(){
        if( !open ){
            $(".b-header .search input").fadeOut(100);
            $(".b-header ul li:nth-child(n+4)").animate({marginRight: "show",width: "show"}, 200);
            $(".b-header .search").animate({
                width: "34px"
              }, 200);  
        }
    });

    if($(".service-accord").length) {
        $( ".service-accord" ).accordion({
            icons: false,
            heightStyle: "content",
            collapsible: true
        });
        var active = $(".service-accord .ui-state-active").index();
        $(".service-accord h3").click(function(e){
            if($(this).index() == active) {
                window.location.assign($(this).attr("data-href")); 
            } else active = $(this).index();
            
        // window.open($(this).attr("data-href"),'_blank');
        });
        // $(window).scroll(function(){
        //     var scroll = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
        //     if(scroll < $(".service-text").offset().top-100) $( ".service-accord" ).removeClass("fixed abs");
        //     if(scroll > $(".service-text").offset().top-100 && scroll < $(".b-grey").offset().top-$( ".service-accord" ).height()-85-100 ) $( ".service-accord" ).addClass("fixed").removeClass("abs");
        //     if(scroll > $(".b-grey").offset().top-$( ".service-accord" ).height()-85 ) { $( ".service-accord" ).addClass("abs").removeClass("fixed"); }
        // });

    }


    $('.doctors-slider').slick({
        prevArrow: "<span class='footer-arrow icon-arrow-left'></span>",
        nextArrow: "<span class='footer-arrow icon-arrow-right'></span>",
        slidesToShow: 5,
        slidesToScroll: 1
    });
    $('.articles-footer-slider').slick({
        prevArrow: "<span class='footer-arrow icon-arrow-left'></span>",
        nextArrow: "<span class='footer-arrow icon-arrow-right'></span>",
        variableWidth: true,
        slidesToShow: 3,
        slidesToScroll: 1
    });
    
});