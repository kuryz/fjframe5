<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8eb2cba223ae7433c02be8e9c1509f02
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\controllers\\' => 16,
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8eb2cba223ae7433c02be8e9c1509f02::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8eb2cba223ae7433c02be8e9c1509f02::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8eb2cba223ae7433c02be8e9c1509f02::$classMap;

        }, null, ClassLoader::class);
    }
}
