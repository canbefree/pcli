<?php
/**
 * Created by PhpStorm.
 * User: 45219
 * Date: 2018/4/25
 * Time: 15:22
 */

namespace App\System;


class Pipeline{

    public function __construct(Container $container = null)
    {
        $this->container = $container;
    }

    public function send(){
    }

    public function via(){
    }

    public function then(){
    }

    public function through(){
    }

}