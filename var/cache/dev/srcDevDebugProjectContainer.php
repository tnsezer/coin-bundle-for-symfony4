<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBZdpYGt\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBZdpYGt/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerBZdpYGt.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerBZdpYGt\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerBZdpYGt\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'BZdpYGt',
    'container.build_id' => '8c38d3dd',
    'container.build_time' => 1519765924,
));
