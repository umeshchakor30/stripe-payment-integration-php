<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb596313a73a41d43a18e3855c982989a
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb596313a73a41d43a18e3855c982989a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb596313a73a41d43a18e3855c982989a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb596313a73a41d43a18e3855c982989a::$classMap;

        }, null, ClassLoader::class);
    }
}
