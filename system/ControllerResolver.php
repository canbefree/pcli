<?php
/**
 * Created by PhpStorm.
 * User: 45219
 * Date: 2018/4/24
 * Time: 12:34
 */

namespace App\System;

use App\Controllers\TestController;
use Symfony\Component\HttpFoundation\Response;

class ControllerResolver extends \Symfony\Component\HttpKernel\Controller\ControllerResolver
{
    public function getController(\Symfony\Component\HttpFoundation\Request $request)
    {
        //根据 route 配置相应的值
        $routes = Loader::getConfig('route');
        $uri = $request->server->get("REQUEST_URI")?:'/';
        $request->attributes->set("_controller", $routes[$uri]);
        return parent::getController($request);
    }
}