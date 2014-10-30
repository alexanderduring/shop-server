<?php

namespace Shop\Controller\Rest;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class CampaignController extends AbstractRestfulController
{
    private $collectionOptions = array('GET', 'POST');
    private $resourceOptions = array('GET', 'POST', 'DELETE');
    private $campaigns = array(
        '1' => array(
            'id' => 1,
            'name' => 'Dauerkampagne'
        ),
        '2' => array(
            'id' => 2,
            'name' => 'Studentenrabatt'
        )
    );



    public function getList()
    {
        return new JsonModel($this->campaigns);
    }



    public function get($id) {
        return new JsonModel($this->campaigns[$id]);
    }
}
