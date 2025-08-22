<?php

namespace App\Repository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

class EventoRepository extends EntityRepository
{
    public function queryEventosAlfabeticamente()
    {
        $em = $this->getEntityManager();
        $dql = "SELECT e FROM App\Entity\Evento e ORDER BY e.titulo ASC";
        $query = $em->createQuery($dql);
    }

    public function findEventosAlfabeticamente()
    {
        return $this->queryEventosAlfabeticamente()->getResult();
    }

}
