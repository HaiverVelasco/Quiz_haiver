<?php

use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;


route::get('libro/list',[LibroController::class,'list'])->name('libro.list');
route::get('libro/inicio',[LibroController::class,'inicio']);
route::post('libro/organizar',[LibroController::class,'organize'])->name('libro.organizar');
Route::get('libro/{libro}/show',[LibroController::class,'show'])->name('libro.show');
Route::delete('libro/{libro}',[LibroController::class,'destroy'])->name('libro.destroy');






