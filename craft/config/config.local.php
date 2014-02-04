<?php

/**
 * Local Dev Environment Settings
 */

$env_conf = array(
    // Config overrides
    'devMode'   => true,

    // Environment Variables
    'environmentVariables'  => array(
        'siteUrl'           => 'http://site.dev',
        'fileSystemPath'    => '/Development/site/public/',
    ),

    // Database
    'dbConfig'  => array(
        'server'    => '',
        'user'      => '',
        'password'  => '',
        'database'  => '',
    ),
);