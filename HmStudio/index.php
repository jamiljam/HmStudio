<?php
include_once __DIR__ . '/vendor/autoload.php';

use HmStudio\Controller\HomePageController;
use HmStudio\Controller\AcademyController;
use HmStudio\Controller\AproposController;
use HmStudio\Controller\ArticleController;
use HmStudio\Controller\BlogController;
use HmStudio\Controller\ContactController;
use HmStudio\Controller\ServiceController;

$url=$_SERVER['PATH_INFO'] ?? $_SERVER['REQUEST_URI'] ??  '/';


$routes = [
    '/' => [
        'class' => HomePageController::class,
        'method' => 'getHomePage'
    ],
    '/blog' => [
        'class' => BlogController::class,
        'method' => 'getBlog'
    ],
    '/creationArticle' => [
        'class' => ArticleController::class,
        'method' => 'getArticleForm'
    ],
    '/academy' => [
        'class' => AcademyController::class,
        'method' => 'getAcademy'
    ],
    '/apropos' => [
        'class' => AproposController::class,
        'method' => 'getApropos'
    ],
    '/service' => [
        'class' => ServiceController::class,
        'method' => 'getService'
    ],

    '/contact' => [
        'class' => ContactController::class,
        'method' => 'getContact'
    ],

    '/article' => [
        'class' => ArticleController::class,
        'method' => 'showArticle'
    ],
];

foreach ($routes as $key => $route) {

    if ($url === $key) {
        $className = $route['class'];
        $methodName = $route['method'];
        $controller = new $className();
        $controller->$methodName();
        break;

    }
}
