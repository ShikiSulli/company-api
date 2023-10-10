<?php

namespace App\Controller;

use App\Repository\CompanyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/homepage', name: 'app_homepage')]
    public function index(CompanyRepository $companyRepository): JsonResponse
    {

    $companies = $companyRepository->findAll();
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'message-1' => 'Welcome0',
            'path' => 'src/Controller/HomepageController.php',
            'companies' => $companies,
        ]);
    }
}
