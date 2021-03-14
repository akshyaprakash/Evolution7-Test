<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController
{
    /**
     * @Route("/hello-world")
     */
    public function sayHello(){
        return new Response(
            'Hello, World'
        );
    }
}

