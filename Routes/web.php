<?php

include "./vendor/autoload.php";

use App\Http\Controllers\LoginController;
use Flmezei\SimpleRoute\Core\Routes\Route;

Route::get("/", [LoginController::class, "index"]);
Route::get("register", [LoginController::class, "create"]);
Route::post("save-register/{id}", [LoginController::class, "store"]);
Route::get("edit-register/{id}", [LoginController::class, "edit"]);
Route::put("update-register/{id}", [LoginController::class, "store"]);
Route::delete("register/{id}", [LoginController::class, "delete"]);
Route::resource("login", LoginController::class);
