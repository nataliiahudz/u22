$(document).ready(function(){

var lang = $('body').data('lang');

if(lang =='ru') {
	var msgSuccess = '<h3>Спасибо!</h3><p>Ваша заявка отправлена!</p>';
	var msgError = '<h3>Ошибка!</h3> Проблемы с отправкой!<p>Попробуйте другие варианты связи!</p>';
	var msgMissing = '<h3>Ошибка!</h3><p>Не все обязательные поля заполнено!</p>';
} else {
	var msgSuccess = '<h3>Дякуємо!</h3><p>Ваш запит відправлено!</p>';
	var msgError = '<h3>Помилка!</h3> Проблеми з відправкою!<p>Скористайтесь іншими способами зв\'язку!</p>';
	var msgMissing = '<h3>Помилка!</h3><p>Не всі обовязкові поля заповнено!</p>';
}

var tabs = $('#tabs');
$('.characteristic > div', tabs).each(function(i){
	if (i!=0) $(this).hide(0);
});
tabs.on('click', '.radiator a', function(e){
	e.preventDefault();
	var tabId = $(this).attr('href');
	$('.radiator a',tabs).removeClass();
	$(this).addClass('activeA');
	$('.radiator a',tabs).parent().removeClass('active');
	$(this).parent().addClass('active');
	$('.characteristic > div', tabs).hide(0);
	$(tabId).show();
});

$( ".table_show" ).click(function() {
  $(".table_kotel").show(1000);
  $( ".table_show" ).css("display","none");
});

  $(".table_hide").click(function(){
  	$(".table_kotel").hide(1000);
  	 $( ".table_show" ).css("display","block");
  });



// $(function(){
// $('form').validate({
// 	rules: {
// 		name: {
// 			required:true
// 		},
// 		phone: {
// 			required:true,
// 			digits:true
// 		}
// 	},
// 	focusCleanup:true,
// 	focusInvalid: false,
// 	errorPlacement:function(error, element) {
// 		return true;
// 	}
// })
// });

$('input.modal_message').hide();

$('.modal_open').click(function(){
	var form = $(this).data('form');
	if(lang =='ru') {
		$('input.modal_name').attr("placeholder", "Имя");
		$('input.modal_tel').attr("placeholder", "Контактный телефон");
		$('.modal_write').html("Напишите Ваши контакты и наш менеджер Вам позвонит");
		
		if(form == 'call') { var title = 'ЗАКАЗАТЬ ЗВОНОК'; }
		else if(form == 'buy'){ var title = 'КУПИТЬ'; }
		else if(form == 'price'){ var title = 'ПОЛУЧИТЬ ПРАЙС'; }
		else if(form == 'cons'){ var title = 'ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ'; }
	} else {
		$('input.modal_name').attr("placeholder", "Ім'я");
		$('input.modal_tel').attr("placeholder", "Контактний телефон");
		$('.modal_write').html("Напишіть Ваші контакти і наш менеджер Вам зателефонує, щоб уточнити деталі");

		if(form == 'call') { var title = 'ЗАМОВИТИ ДЗВІНОК'; }
		else if(form == 'buy'){ var title = 'ПРИДБАТИ'; }
		else if(form == 'price'){ var title = 'ОТРИМАТИ ПРАЙС'; }
		else if(form == 'cons'){ var title = 'ОТРИМАТИ КОНСУЛЬТАЦІЮ'; }
	}
	$('.modal_head').html(title);
	$('input.modal_submit').val(title);

	// if(form== 'call') {

	// 	if(document.location.href=="http://viadrus-u22.com.ua/index.php?lang=ua" || document.location.href=="http://viadrus-u22.com.ua/"){
	// 		$('.modal_head').html('ЗАМОВИТИ ДЗВІНОК');
	// 		$('.modal_write').html("Напишіть Ваші контакти і наш менеджер Вам зателефонує, щоб уточнити деталі");
	// 		$('input.modal_name').attr("placeholder", "Ім'я");
	// 		$('input.modal_tel').attr("placeholder", "Контактний телефон");
	// 		$('input.modal_submit').val('ЗАМОВИТИ ДЗВІНОК');
	// 	}
	// 	else if(document.location.href=="http://viadrus-u22.com.ua/index.php?lang=ru"){
	// 		$('.modal_head').html('ЗАКАЗАТЬ ЗВОНОК');
	// 		$('.modal_write').html("Напишите Ваши контакты и наш менеджер Вам позвонит");
	// 		$('input.modal_name').attr("placeholder", "Имя");
	// 		$('input.modal_tel').attr("placeholder", "Контактный телефон");
	// 		$('input.modal_submit').val('ЗАКАЗАТЬ ЗВОНОК');
	// 	}

	// }
	// else if(form== 'buy'){

	// 	if(document.location.href=="http://viadrus-u22.com.ua/index.php?lang=ua" || document.location.href=="http://viadrus-u22.com.ua/"){
	// 		$('.modal_head').html('ПРИДБАТИ');
	// 		$('.modal_write').html("Напишіть Ваші контакти і наш менеджер Вам зателефонує, щоб уточнити деталі");
	// 		$('input.modal_name').attr("placeholder", "Ім'я");
	// 		$('input.modal_tel').attr("placeholder", "Контактний телефон");
	// 		$('input.modal_submit').val('ПРИДБАТИ');
	// 	}
	// 	else if(document.location.href=="http://viadrus-u22.com.ua/index.php?lang=ru"){
	// 		$('.modal_head').html('КУПИТЬ');
	// 		$('.modal_write').html("Напишите Ваши контакты и наш менеджер Вам позвонит");
	// 		$('input.modal_name').attr("placeholder", "Имя");
	// 		$('input.modal_tel').attr("placeholder", "Контактный телефон");
	// 		$('input.modal_submit').val('КУПИТЬ');
	// 	}
		
	// }
	// else if(form== 'price'){

	// 	if(document.location.href=="http://viadrus-u22.com.ua/index.php?lang=ua" || document.location.href=="http://viadrus-u22.com.ua/"){
	// 		$('.modal_head').html('ОТРИМАТИ ПРАЙС');
	// 		$('.modal_write').html("Напишіть Ваші контакти і наш менеджер Вам зателефонує, щоб уточнити деталі");
	// 		$('input.modal_name').attr("placeholder", "Ім'я");
	// 		$('input.modal_tel').attr("placeholder", "Контактний телефон");
	// 		$('input.modal_message').show().attr("placeholder", "E-mail");
	// 		$('input.modal_submit').val('ОТРИМАТИ ПРАЙС');
	// 	}
	// 	else if(document.location.href=="http://viadrus-u22.com.ua/index.php?lang=ru"){
	// 		$('.modal_head').html('ПОЛУЧИТЬ ПРАЙС');
	// 		$('.modal_write').html("Напишите Ваши контакты и наш менеджер Вам позвонит");
	// 		$('input.modal_name').attr("placeholder", "Имя");
	// 		$('input.modal_tel').attr("placeholder", "Контактный телефон");
	// 		$('input.modal_message').show().attr("placeholder", "E-mail");
	// 		$('input.modal_submit').val('ПОЛУЧИТЬ ПРАЙС');
	// 	}

	// }
	// else if(form== 'cons'){

	// 	if(document.location.href=="http://viadrus-u22.com.ua/index.php?lang=ua" || document.location.href=="http://viadrus-u22.com.ua/"){
	// 		$('.modal_head').html('ОТРИМАТИ КОНСУЛЬТАЦІЮ');
	// 		$('.modal_write').html("Напишіть Ваші контакти і наш менеджер Вам зателефонує, щоб уточнити деталі");
	// 		$('input.modal_name').attr("placeholder", "Ім'я");
	// 		$('input.modal_tel').attr("placeholder", "Контактний телефон");
	// 		$('input.modal_submit').val('ОТРИМАТИ КОНСУЛЬТАЦІЮ');
	// 	}
	// 	else if(document.location.href=="http://viadrus-u22.com.ua/index.php?lang=ru"){
	// 		$('.modal_head').html('ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ');
	// 		$('.modal_write').html("Напишите Ваши контакты и наш менеджер Вам позвонит");
	// 		$('input.modal_name').attr("placeholder", "Имя");
	// 		$('input.modal_tel').attr("placeholder", "Контактный телефон");
	// 		$('input.modal_submit').val('ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ');
	// 	}

	// }
	$('.modal').show();
});

$('.modal_close').click(function(){
	$('.modal').hide();
	$('input.modal_message').hide();
});

$('form.ajf').on('submit', function(e) {
	e.preventDefault();
	var infomsg = $('.info-message');

	var name = $(this).find('#name').val();
	var phone = $(this).find('#phone').val();
	var message = $(this).find('#message').val();
	var type = $(this).find('input[type="submit"]').val();


	if(phone == '') {
		infomsg.addClass('er').html(msgMissing);
		setTimeout (function() {
			infomsg.removeClass('er');
		}, 1500);
	} else {
		$.ajax({
			type:'POST',
			url: '/modules/ord/sender.php?c=ajax',
			data: { name: name, phone: phone, type: type, message: message },
			dataType: "json",
			beforeSend: function(jqXHR, settings) {			
					$('.modal').css({ "opacity": "0.3" });
				},
			success: function (response) {
				$('.modal').css({ "opacity": "1" });
				if (response.status == 'error') {
					 infomsg.addClass('er').html(msgError);
					 console.log(response);
					 setTimeout (function() {
						infomsg.removeClass('er').html('');
					 }, 1500);
				} else if (response.status == 'success') {
					infomsg.addClass('ok').html(msgSuccess);
					console.log(response);
					setTimeout (function() {
						infomsg.removeClass('ok').html('');
					}, 1500);
					$('.modal').hide();
				}           
			},
			error: function (response) {
				$('.modal').css({ "opacity": "1" });
				infomsg.addClass('er').html(msgError);
				console.log(response);
				setTimeout (function() {
					infomsg.removeClass('er').html('');
				}, 1500);
			}
		});
	}
});

$('a.scrollto').click(function(e) {
	e.preventDefault();
	var sectId = $(this).attr('href');
	$('html, body').animate({
		scrollTop: $(sectId).offset().top
	}, 700);
});

$(window).scroll(function() {    
	var scroll = $(window).scrollTop();
	if (scroll >= 500) {
		$('#click').addClass('click_rotate');
	} else{
		$('#click').removeClass('click_rotate');
}
});

$(window).scroll(function() {    
	var scroll = $(window).scrollTop();
	if (scroll >= 800) {
		$('.click_up').addClass('nock');
	} else{
		$('.click_up').removeClass('nock')
	}
});


// $('#form_offer').submit(function() {
// 	$.ajax({
// 		type: 'POST',
// 		url:  'mailOffer.php',
// 		data: $(this).serialize()
// 	}).done(function() {
// 		$(this).find('input').val('');
// 		alert('Дякую за заявку. Ми скоро з Вами сконтактуємо!');
// 		$('#form_offer').trigger('reset');
// 	});
// 	return false;
// });

});


function initMap() {
	var map = new google.maps.Map(document.getElementById('map'), {
	  zoom: 6,
	  scrollwheel: false,
	  center: {lat: 49.857232, lng: 23.986978}
	});

	setMarkers(map);
  }

  var cities = [
	['Lvov', 49.857232, 23.986978, 1],
	['Kiev', 50.467385, 30.458338, 2],
	['Dnipro', 48.452799, 35.004802, 3],
	['Vinnitsa', 49.221180, 28.439228, 4]
  ];

function setMarkers(map) {
var image = {
  url: '../img/marker.png',
  size: new google.maps.Size(20, 32),
  origin: new google.maps.Point(0, 0),
  anchor: new google.maps.Point(0, 32)
};

var shape = {
  coords: [1, 1, 1, 20, 18, 20, 18, 1],
  type: 'poly'
};
for (var i = 0; i < cities.length; i++) {
  var city = cities[i];
  var marker = new google.maps.Marker({
	position: {lat: city[1], lng: city[2]},
	map: map,
	// icon: image,
	shape: shape,
	title: city[0],
	zIndex: city[3]
  });
}
}