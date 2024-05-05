<?php
// Facciamo partire la sezione con session_start()
session_start();

// Verifichiamo che l'utente abbia effettuato l'accesso e reindirizziamolo ad index.php
if (isset($_SESSION['userId'])) {
    header("Location: index.php");
}

// Includiamo i nostri dati della cartella Models
include __DIR__ . '/../Models/user.php';

// Primo caso se l'utente può accedere alla pagina e non ha effettuato l'accesso
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $authenticated = array_filter($users, function ($user) use ($email, $password) {
        return $user['email'] == $email && $user['password'] == $password;
    });
    var_dump($authenticated);

    // Se l'utente non viene trovato vuol dire che la sua password e email non sono salvate nel database.

    // Secondo caso dove l'utente prova ad entrare ma ha sbagliato ad inserire le credenziali
    if (count($authenticated) > 0) {
        $user = array_shift($authenticated);
        $_SESSION['userId'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['auth'] = true;
        header('Location: index.php');
    } else {
        header('Location: login.php?error=1');
    }

}





