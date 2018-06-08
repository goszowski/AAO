@extends('_layouts.app')

@section('header-class', 'white-objects')

@section('content')

<div class="portfolio-inner-head">
	<img src="assets/dist/images/demo/slider-1.jpg" alt="head">
</div>

<div class="title-block clearfix text-xs-md-center">
	<div class="inner-block pl-172">
		<p class="title-block_small-title">Foto STUDIO</p>
			<h2 class="title-block_big-title">Kreacja</h2>
	</div>
	<div class="inner-block pr-172">
		<p class="title-block_descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quod facere laboriosam! Porro, fugiat! Aspernatur maxime recusandae neque deserunt quaerat eum animi est, quia enim! Consequuntur quasi ad nam voluptate.</p>
	</div>
</div>

<div class="portfolio-images text-center">
	<img src="assets/dist/images/demo/im1.jpg" alt="">
	<img src="assets/dist/images/demo/im2.jpg" alt="">
	<img src="assets/dist/images/demo/im3.jpg" alt="">
	<img src="assets/dist/images/demo/slider-1.jpg" alt="">
</div>


<div class="image-links portfolio-inner_nav">
	<div class="image-links_line clearfix">
		<div class="inner-block">
			<a href="#" class="inner-block_link portfolio-nav-left">
				<img src="assets/dist/images/demo/slider-1.jpg" alt="ff">
				<div class="inner-block_link__descr">
					<div class="pos-relative">
						<h3 class="inner-block_link__big-title">Nowa galeria nawa</h3>
						<p class="inner-block_link__small-title">Kategoria 2</p>
					</div>
				</div>
			</a>
		</div>
		<div class="inner-block">
			<a href="#" class="inner-block_link portfolio-nav-right">
				<img src="assets/dist/images/demo/i2.png" alt="ff">
				<div class="inner-block_link__descr">
					<div class="pos-relative">
						<h3 class="inner-block_link__big-title">Nowa galeria nawa</h3>
						<p class="inner-block_link__small-title">Kategoria 2</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>




@endsection

@section('page-scripts')
<script>


</script>
@endsection
