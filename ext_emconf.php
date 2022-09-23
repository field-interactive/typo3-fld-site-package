<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Site Package',
    'description' => 'Field Interactive TYPO3 Site Package',
    'category' => 'templates',
    'author' => 'Field Interactive',
    'author_email' => 'support@field-interactive.com',
    'author_company' => 'Field Interactive',
    'version' => '1.0.0',
    'state' => 'stable',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.99.99',
            'fluid_styled_content' => '11.5.0-11.99.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
];