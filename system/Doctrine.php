<?php
/**
 * Created by PhpStorm.
 * User: 45219
 * Date: 2018/4/18
 * Time: 17:37
 */

namespace App\System;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;

class Doctrine extends Component
{
    private $manager;

    private $host = null;
    private $user = null;
    private $password = null;
    private $dbname = null;

    public function init()
    {
        parent::init();
        $isDevMode = true;

        $config = Setup::createConfiguration($isDevMode);
        $driver = new AnnotationDriver(new AnnotationReader(), [ENTITY_PATH]);

        // registering noop annotation autoloader - allow all annotations by default
        AnnotationRegistry::registerLoader('class_exists');

        $config->setMetadataDriverImpl($driver);
        $conn = array(
            'driver' => 'pdo_mysql',
            'host' => $this->host?: env('MYSQL_HOST'),
            'user' => $this->user?: env('MYSQL_USER'),
            'password' => $this->password?:env('MYSQL_PWD'),
            'dbname' => $this->dbname?:env('MYSQL_DB'),
        );
        $this->manager = EntityManager::create($conn, $config);
    }

    public function getmanager()
    {
        return $this->manager;
    }

}
