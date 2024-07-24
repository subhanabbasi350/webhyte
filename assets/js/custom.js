$(document).ready(function() {
    $('.popup-default-click').click(function() {
        var packn = $(this).attr('data-pack');
        $(".popup .packname").val(packn);
        var packn2 = $(this).attr('data-pc');
        $(".popup .packp").val(packn2);
        var pack_name = $(this).parent().parent().parent().find('.title h5').text();
        //alert(pack_name);
        $(".popup .has-Pack").val(pack_name);
    });
    var key = '5XpThOAEkfgOvEJ';
    var currentIP = $("meta[name=ip2loc]").attr('content');
    $.ajax({
        method: 'get',
        url: 'https://pro.ip-api.com/json/' + currentIP,
        data: {key: key},
        success: function (data) {
            if (data) {
                $('input[name=cip]').val(data.query);
                $('input[name=ip2loc_isp]').val(data.isp);
                $('input[name=ip2loc_org]').val(data.org);
                $('input[name=ctry]').val(data.country);
                $('input[name=ip2loc_region]').val(data.regionName);
                $('input[name=ip2loc_city]').val(data.city);
            }
        }
    });
    // Mobile Menu
    $('.hamburger').click(function() {
        $(this).toggleClass('open');
        $('.mob-menu').toggleClass('open');
        $('body').toggleClass('over-hidden');
    });

    /* Tabbing Function */
    $('[data-targetit]').on('click', function(e) {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
        var target = $(this).data('targetit');
        $('.' + target).siblings('[class^="box-"]').hide();
        $('.' + target).fadeIn();
        $('.pricing-slider').slick("setPosition", 0);
        $('.responsive-slider').slick("setPosition", 0);
    });

    $(".area-service .service-type-listing li").hover(function() {
        $('.area-service .service-type-listing li').removeClass('active');
    }, function() {
        $('.area-service .service-type-listing li:nth-child(1)').addClass('active');
    });

    // Dropdown Nav
    $('li.dropdown-nav').hover(function() {
        $(this).children('ul').stop(true, false, true).slideToggle(300);
    });

    // Accordian
    $('.accordian h4').click(function() {
        $('.accordian li').removeClass('active');
        $(this).parent('li').addClass('active');
        $('.accordian li div').slideUp();
        $(this).parent('li').find('div').slideDown();
    });

    // Popup Default
    $('.popup-default-click').click(function() {
      $('body').addClass('over-hidden');
      $('.overlay').fadeIn();
      $('.popup-default').fadeIn();
    });
    
    $('.popup-close, .overlay').click(function() {
      closePopup();
    });

    // CTA-1 Slider
    $('.cta-slider-1').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        fade: true,
    });

    // Pricing Slider
    $('.pricing-slider').slick({
        dots: true,
        arrows: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
  });
  
  // Industries we served Slider
  $('.weserved-slider').slick({
		dots: true,
		arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 825,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
    });
	
	// Testimonial Slider
    $('.testimonial-slider').slick({
		dots: true,
		arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 825,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
    });

    $('.main-services-slider').slick({
      dots: true,
      arrows: false,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });

});

$(window).scroll(function(){
    if ($(window).scrollTop() >= 50) {
        $('header').addClass('sticky-header');
    }
    else {
        $('header').removeClass('sticky-header');
    }

});


if ($(window).width() < 825) {
  $('.responsive-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    
});
}

// Move Background
	var lFollowX = 0,
    lFollowY = 0,
    x = 0,
    y = 0,
    friction = 1 / 30;

function moveBackground() {
    x += (lFollowX - x) * friction;
    y += (lFollowY - y) * friction;
    translate = "translate(" + x + "px, " + y + "px) scale(1.0)";
    $(".moving-banner-item").css({
        "-webit-transform": translate,
        "-moz-transform": translate,
        transform: translate,
    });
    window.requestAnimationFrame(moveBackground);
}
$(window).on("mousemove click", function (e) {
    var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
    var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
    lFollowX = (20 * lMouseX) / 100;
    lFollowY = (10 * lMouseY) / 100;
});
moveBackground();




// intel Tel Input
let ip; 
let ip_value;
 $("#phone,#phone2").intlTelInput({
     
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: "body",
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
    geoIpLookup: function(callback) {
            $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
              var countryCode = (resp && resp.country) ? resp.country : "";
              callback(countryCode);
              ip=resp.ip;
            
              
            });
          },
       initialCountry: "auto",
       nationalMode: true,
       separateDialCode: true,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
     // utilsScript: "<?php echo $basesurl;?>js/utils.js"
    });
 
 
$('body').delegate('.country','click',function(){
$('input[name="pc"]').val($(this).find('.dial-code').text());
$('input[name="cip"]').val(ip);
$('input[name="ctry"]').val($(this).closest("form").find('.country-list .country.active .country-name').text());

/*var oldString2=$('.selected-flag').attr('title').toUpperCase();
  var newString12 = oldString2.split(':',1)[0];
               $('input[name="ctry"]').val(newString12);*/
 });


$('body').on('click', '.scroll-to-pricing', function() {
  goToScroll('pricing');
});

function goToScroll(e) {
  $('html, body').animate({
    scrollTop: $("." + e).offset().top
  }, 1500);
}

function closePopup() {
    $('.popup').hide();
    $('body').removeClass('over-hidden');
    $('.overlay').fadeOut();
}

$('.custom-tab-list ul .nav-link').on('shown.bs.tab', function (e) {
    $('.package_slider').slick('setPosition');
  });