<?php

	require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__.'/../src/Coins.php';

	$app = new Silex\Application();

	$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

	$app->get('/', function() use ($app) {
		return $app['twig']->render("index.html.twig");
	});

	$app->get('/results', function() use ($app) {
		$newCoins = new Coins($_GET['change']);

		$newCoins->yourChange();


		return $app['twig']->render("index.html.twig", array('coins' => $newCoins));
	});

	return $app;

?>
