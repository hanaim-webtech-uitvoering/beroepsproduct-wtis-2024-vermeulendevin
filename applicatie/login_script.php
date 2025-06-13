<?php
require_once 'db_connectie.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = maakVerbinding();

    if (isset($_POST['register'])) {
        // Registratie
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        // Adresvelden combineren tot een enkele adresreeks
        $address = sprintf("%s, %s %s", $_POST['address'], $_POST['postcode'], $_POST['plaats']);

        $stmt = $conn->prepare("INSERT INTO [User] (username, password, first_name, last_name, address, role) VALUES (?, ?, ?, ?, ?, 'customer')");
        $stmt->execute([$username, $password, $first_name, $last_name, $address]);

        if ($stmt->rowCount() > 0) {
            header('Location: login.php');
            exit;
        } else {
            $_SESSION['error'] = "Er is een fout opgetreden bij het registreren. Probeer het opnieuw.";
            header('Location: login.php');
            exit;
        }

    } elseif (isset($_POST['login'])) {
        // Login
        $username = trim($_POST['username']);
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT * FROM [User] WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {

            $_SESSION['username'] = $username;
            $_SESSION['logged_in'] = true;
            $_SESSION['role'] = $user['role'];

            if ($user['role'] === 'customer') {
                header('Location: index.php');
                exit;
            } else if ($user['role'] === 'employee') {
                header('Location: personeelsprofiel.php');
                exit;
            }
        } else {
            $_SESSION['error'] = "Ongeldige gebruikersnaam of wachtwoord";
            header('Location: login.php');
            exit;
        }
    }
}
?>