<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f49963de0d0dcc4037dac593674c24b
{
    public static $files = array (
        '271cb6f21c9ae69ccbad5cc1b8d6707c' => __DIR__ . '/..' . '/wapmorgan/morphos/src/English/functions.php',
        '34d31f2fd925dfe2696a521f5ec12db2' => __DIR__ . '/..' . '/wapmorgan/morphos/src/Russian/functions.php',
        '9f42032f40ad305aa09829c3c1f0768d' => __DIR__ . '/..' . '/wapmorgan/morphos/src/initialization.php',
    );

    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'morphos\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'morphos\\' => 
        array (
            0 => __DIR__ . '/..' . '/wapmorgan/morphos/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f49963de0d0dcc4037dac593674c24b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f49963de0d0dcc4037dac593674c24b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
