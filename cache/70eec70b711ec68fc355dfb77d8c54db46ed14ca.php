<?php $__env->startSection('header-class', 'white-objects'); ?>

<?php $__env->startSection('content'); ?>

	<ul class="home-slider owl-carousel">

		<?php for($i=1; $i<=4; $i++): ?>
		<li class="home-slider__item">
			<span class="home-slider__item__title">
				<span>Lorem ipsum dolor <?php echo e($i); ?></span>
				Fotografia spałniająca oczekiwania <?php echo e($i); ?>

			</span>
			<img src="/assets/dist/images/demo/slider-1.jpg" alt="The title of the slide">
		</li>
		<?php endfor; ?>

	</ul>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-scripts'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>