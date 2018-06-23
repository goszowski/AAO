@extends('_layouts.app')

@section('header-class', 'black-objects')

@section('content')

<!--Хедер повинен мати клас black-object-->

<div data-aos="fade" class="aos title-block clearfix text-xs-md-center">
	<div class="inner-block pl-172">
		<p class="title-block_small-title">napis tekst</p>
		<h2 class="title-block_big-title">Oferta</h2>
	</div>
	<div class="inner-block pr-172">
		<p class="title-block_descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quod facere laboriosam! Porro, fugiat! Aspernatur maxime recusandae neque deserunt quaerat eum animi est, quia enim! Consequuntur quasi ad nam voluptate.</p>
	</div>
</div>


<div data-aos="fade" class="aos title-block clearfix text-xs-md-center reverse-block small-block">
	<div class="inner-block pl-172">
		<h2 class="title-block_big-title fz36">Oferta</h2>
	</div>
	<div class="inner-block pr-172">
		<ul class="oferta-list">
			<li>Jeden Lorem ipsum dolor</li>
			<li>Dwa Sit amet consectetur aliqua</li>
			<li><a href="#">Trzy Adipiscing elit sed</a></li>
			<li><a href="#">CzteryEiusmod tempor incididunt </a></li>
			<li><a href="#">Pięć Ut labore et dolore</a></li>
			<li><a href="#">Sześć Adipiscing elit sed</a></li>
		</ul>
	</div>
</div>


<div data-aos="fade" class="aos studio-inner-block clearfix pl-172 pr-172">
	<img src="assets/dist/images/demo/im4.jpg" alt="d">
	<div class="studio-inner-block_descr">
		<h3 class="inner-block_link__big-title fz36">Nazwa Kolejna</h3>
		<p class="inner-block_link__small-title">PODPIS</p>
		<p class="title-block_descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. laboris nisi ut aliquip ex ea commodo consequat. </p>
	</div>
</div>

<div data-aos="fade" class="aos title-block clearfix text-xs-md-center has-img block-relative img-right">
	<div class="inner-block pl-172">
		<div class="oferta-inner-block_descr">
			<p class="title-block_small-title">napis tekst</p>
			<h2 class="title-block_big-title fz36">Oferta</h2>
			<p class="title-block_descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. laboris nisi ut aliquip ex ea commodo consequat. </p>
		</div>
	</div>
	<div class="inner-block">
		<img src="assets/dist/images/demo/slider-1.jpg" alt="dsa">
	</div>
</div>

<div data-aos="fade" class="aos title-block clearfix text-xs-md-center has-img reverse-block img-left block-relative">
	
	<div class="inner-block pr-172">
		<div class="oferta-inner-block_descr">
			<p class="title-block_small-title">napis tekst</p>
			<h2 class="title-block_big-title fz36">Oferta</h2>
			<p class="title-block_descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. laboris nisi ut aliquip ex ea commodo consequat. </p>
			<p class="title-block_descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. laboris nisi ut aliquip ex ea commodo consequat. </p>
		</div>
	</div>

	<div class="inner-block">
		<img src="assets/dist/images/demo/slider-1.jpg" alt="dsa">
	</div>
</div>

<div data-aos="fade" class="aos studio-inner-block bg-reverse clearfix pl-172 pr-172">
	<img src="assets/dist/images/demo/im4-reverse.jpg" alt="d">
	<div class="studio-inner-block_descr">
		<h3 class="inner-block_link__big-title fz36">Nazwa Kolejna</h3>
		<p class="inner-block_link__small-title">PODPIS</p>
		<p class="title-block_descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. laboris nisi ut aliquip ex ea commodo consequat. </p>
	</div>
</div>

<div data-aos="fade" class="aos title-block clearfix text-xs-md-center has-img block-relative img-right reverse-block">
	<div class="inner-block pl-172">
		<div class="oferta-inner-block_descr">
			<p class="title-block_small-title">napis tekst</p>
			<h2 class="title-block_big-title fz36">Oferta</h2>
			<p class="title-block_descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. laboris nisi ut aliquip ex ea commodo consequat. </p>
		</div>
	</div>
	<div class="inner-block">
		<img src="assets/dist/images/demo/slider-1.jpg" alt="dsa">
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
