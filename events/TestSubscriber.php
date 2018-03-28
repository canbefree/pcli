<?php
namespace App\Events;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use App\Events\TestEvent;

class TestSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            'test.foo' => 'onTest',
        );
    }


    public function onTest(TestEvent $event)
    {
        // ...
        echo "hello,world";
    }
}
