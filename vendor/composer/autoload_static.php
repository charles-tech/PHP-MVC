<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8b18b8ac8ae09217e6d3360d67b4abc0
{
    public static $files = array (
        '8f0e24c82839054e36346ca24952f364' => __DIR__ . '/../..' . '/config/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8b18b8ac8ae09217e6d3360d67b4abc0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8b18b8ac8ae09217e6d3360d67b4abc0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8b18b8ac8ae09217e6d3360d67b4abc0::$classMap;

        }, null, ClassLoader::class);
    }
}
