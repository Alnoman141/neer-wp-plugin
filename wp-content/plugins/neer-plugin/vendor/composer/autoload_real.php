<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitba3752219144458eb0f9f9def4d6b668
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitba3752219144458eb0f9f9def4d6b668', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitba3752219144458eb0f9f9def4d6b668', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitba3752219144458eb0f9f9def4d6b668::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
