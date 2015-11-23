<?php
Namespace API;
define('SH_API_DIR', dirname(__FILE__) . '/');
require '../../config/config.php';
// Slim framework
require SH_API_DIR . 'lib/Slim/Slim.php';
require SH_API_DIR . 'functions.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();

$app->group('/v1', function () use ($app) {
	require SH_API_DIR . 'v1/api.php';
});

$app->run();