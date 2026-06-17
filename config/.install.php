<?php
/**
 * Этот файл является частью модуля веб-приложения RosGear.
 * 
 * Файл конфигурации установки модуля.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'use'         => BACKEND,
    'id'          => 'rg.be.recovery',
    'name'        => 'Account recovery',
    'description' => 'Recovering access to Control Panel account',
    'namespace'   => 'Rg\Backend\Recovery',
    'path'        => '/rg/rg.be.recovery',
    'route'       => 'recovery',
    'routes'      => [
        [
            'type'    => 'crudSegments',
            'options' => [
                'module'      => 'rg.be.recovery',
                'route'       => 'recovery',
                'prefix'      => BACKEND,
                'childRoutes' => [
                    'verify' => [
                        'route'    => 'verify',
                        'defaults' => ['action' => 'verify']
                    ]
                ]
            ]
        ]
    ],
    'locales'     => ['ru_RU', 'en_GB'],
    'permissions' => ['settings', 'info'],
    'events'      => [],
    'required'    => [
        ['php', 'version' => '8.2'],
        ['app', 'code' => 'RG Workspace'],
        ['app', 'code' => 'RG CMS'],
        ['app', 'code' => 'RG CRM'],
    ]
];
