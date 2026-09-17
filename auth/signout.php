<?php
require_once__DIR__ . '/../../C:\xampp\htdocs\IT34A\config\config.php';

$_SESSION =[];
SESSION_destroy();

header('Location: '. BASE_URL . '/index.php');
exit;
?>