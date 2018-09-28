var w = window.innerWidth;
var h = window.innerHeight;

var si = 1.8*w/1295
var sm = 8*w/1400
var smme = 980*w/1295
var smma = 1928*w/1295

console.log(w)
console.log(h)

$(window).on('click', function(){
		$("header").on("click","img",function(){
		$('#aanav').toggleClass('closed')
	});
})






if (w > 800){

	$(window).scroll(function(){
		var wScroll = $(this).scrollTop();

		$('#titulos').css({
		'transform': 'translate(0px,'+ wScroll/si +'%)'
		});

		console.log(wScroll)

		if(wScroll> $('#quienesp').offset().top && wScroll< $('#servicios').offset().top) {
		$('#mision').css({
		'transform': 'translate(0px,'+(wScroll-1560)/sm +'%)'
		});
		
		$('#vision').css({
		'transform': 'translate(0px,'+(wScroll-1560)/sm +'%)'
		});
		
		$('#valores').css({
		'transform': 'translate(0px,'+(wScroll-1560)/sm +'%)'
		});
		}
	});
}
