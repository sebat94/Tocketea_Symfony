<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 20/02/2018
 * Time: 1:19
 */


namespace App\Controller\REST;
use App\BLL\UsuarioBLL;
use App\Entity\Provincia;
use App\Entity\Usuario;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Annotation\Route;


class UserRestController extends BaseApiController
{
    /**
     * @Route("/auth/register.{_format}", name="register",
     * requirements={"_format": "json"},
     * defaults={"_format": "json"})
     * @Method("POST")
     */
    public function register(Request $request, UsuarioBLL $usuarioBLL)
    {
        $data = $this->getContent($request);

        $provincia = $this->getDoctrine()->getRepository(Provincia::class)->findOneBy(['id' => $data['fk_provincia']]);
        $usuario = $usuarioBLL->nuevo($data['email'], $data['username'], null, $provincia, $data['password'],  $data['rol'], 'es_ES');

        return $this->getResponse($usuario, Response::HTTP_CREATED );
    }

    /**
     * @Route("/auth/login/google")
     */
    public function googleLogin(Request $request, UsuarioBLL $usuarioBLL)
    {
        $data = $this->getContent($request);

        if (is_null($data['access_token']) || !isset($data['access_token']) || empty($data['access_token']))
            throw new BadRequestHttpException('No se ha recibido el token de google');

        $googleJwt = json_decode(file_get_contents("https://www.googleapis.com/plus/v1/people/me?access_token=" . $data['access_token']));

        $token = $usuarioBLL->getTokenByEmail($googleJwt->emails[0]->value);

        return $this->getResponse(['token' => $token]);
    }

    /**
     * @Route("/usuarios/profile.{_format}", name="profile",
     * requirements={"_format": "json"},
     * defaults={"_format": "json"})
     * @Method("GET")
     */
    public function profile(UsuarioBLL $usuarioBLL)
    {
        $usuario = $usuarioBLL->profile();
        return $this->getResponse($usuario);
    }

    /**
     * @Route("/profile/password.{_format}", name="cambia_password",
     * requirements={ "_format": "json" },
     * defaults={"_format": "json"})
     * @Method("PATCH")
     */
    public function cambiaPassword(Request $request, UsuarioBLL $usuarioBLL)
    {
        $data = $this->getContent($request);
        if ( !isset($data['password']) || is_null ($data['password']) || empty($data['password']))
            throw new BadRequestHttpException('No se ha recibido la contraseña');

        $user = $usuarioBLL->cambiarPassword($data['password']);

        return $this->getResponse($user);
    }

    /**
     * @Route("/usuarios.{_format}", name="get_all_users",
     * defaults={"_format": "json"},
     * requirements={"_format": "json"})
     * @Method("GET")
     */
    public function getAll(UsuarioBLL $usuarioBLL)
    {
        //$this->denyAccessUnlessGranted('ROLE_ADMINISTRADOR', $usuarioBLL, $users = $usuarioBLL->getAll());
        $this->denyAccessUnlessGranted('ROLE_ADMINISTRADOR', $usuarioBLL, 'No tienes permisos suficientes para ver todos los usuarios');
        $usuarios = $usuarioBLL->getAll();
        return $this->getResponse($usuarios);
    }

    /**
     * @Route("/usuarios/{id}.{_format}", name="delete_usuario",
     * requirements={ "id": "\d+", "_format": "json" },
     * defaults={"_format": "json"})
     * @Method("DELETE")
     */
    public function delete(Usuario $usuario, UsuarioBLL $usuarioBLL)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMINISTRADOR', $usuarioBLL,'No tienes suficientes privilegios para eliminar un usuario');

        $usuarioBLL->delete($usuario);
        return $this->getResponse(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * @Route("/usuarios/{id}.{_format}", name="update_user",
     * requirements={"id": "\d+", "_format": "json"},
     * defaults={"_format": "json"})
     * @Method("PUT")
     */
    public function update(Request $request, Usuario $usuario, UsuarioBLL $usuarioBLL)
    {
        $datos = $this->getContent($request);
        $result = $usuarioBLL->update($usuario, $datos);
        return $this->getResponse($result, Response::HTTP_OK);
    }

    /**
     * @Route("/auth/register/admin.{_format}", name="registerAdmin",
     * requirements={"_format": "json"},
     * defaults={"_format": "json"})
     * @Method("POST")
     */
    public function registerAdmin(Request $request, UsuarioBLL $usuarioBLL)
    {
        $data = $this->getContent($request);

        if ($data['rol'] === 'ROLE_ADMINISTRADOR') {
            $usuario = $usuarioBLL->nuevo(
                $data['email'],
                $data['username'],
                $data['imagen'],
                $data['fk_provincia'],
                $data['password'],
                $data['rol'],
                'es_ES'
            );
            return $this->getResponse($usuario, Response::HTTP_CREATED);
        }
        else
        {
            $response = ['error' => true, 'message' => 'No tienes permisos para crear una cuenta de administrador'];
            return $this->getResponse($response, Response::HTTP_CREATED);
        }
    }

}