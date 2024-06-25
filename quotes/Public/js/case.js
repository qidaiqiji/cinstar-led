// JavaScript Document
$('.menu_btn').on('click',function(){
	if($('.pz_top').hasClass('.on_1')){
		$('.pz_top').removeClass('.on_1')
	}else{
		$('.pz_top').addClass('.on_1')
	}
})



	var i = 999;
	$('.menu .nli').each(function () {
	    if ($(this).hasClass('on')) { i = $(this).index(); }
	})
	$(function () {
	    jQuery(".menu").slide({ type: "menu", titCell: ".nli", targetCell: ".sub", effect: "slideDown", delayTime: 200, triggerTime: 0, returnDefault: true, defaultPlay: true, defaultIndex: i });
	});


	$('.menu_btn').click(function(){
		var iHei=$('#pz_top').height()+$('.pf_menu').height();
		$('.pf_menu_bg').css({'height':$('body').height()-iHei,'top':iHei})
		if($(this).hasClass('on')){
			$('.pf_menu').removeClass('on');
			$(this).removeClass('on');
			$('.pf_menu').find('.l2_ul').slideUp(300);
			$('.pf_menu_bg').fadeOut();
			$('.pz_top').removeClass('on_1')
		}else{
			$(this).addClass('on');
			$('.pf_menu').addClass('on');
			$('.pf_menu_bg').fadeIn();
			$('.pz_top').addClass('on_1')
		}
	})
	$('#navSlide .nli p').on('click',function(){
		if($(this).parent().hasClass('on')){
			$(this).parent().removeClass('on');
			$(this).next().stop().slideUp();
		}else{
			$(this).parent().addClass('on');
			$(this).next().stop().slideDown();
			$(this).parent().siblings().removeClass('on');
			$(this).parent().siblings().find('.l2_ul').stop().slideUp()
		}
	})
	$('#navSlide .nli .l2').on('click',function(){
	if($(this).hasClass('on')){
		$(this).removeClass('on');
		$(this).find('.l3_ul').stop().slideUp();
		}
	else{
		$(this).addClass('on');
		$(this).find('.l3_ul').stop().slideDown();
		$(this).siblings().removeClass('on');
		$(this).siblings().find('.l3_ul').stop().slideUp()
		}
	})


	$('.search_ico img').click(function () {
	    if ($('.search').css('display') == 'none') {
	        $('.search').fadeIn();
	    } else {
	        $('.search').fadeOut();
	    }
})


