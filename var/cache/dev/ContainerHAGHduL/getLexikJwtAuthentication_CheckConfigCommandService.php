<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'lexik_jwt_authentication.check_config_command' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Command\\ContainerAwareCommand.php';
include_once $this->targetDirs[3].'\\vendor\\lexik\\jwt-authentication-bundle\\Command\\CheckConfigCommand.php';

$this->privates['lexik_jwt_authentication.check_config_command'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Command\CheckConfigCommand();

$instance->setName('lexik:jwt:check-config');

return $instance;
