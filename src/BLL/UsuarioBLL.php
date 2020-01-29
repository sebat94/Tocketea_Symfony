<?php


namespace App\BLL;

use App\Entity\Provincia;
use App\Entity\Usuario;
use App\Repository\UsuarioRepository;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UsuarioBLL extends BaseBLL
{

    public function deleteUser($id)
    {
        $usuario = $this->em->getRepository(Usuario::class)->find($id);
        $this->em->remove($usuario);
        $this->em->flush();
    }

    public function findUsers($filters = [])
    {
        if(!empty($filters))
            return $this->em->getRepository(Usuario::class)->findBy($filters);
        else
            return $this->em->getRepository(Usuario::class)->findAll();
    }

    public function updateUser($idUsuario, $rol)
    {
        $this->em->getRepository(Usuario::class)->updateUser($idUsuario, $rol);
    }

    public function updateUserByPassAndImage($idUsuario, Usuario $usuario)
    {
        $this->em->getRepository(Usuario::class)->updateUserByPassAndImage($idUsuario, $usuario);
    }

    public function createUser(Usuario $usuario)
    {
        $this->em->persist($usuario);
        $this->em->flush();
    }


    /*----------------------------------------------------------------------------------------------------------------*/
    /*-------------------------------                     API REST                 -----------------------------------*/
    /*----------------------------------------------------------------------------------------------------------------*/

    /**
     * @var UserPasswordEncoderInterface $encoder
     */
    private $encoder;

    /**
     * @var JWTTokenManagerInterface
     */
    private $jwtManager;

    public function setEncoder(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function setJWTManager(JWTTokenManagerInterface $jwtManager)
    {
        $this->jwtManager = $jwtManager;
    }

    public function nuevo($email, $username, $image, $fk_provincia, $password, $rol, $idioma)
    {
        $usuario = new Usuario();

        $provincia = $this->em->getRepository('App:Provincia')->findOneBy(['id'=>$fk_provincia]);

        $usuario->setEmail($email);
        $usuario->setUsername($username);
        $usuario->setImagen($image);
        $usuario->setPassword($this->encoder->encodePassword($usuario, $password));
        $usuario->setIdioma($idioma);
        $usuario->setRol($rol);
        $usuario->setFkProvincia( $provincia );

        return $this->guardaValidando($usuario);
    }


    public function profile()
    {
        $usuario = $this->getUser();
        return $this->toArray($usuario);
    }

    public function getProfile()
    {
        $actual = $this->getUser();
        return $actual;
    }

    public function getAll()
    {
        $users = $this->em->getRepository(Usuario::class)->findAll();
        return $this->entitiesToArray($users);
    }

    public function cambiarPassword($password)
    {
        $usuarioActual = $this->getUser();
        $usuarioActual->setPassword($this->encoder->encodePassword($usuarioActual, $password));
        return $this->guardaValidando($usuarioActual);
    }

    public function getTokenByEmail($email)
    {
        $usuario = $this->em->getRepository(Usuario::class)->findOneBy(array('email'=>$email));

        if (is_null($usuario))
            throw new AccessDeniedHttpException('Usuario no autorizado');

        return $this->jwtManager->create($usuario);
    }

    public function toArray($usuario)
    {
        if (is_null($usuario))
            return null;

        if (!($usuario instanceof Usuario))
            throw new \Symfony\Component\Config\Definition\Exception\Exception("La entidad no es de tipo Usuario");

        return [
            'id' => $usuario->getId(),
            'email' => $usuario->getEmail(),
            'password' => $usuario->getPassword(),
            'username' => $usuario->getUsername(),
            'fk_provincia' => $usuario->getFkProvincia(),
            'imagen' => $usuario->getImagen(),
            'rol' => $usuario->getRol(),
            'idioma' => $usuario->getIdioma()
        ];
    }



    public function update(Usuario $usuario, array $datos)
    {
        $provincia = $this->em->getRepository('App:Provincia')->findOneBy(['id'=>$datos['fk_provincia']]);

        $usuario->setUsername($datos['username']);
        $usuario->setEmail($datos['email']);
        $usuario->setPassword($this->encoder->encodePassword($usuario, $datos['password']));
        $usuario->setFkProvincia( $provincia );
        $usuario->setImagen($datos['imagen']);
        $usuario->setRol($datos['rol']);
        $usuario->setIdioma($datos['idioma']);

        return $this->guardaValidando($usuario);
    }


}