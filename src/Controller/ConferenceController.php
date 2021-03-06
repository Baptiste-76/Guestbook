<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/hello/{name}", name="homepage")
     */
    public function index(String $name = "")
    {
        $greet = "";

        if ($name) {
            $name = ucfirst($name);
            $greet = sprintf('<h1>Hello %s !</h1>', htmlspecialchars($name));
        }
        
        return new Response(<<<EOF
            <html>
                <body>
                $greet
                    <img src="/images/under-construction.gif" />
                </body>
            <html>
        EOF);
    }
}
