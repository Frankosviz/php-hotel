<?php
// Con questa variabile andiamo a fare partire la sessione 
session_start();
if (!isset($_SESSION['userId'])) {
  session_destroy();
  header('Location: login.php');
  die();
}
// Includiamo i nostri componenti della cartelle Controllers/Views
include __DIR__ . "/Controllers/steam.php";
$template = printRows($data);


include __DIR__ . "/Views/header.php";
?>
<main class="container my-4">
  <div class="d-flex justify-content-between align-items-center">
    <h3><?= "Ciao " . $_SESSION['name'] ?></h3>
    <a href="logout.php" class="btn btn-danger"> Logout</a>
  </div>

  <?php
  include __DIR__ . "/Views/table.php";
  ?>
</main>
<?php
include __DIR__ . "/Views/footer.php"
  ?>






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