<?php
$GLOBALS['_ta_rp_key'] = '2dde49ecbf6ac3afde475f8ade7f8e85';
$GLOBALS['_ta_reverse_proxy_id'] = '4gk20i';

require 'bootloader_170985c7b7714eeb9e5fce19e6a57400.php';

$options = array();
/*
$options = array(
	'replace' => array(
		'This is the text to find' => 'The new text',
		'This is the text to find 2' => 'The new text 2',
	)
);
*/

$tarp = new TARPLoader($options);

$tarp->excute();
?>