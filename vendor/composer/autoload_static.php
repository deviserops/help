<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit567a1a6a5f8ea7db0cd92f8d4c3efd8d
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Deviser\\Help\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Deviser\\Help\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit567a1a6a5f8ea7db0cd92f8d4c3efd8d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit567a1a6a5f8ea7db0cd92f8d4c3efd8d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit567a1a6a5f8ea7db0cd92f8d4c3efd8d::$classMap;

        }, null, ClassLoader::class);
    }
}
