<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_map' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\RequestMatcherInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\RequestMatcher.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\AccessMapInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\AccessMap.php';

$this->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/(login | $)'), array(0 => 'IS_AUTHENTICATHED_ANONYMOUSLY'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/comprador'), array(0 => 'ROLE_COMPRADOR'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/gestor'), array(0 => 'ROLE_GESTOR'), NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin'), array(0 => 'ROLE_ADMINISTRADOR'), NULL);

return $instance;
