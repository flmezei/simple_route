<?php

include "./vendor/autoload.php";

use App\Http\Controllers\LoginController;
use Flmezei\SimpleRoute\Core\Routes\Route;

Route::get("login", [LoginController::class, "index"]);
