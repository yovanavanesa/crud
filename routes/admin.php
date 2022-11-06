<?php

use App\Http\Controllers\ClientController;
use App\Models\client;
use Illuminate\Support\Facades\Route;

Route::get('admin', function () {
    return "Hola Administrador";
}); 