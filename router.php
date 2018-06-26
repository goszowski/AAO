<?php 

$router->get('/krz', function() use($blade) {
	return $blade->make('root.show');
});

$router->get('/krz/brief', function() use($blade) {
	return $blade->make('brief.show');
});

$router->get('/krz/oferta', function() use($blade) {
	return $blade->make('oferta.show');
});

$router->get('/krz/portfolio', function() use($blade) {
	return $blade->make('portfolio.index');
});

$router->get('/krz/portfolio/show', function() use($blade) {
	return $blade->make('portfolio.show');
});

$router->get('/krz/studio', function() use($blade) {
	return $blade->make('studio.show');
});
