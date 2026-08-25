<?php
require_once('C:\xampp\htdocs\IT34A\config\config.php');

$user_id = "root" ?? null;
$user_email = "root" ?? null;

$success = logActivity($pdo,$user_id,$user_email,'test_activity','success');

if($success){
    echo "Activity log inserted successfully";
} else {
    echo "Failed to insert activity log";
}
?>