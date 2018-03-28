<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Symfony\Component\EventDispatcher\EventDispatcher;

//研究下事件怎么用的
$dispatcher = new EventDispatcher();

$dispatcher->addListener('acme.foo.action', [new App\Listeners\TestListener(),'onFoo']);

$event = new App\Events\TestEvent();

$dispatcher->dispatch('acme.foo.action',$event);

$application = new Application();

// ... register commands
$testCommand  =new  \App\Commands\TestCommand();

$application->add($testCommand);

$application->run();


