<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Symfony\Component\EventDispatcher\EventDispatcher;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

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

//$application = new Application();
//
//
//// ... register commands
//$testCommand  =new  \App\Commands\TestCommand();
//
//$application->add($testCommand);
//
//$application->run();

(new Application('commands', '1.0.0'))
  ->register('commands')
      ->addArgument('foo', InputArgument::OPTIONAL, 'The directory')
      ->addOption('bar', null, InputOption::VALUE_REQUIRED)
      ->setCode(function(InputInterface $input, OutputInterface $output) {
          // output arguments and options
      })
  ->getApplication()
  ->setDefaultCommand('commands', true) // Single command application
  ->run();
