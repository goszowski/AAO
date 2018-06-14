<?php 

$router->get('/', function() use($blade) {
	return $blade->make('root.show');
});

$router->get('/brief', function() use($blade) {
	return $blade->make('brief.show');
});

$router->get('/oferta', function() use($blade) {
	return $blade->make('oferta.show');
});

$router->get('/portfolio', function() use($blade) {
	return $blade->make('portfolio.index');
});

$router->get('/portfolio/show', function() use($blade) {
	return $blade->make('portfolio.show');
});

$router->get('/studio', function() use($blade) {
	return $blade->make('studio.show');
});
