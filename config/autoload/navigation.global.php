<?php

/**
 * Coolcsn Zend Framework 2 Navigation Module
 * 
 * @link https://github.com/coolcsn/CsnAclNavigation for the canonical source repository
 * @copyright Copyright (c) 2005-2013 LightSoft 2005 Ltd. Bulgaria
 * @license https://github.com/coolcsn/CsnAclNavigation/blob/master/LICENSE BSDLicense
 * @authors Stoyan Cheresharov <stoyan@coolcsn.com>, Anton Tonev <atonevbg@gmail.com>
 */
return array(
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Home',
                'route' => 'home',
                'resource' => 'Application\Controller\Index',
                'privilege' => 'index',
            ),
            array(
                'label' => 'Login',
                'route' => 'login',
                'controller' => 'Index',
                'action' => 'login',
                'resource' => 'CsnUser\Controller\Index',
                'privilege' => 'login',
            ),
            array(
                'label' => 'User',
                'route' => 'user',
                'controller' => 'Index',
                'action' => 'index',
                'resource' => 'CsnUser\Controller\Index',
                'privilege' => 'index',
            ),
            array(
                'label' => 'Registration',
                'route' => 'registration',
                'controller' => 'Registration',
                'action' => 'index',
                'resource' => 'CsnUser\Controller\Registration',
                'privilege' => 'index',
                'title' => 'Registration Form'
            ),
            array(
                'label' => 'Edit profile',
                'route' => 'editProfile',
                'controller' => 'Registration',
                'action' => 'editProfile',
                'resource' => 'CsnUser\Controller\Registration',
                'privilege' => 'editProfile',
            ),
            array(
                'label' => 'File Manager',
                'route' => 'csn-file-manager',
                'controller' => 'Index',
                'action' => 'index',
                'resource' => 'CsnFileManager\Controller\Index',
                'privilege' => 'index'
            ),
            array(
                'label' => 'Content Management System',
                'route' => 'csn-cms/default',
                'action'     => 'index',
                'controller' => 'Index',
                'params' => array('controller' => 'index', 'action' => 'index'),
                'resource'	=> 'CsnCms\Controller\Index',
                'privilege'	=> 'index',
/*                'pages' => array(
                    array(
                        'label' => 'Articles',
                        'route' => 'csn-cms/default',
                        'params' => array('controller' => 'article', 'action' => 'index'),
                        'resource'	=> 'CsnCms\Controller\Index',
                        'privilege'	=> 'index',
                    ),
                    array(
                        'label' => 'Category',
                        'route' => 'csn-cms/default',
                        'params' => array('controller' => 'category', 'action' => 'index'),
                        'resource'	=> 'CsnCms\Controller\Index',
                        'privilege'	=> 'index',
                    ),
                ),*/
            ),
            array(
                'label' => 'Logout',
                'route' => 'logout',
                'controller' => 'Index',
                'action' => 'logout',
                'resource' => 'CsnUser\Controller\Index',
                'privilege' => 'logout'
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
        ),
    ),
);
