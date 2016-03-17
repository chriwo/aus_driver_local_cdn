<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'anders und sehr: Local filesystem FAL driver (CDN)',
    'description' => 'Provides a FAL local filesystem driver for CDN. See documentation for more details.',
    'category' => 'be',
    'version' => '1.0.1',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => false,
    'author' => 'Markus Hoelzle',
    'author_email' => 'm.hoelzle@andersundsehr.com',
    'author_company' => 'anders und sehr GmbH',
    'constraints' => array(
        'depends' => array(
            'typo3' => '6.2.0-7.6.99',
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
);
