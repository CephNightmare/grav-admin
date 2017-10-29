<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'F:/wamp64/www/grav-admin/user/themes/cesis/blueprints.yaml',
    'modified' => 1509288245,
    'data' => [
        'name' => 'Cesis',
        'version' => '0.1.0',
        'description' => 'Cesis is a theme made by Geert van Drunen for Grav',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Geert van Drunen',
            'email' => 'geert_van_drunen@live.nl'
        ],
        'homepage' => 'https://github.com/geert-van-drunen/grav-theme-cesis',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/geert-van-drunen/grav-theme-cesis/issues',
        'readme' => 'https://github.com/geert-van-drunen/grav-theme-cesis/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
