<?php

//Functions used in login.inc.php

//Function to login user
function loginUser($conn, $email, $password){
    
    $userIDExists = emailExists($conn,$email);

    if($userIDExists === false){
        header('location: ../login.php?error=wrongLogin');
        exit();
    }

    //$passwordHashed = $userIDExists['password'];
    //$checkPassword = password_verify($password,$passwordHashed);

    //if($checkPassword === false){
        //header("Location: ../login.php?error=wrongPassword");
        //exit();
    //}else if($checkPassword === true){
        session_start();
        $_SESSION['userID'] = $userIDExists['userID'];
        $_SESSION['firstname'] = $userIDExists['firstname'];
        $_SESSION['lastname'] = $userIDExists['lastname'];
        $_SESSION['telephone'] = $userIDExists['phoneNo'];
        $_SESSION['email'] = $userIDExists['email'];
        $_SESSION['role'] = $userIDExists['role'];
        header('Location: ../index.php');
        exit();
        
    //}
}

//Function to check if user exists in database
function emailExists($conn, $email){
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header('Location: ../login.php?error=stmtFailed');
    }

    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}