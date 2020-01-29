<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/comprador')) {
            // tocketea_entradas
            if ('/comprador/entradas' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_tocketea_entradas;
                }

                return array (  '_controller' => 'App\\Controller\\EntradaController::showTickets',  '_route' => 'tocketea_entradas',);
            }
            not_tocketea_entradas:

            // tocketea_mis_eventos
            if ('/comprador/eventos' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_tocketea_mis_eventos;
                }

                return array (  '_controller' => 'App\\Controller\\EventoController::showMyEvents',  '_route' => 'tocketea_mis_eventos',);
            }
            not_tocketea_mis_eventos:

            // tocketea_perfil
            if ('/comprador/perfil' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_tocketea_perfil;
                }

                return array (  '_controller' => 'App\\Controller\\UsuarioController::perfil',  '_route' => 'tocketea_perfil',);
            }
            not_tocketea_perfil:

        }

        // tocketea_comprar_entradas
        if (0 === strpos($pathinfo, '/entradas/comprar') && preg_match('#^/entradas/comprar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_tocketea_comprar_entradas;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tocketea_comprar_entradas')), array (  '_controller' => 'App\\Controller\\EntradaController::buyTickets',));
        }
        not_tocketea_comprar_entradas:

        // tocketea_detalles_evento
        if (0 === strpos($pathinfo, '/eventos') && preg_match('#^/eventos/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_tocketea_detalles_evento;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tocketea_detalles_evento')), array (  '_controller' => 'App\\Controller\\EventoController::showEventDetails',));
        }
        not_tocketea_detalles_evento:

        // tocketea_eventos
        if ('' === $trimmedPathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_tocketea_eventos;
            }

            $ret = array (  '_controller' => 'App\\Controller\\EventoController::showEventsIndex',  '_route' => 'tocketea_eventos',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'tocketea_eventos'));
            }

            return $ret;
        }
        not_tocketea_eventos:

        // tocketea_crear_evento
        if (0 === strpos($pathinfo, '/gestor/form_evento') && preg_match('#^/gestor/form_evento(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_tocketea_crear_evento;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tocketea_crear_evento')), array (  'id' => NULL,  '_controller' => 'App\\Controller\\EventoController::nuevoFormEvento',));
        }
        not_tocketea_crear_evento:

        // app_evento_eliminarevento
        if (0 === strpos($pathinfo, '/gestor/eventos') && preg_match('#^/gestor/eventos/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                $allow = array_merge($allow, array('GET', 'DELETE'));
                goto not_app_evento_eliminarevento;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_evento_eliminarevento')), array (  '_controller' => 'App\\Controller\\EventoController::eliminarEvento',));
        }
        not_app_evento_eliminarevento:

        // app_pages_nosotros
        if ('/nosotros' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_app_pages_nosotros;
            }

            return array (  '_controller' => 'App\\Controller\\PagesController::nosotros',  '_route' => 'app_pages_nosotros',);
        }
        not_app_pages_nosotros:

        // tocketea_login
        if ('/login' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_tocketea_login;
            }

            return array (  '_controller' => 'App\\Controller\\SecurityController::login',  '_route' => 'tocketea_login',);
        }
        not_tocketea_login:

        // tocketea_registro
        if ('/registro' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_tocketea_registro;
            }

            return array (  '_controller' => 'App\\Controller\\SecurityController::nuevoFormUsuario',  '_route' => 'tocketea_registro',);
        }
        not_tocketea_registro:

        if (0 === strpos($pathinfo, '/admin/usuarios')) {
            // app_usuario_deleteuser
            if (preg_match('#^/admin/usuarios/(?P<id>[^/]++)/eliminar$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                    $allow = array_merge($allow, array('GET', 'DELETE'));
                    goto not_app_usuario_deleteuser;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_usuario_deleteuser')), array (  '_controller' => 'App\\Controller\\UsuarioController::deleteUser',));
            }
            not_app_usuario_deleteuser:

            // tocketea_usuarios
            if ('/admin/usuarios' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_tocketea_usuarios;
                }

                return array (  '_controller' => 'App\\Controller\\UsuarioController::listarUsuarios',  '_route' => 'tocketea_usuarios',);
            }
            not_tocketea_usuarios:

            // tocketea_upgradear_usuario
            if ('/admin/usuarios/actualizar' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_tocketea_upgradear_usuario;
                }

                return array (  '_controller' => 'App\\Controller\\UsuarioController::updateUser',  '_route' => 'tocketea_upgradear_usuario',);
            }
            not_tocketea_upgradear_usuario:

        }

        // logout
        if ('/salir' === $pathinfo) {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
