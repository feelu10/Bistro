<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitabbcacb43291712ae0e7cff23008e9e3
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitabbcacb43291712ae0e7cff23008e9e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitabbcacb43291712ae0e7cff23008e9e3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitabbcacb43291712ae0e7cff23008e9e3::$classMap;

        }, null, ClassLoader::class);
    }
}
