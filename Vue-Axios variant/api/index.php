<?php

require __DIR__ . '/../../partials/database.php';

header('Content-Type: application/json');
// header('Access-Control-Allow-Origin: *');

$genres = [];

foreach( $database as $album ) {
    if( !in_array($album['genre'], $genres) ) {
        $genres[] = $album['genre'];
    }
}

if ( !empty($_GET['genre']) ) {
    
    $selectedGenre = $_GET['genre'];
    $databaseFiltered =[];

    foreach( $database as $album ) {
        if ($album['genre'] == $selectedGenre) {
            $databaseFiltered[] = $album;
        }
    }
    
    echo json_encode($databaseFiltered);

} else {
    echo json_encode(array($database, $genres));
}

?>