<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9667acbd3e27970b244ed6beca6525f4
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Ophaant\\Ctmartisan\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ophaant\\Ctmartisan\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9667acbd3e27970b244ed6beca6525f4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9667acbd3e27970b244ed6beca6525f4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9667acbd3e27970b244ed6beca6525f4::$classMap;

        }, null, ClassLoader::class);
    }
}