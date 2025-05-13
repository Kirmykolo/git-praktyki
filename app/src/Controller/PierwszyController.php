<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Plugin\TestPlugin;

class PierwszyController extends AbstractController{
    #[Route('/')]
    public function index(): Response
    {
        $text = new TestPlugin();
        echo $text->text();
        $contents=$this->renderView('pierwszy/index.html.twig');
        return new Response ($contents);

    }
}


?>