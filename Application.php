<?php

class Application {

	/**
	 * 質問を表示して、入力された値を返す
	 *
	 * @param string $text
	 * @return string
	 */
	protected function question(string $text) : string {
		echo $text . PHP_EOL;
		return trim(fgets(STDIN));
	}

	/**
	 * 複数の質問をまとめて表示する
	 *
	 * @param array $arrayText
	 * @return string
	 */
	protected function questions(array $arrayText) : string {
		foreach ($arrayText as $text) {
			echo $text . PHP_EOL;
		}
		return trim(fgets(STDIN));
	}

	/**
	 * ただメッセージを表示するだけ
	 *
	 * @param string $text
	 * @return void
	 */
	protected function message(string $text) : void {
		echo $text . PHP_EOL;
	}

}