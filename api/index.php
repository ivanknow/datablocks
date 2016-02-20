<?php
$loader = require __DIR__ . '/vendor/autoload.php';


$app = new \Slim\Slim ();


$app->get ( '/', function () {
	echo json_encode ( [ 
			"api" => "Datablocks",
			"version" => "1" 
	] );
} );

