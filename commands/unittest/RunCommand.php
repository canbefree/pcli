<?php

namespace App\Commands\UnitTest;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class RunCommand extends Command
{
    protected function configure()
    {
        // ..
        $this->setName("unit:run")
            ->setDescription("phpunit test");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // ..
        system("./vendor/bin/phpunit");
    }

}




