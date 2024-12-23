<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use RectorLaravel\Set\LaravelLevelSetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/rector.php',
        __DIR__ . '/app',
        __DIR__ . '/bootstrap',
        __DIR__ . '/config',
        __DIR__ . '/database',
        __DIR__ . '/public/index.php',
        __DIR__ . '/resources/views',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ])
    ->withSets([
        LaravelLevelSetList::UP_TO_LARAVEL_110,
    ]);
