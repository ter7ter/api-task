<?php

use App\Http\Controllers\TaskController;
use App\Http\Middleware\ForceJsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('tasks', TaskController::class)->middleware(ForceJsonResponse::class);
