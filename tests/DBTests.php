<?php

// http://phpunit.de/manual/current/en/phpunit-book.html
// http://appletree.or.kr/quick_reference_cards/PHP/PHPUnit-Cheat-Sheet.pdf

class DBTests extends PHPUnit_Framework_TestCase {

	protected function setUp() {
		$c = test_get_app_config();
		$this->db = new \MP\Framework\DB(
			$c['db']['host'], $c['db']['user'], $c['db']['password'], $c['db']['database']
		);
	}

	public function testCreateTable() {
		$res = $this->db->queryAll("DROP TABLE IF EXISTS `users`");
		$res = $this->db->queryAll("
				CREATE TABLE `users` (
					`id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
					`email` varchar(255) NOT NULL,
					`password` varchar(255) NOT NULL,
					`data` text NOT NULL,
					PRIMARY KEY (`id`),
					KEY `email` (`email`)
				) ENGINE=InnoDB  DEFAULT CHARSET=latin1;
		");

		var_dump($res);
	}
}
