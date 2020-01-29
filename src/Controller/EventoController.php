<?php

namespace App\Controller;

use App\BLL\EventoBLL;
use App\Entity\Categoria;
use App\Entity\Evento;
use App\Entity\Provincia;
use App\Entity\Usuario;
use App\Form\EventoType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File as libFile;

class EventoController extends Controller
{

    /*-- ********************************************************************************************************** --*/
    /*--                                                                                                            --*/
    /*--                                                  INDEX                                                     --*/
    /*--                                                                                                            --*/
    /*-- ********************************************************************************************************** --*/

    /**
     * @Route("/{id}", defaults={"id"=null}, requirements={"id"="\d+"}, name="tocketea_eventos")
     * @param $id
     * @Method({"GET", "POST"})
     * @Template("public/index.html.twig")
     * @return array
     */
    public function showEventsIndex(Request $request, EventoBLL $eventoBLL, $id)
    {
        //echo $id;die();
        $filters['id_usuario'] = $id;
        // POST
        $filters['categoria'] = $request->request->get('categoria');
        $filters['provincia'] = $request->request->get('provincia');
        $filters['fecha'] = $request->request->get('fecha');
        $filters['search'] = $request->request->get('busqueda');

        $events = $eventoBLL->findEvents($filters);
        return ['events' => $events];
    }


    /*-- ********************************************************************************************************** --*/
    /*--                                                                                                            --*/
    /*--                                             DETALLES EVENTO                                                --*/
    /*--                                                                                                            --*/
    /*-- ********************************************************************************************************** --*/

    /**
     * @Route("/eventos/{id}", name="tocketea_detalles_evento", requirements={"id"="\d+"})
     * @param $id
     * @Method("GET")
     * @Template("public/detalles_evento.html.twig")
     * @return array
     */
    public function showEventDetails(EventoBLL $eventoBLL, $id)
    {
        $event = $eventoBLL->findEvent($id);
        return ['event' => $event];
    }


    /*-- ********************************************************************************************************** --*/
    /*--                                                                                                            --*/
    /*--                                               MIS EVENTOS                                                  --*/
    /*--                                                                                                            --*/
    /*-- ********************************************************************************************************** --*/
    /**
     * @Route("/comprador/eventos", name="tocketea_mis_eventos")
     * @Method({"GET", "POST"})
     * @Template("private/eventos.html.twig")
     */
    public function showMyEvents(Request $request, EventoBLL $eventoBLL)
    {
        $idCategoria = $request->request->get('categoriaMisEventos');
        $fecha = $request->request->get('fechaMisEventos');
        $search = $request->request->get('buscarMisEventos');

        $filters = [];
        $filters['fk_usuario'] = $this->getUser()->getId();
        $filters['fk_categoria'] = $idCategoria;
        $filters['fecha_celebracion'] = $fecha;
        $filters['search'] = $search;

        $events = $eventoBLL->findEventsMine($filters);

        return ['events' => $events];
    }


    /*-- ********************************************************************************************************** --*/
    /*--                                                                                                            --*/
    /*--                                               CREAR EVENTO                                                 --*/
    /*--                                                                                                            --*/
    /*-- ********************************************************************************************************** --*/
    /**
     * @Route("/gestor/form_evento/{id}", name="tocketea_crear_evento")
     * @param $id
     * @Method({"GET", "POST"})
     * @Template("private/form_evento.html.twig")
     * @return array
     */
    public function nuevoFormEvento(Request $request, EventoBLL $eventoBLL,  $id=null)
    {
        if(!is_null($id))
        {
            $em = $this->getDoctrine()->getManager();
            $evento = $em->getRepository(Evento::class)->findOneBy(['id' => $id]);
        }
        else
            $evento = new Evento();

        return $this->formEvento($request, $eventoBLL, $evento);
    }

    private function formEvento(Request $request, EventoBLL $eventoBLL, Evento $evento)
    {

        $form = $this->createForm(EventoType::class, $evento);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            /**
             * @var libFile $file
             */
            $file = $evento->getImagen();
            // Generamos un nombre único
            $filename = $this->generateUniqueFileName().'.'.$file->guessExtension();
            // Movemos la imagen al directorio perfil
            $file->move(
                $this->getParameter('directorio_eventos'),
                $filename
            );
            // Sustituimos el contenido por la Imagen generada
            $evento->setImagen($filename);


            $evento->setEntradasRestantes( $evento->getTotalEntradas() );
            $em = $this->getDoctrine()->getManager();
            $evento->setFkUsuario( $em->getRepository(Usuario::class)->find( $this->getUser()->getId()) );
            $evento->setFkCategoria( $em->getRepository(Categoria::class)->find( $evento->getFkCategoria() ));
            $evento->setFkProvincia( $em->getRepository(Provincia::class)->find( $evento->getFkProvincia() ));
            $eventoBLL->crearEvento($evento);
            return $this->redirectToRoute('tocketea_mis_eventos');
        }

        return $this->render('private/form_evento.html.twig', ['form' => $form->createView()]);

    }

    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }

    /*-- ********************************************************************************************************** --*/
    /*--                                                                                                            --*/
    /*--                                              ELIMIAR EVENTO                                                --*/
    /*--                                                                                                            --*/
    /*-- ********************************************************************************************************** --*/
    /**
     * @Route("/gestor/eventos/{id}/eliminar")
     * @param $id
     * @Method({"GET", "DELETE"})
     * @return Response
     */
    public function eliminarEvento(EventoBLL $eventoBLL, $id)
    {
        $evento = $eventoBLL->findOneBy($id);
        $eventoBLL->eliminarEvento($evento);

        $response = new Response(json_encode(['code' => '200', 'message' => 'El evento ha sido eliminado correctamente']));
        return $response;
    }

}
