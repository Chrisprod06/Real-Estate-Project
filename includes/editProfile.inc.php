<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    require_once 'dbh.inc.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $repeatNewPassword = $_POST['repeatNewPassword'];
    $newsletter = $_POST['newsletter'];

    //Error handlers

    //check if current passoword matches the one in the database
    $userID = $_SESSION['userID'];

    $sql = "SELECT password FROM users WHERE userID = $userID ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../editProfile.php?error=stmtFailed');
    }

    mysqli_stmt_bind_param($stmt, "i", $userID);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
       if ($currentPassword!= $row['password']){
        header('location: ../editProfile.php?error=currentPasswordWrong');
        exit();
       }
    } else {
        header('location: ../editProfile.php?error=somethingWrong');
    }

    mysqli_stmt_close($stmt);

    //check if new password and repeat new password are the same
    if ($newPassword != $repeateNewPassword) {
        header('location: ../editProfile.php?error=passwordsDontMatch ');
        exit();
    }

    //Update field in database
    $sql = "UPDATE users SET userID = ?, firstname = ? ,lastname = ?, phoneNo = ?, email = ?, password=? WHERE  userID = $userID";
    $stmt = mysqli_stmt_init($conn)
}
