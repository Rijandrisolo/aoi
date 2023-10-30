<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrecieusesController extends AbstractController
{
    #[Route('/precieuses', name: 'app_precieuses')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(persistentObject:Product::class);
        $products = $repository->findBy(['type'=>1]);
     
       
        return $this->render('precieuses/precieuses.twig', [
            'products' => $products,
        ]);
    }
}