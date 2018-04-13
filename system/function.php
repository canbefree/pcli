<?php
function env($key , $default=''){
    $config_info = parse_ini_file('.env');
    var_dump($config_info);
}
