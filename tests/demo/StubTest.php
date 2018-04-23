<?php

namespace App\Tests\Demo;


use App\Events\TestEvent;
use App\Listeners\TestListener;
use Symfony\Component\EventDispatcher\EventDispatcher;

class StubTest extends \PHPUnit\Framework\TestCase
{
    /**
     * 桩
     */
    public function testStub()
    {
        $stub = $this->createMock(\App\Entity\Product::class);
        $stub->method('setName')
            ->willReturn('hello,world');

        $this->assertEquals('hello,world', $stub->setName('hello'));
    }

    /**
     * 仿件对象
     */
    public function testMockObject()
    {
        $observer = $this->getMockBuilder(TestListener::class)
            ->setMethods(['onFoo'])
            ->getMock();

        $observer->expects($this->once())
            ->method('onFoo');

        $dispatcher = new EventDispatcher();
        $dispatcher->addListener('acme.foo.action', [$observer, 'onFoo']);
        $event = new TestEvent();
        $dispatcher->dispatch('acme.foo.action', $event);
    }
}
