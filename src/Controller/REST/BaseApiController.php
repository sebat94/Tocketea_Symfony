<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 20/02/2018
 * Time: 1:39
 */

namespace App\Controller\REST;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class BaseApiController extends Controller
{
    protected function getContent(Request $request)
    {
        $data = json_decode ($request->getContent(), true);

        if ( is_null ($data )) {
            throw new BadRequestHttpException('No se han recibido datos');
        }

        return $data;
    }

    protected function getResponse(array $data=null, $statusCode = Response::HTTP_OK)
    {
        $response = new JsonResponse();

        if (!is_null($data))
        {
            $result['data'] = $data;

            $response->setContent(json_encode($result));
        }

        $response->setStatusCode($statusCode);

        return $response;
    }
}