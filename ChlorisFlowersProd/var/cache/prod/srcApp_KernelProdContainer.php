<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerW562nj2\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerW562nj2/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerW562nj2.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerW562nj2\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerW562nj2\srcApp_KernelProdContainer([
    'container.build_hash' => 'W562nj2',
    'container.build_id' => '171afbe7',
    'container.build_time' => 1632239246,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerW562nj2');
