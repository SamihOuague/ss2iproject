<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOb14xVx\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOb14xVx/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerOb14xVx.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerOb14xVx\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerOb14xVx\App_KernelProdContainer([
    'container.build_hash' => 'Ob14xVx',
    'container.build_id' => '2d19e6a4',
    'container.build_time' => 1610338157,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOb14xVx');