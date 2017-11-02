<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'F:/wamp64/www/grav-admin/user/themes/cesis/blueprints/detailpagina.yaml',
    'modified' => 1509654704,
    'data' => [
        'title' => 'detailpagina',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'fields' => [
                                'header.cesis.backgroundImage' => [
                                    'type' => 'file',
                                    'label' => 'Background Image',
                                    'destination' => 'self@',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ],
                                'header.cesis.headerTitle' => [
                                    'type' => 'text',
                                    'label' => 'Header Title'
                                ],
                                'header.cesis.headerSubTitle' => [
                                    'type' => 'textarea',
                                    'label' => 'Header SubTitle'
                                ],
                                'header.cesis.content' => [
                                    'label' => 'Body Tekst',
                                    'type' => 'markdown',
                                    'validate' => [
                                        'type' => 'textarea'
                                    ]
                                ],
                                'header.cesis.formTitle' => [
                                    'type' => 'text',
                                    'label' => 'Form Title'
                                ],
                                'header.cesis.formIntro' => [
                                    'type' => 'textarea',
                                    'label' => 'Form Intro'
                                ],
                                'header.cesis.callToAction' => [
                                    'type' => 'fieldset',
                                    'title' => 'Call to Action',
                                    'icon' => 'comments',
                                    'collapsed' => false,
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.cesis.callToAction.title' => [
                                            'type' => 'text',
                                            'label' => 'Title'
                                        ],
                                        'header.cesis.callToAction.buttonText' => [
                                            'type' => 'text',
                                            'label' => 'Button Text'
                                        ],
                                        'header.cesis.callToAction.buttonLink' => [
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
