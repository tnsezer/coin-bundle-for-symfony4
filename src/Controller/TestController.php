<?php
/**
 * Created by PhpStorm.
 * User: Tan
 * Date: 26.02.2018
 * Time: 23:47
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Cassandra;

class TestController extends AbstractController
{
    public function number()
    {
        $cluster   = Cassandra::cluster()
            ->withContactPoints('127.0.0.1')
            ->withPort(9042)
        ->build();
        $session   = $cluster->connect("clients");
    }
}
