$(document).ready(function(){

	$('.modal_open').click(function(){
	var form = $(this).data('form');
	console.log(form);
	if(form== 'call') {
		$('.modalCall').show();
	}
	else if(form== 'buy'){
		$('.modalBuy').show();
	}
	else if(form== 'price'){
		$('.modalPrice').show();
	}
	else if(form== 'consultation'){
		$('.modalConsultation').show();
	}
	});


	$('.modal_close').click(function(){
		$('.modal').hide();

	});

	$('.modal_submit').click(function(){
		$('.thancks').show().hide(2000);
	});












});
