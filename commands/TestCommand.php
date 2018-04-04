<?php
namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class TestCommand extends Command {
    protected function configure(){
        // ..
        $this->setName("run:test")
            ->setDescription("phpunit test");
    }

    protected function execute(InputInterface $input, OutputInterface $output){
        // ..
        require_once("./vendor/bin/phpunit");
    }

}
