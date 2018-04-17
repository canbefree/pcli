<?php
require __DIR__.'/vendor/autoload.php';

if(!function_exists('env')){
    function env($key , $default=''){
        $config_info = parse_ini_file('.env');
        var_dump($config_info);
    }
}

// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";
require __DIR__.'/system/function.php';


// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/entity"), $isDevMode);
// or if you prefer XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config"), $isDevMode);
// database configuration parameters
$conn = array(
//    'driver' => 'pdo_sqlite',
//    'path' => __DIR__ . '/db.sqlite',
    'driver'   => 'pdo_mysql',
    'host' => env('mariadb'),
    'user'     => 'root',
    'password' => '123456',
    'dbname'   => 'pcli',
    );


// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);


