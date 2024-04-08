<?php

use App\Http\Controllers\TurmaController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::resource ('/turma', TurmaController::class );