<?php

namespace App\Repository;

use App\Entity\Evento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\ORM\AbstractQuery as hydrateResultSQL;

class EventoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Evento::class);
    }

    public function findAllWithUserData(array $filters)
    {
        $qb = $this->createQueryBuilder('e')
                ->join('e.fk_usuario', 'u')->addSelect('u');

        if(!is_null($filters['id_usuario']))
            $qb->andWhere('u.id = :id')->setParameter('id', $filters['id_usuario']);

        if(!is_null($filters['categoria']) && $filters['categoria'] != '')
            $qb->andWhere('e.fk_categoria = :cat')->setParameter('cat', $filters['categoria']);

        if(!is_null($filters['provincia']) && $filters['provincia'] != '')
            $qb->andWhere('e.fk_provincia = :prov')->setParameter('prov', $filters['provincia']);

        $fecha = $filters['fecha'];
        $fechaActual = getdate();
        $now = $fechaActual['year'] . '-' . $fechaActual['mon'] .'-'. $fechaActual['mday'];
        $tomorrow = $fechaActual['year'] . '-' . $fechaActual['mon'] .'-'. ($fechaActual['mday'] + 1);
        $nextSunday = $fechaActual['year'] . '-' . $fechaActual['mon'] .'-'. ($fechaActual['mday'] + 7 - $fechaActual['wday']);
        if(!is_null($fecha) && $fecha != '')
        {
            if($fecha == 'f_all')
                $qb->andWhere('e.fecha_celebracion >= :now')->setParameter('now', $now);
            else if($fecha == 'f_tomorrow')
                $qb->andWhere('e.fecha_celebracion = :tomorrow')->setParameter('tomorrow', $tomorrow);
            else if($fecha == 'f_this_week')
                $qb->andWhere('e.fecha_celebracion >= :now')->setParameter('now', $now)->andWhere('e.fecha_celebracion <= :nextSunday')->setParameter('nextSunday', $nextSunday);
            else if($fecha == 'f_this_weekend')
                $qb->andWhere('e.fecha_celebracion >= :we_start')->setParameter('we_start', ($fechaActual['mday'] + (6 - $fechaActual['wday']) ))->andWhere('e.fecha_celebracion <= :we_end')->setParameter('we_end', ($fechaActual['mday'] + (6 - $fechaActual['wday'] + 1)));
            else if($fecha == 'f_this_month')
                $qb->andWhere('e.fecha_celebracion >= :now')->setParameter('now', $now)->andWhere('e.fecha_celebracion <= :ultimoDiaMes')->setParameter('ultimoDiaMes', date("Y-m-t", strtotime($now)));
        }

        if(!is_null($filters['search']) && $filters['search'] != '')
            $qb->andWhere($qb->expr()->like('e.titulo', ':titulo'))->setParameter('titulo', '%'.$filters['search'].'%')->orWhere($qb->expr()->like('e.descripcion', ':desc'))->setParameter('desc', '%'.$filters['search'].'%');

        $qb->orderBy('e.fecha_celebracion', 'ASC');

        return $qb->getQuery()->getResult(hydrateResultSQL::HYDRATE_ARRAY);
    }

    public function findOneWithUserData($id)
    {
        $qb = $this->createQueryBuilder('e')
            ->join('e.fk_usuario', 'u')->addSelect('u')
            ->where('e.id = :id')->setParameter('id', $id);

        return $qb->getQuery()->getOneOrNullResult(hydrateResultSQL::HYDRATE_ARRAY);
    }

    public function filtrarMisEventos($filters)
    {
        $qb =  $this->createQueryBuilder('e')->addSelect('e');

        if(!is_null($filters['fk_categoria']) && $filters['fk_categoria'] != 0)
            $qb->andWhere('e.fk_categoria = :cat')->setParameter('cat', $filters['fk_categoria']);

        if(!is_null($filters['fecha_celebracion']) && $filters['fecha_celebracion'] == "pasados")
            $qb->andWhere('e.fecha_celebracion < :now')->setParameter('now', new \DateTime());
        else if(!is_null($filters['fecha_celebracion']) && $filters['fecha_celebracion'] == "futuros")
            $qb->andWhere('e.fecha_celebracion > :now')->setParameter('now',  new \DateTime());

        if(!is_null($filters['search']) && $filters['search'] != '')
            $qb->andWhere($qb->expr()->like('e.titulo', ':titulo'))->setParameter('titulo', '%'.$filters['search'].'%')
                ->orWhere($qb->expr()->like('e.descripcion', ':desc'))->setParameter('desc', '%'.$filters['search'].'%');

        return $qb->andWhere('e.fk_usuario = :idUsuario')->setParameter('idUsuario', $filters['fk_usuario'])
            ->getQuery()->getResult();
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('e')
            ->where('e.something = :value')->setParameter('value', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
