<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team https://www.softlab24.com/contact
 * @copyright 2014-2016 SOFTLAB24 LIMITED
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */

function ossn_input_init() {
		ossn_add_hook('ossn', 'input', 'ossn_input_settings');
}
function ossn_input_settings($hook, $type, $return, $params){
			$input = $return['input'];
			$return['data'] = $_REQUEST[$input];
			return $return;
}
ossn_register_callback('ossn', 'init', 'ossn_input_init');
