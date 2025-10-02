<?php

use App\Http\Controllers\ApiInfoController;
use Illuminate\Support\Facades\Route;

Route::get('{any}', function () {
    return view('api_info');
})->where('any', '(?!api).*');
