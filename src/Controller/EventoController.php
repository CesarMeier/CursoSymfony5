<?php

namespace App\Controller;

use App\Entity\Evento;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventoController extends AbstractController
{
    /**
     * @Route("/eventos", name="eventoAction")
     */
    public function eventoAction(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $eventoRepository = $em->getRepository(Evento::class);

        // Asegúrate de que este método exista en EventoRepository
        $eventos = $eventoRepository->findEventosAlfabeticamente();

        return $this->render('eventos/evento.html.twig', [
            'eventos' => $eventos,
        ]);
    }
}
