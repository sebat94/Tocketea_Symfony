<?php


namespace App\BLL;


use App\Entity\Evento;
use Doctrine\Common\Persistence\ObjectManager;

class EventoBLL extends BaseBLL
{

    public function findEvents(array $filters)
    {
        return $this->em->getRepository(Evento::class)->findAllWithUserData($filters);
    }

    public function findEvent($id)
    {
        return $this->em->getRepository(Evento::class)->findOneWithUserData($id);
    }

    public function findEventsMine($filters)
    {
        return $this->em->getRepository(Evento::class)->filtrarMisEventos($filters);
    }

    public function findOneBy($id)
    {
        return $this->em->getRepository(Evento::class)->findOneBy(['id' => $id]);
    }

    public function crearEvento(Evento $evento)
    {
        $this->em->persist($evento);
        $this->em->flush();
    }

    public function eliminarEvento(Evento $evento)
    {
        $this->em->remove($evento);
        $this->em->flush();
    }


    /*----------------------------------------------------------------------------------------------------------------*/
    /*-------------------------------                     API REST                 -----------------------------------*/
    /*----------------------------------------------------------------------------------------------------------------*/


    public function getAll() {
        $evento = $this->em->getRepository(Evento::class)->findAll();
        return $this->entitiesToArray($evento);
    }

    public function getEventoEspecifico($id) {
        $evento = $this->em->getRepository(Evento::class)->findOneBy(['id'=>$id]);
        return $this->entitiesToArray($evento);
    }

    public function getEvento($id) {
        $evento = $this->em->getRepository(Evento::class)->findOneBy(['id'=>$id]);
        return $evento;
    }

    public function toArray($evento)
    {
        if (is_null($evento))
            return null;

        if (!($evento instanceof Evento))
            throw new \Symfony\Component\Config\Definition\Exception\Exception("La entidad no es de tipo Evento");

        return [
            'id'=> $evento->getId(),
            'fk_provincia'=> $evento->getFkProvincia(),
            'fk_categoria'=> $evento->getFkCategoria(),
            'fk_usuario'=> $evento->getFkUsuario(),
            'imagen'=> $evento->getImagen(),
            'titulo'=> $evento->getTitulo(),
            'direccion'=> $evento->getDireccion(),
            'enlace_externo'=> $evento->getEnlaceExterno(),
            'descripcion'=> $evento->getDescripcion(),
            'total_entradas'=> $evento->getTotalEntradas(),
            'precio_entradas'=> $evento->getPrecioEntradas(),
            'venta_fecha_inicio'=> $evento->getVentaFechaInicio(),
            'venta_fecha_fin'=> $evento->getVentaFechaFin(),
            'fecha_celebracion'=> $evento->getFechaCelebracion(),
            'hora_celebracion'=> $evento->getHoraCelebracion()
        ];
    }

}