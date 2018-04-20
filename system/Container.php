<?php
/**
 * Created by PhpStorm.
 * User: 45219
 * Date: 2018/4/18
 * Time: 16:46
 */

namespace App\System;

class Container
{

    static $instance;

    static $components;

    /**
     * Set the globally available instance of the container.
     *
     * @return static
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static;
        }

        return static::$instance;
    }


    public function make($abstact)
    {

        if (isset(self::$components[$abstact])) {
            return self::$components[$abstact];
        }

        $compontents_config = \App\System\Loader::getConfig("component");

        if (empty($compontents_config)) {
            throw new \Exception('no component found ----> ' . $abstact);
        }

        $config = $compontents_config[$abstact];

        $class = new $config['class'];

        foreach ($config as $key => $item) {
            if ($key !== 'class') {
                $class->$key = $item;
            }
        }

        $class->init();

        self::$components[$abstact] = $class;

        return $class;
    }

    public function makeWith($abstact, $paramers)
    {
        if (isset(self::$components[$abstact])) {
            return self::$components[$abstact];
        }

        $compontents_config = \App\System\Loader::getConfig("component");

        if (empty($compontents_config)) {
            throw new \Exception('no component found ----> ' . $abstact);
        }

        $config = $compontents_config[$abstact];

        $config = array_merge_overwrite($config,$paramers);

        $class = new $config['class'];

        foreach ($config as $key => $item) {
            if ($key !== 'class') {
                $class->$key = $item;
            }
        }

        $class->init();

        self::$components[$abstact] = $class;

        return $class;
    }
}