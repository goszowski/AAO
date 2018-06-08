@extends('_layouts.app')

@section('header-class', 'white-objects')

@section('content')

<!--Хедер повинен мати клас black-object-->

<div class="title-block title-block_portfolio clearfix text-xs-md-center">
	<div class="inner-block pl-172">
		<p class="title-block_small-title">Foto STUDIO</p>
			<h2 class="title-block_big-title">Kreacja</h2>
	</div>
	<div class="inner-block pr-172">
		<p class="title-block_descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quod facere laboriosam! Porro, fugiat! Aspernatur maxime recusandae neque deserunt quaerat eum animi est, quia enim! Consequuntur quasi ad nam voluptate.</p>
	</div>
</div>

<div class="portfolio-nav pl-172 pr-172">
	<ul>
		<li class="active"><a href="#">Kategoria 1</a></li>
		<li><a href="#">Kategoria 2</a></li>
		<li><a href="#">Kategoria 3</a></li>
		<li><a href="#">Kategoria 4</a></li>
		<li><a href="#">Kategoria 5</a></li>
		<li><a href="#">Kategoria 6</a></li>
	</ul>
</div>

<div class="image-links">
	<div class="image-links_line clearfix">
		<div class="inner-block">
			<a href="#" class="inner-block_link">
				<img src="assets/dist/images/demo/slider-1.jpg" alt="ff">
				<div class="inner-block_link__descr">
					<h3 class="inner-block_link__big-title">Nowa galeria nawa</h3>
					<p class="inner-block_link__small-title">Kategoria 2</p>
				</div>
			</a>
		</div>
		<div class="inner-block">
			<a href="#" class="inner-block_link">
				<img src="assets/dist/images/demo/i2.png" alt="ff">
				<div class="inner-block_link__descr">
					<h3 class="inner-block_link__big-title">Nowa galeria nawa</h3>
					<p class="inner-block_link__small-title">Kategoria 2</p>
				</div>
			</a>
		</div>
	</div>
	<div class="image-links_line clearfix">
		<div class="inner-block">
			<a href="#" class="inner-block_link">
				<img src="assets/dist/images/demo/slider-1.jpg" alt="ff">
				<div class="inner-block_link__descr">
					<h3 class="inner-block_link__big-title">Nowa galeria nawa</h3>
					<p class="inner-block_link__small-title">Kategoria 2</p>
				</div>
			</a>
		</div>
		<div class="inner-block">
			<a href="#" class="inner-block_link">
				<img src="assets/dist/images/demo/i2.png" alt="ff">
				<div class="inner-block_link__descr">
					<h3 class="inner-block_link__big-title">Nowa galeria nawa</h3>
					<p class="inner-block_link__small-title">Kategoria 2</p>
				</div>
			</a>
		</div>
	</div>
	<div class="image-links_line clearfix">
		<div class="inner-block">
			<a href="#" class="inner-block_link">
				<img src="assets/dist/images/demo/slider-1.jpg" alt="ff">
				<div class="inner-block_link__descr">
					<h3 class="inner-block_link__big-title">Nowa galeria nawa</h3>
					<p class="inner-block_link__small-title">Kategoria 2</p>
				</div>
			</a>
		</div>
		<div class="inner-block">
			<a href="#" class="inner-block_link">
				<img src="assets/dist/images/demo/i2.png" alt="ff">
				<div class="inner-block_link__descr">
					<h3 class="inner-block_link__big-title">Nowa galeria nawa</h3>
					<p class="inner-block_link__small-title">Kategoria 2</p>
				</div>
			</a>
		</div>
	</div>
</div>




@endsection

@section('page-scripts')
<script>
	$(function() {
		var homeSliderAutoplayTimeout = 6000;
		var homeSlider = $('.home-slider');
		var homeSliderRunProgress = function() {
			var dot = $('.home-slider .owl-dot.active .progress');
			dot.stop();
			dot.css('width', '0%');
			dot.animate({'width': '100%'}, homeSliderAutoplayTimeout);
		}

		homeSlider.on('initialized.owl.carousel', function(event) {
			setTimeout(function() {
				$('.home-slider .owl-dot').append('<div class="line"></div><div class="progress"></div>');
				homeSliderRunProgress();
			}, 50);
		});

		var homeSlider = homeSlider.owlCarousel({
			items: 1,
			loop: true,
			dots: true,
			autoplay: true,
			autoplayTimeout: homeSliderAutoplayTimeout,
		});

		homeSlider.on('change.owl.carousel', function(event) {
			setTimeout(homeSliderRunProgress, 50);
		});

		
	});

	$(document).ready(function(){
		$('#up').click(function() {
			$('html, body').animate({scrollTop: 0},700);
			return false;
		})

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
						$(header).removeClass('white-objects').addClass('black-objects').addClass('scrolled');
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
			$(header).removeClass('black-objects').removeClass('scrolled').addClass('white-objects');
		}
	});	


	});

</script>
@endsection
