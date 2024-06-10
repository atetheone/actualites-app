<?php

require 'controllers/ArticleController.php';
require 'controllers/CategorieController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // uri = /actualites-app/
$uri = ltrim($uri, '/actualites-app');
echo $uri;

if ($uri == '/articles' || $uri == '/' || $uri == '') {
    $controller = new ArticleController();
    $controller->index();
} elseif (preg_match('/\/category\/(\d+)/', $uri, $matches)) {
    $controller = new CategoryController();
    $controller->show($matches[1]);
} else {
    echo "404 Not Found";
}

