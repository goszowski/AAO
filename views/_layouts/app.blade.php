@extends('_layouts.resources')

@section('app')

	<header class="@yield('header-class', 'black-objects')">
		<a href="/" class="logo">
			<span class="logo-default-state"></span>
			<span class="logo-hover-state"></span>
		</a>

		<button type="button" class="menu-toggler">
			<span class="menu-toggler__default-state"></span>
			<span class="menu-toggler__hover-state"></span>
		</button>

		<div id="navigation">
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

			<nav class="footer-nav">
				<ul>
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
			</nav>
		</div>
	</header>

	{{-- Page content --}}
	@yield('content')

	{{-- Footer --}}

	{{-- / Footer --}}
@endsection
