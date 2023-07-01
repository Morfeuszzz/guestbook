<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return new Response(<<<EOF
            <html lang="en">
                <body>
                    <img src="images/under-construction.gif" alt="gif" />
                </body>
            </html>
        EOF);
    }
}
