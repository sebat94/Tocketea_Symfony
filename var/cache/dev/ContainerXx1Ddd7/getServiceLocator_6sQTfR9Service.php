<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.6sQTfR9' shared service.

return $this->privates['service_locator.6sQTfR9'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('usuarioBLL' => function (): ?\App\BLL\UsuarioBLL {
    return ($this->privates['App\BLL\UsuarioBLL'] ?? $this->load(__DIR__.'/getUsuarioBLLService.php'));
}));
