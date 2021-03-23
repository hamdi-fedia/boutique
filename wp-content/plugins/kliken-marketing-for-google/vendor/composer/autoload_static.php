<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3189846b77ba157bf806f2ea8cf80c49
{
    public static $classMap = array (
        'Kliken\\WcPlugin\\Helper' => __DIR__ . '/../..' . '/classes/class-helper.php',
        'Kliken\\WcPlugin\\Message' => __DIR__ . '/../..' . '/classes/class-message.php',
        'Kliken\\WcPlugin\\Plugin' => __DIR__ . '/../..' . '/classes/class-plugin.php',
        'Kliken\\WcPlugin\\REST_Misc_Controller' => __DIR__ . '/../..' . '/classes/class-rest-misc-controller.php',
        'Kliken\\WcPlugin\\REST_Orders_Controller' => __DIR__ . '/../..' . '/classes/class-rest-orders-controller.php',
        'Kliken\\WcPlugin\\REST_Products_Controller' => __DIR__ . '/../..' . '/classes/class-rest-products-controller.php',
        'Kliken\\WcPlugin\\WC_Integration' => __DIR__ . '/../..' . '/classes/class-wc-integration.php',
        'Kliken\\WcPlugin\\WC_REST_Orders_Controller_Compat' => __DIR__ . '/../..' . '/classes/class-wc-rest-orders-controller-compat.php',
        'Kliken\\WcPlugin\\WC_REST_Products_Controller_Compat' => __DIR__ . '/../..' . '/classes/class-wc-rest-products-controller-compat.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit3189846b77ba157bf806f2ea8cf80c49::$classMap;

        }, null, ClassLoader::class);
    }
}
