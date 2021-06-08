<?php 

    include __DIR__ . '/data/db.php';
    header('Content-type: application/json');
    echo json_encode($database);

?>