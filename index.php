<?php

require __DIR__ . "/init.php";

if(!isset($_GET['page'])){
    $controller = $container->make('coreController');
    $controller->render('core/index', []);
}else{
    $routes = [
        'projects' => [
            'controller' => 'coreController',
            'method' => 'projects'
        ]
    ];
    if (isset($routes[$_GET['page']])) {
        $route = $routes[$_GET['page']];
        $controller = $container->make($route['controller']);
        $method = $route['method'];
        $controller->$method();
    }else{
        header('Location: /mywebsite');
    }

}