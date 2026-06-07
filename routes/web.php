<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;

Route::get('/', function () {
    $alumno = "Constanza Castillo";
    $esAdmin = true;

    return view('inicio', compact('alumno', 'esAdmin'));
})->name('inicio');

Route::get('/catalogo', function () {
    $insumos = [
        ["nombre" => "Arduino Uno", "precio" => 15000],
        ["nombre" => "Protoboard", "precio" => 5000],
        ["nombre" => "Estaño", "precio" => 3000],
    ];

    return view('catalogo', compact('insumos'));
})->name('catalogo');

Route::get('/insumo/{id}', function ($id) {
    return view('detalle', compact('id'));
});

Route::get('/equipos', [EquipoController::class, 'index'])->name('equipos.index');

Route::post('/equipos/guardar', [EquipoController::class, 'store'])->name('equipos.store');