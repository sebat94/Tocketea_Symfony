<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 20/02/2018
 * Time: 1:19
 */

namespace App\Controller\REST;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthRestController extends BaseApiController
{

    /**
     * @Route("/auth/login")
     */
    public function getTokenAction()
    {
        // La capa de seguridad intercepta la petición
        return new Response("", Response::HTTP_UNAUTHORIZED);
    }

}