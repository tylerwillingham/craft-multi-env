<?php

/**
 * Production Environment Settings
 */

$env_conf = array(
    // Config overrides

    // Environment Variables
    'environmentVariables'  => array(
        'siteUrl'           => 'http://site.com',
        'fileSystemPath'    => '/var/www/site.com/public/',
    ),

    // Database
    'dbConfig'  => array(
        'server'    => '',
        'user'      => '',
        'password'  => '',
        'database'  => '',
    ),
);