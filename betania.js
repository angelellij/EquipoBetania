	var w = $(window).width();
	var h = $(window).height();
	
	var si = 1.8*w/1295
	var sm = 8*w/1400
	var smme = 980*w/1295
	var smma = 1928*w/1295

$(document).ready(function(){
	$("#menunav").click(function(){
		$('#aanav').toggleClass('closed')
	});
	
		$('main').click(function(){
		$('#aanav').addClass('closed')
	});
		$('#aanav').click(function(){
		$('#aanav').addClass('closed')
	});
});


if (w > 800){

	$(window).scroll(function(){
		var wScroll = $(this).scrollTop();

		$('#titulos').css({
		'transform': 'translate(0px,'+ wScroll/3 +'%)'
		});

		if(wScroll> $('#mvv').offset().top-400 && wScroll< $('#mvv').offset().top+100) {
		$('#textmvv').css({
		'transform': 'translate(0px,'+(wScroll-1560)/sm +'%)'
		});
		
		}
	});
}
