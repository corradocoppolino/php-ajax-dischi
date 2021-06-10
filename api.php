<?php 

    include __DIR__ . '/data/db.php';
    header('Content-type: application/json');

    array_multisort(array_column($database,'year'),SORT_ASC,SORT_NUMERIC,$database);

    $genres = [];
    $albums = empty($_GET['genre']) || $_GET['genre'] === 'all' ? $database : [];

    if(count($albums) === 0){

        foreach($database as $album){
            if($album['genre'] === $_GET['genre']){
                $albums[] = $album;
            }
        }

    }

    foreach($database as $album){

        if(!in_array($album['genre'],$genres)){
            $genres[] = $album['genre'];
        }

    }

    $response = [

        'album' => $albums,
        'genres' => $genres

    ];

    echo json_encode($response);

?>