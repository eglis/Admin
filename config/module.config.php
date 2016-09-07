<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonAdmin for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'asset_manager' => array(
        'resolver_configs' => array(
            'collections' => array(
                'js/administration.js' => array(
                    'commons/js/jquery-1.11.1.js',
                    'commons/js/bootstrap.min.js',
                    'commons/js/bootstrap-hogan-2.0.0.js',
                    'commons/js/bootstrap-typeahead.min.js',
                    'js/ckeditor.path.js',
                    'commons/ckeditor/ckeditor.js',
                    'commons/ckeditor/adapters/jquery.js',
                    'commons/js/jquery.datetimepicker.js',
                    'js/jquery.jqGrid.min.js',
                    'js/admin.js',
                ),
                'css/administration.css' => array(
                    'commons/css/bootstrap.min.css',
                    'commons/css/bootstrap-typeahead.css',
                    'commons/css/font-awesome.min.css',
                    'commons/css/jquery.datetimepicker.css',
                    'css/ui.jqgrid.css',
                    'css/admin.css',
                ),
            ),
            'paths' => array(
                __DIR__ . '/../public',
                __DIR__ . '/../../../../public'
            ),
        ),
    ),
    'bjyauthorize' => array(
        'guards' => array(
            'BjyAuthorize\Guard\Route' => array(
                //Admin module
                array('route' => 'zfcadmin', 'roles' => array('admin')),
            ),
        ),
    ),
    'navigation' => array(
        'admin' => array(
            'home' => array(
                'label' => _('Dashboard'),
                'route' => 'zfcadmin',
                'icon' => 'fa fa-tachometer',
                'resource' => 'adminmenu',  // look at the bjyauthorize.global.php config file
                'privilege' => 'list',
                'pages' => array(
                    array(
                        'label' => _('Public site'),
                        'route' => 'home',
                        'icon' => 'fa fa-globe'
                    ),
                ),),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
        'invokables' => array(
            'Zend\Session\SessionManager' => 'Zend\Session\SessionManager',
        ),
        'factories' => array(
            'goalioforgotpassword_forgot_form' => 'Admin\Factory\ForgotFactory',
        ),
    ),
    'zfcadmin' => array(
        'admin_layout_template' => 'layout/backend'
    ),

    'view_helpers' => array(

        'factories' => array(
            'languages' => 'Admin\Factory\LanguagesHelperFactory',
        )
    ),
    'view_manager' => array(
        'template_map' => array(
            'layout/backend' => __DIR__ . '/../view/layout/backend.phtml',
            'admin/index/index' => __DIR__ . '/../view/admin/index/index.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view'
        )
    ),

);
