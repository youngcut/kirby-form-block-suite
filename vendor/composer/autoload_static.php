<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcdf2c876f02b13skr9b845a8b588ad5e
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'microman\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'microman\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcdf2c876f02b13skr9b845a8b588ad5e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcdf2c876f02b13skr9b845a8b588ad5e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcdf2c876f02b13skr9b845a8b588ad5e::$classMap;

        }, null, ClassLoader::class);
    }
}
