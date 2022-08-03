<?php
include "core/Requests/Request.php";

$request = new Request();
print_r($request->input('idade'));
die;

?>



