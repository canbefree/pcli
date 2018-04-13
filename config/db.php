<?php
return [
    'mysql'=>[
        'driver'   => 'pdo_mysql',
        'user'     => env("MYSQL_USER",'root'),
        'password' => env("MYSQL_PWD",'123456'),
        'dbname'   => 'cli'
    ]
];
