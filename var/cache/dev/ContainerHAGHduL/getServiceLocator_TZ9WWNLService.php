<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.TZ9WWNL' shared service.

return $this->privates['service_locator.TZ9WWNL'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('entradaBll' => function (): ?\App\BLL\EntradaBLL {
    return ($this->privates['App\BLL\EntradaBLL'] ?? $this->load(__DIR__.'/getEntradaBLLService.php'));
}, 'eventoBLL' => function (): ?\App\BLL\EventoBLL {
    return ($this->privates['App\BLL\EventoBLL'] ?? $this->load(__DIR__.'/getEventoBLLService.php'));
}, 'usuarioBLL' => function (): ?\App\BLL\UsuarioBLL {
    return ($this->privates['App\BLL\UsuarioBLL'] ?? $this->load(__DIR__.'/getUsuarioBLLService.php'));
}));
