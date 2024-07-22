(function ($) {
  "use strict";

  // Preloader (if the #preloader div exists)
  $(window).on('load', function () {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function () {
        $(this).remove();
      });
    }
  });

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });

  // Initiate the wowjs animation library
  new WOW().init();

  // Header scroll class
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }

  // Smooth scroll for the navigation and links with .scrollto classes
  $('.main-nav a, .mobile-nav a, .scrollto').on('click', function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if (! $('#header').hasClass('header-scrolled')) {
            top_space = top_space - 40;
          }
        }

        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.main-nav, .mobile-nav').length) {
          $('.main-nav .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('.mobile-nav-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.main-nav, .mobile-nav');
  var main_nav_height = $('#header').outerHeight();

  $(window).on('scroll', function () {
    var cur_pos = $(this).scrollTop();
  
    nav_sections.each(function() {
      var top = $(this).offset().top - main_nav_height,
          bottom = top + $(this).outerHeight();
  
      if (cur_pos >= top && cur_pos <= bottom) {
        main_nav.find('li').removeClass('active');
        main_nav.find('a[href="#'+$(this).attr('id')+'"]').parent('li').addClass('active');
      }
    });
  });

  // jQuery counterUp (used in Whu Us section)
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
  });

  // Porfolio isotope and filter
  $(window).on('load', function () {
    var portfolioIsotope = $('.portfolio-container').isotope({
      itemSelector: '.portfolio-item'
    });
    $('#portfolio-flters li').on( 'click', function() {
      $("#portfolio-flters li").removeClass('filter-active');
      $(this).addClass('filter-active');
  
      portfolioIsotope.isotope({ filter: $(this).data('filter') });
    });
  });



  // Clients carousel (uses the Owl Carousel library)
  $(".clients-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: { 0: { items: 2 }, 768: { items: 4 }, 900: { items: 6 }
    }
  });


  //testimonials
  $(function() {
  $('.owl-carousel.testimonial-carousel').owlCarousel({
    nav: true,
    navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
    dots: false,
    items: 2,
    responsive: {
      0: {
        items: 1,
      },
      750: {
        items: 2,
      }
    }
  });
});

//scroll active
$(window).scroll(function() {
    var windscroll = $(window).scrollTop();
    if (windscroll >= 20) {
        // $('nav').addClass('fixed');
        $('body .section').each(function(i) {
          // 
            if ($(this).position().top <= windscroll - -200) {
              // alert('d');
                $('.main-nav li.active').removeClass('active');
                $('.main-nav li').eq(i-1).addClass('active');

            }
        });

    } else {

        $('.main-nav li.active').removeClass('active');
        // $('footer').addClass('active');
    }

}).scroll();



//slider
class InfiniteSlider {
  constructor(animTime = '10000', selector = '.slider', container = '#slider-container') {
    this.slider = document.querySelector(selector)
    this.container = document.querySelector(container)
    this.width = 0
    this.oldWidth = 0
    this.duration = parseInt(animTime)
    this.start = 0
    this.refresh = 0 //0, 1, or 2, as in steps of the animation
    this._prevStop = false
    this._stop = false
    this._oldTimestamp = 0
  }
  
  animate() {
    /* fix for browsers who like to run JS before images are loaded */
    const imgs = Array.prototype.slice.call(this.slider.querySelectorAll('img'))
            .filter(img => {
              return img.naturalWidth === 0
            })
    if (imgs.length > 0) {
      window.requestAnimationFrame(this.animate.bind(this));
      return
    }
    
    /* Add another copy of the slideshow to the end, keep track of original width */
    this.oldWidth = this.slider.offsetWidth
    const sliderText = '<span class="slider-extra">' + this.slider.innerHTML + '</span>'
    this.slider.innerHTML += sliderText

    /* can have content still when we move past original slider */
    this.width = this.slider.offsetWidth
    const minWidth = 2 * screen.width

    /* Add more slideshows if needed to keep a continuous stream of content */
    while (this.width < minWidth) {
      this.slider.innerHTML += sliderText
      this.width = this.slider.width
    }
    this.slider.querySelector('.slider-extra:last-child').classList.add('slider-last')
    
    /* loop animation endlesssly (this is pretty cool) */
    window.requestAnimationFrame(this.controlAnimation.bind(this))
  }
  
