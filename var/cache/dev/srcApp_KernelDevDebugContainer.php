<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBtPQal3\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBtPQal3/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBtPQal3.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBtPQal3\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerBtPQal3\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'BtPQal3',
    'container.build_id' => '571bd71b',
    'container.build_time' => 1563570547,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBtPQal3');
