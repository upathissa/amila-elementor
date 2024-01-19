<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit79bf1b639a529c9b0fb5997343f2fca0
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Elementor_Test_Addon\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Elementor_Test_Addon\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit79bf1b639a529c9b0fb5997343f2fca0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit79bf1b639a529c9b0fb5997343f2fca0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit79bf1b639a529c9b0fb5997343f2fca0::$classMap;

        }, null, ClassLoader::class);
    }
}