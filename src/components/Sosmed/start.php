<?php

/*
|--------------------------------------------------------------------------
| Register Namespaces And Routes
|--------------------------------------------------------------------------
|
| When a module starting, this file will executed automatically. This helps
| to register some namespaces like translator or view. Also this file
| will load the routes file for each module. You may also modify
| this file as you want.
|
*/

Lang::addNamespace('sosmed', __DIR__.'/Resources/lang');

View::addNamespace('sosmed', __DIR__.'/Resources/views');

require __DIR__ . '/Http/routes.php';
