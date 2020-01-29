<?php

namespace App\Controller;

use App\BLL\UsuarioBLL;
use App\Entity\Provincia;
use App\Entity\Usuario;
use App\Form\UsuarioType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class SecurityController extends Controller
{

    /*-- ********************************************************************************************************** --*/
    /*--                                                                                                            --*/
    /*--                                                 ACCEDER                                                    --*/
    /*--                                                                                                            --*/
    /*-- ********************************************************************************************************** --*/



    /**
     * @Route("/login", name="tocketea_login")
     * @Method({"GET", "POST"})
     * @Template("public/login.html.twig")
     */
    public function login(Request $request, AuthenticationUtils $authUtils)
    {
        $error = $authUtils->getLastAuthenticationError();
        $lastUsername = $authUtils->getLastUsername();

        return $this->render('public/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }

    /**
     * @Route("/registro", name="tocketea_registro")
     * @Method({"GET", "POST"})
     * @Template("public/registro.html.twig")
     */
    public function nuevoFormUsuario(Request $request, UsuarioBLL $usuarioBLL, UserPasswordEncoderInterface $encoder)
    {
        $usuario = new Usuario();
        return $this->formUsuario($request, $usuarioBLL, $usuario, $encoder);
    }
    
    private function formUsuario(Request $request, UsuarioBLL $usuarioBLL, Usuario $usuario, UserPasswordEncoderInterface $encoder)
    {

        $form = $this->createForm(UsuarioType::class, $usuario);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $usuario->setFkProvincia( $em->getRepository(Provincia::class)->find( $usuario->getFkProvincia() ));

            $normalPassword = $usuario->getPassword();
            $encodedPassword = $encoder->encodePassword($usuario, $normalPassword);

            $usuario->setPassword($encodedPassword);
            $usuario->setIdioma('es_ES');
            $usuario->setRol('ROLE_COMPRADOR');

            $usuarioBLL->createUser($usuario);
            return $this->redirectToRoute('tocketea_perfil');
        }

        return $this->render('public/registro.html.twig', ['form' => $form->createView()]);

    }

}