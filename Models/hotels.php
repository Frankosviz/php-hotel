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

// Nel model ci saranno tutte le nostre funzioni/metodi che riguardano i dati. Più in la i dati li andremo a prendere direttamente nel database

// In questo caso vado a scrivere la funzione di recupero dati qui nel Models
function getHotels($hotels)
{
    if (!empty($_GET['choices']) || (isset($_GET['choices']) && $_GET['choices'] == 0)) {
        $choices = $_GET['choices'];
        $hotels = array_filter($hotels, function ($hotel) use ($choices) {
            return $hotel['parking'] == $choices || $choices == "all";
        });
    } 
    if (!empty($_GET['stars']) || (isset($_GET['stars']) && $_GET['stars'] == 0)) {
        $rating = $_GET['stars'];
        $hotels = array_filter($hotels, function ($hotel) use ($rating) {
            return $hotel['vote'] >= $rating || $rating == "all";
        });
    }
}
?>