<?php
// Facciamo partire la sezione con session_start()
session_start();

// Verifichiamo che l'utente abbia effettuato l'accesso

include __DIR__ . '/../Models/user.php';

// Primo caso se l'utente può accedere alla pagina

if (!empty($_POST['email)']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $authenticated = array_filter($users, function ($user) use ($email, $password) {
        return $user['email'] == $email && $user['password'] == $password;
    });
    var_dump($authenticated);

    // Se non trova l'utente vuol dire che la sua password e email non sono salvate nel database
    if (count($authenticated) > 0) {
        $user = array_shift($authenticated);
        $_SESSION['userId'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        header('Location: index.php');
        // Secondo caso dove l'utente prova ad entrare ma ha sbagliato ad inserire le credenziali
    } else {
    }
}
