<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\BLL\EntradaBLL' shared autowired service.

include_once $this->targetDirs[3].'\\src\\BLL\\BaseBLL.php';
include_once $this->targetDirs[3].'\\src\\BLL\\EntradaBLL.php';

return $this->privates['App\BLL\EntradaBLL'] = new \App\BLL\EntradaBLL(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['validator'] ?? $this->getValidatorService()), ($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()));
