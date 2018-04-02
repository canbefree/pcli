<?php
require __DIR__.'/vendor/autoload.php';
use Symfony\Component\Console\Application;
use Symfony\Component\EventDispatcher\EventDispatcher;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;



define("APP_PATH",'.');
define("COMMAND_PATH",APP_PATH."/commands/");
define("CONFIG_PATH",APP_PATH."/config/");



//研究下事件怎么用的
//$dispatcher = new EventDispatcher();

//$dispatcher->addListener('acme.foo.action', [new App\Listeners\TestListener(),'onFoo']);

//$event = new App\Events\TestEvent();

//$dispatcher->dispatch('acme.foo.action',$event);


//研究下 事件订阅者
//
//$subscriber = new \App\Events\TestSubscriber();

//$dispatcher->addSubscriber($subscriber);

//$dispatcher->dispatch('test.foo',$event);

$application = new Application();

$commands = \App\System\Loader::getConfig("command");
foreach ($commands as $command){
    $application->add(new $command());
}

$application->run();
