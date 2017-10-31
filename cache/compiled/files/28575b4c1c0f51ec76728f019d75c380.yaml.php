<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'F:/wamp64/www/grav-admin/user/config/plugins/email.yaml',
    'modified' => 1509478023,
    'data' => [
        'enabled' => true,
        'from' => 'info@esmeijermakelaardij.nl',
        'from_name' => 'Patricia Esmeijer',
        'to' => 'info@esmeijermakelaardij.nl',
        'to_name' => 'Patricis Esmeijer',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => true
    ]
];
