<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a0872979d32784c1cfbad911dd401c5
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Orhanerday\\OpenAi\\' => 18,
        ),
        'B' => 
        array (
            'Bxml\\Veep\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Orhanerday\\OpenAi\\' => 
        array (
            0 => __DIR__ . '/..' . '/orhanerday/open-ai/src',
        ),
        'Bxml\\Veep\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a0872979d32784c1cfbad911dd401c5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a0872979d32784c1cfbad911dd401c5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1a0872979d32784c1cfbad911dd401c5::$classMap;

        }, null, ClassLoader::class);
    }
}
