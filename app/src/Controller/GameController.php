<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GameController extends AbstractController
{
    #[Route('/daily')]
    public function daily(): Response
    {
        return $this->render('daily/daily.html.twig', [
            // 'number' => $number,
        ]);
    }

    #[Route('/dailystreak')]
    public function dailyStreak(): Response
    {
        return $this->render('dailystreak/dailystreak.html.twig', [
            // 'number' => $number,
        ]);
    }

    #[Route('/solo')]
    public function solo(): Response
    {
        return $this->render('solo/solo.html.twig', [
            // 'number' => $number,
        ]);
    }

    #[Route('/multiplayer')]
    public function multiplayer(): Response
    {
        return $this->render('multiplayer/multiplayer.html.twig', [
            // 'number' => $number,
        ]);
    }
}