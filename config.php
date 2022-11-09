<?php

$db = mysqli_connect("localhost", "root", "", "database");
// here you create your own database and add there admin name and password(with md5 function).

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
