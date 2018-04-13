<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once 'bootstrap.php';

// replace with mechanism to retrieve EntityManager in your app
//$entityManager = GetEntityManager();

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// 指定entity文件存放位置
$paths = array("./entity");
// 指定开发模式
$isDevMode = true;

// 设置数据库连接参数
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'host'=>'mariadb',
    'user'     => 'root',
    'password' => '123456',
    'dbname'   => 'pcli',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);


return ConsoleRunner::createHelperSet($entityManager);