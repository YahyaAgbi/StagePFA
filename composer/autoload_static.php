<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4600c079029d5d91e3d08622caebf231
{
    public static $files = array (
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Runtime\\Symfony\\Component\\' => 34,
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Component\\Runtime\\' => 26,
        ),
        'D' => 
        array (
            'Doctrine\\Orm\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Runtime\\Symfony\\Component\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/runtime/Internal',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Component\\Runtime\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/runtime',
        ),
        'Doctrine\\Orm\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4600c079029d5d91e3d08622caebf231::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4600c079029d5d91e3d08622caebf231::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4600c079029d5d91e3d08622caebf231::$classMap;

        }, null, ClassLoader::class);
    }
}
