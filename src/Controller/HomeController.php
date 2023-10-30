<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Stone;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**Home controller
 * 
 * Affiche la page home de l'appli
 * qui sert à l'appel de la page home/home.twig
 * $doctrine : appel ManagerRegistry
 * $repository : requête getRepository
 * $tops : liste des produits placés en top produits
 * 
 */

class HomeController extends AbstractController
{
    private $entityManager;
   
     
    #[Route('/', name: 'home')]
    public function index(ManagerRegistry $doctrine): Response
         
    {
       $repository = $doctrine->getRepository(persistentObject:Product::class);
       $tops = $repository->findBy(['top' =>1]);
       
                         
        return $this->render('home/home.twig', [
            'tops' => $tops,
           
            
        ]);
    }
}