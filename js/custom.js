

jQuery(function() {
	jQuery('#header .topheader .searchform input[type="text"]').val('');
	jQuery('#header .topheader .searchform #searchsubmit').click(function(e) {		
		var $thislenght = jQuery('#header .topheader .searchform input[type="text"]').val();
		if($thislenght.length==0){
			e.preventDefault();
			jQuery('#header .topheader .searchform input[type="text"]').focus();
       		jQuery('#header .topheader .searchform').toggleClass('open');
		}
    });
	
	jQuery(document).click(function(event) { 
		if(!jQuery(event.target).closest('#header .topheader .searchform').length) {
			if(jQuery('#header .topheader .searchform').hasClass("open")) {
				jQuery('#header .topheader .searchform').removeClass('open');
			}
		}        
	})
	
	jQuery(".home-slider").slick({
		arrows: true,
		dots: false,
		speed: 700,		
	});
	
	jQuery(".video-slider").slick({
		arrows: false,
		dots: false,
		speed: 700,	
		slidesToShow: 3,
		slidesToScroll: 1,	
		 responsive: [
			{
			  breakpoint: 767,
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
	
	var menuclone = jQuery('#header .topheader .menu-primary-menu-container ul li').clone();
	
	jQuery('.video-bar .video-item .play-btn').click(function(e) {
        e.preventDefault();
		var $this  = jQuery(this).attr('data-src');
		setTimeout(function(){
			jQuery('.fancybox-slider').find($this).find('video').trigger('play');	
		},500);
		
    });
	
	jQuery(document).on('afterClose.fb', function( e, instance, slide ) {			 
		jQuery('.news-video video').trigger('pause');
	});	
	
	jQuery('nav#menu').mmenu({		
		clone: false,
		offCanvas: {
			position: "right",
		 }
	});
	
	jQuery('#mm-menu #mm-menu-secondary-menu li:first-child').before(menuclone);
	if (jQuery('#back-to-top').length) {
		var scrollTrigger = 100, // px
			backToTop = function () {
				var scrollTop = jQuery(window).scrollTop();
				if (scrollTop > scrollTrigger) {
					jQuery('#back-to-top').addClass('show');
				} else {
					jQuery('#back-to-top').removeClass('show');
				}
			};
		backToTop();
		jQuery(window).on('scroll', function () {
			backToTop();
		});
		jQuery('#back-to-top').on('click', function (e) {
			e.preventDefault();
			jQuery('html,body').animate({
				scrollTop: 0
			}, 500);
		});
	}

});
