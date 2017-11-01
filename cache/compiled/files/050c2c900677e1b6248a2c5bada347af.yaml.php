<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'F:/wamp64/www/grav-admin/user/themes/cesis/blueprints/werkwijze.yaml',
    'modified' => 1509571844,
    'data' => [
        'title' => 'taxatieaanvraag',
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
                                    'label' => 'Intro Text'
                                ],
                                'header.cesis.backgroundImage' => [
                                    'type' => 'file',
                                    'label' => 'Background Image',
                                    'destination' => 'self@',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ],
                                'header.cesis.step1' => [
                                    'type' => 'fieldset',
                                    'title' => 'Stap 1',
                                    'icon' => 'comments',
                                    'collapsed' => false,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.cesis.step1.title' => [
                                            'type' => 'text',
                                            'label' => 'Title'
                                        ],
                                        'header.cesis.step1.text' => [
                                            'type' => 'textarea',
                                            'label' => 'Text'
                                        ]
                                    ]
                                ],
                                'header.cesis.step2' => [
                                    'type' => 'fieldset',
                                    'title' => 'Stap 2',
                                    'icon' => 'comments',
                                    'collapsed' => false,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.cesis.step2.title' => [
                                            'type' => 'text',
                                            'label' => 'Title'
                                        ],
                                        'header.cesis.step2.text' => [
                                            'type' => 'textarea',
                                            'label' => 'Text'
                                        ]
                                    ]
                                ],
                                'header.cesis.step3' => [
                                    'type' => 'fieldset',
                                    'title' => 'Stap 3',
                                    'icon' => 'comments',
                                    'collapsed' => false,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.cesis.step3.title' => [
                                            'type' => 'text',
                                            'label' => 'Title'
                                        ],
                                        'header.cesis.step3.text' => [
                                            'type' => 'textarea',
                                            'label' => 'Text'
                                        ]
                                    ]
                                ],
                                'header.cesis.step4' => [
                                    'type' => 'fieldset',
                                    'title' => 'Stap 4',
                                    'icon' => 'comments',
                                    'collapsed' => false,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.cesis.step4.title' => [
                                            'type' => 'text',
                                            'label' => 'Title'
                                        ],
                                        'header.cesis.step4.text' => [
                                            'type' => 'textarea',
                                            'label' => 'Text'
                                        ]
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