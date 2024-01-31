<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit584a50ad341972e104c2605d89f0148d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit584a50ad341972e104c2605d89f0148d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit584a50ad341972e104c2605d89f0148d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
