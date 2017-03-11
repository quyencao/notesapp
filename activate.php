
<!DOCTYPE html>
<html>
  <head>
    <title>Contact Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->

    <style>
      .contactForm {
    border: 1px solid purple;
        margin-top:50px;
        border-radius: 19px;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-offset-1 col-sm-10 contactForm">
          <h1>Account Activation</h1>
            <?php

                session_start();

                include("connection.php");

                // check if email and key is submited
                if(!isset($_GET["email"]) || !isset($_GET["key"])) {
                    "<div class='alert alert-danger'>There was an error! Please click on activation you received by email.</div>";
                    exit;
                }

                // Get data
                $email = $_GET["email"];
                $key = $_GET["key"];

                // prepare for query
                $email = mysqli_real_escape_string($link, $email);
                $key = mysqli_real_escape_string($link, $key);

                // update user activation field
                $sql = "UPDATE users SET activation='activated' WHERE email = '$email' AND activation = '$key' LIMIT 1";

                $result = mysqli_query($link, $sql);

                if(mysqli_affected_rows($link) == 1) {
                    echo "<div class='alert alert-success'>You account has been activated. </div>";
                    echo "<a href='index.php' class='btn btn-success btn-lg' type='button'>Login</a>";
                } else {
                    echo "<div class='alert alert-danger'>You account could not be activated. Try again later.</div>";
                }
            ?>

        </div>
      </div>
    </div>
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
  </body>
</html>
