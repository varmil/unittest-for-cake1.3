<?php
// controllers\articles_controller.php

class ArticlesController extends AppController {
   var $name = 'Articles';
   // public $uses = array('Hogehoge');

	public function plus($a, $b) {
		return $a + $b;
	}

	public function read_logic_hogehoge() {
		// $hogehoge = new Hogehoge();  // cakephp1.3では未対応の書き方
		$hogehoge = ClassRegistry::init('Hogehoge');
		$var = $hogehoge->get_hoge();

		return $var;
	}
}