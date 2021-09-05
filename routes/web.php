<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UsuariosController;

Route::get('/', function () { return view('login'); });

Route::get('/usuarios/autenticar', [UsuariosController::class, 'autenticar']);
