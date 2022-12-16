<?php

namespace App\Controller;

use App\Entity\Categorie;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    /**
     * @Route("/menu", name="app_menu")
     */
    public function _menu(ManagerRegistry $doctrine): Response
    {
        return $this->render('menu/_menu.html.twig', [
            'categories'=>$doctrine->getRepository(Categorie::class)->findAll()
        ]);
    }
}
