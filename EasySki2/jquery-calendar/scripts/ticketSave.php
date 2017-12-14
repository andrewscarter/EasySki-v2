<?php
session_start();
$ticket = json_decode($_POST['tid']);

$user_name = $_SESSION['username']; 
$apple = 'orange';

//if(count(unserialize($_COOKIE['banana'])) < 1) { 
$cookie_value = unserialize($_COOKIE[$apple]);
$cookie_value[] = $ticket;
$cookie_value = serialize($cookie_value);
setcookie($apple, $cookie_value, time() + (86400 * 30), "/");
//} else {
//    $cookie_value[0] = serialize($ticket);
//    setcookie($apple, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
//}

//$cookie_value[0] = serialize($ticket);
//$apple = 'apple';
//setcookie($apple, serialize($ticket), time() + (86400 * 30), "/"); // 86400 = 1 day

// if there is a session (logged in), then enter
//if (isset($_SESSION['username'])) { 
//    $user_name = $_SESSION['username']; //assign username
//    print $user_name;
//    print $ticket;
//
//    if(!isset($_COOKIE['username'])){
//        setcookie($user_name, serialize($array($ticket)), time() + (86400 * 30), "/");
//    }else{
//        $cookie_value = $_COOKIE[$user_name];
//        $cookie_value = unserialize($cookie_value);
//        $cookie_value[] = $ticket;
//        $cookie_value = serialize($cookie_value);
//        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
//    }
//}
echo json_encode($_COOKIE['username']);
?>