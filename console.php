#!/usr/bin/env php
<?php
// console.php
// TO RUN: php console.php app:test-command

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application();

// ... register commands
$application->add( new \Dprc\Spider\ScrollSpider\Commands\TestCommand() );

$application->run();