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

<div class="title-block clearfix text-xs-md-center">
	<div class="inner-block pl-172">
		<p class="title-block_small-title">Foto STUDIO</p>
			<h2 class="title-block_big-title">Kreacja</h2>
	</div>
	<div class="inner-block pr-172">
		<p class="title-block_descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quod facere laboriosam! Porro, fugiat! Aspernatur maxime recusandae neque deserunt quaerat eum animi est, quia enim! Consequuntur quasi ad nam voluptate.</p>
	</div>
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
</div>

<div class="all-portfolio_btn__wrapp">
	<a href="#" class="all-portfolio_btn"><img src="assets/dist/images/arrow_b.svg" alt="arrow"></a>
</div>

<div class="bottom_links-wrapp pl-172 pr-172">
	<p class="title-block_small-title">Nasza kompleksowa oferta</p>
	<h2 class="title-block_big-title">Kompetencje</h2>

	<div class="bottom_links clearfix">
		<div class="inner-block">
			<ul class="links">
				<li class="active"><a href="#">Oferta jeden tez</a></li>
				<li><a href="#">Oferta lorem ipsum</a></li>
				<li><a href="#">Oferta trzy oferta</a></li>
			</ul>
		</div>
		<div class="inner-block">
			<ul class="links">
				<li><a href="#">Oferta jeden tez</a></li>
				<li><a href="#">Oferta lorem ipsum</a></li>
				<li><a href="#">Oferta trzy oferta</a></li>
			</ul>
		</div>
	</div>

</div>

<div class="inner-block_wrapp clearfix pl-172 pr-172">
	<div class="inner-block">
		<p class="title-block_small-title">Co możemy dla ciebie zrobić?</p>
		<h2 class="title-block_big-title fz48">Wypełnij Brief</h2>
	</div>
	<div class="inner-block text-right">
		<a href="#" class="has-icon-btn text-uppercase">WYPEŁNIJ <img src="assets/dist/images/arrow_b.svg" alt="d"></a>
	</div>
</div>

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