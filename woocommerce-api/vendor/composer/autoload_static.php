<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd61b3bce0eec67315bc389af2d0c02ff
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd61b3bce0eec67315bc389af2d0c02ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd61b3bce0eec67315bc389af2d0c02ff::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd61b3bce0eec67315bc389af2d0c02ff::$classMap;

        }, null, ClassLoader::class);
    }
}
