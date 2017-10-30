<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'F:/wamp64/www/grav-admin/user/themes/cesis/blueprints/home.yaml',
    'modified' => 1509398527,
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
                                'header.cesis.headerSubTitle' => [
                                    'type' => 'text',
                                    'label' => 'Header SubTitle'
                                ],
                                'header.cesis.introTitle' => [
                                    'type' => 'text',
                                    'label' => 'Intro Title'
                                ],
                                'header.cesis.introText' => [
                                    'type' => 'textarea',
                                    'label' => 'Intro Title'
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
