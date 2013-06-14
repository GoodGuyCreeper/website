<?php

namespace Destiny\Action;

use Destiny\ViewModel;
use Destiny\Service\Fantasy\GameService;

class Admin {

	public function execute(array $params, ViewModel $model) {
		$model->title = 'Administration';
		$model->games = GameService::instance ()->getGames ( 10, 0 );
		$model->tracks = GameService::instance ()->getTrackedProgress ( 10, 0 );
		return 'admin';
	}

}
