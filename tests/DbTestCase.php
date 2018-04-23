<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

use PHPUnit\DbUnit\TestCaseTrait;

abstract class DbTestCase extends TestCase
{
    use TestCaseTrait;

    private $conn = null;

    public function getConnection()
    {
        if(null === $this->conn){
            $db = app("db", ['dbname' =>$GLOBALS['MYSQL_TEST_DB']]);
            $conn = $db->manager->getConnection()->getParams();
            $Link = new \PDO("mysql:host={$conn['host']};dbname={$conn['dbname']}", $conn['user'],
                $conn['password']);
            $this->conn = $this->createDefaultDBConnection($Link);
        }
        return $this->conn;
    }



}