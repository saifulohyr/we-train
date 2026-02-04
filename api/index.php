<?php

/*
|--------------------------------------------------------------------------
| Vercel Environment Setup
|--------------------------------------------------------------------------
|
| Vercel is a read-only environment, so we need to point all temporary
| storage paths to the ephemeral /tmp directory.
|
*/
if (!is_dir('/tmp/storage')) {
    mkdir('/tmp/storage', 0777, true);
    mkdir('/tmp/storage/framework/views', 0777, true);
    mkdir('/tmp/storage/framework/cache', 0777, true);
    mkdir('/tmp/storage/framework/sessions', 0777, true);
    mkdir('/tmp/storage/logs', 0777, true);
}

// Ensure environment variables are set for Vercel
$_ENV['APP_STORAGE'] = '/tmp/storage';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
$_ENV['CACHE_PATH'] = '/tmp/storage/framework/cache';
$_ENV['SESSION_PATH'] = '/tmp/storage/framework/sessions';
$_ENV['LOG_PATH'] = '/tmp/storage/logs';

// Standard Laravel entry
require __DIR__ . '/../public/index.php';
