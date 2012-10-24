<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'usd' => array(
		'secret_key' => 'YOUR_KEY',
		'publishable_key' => 'YOUR_KEY',
		'client_id' => 'YOUR_KEY',
	),
	'cad' => array(
		'secret_key' => 'YOUR_KEY',
		'publishable_key' => 'YOUR_KEY',
		'client_id' => 'YOUR_KEY',
	),
	'token_uri' => 'https://connect.stripe.com/oauth/token',
	'authorize_uri' => 'https://connect.stripe.com/oauth/authorize',
);
