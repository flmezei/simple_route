<?php

include "vendor/autoload.php";

use Flmezei\SimpleRoute\core\Requests\Request;

$request = new Request();
print_r('<pre>');
print_r($request->server());
print_r('<pre>');
print_r($request->baseUrl());
print_r('<pre>');
print_r($request->method());
print_r('<pre>');
print_r($request->ip());
print_r('<pre>');
print_r($request->path());
print_r('<pre>');
print_r($request->accepts());

?>
