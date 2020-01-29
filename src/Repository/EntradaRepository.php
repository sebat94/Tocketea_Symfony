<?php

namespace App\Repository;

use App\Entity\Entrada;
use App\Entity\Evento;
use App\Entity\Usuario;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\ORM\AbstractQuery as hydrateResultSQL;

class EntradaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Entrada::class);
    }

    public function findMyTickets($id)
    {
        return $this->getEntityManager()->createQueryBuilder()
                ->addSelect('entrada')
                ->from('App:Entrada', 'entrada')
                ->innerJoin('entrada.id_evento', 'evento')
                ->addSelect('evento')
                ->where('entrada.id_usuario = :id_usuario')->setParameter('id_usuario', $id)
                ->getQuery()->getArrayResult();
    }

    /**
     * @param $idUsuario
     * @param $idEvento
     * @param $ticketsComprados
     * @param $ticketsRestantes
     * @throws \Exception
     */
    public function makeTransaction($idUsuario, $idEvento, $ticketsComprados, $entradasYaCompradas, $ticketsRestantes)
    {

        $this->getEntityManager()->beginTransaction();
        try
        {
            $em = $this->getEntityManager();

            if( $entradasYaCompradas <= 0 )
            {
                $evento = $em->getRepository('App:Evento')->findOneBy(['id'=>$idEvento]);
                $usuario = $em->getRepository('App:Usuario')->findOneBy(['id' => $idUsuario]);

                $nuevaEntrada = new Entrada();
                //$nuevaEntrada->setIdUsuario( $usuario->getId() );
                $nuevaEntrada->setIdEvento( $evento );
                $nuevaEntrada->setIdUsuario( $usuario );
                $nuevaEntrada->setNumEntradas( $ticketsComprados );

                $em->persist($nuevaEntrada);
            }
            else
            {
                $entradaEntity = $em->getRepository('App:Entrada')->findOneBy(['id_usuario' => $idUsuario, 'id_evento' => $idEvento]);
                $entradaEntity->setNumEntradas( ($entradasYaCompradas + $ticketsComprados) );

                $em->persist($entradaEntity);
            }

            $evento = $em->getRepository('App:Evento')->findOneBy(['id'=>$idEvento]);
            $evento->setEntradasRestantes( ($ticketsRestantes - $ticketsComprados) );

            $em->persist($evento);
            $em->flush();

            $this->getEntityManager()->commit();
        }
        catch(\Exception $error)
        {
            $this->getEntityManager()->rollback();
            throw $error;
        }

    }

}
