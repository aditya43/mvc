<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit20ea714ddd3474daa21b054cdf24f894
{
    public static $classMap = array (
        'Adi\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'Adi\\Controllers\\TasksController' => __DIR__ . '/../..' . '/app/controllers/TasksController.php',
        'Adi\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'Adi\\Core\\Database' => __DIR__ . '/../..' . '/core/Database.php',
        'Adi\\Core\\DatabaseQueries' => __DIR__ . '/../..' . '/core/DatabaseQueries.php',
        'Adi\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Adi\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'Adi\\Models\\Task' => __DIR__ . '/../..' . '/app/models/Task.php',
        'ComposerAutoloaderInit20ea714ddd3474daa21b054cdf24f894' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit20ea714ddd3474daa21b054cdf24f894' => __DIR__ . '/..' . '/composer/autoload_static.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit20ea714ddd3474daa21b054cdf24f894::$classMap;

        }, null, ClassLoader::class);
    }
}