<?php

namespace BookingApp;

use Silex\Application as SilexApplication;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\TwigServiceProvider;

class Application extends SilexApplication {

	public function __construct(array $values = []) {
		parent::__construct($values);
		
		$this->configureServices();
		$this->createDBTables();
		$this->configureControllers();
	}

	private function configureServices() {

		$this['debug'] = true;

		$this->register(new TwigServiceProvider(), [
			'twig.path' => __DIR__.'/../views',
		]);

		$this->register(new DoctrineServiceProvider(), [
			'db.options' => [
				'driver' => 'pdo_sqlite',
				'path' => __DIR__.'/../database/app.db',
			],
		]);
	}

	private function createDBTables() {
		if (!$this['db']->getSchemaManager()->tableExist('bookings')) {
			$this['db']->executeQuery(
				"CREATE TABLE bookings (
				id INT UNSIGNEED AUTO_INCREMENT PRIMARY KEY,
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
				payingMethod VARCHAR(10) NOT NULL
				);"
			);
		}
	}

	private function configureControllers() {
		$this->get('/bookings/create', function () {
			return $this['twig']->render('base.html.twig');
		});
	}
}
