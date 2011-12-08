<?php
return array(
    'di' => array(
        'instance' => array(
            'alias' => array(
                'hello' => 'Test\Controller\HelloController',
            ),
            'Zend\View\PhpRenderer' => array(
                'parameters' => array(
            		'resolver' => 'Zend\View\TemplatePathStack',
                    'options'  => array(
                        'script_paths' => array(
                            'Test' => __DIR__ . '/../views',
                        ),
                    ),
                ),
            ),
        ),
        'routes' => array(
        'test-hello-world' => array(
            'type'    => 'Zend\Mvc\Router\Http\Literal',
            'options' => array(
                'route' => '/hello/world',
                'defaults' => array(
                    'controller' => 'hello',
                    'action'     => 'world',
                    ),
                ),
            ),
        ),
    ),
);
