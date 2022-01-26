<?php

$routes->group('articles', ['namespace'=>'\Modules\Articles\Controllers'], function($routes){
        $routes->get('', 'ArticlesController::index');
        $routes->get('(:any)', 'ArticlesController::show');
});