<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_portada")
     */
    public function portadaAction(): Response
    {
        //obtener el entityManager
        $em = $this->getDoctrine()->getManager();
        //obtener el repositorio de articulo
        $eventoRepository = $em->getRepository('Evento::class');
        //obtener todos los eventos 
        $eventos = $eventoRepository->findAll();

        $total = count($eventos);
        $n = ($total >= 8) ? 8 : ($total < 8 && $total > 0) ? $total : 0;
        $eventosCol = $eventosCol1 = $eventosCol2 = array(); for ($i = 0; $i < $n; $i++) {
            $evento = $eventos[\rand(0, $total - 1)]; while (in_array($evento, $eventosCol)) {
                $evento = $eventos[\rand(0, $total - 1)];
            }
            $eventosCol[] = $evento;
        }   
        return $this->render('default/portada.html.twig', array(
            'eventosCol1' => array_slice($eventosCol, 0, 4),
            'eventosCol2' => array_slice($eventosCol, 4, 4)
        ));
    }
}
