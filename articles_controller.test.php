<?php
// app\tests\cases\controllers\articles_controller.test.php
// App::import  How to Use: http://yasigani-ni.com/cakephp/cakephp%E3%80%80%E3%80%8Eappimport%E3%80%8F%E3%81%AB%E3%81%A4%E3%81%84%E3%81%A6/

App::import('Controller', 'Articles');

class ArticlesControllerTest extends CakeTestCase {

	/** obj ArticlesController $Article */
	private $Article;
	public function setUp() {
		$this->Article = new ArticlesController();
	}

	public function testPlusSimple() {
		$ideal = 4;
		$actual = $this->Article->plus(2, 2);
		$this->assertEqual($ideal, $actual);
	}

	public function testLogicHogehoge() {
		$ideal = 'aaa';
		$actual = $this->Article->read_logic_hogehoge();
		$this->assertEqual($ideal, $actual);
	}
}