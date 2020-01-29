<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventoRepository")
 */
class Evento
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imagen;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $titulo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Provincia")
     * @ORM\JoinColumn(name="fk_provincia", referencedColumnName="id", nullable=false)
     */
    private $fk_provincia;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $direccion;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categoria")
     * @ORM\JoinColumn(name="fk_categoria", referencedColumnName="id", nullable=false)
     */
    private $fk_categoria;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $enlace_externo;

    /**
     * @ORM\Column(type="text")
     */
    private $descripcion;

    /**
     * @ORM\Column(type="integer")
     */
    private $total_entradas;

    /**
     * @ORM\Column(type="integer")
     */
    private $entradas_restantes;

    /**
     * @ORM\Column(type="integer")
     */
    private $precio_entradas;

    /**
     * @ORM\Column(type="date")
     */
    private $venta_fecha_inicio;

    /**
     * @ORM\Column(type="date")
     */
    private $venta_fecha_fin;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_celebracion;

    /**
     * @ORM\Column(type="time")
     */
    private $hora_celebracion;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario")
     * @ORM\JoinColumn(name="fk_usuario", referencedColumnName="id", nullable=false)
     */
    private $fk_usuario;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @param mixed $imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getFkProvincia()
    {
        return $this->fk_provincia;
    }

    /**
     * @param mixed $fk_provincia
     */
    public function setFkProvincia($fk_provincia)
    {
        $this->fk_provincia = $fk_provincia;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @return mixed
     */
    public function getFkCategoria()
    {
        return $this->fk_categoria;
    }

    /**
     * @param mixed $fk_categoria
     */
    public function setFkCategoria($fk_categoria)
    {
        $this->fk_categoria = $fk_categoria;
    }

    /**
     * @return mixed
     */
    public function getEnlaceExterno()
    {
        return $this->enlace_externo;
    }

    /**
     * @param mixed $enlace_externo
     */
    public function setEnlaceExterno($enlace_externo)
    {
        $this->enlace_externo = $enlace_externo;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getTotalEntradas()
    {
        return $this->total_entradas;
    }

    /**
     * @param mixed $total_entradas
     */
    public function setTotalEntradas($total_entradas)
    {
        $this->total_entradas = $total_entradas;
    }

    /**
     * @return mixed
     */
    public function getEntradasRestantes()
    {
        return $this->entradas_restantes;
    }

    /**
     * @param mixed $entradas_restantes
     */
    public function setEntradasRestantes($entradas_restantes)
    {
        $this->entradas_restantes = $entradas_restantes;
    }

    /**
     * @return mixed
     */
    public function getPrecioEntradas()
    {
        return $this->precio_entradas;
    }

    /**
     * @param mixed $precio_entradas
     */
    public function setPrecioEntradas($precio_entradas)
    {
        $this->precio_entradas = $precio_entradas;
    }

    /**
     * @return mixed
     */
    public function getVentaFechaInicio()
    {
        return $this->venta_fecha_inicio;
    }

    /**
     * @param mixed $venta_fecha_inicio
     */
    public function setVentaFechaInicio($venta_fecha_inicio)
    {
        $this->venta_fecha_inicio = $venta_fecha_inicio;
    }

    /**
     * @return mixed
     */
    public function getVentaFechaFin()
    {
        return $this->venta_fecha_fin;
    }

    /**
     * @param mixed $venta_fecha_fin
     */
    public function setVentaFechaFin($venta_fecha_fin)
    {
        $this->venta_fecha_fin = $venta_fecha_fin;
    }

    /**
     * @return mixed
     */
    public function getFechaCelebracion()
    {
        return $this->fecha_celebracion;
    }

    /**
     * @param mixed $fecha_celebracion
     */
    public function setFechaCelebracion($fecha_celebracion)
    {
        $this->fecha_celebracion = $fecha_celebracion;
    }

    /**
     * @return mixed
     */
    public function getHoraCelebracion()
    {
        return $this->hora_celebracion;
    }

    /**
     * @param mixed $hora_celebracion
     */
    public function setHoraCelebracion($hora_celebracion)
    {
        $this->hora_celebracion = $hora_celebracion;
    }

    /**
     * @return mixed
     */
    public function getFkUsuario()
    {
        return $this->fk_usuario;
    }

    /**
     * @param mixed $fk_usuario
     */
    public function setFkUsuario($fk_usuario)
    {
        $this->fk_usuario = $fk_usuario;
    }


}
