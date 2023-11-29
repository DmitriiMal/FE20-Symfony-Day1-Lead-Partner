<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SandboxController extends AbstractController
{
    #[Route('/sandbox', name: 'app_sandbox')]
    public function index(): Response
    {

        $number1 = random_int(0, 1000);
        $number2 = random_int(0, 1000);
        $arr = array("name" => "Dmitrii-M", "age" => 34);
        $foo4 = [['foo' => 'bar'], ['fooo' => 'barr']];

        return $this->render('sandbox/index.html.twig', [
            'controller_name' => 'SandboxController',
            "varName" => $arr,
            'foo4' => $foo4,
            'randomNumber1' => $number1,
            'randomNumber2' => $number2
        ]);
    }
}
