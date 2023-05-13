<?php

use functions\CmConversion;

require_once __DIR__ . '/Application.php';
require_once __DIR__ . '/functions/CmConversion.php';

/**
 * Mainクラスファイルを最初に実行してください
 */
class Main extends Application {

	public function __construct() {
		echo 'Main class loaded' . PHP_EOL;
	}

	public function functionSelect(?bool $error = false) : void {
		if ($error) echo '入力された値が選択肢にない為、再入力を要求します。' . PHP_EOL;
		$answer = $this->questions([
			'1. cm -> inch 変換',
			'9. 終了',
		]);
		match ($answer) {
			'1' => (new CmConversion())->main(),
			'9' => exit,
			default => $this->functionSelect(true),
		};
	}

}

$main = new Main();
$main->functionSelect();