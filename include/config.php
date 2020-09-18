<?php

if ($connection = mysqli_connect("localhost", "root", "", "donatetheblood")) {
    
} else {
    die("Database is not connected." . mysqli_connect_error());
}
?>    
