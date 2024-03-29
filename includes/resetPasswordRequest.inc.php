<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    //Prepare variables needed

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = 'http://destini-h2020.com/realestate2021/resetPassword.php?selector='.$selector.'&validator='.bin2hex($token);

    $expires = date('U')+1800;

    $userEmail = $_POST['email'];

    //Establish database connection

    require_once 'dbh.inc.php';

    //Delete email if it already exists in database so that we dont have multiple matches with emails and tokens for one user

    $sql = 'DELETE FROM passwordreset WHERE passwordResetEmail = ?;';
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header('Location: ../resetPasswordRequest.php?error=stmtFailed1');
        exit();
    }else{
        mysqli_stmt_bind_param($stmt,'s',$userEmail);
        if(!mysqli_stmt_execute($stmt)){
            header('Location: ../resetPasswordRequest.php?error=stmtFailed2');
        }
    }

    //Insert the request to the database

    $sql = 'INSERT INTO passwordreset(passwordResetEmail,passwordResetSelector,passwordResetToken,passwordResetExpires) VALUES(?,?,?,?);';
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header('Location: ../resetPasswordRequest.php?error=stmtFailed2');
    }else{
        $hashedToken = password_hash($token,PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt,"sssi",$userEmail,$selector,$hashedToken,$expires);
        if(!mysqli_stmt_execute($stmt)){
            header('Location: ../resetPasswordRequest.php?error=stmtFailed2');
        }
        
    }

    mysqli_stmt_close($stmt);
    mysqli_stmt_close($stmt);


    //Sending the email
    $to = $userEmail;

    $subject = 'Reset your password for APM Smart Houses Website';

    $message = '<p>We have recieved your password reset request. Please click on the link below in order to reset your password. If you have not made 
    a request you can just ignore this email.</p>';
    $message .= '<p>The password reset link: </br>';
    $message .= '<a href"'.$url. '">'.$url.'</a></p>';

    $headers = "From: APM Smart Houses <apmsmarthousestesting@gmail.com>\r\n";
    $headers .= "Reply-To: apmsmarthousestesting@gmail.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    if(mail($to, $subject, $message, $headers)){
        header('Location: ../resetPasswordRequest.php?request=success');
        exit();
    }else{
        header('Location: ../resetPasswordRequest.php?request=fail');
        exit();
    }
    
}else{
    header('Location: ../resetPasswordRequest.inc.php');
    exit();
}