<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=v_shipinbaoku_com',
            'username' => 'shipinbaoku',
            'password' => 'shipinbaoku',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport'=>[
                'class'=>'Swift_SmtpTransport',
                'host'=>'smtp.sendcloud.net',
                'username'=>'shipinbaoku_usersignup',
                'password'=>'nJiBZ7zghwQIjrGw',
                'port'=>'25',
                //'encryption'=>'ssl',
                'encryption'=>'tls',
            ],
            //配置邮箱'service@company.com'
            /*'transport'=>[
                'class'=>'Swift_SmtpTransport',
                'host'=>'smtp.company.com',
                'username'=>'service@company.com',
                'password'=>'service password',
                'port'=>'465',
                'encryption'=>'ssl',
            ],*/

        ],
    ],
];
