<?php
defined('BASEPATH') or exit('No direct script access allowed');
$autoload['packages'] = array();
$autoload['libraries'] = array('cart', 'database', 'session', 'form_validation', 'pagination', 'engine');
$autoload['drivers'] = array();
$autoload['helper'] = array('url', 'form', 'hand', 'authority', 'cookie');
$autoload['config'] = array();
$autoload['language'] = array();

$autoload['model'] = array(
	'authentication/User',
	'Common'
);
