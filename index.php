<!-- Descrizione
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus:
1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel. -->
<?php 

// Includiamo i nostri dati della cartella Models

    include __DIR__ ."/Models/hotels.php";

    // Includiamo i nostri componenti della cartella Views

    if (!empty($_GET['choices']) || (isset($_GET['choices']) && $_GET['choices'] == 0)) {
        $choices = $_GET['choices'];
        $hotels = array_filter($hotels, function ($hotel) use ($choices) {
          return $hotel['parking'] == $choices || $choices == "all";
        });
      } else {
        $hotel = $hotels;
      }

      if (!empty($_GET['stars']) || (isset($_GET['stars']) && $_GET['stars'] == 0)) {
        $rating = $_GET['stars'];
        $hotels = array_filter($hotels, function ($hotel) use ($rating) {
          return $hotel['vote'] >= $rating || $rating == "all";
        });
      }

    include __DIR__ . "/Views/header.php";
    include __DIR__ ."/Views/main.php";
    include __DIR__ ."/Views/footer.php";
    

    

?>

<main>

</main>




