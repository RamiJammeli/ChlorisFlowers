<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAsY0r53\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAsY0r53/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAsY0r53.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAsY0r53\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerAsY0r53\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'AsY0r53',
    'container.build_id' => '2f99e451',
    'container.build_time' => 1632481114,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAsY0r53');
