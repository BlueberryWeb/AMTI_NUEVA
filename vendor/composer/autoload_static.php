<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78eebbb8d2fb8115c8bbacb5d20befbe
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit78eebbb8d2fb8115c8bbacb5d20befbe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78eebbb8d2fb8115c8bbacb5d20befbe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit78eebbb8d2fb8115c8bbacb5d20befbe::$classMap;

        }, null, ClassLoader::class);
    }
}
