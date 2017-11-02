<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'F:/wamp64/www/grav-admin/user/themes/cesis/blueprints/taxatieaanvraag.yaml',
    'modified' => 1509656430,
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
                                'header.cesis.formTitle' => [
                                    'type' => 'text',
                                    'label' => 'Form Title'
                                ],
                                'header.cesis.formIntro' => [
                                    'type' => 'textarea',
                                    'label' => 'Form Intro'
                                ],
                                'header.cesis.servicesTitle' => [
                                    'type' => 'text',
                                    'label' => 'Diensten Title'
                                ],
                                'header.cesis.servicesIntro' => [
                                    'type' => 'textarea',
                                    'label' => 'Diensten Intro'
                                ],
                                'header.cesis.servicesBlock1' => [
                                    'type' => 'fieldset',
                                    'title' => 'diensten Blok 1',
                                    'icon' => 'comments',
                                    'collapsed' => false,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.cesis.servicesBlock1.title' => [
                                            'type' => 'text',
                                            'label' => 'Title'
                                        ],
                                        'header.cesis.servicesBlock1.text' => [
                                            'type' => 'textarea',
                                            'label' => 'Text'
                                        ],
                                        'header.cesis.servicesBlock1.buttonText' => [
                                            'type' => 'textarea',
                                            'label' => 'Button Text'
                                        ],
                                        'header.cesis.servicesBlock1.buttonLink' => [
                                            'type' => 'pages',
                                            'size' => 'medium',
                                            'classes' => 'fancy',
                                            'label' => 'PLUGIN_ADMIN.HOME_PAGE',
                                            'show_all' => true,
                                            'show_modular' => true,
                                            'show_root' => true,
                                            'help' => 'PLUGIN_ADMIN.HOME_PAGE_HELP'
                                        ]
                                    ]
                                ],
                                'header.cesis.servicesBlock2' => [
                                    'type' => 'fieldset',
                                    'title' => 'diensten Blok 2',
                                    'icon' => 'comments',
                                    'collapsed' => false,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.cesis.servicesBlock2.title' => [
                                            'type' => 'text',
                                            'label' => 'Title'
                                        ],
                                        'header.cesis.servicesBlock2.text' => [
                                            'type' => 'textarea',
                                            'label' => 'Text'
                                        ],
                                        'header.cesis.servicesBlock2.buttonText' => [
                                            'type' => 'textarea',
                                            'label' => 'Button Text'
                                        ],
                                        'header.cesis.servicesBlock2.buttonLink' => [
                                            'type' => 'pages',
                                            'size' => 'medium',
                                            'classes' => 'fancy',
                                            'label' => 'PLUGIN_ADMIN.HOME_PAGE',
                                            'show_all' => true,
                                            'show_modular' => true,
                                            'show_root' => true,
                                            'help' => 'PLUGIN_ADMIN.HOME_PAGE_HELP'
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
