<?php

// http://phpunit.de/manual/current/en/phpunit-book.html
// http://appletree.or.kr/quick_reference_cards/PHP/PHPUnit-Cheat-Sheet.pdf

class ModelTests extends PHPUnit_Framework_TestCase {
	protected function setUp() {
		$c = test_get_app_config();
		$this->db = new \MP\Framework\DB($c['db']['host'], $c['db']['user'], $c['db']['password'], $c['db']['database']);
	}

	public function testSimpleModel() {

		$model = new \MP\Framework\Model($this->db);

		$model->testField = 1;
		$this->assertEquals($model->testField, 1);

		$model->testField = 2;
		$this->assertEquals($model->testField, 2);

		$this->assertTrue(isset($model->testField));
		$this->assertFalse(isset($model->nonExistField));

		unset($model->testField);
		$this->assertFalse(isset($model->testField));
		var_dump($model->table);
	}
}