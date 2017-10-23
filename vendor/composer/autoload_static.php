<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit66fb72eb926cb0fd41ddf12e1c119569
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpImap\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpImap\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-imap/php-imap/src/PhpImap',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit66fb72eb926cb0fd41ddf12e1c119569::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit66fb72eb926cb0fd41ddf12e1c119569::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}