<?php

namespace App\Entity;

use App\Repository\UsuarioRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsuarioRepository::class)]
class Usuario
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private $id = null;

    #[ORM\Column(length: 255)]
    private $nombre = null;

    #[ORM\Column(length: 255)]
    private $apellido = null;

    #[ORM\Column(length: 255)]
    private $dni = null;

    #[ORM\Column(length: 255)]
    private $direccion = null;

    #[ORM\Column(length: 255)]
    private $telefono = null;

    #[ORM\Column(length: 255)]
    private $email = null;

    #[ORM\Column(length: 255)]
    private $password = null;
}
