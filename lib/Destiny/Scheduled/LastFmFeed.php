<?php

namespace Destiny\Scheduled;

use Destiny\Application;
use Destiny\Config;
use Psr\Log\LoggerInterface;
use Destiny\Service\CommonApiService;

class LastFmFeed {

	public function execute(LoggerInterface $log) {
		$app = Application::instance ();
		$response = CommonApiService::instance ()->getLastFMTracks ()->getResponse ();
		$cache = $app->getMemoryCache ( 'recenttracks' );
		$cache->write ( $response );
	}

}