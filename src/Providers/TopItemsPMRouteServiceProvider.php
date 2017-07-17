<?php

namespace TopItemsPM\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class TopItemsPMRouteServiceProvider extends RouteServiceProvider
{

    public function map(Router $router) {
        $router->get('topitems', 'TopItemsPM\Controllers\ContentController@showTopItems');
    }

}