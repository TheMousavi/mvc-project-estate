<?php

return [
    'SMTP' => [
        'Host' => 'smtp.gmail.com',
        'SMTPAuth' => true ,
        'Username' => 'your email@gmail.com' ,
        'Password' => 'your pass',
        'Port' => 587 ,
        'setFrom' => [
            'mail' => 'your email@gmail.com',
            'name' => 'php-mvc'
        ]
    ]
];
