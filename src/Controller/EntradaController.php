<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 16/02/2018
 * Time: 21:12
 */

namespace App\Controller;

use App\BLL\EntradaBLL;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


class EntradaController extends Controller
{

    /*-- ********************************************************************************************************** --*/
    /*--                                                                                                            --*/
    /*--                                                MIS ENTRADAS                                                --*/
    /*--                                                                                                            --*/
    /*-- ********************************************************************************************************** --*/

    /**
     * @Route("/comprador/entradas", name="tocketea_entradas")
     * @Method({"GET", "POST"})
     * @Template("private/entradas.html.twig")
     */
    public function showTickets(EntradaBLL $entradaBLL)
    {

        $tickets = $entradaBLL->myTickets( $this->getUser()->getId() );
    //var_dump($tickets);die();
        return ['tickets' => $tickets];

    }

    /**
     * @Route("/entradas/comprar/{id}", name="tocketea_comprar_entradas")
     * @param $id
     * @Method({"GET", "POST"})
     * @Template("private/comprar.html.twig")
     * @return array
     * @throws \Exception
     */
    public function buyTickets(Request $request, EntradaBLL $entradaBLL, $id, AuthorizationCheckerInterface $authChecker)
    {

        $response = [];
        $response['idEvento'] = $id;
        if($authChecker->isGranted('ROLE_COMPRADOR'))
        {
            // Entradas a comprar
            $ticketsComprados = $request->request->get('numero_entradas');

            if(!is_null($ticketsComprados))
            {
                // Evento Seleccionado
                $evento = $this->getDoctrine()->getRepository('App:Evento')->findOneBy(['id' => $id]);
                // Entrada que va a comprar el usuario actual
                $entradasYaCompradas = 0;
                $entrada = $this->getDoctrine()->getRepository('App:Entrada')->findOneBy(['id_usuario' => $this->getUser()->getId(), 'id_evento' => $id]);
                if(!is_null($entrada))
                    $entradasYaCompradas = $entrada->getNumEntradas();

                if($ticketsComprados > 0 && $ticketsComprados <= $evento->getEntradasRestantes() )
                {
                    //$entradaBLL->buyTickets($this->getUser()->getId(), $id, $ticketsComprados, $entradasYaCompradas, $evento->getEntradasRestantes());
                    $entradaBLL->buyTickets($this->getUser(), $id, $ticketsComprados, $entradasYaCompradas, $evento->getEntradasRestantes());
                    $response['ok'] = true;
                }
                else if($evento->getEntradasRestantes() < $ticketsComprados)
                {
                    $response['ok'] = false;
                    $response['mensajeError'] = 'No hay disponibles tantas entradas, solo quedan ' . $evento->getEntradasRestantes();
                }
                else
                {
                    $response['ok'] = false;
                    $response['mensajeError'] = 'Introduce el número de entradas que deseas comprar';
                }
            }
        }

        return $response;
    }

}