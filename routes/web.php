<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicoController;

Route::get('/', function () {
    return "as";
});


Route::resource('servicos', ServicoController::class);

//Route::get('/servicos',[ServicoController::class,'index']);