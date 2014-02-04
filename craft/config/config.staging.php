<?php

/**
 * Staging Environment Settings
 */

$env_conf = array(
    // Config overrides
    'devMode'   => true,

    // Environment Variables
    'environmentVariables'  => array(
        'siteUrl'           => 'http://clientsite.yoursite.com',
        'fileSystemPath'    => '/var/www/vhosts/clientsite/public/',
    ),

    // Database
    'dbConfig'  => array(
        'server'    => '',
        'user'      => '',
        'password'  => '',
        'database'  => '',
    ),
);