<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.D5mB_BZ' shared service.

return $this->privates['.service_locator.D5mB_BZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'cour' => ['privates', 'App\\Entity\\Cours', 'getCoursService.php', true],
]);
