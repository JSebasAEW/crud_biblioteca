<?php

use App\Http\Controllers\LibrosController;
use Illuminate\Support\Facades\Route;


Route::get("/", [LibrosController::class, "index"])->name("biblioteca.inicio");
Route::get("/create", [LibrosController::class, "create"])->name("biblioteca.create");
Route::post("/store", [LibrosController::class, "store"])->name("biblioteca.store");
Route::get("/edit/{id}", [LibrosController::class, "edit"])->name("biblioteca.edit");
Route::put("/update/{id}", [LibrosController::class, "update"])->name("biblioteca.update");
Route::get("/show/{id}", [LibrosController::class, "show"])->name("biblioteca.show");
Route::delete("/destroy/{id}", [LibrosController::class, "destroy"])->name("biblioteca.destroy");
