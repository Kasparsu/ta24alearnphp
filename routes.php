<?php

use App\Controllers\PublicController;
use App\Router;

Router::addRoute('/', [PublicController::class, 'index']);

Router::addRoute('/us', [PublicController::class, 'us']);

Router::addRoute('/test', [PublicController::class, 'test']);

Router::addRoute('/form', [PublicController::class, 'form']);
Router::addRoute('/answer', [PublicController::class, 'answer']);

