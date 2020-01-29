<?php

namespace App\Repository;

use App\Entity\Usuario;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class UsuarioRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Usuario::class);
    }

    public function updateUser($id, $rol)
    {
        $this->createQueryBuilder('u')
            ->update('App:Usuario', 'usu')
            ->set('usu.rol', ':rol')
            ->setParameter('rol', $rol)
            ->where('usu.id = :id')
            ->setParameter('id', $id)
            ->getQuery()->execute();
    }

    public function updateUserByPassAndImage($idUsuario, Usuario $usuario)
    {
        $qb = $this->createQueryBuilder('u');
        $qb->update('App:Usuario', 'usu');

        if( $usuario->getImagen() )
            $qb->set('usu.imagen', ':imagen')->setParameter('imagen', $usuario->getImagen());

        if( $usuario->getPassword() )
            $qb->set('usu.password', ':password')->setParameter('password', $usuario->getPassword());

        $qb->where('usu.id = :id')->setParameter('id', $idUsuario)
            ->getQuery()->execute();
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('u')
            ->where('u.something = :value')->setParameter('value', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
