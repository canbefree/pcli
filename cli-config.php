<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once 'bootstrap.php';

$db = app('db');
$entityManager = $db->manager;


return ConsoleRunner::createHelperSet($entityManager);