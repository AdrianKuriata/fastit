<?php

use Devtemple\Fastit\App\Events\AdminRoutesEvent;

Route::group(['prefix' => 'admin'], function () {
    $routes = event(new AdminRoutesEvent);
    
    foreach ($routes as $route) {
        require_once($route);
    }
});
