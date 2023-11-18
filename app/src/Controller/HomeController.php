<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/home', name: "app_home")]
    public function number(): Response
    {
        // si pas logged in -> renvoie sur login
        if (!($this->getUser())) {
            return $this->redirectToRoute('app_login');
        }

        // sinon render la page avec infos user
        return $this->render('home/home.html.twig', [
            // 'last_username' => $lastUsername
        ]);
    }
}