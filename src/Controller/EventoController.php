<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventoController extends AbstractController
{
    #[Route('/evento', name: 'eventoAction')]
    public function eventoAction(): Response
    {
        //obtener el entityManager
        $em = $this->getDoctrine()->getManager();
        
        $evento = $em->getRepository('Evento::class')->findOneBy(array('slug' => $slug));

        if(!$evento){
            throw $this->createNotFoundException("No existe el evento solicitado.");
        }

        return $this->render('evento/evento.html.twig', array(
            'evento' => $evento,
        ));
    }
}
