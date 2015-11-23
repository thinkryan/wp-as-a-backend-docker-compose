<?php
if (!function_exists('json_response')) {

	function json_response($data, $status = false) {
		$app = \Slim\Slim::getInstance();
		$app->response->headers->set('Content-Type', 'application/json');
		if ($status) {
			$app->response->setStatus($status);
		}
		echo json_encode($data);
	}
}
// A helper function to load WordPress
if (!function_exists('i_need_wp')) {
	function i_need_wp() {
		global $table_prefix;
		require_once ABSPATH . 'wp-settings.php';
	}
}

if (!function_exists('_d')) {
	function _d($what) {
		echo '<pre>';
		print_r($what);
		echo '</pre>';
	}
}
