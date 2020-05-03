<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	echo "<p style=color:green;'>Dependencias atualizadas com successo!</p>";

});

$app->run();

 ?>