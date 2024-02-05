<?php

/**
 * @package     FrameX (FX) OAuth Plugin
 * @link        https://localzet.gitbook.io
 * 
 * @author      localzet <creator@localzet.ru>
 * 
 * @copyright   Copyright (c) 2018-2020 Zorin Projects 
 * @copyright   Copyright (c) 2020-2022 NONA Team
 * 
 * @license     https://www.localzet.ru/license GNU GPLv3 License
 */

use plugin\oauth\app\DefaultCallback;

return [
    'debug' => true,
    'controller_suffix' => '',
    'controller_reuse' => true,

    'curl_options' => [],
    'providers' => [],
    'callback' => [DefaultCallback::class, 'callback'],
];
