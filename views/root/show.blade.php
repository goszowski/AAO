@extends('_layouts.app')

@section('header-class', 'white-objects')

@section('content')

	<ul class="home-slider owl-carousel">

		@for($i=1; $i<=4; $i++)
		<li class="home-slider__item">
			<span class="home-slider__item__title">
				<span>Lorem ipsum dolor {{ $i }}</span>
				Fotografia spałniająca oczekiwania {{ $i }}
			</span>
			<img src="/assets/dist/images/demo/slider-1.jpg" alt="The title of the slide">
		</li>
		@endfor

	</ul>

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
</script>
@endsection
