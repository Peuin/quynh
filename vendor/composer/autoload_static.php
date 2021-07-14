<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26833a7fc15750065a09dfddc6b43999
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cowsayphp\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cowsayphp\\' => 
        array (
            0 => __DIR__ . '/..' . '/alrik11es/cowsayphp/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26833a7fc15750065a09dfddc6b43999::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26833a7fc15750065a09dfddc6b43999::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}