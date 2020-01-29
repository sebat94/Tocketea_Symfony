<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'tocketea_entradas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\EntradaController::showTickets',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comprador/entradas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tocketea_comprar_entradas' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\EntradaController::buyTickets',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/entradas/comprar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tocketea_eventos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\EventoController::showEventsIndex',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tocketea_detalles_evento' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\EventoController::showEventDetails',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/eventos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tocketea_mis_eventos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\EventoController::showMyEvents',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comprador/eventos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tocketea_crear_evento' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    'id' => NULL,    '_controller' => 'App\\Controller\\EventoController::nuevoFormEvento',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/gestor/form_evento',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_evento_eliminarevento' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\EventoController::eliminarEvento',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eliminar',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gestor/eventos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_pages_nosotros' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\PagesController::nosotros',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nosotros',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tocketea_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\SecurityController::login',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tocketea_registro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\SecurityController::nuevoFormUsuario',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tocketea_perfil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\UsuarioController::perfil',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comprador/perfil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_usuario_deleteuser' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\UsuarioController::deleteUser',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eliminar',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/usuarios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tocketea_usuarios' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\UsuarioController::listarUsuarios',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/usuarios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tocketea_upgradear_usuario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\UsuarioController::updateUser',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/usuarios/actualizar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/salir',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
