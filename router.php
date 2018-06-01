<?php 

$router->get('/', function() use($blade) {
	return $blade->make('root/show');
});
