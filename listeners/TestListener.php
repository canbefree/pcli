<?php
namespace App\Listeners;
use App\Events\TestEvent;

class TestListener{
    public function onFoo(TestEvent $event){
        //
        echo "do something".PHP_EOL;
    }
}
