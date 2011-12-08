<?php

namespace Test\Controller;

use Zend\Mvc\Controller\ActionController;

class HelloController extends ActionController
{
    public function worldAction()
    {
        $message = $this->getRequest()->query()->get('message', 'foo');
        return array('message' => $message);
    }
}
