<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc92a1d4c713b6ae193eff2fce143c87
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Roots\\Composer\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Roots\\Composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/roots/wordpress-core-installer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc92a1d4c713b6ae193eff2fce143c87::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc92a1d4c713b6ae193eff2fce143c87::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}