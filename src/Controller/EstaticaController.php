<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class EstaticaController extends AbstractController
{
    #[Route('/estatica/{pagina}', name: 'app_estatica')]
    public function estaticaAction($pagina)
    {
         return $this->render('estatica/'. $pagina .'.html.twig');
    }
}
