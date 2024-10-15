<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get(uri: '/', action: [ProductsController::class,'index']);
