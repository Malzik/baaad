<?php
    use Cake\Core\Plugin;
    use Cake\Routing\RouteBuilder;
    use Cake\Routing\Router;
    use Cake\Routing\Route\DashedRoute;

    Router::defaultRouteClass(DashedRoute::class);

    Router::scope('/', function (RouteBuilder $routes) {

        $routes->connect('/', ['controller' => 'Offres', 'action' => 'displayOffres']);

        /* Login routes */
        $routes->connect('/login', ['controller' => 'Users', 'action' => 'login']);

        /* Register routes */
        $routes->connect('/register', ['controller' => 'Users', 'action' => 'register']);

        $routes->connect('/logout', ['controller' => 'Users', 'action' => 'logout']);

        $routes->fallbacks(DashedRoute::class);
    });
?>