<?php
require_once 'db_connectie.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = maakVerbinding();

    if (isset($_POST['register'])) {
        // Registration
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $role = $_POST['role'];

        $stmt = $conn->prepare("INSERT INTO [User] (username, password, first_name, last_name, address, role) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$username, $password, $first_name, $last_name, $address, $role]);
        echo "Registration successful!";
    } elseif (isset($_POST['login'])) {
        // Login
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT * FROM [User] WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            if ($user['role'] === 'customer') {
                header('Location: index.php');
                exit;
            } else if ($user['role'] === 'employee') {
                header('Location: personeelsprofiel.php');
                exit;
            }
        } else {
            echo "Invalid username or password.";
        }
    }
}
?>