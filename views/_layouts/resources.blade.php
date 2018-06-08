<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AAO</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Maitree&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-sass-grid/css/bootstrap-sass-grid.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

	<link rel="stylesheet" href="/assets/dist/css/style.min.css">
</head>
<body>
	@yield('app')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	
	<script>

	var color = 0; //white-objects

	$(function(){
		if($('header').hasClass('black-objects')) {
			color = 1;
		}
	});

	$('.menu-toggler').on('click', function(){
		if($('header').hasClass('white-objects')) {
			if($('header').hasClass('scrolled')) {
				$('#navigation').addClass('open');
				$('body').addClass('navigation-is-open');
				$('html').addClass('ovf-hidd');
			}
			else {
				$('#navigation').addClass('open');
				$('body').addClass('navigation-is-open');
				$('html').addClass('ovf-hidd');
				setTimeout(function() {
					$('header').removeClass('white-objects').addClass('black-objects');
				}, 700);
			}
		}
		else {
			if($('header').hasClass('scrolled')) {
				$('#navigation').addClass('open');
				$('body').addClass('navigation-is-open');
				$('html').addClass('ovf-hidd');
			}
			else {
				$('#navigation').addClass('open');
				$('body').addClass('navigation-is-open');
				$('html').addClass('ovf-hidd');
			}
		}

	});

	$('.menu-close').on('click', function(){
		if (color == 0) {
			if($('header').hasClass('scrolled')) {
				$('#navigation').removeClass('open');
				$('body').removeClass('navigation-is-open');
				$('html').removeClass('ovf-hidd');
			}
			else {
				$('#navigation').removeClass('open');
				$('body').removeClass('navigation-is-open');
				$('html').removeClass('ovf-hidd');
				$('header').removeClass('black-objects').addClass('white-objects');
			}
		}
		else {
			if($('header').hasClass('scrolled')) {
				$('#navigation').removeClass('open');
				$('body').removeClass('navigation-is-open');
				$('html').removeClass('ovf-hidd');
			}
			else {
				$('#navigation').removeClass('open');
				$('body').removeClass('navigation-is-open');
				$('html').removeClass('ovf-hidd');
			}
		}

	});

	$(document).ready(function(){
		$('#up').click(function() {
			$('html, body').animate({scrollTop: 0},700);
			return false;
		});

	var header = $("header"); // Меню
	var	header_h = header.height() + 22;
	var scrollPrev = 0 // Предыдущее значение скролла
	
	$(window).scroll(function() {
		var scrolled = $(window).scrollTop(); // Высота скролла в px
		var firstScrollUp = false; // Параметр начала сколла вверх
		var firstScrollDown = false; // Параметр начала сколла вниз
		
		// Если скроллим
		if ( scrolled > 0 ) {
			// Если текущее значение скролла > предыдущего, т.е. скроллим вниз
			if ( scrolled > scrollPrev ) {
				firstScrollUp = false; // Обнуляем параметр начала скролла вверх
				// Если меню видно
				if ( scrolled < header.height() + header.offset().top ) {
					// Если только начали скроллить вниз
					if ( firstScrollDown === false ) {
						var topPosition = header.offset().top; // Фиксируем текущую позицию меню
						header.css({
							"top": topPosition + "px"
						});
						firstScrollDown = true;
					}
					// Позиционируем меню абсолютно
					header.css({
						"position": "absolute"
					});
				// Если меню НЕ видно
			} else {
					// Позиционируем меню фиксированно вне экрана
					header.css({
						"position": "fixed",
						"top": "-" + header_h + "px"
					});
				}
				
			// Если текущее значение скролла < предыдущего, т.е. скроллим вверх
		} else {
				firstScrollDown = false; // Обнуляем параметр начала скролла вниз
				// Если меню не видно
				if ( scrolled > header.offset().top ) {
					// Если только начали скроллить вверх
					if ( firstScrollUp === false ) {
						var topPosition = header.offset().top; // Фиксируем текущую позицию меню
						header.css({
							"top": topPosition + "px"
						});
						if(color == 0) {
							$(header).removeClass('white-objects').addClass('black-objects').addClass('scrolled');
						}
						else {
							$(header).addClass('scrolled');
						}
						firstScrollUp = true;
					}
					// Позиционируем меню абсолютно
					header.css({
						"position": "absolute"
					});
				} else {
					// Убираем все стили
					header.removeAttr("style");
					header.css({
						"background-color": "#fff"
					});
				}
			}
			// Присваеваем текущее значение скролла предыдущему
			scrollPrev = scrolled;
		}
		if(scrolled == 0) {
			header.css({
				"background-color": "transparent"
			});
			if(color == 0) {
				$(header).removeClass('black-objects').removeClass('scrolled').addClass('white-objects');
			} else {
				$(header).removeClass('scrolled');
			}
		}
	});	


});


</script>

@yield('page-scripts')
</body>
</html>
