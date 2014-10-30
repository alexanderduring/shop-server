<?php

return array(
    'router' => array(
        'routes' => array(
            'rest_campaigns' => array(
                'type' => 'Zend\Mvc\Router\Http\Segment',
                'options' => array(
                    'route'    => '/rest/campaigns[/:id]',
                    'defaults' => array(
                        'controller' => 'Shop\Controller\Rest\Campaign'
                    ),
                ),
            ),
            'rest_users' => array(
                'type' => 'Zend\Mvc\Router\Http\Segment',
                'options' => array(
                    'route'    => '/rest/users[/:id]',
                    'defaults' => array(
                        'controller' => 'Shop\Controller\Rest\User'
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Shop\Controller\Rest\Campaign' => 'Shop\Controller\Rest\CampaignController',
            'Shop\Controller\Rest\User' => 'Shop\Controller\Rest\UserController'
        )
    )
);
