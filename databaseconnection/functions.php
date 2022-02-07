<?php 
require_once __DIR__.'/Query Bilder/init.php';

function url($url=''){
	if ($url == '') {
		return BASE_URL;
	}
	return BASE_URL.$url;
}
// request post function
function post($key = ''){
	if ($key == '') {
		return $_POST;
	}
	return $_POST[$key];
}

// request get function
function get($key = ''){
	if ($key == '') {
		return $_GET;
	}
	return $_GET[$key];
}


 ?>