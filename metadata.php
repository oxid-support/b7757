<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

use OxidEsales\Eshop\Application\Controller\Admin\OrderMain;
use OxidSupport\B7757\Application\Controller\Admin\OrderMain as B7757OrderMain;

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id'          => 'oxs_b7757',
    'title'       => 'workaround b7757',
    'description' =>  '',
    'thumbnail'   => 'pictures/logo.png',
    'version'     => '1.0.0',
    'author'      => 'OXID eSales AG',
    'url'         => '',
    'email'       => 'support@oxid-esales.com',
    'extend'      => [
        OrderMain::class => B7757OrderMain::class
    ],
    'controllers' => [
    ],
    'events' => [
    ],
    'settings' => [
    ],
];
