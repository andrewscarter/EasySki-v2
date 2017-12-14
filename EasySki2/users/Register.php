<?php include('registerlogin.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="EasySki.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-default navbar-custom">
            <a class="navbar-brand" href="#">EasySki</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <span class="navbar-text">Ski Resort Tickets At Your Fingertips</span>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
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
<!-- post form which takes username, email, password1,
confimation password, then sends to registerlogin.php for
registration process. Login in user upon success. Returns to
EasySki.html . -->
  <div class="container">
    <form class="form-horizontal" role="form" method="POST" action="../EasySki.php">
        <?php include('errors.php'); ?>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 ">
                <h2>Register</h2>
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
                                   placeholder="Username" required value="<?php echo $username; ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="email"></label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                            <input type="text" name="email" class="form-control" id="email"
                                   placeholder="you@example.com" required value="<?php echo $email; ?>">
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
                            <input type="password" name="pass1" class="form-control" id="pass1"
                                   placeholder="Password" required value="">
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
                            <input type="password" name="pass2" class="form-control" id="pass2"
                                   placeholder="Confirm Password" required value="">
                        </div>
                    </div>
                </div>
        </div>
        <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success" name="register"><i class="fa fa-user-plus"></i>Register</button>
                    <a class="btn btn-link" href="Login.php">Already a member? Sign In</a>
                </div>
        </div>
    </form>
  </div>
</body>
</html>
