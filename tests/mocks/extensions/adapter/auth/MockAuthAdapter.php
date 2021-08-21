<?php

namespace li3_access\tests\mocks\extensions\adapter\auth;

class MockAuthAdapter extends \lithium\core\ObjectDeprecated {

	public function check($credentials, array $options = array()) {
		$granted = false;
		if (isset($options['success']) && !empty($credentials->data)) {
			$granted = $credentials->data;
		}
		return  $granted;
	}

	public function set($data) {
		return $data;
	}

	public function clear(array $options = array()) {

	}
}

?>