<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit24ff5354cff86e78a7eb46dbb216a3e0
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Veepia\\Veepiapage\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Veepia\\Veepiapage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit24ff5354cff86e78a7eb46dbb216a3e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit24ff5354cff86e78a7eb46dbb216a3e0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit24ff5354cff86e78a7eb46dbb216a3e0::$classMap;

        }, null, ClassLoader::class);
    }
}