<?php

/**
 * Client Staging Environment Settings
 */

$env_conf = array(
    // Config overrides

    // Environment Variables
    'environmentVariables'  => array(
        'siteUrl'           => 'http://staging.site.com',
        'fileSystemPath'    => '/var/www/staging.site.com/public/',
    ),

    // Database
    'dbConfig'  => array(
        'server'    => '',
        'user'      => '',
        'password'  => '',
        'database'  => '',
    ),
);