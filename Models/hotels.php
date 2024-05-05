<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'hotelId' => 1,
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'hotelId' => 2,
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'hotelId' => 3,
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'hotelId' => 4,
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'hotelId' => 5,
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
    [
        'name' => 'Hotel Bellaspiaggia',
        'hotelId' => 6,
        'description' => 'Hotel Bellaspiaggia Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 12
    ],
    [
        'name' => 'Hotel San Giorgio',
        'hotelId' => 7,
        'description' => 'Hotel San Giorgio Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 11
    ],
    [
        'name' => 'Hotel San Niccolo',
        'hotelId' => 8,
        'description' => 'Hotel San Niccolo Descrizione',
        'parking' => true,
        'vote' => 3,
        'distance_to_center' => 15
    ],
    [
        'name' => 'Hotel Torre di Vittoria',
        'hotelId' => 9,
        'description' => 'Hotel Torre di Vittoria Descrizione',
        'parking' => false,
        'vote' => 3,
        'distance_to_center' => 7
    ],
    [
        'name' => 'Hotel Bellaroma',
        'hotelId' => 10,
        'description' => 'Hotel Bellaroma Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 6
    ]
];

// Nel model ci saranno tutte le nostre funzioni/metodi che riguardano i dati. Più in la i dati li andremo a prendere direttamente nel database

// In questo caso vado a scrivere la funzione di recupero dati qui nel Models
function getHotelsData($hotels) {
    $hotelsdata = $hotels;
    if (!empty($_GET['stats']) || (isset($_GET['stats']) && $_GET['stats'] == 0)) {
        $stats = $_GET['stats'];
        $hotelsdata = array_filter($hotels, function ($item) use ($stats) {

            return $item['parking'] == true || $stats == "all";
        });
    }  
return $hotelsdata;
}

function getHotelsByStars($hotels) {
    if (!empty($_GET['stars']) || (isset($_GET['stars']) && $_GET['stars'] >= 1 && $_GET['stars'] <= 5)) {
        $stars = $_GET['stars'];
        $starsdata = $hotels;
        $starsdata = array_filter($hotels, function ($item) use ($stars) {
            if ($stars == 1) {
                return $item['vote'] >= 1;
            } else if ($stars == 2) {
                return $item['vote'] >= 2;
            } else if ($stars == 3) {
                return $item['vote'] >= 3;
            } else if ($stars == 4) {
                return $item['vote'] >= 4;
            } else if ($stars == 5) {
                return $item['vote'] == 5;
            }
        });
    }  
return $starsdata;
}
    

function getHotelsByID($hotels)
{
    $hotelsdata = array_filter($hotels, function ($item) {
        return $item['hotelId'] == $_GET['id'];
    });
    $detail = array_shift($hotelsdata);
    return $detail;
}
?>