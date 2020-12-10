<?php
//hours_test.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class HoursForm extends WebTestCase {

	  function testCorrectData() {
		$this->get(VIRTUAL_PATH . '/login.php');
		$this->assertResponse(200);

        $this->setField("name", "John");
		$this->setField("password", "john123");
		$this->clickSubmit("Show");

		$this->assertResponse(200);
		$this->assertText("Welcome, John");
	}

}
