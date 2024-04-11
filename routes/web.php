<?php

use App\Http\Controllers\TurmaController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('aluno');
});
Route::get('/Professor', function () {
    return view('professor');
});
Route::get('/admin', function () {
    return view('admin');
});


Route::get('/turma', [TurmaController::class, 'index']) -> name('turma.index'); 

Route::get('/turma/create', [TurmaController::class, 'create']) -> name('turma.create');

Route::post('/turma', [TurmaController::class, 'store']) -> name('turma.store');

Route::get('/turma/{id}', [TurmaController::class, 'show']) -> name('turma.show');

Route::get('/turma/{id}/edit', [TurmaController::class, 'edit']) -> name('turma.edit');

Route::put('/turma/{id}', [TurmaController::class, 'update']) -> name('turma.update');

Route::delete('/turma/{id}', [TurmaController::class, 'destroy']) -> name('turma.destroy');


