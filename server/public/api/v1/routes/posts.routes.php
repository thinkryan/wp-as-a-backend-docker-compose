<?php
if (!defined('SH_API_DIR')) {
	exit;
}

$app->get('/posts', function () use ($app) {
	$postsObj = new Models\Posts();
	$posts = $postsObj->getAll();
	json_response($posts);
});