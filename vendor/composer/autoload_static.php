<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1cd641add704f20d69f1cf34d27761b
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/model',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controller',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1cd641add704f20d69f1cf34d27761b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1cd641add704f20d69f1cf34d27761b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
