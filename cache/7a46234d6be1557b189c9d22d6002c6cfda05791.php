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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

	<link rel="stylesheet" href="/assets/dist/css/style.min.css">
</head>
<body>
	<?php echo $__env->yieldContent('app'); ?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	
	<script>
		$('.menu-toggler').on('click', function(){
			console.log('f');
			$('#navigation').addClass('open');
			$('body').addClass('navigation-is-open');
		});

		$('.menu-close').on('click', function(){
			console.log('f');
			$('#navigation').removeClass('open');
			$('body').removeClass('navigation-is-open');
		});
	</script>

	<?php echo $__env->yieldContent('page-scripts'); ?>
</body>
</html>
