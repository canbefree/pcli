<?php
namespace App\Commands;

use App\Entity\Product;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class ProductSqlCommand extends Command {
    protected function configure(){
        // ..
        $this->setName("sql:product")
            ->setDescription("nothing");
//            ->addArgument('type',InputArgument::REQUIRED,'c create table product  d delete table product');
    }

    protected function execute(InputInterface $input, OutputInterface $output){
        $db = app('db');
        $product = new Product();
        $product->setName('hello');
        $entityManager = $db->manager;
        $entityManager->persist($product);
        $entityManager->flush();

    }

}
