<?php
/**
 * Created by PhpStorm.
 * User: Nono
 * Date: 14/03/2019
 * Time: 14:43
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        $welcomeMessage = 'Hello WCS';
        return $this->render('/home.html.twig', [
            'message' => $welcomeMessage
        ]);
    }

}