<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 16/02/2018
 * Time: 21:15
 */

namespace App\BLL;
use App\Entity\Entrada;
use App\Entity\Usuario;
use Doctrine\Common\Persistence\ObjectManager;

class EntradaBLL extends BaseBLL
{


    public function myTickets($idUsuario)
    {
        return $this->em->getRepository(Entrada::class)->findMyTickets($idUsuario);
    }

    public function buyTickets(Usuario $idUsuario, $idEvento, $ticketsComprados, $entradasYaCompradas, $ticketsRestantes)
    {
        return $this->em->getRepository(Entrada::class)->makeTransaction($idUsuario, $idEvento, $ticketsComprados, $entradasYaCompradas, $ticketsRestantes);
    }



    /*----------------------------------------------------------------------------------------------------------------*/
    /*-------------------------------                     API REST                 -----------------------------------*/
    /*----------------------------------------------------------------------------------------------------------------*/


    public function nuevo($idUsuario, $idEvento, $num_entradas)
    {
        $entrada = new Entrada();

        $entrada->setIdEvento($idEvento);
        $entrada->setIdUsuario($idUsuario);
        $entrada->setNumEntradas($num_entradas);

        return $this->guardaValidando($entrada);
    }


    public function getEntradasVendidas($idEvento)
    {
        $users = $this->em->getRepository(Entrada::class)->findBy(['id_evento'=>$idEvento]);
        return $this->entitiesToArray($users);
    }


    public function toArray($entrada)
    {
        if (is_null($entrada))
            return null;

        if (!($entrada instanceof Entrada))
            throw new \Symfony\Component\Config\Definition\Exception\Exception("No es una entidad de tipo Entrada");

        return [
            'id' => $entrada->getId(),
            'usuario' => $entrada->getIdUsuario(),
            'evento' => $entrada->getIdEvento(),
            'cantidad' => $entrada->getNumEntradas()
        ];
    }


}
