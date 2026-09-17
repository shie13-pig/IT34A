<?php

function redirect($path){
    header("Location: " . BASEURL . $path);
    exit();
}
?>



<!-- -- upadte user table to add new column for user status -->