  halt() {
    this._stop = true
    this._prevStop = false
  }
  
  go() {
    this._stop = false
    this._prevStop = true
  }
  
  stagnate() {
    this.container.style.overflowX = "scroll"
  }
  
  controlAnimation(timestamp) {
    //console.log('this.stop: ' + this._stop + '\nthis.prevStop: ' + this._prevStop)
    if (this._stop === true) {
      if (this._prevStop === false) {
        this.slider.style.marginLeft = getComputedStyle(this.slider).marginLeft
        this._prevStop = true
        this._oldTimestamp = timestamp
      }
    } else if (this._stop === false && this._prevStop === true) {
      this._prevStop = false
      this.start = this.start + (timestamp - this._oldTimestamp)
    } else {
      //reset animation
      if (this.refresh >= 1) {
        this.start = timestamp
        this.slider.style.marginLeft = 0
        this.refresh = 0
        window.requestAnimationFrame(this.controlAnimation.bind(this))
        return
      }
      if (timestamp - this.start >= this.duration) {
        this.refresh = 1
      }
      
      const perc = ((timestamp - (this.start)) / this.duration) * this.oldWidth
      this.slider.style.marginLeft = (-perc) + 'px'
    }
    window.requestAnimationFrame(this.controlAnimation.bind(this))
    return
  }
  
  getIeWidth() {
    this.slider.style.marginLeft = '-99999px';
  }
  
  ie11Fix() {
    this.slider.querySelector('.slider-last').style.position = 'absolute';
  }
}

function detectIE() {
  var ua = window.navigator.userAgent
  var msie = ua.indexOf('MSIE ')

  if (msie > 0) {
    // IE 10 or older => return version number
    return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10)
  }
  
  var trident = ua.indexOf('Trident/')
  if (trident > 0) {
    // IE 11 => return version number
    var rv = ua.indexOf('rv:')
    return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10)
  }

  var edge = ua.indexOf('Edge/');
  if (edge > 0) {
    // Edge (IE 12+) => return version number
    return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10)
  }

  // other browser
  return false
}


document.addEventListener('DOMContentLoaded', function() {
  const slider = new InfiniteSlider(20000)
  const ie = detectIE()
  
  //Dont animate under IE10, just place the images
  if (ie !== true && ie < 10) {
    slider.stagnate()
    return
  }
  //IE 11 and lower, fix for width *increasing* as more of the slider is shown
  if (ie !== false && ie < 12) { slider.getIeWidth() }
  
  slider.animate()
  document.querySelector('.slider')
    .addEventListener('mouseenter', slider.halt.bind(slider))
  document.querySelector('.slider')
    .addEventListener('mouseleave', slider.go.bind(slider))
  
  if (ie === 11) {
    setTimeout(slider.ie11Fix.bind(slider), 1000)
  }
});

//tab price
$(function() {
  var $tabButtonItem = $('#tab-button li'),
      $tabSelect = $('#tab-select'),
      $tabContents = $('.tab-contents'),
      activeClass = 'is-active';

  $tabButtonItem.first().addClass(activeClass);
  $tabContents.not(':first').hide();

  $tabButtonItem.find('a').on('click', function(e) {
    var target = $(this).attr('href');

    $tabButtonItem.removeClass(activeClass);
    $(this).parent().addClass(activeClass);
    $tabSelect.val(target);
    $tabContents.hide();
    $(target).show();
    e.preventDefault();
  });

  $tabSelect.on('change', function() {
    var target = $(this).val(),
        targetSelectNum = $(this).prop('selectedIndex');

    $tabButtonItem.removeClass(activeClass);
    $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
    $tabContents.hide();
    $(target).show();
  });
});



//header sticky


})(jQuery);

