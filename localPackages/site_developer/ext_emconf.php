<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Developer Site',
    'description' => 'Sitepackage for developer training',
    'version' => '1.0.x-dev',
    'category' => 'example',
    'constraints' => [
        'depends' => [
            'php' => '7.2.0-7.4.99',
            'typo3' => '9.5.0-9.99.99',
        ],
    ],
    'state' => 'stable',
    'author' => 'TYPO3 Trainer Network',
    'author_email' => 'trainer-network@typo3.org',
    'author_company' => 'TYPO3 Trainer Network',
    'autoload' => [
        'psr-4' => [
            'TTN\\SiteDeveloper\\' => 'Classes/',
        ],
    ],
    'autoload-dev' => [
        'psr-4' => [
            'TTN\\SiteDeveloper\\Tests\\' => 'Tests/',
        ],
    ],
];
