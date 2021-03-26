<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once 'dbh.inc.php';
    $userID = (int)$_SESSION['userID'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $repeatNewPassword = $_POST['repeatNewPassword'];
    $newsletter = $_POST['newsletter'];


    //Error handlers
    if ($_POST['currentPassword'] != '') {
        //check if current passoword matches the one in the database


        $sql = "SELECT password FROM users WHERE userID = $userID ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('location: ../editProfile.php?error=stmtFailed1');
            exit();
        }

        mysqli_stmt_bind_param($stmt, "i", $userID);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            if ($currentPassword != $row['password']) {
                header('location: ../editProfile.php?error=currentPasswordWrong');
                exit();
            }
        } else {
            header('location: ../editProfile.php?error=somethingWrong');
        }

        mysqli_stmt_close($stmt);

        //check if new password and repeat new password are the same
        if ($newPassword != $repeatNewPassword) {
            header('location: ../editProfile.php?error=passwordsDontMatch ');
            exit();
        }
    }


    //Update field in database
    $sql = "UPDATE users SET firstname = ? ,lastname = ?, phoneNo = ?, email = ?, password=? WHERE  userID = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../editProfile.php?error=stmtFailed2');
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssissi", $firstname, $lastname, $telephone, $email, $hashedPassword, $userID);

    if (!mysqli_stmt_execute($stmt)) {
        header('Location: ../editProfile.php?stmtFailed3');
    } else {
    }

    mysqli_stmt_close($stmt);


    //Update session variables
    $sql = "SELECT firstname, lastname, phoneNo, email FROM users WHERE userID = ? ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../editProfile.php?error=stmtFailed1');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssi", $firstname, $lastname, $telephone, $email, $userID);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['telephone'] = $row['phoneNo'];
        $_SESSION['email'] = $row['email'];

        header('Location: ../editProfile.php?update=successful');
        exit();
    } else {
        header('location: ../editProfile.php?error=somethingWrong');
    }
}
