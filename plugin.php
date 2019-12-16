<?php

/**
 * Include the autoload file, created by Composer
 */
require __DIR__ . '/vendor/autoload.php';

return [
    /**
     * Specify the commands, that should be available with this plugin.
     */
    'commands' => [
        \__NAMESPACE__\__PLUGIN_NAME__\Commands\DummyCommand::class
    ],
];
