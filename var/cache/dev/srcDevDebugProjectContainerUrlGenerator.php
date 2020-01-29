<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        'tocketea_eventos' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    'id' => NULL,    '_controller' => 'App\\Controller\\EventoController::showEventsIndex',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
        'app_rest_authrest_gettoken' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\REST\\AuthRestController::getTokenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/v1/auth/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_all_events' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_format' => 'json',    '_controller' => 'App\\Controller\\REST\\EventRestController::getAll',  ),  2 =>   array (    '_format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/v1/eventos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_one_event' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_format' => 'json',    '_controller' => 'App\\Controller\\REST\\EventRestController::getOne',  ),  2 =>   array (    '_format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/v1/evento',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_tickets' => array (  0 =>   array (    0 => 'idEvento',    1 => '_format',  ),  1 =>   array (    '_format' => 'json',    '_controller' => 'App\\Controller\\REST\\EventRestController::entradasCompradas',  ),  2 =>   array (    '_format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/entradas',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idEvento',    ),    3 =>     array (      0 => 'text',      1 => '/api/v1/evento',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'buy_tickets' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_format' => 'json',    '_controller' => 'App\\Controller\\REST\\EventRestController::comprarEntradas',  ),  2 =>   array (    'id' => '\\d+',    '_format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/comprar',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/api/v1/eventos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'register' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_format' => 'json',    '_controller' => 'App\\Controller\\REST\\UserRestController::register',  ),  2 =>   array (    '_format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/v1/auth/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_rest_userrest_googlelogin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\REST\\UserRestController::googleLogin',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/v1/auth/login/google',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'profile' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_format' => 'json',    '_controller' => 'App\\Controller\\REST\\UserRestController::profile',  ),  2 =>   array (    '_format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/v1/usuarios/profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cambia_password' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_format' => 'json',    '_controller' => 'App\\Controller\\REST\\UserRestController::cambiaPassword',  ),  2 =>   array (    '_format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/v1/profile/password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_all_users' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_format' => 'json',    '_controller' => 'App\\Controller\\REST\\UserRestController::getAll',  ),  2 =>   array (    '_format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/v1/usuarios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_usuario' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_format' => 'json',    '_controller' => 'App\\Controller\\REST\\UserRestController::delete',  ),  2 =>   array (    'id' => '\\d+',    '_format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/v1/usuarios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'update_user' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_format' => 'json',    '_controller' => 'App\\Controller\\REST\\UserRestController::update',  ),  2 =>   array (    'id' => '\\d+',    '_format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/v1/usuarios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'registerAdmin' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_format' => 'json',    '_controller' => 'App\\Controller\\REST\\UserRestController::registerAdmin',  ),  2 =>   array (    '_format' => 'json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/v1/auth/register/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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