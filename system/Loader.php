<?php
namespace App\System;

class Loader{
    public static function getConfig($config,$ext='.php'){
        return include(CONFIG_PATH.$config.$ext);
    }
}
