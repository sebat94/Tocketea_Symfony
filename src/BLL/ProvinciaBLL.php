<?php

namespace App\BLL;

use App\Entity\Provincia;
use Doctrine\Common\Persistence\ObjectManager;

class ProvinciaBLL
{

    private $em;
    private $eventRepository;

    /**
     * EventBLL constructor.
     * @param $em
     */
    public function __construct(ObjectManager $em)
    {
        $this->em = $em;
        $this->eventRepository = $this->em->getRepository(Provincia::class);
    }

    public function getProvincias()
    {

        return $this->eventRepository->findAll();

    }

}