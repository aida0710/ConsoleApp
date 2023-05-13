<?php

namespace functions;

use Application;

require_once __DIR__ . '/../Application.php';
require_once __DIR__ . '/IFunction.php';

class Template extends Application implements IFunction {

	public function execute() : void {
		$this->question('test');
		$this->execute();
	}

}