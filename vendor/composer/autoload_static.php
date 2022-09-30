<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd049fc0878c966029e49f4f3781dc4e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd049fc0878c966029e49f4f3781dc4e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd049fc0878c966029e49f4f3781dc4e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd049fc0878c966029e49f4f3781dc4e::$classMap;

        }, null, ClassLoader::class);
    }
}
