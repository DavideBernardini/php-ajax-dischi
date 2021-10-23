<?php

require __DIR__ . '/../../partials/database.php';


header('Content-Type: application/json');
// header('Access-Control-Allow-Origin: *');

echo json_encode($database);

?>