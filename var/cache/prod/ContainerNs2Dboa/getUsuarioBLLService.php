<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\BLL\UsuarioBLL' shared autowired service.

include_once $this->targetDirs[3].'\\src\\BLL\\UsuarioBLL.php';

return $this->privates['App\BLL\UsuarioBLL'] = new \App\BLL\UsuarioBLL(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
