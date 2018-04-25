<?php
namespace App\Controllers;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController{

    public function index(){
        $response = new Response();
        $response->setContent("hello,world,???");
        return $response;
    }
}
