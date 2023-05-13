<?php

namespace functions;

use Application;

require_once __DIR__ . '/../Application.php';

class CmConversion extends Application {

	public function main() : void {
		$this->message('cmをinchに変換します。');
		$this->message('変換形式 -> "Size: approx. width x length x height cm (width x length x height in)"');
		$width = $this->question('widthを入力してください。');
		$length = $this->question('lengthを入力してください。');
		$height = $this->question('heightを入力してください。');
		$width_inch = (floor($width * 0.39370 * 10) / 10);
		$length_inch = (floor($length * 0.39370 * 10) / 10);
		$height_inch = (floor($height * 0.39370 * 10) / 10);
		$this->message('変換が完了しました。終了したい場合はプログラムを強制停止してください。');
		$this->message('Size: approx. ' . $width . ' x ' . $length . ' x ' . $height . ' cm (' . $width_inch . ' x ' . $length_inch . ' x ' . $height_inch . ' in)');
		$this->message('');
		$this->main();
	}

}