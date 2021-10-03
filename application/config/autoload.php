<?php
defined('BASEPATH') or exit('No direct script access allowed');
$autoload['packages'] = array();
$autoload['libraries'] = array('cart', 'database', 'session', 'form_validation', 'pagination', 'engine');
$autoload['drivers'] = array('cache');
$autoload['helper'] = array('url', 'form', 'hand', 'authority', 'cookie','array','date');
$autoload['config'] = array();
$autoload['language'] = array();

$autoload['model'] = array(
	'authentication/User',
	'Common',
	'M_test'
);
