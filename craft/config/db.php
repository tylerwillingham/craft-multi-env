<?php

/**
 * Define dbConfig in relevant environment config
 */

return array(
    '*' => array(
        'tablePrefix'   => 'craft',
    ),
    CRAFT_ENVIRONMENT   => $env_conf['dbConfig'], // named for illustrative purposes
);