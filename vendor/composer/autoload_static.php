<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5cc66066622b64b0a16bdc7dfaba047
{
    public static $classMap = array (
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'Post' => __DIR__ . '/../..' . '/Filtering_arrays/ararys.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite5cc66066622b64b0a16bdc7dfaba047::$classMap;

        }, null, ClassLoader::class);
    }
}