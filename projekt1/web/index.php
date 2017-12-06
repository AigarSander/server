<?php

// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), [
	'twig.path' => __DIR__.'/../views',
]);

$app->register(new Silex\Provider\DoctrineServiceProvider(), [
	'db.options' => [
		'driver' => 'pdo_sqlite',
		'path' => '__DIR__.'/app.db',
	],
]);

if (!$app['db']->getSchemaManager()->tableExist('bookings')) {
	$app['db']->executeQuery(
		"CREATE TABLE bookings (
			id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			firstName VARCHAR(40) NOT NULL,
			lastName VARCHAR(40) NOT NULL,
			phone VARCHAR(10) NOT NULL,
			email VARCHAR(20) DEFAULT NULL,
			birthday DATE NOT NULL,
			startDate DATE NOT NULL,
			endDate DATE NOT NULL,
			arrivalTime TIME DEFAULT NULL,
			additionalInformation TEXT,
			nrOfPeople INT NOT NULL,
			payingMethod VARCHAR(10) NOAT NULL
		);"
	);
}

$app->get('/bookings/create', function() use ($app) {
	return $app['twig']->render('base.html.twig');
});

$app->run();
