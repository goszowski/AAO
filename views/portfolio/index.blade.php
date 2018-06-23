@extends('_layouts.app')

@section('header-class', 'black-objects')

@section('content')


<div data-aos="fade" class="aos title-block title-block_portfolio clearfix text-xs-md-center">
	<div class="inner-block pl-172">
		<p class="title-block_small-title">Foto STUDIO</p>
		<h2 class="title-block_big-title">Kreacja</h2>
	</div>
	<div class="inner-block pr-172">
		<p class="title-block_descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quod facere laboriosam! Porro, fugiat! Aspernatur maxime recusandae neque deserunt quaerat eum animi est, quia enim! Consequuntur quasi ad nam voluptate.</p>
	</div>
</div>

<div class="p-nav-container">
	<div class="header">
			<input class="nav-burger__checkbox hidden-md" type="checkbox" id="burger">
			<label class="nav-burger hidden-md" for="burger">Меню</label>
		<nav class="p-nav portfolio-nav">
			<ul>
				<li class="active"><a href="#" class="nav__item">Kategoria 1</a></li>
				<li><a href="#" class="nav__item">Kategoria 2</a></li>
				<li><a href="#" class="nav__item">Kategoria 3</a></li>
				<li><a href="#" class="nav__item">Kategoria 4</a></li>
				<li><a href="#" class="nav__item">Kategoria 5</a></li>
				<li><a href="#" class="nav__item">Kategoria 6</a></li>
			</ul>
		</nav>
	</div>
</div>

<!--
<div data-aos="fade" data-aos-offset="50" class="aos portfolio-nav pl-172 pr-172">
	<ul>
		<li class="active"><a href="#">Kategoria 1</a></li>
		<li><a href="#">Kategoria 2</a></li>
		<li><a href="#">Kategoria 3</a></li>
		<li><a href="#">Kategoria 4</a></li>
		<li><a href="#">Kategoria 5</a></li>
		<li><a href="#">Kategoria 6</a></li>
	</ul>
</div>
-->
<div  data-aos="fade"  data-aos-offset="50" class="aos image-links">
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
	<div  data-aos="fade" class="aos image-links_line clearfix">
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
	<div data-aos="fade" class="aos image-links_line clearfix">
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
				<img src="assets/dist/images/demo/im3.jpg" alt="ff">
				<div class="inner-block_link__descr">
					<h3 class="inner-block_link__big-title">Nowa galeria nawa</h3>
					<p class="inner-block_link__small-title">Kategoria 2</p>
				</div>
			</a>
		</div>
	</div>
</div>

@include('partials.block-link')


@endsection

@section('page-scripts')
<script>

	$(document).ready(function(){

		AOS.init({
			duration: 1000,
			offset: 10,
		});
	});

</script>
@endsection
