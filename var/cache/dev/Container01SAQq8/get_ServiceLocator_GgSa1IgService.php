<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.GgSa1Ig' shared service.

return $this->privates['.service_locator.GgSa1Ig'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService.php', true],
    'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService.php', true],
]);
