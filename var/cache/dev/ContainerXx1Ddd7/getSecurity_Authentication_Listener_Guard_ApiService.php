<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.guard.api' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Guard\\GuardAuthenticatorHandler.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Firewall\\ListenerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Guard\\Firewall\\GuardAuthenticationListener.php';

return $this->privates['security.authentication.listener.guard.api'] = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener(new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService())), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), 'api', new RewindableGenerator(function () {
    yield 0 => ($this->privates['lexik_jwt_authentication.security.guard.jwt_token_authenticator'] ?? $this->load(__DIR__.'/getLexikJwtAuthentication_Security_Guard_JwtTokenAuthenticatorService.php'));
}, 1), ($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()));
