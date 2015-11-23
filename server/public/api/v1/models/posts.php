<?php
Namespace Models;
if (!defined('SH_API_DIR')) {
	exit;
}

class Posts {
	function getAll() {
		i_need_wp();
		return get_posts();
	}
}