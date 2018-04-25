<?php
namespace App\Tests\Demo;

use Faker\Generator;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

class FakeTest extends TestCase{
    public function testPhone()
    {
        $faker = Factory::create('zh_CN');
        $this->assertRegExp('/^[0-9]{11}$/', $faker->phoneNumber);
    }
}
