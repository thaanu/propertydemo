<?php 
include __DIR__ . '/core/boostrap.php';
$requestUri = $_SERVER['REQUEST_URI'];

// Check if the file exit
$page = "home";
if ( !empty($requestUri) ) {
	$page = ltrim($requestUri, "/");
}
$controllerFile = __DIR__ . "/pages/{$page}Page.php";
if ( ! file_exists($controllerFile) ) {
	$controllerFile = __DIR__ . "/errors/404Page.php";
}
require_once $controllerFile;