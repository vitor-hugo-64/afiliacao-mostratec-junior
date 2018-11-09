<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca164419a35c9b3b8871f552402e614f
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitca164419a35c9b3b8871f552402e614f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca164419a35c9b3b8871f552402e614f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
