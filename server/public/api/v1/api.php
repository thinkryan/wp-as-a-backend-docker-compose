<?php
Namespace v1;
// Load all routes
$routes = glob(SH_API_DIR . "v1/routes/*.routes.php");
foreach ($routes as $route) {
	require $route;
}

$models = glob(SH_API_DIR . "v1/models/*.php");
foreach ($models as $model) {
	require $model;
}