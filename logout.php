<?php
session_start();
if (isset($_SESSION['userId'])) {
    $name = $_SESSION['name'];
    session_destroy();
    header('Location: login.php');

} else {
    header('Location: login.php');
}


include __DIR__ . "/Views/header.php";
?>
<main class="container my-4"></main>
<div class="d-flex justify-content-between align-items-center">
    <h3><?= "Arrivederci " . $name ?></h3>

</div>
</main>
<?php
include __DIR__ . "/Views/footer.php";
?>