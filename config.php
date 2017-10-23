<?php
require 'vendor/autoload.php';

function pr($array) {
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}

define('ANEXOS', __DIR__ . '/anexos');