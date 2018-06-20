<?php $__env->startSection('header-class', 'white-objects'); ?>

<?php $__env->startSection('content'); ?>

<div class="block-relative">
	<ul class="home-slider owl-carousel">

		<?php for($i=1; $i<=4; $i++): ?>
		<li class="home-slider__item">
			<span class="home-slider__item__title">
				<span class="home-slider__item__title_little">Lorem ipsum dolor <?php echo e($i); ?></span>
				<span class="home-slider__item__title_detail">Fotografia spałniająca oczekiwania</span>
			</span>
			<img src="/assets/dist/images/demo/slider-1.jpg" alt="The title of the slide">
		</li>
		<?php endfor; ?>

	</ul>
	
	<div class="mouse">
		<img src="assets/dist/images/mause_w.svg" alt="mouse">
	</div>
</div>


<div data-aos="fade" data-aos-duration="2000" class="aos title-block clearfix text-xs-md-center">
	<div class="inner-block pl-172">
		<p class="title-block_small-title">Foto STUDIO</p>
			<h2 class="title-block_big-title">Kreacja</h2>
	</div>
	<div class="inner-block pr-172">
		<p class="title-block_descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quod facere laboriosam! Porro, fugiat! Aspernatur maxime recusandae neque deserunt quaerat eum animi est, quia enim! Consequuntur quasi ad nam voluptate.</p>
	</div>
</div>

<div data-aos="fade" class="aos image-links">
	<div class="image-links_line clearfix">
		<div class="inner-block">
			<a href="/portfolio/show" class="inner-block_link portfolio-link">
				<img src="assets/dist/images/demo/slider-1.jpg" alt="ff">
				<div class="inner-block_link__descr">
					<h3 class="inner-block_link__big-title">Nowa galeria nawa</h3>
					<p class="inner-block_link__small-title">Kategoria 2</p>
				</div>
			</a>
			
		</div>
		<div class="inner-block">
			<a href="/portfolio/show" class="inner-block_link portfolio-link">
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
			<a href="/portfolio/show" class="inner-block_link portfolio-link">
				<img src="assets/dist/images/demo/slider-1.jpg" alt="ff">
				<div class="inner-block_link__descr">
					<h3 class="inner-block_link__big-title">Nowa galeria nawa</h3>
					<p class="inner-block_link__small-title">Kategoria 2</p>
				</div>
			</a>
			
		</div>
		<div class="inner-block">
			<a href="/portfolio/show" class="inner-block_link portfolio-link">
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

<div data-aos="fade" class="aos bottom_links-wrapp pl-172 pr-172">
	<p class="title-block_small-title">Nasza kompleksowa oferta</p>
	<h2 class="title-block_big-title">Kompetencje</h2>

	<div class="bottom_links clearfix">
		<div class="inner-block">
			<ul class="links">
				<li class="active"><a href="#" class="bottom-link">Oferta jeden tez</a></li>
				<li><a href="#" class="bottom-link">Oferta lorem ipsum</a></li>
				<li><a href="#" class="bottom-link">Oferta trzy oferta</a></li>
			</ul>
		</div>
		<div class="inner-block">
			<ul class="links">
				<li><a href="#" class="bottom-link">Oferta jeden tez</a></li>
				<li><a href="#" class="bottom-link">Oferta lorem ipsum</a></li>
				<li><a href="#" class="bottom-link">Oferta trzy oferta</a></li>
			</ul>
		</div>
	</div>

</div>

<?php echo $__env->make('partials.block-link', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
			// animateOut: 'slideOutLeft',
			// animateIn: 'slideInRight',
			autoplay: true,
			autoplayTimeout: homeSliderAutoplayTimeout,
			autoplaySpeed: 800,
			navSpeed: 800,
			dotsSpeed: 800,
		});

		homeSlider.on('change.owl.carousel', function(event) {
			setTimeout(homeSliderRunProgress, 50);
			$('.home-slider__item__title').removeClass('animation-start');
		});

		
		// homeSlider.on('changed.owl.carousel', function(event) {
			
		// 	var changeSpeed = 50;

		// 	setTimeout(function() {
		// 		var element = $('.home-slider .owl-item.active');
		// 		$(element).find('.home-slider__item__title').addClass('active');
		// 	}, changeSpeed);
	
			
		// 	setTimeout(function(){
		// 		$(element).find('.home-slider__item__title').removeClass('animation-start').addClass('animation-end');
		// 	},homeSliderAutoplayTimeout);
		// });
		
		
	});

	$(document).ready(function(){

		AOS.init({
			duration: 1000,
			offset: 10,
		});

		$('.bottom-link').hover(function(event){
			//$('.bottom-link').removeClass('after-hidden before-opacity');
			var link = event.target;
			$(this).addClass('link-hover');
		}, function(){
			$(this).removeClass('link-hover');
		});


	});
	

	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>