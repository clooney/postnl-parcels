<?php

include("track.class.php");
$track = new Trackingmore;
$items = array(
    array(
		'tracking_number' => 'RS882612573NL',
		'carrier_code'    => 'postnl-parcels',
		'title'          => 'iphone6',
		'customer_name'   => 'charse chen',
		'customer_email'  => 'chasechen@gmail.com',
		'order_id'      => '8988787987',
		'lang'          => 'en'
	),
	array(
		'tracking_number' => 'RS452612573NL',
		'carrier_code'    => 'postnl-parcels',
		'title'          => 'iphone6s',
		'customer_name'   => 'clooney chen',
		'customer_email'  => 'clooneychen@gmail.com',
		'order_id'      => '898874587',
		'lang'          => 'en'
	),
);
$track = $track->createMultipleTracking($items);
?>