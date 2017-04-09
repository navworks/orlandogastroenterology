// JavaScript Document
var swiper = "";
$(document).ready(function(){
	
	$('.navigation').mainNavigation();
	
	 swiper = new Swiper('.swiper-container',{
		//pagination: '.swiper-pagination',
        //paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30,
		//autoplay: 6000,
		runCallbacksOnInit: true,
        autoplayDisableOnInteraction: false,
        onInit: function(swiper){
        	var item = $('.swiper-wrapper .swiper-slide').eq(swiper.activeIndex);
			$('.banner .swiper-wrapper').find('*[data-animation]').each(function(){
        		$(this).removeClass($(this).data('animation'));
        		$(this).removeClass('animated-visible');
        	});
        	item.find('*[data-animation]').each(function(){
        		$(this).addClass($(this).data('animation') + ' animated-visible');
        	});
        },
        onSlideChangeEnd : function(swiper){
        	var item = $('.swiper-wrapper .swiper-slide').eq(swiper.activeIndex);
			$('.banner .swiper-wrapper').find('*[data-animation]').each(function(){
        		$(this).removeClass($(this).data('animation'));
        		$(this).removeClass('animated-visible');
        	});
        	item.find('*[data-animation]').each(function(){
        		$(this).addClass($(this).data('animation') + ' animated-visible');
        	});
        }
	});

	var teamSwiper = new Swiper('.team-swiper',{
        nextButton: '.team-next',
        prevButton: '.team-prev',
        spaceBetween: 30
	});
	var testimonialSwiper = new Swiper('.testimonial-swiper',{
        nextButton: '.testimonial-next',
        prevButton: '.testimonial-prev',
        spaceBetween: 30,
        slidesPerView: 2,
        breakpoints: {
		    992: {
		      slidesPerView: 1,
		      spaceBetween: 10
		    }
		}
	});


	$('.wp').waypoint(function(direction) {		
		$(this).find('.animate-this').each(function(){
			var addClass = $(this).data('animationtype');
			$(this).addClass('animated '+addClass);
		});
	}, {
		offset: '90%'
	})

	 $(".fancybox").fancybox({ });
	 $(".header__mobile-menu-button").mobileMenu();

	 $("#popUpContact").validate();
	 $("#homeContact").validate();
	 $("#sideForm").validate();
	
	
});




$(window).scroll(function(){
	var scrolled = $(document).scrollTop();
	if(scrolled>25){
		$('.header__top').stop().stop().addClass("moveup");
		$('.header__navigation').stop().addClass("header__sticky-navigation");
	}else{
		$('.header__top').stop().stop().removeClass("moveup");
		$('.header__navigation').stop().removeClass("header__sticky-navigation");
	}
});

$.fn.mainNavigation = function(){
	var navigation = $(this);
	navigation.find('> li').each(function(){
		liEle = $(this);
		if($(this).find('ul').length){
			liEle.find(' > a').append('<i class="icon-angle-down"></i>');
			$(this).find('ul').width($(liEle).width());
		}
	})

	$(navigation.find('>li')).on('mouseenter mouseleave',function(event){
		if(event.type=='mouseenter'){
			if($(this).find('ul').length){
				$(this).find('ul').addClass( "animated fadeIn");
			}else{
				$(navigation.find('>li')).each(function(){
					$(this).find('ul').removeClass( "animated fadeIn");
				});
			}
		}else{
			$(navigation.find('>li')).each(function(){
				$(this).find('ul').removeClass("animated fadeIn");
			});
		}
	})
		
}

$.fn.mobileMenu = function(){
	menuButton = $(this);
	menuButton.on('click',function(){
		if($('.navigation').hasClass('animated')){
			$('.navigation').removeClass('animated slideDown');
			menuButton.removeClass('mobile-menu-opened');
		}else{
			$('.navigation').addClass('animated slideDown');
			menuButton.addClass('mobile-menu-opened');
		}
	});
}