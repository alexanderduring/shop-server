<?php

namespace Shop\Controller\Rest;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class UserController extends AbstractRestfulController
{
    private $collectionOptions = array('GET', 'POST');
    private $resourceOptions = array('GET', 'POST', 'DELETE');
    private $users = array(
        '1' => array(
            'id' => 1,
            'name' => 'John Doe'
        ),
        '2' => array(
            'id' => 2,
            'name' => 'Charly Customer'
        )
    );



    public function getList()
    {
        return new JsonModel($this->users);
    }



    public function get($id) {
        return new JsonModel($this->users[$id]);
    }
}
