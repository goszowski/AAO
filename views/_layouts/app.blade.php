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
	</header>

	{{-- Page content --}}
	@yield('content')

	{{-- Footer --}}

	{{-- / Footer --}}
@endsection
