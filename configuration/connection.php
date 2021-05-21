<?php

$conn = mysqli_connect("localhost", 'ngo', 'ngo123', 'ngo');

if (!$conn){
    echo "There is a problem in " . mysqli_connect_error();
}
