<?php

    // Prendo dati dal database
    require __DIR__ . '/../data/database.php';
    
    // Converto la risposta in json
    header('Content-type: application/json');
    
    // Invio la risposta
    echo json_encode($db);
?>
