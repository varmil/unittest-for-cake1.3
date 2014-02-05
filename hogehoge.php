<?php
// models\logic\hogehoge.php (defaultで階層分けに対応している模様)

class Hogehoge extends AppModel {
    var $name = 'Hogehoge';
	var $useTable = false;

	const HOGE_VAR = 777;

	protected $hoge = 'aaa';

	public function get_hoge() {
		return $this->hoge;
	}

}