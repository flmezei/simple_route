<?php

include "vendor/autoload.php";

use App\Http\Controllers\LoginController;
use Flmezei\SimpleRoute\Core\Requests\Request;
use Flmezei\SimpleRoute\Core\Routes\Route;

$request = new Request();

Route::resource("login", LoginController::class);



?>
