<?php

error_reporting(E_ALL & ~E_NOTICE);
//ini_set('display_errors', 1);


require_once 'lib/Slim/Slim.php';
require_once 'lib/Slim/Middleware.php';
require_once 'lib/Slim/View.php';
require_once 'base_view.php';
include_once 'helpers/logger.php';

\Slim\Slim::registerAutoloader();

$baseView = new BaseView();

$app = new \Slim\Slim ( array (
		'debug' => true,
		'templates.path' => '.',
		'view' => $baseView
)
);

// specify the a default layout
$baseView::set_layout('layout.php');

//routes
$app->get('/', function () use ($app) {

	$app->render('frontend/views/index.php');
});

$app->get('/About', function () use ($app) {

	$app->render('frontend/views/About.php');
});

$app->get('/Events', function () use ($app) {

	$app->render('frontend/views/Events.php');
});

$app->get('/Resources', function () use ($app) {

	$app->render('frontend/views/Resources.php');
});

$app->get('/Contact', function () use ($app) {

	$app->render('frontend/views/Contact.php');
});

$app->post('/Contact', function () use ($app) {

	$app->render('frontend/views/Contact.php');
});

$app->run();


?>

