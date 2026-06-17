<?php
/**
 * Этот файл является частью модуля веб-приложения RosGear.
 * 
 * Файл конфигурации Карты SQL-запросов.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'drop'   => ['{{user_recovery}}'],
    'create' => [
        '{{user_recovery}}' => function () {
            return "CREATE TABLE `{{user_recovery}}` (
                `user_id` int(11) unsigned NOT NULL DEFAULT '0',
                `email` varchar(100) DEFAULT NULL,
                `token` varchar(128) DEFAULT '',
                `password` text,
                `date` datetime DEFAULT NULL,
                PRIMARY KEY (`user_id`),
                UNIQUE KEY `token` (`token`),
                KEY `email` (`email`)
            ) ENGINE={engine} 
            DEFAULT CHARSET={charset} COLLATE {collate}";
        }
    ],

    'run' => [
        'install'   => ['drop', 'create'],
        'uninstall' => ['drop']
    ]
];