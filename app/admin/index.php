<?php
require 'C:\xampp\htdocs\IT34A\config\config.php';
require 'C:\xampp\htdocs\IT34A\config\config/functions.php';

if (isset($_SESSION['user_id'])){
    hear('Location: ' . BASE_URL . '/app/ . $_SESSION['user_role'] . '/index.php');
    exit;
}


$error= '';

if($_SERVER['REQUEST METHOD'] === 'POST'){
$login = trim($_POST['login'] ?? '');
$password = $_POST['password'] ?? '');

if(loginUser($pdo,$login,$password)){
    header('Location: '. BASE_URL . '/app/'. $_SESSION['user_role']. '/index.php');
    exit;
}
    $error = 'Invalid login credentials';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Admin</h1>
    <form method="POST">
        <label> Username or Email</label>
        <input type="text"
        name="login"
        required
    >
    <br>
    <label>Password</label>
    <input type="password"
        name="password"
        required
    >
    <br>
    <button type="submit">Sign In</button>
</form>
</body>
</html>