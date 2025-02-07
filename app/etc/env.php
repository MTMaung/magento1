<?php
return [
    'backend' => [
        'frontName' => 'harb8vlyxbglpwxc'
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'mfXIRJQkx9NCqmZ1jejdFg3xAFZUmZDT'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => '8d8_'
            ],
            'page_cache' => [
                'id_prefix' => '8d8_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'config' => [
        'async' => 0
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'base64jG1jC5l9IgJGr1oDKCD7iBRwc3pspIqZq0w5cSYpsGM='
    ],
    'db' => [
        'table_prefix' => 'vbvn_',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'i8696651_pb901',
                'username' => 'i8696651_pb901',
                'password' => 'F.zi0phtAp95Zx6ITFg77',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'graphql_query_resolver_result' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'everestkzm.com'
    ],
    'install' => [
        'date' => 'Wed, 05 Feb 2025 06:26:47 +0000'
    ]
];
