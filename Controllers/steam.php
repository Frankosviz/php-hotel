<?php
include __DIR__ . "/../Models/steam.php";

function printRows($data)
{
    $template = "";
    foreach ($data as $item) {
        $template .= "<tr> <td>{$item['appid']}</td> <td>{$item['name']}</td> <td>{$item['playtime_forever']}</td> <td>{$item['has_community_visible_stats']}</td> </tr>";

    }
    return $template;

}

//recupero dati dal model
$data = getSteamData($db);

//recupero singolo gioco

//$gioco = getDetail($id, $db);