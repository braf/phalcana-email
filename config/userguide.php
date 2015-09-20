<?php

return new \Phalcon\Config(array(

    'modules' => array(
        'email' => array(
            'enabled' => false,
            'name' => 'Email',
            'description' => 'Swiftmailer wrapper for Phalcana.',
        ),
    ),

));
