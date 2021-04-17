<?php
//change to correct headers
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'dbh.inc.php';

    $selector = mysqli_real_escape_string($conn, $_POST['selector']);
    $validator = mysqli_real_escape_string($conn, $_POST['validator']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);
    $repeatPassword = mysqli_real_escape_string($conn, $_POST['rePass']);

    //error handlers

    if (empty($password) || empty($repeatPassword)) {
        header("Location: ../resetPassword.php?error=emptyInput");
        exit();
    } else if ($password != $repeatPassword) {
        header("Location: ../resetPassword.php?error=passwordDontMatch");
        exit();
    }

    //check token if it is expired
    $currentDate = (int)date("U");


    $sql = "SELECT * FROM passwordreset WHERE passwordResetSelector = '$selector' AND passwordResetExpires >= $currentDate;";

    $result = mysqli_query($conn, $sql);
    if (!$row = mysqli_fetch_assoc($result)) {
        header("Location: ../resetPasswordRequest.php?error=tryAgainReset3");
        exit();
    } else {
        $tokenBinary = hex2bin($validator);
        $tokenCheck = password_verify($tokenBinary, $row['passwordResetToken']);

        if ($tokenCheck === false) {
            header("Location: ../login.php?error=tryAgainReset1");
            exit();
        } else if ($tokenCheck === true) {

            $tokenEmail = $row['passwordResetEmail'];

            $sql = "SELECT * FROM users WHERE email=?";
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../resetPassword.php?error=stmtFailed2");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if (!$row = mysqli_fetch_assoc($result)) {
                    header("Location: ../resetPasswordRequest.php?error=tryAgainReset2");
                    exit();
                } else {
                    $sql = 'UPDATE users SET password =? WHERE email=?;';
                    $stmt = mysqli_stmt_init($conn);

                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: ../resetPassword.php?error=stmtFailed3");
                        exit();
                    } else {
                        $newHashedPassword = password_hash($password, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, "ss", $newHashedPassword, $tokenEmail);
                        mysqli_stmt_execute($stmt);

                        $sql = "DELETE FROM passwordreset WHERE passwordResetEmail = ?; ";
                        $stmt = mysqli_stmt_init($conn);

                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            header("Location: ../resetPassword.php?error=stmtFailed4");
                            exit();
                        } else {
                            mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                            mysqli_stmt_execute($stmt);
                            header("location:../index.php?resetPassword=success");
                        }
                    }
                }
            }
        }
    }
} else {
    header("Location: ../resetPassword.php");
    exit();
}
