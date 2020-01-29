<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        // tocketea_entradas
        if ('/comprador/entradas' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_tocketea_entradas;
            }

            return array (  '_controller' => 'App\\Controller\\EntradaController::showTickets',  '_route' => 'tocketea_entradas',);
        }
        not_tocketea_entradas:

        // tocketea_comprar_entradas
        if (0 === strpos($pathinfo, '/entradas/comprar') && preg_match('#^/entradas/comprar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_tocketea_comprar_entradas;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tocketea_comprar_entradas')), array (  '_controller' => 'App\\Controller\\EntradaController::buyTickets',));
        }
        not_tocketea_comprar_entradas:

        // tocketea_eventos
        if (preg_match('#^/(?P<id>\\d+)?$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_tocketea_eventos;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tocketea_eventos')), array (  'id' => NULL,  '_controller' => 'App\\Controller\\EventoController::showEventsIndex',));
        }
        not_tocketea_eventos:

        // tocketea_detalles_evento
        if (0 === strpos($pathinfo, '/eventos') && preg_match('#^/eventos/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_tocketea_detalles_evento;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tocketea_detalles_evento')), array (  '_controller' => 'App\\Controller\\EventoController::showEventDetails',));
        }
        not_tocketea_detalles_evento:

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

        elseif (0 === strpos($pathinfo, '/api/v1')) {
            if (0 === strpos($pathinfo, '/api/v1/auth/login')) {
                // app_rest_authrest_gettoken
                if ('/api/v1/auth/login' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\REST\\AuthRestController::getTokenAction',  '_route' => 'app_rest_authrest_gettoken',);
                }

                // app_rest_userrest_googlelogin
                if ('/api/v1/auth/login/google' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\REST\\UserRestController::googleLogin',  '_route' => 'app_rest_userrest_googlelogin',);
                }

            }

            elseif (0 === strpos($pathinfo, '/api/v1/auth/register')) {
                // register
                if (preg_match('#^/api/v1/auth/register(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_register;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'register')), array (  '_format' => 'json',  '_controller' => 'App\\Controller\\REST\\UserRestController::register',));
                }
                not_register:

                // registerAdmin
                if (0 === strpos($pathinfo, '/api/v1/auth/register/admin') && preg_match('#^/api/v1/auth/register/admin(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_registerAdmin;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'registerAdmin')), array (  '_format' => 'json',  '_controller' => 'App\\Controller\\REST\\UserRestController::registerAdmin',));
                }
                not_registerAdmin:

            }

            elseif (0 === strpos($pathinfo, '/api/v1/evento')) {
                // get_all_events
                if (0 === strpos($pathinfo, '/api/v1/eventos') && preg_match('#^/api/v1/eventos(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_get_all_events;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_all_events')), array (  '_format' => 'json',  '_controller' => 'App\\Controller\\REST\\EventRestController::getAll',));
                }
                not_get_all_events:

                // get_one_event
                if (preg_match('#^/api/v1/evento/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_get_one_event;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_one_event')), array (  '_format' => 'json',  '_controller' => 'App\\Controller\\REST\\EventRestController::getOne',));
                }
                not_get_one_event:

                // get_tickets
                if (preg_match('#^/api/v1/evento/(?P<idEvento>[^/]++)/entradas(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_get_tickets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_tickets')), array (  '_format' => 'json',  '_controller' => 'App\\Controller\\REST\\EventRestController::entradasCompradas',));
                }
                not_get_tickets:

                // buy_tickets
                if (0 === strpos($pathinfo, '/api/v1/eventos') && preg_match('#^/api/v1/eventos/(?P<id>\\d+)/comprar(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_buy_tickets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'buy_tickets')), array (  '_format' => 'json',  '_controller' => 'App\\Controller\\REST\\EventRestController::comprarEntradas',));
                }
                not_buy_tickets:

            }

            elseif (0 === strpos($pathinfo, '/api/v1/usuarios')) {
                // profile
                if (0 === strpos($pathinfo, '/api/v1/usuarios/profile') && preg_match('#^/api/v1/usuarios/profile(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_profile;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile')), array (  '_format' => 'json',  '_controller' => 'App\\Controller\\REST\\UserRestController::profile',));
                }
                not_profile:

                // get_all_users
                if (preg_match('#^/api/v1/usuarios(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_get_all_users;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_all_users')), array (  '_format' => 'json',  '_controller' => 'App\\Controller\\REST\\UserRestController::getAll',));
                }
                not_get_all_users:

                // delete_usuario
                if (preg_match('#^/api/v1/usuarios/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_delete_usuario;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_usuario')), array (  '_format' => 'json',  '_controller' => 'App\\Controller\\REST\\UserRestController::delete',));
                }
                not_delete_usuario:

                // update_user
                if (preg_match('#^/api/v1/usuarios/(?P<id>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_update_user;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_user')), array (  '_format' => 'json',  '_controller' => 'App\\Controller\\REST\\UserRestController::update',));
                }
                not_update_user:

            }

            // cambia_password
            if (0 === strpos($pathinfo, '/api/v1/profile/password') && preg_match('#^/api/v1/profile/password(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ('PATCH' !== $canonicalMethod) {
                    $allow[] = 'PATCH';
                    goto not_cambia_password;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cambia_password')), array (  '_format' => 'json',  '_controller' => 'App\\Controller\\REST\\UserRestController::cambiaPassword',));
            }
            not_cambia_password:

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        // logout
        if ('/salir' === $pathinfo) {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
