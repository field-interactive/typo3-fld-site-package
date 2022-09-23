<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Base Package',
    'description' => 'Field Interactive TYPO3 Base Package',
    'category' => 'templates',
    'author' => 'Field Interactive',
    'author_email' => 'support@field-interactive.com',
    'author_company' => 'Field Interactive',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];