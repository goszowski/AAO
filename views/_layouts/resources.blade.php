<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AAO</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Maitree&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-sass-grid/css/bootstrap-sass-grid.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

	<link rel="stylesheet" href="/assets/dist/css/style.min.css">
</head>
<body>
	@yield('app')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	
	<script>
		$('.menu-toggler').on('click', function(){
			$('#navigation').addClass('open');
			$('body').addClass('navigation-is-open');
			$('html').addClass('ovf-hidd');
			setTimeout(function() {
				$('header').removeClass('white-objects').addClass('black-objects');
			}, 700);
		});

		$('.menu-close').on('click', function(){
			$('#navigation').removeClass('open');
			$('body').removeClass('navigation-is-open');
			$('html').removeClass('ovf-hidd');
			$('header').removeClass('black-objects').addClass('white-objects');
		});
	</script>

	@yield('page-scripts')
</body>
</html>
