<?php

//Functions used in login.inc.php

function loginUser($conn, $email, $password){
    
    $userIDExists = emailExists($conn,$email);

    if($userIDExists === false){
        header('location: ../login.php?error=wrongLogin');
        exit();
    }
}

function emailExists($conn, $email){

}