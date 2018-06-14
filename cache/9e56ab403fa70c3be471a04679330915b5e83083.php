<?php $__env->startSection('app'); ?>

<!--
<div id="preloader" class="preloader">
	<div class="loader">
		<div class="loader-logo"></div>
		<div class="loader-line">
			<div class="loader-default"></div>
			<div class="loader-progress"></div>
		</div>
	</div>
</div>

-->

<header class="<?php echo $__env->yieldContent('header-class', 'black-objects'); ?>">
	<a href="/" class="logo">
		<span class="logo-default-state"></span>
		<span class="logo-hover-state"></span>
	</a>

	<button type="button" class="menu-toggler">
		<span class="menu-toggler__default-state"></span>
		<span class="menu-toggler__hover-state"></span>
	</button>

	<div id="navigation">
		<div class="navigation-inner">
			<button type="button" class="btn-transp menu-close">
				<span></span>
			</button>
			<nav class="main-nav">
				<ul>
					<li>
						<a class="active" href="/portfolio">Portfolio</a>
					</li>
					<li>
						<a href="/portfolio">Oferta</a>
					</li>
					<li>
						<a href="/portfolio">Studio</a>
					</li>
					<li>
						<a href="/portfolio">Aktualności</a>
					</li>
					<li>
						<a href="/portfolio">Kontakt</a>
					</li>
				</ul>
			</nav>

			<div class="contact-info">
				<div class="contact-info_top">
					<p>STUDIO - LOREM IPSUDOLOR</p>
					<p>Sikorskiego 23/9</p>
					<p>38-200 Pilzno</p>
				</div>
				<div class="contact-info_bottom">
					<p>T<span>+48 500 200 300</span></p>
					<p>E<span><a href="mailto:biuro@STUDIO.pl">biuro@STUDIO.pl</a></span></p>
				</div>
			</div>
			
			<nav class="footer-nav">
				<ul class="footer-nav_left">
					<li>
						<a href="#">Polityka cookies</a>
					</li>
					<li>
						<a href="#">Digital signage</a>
					</li>
					<li>
						<a href="#">Praca</a>
					</li>
				</ul>

				<ul class="footer-nav_right">
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>


<main>
	<?php echo $__env->yieldContent('content'); ?>
</main>


<footer class="pl-172 pr-172">

	<div class="footer-top-line clearfix">
		<div class="inner-block">
			<div class="contact-info">
				<div class="contact-info_top">
					<p>STUDIO - LOREM IPSUDOLOR</p>
					<p>Sikorskiego 23/9</p>
					<p>38-200 Pilzno</p>
				</div>
				<div class="contact-info_bottom">
					<p>T<span>+48&nbsp;500&nbsp;200&nbsp;300</span></p>
					<p>E<span><a href="mailto:biuro@STUDIO.pl">biuro@STUDIO.pl</a></span></p>
				</div>
			</div>
		</div>
		<div class="inner-block text-right">
			<span id="up" class="has-icon-btn text-uppercase transform-btn white-btn fz10 to-top">TO TOP<img src="/assets/dist/images/arrow_w.svg" alt="d"></span>
		</div>
	</div>
	
	<div class="footer-bottom-line clearfix">
		<div class="inner-block">
			<ul class="footer-nav_left">
					<li>
						<a href="#">Polityka cookies</a>
					</li>
					<li>
						<a href="#">Digital signage</a>
					</li>
					<li>
						<a href="#">Praca</a>
					</li>
				</ul>
		</div>
		<div class="inner-block text-right">
			<ul class="footer-nav_right">
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
				</ul>
		</div>
	</div>


</footer>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.resources', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>