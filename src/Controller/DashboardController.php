<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashboardController extends AbstractController
{
         /**
      * @Route("/")
      */

    public function number(): Response
    {
        $userFirstName = "Mohamed";
        $notifications = ['...','....'];

        return $this->render('/home.html.twig', [

            'user_first_name' => $userFirstName ,
            'notifications' => $notifications,
        ]);
    }
}