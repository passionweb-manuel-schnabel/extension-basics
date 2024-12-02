<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Custom extension development',
    'description' => 'Shows the custom development of extension in TYPO3 and their customization options',
    'category' => 'be',
    'author' => 'Manuel Schnabel',
    'author_email' => 'service@passionweb.de',
    'author_company' => 'PassionWeb Manuel Schnabel',
    'state' => 'stable',
    'version' => '1.5.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
