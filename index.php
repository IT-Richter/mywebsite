<?php
require __DIR__ . "/init.php";
if(!isset($_GET['page'])){
    $controller = $container->make('coreController');
    header('Location: /mywebsite?page=home');
}else{
    $routes = [
        'home' => [
            'controller' => 'coreController',
            'method' => 'index'
        ],
        'projects' => [
            'controller' => 'coreController',
            'method' => 'show'
        ],
        'guestbook' => [
            'controller' => 'guestbookController',
            'method' => 'show'
        ]
    ];
    if (isset($routes[$_GET['page']])) {
        $route = $routes[$_GET['page']];
        $controller = $container->make($route['controller']);
        $method = $route['method'];
        $controller->$method();
    }else{
        die();
    }

}