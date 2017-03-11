<?php
    session_start();

    // Connect database
    include "connection.php";

    // Check error user input
    $missing_username = "<p><strong>Please enter a username!</strong></p>";
    $missing_email = "<p><strong>Please enter your email address!</strong></p>";
    $invalid_email = "<p><strong>Please enter a valid emial address!</strong></p>";
    $missing_password = "<p><strong>Please enter a Password!</strong></p>";
    $invalid_password = "<p><strong>Your password should be at least 6 characters long 
            and include one capital letter and one number!</strong></p>";
    $different_password = "<p><strong>Password don't match!</strong></p>";
    $missing_password2 = "<p><strong>Please confirm your password</strong></p>";

    $errors = "";
    // Get user input
    // username
    if(empty($_POST["username"])) {
        // Add errors
        $errors .= $missing_username;
    } else {
        // filter username
        $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
    }

    // email
    if(empty($_POST["email"])) {
        // add errors
        $errors .= $missing_email;
    } else {
        // filter email
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

        // invalid email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors .= $invalid_email;
        }
    }

    // password
    if(empty($_POST["password"])) {
        // add errors
        $errors .= $missing_password;
    } else if (!(strlen($_POST["password"]) >= 6 AND
        preg_match("/[A-Z]/", $_POST["password"]) AND
        preg_match("/[0-9]/", $_POST["password"]))) {
        // at least 6 characters and include 1 digit, 1 character
        $errors .= $invalid_password;
    } else {
        // filter password
        $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);

        // missing password 2
        if(empty($_POST["password2"])) {
            // missing password 2
            $errors .= $missing_password2;
        } else {
            // filter password 2
            $password2 = filter_var($_POST["password2"], FILTER_SANITIZE_STRING);

            // password not match
            if($password !== $password2) {
                $errors .= $different_password;
            }
        }
    }

    // If any errors print error
    if($errors) {
        $resultMessage = "<div class='alert alert-danger'>$errors</div>";
        echo $resultMessage;
    } else {
        // No errors
        // Prepare variable for query
        $username = mysqli_real_escape_string($link, $username);
        $email = mysqli_real_escape_string($link, $email);
        $password = mysqli_real_escape_string($link, $password);

        $password = md5($password); // 32 characters
        // Check if username exist
        $sql = "SELECT * FROM users WHERE username = '$username'";
        // run query
        $result = mysqli_query($link, $sql);

        if (!$result) {
            // Query fail
            echo "<div class='alert alert-danger'>Error running the query!</div>";
            // Exit from here
            exit;
        }

        // result number rows
        $results = mysqli_num_rows($result);

        if($results != 0) {
            echo "<div class='alert alert-danger'>That's username is already registered. Do you want to log in?</div>";
            exit;
        }

        // Check email exist
        $sql = "SELECT * FROM users WHERE email = '$email'";
        // run query
        $result = mysqli_query($link, $sql);

        if (!$result) {
            // Query fail
            echo "<div class='alert alert-danger'>Error running the query!</div>";

            echo "<div class='alert alert-danger'>".mysqli_error($link)."</div>";

            // Exit from here
            exit;
        }

        // result number rows
        $results = mysqli_num_rows($result);

        if($results != 0) {
            echo "<div class='alert alert-danger'>That's email is already registered. Do you want to log in?</div>";
            exit;
        }

        // Create a unique activation code to send user mail
        $activationKey = bin2hex(openssl_random_pseudo_bytes(16));

        // Insert activation key in user table
        $sql = "INSERT INTO users (username, email, password, activation) 
            VALUES ('$username', '$email', '$password', '$activationKey')";

        // Run query
        $result = mysqli_query($link, $sql);

        if(!$result) {
            echo "<div class='alert alert-danger'>There was error insert user in database!</div>";
            exit;
        }

        $message = "Please click on this link to activate your account:\n\n";
        $message .= "http://quyencao.890m.com/notesapp/activate.php?email=" . urldecode($email) . "&key=$activationKey";
        // Send user a activate mail
        if(mail($email, "Confirm your Registration", $message, "From: " . "quyen.cm1995@gmail.com")) {
            echo "<div class='alert alert-success'>Thank you for registering! A confirmation email has been sent to $email. Please
                click link to activate your account.</div>";
        }
    }

?>