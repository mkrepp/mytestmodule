<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'mytestmodule',
    'title'       => array(
        'de' => 'My test module'
    ),
    'description' => array(
        'de' => '<h2>My test module</h2>'
    ),
    'thumbnail'   => '',
    'version'     => '1.0.0',
    'author'      => 'Matthias Krepp',
    'url'         => '',
    'email'       => 'hepppes@gmx.de',
    'extend'      => array(),
    'controllers'       => array(
        'mytestcontroller' => \mkrepp\mytestmodule\Controller\MyTestController::class,
    ),
    'templates'   => array(
        'mytestcontroller.tpl' => 'mkrepp/mytestmodule/views/tpl/mytestcontroller.tpl'
    ),
    'blocks'      => array(),
    'settings'    => array(),
    'events'      => array(),
);