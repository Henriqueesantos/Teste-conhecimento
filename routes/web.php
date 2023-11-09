<?php
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidosController;


Route::resource('pedidos', PedidosController::class);


