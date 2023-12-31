<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Hello World!'
        ]);
    }
}
