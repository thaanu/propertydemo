<?php 
include __DIR__ . '/core/boostrap.php';
$requestUri = $_SERVER['REQUEST_URI'];

// Check if the file exit
$page = "home";
$requestParams = [];
$requestUri = ltrim($requestUri, "/");
$requestUri = strtok($requestUri, '?');

if ( !empty($requestUri) ) {

	$pages = explode("/", $requestUri);
	$page = $pages[0];
	unset($pages[0]);
	$requestParams = $pages;


	// $routes
	if ( array_key_exists($page, $routes) ) {
		$page = $routes[$page];
	}

}
$controllerFile = __DIR__ . "/pages/{$page}Page.php";
if ( ! file_exists($controllerFile) ) {
	$controllerFile = __DIR__ . "/errors/404Page.php";
}
require_once $controllerFile;