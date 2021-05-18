$(document).ready(function(){
	$('.hamburgerIcon').click(function(){
		$(this).toggleClass('open');
	});
	$('.hamburgerIcon').click(function(){
		$('.mainNavWrapperMobile').toggleClass('open');
	});
	$('.menu-item-has-children').click(function(e){
		//e.preventDefault();
		e.stopPropagation();
		$(this).find('.sub-menu').slideToggle('fast');
		//$(this).find('.sub-menu').slideToggle('fast');
		if($(window).width() >= 1200){
			$(this).toggleClass('active');
		}
		return false;
	});

	$('.sub-menu a').click(function(e){
		var url = $(this).attr('href');
		window.location.href = url;
	});

	$('body').click(function(){
		$('.sub-menu').slideUp('fast');
		$('.menu-item-has-children').removeClass('active')
	});

	$('.homePartnersWrapper .flexslider').flexslider({
		animation: "slide",
		animationLoop: false,
		itemWidth: 200,
		itemMargin: 20,
		maxItems: 5,
		controlNav: false,
		move: 1
	});

	$('.homeTestimonialsSliderWrapper .flexslider').flexslider({
		animation: "slide",
		controlNav: false,
	});

	$('.aboutPartnershipsWrapper .flexslider').flexslider({
		animation: "slide",
		animationLoop: false,
		itemWidth: 200,
		itemMargin: 20,
		maxItems: 5,
		controlNav: false,
		move: 1
	});

	if($(window).width() < 768){
		$('.singleServiceOurApproachSliderWrapper .flexslider').flexslider({
			animation: "slide",
			controlNav: false,
		});
	}else{
		$('.singleServiceOurApproachBoxes').removeClass('flexslider');
	}

	$('.singleServiceOurApproachBox').each(function(){
		var box = $(this);
		var boxHeight = box.outerHeight();
		
		if(boxHeight == 310){
			//alert(boxHeight);
			box.css('border-radius','7px 7px 0 0')
			box.closest('li').find('.singleServiceOurApproachBoxReadMore').show();
		}
	})

	$('.singleServiceOurApproachBoxReadMore a').click(function(e){
		e.preventDefault();
		var readMore = $(this);
		readMore.closest('li').find('.singleServiceOurApproachBox').toggleClass('singleServiceOurApproachBox--full');
		if(readMore.closest('li').find('.singleServiceOurApproachBox').is('.singleServiceOurApproachBox--full')){
			readMore.html('Read less <i class="fa fa-caret-up" aria-hidden="true"></i>');
		}else{
			
			readMore.html('Read more <i class="fa fa-caret-down" aria-hidden="true"></i>');
		}
		//$(this).closest('.singleServiceOurApproachBox').hasClass('singleServiceOurApproachBox--full').css('background', 'red')
	})
	
	//
	$('.filterDropdown').click(function(e){
		e.preventDefault();
		e.stopPropagation();
		$(this).closest('.blogFilter').find('ul').slideToggle('fast');
	})

	// show more posts
	var count = 0;
	$('.homeBlogArticles article:gt(5)').hide();
	$('.homeBlogArticles article').each(function(){
		count++;
		if(count > 4){
			$('.loadMoreBlogs').show();	
		}
	})
	
	$('.loadMoreBlogs').click(function(e){
		e.preventDefault();
		$('.homeBlogArticles article').show();
		$(this).hide();
	})

	
	
	
});

$(window).scroll(function(){
	var scroll = $(window).scrollTop();
	if($(window).width() >= 1200){
		if(scroll > 100){
			$('header').css('padding', 0 )
			$('.logoHeader').css('width','120px')
		}else{
			$('header').css('padding', 10)
			$('.logoHeader').css('width','auto')
		}
	}
	
})