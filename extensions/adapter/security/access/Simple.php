<?php

namespace li3_access\extensions\adapter\security\access;

class Simple extends \lithium\core\ObjectDeprecated {

	/**
	 * The `Simple` adapter will just check for user data.
	 * It doesn't care about anything else.
	 *
	 * @param mixed $user The user data array that holds all necessary information about
	 *        the user requesting access. Or `false` (because `Auth::check()` can return `false`).
	 * @param mixed $params The Lithium `Request` object, or an array with at least
	 *        'request', and 'params'
	 * @param array $options An array of additional options.
	 * @return Array An empty array if access is allowed and an array with reasons for denial
	 *         if denied.
	 */
	public function check($user, $params, array $options = array()) {
		return !$user ? $options : array();
	}
}

?>
