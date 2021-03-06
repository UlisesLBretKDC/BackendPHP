<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite609f238268d60752b0026344f23ea87
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite609f238268d60752b0026344f23ea87::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite609f238268d60752b0026344f23ea87::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
