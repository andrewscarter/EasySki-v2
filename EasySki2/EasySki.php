<!DOCTYPE html>
<html>
    <head>
        <title>
            EasySki
        </title>
        <style type="text/css" media="screen">#calendar-events{ display: none; }</style>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="EasySki.css">
<!--        <script src="EasySki.js"></script>-->
        <script src="jquery-calendar/scripts/calendar.js"></script>
    </head>
    <body>
        <!-- Navigation of the Site -->
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-primary" href="users/Login.php">Log In</a>
                </form>
            </div>
        </nav>
        <!-- Display Resorts and Narrow Down -->
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="input-group">           
                            <input id="autocomplete" type="text" class="form-control" placeholder="Resort">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="input-group">           
                            <input id="start_date" type="date" class="form-control">
                            <button id="submit">Submit</button>
                        </div>
                    </div>
                    <div class="col-lg-3">
                   
                    </div>
                </div>
            </div>
            <div class="col-lg-5" id="resort_display">
            <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                       <button class="btn btn-primary-outline" id="favorite">&#x2606;</button>
                    </div>
                    <div class="card-body">
                        <p class="card-title"></p>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" offset="">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary-outline" id="favorite">&#x2606;</button>
                    </div>
                    <div class="card-body">
                        <p class="card-title"></p>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" offset="">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary-outline" id="favorite">&#x2606;</button>
                    </div>
                    <div class="card-body">
                        <p class="card-title"></p>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary-outline" id="favorite">&#x2606;</button>
                    </div>
                    <div class="card-body">
                        <p class="card-title"></p>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" offset="">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary-outline" id="favorite">&#x2606;</button>
                    </div>
                    <div class="card-body">
                        <p class="card-title"></p>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" offset="">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary-outline" id="favorite">&#x2606;</button>
                    </div>
                    <div class="card-body">
                        <p class="card-title"></p>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            </div>
                <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary-outline" id="favorite">&#x2606;</button>
                    </div>
                    <div class="card-body">
                        <p class="card-title"></p>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" offset="">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary-outline" id="favorite">&#x2606;</button>
                    </div>
                    <div class="card-body">
                        <p class="card-title"></p>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" offset="">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary-outline" id="favorite">&#x2606;</button>
                    </div>
                    <div class="card-body">
                        <p class="card-title"></p>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            </div>
            </div>
        
        <div class="col lg-5 offset ">
            <div id="dayHeading"><h2></h2></div>
            <p></p>
            <button class="btn btn-primary-outline" id="previousMonth">Previous Month</button>
            <button class="btn btn-primary-outline"  id="nextMonth">Next Month</button>
            <div id="calendar"></div>
            <div id="calendar-events"></div>
            <div id="output"></div>
            <iframe src="https://www.google.com/maps/d/embed?mid=1LtgLYclPJ1onQFSyNLP7Rf-lijW41Snw" width="450" height="450"></iframe>
        </div>
        </div>
        <div id="price_div">THIS IS PRICE DIV</div>
        <!-- Modal Box for Login/Signup -->
        <div class="modal fade" id="signInFloat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" data-target="signUpButton" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Sign In/Sign Up</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#SignIn" data-toggle="tab">Sign In</a></li>
                                <li><a href="#SignUp" data-toggle="tab">Sign Up</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="Login">
                            </div>
                            <div class="tab-pane" id="Registration">
                                <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <select class="form-control">
                                                    <option>Mr.</option>
                                                    <option>Ms.</option>
                                                    <option>Mrs.</option>
                                                </select>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="button" class="btn btn-primary btn-sm">Continue</button>
                                        <button type="button" class="btn btn-default btn-sm">Cancel</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
