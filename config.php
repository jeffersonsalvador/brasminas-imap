<?php
require 'vendor/autoload.php';

/**
* DEBUGGER
*/
function pr($array) {
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}

define('ANEXOS', __DIR__ . '/anexos');
define('EMAIL', 'webmaster@ineosistemas.com.br');
define('PWD', '1N30-2o1o');