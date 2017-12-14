<?php
session_start();
$cookie_name = json_decode($_GET['cookie_name']); 
$cookie_value = unserialize($_COOKIE[$cookie_name]);
echo json_encode($cookie_value);
?>