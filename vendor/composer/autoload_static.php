<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39c6f54b3d1f0dc0bac36db60e592159
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit39c6f54b3d1f0dc0bac36db60e592159::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39c6f54b3d1f0dc0bac36db60e592159::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
