<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Profile</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">

    <!-- Custom Style -->
    <link rel="stylesheet" href="styling.css">

    <style>
        #container {
            margin-top: 100px;
        }

        #allnote, #done, #notePad {
            display: none;
        }

        .buttons {
            margin-bottom: 20px;
        }

        textarea {
            width: 100%;
            max-width: 100%;
            font-size: 16px;
            line-height: 1.5em;
            border-left-width: 20px;
            border-left-color: #CA3DD9;
            color: #CA3DD9;
            background-color: #FBEFFF;
            padding: 10px;
        }

        tr {
            cursor: pointer;
        }
    </style>

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
                <li><a href="#">Profile</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Contact us</a></li>
                <li class="active"><a href="#">My Notes</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#loginModal" data-toggle="modal">Logged in at <b>username</b></a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Container -->
<div class="container" id="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2>General Account Settings</h2>
            <div class="table-responsive">
                <table class="table table-hover table-condensed table-bordered">
                    <tr data-target="#updateusername" data-toggle="modal">
                        <td>Username</td>
                        <td>Development Island</td>
                    </tr>
                    <tr data-target="#updateemail" data-toggle="modal">
                        <td>Email</td>
                        <td>boy20195@gmail.com</td>
                    </tr>
                    <tr data-target="#updatepassword" data-toggle="modal">
                        <td>Password</td>
                        <td>hidden</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Update Username -->
<form method="post" id="updateusernameform">
    <div class="modal fade" id="updateusername" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Username: </h4>
                </div>
                <div class="modal-body">
                    <!-- Login message for php file -->
                    <div id="updateusernamemessage"></div>
                    <form>
                        <div class="form-group">
                            <label for="username">Username: </label>
                            <input type="text" class="form-control" id="username" name="username" maxlength="30" value="username value">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <input class="btn green" type="submit" name="updateusername" value="Submit">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Update Email -->
<form method="post" id="updateemailform">
    <div class="modal fade" id="updateemail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit new email: </h4>
                </div>
                <div class="modal-body">
                    <!-- Login message for php file -->
                    <div id="updateemailmessage"></div>
                    <form>
                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="email" class="form-control" id="email" name="email" maxlength="50" value="email value">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <input class="btn green" type="submit" name="updateemail" value="Submit">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Update Password -->
<form method="post" id="updatepasswordform">
    <div class="modal fade" id="updatepassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Current and New Password: </h4>
                </div>
                <div class="modal-body">
                    <!-- Login message for php file -->
                    <div id="updatepasswordmessage"></div>
                    <form>
                        <div class="form-group">
                            <label for="currentpassword" class="sr-only">Current Password: </label>
                            <input type="password" class="form-control" id="currentpassword" name="currentpassword" maxlength="30" placeholder="Your Current Password">
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Choose a Password: </label>
                            <input type="password" class="form-control" id="password" name="password" maxlength="30" placeholder="Choose a Password">
                        </div>
                        <div class="form-group">
                            <label for="password2" class="sr-only">Confirm Password: </label>
                            <input type="password" class="form-control" id="password2" name="password2" maxlength="30" placeholder="Confirm password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <input class="btn green" type="submit" name="updatepassword" value="Submit">
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