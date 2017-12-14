<?php include('registerlogin.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="EasySki.css">
</head>
<body>
<!-- create post form to recieve username and password
from user then sends to registerlogin.php for backend manipulation.
provides a link to register, if not a member . -->
<nav class="navbar navbar-expand-lg navbar-default navbar-custom">
            <a class="navbar-brand" href="#">EasySki</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <span class="navbar-text">Ski Resort Tickets At Your Fingertips</span>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="EasySki.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" data-target="#signInFloat">
                        <a class="nav-link" href="#" data-target="#signInFloat">Favorites</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-primary" href="Login.php">Log In</a>
                </form>
            </div>
    </nav>
<div class="container">
    <form class="form-horizontal" role="form" method="POST" action="../EasySki.php">
        <?php include('errors.php'); ?>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 ">
                <h2>Log In</h2>
                <hr>
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <label class="sr-only"></label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user-circle"></i></div>
                        <input type="text" name="user" class="form-control" id="user"
                                   placeholder="Username">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="password"></label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                            <input type="password" name="pass" class="form-control" id="pass"
                                   placeholder="Password">
                        </div>
                    </div>
                </div>
        </div>
        <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success" name="login"><i class="fa fa-sign-in"></i>Log In</button>
                    <a class="btn btn-link" href="Register.php">Don't have an account? Sign up!</a>
                </div>
        </div>
    </form>
  </div>
</body>
