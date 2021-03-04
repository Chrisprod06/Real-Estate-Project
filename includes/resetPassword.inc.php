<?php
//change to correct headers
if(isset($_POST['submitResetPassword'])){

    $selector = $_POST['selector'];
    $validator = $_POST['validator'];
    $password = $_POST['pass'];
    $repeatPassword = $_POST['rePass'];

    //error handlers

    if(empty($password) || empty($repeatPassword)){
       header("Location: ../resetPassword.php?error=stmtFailed");
       exit();

    }else if($password!=$repeatPassword){
        header("Location: ../resetPassword.php?error=passwordDontMatch");
        exit();
    }

    //check token if it is expired
    $currentDate = date("U");
    require_once 'dbh.inc.php';

    $sql = "SELECT * passwordreset WHERE passwordResetSelector=? AND passwordResetExpires>= ? ;";
    $stmt = mysqli_init($conn);

    if(!mysqli_prepare($stmt,$sql)){
        header("Location: ../resetPassword.php?error=stmtFailed");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "ss",$selector,$currentDate);
        mysqli_stmt_execute($stmt);
        
        $result = mysqli_stmt_get_result($stmt);
        if(!$row = mysqli_fetch_assoc($result)){
            header("Location: ../login.php?error=tryAgainReset");
            exit();
        }else{
            $tokenBinary = hex2bin($validator);
            $tokenCheck = password_verify($tokenBinary,$row['passwordResetToken']);

            if($tokenCheck === false){
                header("Location: ../login.php?error=tryAgainReset");
                exit();
            }else if ($tokenCheck === true){

                $tokenEmail = $row['passwordResetEmail'];

                $sql = "SELECT * FROM users WHERE email=?";
                $stmt = mysqli_init($conn);

                if(!mysqli_prepare($stmt,$sql)){
                    header("Location: ../resetPassword.php?error=stmtFailed");
                    exit();
                }else{
                    mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    if(!$row = mysqli_fetch_assoc($result)){
                        header("Location: ../login.php?error=tryAgainReset");
                        exit();
                    }else{
                        $sql = 'UPDATE users SET password =? WHERE email=?;';
                        $stmt = mysqli_init($conn);

                if(!mysqli_prepare($stmt,$sql)){
                    header("Location: ../resetPassword.php?error=stmtFailed");
                    exit();
                }else{
                    $newHashedPassword = password_hash($password,PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt,"ss",$newHashedPassword,$tokenEmail);
                    mysqli_stmt_execute($stmt);

                    $sql = "DELETE FROM passwordreset WHERE passwordResetEmail = ?; ";
                    $stmt = mysqli_init($conn);
                
                    if(!mysqli_prepare($stmt,$sql)){
                        header("Location: ../resetPassword.php?error=stmtFailed");
                        exit();
                    }else{
                        mysqli_stmt_bind_param($stmt, "s",$tokenEmail);
                        mysqli_stmt_execute($stmt);
                        header("location:../login.php?resetPassword=success");
                        
                    }

                    }
                }
                    
                }

            }
        }


    }


}else{
    header("Location: ../resetPassword.php");
    exit();
}