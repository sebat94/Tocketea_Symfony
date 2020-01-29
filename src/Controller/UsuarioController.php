<?php

namespace App\Controller;

use App\BLL\UsuarioBLL;
use App\Entity\Usuario;
use App\Form\PerfilType;
use App\Form\UsuarioType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\File\File as libFile;
use Symfony\Component\HttpFoundation\Response;

class UsuarioController extends Controller
{


    /*-- ********************************************************************************************************** --*/
    /*--                                                                                                            --*/
    /*--                                                 PERFIL                                                     --*/
    /*--                                                                                                            --*/
    /*-- ********************************************************************************************************** --*/

    /**
     * @Route("/comprador/perfil", name="tocketea_perfil")
     * @Method({"GET", "POST"})
     * @Template("private/perfil.html.twig")
     */
    public function perfil(Request $request, UsuarioBLL $usuarioBLL, UserPasswordEncoderInterface $encoder)
    {
        $usuario = new Usuario();
        $form = $this->createForm(PerfilType::class, $usuario);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            /**
             * @var libFile $file
             */
            $file = $usuario->getImagen();
            if(!is_null($file))
            {
                // Generamos un nombre único
                $filename = $this->generateUniqueFileName().'.'.$file->guessExtension();
                // Movemos la imagen al directorio perfil
                $file->move(
                    $this->getParameter('directorio_usuarios'),
                    $filename
                );
                // Sustituimos el contenido por la Imagen generada
                $usuario->setImagen($filename);
            }

            $normalPassword = $usuario->getPassword();
            if(!is_null($normalPassword))
            {
                $encodedPassword = $encoder->encodePassword($usuario, $normalPassword);
                $usuario->setPassword($encodedPassword);
            }

            // Actualizamos los datos
            $usuarioBLL->updateUserByPassAndImage($this->getUser()->getId(), $usuario);

            return $this->redirectToRoute('tocketea_perfil');
        }

        return ['form' => $form->createView()];
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
    /*--                                            GESTION USUARIOS                                                --*/
    /*--                                                                                                            --*/
    /*-- ********************************************************************************************************** --*/

    /**
     * @Route("/admin/usuarios/{id}/eliminar")
     * @param $id
     * @Method({"GET", "DELETE"})
     * @return Response
     */
    public function deleteUser(UsuarioBLL $usuarioBLL, $id)
    {
        try
        {
            $usuarioBLL->deleteUser($id);
            $response = new Response(json_encode(['code' => '200', 'message' => 'El usuario ha sido eliminado corréctamente']));
        }
        catch(\Exception $error)
        {
            $response = new Response(json_encode(['code' => '401', 'message' => 'Este usuario no puede eliminarse porque tiene tickets comprados o eventos creados']));
        }

        return $response;
    }

    /**
     * @Route("/admin/usuarios", name="tocketea_usuarios")
     * @Method({"GET", "POST"})
     * @Template("private/gestion_usuarios.html.twig")
     */
    public function listarUsuarios(Request $request, UsuarioBLL $usuarioBLL)
    {
        $rol = $request->request->get('rolUsuarios');

        if(!is_null($rol) && ($rol === 'ROLE_ADMINISTRADOR' || $rol === 'ROLE_GESTOR' || $rol === 'ROLE_COMPRADOR'))
            $usuarios = $usuarioBLL->findUsers(['rol' => $rol]);
        else
            $usuarios = $usuarioBLL->findUsers();

        return ['usuarios' => $usuarios];
    }

    /**
     * @Route("/admin/usuarios/actualizar", name="tocketea_upgradear_usuario")
     * @Method("POST")
     * @Template("private/gestion_usuarios.html.twig")
     */
    public function updateUser(Request $request, UsuarioBLL $usuarioBLL)
    {
        $idUsuario = $request->request->get('idUsuario');
        $rol = $request->request->get('rolUsuario');

        $usuarioBLL->updateUser($idUsuario, $rol);

        return $this->redirectToRoute('tocketea_usuarios');
    }

}