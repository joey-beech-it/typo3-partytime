<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Partytown',
    'description' => 'A extension that adds required javascript to enable partytown',
    'category' => 'fe',
    'version' => '1.0.0',
    'state' => 'beta',
    'author' => 'Joey Bouten',
    'author_email' => 'typo3ext@beech.it',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
