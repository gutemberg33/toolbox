<?php
/*
* Define each name associated with a URL
 */

/*$config = [
    'beesite' => [
        'name' => 'Beesite';
        'nav_id' => '#beesite';
        'content_path' => '/modules/beesi';
        'link' => [
            'xxxxx' => 'Link a'
            'bbbbb' => 'Link b'
            'ccccc' => 'Link c'
            'ddddd' => 'Link d'
        ];
    ]
];*/

$navs = array(
    'Beesite' => '#beesite',
    'Composer' => '#composer',
    'Crons' => '#crons',
    'SQL' => '#sql',
    'Migration' => '#migration',
    'Debugging' => '#debugging',
    'GIT' => '#versionctrl',
);

$pages = [
    'pagekey' => array(
        'beesite' => '/modules/beesite.php',
        'composer' => '/modules/composer.php',
        'crons' => '/modules/crons.php',
        'sql' => '/modules/sql.php',
        'migration' => '/modules/migration.php',
        'debugging' => '/modules/debugging.php',
        'versionctrl' => '/modules/version.php',
    ),
];

$gitlinks = [
    'GIT' => array(
        'Individual Developer' => 'https://git-scm.com/docs/giteveryday#STANDALONE',
        'Group Developer' => 'https://git-scm.com/docs/giteveryday#PARTICIPANT',
        'Integrator' => 'https://git-scm.com/docs/giteveryday#INTEGRATOR',
        'Repostory Administration' => 'https://git-scm.com/docs/giteveryday#ADMINISTRATION',
    ),
];