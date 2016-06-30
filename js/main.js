$(document).ready(function(){	
    var myWidth,myHeight,
        isMobile = device.mobile(),
        isTablet = device.tablet(),
        firstTog = false,
        prevWidth = 0,
        rotation = 0;

    // isMobile = true;
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
        if( prevWidth >= 1024 && isTablet ) firstTog = false;

        if( (!isMobile && !isTablet) || Math.abs(myWidth/myHeight-rotation) > 0.5 || myHeight-prevHeight < 0 || !firstTog ) firstRender();

        prevHeight = myHeight;
        rotation = myWidth/myHeight;
    }

    function firstRender(){
        $(".b-main").css({
            height: myHeight,
            maxHeight: myHeight
        });

        if(myHeight > 640) {
            $(".b-main").css('background-size',"auto "+myHeight+"px");
        } else $(".b-main").css('background-size',"auto 640px");
        $(".b-main .b-block .content").height(myHeight-55);

        firstTog = true;
    }

    if( isMobile )
        new FastClick(document.body);

    $(".b-burger").click(openMenu);
    $(".b-mobile-menu, .b-mobile-menu a").click(closeMenu).on('touchmove', function(e){ e.preventDefault(); });

    function openMenu(){
        $("body").addClass("mobile-menu-opened");
        TweenLite.to($(".b-mobile-menu li,.b-mobile-menu .btn"), 0, { y : 150, opacity: 0, ease : Cubic.easeOut } );
        $(".b-mobile-menu").fadeIn(200);
        $(".b-mobile-menu li").each(function(){
            TweenLite.to($(this), 0.2+$(this).index()/20, { y : 0, opacity: 1, delay: (0.02+$(this).index()/500)*$(this).index()+0.1, ease : Cubic.easeOut } );
        });
        TweenLite.to($(".b-mobile-menu .btn"), 0.2+($(".b-mobile-menu li").length+1)/20, { y : 0, opacity: 1, delay: (0.02+($(".b-mobile-menu li").length+1)/500)*($(".b-mobile-menu li").length+1)+0.1, ease : Cubic.easeOut } );
        return false;
    }

    var togLink = false;
    function closeMenu(){
        $("body").removeClass("mobile-menu-opened");
        $(".b-mobile-menu").fadeOut(300);
        if( !$(this).hasClass("b-mobile-menu-a") && !$(this).hasClass("b-menu-call") && togLink == false ){
            return false;
        }else{
            togLink = true;
        }
    }

    if( $('.b-other').length ){
        $('.b-other').parallax({
            speed : 0.5
        });
    }

    $(window).resize(resize);
    resize();

    var prevScroll = 0;

    $(window).scroll(function(){
        var scroll = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop,
            offset = ($(".b-other").length)?$(".b-other").height():110;

        offset = 110;
        if( scroll > $(".b-block .b-header").outerHeight() ){
            $(".b-header-fixed").addClass("show"); 
        } else {
            $(".b-header-fixed").removeClass("show");
        }
        if( isMobile ){
            offset = ($(".b-other").length)?($(".b-other").height()-130):($(".b-main").height()-130);

            if( scroll > offset ){
                $(".b-mobile-header").addClass("b-gold");
            }else{
                $(".b-mobile-header").removeClass("b-gold");
            }
        }
        prevScroll = scroll;
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
        slidesToShow: isMobile ? 1 : 2,
        slidesToScroll: 1
    });
    
    $('.b-articles .articles-slider').slick({
        prevArrow: "<span class='arrow icon-arrow-left black'></span>",
        nextArrow: "<span class='arrow icon-arrow-right black'></span>",
        slidesToShow: isMobile ? 1 : 3,
        slidesToScroll: 1
    });

    if( isMobile ){
        $(".contacts-gallery").slick({
            prevArrow: "<span class='arrow icon-arrow-left'></span>",
            nextArrow: "<span class='arrow icon-arrow-right'></span>",
            slidesToShow: 1 ,
            slidesToScroll: 1,
            arrows : false,
            dots : true
        });

        $(".b-main-doctors").slick({
            mobileFirst : true,
            prevArrow: "<span class='footer-arrow icon-arrow-left'></span>",
            nextArrow: "<span class='footer-arrow icon-arrow-right'></span>"
        });

        $(".b-doctors .filter li").click(function(){
            if( !$(this).hasClass("active") ){
                $(".b-doctors .filter li").removeClass("active");
                $(this).addClass("active");
                if( $(this).attr("data-filter") == "*" ){
                    $("#doctors").slick('slickUnfilter');
                }else{
                    $("#doctors").slick('slickUnfilter');
                    $("#doctors").slick('slickFilter',$(this).attr("data-filter"));
                }
            }
        });

        $(".b-other-content .doctor-filter li").click(function(){
            if( !$(this).hasClass("active") ){
                $(".doctor-filter li").removeClass("active");
                $(this).addClass("active");
                $("#doctors li").hide();

                if( $(this).attr("data-filter") == "*" ){
                    $("#doctors li").show();
                }else{
                    $("#doctors li").filter($(this).attr("data-filter")).show();
                }
            }
        });
    }else{
        var $grid = $('#doctors').isotope({
            itemSelector: '#doctors li',
            hiddenStyle: {
                opacity: 0
            },
              visibleStyle: {
                opacity: 1
            }
        });
        // filter items on button click
        $('ul.filter').on( 'click', 'li', function() {
            $('ul.filter li.active').removeClass("active");
            $(this).addClass("active");
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({ filter: filterValue });
        });
    }
    if( isMobile ){
        $(".about-slider").slick({
            prevArrow: "<span class='arrow icon-arrow-left'></span>",
            nextArrow: "<span class='arrow icon-arrow-right'></span>",
            arrows : false,
            dots : true
        });
    } else {
        $(".about-slider").slick({
            prevArrow: "<span class='footer-arrow icon-arrow-left'></span>",
            nextArrow: "<span class='footer-arrow icon-arrow-right'></span>",
            dots : true
        });
    }

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
            heightStyle: "content"
        });
        var active = $(".service-accord .ui-state-active").index();
        $(".service-accord h3").click(function(e){
            if($(this).index() == active) {
                window.location.assign($(this).attr("data-href")); 
            } else active = $(this).index();
        });
    }


    $('.doctors-slider').slick({
        prevArrow: "<span class='footer-arrow icon-arrow-left'></span>",
        nextArrow: "<span class='footer-arrow icon-arrow-right'></span>",
        slidesToShow: isMobile ? 1 : 5,
        slidesToScroll: 1
    });
    $('.articles-footer-slider').slick({
        prevArrow: "<span class='footer-arrow icon-arrow-left'></span>",
        nextArrow: "<span class='footer-arrow icon-arrow-right'></span>",
        variableWidth: true,
        slidesToShow: isMobile ? 1 : 3,
        slidesToScroll: 1
    });
    
    customHandlers["doctor_rec"] = function(el){
        var name = $(el).attr("data-name");
        var spec =  $(el).attr("data-spec");
        $("#name-select option[value='"+name+"'").prop("selected",true);
        $("#spec-select option[value='"+spec+"'").prop("selected",true);
    }

    $(".show-next span").click(function(){
        var obj = $(this);
        obj.hide();
        obj.parent().find('i').css("display","block");
        var href = obj.attr("data-href");
        $.ajax({
            type: "GET",
            url: href,
            success: function(msg){
                obj.parent().find('i').hide();
                var msg = $.parseJSON(msg);
                $(".ul-ajax").append(msg.data);
                if(msg.next) {
                    obj.attr("data-href",msg.next);
                    obj.show();
                } else $(".show-next").hide();
                
                
            }
        });
    });

    $("body").on("click",".articles-filter li:not(.active)",function(){
        var obj = $(this);
        $(".articles-filter li.active").removeClass("active");
        obj.addClass("active");
        $(".show-next").hide();
        $(".ul-ajax").css("visibility","hidden").css("opacity","0");
        href = obj.attr("data-href");
        $.ajax({
            type: "GET",
            url: href,
            success: function(msg){
                var msg = $.parseJSON(msg);
                $(".ul-ajax").html(msg.data);
                $(".ul-ajax").css("visibility","visible").css("opacity","1");
                if(msg.next) {
                    $(".show-next span").attr("data-href",msg.next);
                    $(".show-next").show();
                }   
            }
        });
    });

    $("body").on("click",".articles-slider .slick-slide,.articles-all li,.actions li",function(){
        window.location.assign($(this).find(".link").attr("href")); 
    });

    if( !isMobile && $('.stick,.doctor-img').length) {
        $(".stick").stick_in_parent({offset_top: $(".b-header-fixed").outerHeight() + 10});  
        $(".doctor-img").stick_in_parent({offset_top: myHeight - $(".doctor-img").height()}); 
    }

    if( $("#map_canvas").length ){
        var myPlace = new google.maps.LatLng(56.501057, 85.001960);
        var myOptions = {
            zoom: 17,
            center: ( isMobile ) ? new google.maps.LatLng(56.501278, 85.003651) : new google.maps.LatLng(56.501157, 85.001960),
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

        var contentString = '<div class="gmap-bubble-marker-cont"><div class="gmap-bubble-marker"><div class="gmap-close-button icon-close"></div><p class="gmap-cont gmap-cont-1">Авторская клиника эстетической<br>стоматологии и косметологии «COSMODENT»<br><strong>Иркутсктий тракт, 5<br>+7 (382) 220-23-32</strong></p></div></div>';
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
});