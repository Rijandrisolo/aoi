<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FinesController extends AbstractController
{
    #[Route('/fines', name: 'app_fines')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(persistentObject:Product::class);
        $products = $repository->findBy(['type'=>2]);
        return $this->render('fines/fines.twig', [
            'products' => $products,
        ]);
    }
}