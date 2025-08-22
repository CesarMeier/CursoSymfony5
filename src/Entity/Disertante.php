<?php

namespace App\Entity;

use App\Repository\DisertanteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DisertanteRepository::class)]
class Disertante
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id = null;

    #[ORM\Column(length: 255)]
    private $nombre = null;

    #[ORM\Column(length: 255)]
    private $apellidos = null;

    #[ORM\Column(type: Types::TEXT)]
    private $biografia = null;

    #[ORM\Column(length: 255)]
    private $telefono = null;

    #[ORM\Column(length: 255)]
    private $url = null;

    #[ORM\Column(length: 255)]
    private $email = null;

    #[ORM\Column(length: 255)]
    private $twitter = null;

    #[ORM\Column(length: 255)]
    private $linkedin = null;

}
