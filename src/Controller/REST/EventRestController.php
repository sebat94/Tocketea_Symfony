<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 20/02/2018
 * Time: 1:20
 */

namespace App\Controller\REST;

use App\BLL\EntradaBLL;
use App\BLL\EventoBLL;
use App\BLL\UsuarioBLL;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventRestController extends BaseApiController
{

    /**
     * @Route("/eventos.{_format}", name="get_all_events",
     * defaults={"_format": "json"},
     * requirements={"_format": "json"})
     * @Method("GET")
     */
    public function getAll(EventoBLL $eventoBLL )
    {
        $eventos = $eventoBLL->getAll();
        return $this->getResponse($eventos);
    }

    /**
     * @Route("/evento/{id}.{_format}", name="get_one_event",
     * defaults={"_format": "json"},
     * requirements={"_format": "json"})
     * @Method("GET")
     */
    public function getOne($id,EventoBLL $eventoBLL )
    {
        $evento = $eventoBLL->toArray($eventoBLL->getEvento($id));
        return $this->getResponse($evento);
    }

    /**
     * @Route("/evento/{idEvento}/entradas.{_format}", name="get_tickets",
     * defaults={"_format": "json"},
     * requirements={"_format": "json"})
     * @Method("GET")
     */
    public function entradasCompradas($idEvento, EntradaBLL $entradaBll )
    {
        $entradas = $entradaBll->getEntradasVendidas($idEvento);
        return $this->getResponse($entradas);
    }

    /**
     * @Route("/eventos/{id}/comprar.{_format}", name="buy_tickets",
     * requirements={ "id": "\d+", "_format": "json" },
     * defaults={"_format": "json"})
     * @Method("POST")
     */
    public function comprarEntradas($id, Request $request, EntradaBLL $entradaBll, UsuarioBLL $usuarioBLL, EventoBLL $eventoBLL )
    {
        $data = $this->getContent($request);

        $usuario = $usuarioBLL->getProfile();

        if (!empty($entradaBll)) {
            $entrada = $entradaBll->nuevo($usuario, $eventoBLL->getEvento($id), $data['num_entradas']);
            return $this->getResponse($entrada, Response::HTTP_CREATED );
        }
        else {
            return $this->getResponse([], Response::HTTP_CREATED );
        }
    }

}