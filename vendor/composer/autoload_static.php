<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd681342c572147296fe615715e0f1fcd
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd681342c572147296fe615715e0f1fcd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd681342c572147296fe615715e0f1fcd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd681342c572147296fe615715e0f1fcd::$classMap;

        }, null, ClassLoader::class);
    }
}
