<?php 

$router->get('/', function() use($blade) {
	//return $blade->make('root/show');
	//return $blade->make('portfolio/show');
	//return $blade->make('portfolio-index/show');
	//return $blade->make('studio/show');
	return $blade->make('oferta/show');
});
