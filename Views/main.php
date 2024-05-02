<?php
$template = "";
foreach ($hotels as $hotel) {
    $template .= "<tr> <td class='text-center fw-bold'>{$hotel['name']}</td> <td class='text-center'>{$hotel['description']}</td> <td class='text-center'>{$hotel['parking']}</td> <td class='text-center'>{$hotel['vote']}</td> <td class='text-center'>{$hotel['distance_to_center']}</td> </tr>";

}


?>

<table class="table table-striped">
    <thead>
        <tr class="text-center background-light">
            <th class="text-primary fs-4" scope="col">Nome Hotel</th>
            <th class="text-primary fs-4" scope="col">Descrizione</th>
            <th class="text-primary fs-4" scope="col">Parcheggio</th>
            <th class="text-primary fs-4" scope="col">Voto (da 1 a 5 stelle)</th>
            <th class="text-primary fs-4" scope="col">Distanza dal centro (in km)</th>
        </tr>
    </thead>
    <tbody>
        <?= $template ?>

    </tbody>
</table>