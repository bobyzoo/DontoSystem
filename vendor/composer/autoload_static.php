<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48f16b60c9cf678b9c572d7522fcc5a5
{
    public static $files = array (
        'be9349f5be2d562299d1cf728664dc76' => __DIR__ . '/../..' . '/src/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit48f16b60c9cf678b9c572d7522fcc5a5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48f16b60c9cf678b9c572d7522fcc5a5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
