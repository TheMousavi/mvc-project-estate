<?php

return [
    'SMTP' => [
        'Host' => 'smtp.gmail.com',
        'SMTPAuth' => true ,
        'Username' => 'yourmail@gmail.com' ,
        'Password' => 'yourpass',
        'Port' => 587 ,
        'setFrom' => [
            'mail' => 'yourmail@gmail.com',
            'name' => 'php-mvc'
        ]
    ]
];
