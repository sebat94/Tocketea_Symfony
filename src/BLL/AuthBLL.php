<?php


namespace App\BLL;

use App\Entity\Usuario;
use Doctrine\Common\Persistence\ObjectManager;

class AuthBLL
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
        $this->eventRepository = $this->em->getRepository(Usuario::class);
    }

}