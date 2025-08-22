<?php

namespace App\Entity;

use App\Repository\EventoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventoRepository::class)]
class Evento
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private $id = null;

    #[ORM\Column(length: 255)]
    private $titulo = null;

    #[ORM\Column(length: 255)]
    private $slug = null;

    #[ORM\Column(type: Types::TEXT)]
    private $descripcion = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private $fecha = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private $hora = null;

    #[ORM\Column]
    private $duracion = null;

    #[ORM\Column(length: 255)]
    private $idioma = null;

    public function getHoraFinalizacion()
    {
        return $this->hora->add(new \DateInterval('PT' . $this->duracion . 'M'));
    }
}
