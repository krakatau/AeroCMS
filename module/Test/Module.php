<?php

namespace Test;

use Zend\Config\Config,
    Zend\Loader\AutoloaderFactory,
    Zend\Module\Manager;

class Module
{
    public function init(Manager $moduleManager)
    {
        $this->initAutoloader();
    }

    public function initAutoloader()
    {
        AutoloaderFactory::factory(array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        ));
    }

    public function getConfig($env = null)
    {
        $config = new Config(
            include __DIR__ . '/config/module.config.php'
        );
        if ($env and isset($config->{$env})) {
            return $config->{$env};
        }
        return $config;
    }
}
