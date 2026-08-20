<?php
session_start();

require_once(_DIR_ . '/../includes/activity-logger.php');

//definition('','');
define('BASEURL','http://localhost/IT34A');

define('DB_HOST', 'localhost');
define('DB_NAME', 'IT34A_lab_db');
define('DB_USER', 'root');
define('DB_PASS', '');

try{
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASS,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    //echo ("Connection Success");
    //echo ($user_id . $user_email . 'connect_db', 'success');
    //logActivity($pdo,$user_id,$user_email,'connect_db', 'success');

} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>