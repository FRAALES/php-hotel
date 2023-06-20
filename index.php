<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

// echo "<pre>";
// var_dump ($hotels);
// echo "</ pre";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <style>
    
    </style>
    </head>
    <body>
        <!-- Qui inserisco la tabella con i 5 hotel e i loro dati -->

        <table class="table table-info">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">1</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Nome Hotel</th>
                    <?php
                    foreach ($hotels as $hotel) {
                        echo '<td>' . $hotel['name'] . '</td>';
                    }
                    ?>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <?php
                    foreach ($hotels as $hotel) {
                        echo '<td>' . $hotel['description'] . '</td>';
                    }
                    ?>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <?php
                    foreach ($hotels as $hotel) {
                        echo '<td>' . $hotel['parking'] . '</td>';
                    }
                    ?>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <?php
                    foreach ($hotels as $hotel) {
                        echo '<td>' . $hotel['vote'] . '</td>';
                    }
                    ?>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <?php
                    foreach ($hotels as $hotel) {
                        echo '<td>' . $hotel['distance_to_center'] . '</td>';
                    }
                    ?>
                </tr>
            </tbody>
        </table>
            
    </body>
</html>