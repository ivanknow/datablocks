<?php
$loader = require __DIR__ . '/vendor/autoload.php';

use Datablocks\resource\ProjectResource;
use Datablocks\resource\ClassResource;

$app = new \Slim\Slim ();

$app->get ( '/', function () {
	echo json_encode ( [ 
			"api" => "Datablocks",
			"version" => "1" 
	] );
} );

/*
 * Recursos
 */

$projectResource = new ProjectResource ();
$classResource = new ClassResource ();

$app->get ( '/project(/(:id)(/))', function ($id = null) use($projectResource) {
	
	echo json_encode ( $projectResource->get ( $id ) );
} );

$app->post ( '/project(/)', function () use($projectResource) {
	$app = \Slim\Slim::getInstance ();
	$json = json_decode ( $app->request ()->getBody () );
	echo json_encode ( $projectResource->post ( $json ) );
} );

$app->get ( '/class(/(:id)(/))', function ($id = null) use($classResource) {
	
	echo json_encode ( $classResource->get ( $id ) );
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