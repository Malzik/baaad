<?php
    use Cake\Core\Plugin;
    use Cake\Routing\RouteBuilder;
    use Cake\Routing\Router;
    use Cake\Routing\Route\DashedRoute;

    Router::defaultRouteClass(DashedRoute::class);

    Router::scope('/', function (RouteBuilder $routes) {
        
        $routes->connect('/', ['controller' => 'Home', 'action' => 'index']);

        /* Login routes */
        $routes->connect('/login', ['controller' => 'Users', 'action' => 'login']);

        /* Register routes */
        $routes->connect('/register', ['controller' => 'Users', 'action' => 'register']);

        $routes->fallbacks(DashedRoute::class);
    });
?>