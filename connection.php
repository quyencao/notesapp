<?php
    $link = mysqli_connect("localhost", "root", "", "notesapp");

    if(mysqli_connect_error()) {
        die("ERROR: Unable to connect: " . mysqli_connect_error());
    }