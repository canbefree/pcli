<?php
/**
 * Created by PhpStorm.
 * User: 45219
 * Date: 2018/4/18
 * Time: 18:13
 */


namespace App\System;


abstract class Component{

    public function init(){

    }

    /**
     *
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        $getter = 'get'.$name;

        if(method_exists($this,$getter)){
            return $this->$getter();
        }
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

}