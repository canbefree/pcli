<?php
namespace App\Tests\Demo;

use Faker\Generator;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

class FakeTest extends TestCase{
    public function testPhone(){
        $faker = Factory::create('zh_CN');
        echo $faker->phoneNumber;
        exit;
    }
}
