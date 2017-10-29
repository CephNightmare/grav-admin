<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'F:/wamp64/www/grav-admin/user/themes/cesis/blueprints/home.yaml',
    'modified' => 1509289510,
    'data' => [
        'title' => 'Home',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'fields' => [
                                'header.cesis.headerTitle' => [
                                    'type' => 'text',
                                    'label' => 'Header Title'
                                ],
                                'header.cesis.backgroundImage' => [
                                    'type' => 'file',
                                    'label' => 'Background Image',
                                    'destination' => 'self@',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
