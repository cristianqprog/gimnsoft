$(window).scroll(function() {
        if ($('nav').offset().top > 90) {
            $('nav').addClass('ba');
        } else {
            $('nav').removeClass('ba');
        }
      });
/* animacion textos */
AOS.init({
	duration:4000,
})
$('#inicio').on('click', function(){
	var position = 0;
	$('body,html').animate({
		scrollTop: position +'px'
	},2000);
})

$('#actividades').on('click', function(){
	var position = 570;
	$('body,html').animate({
		scrollTop: position +'px'
	},2000);
})
$('#price').on('click', function(){
	var position = 1130;
	$('body,html').animate({
		scrollTop: position +'px'
	},2000);
})
$('#contac').on('click', function(){
	var position = 1700;
	$('body,html').animate({
		scrollTop: position +'px'
	},2000);
})