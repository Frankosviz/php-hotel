<?php

for ($i = 0; $i < count($hotels); $i++) {
    $templateHotel = $hotels[$i];
    
    echo "<div class='container'>"; 
    echo $templateHotel; 
    echo "</div>";
}

?>

<body>
    
    <div class="container">
        <?php echo $templateHotel; ?>
    </div>
</body>