<?php

use Silex\WebTestCase;
use BookingApp\Application;

class AppTest extends WebTestCase {
	public function createApplication() {
		return new Application();
	}

	public function testIfBookingsPageRenders() {
		$client = $this->createClient();
		$crawler = $client->request('GET', '/bookings');

		$this->assetTrue($client->getRespons()->isOk());
	}
}
