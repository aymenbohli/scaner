<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.AQ2OBh_' shared service.

return $this->privates['.service_locator.AQ2OBh_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService.php', true],
    'questionRepository' => ['privates', 'App\\Repository\\QuestionRepository', 'getQuestionRepositoryService.php', true],
]);
