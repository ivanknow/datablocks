<?php
$loader = require __DIR__ . '/vendor/autoload.php';

$app = new \Slim\Slim ();

$app->get ( '/', function () {
	echo json_encode ( [ 
			"api" => "Datablocks",
			"version" => "1" 
	] );
} );

$app->get ( '/project(/)', function () {
	echo json_encode ( [ 
			"TODO" => "PROJECT AS JSON" 
	] );
} );

$app->get ( '/class(/:id)', function ($id) {
	echo json_encode ( [ 
			"TODO" => "CLASS AS JSON:" . $id 
	] );
} );

$app->post ( '/class(/)', function () {
	echo json_encode ( [ 
			"TODO" => "SAVE CLASS:" 
	] );
} );

$app->put ( '/class(/)', function () {
	echo json_encode ( [ 
			"TODO" => "UPDATE CLASS:" 
	] );
} );

$app->delete ( '/class/:id', function () {
	echo json_encode ( [ 
			"TODO" => "REMOVE CLASS:" 
	] );
} );
$app->run ();
?>