<?php

$con = mysqli_connect("localhost","quiz","MrGodLP07#", "quiz");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>