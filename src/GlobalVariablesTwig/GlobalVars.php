<?php

namespace App\GlobalVariablesTwig;

use App\Entity\Categoria;
use App\Entity\Provincia;
use Doctrine\Common\Persistence\ObjectManager;

class GlobalVars
{

    private $em;

    public function __construct(ObjectManager $em)
    {
        $this->em = $em;
    }

    /**
     * @return mixed
     */
    public function getProvincias()
    {
        $provincias = $this->em->getRepository(Provincia::class)->findAll();
        return $provincias;
    }

    /**
     * @return mixed
     */
    public function getCategorias()
    {
        $categorias = $this->em->getRepository(Categoria::class)->findAll();
        return $categorias;
    }

}