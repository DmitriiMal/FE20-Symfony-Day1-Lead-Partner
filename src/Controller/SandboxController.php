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

        $arr = array("name" => "Dmitrii-M", "age" => 34);

        return $this->render('sandbox/index.html.twig', [
            'controller_name' => 'SandboxController',
            "varName" => $arr
        ]);
    }
}
