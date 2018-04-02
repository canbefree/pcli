<?php

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;


class DemoCommand extends Command {
    protected function configure(){
        // ..
        $this->setName("demo")
            ->setDescription("test help")
            ->addArgument('a',InputArgument::REQUIRED,'this is argrument about a')
            ->addArgument('b',InputArgument::REQUIRED,'this is argrument about b');
    }

    protected function execute(InputInterface $input, OutputInterface $output){
        // ..
        echo "demo";
        echo $input->getArgument('a'),PHP_EOL;
        echo $input->getArgument('b'),PHP_EOL;
    }
}
