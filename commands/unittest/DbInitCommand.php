<?php

namespace App\Commands\UnitTest;

use App\Entity\Product;
use Doctrine\ORM\Tools\Console\Command\SchemaTool\UpdateCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\HelperSet;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class DbInitCommand extends UpdateCommand
{
    protected function configure()
    {
        parent::configure();
        $this->setName("unit:dbinit");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = app('db',['dbname'=>'pcli_test'])->manager;
        $helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
            'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
        ));
        $this->setHelperSet($helperSet);
        parent::execute($input, $output);
    }
}




