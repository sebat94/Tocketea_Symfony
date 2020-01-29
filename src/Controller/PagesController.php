<?php
/**
 * Created by PhpStorm.
 * Usuario: Daniel
 * Date: 25/01/2018
 * Time: 10:55
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class PagesController extends Controller
{

    /**
     * @Route("/nosotros")
     * @Method("GET")
     */
    public function nosotros()
    {
        return $this->render("public/nosotros.html.twig");
    }

}