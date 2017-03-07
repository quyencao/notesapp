<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online Notes</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">

    <!-- Custom Style -->
    <link rel="stylesheet" href="styling.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Navigation Bar  -->
    <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">Online Notes</a>
            </div>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#loginModal" data-toggle="modal">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Jumbotron with Sign up Button -->
    <div class="jumbotron" id="myContainer">
        <h1>Online Notes App</h1>
        <p>Your notes with you wherever you go.</p>
        <p>Easy to use, protects all your notes!</p>
        <button type="button" class="btn btn-lg green signup" data-target="#signupModal" data-toggle="modal">Sign up-It's free!</button>
    </div>

    <!-- Login Form -->
    <form method="post" id="loginForm">
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Login: </h4>
                    </div>
                    <div class="modal-body">
                        <!-- Sign up message for php file -->
                        <div id="loginmessage"></div>
                        <form>
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" class="form-control" id="loginemail" placeholder="Email" name="loginemail" maxlength="50">
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" class="form-control" id="loginpassword" placeholder="Password" name="loginpassword" maxlength="30">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <input class="btn green" type="submit" name="login" value="Login">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Signup Form -->
    <form method="post" id="signupForm">
        <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Sign up today and Start using our Online Notes App!</h4>
                    </div>
                    <div class="modal-body">
                        <!-- Sign up message for php file -->
                        <div id="signupmessage"></div>
                        <form>
                            <div class="form-group">
                                <label for="username" class="sr-only">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Username" name="username" maxlength="30">
                            </div>
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" maxlength="50">
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password" maxlength="30">
                            </div>
                            <div class="form-group">
                                <label for="password2" class="sr-only">Confirm Password</label>
                                <input type="password" class="form-control" id="password2" placeholder="Confirm Password" name="password2" maxlength="30">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <input class="btn green" type="submit" name="signup" value="Sign up">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <p>quyencao.890m.com Copyright &copy; 2016 - <?php $today = date("Y"); echo $today; ?></p>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>