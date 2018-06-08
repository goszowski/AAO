<?php 

$router->get('/', function() use($blade) {
	//return $blade->make('root/show');
	return $blade->make('portfolio/show');
});
