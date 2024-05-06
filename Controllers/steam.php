<?php
include __DIR__ . "/../Models/hotels.php";

function printRows($data)
{
    $template = "";
    foreach ($data as $item) {
        $template .= "<tr class='text-center table-light'> <td>{$item['hotelId']}</td> <td>{$item['name']}</td> <td>{$item['vote']}</td> <td>{$item['distance_to_center']}</td> <td>{$item['parking']}</td> </tr>";
    }
    return $template;

}

//recupero dati dal model
$data = getHotelsData($hotels);
// $data = getHotelsByStars($hotels);


//recupero singolo hotel
