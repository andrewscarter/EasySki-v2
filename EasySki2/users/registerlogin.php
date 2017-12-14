<?php

session_start();
// used to contain errors. they are pushed on
$errors = array(); 

// variables to hold server connection info
$servername = "classroom.cs.unc.edu";
$username = "lukeatha";
$password = "Lathans8!";
$myDatabase = "lukeathadb";

// connect to db
$conn = new mysqli($servername, $username, $password, $myDatabase);

// REGISTER USER    
/* this portion of the code is used to register new users.
 * waits for POST-register ajax then reads in 4 parameters
 * (1) username, (2) email, (3) password, and (4) confirming password.
 * 
 * checks to make sure all parameters are there and that the
 * two passwords are the same. If so, the password is encrypted using
 * hash md5, inserted into the db. Afterwards, sets session username
 * as the entered username.
 * 
 * The redirects to main page
 */
if (isset($_POST['register'])) {
    // username and password sent from form
    $myusername=$_POST['user'];
    $myemail=$_POST['email'];
    $mypassword1=$_POST['pass1'];
    $mypassword2=$_POST['pass2'];

    /*
    $myusername = mysqli_real_escape_string($myusername);
    $myemail = mysqli_real_escape_string($myemail);
    $mypassword1 = mysqli_real_escape_string($mypassword1);
    $mypassword2 = mysqli_real_escape_string($mypassword2);
    */
    
    if (empty($myusername)) { 
        array_push($errors, "Username is required"); 
    }
    if (empty($myemail)) { 
        array_push($errors, "Email is required"); 
    }
    if (empty($mypassword1)) { 
        array_push($errors, "Password is required"); 
    }
    if ($mypassword1 != $mypassword2) {
        array_push($errors, "The two passwords do not match");
    }

    // If result matched, table row must be 1 row
    if(count($errors==0)){
        //encrypt the password before saving in the database
        $mypassword = md5($mypassword1);
        // we can change the attriubtes here as needed
        $sql = "INSERT INTO Users (user, email, pass) 
  			  VALUES('$myusername', '$myemail', '$mypassword')";
        $conn->query($sql);
        $_SESSION['username'] = $myusername;
        $_SESSION['success'] = "You are now logged in";
        // we can change this as needed
        header('location: ../EasySki.html');
    } else {
        echo "Invaild Username or Password";
    }
}

// LOGIN USER
/* This section of the code is used for typcial login.
 * takes in username and password, then checks to make
 * sure they're not empty. 
 * 
 *  If no errors, then processed to access db for respective
 *  profile. Then sets username as $username and sends success
 *  message. Redirects to EasySki.php
 */ 
if (isset($_POST['login'])) {
    $username=$_POST['user'];
    $password=$_POST['pass'];
    
    //    $username = mysql_real_escape_string($username);
    //    $password = mysql_real_escape_string($password);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    
    if (count($errors) == 0) {
        $password = md5($password);
        $sql = "SELECT * FROM Users WHERE user='$username' AND pass='$password'";
        $results = $conn->query($sql);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: ../EasySki.html');
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

?>
