<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZcird1m\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZcird1m/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZcird1m.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZcird1m\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerZcird1m\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Zcird1m',
    'container.build_id' => 'cf388da6',
    'container.build_time' => 1644926838,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZcird1m');
