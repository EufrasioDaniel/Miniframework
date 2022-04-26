<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit144058a4625837d28026c87cc0c15bf0
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit144058a4625837d28026c87cc0c15bf0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit144058a4625837d28026c87cc0c15bf0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
