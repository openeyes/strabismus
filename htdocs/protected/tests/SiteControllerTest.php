<?php


class SiteControllerTest extends WebTestCase {

	public function testCaptcha() {
	}
	public function testStatic() {
	}
	public function testIndex() {
		$this->open('/');
		$this->assertTextPresent('Welcome to the RCOphth strabismus data collection system');
	}
	public function testError() {
	}
	public function testContact() {
	}
	public function testLoginout() {
		$this->open('/');
		$this->assertTextPresent("Login");
		$this->assertTextNotPresent("Logout");
		$this->open('/logout');
		$this->assertTextPresent("Login");
		$this->assertTextNotPresent("Logou");
	}
}
