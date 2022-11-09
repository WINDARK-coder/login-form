<?php

// it checks whether you logged in or not.
function isLogged(){
    if(!isset($_SESSION['logged_in'])){
        $_SESSION['error_message'] = "Please login for enter admin";
        header("Location:login.php");
    }
}
